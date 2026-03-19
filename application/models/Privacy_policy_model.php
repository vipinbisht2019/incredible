<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Privacy_policy_model extends MY_model
  {


	public function privacy_policy(){

		$this->db->where('page_id', '50');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}

}
   


?>