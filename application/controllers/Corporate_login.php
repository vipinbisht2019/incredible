<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate_login extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Corporate_login_model');
			  $data['corporate_login']=$this->Corporate_login_model->corporate_login();
			  $this->load->view('corporate_login',$data);
	  }
	 
}

?>
