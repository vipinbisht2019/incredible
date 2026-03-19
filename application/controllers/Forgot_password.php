<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();
	     // ---------------------------------- load about model --------------------		
		      $this->load->model('Forgot_password_page');
			  $data['forgot_password']=$this->Forgot_password_page->forgot_password_data();
			  $this->load->view('forgot_password',$data);
	  }
	  
 
}

?>
