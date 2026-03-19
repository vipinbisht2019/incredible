<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visa extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Visa_model');
			  $data['visa']=$this->Visa_model->visa();
			  $this->load->view('visa',$data);
	  }

	  public function country_faq(){

	 	  		$data=$this->comman_data();
	     		
		      	$this->load->model('Visa_model') ;
			  	$data['country_faq']=$this->Visa_model->country_faq();
	 
			  	$this->load->view('country_faq',$data);
			  
			  
	}
	 
}

?>
