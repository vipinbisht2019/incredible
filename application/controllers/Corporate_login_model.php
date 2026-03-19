<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Corporate_login_model extends MY_model
  {


	public function index(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}	 
    
}

?>