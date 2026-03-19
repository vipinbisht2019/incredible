<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     ***************************************************************************************************************
     */
class Leadsmanage extends CI_Model
   {
         //-----------------------------------------add------------------------------------------------			 
	public	function leads_add($data)
	{
			$q =$this->db->insert('usc_leads', $data);
			if($q>0)
			{
				$lastid = $this->db->insert_id();
			   
				$d1 = date('Y-m-d');
			   $date = DateTime::createFromFormat("Y-m-d", $d1);
			   $dt = $date->format("Y");
				   
			   $fileno = 'SIV'.'-'.'100'.$lastid.'-'.$dt;
			   
			   $fileData = array('FileNo'=> $fileno);
				   
			   $this->db->where('LeadID',$lastid);
			   $this->db->update('usc_leads',$fileData);
				//echo $this->db->last_query(); die;
			// 	$this->db->select('LeadId');
			// 	$this->db->where('id',$lastid);
			//    $query = $this->db->get('usc_short_iti')->row_array();
			   
			   $result = array('lastid'=> $lastid);
				 
			  return $result;
			  $this->db->close();
			}
		   else
			{
			  return 0;
			} 	

		
	} 
		  //-----------------------------------------add------------------------------------------------			 
	 public	function leads_followup_add($data)
			  {
			   	 if($this->db->insert('usc_leads_log_reports', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
		       } 	   
			   
			   
		  
     //-----------------------------------------assign------------------------------------------------			 
	 public	function leads_assign($data)
			  {
			  
			  print_r($data); die;
			     if($this->db->insert('usc_leads', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
		       } 		  
				   	   	 
   //------------------------------------view-----------------------------------------------------		
	 // $Employee,$LeadStatus,$TravelDate, $SerachOption,$Keyword       
	 public function leads_view()
			 {
	
					$this->db->select('lead.LeadID,lead.Name,lead.Email,lead.ContactNumber,lead.TravelDate,lead.LeadType,lead.City,lead.State,lead.Address,lead.Country,lead.assign_to,status.*,ls.LeadID as assignid,lead.FollowUpDate');
					$this->db->from('usc_leads as lead');
					$this->db->join('usc_leads_status as status', 'lead.LeadStatusID=status.Id', 'left');
					$this->db->join('usc_leads_assign as ls', 'lead.LeadID=ls.LeadID', 'left');
					$this->db->order_by("lead.LeadID", "desc");
					//$this->db->limit($limit,$offset);
				   $query = $this->db->get()->result_array();
				   //echo $this->db->last_query(); die;
				  // echo '<pre>'; print_r($query); die;
				   return $query;	
				   $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
	  public function get_tatal()
			 {

			                
				   $query = $this->db->get('usc_leads');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 
 //------------------------------------Get search lead----------------------------------------------------	  		
		 public function leads_view_search($limit, $offset, $Employee, $LeadStatus, $TravelDate, $SerachOption, $Keyword)
			 {
	
			                    $this->db->select('lead.*, status.*');
								$this->db->from('usc_leads as lead');
			   	                $this->db->join('usc_leads_status as status', 'lead.LeadStatusID=status.Id', 'left');
								$this->db->join('usc_leads_assign as assign', 'lead.LeadID=assign.LeadID', 'left');
								 if($Keyword!='')
								    {
									      if($SerachOption=='N') {  $this->db->like("lead.Name", $Keyword);  } 
										  if($SerachOption=='E') {  $this->db->like("lead.Email", $Keyword);  }
										  if($SerachOption=='P') {  $this->db->like("lead.ContactNumber", $Keyword);  }
									
									}
								 if($LeadStatus!='')
								    {
									    $this->db->where("lead.LeadStatusID", $LeadStatus);
									}	
								if($TravelDate!='')
								    {
									          $travelDateArr=explode("-",$TravelDate);    
					    	                  $travelDateArrStr=$travelDateArr['2']."-".$travelDateArr['1']."-".$travelDateArr['0'];
											  $this->db->where("lead.TravelDate", $travelDateArrStr);
									}		
							   if($Employee!='')
								    {
									   $this->db->where("assign.EmployeeID", $Employee);
									}			
								
								
							    $this->db->order_by("lead.LeadID", "desc");
								$this->db->limit($limit,$offset);
				       $query = $this->db->get();
                       return $query->result_array();	
				       $this->db->close();
				
			 } 
	 //------------------------------------Get search lead----------------------------------------------------	  
	  public function get_tatal_search($Employee, $LeadStatus, $TravelDate, $SerachOption, $Keyword)
			 {

			                
								 $this->db->select('lead.*');
								 $this->db->from('usc_leads as lead');
								 $this->db->join('usc_leads_status as status', 'lead.LeadStatusID=status.Id', 'left');
								 $this->db->join('usc_leads_assign as assign', 'lead.LeadID=assign.LeadID', 'left');
								 if($Keyword!='')
								   {
									   if($SerachOption=='N') {  $this->db->like("lead.Name", $Keyword);  } 
									   if($SerachOption=='E') {  $this->db->like("lead.Email", $Keyword);  }
									   if($SerachOption=='P') {  $this->db->like("lead.ContactNumber", $Keyword);  }
								   }
								if($LeadStatus!='')
									{
										$this->db->where("lead.LeadStatusID", $LeadStatus);
									}	
								 if($TravelDate!='')
									{
											  $travelDateArr=explode("-",$TravelDate);    
											  $travelDateArrStr=$travelDateArr['2']."-".$travelDateArr['1']."-".$travelDateArr['0'];
											  $this->db->where("lead.TravelDate", $travelDateArrStr);
									 }		
								 if($Employee!='')
									 {
									   $this->db->where("assign.EmployeeID", $Employee);
									 }			
								   
									$this->db->order_by("lead.LeadID", "desc");
							       $query = $this->db->get();	
								   return $query->num_rows();
								   $this->db->close();
				
			 }  	 	 	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
	  public function leads_delete($id)
			 {

			    			  
					$this->db->where('LeadID', $id);
					$this->db->delete('usc_leads');
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
	       
	  public function leads_edit($id)
		 {

			    		 	    
						         $this->db->where('LeadID', $id);
						$query = $this->db->get('usc_leads');
						return $query->result_array();
						$this->db->close();
		 } 
		  		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
	  public function leads_edit_data($data,$id)
			  {

			    			  
						$this->db->where('LeadID', $id);
						$query = $this->db->update('usc_leads',$data);
						//echo $sql = $this->db->last_query(); exit;
						return $query;
						$this->db->close();
						
			  } 
			  
  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
	 public function admin_delete_bulk($id)
		{

			    			  
					$this->db->where_in('LeadID', $id);
					$this->db->delete('usc_leads');
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 		
			 
			
	

	
		// --------------------------------------------------- leads ----------------------------------------------- 	   
        // -----------------------------check emaployee already exist or not when add agents --------------------------------
		 
		  function check_duplicate($field, $value)
			    {						
						 $q = $this->db->where([$field => $value])
								       ->get('usc_leads');
						      $this->db->last_query();
					  if($q->num_rows()==0) 
						  {
						     return 1 ;
							
						  } else {
						
							 return 0;
						  }
			    }	
	// -----------------------------check emaployee already exist or not when add edit --------------------------------	  	
		 
		       function check_duplicate_edit($field, $value, $id)
			      {
			   		$q = $this->db->where([$field => $value,'LeadID!=' => $id])
								  ->get('usc_leads');
					     $this->db->last_query();
					   if ($q->num_rows()==0) {
						  return 1 ;
							
						 } else {
						
							 return 0;
						}
			   }
	 //-------------------------------------------- check lead is alredy assigned or not ------------------------------------------		 
	       function check_lead_assined($field, $value)
			    {						
						 $q = $this->db->where([$field => $value])
								       ->get('usc_leads_assign');
						      $this->db->last_query();
					  if($q->num_rows()==0) 
						  {
						     return 1 ;
							
						  } else {
						
							 return 0;
						  }
			    }	  
			   
			   	
			   
			   
	//-------------------------------------------Leads category dropdown------------------------------------------------------------
           public function get_category_dropdown()
			   {
					         
					           $this->db->order_by('category_name', 'asc');
					  $query = $this->db->get('usc_leads_categories');
					 return $query->result_array();
					 $this->db->close();
			   }  	
	//-------------------------------------------Leads leads source dropdown------------------------------------------------------------
           public function get_leadsource_dropdown()
			   {
					         
					           $this->db->order_by('Title', 'asc');
					  $query = $this->db->get('usc_leads_source');
					  return $query->result_array();
					  $this->db->close();
			   }  	   	   
	//-------------------------------------------Leads meal plan  dropdown------------------------------------------------------------
           public function get_mealplan_dropdown()
			   {
					         
					           $this->db->order_by('Title', 'asc');
					  $query = $this->db->get('usc_leads_mealoption');
					  return $query->result_array();
					  $this->db->close();
			   }  	
	  //-------------------------------------------Leads flight option  dropdown------------------------------------------------------------
           public function get_flight_dropdown()
			   {
					         
					           $this->db->order_by('Title', 'asc');
					  $query = $this->db->get('usc_leads_flightoption');
					  return $query->result_array();
					  $this->db->close();
			   } 
			   
	   	//-------------------------------------------Leads Status dropdown------------------------------------------------------------
           public function get_leadstatus_dropdown()
			   {
					         
					           $this->db->order_by('SortOrder', 'asc');
					  $query = $this->db->get('usc_leads_status');
					  return $query->result_array();
					  $this->db->close();
			   }  	   			    	   		      	   
	  //----------------------------------------------- leads asign employee dropdown --------------------------------------------------------
	   
	       public function get_employee_dropdown()
			 {
			   				     $this->db->from('usc_emaployee')
										  ->where('SubEmployee',0)
										  ->order_by("EmployeeID", "desc");
							$query = $this->db->get();
                       		$i=0;
							$emplist=array();
							foreach($query->result() as $eval)
							  {
							      $emplist[$i]['EmployeeID']= $eval->EmployeeID;
								  $emplist[$i]['FirstName']= $eval->FirstName;
								  $emplist[$i]['LastName']= $eval->LastName;
								  $emplist[$i]['EmployeeDesignation']= $eval->EmployeeDesignation;
								  $emplist[$i]['EmailID']= $eval->EmailID;
						     //------------------------------------------ sub employee ---------------------------------
									 $EmployeeID=$eval->EmployeeID;
								   	 $this->db->select('*')
											  ->where('SubEmployee', $EmployeeID)
											  ->order_by('EmployeeID', 'asc');
								   $empquery = $this->db->get('usc_emaployee');
								         $j=0;
									   foreach($empquery->result() as $sval)
					                           {
													$emplist[$i]['sub'][$j]['EmployeeID']= $sval->EmployeeID;
													$emplist[$i]['sub'][$j]['FirstName']= $sval->FirstName;
													$emplist[$i]['sub'][$j]['LastName']= $sval->LastName;
													$emplist[$i]['sub'][$j]['EmployeeDesignation']= $sval->EmployeeDesignation;
													$emplist[$i]['sub'][$j]['EmailID']= $sval->EmailID;
													
										  //--------------------------------------------- sub sub employee id --------------------------			
													     $SubEmployeeID=$sval->EmployeeID;
														  $this->db->select('*')
											                       ->where('SubEmployee', $SubEmployeeID)
											                       ->order_by('EmployeeID', 'asc');
								                          $subempquery = $this->db->get('usc_emaployee');
								                           $k=0;
													     foreach($subempquery->result() as $ssval)
															   {															
																	$emplist[$i]['sub'][$j]['subsub'][$k]['EmployeeID']= $ssval->EmployeeID;
																	$emplist[$i]['sub'][$j]['subsub'][$k]['FirstName']= $ssval->FirstName;
																	$emplist[$i]['sub'][$j]['subsub'][$k]['LastName']= $ssval->LastName;
																	$emplist[$i]['sub'][$j]['subsub'][$k]['EmployeeDesignation']= $ssval->EmployeeDesignation;
																	$emplist[$i]['sub'][$j]['subsub'][$k]['EmailID']= $ssval->EmailID;
															     $k++;
															   }
												   $j++;
											   }
								    $i++;    
							  }	  
				   
				     return $emplist;
				 
                    $this->db->close();
				
			 } 		   	 
	
	//---------------------------------------------------------- get all status and total -----------------------------------------------------------------	   	 
	//---------------------------------------------------------- get all status and total -----------------------------------------------------------------				 
				  public function get_lead_status()
					 {
									$this->db->from('usc_leads_status')
												  ->order_by("SortOrder", "asc");
									$query = $this->db->get();
									$i=0;
									$emplist=array();
									foreach($query->result() as $eval)
									   {
									       $Id=$eval->Id;
										   $datalist[$i]['Title']= $eval->Title;  
										   //---------------------------------------------------------- leads --------------------------------------------  
															  $this->db->select('LeadID')
															          ->from('usc_leads')
																      ->where("LeadStatusID", $Id);
																	 
													  $query = $this->db->get();
													  $totalrecords=$query->num_rows();
													  $datalist[$i]['totalrecords']= $totalrecords;   
										 
										 
										 $i++; 
									   }
							  return $datalist;		   
									   
					   }	
					   
//---------------------------------------------------------- get leads details and there parameters--------------------------------------------
//---------------------------------------------------------- get leads details  and there parameters-------------------------------------------
//---------------------------------------------------------- get leads details and there parameters--------------------------------------------
//---------------------------------------------------------- get leads details  and there parameters-------------------------------------------
//---------------------------------------------------------- get leads details and there parameters--------------------------------------------
//---------------------------------------------------------- get leads details  and there parameters-------------------------------------------
	                public function get_lead_details($id)
					  {
					            $this->db->select('*')
										 ->from('usc_leads')
					                     ->where('LeadID', $id);
							   $query = $this->db->get()->result_array();

							   foreach ($query as $key => $leadValue) {
								 	$this->db->select('cityid,city_name')
										->from('usc_city')
										->where('status','Y')
										->where('cityid', $leadValue['City']);
								$query[$key]['cityNameList'] = $this->db->get()->row_array();

								$this->db->select('StatesID,StatesName')
										->from('nuttyshoppers_states')
										->where('status','Y')
										->where('StatesID', $leadValue['State']);
								$query[$key]['stateNameList'] = $this->db->get()->row_array();

								$this->db->select('countryid,country')
								->from('usc_country')
								->where('status','Y')
								->where('countryid', $leadValue['Country']);
						$query[$key]['countryNameList'] = $this->db->get()->row_array();
							   }

							return $query;

					  }
//------------------------------------------- get asign emp id    ---------------------------------------------------------	  
				 public function get_asignemp_id($id)
					  {
					            $this->db->select('EmployeeID')
										 ->from('usc_leads_assign')
					                     ->where('LeadID', $id);
							   $query = $this->db->get();
							return $query->result_array();

					  } 
//------------------------------------------- Leads category view ------------------------------------------------------------
			   public function get_category($id)
				   {
								   $this->db->where('category_id', $id);
						  $query = $this->db->get('usc_leads_categories');
						 return $query->result_array();
						 $this->db->close();
				   }  	
//-------------------------------------------Leads leads source view------------------------------------------------------------
           public function get_leadsource($id) 
			   {
					         
					           $this->db->where('Id', $id);
					  $query = $this->db->get('usc_leads_source');
					  return $query->result_array();
					  $this->db->close();
			   }  	   	   
//-------------------------------------------Leads meal plan  view------------------------------------------------------------
           public function get_mealplan($id)
			   {
					         
					           $this->db->where('Id', $id);
					  $query = $this->db->get('usc_leads_mealoption');
					  return $query->result_array();
					  $this->db->close();
			   }  	
//-------------------------------------------Leads flight option  view------------------------------------------------------------
           public function get_flight($id)
			   {
					         
					           $this->db->where('Id', $id);
					  $query = $this->db->get('usc_leads_flightoption');
					  return $query->result_array();
					  $this->db->close();
			   } 	
			 
//-------------------------------------------Leads  status view------------------------------------------------------------
           public function get_leadstatus($id) 
			   {
					         
					           $this->db->where('Id', $id);
					  $query = $this->db->get('usc_leads_status');
					  return $query->result_array();
					  $this->db->close();
			   }  	   	       
					
//--------------------------------------------- Assined Employee ---------------------------------------------------------		
						   			  	   	   
		     public function get_assined_employee($id) 
			   {
			   		
					$this->db->select('assign_to');
					$this->db->from('usc_leads');
					$this->db->where('LeadID',$id);
					$leadAssign = $this->db->get()->row_array();
					
						if($leadAssign['assign_to'] !=''){
								
						$this->db->select('EmployeeID, FirstName, LastName');
						$this->db->where('EmployeeID', $leadAssign['assign_to']);
						  $query = $this->db->get('usc_emaployee');
						  return $query->result_array();
						  $this->db->close();
							
						}else{
						$this->db->select('EmployeeID')
								->from('usc_leads_assign')
								->where('LeadID', $id);
						$query = $this->db->get();
						$EmpArr=$query->result_array();
						$EmployeeID=$EmpArr[0]['EmployeeID'];
							   
							   $this->db->select('EmployeeID, FirstName, LastName');
					           $this->db->where('EmployeeID', $EmployeeID);
					  $query = $this->db->get('usc_emaployee');
					  return $query->result_array();
					  $this->db->close();
						}
					
			   
			   
							
			   }  
//--------------------------------------------- get followup details of a lead ---------------------------------------------------------	
//--------------------------------------------- get followup details of a lead ---------------------------------------------------------	
		   
		 public function get_lead_followup_log($lid)
			 {
			   				     $this->db->from('usc_leads_log_reports')
										  ->where('LeadID',$lid)
										  ->order_by("ReportID", "desc");
							$query = $this->db->get();
                       		$i=0;
							$data=array();
							foreach($query->result() as $eval)
							  {

								
							      $data[$i]['ReportID']= $eval->ReportID;
								  $data[$i]['Description']= $eval->Description;	
								  $data[$i]['DateTime']= $eval->DateTime;
								  $data[$i]['FollowUpDate']= $eval->FollowUpDate;	 
								  $data[$i]['ActionFollowup']= $eval->FollowUpDate;	 
								  $data[$i]['SubmittedById']= $eval->SubmittedById;	 
								  $data[$i]['StatusId']= $eval->StatusId;	 
								  $data[$i]['SubmittedBy']= $eval->SubmittedBy;	 
								   $submit_id=$eval->SubmittedById;
								   
							  //----------------------------------------------------------- submited by ---------------------------------
								      if($eval->SubmittedBy=='A') // get data from admin
									    {
													   $this->db->where('adm_id', $submit_id);
											  $query = $this->db->get('usc_admin');
											  $rows=$query->result_array();
											  $data[$i]['SubmittedName']= $rows[0]['adm_name'];	 
											
										  
										}
								       elseif($eval->SubmittedBy=='E') // get data from empid
									    {
										
										               $this->db->where('EmployeeID', $submit_id);
											  $query = $this->db->get('usc_emaployee');
											  $rows=$query->result_array();
											  $data[$i]['SubmittedName']= $rows[0]['FirstName']." ".$rows[0]['LastName'];	 
										
										}
								 //------------------------------------------ get status ---------------------------------------------------------
								                      $StatusId=$eval->StatusId;	
										 
										               $this->db->where('Id', $StatusId);
											  $query = $this->db->get('usc_leads_status');
											  $rows=$query->result_array();
											  $data[$i]['Title']= $rows[0]['Title'];	 
									   
								   $i++;
							  }	   
							  
							return $data;   
			   }
	//--------------------------------------------- get and set meeting of a lead ---------------------------------------------------------	
    //--------------------------------------------- get and set meeting of a lead ---------------------------------------------------------
	//--------------------------------------------- get and set meeting of a lead ---------------------------------------------------------	
    //--------------------------------------------- get and set meeting of a lead ---------------------------------------------------------
	//--------------------------------------------- get and set meeting of a lead ---------------------------------------------------------	
    //--------------------------------------------- get and set meeting of a lead ---------------------------------------------------------
	           				   			  	   	   
		     public function set_meeting($data)  // set meetings
			   {
			       if($this->db->insert('usc_leads_meeting', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 }
			    }	
		//----------------------------------------------------------------------------------------------------------------------------------	
		//----------------------------------------------------------------------------------------------------------------------------------
			
			 public function get_meeting($lid)   // get meetings
			   {
					         
					           $this->db->where('LeadId', $lid);
					  $query = $this->db->get('usc_leads_meeting');
					  return $query->result_array();
					  $this->db->close();
			   }  	   	       
							   
	  //---------------------------- Send Quotation Section---------------------------------------------------------	
      //---------------------------- Send Quotation Section---------------------------------------------------------	
	  //--------------------------- Send Quotation Section---------------------------------------------------------	
      //--------------------------- Send Quotation Section---------------------------------------------------------	
	  //--------------------------- Send Quotation Section---------------------------------------------------------	
      //---------------------------Send Quotation Section---------------------------------------------------------		   
		   
		    public function get_tours_category_dropdown()
			  {
			                   $this->db->where('Status', 'Y');
					           $this->db->order_by('TourCategoriesName', 'asc');
					  $query = $this->db->get('usc_tourcategories');
					  return $query->result_array();
					  $this->db->close();
			      
				    
			  }   	
		 //-------------------------- tours category ----------------------------------------------------------	     	  	   	 
			  public function get_leads_tours_dropdown()
			     {
			                   $this->db->select('TourId, TourName');
							   $this->db->where('Status', 'Y');
							   $this->db->where('LeadId', '0');
					           $this->db->order_by('TourName', 'asc');
					  $query = $this->db->get('usc_tourgeneralinfo');
					  return $query->result_array();
					  $this->db->close();
			     }   

	    // check tour is  associated or not with lead 	
	    
	         public function check_lead_tour($LeadId)
			 {
				//print_r($LeadId) ; die;
						   $this->db->select('*');
						   $this->db->where('LeadId', $LeadId);
						   $this->db->order_by('id', 'asc');
				  $query = $this->db->get('usc_short_iti');
				  return  $query->result_array();
				$this->db->close();
			 }   
				 
		
		public function country_list(){
			
					$this->db->select("*")  
							 ->order_by('country');
					$query = $this->db->get('usc_country');
					return $query->result_array();
					$this->db->close();
		
		} 
		
		public function state_list(){
		
					$this->db->select("*")  
							 ->order_by('StatesName');
					$query = $this->db->get('nuttyshoppers_states');
					return $query->result_array();
					$this->db->close();
		
		} 
		
		public function city_list(){
		
					$this->db->select("*")  
							 ->order_by('city_name');
					$query = $this->db->get('usc_city');
					return $query->result_array();
					$this->db->close();
		
		}	 
		
		public function getFileNoList(){
			
			$this->db->select("FileNo")  
					 ->order_by('LeadID');
			$query = $this->db->get('usc_leads');
			return $query->result_array();
			$this->db->close();
			
		}


		public function assignUserList(){

			$this->db->where('Status','Y');
			$query = $this->db->get('usc_emaployee')->result_array();
			return $query;
			$this->db->close();
		}
		    	
   }
?>