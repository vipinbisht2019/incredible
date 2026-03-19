<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forex extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Forex_model');
			  $data['forex']=$this->Forex_model->forex();
			  $this->load->view('forex',$data);
	  }
	 
}

?>
