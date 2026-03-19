<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Travel_themes_page extends MY_model
  {

		
		public function travel_themes()
		    {
			    
				$this->db->where('page_id', '12');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  
			}
			
		public function travelThemesList(){
				
				$this->db->select('*');
				$this->db->from('usc_theams');
			 	$query = $this->db->get()->result_array(); 
				
	   	
			 	// foreach($query as $key => $value){
		
				// 	$this->db->select('TourId,TourName,Image,TheamsId');
				// 	$this->db->from('usc_tourgeneralinfo');
				// 	$this->db->where_not_in('usc_tourgeneralinfo.TheamsId',$value['TheamsId']);
				// 	$query1= $this->db->get()->result_array();
					
				// 	$query['tourListDetails'] = $query1;
				
				// }
				
				return $query;
			
				$this->db->close();  
		
				
			
		}
			
		public function festival_tours(){
		
				$this->db->where('page_id', '13');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  	
		
		}
		public function festival_tours_list($themeId){
		
				$theme = str_replace('-', ' ', $themeId);
				$themeName = ucwords($theme);
				
				//echo $themeName;
				$res = array();
				
				$this->db->where('TheamsName', $themeName);
	   		    $query1 = $this->db->get('usc_theams');
				$theamesName = $query1->result_array();
				
				$this->db->where('TheamsId',$theamesName[0]['TheamsId']);
	   		    $query2 = $this->db->get('usc_theams')->result_array();
			
				
				$this->db->where('TheamsId',$theamesName[0]['TheamsId']);
	   		    $query3 = $this->db->get('usc_tourgeneralinfo')->result_array();
				
				
				$res = array('themeList' => $query2,'tourList' => $query3);
			
			
			/*$this->db->select('utg.*,ut.*');
			$this->db->from('usc_tourgeneralinfo as utg');
			$this->db->join('usc_theams as ut','utg.TheamsId = ut.TheamsId','left');
			$this->db->where('utg.TheamsId',$theamesName[0]['TheamsId']);
			$query = $this->db->get();*/
			//echo $this->db->last_query(); die;
			return $res;
			$this->db->close();  
		
		}
		
		
		public function wild_life(){
			
				$this->db->where('page_id', '14');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  	
			
		}
		
		public function wild_life_list($themeId){
			
				$theme = str_replace('-', ' ', $themeId);
				$themeName = ucwords($theme);
				
				$this->db->where('TheamsName', $themeName);
	   		    $query1 = $this->db->get('usc_theams');
				$theameName = $query1->result_array();
							
				$this->db->where('TheamsId', $theameName[0]['TheamsId']);
	   		    $query = $this->db->get('usc_tourgeneralinfo');
				return $query->result_array();
				$this->db->close();  
		
		}
		
		public function family_holidays(){

				$this->db->where('page_id', '15');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  	
		
		
		}
		
		public function family_holidays_list($themeId){
				$theme = str_replace('-', ' ', $themeId);
				$themeName = ucwords($theme);
				
				$this->db->where('TheamsName', $themeName);
	   		    $query1 = $this->db->get('usc_theams');
				$theameName = $query1->result_array();
							
				$this->db->where('TheamsId', $theameName[0]['TheamsId']);
	   		    $query = $this->db->get('usc_tourgeneralinfo');
				return $query->result_array();
				$this->db->close();  
		
		}
		
		public function luxury_tours(){
	
				$this->db->where('page_id', '16');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  	
		
		
		}
		
		public function luxury_tours_list($themeId){
			
				$theme = str_replace('-', ' ', $themeId);
				$themeName = ucwords($theme);
				
				$this->db->where('TheamsName', $themeName);
	   		    $query1 = $this->db->get('usc_theams');
				$theameName = $query1->result_array();
							
				$this->db->where('TheamsId', $theameName[0]['TheamsId']);
	   		    $query = $this->db->get('usc_tourgeneralinfo');
				return $query->result_array();
				$this->db->close();  
		
		}
		
		public function honeymoon(){
	
				$this->db->where('page_id', '17');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  	
		
		
		}
		
		public function honeymoon_list($themeId){
			
				$theme = str_replace('-', ' ', $themeId);
				$themeName = ucwords($theme);
				
				$this->db->where('TheamsName', $themeName);
	   		    $query1 = $this->db->get('usc_theams');
				$theameName = $query1->result_array();
							
				$this->db->where('TheamsId', $theameName[0]['TheamsId']);
	   		    $query = $this->db->get('usc_tourgeneralinfo');
				return $query->result_array();
				$this->db->close();  
		
		}
		
		public function yoga_ayurveda(){
			
				$this->db->where('page_id', '18');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  	
		
		}
		
		public function yoga_ayurveda_list($themeId){
		
				//print_r($themeId); die;
			
				$theme = str_replace('-', ' ', $themeId);
				$themeName = ucwords($theme);
				
				//echo $themeName; die;
				
				$this->db->where('TheamsName', $themeName);
	   		    $query1 = $this->db->get('usc_theams');
				$theameName = $query1->result_array();
				//print_r($theameName);	die;	
					
				$this->db->where('TheamsId', $theameName[0]['TheamsId']);
	   		    $query = $this->db->get('usc_tourgeneralinfo');
				return $query->result_array();
				$this->db->close();  
		
		}
		
		public function religious_tours(){
	
				$this->db->where('page_id', '19');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  	
		
		}
		
		public function religious_tours_list($themeId){
			
				$theme = str_replace('-', ' ', $themeId);
				$themeName = ucwords($theme);
				
				//echo $themeName; die;
				
				$this->db->where('TheamsName', $themeName);
	   		    $query1 = $this->db->get('usc_theams');
				$theameName = $query1->result_array();
				
				//print_r($theameName);
							
				$this->db->where('TheamsId', $theameName[0]['TheamsId']);
	   		    $query = $this->db->get('usc_tourgeneralinfo');
				return $query->result_array();
				$this->db->close();  
		
		}
		
		public function adventure_outdoor(){
	
				$this->db->where('page_id', '20');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  	
		
		
		}
		
		public function adventure_outdoor_list($themeId){
			
				$theme = str_replace('-', ' ', $themeId);
				$themeName = ucwords($theme);
				
				$this->db->where('TheamsName', $themeName);
	   		    $query1 = $this->db->get('usc_theams');
				$theameName = $query1->result_array();
							
				$this->db->where('TheamsId', $theameName[0]['TheamsId']);
	   		    $query = $this->db->get('usc_tourgeneralinfo');
				return $query->result_array();
				$this->db->close();  
		
		}
		
		public function beaches(){
	
				$this->db->where('page_id', '21');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  	
		
		
		}
		
		public function beaches_list($themeId){
			
				$theme = str_replace('-', ' ', $themeId);
				$themeName = ucwords($theme);
				
				$this->db->where('TheamsName', $themeName);
	   		    $query1 = $this->db->get('usc_theams');
				$theameName = $query1->result_array();
							
				$this->db->where('TheamsId', $theameName[0]['TheamsId']);
	   		    $query = $this->db->get('usc_tourgeneralinfo');
				return $query->result_array();
				$this->db->close();  
		
		}
		
		public function tribal_tours(){
	
				$this->db->where('page_id', '22');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  	
		
		
		}
		
		public function tribal_tours_list($themeId){
			
				$theme = str_replace('-', ' ', $themeId);
				$themeName = ucwords($theme);
				
				$this->db->where('TheamsName', $themeName);
	   		    $query1 = $this->db->get('usc_theams');
				$theameName = $query1->result_array();
							
				$this->db->where('TheamsId', $theameName[0]['TheamsId']);
	   		    $query = $this->db->get('usc_tourgeneralinfo');
				return $query->result_array();
				$this->db->close();  
		
		}
		
			
		public function destination_list(){
			
			
				//$this->db->where('SortOrder', 'DESC');
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
}
   


?>