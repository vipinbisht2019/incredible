<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Rent_car_model extends MY_model
  {


	public function index(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}

	public function rent_car(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}

	public function search_cars(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}

	public function booking_car(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close(); 
	}

	public function car_reservation(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close(); 
	}		
	 
    
}
   


?>