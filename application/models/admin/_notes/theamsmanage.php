<?php 
   /**
 
   */
   class Theamsmanage extends CI_Model
   {
      

       //------------------------------------view-----------------------------------------------------		
	       
		    function theams_view($limit,$offset)
			 {
			   // Updateing in Table(usc_theams) of Database(usc)
			    	$this->db->order_by("TheamsId ", "desc");
				   $query = $this->db->get('usc_theams',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_theams');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function theams_delete($id)
			 {
			   // Deleteing in Table(usc_theams) of Database(usc)
			    			  
					$this->db->where('TheamsId ', $id);
					$this->db->delete('usc_theams');
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
	       
		    function theams_edit($id)
			   {
			      // Deleteing in Table(usc_theams) of Database(usc)
			    			  
						$this->db->where('TheamsId ', $id);
						$query = $this->db->get('usc_theams');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function theams_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_theams) of Database(usc)
			    			  
						$this->db->where('TheamsId ', $id);
						$query = $this->db->update('usc_theams',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_theams) of Database(usc)
			    			  
					$this->db->where_in('TheamsId ', $id);
					$this->db->delete('usc_theams');
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
			   // Deleteing in Table(usc_theams) of Database(usc)
			    			  
					$this->db->where_in('TheamsId ', $id1);
					$query = $this->db->update('usc_theams',$data);
					
					
					
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
			   // Deleteing in Table(usc_theams) of Database(usc)
			    			  
					$this->db->where_in('TheamsId ', $id1);
					$query = $this->db->update('usc_theams',$data);
					
					
					
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