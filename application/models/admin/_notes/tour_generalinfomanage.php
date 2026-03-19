<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Tour_generalinfomanage extends CI_Model
    {
      

	  //-----------------------------------------add------------------------------------------------			 
			function generalinfo_add($data)
			 {
			  // Inserting in Table(usc_tourgeneralinfo) of Database(usc)
			  
				 if($this->db->insert('usc_tourgeneralinfo', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 } 	 
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
       //------------------------------------view-----------------------------------------------------		
	       
		    function generalinfo_view($limit,$offset)
			 {
			   // Updateing in Table(usc_tourgeneralinfo) of Database(usc)
			       
				        // $this->db->from('usc_gallery as gal',$limit,$offset)
				            //->join("usc_hoteles as hotel", "gal.HotelId = hotel.HotelId")
			    	  
	 $this->db->select('tgen.TourId, tgen.TourName, tgen.NoofDay, tgen.NoofNight, tgen.Rating, tgen.SortOrder, tgen.Image, tgen.Status, resion.RegionsName, locations.locationsName, theams.TheamsName')
			                ->from('usc_tourgeneralinfo as tgen',$limit,$offset)
						   ->join("usc_regions as resion", "tgen.RId = resion.RId", 'left')
						   ->join(" usc_theams as theams", "tgen.TheamsId = theams.TheamsId", 'left')
						   ->join(" usc_locations as locations", "tgen.locationsId = locations.locationsId", 'left')
			       	       ->order_by("tgen.SortOrder", "asc");
				    $query = $this->db->get();
					
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
			      // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_tourgeneralinfo');
					 if($this->db->affected_rows())	
						 { return 1;  } else {  return 0; }  
				 } 
			   
			  //------------------------------------Delete more (big image)---------------------------------------------------		
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
	  
	      //------------------------------------edit date-----------------------------------------------------		
	       
		    function generalinfo_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_tourgeneralinfo) of Database(usc)
			    			  
						$this->db->where('TourId', $id);
						$query = $this->db->update('usc_tourgeneralinfo',$data);
						//$this->db->close();
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
			   		  				 
			 		  			 	
	   		 	 
			 
   }
?>