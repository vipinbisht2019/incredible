<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Login_register extends MY_model
  {


	public function login(){

		$this->db->where('page_id', '1');
		$query = $this->db->get('usc_static_pages')->result_array();
			// print_r($query);
		return $query;
		$this->db->close();  

	}	 
	
	function auth($user_email,$user_passwd)
			  {
				//  echo $user_email;
				//  echo "<br>";
			   //   echo $user_passwd;
				  		$this->db->select('id, user_name, user_email, user_passwd');				
						$this->db->where(['user_email' => $user_email, 'user_passwd' => $user_passwd]);
						$q = $this->db->get('usc_customers');

							//	 echo $this->db->last_query();
							//	 die();
				
						if ($q->num_rows())
						 {
						  return $q->result_array();
							
						 } else {
						
							 return 0;
						}
			   }

	// ---------------------------------------- User register ------------------------------------------------------			  
	public function register_user($data)
		 {
			
			 if($this->db->insert('usc_customers', $data))
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