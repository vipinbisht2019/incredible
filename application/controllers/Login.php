<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Login_register');
			  $data['login']=$this->Login_register->login();
			  $this->load->view('login',$data);
	  }	  
	  
	
	public function action()
		{
	 
			$data=$this->comman_data();	
			 $this->load->model('Login_register');		 
		if($this->input->post('flag')=='yes') 
		 {

	// -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('user_email', 'username', 'required');
				$this->form_validation->set_rules('user_passwd', 'password', 'required');
			// -------------------- check validation is pass ------------------------------------	
				if($this->form_validation->run() == true) 		           
				   {			
						$user_email= $this->input->post('user_email') ;
						$user_passwd=$this->input->post('user_passwd') ;
						
						$this->load->model('Login_register');
						 $login_id=$this->Login_register->auth($user_email,$user_passwd);
					//	echo "<pre>";	print_r($login_id) ; echo "hi"; echo "<br>";
							
							
						//	echo $login_id;
						//	die();
						  if(count($login_id[0]) > 0)
							{
												
								$this->session->set_userdata('user_id', $login_id[0]['id']);
							    $this->session->set_userdata('user_email', $login_id[0]['user_email']);
							    $this->session->set_userdata('user_name', $login_id[0]['user_name']);
								
							//	$this->session->set_userdata('user_passwd', $login_id[0]['user_passwd']);							
							 
							  redirect(base_url('userhome'));
							}
						  else
						    {
								
							  $this->session->set_flashdata('login_failed', 'Invalid Username / Password');
							 // $this->load->view('admin/login_view');  set_value('username_admin'); 
							    redirect(base_url('login'));  
						    }	
			          }
					else
					 {						
					         // echo validation_errors();
					     $this->load->view('login',$data);
					 } 

		 }					 
	
	    }	 
	 
	 
	 public function logout()
	    {
              $this->session->unset_userdata('user_id');
			  $this->session->sess_destroy();
		      redirect(base_url('login'));
		}  
		
		
	 public function user_register()
	 {
		// echo "hello";
		
			 $data=$this->comman_data();	
			 $this->load->model('Login_register');	
		 
		 if($this->input->post('flag')=='registered') 
		 {
		   // $this->load->helper('security');
				   $this->load->model('Login_register');
				 
				// -------------------------- form vaildation ---------------------------------------
				//	$this->load->library('form_validation', 'english');
					$this->form_validation->set_rules('user_name', 'Full name', 'required|trim');
					$this->form_validation->set_rules('user_email', 'Email', 'required|trim|is_unique[usc_customers.user_email]');			
					$this->form_validation->set_rules('user_phone', 'Phone', 'required|trim');
					//$this->form_validation->set_rules('user_loginid', 'User Login', 'required');
					
					$this->form_validation->set_rules('user_passwd', 'Password', 'required');
				//	$this->form_validation->set_rules('confirm_passwd', 'confirmed password', 'required|trim|matches[user_passwd]');
				//	 $data=$_POST;
           		//	print_r($data);
           		 	// die;
				
				if(($this->form_validation->run() == true))
		            {
		            		$data=$_POST;
						   	// print_r($data);
						   	// die;
							 
							unset($data['flag']);
							unset($data['smt_enter']);
							unset($data['confirm_passwd']);
												
							$this->load->model('Login_register');
							$memberid=$this->Login_register->register_user($data);
						//	redirect(base_url('thank_you/view')); 
				
							$this->session->set_flashdata('registered', 'You have registered successfully.');
							redirect(base_url('login')); 
							
						//	$this->session->set_flashdata('login_failed', 'Invalid Username / Password');
							
						   
			         }
					else
					 {	
							
									$this->load->view('login',$data);
					 }  


		 }


	 }		 
	  
	  
	 
}

?>
