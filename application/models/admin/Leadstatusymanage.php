<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
   
   */
 class Leadstatusymanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function leadstatus_add($data)
			 {
		  
				 if($this->db->insert('usc_leads_status', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function leadstatus_view($limit,$offset)
			 {
			   	$this->db->order_by("Id ", "desc");
				$query = $this->db->get('usc_leads_status',$limit,$offset);
                return $query->result_array();
                $this->db->close();
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
	               $query = $this->db->get('usc_leads_status');
				   return $query->num_rows();
                   $this->db->close();
			}  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function leadstatus_delete($id)
			 {
	    		    $this->db->where('Id ', $id);
					$this->db->delete('usc_leads_status');
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
	       
		    function leadstatus_edit($id)
			   {
	    	 	        $this->db->where('Id ', $id);
						$query = $this->db->get('usc_leads_status');
						return $query->result_array();
						$this->db->close();
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function leadstatus_edit_data($data,$id)
			  {
		    			  
						$this->db->where('Id ', $id);
						$query = $this->db->update('usc_leads_status',$data);
						$this->db->close();
			  } 
			  
		 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
					$this->db->where_in('Id ', $id);
					$this->db->delete('usc_leads_status');
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
					$query = $this->db->update('usc_leads_status',$data);
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
					$query = $this->db->update('usc_leads_status',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 		 				 
			 		  			 	
	   		 	 
			 
   }
?>