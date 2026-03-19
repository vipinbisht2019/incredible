<?php 
   /**
 
   */
   class Cancellationpolicymanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function cancellationpolicy_add($data)
			 {
			  // Inserting in Table(usc_cancellationpolicy) of Database(usc)
			  
				 if($this->db->insert('usc_cancellationpolicy', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 0;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function cancellationpolicy_view($limit,$offset)
			 {
			   // Updateing in Table(usc_cancellationpolicy) of Database(usc)
			    	$this->db->order_by("CancellationID ", "desc");
				   $query = $this->db->get('usc_cancellationpolicy',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_cancellationpolicy');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function cancellationpolicy_delete($id)
			 {
			   // Deleteing in Table(usc_cancellationpolicy) of Database(usc)
			    			  
					$this->db->where('CancellationID ', $id);
					$this->db->delete('usc_cancellationpolicy');
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
	       
		    function cancellationpolicy_edit($id)
			   {
			      // Deleteing in Table(usc_cancellationpolicy) of Database(usc)
			    			  
						$this->db->where('CancellationID ', $id);
						$query = $this->db->get('usc_cancellationpolicy');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function cancellationpolicy_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_cancellationpolicy) of Database(usc)
			    			  
						$this->db->where('CancellationID ', $id);
						$query = $this->db->update('usc_cancellationpolicy',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_cancellationpolicy) of Database(usc)
			    			  
					$this->db->where_in('CancellationID', $id);
					$this->db->delete('usc_cancellationpolicy');
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
			   // Deleteing in Table(usc_cancellationpolicy) of Database(usc)
			    			  
					$this->db->where_in('CancellationID', $id1);
					$query = $this->db->update('usc_cancellationpolicy',$data);
				/*	
					echo $this->db->last_query();
					die();
					*/
					
					
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
			   // Deleteing in Table(usc_cancellationpolicy) of Database(usc)
			    			  
					$this->db->where_in('CancellationID ', $id1);
					$query = $this->db->update('usc_cancellationpolicy',$data);
			
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