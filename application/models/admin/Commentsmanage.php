<?php 
   /**
        ************************************************************************************************
   */
class Commentsmanage extends CI_Model
   {
      

	 
       //------------------------------------view-----------------------------------------------------		
	    
		function comments_view($limit,$offset)
			 {
			   // Updateing in Table(usc_blog_comments) of Database(usc)  COUNT(user_id) as total'
			                $this->db->select('*') ;
			                $this->db->where('IsActive','Y');
			                $this->db->order_by('CommentsID','desc');
							$this->db->limit($limit,$offset);
				   $query = $this->db->get('usc_blog_comments');
                   return $query->result_array();
                  $this->db->close();
				
			 } 
			 
	 //------------------------------------Get toatal record in table for paging-----------------------------------------------------		
	       
		    function get_tatal()
			 {
			   // Updateing in Table(usc_gallery) of Database(usc)
			                  $this->db->where('IsActive','Y');
				   $query = $this->db->get('usc_blog_comments');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 

			 
 //------------------------------------Delete-----------------------------------------------------		
	       
		    function comments_delete($id)
			 {
			   // Deleteing in Table(usc_blog_comments) of Database(usc)
			    			  
					$this->db->where('CommentsID', $id);
					$this->db->delete('usc_blog_comments');
					 if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }  
						
			 } 	
			 
	//-----------------------------------------------------------------------------------------
	
	         		// ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_blog_comments) of Database(usc)
			    			  
					$this->db->where('CommentsID', $id);
					$this->db->delete('usc_blog_comments');
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
			   // Deleteing in Table(usc_blog_comments) of Database(usc)
			    			  
					$this->db->where('CommentsID', $id1);
					$query = $this->db->update('usc_blog_comments',$data);
					
					
					
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