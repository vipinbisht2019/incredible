<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Corporate_travel_page extends MY_model
  {


	public function corporate_tavel(){

		$this->db->where('page_id', '69');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}	 
    
}

?>