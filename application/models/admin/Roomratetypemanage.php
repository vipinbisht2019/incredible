<?php 
/**
*
************************************************************************************************************************************************
*
*/
   class Roomratetypemanage extends CI_Model
   {
      
	  //-----------------------------------------add------------------------------------------------			 
			function roomratetype_add($data)
			 {
			  // Inserting in Table(usc_hotelsroomtype) of Database(usc)
			  
				 if($this->db->insert('usc_hotelsroomratetype', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function roomratetype_view($limit,$offset)
			 {
			   // Updateing in Table(usc_hotelsroomtype) of Database(usc)
			   
				
			       $this->db->from('usc_hotelsroomratetype',$limit,$offset)				          
			    	        ->order_by("SortOrder");
							
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			     // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_hotelsroomratetype');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function roomtype_delete($id)
			 {
			    // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
					$this->db->where('id', $id);
					$this->db->delete('usc_hotelsroomratetype');
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
	       
		    function roomtype_edit($id)
			   {
			       // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
						$this->db->where('id', $id);
						$query = $this->db->get('usc_hotelsroomratetype');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function roomtype_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  print_r($data); die;
						$this->db->where('id', $id);
						$query = $this->db->update('usc_hotelsroomratetype',$data);
						$this->db->close();
			  } 
			  
		 //------------------------------------edit date-----------------------------------------------------		
	       
		    function roomtype_hotel()
			  {
			     // Deleteing in Table(usc_hotelsroomtype) of Database(usc) HotelName
								$this->db->select('HotelName, HotelId') 	
											->from('usc_hoteles')
											->where('Status', 'Y')
											->order_by('HotelName');
								$query = $this->db->get();
								return $query->result_array();
								
								// echo $this->db->last_query();
							 	 $this->db->close();
			  }   
			  
			  
	 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			    // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
					$this->db->where_in('RoomId', $id);
					$this->db->delete('usc_hotelsroomratetype');
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
			    			  
					$this->db->where_in('id', $id1);
					$query = $this->db->update('usc_hotelsroomratetype',$data);
				
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
			    			  
					$this->db->where_in('id', $id1);
					$query = $this->db->update('usc_hotelsroomratetype',$data);
			
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