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

			//echo "<pre>"; print_r($data); die;
			 
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
		$query = $this->db->get('usc_flightpessangerdetails')->result_array();
		// echo $this->db->last_query(); die;
		// echo "<pre>"; print_r($query); die;
        return $query;
        $this->db->close();
				
		}
		
		function passengers_compleleteDetails($bookingId)
		{
			    
		$this->db->where('booking_id', $bookingId);	
		$this->db->select('*');	
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

		//echo "<pre>"; print_r($booking_response_arrays); die;
						
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
		//	$stops_names2 = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['so'][0]['code'];
			$stops_names2 = '';
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
		$base_fare	= $bookingItemInfos['AIR']['totalPriceInfo']['totalFareDetail']['fC']['BF'];
		$tax_fare	= $bookingItemInfos['AIR']['totalPriceInfo']['totalFareDetail']['fC']['TAF'];	
		$net_fare	= $bookingItemInfos['AIR']['totalPriceInfo']['totalFareDetail']['fC']['NF'];

		$booking_pnr;

		//echo $bookingItemInfos['AIR']['travellerInfos']['pnrDetails'];

		 //$citiesCode =  $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['cityCode']-$bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['cityCode'];

		 $deptCiCode = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['cityCode'];
		 $arriveCityCode = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['cityCode'];

		 $citiesCode =  $deptCiCode.'-'.$arriveCityCode;

		 //echo $citiesCode;
		
		
		//echo "<pre>"; print_r($bookingItemInfos['AIR']['travellerInfos']); 
	
		
		if(!empty($bookingItemInfos['AIR']['travellerInfos'][0]['pnrDetails'])){ 

			$booking_pnr = $bookingItemInfos['AIR']['travellerInfos'][0]['pnrDetails'][$citiesCode];

		}else{

			$booking_pnr ='';
		}
		

		$travel_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['dt'];
		$booking_status = $bookingOrder['status'];	
		
	
					
		$data = array('date_created'=>$date_created,'user_id'=>$user_id1,'booking_id'=>$booking_id,'booking_type' => 'O','aircraft_number'=>$aircraft_number,'departure_code'=>$departure_code,'departure_airport'=>$departure_airport,'departure_city'=>$departure_city,'departure_country'=>$departure_country,'arrival_code'=>$arrival_code,'arrival_airport'=>$arrival_airport,'arrival_city'=>$arrival_city,'arrival_country'=>$arrival_country,'departure_date'=>$departure_date,'arrival_date'=>$arrival_date,'no_of_stops'=>$no_of_stops,'stops_name'=>$stops_name,'flight_name'=>$flight_name,'flight_code'=>$flight_code,'total_duration'=>$total_duration,'total_adult'=>$total_adult,'total_child'=>$total_child,'total_infant'=>$total_infant,'total_fare'=>$total_fare,'base_fare'=> $base_fare,'taxes' =>$tax_fare,'travel_date'=>$travel_date,'booking_status'=>$booking_status,'booking_pnr' => $booking_pnr);

		///echo "<pre>"; print_r($data); die;
				
		$this->db->insert('usc_flight_booking', $data);
		
		return 1;

	}		
	
	function twoway_flight_booking($booking_response_arrays,$adultpax11,$child_Pax11,$infant_Pax11,$user_id1)
	{
		

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
						//	$stops_names2 = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['so'][0]['code'];
							$stops_names2 = '';
							$stops_name = $stops_names2;							
						} else {
							$stops_name='';	
						}
						
						if(!empty($stops_names_return))
						{
						//	$stops_names_return2 = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['so'][0]['code'];
							$stops_names_return2 = '';		
							$stops_name_return = $stops_names_return2;							
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
						$base_fare	= $bookingItemInfos['AIR']['totalPriceInfo']['totalFareDetail']['fC']['BF'];
						$tax_fare	= $bookingItemInfos['AIR']['totalPriceInfo']['totalFareDetail']['fC']['TAF'];	
						$net_fare	= $bookingItemInfos['AIR']['totalPriceInfo']['totalFareDetail']['fC']['NF'];
						
						$travel_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['dt'];
						$travel_date_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['dt'];
						$booking_status =  $bookingOrder['status'];
						
						
					
			$data = array('date_created'=>$date_created,'user_id'=>$user_id1,'booking_id'=>$booking_id,'booking_type' => 'R','aircraft_number'=>$aircraft_number,'aircraft_number_return'=>$aircraft_number_return,'departure_code'=>$departure_code,'departure_code_return'=>$departure_code_return,'departure_airport'=>$departure_airport,'departure_airport_return'=>$departure_airport_return,'departure_city'=>$departure_city,'departure_city_return'=>$departure_city_return,'departure_country'=>$departure_country,'departure_country_return'=>$departure_country_return,'arrival_code'=>$arrival_code,'arrival_code_return'=>$arrival_code_return,'arrival_airport'=>$arrival_airport,'arrival_airport_return'=>$arrival_airport_return,'arrival_city'=>$arrival_city,'arrival_city_return'=>$arrival_city_return,'arrival_country'=>$arrival_country,'arrival_country_return'=>$arrival_country_return,'departure_date'=>$departure_date,'departure_date_return'=>$departure_date_return,'arrival_date'=>$arrival_date,'arrival_date_return'=>$arrival_date_return,'no_of_stops'=>$no_of_stops,'no_of_stops_return'=>$no_of_stops_return,'stops_name'=>$stops_name,'stops_name_return'=>$stops_name_return,'flight_name'=>$flight_name,'flight_name_return'=>$flight_name_return,'flight_code'=>$flight_code,'flight_code_return'=>$flight_code_return,'total_duration'=>$total_duration,'total_duration_return'=>$total_duration_return,'total_adult'=>$total_adult,'total_child'=>$total_child,'total_infant'=>$total_infant,'total_fare'=>$total_fare,'base_fare'=>$base_fare,'taxes'=>$tax_fare,'travel_date'=>$travel_date,'travel_date_return'=>$travel_date_return,'booking_status'=>$booking_status);
					
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
	
	
	function multiwayThird_flight_booking($booking_response_arrays,$adultpax11,$child_Pax11,$infant_Pax11,$user_id1)
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
						@$departure_code_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['da']['code'];
						
						$departure_airport = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['name'];	// new
						$departure_airport_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['da']['name'];	// new
						@$departure_airport_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['da']['name'];	
						
						$departure_city = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['city'];
						$departure_city_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['da']['city'];
						@$departure_city_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['da']['city'];
						
						$departure_country = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['country'];	// new
						$departure_country_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['da']['country']; // new
						@$departure_country_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['da']['country']; // new
						
						
						
						$arrival_code   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['code'];
						$arrival_code_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['code'];
						@$arrival_code_third   = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['aa']['code'];
						
						
						$arrival_airport   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['name'];	// new
						$arrival_airport_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['name'];	// new
						@$arrival_airport_third   = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['aa']['name'];	
						
						
						$arrival_city   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['city'];
						$arrival_city_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['city'];
						@$arrival_city_third   = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['aa']['city'];
						
						
						$arrival_country   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['country'];	// new
						$arrival_country_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['country'];	// new
						@$arrival_country_third   = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['aa']['country'];	// new
						
						
						$departure_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['dt'];		
						$departure_date_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['dt'];
						@$departure_date_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['dt'];	
						
						
						$arrival_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['at'];
						$arrival_date_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['at'];						
						@$arrival_date_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['at'];
						
						$no_of_stops = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['stops'];
						$no_of_stops_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['stops'];
						@$no_of_stops_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['stops'];
						
						
						$stops_names = $bookingItemInfos['AIR']['tripInfos'][0]['sI'];
						$stops_names_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'];
						@$stops_names_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'];
						
						
										// stopname	
							// stopname	
						
						if(!empty($stops_names))
						{
						//	$stops_names2 = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['so'][0]['code'];
							$stops_names2 = '';
							$stops_name = $stops_names2;							
						} else {
							$stops_name='';	
						}
						
						if(!empty($stops_names_return))
						{
					//	$stops_names_return2 = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['so'][0]['code'];
							$stops_names_return2 = '';		
							$stops_name_return = $stops_names_return2;							
						} else {
							$stops_name_return='';	
						}
						
						if(!empty($stops_names_third))
						{
					//	$stops_names_third2 = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['so'][0]['code'];
							$stops_names_third2 = '';		
							@$stops_name_third = $stops_names_third2;							
						} else {
							@$stops_name_third='';	
						}
						
						
						$flight_name = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['aI']['name'];
						$flight_name_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['fD']['aI']['name'];	//name
						@$flight_name_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['fD']['aI']['name'];
						
						
						
						$aircraft_number = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['fN'];         // new
						$aircraft_number_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['fD']['fN'];  // new
						@$aircraft_number_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['fD']['fN'];  // new
												
						$flight_code = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['aI']['code'];
						$flight_code_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['fD']['aI']['code'];
						@$flight_code_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['fD']['aI']['code'];
						
						
						$minutes = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['duration'];
                                    $hours = floor($minutes / 60);
                                    $min = $minutes - ($hours * 60); 
                                                    
                        $total_duration = $hours."h ".$min."m" ;
						
						$minutes_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['duration'];
                                    $hours_return = floor($minutes_return / 60);
                                    $min_return = $minutes_return - ($hours_return * 60); 
                                                    
                        $total_duration_return = $hours_return."h ".$min_return."m" ;
						
						$minutes_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['duration'];
                                    $hours_third = floor($minutes_third / 60);
                                    $min_third = $minutes_third - ($hours_third * 60); 
                                                    
                        @$total_duration_third = $hours_third."h ".$min_third."m" ;
						
						
						$total_adult = $adultpax11;
						$total_child = $child_Pax11;
						$total_infant = $infant_Pax11;
						
						$total_fare	= $bookingItemInfos['AIR']['totalPriceInfo']['totalFareDetail']['fC']['TF'];
						$travel_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['dt'];
						$travel_date_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['dt'];
						@$travel_date_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['dt'];
						
						
						$booking_status = $booking_response_arrays['status']['success'];
						
						
					
			$data = array('date_created'=>$date_created,'user_id'=>$user_id1,'booking_id'=>$booking_id,'booking_type' => 'M','aircraft_number'=>$aircraft_number,'aircraft_number_return'=>$aircraft_number_return,'aircraft_number_third'=>$aircraft_number_third,'departure_code'=>$departure_code,'departure_code_return'=>$departure_code_return,'departure_code_third'=>$departure_code_third,'departure_airport'=>$departure_airport,'departure_airport_return'=>$departure_airport_return,'departure_airport_third'=>$departure_airport_third,'departure_city'=>$departure_city,'departure_city_return'=>$departure_city_return,'departure_city_third'=>$departure_city_third,'departure_country'=>$departure_country,'departure_country_return'=>$departure_country_return,'departure_country_third'=>$departure_country_third,'arrival_code'=>$arrival_code,'arrival_code_return'=>$arrival_code_return,'arrival_code_third'=>$arrival_code_third,'arrival_airport'=>$arrival_airport,'arrival_airport_return'=>$arrival_airport_return,'arrival_airport_third'=>$arrival_airport_third,'arrival_city'=>$arrival_city,'arrival_city_return'=>$arrival_city_return,'arrival_city_third'=>$arrival_city_third,'arrival_country'=>$arrival_country,'arrival_country_return'=>$arrival_country_return,'arrival_country_third'=>$arrival_country_third,'departure_date'=>$departure_date,'departure_date_return'=>$departure_date_return,'departure_date_third'=>$departure_date_third,'arrival_date'=>$arrival_date,'arrival_date_return'=>$arrival_date_return,'arrival_date_third'=>$arrival_date_third,'no_of_stops'=>$no_of_stops,'no_of_stops_return'=>$no_of_stops_return,'no_of_stops_third'=>$no_of_stops_third,'stops_name'=>$stops_name,'stops_name_return'=>$stops_name_return,'stops_name_third'=>$stops_name_third,'flight_name'=>$flight_name,'flight_name_return'=>$flight_name_return,'flight_name_third'=>$flight_name_third,'flight_code'=>$flight_code,'flight_code_return'=>$flight_code_return,'flight_code_third'=>$flight_code_third,'total_duration'=>$total_duration,'total_duration_return'=>$total_duration_return,'total_duration_third'=>$total_duration_third,'total_adult'=>$total_adult,'total_child'=>$total_child,'total_infant'=>$total_infant,'total_fare'=>$total_fare,'travel_date'=>$travel_date,'travel_date_return'=>$travel_date_return,'travel_date_third'=>$travel_date_third,'booking_status'=>$booking_status);
					
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
	
	function multiwayForth_flight_booking($booking_response_arrays,$adultpax11,$child_Pax11,$infant_Pax11,$user_id1)
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
						@$departure_code_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['da']['code'];
						@$departure_code_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['da']['code'];
						
						$departure_airport = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['name'];	// new
						$departure_airport_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['da']['name'];	// new
						@$departure_airport_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['da']['name'];
						@$departure_airport_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['da']['name'];
						
						
						$departure_city = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['city'];
						$departure_city_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['da']['city'];
						@$departure_city_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['da']['city'];
						@$departure_city_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['da']['city'];
						
						
						$departure_country = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['country'];	// new
						$departure_country_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['da']['country']; // new
						@$departure_country_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['da']['country']; // new
						@$departure_country_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['da']['country']; // new
						
										
						$arrival_code   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['code'];
						$arrival_code_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['code'];
						@$arrival_code_third   = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['aa']['code'];
						@$arrival_code_forth   = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['aa']['code'];						
						
						
						$arrival_airport   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['name'];	// new
						$arrival_airport_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['name'];	// new
						@$arrival_airport_third   = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['aa']['name'];// new
						@$arrival_airport_forth   = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['aa']['name'];
											
						
						$arrival_city   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['city'];
						$arrival_city_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['city'];
						@$arrival_city_third   = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['aa']['city'];
						@$arrival_city_forth   = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['aa']['city'];
						
												
						$arrival_country   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['country'];	// new
						$arrival_country_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['country'];	// new
						@$arrival_country_third   = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['aa']['country'];	// new
						@$arrival_country_forth   = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['aa']['country'];	// new
												
						
						$departure_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['dt'];		
						$departure_date_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['dt'];
						@$departure_date_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['dt'];
						@$departure_date_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['dt'];	
						
												
						$arrival_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['at'];
						$arrival_date_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['at'];						
						@$arrival_date_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['at'];					
						@$arrival_date_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['at'];
						
						
						$no_of_stops = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['stops'];
						$no_of_stops_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['stops'];
						@$no_of_stops_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['stops'];
						@$no_of_stops_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['stops'];
						
												
						$stops_names = $bookingItemInfos['AIR']['tripInfos'][0]['sI'];
						$stops_names_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'];
						@$stops_names_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'];
						@$stops_names_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'];
						
						
						
										// stopname	
							// stopname	
						
						if(!empty($stops_names))
						{
						//	$stops_names2 = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['so'][0]['code'];
							$stops_names2 = '';
							$stops_name = $stops_names2;							
						} else {
							$stops_name='';	
						}
						
						if(!empty($stops_names_return))
						{
					//	$stops_names_return2 = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['so'][0]['code'];
							$stops_names_return2 = '';		
							$stops_name_return = $stops_names_return2;							
						} else {
							$stops_name_return='';	
						}
						
						if(!empty($stops_names_third))
						{
					//	$stops_names_third2 = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['so'][0]['code'];
							$stops_names_third2 = '';		
							@$stops_name_third = $stops_names_third2;							
						} else {
							@$stops_name_third='';	
						}
						
						if(!empty($stops_names_forth))
						{
					//	$stops_names_forth2 = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['so'][0]['code'];
							$stops_names_forth2 = '';		
							@$stops_name_forth = $stops_names_forth2;							
						} else {
							@$stops_name_forth='';	
						}
						
						
						
						$flight_name = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['aI']['name'];
						$flight_name_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['fD']['aI']['name'];	//name
						@$flight_name_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['fD']['aI']['name'];
						@$flight_name_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['fD']['aI']['name'];
						
						
						
						$aircraft_number = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['fN'];         // new
						$aircraft_number_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['fD']['fN'];  // new
						@$aircraft_number_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['fD']['fN'];  // new
						@$aircraft_number_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['fD']['fN'];  // new
						
												
						$flight_code = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['aI']['code'];
						$flight_code_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['fD']['aI']['code'];
						@$flight_code_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['fD']['aI']['code'];
						@$flight_code_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['fD']['aI']['code'];
						
						
						
						$minutes = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['duration'];
                                    $hours = floor($minutes / 60);
                                    $min = $minutes - ($hours * 60); 
                                                    
                        $total_duration = $hours."h ".$min."m" ;
						
						$minutes_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['duration'];
                                    $hours_return = floor($minutes_return / 60);
                                    $min_return = $minutes_return - ($hours_return * 60); 
                                                    
                        $total_duration_return = $hours_return."h ".$min_return."m" ;
						
						$minutes_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['duration'];
                                    $hours_third = floor($minutes_third / 60);
                                    $min_third = $minutes_third - ($hours_third * 60); 
                                                    
                        @$total_duration_third = $hours_third."h ".$min_third."m" ;
						
						$minutes_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['duration'];
                                    $hours_forth = floor($minutes_forth / 60);
                                    $min_forth = $minutes_forth - ($hours_forth * 60); 
                                                    
                        @$total_duration_forth = $hours_forth."h ".$min_forth."m" ;
						
						
						
						
						$total_adult = $adultpax11;
						$total_child = $child_Pax11;
						$total_infant = $infant_Pax11;
						
						$total_fare	= $bookingItemInfos['AIR']['totalPriceInfo']['totalFareDetail']['fC']['TF'];
						$travel_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['dt'];
						$travel_date_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['dt'];
						@$travel_date_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['dt'];
						@$travel_date_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['dt'];
						
						
						
						$booking_status = $booking_response_arrays['status']['success'];
						
						
					
			$data = array('date_created'=>$date_created,'user_id'=>$user_id1,'booking_id'=>$booking_id,'aircraft_number'=>$aircraft_number,'aircraft_number_return'=>$aircraft_number_return,'aircraft_number_third'=>$aircraft_number_third,'aircraft_number_forth'=>$aircraft_number_forth,'departure_code'=>$departure_code,'departure_code_return'=>$departure_code_return,'departure_code_third'=>$departure_code_third,'departure_code_forth'=>$departure_code_forth,'departure_airport'=>$departure_airport,'departure_airport_return'=>$departure_airport_return,'departure_airport_third'=>$departure_airport_third,'departure_airport_forth'=>$departure_airport_forth,'departure_city'=>$departure_city,'departure_city_return'=>$departure_city_return,'departure_city_third'=>$departure_city_third,'departure_city_forth'=>$departure_city_forth,'departure_country'=>$departure_country,'departure_country_return'=>$departure_country_return,'departure_country_third'=>$departure_country_third,'departure_country_forth'=>$departure_country_forth,'arrival_code'=>$arrival_code,'arrival_code_return'=>$arrival_code_return,'arrival_code_third'=>$arrival_code_third,'arrival_code_forth'=>$arrival_code_forth,'arrival_airport'=>$arrival_airport,'arrival_airport_return'=>$arrival_airport_return,'arrival_airport_third'=>$arrival_airport_third,'arrival_airport_forth'=>$arrival_airport_forth,'arrival_city'=>$arrival_city,'arrival_city_return'=>$arrival_city_return,'arrival_city_third'=>$arrival_city_third,'arrival_city_forth'=>$arrival_city_forth,'arrival_country'=>$arrival_country,'arrival_country_return'=>$arrival_country_return,'arrival_country_third'=>$arrival_country_third,'arrival_country_forth'=>$arrival_country_forth,'departure_date'=>$departure_date,'departure_date_return'=>$departure_date_return,'departure_date_third'=>$departure_date_third,'departure_date_forth'=>$departure_date_forth,'arrival_date'=>$arrival_date,'arrival_date_return'=>$arrival_date_return,'arrival_date_third'=>$arrival_date_third,'arrival_date_forth'=>$arrival_date_forth,'no_of_stops'=>$no_of_stops,'no_of_stops_return'=>$no_of_stops_return,'no_of_stops_third'=>$no_of_stops_third,'no_of_stops_forth'=>$no_of_stops_forth,'stops_name'=>$stops_name,'stops_name_return'=>$stops_name_return,'stops_name_third'=>$stops_name_third,'stops_name_forth'=>$stops_name_forth,'flight_name'=>$flight_name,'flight_name_return'=>$flight_name_return,'flight_name_third'=>$flight_name_third,'flight_name_forth'=>$flight_name_forth,'flight_code'=>$flight_code,'flight_code_return'=>$flight_code_return,'flight_code_third'=>$flight_code_third,'flight_code_forth'=>$flight_code_forth,'total_duration'=>$total_duration,'total_duration_return'=>$total_duration_return,'total_duration_third'=>$total_duration_third,'total_duration_forth'=>$total_duration_forth,'total_adult'=>$total_adult,'total_child'=>$total_child,'total_infant'=>$total_infant,'total_fare'=>$total_fare,'travel_date'=>$travel_date,'travel_date_return'=>$travel_date_return,'travel_date_third'=>$travel_date_third,'travel_date_forth'=>$travel_date_forth,'booking_status'=>$booking_status);
					
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
	
	
			
	
	function multiwayFifth_flight_booking($booking_response_arrays,$adultpax11,$child_Pax11,$infant_Pax11,$user_id1)
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
						@$departure_code_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['da']['code'];
						@$departure_code_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['da']['code'];
						@$departure_code_fifth = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['da']['code'];
						
						$departure_airport = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['name'];	
						$departure_airport_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['da']['name'];	
						@$departure_airport_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['da']['name'];
						@$departure_airport_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['da']['name'];
						@$departure_airport_fifth = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['da']['name'];
						
						
						$departure_city = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['city'];
						$departure_city_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['da']['city'];
						@$departure_city_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['da']['city'];
						@$departure_city_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['da']['city'];
						@$departure_city_fifth = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['da']['city'];
						
						
						$departure_country = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['da']['country'];	
						$departure_country_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['da']['country']; 
						@$departure_country_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['da']['country']; 
						@$departure_country_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['da']['country']; 
						@$departure_country_fifth = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['da']['country']; 
						
										
						$arrival_code   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['code'];
						$arrival_code_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['code'];
						@$arrival_code_third   = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['aa']['code'];
						@$arrival_code_forth   = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['aa']['code'];	
						@$arrival_code_fifth   = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['aa']['code'];						
						
						
						$arrival_airport   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['name'];	
						$arrival_airport_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['name'];	
						@$arrival_airport_third   = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['aa']['name'];
						@$arrival_airport_forth   = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['aa']['name'];
						@$arrival_airport_fifth   = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['aa']['name'];
											
						
						$arrival_city   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['city'];
						$arrival_city_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['city'];
						@$arrival_city_third   = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['aa']['city'];
						@$arrival_city_forth   = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['aa']['city'];
						@$arrival_city_fifth   = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['aa']['city'];
						
												
						$arrival_country   = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['aa']['country'];	
						$arrival_country_return   = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['aa']['country'];	
						@$arrival_country_third   = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['aa']['country'];	
						@$arrival_country_forth   = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['aa']['country'];	
						@$arrival_country_fifth   = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['aa']['country'];	
												
						
						$departure_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['dt'];		
						$departure_date_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['dt'];
						@$departure_date_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['dt'];
						@$departure_date_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['dt'];	
						@$departure_date_fifth = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['dt'];	
						
												
						$arrival_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['at'];
						$arrival_date_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['at'];						
						@$arrival_date_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['at'];					
						@$arrival_date_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['at'];				
						@$arrival_date_fifth = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['at'];
						
						
						$no_of_stops = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['stops'];
						$no_of_stops_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['stops'];
						@$no_of_stops_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['stops'];
						@$no_of_stops_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['stops'];
						@$no_of_stops_fifth = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['stops'];
						
												
						$stops_names = $bookingItemInfos['AIR']['tripInfos'][0]['sI'];
						$stops_names_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'];
						@$stops_names_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'];
						@$stops_names_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'];
						@$stops_names_fifth = $bookingItemInfos['AIR']['tripInfos'][4]['sI'];
						
						
						
										// stopname	
							// stopname	
						
						if(!empty($stops_names))
						{
						//	$stops_names2 = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['so'][0]['code'];
							$stops_names2 = '';
							$stops_name = $stops_names2;							
						} else {
							$stops_name='';	
						}
						
						if(!empty($stops_names_return))
						{
					//	$stops_names_return2 = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['so'][0]['code'];
							$stops_names_return2 = '';		
							$stops_name_return = $stops_names_return2;							
						} else {
							$stops_name_return='';	
						}
						
						if(!empty($stops_names_third))
						{
					//	$stops_names_third2 = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['so'][0]['code'];
							$stops_names_third2 = '';		
							@$stops_name_third = $stops_names_third2;							
						} else {
							@$stops_name_third='';	
						}
						
						if(!empty($stops_names_forth))
						{
					//	$stops_names_forth2 = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['so'][0]['code'];
							$stops_names_forth2 = '';		
							@$stops_name_forth = $stops_names_forth2;							
						} else {
							@$stops_name_forth='';	
						}
						
						if(!empty($stops_names_fifth))
						{
					//	$stops_names_fifth2 = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['so'][0]['code'];
							$stops_names_fifth2 = '';		
							@$stops_name_fifth = $stops_names_fifth2;							
						} else {
							@$stops_name_fifth='';	
						}
						
						
						
						$flight_name = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['aI']['name'];
						$flight_name_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['fD']['aI']['name'];	
						@$flight_name_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['fD']['aI']['name'];
						@$flight_name_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['fD']['aI']['name'];
						@$flight_name_fifth = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['fD']['aI']['name'];
						
						
						
						$aircraft_number = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['fN'];         
						$aircraft_number_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['fD']['fN'];  
						@$aircraft_number_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['fD']['fN'];  
						@$aircraft_number_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['fD']['fN'];  
						@$aircraft_number_fifth = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['fD']['fN']; 
						
												
						$flight_code = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['fD']['aI']['code'];
						$flight_code_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['fD']['aI']['code'];
						@$flight_code_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['fD']['aI']['code'];
						@$flight_code_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['fD']['aI']['code'];
						@$flight_code_fifth = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['fD']['aI']['code'];
						
						
						
						$minutes = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['duration'];
                                    $hours = floor($minutes / 60);
                                    $min = $minutes - ($hours * 60); 
                                                    
                        $total_duration = $hours."h ".$min."m" ;
						
						$minutes_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['duration'];
                                    $hours_return = floor($minutes_return / 60);
                                    $min_return = $minutes_return - ($hours_return * 60); 
                                                    
                        $total_duration_return = $hours_return."h ".$min_return."m" ;
						
						$minutes_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['duration'];
                                    $hours_third = floor($minutes_third / 60);
                                    $min_third = $minutes_third - ($hours_third * 60); 
                                                    
                        @$total_duration_third = $hours_third."h ".$min_third."m" ;
						
						$minutes_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['duration'];
                                    $hours_forth = floor($minutes_forth / 60);
                                    $min_forth = $minutes_forth - ($hours_forth * 60); 
                                                    
                        @$total_duration_forth = $hours_forth."h ".$min_forth."m" ;
						
						$minutes_fifth = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['duration'];
                                    $hours_fifth = floor($minutes_fifth / 60);
                                    $min_fifth = $minutes_fifth - ($hours_fifth * 60); 
                                                    
                        @$total_duration_fifth = $hours_fifth."h ".$min_fifth."m" ;
						
						
						
						
						$total_adult = $adultpax11;
						$total_child = $child_Pax11;
						$total_infant = $infant_Pax11;
						
						$total_fare	= $bookingItemInfos['AIR']['totalPriceInfo']['totalFareDetail']['fC']['TF'];
						$travel_date = $bookingItemInfos['AIR']['tripInfos'][0]['sI'][0]['dt'];
						$travel_date_return = $bookingItemInfos['AIR']['tripInfos'][1]['sI'][0]['dt'];
						@$travel_date_third = $bookingItemInfos['AIR']['tripInfos'][2]['sI'][0]['dt'];
						@$travel_date_forth = $bookingItemInfos['AIR']['tripInfos'][3]['sI'][0]['dt'];
						@$travel_date_fifth = $bookingItemInfos['AIR']['tripInfos'][4]['sI'][0]['dt'];
						
						
						
						$booking_status = $booking_response_arrays['status']['success'];
						
						
					
			$data = array('date_created'=>$date_created,'user_id'=>$user_id1,'booking_id'=>$booking_id,'aircraft_number'=>$aircraft_number,'aircraft_number_return'=>$aircraft_number_return,'aircraft_number_third'=>$aircraft_number_third,'aircraft_number_forth'=>$aircraft_number_forth,'aircraft_number_fifth'=>$aircraft_number_fifth,'departure_code'=>$departure_code,'departure_code_return'=>$departure_code_return,'departure_code_third'=>$departure_code_third,'departure_code_forth'=>$departure_code_forth,'departure_code_fifth'=>$departure_code_fifth,'departure_airport'=>$departure_airport,'departure_airport_return'=>$departure_airport_return,'departure_airport_third'=>$departure_airport_third,'departure_airport_forth'=>$departure_airport_forth,'departure_airport_fifth'=>$departure_airport_fifth,'departure_city'=>$departure_city,'departure_city_return'=>$departure_city_return,'departure_city_third'=>$departure_city_third,'departure_city_forth'=>$departure_city_forth,'departure_city_fifth'=>$departure_city_fifth,'departure_country'=>$departure_country,'departure_country_return'=>$departure_country_return,'departure_country_third'=>$departure_country_third,'departure_country_forth'=>$departure_country_forth,'departure_country_fifth'=>$departure_country_fifth,'arrival_code'=>$arrival_code,'arrival_code_return'=>$arrival_code_return,'arrival_code_third'=>$arrival_code_third,'arrival_code_forth'=>$arrival_code_forth,'arrival_code_fifth'=>$arrival_code_fifth,'arrival_airport'=>$arrival_airport,'arrival_airport_return'=>$arrival_airport_return,'arrival_airport_third'=>$arrival_airport_third,'arrival_airport_forth'=>$arrival_airport_forth,'arrival_airport_fifth'=>$arrival_airport_fifth,'arrival_city'=>$arrival_city,'arrival_city_return'=>$arrival_city_return,'arrival_city_third'=>$arrival_city_third,'arrival_city_forth'=>$arrival_city_forth,'arrival_city_fifth'=>$arrival_city_fifth,'arrival_country'=>$arrival_country,'arrival_country_return'=>$arrival_country_return,'arrival_country_third'=>$arrival_country_third,'arrival_country_forth'=>$arrival_country_forth,'arrival_country_fifth'=>$arrival_country_fifth,'departure_date'=>$departure_date,'departure_date_return'=>$departure_date_return,'departure_date_third'=>$departure_date_third,'departure_date_forth'=>$departure_date_forth,'departure_date_fifth'=>$departure_date_fifth,'arrival_date'=>$arrival_date,'arrival_date_return'=>$arrival_date_return,'arrival_date_third'=>$arrival_date_third,'arrival_date_forth'=>$arrival_date_forth,'arrival_date_fifth'=>$arrival_date_fifth,'no_of_stops'=>$no_of_stops,'no_of_stops_return'=>$no_of_stops_return,'no_of_stops_third'=>$no_of_stops_third,'no_of_stops_forth'=>$no_of_stops_forth,'no_of_stops_fifth'=>$no_of_stops_fifth,'stops_name'=>$stops_name,'stops_name_return'=>$stops_name_return,'stops_name_third'=>$stops_name_third,'stops_name_forth'=>$stops_name_forth,'stops_name_fifth'=>$stops_name_fifth,'flight_name'=>$flight_name,'flight_name_return'=>$flight_name_return,'flight_name_third'=>$flight_name_third,'flight_name_forth'=>$flight_name_forth,'flight_name_fifth'=>$flight_name_fifth,'flight_code'=>$flight_code,'flight_code_return'=>$flight_code_return,'flight_code_third'=>$flight_code_third,'flight_code_forth'=>$flight_code_forth,'flight_code_fifth'=>$flight_code_fifth,'total_duration'=>$total_duration,'total_duration_return'=>$total_duration_return,'total_duration_third'=>$total_duration_third,'total_duration_forth'=>$total_duration_forth,'total_duration_fifth'=>$total_duration_fifth,'total_adult'=>$total_adult,'total_child'=>$total_child,'total_infant'=>$total_infant,'total_fare'=>$total_fare,'travel_date'=>$travel_date,'travel_date_return'=>$travel_date_return,'travel_date_third'=>$travel_date_third,'travel_date_forth'=>$travel_date_forth,'travel_date_fifth'=>$travel_date_fifth,'booking_status'=>$booking_status);
					
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
	
	
	public function getBookingDetails($bookingId){

		$this->db->select('booking_status,booking_id,booking_pnr');
		$this->db->from('usc_flight_booking');
		$this->db->where('booking_id',$bookingId);
		$query = $this->db->get()->row_array();
		return $query;
		$this->db->close();
		
	}

	public function getCountryList(){

		$this->db->select('DISTINCT(CountryName),countrycode');
		$this->db->from('usc_flight_city');
		$query = $this->db->get()->result_array();
		return $query;
		$this->db->close();


	}

	
	 
    
}
   


?>