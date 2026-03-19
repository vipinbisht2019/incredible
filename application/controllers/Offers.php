<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();
	     // ---------------------------------- load about model --------------------		
		      $this->load->model('Offers_page') ;
			  $data['offers']=$this->Offers_page->offers();
			  $data['offers_list']=$this->Offers_page->offers_list();
			  $data['destination_list']=$this->Offers_page->destination_list();
			  $data['theme_list']=$this->Offers_page->theme_list();
			  $this->load->view('offers',$data);
	  }
	  
	  
	
}

?>
