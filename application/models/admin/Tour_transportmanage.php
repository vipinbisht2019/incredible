<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Tour_transportmanage extends CI_Model
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
			
				$query = array();
				
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
			       
			public function tour_transport_delete($id)
				 {
					 // Deleteing in Table(usc_hoteles) of Database(usc)
								  //print_r($id);  die;
						$this->db->where('tour_id', $id);
						$this->db->delete('usc_tour_transport');
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
					$query = $this->db->get('usc_tour_transport');
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
				//$checkoutdate =$this->input->post('checkoutdate');
				
				$dayOfCheckInWeek = date("l", strtotime($checkindate));
			 	//$dayOfCheckOutWeek = date("l", strtotime($checkoutdate)); 
			 
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
				
				$this->db->select('Iti.ItenaryDay,Iti.cityid,city.city_name,city.cityid,Iti.ItenaryDate,Iti.ItenaryDow');
				$this->db->from('usc_touritinerary as Iti');
				$this->db->join('usc_city as city','Iti.cityid = city.cityid');
				$this->db->where('Iti.TourId',$tourId);
				$this->db->order_by('Iti.ItenaryDay');
				$query = $this->db->get()->result_array();
				
				foreach($query as $key => $itenerraryValue){				
					
					$this->db->select('hotel.HotelId,hotel.HotelName,hotel.cityid');
					$this->db->from('usc_hoteles as hotel');
					$this->db->where('hotel.cityid',$itenerraryValue['cityid']);
					$query[$key]['hotelList'] = $this->db->get()->result_array();
				
					
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
			
			
			public function submitTransport($data){
			
			//print_r($data); die;
				
				 if($this->db->insert('usc_tour_transport', $data))
				 {
				 	
				   return $this->db->insert_id();
				 }
				else
				 {
				   return 0;
				 } 
			
			}
			
			
			public function tour_transport_edit($id)
			{
			       
				$this->db->select('*') 		  
						 ->where('tour_id', $id);						
				$query = $this->db->get('usc_tour_transport');
				return $query->result_array();
				$this->db->close();
					
			} 		 
			
				 
   }
?>