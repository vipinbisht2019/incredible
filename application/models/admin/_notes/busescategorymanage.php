<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
   class Busescategorymanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function busescategory_add($data)
			 {
			  // Inserting in Table(usc_buses_categories) of Database(usc)
			  
				 if($this->db->insert('usc_buses_categories', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function busescategory_view($limit,$offset)
			 {
			   // Updateing in Table(usc_buses_categories) of Database(usc)
			    	$this->db->order_by("CatId", "desc");
				   $query = $this->db->get('usc_buses_categories',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_buses_categories');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function busescategory_delete($id)
			 {
			   // Deleteing in Table(usc_buses_categories) of Database(usc)
			    			  
					$this->db->where('CatId', $id);
					$this->db->delete('usc_buses_categories');
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
	       
		    function busescategory_edit($id)
			   {
			      // Deleteing in Table(usc_buses_categories) of Database(usc)
			    			  
						$this->db->where('CatId', $id);
						$query = $this->db->get('usc_buses_categories');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function busescategory_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_buses_categories) of Database(usc)
			    			  
						$this->db->where('CatId', $id);
						$query = $this->db->update('usc_buses_categories',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_buses_categories) of Database(usc)
			    			  
					$this->db->where('CatId', $id);
					$this->db->delete('usc_buses_categories');
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
			   // Deleteing in Table(usc_buses_categories) of Database(usc)
			    			  
					$this->db->where('CatId', $id1);
					$query = $this->db->update('usc_buses_categories',$data);
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
			   // Deleteing in Table(usc_buses_categories) of Database(usc)
			    			  
					$this->db->where('CatId', $id1);
					$query = $this->db->update('usc_buses_categories',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 }

   // Dublicate Check #####################################################################

	         function check_duplicate($CategoryName)
			      {
			   								
						$q = $this->db->where(['CategoryName' => $CategoryName])
								->get('usc_buses_categories');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }
			   
			// -----------------------------check records already exist or not when add edit --------------------------------	  	
		 
		       function check_duplicate_edit($value,$id)
			      {
			   								
						$q = $this->db->where(['CategoryName' => $value,'CatId!=' => $id])
								->get('usc_buses_categories');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }	
			   		   
			   		  		 				 
			 		  			 	
	   		 	 
			 
   }
?>