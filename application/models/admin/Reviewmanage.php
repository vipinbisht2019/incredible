<?php 
   /**
 
   */
   class Reviewmanage extends CI_Model
   {
      

       //------------------------------------view-----------------------------------------------------		
	       
		    function review_view($limit,$offset)
			 {
			   // Updateing in Table(usc_tour_review) of Database(usc)
			    	$this->db->order_by("ReviewId ", "desc");
				   $query = $this->db->get('usc_tour_review',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_tour_review');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function review_delete($id)
			 {
			   // Deleteing in Table(usc_tour_review) of Database(usc)
			    			  
					$this->db->where('ReviewId ', $id);
					$this->db->delete('usc_tour_review');
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
	       
		    function review_edit($id)
			   {
			      // Deleteing in Table(usc_tour_review) of Database(usc)
			    			  
						$this->db->where('ReviewId ', $id);
						$query = $this->db->get('usc_tour_review');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function review_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_tour_review) of Database(usc)
			    			  
						$this->db->where('ReviewId ', $id);
						$query = $this->db->update('usc_tour_review',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_tour_review) of Database(usc)
			    			  
					$this->db->where_in('ReviewId ', $id);
					$this->db->delete('usc_tour_review');
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
			   // Deleteing in Table(usc_tour_review) of Database(usc)
			    			  
					$this->db->where_in('ReviewId ', $id1);
					$query = $this->db->update('usc_tour_review',$data);
					
					
					
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
			   // Deleteing in Table(usc_tour_review) of Database(usc)
			    			  
					$this->db->where_in('ReviewId ', $id1);
					$query = $this->db->update('usc_tour_review',$data);
					
					
					
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