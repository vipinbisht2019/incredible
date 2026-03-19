<?php 
   /**
 
   */
   class Staticmanage extends CI_Model
   {
      

	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function static_view($limit,$offset)
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_static_pages',$limit,$offset);
				   //$query = $this->db->limit($limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
	   
	    //------------------------------------Get toatal record in table for paging-----------------------------------------------------		
	       
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_static_pages');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 
	 
			 
		  //------------------------------------edit view-----------------------------------------------------		
	       
		    function static_edit($id)
			   {
			      // Deleteing in Table(usc_flash) of Database(usc)
			    			  
						$this->db->where('page_id', $id);
						$query = $this->db->get('usc_static_pages');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function static_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_flash) of Database(usc)
			    			  
						$this->db->where('page_id', $id);
						$query = $this->db->update('usc_static_pages',$data);
						$this->db->close();
			  } 		 	
	   		 	 
			 
   }
   

?>