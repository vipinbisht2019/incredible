<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
   class Leadcontactgroupmanage extends CI_Model
    {
      

	  //-----------------------------------------add------------------------------------------------			 
			function leadcontactgroup_add($data)
			 {
		  
				 if($this->db->insert('usc_leads_contact_group', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function leadcontactgroup_view($limit,$offset)
			 {
			   	$this->db->order_by("GroupId ", "desc");
				$query = $this->db->get('usc_leads_contact_group',$limit,$offset);
                return $query->result_array();
                $this->db->close();
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
	               $query = $this->db->get('usc_leads_contact_group');
				   return $query->num_rows();
                   $this->db->close();
			}  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function leadcontactgroup_delete($id)
			 {
	    		    $this->db->where('GroupId ', $id);
					$this->db->delete('usc_leads_contact_group');
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
	       
		    function leadcontactgroup_edit($id)
			   {
	    	 	        $this->db->where('GroupId ', $id);
						$query = $this->db->get('usc_leads_contact_group');
						return $query->result_array();
						$this->db->close();
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function leadcontactgroup_edit_data($data,$id)
			  {
		    			  
						$this->db->where('GroupId ', $id);
						$query = $this->db->update('usc_leads_contact_group',$data);
						$this->db->close();
			  } 
			  
		 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
					$this->db->where_in('GroupId ', $id);
					$this->db->delete('usc_leads_contact_group');
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
	    			  
					$this->db->where_in('GroupId', $id1);
					$query = $this->db->update('usc_leads_contact_group',$data);
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

			    			  
					$this->db->where_in('GroupId ', $id1);
					$query = $this->db->update('usc_leads_contact_group',$data);
			
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