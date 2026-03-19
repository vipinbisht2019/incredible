<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
 
   class Desktopmanage extends CI_Model
   {
   
      function admin_login(){
	  	
		$this->db->select('adm_login_id,admin_role,adm_name');
		$this->db->from('usc_admin');
		$this->db->where('adm_status','Active');
		$this->db->where('adm_id',$_SESSION['user_id']);
	  	$this->db->where('status','S');		
		$query = $this->db->get()->row_array();
		
		return $query;
		$this->db->close();
	  }
	 
   }
   

?>