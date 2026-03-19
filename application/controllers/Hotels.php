<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotels extends User_controller 
{

   	public function index()
	{
		//echo '<pre>'; print_r($_POST); die;

		$cityName = $_POST['city'];
		$this->load->model('Hotels_page');

		$cityId = $this->Hotels_page->getCityId($cityName);

		$checkinDate  = date("Y-m-d",strtotime($_POST['checkindate']));
		$checkoutDate  = date("Y-m-d",strtotime($_POST['checkoutdate']));

		$diff = abs(strtotime($checkoutDate) - strtotime($checkinDate));
		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

		// room 1 info
		
		$noOfAdults = $_POST['noofadults'];
		$noofchild = $_POST['noofchild'];
		$childAge1 = $_POST['childAge1'];
		$childAge2 = $_POST['childAge2'];
		$childAge3 = $_POST['childAge3'];
		$noOfRooms = $_POST['noofrooms'];

		$data['childAge'] = $childAge1;

		// room 2 info

		$noOfAdults1 = $_POST['noofadults1'];
		$noofchild1 = $_POST['noofchild1'];
		$childAge21 = $_POST['childAge21'];
		$childAge22 = $_POST['childAge22'];
		$childAge23 = $_POST['childAge23'];
		$noOfRooms1 = $_POST['noofrooms1'];

		$childAge = '';

		if($childAge1 != 0){

			$childAge = array($childAge1);

		}

		if($childAge2 != 0){

			$childAge = array($childAge1,$childAge2); 

		}

		if($childAge3 != 0){

			$childAge = array($childAge1,$childAge2,$childAge3); 
		}

		$childAge10 = '';

		if($childAge21 != 0){

			$childAge10 = array($childAge21);

		}

		if($childAge22 != 0){

			$childAge10 = array($childAge21,$childAge22); 

		}

		if($childAge23 != 0){

			$childAge10 = array($childAge21,$childAge22,$childAge23); 
		}


		if($noofchild > 0){

			$room1 = array(

				"numberOfAdults" => $noOfAdults,
				"numberOfChild" => $noofchild,
				"childAge" => $childAge

			);

		}else{
			$room1 = array(

				"numberOfAdults" => $noOfAdults,
				"numberOfChild" => $noofchild,
			);

		}	

		if($noOfRooms1 != 0){

			if($noofchild1 > 0){

				$room2 = array(
		
					"numberOfAdults" => $noOfAdults1,
					"numberOfChild" => $noofchild1,
					"childAge" => $childAge10
		
				);
			}else{

				$room2 = array(
		
					"numberOfAdults" => $noOfAdults1,
					"numberOfChild" => $noofchild1,
		
				);

			}

			$rooms = array($room1,$room2);
			
		}else{

			$rooms = array($room1);
		}


		$guestInfo = $_POST['guestsinfo'];

		

		$rating = $_POST['rating'];
		$specialCat = $_POST['special_category'];

		if($specialCat == 'on'){

			$fsc= true;
			
		}

		
		foreach ($rating as $key => $ratValue) {

			$rt[] = $ratValue;
			
		}


		$requestData = array(

			'checkinDate' => $checkinDate,
			'checkoutDate' => $checkoutDate,
			
			'roomInfo' => $rooms,
		

			'searchCriteria' => array(

				'city' => $cityId,
				'nationality' => '106',
				'currency' => 'INR',

			),


			'searchPreferences' => array(

				'ratings' => $rt

			),
			'fsc' => $fsc

		);

		$ch = $this->callAPI($requestData);
		$result = curl_exec($ch);
		$response_array = json_decode($result, true);

	
		$searchId = $response_array['searchIds'][0]; 

		$ch1 = $this->gethotelList($searchId);
		$result1 = curl_exec($ch1);
		$response_array1 = json_decode($result1, true);

		//echo '<pre>'; print_r($response_array1); die;
		

		$data=$this->comman_data();	     	

		$data['cityName'] = $cityName;

		if($noOfAdults1!=0){

			$data['adults'] = $noOfAdults+$noOfAdults1;

		}else{


			$data['adults'] = $noOfAdults;

		}

		if($noofchild1!=0){

			$data['child'] = $noofchild + $noofchild1;

		}else{

			$data['child'] = $noofchild;

		}

		$data['checkindate'] = $_POST['checkindate'];
		$data['checkoutdate'] = $_POST['checkoutdate'];
		$data['guestInfo'] = $guestInfo;
		$data['specialCat'] = $fsc;
		$data['rating'] = $rt;
		$data['childAge'] = $childAge1;
		

		if($noOfRooms1!=0){

			$data['room'] = $noOfRooms + $noOfRooms1;

		}else{

			$data['room'] = $noOfRooms;

		}

		

		$hotelArray = $response_array1['searchResult']['his'];
		 

		$totalHotel = count($hotelArray);

		$harr = 0;

		foreach ($hotelArray as $key => $hotelValue) {

			$hotelArr[$key]['hotelId'] = $hotelValue['id'];
			$hotelArr[$key]['hotelName'] = $hotelValue['name'];			
			$hotelArr[$key]['hotelImage'] = $hotelValue['img'][0]['tns'];
			$hotelArr[$key]['hotelRating'] = $hotelValue['rt'];
			$hotelArr[$key]['hotelLongitute'] = $hotelValue['gl']['ln'];
			$hotelArr[$key]['hotelLattitude'] = $hotelValue['gl']['lt'];
			$hotelArr[$key]['hotelAddress'] = $hotelValue['ad']['adr'];
			$hotelArr[$key]['hotelCityName'] = $hotelValue['ad']['city']['name'];
			$hotelArr[$key]['hotelCountryName'] = $hotelValue['ad']['country']['name'];
			$hotelArr[$key]['propertyType'] = $hotelValue['pt'];
			$hotelArr[$key]['mealInfo'] = $hotelValue['pops'][0]['fc'][0];
			$hotelArr[$key]['totalPrice'] = $hotelValue['pops'][0]['tpc'];

			$harr++;

		}
		
		$columns = array_column($hotelArr, 'totalPrice');
		array_multisort($columns, SORT_ASC, $hotelArr);	

		// foreach ($hotelArr as $key => $hotvalue) {

		// 	$totalMaxPrice = max($hotvalue['totalPrice']);

		// 	$hotelArr[$key]['maxTotalVal'] = $totalMaxPrice;

		// }
		
		// echo "<pre>"; print_r($hotelArr); die;

		$data['hotelList'] = $hotelArr; 
		$data['nights']  = $days;
		
		$data['hotels']=$this->Hotels_page->hotels();
		$this->load->view('hotels',$data);
	}


	public function hotel_filter(){

		//echo "<pre>"; print_r($_POST); die;

		$cityName = $_POST['cityname'];

		$this->load->model('Hotels_page');

		$cityId = $this->Hotels_page->getCityId($cityName);

		$checkinDate  = date("Y-m-d",strtotime($_POST['checkinDate']));
		$checkoutDate  = date("Y-m-d",strtotime($_POST['checkoutDate']));

		$noOfAdults = $_POST['adults'];
		$noofchild = $_POST['childs'];
		$childAge1 = $_POST['childAge'];

		$rating = array();
		$rating = @$_POST['ratingId'];
		$specialCat = @$_POST['specialCategory'];

		$childAge = '';

		if($childAge1 != 0){

			$childAge = array($childAge1);

		}

		if($specialCat == '1'){

			$fsc= true;
			
		}

		if($noofchild > 0){

			$roomInfo = array(
	
				'numberOfAdults' => $noOfAdults,
				'numberOfChild' => $noofchild,
				'childAge' => 
					$childAge
				,
				
			);

		}else{

			$roomInfo = array(
	
				'numberOfAdults' => $noOfAdults,
				'numberOfChild' => $noofchild,
				
				
			);

		}

		

		$requestData = array(

			'checkinDate' => $checkinDate,
			'checkoutDate' => $checkoutDate,
			
			'roomInfo' => array(

				$roomInfo
			),

			'searchCriteria' => array(

				'city' => $cityId,
				'nationality' => '106',
				'currency' => 'INR',

			),


			'searchPreferences' => array(

				'ratings' => array(5,4,3),

			),
			'fsc' => $fsc

		);

		$ch = $this->callAPI($requestData);
		$result = curl_exec($ch);
		$response_array = json_decode($result, true);
		//echo "<pre>"; print_r($response_array); die;
		$searchId = $response_array['searchIds'][0]; 
		
		$ch1 = $this->gethotelList($searchId);
		$result1 = curl_exec($ch1);
		$response_array1 = json_decode($result1, true);

		//echo '<pre>'; print_r($response_array1); die;

		$RatingID=$_POST['ratingId'];
		if($RatingID!='')  {  $FinalRatingsArr = explode(',', $RatingID);   }

		$MealsID=$_POST['mealsId'];
		if($MealsID!='')  {  $FinalMealsArr = explode(',', $MealsID);   }	
		
		//echo "<pre>"; print_r($FinalMealsArr); die;
		
		$PropertyID=$_POST['propertyId'];
		if($PropertyID!='')  {  $FinalPropertyArr = explode(',', $PropertyID);   }

		// $hotelName=$_POST['hotelName'];
		// if($hotelName!='')  {  $FinalHotelArr = explode(',', $hotelName);   }


		//print_r($FinalHotelArr); die;

		$hotelArray = $response_array1['searchResult']['his']; 

		//echo '<pre>'; print_r($hotelArray); die;

		$totalHotel = count($hotelArray);
		//var_dump($FinalPropertyArr); die;

		$harr = 0;
		$hotelArr = array();
		foreach ($hotelArray as $key => $hotelValue) {

			//echo '<pre>'; print_r($hotelValue); 

		//	echo "Hotel"; 

			$hotelName  = $hotelValue['name'];
			$rating = $hotelValue['rt'];
			$property = trim($hotelValue['pt']);
			$meals =  $hotelValue['pops'][0]['fc'][0];
		//	var_dump($property); die;

		//	$mealsArr = array();
			//foreach ($hotelValue['pops'] as $key => $popvalue) {
				
				//echo '<pre>'; print_r($popvalue['fc'][0]);

				//echo count($popvalue['fc'][0]); 

		//		$mealsArr[] = $popvalue['fc'][0];
			//	$totalFare  = $popvalue['tpc'];

			//}

			///echo '<pre>'; print_r($mealsArr); 


			// $range = array();

			//if((!empty($_POST['minimum_price']) || $_POST['minimum_price'] == '') && (!empty($_POST['maximum_price']) || $_POST['maximum_price'] == '')) {

			// 	$minPrice = intval($minimum_price);
			// 	$maxPrice = intval($maximum_price);
			// 	$range = range($minPrice, $maxPrice);
			// 	$totalFare12 = intval($totalFare);

			// }
			// print_r($range); die;
			//echo "<pre>"; print_r($totalFare); 

			//echo '<pre>'; print_r($mealsArr);

			

			if((in_array($rating,$FinalRatingsArr) || $_POST['ratingId'] == 0) && (in_array($property,$FinalPropertyArr) || $_POST['propertyId'] == 0) && (in_array($meals,$FinalMealsArr) || $_POST['mealsId'] == 0)){ 

				$hotelArr[$harr]['hotelId'] = $hotelValue['id'];
				$hotelArr[$harr]['hotelName'] = $hotelValue['name'];			
				$hotelArr[$harr]['hotelImage'] = $hotelValue['img'][0]['tns'];
				$hotelArr[$harr]['hotelRating'] = $hotelValue['rt'];
				$hotelArr[$harr]['hotelLongitute'] = $hotelValue['gl']['ln'];
				$hotelArr[$harr]['hotelLattitude'] = $hotelValue['gl']['lt'];
				$hotelArr[$harr]['hotelAddress'] = $hotelValue['ad']['adr'];
				$hotelArr[$harr]['hotelCityName'] = $hotelValue['ad']['city']['name'];
				$hotelArr[$harr]['hotelCountryName'] = $hotelValue['ad']['country']['name'];
				$hotelArr[$harr]['propertyType'] = $hotelValue['pt'];
				$hotelArr[$harr]['mealInfo'] = $hotelValue['pops'][0]['fc'][0];
				$hotelArr[$key]['totalPrice'] = $hotelValue['pops'][0]['tpc'];
	
			}
			
			$harr++;

		}
		// echo "<pre>"; print_r($hotelArr);
	//	 die;
		$columns = array_column($hotelArr, 'totalPrice');
		array_multisort($columns, SORT_ASC, $hotelArr);	
		
		//echo '<pre>'; print_r($hotelArr); die;
		$data['hotelList'] = $hotelArr;
		$data['cityName'] = $cityName;

		$diff = abs(strtotime($checkoutDate) - strtotime($checkinDate));
		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

		$data['nights']  = $days;



		$this->load->view('hotel_filter',$data);

	}

	private function callAPI($data){

	
		$url = 'https://apitest.tripjack.com/hms/v1/hotel-searchquery-list';	

		$payload = json_encode(array("searchQuery" => $data, "sync" => false));
		
		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));
		return $ch;

	}

	private function gethotelList($data){

		//print_r($data); die;
		$url = 'https://apitest.tripjack.com/hms/v1/hotel-search';	

		$payload = json_encode(array("searchId" => $data));
		//echo '<pre>'; print_r($payload); die;
		
		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));
		return $ch;

	}
	  
	public function search_hotels(){

		$data=$this->comman_data();
		
		$this->load->model('Hotels_page') ;
		$data['search_hotels']=$this->Hotels_page->search_hotels();

		$this->load->view('search_hotel',$data);
			  
			  
	}

	public function booking_hotels(){

	//	$this->load->library('session');

		$data=$this->comman_data();

		$hotelId =  $this->input->get('hotelId');
		$adults =  $this->input->get('adult'); 
		$childs =  $this->input->get('child');
		$rooms =  $this->input->get('room');
		$guestInfo =  $this->input->get('guestInfo');
		$ch = $this->getHotelDetails($hotelId);
		$result = curl_exec($ch);
		$response_array = json_decode($result, true);

	//	echo '<pre>'; print_r($response_array); die;

		$data['hotelDetail'] = $response_array['hotel'];
		$data['hotelSubmitRequest'] = $response_array['searchQuery'];
		$data['adults'] = $adults;
		$data['childs'] = $childs;
		$data['rooms'] = $rooms;
		$data['guestInfo'] = $guestInfo;

	   $this->load->model('Hotels_page') ;
	   $data['booking_hotels']=$this->Hotels_page->booking_hotels();

	   $this->load->view('booking_hotel',$data);
   
   
	}


	function getHotelDetails($hotelId){

		$url = 'https://apitest.tripjack.com/hms/v1/hotelDetail-search';	

		$payload = json_encode(array("id" => $hotelId));
		//echo '<pre>'; print_r($payload); die;
		
		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));
		return $ch;

	}

	public function booking(){

	
		// print_r($_SESSION);
		//  die;
	 	 $data=$this->comman_data();
		 
		$hotelId =  $this->input->get('hId');
		$optionId =  $this->input->get('oid');
		$adults =  $this->input->get('ad'); 
		$childs =  $this->input->get('ch');
		$rooms =  $this->input->get('ro');
		$guestInfo =  $this->input->get('gi');

		$data['totalRoom'] = $rooms;
		// $totalAdult = count($_SESSION['noofadults']);
		// $totalChild = count($_SESSION['noofchild']);

		
		
		$data['totalGuest'] = $adults + $childs; 

	 	// $hotelId =$this->uri->segment(3);
		// $optionId =$this->uri->segment(4);

		$ch = $this->getRoomDetails($hotelId,$optionId);
		$result = curl_exec($ch);
		$response_array = json_decode($result, true);
	//	echo '<pre>'; print_r($response_array); die;

		$data['hotel_id'] = $hotelId;
		$data['option_id'] = $optionId;

		$data['hotelSummary'] = $response_array['hInfo'];
		$data['bookingId'] = $response_array['bookingId'];


	   $this->load->model('Hotels_page') ;
	   $data['hotel_reservation']=$this->Hotels_page->hotel_reservation();

	   $this->load->view('booking_hotel_page',$data);
   
   
	}

	function getRoomDetails($hotelId,$optionId){

		
		$url = 'https://apitest.tripjack.com/hms/v1/hotel-review';	

		$payload = json_encode(array("hotelId" => $hotelId,"optionId" => $optionId));
		//echo '<pre>'; print_r($payload); die;
		
		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));
		return $ch;

	}

	public function success(){

		$data=$this->comman_data();
	  
	   $this->load->model('Hotels_page') ;
	   $data['hotel_success']=$this->Hotels_page->success();

	   $this->load->view('booking_success',$data);
   
   
	}

	public function getCityBySearch(){

		
		$searchDeoparture=$this->input->post('search');
		$this->load->model('Hotels_page') ;
		$city = $this->Hotels_page->getCityBySearch($searchDeoparture);
	//	print_r($city); die;
		if(count($city > 0)){

			$city['status'] = 1;
			echo json_encode($city);

		}else{

			$city['status'] = 0;
			echo json_encode($city);
		}

	}

	public function getRoomOptions(){
 
		//echo '<pre>'; print_r($_POST); die;
 
		$hotelId = $_POST['hotelId'];
		$optionId = $_POST['optionId'];
		$roomName = $_POST['roomName'];
		$roomType = $_POST['roomType'];
		$totalPrice = $_POST['totalPrice'];
		$hotelName = $_POST['hotelName'];
		$address = $_POST['address'];
		$rating = $_POST['rating'];
		$rooms = $_POST['rooms'];
		$adults = $_POST['adults'];
		$childs = $_POST['childs'];
		$guestinfo = $_POST['guestinfo'];

		$response_array = array(
			
			'roomName' => $roomName,
			'roomType' => $roomType,
			'totalPrice' => $totalPrice,
			'optionId' => $optionId,
			'hotelId' => $hotelId,
			'hotelName' => $hotelName,
			'address' => $address,
			'rating' => $rating,
			'rooms' => $rooms,
			'adults' => $adults,
			'childs' => $childs,
			'guestinfo' => $guestinfo,

			
		);


		// $ch = $this->getRoomDetails($hotelId,$optionId);
		// $result = curl_exec($ch);
		// $response_array = json_decode($result, true);

		$data['hotelDetail'] =  $response_array;
		$this->load->view('roomoption',$data);

	}

	public function getCancellationDetail(){

		//echo '<pre>'; print_r($_POST); die;
		$optionId = $_POST['optionId'];
		$hotelId = $_POST['hotelId'];

		// {
		// 	"id":"hsid5634131708-549489956",
		// 	"optionId":"26_10605653-457_0_65112"
		// }

		$url = 'https://apitest.tripjack.com/hms/v1/hotel-cancellation-policy/';	

		$payload = json_encode(array("id" => $optionId,"hotelId" => $hotelId));
	//	echo '<pre>'; print_r($payload); die;
		
		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));
		
		$ch = $this->getHotelDetails($hotelId);
		$result = curl_exec($ch);
		$response_array = json_decode($result, true);
		//echo '<pre>'; print_r($response_array);

		$data['getCancellationList'] = $response_array['cancellationPolicy'];
		$this->load->view('hotel_cancellation',$data);

	}
	

	public function guestDetails(){

		//echo "<pre>"; print_r($_POST); die;

		$title = $this->input->post('title');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$phone_no = $this->input->post('phone_no');
		$hotel_id = $this->input->post('hotel_id');
		$option_id = $this->input->post('option_id');
		$bookingId = $this->input->post('bookingId');
		$totalAmount = $this->input->post('amount');
		$codes = $this->input->post('codes');
		$totalRooms = $this->input->post('rooms');

		for($i=0; $i < count($title); $i++){

			$data = array();

			$data['title'] =  $title[$i];
			$data['first_name'] =  $first_name[$i];
			$data['last_name'] =  $last_name[$i];
			$data['email'] =  $email;
			$data['phone_no'] =  $phone_no;
			$data['hotel_id'] =  $hotel_id;
			$data['option_id'] =  $option_id;
			$data['booking_id'] =  $bookingId;
			$data['phone_codes'] =  $codes;
			$data['status'] = 'Pending';


			if($title[$i] == 'Mr' || $title[$i] == 'Ms'){

				$paxType[$i] = 'ADULT';

			}
			if($title[$i] == 'Master' || $title[$i] == 'cMs'){

				$paxType[$i] = 'CHILD';

			}
			
			$data['pax_type'] = $paxType[$i];

			$this->load->model('Hotels_page') ;

			$id = $this->Hotels_page->insertGuestDetails($data);
			
			
				$roomTravellerInfo = array(
					

					'travellerInfo' => array( 
						array(
	
							'fN' => $first_name[$i],
							'lN' => $last_name[$i],
							'ti' => $title[$i],
							'pt' => $paxType[$i],
	
						), ),
						
							
				);
		
				//echo '<pre>'; print_r($roomTravellerInfo); die;

				$deliveryInfo = array(


					'emails' => array($email),
					'contacts' => array($phone_no),
					'code' => array($codes),


				);

				$requestDatas = array(

					'bookingId' => $bookingId,
					'roomTravellerInfo' =>array($roomTravellerInfo),
					'deliveryInfo' => $deliveryInfo,
					'type' => "HOTEL",
					'paymentInfos' => array( array('amount' => $totalAmount), ),

				);

				//echo '<pre>'; print_r($requestDatas);  die;
				
				$ch = $this->getBooking($requestDatas);
				$result = curl_exec($ch);
				$response_array = json_decode($result, true);


				//echo '<pre>'; print_r($response_array); 

				

				$bookingId = $response_array['bookingId'];

				$bookingIds = array('bookingId' => $bookingId);

				$cha = $this->getBookingDetails($bookingIds);
				$results = curl_exec($cha);
				$bookingDetails = json_decode($results, true);
			

				$orderDetails = $bookingDetails['order'];
				$orderItemDetails = $bookingDetails['itemInfos']['HOTEL']['hInfo'];

				$dataOrder = array();

				$dataOrder['booking_id'] = $orderDetails['bookingId'];
				$dataOrder['total_amount'] = $orderDetails['amount'];
				$dataOrder['status'] = $orderDetails['status'];
				$dataOrder['emails'] = $orderDetails['deliveryInfo']['emails'][0];
				$dataOrder['contacts'] = $orderDetails['deliveryInfo']['contacts'][0];
				$dataOrder['codes'] = $orderDetails['deliveryInfo']['code'][0];
				$dataOrder['created_on'] = $orderDetails['createdOn'];		
				
				$data=$this->comman_data();	
				$this->load->model('Hotels_page');

				$orderId = $this->Hotels_page->insertHotelOders($dataOrder);
					//echo $orderId; 

				if($orderId > 0){

					$dataItem = array();

					$dataItem['booking_id'] = $orderDetails['bookingId'];
					$dataItem['order_id'] = $orderId;
					$dataItem['hotel_name'] = $orderItemDetails['name'];
					$dataItem['hotel_desc'] = $orderItemDetails['des'];
					$dataItem['hotel_rating'] = $orderItemDetails['rt'];
					$dataItem['hotel_gl_lantitude'] = $orderItemDetails['gl']['ln'];
					$dataItem['hotel_gl_longitutde'] = $orderItemDetails['gl']['lt'];
					$dataItem['hotel_address'] = $orderItemDetails['ad']['adr'];
					$dataItem['hotel_city'] = $orderItemDetails['ad']['city']['name'];
					$dataItem['hotel_country'] = $orderItemDetails['ad']['country']['name'];

					$orderItemId = $this->Hotels_page->insertHotelOdersDetails($dataItem);
					//echo $orderItemId; die;			

					$dataItemRoom = array();

					foreach ($orderItemDetails['ops'] as $key => $orderItemValue) {

						//echo '<pre>'; print_r($orderItemValue); 

						$dataItemRoom['booking_id'] = $orderDetails['bookingId'];
						$dataItemRoom['order_id'] = $orderId;
						$dataItemRoom['hotel_room_category'] = $orderItemValue['ris'][0]['rc'];
						$dataItemRoom['hotel_room_id'] = $orderItemValue['ris'][0]['id'];
						$dataItemRoom['hotel_room_type'] = $orderItemValue['ris'][0]['rt'];
						$dataItemRoom['hotel_adult'] = $orderItemValue['ris'][0]['adt'];
						$dataItemRoom['hotel_child'] = $orderItemValue['ris'][0]['chd'];
						$dataItemRoom['hotel_meal_bases'] = $orderItemValue['ris'][0]['mb'];
						$dataItemRoom['hotel_room_price'] = $orderItemValue['ris'][0]['tp'];
						$dataItemRoom['hotel_checkin_date'] = $orderItemValue['ris'][0]['checkInDate'];
						$dataItemRoom['hotel_checkout_date'] = $orderItemValue['ris'][0]['checkOutDate'];
						$dataItemRoom['hotel_room_deadline'] = $orderItemValue['ris'][0]['ddt'];

						
					}

					$orderItemRoomId = $this->Hotels_page->insertHotelOdersRoomDetails($dataItemRoom);		 

					redirect(base_url('hotels/confirmation?bookingId='.$bookingId));


				}else{



				}

		}


		//die;


	}


	function getBooking($requestDatas){

		$url = 'https://apitest.tripjack.com/oms/v1/hotel/book';
			
		$payloadss = json_encode($requestDatas);

		//echo '<pre>'; print_r($payloadss); die;

		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payloadss);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));
		return $ch;

	}

	function getBookingDetails($bookingId){

		$url = 'https://apitest.tripjack.com/oms/v1/hotel/booking-details';
			
		$payloadss = json_encode($bookingId);

		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payloadss);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));
		return $ch;

	}


	public function  confirmation(){

		$data=$this->comman_data();	  

		$this->load->model('Hotels_page');

		$bookingId = $this->input->get('bookingId');
		$data['hotelOrder'] = $this->Hotels_page->getHotelOrder($bookingId);
		$data['hotel_reservation']=$this->Hotels_page->hotel_reservation();

		$this->load->view('booking_confirmation',$data);

	}
	 
}

?>
