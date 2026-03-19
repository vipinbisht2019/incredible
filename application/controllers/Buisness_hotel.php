<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buisness_hotel extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Buisness_hotel_page');
			  $data['buisness_hotel']=$this->Buisness_hotel_page->buisness_hotel();
			  $this->load->view('buisness_hotel',$data);
	  }
	 
}

?>
