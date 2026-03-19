<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy_policy extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Privacy_policy_model');
			  $data['privacy']=$this->Privacy_policy_model->privacy_policy();
			  $this->load->view('privacy_policy',$data);
	  }
	 
}

?>
