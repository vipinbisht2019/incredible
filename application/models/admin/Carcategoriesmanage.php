<?php 
   /**
 
   */
   class Carcategoriesmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function carcategories_add($data)
			 {
			  // Inserting in Table(usc_cartourcategories) of Database(usc)
			  
				 if($this->db->insert('usc_cartourcategories', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function carcategories_view($limit,$offset)
			 {
			   // Updateing in Table(usc_cartourcategories) of Database(usc)
			    	$this->db->order_by("carTourCategoriesId ", "desc");
				   $query = $this->db->get('usc_cartourcategories',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_cartourcategories');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function carcategories_delete($id)
			 {
			   // Deleteing in Table(usc_cartourcategories) of Database(usc)
			    			  
					$this->db->where('carTourCategoriesId ', $id);
					$this->db->delete('usc_cartourcategories');
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
	       
		    function carcategories_edit($id)
			   {
			      // Deleteing in Table(usc_cartourcategories) of Database(usc)
			    			  
						$this->db->where('carTourCategoriesId ', $id);
						$query = $this->db->get('usc_cartourcategories');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function carcategories_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_cartourcategories) of Database(usc)
			    			  
						$this->db->where('carTourCategoriesId ', $id);
						$query = $this->db->update('usc_cartourcategories',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_cartourcategories) of Database(usc)
			    			  
					$this->db->where_in('carTourCategoriesId ', $id);
					$this->db->delete('usc_cartourcategories');
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
			   // Deleteing in Table(usc_cartourcategories) of Database(usc)
			    			  
					$this->db->where_in('carTourCategoriesId', $id1);
					$query = $this->db->update('usc_cartourcategories',$data);
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
			   // Deleteing in Table(usc_cartourcategories) of Database(usc)
			    			  
					$this->db->where_in('carTourCategoriesId ', $id1);
					$query = $this->db->update('usc_cartourcategories',$data);
			
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