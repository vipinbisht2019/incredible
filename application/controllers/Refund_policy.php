<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Refund_policy extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Refund_policy_model');
			  $data['refund']=$this->Refund_policy_model->refund_policy();
			  $this->load->view('refund_policy',$data);
	  }
	 
}

?>
