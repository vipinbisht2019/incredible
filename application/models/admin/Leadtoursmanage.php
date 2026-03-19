<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     ***********************************************************************************************
    */
 class Leadtoursmanage extends CI_Model
    {
    
//1.-----------------Select and insert tours general info--------------------------------------------------			 
			function tourgeneral_select_info($TourId)
			   {
				        $this->db->where('TourId', $TourId);
						$query = $this->db->get('usc_tourgeneralinfo');
						return $query->result_array();
			   } 
		   function tourgeneral_insert_info($data) // insert 
			  {
				   if($this->db->insert('usc_tourgeneralinfo', $data)) 
				   { return $this->db->insert_id(); }
				   else { return 0; } 
			  } 	
			//-------------------------------- images -------------------------------    
			  function tour_select_images($TourId)
			     {
			                     $this->db->select('ImageName');
				                 $this->db->where('TourId', $TourId);
						$query = $this->db->get('usc_tour_images');
						return $query->result_array();
				 } 
			 public function tours_images_add($data_2,$TourId)
			     {
	
				     for($i=0;$i<count($data_2);$i++)
					   {
					        $data_3 = array('ImageName'=>$data_2[$i]['ImageName'],'TourId'=>$TourId) ;
					        $this->db->insert('usc_tour_images', $data_3);
					   }
				 }		  	 
//2. ---------------------- Price and destination  -------------------------------------------------	
	         function tours_location_select($id)
			     {	    			  
						         $this->db->where('TourId', $id);
						$query = $this->db->get('usc_tour_location');
						return $query->result_array();
						$this->db->close();
			     } 	
			  //b.insert -------------------------------  TourId
			   public function tours_location_insert($data,$TourId_1)
				  {      
						 for($i=0;$i<count($data);$i++)
							  {
							    	$Data_location_insert['TourId']=$TourId_1;
									$Data_location_insert['locationsId']=$data[$i]['locationsId'];
									$this->db->insert('usc_tour_location', $Data_location_insert);
							  }
				   }
//3. ----------------inclusion exclusion -----------------------------------------------------	
		         function inclusion_select($id)
			       {
			       		         $this->db->where('TourId', $id);
						$query = $this->db->get('usc_tour_inclusion');
						return $query->result_array();
				  } 		 
	   
			   function exclusion_select($id)
				   {
					 		         $this->db->where('TourId', $id);
							$query = $this->db->get('usc_tour_exclusion');
							return $query->result_array();
				  } 	
		 //----------------------------------------------- insert ------------------------------------------------
				 function inc_exc_insert_data($data_Inc,$data_Exc,$data,$TourId)
					 {
						  //-------------------- Insert inclusion ---------------------------			
							 for($i=0;$i<count($data_Inc);$i++)
								{ 
									$data_2=array('InclusionID' => $data_Inc[$i]['InclusionID'], 'TourId' => $TourId); 
									$this->db->insert('usc_tour_inclusion', $data_2);
								} 
						  //-------------------- Insert exclusion ---------------------------			
							 for($i=0;$i<count($data_Exc);$i++)
								{ 
									$data_3=array('ExclusionID' => $data_Exc[$i]['ExclusionID'], 'TourId' => $TourId); 
									$this->db->insert('usc_tour_exclusion', $data_3);
								} 
					 }	
//4. ----------------------- Itinerary -------------------------------------------	
				 public function tour_itinerary_select($id)
					{
					 
							$this->db->select("*")  
									 ->where('TourId', $id)
									 ->order_by('ItenaryDay');
							$query = $this->db->get('usc_touritinerary');
							return $query->result_array();
							$this->db->close();
					 } 	
				//------------  Insert --------------- 	
				 public function tour_itinerary_insert($data, $TourId)
				  {
                       for($i=0;$i<count($data);$i++)
						{ 
							$itdata=$data[$i];
							unset($itdata['TourId']);
							unset($itdata['ID']);
							$itdata['TourId']=$TourId;
							$ItineraryInsert = $this->db->insert('usc_touritinerary', $itdata);
					    }   
						
				   } 
//5. ------------------------- Itinerary ---------------------------------------------------------				   
				 function tour_hotel_select($id)
					{
						$this->db->select('*') 		  
								 ->where('TourId', $id)
								 ->order_by('SetNumber');
						$query = $this->db->get('usc_tourhotels');
						return $query->result_array();
						$this->db->close();
				   } 	
				  //------------  Insert --------------- 
				 public function tour_hotels_insert($data,$TourId)
				  {
				  	  for($i=0;$i<count($data);$i++)
						{ 
                            $htdata=$data[$i];
						    unset($htdata['TourId']);
							unset($htdata['HId']);
							$htdata['TourId']=$TourId;	
					        $HotelInsert =  $this->db->insert('usc_tourhotels', $htdata);
					    }  
				  } 	
//6. ---------------------------Sightseeing ---------------------------------------------------------
             public  function tour_sightseeing_select($id)
			    {
			     	$this->db->select('ItenaryDay, ItineraryTitle, cityid') 	
											->from('usc_touritinerary')
											->where('TourId', $id)
											->order_by('ItenaryDay');
								$query = $this->db->get();
							    $data_s=array();
								$i=0;
							    foreach($query->result_array() as $ival)
							       {
								        $SetNumber=$ival['ItenaryDay'];
			                            $this->db->select('*') 		  
												 ->where('TourId', $id);
										 $query = $this->db->get('usc_toursight');
										             $j=0;
										        foreach($query->result_array() as $sval)
												    {
													    $data_s[$i][$j]['SightName']=$sval['SightName'];
													    $data_s[$i][$j]['CityCode']=$sval['CityCode'];
													    $data_s[$i][$j]['SNO']=$sval['SNO'];
													  	$data_s[$i][$j]['SetNumber']=$sval['SetNumber'];
													  	$data_s[$i][$j]['Price']=$sval['SetNumber'];
													  	$data_s[$i][$j]['ClientCurrency']=$sval['ClientCurrency'];
														$data_s[$i][$j]['Description']=$sval['Description'];
														$data_s[$i][$j]['Images']=$sval['Images'];
														$j++;
													}
												$i++;
								   }		
										
									 return $data_s;
									 $this->db->close();
			   } 	
			 //--------------------------
					 public function tour_sight_insert($data, $TourId)
					   {
                         for($j=0;$j<count($data);$j++)
						   {
                             $sihtdataArr=$data[$j];
                             for ($i=0; $i <count($sihtdataArr) ; $i++) 
                               { 
                             	 # code...
                               	  $dataSightArr = $sihtdataArr[$i];
                                  $dataSightArr['TourID']=$TourId;
                                  $sight_insert =  $this->db->insert('usc_toursight', $dataSightArr);
                               }
					          
					       }  
					   } 	
					   
//7. ---------------------------Tour Transfer---------------------------------------------					   
		  public  function tour_transfer_select($id)
			   {
			    		$this->db->select('TransferName,VehicleName,CityCode,SNO, SetNumber, 	Price, 	ClientCurrency, Description,Images,VehicleName') 		  
						         ->where('TourID', $id)
								 ->order_by('SetNumber');
						$query = $this->db->get('usc_tourtransfer');
						return $query->result_array();
						$this->db->close();
			  } 		   	 
	     //------------- Insert -----------		
		   public function tour_transfer_insert($data, $TourId)
			  {
			  	for ($i=0; $i < count($data) ; $i++) { 
			  		# code...
			  		  $transData=$data[$i];
			  		  $transData['TourID']=$TourId;
			  		  $transferInsert = $this->db->insert('usc_tourtransfer', $transData);
			  	}
				
			  } 
//8. -------------------------Tour Flight --------------------------------------------------------	
            function tour_flight_select($id)
			   {
					$this->db->select('AirlineName,  FromCity,  ToCity, DepartureTime,ArivalTime, NoOfStops, Class,TotalTime, ClassType, ForDay,  Description') 		  
							 ->where('TourId', $id)
							 ->order_by('ForDay', 'asc');
					$query = $this->db->get('usc_toursflight');
					return $query->result_array();
					$this->db->close();
					
			  }
         
         //------- insert 
				public function tour_flight_insert($data, $TourId)
				  {
				  	for ($i=0; $i < count($data) ; $i++) { 
				  		# code...
				  		  $flightData=$data[$i];
				  		  $flightData['TourId']=$TourId;
				          $this->db->insert('usc_toursflight', $flightData);
				  	}
					 
						
				   } 
//9. ------------------ Tour train --------------------------------------------------------------
          function tour_train_select($id)
			   {
					$this->db->select('TrainName, TrainNumber, TotalFare, PlaceFrom, PlaceTo,TrainDay, traindate,OtherDeatils') 		  
							 ->where('TourId', $id)
							 ->order_by('TrainDay', 'asc');
					$query = $this->db->get('usc_tourstrains');
					return $query->result_array();
					$this->db->close();
					
			  } 
           //---------------insert 
		   public function tour_train_insert($data, $TourId)
			  {
			  	for ($i=0; $i < count($data) ; $i++) { 
			  		# code...
			  		 $TrainData=$data[$i];
			  		 $TrainData['TourId']=$TourId;
			  	     $tinsert = $this->db->insert('usc_tourstrains', $TrainData);
			  	}
			 }   		 
	   						     			   
//10. ------------------------ Tour Bus --------------------------------------------------		
                  function tour_bus_select($id)  // not in use 
					    {
						           $this->db->select('BusName, TotalFare, PlaceFrom,PlaceTo,BusDay,busdate,BusType,TransportName,SeatType,DepartureTime,ArrivalTime,SeatTypeId,SNo,totalSeats,OtherDeatils') ->where('TourId', $id)
										->order_by('SNo', 'asc');
								$query = $this->db->get('usc_toursbusesinfoinfo');
								return $query->result_array();
								$this->db->close();
					   } 

			
            //TourId] => 79

           	   		 
				//------- insert 
					 public function tour_bus_insert($data, $TourId)
						{
						   for ($i=0; $i < count($data) ; $i++) { 
						   	 	# code...
						      	 $BusData=$data[$i];
						   	     $BusData['TourId']=$TourId;
						   	 	 $businsert=$this->db->insert('usc_toursbusesinfoinfo', $BusData);
						   	 }	 
							
						} 									  
//11. -------------------- Costing ------------------------------------------------------------------		


//12. -------------- Term Conditions ------------------------------------------------------
				  public function get_tour_cancellationpolicy($id)
				    {
						$this->db->select('*') 
								 ->where('TourId', $id);			  
						$query = $this->db->get('usc_tourcancellationpolicy');
						return $query->result_array();
						$this->db->close();
				    } 	
				 
				 public function get_tour_termconditions($id)
				    {
						$this->db->select('*') 	
								 ->where('TourId', $id);	  
						$query = $this->db->get('usc_tourtermconditions');
						return $query->result_array();
						$this->db->close();
				    } 
					
			  function terms_polc_insert_data($data_term, $data_polc, $TourId)
				 {
				      //-------------------- Insert termconditions ---------------------------			
						 for($i=0;$i<count($data_term);$i++)
							{ 
						  $data_2=array('TermsconditionID' => $data_term[$i]['TermsconditionID'], 'TourId' => $TourId); 
								$this->db->insert('usc_tourtermconditions', $data_2);
							} 
					  //-------------------- Insert cellationpolicy ---------------------------			
						 for($i=0;$i<count($data_polc);$i++)
							{ 
						      $data_3=array('CancellationID' => $data_polc[$i]['CancellationID'], 'TourId' => $TourId); 
							  $this->db->insert('usc_tourcancellationpolicy', $data_3);
							} 
			     }

			 // -------------------------------- select lead details ------------------------------------    
	            
	             public function get_leadinfo($id)
				    {
						$this->db->select('*') 	
								 ->where('LeadID', $id);	  
						$query = $this->db->get('usc_leads');
						return $query->result_array();
						$this->db->close();
				    } 

		   // ---------------------------------  Insert Lead Quotation  ------------------------------------
				   	 function insert_quotation_log($data) // insert 
					  {
						   if($this->db->insert('usc_lead_quotationlog', $data)) 
						   { return $this->db->insert_id(); }
						   else { return 0; } 
					  } 

		    // ------------------------------ view lead Quotation --------------------------------------------	
		    
		         public function get_quotation_log_info($id)
				    {
						$this->db->select('*') 	
						     	 ->where('LeadId', $id);	  
						$query = $this->db->get('usc_lead_quotationlog');
						return $query->result_array();
						$this->db->close();
				    } 		  	
	      			   		 	 	 		
			  
   }
?>