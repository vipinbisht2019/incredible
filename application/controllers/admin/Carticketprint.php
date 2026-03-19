<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tourticketprint extends Login_controller {
   // ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
               parent::__construct(); 
			   $this->valid_customer(); 
       } 
    // ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		      	$data=$this->comman_data();
			    $this->load->model('Holidaylistmanage');

			    $this->load->view('tourticketprint-view',$data);
		
		  
	  }

  
}

?>
