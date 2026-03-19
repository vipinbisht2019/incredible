<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword extends Login_controller {

	/**
	 * Index Page for this controller.
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html  navigation
	 */
	 
	  function __construct()
	   { 
           parent::__construct(); 
          // $this->valid_customer(); 
      
       } 
	 
	public function index()
	{ 
		$data=$this->comman_data();

	//	echo "<pre>"; print_r($_SESSION); die;

		$id=$this->session->user_id;

		$this->load->model('Changepassword_page');
		$data['username'] = $this->Changepassword_page->password_get($id);		
		$this->load->view('changepassword_view',$data);
	}
	 
	 	 
//------------------------------------ change password ---------------------------------------------------- 	
	public function change()
	  {
	       if($this->input->post('flag')=='yes') 
		   {

					//echo "<pre>"; print_r($_POST); die;

		       // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('adm_login_id', 'username', 'required');
				$this->form_validation->set_rules('adm_password', 'password', 'required');
				$this->form_validation->set_rules('adm_password_new', 'new password', 'required');
				$this->form_validation->set_rules('adm_conpwd_new', 'confirmed password', 'required|trim|matches[adm_password_new]');
				
				if($this->form_validation->run() == true) 
		             {
					        $username=$this->input->post('adm_login_id'); 
						    $password=$this->input->post('adm_password'); 
							$newpassword=$this->input->post('adm_password_new'); 
						    $new_conf_password=$this->input->post('adm_conpwd_new'); 
							
							$this->load->model('Changepassword_page');
						    $changed=$this->Changepassword_page->pasword_edit_data($username,$password,$newpassword,$new_conf_password);
							  if($changed==1)
							    {
								    $this->session->set_flashdata('change', 'Password changed successfully');
							     	redirect(base_url('changepassword'));
								}
							  else
							   {
							        $this->session->set_flashdata('change', 'Please enter correct old password. ');
							     	redirect(base_url('changepassword'));  
							   }	
					 
					 
					 }
					else
					 {
							 $id=$this->session->user_id;
							 $data=$this->comman_data();
							 $this->load->model('Changepassword_page');
							 $data['username']= $this->Changepassword_page->password_get($id);
							 $this->load->view('changepassword_view',$data);
					 } 
			}		 
	  }
	
	

	
}
