<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
   class Leadcategorymanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function leadcategory_add($data)
			 {
		  
				 if($this->db->insert('usc_leads_categories', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function leadcategory_view($limit,$offset)
			 {
			   	$this->db->order_by("category_id ", "desc");
				$query = $this->db->get('usc_leads_categories',$limit,$offset);
                return $query->result_array();
                $this->db->close();
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
	               $query = $this->db->get('usc_leads_categories');
				   return $query->num_rows();
                   $this->db->close();
			}  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function leadcategory_delete($id)
			 {
	    		    $this->db->where('category_id ', $id);
					$this->db->delete('usc_leads_categories');
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
	       
		    function leadcategory_edit($id)
			   {
	    	 	        $this->db->where('category_id ', $id);
						$query = $this->db->get('usc_leads_categories');
						return $query->result_array();
						$this->db->close();
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function leadcategory_edit_data($data,$id)
			  {
		    			  
						$this->db->where('category_id ', $id);
						$query = $this->db->update('usc_leads_categories',$data);
						$this->db->close();
			  } 
			  
		 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
					$this->db->where_in('category_id ', $id);
					$this->db->delete('usc_leads_categories');
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
	    			  
					$this->db->where_in('category_id', $id1);
					$query = $this->db->update('usc_leads_categories',$data);
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

			    			  
					$this->db->where_in('category_id ', $id1);
					$query = $this->db->update('usc_leads_categories',$data);
			
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