<?php 
   /**
 
   */
 class Busbookingmanage extends CI_Model
   {
 
       //------------------------------------view-----------------------------------------------------		
	     function busbooking_view($limit,$offset)
			 {
						$this->db->select('booking.*,city_from.CityName as fromcity ,city_to.CityName as tocity')
							->from('usc_bus_booking as booking')
							->join('usc_buses_city as city_from' , "booking.FromCityId = city_from.CityId", 'INNER')
							->join('usc_buses_city as city_to' , "booking.ToCityId = city_to.CityId", 'INNER')
							->where('IsPaid','Y')
							->limit($limit,$offset)
							->order_by("BookingId ", "desc");
						$query = $this->db->get();
						return $query->result_array();
						$this->db->close();
				
			  } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_bus_booking');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 
			 
   
    function busbooking_view_search($limit,$offset,$BusesRoutsId,$StartDateStr,$EndDateArr)
			 {
			          
					   $this->db->select('booking.*,city_from.CityName as fromcity ,city_to.CityName as tocity');
			           $this->db->from('usc_bus_booking as booking');
					   $this->db->join('usc_buses_city as city_from' , "booking.FromCityId = city_from.CityId", 'INNER');
					   $this->db->join('usc_buses_city as city_to' , "booking.ToCityId = city_to.CityId", 'INNER');
					   $this->db->where('IsPaid','Y');
					 
							if($StartDateStr!='' && $EndDateArr!='')
							 {
						         $this->db->where('DepartureDate>=',$StartDateStr);
								 $this->db->where('DepartureDate<=',$EndDateArr);
							 } 
							if($BusesRoutsId!='')
								{
						           $this->db->where('BusesRoutsId',$BusesRoutsId);
							    }  
				         
							
							$this->db->limit($limit,$offset);
							$this->db->order_by("BookingId", "desc");
							$query = $this->db->get();
					   
					          //echo $this->db->last_query();
					          //  die();
					
								return $query->result_array();
								 $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal_search($BusesRoutsId,$StartDateStr,$EndDateArr)
			   {
					
					$query = $this->db->get('usc_bus_booking');
					if($StartDateStr!='' && $EndDateArr!='')
							 {
								 $this->db->where('DepartureDate>=', $StartDateStr);
								 $this->db->where('DepartureDate<=', $EndDateArr);
							 } 
						if($BusesRoutsId!='')
							{
							   $this->db->where('BusesRoutsId', $BusesRoutsId);
							}   
					return $query->num_rows();
					$this->db->close();
			  }  
	 			 

			  // public function busbookingdetails($id){

			 	//     $this->db->select('*')
					//           ->from('usc_bus_booking')
					// 	      ->where('BookingId', $id);
					//     $query = $this->db->get();
				             
				 //   return $query->result_array();
     //               $this->db->close();


			   	 	
			  //  	 } 	 



    // Booking Details ########################


			   	 		  public function busbookingdetails($id){
			  
                     // $id=$this->session->customer_id;
			 	    $this->db->select('booking.*,city_from.CityName as fromcity ,city_to.CityName as tocity')
			                ->from('usc_bus_booking as booking')
							->join('usc_buses_city as city_from' , "booking.FromCityId = city_from.CityId", 'INNER')
							->join('usc_buses_city as city_to' , "booking.ToCityId = city_to.CityId", 'INNER')
							->where('IsPaid','Y')
						    ->where('BookingId',$id)
							// ->where('AgentId', $id)
						    ->order_by("BookingId ", "desc");
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();


			   	 	
			   	 } 	


//  Ticket Print And Info


			   	 	  function get_agent_info()
							 {
							        
								     // $id=$this->session->customer_id;
									          $this->db->where('user_id');
								     $query = $this->db->get('usc_agents');
								     return $query->result_array();
								     $this->db->close();
								
							 }  

    
    //--------------------------------------------------------------- Cansllation Stuff Start -------------------------------------------------	
   //--------------------------------------------------------------- Cansllation Stuff Start -------------------------------------------------	
   
	  function bus_canllation_charges_day($bid)
		 {
		 
			 $this->db->select('*')
					  ->from(' usc_buses_cansllationcharge as cansllationcharge')
					  ->join("usc_buses_buses_cancellationpolicies as buses_cancellationpolicies", "cansllationcharge.CancellationID=buses_cancellationpolicies.CancellationID", 'inner')
					   ->where('buses_cancellationpolicies.TypeId', $bid)
					   ->where('TimeUnit', 'D')
					   ->order_by('EndTime','desc');
				$query = $this->db->get();	
				 return $query->result_array();
				 $this->db->close();
		
		
		 }		
	
 function bus_canllation_charges_hours($bid)
	 {
				 
		    $this->db->select('*')
					  ->from(' usc_buses_cansllationcharge as cansllationcharge')
					  ->join("usc_buses_buses_cancellationpolicies as buses_cancellationpolicies", "cansllationcharge.CancellationID=buses_cancellationpolicies.CancellationID", 'inner')
					   ->where('buses_cancellationpolicies.TypeId', $bid)
					   ->where('TimeUnit', 'H')
							   ->order_by('EndTime','desc');
					    $query = $this->db->get();	
				         return $query->result_array();
						 $this->db->close();
				
				
				 }	
	//------------------------------------------------------ Update booking -----------------------------------------
		     function busbooking_cancel_data($data,$id)
			        {
			   			$this->db->where('BookingId', $id);
						$query = $this->db->update('usc_bus_booking',$data);
						$this->db->close();
			       } 				 
     //---------------------------------------------------- Bus Routes ----------------------------------------------	
 
			function routes_buses_dropdown()
			  {
				   $this->db->select('routes.RoutesName, routes.RoutesId, routes_buses.BusesRoutsId, buses_type.TypeId,buses_type.TypeTitle, buses_categories.CategoryName')
						    ->from('usc_buses_routes as routes')
						    ->join("usc_buses_routes_buses as routes_buses", "routes.RoutesId=routes_buses.RoutesId", 'INNER')
							->join("usc_buses_type as buses_type", "routes_buses.TypeId=buses_type.TypeId", 'INNER')
							->join("usc_buses_categories as buses_categories", "buses_categories.CatId=buses_type.CatId", 'INNER')
						    ->order_by('routes.RoutesName','desc');
					$query = $this->db->get();	
					return $query->result_array();
					$this->db->close();
		 	   }		
         

			 
		 
	 				 
			 		  			 	
	   		 	 
			 
   }
?>