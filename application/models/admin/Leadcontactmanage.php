<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Leadcontactmanage extends CI_Model
    {
      

	  //-----------------------------------------add------------------------------------------------			 
			function leadcontact_add($data)
			 {
		  
				 if($this->db->insert('usc_leads_contacts', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function leadcontact_view($limit,$offset)
			 {
			       	     $this->db->order_by("ContactId ", "desc");
				$query = $this->db->get('usc_leads_contacts',$limit,$offset);
                return $query->result_array();
                $this->db->close();
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
	               $query = $this->db->get('usc_leads_contacts');
				   return $query->num_rows();
                   $this->db->close();
			}  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function leadcontact_delete($id)
			 {
	    		    $this->db->where('ContactId ', $id);
					$this->db->delete('usc_leads_contacts');
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
	       
		    function leadcontact_edit($id)
			   {
	    	 	                 $this->db->where('ContactId ', $id);
						$query = $this->db->get('usc_leads_contacts');
						return $query->result_array();
						$this->db->close();
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function leadcontact_edit_data($data,$id)
			  {
		    			  
						$this->db->where('ContactId ', $id);
						$query = $this->db->update('usc_leads_contacts',$data);
						$this->db->close();
			  } 
			  
		 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
					$this->db->where_in('ContactId ', $id);
					$this->db->delete('usc_leads_contacts');
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
	    			  
					$this->db->where_in('ContactId', $id1);
					$query = $this->db->update('usc_leads_contacts',$data);
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

			    			  
					$this->db->where_in('ContactId ', $id1);
					$query = $this->db->update('usc_leads_contacts',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 	
			 
			 
	//---------------------------------------------- group contact --------------------------------------------		 	 				 
			 		  			 	
	   	    public function get_group_dropdown()
			   {
	    	 	                 $this->db->where('Status ', 'Y');
						$query = $this->db->get('usc_leads_contact_group');
						return $query->result_array();
						$this->db->close();
			  } 		 
	   	 	 
			 
   }
?>