<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate_flights extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Corporate_flights_page');
			  $data['corporate_flights']=$this->Corporate_flights_page->corporate_flights();
			  $this->load->view('corporate_flights',$data);
	  }
	 
}

?>
