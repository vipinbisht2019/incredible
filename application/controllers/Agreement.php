<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agreement extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();
	     // ---------------------------------- load about model --------------------		
		      $this->load->model('Agreement_page');
			  $data['agreement']=$this->Agreement_page->agreement_data();
			  $this->load->view('agreement',$data);
	  }
	  
 
}

?>
