<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Contactus_page extends MY_model
{
	
	public function contact_us()
	{
		
		$this->db->where('page_id', '25');
		$query = $this->db->get('usc_static_pages');
		return $query->result_array();
		$this->db->close();  
	}
	
	public function contactAdd(){
		
		
		
	}
		
}
   


?>