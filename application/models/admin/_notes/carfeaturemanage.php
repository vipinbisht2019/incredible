<?php 
   /**
 
   */
   class Carfeaturemanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function carfeature_add($data)
			 {
			  // Inserting in Table(usc_carfeature) of Database(usc)
			  
				 if($this->db->insert('usc_carfeature', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function carfeature_view($limit,$offset)
			 {
			   // Updateing in Table(usc_carfeature) of Database(usc)
			    	$this->db->order_by("FeatureId ", "desc");
				   $query = $this->db->get('usc_carfeature',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_carfeature');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function carfeature_delete($id)
			 {
			   // Deleteing in Table(usc_carfeature) of Database(usc)
			    			  
					$this->db->where('FeatureId ', $id);
					$this->db->delete('usc_carfeature');
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
	       
		    function carfeature_edit($id)
			   {
			      // Deleteing in Table(usc_carfeature) of Database(usc)
			    			  
						$this->db->where('FeatureId ', $id);
						$query = $this->db->get('usc_carfeature');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function carfeature_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_carfeature) of Database(usc)
			    			  
						$this->db->where('FeatureId ', $id);
						$query = $this->db->update('usc_carfeature',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_carfeature) of Database(usc)
			    			  
					$this->db->where_in('FeatureId ', $id);
					$this->db->delete('usc_carfeature');
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
			   // Deleteing in Table(usc_carfeature) of Database(usc)
			    			  
					$this->db->where_in('FeatureId', $id1);
					$query = $this->db->update('usc_carfeature',$data);
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
			   // Deleteing in Table(usc_carfeature) of Database(usc)
			    			  
					$this->db->where_in('FeatureId ', $id1);
					$query = $this->db->update('usc_carfeature',$data);
			
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