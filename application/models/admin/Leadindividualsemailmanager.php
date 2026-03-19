<?php 
   /**
 
   */
   class Leadindividualsemailmanager extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function search_data($keyword)
			 {              
			 	             $this->db->group_start();
			 			     $this->db->like('EmailAddress', $keyword);
			 			     $this->db->or_like('Name', $keyword);
			 			     $this->db->group_end();
			 			     $this->db->order_by('Name','asc');
				    $query = $this->db->get('usc_leads_contacts');
				    return $query->result_array();
                    $this->db->close();
			 } 	 


		 //---------------------------- group dropdown -----------------------------------------			 
			function group_data()
			 {              
			 	         
			 			     $this->db->order_by('GroupName','asc');
				    $query = $this->db->get('usc_leads_contact_group');
				    return $query->result_array();
                    $this->db->close();
			 } 	 	 
       	
	    // ------------------------ select email of a group ------------------------------------

	       function group_email_data($gid)
			 {              
			 	             $this->db->where('GroupId',$gid);
			 			     $this->db->order_by('Name','asc');
				    $query = $this->db->get('usc_leads_contacts');
				      $i=0;
				      $dataarr = array();
				    foreach ($query->result_array() as $val) {
				    	# code...
				    	$dataarr[$i]=$val['EmailAddress'];
				    }
				     return $dataarr;
                    $this->db->close();
			 } 	 		 	
	   		 	 
			 
   }
   

?>