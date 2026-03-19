<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Clientsmanage extends CI_Model
    {
      
     //-----------------------------------------add------------------------------------------------			 
			function clients_add($data)
			 {
		  
				 if($this->db->insert('usc_customers', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function clients_view($limit,$offset)
			 {
			       	     $this->db->order_by("CustomersId ", "desc");
				$query = $this->db->get('usc_customers',$limit,$offset);
                return $query->result_array();
                $this->db->close();
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
	               $query = $this->db->get('usc_customers');
				   return $query->num_rows();
                   $this->db->close();
			}  	 
		 //------------------------------------view-----------------------------------------------------		
	       
		 function clients_view_search($limit,$offset, $TypeId, $SerachOption, $Keyword)
			 {
			       	     $this->db->order_by("CustomersId ", "desc");
						  
					 if($Keyword!='')
							{
								  if($SerachOption=='N') {  $this->db->like("FirstName", $Keyword);  } 
								  if($SerachOption=='E') {  $this->db->like("EMailAddress", $Keyword);  }
								  if($SerachOption=='P') {  $this->db->like("ContactNumber", $Keyword);  }
							}				
						 
				$query = $this->db->get('usc_customers',$limit,$offset);
                return $query->result_array();
                $this->db->close();
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal_search($TypeId, $SerachOption, $Keyword)
			 {
			              
					 if($Keyword!='')
							{
							  if($SerachOption=='N') {  $this->db->like("FirstName", $Keyword);  } 
							  if($SerachOption=='E') {  $this->db->like("EMailAddress", $Keyword);  }
							  if($SerachOption=='P') {  $this->db->like("ContactNumber", $Keyword);  }
							
							}				
						 
	               $query = $this->db->get('usc_customers');
				   return $query->num_rows();
                   $this->db->close();
			}  	 
	 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function clients_delete($id)
			 {
	    		    $this->db->where('CustomersId ', $id);
					$this->db->delete('usc_customers');
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
	       
		    function clients_edit($id)
			   {
	    	 	                 $this->db->where('CustomersId ', $id);
						$query = $this->db->get('usc_customers');
						return $query->result_array();
						$this->db->close();
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function clients_edit_data($data,$id)
			  {
		    			  
						$this->db->where('CustomersId ', $id);
						$query = $this->db->update('usc_customers',$data);
						$this->db->close();
			  } 
			  
		 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
					$this->db->where_in('CustomersId ', $id);
					$this->db->delete('usc_customers');
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
	    			  
					$this->db->where_in('CustomersId', $id1);
					$query = $this->db->update('usc_customers',$data);
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

			    			  
					$this->db->where_in('CustomersId ', $id1);
					$query = $this->db->update('usc_customers',$data);
			
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
			 		  			 	
	   	  
	      //---------------------------------------------------- lead status ----------------------------------------------------------------	
		  
		           public function get_lead_status()
					 {
										 $this->db->from('usc_customers_type')
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
															  $this->db->select('CustomersId')
															          ->from('usc_customers')
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