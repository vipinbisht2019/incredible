<?php 
   /**
 
   */
   class Carclassmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function carclass_add($data)
			 {
			  // Inserting in Table(usc_carclass) of Database(usc)
			  
				 if($this->db->insert('usc_carclass', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function carclass_view($limit,$offset)
			 {
			   // Updateing in Table(usc_carclass) of Database(usc)
			    	$this->db->order_by("carclassId ", "desc");
				   $query = $this->db->get('usc_carclass',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_carclass');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function carclass_delete($id)
			 {
			   // Deleteing in Table(usc_carclass) of Database(usc)
			    			  
					$this->db->where('carclassId ', $id);
					$this->db->delete('usc_carclass');
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
	       
		    function carclass_edit($id)
			   {
			      // Deleteing in Table(usc_carclass) of Database(usc)
			    			  
						$this->db->where('carclassId ', $id);
						$query = $this->db->get('usc_carclass');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function carclass_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_carclass) of Database(usc)
			    			  
						$this->db->where('carclassId ', $id);
						$query = $this->db->update('usc_carclass',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_carclass) of Database(usc)
			    			  
					$this->db->where_in('carclassId ', $id);
					$this->db->delete('usc_carclass');
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
			   // Deleteing in Table(usc_carclass) of Database(usc)
			    			  
					$this->db->where_in('carclassId', $id1);
					$query = $this->db->update('usc_carclass',$data);
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
			   // Deleteing in Table(usc_carclass) of Database(usc)
			    			  
					$this->db->where_in('carclassId ', $id1);
					$query = $this->db->update('usc_carclass',$data);
			
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