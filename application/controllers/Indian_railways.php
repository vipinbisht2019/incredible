<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indian_railways extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Indian_railways_model');
			  $data['hotels']=$this->Indian_railways_model->indian_railways();
			  $this->load->view('indian_railways',$data);
	  }
	 
}

?>
