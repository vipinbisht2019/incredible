<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
class Busesroutesdetailsmanage extends CI_Model
   {
 //-----------------------------------------add------------------------------------------------			 
			function busesroutesdetails_add($data)
			 {
			  // Inserting in Table(usc_buses_routes_buses) of Database(usc)
			  
				 if($this->db->insert('usc_buses_routes_buses', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 } 
			 
		public function busesroutesdetails_time_add($CityId, $DepartureTime, $ArrivalTime, $RoutesId, $TypeId, $BusesRoutsId, $edit)
		   {
		      
			   if($edit=='yes')
			      {
				     $this->db->where('BusesRoutsId', $BusesRoutsId);
					 $this->db->delete('usc_buses_routs_time');
				  }
		   
 //------------------------------------------------------------------------------- 
				  for($r=0;$r<count($CityId);$r++)  
					 {
						$data_2['BusTypeId']=$TypeId;
						$data_2['RoutesId']=$RoutesId;
						$data_2['BusesRoutsId']=$BusesRoutsId;
						$data_2['CityId']=$CityId[$r];
						$data_2['ArrivalTime']=$ArrivalTime[$r];
						$data_2['DepartureTime']=$DepartureTime[$r];
						$this->db->insert('usc_buses_routs_time', $data_2);
					 } 
				 
				  
		   
		   }	 	 
//------------------------------------view-----------------------------------------------------		
	       
		    function busesroutesdetails_view($limit,$offset)
			 {
			   // Updateing in Table(usc_buses_routes_buses) of Database(usc) ->group_by('reg.registration_id');
			   
			     	 $this->db->group_by('buses_route.BusesRoutsId')
					          ->select("buses_route.BusesRoutsId,buses_route.TypeId,buses_route.RoutesId,buses_route.StartDate, buses_route.EndDate, buses_route.ArrivalTime, buses_route.DepartureTime, buses_route.ArrivalTime, buses_route.Status, route.RoutesName, bustype.TypeTitle, route_fare.FareId, routesdeatils_boariding.RouteBoardingId")
					          ->from('usc_buses_routes_buses as buses_route')
				              ->join("usc_buses_routes as route", "buses_route.RoutesId = route.RoutesId")
							  ->join("usc_buses_type as bustype", "bustype.TypeId=buses_route.TypeId")
							  
							  ->join("usc_buses_fare as route_fare", "route_fare.BusesRoutsId=buses_route.BusesRoutsId",'left')
							   ->join("usc_buses_routesdeatils_boariding as routesdeatils_boariding", "buses_route.BusesRoutsId=routesdeatils_boariding.BusesRoutsId",'left')
			                  ->limit($limit,$offset)
							  ->order_by("buses_route.BusesRoutsId", "desc");
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			 } 
//------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_buses_routes_buses');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
 //------------------------------------Delete-----------------------------------------------------		
	       
		    function busesroutesdetails_delete($id)
			 {
			   // Deleteing in Table(usc_buses_routes_buses) of Database(usc)
			    			  
					$this->db->where('BusesRoutsId', $id);
					$this->db->delete('usc_buses_routes_buses');
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
	       
		    function busesroutesdetails_edit($id)
			   {
			      // Deleteing in Table(usc_buses_routes_buses) of Database(usc)
			    			  
						$this->db->where('BusesRoutsId', $id);
						$query = $this->db->get('usc_buses_routes_buses');
						return $query->result_array();
						$this->db->close();
					
						
			  } 
//--------------------------------------------------------------------------------------------------

			 public function buses_route_city_time($id)		
					 {
					 	       $this->db->from('usc_buses_routs_time as bus_time')
									     //->join("usc_buses_routes_city as bus_city", "bus_city.RoutesId = bus_route.RoutesId")
										->join("usc_buses_city as city", "city.CityId = bus_time.CityId")
										->where('bus_time.BusesRoutsId',$id)
										->order_by("bus_time.TimeId", "asc");
								
								$query = $this->db->get();
								return $query->result_array();
								//$this->db->close();
					  }	 			  
			  
			  		 
	   
 //------------------------------------edit date-----------------------------------------------------		
	       
		    function busesroutesdetails_edit_data($data, $id)
			  {
			     // Deleteing in Table(usc_buses_routes_buses) of Database(usc)
			    			  
						$this->db->where('BusesRoutsId', $id);
						$query = $this->db->update('usc_buses_routes_buses',$data);
						//$this->db->close();
			  } 
			  
		public function busesroutesdetails_time_edit($DepartureTime, $ArrivalTime, $TypeId, $TimeId)
		   {
		      
		
		   
 //------------------------------------------------------------------------------- 
				  for($r=0;$r<count($TimeId);$r++)  
					 {
						$data_2['BusTypeId']=$TypeId;
						$data_2['ArrivalTime']=$ArrivalTime[$r];
						$data_2['DepartureTime']=$DepartureTime[$r];
						$this->db->where('TimeId', $TimeId[$r]);
						$this->db->update('usc_buses_routs_time', $data_2);
					 } 
				 
				  
		   
		   }			  
			  
			  
// ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_buses_routes_buses) of Database(usc)
			    			  
					$this->db->where_in('BusesRoutsId', $id);
					$this->db->delete('usc_buses_routes_buses');
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
		 function admin_activate_bulk($id1, $data)
			 {
			   // Deleteing in Table(usc_buses_routes_buses) of Database(usc)
			    			  
					$this->db->where_in('BusesRoutsId', $id1);
					$query = $this->db->update('usc_buses_routes_buses', $data);
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
			   // Deleteing in Table(usc_buses_routes_buses) of Database(usc)
			    			  
					$this->db->where_in('BusesRoutsId', $id1);
					$query = $this->db->update('usc_buses_routes_buses', $data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 }
			 
//--------------------------------------------------------------------------------------------
//---------------------------------- select bus type ------------------------------------------ 
	     function dropdown_busestype()
			 {
			   // Updateing in Table(usc_buses_type) of Database(usc)
			   			
					 $this->db->from('usc_buses_type as btype')
				            ->join("usc_buses_categories as cat", "btype.CatId = cat.CatId")
							->where('btype.Status','Y')
			    	        ->order_by("btype.TypeId", "desc");
			   	    $query = $this->db->get();
					
                    return $query->result_array();
                    $this->db->close();
				
			 } 	   
			       
//---------------------------------- select routes ------------------------------------------ 
//---------------------------------- select routes ------------------------------------------ 		  
		   function dropdown_routes()
			 {
			   // Updateing in Table(usc_buses_type) of Database(usc)
			   			
					$this->db->select('RoutesId,RoutesName')
					         ->from('usc_buses_routes')
				             ->where('Status','Y')
			    	         ->order_by("RoutesName", "desc");
			   	    $query = $this->db->get();
					
                    return $query->result_array();
                    $this->db->close();
				
			 }
 //---------------------------------- select routes ------------------------------------------ 	
 //---------------------------------- select routes ------------------------------------------ 	
		  public function buses_routes_city($rid)
		     {
			      $this->db->from('usc_buses_routes_city as br_city')
				            ->join("usc_buses_city as b_city", "br_city.CityId = b_city.CityId")
							->where('br_city.RoutesId',$rid)
			    	        ->order_by("br_city.StopNo", "asc");
			   	    $query = $this->db->get();
					return $query->result_array();
                    $this->db->close();
			 }	
	
    
	
   			  		 	 

			 	
	   		 	 
			 
   }
?>