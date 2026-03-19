<?php 
   /**
    *
    */
 class Temppocansllationchargemanage extends CI_Model
    {
      

	  //-----------------------------------------add------------------------------------------------			 
			function temppocansllationcharge_add($data)
			 {
			  // Inserting in Table(usc_temppocansllationcharge) of Database(usc)
			  
				 if($this->db->insert('usc_temppocansllationcharge', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 0;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function temppocansllationcharge_view($limit,$offset)
			 {
			   // Updateing in Table(usc_temppocansllationcharge) of Database(usc)
			    	$this->db->order_by("CancellationID", "desc");
				   $query = $this->db->get('usc_temppocansllationcharge',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_temppocansllationcharge');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function temppocansllationcharge_delete($id)
			 {
			   // Deleteing in Table(usc_temppocansllationcharge) of Database(usc)
			    			  
					$this->db->where('CancellationID', $id);
					$this->db->delete('usc_temppocansllationcharge');
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
	       
		    function temppocansllationcharge_edit($id)
			   {
			      // Deleteing in Table(usc_temppocansllationcharge) of Database(usc)
			    			  
						$this->db->where('CancellationID', $id);
						$query = $this->db->get('usc_temppocansllationcharge');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function temppocansllationcharge_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_temppocansllationcharge) of Database(usc)
			    			  
						$this->db->where('CancellationID', $id);
						$query = $this->db->update('usc_temppocansllationcharge',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_temppocansllationcharge) of Database(usc)
			    			  
					$this->db->where_in('CancellationID', $id);
					$this->db->delete('usc_temppocansllationcharge');
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
			   // Deleteing in Table(usc_temppocansllationcharge) of Database(usc)
			    			  
					$this->db->where_in('CancellationID', $id1);
					$query = $this->db->update('usc_temppocansllationcharge',$data);
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
			   // Deleteing in Table(usc_temppocansllationcharge) of Database(usc)
			    			  
					$this->db->where_in('CancellationID', $id1);
					$query = $this->db->update('usc_temppocansllationcharge',$data);
			
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