<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Boardingpointsmanage extends CI_Model
   {
 	  //-----------------------------------------add------------------------------------------------			 
			function boardingpoints_add($data)
			 {
			  // Inserting in Table(usc_tourboardingpoints) of Database(usc)
			  
				 if($this->db->insert('usc_tourboardingpoints', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function boardingpoints_view($limit,$offset)
			 {
			   // Updateing in Table(usc_tourboardingpoints) of Database(usc)
			    	$this->db->order_by("BoardingId", "desc");
				   $query = $this->db->get('usc_tourboardingpoints',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_tourboardingpoints');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function boardingpoints_delete($id)
			 {
			   // Deleteing in Table(usc_tourboardingpoints) of Database(usc)
			    			  
					$this->db->where('BoardingId', $id);
					$this->db->delete('usc_tourboardingpoints');
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
	       
		    function boardingpoints_edit($id)
			   {
			      // Deleteing in Table(usc_tourboardingpoints) of Database(usc)
			    			  
						$this->db->where('BoardingId', $id);
						$query = $this->db->get('usc_tourboardingpoints');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function boardingpoints_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_tourboardingpoints) of Database(usc)
			    			  
						$this->db->where('BoardingId', $id);
						$query = $this->db->update('usc_tourboardingpoints',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_tourboardingpoints) of Database(usc)
			    			  
					$this->db->where_in('BoardingId', $id);
					$this->db->delete('usc_tourboardingpoints');
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
			   // Deleteing in Table(usc_tourboardingpoints) of Database(usc)
			    			  
					$this->db->where_in('BoardingId', $id1);
					$query = $this->db->update('usc_tourboardingpoints',$data);
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
			   // Deleteing in Table(usc_tourboardingpoints) of Database(usc)
			    			  
					$this->db->where_in('BoardingId', $id1);
					$query = $this->db->update('usc_tourboardingpoints',$data);
			
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