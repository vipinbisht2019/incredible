<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Destination_page extends MY_model
  {

		
		public function destination_data()
		    {
			    
				$this->db->where('page_id', '8');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  
			}
			
			
		public function get_destinations()
		{
		
			$this->db->select('*');
			$this->db->where('ParentID','0');
			$this->db->where('Status', 'Y');
			$locationList = $this->db->get('usc_locations')->result_array();
			
			foreach($locationList as $key => $value){
				
				$this->db->where('ParentID', $value['locationsId']);
				$this->db->where('Status', 'Y');
				$locationList[$key]['locSubList'] = $this->db->get('usc_locations')->result_array();	
			
			}
			
			return $locationList;
			$this->db->close();
		}
		
		public function destinationsublist(){
			
			//print_r($_POST);
			$subLoclist ='';
			$this->db->where('ParentID', 1);
			$this->db->where('Status', 'Y');
			$locSubList = $this->db->get('usc_locations')->result_array();	
		/*	$subLoclist ='<ul class="ul-style">';
							 foreach($locSubList as $key => $destSubValue){ 
							
                             '<li class="li-btm"><a href="#" class="a-border">'.$destSubValue['locationsName'].'</a></li>'.
							
							 } .
                         
                    '</ul>'.*/
                   
			return $locSubList;
			$this->db->close();
		}
		
		public function destinationsData()
		{
	
					
			$query = $this->db->get('usc_tourgeneralinfo');
			 $allTourList = $query->result_array();
			 
			 $indiaList = array();
			 $asiaList = array();
			 $europeList = array();
			
			foreach($allTourList as $key => $value){
			 
				$this->db->where('locationsId', '1');
			 	$india = $this->db->get('usc_tourgeneralinfo');
				$indiaList = $india->result_array();
			 	
				$this->db->where('locationsId', '2');
			 	$asia = $this->db->get('usc_tourgeneralinfo');
				$asiaList = $asia->result_array();
				
				$this->db->where('locationsId', '3');
			 	$europe = $this->db->get('usc_tourgeneralinfo');
				$europeList = $europe->result_array();
			 }
			
			 $q12 = array('indialist' => $indiaList,'asiaList' => $asiaList, 'europeList' => $europeList);
			 
			// print_r($q);
			 return $q12;
			 
			$this->db->close();  
		}
			
		public function india(){
		
				$this->db->where('page_id', '9');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  	
		
		}
		
		public function asia(){
			
				$this->db->where('page_id', '10');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  
			
		}
		
		public function europe(){
		
			
			
			$this->db->where('page_id', '11');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  
		
		
		}
		
		public function destination_detail(){
	
			$this->db->where('page_id', '29');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  
		
		
		}
		
		public function destiDetails($tName){
		
			//print_r($tourid); die;

			$tId  = str_replace('-',' ',$tName);

		//	echo $tId; die;


			$this->db->select('TourId');
			$this->db->from('usc_tourgeneralinfo_web_in');
			$this->db->where('TourName',$tId);
			$tourID = $this->db->get()->row_array();
			$tourid = $tourID['TourId'];

			$this->db->select('*');
			$this->db->from('usc_tourgeneralinfo_web_in');
			$this->db->where('TourId',$tourid);
			$tourGenInfo = $this->db->get()->row_array();
			
			$this->db->select('uti.ExclusionID ,ui.TourInclusionsName');
			$this->db->from('usc_tour_exclusion as uti');
			$this->db->join('usc_tourinclusions_web_in as ui','uti.ExclusionID = ui.TourInclusionsId','left');
			$this->db->where('uti.TourId',$tourid);
			$tourExclusionInfo = $this->db->get()->result_array();
			
			$this->db->select('uti.InclusionID ,ui.TourInclusionsName');
			$this->db->from('usc_tour_inclusion as uti');
			$this->db->join('usc_tourinclusions_web_in as ui','uti.InclusionID = ui.TourInclusionsId','left');
			$this->db->where('uti.TourId',$tourid);
			$tourInclusionInfo = $this->db->get()->result_array();
			
			$this->db->select('*');
			$this->db->from('usc_touritinerary_web_in');
			$this->db->where('TourId',$tourid);
			$tourIternityInfo = $this->db->get()->result_array();
			
			$this->db->select('*');
			$this->db->from('usc_tourhotels_web_in');
			$this->db->where('TourId',$tourid);
			$tourHotelInfo = $this->db->get()->result_array();
			
			
			$this->db->select('*');
			$this->db->from('usc_tour_images');
			$this->db->where('TourId',$tourid);
			$tourImages = $this->db->get()->result_array();
			
			// $this->db->select('*');
			// $this->db->from('usc_tour_info_detail');
			// $this->db->where('tour_id',$tourid);
			// $this->db->where('info_type','usefull_information');
			// $tourUsefullInfo = $this->db->get()->result_array();
			
			// $this->db->select('*');
			// $this->db->from('usc_tour_info_detail');
			// $this->db->where('tour_id',$tourid);
			// $this->db->where('info_type','important_information');
			// $tourImpInfo = $this->db->get()->result_array();
			
			// $this->db->select('*');
			// $this->db->from('usc_tour_quotes_details');
			// $this->db->where('tour_id',$tourid);
			// $this->db->where('quotes_type','quotes');
			// $tourQuotes= $this->db->get()->result_array();
			
			// $this->db->select('*');
			// $this->db->from('usc_tour_quotes_details');
			// $this->db->where('tour_id',$tourid);
			// $this->db->where('quotes_type','supplements');
			// $tourSupplements= $this->db->get()->result_array();
			
			// $this->db->select('*');
			// $this->db->from('usc_tour_quotes_details');
			// $this->db->where('tour_id',$tourid);
			// $this->db->where('quotes_type','flight_subcharges');
			// $tourFlightSubcharges= $this->db->get()->result_array();
			
			// $this->db->select('*');
			// $this->db->from('usc_tourgeneral_depatureinfo');
			// $this->db->where('tour_id',$tourid);
			// $tourDepartureInfo= $this->db->get()->result_array();
			
			//echo $this->db->last_query(); exit;
			
			
			$result = array('tourGenInfo' => $tourGenInfo, 'tourExclusionInfo' => $tourExclusionInfo,'tourInclusionInfo' => $tourInclusionInfo,'tourIternityInfo'=> $tourIternityInfo,'tourHotelInfo' => $tourHotelInfo,'tourImages' => $tourImages);

			//$result = array('tourGenInfo' => $tourGenInfo, 'tourExclusionInfo' => $tourExclusionInfo,'tourInclusionInfo' => $tourInclusionInfo,'tourIternityInfo'=> $tourIternityInfo,'tourHotelInfo' => $tourHotelInfo,'tourImages' => $tourImages,'tourUsefullInfo' => $tourUsefullInfo,'tourImpInfo'=>$tourImpInfo,'tourFlightSubcharges'=> $tourFlightSubcharges ,'tourSupplements' => $tourSupplements , 'tourQuotes' => $tourQuotes,'tourDepartureInfo' => $tourDepartureInfo);
			
			//echo '<pre>'; print_r($result); die;
			
			return $result;
			
			$this->db->close();
			
			
		
		}
		
		public function tour_info_add($data){
		
		//print_r($data); die;
		
		if($this->db->insert('usc_tour_info_request', $data))
			 {
			   return $this->db->insert_id();
			 }
			else
			 {
			   return 0;
			 } 
		
		
		}
		
		public function india_list($locationsId){	


			$locations = str_replace('-', ' ', $locationsId);
			$locationName = ucwords($locations);
			
			$this->db->where('locationsName', $locationName);
			$query1 = $this->db->get('usc_locations');
			$locationsName = $query1->result_array();
			
			$this->db->select('utg.*,ul.*');
			$this->db->from('usc_tourgeneralinfo_web_in as utg');
			//$this->db->join('usc_locations as ul','utg.locationsId = ul.locationsId','left');
			$this->db->join('usc_tour_location_web_in as tl','utg.TourId = tl.TourId','left');
			$this->db->join('usc_locations as ul','tl.locationsId = ul.locationsId','left');
			$this->db->where('tl.locationsId',$locationsName[0]['locationsId']);
			$query = $this->db->get()->result_array();

			//echo $this->db->last_query(); die;
			//print_r($query); die;
			//return $locationsName;

			$result = array('locationsList' => $locationsName , 'tourlist' => $query);
			return $result; 

			$this->db->close();  
			
		
		}
		
		
		public function destination_list($locationsId){
		
				$locations = str_replace('-', ' ', $locationsId);
				$locationName = ucwords($locations);
			
				$this->db->where('locationsName', $locationName);
				$query1 = $this->db->get('usc_locations');
				$locationsName = $query1->result_array();	
			
				$this->db->where('ParentID', $locationsName[0]['locationsId']);
				$this->db->where('Status', 'Y');
	   		    $query = $this->db->get('usc_locations'); 
				
				//echo $this->db->last_query(); die;
				return $query->result_array();
				$this->db->close();
			
		}
		
			public function theme_list(){
			
			
				//$this->db->where('SortOrder', 'DESC');
				$this->db->where('Status', 'Y');
	   		    $query = $this->db->get('usc_theams'); 
				return $query->result_array();
				$this->db->close();
			
		}
		
		public function tour_filter($locationsId,$themeName){
		
			$locations = str_replace('-', ' ', $locationsId);
			$locationName = ucwords($locations);
			
			$theme = str_replace('-', ' ', $themeName);
			$themeNames = ucwords($theme);
			
			//echo $locationName;
			$this->db->where('locationsName', $locationName);
			$query1 = $this->db->get('usc_locations');
			$locationsName = $query1->result_array();
			
			//print_r($locationsName); die;
			
			$this->db->where('TheamsName', $themeNames);
			$query2 = $this->db->get('usc_theams');
			$themeData = $query2->result_array();
			
			$this->db->select('utg.*,ul.*');
			$this->db->from('usc_tourgeneralinfo as utg');
			//$this->db->join('usc_locations as ul','utg.locationsId = ul.locationsId','left');
			$this->db->join('usc_tour_location as tl','utg.TourId = tl.TourId','left');
			$this->db->join('usc_locations as ul','tl.locationsId = ul.locationsId','left');
			
			if(!empty($locationName)){
			
				$this->db->like('tl.locationsId',$locationsName[0]['locationsId']);
			
			}
			
			if(!empty($themeNames)){
			
				$this->db->like('utg.TheamsId',$themeData[0]['TheamsId']);
			
			}
			
			$query = $this->db->get();
			//print_r($query); die;
			return $query->result_array();
			$this->db->close();  
			
		
		}
	 
    
}
   


?>