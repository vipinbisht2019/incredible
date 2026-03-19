<?php 
   /**
 
   */
   class Sponsorsmanager extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function sponsor_add($data)
			 {
			  // Inserting in Table(usc_clients) of Database(usc)
			  
				 if($this->db->insert('usc_clients', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function sponsor_view($limit,$offset)
			 {
			   // Updateing in Table(usc_clients) of Database(usc)
			    
				   $query = $this->db->get('usc_clients',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
			 
		 //------------------------------------Get toatal record in table for paging-----------------------------------------------------		
	       
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_clients');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 	 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function sponsor_delete($id)
			 {
			   // Deleteing in Table(usc_clients) of Database(usc)
			    			  
					$this->db->where('id', $id);
					$this->db->delete('usc_clients');
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
	       
		    function sponsor_edit($id)
			   {
			      // Deleteing in Table(usc_clients) of Database(usc)
			    			  
						$this->db->where('id', $id);
						$query = $this->db->get('usc_clients');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function sponsor_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_clients) of Database(usc)
			    			  
						$this->db->where('id', $id);
						$query = $this->db->update('usc_clients',$data);
						$this->db->close();
			  } 		 	
	   		 	 
			 
   }
   

?>
