<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desktop extends MY_controller
   {
   // ------------------------------------ check valid users -------------------------------------------------------------------
       function __construct()
	     { 
           parent::__construct(); 
           $this->valid_user(); 
      
         } 

   
	
	public function index()
	  {
		 $this->load->view('admin/desktop_view');
	  }
	 
   
 }

?>
