<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
class Busesseatmapmanage extends CI_Model
    {
      

	  //-----------------------------------------add------------------------------------------------			 
			function busesseatmap_add($data)
			 {
			  // Inserting in Table(usc_buses_seatmap) of Database(usc)
			  
				 if($this->db->insert('usc_buses_seatmap', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 } 
			 	 
		 function busesseatmap_location_add($data)
			 {
			  // Inserting in Table(usc_buses_seatmap) of Database(usc)
			  
				 if($this->db->insert('usc_buses_seatmap_seatno', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 0;
					 } 
			 } 	
					 
       //------------------------------------ First delete location id ----------------------------------------------------			 
		 function busesseatmap_location_delete($id)
			 {
			   // Deleteing in Table(usc_buses_seatmap) of Database(usc)
			    			  
					$this->db->where('MapId', $id);
					$this->db->delete('usc_buses_seatmap_seatno');
					 if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }  
						
			 } 		 
			 	 
			  
		 
			 
       //------------------------------------view-----------------------------------------------------		
	       
		    function busesseatmap_view($limit,$offset)
			 {
			   // Updateing in Table(usc_buses_seatmap) of Database(usc)
			    	$this->db->order_by("MapId", "desc");
				    $query = $this->db->get('usc_buses_seatmap',$limit,$offset);
                    return $query->result_array();
                    $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_buses_seatmap');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function busesseatmap_delete($id)
			 {
			   // Deleteing in Table(usc_buses_seatmap) of Database(usc)
			    			  
					$this->db->where('MapId', $id);
					$this->db->delete('usc_buses_seatmap');
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
	       
		    function busesseatmap_edit($id)
			   {
			      // Deleteing in Table(usc_buses_seatmap) of Database(usc)
			    			  
						$this->db->where('MapId', $id);
						$query = $this->db->get('usc_buses_seatmap');
						return $query->result_array();
						$this->db->close();
					
						
			  } 	
			  
	 //------------------------------------edit Location ID-----------------------------------------------------		
	       
		    function busesseatmap_location_edit($id,$deck_type)
			   {
			      // Deleteing in Table(usc_buses_seatmap) of Database(usc)
			    			  
						$this->db->where('MapId', $id);
						$this->db->where('DeckType', $deck_type);
						$query = $this->db->get('usc_buses_seatmap_seatno');
						 $i=0;$data_array=array();
						foreach($query->result_array() as $val)
						  {
						     $data_array[$i]=$val['SeatLocationID'];
							 $i++;
						  }
						
						 return $data_array;
						
						$this->db->close();
					
						
			  } 	  	 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function busesseatmap_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_buses_seatmap) of Database(usc)
			    			  
						$this->db->where('MapId', $id);
						$query = $this->db->update('usc_buses_seatmap',$data);
						
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_buses_seatmap) of Database(usc)
			    			  
					$this->db->where('MapId', $id);
					$this->db->delete('usc_buses_seatmap');
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
			   // Deleteing in Table(usc_buses_seatmap) of Database(usc)
			    			  
					$this->db->where('seatmapId', $id1);
					$query = $this->db->update('usc_buses_seatmap',$data);
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
			   // Deleteing in Table(usc_buses_seatmap) of Database(usc)
			    			  
					$this->db->where('MapId', $id1);
					$query = $this->db->update('usc_buses_seatmap',$data);
			
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
								->get('usc_buses_seatmap');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }	
	   // Seating type #####################################################################		
		
		 function buses_seating_type()
			   {
			    			  
						$this->db->where('Status', 'Y');
						$query = $this->db->get('usc_buses_seating_type');
						return $query->result_array();
						$this->db->close();
					
			   } 		    
			   
			   
			   
			   	  		 				 
			 		  			 	
    }
?>