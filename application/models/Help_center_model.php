<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Help_center_model extends MY_model
  {


	public function help_center(){

		$this->db->where('page_id', '75');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}	 
    
}

?>