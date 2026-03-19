<?php 
   /**
 
   */
   class Faqmanager extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function faq_add($data)
			 {
			  // Inserting in Table(usc_faq) of Database(usc)
			  
				 if($this->db->insert('usc_faq', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function faq_view($limit,$offset)
			 {
			   // Updateing in Table(usc_faq) of Database(usc)
			    
				   $query = $this->db->get('usc_faq',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		
			    //------------------------------------Get toatal record in table for paging-----------------------------------------------------		
	       
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_faq');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function faq_delete($id)
			 {
			   // Deleteing in Table(usc_faq) of Database(usc)
			    			  
					$this->db->where('faq_id', $id);
					$this->db->delete('usc_faq');
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
	       
		    function faq_edit($id)
			   {
			      // Deleteing in Table(usc_faq) of Database(usc)
			    			  
						$this->db->where('faq_id', $id);
						$query = $this->db->get('usc_faq');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function faq_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_faq) of Database(usc)
			    			  
						$this->db->where('faq_id', $id);
						$query = $this->db->update('usc_faq',$data);
						$this->db->close();
			  } 		 	
	   		 	 
			 
   }
   

?>