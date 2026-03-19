<?php 
   /**
 
   */
   class Busesboardingmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function busesboarding_add($data)
			 {
			  // Inserting in Table(usc_buses_boarding) of Database(usc)
			  
				 if($this->db->insert('usc_buses_boarding', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function busesboarding_view($limit,$offset)
			 {
			   // Updateing in Table(usc_buses_boarding) of Database(usc)
								
					$this->db->from('usc_buses_boarding as sboard')
					         ->limit($limit,$offset)
				            ->join("usc_buses_city as city", "sboard.CityId = city.CityId")
			    	        ->order_by("sboard.BoardingId", "desc");
				    $query = $this->db->get();
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_buses_boarding');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function busesboarding_delete($id)
			 {
			   // Deleteing in Table(usc_buses_boarding) of Database(usc)
			    			  
					$this->db->where('BoardingId ', $id);
					$this->db->delete('usc_buses_boarding');
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
	       
		    function busesboarding_edit($id)
			   {
			      // Deleteing in Table(usc_buses_boarding) of Database(usc)
			    			  
						$this->db->where('BoardingId ', $id);
						$query = $this->db->get('usc_buses_boarding');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function busesboarding_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_buses_boarding) of Database(usc)
			    			  
						$this->db->where('BoardingId ', $id);
						$query = $this->db->update('usc_buses_boarding',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_buses_boarding) of Database(usc)
			    			  
					$this->db->where_in('BoardingId ', $id);
					$this->db->delete('usc_buses_boarding');
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
			   // Deleteing in Table(usc_buses_boarding) of Database(usc)
			    			  
					$this->db->where_in('BoardingId', $id1);
					$query = $this->db->update('usc_buses_boarding',$data);
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
			   // Deleteing in Table(usc_buses_boarding) of Database(usc)
			    			  
					$this->db->where_in('BoardingId ', $id1);
					$query = $this->db->update('usc_buses_boarding',$data);
			
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

	         function check_duplicate($BoardingPointName)
			      {
			   								
						$q = $this->db->where(['BoardingPointName' => $BoardingPointName])
								->get('usc_buses_boarding');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }
			   
        	//-------------------------------------------------  Dropdown ---------------------------------------------------------	   	
		
		   public function dropdown_city()
		      {
			     $this->db->select('CityId,CityName')
				          ->where('Status','Y');
					$query=$this->db->get('usc_buses_city');
					return $query->result_array();
					$this->db->close();
					  
			  
			  }	   	
			 			   		  		 				 
			 		  			 	
	   		 	 
			 
   }
?>