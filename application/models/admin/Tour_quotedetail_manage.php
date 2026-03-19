<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Tour_quotedetail_manage extends CI_Model
    {
  	 
		   function tour_quotes_edit($id)
			   {
			      // Deleteing in Table(usc_faq) of Database(usc)
			    			 
						$this->db->where('tour_id', $id);
						$query = $this->db->get('usc_tour_quotes_details');
						return $query->result_array();
						$this->db->close();
					
						
			  }   	
			  
			  public function tour_quotes_add($data){
			  
			 			
					if($this->db->insert('usc_tour_quotes_details', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			  
			  
			  }
		
	
		
		   
		 				 
			 		  			 	
	   		 	 
			 
   }
?>