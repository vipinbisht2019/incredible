<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fix_departures extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();
	     // ---------------------------------- load about model --------------------		
		      $this->load->model('Fix_departures_page') ;
			  $data['fix_departure']=$this->Fix_departures_page->fix_departure();
			  $data['fix_departure_list']=$this->Fix_departures_page->fix_departure_list();
			  $data['destination_list']=$this->Fix_departures_page->destination_list();
			  $data['theme_list']=$this->Fix_departures_page->theme_list();
			  $this->load->view('fix_departure',$data);
	  }
	  
	  
	
}

?>
