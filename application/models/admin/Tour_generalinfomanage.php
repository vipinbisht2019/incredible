<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Tour_generalinfomanage extends CI_Model
    {
      
	  	//----------------- SHORT ITI INFO ADD---------------------//		 
			function generalinfo_add($data)
			 {

				
			 	
				$q =$this->db->insert('usc_short_iti', $data);
				 if($q>0)
				 {
				 	$lastid = $this->db->insert_id();
					
				 	$this->db->select('LeadId');
				 	$this->db->where('id',$lastid);
					$query = $this->db->get('usc_short_iti')->row_array();
					
					$result = array('lastid'=> $lastid, 'leadId'=>$query['LeadId']);
				  	
				   return $result;
                   $this->db->close();
				 }
				else
				 {
				   return 0;
				 } 
			 } 	 
		//----------------- SHORT ITI INFO ADD---------------------//
		
		//----------------- SHORT ITI CONTACT INFO ADD---------------------//
			 
			function short_iti_contact($data1,$ItiId,$edit){
			//print_r($ItiId); die;
 				if($edit=='yes'){
				
					 $this->db->where('Iti_Id', $ItiId);
					 $this->db->delete('usc_short_iti_contact');
					
				}
				 for($i=0;$i<count($data1);$i++)
				   {
				   
					  if(($data1['ContactName'][$i]!='') || ($data1['ContactMobile'][$i]!='') || ($data1['ContactEmail'][$i]!=''))
						{
						
						  $data2 = array('ContactName'=>$data1['ContactName'][$i],'ContactMobile'=>$data1['ContactMobile'][$i],'ContactEmail'=>$data1['ContactEmail'][$i],'Iti_Id'=>$ItiId) ;
						  $this->db->insert('usc_short_iti_contact', $data2);
						}   
				   }
				
			
			
			}
			
		//----------------- SHORT ITI CONTACT INFO ADD---------------------//
		
		//----------------- GET SHORT ITI Generel INFO ---------------------//
		
			function getShortITIInfoViewList(){
			
				$this->db->select('*');
				$this->db->from('usc_short_iti as SHI');
				$this->db->where('SHI.Status','Y');
				$query = $this->db->get()->result_array();
				return $query;
				$this->db->close();
			
			
			}
		
		//----------------- GET SHORT ITI Generel INFO ---------------------//
		
		function getLeadInfo($id){
		
		error_reporting(0);
				$this->db->select('*');
				$this->db->from('usc_leads');
				$this->db->where('LeadID',$id);
				$query = $this->db->get()->row_array();
				return $query;
				$this->db->close();
				
		}
		
		//----------------- GET SHORT ITI GENERAl INFO BY Id ----------------------//
		
			function getGeneralInfoShotITIById($itiId){
				
				$this->db->select('*');
				$this->db->from('usc_short_iti as SHI');
				$this->db->where('SHI.id',$itiId);
				$this->db->where('SHI.Status','Y');
				$query = $this->db->get()->result_array();
				
				foreach($query as $key => $shortValue){
					
					$this->db->select('*');
					$this->db->from('usc_short_iti_contact as SHIC');
					$this->db->where('SHIC.Iti_Id',$itiId);
					$query[$key]['shiContactList'] = $this->db->get()->result_array();

					$this->db->select('LeadID,Name');
					$this->db->from('usc_leads as lead');
					$this->db->where('lead.LeadID',$shortValue['LeadId']);
					$query[$key]['leadData'] = $this->db->get()->row_array();
				
				}

				
				return $query;
				$this->db->close();
			
			}
			
		//----------------- GET SHORT ITI GENERAl INFO BY Id ----------------------//
			 
		  //-----------------------Add bus and tour associations -------------------------------------------------  
			   
			  public function generalinfo_busestype_assoc($data_1,$TourId,$edit)
			      {
				     if($edit=='yes')
					   {
				     	 $this->db->where('TourId', $TourId);
					     $this->db->delete('usc_tour_buses');
					   }	
					
				     for($i=0;$i<count($data_1);$i++)
					   {
					      if($data_1[$i]!='')
						    {
					          $data_2 = array('TypeId'=>$data_1[$i],'TourId'=>$TourId) ;
					          $this->db->insert('usc_tour_buses', $data_2);
							}   
					   }
							 
				 }	
			//-----------------------Add vihicle and tour associations -------------------------------------------------  
			   
			  public function generalinfo_vehicle_assoc($data_1,$TourId,$edit)
			     {
				     if($edit=='yes')
					   {
				     	 $this->db->where('TourId', $TourId);
					     $this->db->delete('usc_tour_toursvehicle');
					   }	
					
				     for($i=0;$i<count($data_1);$i++)
					   {
					      if($data_1[$i]!='')
						    {
					          $data_2 = array('VehicleId'=>$data_1[$i],'TourId'=>$TourId) ;
					          $this->db->insert('usc_tour_toursvehicle', $data_2);
							}  
					   }
				  }	 	
				 
		     //-----------------------Add Agents permission -------------------------------------------------  
			   
			  public function generalinfo_images_add($data_2,$TourId)
			      {
	
				     for($i=0;$i<count($data_2);$i++)
					   {
					        $data_3 = array('ImageName'=>$data_2[$i]['ImageName'],'TourId'=>$TourId) ;
					        $this->db->insert('usc_tour_images', $data_3);
					   }
					   
					 // $this->db->close();
				 
				 }		  	
				 
				   public function generalinfo_departure_add($data_3,$TourId)
			      {
						//print_r($data_3);
						
				     for($i=0;$i<count($data_3);$i++)
					   {
					        $data_3 = array('departure_date'=>$data_3[$i]['departure_date'],'departure_price'=>$data_3[$i]['departure_price'],'TourId'=>$TourId) ;
					        $this->db->insert('usc_tourgeneral_depatureinfo', $data_3);
					   }
					   
					 // $this->db->close();
				 
				 }	 	 		   	 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function generalinfo_view($limit,$offset)
			 {
			 	
			
				
			 	$this->db->select('tgen.TourId,tgen.TourName,tgen.NoofDay,tgen.NoofNight,tgen.NoofNight,tgen.Rating,tgen.SortOrder,tgen.Image,tgen.Status,locations.locationsName,regions.RegionsName,theme.TheamsName');
				$this->db->from('usc_tourgeneralinfo as tgen');
				$this->db->join('usc_regions as regions','tgen.RId = regions.RId','left');
				$this->db->join('usc_theams as theme','tgen.TheamsId = theme.TheamsId','left');
				$this->db->join('usc_tour_location as tl','tgen.TourId = tl.TourId','left');
				$this->db->join('usc_locations as locations','tl.locationsId = locations.locationsId','left');
				$this->db->where('tgen.LeadId',0);
				$this->db->order_by('tgen.SortOrder',"DESC");
				 $query = $this->db->get();
				  	//echo $this->db->last_query(); exit;
				   return $query->result_array();
				$this->db->close();
					
	
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_tourgeneralinfo');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 
		  
			 
	      //------------------------------------Delete---------------------------------------------------		
	  	    function generalinfo_delete($id)
			   {
			      // ------------------delete tour general info ----------------------
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_tourgeneralinfo');
 				 // ------------------delete tour images  ----------------------
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_tour_images');
				 // ------------------delete tour location  ----------------------
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_tour_location');	
				 // ------------------delete tour inclusion  ----------------------
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_tour_inclusion');	
				 // ------------------delete tour exclusion  ----------------------
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_tour_exclusion');	
				// ------------------delete tour itinerary  ----------------------
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_touritinerary');	
				// ------------------delete tour hotels  ----------------------
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_tourhotels');
			    // ------------------delete tour sight  ----------------------
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_toursight');	
				// ------------------delete tour transfer  ----------------------
			        $this->db->where('TourID', $id);
					$this->db->delete('usc_tourtransfer');
				// ------------------delete tour flight  ----------------------
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_toursflight');									
                // ------------------delete tour flight  ----------------------
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_tourstrains');	
				// ------------------delete tour bus  ----------------------
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_toursbusesinfoinfo');
				// ------------------delete tour cancellationpolicy  ----------------------
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_tourcancellationpolicy');										
                // ------------------delete tour cancellationpolicy  ----------------------
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_tourtermconditions');										

					
					 if($this->db->affected_rows())	
						 { return 1;  } else {  return 0; }  
				 } 

				// check tour is  associated or not with lead to redirect 
	    
	         public function check_lead_tour($TourId)
			     {
			                   $this->db->select('TourId, LeadId, TourName');
							   $this->db->where('TourId', $TourId);
					           $this->db->order_by('TourName', 'asc');
					  $query = $this->db->get('usc_tourgeneralinfo');
					  return  $query->result_array();
					$this->db->close();
			     }   	 
			   
	  //--------------------Delete more (big image)---------------------------------------------------		
	  	    function generalinfo_more_image($id)
			   {
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
				  
				    $this->db->select('ImageName');
			        $this->db->where('ImgId', $id);
					$query=$this->db->get('usc_tour_images');
					$this->db->where('ImgId', $id);
					$this->db->delete('usc_tour_images');
					return $query->result_array();
				
						
				 } 	
	  //------------------------------------Delete more (big image)---------------------------------------------------		
	  	    function generalinfo_main_image($id)
			   {
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
				  
				    $this->db->select('Image');
			        $this->db->where('TourId', $id);
					$query=$this->db->get('usc_tourgeneralinfo');
			
					
					return $query->result_array();
					
						
				 } 		 	 	 
				 
				  	 		 
			 
		  //------------------------------------edit view-----------------------------------------------------		
	       
		    function generalinfo_edit($id)
			   {
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    			  
						$this->db->where('TourId', $id);
						$query = $this->db->get('usc_tourgeneralinfo');
						return $query->result_array();
						$this->db->close();
					
						
			  } 	
		   //------------------------------------- Buses Type Edit -----------------------------------------------	
		    function generalinfo_busestype_edit($id)
			   {
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    		$this->db->select('TypeId');	  
						$this->db->where('TourId', $id);
						$query = $this->db->get('usc_tour_buses');
						$TypeID=$query->result_array();
						 $i=0;
						 $typearray=array();
						 foreach($TypeID as $val)
						   {
						 	  $typearray[$i]=$val['TypeId'];
							  $i++; 
						   }
						   return $typearray;
						$this->db->close();
				  } 
		//--------------------------------------------------------------------------------------------------------------		  
		 	function generalinfo_vehicletype_edit($id)
			   {
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
						
						 $this->db->where('TourId', $id);
						 $query = $this->db->get('usc_tour_toursvehicle');
						 $VTypeID=$query->result_array();
						 $i=0;
						 $vtypearray=array();
						 foreach($VTypeID as $val)
						   {
						 	  $vtypearray[$i]=$val['VehicleId'];
							  $i++; 
						   }
						   return $vtypearray;
						$this->db->close();
					
						
			  } 		  
	   //------------------------------------- Bigimage display  --------------------------------------------------------	
		   
		    function generalinfo_bigimages_edit($id)
			   {
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    			  
						$this->db->where('TourId', $id);
						$query = $this->db->get('usc_tour_images');
						return $query->result_array();
						$this->db->close();
					
						
			  }  	  	 
	  
	  
				 function generalinfo_departures_edit($id)
				   {
					  // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
								  
							$this->db->where('tour_id', $id);
							$query = $this->db->get('usc_tourgeneral_depatureinfo');
							return $query->result_array();
							$this->db->close();
						
							
				  }  	  	 
		  
	      //------------------------------------edit date-----------------------------------------------------		
	       
		    function generalinfo_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    			  
						$this->db->where('id', $id);
						$query = $this->db->update('usc_short_iti',$data);

						$this->db->select('id,LeadId');
						$this->db->from('usc_short_iti');
						$this->db->where('Status','Y');
						$this->db->where('id',$id);
						$q = $this->db->get()->row_array();

						$result = array('leadId' => $q['LeadId'],'query'=> $query);
						return $result;
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    			  
					$this->db->where_in('TourId', $id);
					$this->db->delete('usc_tourgeneralinfo');
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
			   // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    			  
					$this->db->where_in('TourId', $id1);
					$query = $this->db->update('usc_tourgeneralinfo',$data);
					
					
					
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
			   // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    			  
					$this->db->where_in('TourId', $id1);
					$query = $this->db->update('usc_tourgeneralinfo',$data);
					
					
					
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 
			 	
	  //--------------------------------------------------------------- DROP DOWN -----------------------------------------	
	  //-------------------------------------- tour categories drop down -------------------------------------------------------	 	
		 
		  function category_dropdown()
			   {
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    		
						$this->db->select('TourCategoriesId,TourCategoriesName')	  
						         ->where('Status', 'Y')
						         ->order_by('TourCategoriesName');
						$query = $this->db->get('usc_tourcategories');
						return $query->result_array();
						$this->db->close();
				 } 
		
	  //-------------------------------------- tour theams drop down -------------------------------------------------------	 	
		 
		 function theams_dropdown()
			   {
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    		
						$this->db->select('TheamsId,TheamsName')	  
						         ->where('Status', 'Y')
						         ->order_by('TheamsName');
						$query = $this->db->get('usc_theams');
						return $query->result_array();
						$this->db->close();
					
						
			  }
			  	  
			  
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
			 
		//---------------------------------- select bus type ------------------------------------------ 		 
		  function frequency_dropdown()
			   {
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    		
						$this->db->select('TourFrequencyId,TourFrequency')	  
						         ->where('Status', 'Y')
						         ->order_by('TourFrequency');
						$query = $this->db->get('usc_tourfrequency');
						return $query->result_array();
						$this->db->close();
				 } 	 
		 //------------------------------------ select vihicle type -----------------------------------		
		 
		      function vehicletype_dropdown()
			   {
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    		
						$this->db->select('VehicleId,VehicleName, MaxPerson')	  
						         ->where('Status', 'Y')
						         ->order_by('SortOrder');
						$query = $this->db->get('usc_toursvehicle');
						return $query->result_array();
						$this->db->close();
				 } 	

			function getGeneralInfoData($id){

				$this->db->select('max(id) as id');
				$this->db->from('usc_short_iti');
				$this->db->where('Status','Y');
				$query = $this->db->get()->row_array();

			 	$itiId =$query['id'] + 1;


				$this->db->from('usc_short_iti');
				$this->db->where('Status','Y');
				$this->db->where('id',$id);
				$genInfo = $this->db->get()->row_array(); 
				
				$this->db->from('usc_short_iti_contact');
				$this->db->where('Iti_Id',$id);
				$shortItiContact = $this->db->get()->result_array();
				
				$b=0;
				foreach ($shortItiContact as $key) {
					
						unset($shortItiContact[$b]['Iti_Id']);
						unset($shortItiContact[$b]['id']);
						$b++;
				}
				
				$this->db->from('usc_tourhotel_calc');
				$this->db->where('tourId',$id);
				$hotel = $this->db->get()->result_array();
				
				$h=0;
				foreach ($hotel as $key) {
					
						unset($hotel[$h]['tourId']);
						unset($hotel[$h]['id']);
						$h++;
				}
				
				$this->db->from('usc_tour_transport');
				$this->db->where('tour_id',$id);
				$transport = $this->db->get()->result_array();
				
				$t=0;
				foreach ($transport as $key) {
					
						unset($transport[$t]['tour_id']);
						unset($transport[$t]['id']);
						$t++;
				}

				$this->db->from('usc_tourdriver_hotel');
				$this->db->where('tourId',$id);
				$driverhotel = $this->db->get()->result_array();
				
				$dh=0;
				foreach ($driverhotel as $key) {
					
						unset($driverhotel[$dh]['tourId']);
						unset($driverhotel[$dh]['id']);
						$dh++;
				}

				$this->db->from('usc_toursight');
				$this->db->where('TourID',$id);
				$sightseeing = $this->db->get()->result_array();
				
				$s=0;
				foreach ($sightseeing as $key) {
					
						unset($sightseeing[$s]['TourID']);
						unset($sightseeing[$s]['id']);
						$s++;
				}

				$this->db->from('usc_tourmeals');
				$this->db->where('TourId',$id);
				$meals = $this->db->get()->result_array();
				
				$m=0;
				foreach ($meals as $key) {
					
						unset($meals[$m]['TourId']);
						unset($meals[$m]['id']);
						$m++;
				}

				$this->db->from('usc_toursightseeings_info');
				$this->db->where('TourId',$id);
				$sightDetail = $this->db->get()->result_array();
				
				$ss=0;
				foreach ($sightDetail as $key) {
					
						unset($sightDetail[$ss]['TourId']);
						unset($sightDetail[$ss]['id']);
						$ss++;
				}
				
				
				
				$this->db->from('usc_touritinerary');
				$this->db->where('TourId',$id);
				$shortIti = $this->db->get()->result_array();
				
				

				$i=0;
				foreach ($shortIti as $key) {
					
						unset($shortIti[$i]['TourId']);
						unset($shortIti[$i]['ID']);
						$i++;
				}

				$ItiTitle = $genInfo['ItineraryTitle'].' - Copy';

				unset($genInfo['id']);
				unset($genInfo['ItineraryTitle']);
				

				 $data = array();
				 $data1 = array();
				 $data2 = array();
				 $data3 = array();
				 $data4 = array();
				 $data5 = array();
				 $data6 = array();
				 $data7 = array();
				 $data8 = array();

				$j=0;
				@array_push($data1 = $shortIti);
				
				foreach ($data1 as $key) {
					
					
					@array_push($data1[$j]['TourId'] = $itiId);
					
					$j++;

				}
				
				$bi = 0;
				
				 @array_push($data2 = $shortItiContact);
				
				foreach ($data2 as $key) {
					
					
					@array_push($data2[$bi]['Iti_Id'] = $itiId);
					
					$bi++;

				}
				
				$hi = 0;
				
				@array_push($data3 = $hotel);
				
				foreach($data3 as $key) {
					
					
					@array_push($data3[$hi]['tourId'] = $itiId);
					
					$hi++;

				}
				
				$ti = 0;
				
				@array_push($data4 = $transport);
				
				foreach($data4 as $key) {
					
					
					@array_push($data4[$ti]['tour_id'] = $itiId);
					
					$ti++;

				}

				$dhi = 0;
				
				@array_push($data5 = $driverhotel);
				
				foreach($data5 as $key) {
					
					
					@array_push($data5[$dhi]['tourId'] = $itiId);
					
					$dhi++;

				}

				$si = 0;
				
				@array_push($data6 = $sightseeing);
				
				foreach($data6 as $key) {
					
					
					@array_push($data6[$si]['TourID'] = $itiId);
					
					$si++;

				}

				$mi = 0;
				
				@array_push($data7 = $meals);
				
				foreach($data7 as $key) {
					
					
					@array_push($data7[$mi]['TourId'] = $itiId);
					
					$mi++;

				}

				$ssi = 0;
				
				@array_push($data8 = $sightDetail);
				
				foreach($data8 as $key) {
					
					
					@array_push($data8[$ssi]['TourId'] = $itiId);
					
					$ssi++;

				}
								
				
				 @array_push($data = $genInfo);				 
				 @array_push($data['id'] = $itiId);
				 @array_push($data['ItineraryTitle'] = $ItiTitle);
				
				$q =$this->db->insert('usc_short_iti', $data);
				if($q>0)
				{
					$lastid = $this->db->insert_id();
					// short itenerary 

					foreach ($data1 as $key => $value) {

					
						$this->db->insert('usc_touritinerary', $value);

					}
				
					// general info contact
					
					foreach ($data2 as $key => $value1) {

					
						$this->db->insert('usc_short_iti_contact', $value1);

					}
					
					// hotel 
					
					foreach ($data3 as $key => $value2) {

					
						$this->db->insert('usc_tourhotel_calc', $value2);

					}
					
					// transport
					
					foreach ($data4 as $key => $value3) {

					
						$this->db->insert('usc_tour_transport', $value3);

					}
					
					// driver hotel

					foreach ($data5 as $key => $value4) {

					
						$this->db->insert('usc_tourdriver_hotel', $value4);

					}

					// sightseeing 

					foreach ($data6 as $key => $value5) {

					

						$this->db->insert('usc_toursight', $value5);

					}

					// meals 

					
					foreach ($data7 as $key => $value6) {

					
						$this->db->insert('usc_tourmeals', $value6);

					}

					// sight seeing details

					foreach ($data8 as $key => $value7) {

					
						$this->db->insert('usc_toursightseeings_info', $value7);

					}

					// total cost 
/*
					foreach ($data9 as $key => $value8) {

				
						$this->db->insert('usc_toursightseeings_info', $value8);

					}*/

					$this->db->select('LeadId');
					$this->db->where('id',$lastid);
				   $query = $this->db->get('usc_short_iti')->row_array();
				   
				   $result = array('lastid'=> $lastid, 'leadId'=>$query['LeadId']);
					 
				  return $result;
				  $this->db->close();
				}
			   else
				{
				  return 0;
				} 

			}
			   		  				 
			 		  			 	
	   		 	 
			 
   }
?>