<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Changepassword_page extends MY_model
  {

			   
			   //------------------------------------Get Password---------------------------------------------
	       
		    function password_get($id)
			   {
			      //  in Table(hem_admin) of Database(HEM)
			    		//print_r($id); die;
						$this->db->select('id,user_name,user_email');	  
						$this->db->where('id', $id);
						$query = $this->db->get('usc_customers');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date--------------------------------------------------	
	       
	 function pasword_edit_data($username,$password,$newpassword,$new_conf_password)
		  {

			// echo $username; 
			// die;
			   		
			     $sql = $this->db->where(['id' => $username, 'user_passwd' => $password])
						         ->get(' usc_customers');
				//	echo $this->db->last_query(); die;
						
					 if($sql->num_rows()) 
					      {
						        $id=$sql->row()->id ;
							  
							    $data=array('user_passwd' => $newpassword);
							    $this->db->where('id', $id);
					        	$query = $this->db->update(' usc_customers',$data);

							//	echo $this->db->last_queryt(); die;

								if($this->db->affected_rows())	
								   { 
							           return 1;
								   }
						 } 
						else
						 {
						
							 return 0;
						 }			  
			
			
			 } 	 	
	   		 	 
				
		
	 
    
}
   


?>