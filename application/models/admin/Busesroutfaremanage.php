<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Busesroutfaremanage extends CI_Model
    {
	
	
	//--------------------------------------- Add Buses Fare --------------------------------------
  	    public function buses_fare_add($RoutesId,$BusesRoutsId,$FareTypeId,$FromCityId,$ToCityId,$TotalFare,$TotalSleeperFare, $FareDiscount, $SeatNo_Discount)
		    {
		      	 for($i=1;$i<count($FromCityId)+1;$i++)
				   {
						 $data['RoutesId']=$RoutesId;
						 $data['BusesRoutsId']=$BusesRoutsId;
						 $data['FareTypeId']=$FareTypeId;
						 $data['FareDiscount']=$FareDiscount;
						 $data['SeatNo_Discount']=$SeatNo_Discount;
					 //---------------------------------------------------------------------------
						  
						    for($j=$i;$j<count($FromCityId[$i])+$i;$j++) 
							  {
								 $data['FromCityId']=$FromCityId[$i][$j];
								 $data['ToCityId']=$ToCityId[$i][$j];
								 $data['TotalFare']=$TotalFare[$i][$j];
								 $data['TotalSleeperFare']=$TotalSleeperFare[$i][$j];
								 
						         $this->db->insert('usc_buses_fare', $data);
									 
							 } 
				    }
		     }
	  
			  
   //----------------------------------------------------- buses routes fare view ----------------------------------
   
     public function buses_routefare($limit,$offset,$routeid,$BusesRoutsId)
	    {
		   
		            $this->db->from('usc_buses_fare as buses_fare')
						     
				             ->join("usc_buses_routes_buses as buses_route", "buses_fare.BusesRoutsId = buses_route.BusesRoutsId")
							 ->join("usc_buses_routes as route","route.RoutesId=buses_route.RoutesId")
							 ->where([ "buses_fare.RoutesId"=>$routeid, "buses_fare.BusesRoutsId"=>$BusesRoutsId ]) 
                             ->limit($limit,$offset)
			                 ->order_by("FareId", "asc");
				    $query = $this->db->get();
					
					  $i=0;  $data_fare=array();
                    foreach($query->result_array() as $fval)
					      {
						      $data_fare[$i]['RoutesName']=$fval['RoutesName'];
							  $data_fare[$i]['DepartureTime']=$fval['DepartureTime'];
							  $data_fare[$i]['ArrivalTime']=$fval['ArrivalTime'];
							  $data_fare[$i]['TotalFare']=$fval['TotalFare'];
							//---------------------- Get from city ----------------------------------  
								  $fromcity_id=$fval['FromCityId'];
								  $this->db->where(["CityId"=>$fromcity_id]);
								  $query_from = $this->db->get('usc_buses_city');
								  $from_row=$query_from->result_array();
								   $data_fare[$i]['FromCity']=$from_row[0]['CityName'];
						    //---------------------- Get from city ----------------------------------   
								  $tocity_id=$fval['ToCityId'];
								  $this->db->where([ "CityId"=>$tocity_id]);
								  $query_to = $this->db->get('usc_buses_city');
								  $to_row=$query_to->result_array();
								  $data_fare[$i]['ToCity']=$to_row[0]['CityName'];
												
							  $i++;
						  }
					
					     return $data_fare;
					
                    $this->db->close();
		
		}
		
		
		
		//------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal($routeid,$BusesRoutsId)
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			     
				   $this->db->where([ "RoutesId"=>$routeid, "BusesRoutsId"=>$BusesRoutsId ]);
				   $query = $this->db->get('usc_buses_fare');
				 
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	
   
				   
  //----------------------------------------------------------------------------------------------------------------
			       
		    public function buses_route_cities($id,$rid)		
					 {
					 	           $this->db->select('city.CityId, CityName,bus_time.RoutesId, BusesRoutsId,bus_time.TimeId')
							            ->from('usc_buses_routs_time as bus_time')
									  	->join("usc_buses_city as city", "city.CityId = bus_time.CityId")
										->where(['bus_time.BusesRoutsId'=>$id])
										->order_by("bus_time.TimeId", "asc");
								
								$query = $this->db->get();
								return $query->result_array();
								//$this->db->close();
					  }	 			  		   
		
		  
	   
	   
	    function buses_routefare_edit($RoutesId,$BusesRoutsId)
			 {
			   // Updateing in Table(usc_buses_routes_buses) of Database(usc) ->group_by('reg.registration_id');  
			   
			     	 $this->db->group_by('FromCityId')
					          ->select('FromCityId')
					          ->from('usc_buses_fare')
					          ->where(['RoutesId'=>$RoutesId, "BusesRoutsId"=>$BusesRoutsId])
			                  ->order_by("FareId", "asc");
				    $query = $this->db->get();
                        $i=1;
						$fare_data=array();
					 foreach($query->result_array() as $cval)
					   {
					         
							 $FromCityId=$cval['FromCityId'];
					
							 $this->db->from('usc_buses_fare')
									  ->where(['RoutesId'=>$RoutesId, "BusesRoutsId"=>$BusesRoutsId, "FromCityId"=>$FromCityId])
									  ->order_by("FareId", "asc");
							 $query_fare = $this->db->get();
							  $j=$i;
							 foreach($query_fare->result_array() as $fval)
					           {
							      
								  $fare_data[$i][$j]['TotalFare'] =$fval['TotalFare'];
								  $fare_data[$i][$j]['TotalSleeperFare'] =$fval['TotalSleeperFare'];
								  $fare_data[$i][$j]['FareDiscount'] =$fval['FareDiscount'];
								  $fare_data[$i][$j]['SeatNo_Discount'] =$fval['SeatNo_Discount'];
								 
							      
								  $j++;
							   }
						  
					    
					   
					      $i++;
					   }
					
					  return  $fare_data;
                    $this->db->close();
				
			 } 
			  
          public function delete_fare($id)
		    {
			   // usc_buses_fare  BusesRoutsId
			      
				  		  
					$this->db->where('BusesRoutsId', $id);
					$this->db->delete('usc_buses_fare');
					 if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }  
			
			} 
			
		 //------------------------------------ associate bus seats to fare ---------------------------------------------------	
		 		  			 	
	   		 	 
			 
   }
?>