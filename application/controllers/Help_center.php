<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help_center extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Help_center_model');
			  $data['help_center']=$this->Help_center_model->help_center();
			  $this->load->view('help_center',$data);
	  }
	 
}

?>
