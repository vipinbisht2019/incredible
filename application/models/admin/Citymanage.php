<?php 
/**
*
************************************************************************************************************************************************
*
*/
   class Citymanage extends CI_Model
   {
      
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			     // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_city');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function city_delete($id)
			 {
			    // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
					$this->db->where('cityid', $id);
					$this->db->delete('usc_city');
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
	       
		    function city_edit($id)
			   {
			       // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
						$this->db->where('cityid', $id);
						$query = $this->db->get('usc_city');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function city_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  //dprint_r($data); die;
						$this->db->where('cityid', $id);
						$query = $this->db->update('usc_city',$data);
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
			    			  
					$this->db->where_in('cityid', $id);
					$this->db->delete('usc_city');
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
			    			  
					$this->db->where_in('cityid', $id1);
					$query = $this->db->update('usc_city',$data);
				
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
			    			  
					$this->db->where_in('cityid', $id1);
					$query = $this->db->update('usc_city',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 		 				 
			 		
			function city_view($limit,$offset){
				$this->db->select('ct.*,st.*,con.countryid,con.country');
				$this->db->from('usc_city as ct',$limit,$offset);	       
				$this->db->join('usc_country as con','ct.countryid = con.countryid');
				$this->db->join('nuttyshoppers_states as st','st.StatesID = ct.stateid');
				$query = $this->db->get();
				return $query->result_array();
				$this->db->close();
			
			}
			
			 function country_list(){
			 
			 		$this->db->select('country, countryid,code') 	
								->from('usc_country')
								->where('Status', 'Y')
								->order_by('country');
					$query = $this->db->get();
					return $query->result_array();
					 $this->db->close();
			 
			 }
			 
			  function state_list(){
			 
			 		$this->db->select('StatesID, StatesName,countryid,StateCode') 	
								->from('nuttyshoppers_states')
								->where('Status', 'Y')
								->order_by('StatesName');
					$query = $this->db->get();
					return $query->result_array();
					 $this->db->close();
			 
			 }
			 
			 function city_add($data)
			 {
			  
				 if($this->db->insert('usc_city', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	
			 
			 public function getStateList(){
			 
			 	$countryid = $this->input->post('countryId');
			 	
				$this->db->select('*')
				 ->from('nuttyshoppers_states')
				 ->where('countryid',$countryid);
				$query = $this->db->get();
				return $query->result_array();
				$this->db->close();
				
			 }
			 
			 public function getCityList(){
			 
			 	$stateid = $this->input->post('stateid');
			 	
				$this->db->select('*')
				 ->from('usc_city')
				 ->where('stateid',$stateid);
				$query = $this->db->get();
				return $query->result_array();
				$this->db->close();
			 }
			
			  			 	
	   		 	 
			 
   }
?>