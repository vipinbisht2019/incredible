<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passport extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Passport_page');
			  $data['passport']=$this->Passport_page->passport();
			  $this->load->view('passport',$data);
	  }
	  
	public function new_passport(){

	 	  		$data=$this->comman_data();
	     		
		      	$this->load->model('Passport_model') ;
			  	$data['new_passport']=$this->Passport_model->new_passport();
	 
			  	$this->load->view('new_passport');
			  
			  
	}

	public function renew_passport(){

		$data=$this->comman_data();
	  
	   $this->load->model('Passport_model') ;
	   $data['renew_passport']=$this->Passport_model->renew_passport();

	   $this->load->view('renew_passport');
   
   
	}

	public function lost_passport(){

		$data=$this->comman_data();
	  
	   $this->load->model('Passport_model') ;
	   $data['lost_passport']=$this->Passport_model->lost_passport();

	   $this->load->view('lost_passport');
   
   
	} 
}

?>
