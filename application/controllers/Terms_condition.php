<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms_condition extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Terms_condition_model');
			  $data['terms']=$this->Terms_condition_model->terms_condition();
			  $this->load->view('terms_condition',$data);
	  }
	 
}

?>
