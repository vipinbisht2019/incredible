<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
class Sightseeingmanage extends CI_Model
   {
       	 
	 public	function sightseeing_add($data)
			  {
			     // Inserting in Table(usc_hoteles) of Database(usc)
				 if($this->db->insert('usc_sightseeing', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
		       } 
		   
		   //-----------------------------------------Facilities Association ------------------------------------------------			 
	 public function hoteles_facilities_add($data_1,$hotel_id)
			   {
			       
			       //----------Inserting in Table(usc_hoteles) of Database(usc)------------
				  for($i=0;$i<count($data_1);$i++)
				    { 
					    $data_2=array('FId' => $data_1[$i], 'HotelId' => $hotel_id); 
					    $this->db->insert('usc_hotel_facilities', $data_2);
				
					}  
					
			   } 
	   //------------------------------------when edit hotel need delete hotel facilities first then insert data agai -------------------------------------		
	       
	  public function hoteles_facilities_delete($id)
			 {
			   // Deleteing in Table(usc_hoteles) of Database(usc)
			    			  
					$this->db->where('HotelId', $id);
					$this->db->delete('usc_hotel_facilities');
					$sql = $this->db->last_query();
					    // $this->db->close();
				  
						
			 } 	
			 
				   	   	 
				 
       //------------------------------------view-----------------------------------------------------		
	       
	 public function sightseeing_view()
			 {
			   // Updateing in Table(usc_hoteles) of Database(usc)
			   
			   		$this->db->select('ss.*,country.country,country.countryid,state.StatesID,state.StatesName,city.cityid,city.city_name')
			   	    		->from('usc_sightseeing as ss')
				            ->join("usc_city as city", "city.cityid = ss.cityid")
							->join("nuttyshoppers_states as state", "state.StatesID = ss.stateid")
							->join("usc_country as country", "country.countryid = ss.countryid")
			    	        ->order_by("ss.sid", "desc");
			   	    $query = $this->db->get()->result_array();
					//echo $this->db->last_query(); die;
                    return $query;
                    $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
	  public function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_sightseeing');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
	  public function hoteles_delete($id)
			 {
			   // Deleteing in Table(usc_hoteles) of Database(usc)
			    			  
					$this->db->where('sid', $id);
					$this->db->delete('usc_sightseeing');
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
	       
	  public function edit_sightseeing($id)
			   {
			      // Deleteing in Table(usc_hoteles) of Database(usc)
			    			  
						/*$this->db->where('sid', $id);
						$query = $this->db->get('usc_sightseeing');
						return $query->result_array();
						$this->db->close();*/
						
					$this->db->select('ss.*,country.country,country.countryid,state.StatesID,state.StatesName,city.cityid,city.city_name')
						->from('usc_sightseeing as ss')
						->join("usc_city as city", "city.cityid = ss.cityid")
						->join("nuttyshoppers_states as state", "state.StatesID = ss.stateid")
						->join("usc_country as country", "country.countryid = ss.countryid")
						->where('ss.sid', $id)
						->order_by("ss.sid", "desc");
					$query = $this->db->get()->result_array();
					//echo $this->db->last_query(); die;
					return $query;
					$this->db->close();
					
						
			  } 
	 //------------------------------------edit view-----------------------------------------------------	  	       
	  public function hoteles_facility_edit($id)
			   {
			      // Deleteing in Table(usc_hoteles) of Database(usc)
			    		$facilityId=array();
						$this->db->select('FId');	  
						$this->db->where('HotelId', $id);
						$query = $this->db->get('usc_hotel_facilities');
						    $i=0;
						  foreach($query->result_array() as $val)
						    {
							    $facilityId[$i]= $val['FId'];
							    $i++;
							}
							return $facilityId;
						$this->db->close();
			  } 		  		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
	  public function sightseeing_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_hoteles) of Database(usc)
			    			  
						$this->db->where('sid', $id);
						$query = $this->db->update('usc_sightseeing',$data);
						echo $sql = $this->db->last_query();
						
						//$this->db->close();
						
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
	 public function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_hoteles) of Database(usc)
			    			  
					$this->db->where_in('HotelId', $id);
					$this->db->delete('usc_hoteles');
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
	public function admin_activate_bulk($id1,$data)
			 {
			   // Deleteing in Table(usc_hoteles) of Database(usc)
			    			  
					$this->db->where_in('HotelId', $id1);
					$query = $this->db->update('usc_hoteles',$data);
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
	public function admin_deactivate_bulk($id1,$data)
			 {
			   // Deleteing in Table(usc_hoteles) of Database(usc)
			    			  
					$this->db->where_in('HotelId', $id1);
					$query = $this->db->update('usc_hoteles',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 	
			 
	  //-------------------------------------  Get Hotel Facilities ----------------------------------------------		 	 				 
	public function hotelfacilities()
			   {
					$this->db->where('Status', 'Y');
					$this->db->order_by('SortOrder', 'asc');
					$query = $this->db->get('usc_facilities');
					return $query->result_array();
					$this->db->close();
			   }  
			   
     		 
	  //-------------------------------------  Get Hotel Facilities ----------------------------------------------		 	 				 
	public function hotel_type()
			   {
					$this->db->select('hoteltypeId,hoteltypeName')
					         ->where('Status', 'Y')     
					         ->order_by('SortOrder', 'asc');
					$query = $this->db->get('usc_hoteltype');
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