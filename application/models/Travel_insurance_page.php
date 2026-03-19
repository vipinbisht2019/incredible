<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Travel_insurance_page extends MY_model
  {


	public function travel_insurance(){

		$this->db->where('page_id', '76');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}

}
   


?>