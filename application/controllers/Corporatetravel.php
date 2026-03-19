<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corporatetravel extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Corporate_travel_page');
			  $data['corporate_travel']=$this->Corporate_travel_page->corporate_tavel();
			  $this->load->view('corporate_travel',$data);
	  }
	 
}

?>
