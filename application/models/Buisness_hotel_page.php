<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Buisness_hotel_page extends MY_model
  {


	public function buisness_hotel(){

		$this->db->where('page_id', '51');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}

}
   


?>