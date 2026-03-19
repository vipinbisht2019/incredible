<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Leadsremindersmanage extends CI_Model
   {
      //-----------------------------------------add------------------------------------------------			 
			function leadsreminders_add($data)
			  {
		  
				 if($this->db->insert('usc_leadsremindars', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			  } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function leadsreminders_view($limit,$offset)
			  {
			   	$this->db->order_by("Id ", "desc");
				$query = $this->db->get('usc_leadsremindars',$limit,$offset);
                return $query->result_array();
                $this->db->close();
			  } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
	               $query = $this->db->get('usc_leadsremindars');
				   return $query->num_rows();
                   $this->db->close();
			}  	 
			 
	 //------------------------------------ Search data -----------------------------------------------------		
	       
		    function leadsreminders_view_search($limit,$offset,$emp_id)
			  {
			             $this->db->order_by("Id ", "desc");
						 $this->db->where("EmployeeId", $emp_id);
				$query = $this->db->get('usc_leadsremindars',$limit,$offset);
                return $query->result_array();
                $this->db->close();
			  } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal_search($emp_id)
			  {
			                 $this->db->where("EmployeeId", $emp_id);
	                $query = $this->db->get('usc_leadsremindars');
				   return $query->num_rows();
                   $this->db->close();
			 }  	 
			 		 
			 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function leadsreminders_delete($id)
			 {
	    		    $this->db->where('Id ', $id);
					$this->db->delete('usc_leadsremindars');
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
	       
		    function leadsreminders_edit($id)
			   {
	    	 	        $this->db->where('Id ', $id);
						$query = $this->db->get('usc_leadsremindars');
						return $query->result_array();
						$this->db->close();
			   } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function leadsreminders_edit_data($data,$id)
			  {
		    			  
						$this->db->where('Id ', $id);
						$query = $this->db->update('usc_leadsremindars',$data);
						$this->db->close();
			  } 
			  
		 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
					$this->db->where_in('Id ', $id);
					$this->db->delete('usc_leadsremindars');
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
	    			  
					$this->db->where_in('Id', $id1);
					$query = $this->db->update('usc_leadsremindars',$data);
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

			    			  
					$this->db->where_in('Id ', $id1);
					$query = $this->db->update('usc_leadsremindars',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 		
			 
			 
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
		   	 	  				 
			 		  			 	
	   		 	 
			 
   }
?>