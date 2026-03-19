<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Forgot_password_page extends MY_model
  {

		
		public function forgot_password_data()
		    {
			    
				$this->db->where('page_id', '1');
	   		    $query = $this->db->get('usc_static_pages')->row_array();
				  // print_r($query);
				return $query;
				$this->db->close();  
			}	 
    
}
   


?>