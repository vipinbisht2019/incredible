<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class temppoticketprint extends Login_controller {
   // ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
               parent::__construct(); 
			   $this->valid_customer(); 
       } 
    // ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {

			   // $this->load->model('Holidaylistmanage');

			    $this->load->view('admin/temppoticketprint-detail');
		
		  
	  }

  
}

?>
