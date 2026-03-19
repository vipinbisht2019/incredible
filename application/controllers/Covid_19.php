<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid_19 extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();
	     // ---------------------------------- load about model --------------------		
		      $this->load->model('Covid_19_page');
			  $data['covid_19']=$this->Covid_19_page->covid_data();
			  $this->load->view('covid_19',$data);
	  }
	  
 
}

?>
