<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Direct_payment_page extends CI_Controller {

	
	
	
	function payment_add($data)
			 {
			  // Inserting in Table( usc_agents) of Database(usc)
			  
				 if($this->db->insert('usc_direct_payment', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 }
}

?>