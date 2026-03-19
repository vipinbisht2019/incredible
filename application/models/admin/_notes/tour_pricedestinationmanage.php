<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Tour_pricedestinationmanage extends CI_Model
    {
	
	     public function buses_fare_insert($Data_Buses, $Data_acomndation, $Data_NormalFare, $Data_SeasonalFare, $TourId_1)
		   {      
		            $this->db->where('TourId ', $TourId_1);
		         	$this->db->delete('usc_tour_price');
				 for($i=0;$i<count($Data_Buses);$i++)
					  {
						 $busid=$Data_Buses[$i];
						 for($j=0;$j<count($Data_acomndation[$busid]);$j++)
						   {
							  $acc_id=$Data_acomndation[$busid][$j]; 
							  for($k=0;$k<count($Data_NormalFare[$busid][$acc_id]);$k++)
								{
								   $Data_insert['TourId']=$TourId_1;
								   $Data_insert['BusTypeId']=$busid;
								   $Data_insert['FareTypeId']=$acc_id;
								   $Data_insert['NormalFare']=$Data_NormalFare[$busid][$acc_id][$k];
								   $Data_insert['SeasonalFare']=$Data_SeasonalFare[$busid][$acc_id][$k];
					                
									$this->db->insert('usc_tour_price', $Data_insert);
								}
							 }
						}
			 }
	
	//------------------------------------------------------------------------------------------------------------------------------------	
	      public function buses_fare_insert_singleday($Data_Buses, $Data_NormalFare, $Data_SeasonalFare, $TourId_1)
		   {      
		            $this->db->where('TourId ', $TourId_1);
		         	$this->db->delete('usc_tour_price');
				 for($i=0;$i<count($Data_Buses);$i++)
					  {
						      $busid=$Data_Buses[$i];
				              for($k=0;$k<count($Data_NormalFare[$busid]);$k++)
								{
								   $Data_insert['TourId']=$TourId_1;
								   $Data_insert['BusTypeId']=$busid;
								   $Data_insert['NormalFare']=$Data_NormalFare[$busid][$k];
								   $Data_insert['SeasonalFare']=$Data_SeasonalFare[$busid][$k];
					               $this->db->insert('usc_tour_price', $Data_insert);
								}
									//echo"<pre>";
										// print_r($Data_insert);  
									//echo"</pre>";	
			 	 	}
			 }
			 
	//--------------------------------------------------------------------------------------------------------------------------------------		 
		  public function buses_fare_edit_singleday($TourId_1)
		    { 
			        $this->db->where('TourId', $TourId_1);
					$query = $this->db->get('usc_tour_price');
					$PriceDataArr=array();
					$PriceArr=$query->result_array();
					foreach($PriceArr as $val)
					  {
					     $PriceDataArr[$val['BusTypeId']]['NormalFare']=$val['NormalFare'];
						 $PriceDataArr[$val['BusTypeId']]['SeasonalFare']=$val['SeasonalFare'];
					  }
						
		              return $PriceDataArr;  
		    } 	 
	
	  		 
	//--------------------------------------------------------------------------------------------------------------------------------------		 
		  public function buses_fare_edit_multipleday($TourId_1)
		    { 
			        $this->db->where('TourId', $TourId_1);
					$query = $this->db->get('usc_tour_price');
					
					$PriceArr=$query->result_array();
					foreach($PriceArr as $val)
					  {
					    
					     $PriceDataArr[$val['BusTypeId']][$val['FareTypeId']]['NormalFare']=$val['NormalFare'];
						 $PriceDataArr[$val['BusTypeId']][$val['FareTypeId']]['SeasonalFare']=$val['SeasonalFare'];
					  }
						
		              return $PriceDataArr;  
		    } 	 
	  //--------------------------------------------- Vehicle Fare--------------------------------------------
	  
	  
	    public function vehicle_fare_insert_vehicle($Data_VihicleId, $Data_PaxId, $Data_VehicleFareTypeId,$Data_NormalFare,$TourId_1)
		   {      
		            $this->db->where('TourId ', $TourId_1);
		         	$this->db->delete('usc_tour_tourvehicleprice');
				 for($ii=0;$ii<count($Data_VihicleId);$ii++)
					  {
					    $vehicle_arr1=$Data_VihicleId[$ii];
						 for($jj=0;$jj<count($vehicle_arr1);$jj++)
						   {
					  
						      $vehicle_arr2=$vehicle_arr1[$jj];
				              for($kk=0;$kk<count($vehicle_arr2);$kk++)
								{
								   $Data_insert['TourId']=$TourId_1;
								   $Data_insert['VehicleFareTypeId']=$Data_VehicleFareTypeId[$ii][$jj][$kk];
								   $Data_insert['PaxId']=$Data_PaxId[$ii][$jj][$kk];
								    $Data_insert['VehicleId']=$Data_VihicleId[$ii][$jj][$kk];
									
									$VihicleId=$Data_VihicleId[$ii][$jj][$kk];
									$PaxId=$Data_PaxId[$ii][$jj][$kk];
									$VehicleFareTypeId=$Data_VehicleFareTypeId[$ii][$jj][$kk];
									$Data_insert['NormalPrice']=$Data_NormalFare[$VihicleId][$PaxId][$VehicleFareTypeId];
								
								 //  $Data_insert['SeasonalFare']=$Data_SeasonalFare[$busid][$k];
					               $this->db->insert('usc_tour_tourvehicleprice', $Data_insert);
								}
							}		
			 	 	}
			 }
	  
	    //--------------------------------------------- Vehicle Fare Edit--------------------------------------------
		   
		  public function vehicle_fare_edit_vehicle($TourId_1)
		     { 
			        $this->db->where('TourId', $TourId_1);
					$query = $this->db->get('usc_tour_tourvehicleprice');
					$PriceVehicleDataArr=array();
					$PriceArr=$query->result_array();
					foreach($PriceArr as $val)
					  {
					    
					     $PriceVehicleDataArr[$val['VehicleId']][$val['PaxId']][$val['VehicleFareTypeId']]['NormalPrice']=$val['NormalPrice'];
						 //$PriceDataArr[$val['BusTypeId']][$val['FareTypeId']]['SeasonalFare']=$val['SeasonalFare'];  
					  }
						
		              return $PriceVehicleDataArr;  
		     } 
	  
	   //------------------------------------edit view-----------------------------------------------------		
	       
		    function pricedestination_edit($id)
			   {
			   
			      // Deleteing in Table(usc_locations) of Database(usc)
			    			  
						$this->db->where('TourId', $id);
						$query = $this->db->get('usc_tourgeneralinfo');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	  //------------------------------------edit date-----------------------------------------------------		
	       
		    function pricedestination_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_locations) of Database(usc)
				 
				 		//print_r($data); die;
			    			  
						$this->db->where('TourId', $id);
						$query = $this->db->update('usc_tourgeneralinfo',$data);
						$this->db->close();
			  } 
			  
			  
	 //--------------------------------------------------------------- DROP DOWN -----------------------------------------	
	 //-------------------------------------- tour categories drop down -------------------------------------------------------	 	
		 
		  function resion_dropdown()
			   {
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)  
			    		
						$this->db->select('RId,RegionsName')	  
						         ->where('Status', 'Y')
						         ->order_by('RegionsName');
						$query = $this->db->get('usc_regions');
						return $query->result_array();
						$this->db->close();
				 } 
		
	  //-------------------------------------- tour theams drop down -------------------------------------------------------	 	
		 
		 function location_dropdown()
			   {
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    		
						$this->db->select('locationsId,locationsName')	  
						         ->where('Status', 'Y')
						         ->order_by('locationsName');
						$query = $this->db->get('usc_locations');
						return $query->result_array();
						$this->db->close();
					
						
			  }	
			  
	   function get_busestype($tid)
			 {
			   // Updateing in Table(usc_buses_type) of Database(usc)
			   			
					 $this->db->from('usc_buses_type as btype')
				            ->join("usc_buses_categories as cat", "btype.CatId = cat.CatId",'inner')
							->join("usc_tour_buses as tbus", "btype.TypeId=tbus.TypeId",'inner')
							->where('tbus.TourId',$tid)
			    	        ->order_by("btype.TypeId", "desc");
			   	    $query = $this->db->get();
					
                    return $query->result_array();
                    $this->db->close();
				
			 } 	 
	 //---------------------------------------- select tour fare accomondation fare type -------------------------------
 public function get_accomadtion_faretype()
	      {
		     
			 	$this->db->select('FareTypeId,FareTypeName')	  
						         ->where('Status', 'Y')
						         ->order_by('SortOrder');
						$query = $this->db->get('usc_tourfaretype');
						return $query->result_array();
						$this->db->close();
		  
		  }	
		  
	
		 //---------------------------------------- select tour fare vehicle type -------------------------------
				public function get_vehicle_faretype()
					  {
						 
							$this->db->select('VehicleFareTypeId,VehicleFareTypeTitle')	  
											 ->where('Status', 'Y')
											 ->order_by('VehicleFareTypeId','asc');
									$query = $this->db->get('usc_toursvehicle_faretype');
									return $query->result_array();
									$this->db->close();
					  
					  }	
					  
	    //---------------------------------------- select tour fare vehicle type -------------------------------
				public function get_vehicle_type($tid)
					  {
						 
							      $this->db->select('vehicle.VehicleId,VehicleName')
								            ->from('usc_toursvehicle as vehicle')
											->join("usc_tour_toursvehicle as toursvehicle", "vehicle.VehicleId = toursvehicle.VehicleId", 'INNER')	  
										    ->where('Status', 'Y')
											->where('toursvehicle.TourId', $tid)
											->order_by('SortOrder','asc');
									$query = $this->db->get();
									//echo $this->db->last_query();
									$result=$query->result_array();
									  $i=0;
									foreach($result as $vehicle)
									  {
									   	  $data_veh[$i]['VehicleId']=$vehicle['VehicleId'];
										  $data_veh[$i]['VehicleName']=$vehicle['VehicleName'];
																	           
												  $this->db->select('NoPax,PaxId')	  
															 ->where('VehicleId',$vehicle['VehicleId'])
															 ->order_by('NoPax','asc');
													$query_sub = $this->db->get('usc_toursvehiclepax_option');
													$result_sub=$query_sub->result_array();
													     $j=0;
													   foreach($result_sub as $paxoption)
													     {
														 
														     $data_veh[$i]['PaxOption'][$j]['NoPax']=$paxoption['NoPax'];
										                     $data_veh[$i]['PaxOption'][$j]['PaxId']=$paxoption['PaxId'];
															 
															 $j++;
														     
														 }
									  
									      $i++;
									  }
								
								  return $data_veh;
									$this->db->close();
					  
					  }		  	  	
		
		
		     		  	  
			  
		 				 
			  			 	
	   		 	 
			 
   }
?>