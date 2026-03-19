<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Booking_model extends MY_model
  {

	public function booking($id){
	
	/*	$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		*/
		
			$this->db->select('fb.*,uc.id,uc.user_name');		
			$this->db->from('usc_flight_booking as fb');  
			$this->db->join('usc_customers as uc','fb.user_id = uc.id','left');
			$this->db->where('fb.user_id',$id);
			$query = $this->db->get()->result_array(); 
			return $query;
					
		$this->db->close();  
		
		

	}	
	
	public function bookingHotel($userId){

		$this->db->select('*');		
		$this->db->from('usc_hotel_orders');  
		$this->db->where('user_id',$userId);
		$query = $this->db->get()->result_array(); 
		return $query;

	}
	
	public function booking_flightview($booking_id)
	{
	//	echo $booking_id;
	//	echo "<br>";
	//	echo "heello";
		
		$this->db->select('*');		
		$this->db->from('usc_flight_booking');
		$this->db->where('booking_id',$booking_id);
		$query = $this->db->get()->result_array(); 
	//	echo $this->db->last_query();
		return $query;
	
	}
	
	
	public function booking_passengersview($booking_id)
	{
	//	echo $booking_id;
	//	echo "<br>";
	//	echo "heello";
		
		$this->db->select('*');		
		$this->db->from('usc_flightpessangerdetails');
		$this->db->where('booking_id',$booking_id);
		$query = $this->db->get()->result_array(); 
	//	echo $this->db->last_query();
		return $query;
	
	}
	
	
	
	
	
	public function bookingHotelDetails($bookingId){

		$this->db->select('*');		
		$this->db->from('usc_hotel_orders');  
		$this->db->where('booking_id',$bookingId);
		$orderList = $this->db->get()->row_array(); 

		$this->db->select('*');		
		$this->db->from('usc_hotelitems_order');  
		$this->db->where('booking_id',$bookingId);
		$this->db->where('order_id',$orderList['id']);
		$hotelDetails = $this->db->get()->row_array();
		
		$this->db->select('*');		
		$this->db->from('hotel_order_room_info');  
		$this->db->where('booking_id',$bookingId);
		$this->db->where('order_id',$orderList['id']);
		$roomDetails = $this->db->get()->result_array(); 

		$this->db->select('*');		
		$this->db->from('usc_hotel_guest_details');  
		$this->db->where('booking_id',$bookingId);
		$guestsDetails = $this->db->get()->result_array(); 

		$result = array('orderList' => $orderList, 'hotelDetails' => $hotelDetails, 'roomDetails' => $roomDetails, 'guestsDetails' => $guestsDetails);

		return $result;


	}
	

	
}

?>