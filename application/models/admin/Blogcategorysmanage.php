<?php 
   /**
 
   */
   class Blogcategorysmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function blogcategory_add($data)
			 {
			  // Inserting in Table(usc_blog_category) of Database(usc)
			  
				 if($this->db->insert('usc_blog_category', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function blogcategory_view($limit,$offset)
			 {
			   // Updateing in Table(usc_blog_category) of Database(usc)
			    	$this->db->order_by("BlogCatID ", "desc");
				   $query = $this->db->get('usc_blog_category',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_blog_category');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function blogcategory_delete($id)
			 {
			   // Deleteing in Table(usc_blog_category) of Database(usc)
			    			  
					$this->db->where('BlogCatID ', $id);
					$this->db->delete('usc_blog_category');
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
	       
		    function blogcategory_edit($id)
			   {
			      // Deleteing in Table(usc_blog_category) of Database(usc)
			    			  
						$this->db->where('BlogCatID ', $id);
						$query = $this->db->get('usc_blog_category');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function blogcategory_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_blog_category) of Database(usc)
			    			  
						$this->db->where('BlogCatID ', $id);
						$query = $this->db->update('usc_blog_category',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_blog_category) of Database(usc)
			    			  
					$this->db->where_in('BlogCatID ', $id);
					$this->db->delete('usc_blog_category');
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
			   // Deleteing in Table(usc_blog_category) of Database(usc)
			    			  
					$this->db->where_in('BlogCatID', $id1);
					$query = $this->db->update('usc_blog_category',$data);
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
			   // Deleteing in Table(usc_blog_category) of Database(usc)
			    			  
					$this->db->where_in('BlogCatID ', $id1);
					$query = $this->db->update('usc_blog_category',$data);
			
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