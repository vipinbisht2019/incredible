<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel_insurance extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Travel_insurance_page');
			  $data['travel_insurance']=$this->Travel_insurance_page->travel_insurance();
			  $this->load->view('travel_insurance',$data);
	  }
	 
}

?>
