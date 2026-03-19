<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
public function index()
 {
	
	 $this->load->view('admin/login_view');
 }

public function action()
 {
	 
	        // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('username_admin', 'username', 'required');
				$this->form_validation->set_rules('password_admin', 'password', 'required');
			// -------------------- check validation is pass ------------------------------------	
				if($this->form_validation->run() == true) 
		           {
			
						$username_admin= $this->input->post('username_admin') ;
						$password_admin=$this->input->post('password_admin') ;
						
						 $this->load->model('admin/Adminlogin');
						 $login_id=$this->Adminlogin->auth($username_admin,$password_admin);
						  if($login_id > 0)
							{
							  $this->session->set_userdata('user_id', $login_id);
							  redirect(base_url('admin/desktop'));
							}
						  else
						    {
							  $this->session->set_flashdata('login_failed', 'Invalid Username / Password');
							 // $this->load->view('admin/login_view');  set_value('username_admin'); 
							    redirect(base_url('admin/login'));  
						    }	
			          }
					else
					 {
					         // echo validation_errors();
					     $this->load->view('admin/login_view');
					 }  
	
	    }	 
	 
	 
	 public function logout()
	    {
              $this->session->unset_userdata('user_id');
		      redirect(base_url('admin/login'));
		}
}

?>
