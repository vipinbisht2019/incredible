<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flights extends User_controller 
{

   	public function index()
	{	

		if($_POST['bookingType'] == 'O'){
			
			$data=$this->comman_data();	   
			$this->load->model('Flights_page');

			$deptDate = date("Y-m-d", strtotime($_POST['departure_date']));

			$dept = $this->input->post('departure');
			$desti = $this->input->post('destination');
			$departureDate = $this->input->post('departure_date');
			$adultPax = $this->input->post('adultPax');
			$childPax = $this->input->post('childPax');
			$infantPax = $this->input->post('infantPax');

			preg_match('#\((.*?)\)#', $dept, $match);
			$departure =  $match[1];


			preg_match('#\((.*?)\)#', $desti, $match);
			$destination =  $match[1];
		
			if($this->session->userdata('flightdepartureCity2')!='')
			{
				$this->session->unset_userdata('flightdepartureCity2');					
			
			}
			
			if($this->session->userdata('flightdepartureCity3')!='')
			{
				$this->session->unset_userdata('flightdepartureCity3');					
				
			}
			
			if($this->session->userdata('flightdepartureCity4')!='')
			{
				$this->session->unset_userdata('flightdepartureCity4');					
				
			}
			
			if($this->session->userdata('flightdepartureCity5')!='')
			{
				$this->session->unset_userdata('flightdepartureCity5');					
				//	die();
			}
			
			
			$this->session->set_userdata('adult_user',$adultPax);
			$this->session->set_userdata('child_user',$childPax);
			$this->session->set_userdata('infant_user',$infantPax);
			
			//	die();
			$travelClass = $this->input->post('travelClass');

			if (!empty($_POST["directFlight"])) {

				$directFlight = $_POST["directFlight"];
			}	else{

				$directFlight = "true";
			}

			if (!empty($_POST["creditShell"])) {

				$creditShell = $_POST["creditShell"];
			}	else{

				$creditShell = "false";
			}

			
			
			$paxinfo = array(


				'ADULT' => $_POST['adultPax'],
				'CHILD' => $_POST['childPax'],
				'INFANT' => $_POST['infantPax'],

			);

			$requestData = array(

				'cabinClass' => $_POST['travelClass'],
				'paxInfo' => $paxinfo,
				'routeInfos' =>array( 
					array(
						'fromCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'travelDate' => $deptDate,
					)
				),
						'searchModifiers' => array('isDirectFlight' => $directFlight,'isConnectingFlight' => $creditShell),
					

			);

			
			$ch = $this->callAPI($requestData);
			$result = curl_exec($ch);
			$response_array = json_decode($result, true);

			// echo "<pre>"; print_r($result); die;

			$flightArray = array();
			$flightFareDetails = array();
			$flightPriceAray = array();
			$totalPriceArray = array();


			if(empty(!$response_array['searchResult'])){

				$flightArray = $response_array['searchResult']['tripInfos']['ONWARD'];
				$totalFlight = count($flightArray); 
				$farr=0;
				$parrentFlight = array();

				foreach ($flightArray as $key => $flightValue) {

					$flightListArray =  $flightValue['sI'];
					$flightPriceListArray =  $flightValue['totalPriceList'];
					$totalPriceArr = count($flightPriceListArray);		
					
					$si = 0; 

					$connectFlight = @$flightListArray[0]['cT'];

					if(!empty($connectFlight)){

						$parrentFlight[$farr]['flightName'] = $flightListArray[0]['fD']['aI']['name'];
						$parrentFlight[$farr]['flghtCode'] = $flightListArray[0]['fD']['aI']['code'];
						$parrentFlight[$farr]['flghtName'] = $flightListArray[0]['fD']['aI']['name'];
						$parrentFlight[$farr]['flghtNumber'] = $flightListArray[0]['fD']['fN'];
						$parrentFlight[$farr]['airCraftNo'] = $flightListArray[0]['fD']['eT'];

						$parrentFlight[$farr]['arriflightName'] = $flightListArray[1]['fD']['aI']['name'];
						$parrentFlight[$farr]['arriflghtCode'] = $flightListArray[1]['fD']['aI']['code'];
						$parrentFlight[$farr]['arriflghtName'] = $flightListArray[1]['fD']['aI']['name'];
						$parrentFlight[$farr]['arriflghtNumber'] = $flightListArray[1]['fD']['fN'];
						$parrentFlight[$farr]['arriairCraftNo'] = $flightListArray[1]['fD']['eT'];

						$parrentFlight[$farr]['departureAirportName'] = $flightListArray[0]['da']['name'];
						$parrentFlight[$farr]['departureAirportCode'] = $flightListArray[0]['da']['code'];
						$parrentFlight[$farr]['departureAirportTerminal'] = @$flightListArray[0]['da']['terminal'];
						$parrentFlight[$farr]['departureCity'] = $flightListArray[0]['da']['city'];
						$parrentFlight[$farr]['departureCountry'] = $flightListArray[0]['da']['country'];
						$parrentFlight[$farr]['departureCountryCode'] = $flightListArray[0]['da']['countryCode'];

						$parrentFlight[$farr]['connectdepartureAirportName'] = $flightListArray[1]['da']['name'];
						$parrentFlight[$farr]['connectdepartureAirportCode'] = $flightListArray[1]['da']['code'];
						$parrentFlight[$farr]['connectdepartureAirportTerminal'] = @$flightListArray[1]['da']['terminal'];
						$parrentFlight[$farr]['connectdepartureCity'] = $flightListArray[1]['da']['city'];
						$parrentFlight[$farr]['connectdepartureCountry'] = $flightListArray[1]['da']['country'];
						$parrentFlight[$farr]['connectdepartureCountryCode'] = $flightListArray[1]['da']['countryCode'];

						$parrentFlight[$farr]['connectarrivalAirportName'] = $flightListArray[0]['aa']['name'];
						$parrentFlight[$farr]['connectarrivalAirportCode'] = $flightListArray[0]['aa']['code'];
						$parrentFlight[$farr]['connectarrivalAirportTerminal'] = @$flightListArray[0]['aa']['terminal'];
						$parrentFlight[$farr]['connectarrivalCity'] = $flightListArray[0]['aa']['city'];
						$parrentFlight[$farr]['connectarrivalCountry'] = $flightListArray[0]['aa']['country'];
						$parrentFlight[$farr]['connectarrivalCountryCode'] = $flightListArray[0]['aa']['countryCode'];				

						$parrentFlight[$farr]['arrivalAirportName'] = $flightListArray[1]['aa']['name'];
						$parrentFlight[$farr]['arrivalAirportCode'] = $flightListArray[1]['aa']['code'];
						$parrentFlight[$farr]['arrivalAirportTerminal'] = @$flightListArray[1]['aa']['terminal'];
						$parrentFlight[$farr]['arrivalCity'] = $flightListArray[1]['aa']['city'];
						$parrentFlight[$farr]['arrivalCountry'] = $flightListArray[1]['aa']['country'];
						$parrentFlight[$farr]['arrivalCountryCode'] = $flightListArray[1]['aa']['countryCode'];

						$parrentFlight[$farr]['duration'] = $flightListArray[0]['duration'];

						$parrentFlight[$farr]['departureTime'] = date("H:i",strtotime( $flightListArray[0]['dt']));
						$parrentFlight[$farr]['arrivalTime'] = $flightListArray[0]['at'];

						$parrentFlight[$farr]['conduration'] = $flightListArray[1]['duration'];
						$parrentFlight[$farr]['noOfStops'] = $flightListArray[0]['stops'];
						$parrentFlight[$farr]['connoOfStops'] = $flightListArray[1]['stops'];

						$parrentFlight[$farr]['condepartureTime'] = date("H:i",strtotime( $flightListArray[1]['dt']));
						$parrentFlight[$farr]['conarrivalTime'] = $flightListArray[1]['at'];
					

					}else{

					$parrentFlight[$farr]['flightName'] = $flightListArray[0]['fD']['aI']['name'];
					$parrentFlight[$farr]['flghtCode'] = $flightListArray[0]['fD']['aI']['code'];
					$parrentFlight[$farr]['flghtName'] = $flightListArray[0]['fD']['aI']['name'];
					$parrentFlight[$farr]['flghtNumber'] = $flightListArray[0]['fD']['fN'];
					$parrentFlight[$farr]['airCraftNo'] = $flightListArray[0]['fD']['eT'];

					$parrentFlight[$farr]['departureAirportName'] = $flightListArray[0]['da']['name'];
					$parrentFlight[$farr]['departureAirportCode'] = $flightListArray[0]['da']['code'];
					$parrentFlight[$farr]['departureAirportTerminal'] = @$flightListArray[0]['da']['terminal'];
					$parrentFlight[$farr]['departureCity'] = $flightListArray[0]['da']['city'];
					$parrentFlight[$farr]['departureCountry'] = $flightListArray[0]['da']['country'];
					$parrentFlight[$farr]['departureCountryCode'] = $flightListArray[0]['da']['countryCode'];

					$parrentFlight[$farr]['arrivalAirportName'] = $flightListArray[0]['aa']['name'];
					$parrentFlight[$farr]['arrivalAirportCode'] = $flightListArray[0]['aa']['code'];
					$parrentFlight[$farr]['arrivalAirportTerminal'] = @$flightListArray[0]['aa']['terminal'];
					$parrentFlight[$farr]['arrivalCity'] = $flightListArray[0]['aa']['city'];
					$parrentFlight[$farr]['arrivalCountry'] = $flightListArray[0]['aa']['country'];
					$parrentFlight[$farr]['arrivalCountryCode'] = $flightListArray[0]['aa']['countryCode'];

					$parrentFlight[$farr]['noOfStops'] = $flightListArray[0]['stops'];

					$parrentFlight[$farr]['stopOverAirportCode'] = @$flightListArray[0]['so'][0]['code'] ;
					$parrentFlight[$farr]['stopOverAirportName'] = @$flightListArray[0]['so'][0]['name'];
					$parrentFlight[$farr]['stopOverAirportCityCode'] = @$flightListArray[0]['so'][0]['cityCode'];
					$parrentFlight[$farr]['stopOverAirportCityName'] = @$flightListArray[0]['so'][0]['city'];
					$parrentFlight[$farr]['stopOverAirportCountryName'] = @$flightListArray[0]['so'][0]['country'];
					$parrentFlight[$farr]['stopOverAirportCountryCode'] = @$flightListArray[0]['so'][0]['countryCode'];			

									

					$parrentFlight[$farr]['duration'] = $flightListArray[0]['duration'];

					$parrentFlight[$farr]['departureTime'] = date("H:i",strtotime( $flightListArray[0]['dt']));
					$parrentFlight[$farr]['arrivalTime'] = $flightListArray[0]['at'];


					}			

					$parrentFlight[$farr]['connectingFlights'] = @$flightListArray[0]['cT'];

					$price =0;

					foreach ($flightPriceListArray as $key => $fareValue) {
						

						$totalAdultAmount =  $fareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
						$totalChildAmount =  @$fareValue['fd']['CHILD']['fC']['TF'] * $childPax;
						$totalInfantAmount =  @$fareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

						$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

						$parrentFlight[$farr]['pricelist'][$price]['adultrefund'] =  @$fareValue['fd']['ADULT']['rT'];
						$parrentFlight[$farr]['pricelist'][$price]['childrefund'] =  @$fareValue['fd']['CHILD']['rT'];
						$parrentFlight[$farr]['pricelist'][$price]['infantrefund'] =  @$fareValue['fd']['INFANT']['rT'];

						$parrentFlight[$farr]['pricelist'][$price]['adultcabinClass'] =  @$fareValue['fd']['ADULT']['cB'];
						$parrentFlight[$farr]['pricelist'][$price]['childcabinClass'] =  @$fareValue['fd']['CHILD']['cB'];

						$parrentFlight[$farr]['pricelist'][$price]['adultcabinClassFare'] =  @$fareValue['fd']['ADULT']['cc'];
						$parrentFlight[$farr]['pricelist'][$price]['childcabinClassFare'] =  @$fareValue['fd']['CHILD']['cc'];


						$parrentFlight[$farr]['pricelist'][$price]['mealAdult'] =  @$fareValue['fd']['ADULT']['mI'];
						$parrentFlight[$farr]['pricelist'][$price]['mealChild'] =  @$fareValue['fd']['CHILD']['mI'];
						$parrentFlight[$farr]['pricelist'][$price]['mealInfant'] =  @$fareValue['fd']['INFANT']['mI'];

						$parrentFlight[$farr]['pricelist'][$price]['totalFare'] = $totalFare;
						$parrentFlight[$farr]['pricelist'][$price]['fareIdentifier'] = $fareValue['fareIdentifier'];

						$parrentFlight[$farr]['pricelist'][$price]['adultBaseFare'] = $fareValue['fd']['ADULT']['fC']['BF'];
						$parrentFlight[$farr]['pricelist'][$price]['childBaseFare'] = @$fareValue['fd']['CHILD']['fC']['BF'];
						$parrentFlight[$farr]['pricelist'][$price]['infantBaseFare'] = @$fareValue['fd']['INFANT']['fC']['BF'];

						$parrentFlight[$farr]['pricelist'][$price]['adultTaxFare'] = $fareValue['fd']['ADULT']['fC']['TAF'];
						$parrentFlight[$farr]['pricelist'][$price]['childTaxFare'] = @$fareValue['fd']['CHILD']['fC']['TAF'];
						$parrentFlight[$farr]['pricelist'][$price]['infantTaxFare'] = @$fareValue['fd']['INFANT']['fC']['TAF'];
						
						@$parrentFlight[$farr]['pricelist'][$price]['countadultPax']= @$adultPax;
						@$parrentFlight[$farr]['pricelist'][$price]['countchildPax']= @$childPax;
						@$parrentFlight[$farr]['pricelist'][$price]['countinfantPax']= @$infantPax;

						$parrentFlight[$farr]['pricelist'][$price]['adultTotalFare'] = $fareValue['fd']['ADULT']['fC']['BF'] + $fareValue['fd']['ADULT']['fC']['TAF'] ;
					
						@$parrentFlight[$farr]['pricelist'][$price]['childTotalFare'] = $fareValue['fd']['CHILD']['fC']['BF'] + $fareValue['fd']['CHILD']['fC']['TAF'] ;
						
						@$parrentFlight[$farr]['pricelist'][$price]['infantTotalFare'] = $fareValue['fd']['INFANT']['fC']['BF'] + $fareValue['fd']['INFANT']['fC']['TAF'] ;

						$parrentFlight[$farr]['pricelist'][$price]['adultCheckInBaggage'] = @$fareValue['fd']['ADULT']['bI']['iB'];
						$parrentFlight[$farr]['pricelist'][$price]['childCheckInBaggage'] = @$fareValue['fd']['CHILD']['bI']['iB'];

						$parrentFlight[$farr]['pricelist'][$price]['adultCabinBaggage'] = @$fareValue['fd']['ADULT']['bI']['cB'];
						$parrentFlight[$farr]['pricelist'][$price]['childCabinBaggage'] = @$fareValue['fd']['CHILD']['bI']['cB'];
						$parrentFlight[$farr]['pricelist'][$price]['infantCabinBaggage'] = @$fareValue['fd']['INFANT']['bI']['cB'];


						$parrentFlight[$farr]['pricelist'][$price]['flightId']  = $fareValue['id'];

					
						$price++;
						
					}

						usort($parrentFlight[$farr]['pricelist'], function($a, $b) {
							return $a['totalFare'] - $b['totalFare'] ;
						});

						

					$farr++;

				
					
				}

				//echo "<pre>"; print_r($parrentFlight); die;

				$highMaxValue = array();
				$flightArrFilterbh = array();
				$sfi=0;
				foreach ($parrentFlight as $key => $prival) {

					$columns = array_column($prival['pricelist'], 'totalFare');	

					

					//echo "<pre>"; print_r($prival['segmentsList']); 
					// $sii=0;
					// foreach ($prival['segmentsList'] as $key => $segvalue) {
						
					// 	$flightArrFilterbh[$sfi]['flightList'][$sii]['flightCode'] = $segvalue['flghtCode'];
					// 	$flightArrFilterbh[$sfi]['flightList'][$sii]['flightName'] = $segvalue['flghtName'];

					// 	$sii++;
					// }

				
					$max_price = max($columns);
					$min_price = min($columns);

					
					$highMaxValue[] = $max_price; 

					$parrentFlight[$key]['minprice'] = $min_price;
					$parrentFlight[$key]['minimumprice'] = $min_price;

					$flightArrFilterbh[$key]['flightCode'] = $prival['flghtCode'];
					$flightArrFilterbh[$key]['flightName'] = $prival['flghtName'];


					//$parrentFlight[$key]['departureTime'] = date("h:i",strtotime($prival['departureTime']));
					//$parrentFlight[$key]['departureTime'] = date("H:i",strtotime($prival['departureTime']));
					$sfi++;
				}

				// echo "<pre>"; print_r($flightArrFilterbh); 
				// die;
				//echo "<pre>"; print_r($departureTimeList); die;
				

				// usort($parrentFlight, function($d, $t) {
				// 	return $d['departureTime'] - $t['departureTime'] ;
				// });

				usort($parrentFlight, function($a, $b) {
					return $a['pricelist'][0]['totalFare'] - $b['pricelist'][0]['totalFare'] ;
				});

				

				$parentFlightMax = array_reduce($parrentFlight, function ($a, $b) {
					return @$a['pricelist'][0]['totalFare'] > $b['pricelist'][0]['totalFare'] ? $a : $b ;
				});


				//echo "<pre>";  print_r(array_count_values($parrentFlight)); die;
				

				$maximumPrice = $parentFlightMax['minprice'];	
				//$maximumPrice=0;

				//echo "<pre>"; print_r($parrentFlight); die;
				
				if(count($response_array['searchResult']) != 0){

					$data['completeResult'] = $parrentFlight;	
					$data['totalFlight'] = $totalFlight;
					$data['departure'] = $_POST['departure'];
					$data['destination'] = $_POST['destination'];
					$data['flightList'] =  array_map("unserialize", array_unique(array_map("serialize", $flightArrFilterbh)));
					$data['maximumPrice'] = $maximumPrice;


				}else{

					$data['completeResult'] = @$response_array['searchResult']['tripInfos']['ONWARD'];

				}
				curl_close($ch);

				$data['bookingType'] = $_POST['bookingType'];
				$data['departure'] = $_POST['departure'];
				$data['destination'] = $_POST['destination'];
				$data['departureDate'] = $departureDate;
				//$data['departureDate'] = $departureDate;
				$data['adultPax'] = $_POST['adultPax'];
				$data['childPax'] = $_POST['childPax'];
				$data['infantPax'] = $_POST['infantPax'];
				$data['travelClass'] = $_POST['travelClass'];


				$data['flights']=$this->Flights_page->about_data();
				$this->load->view('flights',$data);
			}else{
				
				$flightArray = $response_array['searchResult'];
				$totalFlight = count($flightArray); 

				$flightListArray = array();
				

				$data['completeResult'] = $flightArray;	
				$data['flightList'] = $flightListArray;

				$data['bookingType'] = $_POST['bookingType'];
				$data['departure'] = $_POST['departure'];
				$data['destination'] = $_POST['destination'];
				$data['departureDate'] = $departureDate;
				//$data['departureDate'] = $departureDate;
				$data['adultPax'] = $_POST['adultPax'];
				$data['childPax'] = $_POST['childPax'];
				$data['infantPax'] = $_POST['infantPax'];
				$data['travelClass'] = $_POST['travelClass'];

				

				$data['flights']=$this->Flights_page->about_data();
				$this->load->view('flights',$data);


			}
			
		} 
		else if($_POST['bookingType'] == 'R') {


			//echo '<pre>'; print_r($_POST); die;
			
			$data=$this->comman_data();	   
			$this->load->model('Flights_page');

			$dept = $this->input->post('departure');
			$desti = $this->input->post('destination');
			$departureDate = $this->input->post('departure_date');
			$returnDate = $this->input->post('return_date');
			$adultPax = $this->input->post('adultPax');
			$childPax = $this->input->post('childPax');
			$infantPax = $this->input->post('infantPax');

			preg_match('#\((.*?)\)#', $dept, $match);
			$departure =  $match[1];


			preg_match('#\((.*?)\)#', $desti, $match);
			$destination =  $match[1];


			
			if($this->session->userdata('flightdepartureCity2')!='')
			{
				$this->session->unset_userdata('flightdepartureCity2');					
				//	die();
			}
			
			if($this->session->userdata('flightdepartureCity3')!='')
			{
				$this->session->unset_userdata('flightdepartureCity3');					
				//	die();
			}
			
			if($this->session->userdata('flightdepartureCity4')!='')
			{
				$this->session->unset_userdata('flightdepartureCity4');					
				//	die();
			}
			
			if($this->session->userdata('flightdepartureCity5')!='')
			{
				$this->session->unset_userdata('flightdepartureCity5');					
				//	die();
			}
			
			$this->session->set_userdata('adult_user',$adultPax);
			$this->session->set_userdata('child_user',$childPax);
			$this->session->set_userdata('infant_user',$infantPax);
			
			//	die();
			$travelClass = $this->input->post('travelClass');

			$deptDate = date("Y-m-d", strtotime($_POST['departure_date']));
			$retDate = date("Y-m-d", strtotime(@$_POST['return_date']));

			$paxinfo = array(


				'ADULT' => $_POST['adultPax'],
				'CHILD' => @$_POST['childPax'],
				'INFANT' => @$_POST['infantPax'],

			);

			if (!empty($_POST["directFlight"])) {

				$directFlight = $_POST["directFlight"];
			}	else{

				$directFlight = "true";
			}

			if (!empty($_POST["creditShell"])) {

				$creditShell = $_POST["creditShell"];

			}	else{

				$creditShell = "false";

			}

			$requestData = array(

				'cabinClass' => $_POST['travelClass'],
				'paxInfo' => $paxinfo,
				'routeInfos' =>array( 
					array(
						'fromCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'travelDate' => $deptDate,
					),
					array(

						'fromCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'travelDate' => $retDate,
					)
					),
						'searchModifiers' => array('isDirectFlight' => @$directFlight,'isConnectingFlight' => @$creditShell),
					

			);
			
			
			
			
			

			$ch = $this->callAPI($requestData);
			$result = curl_exec($ch);
			$response_array = json_decode($result, true);		
			
		//	echo "<pre>"; print_r($response_array); die;
			
			$flightArrayCombo = @$response_array['searchResult']['tripInfos']['COMBO'];

			if(!(empty($flightArrayCombo))){

				$flightArray = $flightArrayCombo;
				//echo "<pre>"; print_r($flightArray); die;
				

				$flightDataArr = array();

				$farr=0;

				foreach ($flightArray as $key => $flightValue) {

					$flightListArray =  $flightValue['sI'];
					$flightPriceListArray =  $flightValue['totalPriceList'];
					$totalPriceArr = count($flightPriceListArray);

					$fsi=0;
					$segmentListValOnward = array();
					$segmentListValReturn = array();

					foreach ($flightListArray as $key => $segVal) {
					
						if($segVal['isRs'] == 1) {

							if($segVal['stops'] > 0){

								$segmentListValReturn[$fsi]['segmentType'] = 'ReturnList';

								$segmentListValReturn[$fsi]['flightCode'] = $segVal['fD']['aI']['code'];
								$segmentListValReturn[$fsi]['flightName'] = $segVal['fD']['aI']['name'];
								$segmentListValReturn[$fsi]['flightNumber'] = $segVal['fD']['fN'];
								$segmentListValReturn[$fsi]['flightET'] = $segVal['fD']['eT'];

								$segmentListValReturn[$fsi]['deptAirCode'] = $segVal['da']['code'];
								$segmentListValReturn[$fsi]['deptAirName'] = $segVal['da']['name'];
								$segmentListValReturn[$fsi]['deptCityCode'] = $segVal['da']['cityCode'];
								$segmentListValReturn[$fsi]['deptCityName'] = $segVal['da']['city'];
								$segmentListValReturn[$fsi]['deptCountryCode'] = $segVal['da']['countryCode'];
								$segmentListValReturn[$fsi]['deptCountryName'] = $segVal['da']['country'];
								$segmentListValReturn[$fsi]['deptTerminalName'] = @$segVal['da']['terminal'];

								$segmentListValReturn[$fsi]['arivAirCode'] = $segVal['aa']['code'];
								$segmentListValReturn[$fsi]['arivAirName'] = $segVal['aa']['name'];
								$segmentListValReturn[$fsi]['arivCityCode'] = $segVal['aa']['cityCode'];
								$segmentListValReturn[$fsi]['arivCityName'] = $segVal['aa']['city'];
								$segmentListValReturn[$fsi]['arivtCountryCode'] = $segVal['aa']['countryCode'];
								$segmentListValReturn[$fsi]['arivCountryName'] = $segVal['aa']['country'];
								$segmentListValReturn[$fsi]['arivTerminalName'] = @$segVal['aa']['terminal'];

								$segmentListValReturn[$fsi]['flightDuration'] = $segVal['duration'];

								$segmentListValReturn[$fsi]['flightConnectingTime'] = @$segVal['cT'];

								$segmentListValReturn[$fsi]['departureDateNTime'] = $segVal['dt'];
								$segmentListValReturn[$fsi]['arrivalDateNTime'] = $segVal['at'];

								$segmentListValReturn[$fsi]['segmentNo'] = $segVal['sN'];

								$segmentListValReturn[$fsi]['flightStop'] = $segVal['stops'];

								$fsist = 0;
								foreach ($segVal['so'] as $key => $flightStopValue) {

									$segmentListValReturn[$fsi]['flightStopArr'][$fsist]['flightStopAirCode'] = $flightStopValue['code'];
									$segmentListValReturn[$fsi]['flightStopArr'][$fsist]['flightStopAirName'] = $flightStopValue['name'];
									$segmentListValReturn[$fsi]['flightStopArr'][$fsist]['flightStopCityCode'] = $flightStopValue['cityCode'];
									$segmentListValReturn[$fsi]['flightStopArr'][$fsist]['flightStopCityName'] = $flightStopValue['city'];
									$segmentListValReturn[$fsi]['flightStopArr'][$fsist]['flightStopCountryName'] = $flightStopValue['country'];
									$segmentListValReturn[$fsi]['flightStopArr'][$fsist]['flightStopCountryCode'] = $flightStopValue['countryCode'];
									
									$fsist++;
								}

							}else{

								$segmentListValReturn[$fsi]['segmentType'] = 'ReturnList';

								$segmentListValReturn[$fsi]['flightCode'] = $segVal['fD']['aI']['code'];
								$segmentListValReturn[$fsi]['flightName'] = $segVal['fD']['aI']['name'];
								$segmentListValReturn[$fsi]['flightNumber'] = $segVal['fD']['fN'];
								$segmentListValReturn[$fsi]['flightET'] = $segVal['fD']['eT'];

								$segmentListValReturn[$fsi]['deptAirCode'] = $segVal['da']['code'];
								$segmentListValReturn[$fsi]['deptAirName'] = $segVal['da']['name'];
								$segmentListValReturn[$fsi]['deptCityCode'] = $segVal['da']['cityCode'];
								$segmentListValReturn[$fsi]['deptCityName'] = $segVal['da']['city'];
								$segmentListValReturn[$fsi]['deptCountryCode'] = $segVal['da']['countryCode'];
								$segmentListValReturn[$fsi]['deptCountryName'] = $segVal['da']['country'];
								$segmentListValReturn[$fsi]['deptTerminalName'] = @$segVal['da']['terminal'];

								$segmentListValReturn[$fsi]['arivAirCode'] = $segVal['aa']['code'];
								$segmentListValReturn[$fsi]['arivAirName'] = $segVal['aa']['name'];
								$segmentListValReturn[$fsi]['arivCityCode'] = $segVal['aa']['cityCode'];
								$segmentListValReturn[$fsi]['arivCityName'] = $segVal['aa']['city'];
								$segmentListValReturn[$fsi]['arivtCountryCode'] = $segVal['aa']['countryCode'];
								$segmentListValReturn[$fsi]['arivCountryName'] = $segVal['aa']['country'];
								$segmentListValReturn[$fsi]['arivTerminalName'] = @$segVal['aa']['terminal'];

								$segmentListValReturn[$fsi]['flightDuration'] = $segVal['duration'];

								$segmentListValReturn[$fsi]['flightConnectingTime'] = @$segVal['cT'];

								$segmentListValReturn[$fsi]['departureDateNTime'] = $segVal['dt'];
								$segmentListValReturn[$fsi]['arrivalDateNTime'] = $segVal['at'];

								$segmentListValReturn[$fsi]['segmentNo'] = $segVal['sN'];

								$segmentListValReturn[$fsi]['flightStop'] = $segVal['stops'];

							}
							$fsi++; 
						}
						
					}
					$fri=0;
					foreach ($flightListArray as $key => $segVal) {

						
					
							if(empty($segVal['isRs'])) {

								if($segVal['stops'] > 0){

									$segmentListValOnward[$fri]['segmentType'] = 'onwardList';

									$segmentListValOnward[$fri]['flightCode'] = $segVal['fD']['aI']['code'];
									$segmentListValOnward[$fri]['flightName'] = $segVal['fD']['aI']['name'];
									$segmentListValOnward[$fri]['flightNumber'] = $segVal['fD']['fN'];
									$segmentListValOnward[$fri]['flightET'] = $segVal['fD']['eT'];
									
									$segmentListValOnward[$fri]['deptAirCode'] = $segVal['da']['code'];
									$segmentListValOnward[$fri]['deptAirName'] = $segVal['da']['name'];
									$segmentListValOnward[$fri]['deptCityCode'] = $segVal['da']['cityCode'];
									$segmentListValOnward[$fri]['deptCityName'] = $segVal['da']['city'];
									$segmentListValOnward[$fri]['deptCountryCode'] = $segVal['da']['countryCode'];
									$segmentListValOnward[$fri]['deptCountryName'] = $segVal['da']['country'];
									$segmentListValOnward[$fri]['deptTerminalName'] = @$segVal['da']['terminal'];

									$segmentListValOnward[$fri]['arivAirCode'] = $segVal['aa']['code'];
									$segmentListValOnward[$fri]['arivAirName'] = $segVal['aa']['name'];
									$segmentListValOnward[$fri]['arivCityCode'] = $segVal['aa']['cityCode'];
									$segmentListValOnward[$fri]['arivCityName'] = $segVal['aa']['city'];
									$segmentListValOnward[$fri]['arivtCountryCode'] = $segVal['aa']['countryCode'];
									$segmentListValOnward[$fri]['arivCountryName'] = $segVal['aa']['country'];
									$segmentListValOnward[$fri]['arivTerminalName'] = @$segVal['aa']['terminal'];

									$segmentListValOnward[$fri]['flightDuration'] = $segVal['duration'];

									$segmentListValOnward[$fri]['flightConnectingTime'] = @$segVal['cT'];

									$segmentListValOnward[$fri]['departureDateNTime'] = $segVal['dt'];
									$segmentListValOnward[$fri]['arrivalDateNTime'] = $segVal['at'];

									$segmentListValOnward[$fri]['segmentNo'] = $segVal['sN'];

									$segmentListValOnward[$fri]['flightStop'] = $segVal['stops'];

									$frist = 0;
									foreach ($segVal['so'] as $key => $flightStopValue) {

										$segmentListValOnward[$fri]['flightStopArr'][$frist]['flightStopAirCode'] = $flightStopValue['code'];
										$segmentListValOnward[$fri]['flightStopArr'][$frist]['flightStopAirName'] = $flightStopValue['name'];
										$segmentListValOnward[$fri]['flightStopArr'][$frist]['flightStopCityCode'] = $flightStopValue['cityCode'];
										$segmentListValOnward[$fri]['flightStopArr'][$frist]['flightStopCityName'] = $flightStopValue['city'];
										$segmentListValOnward[$fri]['flightStopArr'][$frist]['flightStopCountryName'] = $flightStopValue['country'];
										$segmentListValOnward[$fri]['flightStopArr'][$frist]['flightStopCountryCode'] = $flightStopValue['countryCode'];
										
										$frist++;
									}

								}else{

									$segmentListValOnward[$fri]['segmentType'] = 'onwardList';

									$segmentListValOnward[$fri]['flightCode'] = $segVal['fD']['aI']['code'];
									$segmentListValOnward[$fri]['flightName'] = $segVal['fD']['aI']['name'];
									$segmentListValOnward[$fri]['flightNumber'] = $segVal['fD']['fN'];
									$segmentListValOnward[$fri]['flightET'] = $segVal['fD']['eT'];
									
									$segmentListValOnward[$fri]['deptAirCode'] = $segVal['da']['code'];
									$segmentListValOnward[$fri]['deptAirName'] = $segVal['da']['name'];
									$segmentListValOnward[$fri]['deptCityCode'] = $segVal['da']['cityCode'];
									$segmentListValOnward[$fri]['deptCityName'] = $segVal['da']['city'];
									$segmentListValOnward[$fri]['deptCountryCode'] = $segVal['da']['countryCode'];
									$segmentListValOnward[$fri]['deptCountryName'] = $segVal['da']['country'];
									$segmentListValOnward[$fri]['deptTerminalName'] = @$segVal['da']['terminal'];

									$segmentListValOnward[$fri]['arivAirCode'] = $segVal['aa']['code'];
									$segmentListValOnward[$fri]['arivAirName'] = $segVal['aa']['name'];
									$segmentListValOnward[$fri]['arivCityCode'] = $segVal['aa']['cityCode'];
									$segmentListValOnward[$fri]['arivCityName'] = $segVal['aa']['city'];
									$segmentListValOnward[$fri]['arivtCountryCode'] = $segVal['aa']['countryCode'];
									$segmentListValOnward[$fri]['arivCountryName'] = $segVal['aa']['country'];
									$segmentListValOnward[$fri]['arivTerminalName'] = @$segVal['aa']['terminal'];

									$segmentListValOnward[$fri]['flightDuration'] = $segVal['duration'];

									$segmentListValOnward[$fri]['flightConnectingTime'] = @$segVal['cT'];

									$segmentListValOnward[$fri]['departureDateNTime'] = $segVal['dt'];
									$segmentListValOnward[$fri]['arrivalDateNTime'] = $segVal['at'];

									$segmentListValOnward[$fri]['segmentNo'] = $segVal['sN'];

									$segmentListValOnward[$fri]['flightStop'] = $segVal['stops'];

								}
							}
					
						$fri++;
					}

					$price = 0;
					$pricelist = array();
					
					foreach ($flightPriceListArray as $key => $fareValue) {

						$totalAdultAmount =  $fareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
						$totalChildAmount =  @$fareValue['fd']['CHILD']['fC']['TF'] * $childPax;
						$totalInfantAmount =  @$fareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

						$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

						$pricelist[$price]['adultrefund'] =  @$fareValue['fd']['ADULT']['rT'];
						$pricelist[$price]['childrefund'] =  @$fareValue['fd']['CHILD']['rT'];
						$pricelist[$price]['infantrefund'] =  @$fareValue['fd']['INFANT']['rT'];

						$pricelist[$price]['adultcabinClass'] =  @$fareValue['fd']['ADULT']['cB'];
						$pricelist[$price]['childcabinClass'] =  @$fareValue['fd']['CHILD']['cB'];

						$pricelist[$price]['adultcabinClassFare'] =  @$fareValue['fd']['ADULT']['cc'];
						$pricelist[$price]['childcabinClassFare'] =  @$fareValue['fd']['CHILD']['cc'];


						$pricelist[$price]['mealAdult'] =  @$fareValue['fd']['ADULT']['mi'];
						$pricelist[$price]['mealChild'] =  @$fareValue['fd']['CHILD']['mi'];
						$pricelist[$price]['mealInfant'] =  @$fareValue['fd']['INFANT']['mi'];

						$pricelist[$price]['totalFare'] = $totalFare;
						$pricelist[$price]['fareIdentifier'] = $fareValue['fareIdentifier'];

						$pricelist[$price]['adultBaseFare'] = $fareValue['fd']['ADULT']['fC']['BF'];
						$pricelist[$price]['childBaseFare'] = @$fareValue['fd']['CHILD']['fC']['BF'];
						$pricelist[$price]['infantBaseFare'] = @$fareValue['fd']['INFANT']['fC']['BF'];

						$pricelist[$price]['adultTaxFare'] = $fareValue['fd']['ADULT']['fC']['TAF'];
						$pricelist[$price]['childTaxFare'] = @$fareValue['fd']['CHILD']['fC']['TAF'];
						$pricelist[$price]['infantTaxFare'] = @$fareValue['fd']['INFANT']['fC']['TAF'];
						
						@$pricelist[$price]['countadultPax']= @$adultPax;
						@$pricelist[$price]['countchildPax']= @$childPax;
						@$pricelist[$price]['countinfantPax']= @$infantPax;

						$pricelist[$price]['adultTotalFare'] = $fareValue['fd']['ADULT']['fC']['BF'] + $fareValue['fd']['ADULT']['fC']['TAF'] ;
					
						@$pricelist[$price]['childTotalFare'] = $fareValue['fd']['CHILD']['fC']['BF'] + $fareValue['fd']['CHILD']['fC']['TAF'] ;
						
						@$pricelist[$price]['infantTotalFare'] = $fareValue['fd']['INFANT']['fC']['BF'] + $fareValue['fd']['INFANT']['fC']['TAF'] ;

						$pricelist[$price]['adultCheckInBaggage'] = @$fareValue['fd']['ADULT']['bI']['iB'];
						$pricelist[$price]['childCheckInBaggage'] = @$fareValue['fd']['CHILD']['bI']['iB'];

						$pricelist[$price]['adultCabinBaggage'] = @$fareValue['fd']['ADULT']['bI']['cB'];
						$pricelist[$price]['childCabinBaggage'] = @$fareValue['fd']['CHILD']['bI']['cB'];
						$pricelist[$price]['infantCabinBaggage'] = @$fareValue['fd']['INFANT']['bI']['cB'];


						$pricelist[$price]['flightId']  = $fareValue['id'];

						
						
						// usort($parrentFlight[$farr]['pricelist'], function($a, $b) {
						// 	return $a['totalFare'] - $b['totalFare'] ;
						// });
						$price++;

					}

					$flightDataArr[$farr]['segmentListValOnward']  = $segmentListValOnward;
					$flightDataArr[$farr]['segmentListValReturn']  = $segmentListValReturn;
					$flightDataArr[$farr]['pricelist']  = $pricelist;

					$farr++;
					
				}

				//	echo "<pre>"; print_r($flightDataArr); die;

				$fin = 0; 
				$flightListValOnward = array(); 
				$flightListValReturn = array(); 

				foreach ($flightDataArr as $key => $flightinvalue) {

					$columns = array_column($flightinvalue['pricelist'], 'totalFare');	

					$max_price = max($columns);
					$min_price = min($columns);

					$flightDataArr[$key]['max_price'] = $max_price; 
					$flightDataArr[$key]['min_price'] = $min_price;


					foreach ($flightinvalue['segmentListValOnward'] as $key => $onwardFlightVal) {

						$flightListValOnward[] = array(
												'flightName' => $onwardFlightVal['flightName'],
												'flightCode' => $onwardFlightVal['flightCode'],
												);
					}
					foreach ($flightinvalue['segmentListValReturn'] as $key => $returnFlightVal) {

						$flightListValReturn[] = array(
												'flightName' => $returnFlightVal['flightName'],
												'flightCode' => $returnFlightVal['flightCode'],
												);
					}
					
					
					$fin++;

				}

				//$flightListArrayUnique = array($uniqueFlightName,$uniqueFlightCode);
				//echo "<pre>"; print_r(array_map("unserialize", array_unique(array_map("serialize", $flightListValOnward))));
				//	echo "<pre>"; print_r(array_unique($flightListValReturn));
				//die; 

				usort($flightDataArr, function($a, $b) {
					return $a['pricelist'][0]['totalFare'] - $b['pricelist'][0]['totalFare'] ;
				});


				$parentFlightMax = array_reduce($flightDataArr, function ($a, $b) {
					return @$a['pricelist'][0]['totalFare'] > $b['pricelist'][0]['totalFare'] ? $a : $b ;
				});		

				// $parentFlightMin = array_reduce($flightDataArr, function ($a, $b) {
				// 	return @$a['pricelist'][0]['totalFare'] > $b['pricelist'][0]['totalFare'] ? $a : $b ;
				// });		

				

				$maximumPrice = $parentFlightMax['max_price'];
				// $minimumPrice = $parentFlightMin['min_price'];

				// echo $minimumPrice; die;

				$bookingType = 'R';
				$data['flightArray'] = $flightDataArr;
				$data['bookingType'] = $bookingType;
				$data['departure'] = $_POST['departure'];
				$data['destination'] = $_POST['destination'];
				$data['departureDate'] = $departureDate;
				$data['returnDate'] = $_POST['return_date'];
				$data['adultPax'] = $_POST['adultPax'];
				$data['childPax'] = $_POST['childPax'];
				$data['infantPax'] = $_POST['infantPax'];
				$data['travelClass'] = $_POST['travelClass'];
				$data['maximumPrice'] = $maximumPrice;
				$data['flightOnwardList'] = array_map("unserialize", array_unique(array_map("serialize", $flightListValOnward)));
				$data['flightReturnList'] = array_map("unserialize", array_unique(array_map("serialize", $flightListValReturn)));
				
				$this->load->view('flights_international',$data);


			}else{

				$flightArray = $response_array['searchResult']['tripInfos']['ONWARD'];			

				$totalFlight = count($flightArray); 
				
				$farr=0;
				$parrentFlight = array();

				foreach ($flightArray as $key => $flightValue) {

					$flightListArray =  $flightValue['sI'];
					$flightPriceListArray =  $flightValue['totalPriceList'];
					$totalPriceArr = count($flightPriceListArray);
					

					$parrentFlight[$farr]['flightName'] = $flightListArray[0]['fD']['aI']['name'];
					$parrentFlight[$farr]['flghtCode'] = $flightListArray[0]['fD']['aI']['code'];
					$parrentFlight[$farr]['flghtName'] = $flightListArray[0]['fD']['aI']['name'];
					$parrentFlight[$farr]['flghtNumber'] = $flightListArray[0]['fD']['fN'];
					$parrentFlight[$farr]['airCraftNo'] = $flightListArray[0]['fD']['eT'];

					$parrentFlight[$farr]['departureAirportName'] = $flightListArray[0]['da']['name'];
					$parrentFlight[$farr]['departureAirportCode'] = $flightListArray[0]['da']['code'];
					$parrentFlight[$farr]['departureAirportTerminal'] = @$flightListArray[0]['da']['terminal'];
					$parrentFlight[$farr]['departureCity'] = $flightListArray[0]['da']['city'];
					$parrentFlight[$farr]['departureCountry'] = $flightListArray[0]['da']['country'];
					$parrentFlight[$farr]['departureCountryCode'] = $flightListArray[0]['da']['countryCode'];

					$parrentFlight[$farr]['arrivalAirportName'] = $flightListArray[0]['aa']['name'];
					$parrentFlight[$farr]['arrivalAirportCode'] = $flightListArray[0]['aa']['code'];
					$parrentFlight[$farr]['arrivalAirportTerminal'] = @$flightListArray[0]['aa']['terminal'];
					$parrentFlight[$farr]['arrivalCity'] = $flightListArray[0]['aa']['city'];
					$parrentFlight[$farr]['arrivalCountry'] = $flightListArray[0]['aa']['country'];
					$parrentFlight[$farr]['arrivalCountryCode'] = $flightListArray[0]['aa']['countryCode'];

					$parrentFlight[$farr]['noOfStops'] = $flightListArray[0]['stops'];
					$parrentFlight[$farr]['duration'] = $flightListArray[0]['duration'];

					$parrentFlight[$farr]['departureTime'] = $flightListArray[0]['dt'];
					$parrentFlight[$farr]['arrivalTime'] = $flightListArray[0]['at'];

					$price =0;

					foreach ($flightPriceListArray as $key => $fareValue) {

						$totalAdultAmount =  $fareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
						$totalChildAmount =  @$fareValue['fd']['CHILD']['fC']['TF'] * $childPax;
						$totalInfantAmount =  @$fareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

						$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

						$parrentFlight[$farr]['pricelist'][$price]['adultrefund'] =  @$fareValue['fd']['ADULT']['rT'];
						$parrentFlight[$farr]['pricelist'][$price]['childrefund'] =  @$fareValue['fd']['CHILD']['rT'];
						$parrentFlight[$farr]['pricelist'][$price]['infantrefund'] =  @$fareValue['fd']['INFANT']['rT'];

						$parrentFlight[$farr]['pricelist'][$price]['adultcabinClass'] =  @$fareValue['fd']['ADULT']['cB'];
						$parrentFlight[$farr]['pricelist'][$price]['childcabinClass'] =  @$fareValue['fd']['CHILD']['cB'];

						$parrentFlight[$farr]['pricelist'][$price]['adultcabinClassFare'] =  @$fareValue['fd']['ADULT']['cc'];
						$parrentFlight[$farr]['pricelist'][$price]['childcabinClassFare'] =  @$fareValue['fd']['CHILD']['cc'];


						$parrentFlight[$farr]['pricelist'][$price]['mealAdult'] =  @$fareValue['fd']['ADULT']['mi'];
						$parrentFlight[$farr]['pricelist'][$price]['mealChild'] =  @$fareValue['fd']['CHILD']['mi'];
						$parrentFlight[$farr]['pricelist'][$price]['mealInfant'] =  @$fareValue['fd']['INFANT']['mi'];

						$parrentFlight[$farr]['pricelist'][$price]['totalFare'] = $totalFare;
						$parrentFlight[$farr]['pricelist'][$price]['fareIdentifier'] = $fareValue['fareIdentifier'];

						$parrentFlight[$farr]['pricelist'][$price]['adultBaseFare'] = $fareValue['fd']['ADULT']['fC']['BF'];
						$parrentFlight[$farr]['pricelist'][$price]['childBaseFare'] = @$fareValue['fd']['CHILD']['fC']['BF'];
						$parrentFlight[$farr]['pricelist'][$price]['infantBaseFare'] = @$fareValue['fd']['INFANT']['fC']['BF'];

						$parrentFlight[$farr]['pricelist'][$price]['adultTaxFare'] = $fareValue['fd']['ADULT']['fC']['TAF'];
						$parrentFlight[$farr]['pricelist'][$price]['childTaxFare'] = @$fareValue['fd']['CHILD']['fC']['TAF'];
						$parrentFlight[$farr]['pricelist'][$price]['infantTaxFare'] = @$fareValue['fd']['INFANT']['fC']['TAF'];
						
						@$parrentFlight[$farr]['pricelist'][$price]['countadultPax']= @$adultPax;
						@$parrentFlight[$farr]['pricelist'][$price]['countchildPax']= @$childPax;
						@$parrentFlight[$farr]['pricelist'][$price]['countinfantPax']= @$infantPax;

						$parrentFlight[$farr]['pricelist'][$price]['adultTotalFare'] = $fareValue['fd']['ADULT']['fC']['BF'] + $fareValue['fd']['ADULT']['fC']['TAF'] ;
					
						@$parrentFlight[$farr]['pricelist'][$price]['childTotalFare'] = $fareValue['fd']['CHILD']['fC']['BF'] + $fareValue['fd']['CHILD']['fC']['TAF'] ;
						
						@$parrentFlight[$farr]['pricelist'][$price]['infantTotalFare'] = $fareValue['fd']['INFANT']['fC']['BF'] + $fareValue['fd']['INFANT']['fC']['TAF'] ;

						$parrentFlight[$farr]['pricelist'][$price]['adultCheckInBaggage'] = @$fareValue['fd']['ADULT']['bI']['iB'];
						$parrentFlight[$farr]['pricelist'][$price]['childCheckInBaggage'] = @$fareValue['fd']['CHILD']['bI']['iB'];

						$parrentFlight[$farr]['pricelist'][$price]['adultCabinBaggage'] = @$fareValue['fd']['ADULT']['bI']['cB'];
						$parrentFlight[$farr]['pricelist'][$price]['childCabinBaggage'] = @$fareValue['fd']['CHILD']['bI']['cB'];
						$parrentFlight[$farr]['pricelist'][$price]['infantCabinBaggage'] = @$fareValue['fd']['INFANT']['bI']['cB'];


						$parrentFlight[$farr]['pricelist'][$price]['flightId']  = $fareValue['id'];

											
						$price++;
						
					}

						usort($parrentFlight[$farr]['pricelist'], function($a, $b) {
							return $a['totalFare'] - $b['totalFare'] ;
						});

						$farr++;
					
				}

				
				$highMaxValue = array();
				foreach ($parrentFlight as $key => $prival) {

					$columns = array_column($prival['pricelist'], 'totalFare');	

				
					$max_price = max($columns);
					$min_price = min($columns);

					
					$highMaxValue[] = $max_price; 

					$parrentFlight[$key]['minprice'] = $min_price;
					$flightArrFilterbh[$key]['flightCode'] = $prival['flghtCode'];
					$flightArrFilterbh[$key]['flightName'] = $prival['flghtName'];
					
				}			

				usort($parrentFlight, function($a, $b) {
					return $a['pricelist'][0]['totalFare'] - $b['pricelist'][0]['totalFare'] ;
				});


				$parentFlightMax = array_reduce($parrentFlight, function ($a, $b) {
					return @$a['pricelist'][0]['totalFare'] > $b['pricelist'][0]['totalFare'] ? $a : $b ;
				});		


				$maximumPrice = $parentFlightMax['minprice'];	
				
				//echo "<pre>"; print_r($parrentFlight); die;

				$data['completeResult'] = $parrentFlight;	
				$data['totalFlight'] = $totalFlight;
				$data['departure'] = $_POST['departure'];
				$data['destination'] = $_POST['destination'];
				$data['flightList'] =  array_map("unserialize", array_unique(array_map("serialize", $flightArrFilterbh)));
				$data['maximumPrice'] = $maximumPrice; 			
			

		
			/********************************************* RETURN FLIGHT FETCHING DATA *****************************************/

			$flightArray1 = $response_array['searchResult']['tripInfos']['RETURN'];
			$totalFlight1 = count($flightArray1); 				
			
			$farr1=0;
			$parrentFlight1 = array();

			foreach ($flightArray1 as $key => $flightValues) {

				$flightListArray1 =  $flightValues['sI'];
				$flightPriceListArray1 =  $flightValues['totalPriceList'];
				$totalPriceArr1 = count($flightPriceListArray1);				

				$parrentFlight1[$farr1]['flightName'] = $flightListArray1[0]['fD']['aI']['name'];
				$parrentFlight1[$farr1]['flghtCode'] = $flightListArray1[0]['fD']['aI']['code'];
				$parrentFlight1[$farr1]['flghtName'] = $flightListArray1[0]['fD']['aI']['name'];
				$parrentFlight1[$farr1]['flghtNumber'] = $flightListArray1[0]['fD']['fN'];
				$parrentFlight1[$farr1]['airCraftNo'] = $flightListArray1[0]['fD']['eT'];

				$parrentFlight1[$farr1]['departureAirportName'] = $flightListArray1[0]['da']['name'];
				$parrentFlight1[$farr1]['departureAirportCode'] = $flightListArray1[0]['da']['code'];
				$parrentFlight1[$farr1]['departureAirportTerminal'] = @$flightListArray1[0]['da']['terminal'];
				$parrentFlight1[$farr1]['departureCity'] = $flightListArray1[0]['da']['city'];
				$parrentFlight1[$farr1]['departureCountry'] = $flightListArray1[0]['da']['country'];
				$parrentFlight1[$farr1]['departureCountryCode'] = $flightListArray1[0]['da']['countryCode'];

				$parrentFlight1[$farr1]['arrivalAirportName'] = $flightListArray1[0]['aa']['name'];
				$parrentFlight1[$farr1]['arrivalAirportCode'] = $flightListArray1[0]['aa']['code'];
				$parrentFlight1[$farr1]['arrivalAirportTerminal'] = @$flightListArray1[0]['aa']['terminal'];
				$parrentFlight1[$farr1]['arrivalCity'] = $flightListArray1[0]['aa']['city'];
				$parrentFlight1[$farr1]['arrivalCountry'] = $flightListArray1[0]['aa']['country'];
				$parrentFlight1[$farr1]['arrivalCountryCode'] = $flightListArray1[0]['aa']['countryCode'];

				$parrentFlight1[$farr1]['noOfStops'] = $flightListArray1[0]['stops'];
				$parrentFlight1[$farr1]['duration'] = $flightListArray1[0]['duration'];

				$parrentFlight1[$farr1]['departureTime'] = $flightListArray1[0]['dt'];
				$parrentFlight1[$farr1]['arrivalTime'] = $flightListArray1[0]['at'];

				$price1 =0;

				foreach ($flightPriceListArray1 as $key => $fareValues) {

					$totalAdultAmount1 =  $fareValues['fd']['ADULT']['fC']['TF'] * $adultPax;					
					$totalChildAmount1 =  @$fareValues['fd']['CHILD']['fC']['TF'] * $childPax;
					$totalInfantAmount1 =  @$fareValues['fd']['INFANT']['fC']['TF'] * $infantPax;

					$totalFare1 = $totalAdultAmount1 + $totalChildAmount1 + $totalInfantAmount1;

					$parrentFlight1[$farr1]['pricelists'][$price1]['adultrefund'] =  @$fareValues['fd']['ADULT']['rT'];
					$parrentFlight1[$farr1]['pricelists'][$price1]['childrefund'] =  @$fareValues['fd']['CHILD']['rT'];
					$parrentFlight1[$farr1]['pricelists'][$price1]['infantrefund'] =  @$fareValues['fd']['INFANT']['rT'];

					$parrentFlight1[$farr1]['pricelists'][$price1]['adultcabinClass'] =  @$fareValues['fd']['ADULT']['cB'];
					$parrentFlight1[$farr1]['pricelists'][$price1]['childcabinClass'] =  @$fareValues['fd']['CHILD']['cB'];

					$parrentFlight1[$farr1]['pricelists'][$price1]['adultcabinClassFare'] =  @$fareValues['fd']['ADULT']['cc'];
					$parrentFlight1[$farr1]['pricelists'][$price1]['childcabinClassFare'] =  @$fareValues['fd']['CHILD']['cc'];


					$parrentFlight1[$farr1]['pricelists'][$price1]['mealAdult'] =  @$fareValues['fd']['ADULT']['mi'];
					$parrentFlight1[$farr1]['pricelists'][$price1]['mealChild'] =  @$fareValues['fd']['CHILD']['mi'];
					$parrentFlight1[$farr1]['pricelists'][$price1]['mealInfant'] =  @$fareValues['fd']['INFANT']['mi'];

					$parrentFlight1[$farr1]['pricelists'][$price1]['totalFare'] = $totalFare1;
					$parrentFlight1[$farr1]['pricelists'][$price1]['fareIdentifier'] = $fareValues['fareIdentifier'];

					$parrentFlight1[$farr1]['pricelists'][$price1]['adultBaseFare'] = $fareValues['fd']['ADULT']['fC']['BF'];
					$parrentFlight1[$farr1]['pricelists'][$price1]['childBaseFare'] = @$fareValues['fd']['CHILD']['fC']['BF'];
					$parrentFlight1[$farr1]['pricelists'][$price1]['infantBaseFare'] = @$fareValues['fd']['INFANT']['fC']['BF'];

					$parrentFlight1[$farr1]['pricelists'][$price1]['adultTaxFare'] = $fareValues['fd']['ADULT']['fC']['TAF'];
					$parrentFlight1[$farr1]['pricelists'][$price1]['childTaxFare'] = @$fareValues['fd']['CHILD']['fC']['TAF'];
					$parrentFlight1[$farr1]['pricelists'][$price1]['infantTaxFare'] = @$fareValues['fd']['INFANT']['fC']['TAF'];
					
					@$parrentFlight1[$farr1]['pricelists'][$price1]['countadultPax']= @$adultPax;
					@$parrentFlight1[$farr1]['pricelists'][$price1]['countchildPax']= @$childPax;
					@$parrentFlight1[$farr1]['pricelists'][$price1]['countinfantPax']= @$infantPax;

					$parrentFlight1[$farr1]['pricelists'][$price1]['adultTotalFare'] = $fareValues['fd']['ADULT']['fC']['BF'] + $fareValues['fd']['ADULT']['fC']['TAF'] ;
				
					@$parrentFlight1[$farr1]['pricelists'][$price1]['childTotalFare'] = $fareValues['fd']['CHILD']['fC']['BF'] + $fareValues['fd']['CHILD']['fC']['TAF'] ;
					
					@$parrentFlight1[$farr1]['pricelists'][$price1]['infantTotalFare'] = $fareValues['fd']['INFANT']['fC']['BF'] + $fareValues['fd']['INFANT']['fC']['TAF'] ;

					$parrentFlight1[$farr1]['pricelists'][$price1]['adultCheckInBaggage'] = @$fareValues['fd']['ADULT']['bI']['iB'];
					$parrentFlight1[$farr1]['pricelists'][$price1]['childCheckInBaggage'] = @$fareValues['fd']['CHILD']['bI']['iB'];

					$parrentFlight1[$farr1]['pricelists'][$price1]['adultCabinBaggage'] = @$fareValues['fd']['ADULT']['bI']['cB'];
					$parrentFlight1[$farr1]['pricelists'][$price1]['childCabinBaggage'] = @$fareValues['fd']['CHILD']['bI']['cB'];
					$parrentFlight1[$farr1]['pricelists'][$price1]['infantCabinBaggage'] = @$fareValues['fd']['INFANT']['bI']['cB'];


					$parrentFlight1[$farr1]['pricelists'][$price1]['flightId']  = $fareValues['id'];

				
					$price1++;
					
				}

					usort($parrentFlight1[$farr1]['pricelists'], function($a, $b) {
						return $a['totalFare'] - $b['totalFare'] ;
					});
				
				$farr1++;
				
			}

			$highMaxValue1 = array();
			foreach ($parrentFlight1 as $key => $prival1) {

				$columns1 = array_column($prival1['pricelists'], 'totalFare');	

			
				  $max_price1 = max($columns1);
				  $min_price1 = min($columns1);

				 
				 $highMaxValue1[] = $max_price1; 

				$parrentFlight1[$key]['minprice'] = $min_price1;
				$flightArrFilterbh1[$key]['flightCode'] = $prival1['flghtCode'];
				$flightArrFilterbh1[$key]['flightName'] = $prival1['flghtName'];
				
			}			

			usort($parrentFlight1, function($a, $b) {
				return $a['pricelists'][0]['totalFare'] - $b['pricelists'][0]['totalFare'] ;
			});


			$parentFlightMax1 = array_reduce($parrentFlight1, function ($a, $b) {
				return @$a['pricelists'][0]['totalFare'] > $b['pricelists'][0]['totalFare'] ? $a : $b ;
			});		
			
			$maximumPrice1 = $parentFlightMax1['minprice'];	

			$data['completeResultReturn'] = $parrentFlight1;
			$data['returnMaximumPrice'] = $maximumPrice1; 	
			$data['returnFlightList'] =  array_map("unserialize", array_unique(array_map("serialize", $flightArrFilterbh1)));	

			$data['bookingType'] = $_POST['bookingType'];
			$data['departure'] = $_POST['departure'];
			$data['destination'] = $_POST['destination'];
			$data['departureDate'] = $departureDate;
			$data['returnDate'] = $_POST['return_date'];
			$data['adultPax'] = $_POST['adultPax'];
			$data['childPax'] = $_POST['childPax'];
			$data['infantPax'] = $_POST['infantPax'];
			$data['travelClass'] = $_POST['travelClass'];


			$data['flights']=$this->Flights_page->about_data();
			$this->load->view('flights',$data);
		}

	} 
		else if($_POST['bookingType'] == 'M'){

				//echo "<pre>"; print_r($_POST); die;

			$data=$this->comman_data();	   
			$this->load->model('Flights_page');

			///////// 1st Trip ///////////

			$dept = $this->input->post('departure');
			$desti = $this->input->post('destination');
			$departureDate = $this->input->post('departure_date');

			$adultPax = $this->input->post('adultPax');
			$childPax = $this->input->post('childPax');
			$infantPax = $this->input->post('infantPax');

			$returnDate = $this->input->post('return_date');

			///////// 1st Trip ///////////


			
			

			preg_match('#\((.*?)\)#', $dept, $match);
			$departure =  $match[1];

			preg_match('#\((.*?)\)#', $desti, $match);
			$destination =  $match[1];
			
			if($this->session->userdata('flightdepartureCity2')!='')
			{
				$this->session->unset_userdata('flightdepartureCity2');					
				//	die();
			}
			
			if($this->session->userdata('flightdepartureCity3')!='')
			{
				$this->session->unset_userdata('flightdepartureCity3');					
				//	die();
			}
			
			if($this->session->userdata('flightdepartureCity4')!='')
			{
				$this->session->unset_userdata('flightdepartureCity4');					
				//	die();
			}
			
			if($this->session->userdata('flightdepartureCity5')!='')
			{
				$this->session->unset_userdata('flightdepartureCity5');					
				//	die();
			}
			
			$this->session->set_userdata('adult_user',$adultPax);
			$this->session->set_userdata('child_user',$childPax);
			$this->session->set_userdata('infant_user',$infantPax);
			
			$travelClass = $this->input->post('travelClass');

			$dept1 = $this->input->post('departure1');
			$desti1 = $this->input->post('destination1');

			$dept13 = $this->input->post('departure13');
			$desti13 = $this->input->post('destination13');

			$dept14 = $this->input->post('departure14');
			$desti14 = $this->input->post('destination14');

			$dept15 = $this->input->post('departure15');
			$desti15 = $this->input->post('destination15');

			$dept16 = $this->input->post('departure16');
			$desti16 = $this->input->post('destination16');

			if(!empty($dept1)){ 

				preg_match('#\((.*?)\)#', $dept1, $match);
				$departure1 =  $match[1];

			}
			
			if(!empty($desti1)){ 

				preg_match('#\((.*?)\)#', $desti1, $match);
				$destination1 =  $match[1];

			}

			if(!empty($dept13)){ 

				preg_match('#\((.*?)\)#', $dept13, $match);
				$departure13 =  $match[1];

			}

			if(!empty($desti13)){ 
				preg_match('#\((.*?)\)#', $desti13, $match);
				$destination13 =  $match[1];
			}

			if(!empty($dept14)){ 
				preg_match('#\((.*?)\)#', $dept14, $match);
				$departure14 =  $match[1];
			}
			if(!empty($desti14)){
				preg_match('#\((.*?)\)#', $desti14, $match);
				$destination14 =  $match[1];
			}
			if(!empty($dept15)){
				preg_match('#\((.*?)\)#', $dept15, $match);
				$departure15 =  $match[1];
			}
			if(!empty($desti15)){
				preg_match('#\((.*?)\)#', $desti15, $match);
				$destination15 =  $match[1];
			}
			if(!empty($dept16)){
				preg_match('#\((.*?)\)#', $dept16, $match);
				$departure16 =  $match[1];
			}
			if(!empty($desti16)){
				preg_match('#\((.*?)\)#', $desti16, $match);
				$destination16 =  $match[1];
			}

			$deptDate = date("Y-m-d", strtotime($_POST['departure_date']));
			$retdate = date("Y-m-d", strtotime(@$_POST['return_date']));

			$retdate22 = date("Y-m-d", strtotime($_POST['return_date22']));
			$retdate24 = date("Y-m-d", strtotime(@$_POST['return_date24']));

			$retdate25 = date("Y-m-d", strtotime($_POST['return_date25']));
			$retdate26 = date("Y-m-d", strtotime(@$_POST['return_date26']));

			$directFlight = 'true';
			$creditShell = 'true';

			$paxinfo = array(


				'ADULT' => $_POST['adultPax'],
				'CHILD' => @$_POST['childPax'],
				'INFANT' => @$_POST['infantPax'],

			);
			

			$requestData = array(

				'cabinClass' => $travelClass,
				'paxInfo' => $paxinfo,
				'routeInfos' =>array( 
					array(
						'fromCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'travelDate' => $deptDate,
					),
					array(

						'fromCityOrAirport' => array(
						
							'code' => $departure1,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $destination1,
				
						),
						'travelDate' => $retdate,
					)	
				
					),
						'searchModifiers' => array('isDirectFlight' => @$directFlight,'isConnectingFlight' => @$creditShell),
					

			);

		if(!empty($destination13)){

			$requestData = array(

				'cabinClass' => $travelClass,
				'paxInfo' => $paxinfo,
				'routeInfos' =>array( 
					array(
						'fromCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'travelDate' => $deptDate,
					),
					array(

						'fromCityOrAirport' => array(
						
							'code' => $departure1,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $destination1,
				
						),
						'travelDate' => $retdate,
					),
					 array(

					 	'fromCityOrAirport' => array(
						
					 		'code' => $departure13,
				
					 	),
					 	'toCityOrAirport' => array(
						
					 		'code' => $destination13,
				
					 	),
					 	'travelDate' => $retdate22,
					),
					 			
				
					),
						'searchModifiers' => array('isDirectFlight' => @$directFlight,'isConnectingFlight' => @$creditShell),
					

			);

		}

			if(!empty($destination14)){

				$requestData = array(

					'cabinClass' => $travelClass,
					'paxInfo' => $paxinfo,
					'routeInfos' =>array( 
						array(
							'fromCityOrAirport' => array(
							
								'code' => $departure,
					
							),
							'toCityOrAirport' => array(
							
								'code' => $destination,
					
							),
							'travelDate' => $deptDate,
						),
						array(
	
							'fromCityOrAirport' => array(
							
								'code' => $destination,
					
							),
							'toCityOrAirport' => array(
							
								'code' => $destination1,
					
							),
							'travelDate' => $retdate,
						),
						 array(
	
							 'fromCityOrAirport' => array(
							
								 'code' => $departure13,
					
							 ),
							 'toCityOrAirport' => array(
							
								 'code' => $destination13,
					
							 ),
							 'travelDate' => $retdate22,
						 ),
						  array(
	
							 'fromCityOrAirport' => array(
							
								 'code' => $departure14,
					
							 ),
							 'toCityOrAirport' => array(
							
								 'code' => $destination14,
					
							 ),
							 'travelDate' => $retdate24,
						 )	 					
					
						),
							'searchModifiers' => array('isDirectFlight' => @$directFlight,'isConnectingFlight' => @$creditShell),
						
	
				);

			}

			if(!empty($destination15)){

				$requestData = array(

					'cabinClass' => $travelClass,
					'paxInfo' => $paxinfo,
					'routeInfos' =>array( 
						array(
							'fromCityOrAirport' => array(
							
								'code' => $departure,
					
							),
							'toCityOrAirport' => array(
							
								'code' => $destination,
					
							),
							'travelDate' => $deptDate,
						),
						array(
	
							'fromCityOrAirport' => array(
							
								'code' => $departure1,
					
							),
							'toCityOrAirport' => array(
							
								'code' => $destination1,
					
							),
							'travelDate' => $retdate,
						),
						 array(
	
							 'fromCityOrAirport' => array(
							
								 'code' => $departure13,
					
							 ),
							 'toCityOrAirport' => array(
							
								 'code' => $destination13,
					
							 ),
							 'travelDate' => $retdate22,
						 ),
						  array(
	
							 'fromCityOrAirport' => array(
							
								 'code' => $departure14,
					
							 ),
							 'toCityOrAirport' => array(
							
								 'code' => $destination14,
					
							 ),
							 'travelDate' => $retdate24,
						 )
						 
						 ,
	
						  array(
	
							 'fromCityOrAirport' => array(
							
								 'code' =>$departure15,
					
							 ),
							 'toCityOrAirport' => array(
							
								 'code' =>$destination15,
					
							 ),
							 'travelDate' => $retdate25,
						 )

						),
							'searchModifiers' => array('isDirectFlight' => @$directFlight,'isConnectingFlight' => @$creditShell),
						
	
				);

			}

			if(!empty($destination16)){

				$requestData = array(

					'cabinClass' => $travelClass,
					'paxInfo' => $paxinfo,
					'routeInfos' =>array( 
						array(
							'fromCityOrAirport' => array(
							
								'code' => $departure,
					
							),
							'toCityOrAirport' => array(
							
								'code' => $destination,
					
							),
							'travelDate' => $deptDate,
						),
						array(
	
							'fromCityOrAirport' => array(
							
								'code' => $departure1,
					
							),
							'toCityOrAirport' => array(
							
								'code' => $destination1,
					
							),
							'travelDate' => $retdate,
						),
						 array(
	
							 'fromCityOrAirport' => array(
							
								 'code' => $departure13,
					
							 ),
							 'toCityOrAirport' => array(
							
								 'code' => $destination13,
					
							 ),
							 'travelDate' => $retdate22,
						 ),
						  array(
	
							 'fromCityOrAirport' => array(
							
								 'code' => $departure14,
					
							 ),
							 'toCityOrAirport' => array(
							
								 'code' => $destination14,
					
							 ),
							 'travelDate' => $retdate24,
						 )
						 
						 ,
	
						  array(
	
							 'fromCityOrAirport' => array(
							
								 'code' =>$departure15,
					
							 ),
							 'toCityOrAirport' => array(
							
								 'code' =>$destination15,
					
							 ),
							 'travelDate' => $retdate25,
						 )
						 ,
							array(

								'fromCityOrAirport' => array(
							
									'code' =>$departure16,
					
								),
								'toCityOrAirport' => array(
							
									'code' => $destination16,
					
								),
								'travelDate' => $retdate26,
							)
						),
							'searchModifiers' => array('isDirectFlight' => @$directFlight,'isConnectingFlight' => @$creditShell),
						
	
				);

			}

		//	echo "<pre>"; print_r($requestData); die;
			
			$ch = $this->callAPI($requestData);
			$result = curl_exec($ch);
			$response_array = json_decode($result, true);
			$data['bookingType'] = $_POST['bookingType'];	
			
			//echo "<pre>"; print_r($response_array); die;

			if(empty($response_array)){

				echo "No Flight Available.";

			}else{

				$flightArrayCombo = @$response_array['searchResult']['tripInfos']['COMBO'];
				if(!(empty($flightArrayCombo))){

					$flightArray = $flightArrayCombo;
					//echo "<pre>"; print_r($flightArray); die;
					
	
					$flightDataArr = array();
	
					$farr=0;
	
					foreach ($flightArray as $key => $flightValue) {
	
						$flightListArray =  $flightValue['sI'];
						$flightPriceListArray =  $flightValue['totalPriceList'];
						$totalPriceArr = count($flightPriceListArray);

						$segmentList = array();
						$segmul = 0;
						foreach ($flightListArray as $key => $segVal) {
							
							//echo "<pre>";print_r($segmentVal);

							// $segmentList[$segmul]['segmentType'] = 'onwardList';

							$segmentList[$segmul]['flightCode'] = $segVal['fD']['aI']['code'];
							$segmentList[$segmul]['flightName'] = $segVal['fD']['aI']['name'];
							$segmentList[$segmul]['flightNumber'] = $segVal['fD']['fN'];
							$segmentList[$segmul]['flightET'] = $segVal['fD']['eT'];
							
							$segmentList[$segmul]['deptAirCode'] = $segVal['da']['code'];
							$segmentList[$segmul]['deptAirName'] = $segVal['da']['name'];
							$segmentList[$segmul]['deptCityCode'] = $segVal['da']['cityCode'];
							$segmentList[$segmul]['deptCityName'] = $segVal['da']['city'];
							$segmentList[$segmul]['deptCountryCode'] = $segVal['da']['countryCode'];
							$segmentList[$segmul]['deptCountryName'] = $segVal['da']['country'];
							$segmentList[$segmul]['deptTerminalName'] = @$segVal['da']['terminal'];

							$segmentList[$segmul]['arivAirCode'] = $segVal['aa']['code'];
							$segmentList[$segmul]['arivAirName'] = $segVal['aa']['name'];
							$segmentList[$segmul]['arivCityCode'] = $segVal['aa']['cityCode'];
							$segmentList[$segmul]['arivCityName'] = $segVal['aa']['city'];
							$segmentList[$segmul]['arivtCountryCode'] = $segVal['aa']['countryCode'];
							$segmentList[$segmul]['arivCountryName'] = $segVal['aa']['country'];
							$segmentList[$segmul]['arivTerminalName'] = @$segVal['aa']['terminal'];

							$segmentList[$segmul]['flightDuration'] = $segVal['duration'];

							$segmentList[$segmul]['flightConnectingTime'] = @$segVal['cT'];

							$segmentList[$segmul]['departureDateNTime'] = $segVal['dt'];
							$segmentList[$segmul]['arrivalDateNTime'] = $segVal['at'];

							$segmentList[$segmul]['segmentNo'] = $segVal['sN'];

							$segmentList[$segmul]['flightStop'] = $segVal['stops'];

							if($segVal['stops'] > 0){

								$fsist = 0;

								foreach ($segVal['so'] as $key => $flightStopValue) {

									$segmentList[$segmul]['flightStopArr'][$fsist]['flightStopAirCode'] = $flightStopValue['code'];
									$segmentList[$segmul]['flightStopArr'][$fsist]['flightStopAirName'] = $flightStopValue['name'];
									$segmentList[$segmul]['flightStopArr'][$fsist]['flightStopCityCode'] = $flightStopValue['cityCode'];
									$segmentList[$segmul]['flightStopArr'][$fsist]['flightStopCityName'] = $flightStopValue['city'];
									$segmentList[$segmul]['flightStopArr'][$fsist]['flightStopCountryName'] = $flightStopValue['country'];
									$segmentList[$segmul]['flightStopArr'][$fsist]['flightStopCountryCode'] = $flightStopValue['countryCode'];
									
									$fsist++;
								}

							}

							$segmul++;

						}


						//echo "<pre>"; print_r($segmentList);

						$price = 0;
						$pricelist = array();
						
						foreach ($flightPriceListArray as $key => $fareValue) {

							$totalAdultAmount =  $fareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
							$totalChildAmount =  @$fareValue['fd']['CHILD']['fC']['TF'] * $childPax;
							$totalInfantAmount =  @$fareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

							$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

							$pricelist[$price]['adultrefund'] =  @$fareValue['fd']['ADULT']['rT'];
							$pricelist[$price]['childrefund'] =  @$fareValue['fd']['CHILD']['rT'];
							$pricelist[$price]['infantrefund'] =  @$fareValue['fd']['INFANT']['rT'];

							$pricelist[$price]['adultcabinClass'] =  @$fareValue['fd']['ADULT']['cB'];
							$pricelist[$price]['childcabinClass'] =  @$fareValue['fd']['CHILD']['cB'];

							$pricelist[$price]['adultcabinClassFare'] =  @$fareValue['fd']['ADULT']['cc'];
							$pricelist[$price]['childcabinClassFare'] =  @$fareValue['fd']['CHILD']['cc'];


							$pricelist[$price]['mealAdult'] =  @$fareValue['fd']['ADULT']['mi'];
							$pricelist[$price]['mealChild'] =  @$fareValue['fd']['CHILD']['mi'];
							$pricelist[$price]['mealInfant'] =  @$fareValue['fd']['INFANT']['mi'];

							$pricelist[$price]['totalFare'] = $totalFare;
							$pricelist[$price]['fareIdentifier'] = $fareValue['fareIdentifier'];

							$pricelist[$price]['adultBaseFare'] = $fareValue['fd']['ADULT']['fC']['BF'];
							$pricelist[$price]['childBaseFare'] = @$fareValue['fd']['CHILD']['fC']['BF'];
							$pricelist[$price]['infantBaseFare'] = @$fareValue['fd']['INFANT']['fC']['BF'];

							$pricelist[$price]['adultTaxFare'] = $fareValue['fd']['ADULT']['fC']['TAF'];
							$pricelist[$price]['childTaxFare'] = @$fareValue['fd']['CHILD']['fC']['TAF'];
							$pricelist[$price]['infantTaxFare'] = @$fareValue['fd']['INFANT']['fC']['TAF'];
							
							@$pricelist[$price]['countadultPax']= @$adultPax;
							@$pricelist[$price]['countchildPax']= @$childPax;
							@$pricelist[$price]['countinfantPax']= @$infantPax;

							$pricelist[$price]['adultTotalFare'] = $fareValue['fd']['ADULT']['fC']['BF'] + $fareValue['fd']['ADULT']['fC']['TAF'] ;
						
							@$pricelist[$price]['childTotalFare'] = $fareValue['fd']['CHILD']['fC']['BF'] + $fareValue['fd']['CHILD']['fC']['TAF'] ;
							
							@$pricelist[$price]['infantTotalFare'] = $fareValue['fd']['INFANT']['fC']['BF'] + $fareValue['fd']['INFANT']['fC']['TAF'] ;

							$pricelist[$price]['adultCheckInBaggage'] = @$fareValue['fd']['ADULT']['bI']['iB'];
							$pricelist[$price]['childCheckInBaggage'] = @$fareValue['fd']['CHILD']['bI']['iB'];

							$pricelist[$price]['adultCabinBaggage'] = @$fareValue['fd']['ADULT']['bI']['cB'];
							$pricelist[$price]['childCabinBaggage'] = @$fareValue['fd']['CHILD']['bI']['cB'];
							$pricelist[$price]['infantCabinBaggage'] = @$fareValue['fd']['INFANT']['bI']['cB'];


							$pricelist[$price]['flightId']  = $fareValue['id'];

							
							
							// usort($parrentFlight[$farr]['pricelist'], function($a, $b) {
							// 	return $a['totalFare'] - $b['totalFare'] ;
							// });
							$price++;

						}

						$flightDataArr[$farr]['segmentListValOnward']  = $segmentList;
						$flightDataArr[$farr]['pricelist']  = $pricelist;

						$farr++;
					}

				
	
						//echo "<pre>"; print_r($flightDataArr); die;
	
					// $fin = 0; 
					// $flightListValOnward = array(); 
					// $flightListValReturn = array(); 
	
					// foreach ($flightDataArr as $key => $flightinvalue) {
	
					// 	$columns = array_column($flightinvalue['pricelist'], 'totalFare');	
	
					// 	$max_price = max($columns);
					// 	$min_price = min($columns);
	
					// 	$flightDataArr[$key]['max_price'] = $max_price; 
					// 	$flightDataArr[$key]['min_price'] = $min_price;
	
	
					// 	foreach ($flightinvalue['segmentListValOnward'] as $key => $onwardFlightVal) {
	
					// 		$flightListValOnward[] = array(
					// 								'flightName' => $onwardFlightVal['flightName'],
					// 								'flightCode' => $onwardFlightVal['flightCode'],
					// 								);
					// 	}
					// 	foreach ($flightinvalue['segmentListValReturn'] as $key => $returnFlightVal) {
	
					// 		$flightListValReturn[] = array(
					// 								'flightName' => $returnFlightVal['flightName'],
					// 								'flightCode' => $returnFlightVal['flightCode'],
					// 								);
					// 	}
						
						
					// 	$fin++;
	
					// }
	
					//$flightListArrayUnique = array($uniqueFlightName,$uniqueFlightCode);
					//echo "<pre>"; print_r(array_map("unserialize", array_unique(array_map("serialize", $flightListValOnward))));
					//	echo "<pre>"; print_r(array_unique($flightListValReturn));
					//die; 
	
					// usort($flightDataArr, function($a, $b) {
					// 	return $a['pricelist'][0]['totalFare'] - $b['pricelist'][0]['totalFare'] ;
					// });
	
	
					// $parentFlightMax = array_reduce($flightDataArr, function ($a, $b) {
					// 	return @$a['pricelist'][0]['totalFare'] > $b['pricelist'][0]['totalFare'] ? $a : $b ;
					// });		
	
					// $parentFlightMin = array_reduce($flightDataArr, function ($a, $b) {
					// 	return @$a['pricelist'][0]['totalFare'] > $b['pricelist'][0]['totalFare'] ? $a : $b ;
					// });		
	
					
	
				//	$maximumPrice = $parentFlightMax['max_price'];
					// $minimumPrice = $parentFlightMin['min_price'];
	
					// echo $minimumPrice; die;
	
					$bookingType = 'R';
					$data['flightArray'] = $flightDataArr;
					$data['bookingType'] = $bookingType;
					$data['departure'] = $_POST['departure'];
					$data['destination'] = $_POST['destination'];
					$data['departureDate'] = $departureDate;
					$data['returnDate'] = $_POST['return_date'];
					$data['adultPax'] = $_POST['adultPax'];
					$data['childPax'] = $_POST['childPax'];
					$data['infantPax'] = $_POST['infantPax'];
					$data['travelClass'] = $_POST['travelClass'];
					// $data['maximumPrice'] = $maximumPrice;
					// $data['flightOnwardList'] = array_map("unserialize", array_unique(array_map("serialize", $flightListValOnward)));
					// $data['flightReturnList'] = array_map("unserialize", array_unique(array_map("serialize", $flightListValReturn)));
					
					$this->load->view('flights_multi_international',$data);
	

				}else{ 


				$oneRoute = $response_array['searchResult']['tripInfos'][0];
				$twoRoute = $response_array['searchResult']['tripInfos'][1];
				
				$count_response_multiway = $response_array['searchResult']['tripInfos'];			
		
				$count_multiway = count($count_response_multiway); 
				
				if($count_multiway > 2)
				{
					$thirdRoute = $response_array['searchResult']['tripInfos'][2];			
				}
					
				if($count_multiway > 3)
				{
					$forthRoute = $response_array['searchResult']['tripInfos'][3];			
				}	
					
				if($count_multiway > 4)
				{
					$fifthRoute = $response_array['searchResult']['tripInfos'][4];			
				}	

				if($count_multiway > 5)
				{
					$sixthRoute = $response_array['searchResult']['tripInfos'][5];			
				}	
			

			$fMarr = 0;
			$oneRouteArr = array();

			foreach ($oneRoute as $key => $routeValue) {

				// echo "<pre>"; print_r($routeValue); 

				$oneRouteList = $routeValue['sI'];
				$oneRouteList1 =  $routeValue['totalPriceList'];

				// foreach ($oneRouteList as $key => $oneValue) {

				// 	echo "<pre>"; print_r($oneValue); 
				// 	// echo count($oneValue);

				// 	if(!empty($oneValue['cT'])){



				// 	}else{



				// 	}


				// }

				$oneRouteArr[$key]['flghtCode'] = $oneRouteList[0]['fD']['aI']['code'];
				$oneRouteArr[$key]['flghtName'] = $oneRouteList[0]['fD']['aI']['name'];
				$oneRouteArr[$key]['flightCode'] = $oneRouteList[0]['fD']['aI']['code'];
				$oneRouteArr[$key]['flightName'] = $oneRouteList[0]['fD']['aI']['name'];
				$oneRouteArr[$key]['flghtNumber'] = $oneRouteList[0]['fD']['fN'];
				$oneRouteArr[$key]['flghtaircraft'] = $oneRouteList[0]['fD']['eT'];

				$oneRouteArr[$key]['noOfStops'] = $oneRouteList[0]['stops'];
				$oneRouteArr[$key]['duration'] = $oneRouteList[0]['duration'];

				$oneRouteArr[$key]['duration'] = @$oneRouteList[0]['cT'];

				$oneRouteArr[$key]['departureAirportCode'] = $oneRouteList[0]['da']['code'];
				$oneRouteArr[$key]['departureAirportName'] = $oneRouteList[0]['da']['name'];
				$oneRouteArr[$key]['departureCity'] = $oneRouteList[0]['da']['city'];
				$oneRouteArr[$key]['departureCountry'] = $oneRouteList[0]['da']['country'];
				$oneRouteArr[$key]['departureAirportTerminal'] = @$oneRouteList[0]['da']['terminal'];

				$oneRouteArr[$key]['arrivalAirportCode'] = $oneRouteList[0]['aa']['code'];
				$oneRouteArr[$key]['arrivalAirportName'] = $oneRouteList[0]['aa']['name'];
				$oneRouteArr[$key]['arrivalCity'] = $oneRouteList[0]['aa']['city'];
				$oneRouteArr[$key]['arrivalCountry'] = $oneRouteList[0]['aa']['country'];
				$oneRouteArr[$key]['arrivalAirportTerminal'] = @$oneRouteList[0]['aa']['terminal'];

				$oneRouteArr[$key]['departureDate'] = $oneRouteList[0]['dt'];
				$oneRouteArr[$key]['departureTime'] =  date("H:i",strtotime($oneRouteList[0]['dt']));
				$oneRouteArr[$key]['arrivalTime'] = $oneRouteList[0]['at'];

				$price =0;

				foreach ($oneRouteList1 as $key => $fareValue) {
					

					$totalAdultAmount =  $fareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
					$totalChildAmount =  @$fareValue['fd']['CHILD']['fC']['TF'] * $childPax;
					$totalInfantAmount =  @$fareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

					$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

					$oneRouteArr[$fMarr]['pricelist'][$price]['adultrefund'] =  @$fareValue['fd']['ADULT']['rT'];
					$oneRouteArr[$fMarr]['pricelist'][$price]['childrefund'] =  @$fareValue['fd']['CHILD']['rT'];
					$oneRouteArr[$fMarr]['pricelist'][$price]['infantrefund'] =  @$fareValue['fd']['INFANT']['rT'];

					$oneRouteArr[$fMarr]['pricelist'][$price]['adultcabinClass'] =  @$fareValue['fd']['ADULT']['cB'];
					$oneRouteArr[$fMarr]['pricelist'][$price]['childcabinClass'] =  @$fareValue['fd']['CHILD']['cB'];

					$oneRouteArr[$fMarr]['pricelist'][$price]['adultcabinClassFare'] =  @$fareValue['fd']['ADULT']['cc'];
					$oneRouteArr[$fMarr]['pricelist'][$price]['childcabinClassFare'] =  @$fareValue['fd']['CHILD']['cc'];


					$oneRouteArr[$fMarr]['pricelist'][$price]['mealAdult'] =  @$fareValue['fd']['ADULT']['mI'];
					$oneRouteArr[$fMarr]['pricelist'][$price]['mealChild'] =  @$fareValue['fd']['CHILD']['mI'];
					$oneRouteArr[$fMarr]['pricelist'][$price]['mealInfant'] =  @$fareValue['fd']['INFANT']['mI'];

					$oneRouteArr[$fMarr]['pricelist'][$price]['totalFare'] = $totalFare;
					$oneRouteArr[$fMarr]['pricelist'][$price]['fareIdentifier'] = $fareValue['fareIdentifier'];

					$oneRouteArr[$fMarr]['pricelist'][$price]['adultBaseFare'] = $fareValue['fd']['ADULT']['fC']['BF'];
					$oneRouteArr[$fMarr]['pricelist'][$price]['childBaseFare'] = @$fareValue['fd']['CHILD']['fC']['BF'];
					$oneRouteArr[$fMarr]['pricelist'][$price]['infantBaseFare'] = @$fareValue['fd']['INFANT']['fC']['BF'];

					$oneRouteArr[$fMarr]['pricelist'][$price]['adultTaxFare'] = $fareValue['fd']['ADULT']['fC']['TAF'];
					$oneRouteArr[$fMarr]['pricelist'][$price]['childTaxFare'] = @$fareValue['fd']['CHILD']['fC']['TAF'];
					$oneRouteArr[$fMarr]['pricelist'][$price]['infantTaxFare'] = @$fareValue['fd']['INFANT']['fC']['TAF'];
					
					@$oneRouteArr[$fMarr]['pricelist'][$price]['countadultPax']= @$adultPax;
					@$oneRouteArr[$fMarr]['pricelist'][$price]['countchildPax']= @$childPax;
					@$oneRouteArr[$fMarr]['pricelist'][$price]['countinfantPax']= @$infantPax;

					$oneRouteArr[$fMarr]['pricelist'][$price]['adultTotalFare'] = $fareValue['fd']['ADULT']['fC']['BF'] + $fareValue['fd']['ADULT']['fC']['TAF'] ;
				
					@$oneRouteArr[$fMarr]['pricelist'][$price]['childTotalFare'] = $fareValue['fd']['CHILD']['fC']['BF'] + $fareValue['fd']['CHILD']['fC']['TAF'] ;
					
					@$oneRouteArr[$fMarr]['pricelist'][$price]['infantTotalFare'] = $fareValue['fd']['INFANT']['fC']['BF'] + $fareValue['fd']['INFANT']['fC']['TAF'] ;

					$oneRouteArr[$fMarr]['pricelist'][$price]['adultCheckInBaggage'] = @$fareValue['fd']['ADULT']['bI']['iB'];
					$oneRouteArr[$fMarr]['pricelist'][$price]['childCheckInBaggage'] = @$fareValue['fd']['CHILD']['bI']['iB'];

					$oneRouteArr[$fMarr]['pricelist'][$price]['adultCabinBaggage'] = @$fareValue['fd']['ADULT']['bI']['cB'];
					$oneRouteArr[$fMarr]['pricelist'][$price]['childCabinBaggage'] = @$fareValue['fd']['CHILD']['bI']['cB'];
					$oneRouteArr[$fMarr]['pricelist'][$price]['infantCabinBaggage'] = @$fareValue['fd']['INFANT']['bI']['cB'];


					$oneRouteArr[$fMarr]['pricelist'][$price]['flightId']  = $fareValue['id'];

					
					$price++;
					
				}
					usort($oneRouteArr[$fMarr]['pricelist'], function($a, $b) {
						return $a['totalFare'] - $b['totalFare'] ;
					});

				$fMarr++;

				
			}
			die;
			$highMaxValue = array();
			$flightArrFilterbh = array();

			$sfi=0;
			
			foreach ($oneRouteArr as $key => $prival) {

				$columns = array_column($prival['pricelist'], 'totalFare');	
			
				  $max_price = max($columns);
				  $min_price = min($columns);

				 
				 $highMaxValue[] = $max_price; 

				$oneRouteArr[$key]['minprice'] = $min_price;
				$oneRouteArr[$key]['minimumprice'] = $min_price;

				$flightArrFilterbh[$key]['flightCode'] = $prival['flghtCode'];
				$flightArrFilterbh[$key]['flightName'] = $prival['flghtName'];

				$sfi++;
			}

			usort($oneRouteArr, function($a, $b) {
				return $a['pricelist'][0]['totalFare'] - $b['pricelist'][0]['totalFare'] ;
			});

			

			$oneRouteMax = array_reduce($oneRouteArr, function ($a, $b) {
				return @$a['pricelist'][0]['totalFare'] > $b['pricelist'][0]['totalFare'] ? $a : $b ;
			});

			//	echo "<pre>"; print_r($oneRouteArr); die;

			$maximumPrice = $oneRouteMax['minprice'];	
			$data['maximumPrice'] = $maximumPrice;
			$data['completeResult'] = $oneRouteArr;
			$data['flightList'] =  array_map("unserialize", array_unique(array_map("serialize", $flightArrFilterbh)));			

			$fMMarr = 0;
			$twoRouteArr = array(); 
			foreach($twoRoute as $key => $routeValue1) {


				$twoRouteList = $routeValue1['sI'];

				//echo '<pre>'; print_r($routeValue1); 

				$twoRouteArr[$key]['flghtCode'] = $twoRouteList[0]['fD']['aI']['code'];
				$twoRouteArr[$key]['flghtName'] = $twoRouteList[0]['fD']['aI']['name'];
				$twoRouteArr[$key]['flghtNumber'] = $twoRouteList[0]['fD']['fN'];
				$twoRouteArr[$key]['flghtaircraft'] = $twoRouteList[0]['fD']['eT'];


				$twoRouteArr[$key]['noOfStops'] = $twoRouteList[0]['stops'];
				$twoRouteArr[$key]['duration'] = $twoRouteList[0]['duration'];
				
				$twoRouteArr[$key]['departureAirportCode'] = $twoRouteList[0]['da']['code'];
				$twoRouteArr[$key]['departureAirportName'] = $twoRouteList[0]['da']['name'];
				$twoRouteArr[$key]['departureCity'] = $twoRouteList[0]['da']['city'];
				$twoRouteArr[$key]['departureCountry'] = $twoRouteList[0]['da']['country'];
				$twoRouteArr[$key]['departureAirportTerminal'] = @$twoRouteList[0]['da']['terminal'];

				$twoRouteArr[$key]['arrivalAirportCode'] = $twoRouteList[0]['aa']['code'];
				$twoRouteArr[$key]['arrivalAirportName'] = $twoRouteList[0]['aa']['name'];
				$twoRouteArr[$key]['arrivalCity'] = $twoRouteList[0]['aa']['city'];
				$twoRouteArr[$key]['arrivalCountry'] = $twoRouteList[0]['aa']['country'];
				$twoRouteArr[$key]['arrivalAirportTerminal'] = @$twoRouteList[0]['aa']['terminal'];

				$twoRouteArr[$key]['departureDate'] = $twoRouteList[0]['dt'];
				$twoRouteArr[$key]['departureTime'] = date("H:i",strtotime( $twoRouteList[0]['dt']));
				$twoRouteArr[$key]['arrivalTime'] = $twoRouteList[0]['at'];

				$twoRouteArr1 =  $routeValue1['totalPriceList'];

				$price1 =0;

				foreach ($twoRouteArr1 as $key => $twofareValue) {
					

					$totalAdultAmount =  $twofareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
					$totalChildAmount =  @$twofareValue['fd']['CHILD']['fC']['TF'] * $childPax;
					$totalInfantAmount =  @$twofareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

					$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

					$twoRouteArr[$fMMarr]['pricelists'][$price1]['adultrefund'] =  @$twofareValue['fd']['ADULT']['rT'];
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['childrefund'] =  @$twofareValue['fd']['CHILD']['rT'];
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['infantrefund'] =  @$twofareValue['fd']['INFANT']['rT'];

					$twoRouteArr[$fMMarr]['pricelists'][$price1]['adultcabinClass'] =  @$twofareValue['fd']['ADULT']['cB'];
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['childcabinClass'] =  @$twofareValue['fd']['CHILD']['cB'];

					$twoRouteArr[$fMMarr]['pricelists'][$price1]['adultcabinClassFare'] =  @$twofareValue['fd']['ADULT']['cc'];
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['childcabinClassFare'] =  @$twofareValue['fd']['CHILD']['cc'];


					$twoRouteArr[$fMMarr]['pricelists'][$price1]['mealAdult'] =  @$twofareValue['fd']['ADULT']['mI'];
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['mealChild'] =  @$twofareValue['fd']['CHILD']['mI'];
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['mealInfant'] =  @$twofareValue['fd']['INFANT']['mI'];

					$twoRouteArr[$fMMarr]['pricelists'][$price1]['totalFare'] = $totalFare;
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['fareIdentifier'] = $twofareValue['fareIdentifier'];

					$twoRouteArr[$fMMarr]['pricelists'][$price1]['adultBaseFare'] = $twofareValue['fd']['ADULT']['fC']['BF'];
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['childBaseFare'] = @$twofareValue['fd']['CHILD']['fC']['BF'];
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['infantBaseFare'] = @$twofareValue['fd']['INFANT']['fC']['BF'];

					$twoRouteArr[$fMMarr]['pricelists'][$price1]['adultTaxFare'] = $twofareValue['fd']['ADULT']['fC']['TAF'];
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['childTaxFare'] = @$twofareValue['fd']['CHILD']['fC']['TAF'];
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['infantTaxFare'] = @$twofareValue['fd']['INFANT']['fC']['TAF'];
					
					@$twoRouteArr[$fMMarr]['pricelists'][$price1]['countadultPax']= @$adultPax;
					@$twoRouteArr[$fMMarr]['pricelists'][$price1]['countchildPax']= @$childPax;
					@$twoRouteArr[$fMMarr]['pricelists'][$price1]['countinfantPax']= @$infantPax;

					$twoRouteArr[$fMMarr]['pricelists'][$price1]['adultTotalFare'] = $twofareValue['fd']['ADULT']['fC']['BF'] + $twofareValue['fd']['ADULT']['fC']['TAF'] ;
				
					@$twoRouteArr[$fMMarr]['pricelists'][$price1]['childTotalFare'] = $twofareValue['fd']['CHILD']['fC']['BF'] + $twofareValue['fd']['CHILD']['fC']['TAF'] ;
					
					@$twoRouteArr[$fMMarr]['pricelists'][$price1]['infantTotalFare'] = $twofareValue['fd']['INFANT']['fC']['BF'] + $twofareValue['fd']['INFANT']['fC']['TAF'] ;

					$twoRouteArr[$fMMarr]['pricelists'][$price1]['adultCheckInBaggage'] = @$twofareValue['fd']['ADULT']['bI']['iB'];
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['childCheckInBaggage'] = @$twofareValue['fd']['CHILD']['bI']['iB'];

					$twoRouteArr[$fMMarr]['pricelists'][$price1]['adultCabinBaggage'] = @$twofareValue['fd']['ADULT']['bI']['cB'];
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['childCabinBaggage'] = @$twofareValue['fd']['CHILD']['bI']['cB'];
					$twoRouteArr[$fMMarr]['pricelists'][$price1]['infantCabinBaggage'] = @$twofareValue['fd']['INFANT']['bI']['cB'];


					$twoRouteArr[$fMMarr]['pricelists'][$price1]['flightId']  = $twofareValue['id'];

					
					$price1++;
					
				}
					usort($twoRouteArr[$fMMarr]['pricelists'], function($a, $b) {
						return $a['totalFare'] - $b['totalFare'] ;
					});


				$fMMarr++; 
			}


			$highMaxValue1t = array();
			$flightArrFiltert = array();

			$sfii=0;
			
			foreach ($twoRouteArr as $key => $prival1t) {

				$columns1t = array_column($prival1t['pricelists'], 'totalFare');	
			
				  $max_price1t = max($columns1t);
				  $min_price1t = min($columns1t);

				 
				 $highMaxValue1t[] = $max_price1t; 

				$twoRouteArr[$key]['minprice'] = $min_price1t;
				$twoRouteArr[$key]['minimumprice'] = $min_price1t;

				$flightArrFiltert[$key]['flightCode'] = $prival1t['flghtCode'];
				$flightArrFiltert[$key]['flightName'] = $prival1t['flghtName'];

				$sfii++;
			}

			usort($twoRouteArr, function($a, $b) {
				return $a['pricelists'][0]['totalFare'] - $b['pricelists'][0]['totalFare'] ;
			});

			

			$twoRouteMax = array_reduce($twoRouteArr, function ($a, $b) {
				return @$a['pricelists'][0]['totalFare'] > $b['pricelists'][0]['totalFare'] ? $a : $b ;
			});


			$maximumPrice1 = $twoRouteMax['minprice'];	

			//echo "<pre>"; print_r($twoRouteArr); die;

			//// 1 search /////
			$data['bookingType'] = $_POST['bookingType'];
			$data['departure'] = $_POST['departure'];
			$data['destination'] = $_POST['destination'];
			$data['departureDate'] = $deptDate;
			//// 1 search /////

		
			$data['adultPax'] = $_POST['adultPax'];
			$data['childPax'] = $_POST['childPax'];
			$data['infantPax'] = $_POST['infantPax'];
			$data['travelClass'] = $_POST['travelClass'];
		

			//// 2 search /////
			$data['departure1'] = $_POST['departure1'];
			$data['destination1'] = $_POST['destination1'];
			$data['returnDate'] = $_POST['return_date'];
			//// 2 search /////

			//// 3 search /////
			$data['departure13'] = $_POST['departure13'];
			$data['destination13'] = $_POST['destination13'];
			//$data['returnDate22'] = $_POST['return_date22'];
			$data['departureDate2'] = $retdate22;
			//// 3 search /////

			//// 4 search /////
			$data['departure14'] = $_POST['departure14'];
			$data['destination14'] = $_POST['destination14'];
			//$data['returnDate24'] = $_POST['return_date24'];
			$data['departureDate3'] = $retdate24;
			//// 4 search /////

			//// 5 search /////
			$data['departure15'] = $_POST['departure15'];
			$data['destination15'] = $_POST['destination15'];
			//$data['returnDate25'] = $_POST['return_date25'];
			$data['departureDate4'] = $retdate25;
			//// 5 search /////

			//// 6 search /////
			$data['departure16'] = $_POST['departure16'];
			$data['destination16'] = $_POST['destination16'];
			//$data['returnDate26'] = $_POST['return_date26'];
			$data['departureDate5'] = $retdate26;
			//// 6 search /////


			//$data['departureDate2'] = $retdate22;
		
			
			

			$data['twomaximumPrice'] = $maximumPrice1;
			$data['completeResultReturn'] = $twoRouteArr;


			$data['flightList2'] =  array_map("unserialize", array_unique(array_map("serialize", $flightArrFiltert)));	
			
			
		if($count_multiway > 2)
		{
			
				$fMarr11 = 0;
				$thirdRouteArr = array(); 
				foreach($thirdRoute as $key => $routeValue3) {

					$thirdRouteList = $routeValue3['sI'];

					//echo '<pre>'; print_r($thirdRouteList); 

					$thirdRouteArr[$key]['flghtCode'] = $thirdRouteList[0]['fD']['aI']['code'];
					$thirdRouteArr[$key]['flghtName'] = $thirdRouteList[0]['fD']['aI']['name'];
					$thirdRouteArr[$key]['flghtNumber'] = $thirdRouteList[0]['fD']['fN'];
					$thirdRouteArr[$key]['flghtaircraft'] = $thirdRouteList[0]['fD']['eT'];


					$thirdRouteArr[$key]['noOfStops'] = $thirdRouteList[0]['stops'];
					$thirdRouteArr[$key]['noOfStops'] = $thirdRouteList[0]['stops'];
					$thirdRouteArr[$key]['duration'] = $thirdRouteList[0]['duration'];
					
					$thirdRouteArr[$key]['departureAirportCode'] = $thirdRouteList[0]['da']['code'];
					$thirdRouteArr[$key]['departureAirportName'] = $thirdRouteList[0]['da']['name'];
					$thirdRouteArr[$key]['departureCity'] = $thirdRouteList[0]['da']['city'];
					$thirdRouteArr[$key]['departureCountry'] = $thirdRouteList[0]['da']['country'];
					$thirdRouteArr[$key]['departureAirportTerminal'] = @$thirdRouteList[0]['da']['terminal'];

					$thirdRouteArr[$key]['arrivalAirportCode'] = $thirdRouteList[0]['aa']['code'];
					$thirdRouteArr[$key]['arrivalAirportName'] = $thirdRouteList[0]['aa']['name'];
					$thirdRouteArr[$key]['arrivalCity'] = $thirdRouteList[0]['aa']['city'];
					$thirdRouteArr[$key]['arrivalCountry'] = $thirdRouteList[0]['aa']['country'];
					$thirdRouteArr[$key]['arrivalAirportTerminal'] = @$thirdRouteList[0]['aa']['terminal'];

					$thirdRouteArr[$key]['departureTime'] =date("H:i",strtotime(  $thirdRouteList[0]['dt']));
					$thirdRouteArr[$key]['arrivalTime'] = $thirdRouteList[0]['at'];

					$thirdRouteList1 =  $routeValue3['totalPriceList'];	

					$price12 =0;

					foreach ($thirdRouteList1 as $key => $threefareValue) {					

						$totalAdultAmount =  $threefareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
						$totalChildAmount =  @$threefareValue['fd']['CHILD']['fC']['TF'] * $childPax;
						$totalInfantAmount =  @$threefareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

						$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['adultrefund'] =  @$threefareValue['fd']['ADULT']['rT'];
						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['childrefund'] =  @$threefareValue['fd']['CHILD']['rT'];
						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['infantrefund'] =  @$threefareValue['fd']['INFANT']['rT'];

						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['adultcabinClass'] =  @$threefareValue['fd']['ADULT']['cB'];
						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['childcabinClass'] =  @$threefareValue['fd']['CHILD']['cB'];

						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['adultcabinClassFare'] =  @$threefareValue['fd']['ADULT']['cc'];
						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['childcabinClassFare'] =  @$threefareValue['fd']['CHILD']['cc'];


						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['mealAdult'] =  @$threefareValue['fd']['ADULT']['mI'];
						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['mealChild'] =  @$threefareValue['fd']['CHILD']['mI'];
						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['mealInfant'] =  @$threefareValue['fd']['INFANT']['mI'];

						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['totalFare'] = $totalFare;
						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['fareIdentifier'] = $threefareValue['fareIdentifier'];

						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['adultBaseFare'] = $threefareValue['fd']['ADULT']['fC']['BF'];
						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['childBaseFare'] = @$threefareValue['fd']['CHILD']['fC']['BF'];
						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['infantBaseFare'] = @$threefareValue['fd']['INFANT']['fC']['BF'];

						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['adultTaxFare'] = $threefareValue['fd']['ADULT']['fC']['TAF'];
						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['childTaxFare'] = @$threefareValue['fd']['CHILD']['fC']['TAF'];
						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['infantTaxFare'] = @$threefareValue['fd']['INFANT']['fC']['TAF'];
						
						@$thirdRouteArr[$fMarr11]['pricelists'][$price12]['countadultPax']= @$adultPax;
						@$thirdRouteArr[$fMarr11]['pricelists'][$price12]['countchildPax']= @$childPax;
						@$thirdRouteArr[$fMarr11]['pricelists'][$price12]['countinfantPax']= @$infantPax;

						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['adultTotalFare'] = $threefareValue['fd']['ADULT']['fC']['BF'] + $threefareValue['fd']['ADULT']['fC']['TAF'] ;
					
						@$thirdRouteArr[$fMarr11]['pricelists'][$price12]['childTotalFare'] = $threefareValue['fd']['CHILD']['fC']['BF'] + $threefareValue['fd']['CHILD']['fC']['TAF'] ;
						
						@$thirdRouteArr[$fMarr11]['pricelists'][$price12]['infantTotalFare'] = $threefareValue['fd']['INFANT']['fC']['BF'] + $twofareValue['fd']['INFANT']['fC']['TAF'] ;

						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['adultCheckInBaggage'] = @$threefareValue['fd']['ADULT']['bI']['iB'];
						$twoRouteArr[$fMarr11]['pricelists'][$price12]['childCheckInBaggage'] = @$threefareValue['fd']['CHILD']['bI']['iB'];

						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['adultCabinBaggage'] = @$threefareValue['fd']['ADULT']['bI']['cB'];
						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['childCabinBaggage'] = @$threefareValue['fd']['CHILD']['bI']['cB'];
						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['infantCabinBaggage'] = @$threefareValue['fd']['INFANT']['bI']['cB'];


						$thirdRouteArr[$fMarr11]['pricelists'][$price12]['flightId']  = $threefareValue['id'];

						
						$price12++;
						
					}
						usort($thirdRouteArr[$fMarr11]['pricelists'], function($a, $b) {
							return $a['totalFare'] - $b['totalFare'] ;
						});
					

					$fMarr11++; 
				}
			
				$highMaxValue2t = array();
				$flightArrFilter2t = array();
	
				$thi =0;
				
				foreach ($thirdRouteArr as $key => $prival2t) {
	
					$columns12t = array_column($prival2t['pricelists'], 'totalFare');	
				
					  $max_price12t = max($columns12t);
					  $min_price12t = min($columns12t);
	
					 
					 $highMaxValue2t[] = $max_price12t; 
	
					$thirdRouteArr[$key]['minprice'] = $min_price12t;
					$thirdRouteArr[$key]['minimumprice'] = $min_price12t;
	
					$flightArrFilter2t[$key]['flightCode'] = $prival2t['flghtCode'];
					$flightArrFilter2t[$key]['flightName'] = $prival2t['flghtName'];
	
					$thi++;
				}
	
				usort($thirdRouteArr, function($a, $b) {
					return $a['pricelists'][0]['totalFare'] - $b['pricelists'][0]['totalFare'] ;
				});
	
				
	
				$threeRouteMax = array_reduce($thirdRouteArr, function ($a, $b) {
					return @$a['pricelists'][0]['totalFare'] > $b['pricelists'][0]['totalFare'] ? $a : $b ;
				});
	
	
				$maximumPrice12 = $threeRouteMax['minprice'];
				$data['thirdMaximumPrice'] = $maximumPrice12; 
				$data['completeResultthird'] = $thirdRouteArr;
				$data['flightList3'] =  array_map("unserialize", array_unique(array_map("serialize", $flightArrFilter2t)));
			
			
		}
			
			
			
		if($count_multiway > 3)
		{
			
			$fMarr22 = 0;
			$forthRouteArr = array();
			foreach ($forthRoute as $key => $routeValue4) {


				$forthRouteList = $routeValue4['sI'];

				$forthRouteArr[$key]['flghtCode'] = $forthRouteList[0]['fD']['aI']['code'];
				$forthRouteArr[$key]['flghtName'] = $forthRouteList[0]['fD']['aI']['name'];
				$forthRouteArr[$key]['flghtNumber'] = $forthRouteList[0]['fD']['fN'];
				$forthRouteArr[$key]['flghtaircraft'] = $forthRouteList[0]['fD']['eT'];


				$forthRouteArr[$key]['noOfStops'] = $forthRouteList[0]['stops'];
				$forthRouteArr[$key]['noOfStops'] = $forthRouteList[0]['stops'];
				$forthRouteArr[$key]['duration'] = $forthRouteList[0]['duration'];
				
				$forthRouteArr[$key]['departureAirportCode'] = $forthRouteList[0]['da']['code'];
				$forthRouteArr[$key]['departureAirportName'] = $forthRouteList[0]['da']['name'];
				$forthRouteArr[$key]['departureCity'] = $forthRouteList[0]['da']['city'];
				$forthRouteArr[$key]['departureCountry'] = $forthRouteList[0]['da']['country'];
				$forthRouteArr[$key]['departureAirportTerminal'] = @$forthRouteList[0]['da']['terminal'];

				$forthRouteArr[$key]['arrivalAirportCode'] = $forthRouteList[0]['aa']['code'];
				$forthRouteArr[$key]['arrivalAirportName'] = $forthRouteList[0]['aa']['name'];
				$forthRouteArr[$key]['arrivalCity'] = $forthRouteList[0]['aa']['city'];
				$forthRouteArr[$key]['arrivalCountry'] = $forthRouteList[0]['aa']['country'];
				$forthRouteArr[$key]['arrivalAirportTerminal'] = @$forthRouteList[0]['aa']['terminal'];

				$forthRouteArr[$key]['departureTime'] = date("H:i",strtotime( $forthRouteList[0]['dt']));
				$forthRouteArr[$key]['arrivalTime'] = $forthRouteList[0]['at'];

				$forthRouteList1 =  $routeValue4['totalPriceList'];

				$price13 =0;

					foreach ($forthRouteList1 as $key => $fourfareValue) {					

						$totalAdultAmount =  $fourfareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
						$totalChildAmount =  @$fourfareValue['fd']['CHILD']['fC']['TF'] * $childPax;
						$totalInfantAmount =  @$fourfareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

						$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

						$forthRouteArr[$fMarr22]['pricelist'][$price13]['adultrefund'] =  @$fourfareValue['fd']['ADULT']['rT'];
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['childrefund'] =  @$fourfareValue['fd']['CHILD']['rT'];
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['infantrefund'] =  @$fourfareValue['fd']['INFANT']['rT'];

						$forthRouteArr[$fMarr22]['pricelist'][$price13]['adultcabinClass'] =  @$fourfareValue['fd']['ADULT']['cB'];
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['childcabinClass'] =  @$fourfareValue['fd']['CHILD']['cB'];

						$forthRouteArr[$fMarr22]['pricelist'][$price13]['adultcabinClassFare'] =  @$fourfareValue['fd']['ADULT']['cc'];
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['childcabinClassFare'] =  @$fourfareValue['fd']['CHILD']['cc'];


						$forthRouteArr[$fMarr22]['pricelist'][$price13]['mealAdult'] =  @$fourfareValue['fd']['ADULT']['mI'];
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['mealChild'] =  @$fourfareValue['fd']['CHILD']['mI'];
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['mealInfant'] =  @$fourfareValue['fd']['INFANT']['mI'];

						$forthRouteArr[$fMarr22]['pricelist'][$price13]['totalFare'] = $totalFare;
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['fareIdentifier'] = $fourfareValue['fareIdentifier'];

						$forthRouteArr[$fMarr22]['pricelist'][$price13]['adultBaseFare'] = $fourfareValue['fd']['ADULT']['fC']['BF'];
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['childBaseFare'] = @$fourfareValue['fd']['CHILD']['fC']['BF'];
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['infantBaseFare'] = @$fourfareValue['fd']['INFANT']['fC']['BF'];

						$forthRouteArr[$fMarr22]['pricelist'][$price13]['adultTaxFare'] = $fourfareValue['fd']['ADULT']['fC']['TAF'];
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['childTaxFare'] = @$fourfareValue['fd']['CHILD']['fC']['TAF'];
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['infantTaxFare'] = @$fourfareValue['fd']['INFANT']['fC']['TAF'];
						
						@$forthRouteArr[$fMarr22]['pricelist'][$price13]['countadultPax']= @$adultPax;
						@$forthRouteArr[$fMarr22]['pricelist'][$price13]['countchildPax']= @$childPax;
						@$forthRouteArr[$fMarr22]['pricelist'][$price13]['countinfantPax']= @$infantPax;

						$forthRouteArr[$fMarr22]['pricelist'][$price13]['adultTotalFare'] = $fourfareValue['fd']['ADULT']['fC']['BF'] + $fourfareValue['fd']['ADULT']['fC']['TAF'] ;
					
						@$forthRouteArr[$fMarr22]['pricelist'][$price13]['childTotalFare'] = $fourfareValue['fd']['CHILD']['fC']['BF'] + $fourfareValue['fd']['CHILD']['fC']['TAF'] ;
						
						@$forthRouteArr[$fMarr22]['pricelist'][$price13]['infantTotalFare'] = $fourfareValue['fd']['INFANT']['fC']['BF'] + $fourfareValue['fd']['INFANT']['fC']['TAF'] ;

						$forthRouteArr[$fMarr22]['pricelist'][$price13]['adultCheckInBaggage'] = @$fourfareValue['fd']['ADULT']['bI']['iB'];
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['childCheckInBaggage'] = @$fourfareValue['fd']['CHILD']['bI']['iB'];

						$forthRouteArr[$fMarr22]['pricelist'][$price13]['adultCabinBaggage'] = @$fourfareValue['fd']['ADULT']['bI']['cB'];
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['childCabinBaggage'] = @$fourfareValue['fd']['CHILD']['bI']['cB'];
						$forthRouteArr[$fMarr22]['pricelist'][$price13]['infantCabinBaggage'] = @$fourfareValue['fd']['INFANT']['bI']['cB'];


						$forthRouteArr[$fMarr22]['pricelist'][$price13]['flightId']  = $fourfareValue['id'];

						
						$price13++;
						
					}
					usort($forthRouteArr[$fMarr22]['pricelist'], function($a, $b) {
						return $a['totalFare'] - $b['totalFare'] ;
					});
				


				$fMarr22++; 
			}
			

				$highMaxValue4t = array();
				$flightArrFilter4t = array();
	
				$foi =0;
				
				foreach ($forthRouteArr as $key => $prival4t) {
	
					$columns14t = array_column($prival4t['pricelist'], 'totalFare');	
				
					  $max_price14t = max($columns14t);
					  $min_price14t = min($columns14t);
	
					 
					 $highMaxValue4t[] = $max_price14t; 
	
					$forthRouteArr[$key]['minprice'] = $min_price14t;
					$forthRouteArr[$key]['minimumprice'] = $min_price14t;
	
					$flightArrFilter4t[$key]['flightCode'] = $prival4t['flghtCode'];
					$flightArrFilter4t[$key]['flightName'] = $prival4t['flghtName'];
	
					$foi++;
				}
	
				usort($forthRouteArr, function($a, $b) {
					return $a['pricelist'][0]['totalFare'] - $b['pricelist'][0]['totalFare'] ;
				});
	
				
	
				$fourthRouteMax = array_reduce($forthRouteArr, function ($a, $b) {
					return @$a['pricelist'][0]['totalFare'] > $b['pricelist'][0]['totalFare'] ? $a : $b ;
				});
	
	
				$maximumPrice14 = $fourthRouteMax['minprice'];

			$data['fourthMaximumPrice'] = $maximumPrice14; 	
			$data['completeResultforth'] = $forthRouteArr;
			$data['flightList4'] =  array_map("unserialize", array_unique(array_map("serialize", $flightArrFilter4t)));
			
			
		}
			
			
		if($count_multiway > 4)
		{
			
			$fMarr33 = 0;
			$fifthRouteArr = array(); 
			foreach ($fifthRoute as $key => $routeValue5) {


				$fifthRouteList = $routeValue5['sI'];

				//echo '<pre>'; print_r($fifthRouteList); 

				$fifthRouteArr[$key]['flghtCode'] = $fifthRouteList[0]['fD']['aI']['code'];
				$fifthRouteArr[$key]['flghtName'] = $fifthRouteList[0]['fD']['aI']['name'];
				$fifthRouteArr[$key]['flghtNumber'] = $fifthRouteList[0]['fD']['fN'];
				$fifthRouteArr[$key]['flghtaircraft'] = $fifthRouteList[0]['fD']['eT'];


				$fifthRouteArr[$key]['noOfStops'] = $fifthRouteList[0]['stops'];
				$fifthRouteArr[$key]['noOfStops'] = $fifthRouteList[0]['stops'];
				$fifthRouteArr[$key]['duration'] = $fifthRouteList[0]['duration'];
				
				$fifthRouteArr[$key]['departureAirportCode'] = $fifthRouteList[0]['da']['code'];
				$fifthRouteArr[$key]['departureAirportName'] = $fifthRouteList[0]['da']['name'];
				$fifthRouteArr[$key]['departureCity'] = $fifthRouteList[0]['da']['city'];
				$fifthRouteArr[$key]['departureCountry'] = $fifthRouteList[0]['da']['country'];
				$fifthRouteArr[$key]['departureAirportTerminal'] = @$fifthRouteList[0]['da']['terminal'];

				$fifthRouteArr[$key]['arrivalAirportCode'] = $fifthRouteList[0]['aa']['code'];
				$fifthRouteArr[$key]['arrivalAirportName'] = $fifthRouteList[0]['aa']['name'];
				$fifthRouteArr[$key]['arrivalCity'] = $fifthRouteList[0]['aa']['city'];
				$fifthRouteArr[$key]['arrivalCountry'] = $fifthRouteList[0]['aa']['country'];
				$fifthRouteArr[$key]['arrivalAirportTerminal'] = @$fifthRouteList[0]['aa']['terminal'];

				$fifthRouteArr[$key]['departureTime'] = date("H:i",strtotime($fifthRouteList[0]['dt']));
				$fifthRouteArr[$key]['arrivalTime'] = $fifthRouteList[0]['at'];

				$fifthRouteList1 =  $routeValue5['totalPriceList'];

				$price14 =0;

				foreach ($fifthRouteList1 as $key => $fivefareValue) {					

					$totalAdultAmount =  $fivefareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
					$totalChildAmount =  @$fivefareValue['fd']['CHILD']['fC']['TF'] * $childPax;
					$totalInfantAmount =  @$fivefareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

					$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['adultrefund'] =  @$fivefareValue['fd']['ADULT']['rT'];
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['childrefund'] =  @$fivefareValue['fd']['CHILD']['rT'];
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['infantrefund'] =  @$fivefareValue['fd']['INFANT']['rT'];

					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['adultcabinClass'] =  @$fivefareValue['fd']['ADULT']['cB'];
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['childcabinClass'] =  @$fivefareValue['fd']['CHILD']['cB'];

					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['adultcabinClassFare'] =  @$fivefareValue['fd']['ADULT']['cc'];
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['childcabinClassFare'] =  @$fivefareValue['fd']['CHILD']['cc'];


					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['mealAdult'] =  @$fivefareValue['fd']['ADULT']['mI'];
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['mealChild'] =  @$fivefareValue['fd']['CHILD']['mI'];
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['mealInfant'] =  @$fivefareValue['fd']['INFANT']['mI'];

					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['totalFare'] = $totalFare;
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['fareIdentifier'] = $fivefareValue['fareIdentifier'];

					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['adultBaseFare'] = $fivefareValue['fd']['ADULT']['fC']['BF'];
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['childBaseFare'] = @$fivefareValue['fd']['CHILD']['fC']['BF'];
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['infantBaseFare'] = @$fivefareValue['fd']['INFANT']['fC']['BF'];

					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['adultTaxFare'] = $fivefareValue['fd']['ADULT']['fC']['TAF'];
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['childTaxFare'] = @$fivefareValue['fd']['CHILD']['fC']['TAF'];
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['infantTaxFare'] = @$fivefareValue['fd']['INFANT']['fC']['TAF'];
					
					@$fifthRouteArr[$fMarr33]['pricelist'][$price14]['countadultPax']= @$adultPax;
					@$fifthRouteArr[$fMarr33]['pricelist'][$price14]['countchildPax']= @$childPax;
					@$fifthRouteArr[$fMarr33]['pricelist'][$price14]['countinfantPax']= @$infantPax;

					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['adultTotalFare'] = $fivefareValue['fd']['ADULT']['fC']['BF'] + $fivefareValue['fd']['ADULT']['fC']['TAF'] ;
				
					@$fifthRouteArr[$fMarr33]['pricelist'][$price14]['childTotalFare'] = $fivefareValue['fd']['CHILD']['fC']['BF'] + $fivefareValue['fd']['CHILD']['fC']['TAF'] ;
					
					@$fifthRouteArr[$fMarr33]['pricelist'][$price14]['infantTotalFare'] = $fivefareValue['fd']['INFANT']['fC']['BF'] + $fivefareValue['fd']['INFANT']['fC']['TAF'] ;

					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['adultCheckInBaggage'] = @$fivefareValue['fd']['ADULT']['bI']['iB'];
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['childCheckInBaggage'] = @$fivefareValue['fd']['CHILD']['bI']['iB'];

					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['adultCabinBaggage'] = @$fivefareValue['fd']['ADULT']['bI']['cB'];
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['childCabinBaggage'] = @$fivefareValue['fd']['CHILD']['bI']['cB'];
					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['infantCabinBaggage'] = @$fivefareValue['fd']['INFANT']['bI']['cB'];


					$fifthRouteArr[$fMarr33]['pricelist'][$price14]['flightId']  = $fivefareValue['id'];

					
					$price14++;
					
				}
					usort($fifthRouteArr[$fMarr33]['pricelist'], function($a, $b) {
						return $a['totalFare'] - $b['totalFare'] ;
					});
			

				$fMarr33++; 
			}
			
			$highMaxValue5t = array();
			$flightArrFilter5t = array();

			$ffi =0;
			
			foreach ($fifthRouteArr as $key => $prival5t) {

				$columns15t = array_column($prival5t['pricelist'], 'totalFare');	
			
					$max_price15t = max($columns15t);
					$min_price15t = min($columns15t);

					
					$highMaxValue5t[] = $max_price15t; 

				$fifthRouteArr[$key]['minprice'] = $min_price15t;
				$fifthRouteArr[$key]['minimumprice'] = $min_price15t;

				$flightArrFilter5t[$key]['flightCode'] = $prival5t['flghtCode'];
				$flightArrFilter5t[$key]['flightName'] = $prival5t['flghtName'];

				$ffi++;
			}

			usort($fifthRouteArr, function($a, $b) {
				return $a['pricelist'][0]['totalFare'] - $b['pricelist'][0]['totalFare'] ;
			});

			

			$fifthRouteMax = array_reduce($fifthRouteArr, function ($a, $b) {
				return @$a['pricelist'][0]['totalFare'] > $b['pricelist'][0]['totalFare'] ? $a : $b ;
			});


			$maximumPrice15 = $fifthRouteMax['minprice'];

			$data['fifthMaximumPrice'] = $maximumPrice15;
		

			$data['completeResultfifth'] = $fifthRouteArr;
			$data['flightList5'] =  array_map("unserialize", array_unique(array_map("serialize", $flightArrFilter5t)));
			
			
		}

		if($count_multiway > 5)
		{
			// /	echo "<pre>"; print_r($sixthRoute); die;
			$fMarr34 = 0;
			$sixthRouteArr = array(); 
			foreach ($sixthRoute as $key => $routeValue6) {


				$sixthRouteList = $routeValue6['sI'];

				//echo '<pre>'; print_r($fifthRouteList); 

				$sixthRouteArr[$key]['flghtCode'] = $sixthRouteList[0]['fD']['aI']['code'];
				$sixthRouteArr[$key]['flghtName'] = $sixthRouteList[0]['fD']['aI']['name'];
				$sixthRouteArr[$key]['flghtNumber'] = $sixthRouteList[0]['fD']['fN'];
				$sixthRouteArr[$key]['flghtaircraft'] = $sixthRouteList[0]['fD']['eT'];


				$sixthRouteArr[$key]['noOfStops'] = $sixthRouteList[0]['stops'];
				$sixthRouteArr[$key]['noOfStops'] = $sixthRouteList[0]['stops'];
				$sixthRouteArr[$key]['duration'] = $sixthRouteList[0]['duration'];
				
				$sixthRouteArr[$key]['departureAirportCode'] = $sixthRouteList[0]['da']['code'];
				$sixthRouteArr[$key]['departureAirportName'] = $sixthRouteList[0]['da']['name'];
				$sixthRouteArr[$key]['departureCity'] = $sixthRouteList[0]['da']['city'];
				$sixthRouteArr[$key]['departureCountry'] = $sixthRouteList[0]['da']['country'];
				$sixthRouteArr[$key]['departureAirportTerminal'] = @$sixthRouteList[0]['da']['terminal'];

				$sixthRouteArr[$key]['arrivalAirportCode'] = $sixthRouteList[0]['aa']['code'];
				$sixthRouteArr[$key]['arrivalAirportName'] = $sixthRouteList[0]['aa']['name'];
				$sixthRouteArr[$key]['arrivalCity'] = $sixthRouteList[0]['aa']['city'];
				$sixthRouteArr[$key]['arrivalCountry'] = $sixthRouteList[0]['aa']['country'];
				$sixthRouteArr[$key]['arrivalAirportTerminal'] = @$sixthRouteList[0]['aa']['terminal'];

				$sixthRouteArr[$key]['departureTime'] = date("H:i",strtotime($sixthRouteList[0]['dt']));
				$sixthRouteArr[$key]['arrivalTime'] = $sixthRouteList[0]['at'];

				$sixthRouteList1 =  $routeValue6['totalPriceList'];

				$price15 =0;

				foreach ($sixthRouteList1 as $key => $sixfareValue) {					

					$totalAdultAmount =  $sixfareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
					$totalChildAmount =  @$sixfareValue['fd']['CHILD']['fC']['TF'] * $childPax;
					$totalInfantAmount =  @$sixfareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

					$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['adultrefund'] =  @$sixfareValue['fd']['ADULT']['rT'];
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['childrefund'] =  @$sixfareValue['fd']['CHILD']['rT'];
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['infantrefund'] =  @$sixfareValue['fd']['INFANT']['rT'];

					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['adultcabinClass'] =  @$sixfareValue['fd']['ADULT']['cB'];
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['childcabinClass'] =  @$sixfareValue['fd']['CHILD']['cB'];

					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['adultcabinClassFare'] =  @$sixfareValue['fd']['ADULT']['cc'];
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['childcabinClassFare'] =  @$sixfareValue['fd']['CHILD']['cc'];


					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['mealAdult'] =  @$sixfareValue['fd']['ADULT']['mI'];
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['mealChild'] =  @$sixfareValue['fd']['CHILD']['mI'];
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['mealInfant'] =  @$sixfareValue['fd']['INFANT']['mI'];

					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['totalFare'] = $totalFare;
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['fareIdentifier'] = $sixfareValue['fareIdentifier'];

					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['adultBaseFare'] = $sixfareValue['fd']['ADULT']['fC']['BF'];
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['childBaseFare'] = @$sixfareValue['fd']['CHILD']['fC']['BF'];
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['infantBaseFare'] = @$sixfareValue['fd']['INFANT']['fC']['BF'];

					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['adultTaxFare'] = $sixfareValue['fd']['ADULT']['fC']['TAF'];
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['childTaxFare'] = @$sixfareValue['fd']['CHILD']['fC']['TAF'];
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['infantTaxFare'] = @$sixfareValue['fd']['INFANT']['fC']['TAF'];
					
					@$sixthRouteArr[$fMarr34]['pricelist'][$price15]['countadultPax']= @$adultPax;
					@$sixthRouteArr[$fMarr34]['pricelist'][$price15]['countchildPax']= @$childPax;
					@$sixthRouteArr[$fMarr34]['pricelist'][$price15]['countinfantPax']= @$infantPax;

					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['adultTotalFare'] = $sixfareValue['fd']['ADULT']['fC']['BF'] + $sixfareValue['fd']['ADULT']['fC']['TAF'] ;
				
					@$sixthRouteArr[$fMarr34]['pricelist'][$price15]['childTotalFare'] = $sixfareValue['fd']['CHILD']['fC']['BF'] + $sixfareValue['fd']['CHILD']['fC']['TAF'] ;
					
					@$sixthRouteArr[$fMarr34]['pricelist'][$price15]['infantTotalFare'] = $sixfareValue['fd']['INFANT']['fC']['BF'] + $sixfareValue['fd']['INFANT']['fC']['TAF'] ;

					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['adultCheckInBaggage'] = @$sixfareValue['fd']['ADULT']['bI']['iB'];
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['childCheckInBaggage'] = @$sixfareValue['fd']['CHILD']['bI']['iB'];

					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['adultCabinBaggage'] = @$sixfareValue['fd']['ADULT']['bI']['cB'];
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['childCabinBaggage'] = @$sixfareValue['fd']['CHILD']['bI']['cB'];
					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['infantCabinBaggage'] = @$sixfareValue['fd']['INFANT']['bI']['cB'];


					$sixthRouteArr[$fMarr34]['pricelist'][$price15]['flightId']  = $sixfareValue['id'];

					
					$price15++;
					
				}
					usort($sixthRouteArr[$fMarr34]['pricelist'], function($a, $b) {
						return $a['totalFare'] - $b['totalFare'] ;
					});
			

				$fMarr34++; 
			}
			
			$highMaxValue6t = array();
			$flightArrFilter6t = array();

			$ffi =0;
			
			foreach ($sixthRouteArr as $key => $prival6t) {

				$columns16t = array_column($prival6t['pricelist'], 'totalFare');	
			
					$max_price16t = max($columns16t);
					$min_price16t = min($columns16t);

					
					$highMaxValue6t[] = $max_price16t; 

				$sixthRouteArr[$key]['minprice'] = $min_price16t;
				$sixthRouteArr[$key]['minimumprice'] = $min_price16t;

				$flightArrFilter6t[$key]['flightCode'] = $prival6t['flghtCode'];
				$flightArrFilter6t[$key]['flightName'] = $prival6t['flghtName'];

				$ffi++;
			}

			usort($sixthRouteArr, function($a, $b) {
				return $a['pricelist'][0]['totalFare'] - $b['pricelist'][0]['totalFare'] ;
			});

			

			$sixthRouteMax = array_reduce($sixthRouteArr, function ($a, $b) {
				return @$a['pricelist'][0]['totalFare'] > $b['pricelist'][0]['totalFare'] ? $a : $b ;
			});


			$maximumPrice16 = $sixthRouteMax['minprice'];

			$data['sixthMaximumPrice'] = $maximumPrice16;
		

			$data['completeResultsixth'] = $sixthRouteArr;
			$data['flightList6'] =  array_map("unserialize", array_unique(array_map("serialize", $flightArrFilter6t)));
			
			
		}
			
						
			$data['count_multiways']=$count_multiway;
			$data['flights']=$this->Flights_page->about_data();
			$this->load->view('flights',$data);
		}	
		}
		}
	
	}

	public function flight_filter_intern(){

		// echo "<pre>";	print_r($_POST);	 die();

			preg_match('#\((.*?)\)#', $_POST['departure'], $match);
			$departure =  $match[1];


			preg_match('#\((.*?)\)#', $_POST['destination'], $match);
			$destination =  $match[1];

			$departureDate=date("Y-m-d", strtotime($_POST['departureDate']));
			$return_Date=date("Y-m-d", strtotime($_POST['returnDate']));

			$adultPax = $_POST['adultPax'];
			$childPax = $_POST['childPax'];
			$infantPax = $_POST['infantPax'];

			$paxinfo = array(


				'ADULT' => $_POST['adultPax'],
				'CHILD' => $_POST['childPax'],
				'INFANT' => $_POST['infantPax'],

			);

			$requestData = array(

				'cabinClass' => $_POST['travelClass'],
				'paxInfo' => $paxinfo,
				'routeInfos' =>array( 
					array(
						'fromCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'travelDate' => $departureDate,
					),
					array(
						'fromCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'travelDate' => $return_Date,
					)
					),
						'searchModifiers' => array('isDirectFlight' => 'false','isConnectingFlight' => 'false'),
					

			);



		
		$ch = $this->callAPI($requestData);
		$result = curl_exec($ch);
		$response_array = json_decode($result, true);

		//echo "<pre>"; print_r($response_array); die;

		

		$FilAirlineID=$_POST['AirlineID'];
		if($FilAirlineID!='')  {  $FinalFilAirlineArr = explode(',', $FilAirlineID);   }
		
		foreach($FinalFilAirlineArr as $key => $val){
		
			$FinalFilAirlineArr[$key] = trim($val);
		
		}

		$FilDipartureID=$_POST['departureId'];
		if($FilDipartureID!='')  {  $FinalFilDipartureTimeArr = explode(',', $FilDipartureID);   }	
		
		$FilArrivalID=$_POST['ArrivalId'];
		if($FilArrivalID!='')  {  $FinalFilArrivalTimeArr = explode(',', $FilArrivalID);   }	
	
		
		$FilStopID=$_POST['stopId'];
		if($FilStopID!='')  {  $FinalFilStopArr = explode(',', $FilStopID);   }

		$flightArrayCombo = @$response_array['searchResult']['tripInfos']['COMBO'];

		//echo "<pre>"; print_r($flightArrayCombo); die;
		
			$flightArray = $flightArrayCombo;
			//echo "<pre>"; print_r($flightArray); die;
			

			$flightDataArr = array();

			$farr=0;

			foreach ($flightArray as $key => $flightValue) {

				$flightListArray =  $flightValue['sI'];
				$flightPriceListArray =  $flightValue['totalPriceList'];
				$totalPriceArr = count($flightPriceListArray);

				$fsi=0;
				$segmentListValOnward = array();
				$segmentListValReturn = array();

				$airlineCode = trim($flightListArray[0]['fD']['aI']['code']);
			
				$departureTimeDtaeArr =  explode("T", $flightListArray[0]['dt']);
				$departureTimeArr =  explode(":", $departureTimeDtaeArr[1]);
				$departureTime =$departureTimeArr[0];

				$arrivalTimeDtaeArr =  explode("T", $flightListArray[0]['at']);
				$arrivalTimeArr =  explode(":", $arrivalTimeDtaeArr[1]);
				$arrivalTime =$arrivalTimeArr[0];

				$stops=$flightListArray[0]['stops'];

				foreach ($flightListArray as $key => $segVal) {
				
					if($segVal['isRs'] == 1) {

						if($segVal['stops'] > 0){

							


							$segmentListValReturn[$fsi]['segmentType'] = 'ReturnList';

							$segmentListValReturn[$fsi]['flightCode'] = $segVal['fD']['aI']['code'];
							$segmentListValReturn[$fsi]['flightName'] = $segVal['fD']['aI']['name'];
							$segmentListValReturn[$fsi]['flightNumber'] = $segVal['fD']['fN'];
							$segmentListValReturn[$fsi]['flightET'] = $segVal['fD']['eT'];

							$segmentListValReturn[$fsi]['deptAirCode'] = $segVal['da']['code'];
							$segmentListValReturn[$fsi]['deptAirName'] = $segVal['da']['name'];
							$segmentListValReturn[$fsi]['deptCityCode'] = $segVal['da']['cityCode'];
							$segmentListValReturn[$fsi]['deptCityName'] = $segVal['da']['city'];
							$segmentListValReturn[$fsi]['deptCountryCode'] = $segVal['da']['countryCode'];
							$segmentListValReturn[$fsi]['deptCountryName'] = $segVal['da']['country'];
							$segmentListValReturn[$fsi]['deptTerminalName'] = @$segVal['da']['terminal'];

							$segmentListValReturn[$fsi]['arivAirCode'] = $segVal['aa']['code'];
							$segmentListValReturn[$fsi]['arivAirName'] = $segVal['aa']['name'];
							$segmentListValReturn[$fsi]['arivCityCode'] = $segVal['aa']['cityCode'];
							$segmentListValReturn[$fsi]['arivCityName'] = $segVal['aa']['city'];
							$segmentListValReturn[$fsi]['arivtCountryCode'] = $segVal['aa']['countryCode'];
							$segmentListValReturn[$fsi]['arivCountryName'] = $segVal['aa']['country'];
							$segmentListValReturn[$fsi]['arivTerminalName'] = @$segVal['aa']['terminal'];

							$segmentListValReturn[$fsi]['flightDuration'] = $segVal['duration'];

							$segmentListValReturn[$fsi]['flightConnectingTime'] = @$segVal['cT'];

							$segmentListValReturn[$fsi]['departureDateNTime'] = $segVal['dt'];
							$segmentListValReturn[$fsi]['arrivalDateNTime'] = $segVal['at'];

							$segmentListValReturn[$fsi]['segmentNo'] = $segVal['sN'];

							$segmentListValReturn[$fsi]['flightStop'] = $segVal['stops'];

							$fsist = 0;
							foreach ($segVal['so'] as $key => $flightStopValue) {

								$segmentListValReturn[$fsi]['flightStopArr'][$fsist]['flightStopAirCode'] = $flightStopValue['code'];
								$segmentListValReturn[$fsi]['flightStopArr'][$fsist]['flightStopAirName'] = $flightStopValue['name'];
								$segmentListValReturn[$fsi]['flightStopArr'][$fsist]['flightStopCityCode'] = $flightStopValue['cityCode'];
								$segmentListValReturn[$fsi]['flightStopArr'][$fsist]['flightStopCityName'] = $flightStopValue['city'];
								$segmentListValReturn[$fsi]['flightStopArr'][$fsist]['flightStopCountryName'] = $flightStopValue['country'];
								$segmentListValReturn[$fsi]['flightStopArr'][$fsist]['flightStopCountryCode'] = $flightStopValue['countryCode'];
								
								$fsist++;
							}

						}else{

							$segmentListValReturn[$fsi]['segmentType'] = 'ReturnList';

							$segmentListValReturn[$fsi]['flightCode'] = $segVal['fD']['aI']['code'];
							$segmentListValReturn[$fsi]['flightName'] = $segVal['fD']['aI']['name'];
							$segmentListValReturn[$fsi]['flightNumber'] = $segVal['fD']['fN'];
							$segmentListValReturn[$fsi]['flightET'] = $segVal['fD']['eT'];

							$segmentListValReturn[$fsi]['deptAirCode'] = $segVal['da']['code'];
							$segmentListValReturn[$fsi]['deptAirName'] = $segVal['da']['name'];
							$segmentListValReturn[$fsi]['deptCityCode'] = $segVal['da']['cityCode'];
							$segmentListValReturn[$fsi]['deptCityName'] = $segVal['da']['city'];
							$segmentListValReturn[$fsi]['deptCountryCode'] = $segVal['da']['countryCode'];
							$segmentListValReturn[$fsi]['deptCountryName'] = $segVal['da']['country'];
							$segmentListValReturn[$fsi]['deptTerminalName'] = @$segVal['da']['terminal'];

							$segmentListValReturn[$fsi]['arivAirCode'] = $segVal['aa']['code'];
							$segmentListValReturn[$fsi]['arivAirName'] = $segVal['aa']['name'];
							$segmentListValReturn[$fsi]['arivCityCode'] = $segVal['aa']['cityCode'];
							$segmentListValReturn[$fsi]['arivCityName'] = $segVal['aa']['city'];
							$segmentListValReturn[$fsi]['arivtCountryCode'] = $segVal['aa']['countryCode'];
							$segmentListValReturn[$fsi]['arivCountryName'] = $segVal['aa']['country'];
							$segmentListValReturn[$fsi]['arivTerminalName'] = @$segVal['aa']['terminal'];

							$segmentListValReturn[$fsi]['flightDuration'] = $segVal['duration'];

							$segmentListValReturn[$fsi]['flightConnectingTime'] = @$segVal['cT'];

							$segmentListValReturn[$fsi]['departureDateNTime'] = $segVal['dt'];
							$segmentListValReturn[$fsi]['arrivalDateNTime'] = $segVal['at'];

							$segmentListValReturn[$fsi]['segmentNo'] = $segVal['sN'];

							$segmentListValReturn[$fsi]['flightStop'] = $segVal['stops'];

						}
						$fsi++; 
					}
					
				}
				$fri=0;
				foreach ($flightListArray as $key => $segVal) {

					
				
						if(empty($segVal['isRs'])) {

							$airlineCode = trim($segVal['fD']['aI']['code']);

							$departureTimeDtaeArr =  explode("T", $segVal['dt']);
							$departureTimeArr =  explode(":", $departureTimeDtaeArr[1]);
							$departureTime =$departureTimeArr[0];

							$arrivalTimeDtaeArr =  explode("T", $segVal['at']);
							$arrivalTimeArr =  explode(":", $arrivalTimeDtaeArr[1]);
							$arrivalTime =$arrivalTimeArr[0];

							$stops=$segVal['stops'];

							if((in_array($airlineCode, $FinalFilAirlineArr) || $_POST['AirlineID']=="0" ) && ( in_array($departureTime, $FinalFilDipartureTimeArr) || $_POST['departureId']=="0") && ( in_array($stops, $FinalFilStopArr) || $_POST['stopId']=="0") ){

							if($segVal['stops'] > 0){

								

								$segmentListValOnward[$fri]['segmentType'] = 'onwardList';

								$segmentListValOnward[$fri]['flightCode'] = $segVal['fD']['aI']['code'];
								$segmentListValOnward[$fri]['flightName'] = $segVal['fD']['aI']['name'];
								$segmentListValOnward[$fri]['flightNumber'] = $segVal['fD']['fN'];
								$segmentListValOnward[$fri]['flightET'] = $segVal['fD']['eT'];
								
								$segmentListValOnward[$fri]['deptAirCode'] = $segVal['da']['code'];
								$segmentListValOnward[$fri]['deptAirName'] = $segVal['da']['name'];
								$segmentListValOnward[$fri]['deptCityCode'] = $segVal['da']['cityCode'];
								$segmentListValOnward[$fri]['deptCityName'] = $segVal['da']['city'];
								$segmentListValOnward[$fri]['deptCountryCode'] = $segVal['da']['countryCode'];
								$segmentListValOnward[$fri]['deptCountryName'] = $segVal['da']['country'];
								$segmentListValOnward[$fri]['deptTerminalName'] = @$segVal['da']['terminal'];

								$segmentListValOnward[$fri]['arivAirCode'] = $segVal['aa']['code'];
								$segmentListValOnward[$fri]['arivAirName'] = $segVal['aa']['name'];
								$segmentListValOnward[$fri]['arivCityCode'] = $segVal['aa']['cityCode'];
								$segmentListValOnward[$fri]['arivCityName'] = $segVal['aa']['city'];
								$segmentListValOnward[$fri]['arivtCountryCode'] = $segVal['aa']['countryCode'];
								$segmentListValOnward[$fri]['arivCountryName'] = $segVal['aa']['country'];
								$segmentListValOnward[$fri]['arivTerminalName'] = @$segVal['aa']['terminal'];

								$segmentListValOnward[$fri]['flightDuration'] = $segVal['duration'];

								$segmentListValOnward[$fri]['flightConnectingTime'] = @$segVal['cT'];

								$segmentListValOnward[$fri]['departureDateNTime'] = $segVal['dt'];
								$segmentListValOnward[$fri]['arrivalDateNTime'] = $segVal['at'];

								$segmentListValOnward[$fri]['segmentNo'] = $segVal['sN'];

								$segmentListValOnward[$fri]['flightStop'] = $segVal['stops'];

								$frist = 0;
								foreach ($segVal['so'] as $key => $flightStopValue) {

									$segmentListValOnward[$fri]['flightStopArr'][$frist]['flightStopAirCode'] = $flightStopValue['code'];
									$segmentListValOnward[$fri]['flightStopArr'][$frist]['flightStopAirName'] = $flightStopValue['name'];
									$segmentListValOnward[$fri]['flightStopArr'][$frist]['flightStopCityCode'] = $flightStopValue['cityCode'];
									$segmentListValOnward[$fri]['flightStopArr'][$frist]['flightStopCityName'] = $flightStopValue['city'];
									$segmentListValOnward[$fri]['flightStopArr'][$frist]['flightStopCountryName'] = $flightStopValue['country'];
									$segmentListValOnward[$fri]['flightStopArr'][$frist]['flightStopCountryCode'] = $flightStopValue['countryCode'];
									
									$frist++;
								}

							}else{

								$segmentListValOnward[$fri]['segmentType'] = 'onwardList';

								$segmentListValOnward[$fri]['flightCode'] = $segVal['fD']['aI']['code'];
								$segmentListValOnward[$fri]['flightName'] = $segVal['fD']['aI']['name'];
								$segmentListValOnward[$fri]['flightNumber'] = $segVal['fD']['fN'];
								$segmentListValOnward[$fri]['flightET'] = $segVal['fD']['eT'];
								
								$segmentListValOnward[$fri]['deptAirCode'] = $segVal['da']['code'];
								$segmentListValOnward[$fri]['deptAirName'] = $segVal['da']['name'];
								$segmentListValOnward[$fri]['deptCityCode'] = $segVal['da']['cityCode'];
								$segmentListValOnward[$fri]['deptCityName'] = $segVal['da']['city'];
								$segmentListValOnward[$fri]['deptCountryCode'] = $segVal['da']['countryCode'];
								$segmentListValOnward[$fri]['deptCountryName'] = $segVal['da']['country'];
								$segmentListValOnward[$fri]['deptTerminalName'] = @$segVal['da']['terminal'];

								$segmentListValOnward[$fri]['arivAirCode'] = $segVal['aa']['code'];
								$segmentListValOnward[$fri]['arivAirName'] = $segVal['aa']['name'];
								$segmentListValOnward[$fri]['arivCityCode'] = $segVal['aa']['cityCode'];
								$segmentListValOnward[$fri]['arivCityName'] = $segVal['aa']['city'];
								$segmentListValOnward[$fri]['arivtCountryCode'] = $segVal['aa']['countryCode'];
								$segmentListValOnward[$fri]['arivCountryName'] = $segVal['aa']['country'];
								$segmentListValOnward[$fri]['arivTerminalName'] = @$segVal['aa']['terminal'];

								$segmentListValOnward[$fri]['flightDuration'] = $segVal['duration'];

								$segmentListValOnward[$fri]['flightConnectingTime'] = @$segVal['cT'];

								$segmentListValOnward[$fri]['departureDateNTime'] = $segVal['dt'];
								$segmentListValOnward[$fri]['arrivalDateNTime'] = $segVal['at'];

								$segmentListValOnward[$fri]['segmentNo'] = $segVal['sN'];

								$segmentListValOnward[$fri]['flightStop'] = $segVal['stops'];

							}

						}
						}
				
					$fri++;
				}

				$price = 0;
				$pricelist = array();
				
				foreach ($flightPriceListArray as $key => $fareValue) {

					$totalAdultAmount =  $fareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
					$totalChildAmount =  @$fareValue['fd']['CHILD']['fC']['TF'] * $childPax;
					$totalInfantAmount =  @$fareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

					$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

					$pricelist[$price]['adultrefund'] =  @$fareValue['fd']['ADULT']['rT'];
					$pricelist[$price]['childrefund'] =  @$fareValue['fd']['CHILD']['rT'];
					$pricelist[$price]['infantrefund'] =  @$fareValue['fd']['INFANT']['rT'];

					$pricelist[$price]['adultcabinClass'] =  @$fareValue['fd']['ADULT']['cB'];
					$pricelist[$price]['childcabinClass'] =  @$fareValue['fd']['CHILD']['cB'];

					$pricelist[$price]['adultcabinClassFare'] =  @$fareValue['fd']['ADULT']['cc'];
					$pricelist[$price]['childcabinClassFare'] =  @$fareValue['fd']['CHILD']['cc'];


					$pricelist[$price]['mealAdult'] =  @$fareValue['fd']['ADULT']['mi'];
					$pricelist[$price]['mealChild'] =  @$fareValue['fd']['CHILD']['mi'];
					$pricelist[$price]['mealInfant'] =  @$fareValue['fd']['INFANT']['mi'];

					$pricelist[$price]['totalFare'] = $totalFare;
					$pricelist[$price]['fareIdentifier'] = $fareValue['fareIdentifier'];

					$pricelist[$price]['adultBaseFare'] = $fareValue['fd']['ADULT']['fC']['BF'];
					$pricelist[$price]['childBaseFare'] = @$fareValue['fd']['CHILD']['fC']['BF'];
					$pricelist[$price]['infantBaseFare'] = @$fareValue['fd']['INFANT']['fC']['BF'];

					$pricelist[$price]['adultTaxFare'] = $fareValue['fd']['ADULT']['fC']['TAF'];
					$pricelist[$price]['childTaxFare'] = @$fareValue['fd']['CHILD']['fC']['TAF'];
					$pricelist[$price]['infantTaxFare'] = @$fareValue['fd']['INFANT']['fC']['TAF'];
					
					@$pricelist[$price]['countadultPax']= @$adultPax;
					@$pricelist[$price]['countchildPax']= @$childPax;
					@$pricelist[$price]['countinfantPax']= @$infantPax;

					$pricelist[$price]['adultTotalFare'] = $fareValue['fd']['ADULT']['fC']['BF'] + $fareValue['fd']['ADULT']['fC']['TAF'] ;
				
					@$pricelist[$price]['childTotalFare'] = $fareValue['fd']['CHILD']['fC']['BF'] + $fareValue['fd']['CHILD']['fC']['TAF'] ;
					
					@$pricelist[$price]['infantTotalFare'] = $fareValue['fd']['INFANT']['fC']['BF'] + $fareValue['fd']['INFANT']['fC']['TAF'] ;

					$pricelist[$price]['adultCheckInBaggage'] = @$fareValue['fd']['ADULT']['bI']['iB'];
					$pricelist[$price]['childCheckInBaggage'] = @$fareValue['fd']['CHILD']['bI']['iB'];

					$pricelist[$price]['adultCabinBaggage'] = @$fareValue['fd']['ADULT']['bI']['cB'];
					$pricelist[$price]['childCabinBaggage'] = @$fareValue['fd']['CHILD']['bI']['cB'];
					$pricelist[$price]['infantCabinBaggage'] = @$fareValue['fd']['INFANT']['bI']['cB'];


					$pricelist[$price]['flightId']  = $fareValue['id'];

					$price++;

				}

				$flightDataArr[$farr]['segmentListValOnward']  = $segmentListValOnward;
				$flightDataArr[$farr]['segmentListValReturn']  = $segmentListValReturn;
				$flightDataArr[$farr]['pricelist']  = $pricelist;

				$farr++;
				
			}

			$fin = 0; 
			$flightListValOnward = array(); 
			$flightListValReturn = array(); 

			foreach ($flightDataArr as $key => $flightinvalue) {

				$columns = array_column($flightinvalue['pricelist'], 'totalFare');	

				$max_price = max($columns);
				$min_price = min($columns);

				$flightDataArr[$key]['max_price'] = $max_price; 
				$flightDataArr[$key]['min_price'] = $min_price;


				foreach ($flightinvalue['segmentListValOnward'] as $key => $onwardFlightVal) {

					$flightListValOnward[] = array(
											'flightName' => $onwardFlightVal['flightName'],
											'flightCode' => $onwardFlightVal['flightCode'],
											);
				}
				foreach ($flightinvalue['segmentListValReturn'] as $key => $returnFlightVal) {

					$flightListValReturn[] = array(
											'flightName' => $returnFlightVal['flightName'],
											'flightCode' => $returnFlightVal['flightCode'],
											);
				}
				
				
				$fin++;

			}

			usort($flightDataArr, function($a, $b) {
				return $a['pricelist'][0]['totalFare'] - $b['pricelist'][0]['totalFare'] ;
			});


			$parentFlightMax = array_reduce($flightDataArr, function ($a, $b) {
				return @$a['pricelist'][0]['totalFare'] > $b['pricelist'][0]['totalFare'] ? $a : $b ;
			});		


			$maximumPrice = $parentFlightMax['max_price'];

			$bookingType = 'R';
			$data['flightArray'] = $flightDataArr;
			$data['bookingType'] = $bookingType;
			$data['departure'] = $_POST['departure'];
			$data['destination'] = $_POST['destination'];
			$data['departureDate'] = $departureDate;
			$data['returnDate'] = @$return_date;
			$data['adultPax'] = $_POST['adultPax'];
			$data['childPax'] = $_POST['childPax'];
			$data['infantPax'] = $_POST['infantPax'];
			$data['travelClass'] = $_POST['travelClass'];
			$data['maximumPrice'] = $maximumPrice;
			$data['flightOnwardList'] = array_map("unserialize", array_unique(array_map("serialize", $flightListValOnward)));
			$data['flightReturnList'] = array_map("unserialize", array_unique(array_map("serialize", $flightListValReturn)));
			
			$this->load->view('flights_international_filter',$data);


		

		

	}


	public function flight_filter(){

		//	echo "<pre>";	print_r($_POST);	 die();
		
		if($_POST['bookingType'] == 'O') {

			preg_match('#\((.*?)\)#', $_POST['departure'], $match);
			$departure =  $match[1];


			preg_match('#\((.*?)\)#', $_POST['destination'], $match);
			$destination =  $match[1];

			$departureDate=date("Y-m-d", strtotime($_POST['departureDate']));

			$paxinfo = array(


				'ADULT' => $_POST['adultPax'],
				'CHILD' => $_POST['childPax'],
				'INFANT' => $_POST['infantPax'],

			);
			$requestData = array(

				'cabinClass' => $_POST['travelClass'],
				'paxInfo' => $paxinfo,
				'routeInfos' =>array( 
					array(
						'fromCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'travelDate' => $departureDate,
					)
					),
						'searchModifiers' => array('isDirectFlight' => 'false','isConnectingFlight' => 'false'),
					

			);


			$ch = $this->callAPI($requestData);
			$result = curl_exec($ch);
			$response_array = json_decode($result, true);

			$FilAirlineID=$_POST['AirlineID'];
			if($FilAirlineID!='')  {  $FinalFilAirlineArr = explode(',', $FilAirlineID);   }

		
			
			foreach($FinalFilAirlineArr as $key => $val){
			
				$FinalFilAirlineArr[$key] = trim($val);
			
			}
			
				//echo "hello".$FinalFilAirlineArr[1]; die;

			$FilDipartureID=$_POST['departureId'];
			if($FilDipartureID!='')  {  $FinalFilDipartureTimeArr = explode(',', $FilDipartureID);   }	
			
			$FilArrivalID=$_POST['ArrivalId'];
			if($FilArrivalID!='')  {  $FinalFilArrivalTimeArr = explode(',', $FilArrivalID);   }	
		
			
			$FilStopID=$_POST['stopId'];
			if($FilStopID!='')  {  $FinalFilStopArr = explode(',', $FilStopID);   }

			$flightArray = $response_array['searchResult']['tripInfos']['ONWARD'];
			
			//		$flightArrayReturn = $response_array['searchResult']['tripInfos']['RETURN'];

			$totalFlight = count($flightArray); 
			//echo $totalFlight; die;
			//$totalFlightReturn = count($flightArrayReturn); 
				
			if(!empty($_POST['minimum_price'])) {	
				$minimum_price=$_POST['minimum_price'];
			}
			if(!empty($_POST['maximum_price'])) {
				$maximum_price=$_POST['maximum_price'];
			}

			if(!empty($_POST['minimum_price']))
			{
			$totalPriceArr= array();
				foreach (range($minimum_price,$maximum_price) as $totalFlights11) {
					
					$totalPriceArr[] = $totalFlights11;

				}
			}



			$flightArray = array();
			$flightFareDetails = array();
			$flightPriceAray = array();
			$totalPriceArray = array();


			if(empty(!$response_array['searchResult'])){

				$flightArray = $response_array['searchResult']['tripInfos']['ONWARD'];
				$totalFlight = count($flightArray); 		
			
				$flightArray = $response_array['searchResult']['tripInfos']['ONWARD'];
				$totalFlight = count($flightArray); 	
				
				
				$adultPax = $_POST['adultPax'];
				$childPax = $_POST['childPax'];
				$infantPax = $_POST['infantPax'];

				$farr=0;
				$parrentFlight = array();

				foreach ($flightArray as $key => $flightValue) {

					$flightListArray =  $flightValue['sI'];
					$flightPriceListArray =  $flightValue['totalPriceList'];
					$totalPriceArr = count($flightPriceListArray);
					
					$airlineCode = trim($flightListArray[0]['fD']['aI']['code']);

					//print_r($airlineCode);
				
					$departureTimeDtaeArr =  explode("T", $flightListArray[0]['dt']);
					$departureTimeArr =  explode(":", $departureTimeDtaeArr[1]);
					$departureTime =$departureTimeArr[0];

					$arrivalTimeDtaeArr =  explode("T", $flightListArray[0]['at']);
					$arrivalTimeArr =  explode(":", $arrivalTimeDtaeArr[1]);
					$arrivalTime =$arrivalTimeArr[0];

					//echo $arrivalTime; die;

					$stops=$flightListArray[0]['stops'];

					$totalFlightFare11 = $flightPriceListArray[0]['fd']['ADULT']['fC']['TF'] + @$flightPriceListArray[0]['fd']['CHILD']['fC']['TF'] + @$flightPriceListArray[0]['fd']['INFANT']['fC']['TF'];	

					$totalFare11 = $totalFlightFare11;

					$totalFare12 ='';
					$range = array();

					if((!empty($_POST['minimum_price']) || $_POST['minimum_price'] == '') && (!empty($_POST['maximum_price']) || $_POST['maximum_price'] == '')) {

						$minPrice = intval($minimum_price);
						$maxPrice = intval($maximum_price);
						$range = range($minPrice, $maxPrice);
						$totalFare12 = intval($totalFare11);

					}
				
					if((in_array($airlineCode, $FinalFilAirlineArr) || $_POST['AirlineID']=="0" ) && ( in_array($departureTime, $FinalFilDipartureTimeArr) || $_POST['departureId']=="0") && ( in_array($arrivalTime, $FinalFilArrivalTimeArr) || $_POST['ArrivalId']=="0") && ( in_array($stops, $FinalFilStopArr) || $_POST['stopId']=="0") &&  (in_array($totalFare12, $range) || ($_POST['minimum_price']=="0") && ($_POST['maximum_price']=="65000") ) ){

		

					$parrentFlight[$farr]['flightName'] = $flightListArray[0]['fD']['aI']['name'];
					$parrentFlight[$farr]['flghtCode'] = $flightListArray[0]['fD']['aI']['code'];
					$parrentFlight[$farr]['flghtName'] = $flightListArray[0]['fD']['aI']['name'];
					$parrentFlight[$farr]['flghtNumber'] = $flightListArray[0]['fD']['fN'];
					$parrentFlight[$farr]['airCraftNo'] = $flightListArray[0]['fD']['eT'];

					$parrentFlight[$farr]['departureAirportName'] = $flightListArray[0]['da']['name'];
					$parrentFlight[$farr]['departureAirportCode'] = $flightListArray[0]['da']['code'];
					$parrentFlight[$farr]['departureAirportTerminal'] = @$flightListArray[0]['da']['terminal'];
					$parrentFlight[$farr]['departureCity'] = $flightListArray[0]['da']['city'];
					$parrentFlight[$farr]['departureCountry'] = $flightListArray[0]['da']['country'];
					$parrentFlight[$farr]['departureCountryCode'] = $flightListArray[0]['da']['countryCode'];

					$parrentFlight[$farr]['arrivalAirportName'] = $flightListArray[0]['aa']['name'];
					$parrentFlight[$farr]['arrivalAirportCode'] = $flightListArray[0]['aa']['code'];
					$parrentFlight[$farr]['arrivalAirportTerminal'] = @$flightListArray[0]['aa']['terminal'];
					$parrentFlight[$farr]['arrivalCity'] = $flightListArray[0]['aa']['city'];
					$parrentFlight[$farr]['arrivalCountry'] = $flightListArray[0]['aa']['country'];
					$parrentFlight[$farr]['arrivalCountryCode'] = $flightListArray[0]['aa']['countryCode'];

					$parrentFlight[$farr]['noOfStops'] = $flightListArray[0]['stops'];
					$parrentFlight[$farr]['duration'] = $flightListArray[0]['duration'];

					$parrentFlight[$farr]['departureTime'] = $flightListArray[0]['dt'];
					$parrentFlight[$farr]['arrivalTime'] = $flightListArray[0]['at'];

					$price =0;

					foreach ($flightPriceListArray as $key => $fareValue) {					

						$totalAdultAmount =  $fareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
						$totalChildAmount =  @$fareValue['fd']['CHILD']['fC']['TF'] * $childPax;
						$totalInfantAmount =  @$fareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

						$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

						$parrentFlight[$farr]['pricelist'][$price]['adultrefund'] =  @$fareValue['fd']['ADULT']['rT'];
						$parrentFlight[$farr]['pricelist'][$price]['childrefund'] =  @$fareValue['fd']['CHILD']['rT'];
						$parrentFlight[$farr]['pricelist'][$price]['infantrefund'] =  @$fareValue['fd']['INFANT']['rT'];

						$parrentFlight[$farr]['pricelist'][$price]['adultcabinClass'] =  @$fareValue['fd']['ADULT']['cB'];
						$parrentFlight[$farr]['pricelist'][$price]['childcabinClass'] =  @$fareValue['fd']['CHILD']['cB'];

						$parrentFlight[$farr]['pricelist'][$price]['adultcabinClassFare'] =  @$fareValue['fd']['ADULT']['cc'];
						$parrentFlight[$farr]['pricelist'][$price]['childcabinClassFare'] =  @$fareValue['fd']['CHILD']['cc'];


						$parrentFlight[$farr]['pricelist'][$price]['mealAdult'] =  @$fareValue['fd']['ADULT']['mi'];
						$parrentFlight[$farr]['pricelist'][$price]['mealChild'] =  @$fareValue['fd']['CHILD']['mi'];
						$parrentFlight[$farr]['pricelist'][$price]['mealInfant'] =  @$fareValue['fd']['INFANT']['mi'];

						$parrentFlight[$farr]['pricelist'][$price]['totalFare'] = $totalFare;
						$parrentFlight[$farr]['pricelist'][$price]['fareIdentifier'] = $fareValue['fareIdentifier'];

						$parrentFlight[$farr]['pricelist'][$price]['adultBaseFare'] = $fareValue['fd']['ADULT']['fC']['BF'];
						$parrentFlight[$farr]['pricelist'][$price]['childBaseFare'] = @$fareValue['fd']['CHILD']['fC']['BF'];
						$parrentFlight[$farr]['pricelist'][$price]['infantBaseFare'] = @$fareValue['fd']['INFANT']['fC']['BF'];

						$parrentFlight[$farr]['pricelist'][$price]['adultTaxFare'] = $fareValue['fd']['ADULT']['fC']['TAF'];
						$parrentFlight[$farr]['pricelist'][$price]['childTaxFare'] = @$fareValue['fd']['CHILD']['fC']['TAF'];
						$parrentFlight[$farr]['pricelist'][$price]['infantTaxFare'] = @$fareValue['fd']['INFANT']['fC']['TAF'];
						
						@$parrentFlight[$farr]['pricelist'][$price]['countadultPax']= @$adultPax;
						@$parrentFlight[$farr]['pricelist'][$price]['countchildPax']= @$childPax;
						@$parrentFlight[$farr]['pricelist'][$price]['countinfantPax']= @$infantPax;

						$parrentFlight[$farr]['pricelist'][$price]['adultTotalFare'] = $fareValue['fd']['ADULT']['fC']['BF'] + $fareValue['fd']['ADULT']['fC']['TAF'] ;
					
						@$parrentFlight[$farr]['pricelist'][$price]['childTotalFare'] = $fareValue['fd']['CHILD']['fC']['BF'] + $fareValue['fd']['CHILD']['fC']['TAF'] ;
						
						@$parrentFlight[$farr]['pricelist'][$price]['infantTotalFare'] = $fareValue['fd']['INFANT']['fC']['BF'] + $fareValue['fd']['INFANT']['fC']['TAF'] ;

						$parrentFlight[$farr]['pricelist'][$price]['adultCheckInBaggage'] = @$fareValue['fd']['ADULT']['bI']['iB'];
						$parrentFlight[$farr]['pricelist'][$price]['childCheckInBaggage'] = @$fareValue['fd']['CHILD']['bI']['iB'];

						$parrentFlight[$farr]['pricelist'][$price]['adultCabinBaggage'] = @$fareValue['fd']['ADULT']['bI']['cB'];
						$parrentFlight[$farr]['pricelist'][$price]['childCabinBaggage'] = @$fareValue['fd']['CHILD']['bI']['cB'];
						$parrentFlight[$farr]['pricelist'][$price]['infantCabinBaggage'] = @$fareValue['fd']['INFANT']['bI']['cB'];


						$parrentFlight[$farr]['pricelist'][$price]['flightId']  = $fareValue['id'];

						
						$price++;
						
					}
					
						usort($parrentFlight[$farr]['pricelist'], function($a, $b) {
							return $a['totalFare'] - $b['totalFare'] ;
						});
				
				
				}
					$farr++;
					
				}

				usort($parrentFlight, function($a, $b) {
					return $a['pricelist'][0]['totalFare'] - $b['pricelist'][0]['totalFare'] ;
				});

			}	

			//	echo "<pre>"; print_r($parrentFlight); die;
			
			$data['completeResult'] = $parrentFlight;
			$data['departure'] = $_POST['departure'];
			$data['destination'] = $_POST['destination'];
			$data['bookingType'] = $_POST['bookingType'];
			$data['totalFlight'] = count($parrentFlight);

			$this->load->view('flight_filter',$data);

		} 
	
		else if ($_POST['bookingType'] == 'R') {
			
			//echo "<pre>"; print_r($_POST); die;

			preg_match('#\((.*?)\)#', $_POST['departure'], $match);
			$departure =  $match[1];


			preg_match('#\((.*?)\)#', $_POST['destination'], $match);
			$destination =  $match[1];

			$departureDate=date("Y-m-d", strtotime($_POST['departureDate']));
			$return_Date=date("Y-m-d", strtotime($_POST['returnDate']));

			$paxinfo = array(


				'ADULT' => $_POST['adultPax'],
				'CHILD' => $_POST['childPax'],
				'INFANT' => $_POST['infantPax'],

			);

			$requestData = array(

				'cabinClass' => $_POST['travelClass'],
				'paxInfo' => $paxinfo,
				'routeInfos' =>array( 
					array(
						'fromCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'travelDate' => $departureDate,
					),
					array(
						'fromCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'travelDate' => $return_Date,
					)
					),
						'searchModifiers' => array('isDirectFlight' => 'false','isConnectingFlight' => 'false'),
					

			);



		
		$ch = $this->callAPI($requestData);
		$result = curl_exec($ch);
		$response_array = json_decode($result, true);

		$FilAirlineID=$_POST['AirlineID'];
		if($FilAirlineID!='')  {  $FinalFilAirlineArr = explode(',', $FilAirlineID);   }
		
		foreach($FinalFilAirlineArr as $key => $val){
		
			$FinalFilAirlineArr[$key] = trim($val);
		
		}

		$FilDipartureID=$_POST['departureId'];
		if($FilDipartureID!='')  {  $FinalFilDipartureTimeArr = explode(',', $FilDipartureID);   }		
		
		$FilReturnID=$_POST['returnId'];
		if($FilReturnID!='')  {  $FinalFilReturnTimeArr = explode(',', $FilReturnID);   }	
		
		$FilStopID=$_POST['stopId'];
		if($FilStopID!='')  {  $FinalFilStopArr = explode(',', $FilStopID);   }

		$flightArray = $response_array['searchResult']['tripInfos']['ONWARD'];
		
		//		$flightArrayReturn = $response_array['searchResult']['tripInfos']['RETURN'];

		$totalFlight = count($flightArray); 
		//$totalFlightReturn = count($flightArrayReturn); 
			
		if(!empty($_POST['minimum_price'])) {	
			$minimum_price=$_POST['minimum_price'];
		}
		if(!empty($_POST['maximum_price'])) {
			$maximum_price=$_POST['maximum_price'];
		}

		if(!empty($_POST['minimum_price']))
		{
		 $totalPriceArr= array();
		 foreach (range($minimum_price,$maximum_price) as $totalFlights11) {
			
		 	$totalPriceArr[] = $totalFlights11;

		 }
		}



		$flightArray = array();
		$flightFareDetails = array();
		$flightPriceAray = array();
		$totalPriceArray = array();


		if(empty(!$response_array['searchResult'])){

			$flightArray = $response_array['searchResult']['tripInfos']['ONWARD'];
			$totalFlight = count($flightArray); 
		
		
			$flightArray = $response_array['searchResult']['tripInfos']['ONWARD'];
			$totalFlight = count($flightArray); 	
			 
			 
			 $adultPax = $_POST['adultPax'];
			 $childPax = $_POST['childPax'];
			 $infantPax = $_POST['infantPax'];

			$farr=0;
			$parrentFlight = array();

			foreach ($flightArray as $key => $flightValue) {

				$flightListArray =  $flightValue['sI'];
				$flightPriceListArray =  $flightValue['totalPriceList'];
				$totalPriceArr = count($flightPriceListArray);
				
				$airlineCode = trim($flightListArray[0]['fD']['aI']['code']);
			
				$departureTimeDtaeArr =  explode("T", $flightListArray[0]['dt']);
				$departureTimeArr =  explode(":", $departureTimeDtaeArr[1]);
				$departureTime =$departureTimeArr[0];

				$arrivalTimeDtaeArr =  explode("T", $flightListArray[0]['at']);
				$arrivalTimeArr =  explode(":", $arrivalTimeDtaeArr[1]);
				$arrivalTime =$arrivalTimeArr[0];

				$stops=$flightListArray[0]['stops'];

				$totalFlightFare11 = $flightPriceListArray[0]['fd']['ADULT']['fC']['TF'] + @$flightPriceListArray[0]['fd']['CHILD']['fC']['TF'] + @$flightPriceListArray[0]['fd']['INFANT']['fC']['TF'];	

				$totalFare11 = $totalFlightFare11;

				$totalFare12 ='';
				$range = array();

				if((!empty($_POST['minimum_price']) || $_POST['minimum_price'] == '') && (!empty($_POST['maximum_price']) || $_POST['maximum_price'] == '')) {

					$minPrice = intval($minimum_price);
					$maxPrice = intval($maximum_price);
					$range = range($minPrice, $maxPrice);
					$totalFare12 = intval($totalFare11);

				}
			
				if((in_array($airlineCode, $FinalFilAirlineArr) || $_POST['AirlineID']=="0" ) && ( in_array($departureTime, $FinalFilDipartureTimeArr) || $_POST['departureId']=="0") && ( in_array($arrivalTime, $FinalFilReturnTimeArr) || $_POST['returnId']=="0") && ( in_array($stops, $FinalFilStopArr) || $_POST['stopId']=="0") &&  (in_array($totalFare12, $range) || ($_POST['minimum_price']=="0") && ($_POST['maximum_price']=="65000") ) ){

				$parrentFlight[$farr]['flightName'] = $flightListArray[0]['fD']['aI']['name'];
				$parrentFlight[$farr]['flghtCode'] = $flightListArray[0]['fD']['aI']['code'];
				$parrentFlight[$farr]['flghtName'] = $flightListArray[0]['fD']['aI']['name'];
				$parrentFlight[$farr]['flghtNumber'] = $flightListArray[0]['fD']['fN'];
				$parrentFlight[$farr]['airCraftNo'] = $flightListArray[0]['fD']['eT'];

				$parrentFlight[$farr]['departureAirportName'] = $flightListArray[0]['da']['name'];
				$parrentFlight[$farr]['departureAirportCode'] = $flightListArray[0]['da']['code'];
				$parrentFlight[$farr]['departureAirportTerminal'] = @$flightListArray[0]['da']['terminal'];
				$parrentFlight[$farr]['departureCity'] = $flightListArray[0]['da']['city'];
				$parrentFlight[$farr]['departureCountry'] = $flightListArray[0]['da']['country'];
				$parrentFlight[$farr]['departureCountryCode'] = $flightListArray[0]['da']['countryCode'];

				$parrentFlight[$farr]['arrivalAirportName'] = $flightListArray[0]['aa']['name'];
				$parrentFlight[$farr]['arrivalAirportCode'] = $flightListArray[0]['aa']['code'];
				$parrentFlight[$farr]['arrivalAirportTerminal'] = @$flightListArray[0]['aa']['terminal'];
				$parrentFlight[$farr]['arrivalCity'] = $flightListArray[0]['aa']['city'];
				$parrentFlight[$farr]['arrivalCountry'] = $flightListArray[0]['aa']['country'];
				$parrentFlight[$farr]['arrivalCountryCode'] = $flightListArray[0]['aa']['countryCode'];

				$parrentFlight[$farr]['noOfStops'] = $flightListArray[0]['stops'];
				$parrentFlight[$farr]['duration'] = $flightListArray[0]['duration'];

				$parrentFlight[$farr]['departureTime'] = $flightListArray[0]['dt'];
				$parrentFlight[$farr]['arrivalTime'] = $flightListArray[0]['at'];

				$price =0;

				foreach ($flightPriceListArray as $key => $fareValue) {					

					$totalAdultAmount =  $fareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
					$totalChildAmount =  @$fareValue['fd']['CHILD']['fC']['TF'] * $childPax;
					$totalInfantAmount =  @$fareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

					$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

					$parrentFlight[$farr]['pricelist'][$price]['adultrefund'] =  @$fareValue['fd']['ADULT']['rT'];
					$parrentFlight[$farr]['pricelist'][$price]['childrefund'] =  @$fareValue['fd']['CHILD']['rT'];
					$parrentFlight[$farr]['pricelist'][$price]['infantrefund'] =  @$fareValue['fd']['INFANT']['rT'];

					$parrentFlight[$farr]['pricelist'][$price]['adultcabinClass'] =  @$fareValue['fd']['ADULT']['cB'];
					$parrentFlight[$farr]['pricelist'][$price]['childcabinClass'] =  @$fareValue['fd']['CHILD']['cB'];

					$parrentFlight[$farr]['pricelist'][$price]['adultcabinClassFare'] =  @$fareValue['fd']['ADULT']['cc'];
					$parrentFlight[$farr]['pricelist'][$price]['childcabinClassFare'] =  @$fareValue['fd']['CHILD']['cc'];


					$parrentFlight[$farr]['pricelist'][$price]['mealAdult'] =  @$fareValue['fd']['ADULT']['mi'];
					$parrentFlight[$farr]['pricelist'][$price]['mealChild'] =  @$fareValue['fd']['CHILD']['mi'];
					$parrentFlight[$farr]['pricelist'][$price]['mealInfant'] =  @$fareValue['fd']['INFANT']['mi'];

					$parrentFlight[$farr]['pricelist'][$price]['totalFare'] = $totalFare;
					$parrentFlight[$farr]['pricelist'][$price]['fareIdentifier'] = $fareValue['fareIdentifier'];

					$parrentFlight[$farr]['pricelist'][$price]['adultBaseFare'] = $fareValue['fd']['ADULT']['fC']['BF'];
					$parrentFlight[$farr]['pricelist'][$price]['childBaseFare'] = @$fareValue['fd']['CHILD']['fC']['BF'];
					$parrentFlight[$farr]['pricelist'][$price]['infantBaseFare'] = @$fareValue['fd']['INFANT']['fC']['BF'];

					$parrentFlight[$farr]['pricelist'][$price]['adultTaxFare'] = $fareValue['fd']['ADULT']['fC']['TAF'];
					$parrentFlight[$farr]['pricelist'][$price]['childTaxFare'] = @$fareValue['fd']['CHILD']['fC']['TAF'];
					$parrentFlight[$farr]['pricelist'][$price]['infantTaxFare'] = @$fareValue['fd']['INFANT']['fC']['TAF'];
					
					@$parrentFlight[$farr]['pricelist'][$price]['countadultPax']= @$adultPax;
					@$parrentFlight[$farr]['pricelist'][$price]['countchildPax']= @$childPax;
					@$parrentFlight[$farr]['pricelist'][$price]['countinfantPax']= @$infantPax;

					$parrentFlight[$farr]['pricelist'][$price]['adultTotalFare'] = $fareValue['fd']['ADULT']['fC']['BF'] + $fareValue['fd']['ADULT']['fC']['TAF'] ;
				
					@$parrentFlight[$farr]['pricelist'][$price]['childTotalFare'] = $fareValue['fd']['CHILD']['fC']['BF'] + $fareValue['fd']['CHILD']['fC']['TAF'] ;
					
					@$parrentFlight[$farr]['pricelist'][$price]['infantTotalFare'] = $fareValue['fd']['INFANT']['fC']['BF'] + $fareValue['fd']['INFANT']['fC']['TAF'] ;

					$parrentFlight[$farr]['pricelist'][$price]['adultCheckInBaggage'] = @$fareValue['fd']['ADULT']['bI']['iB'];
					$parrentFlight[$farr]['pricelist'][$price]['childCheckInBaggage'] = @$fareValue['fd']['CHILD']['bI']['iB'];

					$parrentFlight[$farr]['pricelist'][$price]['adultCabinBaggage'] = @$fareValue['fd']['ADULT']['bI']['cB'];
					$parrentFlight[$farr]['pricelist'][$price]['childCabinBaggage'] = @$fareValue['fd']['CHILD']['bI']['cB'];
					$parrentFlight[$farr]['pricelist'][$price]['infantCabinBaggage'] = @$fareValue['fd']['INFANT']['bI']['cB'];


					$parrentFlight[$farr]['pricelist'][$price]['flightId']  = $fareValue['id'];

					
					$price++;
					
				}
				
					usort($parrentFlight[$farr]['pricelist'], function($a, $b) {
						return $a['totalFare'] - $b['totalFare'] ;
					});
			
			
			}
				$farr++;
				
			}

			usort($parrentFlight, function($a, $b) {
				return $a['pricelist'][0]['totalFare'] - $b['pricelist'][0]['totalFare'] ;
			});

		}
		
		$data['completeResult'] = $parrentFlight;

		$this->load->view('flight_filter_return',$data);

		} 

		else if($_POST['bookingType'] == 'M'){

			//echo "<pre>";	print_r($_POST); die();

			preg_match('#\((.*?)\)#', $_POST['departure'], $match);
			$departure =  $match[1];

			preg_match('#\((.*?)\)#', $_POST['destination'], $match);
			$destination =  $match[1];

			$departureDate=date("Y-m-d", strtotime($_POST['departureDate']));

			$paxinfo = array(


				'ADULT' => $_POST['adultPax'],
				'CHILD' => $_POST['childPax'],
				'INFANT' => $_POST['infantPax'],

			);

			$requestData = array(

				'cabinClass' => $_POST['travelClass'],
				'paxInfo' => $paxinfo,
				'routeInfos' =>array( 
					array(
						'fromCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'travelDate' => $departureDate,
					)
					),
						'searchModifiers' => array('isDirectFlight' => 'false','isConnectingFlight' => 'false'),
					

			);


			$ch = $this->callAPI($requestData);
			$result = curl_exec($ch);
			$response_array = json_decode($result, true);

		//	echo "<pre>"; print_r($response_array); die;



		$FilAirlineID=$_POST['AirlineID'];
		if($FilAirlineID!='')  {  $FinalFilAirlineArr = explode(',', $FilAirlineID);   }

		foreach($FinalFilAirlineArr as $key => $val){
			
			$FinalFilAirlineArr[$key] = trim($val);
		
		}

		$FilDipartureID=$_POST['departureId'];
		if($FilDipartureID!='')  {  $FinalFilDipartureTimeArr = explode(',', $FilDipartureID);   }	
		
		$FilArrivalID=$_POST['ArrivalId'];
		if($FilArrivalID!='')  {  $FinalFilArrivalTimeArr = explode(',', $FilArrivalID);   }	
	
		
		$FilStopID=$_POST['stopId'];
		if($FilStopID!='')  {  $FinalFilStopArr = explode(',', $FilStopID);   }

		$flightArray = $response_array['searchResult']['tripInfos']['ONWARD'];

		$totalFlight = count($flightArray);  

		

		if(!empty($_POST['minimum_price'])) {	
			$minimum_price=$_POST['minimum_price'];
		}
		if(!empty($_POST['maximum_price'])) {
			$maximum_price=$_POST['maximum_price'];
		}

		if(!empty($_POST['minimum_price']))
		{
			$totalPriceArr= array();
			foreach (range($minimum_price,$maximum_price) as $totalFlights11) {
				
				$totalPriceArr[] = $totalFlights11;

			}
		}

			$flightArray = array();
			$flightFareDetails = array();
			$flightPriceAray = array();
			$totalPriceArray = array();


		
			if(empty(!$response_array['searchResult'])){

				$flightArray = $response_array['searchResult']['tripInfos']['ONWARD'];
				$totalFlight = count($flightArray); 		
			
				$flightArray = $response_array['searchResult']['tripInfos']['ONWARD'];
				$totalFlight = count($flightArray); 	
				
				
				$adultPax = $_POST['adultPax'];
				$childPax = $_POST['childPax'];
				$infantPax = $_POST['infantPax'];

				$farr=0;
				$parrentFlight = array();

				foreach ($flightArray as $key => $flightValue) {

					$flightListArray =  $flightValue['sI'];
					$flightPriceListArray =  $flightValue['totalPriceList'];
					$totalPriceArr = count($flightPriceListArray);
					
					$airlineCode = trim($flightListArray[0]['fD']['aI']['code']);

					//print_r($airlineCode);
				
					$departureTimeDtaeArr =  explode("T", $flightListArray[0]['dt']);
					$departureTimeArr =  explode(":", $departureTimeDtaeArr[1]);
					$departureTime =$departureTimeArr[0];

					$arrivalTimeDtaeArr =  explode("T", $flightListArray[0]['at']);
					$arrivalTimeArr =  explode(":", $arrivalTimeDtaeArr[1]);
					$arrivalTime =$arrivalTimeArr[0];

					//echo $arrivalTime; die;

					$stops=$flightListArray[0]['stops'];

					$totalFlightFare11 = $flightPriceListArray[0]['fd']['ADULT']['fC']['TF'] + @$flightPriceListArray[0]['fd']['CHILD']['fC']['TF'] + @$flightPriceListArray[0]['fd']['INFANT']['fC']['TF'];	

					$totalFare11 = $totalFlightFare11;

					$totalFare12 ='';
					$range = array();

					if((!empty($_POST['minimum_price']) || $_POST['minimum_price'] == '') && (!empty($_POST['maximum_price']) || $_POST['maximum_price'] == '')) {

						$minPrice = intval($minimum_price);
						$maxPrice = intval($maximum_price);
						$range = range($minPrice, $maxPrice);
						$totalFare12 = intval($totalFare11);

					}

				
					if((in_array($airlineCode, $FinalFilAirlineArr) || $_POST['AirlineID']=="0" ) && ( in_array($departureTime, $FinalFilDipartureTimeArr) || $_POST['departureId']=="0") && ( in_array($arrivalTime, $FinalFilArrivalTimeArr) || $_POST['ArrivalId']=="0") && ( in_array($stops, $FinalFilStopArr) || $_POST['stopId']=="0") &&  (in_array($totalFare12, $range) || ($_POST['minimum_price']=="0") && ($_POST['maximum_price']=="65000") ) ){
		

						$parrentFlight[$farr]['flightName'] = $flightListArray[0]['fD']['aI']['name'];
						$parrentFlight[$farr]['flghtCode'] = $flightListArray[0]['fD']['aI']['code'];
						$parrentFlight[$farr]['flghtName'] = $flightListArray[0]['fD']['aI']['name'];
						$parrentFlight[$farr]['flghtNumber'] = $flightListArray[0]['fD']['fN'];
						$parrentFlight[$farr]['airCraftNo'] = $flightListArray[0]['fD']['eT'];

						$parrentFlight[$farr]['departureAirportName'] = $flightListArray[0]['da']['name'];
						$parrentFlight[$farr]['departureAirportCode'] = $flightListArray[0]['da']['code'];
						$parrentFlight[$farr]['departureAirportTerminal'] = @$flightListArray[0]['da']['terminal'];
						$parrentFlight[$farr]['departureCity'] = $flightListArray[0]['da']['city'];
						$parrentFlight[$farr]['departureCountry'] = $flightListArray[0]['da']['country'];
						$parrentFlight[$farr]['departureCountryCode'] = $flightListArray[0]['da']['countryCode'];

						$parrentFlight[$farr]['arrivalAirportName'] = $flightListArray[0]['aa']['name'];
						$parrentFlight[$farr]['arrivalAirportCode'] = $flightListArray[0]['aa']['code'];
						$parrentFlight[$farr]['arrivalAirportTerminal'] = @$flightListArray[0]['aa']['terminal'];
						$parrentFlight[$farr]['arrivalCity'] = $flightListArray[0]['aa']['city'];
						$parrentFlight[$farr]['arrivalCountry'] = $flightListArray[0]['aa']['country'];
						$parrentFlight[$farr]['arrivalCountryCode'] = $flightListArray[0]['aa']['countryCode'];

						$parrentFlight[$farr]['noOfStops'] = $flightListArray[0]['stops'];
						$parrentFlight[$farr]['duration'] = $flightListArray[0]['duration'];

						$parrentFlight[$key]['departureDate'] = $flightListArray[0]['dt'];
						$parrentFlight[$farr]['departureTime'] = date("H:i",strtotime($flightListArray[0]['dt']));
						$parrentFlight[$farr]['arrivalTime'] = $flightListArray[0]['at'];

						$price =0;

						foreach ($flightPriceListArray as $key => $fareValue) {					

							$totalAdultAmount =  $fareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
							$totalChildAmount =  @$fareValue['fd']['CHILD']['fC']['TF'] * $childPax;
							$totalInfantAmount =  @$fareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

							$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

							$parrentFlight[$farr]['pricelist'][$price]['adultrefund'] =  @$fareValue['fd']['ADULT']['rT'];
							$parrentFlight[$farr]['pricelist'][$price]['childrefund'] =  @$fareValue['fd']['CHILD']['rT'];
							$parrentFlight[$farr]['pricelist'][$price]['infantrefund'] =  @$fareValue['fd']['INFANT']['rT'];

							$parrentFlight[$farr]['pricelist'][$price]['adultcabinClass'] =  @$fareValue['fd']['ADULT']['cB'];
							$parrentFlight[$farr]['pricelist'][$price]['childcabinClass'] =  @$fareValue['fd']['CHILD']['cB'];

							$parrentFlight[$farr]['pricelist'][$price]['adultcabinClassFare'] =  @$fareValue['fd']['ADULT']['cc'];
							$parrentFlight[$farr]['pricelist'][$price]['childcabinClassFare'] =  @$fareValue['fd']['CHILD']['cc'];


							$parrentFlight[$farr]['pricelist'][$price]['mealAdult'] =  @$fareValue['fd']['ADULT']['mi'];
							$parrentFlight[$farr]['pricelist'][$price]['mealChild'] =  @$fareValue['fd']['CHILD']['mi'];
							$parrentFlight[$farr]['pricelist'][$price]['mealInfant'] =  @$fareValue['fd']['INFANT']['mi'];

							$parrentFlight[$farr]['pricelist'][$price]['totalFare'] = $totalFare;
							$parrentFlight[$farr]['pricelist'][$price]['fareIdentifier'] = $fareValue['fareIdentifier'];

							$parrentFlight[$farr]['pricelist'][$price]['adultBaseFare'] = $fareValue['fd']['ADULT']['fC']['BF'];
							$parrentFlight[$farr]['pricelist'][$price]['childBaseFare'] = @$fareValue['fd']['CHILD']['fC']['BF'];
							$parrentFlight[$farr]['pricelist'][$price]['infantBaseFare'] = @$fareValue['fd']['INFANT']['fC']['BF'];

							$parrentFlight[$farr]['pricelist'][$price]['adultTaxFare'] = $fareValue['fd']['ADULT']['fC']['TAF'];
							$parrentFlight[$farr]['pricelist'][$price]['childTaxFare'] = @$fareValue['fd']['CHILD']['fC']['TAF'];
							$parrentFlight[$farr]['pricelist'][$price]['infantTaxFare'] = @$fareValue['fd']['INFANT']['fC']['TAF'];
							
							@$parrentFlight[$farr]['pricelist'][$price]['countadultPax']= @$adultPax;
							@$parrentFlight[$farr]['pricelist'][$price]['countchildPax']= @$childPax;
							@$parrentFlight[$farr]['pricelist'][$price]['countinfantPax']= @$infantPax;

							$parrentFlight[$farr]['pricelist'][$price]['adultTotalFare'] = $fareValue['fd']['ADULT']['fC']['BF'] + $fareValue['fd']['ADULT']['fC']['TAF'] ;
						
							@$parrentFlight[$farr]['pricelist'][$price]['childTotalFare'] = $fareValue['fd']['CHILD']['fC']['BF'] + $fareValue['fd']['CHILD']['fC']['TAF'] ;
							
							@$parrentFlight[$farr]['pricelist'][$price]['infantTotalFare'] = $fareValue['fd']['INFANT']['fC']['BF'] + $fareValue['fd']['INFANT']['fC']['TAF'] ;

							$parrentFlight[$farr]['pricelist'][$price]['adultCheckInBaggage'] = @$fareValue['fd']['ADULT']['bI']['iB'];
							$parrentFlight[$farr]['pricelist'][$price]['childCheckInBaggage'] = @$fareValue['fd']['CHILD']['bI']['iB'];

							$parrentFlight[$farr]['pricelist'][$price]['adultCabinBaggage'] = @$fareValue['fd']['ADULT']['bI']['cB'];
							$parrentFlight[$farr]['pricelist'][$price]['childCabinBaggage'] = @$fareValue['fd']['CHILD']['bI']['cB'];
							$parrentFlight[$farr]['pricelist'][$price]['infantCabinBaggage'] = @$fareValue['fd']['INFANT']['bI']['cB'];


							$parrentFlight[$farr]['pricelist'][$price]['flightId']  = $fareValue['id'];

							
							$price++;
							
						}
						
							usort($parrentFlight[$farr]['pricelist'], function($a, $b) {
								return $a['totalFare'] - $b['totalFare'] ;
							});
				
				
					}
					$farr++;
					
				}
			//	die;
				usort($parrentFlight, function($a, $b) {
					return $a['pricelist'][0]['totalFare'] - $b['pricelist'][0]['totalFare'] ;
				});

			}	

			$data['completeResult'] = $parrentFlight;
			$data['departure'] = $_POST['departure'];
			$data['destination'] = $_POST['destination'];
			$data['bookingType'] = $_POST['bookingType'];
			$data['totalFlight'] = count($parrentFlight);

			//echo "<pre>"; print_r($data); die;
			$this->load->view('flight_multifilter',$data);






		}
		
	}

public function flight_filter_return(){

	//echo '<pre>'; print_r($_POST); die;
			$departureDate=date("Y-m-d", strtotime($_POST['departureDate']));
			$return_Date=date("Y-m-d", strtotime($_POST['returnDate']));

			preg_match('#\((.*?)\)#', $_POST['departure'], $match);
			$departure =  $match[1];
	
	
			preg_match('#\((.*?)\)#', $_POST['destination'], $match);
			$destination =  $match[1];

			$paxinfo = array(


				'ADULT' => $_POST['adultPax'],
				'CHILD' => $_POST['childPax'],
				'INFANT' => $_POST['infantPax'],

			);

			$requestData = array(

				'cabinClass' => $_POST['travelClass'],
				'paxInfo' => $paxinfo,
				'routeInfos' =>array( 
					array(
						'fromCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'travelDate' => $departureDate,
					),
					array(
						'fromCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'travelDate' => $return_Date,
					)
					),
						'searchModifiers' => array('isDirectFlight' => 'false','isConnectingFlight' => 'false'),
					

			);


			$adultPax = $_POST['adultPax'];
			$childPax = $_POST['childPax'];
			$infantPax = $_POST['infantPax'];
			
			$ch = $this->callAPI($requestData);
			$result = curl_exec($ch);
			$response_array = json_decode($result, true);

			$FilAirlineID=$_POST['RAirlineID'];
			if($FilAirlineID!='')  {  $FinalFilAirlineArr = explode(',', $FilAirlineID);   }

			// $FilRAirlineID=$_POST['RAirlineID'];
			// if($FilAirlineID!='')  {  $FinalFilAirlineArr = explode(',', $FilAirlineID);   }

			//print_r($FilAirlineID);

			$FilDipartureID=$_POST['departureId'];
			if($FilDipartureID!='')  {  $FinalFilDipartureTimeArr = explode(',', $FilDipartureID);   }

			//print_r($FilDipartureID);
			
			$FilReturnID=$_POST['returnId'];
			if($FilReturnID!='')  {  $FinalFilReturnTimeArr = explode(',', $FilReturnID);   }
			
			$FilStopID=$_POST['stopId'];
			if($FilStopID!='')  {  $FinalFilStopArr = explode(',', $FilStopID);   }

			$flightArray = $response_array['searchResult']['tripInfos']['ONWARD'];
			
			$flightArrayReturn = $response_array['searchResult']['tripInfos']['RETURN'];

			$totalFlight = count($flightArray); 
			$totalFlightReturn = count($flightArrayReturn); 
				
			if(!empty($_POST['minimum_price'])) {	
				$minimum_price=$_POST['minimum_price'];
			}
			if(!empty($_POST['maximum_price'])) {
				$maximum_price=$_POST['maximum_price'];
			}

			if(!empty($_POST['minimum_price']))
			{
			$totalPriceArr= array();
			foreach (range($minimum_price,$maximum_price) as $totalFlights11) {
				
				$totalPriceArr[] = $totalFlights11;

			}
			}
		
			$farr=0;
			$parrentFlight = array();

			foreach ($flightArrayReturn as $key => $flightValue1) {

				$flightListArray1 =  $flightValue1['sI'];
				$flightPriceListArray1 =  $flightValue1['totalPriceList'];
				$totalPriceArr1 = count($flightPriceListArray1);
				
				$airlineCode1 = trim($flightListArray1[0]['fD']['aI']['code']);
			
				$departureTimeDtaeArr1 =  explode("T", $flightListArray1[0]['dt']);
				$departureTimeArr1 =  explode(":", $departureTimeDtaeArr1[1]);
				$departureTime1 =$departureTimeArr1[0];
				$stops1=$flightListArray1[0]['stops'];

				$totalFlightFare112 = $flightPriceListArray1[0]['fd']['ADULT']['fC']['TF'] + @$flightPriceListArray1[0]['fd']['CHILD']['fC']['TF'] + @$flightPriceListArray1[0]['fd']['INFANT']['fC']['TF'];	

				$totalFare112 = $totalFlightFare112;

				$totalFare122 ='';
				$range1 = array();

				if((!empty($_POST['minimum_price']) || $_POST['minimum_price'] == '') && (!empty($_POST['maximum_price']) || $_POST['maximum_price'] == '')) {

					$minPrice = intval($minimum_price);
					$maxPrice = intval($maximum_price);
					$range = range($minPrice, $maxPrice);
					$totalFare122 = intval($totalFare112);

				}
			
				if((in_array($airlineCode1, $FinalFilAirlineArr) || $_POST['RAirlineID']=="0" ) && ( in_array($departureTime1, $FinalFilDipartureTimeArr) || $_POST['departureId']=="0") && ( in_array($departureTime1, $FinalFilReturnTimeArr) || $_POST['returnId']=="0")  && ( in_array($stops1, $FinalFilStopArr) || $_POST['stopId']=="0") &&  (in_array($totalFare122, $range) || ($_POST['minimum_price']=="0") && ($_POST['maximum_price']=="65000") ) ){

				$parrentFlight1[$farr]['flightName'] = $flightListArray1[0]['fD']['aI']['name'];
				$parrentFlight1[$farr]['flghtCode'] = $flightListArray1[0]['fD']['aI']['code'];
				$parrentFlight1[$farr]['flghtName'] = $flightListArray1[0]['fD']['aI']['name'];
				$parrentFlight1[$farr]['flghtNumber'] = $flightListArray1[0]['fD']['fN'];
				$parrentFlight1[$farr]['airCraftNo'] = $flightListArray1[0]['fD']['eT'];

				$parrentFlight1[$farr]['departureAirportName'] = $flightListArray1[0]['da']['name'];
				$parrentFlight1[$farr]['departureAirportCode'] = $flightListArray1[0]['da']['code'];
				$parrentFlight1[$farr]['departureAirportTerminal'] = @$flightListArray1[0]['da']['terminal'];
				$parrentFlight1[$farr]['departureCity'] = $flightListArray1[0]['da']['city'];
				$parrentFlight1[$farr]['departureCountry'] = $flightListArray1[0]['da']['country'];
				$parrentFlight1[$farr]['departureCountryCode'] = $flightListArray1[0]['da']['countryCode'];

				$parrentFlight1[$farr]['arrivalAirportName'] = $flightListArray1[0]['aa']['name'];
				$parrentFlight1[$farr]['arrivalAirportCode'] = $flightListArray1[0]['aa']['code'];
				$parrentFlight1[$farr]['arrivalAirportTerminal'] = @$flightListArray1[0]['aa']['terminal'];
				$parrentFlight1[$farr]['arrivalCity'] = $flightListArray1[0]['aa']['city'];
				$parrentFlight1[$farr]['arrivalCountry'] = $flightListArray1[0]['aa']['country'];
				$parrentFlight1[$farr]['arrivalCountryCode'] = $flightListArray1[0]['aa']['countryCode'];

				$parrentFlight1[$farr]['noOfStops'] = $flightListArray1[0]['stops'];
				$parrentFlight1[$farr]['duration'] = $flightListArray1[0]['duration'];

				$parrentFlight1[$farr]['departureTime'] = $flightListArray1[0]['dt'];
				$parrentFlight1[$farr]['arrivalTime'] = $flightListArray1[0]['at'];

				$price =0;

				foreach ($flightPriceListArray1 as $key => $fareValue) {					

					$totalAdultAmount =  $fareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
					$totalChildAmount =  @$fareValue['fd']['CHILD']['fC']['TF'] * $childPax;
					$totalInfantAmount =  @$fareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

					$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

					$parrentFlight1[$farr]['pricelists'][$price]['adultrefund'] =  @$fareValue['fd']['ADULT']['rT'];
					$parrentFlight1[$farr]['pricelists'][$price]['childrefund'] =  @$fareValue['fd']['CHILD']['rT'];
					$parrentFlight1[$farr]['pricelists'][$price]['infantrefund'] =  @$fareValue['fd']['INFANT']['rT'];

					$parrentFlight1[$farr]['pricelists'][$price]['adultcabinClass'] =  @$fareValue['fd']['ADULT']['cB'];
					$parrentFlight1[$farr]['pricelists'][$price]['childcabinClass'] =  @$fareValue['fd']['CHILD']['cB'];

					$parrentFlight1[$farr]['pricelists'][$price]['adultcabinClassFare'] =  @$fareValue['fd']['ADULT']['cc'];
					$parrentFlight1[$farr]['pricelists'][$price]['childcabinClassFare'] =  @$fareValue['fd']['CHILD']['cc'];


					$parrentFlight1[$farr]['pricelists'][$price]['mealAdult'] =  @$fareValue['fd']['ADULT']['mi'];
					$parrentFlight1[$farr]['pricelists'][$price]['mealChild'] =  @$fareValue['fd']['CHILD']['mi'];
					$parrentFlight1[$farr]['pricelists'][$price]['mealInfant'] =  @$fareValue['fd']['INFANT']['mi'];

					$parrentFlight1[$farr]['pricelists'][$price]['totalFare'] = $totalFare;
					$parrentFlight1[$farr]['pricelists'][$price]['fareIdentifier'] = $fareValue['fareIdentifier'];

					$parrentFlight1[$farr]['pricelists'][$price]['adultBaseFare'] = $fareValue['fd']['ADULT']['fC']['BF'];
					$parrentFlight1[$farr]['pricelists'][$price]['childBaseFare'] = @$fareValue['fd']['CHILD']['fC']['BF'];
					$parrentFlight1[$farr]['pricelists'][$price]['infantBaseFare'] = @$fareValue['fd']['INFANT']['fC']['BF'];

					$parrentFlight1[$farr]['pricelists'][$price]['adultTaxFare'] = $fareValue['fd']['ADULT']['fC']['TAF'];
					$parrentFlight1[$farr]['pricelists'][$price]['childTaxFare'] = @$fareValue['fd']['CHILD']['fC']['TAF'];
					$parrentFlight1[$farr]['pricelists'][$price]['infantTaxFare'] = @$fareValue['fd']['INFANT']['fC']['TAF'];
					
					@$parrentFlight1[$farr]['pricelists'][$price]['countadultPax']= @$adultPax;
					@$parrentFlight1[$farr]['pricelists'][$price]['countchildPax']= @$childPax;
					@$parrentFlight1[$farr]['pricelists'][$price]['countinfantPax']= @$infantPax;

					$parrentFlight1[$farr]['pricelists'][$price]['adultTotalFare'] = $fareValue['fd']['ADULT']['fC']['BF'] + $fareValue['fd']['ADULT']['fC']['TAF'] ;
				
					@$parrentFlight1[$farr]['pricelists'][$price]['childTotalFare'] = $fareValue['fd']['CHILD']['fC']['BF'] + $fareValue['fd']['CHILD']['fC']['TAF'] ;
					
					@$parrentFlight1[$farr]['pricelists'][$price]['infantTotalFare'] = $fareValue['fd']['INFANT']['fC']['BF'] + $fareValue['fd']['INFANT']['fC']['TAF'] ;

					$parrentFlight1[$farr]['pricelists'][$price]['adultCheckInBaggage'] = @$fareValue['fd']['ADULT']['bI']['iB'];
					$parrentFlight1[$farr]['pricelists'][$price]['childCheckInBaggage'] = @$fareValue['fd']['CHILD']['bI']['iB'];

					$parrentFlight1[$farr]['pricelists'][$price]['adultCabinBaggage'] = @$fareValue['fd']['ADULT']['bI']['cB'];
					$parrentFlight1[$farr]['pricelists'][$price]['childCabinBaggage'] = @$fareValue['fd']['CHILD']['bI']['cB'];
					$parrentFlight1[$farr]['pricelists'][$price]['infantCabinBaggage'] = @$fareValue['fd']['INFANT']['bI']['cB'];


					$parrentFlight1[$farr]['pricelists'][$price]['flightId']  = $fareValue['id'];

					
					$price++;
					
				}
				
					usort($parrentFlight1[$farr]['pricelists'], function($a, $b) {
						return $a['totalFare'] - $b['totalFare'] ;
					});
			
			
			}
				$farr++;
				
			}
			error_reporting(0);
			usort($parrentFlight1, function($a, $b) {
				return @$a['pricelists'][0]['totalFare'] - @$b['pricelists'][0]['totalFare'] ;
			});


			$data['completeResultReturn'] = $parrentFlight1;
			
			$this->load->view('flight_twowayfilter',$data);

		
			
	}
		
		

	private function callAPI($data){

	
		$url = 'https://apitest.tripjack.com/fms/v1/air-search-all';	

		$payload = json_encode(array("searchQuery" => $data));

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
	  
	public function search_flights(){

		$data=$this->comman_data();
		
		$this->load->model('Flights_page') ;
		$data['search_flights']=$this->Flights_page->search_flights();
		$this->load->view('search_flights',$data);		  
			  
	}

	public function booking_flights(){

		$data=$this->comman_data();
	  
	   $this->load->model('Flights_page') ;
	   $data['booking_flights']=$this->Flights_page->booking_flights();

	   $this->load->view('booking_flights',$data);
   
   
	}



	

	public function flights_checkout(){

		$data=$this->comman_data();
	  
	   $this->load->model('Flights_page') ;
	   $data['flights_checkout']=$this->Flights_page->flights_checkout();

	   $this->load->view('flight_checkout',$data);
   
   
	}

	public function thankyou(){

		$data=$this->comman_data();
	  
	   $this->load->model('Flights_page') ;
	   $data['thankyou']=$this->Flights_page->thankyou();

	   $this->load->view('thankyou_flights',$data);
   
   
	}

	// incredible 

	public function review1(){

		$flightId = $this->input->post('flightId');
		$fnName = $this->input->post('fnName');
		$fnCode = $this->input->post('fnCode');
		$deptCode = $this->input->post('deptCode');
		$arrivCode = $this->input->post('arrivCode');
		$depature = $this->input->post('depatureTime');
		$arrival = $this->input->post('arrivalTime');
		$stops = $this->input->post('stops');
		$duration = $this->input->post('duration');
		$totalFare = $this->input->post('totalFare');

		$minutes = $duration;
		$hours = floor($minutes / 60);
		$min = $minutes - ($hours * 60);

		$durationTime = $hours."h ".$min."m" ;


		$departureTime = date("H:i",strtotime($depature));
		$arrivalTime = date("H:i",strtotime($arrival));

		$departureDate = date("D,d M",strtotime($depature));
		$arrivalDate = date("D,d M",strtotime($arrival));

		$stop = $stops;
		if($stop == 0){

		  $st= 'Non-Stop';

		}else{

		  $st= $stop. ' Stops';

		}

		$response_array = array(

			'flightId' => $flightId,
			'fnName' => $fnName,
			'fnCode' => $fnCode,
			'deptCode' => $deptCode,
			'arrivCode' => $arrivCode,
			'depatureTime' => $departureTime,
			'arrivalTime' => $arrivalTime,
			'departureDate' => $departureDate,
			'arrivalDate' => $arrivalDate,
			'duration' => $durationTime,
			'stops' => $st,
			'totalFare' => $totalFare
		);

		$data = array();

		echo "bhnau"; die;

		$data['flightSingle'] = $response_array;
		$this->load->view('flights_selection',$data);


	}


	public function review(){

		//echo "<pre>"; print_r($_POST); die;

		// $flightId = $this->input->post('flightId');
		// $fnName = $this->input->post('fnName');
		// $fnCode = $this->input->post('fnCode');
		// $deptCode = $this->input->post('deptCode');
		// $arrivCode = $this->input->post('arrivCode');
		// $depature = $this->input->post('depatureTime');
		// $arrival = $this->input->post('arrivalTime');
		// $stops = $this->input->post('stops');
		// $duration = $this->input->post('duration');
		// $totalFare = $this->input->post('totalFare');

		// $flightId1 = $this->input->post('flightId1');
		// $fnName1 = $this->input->post('fnName1');
		// $fnCode1 = $this->input->post('fnCode1');
		// $deptCode1 = $this->input->post('deptCode1');
		// $arrivCode1 = $this->input->post('arrivCode1');
		// $depature1 = $this->input->post('depatureTime1');
		// $arrival1 = $this->input->post('arrivalTime1');
		// $stops1 = $this->input->post('stops1');
		// $duration1 = $this->input->post('duration1');
		// $totalFare1 = $this->input->post('totalFare1');


		// $minutes = $duration;
		// $hours = floor($minutes / 60);
		// $min = $minutes - ($hours * 60);

		// $durationTime = $hours."h ".$min."m" ;


		// $departureTime = date("H:i",strtotime($depature));
		// $arrivalTime = date("H:i",strtotime($arrival));

		// $departureDate = date("D,d M",strtotime($depature));
		// $arrivalDate = date("D,d M",strtotime($arrival));

		// $stop = $stops;
		// if($stop == 0){

		//   $st= 'Non-Stop';

		// }else{

		//   $st= $stop. ' Stops';

		// }

		// $minutes1 = $duration1;
		// $hours1 = floor($minutes1 / 60);
		// $min1 = $minutes1 - ($hours1 * 60);

		// $durationTime1 = $hours1."h ".$min1."m" ;


		// $departureTime1 = date("H:i",strtotime($depature1));
		// $arrivalTime1 = date("H:i",strtotime($arrival1));

		// $departureDate1 = date("D,d M",strtotime($depature1));
		// $arrivalDate1 = date("D,d M",strtotime($arrival1));

		// $stop1 = $stops1;
		// if($stop1 == 0){

		//   $st1= 'Non-Stop';

		// }else{

		//   $st1= $stop1. ' Stops';

		// }



		// $response_array = array(

		// 	'flightId' => $flightId,
		// 	'fnName' => $fnName,
		// 	'fnCode' => $fnCode,
		// 	'deptCode' => $deptCode,
		// 	'arrivCode' => $arrivCode,
		// 	'depatureTime' => $departureTime,
		// 	'arrivalTime' => $arrivalTime,
		// 	'departureDate' => $departureDate,
		// 	'arrivalDate' => $arrivalDate,
		// 	'duration' => $durationTime,
		// 	'stops' => $st,
		// 	'totalFare' => $totalFare
			// 'flightId1' => $flightId1,
			// 'fnName1' => $fnName1,
			// 'fnCode1' => $fnCode1,
			// 'deptCode1' => $deptCode1,
			// 'arrivCode1' => $arrivCode1,
			// 'depatureTime1' => $departureTime1,
			// 'arrivalTime1' => $arrivalTime1,
			// 'departureDate1' => $departureDate1,
			// 'arrivalDate1' => $arrivalDate1,
			// 'duration1' => $durationTime1,
			// 'stops1' => $st1,
			// 'totalFare1' => $totalFare1,
 

		// );

		// $data = array();

		// $data['flightSingle'] = $response_array;
		// $this->load->view('flights_selection',$data);

		$flightId= $this->input->post('flightId');
	//	print_r($_POST); die;

		$priceId= array($flightId);

		$priceIds = json_encode(array("priceIds"=> $priceId));
		
		$url = 'https://apitest.tripjack.com/fms/v1/review';
		
		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $priceIds);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));

		$result = curl_exec($ch);
		$response_array = json_decode($result, true);
		//echo '<pre>'; print_r($response_array); die;
		$data=$this->comman_data();
		curl_close($ch);
		$data['tripInfoResult'] = $response_array['tripInfos'];

		$this->load->view('flights_selection',$data);

	} 

	public function reviewreturn(){		

		$flightId= $this->input->post('flightId');
		$flightIds= $this->input->post('flightIds');

		// print_r($flightId);
		// print_r($flightIds); die;

		//echo "<pre>"; print_r($_SESSION);die;


		$priceId= array($flightId,$flightIds);

		$priceIds = json_encode(array("priceIds"=> $priceId));

		//print_r($priceIds); die;
		
		$url = 'https://apitest.tripjack.com/fms/v1/review';
		
		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $priceIds);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));

		$result = curl_exec($ch);
		$response_array = json_decode($result, true);
		//echo '<pre>'; print_r($response_array); die;
		$data=$this->comman_data();
		curl_close($ch);


		$flightSingleData = $response_array['tripInfos'];

		//echo "<pre>"; print_r($flightSingleData); die;

		$adultPax = $_SESSION['adult_user'];
		$childPax = $_SESSION['child_user'];
		$infantPax = $_SESSION['infant_user'];

		$flightArray = array();
		$fp = 0;
		foreach ($flightSingleData as $key => $flightSingleValue) {
			
			$flightSegmentList = $flightSingleValue['sI']; 
			$flightPricetList = $flightSingleValue['totalPriceList']; 

			$flightArray[$fp]['flightCode'] = $flightSegmentList[0]['fD']['aI']['code'];
			$flightArray[$fp]['flightName'] = $flightSegmentList[0]['fD']['aI']['name'];
			$flightArray[$fp]['flightNumber'] = $flightSegmentList[0]['fD']['fN'];
			$flightArray[$fp]['noofStops'] = $flightSegmentList[0]['stops'];
			$flightArray[$fp]['duration'] = $flightSegmentList[0]['duration'];

			$flightArray[$fp]['departureAirportCode'] = $flightSegmentList[0]['da']['code'];
			$flightArray[$fp]['departureAirportName'] = $flightSegmentList[0]['da']['name'];
			$flightArray[$fp]['departureCity'] = $flightSegmentList[0]['da']['cityCode'];
			$flightArray[$fp]['departureTerminal'] = @$flightSegmentList[0]['da']['terminal'];
			$flightArray[$fp]['departureCountry'] = $flightSegmentList[0]['da']['country'];
			$flightArray[$fp]['departureCountryCode'] = $flightSegmentList[0]['da']['countryCode'];

			$flightArray[$fp]['arrivalAirportCode'] = $flightSegmentList[0]['aa']['code'];
			$flightArray[$fp]['arrivalAirportName'] = $flightSegmentList[0]['aa']['name'];
			$flightArray[$fp]['arrivalCity'] = $flightSegmentList[0]['aa']['cityCode'];
			$flightArray[$fp]['arrivalTerminal'] = @$flightSegmentList[0]['aa']['terminal'];
			$flightArray[$fp]['arrivalCountry'] = $flightSegmentList[0]['aa']['country'];
			$flightArray[$fp]['arrivalCountryCode'] = $flightSegmentList[0]['aa']['countryCode'];

			$flightArray[$fp]['departureTime'] = $flightSegmentList[0]['dt'];
			$flightArray[$fp]['arrivalTime'] = $flightSegmentList[0]['at'];

			//	$flightArray[$fp]['arrivalTime'] = $flightPricetList[0][0]['at'];

			$price = 0;

			foreach ($flightPricetList as $key => $priceValue) {

				$totalAdultAmount =  $priceValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
				$totalChildAmount =  @$priceValue['fd']['CHILD']['fC']['TF'] * $childPax;
				$totalInfantAmount =  @$priceValue['fd']['INFANT']['fC']['TF'] * $infantPax;

				$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

				$flightArray[$fp]['priceList'][$price]['totalFare']  = $totalFare;


				$flightArray[$fp]['priceList'][$price]['adultBaseFare'] = $priceValue['fd']['ADULT']['fC']['BF'];
				$flightArray[$fp]['priceList'][$price]['childBaseFare'] = @$priceValue['fd']['CHILD']['fC']['BF'];
				$flightArray[$fp]['priceList'][$price]['infantBaseFare'] = @$priceValue['fd']['INFANT']['fC']['BF'];

				$flightArray[$fp]['priceList'][$price]['adultTotalFare'] = $priceValue['fd']['ADULT']['fC']['TF'];
				$flightArray[$fp]['priceList'][$price]['childTotalFare'] = @$priceValue['fd']['CHILD']['fC']['TF'];
				$flightArray[$fp]['priceList'][$price]['infantTotalFare'] = @$priceValue['fd']['INFANT']['fC']['TF'];

				$flightArray[$fp]['priceList'][$price]['adultTaxFare'] = $priceValue['fd']['ADULT']['fC']['TAF'];
				$flightArray[$fp]['priceList'][$price]['childTaxFare'] = @$priceValue['fd']['CHILD']['fC']['TAF'];
				$flightArray[$fp]['priceList'][$price]['infantTaxFare'] = @$priceValue['fd']['INFANT']['fC']['TAF'];

				$flightArray[$fp]['priceList'][$price]['adultAGST'] = $priceValue['fd']['ADULT']['afC']['TAF']['AGST'];
				$flightArray[$fp]['priceList'][$price]['adultMF'] = $priceValue['fd']['ADULT']['afC']['TAF']['MF'];
				$flightArray[$fp]['priceList'][$price]['adultMU'] = $priceValue['fd']['ADULT']['afC']['TAF']['MU'];
				$flightArray[$fp]['priceList'][$price]['adultMFT'] = $priceValue['fd']['ADULT']['afC']['TAF']['MFT'];
				$flightArray[$fp]['priceList'][$price]['adultYQ'] = @$priceValue['fd']['ADULT']['afC']['TAF']['YQ'];
				$flightArray[$fp]['priceList'][$price]['adultOT'] = $priceValue['fd']['ADULT']['afC']['TAF']['OT'];

				$flightArray[$fp]['priceList'][$price]['childAGST'] = @$priceValue['fd']['CHILD']['afC']['TAF']['AGST'];
				$flightArray[$fp]['priceList'][$price]['childMF'] = @$priceValue['fd']['CHILD']['afC']['TAF']['MF'];
				$flightArray[$fp]['priceList'][$price]['childMU'] = @$priceValue['fd']['CHILD']['afC']['TAF']['MU'];
				$flightArray[$fp]['priceList'][$price]['childMFT'] = @$priceValue['fd']['CHILD']['afC']['TAF']['MFT'];
				$flightArray[$fp]['priceList'][$price]['childYQ'] = @$priceValue['fd']['CHILD']['afC']['TAF']['YQ'];
				$flightArray[$fp]['priceList'][$price]['childOT'] = @$priceValue['fd']['CHILD']['afC']['TAF']['OT'];

				$flightArray[$fp]['priceList'][$price]['infantAGST'] = @$priceValue['fd']['INFANT']['afC']['TAF']['AGST'];
				$flightArray[$fp]['priceList'][$price]['infantMF'] = @$priceValue['fd']['INFANT']['afC']['TAF']['MF'];
				$flightArray[$fp]['priceList'][$price]['infantMU'] = @$priceValue['fd']['INFANT']['afC']['TAF']['MU'];
				$flightArray[$fp]['priceList'][$price]['infantMFT'] = @$priceValue['fd']['INFANT']['afC']['TAF']['MFT'];
				$flightArray[$fp]['priceList'][$price]['infantYQ'] = @$priceValue['fd']['INFANT']['afC']['TAF']['YQ'];
				$flightArray[$fp]['priceList'][$price]['infantOT'] = @$priceValue['fd']['INFANT']['afC']['TAF']['OT'];

				$flightArray[$fp]['priceList'][$price]['adultBaggaege'] = @$priceValue['fd']['ADULT']['bI']['iB'];
				$flightArray[$fp]['priceList'][$price]['adultCabinBaggaege'] = @$priceValue['fd']['ADULT']['bI']['cB'];

				$flightArray[$fp]['priceList'][$price]['childBaggage'] = @$priceValue['fd']['CHILD']['bI']['iB'];
				$flightArray[$fp]['priceList'][$price]['childCabinBaggage'] = @$priceValue['fd']['CHILD']['bI']['cB'];

				$flightArray[$fp]['priceList'][$price]['infantBaggage'] = @$priceValue['fd']['INFANT']['bI']['iB'];
				$flightArray[$fp]['priceList'][$price]['infantCabinBaggage'] = @$priceValue['fd']['INFANT']['bI']['cB'];

				$flightArray[$fp]['priceList'][$price]['adultRefund'] = @$priceValue['fd']['ADULT']['rT'];
				$flightArray[$fp]['priceList'][$price]['childRefund'] = @$priceValue['fd']['CHILD']['rT'];
				$flightArray[$fp]['priceList'][$price]['infantRefund'] = @$priceValue['fd']['INFANT']['rT'];

				$flightArray[$fp]['priceList'][$price]['adultCabinClass'] = @$priceValue['fd']['ADULT']['cc'];
				$flightArray[$fp]['priceList'][$price]['childCabinClass'] = @$priceValue['fd']['CHILD']['cc'];
				$flightArray[$fp]['priceList'][$price]['infantCabinClass'] = @$priceValue['fd']['INFANT']['cc'];

				$flightArray[$fp]['priceList'][$price]['adultClassOfBooking'] = @$priceValue['fd']['ADULT']['cB'];
				$flightArray[$fp]['priceList'][$price]['childClassOfBooking'] = @$priceValue['fd']['CHILD']['cB'];
				$flightArray[$fp]['priceList'][$price]['infantClassOfBooking'] = @$priceValue['fd']['INFANT']['cB'];


				$flightArray[$fp]['priceList'][$price]['fareIdentifier'] = @$priceValue['fareIdentifier'];
				$flightArray[$fp]['priceList'][$price]['flightId'] = @$priceValue['id'];

				

				$price++;

			}
			
			
			$fp++;

		}

		//echo "<pre>"; print_r($flightArray); die;

		$data['tripInfoResult'] = $flightArray;

		$this->load->view('flights_selection',$data);

	} 

	public function multireturn(){

	//	echo "<pre>"; print_r($_POST); die;

		$flightId= $this->input->post('flightId');
		$flightIds= $this->input->post('flightIds');
		$flightId3= $this->input->post('flightId3');
		$flightId4= $this->input->post('flightId4');
		$flightId5 = $this->input->post('flightId5');
		$flightId6 = $this->input->post('flightId6');

		if((!empty($flightId)) && (!empty($flightIds)) && (!empty($flightId3)) && (!empty($flightId4)) && (!empty($flightId5)) && (!empty($flightId6))){

			$priceId= array($flightId,$flightIds,$flightId3,$flightId4,$flightId5,$flightId6);


		}else if((!empty($flightId)) && (!empty($flightIds)) && (!empty($flightId3)) && (!empty($flightId4)) && (!empty($flightId5))){

			$priceId= array($flightId,$flightIds,$flightId3,$flightId4,$flightId5);


		}else if((!empty($flightId)) && (!empty($flightIds)) && (!empty($flightId3)) && (!empty($flightId4))){

			$priceId= array($flightId,$flightIds,$flightId3,$flightId4);


		}else if((!empty($flightId)) && (!empty($flightIds)) && (!empty($flightId3))){

			$priceId= array($flightId,$flightIds,$flightId3);


		}else if((!empty($flightId)) && (!empty($flightIds))){

			$priceId= array($flightId,$flightIds);

		}



		$priceIds = json_encode(array("priceIds"=> $priceId));

		//echo "<pre>"; print_r($priceIds); die;
		
		$url = 'https://apitest.tripjack.com/fms/v1/review';
		
		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $priceIds);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));

		$result = curl_exec($ch);
		$response_array = json_decode($result, true);
		//echo '<pre>'; print_r($response_array['tripInfos']); die;
		$data=$this->comman_data();
		curl_close($ch);


		// $flightSingleData = $response_array['tripInfos'][0];
		// $flightDoubleData = $response_array['tripInfos'][1];

	//	echo "<pre>"; print_r($flightSingleData); die;

		$adultPax = $_SESSION['adult_user'];
		$childPax = $_SESSION['child_user'];
		$infantPax = $_SESSION['infant_user'];

		// $flightArray = array();
		// $fp = 0;


	

		$data['completeResult'] = $response_array['tripInfos'][0];
		$data['completeResultReturn'] = $response_array['tripInfos'][1];
		
		$countMultiways =count($response_array['tripInfos']);

		if($countMultiways == 6) 
		{ 
			$data['completeResultsixth'] = $response_array['tripInfos'][5];	
			$data['completeResultfifth'] = $response_array['tripInfos'][4];		
			$data['completeResultforth'] = $response_array['tripInfos'][3];
			$data['completeResultthird'] = $response_array['tripInfos'][2];
		}
		
		if($countMultiways == 5) 
		{ 
			$data['completeResultfifth'] = $response_array['tripInfos'][4];		
			$data['completeResultforth'] = $response_array['tripInfos'][3];
			$data['completeResultthird'] = $response_array['tripInfos'][2];
		}
			
		if($countMultiways == 4) 
		{		
			$data['completeResultforth'] = $response_array['tripInfos'][3];
			$data['completeResultthird'] = $response_array['tripInfos'][2];
		}	
		
		if($countMultiways == 3) 
		{
			$data['completeResultthird'] = $response_array['tripInfos'][2];
		}
			
		$this->load->view('includes/flight_multi_sticky_selection',$data);

		// foreach ($flightSingleData as $key => $flightSingleValue) {
			
		// 	$flightSegmentList = $flightSingleValue['sI']; 
		// 	$flightPricetList = $flightSingleValue['totalPriceList']; 

		// 	$flightArray[$fp]['flightCode'] = $flightSegmentList[0]['fD']['aI']['code'];
		// 	$flightArray[$fp]['flightName'] = $flightSegmentList[0]['fD']['aI']['name'];
		// 	$flightArray[$fp]['flightNumber'] = $flightSegmentList[0]['fD']['fN'];
		// 	$flightArray[$fp]['noofStops'] = $flightSegmentList[0]['stops'];
		// 	$flightArray[$fp]['duration'] = $flightSegmentList[0]['duration'];

		// 	$flightArray[$fp]['departureAirportCode'] = $flightSegmentList[0]['da']['code'];
		// 	$flightArray[$fp]['departureAirportName'] = $flightSegmentList[0]['da']['name'];
		// 	$flightArray[$fp]['departureCity'] = $flightSegmentList[0]['da']['cityCode'];
		// 	$flightArray[$fp]['departureTerminal'] = @$flightSegmentList[0]['da']['terminal'];
		// 	$flightArray[$fp]['departureCountry'] = $flightSegmentList[0]['da']['country'];
		// 	$flightArray[$fp]['departureCountryCode'] = $flightSegmentList[0]['da']['countryCode'];

		// 	$flightArray[$fp]['arrivalAirportCode'] = $flightSegmentList[0]['aa']['code'];
		// 	$flightArray[$fp]['arrivalAirportName'] = $flightSegmentList[0]['aa']['name'];
		// 	$flightArray[$fp]['arrivalCity'] = $flightSegmentList[0]['aa']['cityCode'];
		// 	$flightArray[$fp]['arrivalTerminal'] = @$flightSegmentList[0]['aa']['terminal'];
		// 	$flightArray[$fp]['arrivalCountry'] = $flightSegmentList[0]['aa']['country'];
		// 	$flightArray[$fp]['arrivalCountryCode'] = $flightSegmentList[0]['aa']['countryCode'];

		// 	$flightArray[$fp]['departureTime'] = $flightSegmentList[0]['dt'];
		// 	$flightArray[$fp]['arrivalTime'] = $flightSegmentList[0]['at'];

		// 	//	$flightArray[$fp]['arrivalTime'] = $flightPricetList[0][0]['at'];

		// 	$price = 0;

		// 	foreach ($flightPricetList as $key => $priceValue) {

		// 		$totalAdultAmount =  $priceValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
		// 		$totalChildAmount =  @$priceValue['fd']['CHILD']['fC']['TF'] * $childPax;
		// 		$totalInfantAmount =  @$priceValue['fd']['INFANT']['fC']['TF'] * $infantPax;

		// 		$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

		// 		$flightArray[$fp]['priceList'][$price]['totalFare']  = $totalFare;


		// 		$flightArray[$fp]['priceList'][$price]['adultBaseFare'] = $priceValue['fd']['ADULT']['fC']['BF'];
		// 		$flightArray[$fp]['priceList'][$price]['childBaseFare'] = @$priceValue['fd']['CHILD']['fC']['BF'];
		// 		$flightArray[$fp]['priceList'][$price]['infantBaseFare'] = @$priceValue['fd']['INFANT']['fC']['BF'];

		// 		$flightArray[$fp]['priceList'][$price]['adultTotalFare'] = $priceValue['fd']['ADULT']['fC']['TF'];
		// 		$flightArray[$fp]['priceList'][$price]['childTotalFare'] = @$priceValue['fd']['CHILD']['fC']['TF'];
		// 		$flightArray[$fp]['priceList'][$price]['infantTotalFare'] = @$priceValue['fd']['INFANT']['fC']['TF'];

		// 		$flightArray[$fp]['priceList'][$price]['adultTaxFare'] = $priceValue['fd']['ADULT']['fC']['TAF'];
		// 		$flightArray[$fp]['priceList'][$price]['childTaxFare'] = @$priceValue['fd']['CHILD']['fC']['TAF'];
		// 		$flightArray[$fp]['priceList'][$price]['infantTaxFare'] = @$priceValue['fd']['INFANT']['fC']['TAF'];

		// 		$flightArray[$fp]['priceList'][$price]['adultAGST'] = $priceValue['fd']['ADULT']['afC']['TAF']['AGST'];
		// 		$flightArray[$fp]['priceList'][$price]['adultMF'] = $priceValue['fd']['ADULT']['afC']['TAF']['MF'];
		// 		$flightArray[$fp]['priceList'][$price]['adultMU'] = $priceValue['fd']['ADULT']['afC']['TAF']['MU'];
		// 		$flightArray[$fp]['priceList'][$price]['adultMFT'] = $priceValue['fd']['ADULT']['afC']['TAF']['MFT'];
		// 		$flightArray[$fp]['priceList'][$price]['adultYQ'] = @$priceValue['fd']['ADULT']['afC']['TAF']['YQ'];
		// 		$flightArray[$fp]['priceList'][$price]['adultOT'] = $priceValue['fd']['ADULT']['afC']['TAF']['OT'];

		// 		$flightArray[$fp]['priceList'][$price]['childAGST'] = @$priceValue['fd']['CHILD']['afC']['TAF']['AGST'];
		// 		$flightArray[$fp]['priceList'][$price]['childMF'] = @$priceValue['fd']['CHILD']['afC']['TAF']['MF'];
		// 		$flightArray[$fp]['priceList'][$price]['childMU'] = @$priceValue['fd']['CHILD']['afC']['TAF']['MU'];
		// 		$flightArray[$fp]['priceList'][$price]['childMFT'] = @$priceValue['fd']['CHILD']['afC']['TAF']['MFT'];
		// 		$flightArray[$fp]['priceList'][$price]['childYQ'] = @$priceValue['fd']['CHILD']['afC']['TAF']['YQ'];
		// 		$flightArray[$fp]['priceList'][$price]['childOT'] = @$priceValue['fd']['CHILD']['afC']['TAF']['OT'];

		// 		$flightArray[$fp]['priceList'][$price]['infantAGST'] = @$priceValue['fd']['INFANT']['afC']['TAF']['AGST'];
		// 		$flightArray[$fp]['priceList'][$price]['infantMF'] = @$priceValue['fd']['INFANT']['afC']['TAF']['MF'];
		// 		$flightArray[$fp]['priceList'][$price]['infantMU'] = @$priceValue['fd']['INFANT']['afC']['TAF']['MU'];
		// 		$flightArray[$fp]['priceList'][$price]['infantMFT'] = @$priceValue['fd']['INFANT']['afC']['TAF']['MFT'];
		// 		$flightArray[$fp]['priceList'][$price]['infantYQ'] = @$priceValue['fd']['INFANT']['afC']['TAF']['YQ'];
		// 		$flightArray[$fp]['priceList'][$price]['infantOT'] = @$priceValue['fd']['INFANT']['afC']['TAF']['OT'];

		// 		$flightArray[$fp]['priceList'][$price]['adultBaggaege'] = @$priceValue['fd']['ADULT']['bI']['iB'];
		// 		$flightArray[$fp]['priceList'][$price]['adultCabinBaggaege'] = @$priceValue['fd']['ADULT']['bI']['cB'];

		// 		$flightArray[$fp]['priceList'][$price]['childBaggage'] = @$priceValue['fd']['CHILD']['bI']['iB'];
		// 		$flightArray[$fp]['priceList'][$price]['childCabinBaggage'] = @$priceValue['fd']['CHILD']['bI']['cB'];

		// 		$flightArray[$fp]['priceList'][$price]['infantBaggage'] = @$priceValue['fd']['INFANT']['bI']['iB'];
		// 		$flightArray[$fp]['priceList'][$price]['infantCabinBaggage'] = @$priceValue['fd']['INFANT']['bI']['cB'];

		// 		$flightArray[$fp]['priceList'][$price]['adultRefund'] = @$priceValue['fd']['ADULT']['rT'];
		// 		$flightArray[$fp]['priceList'][$price]['childRefund'] = @$priceValue['fd']['CHILD']['rT'];
		// 		$flightArray[$fp]['priceList'][$price]['infantRefund'] = @$priceValue['fd']['INFANT']['rT'];

		// 		$flightArray[$fp]['priceList'][$price]['adultCabinClass'] = @$priceValue['fd']['ADULT']['cc'];
		// 		$flightArray[$fp]['priceList'][$price]['childCabinClass'] = @$priceValue['fd']['CHILD']['cc'];
		// 		$flightArray[$fp]['priceList'][$price]['infantCabinClass'] = @$priceValue['fd']['INFANT']['cc'];

		// 		$flightArray[$fp]['priceList'][$price]['adultClassOfBooking'] = @$priceValue['fd']['ADULT']['cB'];
		// 		$flightArray[$fp]['priceList'][$price]['childClassOfBooking'] = @$priceValue['fd']['CHILD']['cB'];
		// 		$flightArray[$fp]['priceList'][$price]['infantClassOfBooking'] = @$priceValue['fd']['INFANT']['cB'];


		// 		$flightArray[$fp]['priceList'][$price]['fareIdentifier'] = @$priceValue['fareIdentifier'];
		// 		$flightArray[$fp]['priceList'][$price]['flightId'] = @$priceValue['id'];

				

		// 		$price++;

		// 	}
			
			
		// 	$fp++;

		// }

		//foreach ($flightDoubleData as $key => $flightDoubleValue) {
			//echo "<pre>"; print_r($flightDoubleValue);
		//}
		//die;

		//echo "<pre>"; print_r($flightArray); die;

	//	$data['tripInfoResult'] = $flightArray;

		

	}

	public function detailsreturninternational(){

		$data=$this->comman_data();
		$this->load->model('Flights_page') ;
		$flightId =$this->uri->segment(3);
		$priceId= array($flightId);
	  
		$ch = $this->getFlightDetails($priceId);
		
		$result = curl_exec($ch);
		$response_array = json_decode($result, true);
		curl_close($ch);
		
		if(count(@$response_array['tripInfos']) > 0){

			$fre = 0;
			$flightReviewArr = array();

			foreach ($response_array['tripInfos'] as $key => $flightReview) {

				$segmentList = $flightReview['sI'];
				$tripPriceList =  $flightReview['totalPriceList'];
				
				$adultPax = $_SESSION['adult_user'];
				$childPax = $_SESSION['child_user'];
				$infantPax = $_SESSION['infant_user'];

				$fsi = 0; 
				$segmentListArr = array();

				foreach ($segmentList as $key => $segVal) {

					if($segVal['stops'] > 0){

						$segmentListArr[$fsi]['segmentId'] = $segVal['id'];
						$segmentListArr[$fsi]['segmentCode'] = $segVal['fD']['aI']['code'];
						$segmentListArr[$fsi]['segmentName'] = $segVal['fD']['aI']['name'];
						$segmentListArr[$fsi]['segmentNumber'] = $segVal['fD']['fN'];
						$segmentListArr[$fsi]['segmentEtNo'] = $segVal['fD']['eT'];

						$segmentListArr[$fsi]['segmentdeptAirCode'] = $segVal['da']['code'];
						$segmentListArr[$fsi]['segmentdeptAirName'] = $segVal['da']['name'];
						$segmentListArr[$fsi]['segmentdeptCityCode'] = $segVal['da']['cityCode'];
						$segmentListArr[$fsi]['segmentdeptCityName'] = $segVal['da']['city'];
						$segmentListArr[$fsi]['segmentdeptCountry'] = $segVal['da']['country'];
						$segmentListArr[$fsi]['segmentdeptCountryCode'] = $segVal['da']['countryCode'];
						$segmentListArr[$fsi]['segmentdeptTerminal'] = @$segVal['da']['terminal'];

						$segmentListArr[$fsi]['segmentArriveAirCode'] = $segVal['aa']['code'];
						$segmentListArr[$fsi]['segmentArriveAirName'] = $segVal['aa']['name'];
						$segmentListArr[$fsi]['segmentArriveCityCode'] = $segVal['aa']['cityCode'];
						$segmentListArr[$fsi]['segmentArriveCityName'] = $segVal['aa']['city'];
						$segmentListArr[$fsi]['segmentArriveCountry'] = $segVal['aa']['country'];
						$segmentListArr[$fsi]['segmentArriveCountryCode'] = $segVal['aa']['countryCode'];
						$segmentListArr[$fsi]['segmentArriveTerminal'] = @$segVal['aa']['terminal'];

						$segmentListArr[$fsi]['segmentdeptDateNTime'] = $segVal['dt'];
						$segmentListArr[$fsi]['segmentArriveDateNTime'] = $segVal['at'];

						$segmentListArr[$fsi]['segmentDuration'] = $segVal['duration'];

						$segmentListArr[$fsi]['segmentConnectingTime'] = @$segVal['cT'];

						$segmentListArr[$fsi]['segmentNo'] = $segVal['sN'];

						$segmentListArr[$fsi]['segmentisRs'] = $segVal['isRs'];

						$segmentListArr[$fsi]['segmentNextDay'] = $segVal['iand'];
						
						$segmentListArr[$fsi]['flightStop'] = $segVal['stops'];

						$frist = 0;
						foreach ($segVal['so'] as $key => $flightStopValue) {

							$segmentListArr[$fsi]['flightStopArr'][$frist]['flightStopAirCode'] = $flightStopValue['code'];
							$segmentListArr[$fsi]['flightStopArr'][$frist]['flightStopAirName'] = $flightStopValue['name'];
							$segmentListArr[$fsi]['flightStopArr'][$frist]['flightStopCityCode'] = $flightStopValue['cityCode'];
							$segmentListArr[$fsi]['flightStopArr'][$frist]['flightStopCityName'] = $flightStopValue['city'];
							$segmentListArr[$fsi]['flightStopArr'][$frist]['flightStopCountryName'] = $flightStopValue['country'];
							$segmentListArr[$fsi]['flightStopArr'][$frist]['flightStopCountryCode'] = $flightStopValue['countryCode'];
							
							$frist++;
						}
						

						
					}else{

						$segmentListArr[$fsi]['segmentId'] = $segVal['id'];
						$segmentListArr[$fsi]['segmentCode'] = $segVal['fD']['aI']['code'];
						$segmentListArr[$fsi]['segmentName'] = $segVal['fD']['aI']['name'];
						$segmentListArr[$fsi]['segmentNumber'] = $segVal['fD']['fN'];
						$segmentListArr[$fsi]['segmentEtNo'] = $segVal['fD']['eT'];

						$segmentListArr[$fsi]['segmentdeptAirCode'] = $segVal['da']['code'];
						$segmentListArr[$fsi]['segmentdeptAirName'] = $segVal['da']['name'];
						$segmentListArr[$fsi]['segmentdeptCityCode'] = $segVal['da']['cityCode'];
						$segmentListArr[$fsi]['segmentdeptCityName'] = $segVal['da']['city'];
						$segmentListArr[$fsi]['segmentdeptCountry'] = $segVal['da']['country'];
						$segmentListArr[$fsi]['segmentdeptCountryCode'] = $segVal['da']['countryCode'];
						$segmentListArr[$fsi]['segmentdeptTerminal'] = @$segVal['da']['terminal'];

						$segmentListArr[$fsi]['segmentArriveAirCode'] = $segVal['aa']['code'];
						$segmentListArr[$fsi]['segmentArriveAirName'] = $segVal['aa']['name'];
						$segmentListArr[$fsi]['segmentArriveCityCode'] = $segVal['aa']['cityCode'];
						$segmentListArr[$fsi]['segmentArriveCityName'] = $segVal['aa']['city'];
						$segmentListArr[$fsi]['segmentArriveCountry'] = $segVal['aa']['country'];
						$segmentListArr[$fsi]['segmentArriveCountryCode'] = $segVal['aa']['countryCode'];
						$segmentListArr[$fsi]['segmentArriveTerminal'] = @$segVal['aa']['terminal'];

						$segmentListArr[$fsi]['segmentdeptDateNTime'] = $segVal['dt'];
						$segmentListArr[$fsi]['segmentArriveDateNTime'] = $segVal['at'];

						$segmentListArr[$fsi]['segmentDuration'] = $segVal['duration'];

						$segmentListArr[$fsi]['segmentConnectingTime'] = @$segVal['cT'];

						$segmentListArr[$fsi]['segmentNo'] = $segVal['sN'];

						$segmentListArr[$fsi]['segmentisRs'] = $segVal['isRs'];

						$segmentListArr[$fsi]['segmentNextDay'] = $segVal['iand'];

						if(!empty($segVal['ssrInfo'])){
							
							if(!empty($segVal['ssrInfo']['BAGGAGE'])){

								$segmentListArr[$fsi]['baggageInfo'] = $segVal['ssrInfo']['BAGGAGE'];

							}
							if(!empty($segVal['ssrInfo']['MEAL'])){

								$segmentListArr[$fsi]['mealInfo']  = $segVal['ssrInfo']['MEAL'];

							}
							
						}	

					}	

					$fsi++; 
				
				}
			//	die;
				error_reporting(0);
				$price=0;
				$priceList = array();

				foreach ($tripPriceList as $key => $priceVal) {

				//	echo "<pre>"; print_r($priceVal);

					$priceList[$price]['adultBaseFare'] = @$priceVal['fd']['ADULT']['fC']['BF'];
					$priceList[$price]['adultNetFare'] = $priceVal['fd']['ADULT']['fC']['NF'];
					$priceList[$price]['adultTotalFare'] = $priceVal['fd']['ADULT']['fC']['TF'];
					$priceList[$price]['adultTotalTaxFare'] = $priceVal['fd']['ADULT']['fC']['TAF'];
					$priceList[$price]['adultAGST'] = @$priceVal['fd']['ADULT']['afC']['TAF']['AGST'];
					$priceList[$price]['adultMF'] = @$priceVal['fd']['ADULT']['afC']['TAF']['MF'];
					$priceList[$price]['adultMFT'] = @$priceVal['fd']['ADULT']['afC']['TAF']['MFT'];
					$priceList[$price]['adultOT'] = @$priceVal['fd']['ADULT']['afC']['TAF']['OT'];
					$priceList[$price]['adultYQ'] = @$priceVal['fd']['ADULT']['afC']['TAF']['YQ'];

					$priceList[$price]['adultSeatRemaining'] = $priceVal['fd']['ADULT']['sR'];
					$priceList[$price]['adultBaggageInfo'] = $priceVal['fd']['ADULT']['bI']['iB'];
					$priceList[$price]['adultBaggageCabin'] = $priceVal['fd']['ADULT']['bI']['cB'];

					$priceList[$price]['adultRefundableType'] = $priceVal['fd']['ADULT']['rT'];
					$priceList[$price]['adultCabinClassFare'] = $priceVal['fd']['ADULT']['cc'];

					$priceList[$price]['adultClassOfBooking'] = $priceVal['fd']['ADULT']['cB'];
					$priceList[$price]['adultFareBasis'] = $priceVal['fd']['ADULT']['fB'];

					if(!empty($priceVal['fd']['CHILD'])){

						$priceList[$price]['childBaseFare'] = @$priceVal['fd']['CHILD']['fC']['BF'];
						$priceList[$price]['childNetFare'] = $priceVal['fd']['CHILD']['fC']['NF'];
						$priceList[$price]['childTotalFare'] = $priceVal['fd']['CHILD']['fC']['TF'];
						$priceList[$price]['childTotalTaxFare'] = $priceVal['fd']['CHILD']['fC']['TAF'];
						$priceList[$price]['childAGST'] = @$priceVal['fd']['CHILD']['afC']['TAF']['AGST'];
						$priceList[$price]['childMF'] = @$priceVal['fd']['CHILD']['afC']['TAF']['MF'];
						$priceList[$price]['childMFT'] = @$priceVal['fd']['CHILD']['afC']['TAF']['MFT'];
						$priceList[$price]['childOT'] = @$priceVal['fd']['CHILD']['afC']['TAF']['OT'];
						$priceList[$price]['childYQ'] = @$priceVal['fd']['CHILD']['afC']['TAF']['YQ'];

						$priceList[$price]['childSeatRemaining'] = $priceVal['fd']['CHILD']['sR'];
						$priceList[$price]['childBaggageInfo'] = $priceVal['fd']['CHILD']['bI']['iB'];
						$priceList[$price]['childBaggageCabin'] = $priceVal['fd']['CHILD']['bI']['cB'];

						$priceList[$price]['childRefundableType'] = $priceVal['fd']['CHILD']['rT'];
						$priceList[$price]['childCabinClassFare'] = $priceVal['fd']['CHILD']['cc'];

						$priceList[$price]['childClassOfBooking'] = $priceVal['fd']['CHILD']['cB'];
						$priceList[$price]['childFareBasis'] = $priceVal['fd']['CHILD']['fB'];

					}

					if(!empty($priceVal['fd']['INFANT'])){

						$priceList[$price]['infantBaseFare'] = @$priceVal['fd']['INFANT']['fC']['BF'];
						$priceList[$price]['infantNetFare'] = $priceVal['fd']['INFANT']['fC']['NF'];
						$priceList[$price]['infantTotalFare'] = $priceVal['fd']['INFANT']['fC']['TF'];
						$priceList[$price]['infantTotalTaxFare'] = $priceVal['fd']['INFANT']['fC']['TAF'];
						$priceList[$price]['infantAGST'] = @$priceVal['fd']['INFANT']['afC']['TAF']['AGST'];
						$priceList[$price]['infantMF'] = @$priceVal['fd']['INFANT']['afC']['TAF']['MF'];
						$priceList[$price]['infantMFT'] = @$priceVal['fd']['INFANT']['afC']['TAF']['MFT'];
						$priceList[$price]['infantOT'] = @$priceVal['fd']['INFANT']['afC']['TAF']['OT'];
						$priceList[$price]['infantYQ'] = @$priceVal['fd']['INFANT']['afC']['TAF']['YQ'];

						$priceList[$price]['infanteatRemaining'] = $priceVal['fd']['INFANT']['sR'];
						$priceList[$price]['infantBaggageInfo'] = $priceVal['fd']['INFANT']['bI']['iB'];
						$priceList[$price]['infantBaggageCabin'] = $priceVal['fd']['INFANT']['bI']['cB'];

						$priceList[$price]['infantRefundableType'] = $priceVal['fd']['INFANT']['rT'];
						$priceList[$price]['infantCabinClassFare'] = $priceVal['fd']['INFANT']['cc'];

						$priceList[$price]['infantClassOfBooking'] = $priceVal['fd']['INFANT']['cB'];
						$priceList[$price]['infantFareBasis'] = $priceVal['fd']['INFANT']['fB'];

					}

					$priceList[$price]['totalFare'] = $priceVal['fd']['ADULT']['fC']['TF'] * $adultPax + @$priceVal['fd']['CHILD']['fC']['TF'] * @$childPax + @$priceVal['fd']['INFANT']['fC']['TF'] * @$infantPax;

					$priceList[$price]['fareIdentifier'] = $priceVal['fareIdentifier'];

					$priceList[$price]['priceId'] = $priceVal['id'];


					$price++;

				}

				

				$flightReviewArr[$fre]['segmentLists']  = $segmentListArr;
				$flightReviewArr[$fre]['priceList']  = $priceList;

				
				$fre++; 
			}


			// die;
		}else{

			echo "no key passed";

		}

		//die;

		// echo "<pre>"; print_r($flightReviewArr); die;

		$bookingId = $response_array['bookingId'];

		//echo $bookingId; die;

		$ch1 = $this->getSeatDetails($bookingId);

		$result = curl_exec($ch1);
		$response_array1 = json_decode($result, true);
		curl_close($ch1);

		//echo "<pre>"; print_r($response_array1); die;

		// echo "<pre>"; print_r($response_array1['tripSeatMap']['tripSeat']); die;

		$tripSeatRowcolumn = [];
		if($response_array1['status']['success'] == 1){
			
			$tripData = $response_array1['tripSeatMap']['tripSeat'];

			
			$tripSeatAmount = [];
			$tripSeatAmount1 = [];
			
			foreach ($tripData as $key => $tripAmount) {
				$seat=0;
				foreach($tripAmount['sInfo'] as $key1 => $tripAmountVal){

					$tripSeatAmount[$seat]['amount'] = $tripAmountVal['amount'];
					$tripSeatAmount1[$seat] = $tripAmountVal['amount'];
					$seat++;
				}
				
			}
			
			$tripSeatUniqueAmount =  array_map("unserialize", array_unique(array_map("serialize", $tripSeatAmount)));

			$columns = array_column($tripSeatUniqueAmount, 'amount');
			array_multisort($columns, SORT_ASC, $tripSeatUniqueAmount);

			foreach($tripData as $tripKey=>$tripRow) {
				//echo "<pre>"; print_r($tripKey);
				foreach ($tripRow['sInfo'] as $tripRowKey => $tripRowVal) {

						$tripCurrentLen = COUNT($tripSeatRowcolumn);


						if($tripCurrentLen < $tripRowVal['seatPosition']['row']) {

							$tripSeatRowcolumn[$tripCurrentLen] = array();
							$tripCurrentLen = COUNT($tripSeatRowcolumn);
						}

						array_push($tripSeatRowcolumn[$tripCurrentLen-1], $tripRowVal);
				}
				
			}
			//die;
		//	echo "<pre>"; print_r($tripSeatRowcolumn); die;

			$data['tripSeatRowcolumn'] = $tripSeatRowcolumn;
			$data['tripSeatAmount'] = $tripSeatUniqueAmount;
		//	$data['tripSeatAmount1'] = $tripSeatUniqueAmount1;
		}
		else{

			$tripData = $response_array1['errors']['0']['message'];
			$data['tripSeatRowcolumn'] = $tripSeatRowcolumn;
		}

		/////////////////////// For Seat Selection /////////////////////////////

		$data['adultPax'] = $adultPax;
		$data['childPax'] = $childPax;
		$data['infantPax'] = $infantPax;		
		$data['flighttotalPriceInfo'] = $response_array['totalPriceInfo'];
		$data['flightCheckoutReviewList'] = $flightReviewArr;
		$data['getCountryList']=$this->Flights_page->getCountryList();
		$data['flights_checkout']=$this->Flights_page->flights_checkout();
		$data['bookingType'] = 'international';
		$data['tripConditions'] = $response_array['conditions'];
		$data['bookingId'] = $response_array['bookingId'];
		$data['seatMapInfo'] = $response_array1['tripSeatMap']['tripSeat'];

		$this->load->view('flight_checkout_international',$data);


	}


	public function details(){

		//echo "<pre>"; print_r($_POST); die;

		$data=$this->comman_data();
		$this->load->model('Flights_page') ;
		$flightId =$this->uri->segment(3);
		$priceId= array($flightId);
	  
		$ch = $this->getFlightDetails($priceId);
		
		$result = curl_exec($ch);
		$response_array = json_decode($result, true);
		curl_close($ch);

		//echo count($response_array['tripInfos']); die;
		
		// echo "<pre>"; print_r($response_array); die;

		/////////////////////// For Seat Selection /////////////////////////////

		$bookingId = $response_array['bookingId'];

		$ch1 = $this->getSeatDetails($bookingId);

		$result = curl_exec($ch1);
		$response_array1 = json_decode($result, true);
		curl_close($ch1);

		$tripSeatRowcolumn = [];
		if($response_array1['status']['success'] == 1){
			
			$tripData = $response_array1['tripSeatMap']['tripSeat'];

			
			$tripSeatAmount = [];
			$tripSeatAmount1 = [];
			
			foreach ($tripData as $key => $tripAmount) {
				$seat=0;
				foreach($tripAmount['sInfo'] as $key1 => $tripAmountVal){

					$tripSeatAmount[$seat]['amount'] = $tripAmountVal['amount'];
					$tripSeatAmount1[$seat] = $tripAmountVal['amount'];
					$seat++;

				}
				
			}
			
			$tripSeatUniqueAmount =  array_map("unserialize", array_unique(array_map("serialize", $tripSeatAmount)));
			$tripSeatUniqueAmount1 =  array_map("unserialize", array_unique(array_map("serialize", $tripSeatAmount1)));

			$columns = array_column($tripSeatUniqueAmount, 'amount');
			array_multisort($columns, SORT_ASC, $tripSeatUniqueAmount);

			foreach($tripData as $tripKey=>$tripRow) {

				foreach ($tripRow['sInfo'] as $tripRowKey => $tripRowVal) {

					$tripCurrentLen = COUNT($tripSeatRowcolumn);
					
					if($tripCurrentLen < $tripRowVal['seatPosition']['row']) {

						$tripSeatRowcolumn[$tripCurrentLen] = array();
						$tripCurrentLen = COUNT($tripSeatRowcolumn);

					}

					array_push($tripSeatRowcolumn[$tripCurrentLen-1], $tripRowVal);
				}
				
			}

			$data['tripSeatRowcolumn'] = $tripSeatRowcolumn;
			$data['tripSeatAmount'] = $tripSeatUniqueAmount;
			$data['tripSeatAmount1'] = $tripSeatUniqueAmount1;
		}
		else{

			$tripData = $response_array1['errors']['0']['message'];
			$data['tripSeatRowcolumn'] = $tripSeatRowcolumn;
		}

		/////////////////////// For Seat Selection /////////////////////////////

	

		$data['tripInfoResult'] = $response_array['tripInfos'][0];
		$data['tripInfoResultComplete'] =$response_array['tripInfos'];

		$data['SSRInfoBaggage'] = @$response_array['tripInfos'][0]['sI'][0]['ssrInfo']['BAGGAGE'];
		$data['SSRInfoMeal'] = $response_array['tripInfos'][0]['sI'][0]['ssrInfo']['MEAL'];
		$data['tripConditions'] = $response_array['conditions'];


		$data['getCountryList']=$this->Flights_page->getCountryList();
		$data['flights_checkout']=$this->Flights_page->flights_checkout();
		
		$data['bookingType'] = 'O';
		
		$data['bookingId'] = $response_array['bookingId'];

		$this->load->view('flight_checkout',$data);

	}

	public function detailsreturn(){

		$data=$this->comman_data();
		$this->load->model('Flights_page') ;
		$flightId =$this->uri->segment(3);
		$flightIds =$this->uri->segment(4);

		$priceId= array($flightId,$flightIds);
	  
		$ch = $this->getFlightDetails($priceId);
		
		$result = curl_exec($ch);
		$response_array = json_decode($result, true);
		curl_close($ch);

		// echo '<pre>'; print_r($result); die;

		$data['tripInfoResult'] = $response_array['tripInfos'][0];
		$data['tripInfoResultReturn'] = $response_array['tripInfos'][1];

		$data['SSRInfoBaggage'] = @$response_array['tripInfos'][0]['sI'][0]['ssrInfo']['BAGGAGE'];
		$data['SSRInfoMeal'] = $response_array['tripInfos'][0]['sI'][0]['ssrInfo']['MEAL'];
		$data['tripConditions'] = $response_array['conditions'];

		$data['SSRInfoBaggageReturn'] = @$response_array['tripInfos'][1]['sI'][0]['ssrInfo']['BAGGAGE'];
		$data['SSRInfoMealReturn'] = $response_array['tripInfos'][1]['sI'][0]['ssrInfo']['MEAL'];		

		$data['flights_checkout']=$this->Flights_page->flights_checkout();
		
		$data['bookingType'] = 'R';		
		
		$data['bookingId'] = $response_array['bookingId'];


		/////////////////////// For Seat Selection /////////////////////////////

		$bookingId = $response_array['bookingId'];

		$ch1 = $this->getSeatDetails($bookingId);

		$result = curl_exec($ch1);
		$response_array1 = json_decode($result, true);
		curl_close($ch1);

		//echo "<pre>"; print_r($response_array1); die;

		$tripSeatRowcolumn = [];
		if($response_array1['status']['success'] == 1){
			
			$tripData = $response_array1['tripSeatMap']['tripSeat'];
			//echo "<pre>"; print_r($tripData); die;
			
			$tripSeatAmount = [];
			$tripSeatAmount1 = [];
			
			foreach ($tripData as $key => $tripAmount) {

				//echo "<pre>"; print_r($tripAmount);
				$seat=0;
				foreach($tripAmount['sInfo'] as $key1 => $tripAmountVal){

					$tripSeatAmount[$seat]['amount'] = $tripAmountVal['amount'];
					$tripSeatAmount1[$seat] = $tripAmountVal['amount'];
					$seat++;
				}
				
			}

			//die;
			
			$tripSeatUniqueAmount =  array_map("unserialize", array_unique(array_map("serialize", $tripSeatAmount)));
			$tripSeatUniqueAmount1 =  array_map("unserialize", array_unique(array_map("serialize", $tripSeatAmount1)));

			$columns = array_column($tripSeatUniqueAmount, 'amount');
			array_multisort($columns, SORT_ASC, $tripSeatUniqueAmount);

			foreach($tripData as $tripKey=>$tripRow) {

				foreach ($tripRow['sInfo'] as $tripRowKey => $tripRowVal) {

						$tripCurrentLen = COUNT($tripSeatRowcolumn);


						if($tripCurrentLen < $tripRowVal['seatPosition']['row']) {

							$tripSeatRowcolumn[$tripCurrentLen] = array();
							$tripCurrentLen = COUNT($tripSeatRowcolumn);
						}

						array_push($tripSeatRowcolumn[$tripCurrentLen-1], $tripRowVal);
				}
				
			}

			$data['tripSeatRowcolumn'] = $tripSeatRowcolumn;
			$data['tripSeatAmount'] = $tripSeatUniqueAmount;
			$data['tripSeatAmount1'] = $tripSeatUniqueAmount1;
		}
		else{

			$tripData = $response_array1['errors']['0']['message'];
			$data['tripSeatRowcolumn'] = $tripSeatRowcolumn;
		}

		/////////////////////// For Seat Selection /////////////////////////////
		


		$this->load->view('flight_checkout',$data);

	}
	
	
	public function detailsmultiway(){

		$data=$this->comman_data();
		$this->load->model('Flights_page') ;
	 	$flightId =$this->uri->segment(3);
		//echo "<br>";
		$flightIds =$this->uri->segment(4);
		//echo "<br>";
		$thirdFlightId =$this->uri->segment(5);		
		//echo "<br>";
		$forthFlightId =$this->uri->segment(6);
		//echo "<br>";
		$fifthFlightId =$this->uri->segment(7);
		//echo "<br>";
		$sixthFlightId =$this->uri->segment(8);
		//echo "<br>";
		// echo $thirdFlightId;

		//die;

		if($thirdFlightId != '' && $forthFlightId != '' && $fifthFlightId != '' && $sixthFlightId != '' )
		{
			$priceId= array($flightId,$flightIds,$thirdFlightId,$forthFlightId,$fifthFlightId,$sixthFlightId);
		}
		elseif($thirdFlightId != '' && $forthFlightId != '' && $fifthFlightId != '')
		{
			$priceId= array($flightId,$flightIds,$thirdFlightId,$forthFlightId,$fifthFlightId);
		}	
		elseif($thirdFlightId != '' && $forthFlightId != '')
		{
			$priceId= array($flightId,$flightIds,$thirdFlightId,$forthFlightId);
		}
		elseif($thirdFlightId != '')
		{
			$priceId= array($flightId,$flightIds,$thirdFlightId);
		}	
		else 
		{	
			$priceId= array($flightId,$flightIds);
		}		
	  
		$ch = $this->getFlightDetails($priceId);
		
		$result = curl_exec($ch);
		$response_array = json_decode($result, true);
		curl_close($ch);

	//	echo '<pre>'; print_r($result); die;

		$data['tripInfoResult'] = $response_array['tripInfos'][0];
		$data['tripInfoResultReturn'] = $response_array['tripInfos'][1];
		
		$countMultiways =count($response_array['tripInfos']);

		if($countMultiways == 6) 
		{ 
			$data['tripInfoResultsixth'] = $response_array['tripInfos'][5];	
			$data['tripInfoResultfifth'] = $response_array['tripInfos'][4];		
			$data['tripInfoResultforth'] = $response_array['tripInfos'][3];
			$data['tripInfoResultthird'] = $response_array['tripInfos'][2];
		}
		
		if($countMultiways == 5) 
		{ 
			$data['tripInfoResultfifth'] = $response_array['tripInfos'][4];		
			$data['tripInfoResultforth'] = $response_array['tripInfos'][3];
			$data['tripInfoResultthird'] = $response_array['tripInfos'][2];
		}
			
		if($countMultiways == 4) 
		{		
			$data['tripInfoResultforth'] = $response_array['tripInfos'][3];
			$data['tripInfoResultthird'] = $response_array['tripInfos'][2];
		}	
		
		if($countMultiways == 3) 
		{
			$data['tripInfoResultthird'] = $response_array['tripInfos'][2];
		}
				

		$data['countMultiways']= $countMultiways;
		
		$data['flights_checkout']=$this->Flights_page->flights_checkout();
		
		$data['bookingType'] = 'M';		
		
		$data['bookingId'] = $response_array['bookingId'];

		$this->load->view('flight_checkout',$data);

	}
	
	

	public function getFlightDetails($flightId){

		$priceIds = json_encode(array("priceIds"=> $flightId));
		
		// echo "<pre>"; print_r($priceIds); 
		// die();
		
		
		$url = 'https://apitest.tripjack.com/fms/v1/review';

		
		
		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $priceIds);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));

		return $ch;

	}
	public function test(){

		$data=$this->comman_data();
	$this->load->model('Flights_page') ;
	$this->load->view('flights_test',$data);

}

	public function flight_review() 
	{
		
		// echo "<pre>"; print_r($_POST); die;

		$data=$this->comman_data();
	  		
		$this->load->model('Flights_page') ;
	
		if($this->input->post('flag')=='yes'){	

			$totalGrossAmount = $this->input->post('totalGrossAmount');
			$totalBaggageMeal = $this->input->post('totalBaggageMeal');
			$totalWithSeat = $this->input->post('totalWithSeat');
			$adultSeatNo = $this->input->post('adultSeatNo');
			$childSeatNo = $this->input->post('childSeatNo');

			$paxType = $this->input->post('paxType');
			$title = $this->input->post('title');
			$first_middle_name = $this->input->post('first_middle_name');
			$last_name = $this->input->post('last_name');			
			$dob = $this->input->post('dob');
			
			$passportnationality = $this->input->post('passport_nationality');
			$passportnumber = $this->input->post('passport_number');
			$issuedate = $this->input->post('issuedate');
			$expirydate = $this->input->post('expirydate');

			$baggage = $this->input->post('baggage');
			$meal = $this->input->post('meal');

			$departureCity = $this->input->post('departureCity');
			$arrivalCity = $this->input->post('arrivalCity');

			$baggageReturn = $this->input->post('baggage_return');
			$mealReturn = $this->input->post('meal_return');			

			$returndepartureCity = $this->input->post('returndepartureCity');
			$returnarrivalCity = $this->input->post('returnarrivalCity');

			$baggageThird = $this->input->post('baggage_third');
			$mealThird = $this->input->post('meal_third');			

			$thirddepartureCity = $this->input->post('thirddepartureCity');
			$thirdarrivalCity = $this->input->post('thirdarrivalCity');

			$baggageForth = $this->input->post('baggage_forth');
			$mealForth = $this->input->post('meal_forth');			

			$forthdepartureCity = $this->input->post('forthdepartureCity');
			$fortharrivalCity = $this->input->post('fortharrivalCity');

			$baggageFifth = $this->input->post('baggage_fifth');
			$mealFifth = $this->input->post('meal_fifth');			

			$fifthdepartureCity = $this->input->post('fifthdepartureCity');
			$fiftharrivalCity = $this->input->post('fiftharrivalCity');

			$baggageSixth = $this->input->post('baggage_sixth');
			$mealSixth = $this->input->post('meal_sixth');			

			$sixthdepartureCity = $this->input->post('sixthdepartureCity');
			$sixtharrivalCity = $this->input->post('sixtharrivalCity');
			
			$flightType = $this->input->post('flightType');
			$flightId   = $this->input->post('flightId');
			
			
			if(!empty($_POST['flightIdReturn']))
			{
				$flightIdReturn = $this->input->post('flightIdReturn'); 
			//	echo "<br>";
				
			}
			
			if(!empty($_POST['flightIdmultiway_First']))
			{
				$flightIdmultiway_First = $this->input->post('flightIdmultiway_First');
			//	echo "<br>";
			} else {
				$flightIdmultiway_First = '';
			}
			
			if(!empty($_POST['flightIdmultiway_second']))
			{
				 $flightIdmultiway_second = $this->input->post('flightIdmultiway_second');
			//	echo "<br>";
			} else {
				$flightIdmultiway_second = '';
			}
			
			if(!empty($_POST['flightIdmultiway_third']))
			{
				$flightIdmultiway_third = $this->input->post('flightIdmultiway_third');
			//	echo "<br>";
			} else {
				$flightIdmultiway_third = '';
			}

			if(!empty($_POST['flightIdmultiway_forth']))
			{
				$flightIdmultiway_forth = $this->input->post('flightIdmultiway_forth');
			//	echo "<br>";
			} else {
				$flightIdmultiway_forth = '';
			}

			$email = $this->input->post('email');
			$countryCode = $this->input->post('countryCode');
			$mobile = $this->input->post('mobile');			
			 
			$bookingId = $this->input->post('bookingId');

			$this->session->set_userdata('users_email',$email);
			$this->session->set_userdata('users_countryCode',$countryCode);
			$this->session->set_userdata('users_mobile',$mobile);
			$this->session->set_userdata('bookingId',$bookingId);

			$gstNo = $this->input->post('gst_registration_num');
			$gstCompany = $this->input->post('gst_registration_company');
			$gstEmail = $this->input->post('gst_email');
			$gstPhoneNo = $this->input->post('gst_phoneno');
			$gstAddress = $this->input->post('gst_address');
				
			
			$user_id=$this->Flights_page->add_customers($email,$mobile);
			$this->session->set_userdata('user_id',$user_id);	
			
			//	echo "<pre>"; print_r($_POST); die;
			
			for($i=0; $i<count($paxType); $i++){
				
				$data = array();
				$data['user_id'] = $user_id;				
				$data['booking_id'] = $bookingId;
				$data['paxType'] = $paxType[$i];
				$data['title'] = $title[$i];
				$data['firstMiddlename'] = $first_middle_name[$i];
				$data['lastName'] = $last_name[$i];


				//$data['dob'] = $dob[$i];


				if(!empty($passportnumber[$i])){
					
					$data['passport_nationality'] = @$passportnationality[$i];
					$data['passport_number'] = @$passportnumber[$i];
					$data['issuedate'] = @$issuedate[$i];
					$data['expirydate'] = @$expirydate[$i];
				
				} 

				if(!empty($baggage[$i])){

					$data['baggage'] = @$baggage[$i];

				}else{

					$data['baggage'] = '';

				}

				if(!empty($meal[$i])){

					$data['meals'] = @$meal[$i];

				}else{

					$data['meals'] = '';

				}

				if(!empty($departureCity[$i])){

					$data['departureCity'] = $departureCity[$i];
	
				}else{

					$data['departureCity'] = '';

				}
				
				
				if(!empty($returnarrivalCity[$i])){
	
					$data['arrivalCity'] = $arrivalCity[$i];
				}else{

					$data['arrivalCity'] = '';

				}

				//////////////////////////////////////////////////////////////////////////////////////

				if(!empty($baggageReturn[$i])){

					$data['baggage_return'] = @$baggageReturn[$i];

				}else{

					$data['baggage_return'] = '';

				}

				if(!empty($mealReturn[$i])){

					$data['meals_return'] = @$mealReturn[$i];

				}else{

					$data['meals_return'] = '';

				}			


				if(!empty($returndepartureCity[$i])){

					$data['returndepartureCity'] = @$returndepartureCity[$i];
	
				}else{

					$data['returndepartureCity'] = '';

				}
				
				
				if(!empty($returnarrivalCity[$i])){
	
					$data['returnarrivalCity'] = @$returnarrivalCity[$i];
				}else{

					$data['returnarrivalCity'] = '';

				}

				//////////////////////////////////////////////////////////////////////////////////////

				if(!empty($baggageThird[$i])){

					$data['baggage_third'] = @$baggageThird[$i];

				}else{

					$data['baggage_third'] = '';

				}

				if(!empty($mealThird[$i])){

					$data['meal_third'] = @$mealThird[$i];

				}else{

					$data['meal_third'] = '';

				}

				if(!empty($thirddepartureCity[$i])){

					$data['thirddepartureCity'] = @$thirddepartureCity[$i];
	
				}else{

					$data['thirddepartureCity'] = '';

				}
				
				
				if(!empty($thirdarrivalCity[$i])){
	
					$data['thirdarrivalCity'] = @$thirdarrivalCity[$i];
				}else{

					$data['thirdarrivalCity'] = '';

				}

				//////////////////////////////////////////////////////////////////////////////////////

				if(!empty($baggageForth[$i])){

					$data['baggage_forth'] = @$baggageForth[$i];

				}else{

					$data['baggage_forth'] = '';

				}

				if(!empty($mealForth[$i])){

					$data['meal_forth'] = @$mealForth[$i];

				}else{

					$data['meal_forth'] = '';

				}

				if(!empty($forthdepartureCity[$i])){

					$data['forthdepartureCity'] = @$forthdepartureCity[$i];
	
				}else{

					$data['forthdepartureCity'] = '';

				}
				
				
				if(!empty($fortharrivalCity[$i])){
	
					$data['fortharrivalCity'] = @$fortharrivalCity[$i];
				}else{

					$data['fortharrivalCity'] = '';

				}

				//////////////////////////////////////////////////////////////////////////////////////

				if(!empty($baggageFifth[$i])){

					$data['baggage_fifth'] = @$baggageFifth[$i];

				}else{

					$data['baggage_fifth'] = '';

				}

				if(!empty($mealFifth[$i])){

					$data['meal_fifth'] = @$mealFifth[$i];

				}else{

					$data['meal_fifth'] = '';

				}

				if(!empty($fifthdepartureCity[$i])){

					$data['fifthdepartureCity'] = @$fifthdepartureCity[$i];
	
				}else{

					$data['fifthdepartureCity'] = '';

				}
				
				
				if(!empty($fiftharrivalCity[$i])){
	
					$data['fiftharrivalCity'] = @$fiftharrivalCity[$i];
				}else{

					$data['fiftharrivalCity'] = '';

				}

				//////////////////////////////////////////////////////////////////////////////////////

				if(!empty($baggageSixth[$i])){

					$data['baggage_sixth'] = @$baggageSixth[$i];

				}else{

					$data['baggage_sixth'] = '';

				}

				if(!empty($mealSixth[$i])){

					$data['meal_sixth'] = @$mealSixth[$i];

				}else{

					$data['meal_sixth'] = '';

				}

				if(!empty($sixthdepartureCity[$i])){

					$data['sixthdepartureCity'] = @$sixthdepartureCity[$i];
	
				}else{

					$data['sixthdepartureCity'] = '';

				}				
				
				if(!empty($sixtharrivalCity[$i])){
	
					$data['sixtharrivalCity'] = @$sixtharrivalCity[$i];
				}else{

					$data['sixtharrivalCity'] = '';

				}

				//////////////////////////////////////////////////////////////////////////////////////

	
				$data['email'] = @$email;
				$data['countryCode'] = $countryCode;
				$data['phone'] = $mobile;

				$data['gst_registration_no'] = @$gstNo;
				$data['gst_company_name'] = $gstCompany;
				$data['gst_registered_email'] = $gstEmail;
				$data['gst_registered_phone_no'] = $gstPhoneNo;
				$data['gst_registered_address'] = $gstAddress;
				
				if(empty($dob[$i])) {

					$data['dob'] =  '0000-00-00';	

				} 
				else {

					$data['dob'] = 	$dob[$i];		

				} 

				$this->Flights_page->flightpessangerdetails_add($data);
			
				//echo "<pre>"; print_r($data); die;
					
			} 

			// echo "done";
			// die;
						
			if($flightType == 'O')
			{
				$priceId= array($flightId);
				$ch = $this->getFlightDetails($priceId);
				$result = curl_exec($ch);
				$response_array = json_decode($result, true);
				curl_close($ch);

				$segmentList = $response_array['tripInfos'][0];
				
				foreach($response_array['tripInfos'] as $key => $flightValue)
				{
					
					$flightListArray =  $flightValue['sI'];
					$flightTotalPrice =  $flightValue['totalPriceList'];
					
					$flightSegmetKey =  $flightListArray[0]['id'];
					$flightAirportCode = $flightListArray[0]['fD']['aI']['code'];
					$flightAirportName = $flightListArray[0]['fD']['aI']['name'];
					$flightNumber = $flightListArray[0]['fD']['fN'];
					$flightAircraftNumber = $flightListArray[0]['fD']['eT'];

					$Adult_CC = ucfirst($flightTotalPrice[0]['fd']['ADULT']['cc']);						


					$flightDateTime = date("D, d M Y",strtotime($flightListArray[0]['dt']));
					$flightDepartureCode = $flightListArray[0]['da']['code'];						
					$flightdepartureTime= date("H:i",strtotime($flightListArray[0]['dt']));						
					$flightdepartureCityFullName = $flightListArray[0]['da']['name'];
					$flightdepartureCity 	= $flightListArray[0]['da']['city'];
					$flightdepartureCountry 	= $flightListArray[0]['da']['country'];
					@$flightdepartureTerminal = $flightListArray[0]['da']['terminal'];
					
					$minutes = $flightListArray[0]['duration'];
					$hours = floor($minutes / 60);
					$min = $minutes - ($hours * 60); 
												
					$HoursMinute =  $hours."h ".$min."m" ;
					
					$FlightArrivalDate = date("D, d M Y",strtotime($flightListArray[0]['at']));						
					$FlightArrivalCode = $flightListArray[0]['aa']['code'];						
					$FlightArrivalTime = date("H:i",strtotime($flightListArray[0]['at']));						
					$flightarrivalCityFullName = $flightListArray[0]['aa']['name'];						
					$flightarrivalCity = $flightListArray[0]['aa']['city'];
					$flightarrivalCountry = $flightListArray[0]['aa']['country'];
					@$flightarrivalTerminal = $flightListArray[0]['aa']['terminal'];
					
					$this->session->set_userdata('flightAirportName',$flightAirportName);
					$this->session->set_userdata('flightAirportCode',$flightAirportCode);
					$this->session->set_userdata('flightNumber',$flightNumber);
					$this->session->set_userdata('flightAircraftNumber',$flightAircraftNumber);
					$this->session->set_userdata('flightSegmetKey',$flightSegmetKey);						
					
					$this->session->set_userdata('Adult_CC',$Adult_CC);
					
					$this->session->set_userdata('flightDateTime',$flightDateTime);
					$this->session->set_userdata('flightDepartureCode',$flightDepartureCode);						
					$this->session->set_userdata('flightdepartureTime',$flightdepartureTime);
					$this->session->set_userdata('flightdepartureCityFullName',$flightdepartureCityFullName);
					$this->session->set_userdata('flightdepartureCity',$flightdepartureCity);
					$this->session->set_userdata('flightdepartureCountry',$flightdepartureCountry);
					$this->session->set_userdata('flightdepartureTerminal',$flightdepartureTerminal);
					
					$this->session->set_userdata('HoursMinute',$HoursMinute);				
					
					$this->session->set_userdata('FlightArrivalDate',$FlightArrivalDate);
					$this->session->set_userdata('FlightArrivalCode',$FlightArrivalCode);
					$this->session->set_userdata('FlightArrivalTime',$FlightArrivalTime);
					$this->session->set_userdata('flightarrivalCityFullName',$flightarrivalCityFullName);
					$this->session->set_userdata('flightarrivalCity',$flightarrivalCity);
					$this->session->set_userdata('flightarrivalCountry',$flightarrivalCountry);
					$this->session->set_userdata('flightarrivalTerminal',$flightarrivalTerminal);
					$this->session->set_userdata('bookingType',$flightType);
					
					$adult_Pax22  = $this->session->userdata('adult_user');
					$child_Pax22  = $this->session->userdata('child_user');						
					$infant_Pax22 = $this->session->userdata('infant_user');					
					
					$adultCount = $flightTotalPrice[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
					@$childCount = $flightTotalPrice[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
					@$infantCount = $flightTotalPrice[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
							
					$grossTotal = $adultCount + $childCount +  $infantCount;                        

					$adultBf = $flightTotalPrice[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
					@$childBf = $flightTotalPrice[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
					@$infantBf = $flightTotalPrice[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22; 

					$adultTotalBaseFare = $adultBf;
					$childTotalBaseFare = $childBf;
					$infantTotalBaseFare = $infantBf;

					$baseFareTotal = $adultBf + $childBf + $infantBf;
					$baseFareReTotal = $adultBf +  $childBf + $infantBf;	
					
					$adultTAF = $flightTotalPrice[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
					@$childTAF = $flightTotalPrice[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
					@$infantTAF = $flightTotalPrice[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;

					$totalTaxFare = $adultTAF  + $childTAF + $infantTAF;
					
					@$adultAGST = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
					@$childAGST = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
					@$infantAGST = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

					$totalAGST = $adultAGST + $childAGST + $infantAGST;

					$adultMFT = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
					@$childMFT = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
					@$infantMFT = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

					$totalMFT = $adultMFT + $childMFT + $infantMFT;

					$adultMF = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
					@$childMF = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
					@$infantMF = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

					$totalMF = $adultMF + $childMF + $infantMF;

					$adultOT = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
					@$childOT = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
					@$infantOT = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;

		
					$totalOT = $adultOT + $childOT + $infantOT;
					
					
					
					$this->session->set_userdata('baseFareReTotal',$baseFareReTotal);
					$this->session->set_userdata('adultTotalBaseFare',$adultTotalBaseFare);
					$this->session->set_userdata('childTotalBaseFare',$childTotalBaseFare);
					$this->session->set_userdata('infantTotalBaseFare',$infantTotalBaseFare);
					$this->session->set_userdata('totalTaxFare',$totalTaxFare);						
					
					$this->session->set_userdata('totalAGST',$totalAGST);
					$this->session->set_userdata('totalMFT',$totalMFT);
					$this->session->set_userdata('totalMF',$totalMF);
					$this->session->set_userdata('totalOT',$totalOT);
					$this->session->set_userdata('grossTotal',$grossTotal);	
					$this->session->set_userdata('totalGrossAmount',$totalGrossAmount);
					$this->session->set_userdata('totalBaggageMeal',$totalBaggageMeal);	
					$this->session->set_userdata('totalwithSeat',$totalWithSeat);
					$this->session->set_userdata('adultSeatNo',$adultSeatNo);	
					$this->session->set_userdata('childSeatNo',$childSeatNo);

					
					
					
					//-------------------------------- End Total fare--------------------------------------
																
					
				} 									
				
				$data=$this->comman_data();
		
				$data['passengersdetailsReview']=$this->Flights_page->passengers_detailsReview($bookingId);
				$data['booking_flights']=$this->Flights_page->booking_flightsReview();
				$data['totalGrossAmount'] = $totalGrossAmount;
				$data['totalBaggageMeal'] = $totalBaggageMeal;
				$data['totalWithSeat'] = $totalWithSeat;
				$data['adultSeatNo'] = $adultSeatNo;
				$data['childSeatNo'] = $childSeatNo;
				$data['tripInfoResult'] = $segmentList;
				

			} 
				
			else if($_POST['flightType'] == 'R')
			{
									
				$priceId= array($flightId,$flightIdReturn);	  
				$ch = $this->getFlightDetails($priceId);					
				
				$result = curl_exec($ch);
				$response_array_return = json_decode($result, true);
				curl_close($ch);					
								
				$flightArray = $response_array_return['tripInfos'][0];
				$flightArray2 = $response_array_return['tripInfos'][1];

				$segmentList = $response_array_return['tripInfos'][0];
				$segmentListReturn = $response_array_return['tripInfos'][1];
				
				//	print_r($flightArray);
				//	echo "<br>";
				//	print_r($flightArray2);
				
				$totalFlight = count($flightArray); 
				$totalFlight2 = count($flightArray2); 

			
				//	foreach($flightArray as $key => $flightValue)
				//		{
					
					
					$flightListArray =  $flightArray['sI'];
					$flightTotalPrice =  $flightArray['totalPriceList'];
					
					$flightListArray2 =  $flightArray2['sI'];
					$flightTotalPrice2 =  $flightArray2['totalPriceList'];
					
					
					//-------------------------Start Onwards Flight----------------------------
					
					
					$flightAirportCode = $flightListArray[0]['fD']['aI']['code'];
					$flightAirportName = $flightListArray[0]['fD']['aI']['name'];
					$flightNumber = $flightListArray[0]['fD']['fN'];
					$flightAircraftNumber = $flightListArray[0]['fD']['eT'];
					$flightSegmetKey =  $flightListArray[0]['id'];

					$Adult_CC = ucfirst($flightTotalPrice[0]['fd']['ADULT']['cc']);	
					
					$flightDateTime = date("D, d M Y",strtotime($flightListArray[0]['dt']));
					$flightDepartureCode = $flightListArray[0]['da']['code'];						
					$flightdepartureTime= date("H:i",strtotime($flightListArray[0]['dt']));						
					$flightdepartureCityFullName = $flightListArray[0]['da']['name'];
					$flightdepartureCity 	= $flightListArray[0]['da']['city'];
					$flightdepartureCountry 	= $flightListArray[0]['da']['country'];
					@$flightdepartureTerminal = $flightListArray[0]['da']['terminal'];
					
					$minutes = $flightListArray[0]['duration'];
								$hours = floor($minutes / 60);
								$min = $minutes - ($hours * 60); 
												
					$HoursMinute =  $hours."h ".$min."m" ;
					
					$FlightArrivalDate = date("D, d M Y",strtotime($flightListArray[0]['at']));						
					$FlightArrivalCode = $flightListArray[0]['aa']['code'];						
					$FlightArrivalTime = date("H:i",strtotime($flightListArray[0]['at']));						
					$flightarrivalCityFullName = $flightListArray[0]['aa']['name'];						
					$flightarrivalCity = $flightListArray[0]['aa']['city'];
					$flightarrivalCountry = $flightListArray[0]['aa']['country'];
					@$flightarrivalTerminal = $flightListArray[0]['aa']['terminal'];
					
					$this->session->set_userdata('flightAirportName',$flightAirportName);
					$this->session->set_userdata('flightAirportCode',$flightAirportCode);
					$this->session->set_userdata('flightNumber',$flightNumber);
					$this->session->set_userdata('flightAircraftNumber',$flightAircraftNumber);					
					$this->session->set_userdata('flightSegmetKey',$flightSegmetKey);
					
					
					$this->session->set_userdata('Adult_CC',$Adult_CC);
					
					
					$this->session->set_userdata('flightDateTime',$flightDateTime);
					$this->session->set_userdata('flightDepartureCode',$flightDepartureCode);						
					$this->session->set_userdata('flightdepartureTime',$flightdepartureTime);
					$this->session->set_userdata('flightdepartureCityFullName',$flightdepartureCityFullName);
					$this->session->set_userdata('flightdepartureCity',$flightdepartureCity);
					$this->session->set_userdata('flightdepartureCountry',$flightdepartureCountry);
					$this->session->set_userdata('flightdepartureTerminal',$flightdepartureTerminal);
					
					$this->session->set_userdata('HoursMinute',$HoursMinute);				
					
					$this->session->set_userdata('FlightArrivalDate',$FlightArrivalDate);
					$this->session->set_userdata('FlightArrivalCode',$FlightArrivalCode);
					$this->session->set_userdata('FlightArrivalTime',$FlightArrivalTime);
					$this->session->set_userdata('flightarrivalCityFullName',$flightarrivalCityFullName);
					$this->session->set_userdata('flightarrivalCity',$flightarrivalCity);
					$this->session->set_userdata('flightarrivalCountry',$flightarrivalCountry);
					$this->session->set_userdata('flightarrivalTerminal',$flightarrivalTerminal);
					$this->session->set_userdata('bookingType',$flightType);
					
					//-------------------------End Onwards Flight----------------------------
					
					
					
					//-------------------------Start Return Flight----------------------------
					
					
					$flightAirportCode2 = $flightListArray2[0]['fD']['aI']['code'];
					$flightAirportName2 = $flightListArray2[0]['fD']['aI']['name'];
					$flightNumber2 = $flightListArray2[0]['fD']['fN'];
					$flightAircraftNumber2 = $flightListArray2[0]['fD']['eT'];
					$flightSegmetReturnKey =  $flightListArray2[0]['id'];

					$Adult_CC2 = ucfirst($flightTotalPrice2[0]['fd']['ADULT']['cc']);	
					
					$flightDateTime2 = date("D, d M Y",strtotime($flightListArray2[0]['dt']));
					$flightDepartureCode2 = $flightListArray2[0]['da']['code'];						
					$flightdepartureTime2 = date("H:i",strtotime($flightListArray2[0]['dt']));						
					$flightdepartureCityFullName2 = $flightListArray2[0]['da']['name'];
					$flightdepartureCity2 	= $flightListArray2[0]['da']['city'];
					$flightdepartureCountry2 	= $flightListArray2[0]['da']['country'];
					@$flightdepartureTerminal2 = $flightListArray2[0]['da']['terminal'];
					
					$minutes2 = $flightListArray2[0]['duration'];
								$hours2 = floor($minutes2 / 60);
								$min2 = $minutes2 - ($hours2 * 60); 
												
					$HoursMinute2 =  $hours2."h ".$min2."m" ;
					
					$FlightArrivalDate2 = date("D, d M Y",strtotime($flightListArray2[0]['at']));						
					$FlightArrivalCode2 = $flightListArray2[0]['aa']['code'];						
					$FlightArrivalTime2 = date("H:i",strtotime($flightListArray2[0]['at']));						
					$flightarrivalCityFullName2 = $flightListArray2[0]['aa']['name'];						
					$flightarrivalCity2 = $flightListArray2[0]['aa']['city'];
					$flightarrivalCountry2 = $flightListArray2[0]['aa']['country'];
					@$flightarrivalTerminal2 = $flightListArray2[0]['aa']['terminal'];
					
					$this->session->set_userdata('flightAirportName2',$flightAirportName2);
					$this->session->set_userdata('flightAirportCode2',$flightAirportCode2);
					$this->session->set_userdata('flightNumber2',$flightNumber2);
					$this->session->set_userdata('flightAircraftNumber2',$flightAircraftNumber2);
					$this->session->set_userdata('flightSegmetReturnKey',$flightSegmetReturnKey);
					
					
					$this->session->set_userdata('Adult_CC2',$Adult_CC2);
					
					
					$this->session->set_userdata('flightDateTime2',$flightDateTime2);
					$this->session->set_userdata('flightDepartureCode2',$flightDepartureCode2);						
					$this->session->set_userdata('flightdepartureTime2',$flightdepartureTime2);
					$this->session->set_userdata('flightdepartureCityFullName2',$flightdepartureCityFullName2);
					$this->session->set_userdata('flightdepartureCity2',$flightdepartureCity2);
					$this->session->set_userdata('flightdepartureCountry2',$flightdepartureCountry2);
					$this->session->set_userdata('flightdepartureTerminal2',$flightdepartureTerminal2);
					
					$this->session->set_userdata('HoursMinute2',$HoursMinute2);				
					
					$this->session->set_userdata('FlightArrivalDate2',$FlightArrivalDate2);
					$this->session->set_userdata('FlightArrivalCode2',$FlightArrivalCode2);
					$this->session->set_userdata('FlightArrivalTime2',$FlightArrivalTime2);
					$this->session->set_userdata('flightarrivalCityFullName2',$flightarrivalCityFullName2);
					$this->session->set_userdata('flightarrivalCity2',$flightarrivalCity2);
					$this->session->set_userdata('flightarrivalCountry2',$flightarrivalCountry2);
					$this->session->set_userdata('flightarrivalTerminal2',$flightarrivalTerminal2);
					
					
					
					//-----------------------------End Return Flight----------------------------------------
					
					
											
					//-----------------------------Total Fare Start----------------------------------------
					
					$adult_Pax22  = $this->session->userdata('adult_user');
					$child_Pax22  = $this->session->userdata('child_user');						
					$infant_Pax22 = $this->session->userdata('infant_user');
					
					
							$adultCount = $flightTotalPrice[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childCount = $flightTotalPrice[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantCount = $flightTotalPrice[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
							
							$adultReCount = $flightTotalPrice2[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childReCount = $flightTotalPrice2[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantReCount = $flightTotalPrice2[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;     
							
							$grossTotal = $adultCount + $adultReCount + $childCount + $childReCount +  $infantCount + $infantReCount;


							// 	$adultCont = count($tripInfoResult['totalPriceList'][0]['fd']['ADULT']);

							$adultBf = $flightTotalPrice[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childBf = $flightTotalPrice[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantBf = $flightTotalPrice[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22; 

							$adulRetBf = $flightTotalPrice2[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childReBf = $flightTotalPrice2[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantReBf = $flightTotalPrice2[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22; 
							
							
							$adultTotalBaseFare = $adultBf + $adulRetBf;
							$childTotalBaseFare = $childBf + $childReBf;
							$infantTotalBaseFare = $infantBf + $infantReBf;

							$baseFareTotal = $adultBf + $childBf + $infantBf;
							$baseFareReTotal = $adultBf + $adulRetBf +  $childBf + $childReBf + $infantBf + $infantReBf;
							
							
								$adultTAF = $flightTotalPrice[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
							@$childTAF = $flightTotalPrice[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
							@$infantTAF = $flightTotalPrice[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;

							$adultReTAF = $flightTotalPrice2[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
							@$childReTAF = $flightTotalPrice2[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
							@$infantReTAF = $flightTotalPrice2[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
							
								$totalTaxFare = $adultTAF + $adultReTAF + $childTAF + $childReTAF + $infantTAF + $infantReTAF;
															
							$adultAGST = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
							@$childAGST = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
							@$infantAGST = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

							$adultReAGST = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
							@$childReAGST = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
							@$infantReAGST = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

								$totalAGST = $adultAGST + $childAGST + $infantAGST + $adultReAGST + $childReAGST + $infantReAGST;			
						
							$adultMFT = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
							@$childMFT = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
							@$infantMFT = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

							$adultReMFT = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
							@$childReMFT = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
							@$infantReMFT = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

								$totalMFT = $adultMFT + $childMFT + $infantMFT + $adultReMFT + $childReMFT + $infantReMFT;

							$adultMF = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childMF = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantMF = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

							$adultReMF = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childReMF = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantReMF = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

								$totalMF = $adultMF + $childMF + $infantMF + $adultReMF + $childReMF + $infantReMF;

							$adultOT = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childOT = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantOT = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;

							$adultReOT = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childReOT = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantReOT = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;

								$totalOT = $adultOT + $childOT + $infantOT + $adultReOT + $childReOT + $infantReOT;

					
					
					
					$this->session->set_userdata('baseFareReTotal',$baseFareReTotal);
					$this->session->set_userdata('adultTotalBaseFare',$adultTotalBaseFare);
					$this->session->set_userdata('childTotalBaseFare',$childTotalBaseFare);
					$this->session->set_userdata('infantTotalBaseFare',$infantTotalBaseFare);
					$this->session->set_userdata('totalTaxFare',$totalTaxFare);						
					
					$this->session->set_userdata('totalAGST',$totalAGST);
					$this->session->set_userdata('totalMFT',$totalMFT);
					$this->session->set_userdata('totalMF',$totalMF);
					$this->session->set_userdata('totalOT',$totalOT);
					$this->session->set_userdata('grossTotal',$grossTotal);	
					$this->session->set_userdata('totalGrossAmount',$totalGrossAmount);
					$this->session->set_userdata('totalBaggageMeal',$totalBaggageMeal);	
					
				

	
				$data=$this->comman_data();
	
				$data['passengersdetailsReview']=$this->Flights_page->passengers_detailsReview($bookingId);
				$data['booking_flights']=$this->Flights_page->booking_flightsReview();
				$data['tripInfoResult'] = $segmentList;
				$data['tripInfoResultReturn'] = $segmentListReturn;
				$data['totalGrossAmount'] = $totalGrossAmount;
				$data['totalBaggageMeal'] = $totalBaggageMeal;

			
			}
				
			else if($_POST['flightType'] == 'M')				
			{

				//echo "hi"; die;

				//	echo "<pre>"; print_r($_POST); die;
				
				if($flightIdmultiway_First != '' && $flightIdmultiway_second != '' && $flightIdmultiway_third != '' && $flightIdmultiway_forth != '' )
				{
					$priceId= array($flightId,$flightIdReturn,$flightIdmultiway_First,$flightIdmultiway_second,$flightIdmultiway_third,$flightIdmultiway_forth);	
				
				} 
				elseif($flightIdmultiway_First != '' && $flightIdmultiway_second != '' && $flightIdmultiway_third != '' )
				{
					$priceId= array($flightId,$flightIdReturn,$flightIdmultiway_First,$flightIdmultiway_second,$flightIdmultiway_third);	
				
				} 
				elseif($flightIdmultiway_First != '' && $flightIdmultiway_second != '')
				{
					$priceId= array($flightId,$flightIdReturn,$flightIdmultiway_First,$flightIdmultiway_second);								  
				}
				elseif($flightIdmultiway_First != '')
				{
					$priceId= array($flightId,$flightIdReturn,$flightIdmultiway_First);	
					
				}
				else{
					$priceId= array($flightId,$flightIdReturn);	
				}
				
				
				$ch = $this->getFlightDetails($priceId);					
				
				$result = curl_exec($ch);
				$response_array_multiway = json_decode($result, true);
				curl_close($ch);	
				
				//echo "<pre>"; print_r($response_array_multiway); die;

				$count_multiwayTripinfos = count($response_array_multiway['tripInfos']); 
				//echo $count_multiwayTripinfos;
		


				$flightArray = $response_array_multiway['tripInfos'][0];
				$flightArray2 = $response_array_multiway['tripInfos'][1];

				$segmentList = $response_array_multiway['tripInfos'][0];
				$segmentListReturn = $response_array_multiway['tripInfos'][1];

				if($count_multiwayTripinfos == 6)
				{				
					$flightArray3 = $response_array_multiway['tripInfos'][2];
					$flightArray4 = $response_array_multiway['tripInfos'][3];
					$flightArray5 = $response_array_multiway['tripInfos'][4];
					$flightArray6 = $response_array_multiway['tripInfos'][5];	
					
					$segmentListThird = $response_array_multiway['tripInfos'][2];
					$segmentListForth = $response_array_multiway['tripInfos'][3];
					$segmentListFifth = $response_array_multiway['tripInfos'][4];
					$segmentListSixth = $response_array_multiway['tripInfos'][5];
					
				}
					
				if($count_multiwayTripinfos == 5)
				{				
					$flightArray3 = $response_array_multiway['tripInfos'][2];
					$flightArray4 = $response_array_multiway['tripInfos'][3];
					$flightArray5 = $response_array_multiway['tripInfos'][4];
					
					$segmentListThird = $response_array_multiway['tripInfos'][2];
					$segmentListForth = $response_array_multiway['tripInfos'][3];
					$segmentListFifth = $response_array_multiway['tripInfos'][4];
				}
				
				if($count_multiwayTripinfos == 4) 
				{				
					$flightArray3 = $response_array_multiway['tripInfos'][2];
					$flightArray4 = $response_array_multiway['tripInfos'][3];	
					
					$segmentListThird = $response_array_multiway['tripInfos'][2];
					$segmentListForth = $response_array_multiway['tripInfos'][3];
				}
				
				if($count_multiwayTripinfos == 3)
				{
					$flightArray3 = $response_array_multiway['tripInfos'][2];	
					$segmentListThird = $response_array_multiway['tripInfos'][2];			
				}
					$totalFlight = count($flightArray); 
					$totalFlight2 = count($flightArray2);	
					
					
					$flightListArray =  $flightArray['sI'];
					$flightTotalPrice =  $flightArray['totalPriceList'];
					
					$flightListArray2 =  $flightArray2['sI'];
					$flightTotalPrice2 =  $flightArray2['totalPriceList'];

					if($count_multiwayTripinfos == 6)
					{
						$flightListArray3 =  $flightArray3['sI'];
						$flightTotalPrice3 =  $flightArray3['totalPriceList'];
					
						$flightListArray4 =  $flightArray4['sI'];
						$flightTotalPrice4 =  $flightArray4['totalPriceList'];
					
						$flightListArray5 =  $flightArray5['sI'];
						$flightTotalPrice5 =  $flightArray5['totalPriceList'];

						$flightListArray6 =  $flightArray6['sI'];
						$flightTotalPrice6 =  $flightArray6['totalPriceList'];
					}				
					
					
					if($count_multiwayTripinfos == 5)
					{
						$flightListArray3 =  $flightArray3['sI'];
						$flightTotalPrice3 =  $flightArray3['totalPriceList'];
					
						$flightListArray4 =  $flightArray4['sI'];
						$flightTotalPrice4 =  $flightArray4['totalPriceList'];
					
						$flightListArray5 =  $flightArray5['sI'];
						$flightTotalPrice5 =  $flightArray5['totalPriceList'];
					}
					
					if($count_multiwayTripinfos == 4)
					{
						$flightListArray3 =  $flightArray3['sI'];
						$flightTotalPrice3 =  $flightArray3['totalPriceList'];
					
						$flightListArray4 =  $flightArray4['sI'];
						$flightTotalPrice4 =  $flightArray4['totalPriceList'];
					
					}
					
					if($count_multiwayTripinfos == 3)
					{
						$flightListArray3 =  $flightArray3['sI'];
						$flightTotalPrice3 =  $flightArray3['totalPriceList'];							
					}
		
								
					//-------------------------Start Onwards Flight----------------------------
					
					
					$flightAirportCode = $flightListArray[0]['fD']['aI']['code'];
					$flightAirportName = $flightListArray[0]['fD']['aI']['name'];
					$flightNumber = $flightListArray[0]['fD']['fN'];
					$flightAircraftNumber = $flightListArray[0]['fD']['eT'];
					$flightSegmetKey =  $flightListArray[0]['id'];

					$Adult_CC = ucfirst($flightTotalPrice[0]['fd']['ADULT']['cc']);	
					
					$flightDateTime = date("D, d M Y",strtotime($flightListArray[0]['dt']));
					$flightDepartureCode = $flightListArray[0]['da']['code'];						
					$flightdepartureTime= date("H:i",strtotime($flightListArray[0]['dt']));						
					$flightdepartureCityFullName = $flightListArray[0]['da']['name'];
					$flightdepartureCity 	= $flightListArray[0]['da']['city'];
					$flightdepartureCountry 	= $flightListArray[0]['da']['country'];
					@$flightdepartureTerminal = $flightListArray[0]['da']['terminal'];
					
					$minutes = $flightListArray[0]['duration'];
								$hours = floor($minutes / 60);
								$min = $minutes - ($hours * 60); 
												
					$HoursMinute =  $hours."h ".$min."m" ;
					
					$FlightArrivalDate = date("D, d M Y",strtotime($flightListArray[0]['at']));						
					$FlightArrivalCode = $flightListArray[0]['aa']['code'];						
					$FlightArrivalTime = date("H:i",strtotime($flightListArray[0]['at']));						
					$flightarrivalCityFullName = $flightListArray[0]['aa']['name'];						
					$flightarrivalCity = $flightListArray[0]['aa']['city'];
					$flightarrivalCountry = $flightListArray[0]['aa']['country'];
					@$flightarrivalTerminal = $flightListArray[0]['aa']['terminal'];
					
					$this->session->set_userdata('flightAirportName',$flightAirportName);
					$this->session->set_userdata('flightAirportCode',$flightAirportCode);
					$this->session->set_userdata('flightNumber',$flightNumber);
					$this->session->set_userdata('flightAircraftNumber',$flightAircraftNumber);
					$this->session->set_userdata('bookingType',$flightType);
					$this->session->set_userdata('flightSegmetKey',$flightSegmetKey);
					
					$this->session->set_userdata('Adult_CC',$Adult_CC);
					
					
					$this->session->set_userdata('flightDateTime',$flightDateTime);
					$this->session->set_userdata('flightDepartureCode',$flightDepartureCode);						
					$this->session->set_userdata('flightdepartureTime',$flightdepartureTime);
					$this->session->set_userdata('flightdepartureCityFullName',$flightdepartureCityFullName);
					$this->session->set_userdata('flightdepartureCity',$flightdepartureCity);
					$this->session->set_userdata('flightdepartureCountry',$flightdepartureCountry);
					$this->session->set_userdata('flightdepartureTerminal',$flightdepartureTerminal);
					
					$this->session->set_userdata('HoursMinute',$HoursMinute);				
					
					$this->session->set_userdata('FlightArrivalDate',$FlightArrivalDate);
					$this->session->set_userdata('FlightArrivalCode',$FlightArrivalCode);
					$this->session->set_userdata('FlightArrivalTime',$FlightArrivalTime);
					$this->session->set_userdata('flightarrivalCityFullName',$flightarrivalCityFullName);
					$this->session->set_userdata('flightarrivalCity',$flightarrivalCity);
					$this->session->set_userdata('flightarrivalCountry',$flightarrivalCountry);
					$this->session->set_userdata('flightarrivalTerminal',$flightarrivalTerminal);
					
					
					//-------------------------End Onwards Flight----------------------------
					
					
					
					//-------------------------Start Return Flight----------------------------
					
					
					$flightAirportCode2 = $flightListArray2[0]['fD']['aI']['code'];
					$flightAirportName2 = $flightListArray2[0]['fD']['aI']['name'];
					$flightNumber2 = $flightListArray2[0]['fD']['fN'];
					$flightAircraftNumber2 = $flightListArray2[0]['fD']['eT'];
					$flightSegmetReturnKey =  $flightListArray2[0]['id'];

					$Adult_CC2 = ucfirst($flightTotalPrice2[0]['fd']['ADULT']['cc']);	
					
					$flightDateTime2 = date("D, d M Y",strtotime($flightListArray2[0]['dt']));
					$flightDepartureCode2 = $flightListArray2[0]['da']['code'];						
					$flightdepartureTime2 = date("H:i",strtotime($flightListArray2[0]['dt']));						
					$flightdepartureCityFullName2 = $flightListArray2[0]['da']['name'];
					$flightdepartureCity2 	= $flightListArray2[0]['da']['city'];
					$flightdepartureCountry2 	= $flightListArray2[0]['da']['country'];
					@$flightdepartureTerminal2 = $flightListArray2[0]['da']['terminal'];
					
					$minutes2 = $flightListArray2[0]['duration'];
								$hours2 = floor($minutes2 / 60);
								$min2 = $minutes2 - ($hours2 * 60); 
												
					$HoursMinute2 =  $hours2."h ".$min2."m" ;
					
					$FlightArrivalDate2 = date("D, d M Y",strtotime($flightListArray2[0]['at']));						
					$FlightArrivalCode2 = $flightListArray2[0]['aa']['code'];						
					$FlightArrivalTime2 = date("H:i",strtotime($flightListArray2[0]['at']));						
					$flightarrivalCityFullName2 = $flightListArray2[0]['aa']['name'];						
					$flightarrivalCity2 = $flightListArray2[0]['aa']['city'];
					$flightarrivalCountry2 = $flightListArray2[0]['aa']['country'];
					@$flightarrivalTerminal2 = $flightListArray2[0]['aa']['terminal'];
					
					$this->session->set_userdata('flightAirportName2',$flightAirportName2);
					$this->session->set_userdata('flightAirportCode2',$flightAirportCode2);
					$this->session->set_userdata('flightNumber2',$flightNumber2);
					$this->session->set_userdata('flightAircraftNumber2',$flightAircraftNumber2);
					$this->session->set_userdata('flightSegmetReturnKey',$flightSegmetReturnKey);
					
					$this->session->set_userdata('Adult_CC2',$Adult_CC2);
					
					
					$this->session->set_userdata('flightDateTime2',$flightDateTime2);
					$this->session->set_userdata('flightDepartureCode2',$flightDepartureCode2);						
					$this->session->set_userdata('flightdepartureTime2',$flightdepartureTime2);
					$this->session->set_userdata('flightdepartureCityFullName2',$flightdepartureCityFullName2);
					$this->session->set_userdata('flightdepartureCity2',$flightdepartureCity2);
					$this->session->set_userdata('flightdepartureCountry2',$flightdepartureCountry2);
					$this->session->set_userdata('flightdepartureTerminal2',$flightdepartureTerminal2);
					
					$this->session->set_userdata('HoursMinute2',$HoursMinute2);				
					
					$this->session->set_userdata('FlightArrivalDate2',$FlightArrivalDate2);
					$this->session->set_userdata('FlightArrivalCode2',$FlightArrivalCode2);
					$this->session->set_userdata('FlightArrivalTime2',$FlightArrivalTime2);
					$this->session->set_userdata('flightarrivalCityFullName2',$flightarrivalCityFullName2);
					$this->session->set_userdata('flightarrivalCity2',$flightarrivalCity2);
					$this->session->set_userdata('flightarrivalCountry2',$flightarrivalCountry2);
					$this->session->set_userdata('flightarrivalTerminal2',$flightarrivalTerminal2);
					
					
					
					//-----------------------------End Return Flight----------------------------------------
					
					
					//-------------------------Start Third Flight ----------------------------
					
					if($count_multiwayTripinfos == 3)
					{
					
					$flightAirportCode3 = $flightListArray3[0]['fD']['aI']['code'];
					$flightAirportName3 = $flightListArray3[0]['fD']['aI']['name'];
					$flightNumber3 = $flightListArray3[0]['fD']['fN'];
					$flightAircraftNumber3 = $flightListArray3[0]['fD']['eT'];
					$flightSegmetThirdKey =  $flightListArray3[0]['id'];

					$Adult_CC3 = ucfirst($flightTotalPrice3[0]['fd']['ADULT']['cc']);	
					
					$flightDateTime3 = date("D, d M Y",strtotime($flightListArray3[0]['dt']));
					$flightDepartureCode3 = $flightListArray3[0]['da']['code'];						
					$flightdepartureTime3 = date("H:i",strtotime($flightListArray3[0]['dt']));						
					$flightdepartureCityFullName3 = $flightListArray3[0]['da']['name'];
					$flightdepartureCity3 	= $flightListArray3[0]['da']['city'];
					$flightdepartureCountry3 	= $flightListArray3[0]['da']['country'];
					@$flightdepartureTerminal3 = $flightListArray3[0]['da']['terminal'];
					
					$minutes3 = $flightListArray3[0]['duration'];
								$hours3 = floor($minutes3 / 60);
								$min3 = $minutes3 - ($hours3 * 60); 
												
					$HoursMinute3 =  $hours3."h ".$min3."m" ;
					
					$FlightArrivalDate3 = date("D, d M Y",strtotime($flightListArray3[0]['at']));						
					$FlightArrivalCode3 = $flightListArray3[0]['aa']['code'];						
					$FlightArrivalTime3 = date("H:i",strtotime($flightListArray3[0]['at']));						
					$flightarrivalCityFullName3 = $flightListArray3[0]['aa']['name'];						
					$flightarrivalCity3 = $flightListArray3[0]['aa']['city'];
					$flightarrivalCountry3 = $flightListArray3[0]['aa']['country'];
					@$flightarrivalTerminal3 = $flightListArray3[0]['aa']['terminal'];
					
					$this->session->set_userdata('flightAirportName3',$flightAirportName3);
					$this->session->set_userdata('flightAirportCode3',$flightAirportCode3);
					$this->session->set_userdata('flightNumber3',$flightNumber3);
					$this->session->set_userdata('flightAircraftNumber3',$flightAircraftNumber3);
					$this->session->set_userdata('flightSegmetThirdKey',$flightSegmetThirdKey);

					
					$this->session->set_userdata('Adult_CC3',$Adult_CC3);
					
					
					$this->session->set_userdata('flightDateTime3',$flightDateTime3);
					$this->session->set_userdata('flightDepartureCode3',$flightDepartureCode3);						
					$this->session->set_userdata('flightdepartureTime3',$flightdepartureTime3);
					$this->session->set_userdata('flightdepartureCityFullName3',$flightdepartureCityFullName3);
					$this->session->set_userdata('flightdepartureCity3',$flightdepartureCity3);
					$this->session->set_userdata('flightdepartureCountry3',$flightdepartureCountry3);
					$this->session->set_userdata('flightdepartureTerminal3',$flightdepartureTerminal3);
					
					$this->session->set_userdata('HoursMinute3',$HoursMinute3);				
					
					$this->session->set_userdata('FlightArrivalDate3',$FlightArrivalDate3);
					$this->session->set_userdata('FlightArrivalCode3',$FlightArrivalCode3);
					$this->session->set_userdata('FlightArrivalTime3',$FlightArrivalTime3);
					$this->session->set_userdata('flightarrivalCityFullName3',$flightarrivalCityFullName3);
					$this->session->set_userdata('flightarrivalCity3',$flightarrivalCity3);
					$this->session->set_userdata('flightarrivalCountry3',$flightarrivalCountry3);
					$this->session->set_userdata('flightarrivalTerminal3',$flightarrivalTerminal3);
					
						} 
					
					
					//-----------------------------End Third Flight----------------------------------------
					
					
					//-------------------------Start Third Forth Flight ----------------------------
					
					if($count_multiwayTripinfos == 4)
					{
					
					$flightAirportCode3 = $flightListArray3[0]['fD']['aI']['code'];
					$flightAirportName3 = $flightListArray3[0]['fD']['aI']['name'];
					$flightNumber3 = $flightListArray3[0]['fD']['fN'];
					$flightAircraftNumber3 = $flightListArray3[0]['fD']['eT'];

					$Adult_CC3 = ucfirst($flightTotalPrice3[0]['fd']['ADULT']['cc']);	
					
					$flightDateTime3 = date("D, d M Y",strtotime($flightListArray3[0]['dt']));
					$flightDepartureCode3 = $flightListArray3[0]['da']['code'];						
					$flightdepartureTime3 = date("H:i",strtotime($flightListArray3[0]['dt']));						
					$flightdepartureCityFullName3 = $flightListArray3[0]['da']['name'];
					$flightdepartureCity3 	= $flightListArray3[0]['da']['city'];
					$flightdepartureCountry3 	= $flightListArray3[0]['da']['country'];
					@$flightdepartureTerminal3 = $flightListArray3[0]['da']['terminal'];
					
					$minutes3 = $flightListArray3[0]['duration'];
								$hours3 = floor($minutes3 / 60);
								$min3 = $minutes3 - ($hours3 * 60); 
												
					$HoursMinute3 =  $hours3."h ".$min3."m" ;
					
					$FlightArrivalDate3 = date("D, d M Y",strtotime($flightListArray3[0]['at']));						
					$FlightArrivalCode3 = $flightListArray3[0]['aa']['code'];						
					$FlightArrivalTime3 = date("H:i",strtotime($flightListArray3[0]['at']));						
					$flightarrivalCityFullName3 = $flightListArray3[0]['aa']['name'];						
					$flightarrivalCity3 = $flightListArray3[0]['aa']['city'];
					$flightarrivalCountry3 = $flightListArray3[0]['aa']['country'];
					@$flightarrivalTerminal3 = $flightListArray3[0]['aa']['terminal'];
					
					$this->session->set_userdata('flightAirportName3',$flightAirportName3);
					$this->session->set_userdata('flightAirportCode3',$flightAirportCode3);
					$this->session->set_userdata('flightNumber3',$flightNumber3);
					$this->session->set_userdata('flightAircraftNumber3',$flightAircraftNumber3);
					
					
					$this->session->set_userdata('Adult_CC3',$Adult_CC3);
					
					
					$this->session->set_userdata('flightDateTime3',$flightDateTime3);
					$this->session->set_userdata('flightDepartureCode3',$flightDepartureCode3);						
					$this->session->set_userdata('flightdepartureTime3',$flightdepartureTime3);
					$this->session->set_userdata('flightdepartureCityFullName3',$flightdepartureCityFullName3);
					$this->session->set_userdata('flightdepartureCity3',$flightdepartureCity3);
					$this->session->set_userdata('flightdepartureCountry3',$flightdepartureCountry3);
					$this->session->set_userdata('flightdepartureTerminal3',$flightdepartureTerminal3);
					
					$this->session->set_userdata('HoursMinute3',$HoursMinute3);				
					
					$this->session->set_userdata('FlightArrivalDate3',$FlightArrivalDate3);
					$this->session->set_userdata('FlightArrivalCode3',$FlightArrivalCode3);
					$this->session->set_userdata('FlightArrivalTime3',$FlightArrivalTime3);
					$this->session->set_userdata('flightarrivalCityFullName3',$flightarrivalCityFullName3);
					$this->session->set_userdata('flightarrivalCity3',$flightarrivalCity3);
					$this->session->set_userdata('flightarrivalCountry3',$flightarrivalCountry3);
					$this->session->set_userdata('flightarrivalTerminal3',$flightarrivalTerminal3);
					
					
					
					
					
					$flightAirportCode4 = $flightListArray4[0]['fD']['aI']['code'];
					$flightAirportName4 = $flightListArray4[0]['fD']['aI']['name'];
					$flightNumber4 = $flightListArray4[0]['fD']['fN'];
					$flightAircraftNumber4 = $flightListArray4[0]['fD']['eT'];
					$flightSegmetForthKey =  $flightListArray4[0]['id'];

					$Adult_CC4 = ucfirst($flightTotalPrice4[0]['fd']['ADULT']['cc']);	
					
					$flightDateTime4 = date("D, d M Y",strtotime($flightListArray4[0]['dt']));
					$flightDepartureCode4 = $flightListArray4[0]['da']['code'];						
					$flightdepartureTime4 = date("H:i",strtotime($flightListArray4[0]['dt']));						
					$flightdepartureCityFullName4 = $flightListArray4[0]['da']['name'];
					$flightdepartureCity4 	= $flightListArray4[0]['da']['city'];
					$flightdepartureCountry4 	= $flightListArray4[0]['da']['country'];
					@$flightdepartureTerminal4 = $flightListArray4[0]['da']['terminal'];
					
					$minutes4 = $flightListArray4[0]['duration'];
								$hours4 = floor($minutes4 / 60);
								$min4 = $minutes4 - ($hours4 * 60); 
												
					$HoursMinute4 =  $hours4."h ".$min4."m" ;
					
					$FlightArrivalDate4 = date("D, d M Y",strtotime($flightListArray4[0]['at']));						
					$FlightArrivalCode4 = $flightListArray4[0]['aa']['code'];						
					$FlightArrivalTime4 = date("H:i",strtotime($flightListArray4[0]['at']));						
					$flightarrivalCityFullName4 = $flightListArray4[0]['aa']['name'];						
					$flightarrivalCity4 = $flightListArray4[0]['aa']['city'];
					$flightarrivalCountry4 = $flightListArray4[0]['aa']['country'];
					@$flightarrivalTerminal4 = $flightListArray4[0]['aa']['terminal'];
					
					$this->session->set_userdata('flightAirportName4',$flightAirportName4);
					$this->session->set_userdata('flightAirportCode4',$flightAirportCode4);
					$this->session->set_userdata('flightNumber4',$flightNumber4);
					$this->session->set_userdata('flightAircraftNumber4',$flightAircraftNumber4);
					$this->session->set_userdata('flightSegmetForthKey',$flightSegmetForthKey);
					
					
					$this->session->set_userdata('Adult_CC4',$Adult_CC4);
					
					
					$this->session->set_userdata('flightDateTime4',$flightDateTime4);
					$this->session->set_userdata('flightDepartureCode4',$flightDepartureCode4);						
					$this->session->set_userdata('flightdepartureTime4',$flightdepartureTime4);
					$this->session->set_userdata('flightdepartureCityFullName4',$flightdepartureCityFullName4);
					$this->session->set_userdata('flightdepartureCity4',$flightdepartureCity4);
					$this->session->set_userdata('flightdepartureCountry4',$flightdepartureCountry4);
					$this->session->set_userdata('flightdepartureTerminal4',$flightdepartureTerminal4);
					
					$this->session->set_userdata('HoursMinute4',$HoursMinute4);				
					
					$this->session->set_userdata('FlightArrivalDate4',$FlightArrivalDate4);
					$this->session->set_userdata('FlightArrivalCode4',$FlightArrivalCode4);
					$this->session->set_userdata('FlightArrivalTime4',$FlightArrivalTime4);
					$this->session->set_userdata('flightarrivalCityFullName4',$flightarrivalCityFullName4);
					$this->session->set_userdata('flightarrivalCity4',$flightarrivalCity4);
					$this->session->set_userdata('flightarrivalCountry4',$flightarrivalCountry4);
					$this->session->set_userdata('flightarrivalTerminal4',$flightarrivalTerminal4);
					
					
					
						} 
					
					
					//-----------------------------End Third Forth Flight----------------------------------------
					
					
					
					//-------------------------Start Third Forth Fifth Flight ----------------------------
					
					if($count_multiwayTripinfos == 5)
					{
					
					$flightAirportCode3 = $flightListArray3[0]['fD']['aI']['code'];
					$flightAirportName3 = $flightListArray3[0]['fD']['aI']['name'];
					$flightNumber3 = $flightListArray3[0]['fD']['fN'];
					$flightAircraftNumber3 = $flightListArray3[0]['fD']['eT'];

					$Adult_CC3 = ucfirst($flightTotalPrice3[0]['fd']['ADULT']['cc']);	
					
					$flightDateTime3 = date("D, d M Y",strtotime($flightListArray3[0]['dt']));
					$flightDepartureCode3 = $flightListArray3[0]['da']['code'];						
					$flightdepartureTime3 = date("H:i",strtotime($flightListArray3[0]['dt']));						
					$flightdepartureCityFullName3 = $flightListArray3[0]['da']['name'];
					$flightdepartureCity3 	= $flightListArray3[0]['da']['city'];
					$flightdepartureCountry3 	= $flightListArray3[0]['da']['country'];
					@$flightdepartureTerminal3 = $flightListArray3[0]['da']['terminal'];
					
					$minutes3 = $flightListArray3[0]['duration'];
								$hours3 = floor($minutes3 / 60);
								$min3 = $minutes3 - ($hours3 * 60); 
												
					$HoursMinute3 =  $hours3."h ".$min3."m" ;
					
					$FlightArrivalDate3 = date("D, d M Y",strtotime($flightListArray3[0]['at']));						
					$FlightArrivalCode3 = $flightListArray3[0]['aa']['code'];						
					$FlightArrivalTime3 = date("H:i",strtotime($flightListArray3[0]['at']));						
					$flightarrivalCityFullName3 = $flightListArray3[0]['aa']['name'];						
					$flightarrivalCity3 = $flightListArray3[0]['aa']['city'];
					$flightarrivalCountry3 = $flightListArray3[0]['aa']['country'];
					@$flightarrivalTerminal3 = $flightListArray3[0]['aa']['terminal'];
					
					$this->session->set_userdata('flightAirportName3',$flightAirportName3);
					$this->session->set_userdata('flightAirportCode3',$flightAirportCode3);
					$this->session->set_userdata('flightNumber3',$flightNumber3);
					$this->session->set_userdata('flightAircraftNumber3',$flightAircraftNumber3);
					
					
					$this->session->set_userdata('Adult_CC3',$Adult_CC3);
					
					
					$this->session->set_userdata('flightDateTime3',$flightDateTime3);
					$this->session->set_userdata('flightDepartureCode3',$flightDepartureCode3);						
					$this->session->set_userdata('flightdepartureTime3',$flightdepartureTime3);
					$this->session->set_userdata('flightdepartureCityFullName3',$flightdepartureCityFullName3);
					$this->session->set_userdata('flightdepartureCity3',$flightdepartureCity3);
					$this->session->set_userdata('flightdepartureCountry3',$flightdepartureCountry3);
					$this->session->set_userdata('flightdepartureTerminal3',$flightdepartureTerminal3);
					
					$this->session->set_userdata('HoursMinute3',$HoursMinute3);				
					
					$this->session->set_userdata('FlightArrivalDate3',$FlightArrivalDate3);
					$this->session->set_userdata('FlightArrivalCode3',$FlightArrivalCode3);
					$this->session->set_userdata('FlightArrivalTime3',$FlightArrivalTime3);
					$this->session->set_userdata('flightarrivalCityFullName3',$flightarrivalCityFullName3);
					$this->session->set_userdata('flightarrivalCity3',$flightarrivalCity3);
					$this->session->set_userdata('flightarrivalCountry3',$flightarrivalCountry3);
					$this->session->set_userdata('flightarrivalTerminal3',$flightarrivalTerminal3);
					
					
					
					
					
					$flightAirportCode4 = $flightListArray4[0]['fD']['aI']['code'];
					$flightAirportName4 = $flightListArray4[0]['fD']['aI']['name'];
					$flightNumber4 = $flightListArray4[0]['fD']['fN'];
					$flightAircraftNumber4 = $flightListArray4[0]['fD']['eT'];
					$flightSegmetForthKey =  $flightListArray4[0]['id'];

					$Adult_CC4 = ucfirst($flightTotalPrice4[0]['fd']['ADULT']['cc']);	
					
					$flightDateTime4 = date("D, d M Y",strtotime($flightListArray4[0]['dt']));
					$flightDepartureCode4 = $flightListArray4[0]['da']['code'];						
					$flightdepartureTime4 = date("H:i",strtotime($flightListArray4[0]['dt']));						
					$flightdepartureCityFullName4 = $flightListArray4[0]['da']['name'];
					$flightdepartureCity4 	= $flightListArray4[0]['da']['city'];
					$flightdepartureCountry4 	= $flightListArray4[0]['da']['country'];
					@$flightdepartureTerminal4 = $flightListArray4[0]['da']['terminal'];
					
					$minutes4 = $flightListArray4[0]['duration'];
								$hours4 = floor($minutes4 / 60);
								$min4 = $minutes4 - ($hours4 * 60); 
												
					$HoursMinute4 =  $hours4."h ".$min4."m" ;
					
					$FlightArrivalDate4 = date("D, d M Y",strtotime($flightListArray4[0]['at']));						
					$FlightArrivalCode4 = $flightListArray4[0]['aa']['code'];						
					$FlightArrivalTime4 = date("H:i",strtotime($flightListArray4[0]['at']));						
					$flightarrivalCityFullName4 = $flightListArray4[0]['aa']['name'];						
					$flightarrivalCity4 = $flightListArray4[0]['aa']['city'];
					$flightarrivalCountry4 = $flightListArray4[0]['aa']['country'];
					@$flightarrivalTerminal4 = $flightListArray4[0]['aa']['terminal'];
					
					$this->session->set_userdata('flightAirportName4',$flightAirportName4);
					$this->session->set_userdata('flightAirportCode4',$flightAirportCode4);
					$this->session->set_userdata('flightNumber4',$flightNumber4);
					$this->session->set_userdata('flightAircraftNumber4',$flightAircraftNumber4);
					$this->session->set_userdata('flightSegmetForthKey',$flightSegmetForthKey);
					
					
					$this->session->set_userdata('Adult_CC4',$Adult_CC4);
					
					
					$this->session->set_userdata('flightDateTime4',$flightDateTime4);
					$this->session->set_userdata('flightDepartureCode4',$flightDepartureCode4);						
					$this->session->set_userdata('flightdepartureTime4',$flightdepartureTime4);
					$this->session->set_userdata('flightdepartureCityFullName4',$flightdepartureCityFullName4);
					$this->session->set_userdata('flightdepartureCity4',$flightdepartureCity4);
					$this->session->set_userdata('flightdepartureCountry4',$flightdepartureCountry4);
					$this->session->set_userdata('flightdepartureTerminal4',$flightdepartureTerminal4);
					
					$this->session->set_userdata('HoursMinute4',$HoursMinute4);				
					
					$this->session->set_userdata('FlightArrivalDate4',$FlightArrivalDate4);
					$this->session->set_userdata('FlightArrivalCode4',$FlightArrivalCode4);
					$this->session->set_userdata('FlightArrivalTime4',$FlightArrivalTime4);
					$this->session->set_userdata('flightarrivalCityFullName4',$flightarrivalCityFullName4);
					$this->session->set_userdata('flightarrivalCity4',$flightarrivalCity4);
					$this->session->set_userdata('flightarrivalCountry4',$flightarrivalCountry4);
					$this->session->set_userdata('flightarrivalTerminal4',$flightarrivalTerminal4);
					
					
					
					
					$flightAirportCode5 = $flightListArray5[0]['fD']['aI']['code'];
					$flightAirportName5 = $flightListArray5[0]['fD']['aI']['name'];
					$flightNumber5 = $flightListArray5[0]['fD']['fN'];
					$flightAircraftNumber5 = $flightListArray5[0]['fD']['eT'];
					$flightSegmetFifthKey =  $flightListArray5[0]['id'];


					$Adult_CC5 = ucfirst($flightTotalPrice5[0]['fd']['ADULT']['cc']);	
					
					$flightDateTime5 = date("D, d M Y",strtotime($flightListArray5[0]['dt']));
					$flightDepartureCode5 = $flightListArray5[0]['da']['code'];						
					$flightdepartureTime5 = date("H:i",strtotime($flightListArray5[0]['dt']));						
					$flightdepartureCityFullName5 = $flightListArray5[0]['da']['name'];
					$flightdepartureCity5 	= $flightListArray5[0]['da']['city'];
					$flightdepartureCountry5 	= $flightListArray5[0]['da']['country'];
					@$flightdepartureTerminal5 = $flightListArray5[0]['da']['terminal'];
					
					$minutes5 = $flightListArray5[0]['duration'];
								$hours5 = floor($minutes5 / 60);
								$min5 = $minutes5 - ($hours5 * 60); 
												
					$HoursMinute5 =  $hours5."h ".$min5."m" ;
					
					$FlightArrivalDate5 = date("D, d M Y",strtotime($flightListArray5[0]['at']));						
					$FlightArrivalCode5 = $flightListArray5[0]['aa']['code'];						
					$FlightArrivalTime5 = date("H:i",strtotime($flightListArray5[0]['at']));						
					$flightarrivalCityFullName5 = $flightListArray5[0]['aa']['name'];						
					$flightarrivalCity5 = $flightListArray5[0]['aa']['city'];
					$flightarrivalCountry5 = $flightListArray5[0]['aa']['country'];
					@$flightarrivalTerminal5 = $flightListArray5[0]['aa']['terminal'];
					
					$this->session->set_userdata('flightAirportName5',$flightAirportName5);
					$this->session->set_userdata('flightAirportCode5',$flightAirportCode5);
					$this->session->set_userdata('flightNumber5',$flightNumber5);
					$this->session->set_userdata('flightAircraftNumber5',$flightAircraftNumber5);
					$this->session->set_userdata('flightSegmetFifthKey',$flightSegmetFifthKey);
					
					
					$this->session->set_userdata('Adult_CC5',$Adult_CC5);
					
					
					$this->session->set_userdata('flightDateTime5',$flightDateTime5);
					$this->session->set_userdata('flightDepartureCode5',$flightDepartureCode5);						
					$this->session->set_userdata('flightdepartureTime5',$flightdepartureTime5);
					$this->session->set_userdata('flightdepartureCityFullName5',$flightdepartureCityFullName5);
					$this->session->set_userdata('flightdepartureCity5',$flightdepartureCity5);
					$this->session->set_userdata('flightdepartureCountry5',$flightdepartureCountry5);
					$this->session->set_userdata('flightdepartureTerminal5',$flightdepartureTerminal5);
					
					$this->session->set_userdata('HoursMinute5',$HoursMinute5);				
					
					$this->session->set_userdata('FlightArrivalDate5',$FlightArrivalDate5);
					$this->session->set_userdata('FlightArrivalCode5',$FlightArrivalCode5);
					$this->session->set_userdata('FlightArrivalTime5',$FlightArrivalTime5);
					$this->session->set_userdata('flightarrivalCityFullName5',$flightarrivalCityFullName5);
					$this->session->set_userdata('flightarrivalCity5',$flightarrivalCity5);
					$this->session->set_userdata('flightarrivalCountry5',$flightarrivalCountry5);
					$this->session->set_userdata('flightarrivalTerminal5',$flightarrivalTerminal5);

					////////////////////////////////////////////////////////////////////////

					$flightAirportCode6 = $flightListArray6[0]['fD']['aI']['code'];
					$flightAirportName6 = $flightListArray6[0]['fD']['aI']['name'];
					$flightNumber6 = $flightListArray6[0]['fD']['fN'];
					$flightAircraftNumber6 = $flightListArray6[0]['fD']['eT'];
					$flightSegmetSixthKey =  $flightListArray6[0]['id'];

					$Adult_CC6 = ucfirst($flightTotalPrice6[0]['fd']['ADULT']['cc']);	
					
					$flightDateTime6 = date("D, d M Y",strtotime($flightListArray6[0]['dt']));
					$flightDepartureCode6 = $flightListArray6[0]['da']['code'];						
					$flightdepartureTime6 = date("H:i",strtotime($flightListArray6[0]['dt']));						
					$flightdepartureCityFullName6 = $flightListArray6[0]['da']['name'];
					$flightdepartureCity6 	= $flightListArray6[0]['da']['city'];
					$flightdepartureCountry6 	= $flightListArray6[0]['da']['country'];
					@$flightdepartureTerminal6 = $flightListArray6[0]['da']['terminal'];
					
					$minutes6 = $flightListArray6[0]['duration'];
								$hours6 = floor($minutes6 / 60);
								$min6 = $minutes6 - ($hours6 * 60); 
												
					$HoursMinute6 =  $hours6."h ".$min6."m" ;
					
					$FlightArrivalDate6 = date("D, d M Y",strtotime($flightListArray6[0]['at']));						
					$FlightArrivalCode6 = $flightListArray6[0]['aa']['code'];						
					$FlightArrivalTime6 = date("H:i",strtotime($flightListArray6[0]['at']));						
					$flightarrivalCityFullName6 = $flightListArray6[0]['aa']['name'];						
					$flightarrivalCity6 = $flightListArray6[0]['aa']['city'];
					$flightarrivalCountry6 = $flightListArray6[0]['aa']['country'];
					@$flightarrivalTerminal6 = $flightListArray6[0]['aa']['terminal'];
					
					$this->session->set_userdata('flightAirportName6',$flightAirportName6);
					$this->session->set_userdata('flightAirportCode6',$flightAirportCode6);
					$this->session->set_userdata('flightNumber6',$flightNumber6);
					$this->session->set_userdata('flightAircraftNumber6',$flightAircraftNumber6);
					$this->session->set_userdata('flightSegmetSixthKey',$flightSegmetSixthKey);
					
					$this->session->set_userdata('Adult_CC6',$Adult_CC6);
					
					
					$this->session->set_userdata('flightDateTime6',$flightDateTime6);
					$this->session->set_userdata('flightDepartureCode6',$flightDepartureCode6);						
					$this->session->set_userdata('flightdepartureTime6',$flightdepartureTime6);
					$this->session->set_userdata('flightdepartureCityFullName6',$flightdepartureCityFullName6);
					$this->session->set_userdata('flightdepartureCity6',$flightdepartureCity6);
					$this->session->set_userdata('flightdepartureCountry6',$flightdepartureCountry6);
					$this->session->set_userdata('flightdepartureTerminal6',$flightdepartureTerminal6);
					
					$this->session->set_userdata('HoursMinute6',$HoursMinute6);				
					
					$this->session->set_userdata('FlightArrivalDate6',$FlightArrivalDate6);
					$this->session->set_userdata('FlightArrivalCode6',$FlightArrivalCode6);
					$this->session->set_userdata('FlightArrivalTime6',$FlightArrivalTime6);
					$this->session->set_userdata('flightarrivalCityFullName6',$flightarrivalCityFullName6);
					$this->session->set_userdata('flightarrivalCity6',$flightarrivalCity6);
					$this->session->set_userdata('flightarrivalCountry6',$flightarrivalCountry6);
					$this->session->set_userdata('flightarrivalTerminal6',$flightarrivalTerminal6);
					
					
					
						} 
					
					
					//-----------------------------End Third Forth Fifth Flight----------------------------------------
					
					
					
										
					
											
					//-----------------------------Total Fare Start----------------------------------------
					
					$adult_Pax22  = $this->session->userdata('adult_user');
					$child_Pax22  = $this->session->userdata('child_user');						
					$infant_Pax22 = $this->session->userdata('infant_user');
					
														

							if($count_multiwayTripinfos == 3)
								{
							
							$adultCount = $flightTotalPrice[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childCount = $flightTotalPrice[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantCount = $flightTotalPrice[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
							
							$adultReCount = $flightTotalPrice2[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childReCount = $flightTotalPrice2[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantReCount = $flightTotalPrice2[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;	
									
							@$adultThirdCount = $flightTotalPrice3[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childThirdCount = $flightTotalPrice3[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantThirdCount = $flightTotalPrice3[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
							
	
							$grossTotal = $adultCount + $adultReCount + $adultThirdCount + $childCount + $childReCount + $childThirdCount + $infantCount + $infantReCount + $infantThirdCount;
					
								}					
							elseif($count_multiwayTripinfos == 4)
								{
							
							$adultCount = $flightTotalPrice[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childCount = $flightTotalPrice[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantCount = $flightTotalPrice[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
							
							$adultReCount = $flightTotalPrice2[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childReCount = $flightTotalPrice2[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantReCount = $flightTotalPrice2[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;	
									
							@$adultThirdCount = $flightTotalPrice3[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childThirdCount = $flightTotalPrice3[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantThirdCount = $flightTotalPrice3[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
							
							@$adultForthCount = $flightTotalPrice4[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childForthCount = $flightTotalPrice4[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantForthCount = $flightTotalPrice4[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
				
							$grossTotal = $adultCount + $adultReCount + $adultThirdCount + $adultForthCount + $childCount + $childReCount + $childThirdCount + $childForthCount + $infantCount + $infantReCount + $infantThirdCount + $infantForthCount;						
								}						
							elseif($count_multiwayTripinfos == 5)
								{
							$adultCount = $flightTotalPrice[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childCount = $flightTotalPrice[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantCount = $flightTotalPrice[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
							
							$adultReCount = $flightTotalPrice2[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childReCount = $flightTotalPrice2[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantReCount = $flightTotalPrice2[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;		
									
							@$adultThirdCount = $flightTotalPrice3[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childThirdCount = $flightTotalPrice3[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantThirdCount = $flightTotalPrice3[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
							
							@$adultForthCount = $flightTotalPrice4[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childForthCount = $flightTotalPrice4[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantForthCount = $flightTotalPrice4[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
							
							@$adultFifthCount = $flightTotalPrice5[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childFifthCount = $flightTotalPrice5[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantFifthCount = $flightTotalPrice5[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
									
							$grossTotal = $adultCount + $adultReCount + $adultThirdCount + $adultForthCount + $adultFifthCount + $childCount + $childReCount + $childThirdCount + $childForthCount + $childFifthCount + $infantCount + $infantReCount + $infantThirdCount + $infantForthCount + $infantFifthCount;							
								}elseif($count_multiwayTripinfos == 6)
								{
							$adultCount = $flightTotalPrice[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childCount = $flightTotalPrice[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantCount = $flightTotalPrice[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
							
							$adultReCount = $flightTotalPrice2[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childReCount = $flightTotalPrice2[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantReCount = $flightTotalPrice2[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;		
									
							@$adultThirdCount = $flightTotalPrice3[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childThirdCount = $flightTotalPrice3[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantThirdCount = $flightTotalPrice3[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
							
							@$adultForthCount = $flightTotalPrice4[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childForthCount = $flightTotalPrice4[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantForthCount = $flightTotalPrice4[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
							
							@$adultFifthCount = $flightTotalPrice5[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childFifthCount = $flightTotalPrice5[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantFifthCount = $flightTotalPrice5[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;

							@$adultSixthCount = $flightTotalPrice6[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childSixthCount = $flightTotalPrice6[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantSixthCount = $flightTotalPrice6[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
									
							$grossTotal = $adultCount + $adultReCount + $adultThirdCount + $adultForthCount + $adultFifthCount + $adultSixthCount + $childCount + $childReCount + $childThirdCount + $childForthCount + $childFifthCount + $childSixthCount + $infantCount + $infantReCount + $infantThirdCount + $infantForthCount + $infantFifthCount + $infantSixthCount;							
								}	else   {
									
							$adultCount = $flightTotalPrice[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childCount = $flightTotalPrice[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantCount = $flightTotalPrice[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;
							
							$adultReCount = $flightTotalPrice2[0]['fd']['ADULT']['fC']['TF'] * $adult_Pax22;
							@$childReCount = $flightTotalPrice2[0]['fd']['CHILD']['fC']['TF'] * $child_Pax22; 
							@$infantReCount = $flightTotalPrice2[0]['fd']['INFANT']['fC']['TF'] * $infant_Pax22;		
									
							
							$grossTotal = $adultCount + $adultReCount + $childCount + $childReCount +  $infantCount + $infantReCount;
	
								}
							
						//	$grossTotal = $adultCount + $adultReCount + $childCount + $childReCount +  $infantCount + $infantReCount;


							// 	$adultCont = count($tripInfoResult['totalPriceList'][0]['fd']['ADULT']);




							if($count_multiwayTripinfos == 3)
								{
									
							$adultBf = $flightTotalPrice[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childBf = $flightTotalPrice[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantBf = $flightTotalPrice[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22; 

							$adulRetBf = $flightTotalPrice2[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childReBf = $flightTotalPrice2[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantReBf = $flightTotalPrice2[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22; 
							
							$adulThirdBf = $flightTotalPrice3[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childThirdBf = $flightTotalPrice3[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantThirdBf = $flightTotalPrice3[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22;
							
							
							$adultTotalBaseFare = $adultBf + $adulRetBf + $adulThirdBf;
							$childTotalBaseFare = $childBf + $childReBf + $childThirdBf;
							$infantTotalBaseFare = $infantBf + $infantReBf + $infantThirdBf;

							$baseFareTotal = $adultBf + $childBf + $infantBf;
							$baseFareReTotal = $adultBf + $adulRetBf + $adulThirdBf +  $childBf + $childReBf + $childThirdBf + $infantBf + $infantReBf + $infantThirdBf;
									
								}
								
							elseif($count_multiwayTripinfos == 4)
								{
									
							$adultBf = $flightTotalPrice[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childBf = $flightTotalPrice[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantBf = $flightTotalPrice[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22; 

							$adulRetBf = $flightTotalPrice2[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childReBf = $flightTotalPrice2[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantReBf = $flightTotalPrice2[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22; 
							
							$adulThirdBf = $flightTotalPrice3[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childThirdBf = $flightTotalPrice3[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantThirdBf = $flightTotalPrice3[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22;
							
							$adulForthBf = $flightTotalPrice4[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childForthBf = $flightTotalPrice4[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantForthBf = $flightTotalPrice4[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22;
							
							
							$adultTotalBaseFare = $adultBf + $adulRetBf + $adulThirdBf + $adulForthBf;
							$childTotalBaseFare = $childBf + $childReBf + $childThirdBf + $childForthBf;
							$infantTotalBaseFare = $infantBf + $infantReBf + $infantThirdBf + $infantForthBf;

							$baseFareTotal = $adultBf + $childBf + $infantBf;
							$baseFareReTotal = $adultBf + $adulRetBf + $adulThirdBf + $adulForthBf +  $childBf + $childReBf + $childThirdBf  + $childForthBf + $infantBf + $infantReBf + $infantThirdBf  + $infantForthBf;
									
								}	
								
							elseif($count_multiwayTripinfos == 5)
								{
									
							$adultBf = $flightTotalPrice[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childBf = $flightTotalPrice[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantBf = $flightTotalPrice[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22; 

							$adulRetBf = $flightTotalPrice2[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childReBf = $flightTotalPrice2[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantReBf = $flightTotalPrice2[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22; 
							
							$adulThirdBf = $flightTotalPrice3[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childThirdBf = $flightTotalPrice3[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantThirdBf = $flightTotalPrice3[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22;
							
							$adulForthBf = $flightTotalPrice4[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childForthBf = $flightTotalPrice4[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantForthBf = $flightTotalPrice4[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22;
							
							$adulFifthBf = $flightTotalPrice5[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childFifthBf = $flightTotalPrice5[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantFifthBf = $flightTotalPrice5[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22;
							
							
							
							$adultTotalBaseFare = $adultBf + $adulRetBf + $adulThirdBf + $adulForthBf + $adulFifthBf;
							$childTotalBaseFare = $childBf + $childReBf + $childThirdBf + $childForthBf + $childFifthBf;
							$infantTotalBaseFare = $infantBf + $infantReBf + $infantThirdBf + $infantForthBf + $infantFifthBf;

							$baseFareTotal = $adultBf + $childBf + $infantBf;
							$baseFareReTotal = $adultBf + $adulRetBf + $adulThirdBf + $adulForthBf + $adulFifthBf  +  $childBf + $childReBf + $childThirdBf  + $childForthBf + $childFifthBf + $infantBf + $infantReBf + $infantThirdBf  + $infantForthBf + $infantFifthBf;
									
								}
								
								elseif($count_multiwayTripinfos == 6)
								{
									
							$adultBf = $flightTotalPrice[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childBf = $flightTotalPrice[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantBf = $flightTotalPrice[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22; 

							$adulRetBf = $flightTotalPrice2[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childReBf = $flightTotalPrice2[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantReBf = $flightTotalPrice2[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22; 
							
							$adulThirdBf = $flightTotalPrice3[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childThirdBf = $flightTotalPrice3[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantThirdBf = $flightTotalPrice3[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22;
							
							$adulForthBf = $flightTotalPrice4[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childForthBf = $flightTotalPrice4[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantForthBf = $flightTotalPrice4[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22;
							
							$adulFifthBf = $flightTotalPrice5[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childFifthBf = $flightTotalPrice5[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantFifthBf = $flightTotalPrice5[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22;

							$adulsixthBf = $flightTotalPrice6[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childsixthBf = $flightTotalPrice6[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantsixthBf = $flightTotalPrice6[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22;
							
							
							
							$adultTotalBaseFare = $adultBf + $adulRetBf + $adulThirdBf + $adulForthBf + $adulFifthBf + $adulsixthBf;
							$childTotalBaseFare = $childBf + $childReBf + $childThirdBf + $childForthBf + $childFifthBf + $childsixthBf;
							$infantTotalBaseFare = $infantBf + $infantReBf + $infantThirdBf + $infantForthBf + $infantFifthBf + $infantsixthBf;

							$baseFareTotal = $adultBf + $childBf + $infantBf;
							$baseFareReTotal = $adultBf + $adulRetBf + $adulThirdBf + $adulForthBf + $adulFifthBf + $adulsixthBf +  $childBf + $childReBf + $childThirdBf  + $childForthBf + $childFifthBf + $childsixthBf +  $infantBf + $infantReBf + $infantThirdBf  + $infantForthBf + $infantFifthBf + $infantsixthBf;
									
								}	
								
								else {


							$adultBf = $flightTotalPrice[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childBf = $flightTotalPrice[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantBf = $flightTotalPrice[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22; 

							$adulRetBf = $flightTotalPrice2[0]['fd']['ADULT']['fC']['BF'] * $adult_Pax22;
							@$childReBf = $flightTotalPrice2[0]['fd']['CHILD']['fC']['BF'] * $child_Pax22; 
							@$infantReBf = $flightTotalPrice2[0]['fd']['INFANT']['fC']['BF'] * $infant_Pax22; 
							
							
							$adultTotalBaseFare = $adultBf + $adulRetBf;
							$childTotalBaseFare = $childBf + $childReBf;
							$infantTotalBaseFare = $infantBf + $infantReBf;

							$baseFareTotal = $adultBf + $childBf + $infantBf;
							$baseFareReTotal = $adultBf + $adulRetBf +  $childBf + $childReBf + $infantBf + $infantReBf;
							
								}
							
							
							
							if($count_multiwayTripinfos == 3)
								{
									
							$adultTAF = $flightTotalPrice[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
							@$childTAF = $flightTotalPrice[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
							@$infantTAF = $flightTotalPrice[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;

							$adultReTAF = $flightTotalPrice2[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
							@$childReTAF = $flightTotalPrice2[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
							@$infantReTAF = $flightTotalPrice2[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
							
							
							$adultThirdTAF = $flightTotalPrice3[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
							@$childThirdTAF = $flightTotalPrice3[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
							@$infantThirdTAF = $flightTotalPrice3[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
							
							$totalTaxFare = $adultTAF + $adultReTAF + $adultThirdTAF + $childTAF + $childReTAF + $childThirdTAF + $infantTAF + $infantReTAF + $infantThirdTAF;
							
								}
							elseif($count_multiwayTripinfos == 4)
							{
									
								$adultTAF = $flightTotalPrice[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childTAF = $flightTotalPrice[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantTAF = $flightTotalPrice[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;

								$adultReTAF = $flightTotalPrice2[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childReTAF = $flightTotalPrice2[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantReTAF = $flightTotalPrice2[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
								
								
								$adultThirdTAF = $flightTotalPrice3[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childThirdTAF = $flightTotalPrice3[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantThirdTAF = $flightTotalPrice3[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
								
								$adultForthTAF = $flightTotalPrice4[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childForthTAF = $flightTotalPrice4[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantForthTAF = $flightTotalPrice4[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
								
								$totalTaxFare = $adultTAF + $adultReTAF + $adultThirdTAF + $adultForthTAF + $childTAF + $childReTAF + $childThirdTAF + $childForthTAF + $infantTAF + $infantReTAF + $infantThirdTAF + $infantForthTAF;
								
							}

							elseif($count_multiwayTripinfos == 5)
							{
									
								$adultTAF = $flightTotalPrice[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childTAF = $flightTotalPrice[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantTAF = $flightTotalPrice[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;

								$adultReTAF = $flightTotalPrice2[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childReTAF = $flightTotalPrice2[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantReTAF = $flightTotalPrice2[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
								
								
								$adultThirdTAF = $flightTotalPrice3[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childThirdTAF = $flightTotalPrice3[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantThirdTAF = $flightTotalPrice3[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
								
								$adultForthTAF = $flightTotalPrice4[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childForthTAF = $flightTotalPrice4[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantForthTAF = $flightTotalPrice4[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
								
								$adultFifthTAF = $flightTotalPrice5[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childFifthTAF = $flightTotalPrice5[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantFifthTAF = $flightTotalPrice5[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
								
								$totalTaxFare = $adultTAF + $adultReTAF + $adultThirdTAF + $adultForthTAF + $adultFifthTAF + $childTAF + $childReTAF + $childThirdTAF + $childForthTAF + $childFifthTAF + $infantTAF + $infantReTAF + $infantThirdTAF + $infantForthTAF + $infantFifthTAF;
							
							} 	
							
							
							elseif($count_multiwayTripinfos == 6)
							{
									
								$adultTAF = $flightTotalPrice[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childTAF = $flightTotalPrice[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantTAF = $flightTotalPrice[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;

								$adultReTAF = $flightTotalPrice2[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childReTAF = $flightTotalPrice2[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantReTAF = $flightTotalPrice2[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;	

								$adultThirdTAF = $flightTotalPrice3[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childThirdTAF = $flightTotalPrice3[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantThirdTAF = $flightTotalPrice3[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
								
								$adultForthTAF = $flightTotalPrice4[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childForthTAF = $flightTotalPrice4[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantForthTAF = $flightTotalPrice4[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
								
								$adultFifthTAF = $flightTotalPrice5[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childFifthTAF = $flightTotalPrice5[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantFifthTAF = $flightTotalPrice5[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;

								$adultSixthTAF = $flightTotalPrice6[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childSixthTAF = $flightTotalPrice6[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantSixthTAF = $flightTotalPrice6[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
								
								$totalTaxFare = $adultTAF + $adultReTAF + $adultThirdTAF + $adultForthTAF + $adultFifthTAF + $adultSixthTAF +  $childTAF + $childReTAF + $childThirdTAF + $childForthTAF + $childFifthTAF + $childSixthTAF + $infantTAF + $infantReTAF + $infantThirdTAF + $infantForthTAF + $infantFifthTAF + $infantSixthTAF;
							
							} 
								
							else {
							
							
								$adultTAF = $flightTotalPrice[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childTAF = $flightTotalPrice[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantTAF = $flightTotalPrice[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;

								$adultReTAF = $flightTotalPrice2[0]['fd']['ADULT']['fC']['TAF'] * $adult_Pax22;
								@$childReTAF = $flightTotalPrice2[0]['fd']['CHILD']['fC']['TAF'] * $child_Pax22; 
								@$infantReTAF = $flightTotalPrice2[0]['fd']['INFANT']['fC']['TAF'] * $infant_Pax22;
							
								$totalTaxFare = $adultTAF + $adultReTAF + $childTAF + $childReTAF + $infantTAF + $infantReTAF;
								
							}
								
								
							
							if($count_multiwayTripinfos == 3)
							{
							
								$adultAGST = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childAGST = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantAGST = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

								$adultReAGST = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childReAGST = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantReAGST = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;
								
								@$adultThirdAGST = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childThirdAGST = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantThirdAGST = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

								$totalAGST = $adultAGST + $childAGST + $infantAGST + $adultReAGST + $childReAGST + $infantReAGST + $adultThirdAGST + $childThirdAGST + $infantThirdAGST;			
									
							}	

							elseif($count_multiwayTripinfos == 4)
							{
							
								$adultAGST = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childAGST = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantAGST = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

								$adultReAGST = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childReAGST = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantReAGST = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;
								
								@$adultThirdAGST = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childThirdAGST = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantThirdAGST = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;
								
								@$adultForthAGST = $flightTotalPrice4[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childForthAGST = $flightTotalPrice4[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantForthAGST = $flightTotalPrice4[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

								$totalAGST = $adultAGST + $childAGST + $infantAGST + $adultReAGST + $childReAGST + $infantReAGST + $adultThirdAGST + $childThirdAGST + $infantThirdAGST + $adultForthAGST + $childForthAGST + $infantForthAGST;			
									
							}

							elseif($count_multiwayTripinfos == 5)
								{
							
							$adultAGST = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
							@$childAGST = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
							@$infantAGST = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

							$adultReAGST = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
							@$childReAGST = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
							@$infantReAGST = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;
							
							@$adultThirdAGST = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
							@$childThirdAGST = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
							@$infantThirdAGST = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;
							
							@$adultForthAGST = $flightTotalPrice4[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
							@$childForthAGST = $flightTotalPrice4[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
							@$infantForthAGST = $flightTotalPrice4[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;
							
							@$adultFifthAGST = $flightTotalPrice5[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
							@$childFifthAGST = $flightTotalPrice5[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
							@$infantFifthAGST = $flightTotalPrice5[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

							$totalAGST = $adultAGST + $childAGST + $infantAGST + $adultReAGST + $childReAGST + $infantReAGST + $adultThirdAGST + $childThirdAGST + $infantThirdAGST + $adultForthAGST + $childForthAGST + $infantForthAGST + $adultFifthAGST + $childFifthAGST + $infantFifthAGST;			
									
							}	
							elseif($count_multiwayTripinfos == 6)
							{
							
								$adultAGST = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childAGST = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantAGST = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

								$adultReAGST = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childReAGST = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantReAGST = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;
								
								@$adultThirdAGST = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childThirdAGST = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantThirdAGST = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;
								
								@$adultForthAGST = $flightTotalPrice4[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childForthAGST = $flightTotalPrice4[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantForthAGST = $flightTotalPrice4[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;
								
								@$adultFifthAGST = $flightTotalPrice5[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childFifthAGST = $flightTotalPrice5[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantFifthAGST = $flightTotalPrice5[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

								@$adultSixthAGST = $flightTotalPrice6[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childSixthAGST = $flightTotalPrice6[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantSixthAGST = $flightTotalPrice6[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

								$totalAGST = $adultAGST + $childAGST + $infantAGST + $adultReAGST + $childReAGST + $infantReAGST + $adultThirdAGST + $childThirdAGST + $infantThirdAGST + $adultForthAGST + $childForthAGST + $infantForthAGST + $adultFifthAGST + $childFifthAGST + $infantFifthAGST + $adultSixthAGST + $childSixthAGST + $infantSixthAGST;  			
									
							}							
							else {
							
								$adultAGST = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childAGST = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantAGST = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

								$adultReAGST = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adult_Pax22;
								@$childReAGST = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['AGST'] * $child_Pax22; 
								@$infantReAGST = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infant_Pax22;

								$totalAGST = $adultAGST + $childAGST + $infantAGST + $adultReAGST + $childReAGST + $infantReAGST;	

							}

								
								
							if($count_multiwayTripinfos == 3)
							{
									
								$adultMFT = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childMFT = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantMFT = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

								$adultReMFT = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childReMFT = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantReMFT = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;
								
								$adultThirdMFT = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childThirdMFT = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantThirdMFT = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

								$totalMFT = $adultMFT + $childMFT + $infantMFT + $adultReMFT + $childReMFT + $infantReMFT + $adultThirdMFT + $childThirdMFT + $infantThirdMFT;
									
							}
								
							elseif($count_multiwayTripinfos == 4)
							{
								
								$adultMFT = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childMFT = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantMFT = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

								$adultReMFT = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childReMFT = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantReMFT = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;
								
								$adultThirdMFT = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childThirdMFT = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantThirdMFT = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;
								
								$adultForthMFT = $flightTotalPrice4[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childForthMFT = $flightTotalPrice4[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantForthMFT = $flightTotalPrice4[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

								$totalMFT = $adultMFT + $childMFT + $infantMFT + $adultReMFT + $childReMFT + $infantReMFT + $adultThirdMFT + $childThirdMFT + $infantThirdMFT + $adultForthMFT + $childForthMFT + $infantForthMFT;
								
							}									
								
							elseif($count_multiwayTripinfos == 5)
							{
									
								$adultMFT = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childMFT = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantMFT = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

								$adultReMFT = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childReMFT = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantReMFT = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;
								
								$adultThirdMFT = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childThirdMFT = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantThirdMFT = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;
								
								$adultForthMFT = $flightTotalPrice4[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childForthMFT = $flightTotalPrice4[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantForthMFT = $flightTotalPrice4[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;
								
								$adultFifthMFT = $flightTotalPrice5[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childFifthMFT = $flightTotalPrice5[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantFifthMFT = $flightTotalPrice5[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

								$totalMFT = $adultMFT + $childMFT + $infantMFT + $adultReMFT + $childReMFT + $infantReMFT + $adultThirdMFT + $childThirdMFT + $infantThirdMFT + $adultForthMFT + $childForthMFT + $infantForthMFT + $adultFifthMFT + $childFifthMFT + $childFifthMFT;
									
							}
								
							elseif($count_multiwayTripinfos == 6)
							{
									
								$adultMFT = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childMFT = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantMFT = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

								$adultReMFT = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childReMFT = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantReMFT = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;
								
								$adultThirdMFT = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childThirdMFT = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantThirdMFT = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;
								
								$adultForthMFT = $flightTotalPrice4[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childForthMFT = $flightTotalPrice4[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantForthMFT = $flightTotalPrice4[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;
								
								$adultFifthMFT = $flightTotalPrice5[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childFifthMFT = $flightTotalPrice5[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantFifthMFT = $flightTotalPrice5[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

								$adultSixthMFT = $flightTotalPrice6[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childSixthMFT = $flightTotalPrice6[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantSixthMFT = $flightTotalPrice6[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

								$totalMFT = $adultMFT + $childMFT + $infantMFT + $adultReMFT + $childReMFT + $infantReMFT + $adultThirdMFT + $childThirdMFT + $infantThirdMFT + $adultForthMFT + $childForthMFT + $infantForthMFT + $adultFifthMFT + $childFifthMFT + $childFifthMFT + $adultSixthMFT + $childSixthMFT + $infantSixthMFT;
									
							}
								
							else {
						
								$adultMFT = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childMFT = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantMFT = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

								$adultReMFT = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adult_Pax22;
								@$childReMFT = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['MFT'] * $child_Pax22; 
								@$infantReMFT = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infant_Pax22;

								$totalMFT = $adultMFT + $childMFT + $infantMFT + $adultReMFT + $childReMFT + $infantReMFT;
								
								
							}
								
								
						if($count_multiwayTripinfos == 3)
							{
								
							$adultMF = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childMF = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantMF = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

							$adultReMF = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childReMF = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantReMF = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;
							
							@$adultThirdMF = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childThirdMF = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantThirdMF = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

								$totalMF = $adultMF + $childMF + $infantMF + $adultReMF + $childReMF + $infantReMF + $adultThirdMF + $childThirdMF + $infantThirdMF;	

							}

						elseif($count_multiwayTripinfos == 4)
							{
								
							$adultMF = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childMF = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantMF = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

							$adultReMF = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childReMF = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantReMF = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;
							
							@$adultThirdMF = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childThirdMF = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantThirdMF = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;
							
							@$adultForthMF = $flightTotalPrice4[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childForthMF = $flightTotalPrice4[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantForthMF = $flightTotalPrice4[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

								$totalMF = $adultMF + $childMF + $infantMF + $adultReMF + $childReMF + $infantReMF + $adultThirdMF + $childThirdMF + $infantThirdMF + $adultForthMF + $childForthMF + $infantForthMF;	

							}		
								
						elseif($count_multiwayTripinfos == 5)
						{
								
							$adultMF = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childMF = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantMF = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

							$adultReMF = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childReMF = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantReMF = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;
							
							@$adultThirdMF = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childThirdMF = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantThirdMF = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;
							
							@$adultForthMF = $flightTotalPrice4[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childForthMF = $flightTotalPrice4[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantForthMF = $flightTotalPrice4[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;
							
							@$adultFifthMF = $flightTotalPrice5[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childFifthMF = $flightTotalPrice5[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantFifthMF = $flightTotalPrice5[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

							$totalMF = $adultMF + $childMF + $infantMF + $adultReMF + $childReMF + $infantReMF + $adultThirdMF + $childThirdMF + $infantThirdMF + $adultForthMF + $childForthMF + $infantForthMF + $adultFifthMF + $childFifthMF + $infantFifthMF;	

						}

						elseif($count_multiwayTripinfos == 6)
						{
								
							$adultMF = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childMF = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantMF = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

							$adultReMF = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childReMF = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantReMF = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;
							
							@$adultThirdMF = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childThirdMF = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantThirdMF = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;
							
							@$adultForthMF = $flightTotalPrice4[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childForthMF = $flightTotalPrice4[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantForthMF = $flightTotalPrice4[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;
							
							@$adultFifthMF = $flightTotalPrice5[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childFifthMF = $flightTotalPrice5[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantFifthMF = $flightTotalPrice5[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

							@$adultSixthMF = $flightTotalPrice6[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childSixthMF = $flightTotalPrice6[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantSixthMF = $flightTotalPrice6[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

							$totalMF = $adultMF + $childMF + $infantMF + $adultReMF + $childReMF + $infantReMF + $adultThirdMF + $childThirdMF + $infantThirdMF + $adultForthMF + $childForthMF + $infantForthMF + $adultFifthMF + $childFifthMF + $infantFifthMF + $adultSixthMF + $childSixthMF + $infantSixthMF;	

						}
																
						else 
						{
						
							$adultMF = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childMF = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantMF = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

							$adultReMF = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['MF'] * $adult_Pax22;
							@$childReMF = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['MF'] * $child_Pax22; 
							@$infantReMF = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['MF'] * $infant_Pax22;

							$totalMF = $adultMF + $childMF + $infantMF + $adultReMF + $childReMF + $infantReMF;
							
						}	
								
								
						if($count_multiwayTripinfos == 3)
						{
								
							$adultOT = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childOT = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantOT = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;

							$adultReOT = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childReOT = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantReOT = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;
							
							@$adultThirdOT = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childThirdOT = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantThirdOT = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;

							$totalOT = $adultOT + $childOT + $infantOT + $adultReOT + $childReOT + $infantReOT + $adultThirdOT + $childThirdOT + $infantThirdOT;	

						}

						elseif($count_multiwayTripinfos == 4)
						{
								
							$adultOT = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childOT = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantOT = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;

							$adultReOT = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childReOT = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantReOT = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;
							
							@$adultThirdOT = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childThirdOT = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantThirdOT = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;
							
							@$adultForthOT = $flightTotalPrice4[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childForthOT = $flightTotalPrice4[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantForthOT = $flightTotalPrice4[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;

								$totalOT = $adultOT + $childOT + $infantOT + $adultReOT + $childReOT + $infantReOT + $adultThirdOT + $childThirdOT + $infantThirdOT + $adultForthOT + $childForthOT + $infantForthOT;	

						}	

						elseif($count_multiwayTripinfos == 5)
						{
								
							$adultOT = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childOT = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantOT = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;

							$adultReOT = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childReOT = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantReOT = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;
							
							@$adultThirdOT = $flightTotalPrice3[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childThirdOT = $flightTotalPrice3[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantThirdOT = $flightTotalPrice3[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;
							
							@$adultForthOT = $flightTotalPrice4[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childForthOT = $flightTotalPrice4[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantForthOT = $flightTotalPrice4[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;
							
							
							@$adultFifthOT = $flightTotalPrice5[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childFifthOT = $flightTotalPrice5[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantFifthOT = $flightTotalPrice5[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;

							@$adultSixthOT = $flightTotalPrice6[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childSixthOT = $flightTotalPrice6[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantSixthOT = $flightTotalPrice6[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;

							$totalOT = $adultOT + $childOT + $infantOT + $adultReOT + $childReOT + $infantReOT + $adultThirdOT + $childThirdOT + $infantThirdOT + $adultForthOT + $childForthOT + $infantForthOT + $adultFifthOT + $childFifthOT + $infantFifthOT + $adultSixthOT + $childSixthOT + $infantSixthOT;	

						}	
								
						else {	

							$adultOT = $flightTotalPrice[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childOT = $flightTotalPrice[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantOT = $flightTotalPrice[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;

							$adultReOT = $flightTotalPrice2[0]['fd']['ADULT']['afC']['TAF']['OT'] * $adult_Pax22;
							@$childReOT = $flightTotalPrice2[0]['fd']['CHILD']['afC']['TAF']['OT'] * $child_Pax22; 
							@$infantReOT = $flightTotalPrice2[0]['fd']['INFANT']['afC']['TAF']['OT'] * $infant_Pax22;

							$totalOT = $adultOT + $childOT + $infantOT + $adultReOT + $childReOT + $infantReOT;
		
						}
					
					
					
					$this->session->set_userdata('baseFareReTotal',$baseFareReTotal);
					$this->session->set_userdata('adultTotalBaseFare',$adultTotalBaseFare);
					$this->session->set_userdata('childTotalBaseFare',$childTotalBaseFare);
					$this->session->set_userdata('infantTotalBaseFare',$infantTotalBaseFare);
					$this->session->set_userdata('totalTaxFare',$totalTaxFare);						
					
					$this->session->set_userdata('totalAGST',$totalAGST);
					$this->session->set_userdata('totalMFT',$totalMFT);
					$this->session->set_userdata('totalMF',$totalMF);
					$this->session->set_userdata('totalOT',$totalOT);
					$this->session->set_userdata('grossTotal',$grossTotal);	
					$this->session->set_userdata('totalGrossAmount',$totalGrossAmount);
					$this->session->set_userdata('totalBaggageMeal',$totalBaggageMeal);	
					
				

	
				$data=$this->comman_data();
	
				$data['passengersdetailsReview']=$this->Flights_page->passengers_detailsReview($bookingId);
				$data['booking_flights']=$this->Flights_page->booking_flightsReview();
				$data['tripInfoResult'] = $segmentList;	
				$data['tripInfoResultReturn'] = $segmentListReturn;		
				$data['tripInfoResultThird'] = @$segmentListThird;	
				$data['tripInfoResultForth'] = @$segmentListForth;	
				$data['tripInfoResultFifth'] = @$segmentListFifth;	
				$data['tripInfoResultSixth'] = @$segmentListSixth;
				$data['totalGrossAmount'] = $totalGrossAmount;
				$data['totalBaggageMeal'] = $totalBaggageMeal;		
			
			}else if($_POST['flightType'] == 'international'){

				$priceId= array($flightId);
				$ch = $this->getFlightDetails($priceId);
				$result = curl_exec($ch);
				$response_array = json_decode($result, true);
				curl_close($ch);


				if(count(@$response_array['tripInfos']) > 0){

					$fre = 0;
					$flightReviewArr = array();
					$totalGrossFare = 0;
					$finaladultTotalBaseFare = 0;
					$finalchildTotalBaseFare = 0;
					$finalinfantTotalBaseFare = 0;
					$finaltotalTaxFare = 0;
					$finalbaseFareTotal = 0;
					$finaltotalAGST = 0;
					$finaltotalMFT = 0;
					$finaltotalMF = 0;
					$finaltotalOT = 0;
					$finaltotalYQ = 0;
					$finaltotalYR = 0;
		
					foreach ($response_array['tripInfos'] as $key => $flightReview) {
		
						$segmentList = $flightReview['sI'];
						$tripPriceList =  $flightReview['totalPriceList'];
						
						$adultPax = $_SESSION['adult_user'];
						$childPax = $_SESSION['child_user'];
						$infantPax = $_SESSION['infant_user'];
		
						$fsi = 0; 
						$segmentListArr = array();
		
						foreach ($segmentList as $key => $segVal) {
		
							if($segVal['stops'] > 0){
		
								$segmentListArr[$fsi]['segmentId'] = $segVal['id'];
								$segmentListArr[$fsi]['segmentCode'] = $segVal['fD']['aI']['code'];
								$segmentListArr[$fsi]['segmentName'] = $segVal['fD']['aI']['name'];
								$segmentListArr[$fsi]['segmentNumber'] = $segVal['fD']['fN'];
								$segmentListArr[$fsi]['segmentEtNo'] = $segVal['fD']['eT'];
		
								$segmentListArr[$fsi]['segmentdeptAirCode'] = $segVal['da']['code'];
								$segmentListArr[$fsi]['segmentdeptAirName'] = $segVal['da']['name'];
								$segmentListArr[$fsi]['segmentdeptCityCode'] = $segVal['da']['cityCode'];
								$segmentListArr[$fsi]['segmentdeptCityName'] = $segVal['da']['city'];
								$segmentListArr[$fsi]['segmentdeptCountry'] = $segVal['da']['country'];
								$segmentListArr[$fsi]['segmentdeptCountryCode'] = $segVal['da']['countryCode'];
								$segmentListArr[$fsi]['segmentdeptTerminal'] = @$segVal['da']['terminal'];
		
								$segmentListArr[$fsi]['segmentArriveAirCode'] = $segVal['aa']['code'];
								$segmentListArr[$fsi]['segmentArriveAirName'] = $segVal['aa']['name'];
								$segmentListArr[$fsi]['segmentArriveCityCode'] = $segVal['aa']['cityCode'];
								$segmentListArr[$fsi]['segmentArriveCityName'] = $segVal['aa']['city'];
								$segmentListArr[$fsi]['segmentArriveCountry'] = $segVal['aa']['country'];
								$segmentListArr[$fsi]['segmentArriveCountryCode'] = $segVal['aa']['countryCode'];
								$segmentListArr[$fsi]['segmentArriveTerminal'] = @$segVal['aa']['terminal'];
		
								$segmentListArr[$fsi]['segmentdeptDateNTime'] = $segVal['dt'];
								$segmentListArr[$fsi]['segmentArriveDateNTime'] = $segVal['at'];
		
								$segmentListArr[$fsi]['segmentDuration'] = $segVal['duration'];
		
								$segmentListArr[$fsi]['segmentConnectingTime'] = @$segVal['cT'];
		
								$segmentListArr[$fsi]['segmentNo'] = $segVal['sN'];
		
								$segmentListArr[$fsi]['segmentisRs'] = $segVal['isRs'];
		
								$segmentListArr[$fsi]['segmentNextDay'] = $segVal['iand'];
								
								$segmentListArr[$fsi]['flightStop'] = $segVal['stops'];
		
								$frist = 0;
								foreach ($segVal['so'] as $key => $flightStopValue) {
		
									$segmentListArr[$fsi]['flightStopArr'][$frist]['flightStopAirCode'] = $flightStopValue['code'];
									$segmentListArr[$fsi]['flightStopArr'][$frist]['flightStopAirName'] = $flightStopValue['name'];
									$segmentListArr[$fsi]['flightStopArr'][$frist]['flightStopCityCode'] = $flightStopValue['cityCode'];
									$segmentListArr[$fsi]['flightStopArr'][$frist]['flightStopCityName'] = $flightStopValue['city'];
									$segmentListArr[$fsi]['flightStopArr'][$frist]['flightStopCountryName'] = $flightStopValue['country'];
									$segmentListArr[$fsi]['flightStopArr'][$frist]['flightStopCountryCode'] = $flightStopValue['countryCode'];
									
									$frist++;
								}
								
		
								
							}else{
		
								$segmentListArr[$fsi]['segmentId'] = $segVal['id'];
								$segmentListArr[$fsi]['segmentCode'] = $segVal['fD']['aI']['code'];
								$segmentListArr[$fsi]['segmentName'] = $segVal['fD']['aI']['name'];
								$segmentListArr[$fsi]['segmentNumber'] = $segVal['fD']['fN'];
								$segmentListArr[$fsi]['segmentEtNo'] = $segVal['fD']['eT'];
		
								$segmentListArr[$fsi]['segmentdeptAirCode'] = $segVal['da']['code'];
								$segmentListArr[$fsi]['segmentdeptAirName'] = $segVal['da']['name'];
								$segmentListArr[$fsi]['segmentdeptCityCode'] = $segVal['da']['cityCode'];
								$segmentListArr[$fsi]['segmentdeptCityName'] = $segVal['da']['city'];
								$segmentListArr[$fsi]['segmentdeptCountry'] = $segVal['da']['country'];
								$segmentListArr[$fsi]['segmentdeptCountryCode'] = $segVal['da']['countryCode'];
								$segmentListArr[$fsi]['segmentdeptTerminal'] = @$segVal['da']['terminal'];
		
								$segmentListArr[$fsi]['segmentArriveAirCode'] = $segVal['aa']['code'];
								$segmentListArr[$fsi]['segmentArriveAirName'] = $segVal['aa']['name'];
								$segmentListArr[$fsi]['segmentArriveCityCode'] = $segVal['aa']['cityCode'];
								$segmentListArr[$fsi]['segmentArriveCityName'] = $segVal['aa']['city'];
								$segmentListArr[$fsi]['segmentArriveCountry'] = $segVal['aa']['country'];
								$segmentListArr[$fsi]['segmentArriveCountryCode'] = $segVal['aa']['countryCode'];
								$segmentListArr[$fsi]['segmentArriveTerminal'] = @$segVal['aa']['terminal'];
		
								$segmentListArr[$fsi]['segmentdeptDateNTime'] = $segVal['dt'];
								$segmentListArr[$fsi]['segmentArriveDateNTime'] = $segVal['at'];
		
								$segmentListArr[$fsi]['segmentDuration'] = $segVal['duration'];
		
								$segmentListArr[$fsi]['segmentConnectingTime'] = @$segVal['cT'];
		
								$segmentListArr[$fsi]['segmentNo'] = $segVal['sN'];
		
								$segmentListArr[$fsi]['segmentisRs'] = $segVal['isRs'];
		
								$segmentListArr[$fsi]['segmentNextDay'] = $segVal['iand'];
		
								if(!empty($segVal['ssrInfo'])){
									
									if(!empty($segVal['ssrInfo']['BAGGAGE'])){
		
										$segmentListArr[$fsi]['baggageInfo'] = $segVal['ssrInfo']['BAGGAGE'];
		
									}
									if(!empty($segVal['ssrInfo']['MEAL'])){
		
										$segmentListArr[$fsi]['mealInfo']  = $segVal['ssrInfo']['MEAL'];
		
									}
									
								}	
		
							}	
		
							$fsi++; 
						
						}
						//	die;
						error_reporting(0);
						$price=0;
						$priceList = array();
						$grossTotal = 0;
						$adultTotalBaseFare = 0;
						$childTotalBaseFare = 0;
						$infantTotalBaseFare = 0;
						$totalTaxFare = 0;
						$baseFareTotal = 0;
						$totalAGST = 0;
						$totalMFT = 0;
						$totalMF = 0;
						$totalOT = 0;
						$totalYR = 0;
						$totalYQ =0 ;
		
						foreach ($tripPriceList as $key => $priceVal) {
		
							//echo "<pre>"; print_r($priceVal);
		
							$priceList[$price]['adultBaseFare'] = @$priceVal['fd']['ADULT']['fC']['BF'];
							$priceList[$price]['adultNetFare'] = $priceVal['fd']['ADULT']['fC']['NF'];
							$priceList[$price]['adultTotalFare'] = $priceVal['fd']['ADULT']['fC']['TF'];
							$priceList[$price]['adultTotalTaxFare'] = $priceVal['fd']['ADULT']['fC']['TAF'];
							$priceList[$price]['adultAGST'] = @$priceVal['fd']['ADULT']['afC']['TAF']['AGST'];
							$priceList[$price]['adultMF'] = @$priceVal['fd']['ADULT']['afC']['TAF']['MF'];
							$priceList[$price]['adultMFT'] = @$priceVal['fd']['ADULT']['afC']['TAF']['MFT'];
							$priceList[$price]['adultOT'] = @$priceVal['fd']['ADULT']['afC']['TAF']['OT'];
							$priceList[$price]['adultYQ'] = @$priceVal['fd']['ADULT']['afC']['TAF']['YQ'];
		
							$priceList[$price]['adultSeatRemaining'] = $priceVal['fd']['ADULT']['sR'];
							$priceList[$price]['adultBaggageInfo'] = $priceVal['fd']['ADULT']['bI']['iB'];
							$priceList[$price]['adultBaggageCabin'] = $priceVal['fd']['ADULT']['bI']['cB'];
		
							$priceList[$price]['adultRefundableType'] = $priceVal['fd']['ADULT']['rT'];
							$priceList[$price]['adultCabinClassFare'] = $priceVal['fd']['ADULT']['cc'];
		
							$priceList[$price]['adultClassOfBooking'] = $priceVal['fd']['ADULT']['cB'];
							$priceList[$price]['adultFareBasis'] = $priceVal['fd']['ADULT']['fB'];
		
							if(!empty($priceVal['fd']['CHILD'])){
		
								$priceList[$price]['childBaseFare'] = @$priceVal['fd']['CHILD']['fC']['BF'];
								$priceList[$price]['childNetFare'] = $priceVal['fd']['CHILD']['fC']['NF'];
								$priceList[$price]['childTotalFare'] = $priceVal['fd']['CHILD']['fC']['TF'];
								$priceList[$price]['childTotalTaxFare'] = $priceVal['fd']['CHILD']['fC']['TAF'];
								$priceList[$price]['childAGST'] = @$priceVal['fd']['CHILD']['afC']['TAF']['AGST'];
								$priceList[$price]['childMF'] = @$priceVal['fd']['CHILD']['afC']['TAF']['MF'];
								$priceList[$price]['childMFT'] = @$priceVal['fd']['CHILD']['afC']['TAF']['MFT'];
								$priceList[$price]['childOT'] = @$priceVal['fd']['CHILD']['afC']['TAF']['OT'];
								$priceList[$price]['childYQ'] = @$priceVal['fd']['CHILD']['afC']['TAF']['YQ'];
		
								$priceList[$price]['childSeatRemaining'] = $priceVal['fd']['CHILD']['sR'];
								$priceList[$price]['childBaggageInfo'] = $priceVal['fd']['CHILD']['bI']['iB'];
								$priceList[$price]['childBaggageCabin'] = $priceVal['fd']['CHILD']['bI']['cB'];
		
								$priceList[$price]['childRefundableType'] = $priceVal['fd']['CHILD']['rT'];
								$priceList[$price]['childCabinClassFare'] = $priceVal['fd']['CHILD']['cc'];
		
								$priceList[$price]['childClassOfBooking'] = $priceVal['fd']['CHILD']['cB'];
								$priceList[$price]['childFareBasis'] = $priceVal['fd']['CHILD']['fB'];
		
							}
		
							if(!empty($priceVal['fd']['INFANT'])){
		
								$priceList[$price]['infantBaseFare'] = @$priceVal['fd']['INFANT']['fC']['BF'];
								$priceList[$price]['infantNetFare'] = $priceVal['fd']['INFANT']['fC']['NF'];
								$priceList[$price]['infantTotalFare'] = $priceVal['fd']['INFANT']['fC']['TF'];
								$priceList[$price]['infantTotalTaxFare'] = $priceVal['fd']['INFANT']['fC']['TAF'];
								$priceList[$price]['infantAGST'] = @$priceVal['fd']['INFANT']['afC']['TAF']['AGST'];
								$priceList[$price]['infantMF'] = @$priceVal['fd']['INFANT']['afC']['TAF']['MF'];
								$priceList[$price]['infantMFT'] = @$priceVal['fd']['INFANT']['afC']['TAF']['MFT'];
								$priceList[$price]['infantOT'] = @$priceVal['fd']['INFANT']['afC']['TAF']['OT'];
								$priceList[$price]['infantYQ'] = @$priceVal['fd']['INFANT']['afC']['TAF']['YQ'];
		
								$priceList[$price]['infanteatRemaining'] = $priceVal['fd']['INFANT']['sR'];
								$priceList[$price]['infantBaggageInfo'] = $priceVal['fd']['INFANT']['bI']['iB'];
								$priceList[$price]['infantBaggageCabin'] = $priceVal['fd']['INFANT']['bI']['cB'];
		
								$priceList[$price]['infantRefundableType'] = $priceVal['fd']['INFANT']['rT'];
								$priceList[$price]['infantCabinClassFare'] = $priceVal['fd']['INFANT']['cc'];
		
								$priceList[$price]['infantClassOfBooking'] = $priceVal['fd']['INFANT']['cB'];
								$priceList[$price]['infantFareBasis'] = $priceVal['fd']['INFANT']['fB'];
		
							}
		
							$priceList[$price]['totalFare'] = $priceVal['fd']['ADULT']['fC']['TF'] * $adultPax + @$priceVal['fd']['CHILD']['fC']['TF'] * @$childPax + @$priceVal['fd']['INFANT']['fC']['TF'] * @$infantPax;
		
							$priceList[$price]['fareIdentifier'] = $priceVal['fareIdentifier'];
		
							$priceList[$price]['priceId'] = $priceVal['id'];

							$adultCount = $priceVal['fd']['ADULT']['fC']['TF'] * $adultPax;
							@$childCount = $priceVal['fd']['CHILD']['fC']['TF'] * $childPax; 
							@$infantCount = $priceVal['fd']['INFANT']['fC']['TF'] * $infantPax;
									
							$grossTotal = $adultCount + $childCount +  $infantCount;                        

							$adultBf = $priceVal['fd']['ADULT']['fC']['BF'] * $adultPax;
							@$childBf = $priceVal['fd']['ADULT']['fC']['BF'] * $childPax; 
							@$infantBf =$priceVal['fd']['ADULT']['fC']['BF'] * $infantPax; 

							$adultTotalBaseFare = $adultBf;
							$childTotalBaseFare = $childBf;
							$infantTotalBaseFare = $infantBf;

							$baseFareTotal = $adultBf + $childBf + $infantBf;
							$baseFareReTotal = $adultBf +  $childBf + $infantBf;	
							
							$adultTAF = $priceVal['fd']['ADULT']['fC']['TAF'] * $adultPax;
							@$childTAF = $priceVal['fd']['CHILD']['fC']['TAF'] * $childPax; 
							@$infantTAF = $priceVal['fd']['INFANT']['fC']['TAF'] * $infantPax;

							$totalTaxFare = $adultTAF  + $childTAF + $infantTAF;
							
							@$adultAGST = $priceVal['fd']['ADULT']['afC']['TAF']['AGST'] * $adultPax;
							@$childAGST = $priceVal['fd']['CHILD']['afC']['TAF']['AGST'] * $childPax; 
							@$infantAGST = $priceVal['fd']['INFANT']['afC']['TAF']['AGST'] * $infantPax;

							$totalAGST = $adultAGST + $childAGST + $infantAGST;

							$adultMFT = $priceVal['fd']['ADULT']['afC']['TAF']['MFT'] * $adultPax;
							@$childMFT = $priceVal['fd']['CHILD']['afC']['TAF']['MFT'] * $childPax; 
							@$infantMFT = $priceVal['fd']['INFANT']['afC']['TAF']['MFT'] * $infantPax;

							$totalMFT = $adultMFT + $childMFT + $infantMFT;

							$adultMF = $priceVal['fd']['ADULT']['afC']['TAF']['MF'] * $adultPax;
							@$childMF = $priceVal['fd']['CHILD']['afC']['TAF']['MF'] * $childPax; 
							@$infantMF = $priceVal['fd']['INFANT']['afC']['TAF']['MF'] * $infantPax;

							$totalMF = $adultMF + $childMF + $infantMF;

							$adultOT = $priceVal['fd']['ADULT']['afC']['TAF']['OT'] * $adultPax;
							@$childOT = $priceVal['fd']['CHILD']['afC']['TAF']['OT'] * $childPax; 
							@$infantOT = $priceVal['fd']['INFANT']['afC']['TAF']['OT'] * $infantPax;
				
							$totalOT = $adultOT + $childOT + $infantOT;

							$adultYQ = $priceVal['fd']['ADULT']['afC']['TAF']['YQ'] * $adultPax;
							@$childYQ = $priceVal['fd']['CHILD']['afC']['TAF']['YQ'] * $childPax; 
							@$infantYQ = $priceVal['fd']['INFANT']['afC']['TAF']['YQ'] * $infantPax;
				
							$totalYQ = $adultYQ + $childYQ + $infantYQ;

							$adultYR = $priceVal['fd']['ADULT']['afC']['TAF']['YR'] * $adultPax;
							@$childYR = $priceVal['fd']['CHILD']['afC']['TAF']['YR'] * $childPax; 
							@$infantYR = $priceVal['fd']['INFANT']['afC']['TAF']['YR'] * $infantPax;
				
							$totalYR = $adultYR + $childYR + $infantYR;
		
		
							$price++;
		
						}
		
						//echo $grossTotal; die;

						
						
						$flightReviewArr[$fre]['segmentLists']  = $segmentListArr;
						$flightReviewArr[$fre]['priceList']  = $priceList;
						
						$totalGrossFare = $totalGrossFare + $grossTotal;
						$finaladultTotalBaseFare = $finaladultTotalBaseFare + $adultTotalBaseFare;
						$finalchildTotalBaseFare = $finalchildTotalBaseFare + $childTotalBaseFare;
						$finalinfantTotalBaseFare = $finalinfantTotalBaseFare + $infantTotalBaseFare;
						$finaltotalTaxFare = $finaltotalTaxFare + $totalTaxFare;
						$finalbaseFareTotal = $finalbaseFareTotal + $baseFareTotal;
						$finaltotalAGST = $finaltotalAGST + $totalAGST;
						$finaltotalMFT = $finaltotalMFT + $totalMFT;
						$finaltotalMF = $finaltotalMF + $totalMF;
						$finaltotalOT = $finaltotalOT + $totalOT;
						$finaltotalYQ = $finaltotalYQ + $totalYQ;
						$finaltotalYR = $finaltotalYR + $totalYR;


						$fre++; 
					}

				//	echo $totalGrossFare; die;

						$this->session->set_userdata('baseFareTotal',$finalbaseFareTotal);
						$this->session->set_userdata('adultTotalBaseFare',$finaladultTotalBaseFare);
						$this->session->set_userdata('childTotalBaseFare',$finalchildTotalBaseFare);
						$this->session->set_userdata('infantTotalBaseFare',$finalinfantTotalBaseFare);
						$this->session->set_userdata('totalTaxFare',$finaltotalTaxFare);	
						$this->session->set_userdata('grossTotal',$totalGrossFare);

						$this->session->set_userdata('totalAGST',$finaltotalAGST);
						$this->session->set_userdata('totalMFT',$finaltotalMFT);
						$this->session->set_userdata('totalMF',$finaltotalMF);
						$this->session->set_userdata('totalOT',$finaltotalOT);
						$this->session->set_userdata('totalYR',$finaltotalYR);
						$this->session->set_userdata('totalYQ',$finaltotalYQ);
						$this->session->set_userdata('bookingType',$flightType);
						// $this->session->set_userdata('grossTotal',$grossTotal);	
						// $this->session->set_userdata('totalGrossAmount',$totalGrossAmount);
						// $this->session->set_userdata('totalBaggageMeal',$totalBaggageMeal);	
						// $this->session->set_userdata('totalwithSeat',$totalWithSeat);
						// $this->session->set_userdata('adultSeatNo',$adultSeatNo);	
						// $this->session->set_userdata('childSeatNo',$childSeatNo);

		
				}else{
		
					echo "no key passed";
		
				}
		
				$data['adultPax'] = $adultPax;
				$data['childPax'] = $childPax;
				$data['infantPax'] = $infantPax;		
				$data['flighttotalPriceInfo'] = $response_array['totalPriceInfo'];
				$data['flightCheckoutReviewList'] = $flightReviewArr;
				$data['getCountryList']=$this->Flights_page->getCountryList();
				$data['flights_checkout']=$this->Flights_page->flights_checkout();
				$data['bookingType'] = 'international';
				$data['tripConditions'] = $response_array['conditions'];
				$data['bookingId'] = $response_array['bookingId'];
				$data['seatMapInfo'] = $response_array1['tripSeatMap']['tripSeat'];
				$data['passengersdetailsReview']=$this->Flights_page->passengers_detailsReview($bookingId);
				$data['booking_flights']=$this->Flights_page->booking_flightsReview();


			}				
			else
			{
				echo "Flights are not available";
			}

		}
		if($flightType == 'international'){
			
			$this->load->view('booking_flights_review_international',$data);

		}else{

			$this->load->view('booking_flights_review',$data);

		}
		
	}
	
/*	public function booking_flights_review($bookingId)
	{

		$data=$this->comman_data();
	  
	    $this->load->model('Flights_page');	   
	   
	    $data['passengersdetailsReview']=$this->Flights_page->passengers_detailsReview($bookingId);
	    $data['booking_flights']=$this->Flights_page->booking_flightsReview();

	    $this->load->view('booking_flights_review',$data);   
   
	}
	*/
	
	public function booking_flights_payment()
	{

		$data=$this->comman_data();
	  
		$this->load->model('Flights_page');
		$data['booking_flights']=$this->Flights_page->booking_flightsPayment();
		
		

		$this->load->view('booking_flights_payment',$data);
   
   
	}
	
	public function booking_flights_success(){

		$data=$this->comman_data();
	  
	   $this->load->model('Flights_page');
	   
	//   	echo "<pre>"; print_r($_SESSION); die;
		$passengers_compleleteDetail=$this->Flights_page->passengers_compleleteDetails($this->session->userdata('bookingId'));


		// if(!empty($_SESSION['totalGrossAmount'])){

		// 	$paymentInfos = array(
		// 		array('amount' => $_SESSION['totalGrossAmount'])
		// 	);
		// }else{ 

			$paymentInfos = array(
				array('amount' => $_SESSION['grossTotal'])
			);
	
		//}
			
		if($_SESSION['bookingType'] == 'O'){

			foreach($passengers_compleleteDetail as $key => $rows_data)
			{
				if($rows_data['passport_number'] != '') {

					$travelInfo[] = array(
								'ti' => $rows_data['title'],
								'fN' => $rows_data['firstMiddlename'],
								'lN' => $rows_data['lastName'],
								'pt' => $rows_data['paxType'],							
								'dob' => $rows_data['dob'],
								'pNat' =>$rows_data['passport_nationality'],
								'pNum' => $rows_data['passport_number'],
								'eD' => $rows_data['expirydate'],
								'pid'=>  $rows_data['issuedate'],			
							);
					

				}else if(empty($rows_data['baggage']) ||  empty($rows_data['meals']) ||  $rows_data['paxType'] == 'INFANT') {	
				
					if($rows_data['paxType'] == 'INFANT') {					
						$travelInfo[] = array(
									'ti' => $rows_data['title'],
									'fN' => $rows_data['firstMiddlename'],
									'lN' => $rows_data['lastName'],
									'pt' => $rows_data['paxType'],							
									'dob' => $rows_data['dob']					
								);
					}
					else{
						$travelInfo[] = array(
									'ti' => $rows_data['title'],
									'fN' => $rows_data['firstMiddlename'],
									'lN' => $rows_data['lastName'],
									'pt' => $rows_data['paxType']
																				
								);
						
					}
				}else if($rows_data['baggage'] != '' || $rows_data['meals'] != '' || $rows_data['paxType']!='INFANT') {	

					

					list($bagcode, $bagamount, $bagdesc) = explode('~', $rows_data['baggage']);
					list($mealcode, $mealamount, $mealdesc) = explode('~', $rows_data['meals']);	

					// list($bagreturncode, $bagreturnamount, $bagreturndesc) = explode('~', $rows_data['baggage_return']);
					// list($mealreturncode, $mealreturnamount, $mealreturndesc) = explode('~', $rows_data['meals_return']);					

					$travelInfo[] = array(
						'ti' => $rows_data['title'],
						'fN' => $rows_data['firstMiddlename'],
						'lN' => $rows_data['lastName'],
						'pt' => $rows_data['paxType'],

						'ssrBaggageInfos' =>  array( array(

							'key' => $_SESSION['flightSegmetKey'],
							'code' => $bagcode,

							// 'key' => $_SESSION['flightSegmetReturnKey'],
							// 'code' => $bagreturncode,

						)),	
						'ssrMealInfos' => array( array(

							'key' => $_SESSION['flightSegmetKey'],
							'code' => $mealcode,

							// 'key' => $_SESSION['flightSegmetReturnKey'],
							// 'code' => $mealreturncode,


						)),													
					);

				}else if($rows_data['baggage'] != '' || $rows_data['meals'] != '' || $rows_data['paxType'] =='INFANT') {	

			 

					if($rows_data['paxType'] != 'INFANT') {		

						list($bagcode, $bagamount, $bagdesc) = explode('~', $rows_data['baggage']);
						list($mealcode, $mealamount, $mealdesc) = explode('~', $rows_data['meals']);	
						// list($bagreturncode, $bagreturnamount, $bagreturndesc) = explode('~', $rows_data['baggage_return']);
						// list($mealreturncode, $mealreturnamount, $mealreturndesc) = explode('~', $rows_data['meals_return']);						

						$travelInfo[] = array(
							'ti' => $rows_data['title'],
							'fN' => $rows_data['firstMiddlename'],
							'lN' => $rows_data['lastName'],
							'pt' => $rows_data['paxType'],

							'ssrBaggageInfos' =>  array( array(

								'key' => $_SESSION['flightSegmetKey'],
								'code' => $bagcode,
		
								// 'key' => $_SESSION['flightSegmetReturnKey'],
								// 'code' => $bagreturncode,
		
							)),	
							'ssrMealInfos' => array( array(
		
								'key' => $_SESSION['flightSegmetKey'],
								'code' => $mealcode,
		
								// 'key' => $_SESSION['flightSegmetReturnKey'],
								// 'code' => $mealreturncode,
		
		
							)),																
						);
					}else{ 
					//	echo "no baggage but no infant"; echo "<br>"; 
						$travelInfo[] = array(
							'ti' => $rows_data['title'],
							'fN' => $rows_data['firstMiddlename'],
							'lN' => $rows_data['lastName'],
							'pt' => $rows_data['paxType'],
							'dob' => $rows_data['dob']	
																		
						);

					}			

				}	

			}

		}else if($_SESSION['bookingType'] == 'R'){

			foreach($passengers_compleleteDetail as $key => $rows_data)
			{
				if($rows_data['passport_number'] != '') {

					$travelInfo[] = array(
								'ti' => $rows_data['title'],
								'fN' => $rows_data['firstMiddlename'],
								'lN' => $rows_data['lastName'],
								'pt' => $rows_data['paxType'],							
								'dob' => $rows_data['dob'],
								'pNat' =>$rows_data['passport_nationality'],
								'pNum' => $rows_data['passport_number'],
								'eD' => $rows_data['expirydate'],
								'pid'=>  $rows_data['issuedate'],			
							);
					

				}else if(empty($rows_data['baggage']) ||  empty($rows_data['baggage_return']) ||  empty($rows_data['meals']) ||  empty($rows_data['meals_return']) ||  $rows_data['paxType'] == 'INFANT') {	
				
					if($rows_data['paxType'] == 'INFANT') {					
						$travelInfo[] = array(
									'ti' => $rows_data['title'],
									'fN' => $rows_data['firstMiddlename'],
									'lN' => $rows_data['lastName'],
									'pt' => $rows_data['paxType'],							
									'dob' => $rows_data['dob']					
								);
					}
					else{
						$travelInfo[] = array(
									'ti' => $rows_data['title'],
									'fN' => $rows_data['firstMiddlename'],
									'lN' => $rows_data['lastName'],
									'pt' => $rows_data['paxType']
																				
								);
						
					}
				}else if($rows_data['baggage'] != '' || $rows_data['baggage_return'] != '' || $rows_data['meals'] != '' || $rows_data['meals_return'] != '' || $rows_data['paxType']!='INFANT') {	

					

					list($bagcode, $bagamount, $bagdesc) = explode('~', $rows_data['baggage']);
					list($mealcode, $mealamount, $mealdesc) = explode('~', $rows_data['meals']);	

					list($bagreturncode, $bagreturnamount, $bagreturndesc) = explode('~', $rows_data['baggage_return']);
					list($mealreturncode, $mealreturnamount, $mealreturndesc) = explode('~', $rows_data['meals_return']);					

					$travelInfo[] = array(
						'ti' => $rows_data['title'],
						'fN' => $rows_data['firstMiddlename'],
						'lN' => $rows_data['lastName'],
						'pt' => $rows_data['paxType'],

						'ssrBaggageInfos' =>  array( array(

							'key' => $_SESSION['flightSegmetKey'],
							'code' => $bagcode,

							'key' => $_SESSION['flightSegmetReturnKey'],
							'code' => $bagreturncode,

						)),	
						'ssrMealInfos' => array( array(

							'key' => $_SESSION['flightSegmetKey'],
							'code' => $mealcode,

							'key' => $_SESSION['flightSegmetReturnKey'],
							'code' => $mealreturncode,


						)),													
					);

				}else if($rows_data['baggage'] != '' || $rows_data['baggage_return'] != '' || $rows_data['meals'] != '' || $rows_data['meals_return'] != '' || $rows_data['paxType'] =='INFANT') {	

			 

					if($rows_data['paxType'] != 'INFANT') {		

						list($bagcode, $bagamount, $bagdesc) = explode('~', $rows_data['baggage']);
						list($mealcode, $mealamount, $mealdesc) = explode('~', $rows_data['meals']);	

						list($bagreturncode, $bagreturnamount, $bagreturndesc) = explode('~', $rows_data['baggage_return']);
						list($mealreturncode, $mealreturnamount, $mealreturndesc) = explode('~', $rows_data['meals_return']);						

						$travelInfo[] = array(
							'ti' => $rows_data['title'],
							'fN' => $rows_data['firstMiddlename'],
							'lN' => $rows_data['lastName'],
							'pt' => $rows_data['paxType'],

							'ssrBaggageInfos' =>  array( array(

								'key' => $_SESSION['flightSegmetKey'],
								'code' => $bagcode,
		
								'key' => $_SESSION['flightSegmetReturnKey'],
								'code' => $bagreturncode,
		
							)),	
							'ssrMealInfos' => array( array(
		
								'key' => $_SESSION['flightSegmetKey'],
								'code' => $mealcode,
		
								'key' => $_SESSION['flightSegmetReturnKey'],
								'code' => $mealreturncode,
		
		
							)),																
						);
					}else{ 
						$travelInfo[] = array(
							'ti' => $rows_data['title'],
							'fN' => $rows_data['firstMiddlename'],
							'lN' => $rows_data['lastName'],
							'pt' => $rows_data['paxType'],
							'dob' => $rows_data['dob']	
																		
						);

					}			

				}	

			}
		}
		else if($_SESSION['bookingType'] == 'international'){
		//	echo "<pre>"; print_r($passengers_compleleteDetail); die;
			foreach($passengers_compleleteDetail as $key => $rows_data)
			{
				if($rows_data['passport_number'] != '') {

					$travelInfo[] = array(
								'ti' => $rows_data['title'],
								'fN' => $rows_data['firstMiddlename'],
								'lN' => $rows_data['lastName'],
								'pt' => $rows_data['paxType'],							
								'dob' => $rows_data['dob'],
								'pNat' =>$rows_data['passport_nationality'],
								'pNum' => $rows_data['passport_number'],
								'eD' => $rows_data['expirydate'],
								'pid'=>  $rows_data['issuedate'],			
							);
					

				}else if(empty($rows_data['baggage']) ||  empty($rows_data['baggage_return']) ||  empty($rows_data['meals']) ||  empty($rows_data['meals_return']) ||  $rows_data['paxType'] == 'INFANT') {	
				
					if($rows_data['paxType'] == 'INFANT') {					
						$travelInfo[] = array(
									'ti' => $rows_data['title'],
									'fN' => $rows_data['firstMiddlename'],
									'lN' => $rows_data['lastName'],
									'pt' => $rows_data['paxType'],							
									'dob' => $rows_data['dob']					
								);
					}
					else{
						$travelInfo[] = array(
									'ti' => $rows_data['title'],
									'fN' => $rows_data['firstMiddlename'],
									'lN' => $rows_data['lastName'],
									'pt' => $rows_data['paxType']
																				
								);
						
					}
				}else if($rows_data['baggage'] != '' || $rows_data['baggage_return'] != '' || $rows_data['meals'] != '' || $rows_data['meals_return'] != '' || $rows_data['paxType']!='INFANT') {	

					

					list($bagcode, $bagamount, $bagdesc) = explode('~', $rows_data['baggage']);
					list($mealcode, $mealamount, $mealdesc) = explode('~', $rows_data['meals']);	

					list($bagreturncode, $bagreturnamount, $bagreturndesc) = explode('~', $rows_data['baggage_return']);
					list($mealreturncode, $mealreturnamount, $mealreturndesc) = explode('~', $rows_data['meals_return']);					

					$travelInfo[] = array(
						'ti' => $rows_data['title'],
						'fN' => $rows_data['firstMiddlename'],
						'lN' => $rows_data['lastName'],
						'pt' => $rows_data['paxType'],

						'ssrBaggageInfos' =>  array( array(

							'key' => $_SESSION['flightSegmetKey'],
							'code' => $bagcode,

							'key' => $_SESSION['flightSegmetReturnKey'],
							'code' => $bagreturncode,

						)),	
						'ssrMealInfos' => array( array(

							'key' => $_SESSION['flightSegmetKey'],
							'code' => $mealcode,

							'key' => $_SESSION['flightSegmetReturnKey'],
							'code' => $mealreturncode,


						)),													
					);

				}else if($rows_data['baggage'] != '' || $rows_data['baggage_return'] != '' || $rows_data['meals'] != '' || $rows_data['meals_return'] != '' || $rows_data['paxType'] =='INFANT') {	

			 

					if($rows_data['paxType'] != 'INFANT') {		

						list($bagcode, $bagamount, $bagdesc) = explode('~', $rows_data['baggage']);
						list($mealcode, $mealamount, $mealdesc) = explode('~', $rows_data['meals']);	

						list($bagreturncode, $bagreturnamount, $bagreturndesc) = explode('~', $rows_data['baggage_return']);
						list($mealreturncode, $mealreturnamount, $mealreturndesc) = explode('~', $rows_data['meals_return']);						

						$travelInfo[] = array(
							'ti' => $rows_data['title'],
							'fN' => $rows_data['firstMiddlename'],
							'lN' => $rows_data['lastName'],
							'pt' => $rows_data['paxType'],

							'ssrBaggageInfos' =>  array( array(

								'key' => $_SESSION['flightSegmetKey'],
								'code' => $bagcode,
		
								'key' => $_SESSION['flightSegmetReturnKey'],
								'code' => $bagreturncode,
		
							)),	
							'ssrMealInfos' => array( array(
		
								'key' => $_SESSION['flightSegmetKey'],
								'code' => $mealcode,
		
								'key' => $_SESSION['flightSegmetReturnKey'],
								'code' => $mealreturncode,
		
		
							)),																
						);
					}else{ 
						$travelInfo[] = array(
							'ti' => $rows_data['title'],
							'fN' => $rows_data['firstMiddlename'],
							'lN' => $rows_data['lastName'],
							'pt' => $rows_data['paxType'],
							'dob' => $rows_data['dob']	
																		
						);

					}			

				}	

			}
		}

		else if($_SESSION['bookingType'] == 'M'){

			//echo "<pre>"; print_r($passengers_compleleteDetail); die;

			foreach($passengers_compleleteDetail as $key => $rows_data)
			{
				//echo "<pre>"; print_r($rows_data); 

				if($rows_data['passport_number'] != '') {

					$travelInfo[] = array(
								'ti' => $rows_data['title'],
								'fN' => $rows_data['firstMiddlename'],
								'lN' => $rows_data['lastName'],
								'pt' => $rows_data['paxType'],							
								'dob' => $rows_data['dob'],
								'pNat' =>$rows_data['passport_nationality'],
								'pNum' => $rows_data['passport_number'],
								'eD' => $rows_data['expirydate'],
								'pid'=>  $rows_data['issuedate'],			
							);
					

				}else if(empty($rows_data['baggage']) ||  empty($rows_data['baggage_return']) ||  empty($rows_data['baggage_third']) ||  empty($rows_data['baggage_forth']) ||  empty($rows_data['baggage_fifth']) ||  empty($rows_data['baggage_sixth']) ||  empty($rows_data['meals']) ||  empty($rows_data['meals_return']) ||  empty($rows_data['meals_third']) ||  empty($rows_data['meals_forth']) ||  empty($rows_data['meals_fifth']) ||  empty($rows_data['meals_sixth']) ||  $rows_data['paxType'] == 'INFANT') {	
				//	echo "bhanu"; 
					if($rows_data['paxType'] == 'INFANT') {					
						$travelInfo[] = array(
									'ti' => $rows_data['title'],
									'fN' => $rows_data['firstMiddlename'],
									'lN' => $rows_data['lastName'],
									'pt' => $rows_data['paxType'],							
									'dob' => $rows_data['dob']					
								);
					}
					else{
						$travelInfo[] = array(
									'ti' => $rows_data['title'],
									'fN' => $rows_data['firstMiddlename'],
									'lN' => $rows_data['lastName'],
									'pt' => $rows_data['paxType']
																				
								);
						
					}
				}else if($rows_data['baggage'] != '' || $rows_data['baggage_return'] != '' || $rows_data['baggage_third'] != '' || $rows_data['baggage_forth'] != '' || $rows_data['baggage_fifth'] != '' || $rows_data['baggage_sixth'] != '' || $rows_data['meals'] != '' || $rows_data['meals_return'] != '' || $rows_data['meals_third'] != '' || $rows_data['meals_forth'] != '' || $rows_data['meals_fifth'] != '' || $rows_data['meals_sixth'] != ''  || $rows_data['paxType']!='INFANT') {	

					

					list($bagcode, $bagamount, $bagdesc) = explode('~', $rows_data['baggage']);
					list($mealcode, $mealamount, $mealdesc) = explode('~', $rows_data['meals']);	

					list($bagreturncode, $bagreturnamount, $bagreturndesc) = explode('~', $rows_data['baggage_return']);
					list($mealreturncode, $mealreturnamount, $mealreturndesc) = explode('~', $rows_data['meals_return']);	
					
					list($bagthirdcode, $bagthirdamount, $bagthirddesc) = explode('~', $rows_data['baggage_third']);
					list($mealthirdcode, $mealthirdamount, $mealthirddesc) = explode('~', $rows_data['meals_third']);

					list($bagforthcode, $bagforthamount, $bagforthdesc) = explode('~', $rows_data['baggage_forth']);
					list($mealforthcode, $mealforthamount, $mealforthdesc) = explode('~', $rows_data['meals_forth']);

					list($bagfifthcode, $bagfifthamount, $bagfifthdesc) = explode('~', $rows_data['baggage_fifth']);
					list($mealfifthcode, $mealfifthamount, $mealfifthdesc) = explode('~', $rows_data['meals_fifth']);

					list($bagsixthcode, $bagsixthamount, $bagsixthdesc) = explode('~', $rows_data['baggage_sixth']);
					list($mealsixthcode, $mealsixthamount, $mealsixthdesc) = explode('~', $rows_data['meals_sixth']);

					$travelInfo[] = array(
						'ti' => $rows_data['title'],
						'fN' => $rows_data['firstMiddlename'],
						'lN' => $rows_data['lastName'],
						'pt' => $rows_data['paxType'],

						'ssrBaggageInfos' =>  array( array(

							'key' => $_SESSION['flightSegmetKey'],
							'code' => $bagcode,

							'key' => $_SESSION['flightSegmetReturnKey'],
							'code' => $bagreturncode,

							'key' => $_SESSION['flightSegmetThirdKey'],
							'code' => $bagthirdcode,

							'key' => $_SESSION['flightSegmetForthKey'],
							'code' => $bagforthcode,

							'key' => $_SESSION['flightFifthKey'],
							'code' => $bagfifthcode,

							'key' => $_SESSION['flightSegmetSixthKey'],
							'code' => $bagsixthcode,

						)),	
						'ssrMealInfos' => array( array(

							'key' => $_SESSION['flightSegmetKey'],
							'code' => $mealcode,

							'key' => $_SESSION['flightSegmetReturnKey'],
							'code' => $mealreturncode,

							'key' => $_SESSION['flightSegmetThirdKey'],
							'code' => $mealthirdcode,

							'key' => $_SESSION['flightSegmetForthKey'],
							'code' => $mealforthcode,

							'key' => $_SESSION['flightFifthKey'],
							'code' => $mealfifthcode,

							'key' => $_SESSION['flightSegmetSixthKey'],
							'code' => $mealsixthcode,


						)),													
					);

				}else if($rows_data['baggage'] != ''  || $rows_data['baggage_return'] != '' || $rows_data['baggage_third'] != '' || $rows_data['baggage_forth'] != '' || $rows_data['baggage_fifth'] != '' || $rows_data['baggage_sixth'] != '' || $rows_data['meals'] != '' || $rows_data['meals_return'] != '' || $rows_data['meals_third'] != '' || $rows_data['meals_forth'] != '' || $rows_data['meals_fifth'] != '' || $rows_data['meals_sixth'] != '' || $rows_data['paxType'] =='INFANT') {	

			 

					if($rows_data['paxType'] != 'INFANT') {		

						list($bagcode, $bagamount, $bagdesc) = explode('~', $rows_data['baggage']);
						list($mealcode, $mealamount, $mealdesc) = explode('~', $rows_data['meals']);	

						list($bagreturncode, $bagreturnamount, $bagreturndesc) = explode('~', $rows_data['baggage_return']);
						list($mealreturncode, $mealreturnamount, $mealreturndesc) = explode('~', $rows_data['meals_return']);
						
						list($bagthirdcode, $bagthirdamount, $bagthirddesc) = explode('~', $rows_data['baggage_third']);
						list($mealthirdcode, $mealthirdamount, $mealthirddesc) = explode('~', $rows_data['meals_third']);

						list($bagforthcode, $bagforthamount, $bagforthdesc) = explode('~', $rows_data['baggage_forth']);
						list($mealforthcode, $mealforthamount, $mealforthdesc) = explode('~', $rows_data['meals_forth']);

						list($bagfifthcode, $bagfifthamount, $bagfifthdesc) = explode('~', $rows_data['baggage_fifth']);
						list($mealfifthcode, $mealfifthamount, $mealfifthdesc) = explode('~', $rows_data['meals_fifth']);

						list($bagsixthcode, $bagsixthamount, $bagsixthdesc) = explode('~', $rows_data['baggage_sixth']);
						list($mealsixthcode, $mealsixthamount, $mealsixthdesc) = explode('~', $rows_data['meals_sixth']);

						$travelInfo[] = array(
							'ti' => $rows_data['title'],
							'fN' => $rows_data['firstMiddlename'],
							'lN' => $rows_data['lastName'],
							'pt' => $rows_data['paxType'],

							'ssrBaggageInfos' =>  array( array(

								'key' => $_SESSION['flightSegmetKey'],
								'code' => $bagcode,
	
								'key' => $_SESSION['flightSegmetReturnKey'],
								'code' => $bagreturncode,
	
								'key' => $_SESSION['flightSegmetThirdKey'],
								'code' => $bagthirdcode,
	
								'key' => $_SESSION['flightSegmetForthKey'],
								'code' => $bagforthcode,
	
								'key' => $_SESSION['flightFifthKey'],
								'code' => $bagfifthcode,
	
								'key' => $_SESSION['flightSegmetSixthKey'],
								'code' => $bagsixthcode,
	
							)),	
							'ssrMealInfos' => array( array(
	
								'key' => $_SESSION['flightSegmetKey'],
								'code' => $mealcode,
	
								'key' => $_SESSION['flightSegmetReturnKey'],
								'code' => $mealreturncode,
	
								'key' => $_SESSION['flightSegmetThirdKey'],
								'code' => $mealthirdcode,
	
								'key' => $_SESSION['flightSegmetForthKey'],
								'code' => $mealforthcode,
	
								'key' => $_SESSION['flightFifthKey'],
								'code' => $mealfifthcode,
	
								'key' => $_SESSION['flightSegmetSixthKey'],
								'code' => $mealsixthcode,
	
	
							)),																										
						);
					}else{ 
					//	echo "no baggage but no infant"; echo "<br>"; 
						$travelInfo[] = array(
							'ti' => $rows_data['title'],
							'fN' => $rows_data['firstMiddlename'],
							'lN' => $rows_data['lastName'],
							'pt' => $rows_data['paxType'],
							'dob' => $rows_data['dob']	
																		
						);

					}			

				}	

			}
		}

		// foreach($passengers_compleleteDetail as $key => $rows_data)
		// {
		// 	if($rows_data['gst_registration_no'] != '' || $rows_data['gst_company_name'] != '' || $rows_data['gst_registered_email']!=''|| $rows_data['gst_registered_phone_no'] != '' || $rows_data['gst_registered_address']!='') {	

		// 		$gstInfo =array(
		// 			'gstNumber' => $rows_data['gst_registration_no'],
		// 			'email' => $rows_data['gst_registered_email'],
		// 			'registeredName' =>$rows_data['gst_company_name'],
		// 			'mobile' => $rows_data['gst_registered_phone_no'],	
		// 			'address' => $rows_data['gst_registered_address']				
		
		// 			);

		// 	}
		// }				
	
		
		$deliveryInfo = array(
				'emails' => array($_SESSION['users_email']),
				'contacts' => array($_SESSION['users_countryCode'].''.$_SESSION['users_mobile'])
			);
	   
	   
		$response_array11 = array(

			'bookingId'	=> $_SESSION['bookingId'],
			'paymentInfos' => $paymentInfos,
			'travellerInfo' => $travelInfo,
			//'gstInfo' => $gstInfo,
			'deliveryInfo' => $deliveryInfo
	   	   
		);   
	  
		
		//	echo "<pre>"; print_r($response_array11); die;

	   $result_bookings = $this->payment($response_array11);
	   
	   	$result = curl_exec($result_bookings);
		$response_arrays = json_decode($result, true);
		curl_close($result_bookings);

		//echo "<pre>"; print_r($result); die;
		
		
		$booking_Id = $response_arrays['bookingId'];	
		
		$result_bookings_Id = $this->booking_details($booking_Id);
		
		$bookingResult = curl_exec($result_bookings_Id);
		$booking_response_arrays = json_decode($bookingResult, true);
		curl_close($result_bookings_Id);
	
		$adultpax11   = $this->session->userdata('adult_user');
		$child_Pax11  = $this->session->userdata('child_user');						
		$infant_Pax11 = $this->session->userdata('infant_user');

		$user_id1 = $this->session->userdata('user_id');
		
	if($this->session->userdata('flightdepartureCity')!='' && $this->session->userdata('flightdepartureCity2')!='' && $this->session->userdata('flightdepartureCity3')!='' && $this->session->userdata('flightdepartureCity4')!='' && $this->session->userdata('flightdepartureCity5')!='' && $this->session->userdata('flightdepartureCity6')!='') 
	{ 	
		$twoway_flightBooking = $this->Flights_page->multiwayFifth_flight_booking($booking_response_arrays,$adultpax11,$child_Pax11,$infant_Pax11,$user_id1);
		
	}
	
	elseif($this->session->userdata('flightdepartureCity')!='' && $this->session->userdata('flightdepartureCity2')!='' && $this->session->userdata('flightdepartureCity3')!='' && $this->session->userdata('flightdepartureCity4')!='' && $this->session->userdata('flightdepartureCity5')!='') 
	{ 	

		$twoway_flightBooking = $this->Flights_page->multiwayFifth_flight_booking($booking_response_arrays,$adultpax11,$child_Pax11,$infant_Pax11,$user_id1);
	
	}
	elseif($this->session->userdata('flightdepartureCity')!='' && $this->session->userdata('flightdepartureCity2')!='' && $this->session->userdata('flightdepartureCity3')!='' && $this->session->userdata('flightdepartureCity4')!='') 
	{ 	
		$twoway_flightBooking = $this->Flights_page->multiwayForth_flight_booking($booking_response_arrays,$adultpax11,$child_Pax11,$infant_Pax11,$user_id1);
	
	}
	elseif($this->session->userdata('flightdepartureCity')!='' && $this->session->userdata('flightdepartureCity2')!='' && $this->session->userdata('flightdepartureCity3')!='') 
	{ 	
		$twoway_flightBooking = $this->Flights_page->multiwayThird_flight_booking($booking_response_arrays,$adultpax11,$child_Pax11,$infant_Pax11,$user_id1);
	
	}
	
	elseif($this->session->userdata('flightdepartureCity')!='' && $this->session->userdata('flightdepartureCity2')!='') 
	{ 	
		$twoway_flightBooking = $this->Flights_page->twoway_flight_booking($booking_response_arrays,$adultpax11,$child_Pax11,$infant_Pax11,$user_id1);
	
	}
	elseif($this->session->userdata('flightdepartureCity')!='' && $this->session->userdata('flightdepartureCity2')=='') 
	{ 	
		$oneway_flightBooking = $this->Flights_page->oneway_flight_booking($booking_response_arrays,$adultpax11,$child_Pax11,$infant_Pax11,$user_id1);
	
	} 
	
	
			   
		$data['passengersdetailsSuccess']=$this->Flights_page->passengers_detailsSuccess($this->session->userdata('bookingId'));
		$data['totalPrice'] = $_SESSION['grossTotal']; 
		$data['booking_flights']=$this->Flights_page->booking_flightssuccess();

		return $data; 

		//$this->load->view('booking_flights_success',$data);
			   
   
	}
	
	
	public function payment($response_array=NULL) 
	{
		$priceIds11 = json_encode($response_array);		
		
	//	echo "<pre>";print_r($priceIds11); die;					
	
		$url = 'https://apitest.tripjack.com/oms/v1/air/book';
		
		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $priceIds11);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));

		return $ch; 
		
		
	} 
	
	
	public function booking_details($booking_Id)
	{
		
		$bookingIds11 = json_encode(array('bookingId'=>$booking_Id));
		
		//  echo "<pre>"; print_r($bookingIds11);
		// die();
		
		
		$url = 'https://apitest.tripjack.com/oms/v1/booking-details';
		
		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $bookingIds11);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));

		return $ch;
		
		
	}
	
	public function flight_multiway(){

		$data=$this->comman_data();
		$this->load->model('Flights_page') ;
		$flightId =$this->uri->segment(3);
		$flightIds =$this->uri->segment(4);

		$priceId= array($flightId,$flightIds);
	  
		$ch = $this->getFlightDetails($priceId);
		
		$result = curl_exec($ch);
		$response_array = json_decode($result, true);
		curl_close($ch);

		//echo '<pre>'; print_r($response_array); die;

		$data['tripInfoResult'] = $response_array['tripInfos'][0];
		$data['tripInfoResultReturn'] = $response_array['tripInfos'][1];

		$data['flights_checkout']=$this->Flights_page->flights_checkout();
		
		$data['bookingType'] = 'R';		
		
		$data['bookingId'] = $response_array['bookingId'];

		$this->load->view('flight_checkout',$data);

	
		
	}


	public function getFlightDetailsByPriceId(){

		//print_r($_POST);

		$priceId = $this->input->post('priceId');
		$adultTotalFare = $this->input->post('adultTotalFare');
		$adultBaseFare = $this->input->post('adultBaseFare');
		$adultTaxFare = $this->input->post('adultTaxFare');
		$countadultPax = $this->input->post('totalAdult');

		$childBaseFare = $this->input->post('childBaseFare');
		$childTaxFare = $this->input->post('childTaxFare');
		$countchildPax = $this->input->post('totalChild');

		$infantBaseFare = $this->input->post('infantBaseFare');
		$infantTaxFare = $this->input->post('infantTaxFare');
		$countinfantPax = $this->input->post('totalInfant');

		$adultPax = array(

			'priceId' => $priceId,
			'adultTotalFare' => $adultTotalFare,
			'adultBaseFare' => $adultBaseFare,
			'adultTaxFare' => $adultTaxFare,
			'countadultPax' => $countadultPax

		);

		$childPax = array(

			'childBaseFare' => $childBaseFare,
			'childTaxFare' => $childTaxFare,
			'countchildPax' => $countchildPax

		);

		$infantPax = array(

			'infantBaseFare' => $infantBaseFare,
			'infantTaxFare' => $infantTaxFare,
			'countinfantPax' => $countinfantPax

		);

		$response_array = array("adultList" => $adultPax , "childList" => $childPax , "infantList" => $infantPax);

		$data =array();

		$data['priceinfo'] =  $response_array;
		$this->load->view('flight_info',$data);

	}


	public function getFlightBaggageInfoByPriceId(){

		//echo '<pre>'; print_r($_POST); die;
		 
		$priceId = $this->input->post('priceId');
		$adultCheckinBaggage = $this->input->post('adultCheckinBaggage');
		$childCheckinBaggage = $this->input->post('childCheckinBaggage');
		$adultCabinBaggage = $this->input->post('adultCabinBaggage');
		$childCabinBaggage = $this->input->post('childCabinBaggage');
		$infantCabinBaggage = $this->input->post('infantCabinBaggage');
		$airportCode = $this->input->post('airportCode');
		$departureCode = $this->input->post('departureCode');

		$response_array = array(

			'adultCheckinBaggage' => $adultCheckinBaggage,
			'childCheckinBaggage' => $childCheckinBaggage,
			'adultCabinBaggage' => $adultCabinBaggage,
			'childCabinBaggage' => $childCabinBaggage,
			'infantCabinBaggage' => $infantCabinBaggage,
			'airportCode' => $airportCode,
			'departureCode' => $departureCode,
			'priceId' => $priceId

		);

		$data =array();

		$data['baggageInfo'] =  $response_array;
		$this->load->view('flight_baggage_info',$data);



	}

	public function getFlightFareRuleByPriceId(){

		$priceId = $this->input->post('priceId');
		$departureCity = $this->input->post('departureCity');
		$arrivalCity = $this->input->post('arrivalCity');

		$flowType = 'REVIEW';

		$fareRule = array('id' => $priceId, 'flowType' => $flowType);

		$ch = $this->getFareRule($fareRule);

		$result = curl_exec($ch);
		$response_array = json_decode($result, true);
		curl_close($ch);

		//echo "<pre>"; print_r($response_array); die;
		
		$fareData = $response_array['fareRule']; 

		$data = array();

		$data['fareRule'] = $fareData;
		$data['departureCity'] = $departureCity;
		$data['arrivalCity'] = $arrivalCity;


		$this->load->view('flight_fareinfo',$data);


	}

	public function getFareRule($fareRule){


		$priceIds = json_encode($fareRule);
	
		//echo "<pre>"; print_r($priceIds); die;

		$url = 'https://apitest.tripjack.com/fms/v1/farerule';
		
		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $priceIds);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));

		return $ch;

		
	}


	public function SingleFlight(){

		if($_POST['bookingType'] == 'O'){
			
			$data=$this->comman_data();	   
			$this->load->model('Flights_page');

			$deptDate = date("Y-m-d", strtotime($_POST['departure_date']));

			$dept = $this->input->post('departure');
			$desti = $this->input->post('destination');
			$departureDate = $this->input->post('departure_date');
			$adultPax = $this->input->post('adultPax');
			$childPax = $this->input->post('childPax');
			$infantPax = $this->input->post('infantPax');

			preg_match('#\((.*?)\)#', $dept, $match);
			$departure =  $match[1];


			preg_match('#\((.*?)\)#', $desti, $match);
			$destination =  $match[1];
		
			if($this->session->userdata('flightdepartureCity2')!='')
			{
				$this->session->unset_userdata('flightdepartureCity2');					
			
			}
			
			if($this->session->userdata('flightdepartureCity3')!='')
			{
				$this->session->unset_userdata('flightdepartureCity3');					
				
			}
			
			if($this->session->userdata('flightdepartureCity4')!='')
			{
				$this->session->unset_userdata('flightdepartureCity4');					
				
			}
			
			if($this->session->userdata('flightdepartureCity5')!='')
			{
				$this->session->unset_userdata('flightdepartureCity5');					
				//	die();
			}
			
			
			$this->session->set_userdata('adult_user',$adultPax);
			$this->session->set_userdata('child_user',$childPax);
			$this->session->set_userdata('infant_user',$infantPax);
			
			//	die();
			$travelClass = $this->input->post('travelClass');

			if (!empty($_POST["directFlight"])) {

				$directFlight = $_POST["directFlight"];
			}	else{

				$directFlight = "false";
			}

			if (!empty($_POST["creditShell"])) {

				$creditShell = $_POST["creditShell"];
			}	else{

				$creditShell = "false";
			}

			
			
			$paxinfo = array(


				'ADULT' => $_POST['adultPax'],
				'CHILD' => $_POST['childPax'],
				'INFANT' => $_POST['infantPax'],

			);

			$requestData = array(

				'cabinClass' => $_POST['travelClass'],
				'paxInfo' => $paxinfo,
				'routeInfos' =>array( 
					array(
						'fromCityOrAirport' => array(
						
							'code' => $departure,
				
						),
						'toCityOrAirport' => array(
						
							'code' => $destination,
				
						),
						'travelDate' => $deptDate,
					)
					),
						'searchModifiers' => array('isDirectFlight' => $directFlight,'isConnectingFlight' => $creditShell),
					

			);

			
		$ch = $this->callAPI($requestData);
		$result = curl_exec($ch);
		$response_array = json_decode($result, true);

		$flightArray = array();
		$flightFareDetails = array();
		$flightPriceAray = array();
		$totalPriceArray = array();


		if(empty(!$response_array['searchResult'])){

			$flightArray = $response_array['searchResult']['tripInfos']['ONWARD'];
			$totalFlight = count($flightArray); 
			$farr=0;
			$parrentFlight = array();

			foreach ($flightArray as $key => $flightValue) {

				$flightListArray =  $flightValue['sI'];
				$flightPriceListArray =  $flightValue['totalPriceList'];
				$totalPriceArr = count($flightPriceListArray);				

				$parrentFlight[$farr]['flightName'] = $flightListArray[0]['fD']['aI']['name'];
				$parrentFlight[$farr]['flghtCode'] = $flightListArray[0]['fD']['aI']['code'];
				$parrentFlight[$farr]['flghtName'] = $flightListArray[0]['fD']['aI']['name'];
				$parrentFlight[$farr]['flghtNumber'] = $flightListArray[0]['fD']['fN'];
				$parrentFlight[$farr]['airCraftNo'] = $flightListArray[0]['fD']['eT'];

				$parrentFlight[$farr]['departureAirportName'] = $flightListArray[0]['da']['name'];
				$parrentFlight[$farr]['departureAirportCode'] = $flightListArray[0]['da']['code'];
				$parrentFlight[$farr]['departureAirportTerminal'] = @$flightListArray[0]['da']['terminal'];
				$parrentFlight[$farr]['departureCity'] = $flightListArray[0]['da']['city'];
				$parrentFlight[$farr]['departureCountry'] = $flightListArray[0]['da']['country'];
				$parrentFlight[$farr]['departureCountryCode'] = $flightListArray[0]['da']['countryCode'];

				if(@$flightListArray[0]['cT'] !=''){


				$parrentFlight[$farr]['arrivalAirportName'] = $flightListArray[1]['aa']['name'];
				$parrentFlight[$farr]['arrivalAirportCode'] = $flightListArray[1]['aa']['code'];
				$parrentFlight[$farr]['arrivalAirportTerminal'] = @$flightListArray[1]['aa']['terminal'];
				$parrentFlight[$farr]['arrivalCity'] = $flightListArray[1]['aa']['city'];
				$parrentFlight[$farr]['arrivalCountry'] = $flightListArray[1]['aa']['country'];
				$parrentFlight[$farr]['arrivalCountryCode'] = $flightListArray[1]['aa']['countryCode'];
				

				}else{

				$parrentFlight[$farr]['arrivalAirportName'] = $flightListArray[0]['aa']['name'];
				$parrentFlight[$farr]['arrivalAirportCode'] = $flightListArray[0]['aa']['code'];
				$parrentFlight[$farr]['arrivalAirportTerminal'] = @$flightListArray[0]['aa']['terminal'];
				$parrentFlight[$farr]['arrivalCity'] = $flightListArray[0]['aa']['city'];
				$parrentFlight[$farr]['arrivalCountry'] = $flightListArray[0]['aa']['country'];
				$parrentFlight[$farr]['arrivalCountryCode'] = $flightListArray[0]['aa']['countryCode'];


				}

			

				$parrentFlight[$farr]['noOfStops'] = $flightListArray[0]['stops'];

				$parrentFlight[$farr]['stopOverAirportCode'] = @$flightListArray[0]['so'][0]['code'] ;
				$parrentFlight[$farr]['stopOverAirportName'] = @$flightListArray[0]['so'][0]['name'];
				$parrentFlight[$farr]['stopOverAirportCityCode'] = @$flightListArray[0]['so'][0]['cityCode'];
				$parrentFlight[$farr]['stopOverAirportCityName'] = @$flightListArray[0]['so'][0]['city'];
				$parrentFlight[$farr]['stopOverAirportCountryName'] = @$flightListArray[0]['so'][0]['country'];
				$parrentFlight[$farr]['stopOverAirportCountryCode'] = @$flightListArray[0]['so'][0]['countryCode'];

			

				$parrentFlight[$farr]['connectingFlights'] = @$flightListArray[0]['cT'];

				

				$parrentFlight[$farr]['duration'] = $flightListArray[0]['duration'];

				$parrentFlight[$farr]['departureTime'] = $flightListArray[0]['dt'];
				$parrentFlight[$farr]['arrivalTime'] = $flightListArray[0]['at'];

				$price =0;

				foreach ($flightPriceListArray as $key => $fareValue) {
					

					$totalAdultAmount =  $fareValue['fd']['ADULT']['fC']['TF'] * $adultPax;					
					$totalChildAmount =  @$fareValue['fd']['CHILD']['fC']['TF'] * $childPax;
					$totalInfantAmount =  @$fareValue['fd']['INFANT']['fC']['TF'] * $infantPax;

					$totalFare = $totalAdultAmount + $totalChildAmount + $totalInfantAmount;

					$parrentFlight[$farr]['pricelist'][$price]['adultrefund'] =  @$fareValue['fd']['ADULT']['rT'];
					$parrentFlight[$farr]['pricelist'][$price]['childrefund'] =  @$fareValue['fd']['CHILD']['rT'];
					$parrentFlight[$farr]['pricelist'][$price]['infantrefund'] =  @$fareValue['fd']['INFANT']['rT'];

					$parrentFlight[$farr]['pricelist'][$price]['adultcabinClass'] =  @$fareValue['fd']['ADULT']['cB'];
					$parrentFlight[$farr]['pricelist'][$price]['childcabinClass'] =  @$fareValue['fd']['CHILD']['cB'];

					$parrentFlight[$farr]['pricelist'][$price]['adultcabinClassFare'] =  @$fareValue['fd']['ADULT']['cc'];
					$parrentFlight[$farr]['pricelist'][$price]['childcabinClassFare'] =  @$fareValue['fd']['CHILD']['cc'];


					$parrentFlight[$farr]['pricelist'][$price]['mealAdult'] =  @$fareValue['fd']['ADULT']['mI'];
					$parrentFlight[$farr]['pricelist'][$price]['mealChild'] =  @$fareValue['fd']['CHILD']['mI'];
					$parrentFlight[$farr]['pricelist'][$price]['mealInfant'] =  @$fareValue['fd']['INFANT']['mI'];

					$parrentFlight[$farr]['pricelist'][$price]['totalFare'] = $totalFare;
					$parrentFlight[$farr]['pricelist'][$price]['fareIdentifier'] = $fareValue['fareIdentifier'];

					$parrentFlight[$farr]['pricelist'][$price]['adultBaseFare'] = $fareValue['fd']['ADULT']['fC']['BF'];
					$parrentFlight[$farr]['pricelist'][$price]['childBaseFare'] = @$fareValue['fd']['CHILD']['fC']['BF'];
					$parrentFlight[$farr]['pricelist'][$price]['infantBaseFare'] = @$fareValue['fd']['INFANT']['fC']['BF'];

					$parrentFlight[$farr]['pricelist'][$price]['adultTaxFare'] = $fareValue['fd']['ADULT']['fC']['TAF'];
					$parrentFlight[$farr]['pricelist'][$price]['childTaxFare'] = @$fareValue['fd']['CHILD']['fC']['TAF'];
					$parrentFlight[$farr]['pricelist'][$price]['infantTaxFare'] = @$fareValue['fd']['INFANT']['fC']['TAF'];
					
					@$parrentFlight[$farr]['pricelist'][$price]['countadultPax']= @$adultPax;
					@$parrentFlight[$farr]['pricelist'][$price]['countchildPax']= @$childPax;
					@$parrentFlight[$farr]['pricelist'][$price]['countinfantPax']= @$infantPax;

					$parrentFlight[$farr]['pricelist'][$price]['adultTotalFare'] = $fareValue['fd']['ADULT']['fC']['BF'] + $fareValue['fd']['ADULT']['fC']['TAF'] ;
				
					@$parrentFlight[$farr]['pricelist'][$price]['childTotalFare'] = $fareValue['fd']['CHILD']['fC']['BF'] + $fareValue['fd']['CHILD']['fC']['TAF'] ;
					
					@$parrentFlight[$farr]['pricelist'][$price]['infantTotalFare'] = $fareValue['fd']['INFANT']['fC']['BF'] + $fareValue['fd']['INFANT']['fC']['TAF'] ;

					$parrentFlight[$farr]['pricelist'][$price]['adultCheckInBaggage'] = @$fareValue['fd']['ADULT']['bI']['iB'];
					$parrentFlight[$farr]['pricelist'][$price]['childCheckInBaggage'] = @$fareValue['fd']['CHILD']['bI']['iB'];

					$parrentFlight[$farr]['pricelist'][$price]['adultCabinBaggage'] = @$fareValue['fd']['ADULT']['bI']['cB'];
					$parrentFlight[$farr]['pricelist'][$price]['childCabinBaggage'] = @$fareValue['fd']['CHILD']['bI']['cB'];
					$parrentFlight[$farr]['pricelist'][$price]['infantCabinBaggage'] = @$fareValue['fd']['INFANT']['bI']['cB'];


					$parrentFlight[$farr]['pricelist'][$price]['flightId']  = $fareValue['id'];

				
					$price++;
					
				}

					usort($parrentFlight[$farr]['pricelist'], function($a, $b) {
						return $a['totalFare'] - $b['totalFare'] ;
					});

					

				$farr++;

			
				
			}

			$highMaxValue = array();
			foreach ($parrentFlight as $key => $prival) {

				$columns = array_column($prival['pricelist'], 'totalFare');	

			
				  $max_price = max($columns);
				  $min_price = min($columns);

				 
				 $highMaxValue[] = $max_price; 

				$parrentFlight[$key]['minprice'] = $min_price;
				//$parrentFlight[$key]['minimumprice'] = $min_price;

				$flightArrFilterbh[$key]['flightCode'] = $prival['flghtCode'];
				$flightArrFilterbh[$key]['flightName'] = $prival['flghtName'];
				
			}

			

			usort($parrentFlight, function($a, $b) {
				return $a['pricelist'][0]['totalFare'] - $b['pricelist'][0]['totalFare'] ;
			});


			$parentFlightMax = array_reduce($parrentFlight, function ($a, $b) {
				return @$a['pricelist'][0]['totalFare'] > $b['pricelist'][0]['totalFare'] ? $a : $b ;
			});
			

			$maximumPrice = $parentFlightMax['minprice'];	

			//echo "<pre>"; print_r($parrentFlight); die;
			
			if(count($response_array['searchResult']) != 0){

				$data['completeResult'] = $parrentFlight;	
				$data['totalFlight'] = $totalFlight;
				$data['departure'] = $_POST['departure'];
				$data['destination'] = $_POST['destination'];
				$data['flightList'] =  array_map("unserialize", array_unique(array_map("serialize", $flightArrFilterbh)));
				$data['maximumPrice'] = $maximumPrice;


			}else{

				$data['completeResult'] = @$response_array['searchResult']['tripInfos']['ONWARD'];

			}
			curl_close($ch);

			$data['bookingType'] = $_POST['bookingType'];
			$data['departure'] = $_POST['departure'];
			$data['destination'] = $_POST['destination'];
			$data['departureDate'] = $departureDate;
			//$data['departureDate'] = $departureDate;
			$data['adultPax'] = $_POST['adultPax'];
			$data['childPax'] = $_POST['childPax'];
			$data['infantPax'] = $_POST['infantPax'];
			$data['travelClass'] = $_POST['travelClass'];


			$data['flights']=$this->Flights_page->about_data();
			$this->load->view('flights',$data);
		}else{
			
			$flightArray = $response_array['searchResult'];
			$totalFlight = count($flightArray); 

			$flightListArray = array();
			

			$data['completeResult'] = $flightArray;	
			$data['flightList'] = $flightListArray;

			$data['bookingType'] = $_POST['bookingType'];
			$data['departure'] = $_POST['departure'];
			$data['destination'] = $_POST['destination'];
			$data['departureDate'] = $departureDate;
			//$data['departureDate'] = $departureDate;
			$data['adultPax'] = $_POST['adultPax'];
			$data['childPax'] = $_POST['childPax'];
			$data['infantPax'] = $_POST['infantPax'];
			$data['travelClass'] = $_POST['travelClass'];

			

			$data['flights']=$this->Flights_page->about_data();
			$this->load->view('flights',$data);


		}
			
		} 


	}



	/////////////////////////////// Payment Gateway ////////////////////////////////////////////

	private function get_curl_handle($payment_id, $amount)  {

        $url = 'https://api.razorpay.com/v1/payments/'.$payment_id.'/capture';

		// $key_id = "rzp_live_Xu1V8kawGkEYo0";
		// $key_secret = "qNAC1fZkfDIahPVEVoSTA6kT";

		$key_id = "rzp_test_R5vXLMgcOxTe68";
        $key_secret = "qNAC1fZkfDIahPVEVoSTA6kT";

        $fields_string = "amount=$amount";

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERPWD, $key_id.':'.$key_secret);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        return $ch;

    }   
        
    public function callback() {   
		
		date_default_timezone_set("Asia/Kolkata"); 

		$userID=$this->session->user_id;
		
		$txnid =time();
		$this->session->set_userdata('txnid', $txnid);  
		
		$bookingData = $this->booking_flights_success();

		//echo "<pre>"; print_r($bookingData); die;	

        if (!empty($this->input->post('razorpay_payment_id'))) {
			
            $razorpay_payment_id = $this->input->post('razorpay_payment_id');
			$orderId = '101';
           	$merchant_order_id = $orderId;
            $currency_code = 'INR';
            $amount =  $this->input->post('merchant_total');			
            $success = false;

            $error = '';
            try {  
                      
                $ch = $this->get_curl_handle($razorpay_payment_id, $amount);				
                $result = curl_exec($ch);
                $response_array = json_decode($result, true);

                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                if ($result === false)
                {
                    $success = false;
                    $error = 'Curl error: '.curl_error($ch);
                }
                else
                {
                    if ($http_status === 200 and isset($response_array['error']) === false) {					
                        $success = true;
                    } else {
                        $success = false;
                        if (!empty($response_array['error']['code'])) {
                            $error = $response_array['error']['code'].':'.$response_array['error']['description'];
                        } else {
                            $error = 'RAZORPAY_ERROR:Invalid Response <br/>'.$result;
                        }
                    }
                }
                //close connection
                curl_close($ch);
            } catch (Exception $e) {
                $success = false;
                $error = 'OPENCART_ERROR:Request to Razorpay Failed';
            }
			//echo $success; die;
            if ($success === true) {

                if(!empty($this->session->userdata('ci_subscription_keys'))) {
                    $this->session->unset_userdata('ci_subscription_keys');
                 }
                 $this->processPayment($response_array,$bookingData); 
            } else {
                $this->processPayment($response_array);
            }
        } else {
            echo 'An error occured. Contact site administrator, please!';
        }
    }

    private function processPayment($response_array,$bookingData)
    {
        $data['responseData'] = $response_array;		
		
		//print_r($data['responseData']); die;

		$paymentId = ($data['responseData']['id']);
		$status = $data['responseData']['status'];
	
		$amount = ($data['responseData']['amount']);
		
		$pyamount=$this->session->pyamount;
		$mytxnid=$this->session->txnid;
	  	$userID=$this->session->user_id;
		$proid = $this->session->proid;
		$orderId = $this->session->orderId;
		$firstname =$this->session->user_fname;
		
		//$orderStatus = 'CD';
			$this->load->model('Flights_page'); 
			
			$data1['payment_id'] = $paymentId;
			$data1['PayuStatus']='success';
			//$data1['order_status']='CD';
			$data1['txnid']= $mytxnid;
			
			$data1['pay_amount']= $amount;
			
		//	print_r($data1); die;
			
		
		//	$this->Transaction_page->update_data($data1,$orderId,$userID);
			//$cid=$this->session->customer_id;
			
			//$status = 'successfull';
			
			//$session_user=$this->session->user_id;;
			//$ResTrackID=$orderId;
			//$session_id=session_id();
			
		//	 $ordered_update1=$this->Transaction_page->get_ordered_item_stock($ResTrackID);
			
			//$this->Transaction_page->delete_cart_data($session_id);
			//$this->Transaction_page->delete_cart_items_size($session_id);
			/*print_r($this->session->set_flashdata);*/
			//print_r($session); die;
			
		// $this->session->set_flashdata('payment', "Thank You, " . $firstname .".Your payment status is ". $status ."<br><br>Your Transaction ID for this transaction is ".$mytxnid);
		//   redirect(base_url('thankyou/view/'.$orderId));
		$booking_Id = $_SESSION['bookingId'];	
		
		$result_bookings_Ids = $this->booking_details($booking_Id);
		
		$bookingResults = curl_exec($result_bookings_Ids);
		$bookingFinal = json_decode($bookingResults, true);
		curl_close($result_bookings_Ids);

		//echo "<pre>"; print_r($bookingFinal); die;

		$bookingOrder = $bookingFinal['order'];

		$totalFinalBooking = count($bookingFinal['itemInfos']['AIR']['tripInfos']);

		//echo $totalFinalBooking; die;


		if($totalFinalBooking == 1){

			$bookingItemInfo =  $bookingFinal['itemInfos']['AIR']['tripInfos'][0];

			$bookingData['tripInfoResult'] = $bookingItemInfo;
		}

		else if($totalFinalBooking == 2){

			$bookingItemInfo =  $bookingFinal['itemInfos']['AIR']['tripInfos'][0];
			$bookingItemInfoSecond =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][1];

			$bookingData['tripInfoResult'] = $bookingItemInfo;
			$bookingData['tripInfoResultSecond'] = $bookingItemInfoSecond;

		}

		else if($totalFinalBooking == 3){

			echo $totalFinalBooking;

			$bookingItemInfo =  $bookingFinal['itemInfos']['AIR']['tripInfos'][0];
			$bookingItemInfoSecond =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][1];
			$bookingItemInfoThird =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][2];

			$bookingData['tripInfoResult'] = $bookingItemInfo;
			$bookingData['tripInfoResultSecond'] = $bookingItemInfoSecond;
			$bookingData['tripInfoResultThird'] = $bookingItemInfoThird;


		}else if($totalFinalBooking == 4){

			//echo $totalFinalBooking;

			$bookingItemInfo =  $bookingFinal['itemInfos']['AIR']['tripInfos'][0];
			$bookingItemInfoSecond =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][1];
			$bookingItemInfoThird =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][2];
			$bookingItemInfoForth =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][3];

			$bookingData['tripInfoResult'] = $bookingItemInfo;
			$bookingData['tripInfoResultSecond'] = $bookingItemInfoSecond;
			$bookingData['tripInfoResultThird'] = $bookingItemInfoThird;
			$bookingData['tripInfoResultForth'] = $bookingItemInfoForth;

		}else if($totalFinalBooking == 5){

			//echo $totalFinalBooking;

			$bookingItemInfo =  $bookingFinal['itemInfos']['AIR']['tripInfos'][0];
			$bookingItemInfoSecond =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][1];
			$bookingItemInfoThird =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][2];
			$bookingItemInfoForth =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][3];
			$bookingItemInfoFifth =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][4];

			$bookingData['tripInfoResult'] = $bookingItemInfo;
			$bookingData['tripInfoResultSecond'] = $bookingItemInfoSecond;
			$bookingData['tripInfoResultThird'] = $bookingItemInfoThird;
			$bookingData['tripInfoResultForth'] = $bookingItemInfoForth;
			$bookingData['tripInfoResultFifth'] = $bookingItemInfoFifth;

		}else if($totalFinalBooking == 6){

			//echo $totalFinalBooking;

			$bookingItemInfo =  $bookingFinal['itemInfos']['AIR']['tripInfos'][0];
			$bookingItemInfoSecond =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][1];
			$bookingItemInfoThird =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][2];
			$bookingItemInfoForth =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][3];
			$bookingItemInfoFifth =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][4];
			$bookingItemInfoSixth =  @$bookingFinal['itemInfos']['AIR']['tripInfos'][5];

			$bookingData['tripInfoResult'] = $bookingItemInfo;
			$bookingData['tripInfoResultSecond'] = $bookingItemInfoSecond;
			$bookingData['tripInfoResultThird'] = $bookingItemInfoThird;
			$bookingData['tripInfoResultForth'] = $bookingItemInfoForth;
			$bookingData['tripInfoResultFifth'] = $bookingItemInfoFifth;
			$bookingData['tripInfoResultSixth'] = $bookingItemInfoSixth;

		}

		//die;

		$bookingData['bookingOrder'] = $bookingOrder;
		// $bookingData['tripInfoResult'] = $bookingItemInfo;

		// if(!empty($bookingItemInfoSecond)){

		// 	$bookingData['tripInfoResultSecond'] = $bookingItemInfoSecond;

		// }elseif(!empty($bookingItemInfoThird)){

		// 	$bookingData['tripInfoResultThird'] = $bookingItemInfoThird;

		// }elseif(!empty($bookingItemInfoForth)){

		// 	$bookingData['tripInfoResultForth'] = $bookingItemInfoForth;

		// }elseif(!empty($bookingItemInfoFifth)){

		// 	$bookingData['tripInfoResultFifth'] = $bookingItemInfoFifth;

		// }elseif(!empty($bookingItemInfoSixth)){

		// 	$bookingData['tripInfoResultSixth'] = $bookingItemInfoSixth;

		// }



		$bookingData['bookingDetails']	= $this->Flights_page->getBookingDetails($booking_Id);
		$this->load->view('booking_flights_success',$bookingData);	
		
    }


	public function getSeatDetails($bookingId){

		$priceIds = json_encode(array("bookingId"=> $bookingId));
		
		$url = 'https://apitest.tripjack.com/fms/v1/seat';
		
		$ch = curl_init($url);	
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $priceIds);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','apikey:311824a31048ec-4f7f-499c-8d12-092a368240cf',));

		return $ch;


	}


	 
}

?>
