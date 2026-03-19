<?php 
   /**
 
   */
   class Testimonialsmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function testimonials_add($data)
			 {
			  // Inserting in Table(usc_testimonial) of Database(usc)
			  
				 if($this->db->insert('usc_testimonial', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function testimonials_view($limit,$offset)
			 {
			   // Updateing in Table(usc_testimonial) of Database(usc)
			    
				   $query = $this->db->get('usc_testimonial',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_testimonial) of Database(usc)
			    
				   $query = $this->db->get('usc_testimonial');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function testimonials_delete($id)
			 {
			   // Deleteing in Table(usc_testimonial) of Database(usc)
			    			  
					$this->db->where('TestimonialId', $id);
					$this->db->delete('usc_testimonial');
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
	       
		    function testimonials_edit($id)
			   {
			      // Deleteing in Table(usc_testimonial) of Database(usc)
			    			  
						$this->db->where('TestimonialId', $id);
						$query = $this->db->get('usc_testimonial');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function testimonials_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_testimonial) of Database(usc)
			    			  
						$this->db->where('TestimonialId', $id);
						$query = $this->db->update('usc_testimonial',$data);
						$this->db->close();
			  } 	
			  
			  
		########################################################################################################################################
		################################################  Bulk Action activate, deactivate and delete ##########################################
		#########################################################################################################################################  	
		
		// ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_testimonial) of Database(usc)
			    			  
					$this->db->where_in('TestimonialId', $id);
					$this->db->delete('usc_testimonial');
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
			   // Deleteing in Table(usc_testimonial) of Database(usc)
			    			  
					$this->db->where_in('TestimonialId', $id1);
					$query = $this->db->update('usc_testimonial',$data);
					
					
					
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
			   // Deleteing in Table(usc_testimonial) of Database(usc)
			    			  
					$this->db->where_in('TestimonialId', $id1);
					$query = $this->db->update('usc_testimonial',$data);
								
					
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