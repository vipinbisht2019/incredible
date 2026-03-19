<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cruises extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Cruises_model');
			  $data['rent_car']=$this->Cruises_model->cruises();
			  $this->load->view('cruises',$data);
	  }
	  
	public function search_cruise(){

	 	  		$data=$this->comman_data();
	     		
		      	$this->load->model('Cruises_model') ;
			  	$data['search_cruise']=$this->Cruises_model->search_cruise();
	 
			  	$this->load->view('search_cruise');
			  
			  
	}

	public function booking_cruise(){

		$data=$this->comman_data();
	  
	   $this->load->model('Cruises_model') ;
	   $data['booking_cruise']=$this->Cruises_model->booking_cruise();

	   $this->load->view('booking_cruise');
   
   
	}

	public function cruise_checkout(){

		$data=$this->comman_data();
	  
	   $this->load->model('Cruises_model') ;
	   $data['cruise_checkout']=$this->Cruises_model->cruise_checkout();

	   $this->load->view('cruise_checkout');
   
   
	}
	 
}

?>
