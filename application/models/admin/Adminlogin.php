<?php 
   /**
  
  
   */
   class Adminlogin extends CI_Model
   {
      
	 
			function auth($username_admin,$password_admin)
			  {
			    
				    // $query = $this->db->get('usc_admin');
					// return $query->result_array();
                    // $this->db->close();  $this->db->last_query();
								
						$q = $this->db->where(['adm_login_id' => $username_admin, 'adm_password' => $password_admin])
								->get('usc_admin');
											
						if ($q->num_rows()) {
						  return $q->result_array();
							
						 } else {
						
							 return 0;
						}
						
						
						
			   }
   }
   

?>