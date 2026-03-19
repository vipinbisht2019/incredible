<?php 
   /**
 
   */
class Changepassword extends CI_Model
   {
   
	//------------------------------------Get Password---------------------------------------------
	       
		    function password_get($id)
			   {
			      //  in Table(usc_admin) of Database(usc)
			    			  
						$this->db->where('adm_id', $id);
						$query = $this->db->get('usc_admin');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date--------------------------------------------------	
	       
		   function pasword_edit_data($username,$password,$newpassword,$new_conf_password)
			  {
			     // Updating password in Table(usc_admin) of Database(usc)
			    		
		
			     $sql = $this->db->where(['adm_login_id' => $username, 'adm_password' => $password])
						          ->get('usc_admin');
								  
					   if($sql->num_rows()) 
					      {
						        $id=$sql->row()->adm_id ;
							  
							    $data=array('adm_password'=>$newpassword,'adm_conpwd'=>$newpassword);
							    $this->db->where('adm_id', $id);
					        	$query = $this->db->update('usc_admin',$data);
								
								echo $sql = $this->db->last_query();
							    
								 if($this->db->affected_rows())	
								   { 
							 
							         return 1;
								   
								   }
							
						 } 
						else
						 {
						
							 return 0;
						}			  
								  
						//$query = $this->db->update('usc_admin',$data);
						//$this->db->close();
			  } 	 	
	   		 	 
			 
   }
   

?>