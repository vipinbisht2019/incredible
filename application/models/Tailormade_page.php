<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Tailormade_page extends MY_model
  {

		
		public function tailormade()
		    {
			    
				$this->db->where('page_id', '24');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  
			}
			
		public function tailormade_list(){
			
			$this->db->where('IsTailormade', 'Y');
			$this->db->where('Status', 'Y');
	   		    $query = $this->db->get('usc_tourgeneralinfo');
				return $query->result_array();
				$this->db->close();  
		
		}
		
}
   


?>