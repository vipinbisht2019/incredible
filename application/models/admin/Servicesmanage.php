<?php 
   /**
    ******************************************************
   */
class Servicesmanage extends CI_Model
   {
       //-----------------------------------------add------------------------------------------------			 
			function services_add($data)
			 {
			  // Inserting in Table(usc_services) of Database(usc)
			  
				 if($this->db->insert('usc_services', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function services_view($limit,$offset)
			 {
			   // Updateing in Table(usc_services) of Database(usc)
	
			    
				   $query = $this->db->get('usc_services',$limit,$offset);
                   return $query->result_array();
                   $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_services) of Database(usc)
			    
				   $query = $this->db->get('usc_services');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function services_delete($id)
			 {
			   // Deleteing in Table(usc_services) of Database(usc)
			    			  
					$this->db->where('SId', $id);
					$this->db->delete('usc_services');
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
	       
		    function services_edit($id)
			   {
			      // Deleteing in Table(usc_services) of Database(usc)
			    			  
						$this->db->where('SId', $id);
						$query = $this->db->get('usc_services');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function services_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_services) of Database(usc)
			    			  
						$this->db->where('SId', $id);
						$query = $this->db->update('usc_services',$data);
						$this->db->close();
			  } 	
			  
			  
		########################################################################################################################################
		################################################  Bulk Action activate, deactivate and delete ##########################################
		#########################################################################################################################################  	
		
		// ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_services) of Database(usc)
			    			  
					$this->db->where_in('SId', $id);
					$this->db->delete('usc_services');
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
			   // Deleteing in Table(usc_services) of Database(usc)
			    			  
					$this->db->where_in('SId', $id1);
					$query = $this->db->update('usc_services',$data);
					
					
					
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
			   // Deleteing in Table(usc_services) of Database(usc)
			    			  
					$this->db->where_in('SId', $id1);
					$query = $this->db->update('usc_services',$data);
								
					
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