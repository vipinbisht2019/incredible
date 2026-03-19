<?php 
   /**
    *
    */
 class Carcansllationchargemanage extends CI_Model
    {
      

	  //-----------------------------------------add------------------------------------------------			 
			function carcansllationcharge_add($data)
			 {
			  // Inserting in Table(usc_carcansllationcharge) of Database(usc)
			  
				 if($this->db->insert('usc_carcansllationcharge', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 0;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function carcansllationcharge_view($limit,$offset)
			 {
			   // Updateing in Table(usc_carcansllationcharge) of Database(usc)
			    	$this->db->order_by("CancellationID", "desc");
				   $query = $this->db->get('usc_carcansllationcharge',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_carcansllationcharge');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function carcansllationcharge_delete($id)
			 {
			   // Deleteing in Table(usc_carcansllationcharge) of Database(usc)
			    			  
					$this->db->where('CancellationID', $id);
					$this->db->delete('usc_carcansllationcharge');
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
	       
		    function carcansllationcharge_edit($id)
			   {
			      // Deleteing in Table(usc_carcansllationcharge) of Database(usc)
			    			  
						$this->db->where('CancellationID', $id);
						$query = $this->db->get('usc_carcansllationcharge');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function carcansllationcharge_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_carcansllationcharge) of Database(usc)
			    			  
						$this->db->where('CancellationID', $id);
						$query = $this->db->update('usc_carcansllationcharge',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_carcansllationcharge) of Database(usc)
			    			  
					$this->db->where_in('CancellationID', $id);
					$this->db->delete('usc_carcansllationcharge');
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
			   // Deleteing in Table(usc_carcansllationcharge) of Database(usc)
			    			  
					$this->db->where_in('CancellationID', $id1);
					$query = $this->db->update('usc_carcansllationcharge',$data);
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
			   // Deleteing in Table(usc_carcansllationcharge) of Database(usc)
			    			  
					$this->db->where_in('CancellationID', $id1);
					$query = $this->db->update('usc_carcansllationcharge',$data);
			
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