<?php 
   /**
 
   */
   class Gallary_imagemanager extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function gallary_image_add($data)
			 {
			  // Inserting in Table( usc_gallary_morephoto) of Database(usc)
			  
				 if($this->db->insert('usc_gallary_morephoto', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function gallary_image_view($id)
			 {
			   // Updateing in Table( usc_gallary_morephoto) of Database(usc)
			    		$this->db->where('gallery_id', $id);
						$query = $this->db->get('usc_gallary_morephoto');
						return $query->result_array();
						$this->db->close();
				
			 } 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function gallary_image_delete($id)
			 {
			   // Deleteing in Table( usc_gallary_morephoto) of Database(usc)
			    			  
					$this->db->where('photo_id', $id);
					$this->db->delete('usc_gallary_morephoto');
					 if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }  
						
			 } 	
			 
		 
		 //------------------------------------------ get gallary name ------------------------------------	 	 
			 
		      function get_gallary_name($id)
			   {
			      // Deleteing in Table(usc_gallery) of Database(usc)
			    		
						$this->db->select('ptitle');	  
						$this->db->where('gallery_id', $id);
						$query = $this->db->get('usc_gallery');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   		 	 
			 
   }
   

?>