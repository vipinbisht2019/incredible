<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Hoteltypemanage extends CI_Model
    {
      

	  //-----------------------------------------add------------------------------------------------			 
			function hoteltype_add($data)
			 {
			  // Inserting in Table(usc_hoteltype) of Database(usc)
			  
				 if($this->db->insert('usc_hoteltype', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function hoteltype_view($limit,$offset)
			 {
			   // Updateing in Table(usc_hoteltype) of Database(usc)
			    	$this->db->order_by("hoteltypeId", "desc");
				   $query = $this->db->get('usc_hoteltype',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_hoteltype');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function hoteltype_delete($id)
			 {
			   // Deleteing in Table(usc_hoteltype) of Database(usc)
			    			  
					$this->db->where('hoteltypeId', $id);
					$this->db->delete('usc_hoteltype');
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
	       
		    function hoteltype_edit($id)
			   {
			      // Deleteing in Table(usc_hoteltype) of Database(usc)
			    			  
						$this->db->where('hoteltypeId', $id);
						$query = $this->db->get('usc_hoteltype');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function hoteltype_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_hoteltype) of Database(usc)
			    			  
						$this->db->where('hoteltypeId', $id);
						$query = $this->db->update('usc_hoteltype',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_hoteltype) of Database(usc)
			    			  
					$this->db->where_in('hoteltypeId', $id);
					$this->db->delete('usc_hoteltype');
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
			   // Deleteing in Table(usc_hoteltype) of Database(usc)
			    			  
					$this->db->where_in('hoteltypeId', $id1);
					$query = $this->db->update('usc_hoteltype',$data);
					
					
					
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
			   // Deleteing in Table(usc_hoteltype) of Database(usc)
			    			  
					$this->db->where_in('hoteltypeId', $id1);
					$query = $this->db->update('usc_hoteltype',$data);
					
					
					
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