<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Tour_totalcostmanage extends CI_Model
    {
  	 
		  function tour_hotel()
			  {
				  // Deleteing in Table(usc_hotelsroomtype) of Database(usc) HotelName
						$this->db->select('HotelName, HotelId') 	
									->from('usc_hoteles')
									->where('Status', 'Y')
									->order_by('HotelName');
						$query = $this->db->get();
						return $query->result_array();
					// echo $this->db->last_query();
						 $this->db->close();
			  }  
			  
			//---------------------------------- Get itinary -------------------------------------------------   tour_itinerary_add
			
			   function tour_itinerary_hotel($id)
			      {
				   // Deleteing in Table(usc_hotelsroomtype) of Database(usc) HotelName  TourId
							$this->db->select('ItenaryDay, ItineraryTitle,ItenaryDay,countryid,cityid') 	
										->from('usc_touritinerary')
										->where('TourId', $id)
										->where('IsNightStay', 'N')
										->order_by('ItenaryDay');
														
							$query = $this->db->get();
							 //echo $this->db->last_query();
							return $query->result_array();
							
							
							 $this->db->close();
			       }   
		    //--------------------------------------------------------------------------------------------------
			
			
			public function hotel_list($data){
			
				
				foreach($data['itinerary_night'] as $key => $hotelValue){
					
					$this->db->select('*');
					$this->db->from('usc_hoteles');
					$this->db->where('cityid', $hotelValue['cityid']);
					$this->db->order_by('SortOrder');
					$query = $this->db->get()->result_array();
					
				}
					
					return $query;
					$this->db->close();
			
			}
			       
			public function tour_hotels_delete($id)
				 {
					 // Deleteing in Table(usc_hoteles) of Database(usc)
								  
						$this->db->where('TourId', $id);
						$this->db->delete('usc_tourhotels');
						$sql = $this->db->last_query();
							// $this->db->close();
					  
							
				 }			   
		
		   //------------------------------------edit view-----------------------------------------------------		
	       
		    function tour_hotel_edit($id)
			   {
			             // Deleteing in Table(usc_locations) of Database(usc)
					$this->db->select('*') 		  
							 ->where('TourId', $id)
							 ->order_by('SetNumber');
					$query = $this->db->get('usc_tourhotels');
					return $query->result_array();
					$this->db->close();
					
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function tour_hotel_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_locations) of Database(usc)
			    			  
						$this->db->where('TourId', $id);
						$query = $this->db->update('usc_tourgeneralinfo',$data);
						$this->db->close();
			  } 
			  
			  
           
		   public function tour_hotels_add($data)
			  {
			     // Inserting in Table(usc_hoteles) of Database(usc)
				 
				// print_r($data); die;
				 if($this->db->insert('usc_tourhotels', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
		       } 	
		 				 
			
			public function roomtypelist()
			{
			
				$this->db->select('*');
				$this->db->from('usc_hotelsroomtype');						  
				$this->db->where('Status', 'Y');
				$this->db->order_by('SortOrder');
				$query = $this->db->get()->result_array();
				return $query;
				$this->db->close();
				
			}	  	
			public function roomratetypelist()
			{
			
				$this->db->select('*');
				$this->db->from('usc_hotelsroomratetype');						  
				$this->db->where('Status', 'Y');
				$this->db->order_by('SortOrder');
				$query = $this->db->get()->result_array();
				return $query;
				$this->db->close();
				
			}	
			
			public function taxtypelist()
			{
			
				$this->db->select('*');
				$this->db->from('usc_taxtype');						  
				$this->db->where('Status', 'Y');
				$this->db->order_by('SortOrder');
				$query = $this->db->get()->result_array();
				return $query;
				$this->db->close();
				
			}	
			
			public function tourtaxlist(){
			
				$this->db->select('*');
				$this->db->from('usc_tour_tax');						  
				$query = $this->db->get()->result_array();
				return $query;
				$this->db->close();
			
			}  			 	
			
			public function getWeekDays(){
			
				$checkindate =$this->input->post('checkindate');	
				
				
				$dayOfCheckInWeek = date("l", strtotime($checkindate));
		
			 
			 	$result = array('dayOfCheckIn' => $dayOfCheckInWeek);
				return $result; 
				$this->db->close();
			
			}  			 	
			public function getWeekDaysOut(){
			
				$checkindate =$this->input->post('checkindate');
				//echo $checkindate; die;
				$checkoutdate =$this->input->post('checkoutdate');
				
				
				
				//$dayOfCheckInWeek = date("l", strtotime($checkindate));
			 	$dayOfCheckOutWeek = date("l", strtotime($checkoutdate)); 
				
				$start_ts = strtotime($checkindate); 
				$end_ts = strtotime($checkoutdate); 
				$diff = $end_ts - $start_ts; 
				$noOfNights =  round($diff / 86400);
				
				
				
			 
			 	$result = array('dayOfCheckOut' => $dayOfCheckOutWeek,'noOfNights' => $noOfNights);
				//print_r($result); die;
				return $result; 
				$this->db->close();
			
			}  
			
			public function getDBLTotal(){
			
				//print_r($_POST);
				
				$dblValue =$this->input->post('dbl');
				$checkoutdate =$this->input->post('checkoutdate');
				$checkindate =$this->input->post('checkindate');
				
				//echo $dblValue; 
				
				$start_ts = strtotime($checkindate); 
				$end_ts = strtotime($checkoutdate); 
				$diff = $end_ts - $start_ts; 
				$noOfNights =  round($diff / 86400);
				
				
				$dblTotal = ($noOfNights * $dblValue); 
				
				
				
				return $dblTotal; 
				$this->db->close();
			
			}
			
			public function getTWNTotal(){
				
				$twnValue =$this->input->post('twn');
				$checkoutdate =$this->input->post('checkoutdate');
				$checkindate =$this->input->post('checkindate');
				
				//echo $dblValue; 
				
				$start_ts = strtotime($checkindate); 
				$end_ts = strtotime($checkoutdate); 
				$diff = $end_ts - $start_ts; 
				$noOfNights =  round($diff / 86400);
				
				
				$twnTotal = ($noOfNights * $twnValue); 
				
				
				return $twnTotal; 
				$this->db->close();
			}
			public function getTrpTotal(){
				
				$trpValue =$this->input->post('trp');
				$checkoutdate =$this->input->post('checkoutdate');
				$checkindate =$this->input->post('checkindate');
				
				//echo $dblValue; 
				
				$start_ts = strtotime($checkindate); 
				$end_ts = strtotime($checkoutdate); 
				$diff = $end_ts - $start_ts; 
				$noOfNights =  round($diff / 86400);
				
				
				$trpValue = ($noOfNights * $trpValue); 
				
				
				return $trpValue; 
				$this->db->close();
			}
			public function getQudTotal(){
				
				$qudValue =$this->input->post('qud');
				$checkoutdate =$this->input->post('checkoutdate');
				$checkindate =$this->input->post('checkindate');
				
				//echo $dblValue; 
				
				$start_ts = strtotime($checkindate); 
				$end_ts = strtotime($checkoutdate); 
				$diff = $end_ts - $start_ts; 
				$noOfNights =  round($diff / 86400);
				
				
				$qudValue = ($noOfNights * $qudValue); 
				
				
				return $qudValue; 
				$this->db->close();
			}
			public function getTAXDBL(){
			
			
				$oneValue =$this->input->post('one');
				$twoValue =$this->input->post('two');
				$rfValue =$this->input->post('rf');
				$ctValue =$this->input->post('ct');
				$fiveValue =$this->input->post('five');
				
				$dblValue =$this->input->post('dbl');
				$twnValue =$this->input->post('twn');
				$trpValue =$this->input->post('trp');
				$qudValue =$this->input->post('qud');
				
				$checkoutdate =$this->input->post('checkoutdate');
				$checkindate =$this->input->post('checkindate');
			
				$start_ts = strtotime($checkindate); 
				$end_ts = strtotime($checkoutdate); 
				$diff = $end_ts - $start_ts; 
				$noOfNights =  round($diff / 86400);
				
				
				$dblTotal = ($noOfNights * $dblValue);
				$twnTotal = ($noOfNights * $twnValue);
				$trpTotal = ($noOfNights * $trpValue);
				$qudTotal = ($noOfNights * $qudValue); 
				
				if($dblTotal!=0){
				
					//echo "dbl";
				
					return $GrandDBLTotal = $oneValue + $twoValue + $rfValue + $ctValue + $fiveValue + $dblTotal;
					
					  
				}
				if($twnTotal!=0){
					
					//echo "twn";
					return $GrandTWNTotal = $oneValue + $twoValue + $rfValue + $ctValue + $fiveValue + $twnTotal;
				}
				if($trpTotal!=0){
					
					//echo "trp";				
					return $GrandTRPTotal = $oneValue + $twoValue + $rfValue + $ctValue + $fiveValue + $trpTotal;
				}
				if($qudTotal!=0){
				
					//echo "qud";
					return $GrandQUDTotal = $oneValue + $twoValue + $rfValue + $ctValue + $fiveValue + $qudTotal;
				}
				
				
				
				 
				$this->db->close();
			}
			
			public function getTAXDBLPP($GrandDBLTotal){
			
				
				$string_version = implode(',', $GrandDBLTotal);
				
				$GrandDBLPPTotal =  (intval($string_version)/2);
				
				return round($GrandDBLPPTotal,2);
			
				
			}
			public function getTAXTWNPP($GrandTWNTotal){
			
				
				$string_version = implode(',', $GrandTWNTotal);
				
				$GrandDBLTWNTotal =  (intval($string_version)/2);
				
				return round($GrandDBLTWNTotal,2);
				
			}
			public function getTAXTRPPP($GrandTRPTotal){
			
				
				$string_version = implode(',', $GrandTRPTotal);
				
				$GrandTRPPPTotal =  (intval($string_version)/3);
				
				return round($GrandTRPPPTotal,2);
			
				
			}
			public function getTAXQUDPP($GrandQUDTotal){
			
				
				$string_version = implode(',', $GrandQUDTotal);
				
				$GrandQUDPPTotal =  (intval($string_version)/4);
				
				return round($GrandQUDPPTotal,2);
			
				
			}
			
			public function getDBLFinalTotal($data,$bfPP,$bfD,$bfT,$bfQ,$portPP){
					
				$breakFastTotal = $bfPP + $bfD + $bfT + $bfQ + $portPP + $string_version;
				
				$GrandFinalTotal =  (intval($breakFastTotal)/2);
				echo $GrandFinalTotal; die;
				
				return round($GrandFinalTotal,2);
			
				
			}
			
			
			
			public function getTAXTwn(){
			
			
				$oneValue =$this->input->post('one');
				$twoValue =$this->input->post('two');
				$rfValue =$this->input->post('rf');
				$ctValue =$this->input->post('ct');
				$qudValue =$this->input->post('five');
				
				$twnValue =$this->input->post('twn');
				$checkoutdate =$this->input->post('checkoutdate');
				$checkindate =$this->input->post('checkindate');
			
				$start_ts = strtotime($checkindate); 
				$end_ts = strtotime($checkoutdate); 
				$diff = $end_ts - $start_ts; 
				$noOfNights =  round($diff / 86400);
				
				
				$twnTotal = ($noOfNights * $twnValue); 
				
				$GrandTotal = $oneValue + $twoValue + $rfValue + $ctValue + $qudValue + $twnTotal;
				
				return $GrandTotal; 
				$this->db->close();
			}
			
			public function getIteneraryCity($tourId){
				
				$this->db->select('Iti.ID,Iti.ItenaryDay,Iti.countryid,Iti.stateid,Iti.cityid,Iti.StartDate,Iti.EndDate,Iti.IsBreakfast,Iti.IsLunch,Iti.IsDinner,city.cityid,city.city_name');
				$this->db->from('usc_touritinerary as Iti');
				$this->db->join('usc_city as city','Iti.cityid = city.cityid');
				$this->db->where('Iti.TourId',$tourId);
				$query = $this->db->get()->result_array();
				
				foreach($query as $key => $itenerraryValue){				
					
				/*	$this->db->select('Iti.cityid,Iti.StartDate,Iti.IsBreakfast,city.cityid,city.city_name');
					$this->db->from('usc_touritinerary as Iti');
					$this->db->join('usc_city as city','Iti.cityid = city.cityid');
					$this->db->where('Iti.TourId',$tourId);
					$this->db->where('Iti.IsBreakfast','Y');
					$query[$key]['breakfastlist'] = $this->db->get()->result_array();
					
					$this->db->select('Iti.cityid,Iti.StartDate,Iti.IsLunch,city.cityid,city.city_name');
					$this->db->from('usc_touritinerary as Iti');
					$this->db->join('usc_city as city','Iti.cityid = city.cityid');
					$this->db->where('Iti.TourId',$tourId);
					$this->db->where('Iti.IsLunch','Y');
					$query[$key]['lunchlist'] = $this->db->get()->result_array();
					
					$this->db->select('Iti.cityid,Iti.StartDate,Iti.IsDinner,city.cityid,city.city_name');
					$this->db->from('usc_touritinerary as Iti');
					$this->db->join('usc_city as city','Iti.cityid = city.cityid');
					$this->db->where('Iti.TourId',$tourId);
					$this->db->where('Iti.IsDinner','Y');
					$query[$key]['dinnerlist'] = $this->db->get()->result_array();*/
						
					$dayOfCheckin = date("l", strtotime($itenerraryValue['StartDate']));
					$dayOfCheckins = substr($dayOfCheckin, 0, 3); 
				
					$query[$key]['daycheckin'] = $dayOfCheckins;
						
					
				}
				
				return $query;
				$this->db->close();
				
			
			}	
			
			public function getTourGeneralInfo($tourId){
			
				$this->db->select('ItineraryTitle,PayingPax,FreePax,FileNo');
				$this->db->from('usc_short_iti');
				$this->db->where('Status','Y');
				$this->db->where('id',$tourId);
				$query = $this->db->get()->row_array();
				return $query;
				$this->db->close();
			}
			
			
			public function submitMeals($data){
			
				//print_r($data); die;
				
				 if($this->db->insert('usc_tourmeals', $data))
				 {
				   return $this->db->insert_id();
				 }
				else
				 {
				   return 0;
				 } 
				
			}
			
			
			public function getMealsDetail($tourId){
			
				$this->db->select('*');
				$this->db->from('usc_tourmeals');
				$this->db->where('TourId',$tourId);
				$query = $this->db->get()->result_array();
				return $query;
				$this->db->close();
			
			}

			public function getTotalCost($tourId){
			
				$this->db->select('sum(sglFinalTotal) as sglFinalTotal ,sum(dblFinalTotal) as dblFinalTotal,sum(twnFinalTotal) as twnFinalTotal,sum(trpFinaltotal) as trpFinaltotal, sum(qudFinalTotal) as qudFinalTotal');
				$this->db->from('usc_tourhotel_calc');
				$this->db->where('tourId',$tourId);
				$hotel = $this->db->get()->result_array();

				$this->db->select('sum(tota_trans_guide) as totalTransGuide');
				$this->db->from('usc_tour_transport');
				$this->db->where('tour_id',$tourId);
				$transport = $this->db->get()->result_array();

				$this->db->select('sum(tax_total) as totaltax');
				$this->db->from('usc_tourdriver_hotel');
				$this->db->where('tourId',$tourId);
				$driverhotel = $this->db->get()->result_array();

	
				$this->db->select('sum(adult_price) as AdultPrice,sum(child_price) as ChildPrice');
				$this->db->from('usc_toursight');
				$this->db->where('TourID',$tourId);
				$sightSeeing = $this->db->get()->result_array();

				$this->db->select('sum(breakfast_cost) as BreakfastCost,sum(lunch_cost) as LunchCost,sum(dinner_cost) as DinnerCost');
				$this->db->from('usc_tourmeals');
				$this->db->where('TourId',$tourId);
				$meals = $this->db->get()->result_array();
				foreach($meals as $key => $mealValue){

					$totalMeCost = $mealValue['BreakfastCost'] + $mealValue['LunchCost']  + $mealValue['DinnerCost'] ;

				}

				$result = array('hotel' => $hotel,'transport' => $transport,'sightSeeing' => $sightSeeing,'totalMealCost' => $totalMeCost,'driverhotel' => $driverhotel);
				return $result;
				$this->db->close();
			
			}
			
		
				 
   }
?>