<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temppoinquery extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		       $this->load->model('admin/Temppoinquerymanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/temppoinquery/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Temppoinquerymanage->get_tatal();
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
				
		   $data['temppoinquery']=$this->Temppoinquerymanage->temppoinquery_view($config['per_page'] , $offset);
		   $this->load->view('admin/temppoinquery_view',$data);
		 
		   
		  
	  }
	  

// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Temppoinquerymanage');
			$delete_sussess=$this->Temppoinquerymanage->temppoinquery_delete($_REQUEST['id'])  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('temppoinquery', 'Records deleted successfully');
		       redirect(base_url('admin/temppoinquery/view'));
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
								$this->load->model('admin/Temppoinquerymanage');
								$delete_sussess=$this->Temppoinquerymanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('temppoinquery', 'Records deleted successfully');
									   redirect(base_url('admin/temppoinquery/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('temppoinquery', 'Nothing to delete');
									   redirect(base_url('admin/temppoinquery/view'));
						   }			 
					   
					}
				  // ------------------------------- Bulk Action  deactivate   ------------------------------	 
			
		   }
	  
	  
}

?>
