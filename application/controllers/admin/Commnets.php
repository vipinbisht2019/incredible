<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commnets extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Commentsmanage');
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/commnets/view');
				$config['per_page'] = 30; 
				$config['total_rows'] =$this->Commentsmanage->get_tatal();
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
				$data['comments_view']=$this->Commentsmanage->comments_view($config['per_page'] , $offset);
			   $this->load->view('admin/comments_view',$data);
	
	 }
	 
	 
	public function delete()
	  {
			$this->load->model('admin/Commentsmanage');
			 $id=$this->input->get('id');
			$delete_sussess=$this->Commentsmanage->comments_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('commnets', 'Records deleted successfully');
		       redirect(base_url('admin/commnets/view'));
		     }	
	        
	  }   
	  
	  
	  
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
								$this->load->model('admin/Commentsmanage');
							foreach($delete_id as $id_str)
							  {	
								$delete_sussess=$this->Commentsmanage->admin_delete_bulk($id_str);
							  }	
								
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('commnets', 'Records deleted successfully');
									   redirect(base_url('admin/commnets/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('commnets', 'Nothing to delete');
									   redirect(base_url('admin/commnets/view'));
						   }			 
					   
					}
				  // ------------------------------- Bulk Action  deactivate   ------------------------------	 
				 if($this->input->post('Deactivate')=='Deactivate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						        
								$this->load->model('admin/Commentsmanage');
								$data['Status']='N';
								foreach($id as $id_str)
							    {	
								 $delete_sussess=$this->Commentsmanage->admin_deactivate_bulk($id_str,$data);
								}
											
									   $this->session->set_flashdata('commnets', 'Records deactivate successfully');
									   redirect(base_url('admin/commnets/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('commnets', 'Nothing to activate');
									   redirect(base_url('admin/commnets/view'));
						   }			 
					}
			  // ------------------------------- Bulk Action activate  ------------------------------			
				if($this->input->post('Activate')=='Activate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						      
								$this->load->model('admin/Commentsmanage');
								$data['Status']='Y';
								foreach($id as $id_str)
							      {
							        $delete_sussess=$this->Commentsmanage->admin_activate_bulk($id_str,$data);
								  } 
											
									   $this->session->set_flashdata('commnets', 'Records activated successfully');
									   redirect(base_url('admin/commnets/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('commnets', 'Nothing to activate');
									   redirect(base_url('admin/commnets/view'));
						   }			 
					}
				
			
		 }
	  
	  
	  
	  
}
?>