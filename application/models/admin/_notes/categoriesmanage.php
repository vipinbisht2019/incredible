<?php 
   /**
 
   */
   class Categoriesmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function categories_add($data)
			 {
			  // Inserting in Table(usc_tourcategories) of Database(usc)
			  
				 if($this->db->insert('usc_tourcategories', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function categories_view($limit,$offset)
			 {
			   // Updateing in Table(usc_tourcategories) of Database(usc)
			    	$this->db->order_by("TourCategoriesId ", "desc");
				   $query = $this->db->get('usc_tourcategories',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_tourcategories');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function categories_delete($id)
			 {
			   // Deleteing in Table(usc_tourcategories) of Database(usc)
			    			  
					$this->db->where('TourCategoriesId ', $id);
					$this->db->delete('usc_tourcategories');
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
	       
		    function categories_edit($id)
			   {
			      // Deleteing in Table(usc_tourcategories) of Database(usc)
			    			  
						$this->db->where('TourCategoriesId ', $id);
						$query = $this->db->get('usc_tourcategories');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function categories_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_tourcategories) of Database(usc)
			    			  
						$this->db->where('TourCategoriesId ', $id);
						$query = $this->db->update('usc_tourcategories',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_tourcategories) of Database(usc)
			    			  
					$this->db->where_in('TourCategoriesId ', $id);
					$this->db->delete('usc_tourcategories');
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
			   // Deleteing in Table(usc_tourcategories) of Database(usc)
			    			  
					$this->db->where_in('TourCategoriesId', $id1);
					$query = $this->db->update('usc_tourcategories',$data);
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
			   // Deleteing in Table(usc_tourcategories) of Database(usc)
			    			  
					$this->db->where_in('TourCategoriesId ', $id1);
					$query = $this->db->update('usc_tourcategories',$data);
			
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