<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awards extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();
	     		// ---------------------------------- load about model --------------------		
		      $this->load->model('About_page');
			  $data['about']=$this->About_page->about_data();
			  $this->load->view('about',$data);
	  }

	  public function award_detail(){

			$data=$this->comman_data();
	     		// ---------------------------------- load about model --------------------		
		      //$this->load->model('About_page');
			  //$data['about']=$this->About_page->about_data();
			  $this->load->view('awards_details_view',$data);

	  }


	  

	  
 
}

?>
