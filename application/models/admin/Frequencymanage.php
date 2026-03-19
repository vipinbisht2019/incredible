<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Frequencymanage extends CI_Model
   {
 	  //-----------------------------------------add------------------------------------------------			 
			function frequency_add($data)
			 {
			  // Inserting in Table(usc_tourfrequency) of Database(usc)
			  
				 if($this->db->insert('usc_tourfrequency', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function frequency_view($limit,$offset)
			 {
			   // Updateing in Table(usc_tourfrequency) of Database(usc)
			    	$this->db->order_by("TourFrequencyId", "desc");
				   $query = $this->db->get('usc_tourfrequency',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_tourfrequency');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function frequency_delete($id)
			 {
			   // Deleteing in Table(usc_tourfrequency) of Database(usc)
			    			  
					$this->db->where('TourFrequencyId', $id);
					$this->db->delete('usc_tourfrequency');
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
	       
		    function frequency_edit($id)
			   {
			      // Deleteing in Table(usc_tourfrequency) of Database(usc)
			    			  
						$this->db->where('TourFrequencyId', $id);
						$query = $this->db->get('usc_tourfrequency');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function frequency_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_tourfrequency) of Database(usc)
			    			  
						$this->db->where('TourFrequencyId', $id);
						$query = $this->db->update('usc_tourfrequency',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_tourfrequency) of Database(usc)
			    			  
					$this->db->where_in('TourFrequencyId', $id);
					$this->db->delete('usc_tourfrequency');
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
			   // Deleteing in Table(usc_tourfrequency) of Database(usc)
			    			  
					$this->db->where_in('TourFrequencyId', $id1);
					$query = $this->db->update('usc_tourfrequency',$data);
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
			   // Deleteing in Table(usc_tourfrequency) of Database(usc)
			    			  
					$this->db->where_in('TourFrequencyId', $id1);
					$query = $this->db->update('usc_tourfrequency',$data);
			
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