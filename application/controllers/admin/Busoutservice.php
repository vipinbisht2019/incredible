<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busoutservice extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view(){
		        $this->load->model('admin/Busoutservicemanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/busoutservice/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Busoutservicemanage->get_tatal();
			//---------------------------- optional parameters of paging  ---------------------------------------------------	
				$config['full_tag_open'] = '<ul class="pagination pull-right">';
				$config['full_tag_close'] = '</ul>';
				$config['first_link'] = 'First';
                $config['first_tag_open'] = '<li>';
                $config['first_tag_close'] = '</li>';
				$config['last_link'] = 'Last';
                $config['last_tag_open'] = '<li>';
                $config['last_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';
				$config['next_link'] = 'Next &gt;';
				$config['next_tag_open'] = '<li>';
				$config['next_tag_close'] = '</li>';
				$config['prev_link'] = '&lt; Prev';
				$config['prev_tag_open'] = '<li>';
				$config['prev_tag_close'] = '</li>';
				$config['cur_tag_open'] = '<li class="active"><a href="#">';
                $config['cur_tag_close'] = '</a></li>';
				$this->pagination->initialize($config); 
	            $offset=$this->uri->segment(4);
				
		     $data['busoutservice']=$this->Busoutservicemanage->busoutservice_view($config['per_page'] , $offset);
			 $data['bid']=$this->input->get('bid');
		     $this->load->view('admin/busoutservice_view',$data);
		 
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
  
	    //echo"------------".$this->input->post('flag');
		// die();
		 
	if($this->input->post('flag')=='yes') 
		   {
		        
		        $bid=$this->input->post('bid');
		   
		       // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
		   	    $this->load->model('admin/Busoutservicemanage');
				 $FareTypeName=$this->input->post('FareTypeName');
				if($this->Busoutservicemanage->check_duplicate($FareTypeName,$bid)) 
		             {

						    $this->load->model('admin/Busoutservicemanage');
							$data=$this->input->post('ServiceOfServiceDate');
							
							
							$insert=$this->Busoutservicemanage->busoutservice_add($data,$bid);
							if($insert==1)
							{
								$this->session->set_flashdata('busoutservice', 'Records added successfully');
								redirect(base_url('admin/busoutservice/view?bid='.$bid));
							 }
						
					   }
					 else
					   {

					   	 if(!$this->Busoutservicemanage->check_duplicate($FareTypeName,$bid))
							   {
							       $this->session->set_flashdata('busoutservice', 'date allready exists.Please choose another Source City');
							   }
                           
						  
							$data['bid']=$this->input->post('bid');
							$data['ServiceOfServiceDate']=$this->input->post('ServiceOfServiceDate');
							$this->load->view('admin/busoutservice_add',$data);
					   }  			
				
		     }
		   else
		     {
			        
						$data['bid']=$this->input->get('bid');	
						$data['ServiceOfServiceDate']=$this->input->post('ServiceOfServiceDate');
					    $this->load->view('admin/busoutservice_add',$data);
						   
		     }	
		 
	}

// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Busoutservicemanage');
			$delete_sussess=$this->Busoutservicemanage->busoutservice_delete($_REQUEST['id'])  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('busoutservice', 'Records deleted successfully');
		       redirect(base_url('admin/busoutservice/view'));
		     }	
	        
	  }  
	  
	  
	     // ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
	     // ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
	  	 // ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------	
		 	  
     public function bulk_action()
	     {
		     
		       // ------------------------------- Bulk Action  delete  ------------------------------		  	 
				if($this->input->post('Delete')=='Delete')
				    {
					   //----------------------------------------------   
					     $delete_id=$this->input->post('bb');
						 if(count($delete_id)>0)
						  {
						        $id_str=implode(",",$delete_id);
								$this->load->model('admin/Busoutservicemanage');
								$delete_sussess=$this->Busoutservicemanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('busoutservice', 'Records deleted successfully');
									   redirect(base_url('admin/busoutservice/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('busoutservice', 'Nothing to delete');
									   redirect(base_url('admin/busoutservice/view'));
						   }			 
					   
					}
				  // ------------------------------- Bulk Action  deactivate   ------------------------------	 
				 if($this->input->post('Deactivate')=='Deactivate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						        $id_str=implode(",",$id);
								$this->load->model('admin/Busoutservicemanage');
								$data['Status']='N';
								$delete_sussess=$this->Busoutservicemanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('busoutservice', 'Records deactivate successfully');
									   redirect(base_url('admin/busoutservice/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('busoutservice', 'Nothing to activate');
									   redirect(base_url('admin/busoutservice/view'));
						   }			 
					}
			  // ------------------------------- Bulk Action activate  ------------------------------			
				if($this->input->post('Activate')=='Activate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						        echo $id_str=implode(",",$id);
								$this->load->model('admin/Busoutservicemanage');
								$data['Status']='Y';
								$delete_sussess=$this->Busoutservicemanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('busoutservice', 'Records activated successfully');
									   redirect(base_url('admin/busoutservice/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('busoutservice', 'Nothing to activate');
									   redirect(base_url('admin/busoutservice/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
