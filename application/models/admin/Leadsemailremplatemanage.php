<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Leadsemailremplatemanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function leadsemailremplate_add($data)
			  {
		  
				 if($this->db->insert('usc_leadsemailtemplate', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			  } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function leadsemailremplate_view($limit,$offset)
			  {
			   	$this->db->order_by("TempId ", "desc");
				$query = $this->db->get('usc_leadsemailtemplate',$limit,$offset);
                return $query->result_array();
                $this->db->close();
			  } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
	               $query = $this->db->get('usc_leadsemailtemplate');
				   return $query->num_rows();
                   $this->db->close();
			}  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function leadsemailremplate_delete($id)
			 {
	    		    $this->db->where('TempId ', $id);
					$this->db->delete('usc_leadsemailtemplate');
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
	       
		    function leadsemailremplate_edit($id)
			   {
	    	 	        $this->db->where('TempId ', $id);
						$query = $this->db->get('usc_leadsemailtemplate');
						return $query->result_array();
						$this->db->close();
			   } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function leadsemailremplate_edit_data($data,$id)
			  {
		    			  
						$this->db->where('TempId ', $id);
						$query = $this->db->update('usc_leadsemailtemplate',$data);
						$this->db->close();
			  } 
			  
		 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
					$this->db->where_in('TempId ', $id);
					$this->db->delete('usc_leadsemailtemplate');
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
	    			  
					$this->db->where_in('TempId', $id1);
					$query = $this->db->update('usc_leadsemailtemplate',$data);
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

			    			  
					$this->db->where_in('TempId ', $id1);
					$query = $this->db->update('usc_leadsemailtemplate',$data);
			
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