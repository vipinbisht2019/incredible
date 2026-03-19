<?php 
   /**
 
   */
   class Promocodemanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function promocode_add($data)
			 {
			  // Inserting in Table(usc_coupon) of Database(usc)
			  
				 if($this->db->insert('usc_coupon', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function promocode_view($limit,$offset)
			 {
			   // Updateing in Table(usc_coupon) of Database(usc)
			    	$this->db->order_by("CouponID", "desc");
				   $query = $this->db->get('usc_coupon',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_coupon');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function promocode_delete($id)
			 {
			   // Deleteing in Table(usc_coupon) of Database(usc)
			    			  
					$this->db->where('CouponID', $id);
					$this->db->delete('usc_coupon');
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
	       
		    function promocode_edit($id)
			   {
			      // Deleteing in Table(usc_coupon) of Database(usc)
			    			  
						$this->db->where('CouponID', $id);
						$query = $this->db->get('usc_coupon');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function promocode_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_coupon) of Database(usc)
			    			  
						$this->db->where('CouponID', $id);
						$query = $this->db->update('usc_coupon',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_coupon) of Database(usc)
			    			  
					$this->db->where_in('CouponID', $id);
					$this->db->delete('usc_coupon');
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
			   // Deleteing in Table(usc_coupon) of Database(usc)
			    			  
					$this->db->where_in('CouponID', $id1);
					$query = $this->db->update('usc_coupon',$data);
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
			   // Deleteing in Table(usc_coupon) of Database(usc)
			    			  
					$this->db->where_in('CouponID', $id1);
					$query = $this->db->update('usc_coupon',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 }

   // ###################################### Dublicate Check #####################################################################

	         function check_duplicate($CityName)
			      {
			   								
						$q = $this->db->where(['CityName' => $CityName])
								->get('usc_coupon');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }
	   // Dublicate Check #####################################################################		   
			   		  		 				 
			   
			  function get_tours()
			      {
			   		    $this->db->select('TourId,TourName')	
						        ->order_by('TourName','asc')				
						        ->where(['Status' => 'Y']);
						$query = $this->db->get('usc_tourgeneralinfo');
						   return $query->result_array();
						   $this->db->close();
			      }	
				  
		 // =================================== Tour buses ====================================		  	
		 
		       function get_tour_buses($tour_id)
			      {
			   		    $this->db->select('btype.TypeId,btype.TypeTitle,categories.CategoryName')
						         ->from('usc_buses_type as btype')	
								 ->join('usc_tour_buses as tourbus','btype.TypeId=tourbus.TypeId','INNER')
								 ->join(' usc_buses_categories as categories','btype.CatId=categories.CatId','INNER')
						        ->order_by('CategoryName','asc')				
						        ->where(['btype.Status' => 'Y','tourbus.TourId'=>$tour_id]);
						$query = $this->db->get();
						return $query->result_array();
						$this->db->close();
			      }	  			 	
	   		 	 
			 
   }
?>