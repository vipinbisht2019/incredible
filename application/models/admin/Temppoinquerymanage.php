<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
class Temppoinquerymanage extends CI_Model
   {
      
	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function temppoinquery_view($limit,$offset)
			 {
			   // Updateing in Table(usc_temppotravellar_inquery) of Database(usc)
			    	$this->db->order_by("InqueryId", "desc");
				   $query = $this->db->get('usc_temppotravellar_inquery',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_temppotravellar_inquery');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function temppoinquery_delete($id)
			 {
			   // Deleteing in Table(usc_temppotravellar_inquery) of Database(usc)
			    			  
					$this->db->where('InqueryId', $id);
					$this->db->delete('usc_temppotravellar_inquery');
					 if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }  
						
			 } 		 
			 
		
	   
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_temppotravellar_inquery) of Database(usc)
			    			  
					$this->db->where_in('InqueryId', $id);
					$this->db->delete('usc_temppotravellar_inquery');
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