<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Visa_model extends MY_model
  {


	public function visa(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}	

	public function country_faq(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	} 
    
} 


?>