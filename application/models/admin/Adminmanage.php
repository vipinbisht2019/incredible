<?php 
   /**
  
  
   */
   class Adminmanage extends CI_Model
   {
      
	  //------------------------------------check duplicate  add--------------------------------------
			function check_duplicate($username_admin)
			 {
							
					$q = $this->db->where(['adm_login_id' => $username_admin])
							->get('usc_admin');
										
					if ($q->num_rows()) 
					  {
						return 0;
					  } 
					else
					 {
					
						 return 1;
					 }
					 
			
			 }
	    
		//------------------------------------check duplicate edit ------------------------------------
			function check_duplicate_edit($username_admin,$id)
			 {
							
					$q = $this->db->where(['adm_login_id' => $username_admin,'adm_id!=' => $id])
							->get('usc_admin');
										
					if ($q->num_rows()) 
					  {
						return 0;
					  } 
					else
					 {
					
						 return 1;
					 }
					 
			
			 }		 
	  //-----------------------------------------add------------------------------------------------			 
			function admin_add($data)
			 {
			  // Inserting in Table(usc_admin) of Database(usc)
			  
				 if($this->db->insert('usc_admin', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function admin_view($limit,$offset)
			 {
			   // Updateing in Table(usc_admin) of Database(usc)
			    
				   $query = $this->db->get('usc_admin',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
			 
		  //----------------------------------------------- Get total data -----------------------------		
		
		    //------------------------------------view-----------------------------------------------------		
	       
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_admin');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function admin_delete($id)
			 {
			   // Deleteing in Table(usc_admin) of Database(usc)
			    			  
					$this->db->where('adm_id', $id);
					$this->db->delete('usc_admin');
					 if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }  
						
			 } 		 
			 
		  //------------------------------------edit view-----------------------------------------------------		
	       
		    function admin_edit($id)
			 {
			   // Deleteing in Table(usc_admin) of Database(usc)
			    			  
						$this->db->where('adm_id', $id);
						$query = $this->db->get('usc_admin');
						return $query->result_array();
						$this->db->close();
					
						
			 } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function admin_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_admin) of Database(usc)
			    			  
						$this->db->where('adm_id', $id);
						$query = $this->db->update('usc_admin',$data);
						$this->db->close();
			  } 
			  
	// ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_admin) of Database(usc)
			    			  
					$this->db->where_in('adm_id', $id);
					$this->db->delete('usc_admin');
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 		
			 
			
		// ----------------------------------------- activate multiple  recoderd -------------------------------		  
		 function admin_activate_bulk($id1,$data)
			 {
			   // Deleteing in Table(usc_admin) of Database(usc)
			    			  
					$this->db->where_in('adm_id', $id1);
					$query = $this->db->update('usc_admin',$data);
					
					
					
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 		 
			 
	// ----------------------------------------- deactivate multiple  recoderd -------------------------------		  
		 function admin_deactivate_bulk($id1,$data)
			 {
			   // Deleteing in Table(usc_admin) of Database(usc)
			    			  
					$this->db->where_in('adm_id', $id1);
					$query = $this->db->update('usc_admin',$data);
					
					
					
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 		 				 
			 		  	
			  
 	
	   		 	 
			 
   }
   

?>