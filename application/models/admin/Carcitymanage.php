<?php 
   /**
 
   */
   class Carcitymanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function carcity_add($data)
			 {
			  // Inserting in Table(usc_car_city) of Database(usc)
			  
				 if($this->db->insert('usc_car_city', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function carcity_view($limit,$offset)
			 {
			   // Updateing in Table(usc_car_city) of Database(usc)
			    	$this->db->order_by("CityId ", "desc");
				   $query = $this->db->get('usc_car_city',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_car_city');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function carcity_delete($id)
			 {
			   // Deleteing in Table(usc_car_city) of Database(usc)
			    			  
					$this->db->where('CityId ', $id);
					$this->db->delete('usc_car_city');
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
	       
		    function carcity_edit($id)
			   {
			      // Deleteing in Table(usc_car_city) of Database(usc)
			    			  
						$this->db->where('CityId ', $id);
						$query = $this->db->get('usc_car_city');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function carcity_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_car_city) of Database(usc)
			    			  
						$this->db->where('CityId ', $id);
						$query = $this->db->update('usc_car_city',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_car_city) of Database(usc)
			    			  
					$this->db->where_in('CityId ', $id);
					$this->db->delete('usc_car_city');
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
			   // Deleteing in Table(usc_car_city) of Database(usc)
			    			  
					$this->db->where_in('CityId', $id1);
					$query = $this->db->update('usc_car_city',$data);
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
			   // Deleteing in Table(usc_car_city) of Database(usc)
			    			  
					$this->db->where_in('CityId ', $id1);
					$query = $this->db->update('usc_car_city',$data);
			
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
								->get('usc_car_city');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }		  		 				 
			 		  			 	
	   		 	 
			 
   }
?>