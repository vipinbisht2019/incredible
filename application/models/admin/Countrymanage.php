<?php 
/**
*
************************************************************************************************************************************************
*
*/
   class Countrymanage extends CI_Model
   {
      
	  //-----------------------------------------add------------------------------------------------			 
			function country_add($data)
			 {
			  // Inserting in Table(usc_hotelsroomtype) of Database(usc)
			  
				 if($this->db->insert('usc_country', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function country_view($limit,$offset)
			 {
			   // Updateing in Table(usc_hotelsroomtype) of Database(usc)
			   
				
			       $this->db->from('usc_country as room',$limit,$offset);	       
							
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			     // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_hotelsroomtype');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function country_delete($id)
			 {
			    // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
					$this->db->where('countryid', $id);
					$this->db->delete('usc_country');
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
	       
		    function country_edit($id)
			   {
			       // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
						$this->db->where('countryid', $id);
						$query = $this->db->get('usc_country');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function country_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
						$this->db->where('countryid', $id);
						$query = $this->db->update('usc_country',$data);
						$this->db->close();
			  } 
			  
		 
	 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			    // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
					$this->db->where_in('countryid', $id);
					$this->db->delete('usc_country');
					
				///	echo $this->db->last_query(); die;
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
			    // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
					$this->db->where_in('countryid', $id1);
					$query = $this->db->update('usc_country',$data);
				
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
			   // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
					$this->db->where_in('countryid', $id1);
					$query = $this->db->update('usc_country',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 		 				 
			    function country_list()
			  {
			     // Deleteing in Table(usc_hotelsroomtype) of Database(usc) HotelName
								$this->db->select('countryid, country') 	
											->from('usc_country')
											->where('Status', 'Y')
											->order_by('country');
								$query = $this->db->get();
								return $query->result_array();
								
								// echo $this->db->last_query();
							 	 $this->db->close();
			  }   		  			 	
	   		 	 
			 
   }
?>