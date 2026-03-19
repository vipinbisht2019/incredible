<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
class Hotelesmanage extends CI_Model
   {
         //-----------------------------------------add------------------------------------------------			 
	 public	function hoteles_add($data)
			  {
			     // Inserting in Table(usc_hoteles) of Database(usc)
				 if($this->db->insert('usc_hoteles', $data))
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
	       
	 public function hoteles_view($limit,$offset)
			 {
			   // Updateing in Table(usc_hoteles) of Database(usc)
			   
			   	       $this->db->from('usc_hoteltype as htype',$limit,$offset)
				            ->join("usc_hoteles as hotel", "htype.hoteltypeId = hotel.hoteltypeId")
			    	        ->order_by("hotel.HotelId", "desc");
			   	    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
	  public function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_hoteles');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
	  public function hoteles_delete($id)
			 {
			   // Deleteing in Table(usc_hoteles) of Database(usc)
			    			  
					$this->db->where('HotelId', $id);
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
			 
		  //------------------------------------edit view-----------------------------------------------------		
	       
	  public function hoteles_edit($id)
			   {
			      // Deleteing in Table(usc_hoteles) of Database(usc)
			    			  
						$this->db->where('HotelId', $id);
						$query = $this->db->get('usc_hoteles');
						return $query->result_array();
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
	       
	  public function hoteles_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_hoteles) of Database(usc)
			    			  
						$this->db->where('HotelId', $id);
						$query = $this->db->update('usc_hoteles',$data);
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
			   
			   
			   	 
			 
   }
?>