<?php 
   /**
 
   */
   class Featuremanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function feature_add($data)
			 {
			  // Inserting in Table(usc_tourfeature) of Database(usc)
			  
				 if($this->db->insert('usc_tourfeature', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function feature_view($limit,$offset)
			 {
			   // Updateing in Table(usc_tourfeature) of Database(usc)
			    	$this->db->order_by("TourFeatureId ", "desc");
				   $query = $this->db->get('usc_tourfeature',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_tourfeature');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function feature_delete($id)
			 {
			   // Deleteing in Table(usc_tourfeature) of Database(usc)
			    			  
					$this->db->where('TourFeatureId ', $id);
					$this->db->delete('usc_tourfeature');
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
	       
		    function feature_edit($id)
			   {
			      // Deleteing in Table(usc_tourfeature) of Database(usc)
			    			  
						$this->db->where('TourFeatureId ', $id);
						$query = $this->db->get('usc_tourfeature');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function feature_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_tourfeature) of Database(usc)
			    			  
						$this->db->where('TourFeatureId ', $id);
						$query = $this->db->update('usc_tourfeature',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_tourfeature) of Database(usc)
			    			  
					$this->db->where_in('TourFeatureId ', $id);
					$this->db->delete('usc_tourfeature');
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
			   // Deleteing in Table(usc_tourfeature) of Database(usc)
			    			  
					$this->db->where_in('TourFeatureId', $id1);
					$query = $this->db->update('usc_tourfeature',$data);
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
			   // Deleteing in Table(usc_tourfeature) of Database(usc)
			    			  
					$this->db->where_in('TourFeatureId ', $id1);
					$query = $this->db->update('usc_tourfeature',$data);
			
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