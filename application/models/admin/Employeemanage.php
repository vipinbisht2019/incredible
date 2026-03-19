<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
class Employeemanage extends CI_Model
   {
         //-----------------------------------------add------------------------------------------------			 
	 public	function employee_add($data)
			  {
			     // Inserting in Table(usc_emaployee) of Database(usc)
				 if($this->db->insert('usc_emaployee', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
		       } 
		  
				   	   	 
   //------------------------------------view-----------------------------------------------------		
	       
	 public function employee_view($limit,$offset)
			 {
			   // Updateing in Table(usc_emaployee) of Database(usc)
			   
			   	       $this->db->from('usc_emaployee',$limit,$offset)
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
								  $emplist[$i]['PhoneNO']= $eval->PhoneNO;
								  $emplist[$i]['Photo']= $eval->Photo;
								   $emplist[$i]['Status']= $eval->Status;
								 
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
													$emplist[$i]['sub'][$j]['PhoneNO']= $sval->PhoneNO;
													$emplist[$i]['sub'][$j]['Photo']= $sval->Photo;
													$emplist[$i]['sub'][$j]['Status']= $sval->Status;
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
																	$emplist[$i]['sub'][$j]['subsub'][$k]['PhoneNO']= $ssval->PhoneNO;
																	$emplist[$i]['sub'][$j]['subsub'][$k]['Photo']= $ssval->Photo;
																	$emplist[$i]['sub'][$j]['subsub'][$k]['Status']= $ssval->Status;
															   
															   
															     $k++;
															   }
												
													
													$j++;
											   }
								
								
								
								  $i++;    
							  }	  
				   
				     return $emplist;
				 
                    $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
	  public function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			                $this->db->where('SubEmployee',0);
				   $query = $this->db->get('usc_emaployee');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
	  public function employee_delete($id)
			 {
			   // Deleteing in Table(usc_emaployee) of Database(usc)
			    			  
					$this->db->where('EmployeeID', $id);
					$this->db->delete('usc_emaployee');
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
	       
	  public function employee_edit($id)
			   {
			      // Deleteing in Table(usc_emaployee) of Database(usc)
			    			  
						$this->db->where('EmployeeID', $id);
						$query = $this->db->get('usc_emaployee');
						return $query->result_array();
						$this->db->close();
					
						
			  } 
		  		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
	  public function employee_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_emaployee) of Database(usc)
			    			  
						$this->db->where('EmployeeID', $id);
						$query = $this->db->update('usc_emaployee',$data);
						echo $sql = $this->db->last_query();
						
						//$this->db->close();
						
			  } 
			  
  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
	 public function admin_delete_bulk($id)
		{
			   // Deleteing in Table(usc_emaployee) of Database(usc)
			    			  
					$this->db->where_in('EmployeeID', $id);
					$this->db->delete('usc_emaployee');
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
	public function admin_activate_bulk($id1,$data)
			 {
			   // Deleteing in Table(usc_emaployee) of Database(usc)
			    			  
					$this->db->where_in('EmployeeID', $id1);
					$query = $this->db->update('usc_emaployee',$data);
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
	public function admin_deactivate_bulk($id1,$data)
			 {
			   // Deleteing in Table(usc_emaployee) of Database(usc)
			    			  
					$this->db->where_in('EmployeeID', $id1);
					$query = $this->db->update('usc_emaployee',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 	
			 
	  //-------------------------------------  Get Hotel Facilities ----------------------------------------------		 	 				 
	public function hotelfacilities()
			   {
					$this->db->where('Status', 'Y');
					$this->db->order_by('SortOrder', 'asc');
					$query = $this->db->get('usc_facilities');
					return $query->result_array();
					$this->db->close();
			   }  
			   
     		 
	       //-------------------------------------  Get Hotel Facilities ----------------------------------------------		 	 				 
	public function hotel_type()
			   {
					$this->db->select('hoteltypeId,hoteltypeName')
					         ->where('Status', 'Y')     
					         ->order_by('SortOrder', 'asc');
					$query = $this->db->get('usc_hoteltype');
					return $query->result_array();
					$this->db->close();
			   } 
			   
			// ------------------------------------ employee--------------- drop down ----------------------    			   
			   
		 public function employee_dropdown()
			   {
					$this->db->select('EmployeeID, FirstName, LastName')
					         ->where('SubEmployee', 0)
					         ->order_by('EmployeeID', 'asc');
					$query = $this->db->get('usc_emaployee');
					  $i=0;
					  $emp=array();
					foreach($query->result() as $eval)
					 {
					  
					      $emp[$i]['EmployeeID']= $eval->EmployeeID;
						  $emp[$i]['FirstName']= $eval->FirstName;
						  $emp[$i]['LastName']= $eval->LastName;
						    // -------------------- select sub emap ----------------------------------------
							        $EmployeeID=$eval->EmployeeID;
								   	$this->db->select('EmployeeID, FirstName, LastName')
											 ->where('SubEmployee', $EmployeeID)
											 ->order_by('EmployeeID', 'asc');
								   $empquery = $this->db->get('usc_emaployee');
								         $j=0;
									   foreach($empquery->result() as $sval)
					                           {
													$emp[$i]['sub'][$j]['EmployeeID']= $sval->EmployeeID;
													$emp[$i]['sub'][$j]['FirstName']= $sval->FirstName;
													$emp[$i]['sub'][$j]['LastName']= $sval->LastName;
													
													$j++;
											   }
					      $i++;
					 }
					 
				//	 echo"<pre>"; 
					 // print_r($emp);
					//   die();
					
					  return $emp;
					$this->db->close();
			   } 
			   
		//---------------------------------------------------------------- check duplicate email and login id -------------------------------------------------------	
		
		     // -----------------------------check emaployee already exist or not when add agents --------------------------------
		 
		  function check_duplicate($field, $value)
			    {
			   								
						$q = $this->db->where([$field => $value])
								      ->get('usc_emaployee');
								
						 $this->db->last_query();
							//echo"---------".$q->num_rows();
							//die();	
											
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
			   		$q = $this->db->where([$field => $value,'EmployeeID!=' => $id])
								  ->get('usc_emaployee');
					     $this->db->last_query();
					   if ($q->num_rows()==0) {
						  return 1 ;
							
						 } else {
						
							 return 0;
						}
			   }	
			   
			   
	//-------------------------------------------------------------------------------------------------------
  
			   	   
			   	 
			 
   }
?>