<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Travel_articles_model extends MY_model
  {


	public function travel_articles(){

		$this->db->where('page_id', '67');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}	 
    
}

?>