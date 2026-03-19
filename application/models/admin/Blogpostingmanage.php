<?php 
   /**
 
   */
 class Blogpostingmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function blogposting_add($data)
			 {
			  // Inserting in Table(usc_blog_postings) of Database(usc)
			  
				 if($this->db->insert('usc_blog_postings', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	
			  

 
		
       //------------------------------------view-----------------------------------------------------		
	       
		    function blogposting_view($limit,$offset)
			 {
			   // Updateing in Table(usc_blog_postings) of Database(usc)
			    	$this->db->order_by("PostingID ", "desc");
				   $query = $this->db->get('usc_blog_postings',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_blog_postings');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function blogposting_delete($id)
			 {
			   // Deleteing in Table(usc_blog_postings) of Database(usc)
			    			  
					$this->db->where('PostingID ', $id);
					$this->db->delete('usc_blog_postings');
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
	       
		    function blogposting_edit($id)
			   {
			      // Deleteing in Table(usc_blog_postings) of Database(usc)
			    			  
						$this->db->where('PostingID ', $id);
						$query = $this->db->get('usc_blog_postings');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function blogposting_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_blog_postings) of Database(usc)
			    			  
						$this->db->where('PostingID ', $id);
						$query = $this->db->update('usc_blog_postings',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_blog_postings) of Database(usc)
			    			  
					$this->db->where_in('PostingID ', $id);
					$this->db->delete('usc_blog_postings');
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
			   // Deleteing in Table(usc_blog_postings) of Database(usc)
			    			  
					$this->db->where_in('PostingID', $id1);
					$query = $this->db->update('usc_blog_postings',$data);
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
			   // Deleteing in Table(usc_blog_postings) of Database(usc)
			    			  
					$this->db->where_in('PostingID ', $id1);
					$query = $this->db->update('usc_blog_postings',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 }

   // Dublicate Check #####################################################################

	         function check_duplicate($CityName)
			      {
			   								
						$q = $this->db->where(['CityName' => $CityName])
								->get('usc_blog_postings');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }
			   
			   
			   
	   function category_dropdown()
			   {
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    		
						$this->db->select('BlogCatID,BlogCatName')	  
						         //->where('IsActive', 'Y')
						         ->order_by('BlogCatName');
						$query = $this->db->get('usc_blog_category');
						return $query->result_array();
						$this->db->close();
				 }		  		 				 
			 		  			 	
	   		 	 
			 
   }
?>