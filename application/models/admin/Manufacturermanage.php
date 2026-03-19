<?php 
   /**
 
   */
   class Manufacturermanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function manufacturer_add($data)
			 {
			  // Inserting in Table(usc_carmanufacturer) of Database(usc)
			  
				 if($this->db->insert('usc_carmanufacturer', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function manufacturer_view($limit,$offset)
			 {
			   // Updateing in Table(usc_carmanufacturer) of Database(usc)
			    	$this->db->order_by("carmanufacturerId ", "desc");
				   $query = $this->db->get('usc_carmanufacturer',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_carmanufacturer');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function manufacturer_delete($id)
			 {
			   // Deleteing in Table(usc_carmanufacturer) of Database(usc)
			    			  
					$this->db->where('carmanufacturerId ', $id);
					$this->db->delete('usc_carmanufacturer');
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
	       
		    function manufacturer_edit($id)
			   {
			      // Deleteing in Table(usc_carmanufacturer) of Database(usc)
			    			  
						$this->db->where('carmanufacturerId ', $id);
						$query = $this->db->get('usc_carmanufacturer');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function manufacturer_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_carmanufacturer) of Database(usc)
			    			  
						$this->db->where('carmanufacturerId ', $id);
						$query = $this->db->update('usc_carmanufacturer',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_carmanufacturer) of Database(usc)
			    			  
					$this->db->where_in('carmanufacturerId ', $id);
					$this->db->delete('usc_carmanufacturer');
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
			   // Deleteing in Table(usc_carmanufacturer) of Database(usc)
			    			  
					$this->db->where_in('carmanufacturerId', $id1);
					$query = $this->db->update('usc_carmanufacturer',$data);
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
			   // Deleteing in Table(usc_carmanufacturer) of Database(usc)
			    			  
					$this->db->where_in('carmanufacturerId ', $id1);
					$query = $this->db->update('usc_carmanufacturer',$data);
			
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