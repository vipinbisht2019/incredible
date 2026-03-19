<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rent_car extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Rent_car_model');
			  $data['rent_car']=$this->Rent_car_model->rent_car();
			  $this->load->view('rent_car',$data);
	  }
	  
	public function search_cars(){

	 	  		$data=$this->comman_data();
	     		
		      	$this->load->model('Rent_car_model') ;
			  	$data['search_cars']=$this->Rent_car_model->search_cars();
	 
			  	$this->load->view('search_cars');
			  
			  
	}

	public function booking_car(){

		$data=$this->comman_data();
	  
	   $this->load->model('Rent_car_model') ;
	   $data['booking_car']=$this->Rent_car_model->booking_car();

	   $this->load->view('booking_car');
   
   
	}

	public function car_reservation(){

		$data=$this->comman_data();
	  
	   $this->load->model('Rent_car_model') ;
	   $data['car_reservation']=$this->Rent_car_model->car_reservation();

	   $this->load->view('car_reservation');
   
   
	}
	 
}

?>
