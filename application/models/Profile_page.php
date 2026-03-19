<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Profile_page extends MY_model
  {
		
		
	   function get_profile_data($id)
		    {
			      //  in Table(hem_admin) of Database(HEM)
			    		
						$this->db->select('*');	  
						$this->db->where('id', $id);
						$query = $this->db->get('usc_customers');
						return $query->result_array();
						$this->db->close();
				
			 } 	
	   
	    //------------------------------------edit view-----------------------------------------------------		
	       
		    function members_edit($id)
			   {
			      // Deleteing in Table( nuttyshoppers_customer) of Database(HEM)
			    			  
						$this->db->where('user_id', $id);
						$query = $this->db->get('nuttyshoppers_customer');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function members_edit_data($data,$id)
			  {
			     // Deleteing in Table( nuttyshoppers_customer) of Database(HEM)
			    			  
						$this->db->where('user_id', $id);
						$query = $this->db->update('nuttyshoppers_customer',$data);
						$this->db->close();
			  } 	
			  
	      //--------------------------------------------- get country name --------------------------------------	
	   
	            // public function get_country($cid)
		        //     {
			    //                    $this->db->where('countryid', $cid);
				// 		  $query = $this->db->get('nuttyshoppers_cousc_countryuntry');
				// 		  	return $query->result_array();
				// 		  $this->db->close();
			     
			    //     }	 
			 	 			 				
		
	      //--------------------------------------------- get state name --------------------------------------	
	   
	            public function get_state($sid)
		            {
			                       $this->db->where('StatesID', $sid);
						  $query = $this->db->get('nuttyshoppers_states');
						  	return $query->result_array();
						  $this->db->close();
			     
			        }	   
          
		  
		   //--------------------------------------------- get country name --------------------------------------	
	   
	            public function get_country_dropdown()
		            {
			                        $this->db->order_by('country', 'asc');
						   $query = $this->db->get('nuttyshoppers_country');
						  	return $query->result_array();
						  $this->db->close();
			     
			        }	 
			 	 			 				
		
	      //--------------------------------------------- get state name --------------------------------------	
	   
	            public function get_state_dropdown()
		            {
			                       $this->db->order_by('StatesName', 'asc');
						  $query = $this->db->get('nuttyshoppers_states');
						  return $query->result_array();
						  $this->db->close();
			     
			        }	
					
			  //--------------------------------------------- get state name  according country -----------	
	            public function get_country_state($cid)
		            {
			                         $this->db->where('country_id', $cid);
						    $query = $this->db->get('nuttyshoppers_states');
						  	return $query->result_array();
						    $this->db->close();
			     
			        }	   
          			    	   		
					
					   
 }
?>