<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Busesroutes_soldoutmanage extends CI_Model
    {
	
	
	//--------------------------------------- Add Buses Fare --------------------------------------
  	    public function buses_routesdetails_boarding_add($data)
		    {
		    	 if($this->db->insert('usc_buses_routesdeatils_boariding', $data)) 
					  {
					    return $this->db->insert_id();
					  }
					else
					  {
					    return 0;
					  } 
				
		     }
			 
		  
	  public function buses_routesdetails_boarding_delete($BusesRoutsId)
		      {
			         //--------------------------------- first delete thgen add gain for edit data -------------------------------------
								$this->db->where('BusesRoutsId', $BusesRoutsId);
								$this->db->delete('usc_buses_routesdeatils_boariding');
	
				
		     }	 
	  
			  
                   //----------------------------------------------------- buses routes fare view ----------------------------------
   
     public function buses_routesdetails_boarding($limit,$offset,$routeid,$BusesRoutsId)
	    {
		             $this->db->from('usc_buses_routesdeatils_boariding as routesboariding')
				           	  ->join("usc_buses_boarding as boarding", "routesboariding.BoardingId = boarding.BoardingId")
							 ->join("usc_buses_city as city", "boarding.CityId = city.CityId")
							 ->where([ "routesboariding.RoutesId"=>$routeid, "routesboariding.BusesRoutsId"=>$BusesRoutsId])
						      ->limit($limit,$offset) 
			                  ->order_by("RouteBoardingId", "asc");
				    $query = $this->db->get();
					$data=$query->result_array();
			    
					return $data;
					
                    $this->db->close();
		
		}
		
	 public function buses_routesdetails($routeid)
	    {
		              $this->db->from('usc_buses_routes')
				           	  ->where(["RoutesId"=>$routeid])
			                  ->order_by("RoutesId", "asc");
				    $query = $this->db->get();
					$data=$query->result_array();
			    
					return $data;
					
                    $this->db->close();
		
		}
		

		
		
		
		//------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal($routeid,$BusesRoutsId)
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			     
				   $this->db->where([ "RoutesId"=>$routeid, "BusesRoutsId"=>$BusesRoutsId ]);
				   $query = $this->db->get('usc_buses_routesdeatils_boariding');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	
   
				   
  //----------------------------------------------------------------------------------------------------------------
			       
		    public function buses_routesdeatils_broading($id,$rid)		
					 {
						   $this->db->select('city.CityId, CityName,bus_time.RoutesId, BusesRoutsId,bus_time.TimeId')
								->from('usc_buses_routs_time as bus_time')
								->join("usc_buses_city as city", "city.CityId = bus_time.CityId")
								->where(['bus_time.BusesRoutsId'=>$id])
								->order_by("bus_time.TimeId", "asc");
						   $query = $this->db->get();
								  $i=0;  $data_city=array();
								  foreach($query->result_array() as $c_val)
									  {
											 $data_city[$i]['CityId']=$c_val['CityId'];
											 $data_city[$i]['CityName']=$c_val['CityName'];
											 $CityId=$c_val['CityId'];
										//---------------------- SELECT BOARDING POINT IN ALL ROUTES CITY------------------------	 
											 
														$this->db->select('BoardingPointName,BoardingId')
																 ->from('usc_buses_boarding')
																 ->where(['CityId'=>$CityId, 'Status'=>'Y'])
																 ->order_by("BoardingPointName", "asc");
														$bordingquery = $this->db->get();
														        $j=0;
														   	  foreach($bordingquery->result_array() as $b_val)
									                              {
																	  $data_city[$i]['BoardingPoint'][$j]['BoardingId']=$b_val['BoardingId'];
																	  $data_city[$i]['BoardingPoint'][$j]['BoardingPointName']=$b_val['BoardingPointName'];
																	  $j++;
																  }
											 
										   $i++;
									  }
									  
									  return $data_city;
								
					  }	 			  		   
		
          //----------------------------------------------------------------------------------------------------------------
           
      public function buses_routesdeatils_broading_edit($id,$rid)		
					     {   
				   
							   $this->db->select('*')
										->from('usc_buses_routesdeatils_boariding ')
										->where(['RoutesId'=>$rid, 'BusesRoutsId'=>$id])
										->order_by("RouteBoardingId", "asc");
								   $query = $this->db->get();
										  $i=0;  $data_boarding_points=array();
										  foreach($query->result_array() as $c_val)
											  {
											         $city_id=$c_val['CityId'];
													 $BoardingId=$c_val['BoardingId'];
											     
												     $data_boarding_points[$city_id][$BoardingId]['BoardingId']=$c_val['BoardingId'];
												     $data_boarding_points[$city_id][$BoardingId]['DepartureTime']=$c_val['DepartureTime'];
													 $data_boarding_points[$city_id][$BoardingId]['ArrivalTime']=$c_val['ArrivalTime'];
											   
											      $i++;
											  }
											  
										  return $data_boarding_points;		  
											  
											  
				        }					  
		 
			 		  			 	
	   		 	 
			 
   }
?>