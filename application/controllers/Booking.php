<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends User_controller 
{

	public function index()
	{
		 
		if(empty($this->session->userdata('user_id')))
		{
				redirect(base_url('login'));
		}

		$id=$this->session->userdata('user_id');
		$data=$this->comman_data();	     	
		$this->load->model('Booking_model');
		$data['booking_details']=$this->Booking_model->booking($id);
		$this->load->view('booking_search',$data);
	}

	public function flight(){

		if(empty($this->session->userdata('user_id')))
		{
				redirect(base_url('login'));
		}

		$id=$this->session->userdata('user_id');
		$data=$this->comman_data();	     	
		$this->load->model('Booking_model');
		$data['booking_details']=$this->Booking_model->booking($id);
		$this->load->view('booking_userview',$data);

	}

	public function hotel(){

		if(empty($this->session->userdata('user_id')))
		{
				redirect(base_url('login'));
		}

		$id=$this->session->userdata('user_id');
		$data=$this->comman_data();	     	
		$this->load->model('Booking_model');
		$data['bookingHotelList'] = $this->Booking_model->bookingHotel($id);
		$this->load->view('booking_userhotelview',$data);

	}


	public function details(){

		$bookingId = $this->input->get('bookingId');
		$data=$this->comman_data();
		$this->load->model('Booking_model');
		$data['bookingHotelDetails'] = $this->Booking_model->bookingHotelDetails($bookingId);
		$this->load->view('booking_userdetails',$data);

	}

	public function flight_details(){

		$data=$this->comman_data();
		$this->load->model('Booking_model');
		
		$booking_id = $this->uri->segment(3);
	//	echo $booking_id;
		
		$data['user_flight_booking'] = $this->Booking_model->booking_flightview($booking_id);
		$data['user_flight_pessangerDetails'] = $this->Booking_model->booking_passengersview($booking_id);
		
		$this->load->view('booking_flight_userdetails',$data);

	}


	
	  
	 /* 
	public function fight()
	  {
		  
	      	
		//	  $data=$this->comman_data();	     	
		//      $this->load->model('Faq_model');
		//	  $data['faw']=$this->Faq_model->faq();
		//	  $this->load->view('faq',$data);
			  
			  
			  $data=$this->comman_data();	     	
		      $this->load->model('Booking_model');
			  $data['booking']=$this->Booking_model->booking();
			  $this->load->view('booking_userview',$data);
	  }
	  
	public function hotel()
	  {
		  
	      	
		//	  $data=$this->comman_data();	     	
		//      $this->load->model('Faq_model');
		//	  $data['faw']=$this->Faq_model->faq();
		//	  $this->load->view('faq',$data);
			  
			  
			  $data=$this->comman_data();	     	
		      $this->load->model('Booking_model');
			  $data['booking']=$this->Booking_model->booking();
			  $this->load->view('booking_userview',$data);
	  }
	 */
	 
}

?>