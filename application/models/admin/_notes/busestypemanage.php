<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
   class Busestypemanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function busestype_add($data)
			 {
			  // Inserting in Table(usc_buses_type) of Database(usc)
			  
				 if($this->db->insert('usc_buses_type', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 } 	 
	 //------------------------------------------ add seat no. -------------------------------------------	
	      function buses_seatno_add($data)
			 {
			  // Inserting in Table(usc_buses_type) of Database(usc)
			  
				 if($this->db->insert('usc_buses_type_seatno', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 } 	
	    	 //------------------------------------------ add seat no. -------------------------------------------	
	      function buses_seatno_delete($id)
			 {
				 	$this->db->where_in('TypeId', $id);
					$this->db->delete('usc_buses_type_seatno');
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
			 } 			  
	   //-------------------------------------- buses seat no select to edit ------------------------------------
	          function buses_seatno_edit($id,$map_id,$deck_type)
			     {
	                    $SeatNumberArr=array();
			        	$this->db->where('TypeId', $id);
						$this->db->where('MapId', $map_id);
						$this->db->where('DeckType', $deck_type);
						
						$query = $this->db->get('usc_buses_type_seatno');
						$SeatNumber_arr=$query->result_array();
						 	 $i=0;
						foreach($SeatNumber_arr as $val)
						   {
						      $SeatLocationID=$val['SeatLocationID'];
						      $SeatNumberArr[0][$SeatLocationID]=$val['SeatNumber'];
							  $SeatNumberArr[1][$SeatLocationID]=$val['IsLowerSleeper'];
							  $i++;
						   }
						      return  $SeatNumberArr;
						//$this->db->close();
				  }		
	              
	    	 
       //------------------------------------------ view-----------------------------------------------------		
	       
		public function busestype_view($limit,$offset)
			 {
			   // Updateing in Table(usc_buses_type) of Database(usc)
			   			
					 $this->db->from('usc_buses_type as btype')
						 ->limit($limit,$offset)
				            ->join("usc_buses_categories as cat", "btype.CatId = cat.CatId")
							->join("usc_buses_seatmap as map",'map.MapId=btype.MapId','left')
			    	        ->order_by("btype.TypeId", "desc");
			   	    $query = $this->db->get();
					
                    return $query->result_array();
                    $this->db->close();
				
			 } 
	  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		  public  function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_buses_type');
				   return $query->num_rows();
                   $this->db->close();
				
			 } 
			 
  //------------------------------------Insert amenties, term condition and consllation policy-----------------------------------------------------		
	       
     public function busestype_utility($amenties, $termcondition, $consllationpolicy, $typeid, $edit)
			 {
			    
					  if($edit=='yes')
						{
						  $this->db->where('TypeId', $typeid);
						  $this->db->delete('usc_buses_buses_amenties');  
						  $this->db->where('TypeId', $typeid);
						  $this->db->delete('usc_buses_buses_termcondition'); 
						  $this->db->where('TypeId', $typeid);
						  $this->db->delete('usc_buses_buses_cancellationpolicies'); 
						}
			   //-----------------------------------------------------------------------------------------------------------
					   for($i=0;$i<count($amenties);$i++)
						 {
							 $data_1['AmentiesId']=$amenties[$i];
							 $data_1['TypeId']=$typeid;
							 $this->db->insert('usc_buses_buses_amenties', $data_1)  ; 
						 } 	
			   //------------------------------------------------------------------------------------------------------------
					   for($i=0;$i<count($termcondition);$i++)
						 {
							 $data_2['TermsconditionID']=$termcondition[$i];
							 $data_2['TypeId']=$typeid;
							 $this->db->insert('usc_buses_buses_termcondition', $data_2)  ;
						 } 
			    //------------------------------------------------------------------------------------------------------------
					   for($i=0;$i<count($consllationpolicy);$i++)
						 {
							 $data_3['CancellationID']=$consllationpolicy[$i];
							 $data_3['TypeId']=$typeid;
							 $this->db->insert('usc_buses_buses_cancellationpolicies', $data_3)  ; 
						 } 			 			 		  
			  		
						
			 } 			 
			  	 
//------------------------------------Delete-----------------------------------------------------		
	       
	 public function busestype_delete($id)
			 {
			   // Deleteing in Table(usc_buses_type) of Database(usc)
			   		$this->db->where('TypeId', $id);
					$this->db->delete('usc_buses_buses_amenties');  
					$this->db->where('TypeId', $id);
					$this->db->delete('usc_buses_buses_termcondition'); 
					$this->db->where('TypeId', $id);
					$this->db->delete('usc_buses_buses_cancellationpolicies'); 
//------------------------ first delete ---------------------------------------------------------------------			    			  
					$this->db->where('TypeId', $id);
					$this->db->delete('usc_buses_type');
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
	        function busestype_amenties_edit($id)
			     {
				      $AmentiesArr=array();
			        	$this->db->where('TypeId', $id);
						$query = $this->db->get('usc_buses_buses_amenties');
						$amenties_arr=$query->result_array();
						 $i=0;
						foreach($amenties_arr as $val)
						   {
						     $AmentiesArr[]=$val['AmentiesId'];
							  $i++;
						   }
						   return  $AmentiesArr;
						//$this->db->close();
				  } 
		//------------------------------------edit view-----------------------------------------------------		
	        function busestype_termcondition_edit($id)
			     {
				        $TermconditionArr=array();
			        	$this->db->where('TypeId', $id);
						$query = $this->db->get('usc_buses_buses_termcondition');
						$termcondition_arr=$query->result_array();
						 	 $i=0;
						foreach($termcondition_arr as $val)
						   {
						     $TermconditionArr[]=$val['TermsconditionID'];
							  $i++;
						   }
						      return  $TermconditionArr;
						//$this->db->close();
				  } 	
		//------------------------------------edit view-----------------------------------------------------		
	        function busestype_cancellationpolicies_edit($id)
			     {
				        $CancellationpolicieArr=array();
			        	$this->db->where('TypeId', $id);
						$query = $this->db->get('usc_buses_buses_cancellationpolicies');
						
						$cancellationpolicies_arr=$query->result_array();
					    $i=0;
						foreach($cancellationpolicies_arr as $val)
						   {
						      $CancellationpolicieArr[]=$val['CancellationID'];
							  $i++;
						   }
						      return  $CancellationpolicieArr;
						
						//$this->db->close();
				  } 		  		  	
	
	  //------------------------------------edit view-----------------------------------------------------			  
	     function busestype_edit($id)
			   {
			      // Deleteing in Table(usc_buses_type) of Database(usc)
			    			  
						$this->db->where('TypeId', $id);
						$query = $this->db->get('usc_buses_type');
						return $query->result_array();
						//$this->db->close();
					
						
			  } 		 
	   		  	 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function busestype_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_buses_type) of Database(usc)
			    			  
						$this->db->where('TypeId', $id);
						$query = $this->db->update('usc_buses_type',$data);
						
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_buses_type) of Database(usc)
			    			  
					$this->db->where('TypeId', $id);
					$this->db->delete('usc_buses_type');
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
			   // Deleteing in Table(usc_buses_type) of Database(usc)
			    			  
					$this->db->where('TypeId', $id1);
					$query = $this->db->update('usc_buses_type',$data);
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
			   // Deleteing in Table(usc_buses_type) of Database(usc)
			    			  
					$this->db->where('TypeId', $id1);
					$query = $this->db->update('usc_buses_type',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 }

   // Dublicate Check #####################################################################

	         function check_duplicate($TypeTitle)
			      {
			   								
						$q = $this->db->where(['TypeTitle' => $TypeTitle])
								->get('usc_buses_type');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }
			   
			// -----------------------------check records already exist or not when add edit --------------------------------	  	
		 
		       function check_duplicate_edit($value,$id)
			      {
			   								
						$q = $this->db->where(['TypeTitle' => $value,'TypeId!=' => $id])
								->get('usc_buses_type');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }	
		
	  	//-------------------------------------------------  Dropdown ---------------------------------------------------------	   	
		
		   public function bus_category()
		      {
			     $this->db->select('CatId,CategoryName')
				          ->where('Status','Y');
					$query=$this->db->get('usc_buses_categories');
					return $query->result_array();
					$this->db->close();
					  
			  
			  }	   
			   		  		 				 
	//---------------------------------------------------------- drop down Ammenties -------------------------------------------------------	
	
	       public function bus_ammenties()
		      {
			     $this->db->select('AmentiesId,AmentiesName')
				          ->where('Status','Y');
					$query=$this->db->get('usc_buses_amenties');
					return $query->result_array();
					//$this->db->close();
					  
			  
			  }	 
	
	//---------------------------------------------------------- drop down Term Condition -------------------------------------------------------	
		
	       public function bus_termscondition()
		      {
			        $this->db->select('TermsconditionID,Title')
				             ->where('Status','Y');
					$query=$this->db->get('usc_buses_termscondition');
					return $query->result_array();
					//$this->db->close();
					  
			  
			  }	 
	
	//---------------------------------------------------------- drop down usc_buses_cansllationcharge -------------------------------------------------------	
	    
		  public function bus_cansllationcharge()
		      {
			        $this->db->select('CancellationID,CancellationTime, DetectAmount')
				             ->where('Status','Y');
					$query=$this->db->get('usc_buses_cansllationcharge');
					return $query->result_array();
					//$this->db->close();
				
			  }	 	
	
		//---------------------------------------------------------- Seatmap dropdown-------------------------------------------------------	
	    
		  public function bus_seatmap()
		      {
			        $this->db->select('MapId,SeatingTitle, TotalSeats');
				    $query=$this->db->get('usc_buses_seatmap');
					return $query->result_array();
					//$this->db->close();
				
			  }	 
	//---------------------------------------------------------- get seat type id-------------------------------------------------------			  
	   public function bus_seatmap_seattypeid($id)
		      { 
			        $this->db->where('MapId',$id);
			        $this->db->select('SeatTypeId, SeatSleeper, TotalSeats');
				    $query=$this->db->get('usc_buses_seatmap');
					return $query->result_array();
					//$this->db->close();
				
			  }		
			  
		 //------------------------------------edit Location ID-----------------------------------------------------		
	       
					function get_seatmap_location_id($id,$deck_type)
					   {
								$this->db->where('MapId', $id);
								$this->db->where('DeckType', $deck_type);
								$query = $this->db->get('usc_buses_seatmap_seatno');
								 $i=0;$data_array=array();
								foreach($query->result_array() as $val)
								  {
									 $data_array[$i]=$val['SeatLocationID'];
									 $i++;
								  }
								
								 return $data_array;
								
								$this->db->close();
					   } 	  	 	  
					  
			  	  			  	 		  			 	
	   		 	 
			 
   }
?>