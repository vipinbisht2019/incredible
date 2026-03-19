<?php 
   /**
 
   */
class Facilitiesmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function facilities_add($data)
			 {
			  // Inserting in Table(usc_facilities) of Database(usc)
			  
				 if($this->db->insert('usc_facilities', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function facilities_view($limit,$offset)
			 {
			   // Updateing in Table(usc_facilities) of Database(usc)
	
			    
				   $query = $this->db->get('usc_facilities',$limit,$offset);
                   return $query->result_array();
                   $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_facilities) of Database(usc)
			    
				   $query = $this->db->get('usc_facilities');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function facilities_delete($id)
			 {
			   // Deleteing in Table(usc_facilities) of Database(usc)
			    			  
					$this->db->where('FId', $id);
					$this->db->delete('usc_facilities');
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
	       
		    function facilities_edit($id)
			   {
			      // Deleteing in Table(usc_facilities) of Database(usc)
			    			  
						$this->db->where('FId', $id);
						$query = $this->db->get('usc_facilities');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function facilities_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_facilities) of Database(usc)
			    			  
						$this->db->where('FId', $id);
						$query = $this->db->update('usc_facilities',$data);
						$this->db->close();
			  } 	
			  
			  
		########################################################################################################################################
		################################################  Bulk Action activate, deactivate and delete ##########################################
		#########################################################################################################################################  	
		
		// ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_facilities) of Database(usc)
			    			  
					$this->db->where_in('FId', $id);
					$this->db->delete('usc_facilities');
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
			   // Deleteing in Table(usc_facilities) of Database(usc)
			    			  
					$this->db->where_in('FId', $id1);
					$query = $this->db->update('usc_facilities',$data);
					
					
					
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
			   // Deleteing in Table(usc_facilities) of Database(usc)
			    			  
					$this->db->where_in('FId', $id1);
					$query = $this->db->update('usc_facilities',$data);
								
					
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