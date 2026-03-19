<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();
	    	 $this->load->model('Subscribe_page');
				
		       $data = array('name' => $this->input->post('firstname'),
                  'email' => $this->input->post('surname'),
                  'number' => $this->input->post('email'),
                  'developer' => $this->input->post('type')
                  );
    		$result = $this->Subscribe_page->addSubscription($data);
    //print_r($result);

	  }
	  
	  
	
}

?>
