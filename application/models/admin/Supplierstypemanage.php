<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Supplierstypemanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function supplierstype_add($data)
			 {
		  
				 if($this->db->insert('usc_suppliers_type', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function supplierstype_view($limit,$offset)
			 {
			   	$this->db->order_by("TypeId ", "desc");
				$query = $this->db->get('usc_suppliers_type',$limit,$offset);
                return $query->result_array();
                $this->db->close();
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
	               $query = $this->db->get('usc_suppliers_type');
				   return $query->num_rows();
                   $this->db->close();
			}  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function supplierstype_delete($id)
			 {
	    		    $this->db->where('TypeId ', $id);
					$this->db->delete('usc_suppliers_type');
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
	       
		    function supplierstype_edit($id)
			   {
	    	 	        $this->db->where('TypeId ', $id);
						$query = $this->db->get('usc_suppliers_type');
						return $query->result_array();
						$this->db->close();
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function supplierstype_edit_data($data,$id)
			  {
		    			  
						$this->db->where('TypeId ', $id);
						$query = $this->db->update('usc_suppliers_type',$data);
						$this->db->close();
			  } 
			  
		 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
					$this->db->where_in('TypeId ', $id);
					$this->db->delete('usc_suppliers_type');
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
	    			  
					$this->db->where_in('TypeId', $id1);
					$query = $this->db->update('usc_suppliers_type',$data);
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

			    			  
					$this->db->where_in('TypeId ', $id1);
					$query = $this->db->update('usc_suppliers_type',$data);
			
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