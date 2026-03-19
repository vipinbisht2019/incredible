<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Suppliersmanage extends CI_Model
    {
      

	  //-----------------------------------------add------------------------------------------------			 
			function suppliers_add($data)
			 {
		  
				 if($this->db->insert('usc_suppliers', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function suppliers_view($limit,$offset)
			 {
			       	     $this->db->order_by("SuppliersId ", "desc");
				$query = $this->db->get('usc_suppliers',$limit,$offset);
                return $query->result_array();
                $this->db->close();
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
	               $query = $this->db->get('usc_suppliers');
				   return $query->num_rows();
                   $this->db->close();
			}  	 
		 //------------------------------------view-----------------------------------------------------		
	       
		 function suppliers_view_search($limit,$offset, $TypeId, $SerachOption, $Keyword)
			 {
			       	     $this->db->order_by("SuppliersId ", "desc");
						  if($TypeId!='')
								    {
									   $this->db->where("TypeId", $TypeId);
									}
							 if($Keyword!='')
								    {
									      if($SerachOption=='N') {  $this->db->like("ContactPersonName", $Keyword);  } 
										  if($SerachOption=='E') {  $this->db->like("EmailID", $Keyword);  }
										  if($SerachOption=='P') {  $this->db->like("ContactNumber", $Keyword);  }
									
									}				
						 
				$query = $this->db->get('usc_suppliers',$limit,$offset);
                return $query->result_array();
                $this->db->close();
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal_search($TypeId, $SerachOption, $Keyword)
			 {
			                 if($TypeId!='')
								    {
									   $this->db->where("TypeId", $TypeId);
									}
							 if($Keyword!='')
								    {
									      if($SerachOption=='N') {  $this->db->like("ContactPersonName", $Keyword);  } 
										  if($SerachOption=='E') {  $this->db->like("EmailID", $Keyword);  }
										  if($SerachOption=='P') {  $this->db->like("ContactNumber", $Keyword);  }
									
									}				
						 
	               $query = $this->db->get('usc_suppliers');
				   return $query->num_rows();
                   $this->db->close();
			}  	 
	 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function suppliers_delete($id)
			 {
	    		    $this->db->where('SuppliersId ', $id);
					$this->db->delete('usc_suppliers');
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
	       
		    function suppliers_edit($id)
			   {
	    	 	                 $this->db->where('SuppliersId ', $id);
						$query = $this->db->get('usc_suppliers');
						return $query->result_array();
						$this->db->close();
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function suppliers_edit_data($data,$id)
			  {
		    			  
						$this->db->where('SuppliersId ', $id);
						$query = $this->db->update('usc_suppliers',$data);
						$this->db->close();
			  } 
			  
		 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
					$this->db->where_in('SuppliersId ', $id);
					$this->db->delete('usc_suppliers');
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
	    			  
					$this->db->where_in('SuppliersId', $id1);
					$query = $this->db->update('usc_suppliers',$data);
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

			    			  
					$this->db->where_in('SuppliersId ', $id1);
					$query = $this->db->update('usc_suppliers',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 	
			 
			 
	       //--------------------------------------------------- group contact -------------------------------------------------------------		 	 				 
			 		  			 	
	   	    public function get_suppliers_dropdown()
			   {
	    	 	                 $this->db->where('Status ', 'Y');
						$query = $this->db->get('usc_suppliers_type');
						return $query->result_array();
						$this->db->close();
			  } 	
			  
	      //---------------------------------------------------- lead status ----------------------------------------------------------------	
		  
		           public function get_lead_status()
					 {
										 $this->db->from('usc_suppliers_type')
												  ->order_by("SortOrder", "asc")
												  ->limit(6, 0);
									$query = $this->db->get();
									$i=0;
									$emplist=array();
									foreach($query->result() as $eval)
									   {
									       $Id=$eval->TypeId;
										   $datalist[$i]['SuppliersType']= $eval->SuppliersType;  
										   //---------------------------------------------------------- leads --------------------------------------------  
															  $this->db->select('SuppliersId')
															          ->from('usc_suppliers')
																      ->where("TypeId", $Id);
																	 
													  $query = $this->db->get();
													  $totalrecords=$query->num_rows();
													  $datalist[$i]['totalrecords']= $totalrecords;   
										 
										 
										 $i++; 
									   }
							  return $datalist;		   
									   
					   }		  	 
	   	 	 
			 
   }
?>