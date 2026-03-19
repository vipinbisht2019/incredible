<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Tour_seatsblockmanage extends CI_Model
    {
      

	  //-----------------------------------------add------------------------------------------------			 
			function seatsblock_add($TourId,$TypeId,$SeatNo,$BlockDate)
			  {
			     
				 for($i=0;$i<count($BlockDate);$i++)
				   {
				      $data_1['TourId'] = $TourId;
					  $data_1['TypeId'] = $TypeId;
					  $data_1['BlockDate'] = $BlockDate[$i];
					  $data_1['SeatNo'] = implode(",",$SeatNo);
				   	  $this->db->insert('usc_tour_seat_block', $data_1);
				   } 
					 
			  } 	 
		  //-----------------------Add bus and tour associations -------------------------------------------------  
			   
			  public function seatsblock_busestype_assoc($data_1,$BlockId,$edit)
			      {
				     if($edit=='yes')
					   {
				     	 $this->db->where('BlockId', $BlockId);
					     $this->db->delete('usc_tour_buses');
					   }	
					
				     for($i=0;$i<count($data_1);$i++)
					   {
					      if($data_1[$i]!='')
						    {
					          $data_2 = array('TypeId'=>$data_1[$i],'BlockId'=>$BlockId) ;
					          $this->db->insert('usc_tour_buses', $data_2);
							}   
					   }
							 
				 }	
			
				 
		  	 	 		   	 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function seatsblock_view($limit,$offset,$TourId)
			 {
			      $currentdate=date('Y-m-d');
					    
					$this->db->group_by('seatblock.BlockId')
						->select('seatblock.*,info.TourId, info.TourName,buses_type.TypeTitle,buses_cat.CategoryName')
						->from('usc_tour_seat_block as seatblock')
						->join('usc_tourgeneralinfo as info','seatblock.TourId=info.TourId')
						->join('usc_tour_buses as buses','info.TourId=buses.TourId')
						->join('usc_buses_type as buses_type','buses.TypeId=buses_type.TypeId')
						->join('usc_buses_categories as buses_cat','buses_cat.CatId=buses_type.CatId')
						->where('seatblock.TourId',$TourId)
						->where('seatblock.BlockDate>=',$currentdate)
						->limit($limit,$offset)
						->order_by("BlockDate", "asc");
					$query = $this->db->get();
					return $query->result_array();
					$this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal($id)
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_tour_seat_block');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 
		  
			 
	      //------------------------------------Delete---------------------------------------------------		
	  	    function seatsblock_delete($id)
			   {
			      // Deleteing in Table(usc_tour_seat_block) of Database(usc)
			        $this->db->where('BlockId', $id);
					$this->db->delete('usc_tour_seat_block');
					 if($this->db->affected_rows())	
						 { return 1;  } else {  return 0; }  
				 } 
	

				  	 		 
			 
		
		
 	  	 
	  

			  
 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_tour_seat_block) of Database(usc)
			    			  
					$this->db->where('BlockId', $id);
					$this->db->delete('usc_tour_seat_block');
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 	

	//---------------------------------- select bus type ------------------------------------------ 
		  
		   function dropdown_busestype($TourId)
			 {
					$this->db->group_by('buses_type.TypeId')
							->select('buses_type.TypeId,buses_type.TypeTitle,buses_cat.CategoryName')
							->from('usc_tour_buses as buses')
							->join('usc_buses_type as buses_type','buses.TypeId=buses_type.TypeId')
							->join('usc_buses_categories as buses_cat','buses_cat.CatId=buses_type.CatId')
							->where('buses.TourId',$TourId)
							->order_by("buses_cat.CategoryName", "asc");
						$query = $this->db->get();
						return $query->result_array();
						$this->db->close();
				
			 } 	  
			 
		//---------------------------------- Tours Details ------------------------------------------ 
		  
		   function get_tours_details($TourId)
			 {
					
				   $this->db->select('TourId, TourName')
							->from('usc_tourgeneralinfo')
							->where('TourId',$TourId);
						$query = $this->db->get();
						return $query->result_array();
						$this->db->close();
				
			 } 	
			 
		 	 
		 function buses_seatmap_seatno($id, $deck_type)
			     {
	                    $SeatNumberArr=array();
			        	$this->db->where('TypeId', $id);
						//$this->db->where('MapId', $map_id);
						$this->db->where('DeckType', $deck_type);
						
						$query = $this->db->get('usc_buses_type_seatno');
						$SeatNumber_arr=$query->result_array();
						 	 $i=0;
						foreach($SeatNumber_arr as $val)
						   {
						      $SeatLocationID=$val['SeatLocationID'];
						      $SeatNumberArr[0][$SeatLocationID]=$val['SeatNumber'];
							 //$SeatNumberArr[1][$SeatLocationID]=$val['IsLowerSleeper'];
							  $SeatNumberArr[2][$i]=$val['SeatLocationID'];
							  $i++;
						   }
						      return  $SeatNumberArr;
						//$this->db->close();
				  }			 	   
			 
	//-------------------------------------------------- get bus seat map -------------------------------------------------		
			   //-------------------------------------------------- get bus seat map -------------------------------------------------		
			          public function get_tour_busseatmap($bustypeid)  // --------------- old ---------------------------------
				         {
						           $this->db->select('seatmap.*')
								            ->from('usc_buses_type as buses_type')
											->join("usc_buses_seatmap as seatmap", "buses_type.MapId = seatmap.MapId", 'INNER')	  
											->where('buses_type.TypeId', $bustypeid);
									$query = $this->db->get();
									$result=$query->result_array();
									return $result;
					     }
						 
			//-------------------------------------------------------- edit ---------------------------------------------------------	
			//-------------------------------------------------------- edit ---------------------------------------------------------	
			//-------------------------------------------------------- edit ---------------------------------------------------------		
			
			
			      public function get_tour_busblock_edit($id)  // --------------- old ---------------------------------
				           {
						           $this->db->select('*')
								            ->from('usc_tour_seat_block')
											->where('BlockId', $id);
									$query = $this->db->get();
									$result=$query->result_array();
									return $result;
					        }
							
					// -------------------------- get all seats booked --------------------------------------------------------------------	   	 
						 
					 public function get_tour_seatbooked($DepartureDate,$bustypeid,$tour_id)
				         {
						           $this->db->select('SeatNo')
								            ->from('usc_tour_booking')
										    ->where('BookingStatus', 'B')
											->where('IsPaid', 'Y')
											->where('TourId', $tour_id)
											->where('DepartureDate', $DepartureDate)
											->where('BusTypeId', $bustypeid);
									$query = $this->db->get();
									 $this->db->last_query();
								
									$result=$query->result_array();
									return $result;
					     }
				 //------------------------------------- update seats --------------------------------------------------------------------------		 
						 			 
					function tourblock_edit_data($data,$id)
						  {
								$this->db->where('BlockId', $id);
								$query = $this->db->update('usc_tour_seat_block',$data);
								$this->db->close();
						  } 		
					 
  
			   		  				 
			 		  			 	
	   		 	 
			 
   }
?>