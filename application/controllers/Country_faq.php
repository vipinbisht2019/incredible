<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country_faq extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();
	     // ---------------------------------- load about model --------------------		
		      $this->load->model('Country_faq_page');
			  $data['country_faq']=$this->Country_faq_page->country_faq_data();
			  $this->load->view('country_faq',$data);
	  }
	  
 
}

?>
