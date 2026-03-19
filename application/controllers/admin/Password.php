<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends MY_controller {

// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	  
//------------------------------------  Get data according to login user ---------------------------------------------------- 
	
	public function index()
	 {
	     $id=$this->session->user_id;
	     $this->load->model('admin/Changepassword');
		 $data['username']= $this->Changepassword->password_get($id);
	   	 $this->load->view('admin/password_change', $data);
	 }
	 
//------------------------------------ change password ---------------------------------------------------- 	
	public function change()
	  {
	       if($this->input->post('flag')=='yes') 
		   {
		   
		       // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('adm_login_id', 'username', 'required');
				$this->form_validation->set_rules('adm_password', 'password', 'required');
				$this->form_validation->set_rules('adm_password_new', 'new password', 'required');
				$this->form_validation->set_rules('adm_conpwd_new', 'confirm new password', 'required');
				
				if($this->form_validation->run() == true) 
		             {
					        $username=$this->input->post('adm_login_id'); 
						    $password=$this->input->post('adm_password'); 
							$newpassword=$this->input->post('adm_password_new'); 
						    $new_conf_password=$this->input->post('adm_conpwd_new'); 
							
							$this->load->model('admin/Changepassword');
						    $changed=$this->Changepassword->pasword_edit_data($username,$password,$newpassword,$new_conf_password);
							  if($changed==1)
							    {
								    $this->session->set_flashdata('change', 'Password changed successfully');
							     	redirect(base_url('admin/password'));
								}
							  else
							   {
							        $this->session->set_flashdata('change', 'Please enter correct old password. ');
							     	redirect(base_url('admin/password'));  
							   }	
					 
					 
					 }
					else
					 {
							$id=$this->session->user_id;
							$this->load->model('admin/Changepassword');
							$data['username']= $this->Changepassword->password_get($id);
							$this->load->view('admin/password_change', $data);
					 } 
			}		 
	  }
}

?>
