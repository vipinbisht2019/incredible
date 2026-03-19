<?php 
   /**
 
   */
   class Staffmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function staff_add($data)
			 {
			  // Inserting in Table(usc_staff) of Database(usc)
			  
				 if($this->db->insert('usc_staff', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function staff_view($limit,$offset)
			 {
			   // Updateing in Table(usc_staff) of Database(usc)
			    
				   $query = $this->db->get('usc_staff',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
			 
	 //------------------------------------Get toatal record in table for paging-----------------------------------------------------		
	       
		    function get_tatal()
			 {
			   // Updateing in Table(usc_gallery) of Database(usc)
			    
				   $query = $this->db->get('usc_staff');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 
	 	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function staff_delete($id)
			 {
			   // Deleteing in Table(usc_staff) of Database(usc)
			    			  
					$this->db->where('team_id', $id);
					$this->db->delete('usc_staff');
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
	       
		    function staff_edit($id)
			   {
				 // Deleteing in Table(usc_staff) of Database(usc)
					$this->db->where('team_id', $id);
					$query = $this->db->get('usc_staff');
					return $query->result_array();
					$this->db->close();
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function staff_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_staff) of Database(usc)
			    			  
						$this->db->where('team_id', $id);
						$query = $this->db->update('usc_staff',$data);
						$this->db->close();
			  } 
			  
		########################################################################################################################################
		################################################  Bulk Action activate, deactivate and delete ##########################################
		#########################################################################################################################################  	
		
		// ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_staff) of Database(usc)
			    			  
					$this->db->where_in('team_id', $id);
					$this->db->delete('usc_staff');
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
			   // Deleteing in Table(usc_staff) of Database(usc)
			    			  
					$this->db->where_in('team_id', $id1);
					$query = $this->db->update('usc_staff',$data);
					
					
					
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
			   // Deleteing in Table(usc_staff) of Database(usc)
			    			  
					$this->db->where_in('team_id', $id1);
					$query = $this->db->update('usc_staff',$data);
					
					
					
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