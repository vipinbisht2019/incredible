<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_model
  {

		 			
// ---------------------------------------- get slieder data ------------------------------------------------------			  
	  	 public function gaetdata_sliders()
		     {
				$this->db->select('Heading,SmallDesc,BigDesc,Image,WebLink,SortOrder');		  
				$this->db->where('Status', 'Y');
				$this->db->order_by("SortOrder", "asc");
				$query = $this->db->get('usc_flash'); 
				return $query->result_array();
				$this->db->close();
			 }	   
// ---------------------------------------- get home welcome ------------------------------------------------------			  
		  public function home_welcome_text()
		    {
			
			    $this->db->select('page_name,PageTitle,page_description,meta_title,meta_keyword,meta_description');		  
				$this->db->where('page_id', '51');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();
			
			}	
		

		public function home_tours()
		  {
		    error_reporting(0);
		      $this->db->select('tgen.TourId, tgen.TourName, tgen.NoofDay, tgen.NoofNight, tgen.Rating, tgen.SortOrder, tgen.Image, tgen.Status')
			           ->from('usc_tourgeneralinfo as tgen',20,0)
							//->group_by('tgen.TourId')
				           // ->join("usc_regions as resion", "tgen.RId = resion.RId", 'left')
						    //->join("usc_theams as theams", "tgen.TheamsId = theams.TheamsId", 'left')
						    //->join("usc_locations as locations", "tgen.locationsId = locations.locationsId", 'left')
						   // ->join("usc_tour_price as price", "price.TourId = tgen.TourId", 'left')
						->where('TourType','T')
						->where('Status','Y')
						->order_by("tgen.SortOrder", "asc");
				   $query = $this->db->get();
				    $i=0;
					$data_arr=array();
				   foreach($query->result_array() as $tval)
					   {
								$data_arr[$i]['TourId']=$tval['TourId'];   
								$data_arr[$i]['TourName']=$tval['TourName']; 
								$data_arr[$i]['NoofDay']=$tval['NoofDay']; 
								$data_arr[$i]['NoofNight']=$tval['NoofNight'];  
								$data_arr[$i]['Rating']=$tval['Rating']; 
								$data_arr[$i]['SortOrder']=$tval['SortOrder'];  
								$data_arr[$i]['Image']=$tval['Image'];  
								$data_arr[$i]['Status']=$tval['Status']; 
							  //--------------------------------------------------- get coupon details ----------------------------------
							        $tour_id=$tval['TourId'];
									$currentdate=date('Y-m-d');	    			  
									
									$this->db->where('TourId', $tour_id);
									$this->db->where('Status', 'Y');
									$this->db->where('StartDate<=', $currentdate);
									$this->db->where('EndDate>=', $currentdate);
									$this->db->order_by('CouponPrice', 'desc');
									$this->db->limit(1,0);
									$query_coupon1 = $this->db->get('usc_coupon');	
									$coupon_arr=$query_coupon1->result_array();
									
							
									
								    $data_arr[$i]['CouponPrice']=$coupon_arr[0]['CouponPrice']; 
								
								
								        
					     
						 $i++;
					   } 
					
					 return $data_arr;
					
					$this->db->close(); 
		  }	
	//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------	
	//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------	 
    
        		public function home_holidays()
				  {
		      
									error_reporting(0);
									$this->db->select('tgen.TourId, tgen.TourName, tgen.NoofDay, tgen.NoofNight, tgen.Rating, tgen.SortOrder, tgen.Image, tgen.Status')
											->from('usc_tourgeneralinfo as tgen')
											->where('TourType','H')
											->where('Status','Y')
											->limit(3,0)
											->order_by("tgen.SortOrder", "asc");
									$query = $this->db->get();
									$i=0;
									$data_arr=array();
									foreach($query->result_array() as $tval)
									{
										$data_arr[$i]['TourId']=$tval['TourId'];   
										$data_arr[$i]['TourName']=$tval['TourName']; 
										$data_arr[$i]['NoofDay']=$tval['NoofDay']; 
										$data_arr[$i]['NoofNight']=$tval['NoofNight'];  
										$data_arr[$i]['Rating']=$tval['Rating']; 
										$data_arr[$i]['SortOrder']=$tval['SortOrder'];  
										$data_arr[$i]['Image']=$tval['Image'];  
										$data_arr[$i]['Status']=$tval['Status']; 
									  //--------------------------------------------------- get coupon details ----------------------------------
											$tour_id=$tval['TourId'];
											$currentdate=date('Y-m-d');	    			  
											
											$this->db->where('TourId', $tour_id);
											$this->db->where('Status', 'Y');
											$this->db->where('StartDate<=', $currentdate);
											$this->db->where('EndDate>=', $currentdate);
											$this->db->order_by('CouponPrice', 'desc');
											$this->db->limit(1,0);
											$query_coupon1 = $this->db->get('usc_coupon');	
											$coupon_arr=$query_coupon1->result_array();
											
									
											
											$data_arr[$i]['CouponPrice']=$coupon_arr[0]['CouponPrice']; 
										    $i++;
									} 
					
					     return $data_arr;
					 $this->db->close(); 
		  }
   

		

		 // ---------------------------------------- get home welcome ------------------------------------------------------			  
		  public function home_hotel_text()
		    {
			
			    $this->db->select('page_name,PageTitle,page_description,meta_title,meta_keyword,meta_description');		  
				$this->db->where('page_id', '106');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();
			
			} 
		  
		  
		public function home_hotels()
		  {
			 $this->db->from('usc_hoteltype as htype',6,0)
				      ->join("usc_hoteles as hotel", "htype.hoteltypeId = hotel.hoteltypeId")
					  //->where('hotel.Status > ','Y')
				     ->order_by("hotel.SortOrder", "asc");
				$query = $this->db->get();
				return $query->result_array();
				$this->db->close();
		  
		  }	
		
		 // ---------------------------------------- get Vihicles ------------------------------------------------------			  
		  public function home_vehicle_text()
		    {
			
			    $this->db->select('page_name,PageTitle,page_description,meta_title,meta_keyword,meta_description');		  
				$this->db->where('page_id', '115');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();
			
			}   
			
	     
		  // ---------------------------------------- Get Car category to view in home ------------------------------------------------------			  
		  public function home_carhome_category()
		    {
			
			        $this->db->order_by("SortOrder", "asc");
					$this->db->where("IsViewInMenu", "Y");
				    $query = $this->db->get('usc_cartourcategories',2,0);
                    return $query->result_array();
                    $this->db->close();
			}  
			
		 // ---------------------------------------- get buses temppo Hire ---------------------------------------------------------------------			  
		  public function home_buses_temppo()
		    {
			
			    $this->db->select('page_name,PageTitle,page_description,header_image');		  
				$this->db->where('page_id', '113');
				$this->db->or_where('page_id', '114');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();
			
			} 
			
				 // ---------------------------------------- get buses temppo Hire ---------------------------------------------------------------------			  
		  public function home_bestprice_text()
		    {
			
			    $this->db->select('page_name,PageTitle,page_description,header_image');		  
				$this->db->where('page_id', '116');
				$this->db->or_where('page_id', '117');
				$this->db->or_where('page_id', '118');
				$this->db->order_by("page_id", "asc");
				$query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();
			
			}	  
	 // ---------------------------------------- get home gallary letest 2  ------------------------------------------------------------			
	    public function home_sponsor()
		    {
			   
			    $this->db->select('photo,name');		  
				$this->db->where('status', 'Y');
				$this->db->order_by("id", "desc");
	   		    $query = $this->db->get('usc_clients'); 
				return $query->result_array();
				$this->db->close();
			
			}	
	   	 // ---------------------------------------- get home gallary letest 2  ------------------------------------------------------------			
	    public function buses_routes_city()
		    {
			   
			    $this->db->select('CityId,CityName');		  
				$this->db->where('Status', 'Y');
				$this->db->order_by("CityName", "asc");
	   		    $query = $this->db->get('usc_buses_city'); 
				return $query->result_array();
				$this->db->close();
			
			}		
			
		// ------------------------------------------- Tourtours location for search --------------------------------------	
													
        public function tours_city()
		    {
			   
			    $this->db->select('locationsId, locationsName');		  
				$this->db->where('Status', 'Y');
				$this->db->order_by("locationsName", "asc");
	   		    $query = $this->db->get('usc_locations'); 
				return $query->result_array();
				$this->db->close();
			
			}
			
		public function tour_travel()
		    {
			    
				$this->db->where('page_id', '27');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  
			}
    	public function about_mta()
		    {
			    
				$this->db->where('page_id', '28');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();  
			}
			
		public function tour_home(){
				
				date_default_timezone_set("Asia/Kolkata");
				
				$this->db->where('IsView', 'Y');
				$this->db->where('Status', 'Y');
	   		    $query = $this->db->get('usc_tourgeneralinfo'); 
				return $query->result_array();
				$this->db->close();
			
		}
		
		public function home_adventure(){
								
				$this->db->where('Status', 'Y');
				$this->db->order_by("SortOrder", "asc");
	   		    $query = $this->db->get('usc_gallery'); 
				return $query->result_array();
				$this->db->close();
			
		}
		
		public function home_destigallery(){
								
				$this->db->where('Status', 'Y');
				$this->db->where('IsView', 'Y');
				$this->db->order_by("SortOrder", "asc");
	   		    $query = $this->db->get('usc_locations'); 
				return $query->result_array();
				$this->db->close();
			
		}
		
		public function home_destination(){
								
				$this->db->where('Status', 'Y');
				$this->db->where('ParentID', '0');
				$this->db->order_by("SortOrder", "asc");
	   		    $locationParentList = $this->db->get('usc_locations')->result_array();
				
				//$locationChildList = array(); 
				
				/*foreach($locationParentList as $key => $locationParentListValue){
				
					$this->db->where('Status', 'Y');
					$this->db->where('ParentID', $locationParentListValue['locationsId']);
					$this->db->order_by("SortOrder", "asc");
					$locationParentList[$key]['locationChildList'] = $this->db->get('usc_locations')->result_array(); 
										
				}
				*/
				$result = array('locationParentList' => $locationParentList);
				//print_r($result); die;
				//echo $this->db->last_query();
				return $result;
				$this->db->close();
			
		}
		
		public function home_theme(){
								
				$this->db->where('Status', 'Y');
				$this->db->order_by("SortOrder", "asc");
	   		    $query = $this->db->get('usc_theams'); 
				return $query->result_array();
				$this->db->close();
			
		}

		public function tour_detail(){
								
				$this->db->where('Status', 'Y');
				$this->db->order_by("SortOrder", "asc");
	   		    $query = $this->db->get('usc_theams'); 
				return $query->result_array();
				$this->db->close();
			
		}


		/*************************************  INCREDIBLE  *****************************************/

			function getCityBySearch($searchDeoparture){

				//print_r($searchDeoparture); die;

				$this->db->select('code,CityName,CityCode, AirportName,CountryName,countrycode');
				$this->db->from('usc_flight_city');
				$this->db->like('code', $searchDeoparture,'both');
				$this->db->or_like('CityCode', $searchDeoparture,'both');
				$this->db->or_like('CityName', $searchDeoparture,'both');
				//$this->db->where("CityCode like '%".$searchDeoparture."%' ");
				//$this->db->or_where("CityName like '%".$searchDeoparture."%' ");
				$query = $this->db->get()->result();
				//echo $this->db->last_query(); die;
			//	print_r($query); 
				foreach($query as $row ){

					 $countyImage  = '<img src="'.base_url().'uploads/flight.png" style="width: 25px;position: relative;top: 8px;">' ;

					 //echo $countyImage; 

					// $response[] = array("value"=>$row->code,"label"=>$row->CityName." , ".$row->countrycode. " - ". $row->AirportName . "  (" .$row->code. ")" );
					
					
					 $temp_array = array();
					 $temp_array['value'] = $row->CityName.'('.$row->code.')';
					 $temp_array['label'] = '<div class="row"><div class="col-md-1"> '. $countyImage.' </div><div class="col-md-9"> <p style="font-size: 12px;font-weight: 500;line-height: 12px;margin-top: 10px;">'  . $row->CityName.' , '.$row->CountryName.'</p> <p style="font-size: 11px;font-weight: 500;color: #808080;line-height: 5px;margin-bottom:5px">'.$row->AirportName.'</p></div><div class="col-md-2"> <p style="font-weight: 600;color:#444;position: relative;top: 8px;">'.$row->code.'</p></div></div>';
					// //$temp_array['label'] = '<img src="uploads/819814.png" width="70" />&nbsp;&nbsp;&nbsp;'.$row->CityName.'';

					 $response[] = $temp_array;

					
					
				 }
		  
				return $response; 
				$this->db->close(); 


			}

		

			

		/*************************************  INCREDIBLE  *****************************************/
	}
   


?>