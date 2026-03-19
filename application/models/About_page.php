<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class About_page extends MY_model
  {

		
		public function about_data()
		    {
			    
				$this->db->where('page_id', '1');
	   		    $query = $this->db->get('usc_static_pages')->row_array();
				  // print_r($query);
				return $query;
				$this->db->close();  
			}
			
		public function company_profile(){
		
				$this->db->where('page_id', '2');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  	
		
		}
		
		public function why_travel_with_us(){
			
				$this->db->where('page_id', '3');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  
			
		}
		
		public function term_condition(){
		
				$this->db->where('page_id', '6');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  
			
		
		
		}
		
		public function privacy_policy(){
		
				$this->db->where('page_id', '7');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  
			
		
		
		}
		
		
	 
    
}
   


?>