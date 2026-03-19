<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Busesroutes_soldoutmanage extends CI_Model
    {
	
	       function seatsblock_view($limit,$offset,$routeid,$BusesRoutsId)
			 {
			        $currentdate=date('Y-m-d');
					    
					$this->db->group_by('seatblock.BlockId')
						 ->select('*')
						 ->from('usc_buses_seat_block as seatblock')
						 ->join('usc_buses_routes_buses as buses_route','seatblock.BusesRoutsId=buses_route.BusesRoutsId')
						 ->where('seatblock.BusesRoutsId',$BusesRoutsId)
						 ->where('seatblock.BlockDate>=',$currentdate)
						 ->limit($limit,$offset)
						 ->order_by("BlockDate", "asc");
					$query = $this->db->get();
					 $data_b=array();
					 $i=0;
					foreach($query->result_array() as $seat_val)
					  {
					    
						$data_b[$i]['BlockDate']  =  $seat_val['BlockDate'];
						$data_b[$i]['SeatNo']  =  $seat_val['SeatNo'];
						$data_b[$i]['BusesRoutsId']  =  $seat_val['BusesRoutsId'];
						$data_b[$i]['RoutesId']  =  $seat_val['RoutesId'];
						$data_b[$i]['BlockId']  =  $seat_val['BlockId'];
						 $TypeId  =  $seat_val['TypeId'];
						 //------------------------------------------------------------------
						           $this->db->select('*')
								        ->from('usc_buses_type as bustype')
						                ->join('usc_buses_categories as buscat','bustype.CatId=buscat.CatId')
										->where('bustype.TypeId',$TypeId);
								$querybus = $this->db->get();
							    $bustype=$querybus->result_array();		
								
					    $data_b[$i]['CategoryName']  =  $bustype[0]['CategoryName'];
						$data_b[$i]['TypeTitle']  =  $bustype[0]['TypeTitle'];
				   //------------------------------------------------------------------	 select route name ------------------	
					    $routeid=$seat_val['RoutesId'];
						 
						        $this->db->select('RoutesName')
								        ->from('usc_buses_routes')
						                ->where('RoutesId',$routeid);
								$queryroute = $this->db->get();
							    $busroute=$queryroute->result_array();
						 $data_b[$i]['RoutesName']  =  $busroute[0]['RoutesName'];	
						 
						$i++;
					  }
					
					  return $data_b;
					
					$this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal($routeid,$BusesRoutsId)
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				  $currentdate=date('Y-m-d');
					    
							$this->db->group_by('seatblock.BlockId')
						 ->select('*')
						 ->from('usc_buses_seat_block as seatblock')
						 ->join('usc_buses_routes_buses as buses_route','seatblock.BusesRoutsId=buses_route.BusesRoutsId')
						 
					
						 ->where('seatblock.BusesRoutsId',$BusesRoutsId)
						 ->where('seatblock.BlockDate>=',$currentdate)
					
						 ->order_by("BlockDate", "asc");
					$query = $this->db->get();
				  
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 
	
	
	
	       
	  //-----------------------------------------add------------------------------------------------			 
			function seatsblock_add($RoutsId,$BusesRoutsId,$SeatNo,$BlockDate)
			   {
			     
				 for($i=0;$i<count($BlockDate);$i++)
				   {
				      $data_1['RoutsId'] = $RoutsId;
					  $data_1['BusesRoutsId'] = $BusesRoutsId;
					  $data_1['BlockDate'] = $BlockDate[$i];
					  $data_1['SeatNo'] = implode(",",$SeatNo);
				   	  $this->db->insert('usc_buses_seat_block', $data_1);
				   } 
					 
			  } 
	
	
	    //----------------------------  if no search from city and to city then need to get from city id and to city id from routes stop table -----------------
		 //----------------------------  if no search from city and to city then need to get from city id and to city id from routes stop table -----------------	 
			 			 
		   		
		public function buses_routes_from_to_city($routs_id)
			 {
				
				    $this->db->select("CityId")
				  
					                  ->where("RoutesId", $routs_id)
			                          ->order_by("StopNo", "asc")
									  ->limit(1, 0);
			         $query = $this->db->get('usc_buses_routes_city');
					  $result_array=$query->result_array();
                  
				    $data_city['FromCityId']=$result_array[0]['CityId'];
					
					$this->db->select("CityId")
				   
					                  ->where("RoutesId", $routs_id)
			                          ->order_by("StopNo", "desc")
									  ->limit(1, 0);
						 $query = $this->db->get('usc_buses_routes_city');			  
					  $result_array=$query->result_array();
					  $data_city['ToCityId']=$result_array[0]['CityId'];
				    return $data_city;
				    $this->db->close();
				
			 } 
			 
			 			  
	 

			  
		 public function buses_routesdeatils_view($busestypeid,$from_city,$tocity)
			 {
			  			   
			     	 //$this->db->group_by('buses_route.BusesRoutsId')
					    $this->db->select("*")
					          ->from('usc_buses_routes_buses as buses_route' ,100,0)
				              ->join("usc_buses_routes as route", "buses_route.RoutesId = route.RoutesId")
							  ->join("usc_buses_type as bustype", "bustype.TypeId=buses_route.TypeId")
							  ->join("usc_buses_categories as bust_cat", "bustype.CatId=bust_cat.CatId")
							  ->join("usc_buses_fare as route_fare", "route_fare.BusesRoutsId=buses_route.BusesRoutsId",'left')
							  ->where("buses_route.Status", "Y")
							  ->where("buses_route.BusesRoutsId", $busestypeid)
							  ->where("route_fare.BusesRoutsId", $busestypeid)
							  ->where("route_fare.FromCityId", $from_city)
							  ->where("route_fare.ToCityId", $tocity)
							  ->order_by("buses_route.BusesRoutsId", "desc");
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			 }
	

	     //-------------------------------------------------- get bus seat map -------------------------------------------------		
		 //-------------------------------------------------- get bus seat map -------------------------------------------------		
			          public function get_bus_busseatmap($bustypeid) // old
				         {
						           $this->db->select('seatmap.*')
								            ->from('usc_buses_type as buses_type')
											->join("usc_buses_seatmap as seatmap", "buses_type.MapId = seatmap.MapId", 'INNER')	  
											->where('buses_type.TypeId', $bustypeid);
									$query = $this->db->get();
									$result=$query->result_array();
									return $result;
					     }
		 //-------------------------------------------------- get bus seat map -------------------------------------------------							 
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
									  $SeatNumberArr[1][$SeatLocationID]=$val['IsLowerSleeper'];
									  $SeatNumberArr[2][$i]=$val['SeatLocationID'];
									  $i++;
								   }
									  return  $SeatNumberArr;
								//$this->db->close();
						  }		
					//------------------------------------------------- get map details ---------------------------------------------	  
						 public function get_map_details($MapId)
				            {
						           $this->db->select('SeatTypeId,SeatSleeper')
								            ->from('usc_buses_seatmap')
										    ->where('MapId', $MapId);
									$query = $this->db->get();
									$result=$query->result_array();
									return $result;
					       }
						  	 
						 	 
				// -------------------------- get all seats booked --------------------------------------------------------------------	  
				
				
			//-------------------------------------------------------- edit ---------------------------------------------------------	
			//-------------------------------------------------------- edit ---------------------------------------------------------	
			//-------------------------------------------------------- edit ---------------------------------------------------------		
			
			
			      public function get_bus_busblock_edit($id)  // --------------- old ---------------------------------
				           {
						           $this->db->select('*')
								            ->from('usc_buses_seat_block')
											->where('BlockId', $id);
									$query = $this->db->get();
									$result=$query->result_array();
									return $result;
					        }
							
							
				
				 	 
						 
					 public function get_bus_seatbooked($DepartureDate,$BusesRoutsId,$RoutsId, $FromCity_id)
				         {
						     
							 
			  // --------------------- get route sort order ----------------------------------------------------------------------------
			  
			                 $this->db->select('routcity.StopNo')
								            ->from('usc_buses_routes as route')
											->join('usc_buses_routes_city as routcity','route.RoutesId=routcity.RoutesId','INNER')
										    ->where('routcity.CityId', $FromCity_id)
											->where('route.RoutesId', $RoutsId);
									 $query_stop = $this->db->get();
									 $result_stop=$query_stop->result_array();
									 $stopnumber=$result_stop[0]['StopNo'];
									
									  $this->db->select('routcity.CityId')
								            ->from('usc_buses_routes as route')
											->join('usc_buses_routes_city as routcity','route.RoutesId=routcity.RoutesId','INNER')
										    ->where('routcity.StopNo >', "$stopnumber")
											->where('route.RoutesId', "$RoutsId");
									 $query_city= $this->db->get();
									 $result_city=$query_city->result_array();
							
						           $this->db->select('SeatNo,FromCityId,ToCityId');
								   $this->db->from('usc_bus_booking');
								   $this->db->where('BookingStatus', 'B');
								   $this->db->where('IsPaid', 'Y');
								   $this->db->where('DepartureDate', $DepartureDate);
								   $this->db->where('BusesRoutsId', $BusesRoutsId);
								             $k=0;
											foreach($result_city as $city)
											 {
											   if($k==0)
											    {
												   $this->db->where('ToCityId', $city['CityId']);
												}
												else
												 {
											       $this->db->or_where('ToCityId', $city['CityId']);
												  } 
											   
											    $k++;
											 }
									
									
									$query = $this->db->get();
									$result=$query->result_array();
									return $result;
					     } 
						 
						function buses_seatblock_edit_data($data,$id)
						  {
								$this->db->where('BlockId', $id);
								$query = $this->db->update('usc_buses_seat_block',$data);
								$this->db->close();
						  } 		 
	 			  		   
		
			  
		 
			 		  			 	
	   		 	 
			 
   }
?>