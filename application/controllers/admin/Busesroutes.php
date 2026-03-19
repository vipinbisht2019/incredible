<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busesroutes extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view(){
		       $this->load->model('admin/Busesroutesmanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/busesroutes/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Busesroutesmanage->get_tatal();
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
				
		   $data['busesroutes']=$this->Busesroutesmanage->busesroutes_view($config['per_page'] , $offset);
		   $this->load->view('admin/busesroutes_view',$data);
		 
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
	    //echo"------------".$this->input->post('flag');
		  
		
	if($this->input->post('flag')=='yes') 
		   {
		      
		   
		       // -------------------------- form vaildation CityId ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('RoutesName', 'routes name', 'required');
				if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Busesroutesmanage');
							$data=$_POST;
							
								
							
							unset($data['flag']);
							unset($data['smt_enter']);
							 unset($data['commission_id']);
							 unset($data['CommissionPrice']);
							unset($data['CityId']);
							$insert_id=$this->Busesroutesmanage->busesroutes_add($data);
							if($insert_id > 0)
							 {
							 
							    //-----------------------------------------------Agents commission-----------------------------------------------------------------  
								    $data_11=$this->input->post('commission_id');
								    $data_12=$this->input->post('CommissionPrice');
								    $this->Busesroutesmanage->buses_agentscommission_add($data_11,$data_12,$insert_id,'no');
							   //------------------------------------------------------------------------------------
								
								    $data_1=$this->input->post('CityId');
								    $this->Busesroutesmanage->busesroutes_stop_add($data_1,$insert_id,'no');
							 	    $this->session->set_flashdata('busesroutes', 'Records added successfully');
								    redirect(base_url('admin/busesroutes/view'));
							 }
						
					   }
					 else
					   {
					      $this->load->model('admin/Busesroutesmanage');
						  $data['location_dropdown']=$this->Busesroutesmanage->dropdown_location();
						  $data['commission_type']=$this->Busesroutesmanage->get_commission();
					      $this->load->view('admin/busesroutes_add',$data);
					   }  			
				
		      }
		    else
		      {
						  $this->load->model('admin/Busesroutesmanage');
						  $data['location_dropdown']=$this->Busesroutesmanage->dropdown_location();
						  $data['commission_type']=$this->Busesroutesmanage->get_commission();
					      $this->load->view('admin/busesroutes_add',$data);
						   
		      }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Busesroutesmanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('RoutesName', 'routes name', 'required');
			       $id=$this->input->post('id');
					if($this->form_validation->run() == true) 
					  {
				  
							 $data=$_POST;
							 unset($data['flag']);
							 unset($data['smt_enter']);
							 unset($data['id']);
							  unset($data['commission_id']);
							 unset($data['CommissionPrice']);
							 unset($data['CityId']);
							 $this->Busesroutesmanage->busesroutes_edit_data($data,$id);
							 					  
							//-----------------------------------------------Agents commission-----------------------------------------------------------------  
								  $data_11=$this->input->post('commission_id');
								  $data_12=$this->input->post('CommissionPrice');
								  $this->Busesroutesmanage->buses_agentscommission_add($data_11,$data_12,$id,'yes');
							 
							//--------------------------------- add Route city -----------------------------------------------   
							      $data_1=$this->input->post('CityId');
								  $insert_id=$this->input->post('id');
								  $this->Busesroutesmanage->busesroutes_stop_add($data_1,$insert_id,'yes');
			
							 
							 
							 $this->session->set_flashdata('busesroutes', 'Records updated successfully');
							 redirect(base_url('admin/busesroutes/view'));
						 
					  }
					 else
					  {
						    $data['edit_busesroutes']=$this->Busesroutesmanage->busesroutes_edit($id);
							$data['edit_busesroutes_city']=$this->Busesroutesmanage->busesroutes_city_edit($id);
							$data['location_dropdown']=$this->Busesroutesmanage->dropdown_location();
							$data['commission_type']=$this->Busesroutesmanage->get_commission();
						    $this->load->view('admin/busesroutes_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
		  
		           $id=$this->input->get('id');
			     $data['edit_busesroutes']=$this->Busesroutesmanage->busesroutes_edit($id);
				 $data['edit_busesroutes_city']=$this->Busesroutesmanage->busesroutes_city_edit($id);
				 $data['commission_type_edit']=$this->Busesroutesmanage->buses_agentscommission_edit($id); 
				 
			     $data['location_dropdown']=$this->Busesroutesmanage->dropdown_location();
				 $data['commission_type']=$this->Busesroutesmanage->get_commission();
			     $this->load->view('admin/busesroutes_modify',$data);
	        
		  }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Busesroutesmanage');
			 $id=$this->input->get('id');
			$delete_sussess=$this->Busesroutesmanage->busesroutes_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('busesroutes', 'Records deleted successfully');
		       redirect(base_url('admin/busesroutes/view'));
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
								$this->load->model('admin/Busesroutesmanage');
								$delete_sussess=$this->Busesroutesmanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('busesroutes', 'Records deleted successfully');
									   redirect(base_url('admin/busesroutes/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('busesroutes', 'Nothing to delete');
									   redirect(base_url('admin/busesroutes/view'));
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
								$this->load->model('admin/Busesroutesmanage');
								$data['Status']='N';
								$delete_sussess=$this->Busesroutesmanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('busesroutes', 'Records deactivate successfully');
									   redirect(base_url('admin/busesroutes/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('busesroutes', 'Nothing to activate');
									   redirect(base_url('admin/busesroutes/view'));
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
								$this->load->model('admin/Busesroutesmanage');
								$data['Status']='Y';
								$delete_sussess=$this->Busesroutesmanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('busesroutes', 'Records activated successfully');
									   redirect(base_url('admin/busesroutes/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('busesroutes', 'Nothing to activate');
									   redirect(base_url('admin/busesroutes/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
