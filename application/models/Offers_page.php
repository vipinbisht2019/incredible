<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Offers_page extends MY_model
  {

		
		public function offers()
		    {
			    
				$this->db->where('page_id', '33');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  
			}
			
		public function offers_list(){
			
			
				$this->db->where('IsOffers', 'Y');
				$this->db->where('Status', 'Y');
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