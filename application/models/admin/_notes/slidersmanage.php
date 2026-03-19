<?php 
   /**
 
   */
   class Slidersmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function sliders_add($data)
			 {
			  // Inserting in Table(usc_flash) of Database(usc)
			  
				 if($this->db->insert('usc_flash', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function sliders_view($limit,$offset)
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_flash',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
	     //------------------------------------Get total record for paging -----------------------------------------------------				 
	   function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_flash');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 		 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function sliders_delete($id)
			 {
			   // Deleteing in Table(usc_flash) of Database(usc)
			    			  
					$this->db->where('FlashId', $id);
					$this->db->delete('usc_flash');
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
	       
		    function sliders_edit($id)
			   {
			      // Deleteing in Table(usc_flash) of Database(usc)
			    			  
						$this->db->where('FlashId', $id);
						$query = $this->db->get('usc_flash');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function sliders_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_flash) of Database(usc)
			    			  
						$this->db->where('FlashId', $id);
						$query = $this->db->update('usc_flash',$data);
						$this->db->close();
			  } 
			  
		########################################################################################################################################
		################################################  Bulk Action activate, deactivate and delete ##########################################
		#########################################################################################################################################  	
		
		// ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_flash) of Database(usc)
			    			  
					$this->db->where_in('FlashId', $id);
					$this->db->delete('usc_flash');
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
			   // Deleteing in Table(usc_flash) of Database(usc)
			    			  
					$this->db->where_in('FlashId', $id1);
					$query = $this->db->update('usc_flash',$data);
					
					
					
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
			   // Deleteing in Table(usc_flash) of Database(usc)
			    			  
					$this->db->where_in('FlashId', $id1);
					$query = $this->db->update('usc_flash',$data);
					
					
					
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