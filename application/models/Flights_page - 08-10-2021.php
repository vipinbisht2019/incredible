<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Flights_page extends MY_model
  {


	public function index(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}

	public function about_data(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}

	public function search_flights(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}

	public function booking_flights(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close(); 
	}


	public function booking_flightsPayment(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close(); 
	}


	public function booking_flightssuccess(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close(); 
	}

	public function flights_checkout(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close(); 
	}
		
	public function thankyou(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close(); 
	}
	
	
			 
	public function add_customers($email,$mobile)
			 {
				// echo $email;
				// echo "br>";
				// echo $mobile;
				 
				$this->db->select('id, user_name,user_email, user_passwd, user_phone');				
				$this->db->where(['user_email' => $email]);
				$q = $this->db->get('usc_customers');
				if ($q->num_rows() > 0)
						 {							 
							 $customer_detail=$q->result_array();
							// echo var_dump($customer_detail);
							 $cust_id =$customer_detail[0]['id'];
							 
							 $id = (int)$cust_id;
							 
							// return $id;
							// echo var_dump($int1);
							// echo "<br>";
							// echo $int1;
						// die();
							 
						 } else {
						//	  echo "bye";
						//	 die();
							 
				 
				$data=array('user_email' => $email, 'user_phone'=> $mobile,'user_passwd'=>12345 );
				if($this->db->insert('usc_customers', $data))
					 {
						// return 1;
					   $id= $this->db->insert_id();
					 }
					else
					 {
					   $id=0;
					 } 
				}
					return $id;
			 } 		 
		
	 
	public function flightpessangerdetails_add($data)
			 {
			 
				 if($this->db->insert('usc_flightpessangerdetails', $data))
					 {
						 return 1;
					//   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 } 
			 
			 
	public function booking_flightsReview(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close(); 
	}
	
	
	function passengers_detailsReview($bookingId)
		{
			    
		$this->db->where('booking_id', $bookingId);		
		$query = $this->db->get('usc_flightpessangerdetails');
        return $query->result_array();
        $this->db->close();
				
		}
		
		function passengers_compleleteDetails($bookingId)
		{
			    
		$this->db->where('booking_id', $bookingId);	
		$this->db->select('title,firstMiddlename,lastName,paxType,dob');	
		$this->db->from('usc_flightpessangerdetails');	
		$query = $this->db->get();
	//	echo $this->db->last_query();
	//	die();
        return $query->result_array();
        $this->db->close();
				
		}	
		
	function passengers_detailsSuccess($bookingId)
		{
			    
		$this->db->where('booking_id', $bookingId);		
		$query = $this->db->get('usc_flightpessangerdetails');
        return $query->result_array();
        $this->db->close();
				
		}


	function oneway_flight_booking($booking_response_arrays,$adultpax11,$child_Pax11,$infant_Pax11,$user_id1)
	{
	//	echo "<pre>";
	//	print_r($booking_response_arrays);
	//	echo "<br>";
	//	echo $adultpax11.'='.$child_Pax11.'='.$infant_Pax11;
			//			die();
		
	//	foreach($booking_response_arrays as $bookingValue)
				//	{
				//		echo "<br>";
				//		print_r($bookingValue);
						
						
						$bookingOrder 	  = $booking_response_arrays['order'];
						$bookingItemInfos = $booking_response_arrays['itemInfos'];
												
						$date_created = $bookingOrder['createdOn'];						
						$booking_id = $bookingOrder['bookingId'];		
						
						
						$departure_code = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['code'];						
						
						
						$departure_airport = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['name'];	// new
						
						$departure_city = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['city'];
						
						$departure_country = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['country'];	// new
						
						$arrival_code   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['code'];
						
						$arrival_airport   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['name'];	// new
						
						$arrival_city   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['city'];
						
						$arrival_country   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['country'];	// new
						
					//	$pnr = $bookingItemInfos['AIR']['travellerInfos'][0]['pnrDetails'][''];
						
						
						$departure_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['dt'];						
						$arrival_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['at'];
						$no_of_stops = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['stops'];
						
						$stops_names = $bookingItemInfos['AIR']['tripInfos'][0]['sI'];
						
									// stopname	
						
						if(!empty($stops_names))
						{
							$stops_names2 = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['so'][0]['code'];
							$stops_name=$stops_names2;							
						} else {
							$stops_name='';	
						}
						
						$flight_name = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['aI']['name'];
						
						$aircraft_number = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['fN'];	 // new
						
						$flight_code = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['aI']['code'];
						
						$minutes = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['duration'];
                                    $hours = floor($minutes / 60);
                                    $min = $minutes - ($hours * 60); 
                                                    
                        $total_duration = $hours."h ".$min."m" ;
						
						$total_adult = $adultpax11;
						$total_child = $child_Pax11;
						$total_infant = $infant_Pax11;
						
						$total_fare	= $bookingItemInfos['AIR']['totalPriceInfo']['totalFareDetail']['fC']['TF'];
						$travel_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['dt'];
						$booking_status = $booking_response_arrays['status']['success'];
						
						
					
			$data = array('date_created'=>$date_created,'user_id'=>$user_id1,'booking_id'=>$booking_id,'aircraft_number'=>$aircraft_number,'departure_code'=>$departure_code,'departure_airport'=>$departure_airport,'departure_city'=>$departure_city,'departure_country'=>$departure_country,'arrival_code'=>$arrival_code,'arrival_airport'=>$arrival_airport,'arrival_city'=>$arrival_city,'arrival_country'=>$arrival_country,'departure_date'=>$departure_date,'arrival_date'=>$arrival_date,'no_of_stops'=>$no_of_stops,'stops_name'=>$stops_name,'flight_name'=>$flight_name,'flight_code'=>$flight_code,'total_duration'=>$total_duration,'total_adult'=>$total_adult,'total_child'=>$total_child,'total_infant'=>$total_infant,'total_fare'=>$total_fare,'travel_date'=>$travel_date,'booking_status'=>$booking_status);
					
			$this->db->insert('usc_flight_booking', $data);
					
					
					// if($this->db->insert('usc_flight_booking', $data))
					// {
						// return $this->db->insert_id();
					 //  return 1;
					// }
					// else
					// {
					//   return 1;
					// } 
						
								
				//	}
					
			return 1;

	}		
	
	function twoway_flight_booking($booking_response_arrays,$adultpax11,$child_Pax11,$infant_Pax11,$user_id1)
	{
	//	echo "<pre>";
	//	print_r($booking_response_arrays);
	//	echo "<br>";
	//	echo $adultpax11.'='.$child_Pax11.'='.$infant_Pax11;
			//			die();
		
	//	foreach($booking_response_arrays as $bookingValue)
				//	{
				//		echo "<br>";
				//		print_r($bookingValue);
						
						
						$bookingOrder 	  = $booking_response_arrays['order'];
						$bookingItemInfos = $booking_response_arrays['itemInfos'];
												
						$date_created = $bookingOrder['createdOn'];						
						$booking_id = $bookingOrder['bookingId'];		
						
						
						$departure_code = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['code'];
						$departure_code_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['da']['code'];
						
						$departure_airport = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['name'];	// new
						$departure_airport_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['da']['name'];	// new
						
						$departure_city = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['city'];
						$departure_city_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['da']['city'];
						
						$departure_country = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['country'];	// new
						$departure_country_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['da']['country']; // new
						
						
						$arrival_code   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['code'];
						$arrival_code_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['code'];
						
						$arrival_airport   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['name'];	// new
						$arrival_airport_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['name'];	// new
						
						$arrival_city   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['city'];
						$arrival_city_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['city'];
						
						$arrival_country   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['country'];	// new
						$arrival_country_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['country'];	// new
						
						$departure_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['dt'];		
						$departure_date_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['dt'];	
						
						$arrival_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['at'];
						$arrival_date_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['at'];
						
						$no_of_stops = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['stops'];
						$no_of_stops_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['stops'];
						
						$stops_names = $bookingItemInfos['AIR']['tripInfos'][0]['sI'];
						$stops_names_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'];
						
										// stopname	
							// stopname	
						
						if(!empty($stops_names))
						{
							$stops_names2 = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['so'][0]['code'];
							$stops_name=$stops_names2;							
						} else {
							$stops_name='';	
						}
						
						if(!empty($stops_names_return))
						{
							$stops_names_return2 = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['so'][0]['code'];	
							$stops_name_return=$stops_names_return2;							
						} else {
							$stops_name_return='';	
						}
						
						
						$flight_name = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['aI']['name'];
						$flight_name_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['fD']['aI']['name'];	//name
						
						
						$aircraft_number = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['fN'];         // new
						$aircraft_number_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['fD']['fN'];  // new
												
						$flight_code = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['aI']['code'];
						$flight_code_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['fD']['aI']['code'];
						
						$minutes = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['duration'];
                                    $hours = floor($minutes / 60);
                                    $min = $minutes - ($hours * 60); 
                                                    
                        $total_duration = $hours."h ".$min."m" ;
						
						$minutes_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['duration'];
                                    $hours_return = floor($minutes_return / 60);
                                    $min_return = $minutes_return - ($hours_return * 60); 
                                                    
                        $total_duration_return = $hours_return."h ".$min_return."m" ;
						
						$total_adult = $adultpax11;
						$total_child = $child_Pax11;
						$total_infant = $infant_Pax11;
						
						$total_fare	= $bookingItemInfos['AIR']['totalPriceInfo']['totalFareDetail']['fC']['TF'];
						$travel_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['dt'];
						$travel_date_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['dt'];
						$booking_status = $booking_response_arrays['status']['success'];
						
						
					
			$data = array('date_created'=>$date_created,'user_id'=>$user_id1,'booking_id'=>$booking_id,'aircraft_number'=>$aircraft_number,'aircraft_number_return'=>$aircraft_number_return,'departure_code'=>$departure_code,'departure_code_return'=>$departure_code_return,'departure_airport'=>$departure_airport,'departure_airport_return'=>$departure_airport_return,'departure_city'=>$departure_city,'departure_city_return'=>$departure_city_return,'departure_country'=>$departure_country,'departure_country_return'=>$departure_country_return,'arrival_code'=>$arrival_code,'arrival_code_return'=>$arrival_code_return,'arrival_airport'=>$arrival_airport,'arrival_airport_return'=>$arrival_airport_return,'arrival_city'=>$arrival_city,'arrival_city_return'=>$arrival_city_return,'arrival_country'=>$arrival_country,'arrival_country_return'=>$arrival_country_return,'departure_date'=>$departure_date,'departure_date_return'=>$departure_date_return,'arrival_date'=>$arrival_date,'arrival_date_return'=>$arrival_date_return,'no_of_stops'=>$no_of_stops,'no_of_stops_return'=>$no_of_stops_return,'stops_name'=>$stops_name,'stops_name_return'=>$stops_name_return,'flight_name'=>$flight_name,'flight_name_return'=>$flight_name_return,'flight_code'=>$flight_code,'flight_code_return'=>$flight_code_return,'total_duration'=>$total_duration,'total_duration_return'=>$total_duration_return,'total_adult'=>$total_adult,'total_child'=>$total_child,'total_infant'=>$total_infant,'total_fare'=>$total_fare,'travel_date'=>$travel_date,'travel_date_return'=>$travel_date_return,'booking_status'=>$booking_status);
					
			$this->db->insert('usc_flight_booking', $data);
					
					
					// if($this->db->insert('usc_flight_booking', $data))
					// {
						// return $this->db->insert_id();
					 //  return 1;
					// }
					// else
					// {
					//   return 1;
					// } 
						
								
				//	}
					
			return 1;

	}		
	
	
	 
    
}
   


?>