<?php 
   /**
 
   */
   class Enquirymanager extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function Enq_view($limit,$offset)
			 {
			   // Updateing in Table(usc_faq) of Database(usc)
			   
			       $this->db->order_by('Enq_id','desc');
				   $query = $this->db->get('usc_enquiry',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
             
             	      public function tour_views($limit,$offset)
	          {

					  $this->db->select('*');
					  $this->db->from('usc_enquiry as enquiry')
							->join("usc_tourgeneralinfo as info", "enquiry.TourId = info.TourId", 'INNER')     
							->order_by("enquiry.Enq_id", "desc");
							
				 
					 $query = $this->db->get();
					 return $query->result_array();
					 $this->db->close();
             }

		
			    //------------------------------------Get toatal record in table for paging-----------------------------------------------------		
	       
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			       // $this->db->where('Enq_id',$lang_id);
				   $query = $this->db->get('usc_enquiry');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 	 
			 
	 
		 
 	
	   		 	 
			 
   }
   

?>