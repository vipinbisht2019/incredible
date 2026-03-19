<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Terms_condition_model extends MY_model
  {


	public function terms_condition(){

		$this->db->where('page_id', '51');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}

}
   


?>