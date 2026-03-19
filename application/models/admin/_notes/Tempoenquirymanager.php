<?php 
   /**
 
   */
   class Tempoenquirymanager extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function enquiry_view($limit,$offset){
			   // Updateing in Table(usc_faq) of Database(usc)
			   
			       $this->db->order_by('Enq_id','desc');
				   $query = $this->db->get('usc_enquiry',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 

		      public function tempo_details($limit,$offset)
	          {

					  $this->db->select('*');
					  $this->db->from('usc_enquiry as enquiry')
							->join("usc_temppotravellardetails as temppotravellardetails", "enquiry.Id = temppotravellardetails.TemppoTravellarId", 'INNER')     
							->order_by("enquiry.Enq_id", "desc")
							->where('enquiry.Enq_type', '5');
				 
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