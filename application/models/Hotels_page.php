<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Hotels_page extends MY_model
  {


	public function index(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}

	public function hotels(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}

	public function search_hotels(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}

	public function booking_hotels(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close(); 
	}

	public function hotel_reservation(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close(); 
	}
		
	public function success(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close(); 
	}

	function getCityBySearch($searchDeoparture){

		$this->db->select('id,cityName,countryName');
		$this->db->from('usc_hotels_city');	
		$this->db->or_like('cityName', $searchDeoparture);
		$query = $this->db->get()->result();
		
/*
		foreach($query as $row ){

			 $countyImage  = '<img src="https://www.countryflags.io/be/flat/64.png">' ;

			 //echo $countyImage; 

			$response[] = array("value"=>$row->cityName,"label"=> $row->cityName . "  (" .$row->countryName. ")" );
		 }
		 */
		 
		 
		 	foreach($query as $row ){

					 $countyImage  = '<img src="'.base_url().'uploads/location.png" style="width: 25px;position: relative;top: 8px;">' ;

					 //echo $countyImage; 

					// $response[] = array("value"=>$row->code,"label"=>$row->CityName." , ".$row->countrycode. " - ". $row->AirportName . "  (" .$row->code. ")" );
					
					
					 $temp_array = array();
					 $temp_array['value'] = $row->cityName;
					 $temp_array['label'] = '<div class="row"><div class="col-md-1"> '. $countyImage.' </div><div class="col-md-9"> <p style="font-size: 12px;font-weight: 500;line-height: 12px;margin-top: 10px;">'  . $row->cityName.' , '.$row->countryName.'</p> <p style="font-size: 11px;font-weight: 500;color: #808080;line-height: 5px;margin-bottom:5px">'.$row->cityName.'</p></div><div class="col-md-2"> <p style="font-weight: 600;color:#444;position: relative;top: 8px;"></p></div></div>';
					// //$temp_array['label'] = '<img src="uploads/819814.png" width="70" />&nbsp;&nbsp;&nbsp;'.$row->CityName.'';

					 $response[] = $temp_array;

										
				 }
   
  
  
  
  
  
		return $response; 
		$this->db->close(); 


	}

	function getCityId($cityName){

		$this->db->where('cityName',$cityName);
		$q = $this->db->get('usc_hotels_city')->row_array();
	//	print_r($q); die;
		return $q['id'];
		$this->db->close(); 

	}

	function insertGuestDetails($data){

		//echo '<pre>'; print_r($data); die;

		if($this->db->insert('usc_hotel_guest_details',$data)){

			return 1;

		}else{

			return 0;
		}

	}


	
	function getGuestDetails($bookingId){
		
		$this->db->where('booking_id',$bookingId);
		$this->db->where('status','Pending');
		$query = $this->db->get('usc_hotel_guest_details')->result_array();
		return $query;

	}

	function insertHotelOders($orderDetails){

		//echo '<pre>'; print_r($orderDetails);

		if($this->db->insert('usc_hotel_orders',$orderDetails)){

			return $this->db->insert_id();

		}else{

			return 0;

		}

	}



	function insertHotelOdersDetails($orderDetailsItem){

		//echo '<pre>'; print_r($orderDetails);

		if($this->db->insert('usc_hotelitems_order',$orderDetailsItem)){

			return $this->db->insert_id();

		}else{

			return 0;

		}

	}

	function insertHotelOdersRoomDetails($orderRoomDetailsItem){

		if($this->db->insert('hotel_order_room_info',$orderRoomDetailsItem)){

			return $this->db->insert_id();

		}else{

			return 0;

		}

	}

	function insertTravellerDetails($travellerData){

		if($this->db->insert('usc_hotel_guest_details',$travellerData)){

			return $this->db->insert_id();

		}else{

			return 0;

		}

	}

	function getHotelOrder($bookingId){


		$this->db->select('*');
		$this->db->from('usc_hotel_orders');
		$this->db->where('status','SUCCESS');
		$this->db->where('booking_id',$bookingId);
		$hotelOrderList = $this->db->get()->result_array();

		foreach ($hotelOrderList as $key => $orderValue) {
			
			$this->db->select('*');
			$this->db->from('usc_hotelitems_order');
			$this->db->where('booking_id',$bookingId);
			$this->db->where('order_id',$orderValue['id']);
			$hotelOrderList[$key]['hotelOrderDetails'] = $this->db->get()->row_array();

			$this->db->select('*');
			$this->db->from('hotel_order_room_info');
			$this->db->where('booking_id',$bookingId);
			$this->db->where('order_id',$orderValue['id']);
			$hotelOrderList[$key]['hotelOrderRoomDetails'] = $this->db->get()->row_array();

			$this->db->select('*');
			$this->db->from('usc_hotel_guest_details');
			$this->db->where('booking_id',$bookingId);
			$hotelOrderList[$key]['roomTraveelerInfo'] = $this->db->get()->result_array();

		}

		//echo '<pre>'; print_r($hotelOrderList); die;

		return $hotelOrderList; 



	}


		
	 
    
}
   


?>