<?php 
   /**
 
   */
   class Agentspermissionmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function agentspermission_add($data)
			 {
			  // Inserting in Table(agentspermission_permision) of Database(usc)
			  
				 if($this->db->insert('usc_agents_permision', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function agentspermission_view($limit,$offset)
			 {
			   // Updateing in Table(usc_agents_permision) of Database(usc)
			    	$this->db->order_by("PermisionId", "desc");
				    $query = $this->db->get('usc_agents_permision',$limit,$offset);
                   return $query->result_array();
                   $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_agents_permision');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function agentspermission_delete($id)
			 {
			   // Deleteing in Table(usc_agents_permision) of Database(usc)
			    			  
					$this->db->where('PermisionId', $id);
					$this->db->delete('usc_agents_permision');
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
	       
		    function agentspermission_edit($id)
			   {
			      // Deleteing in Table(usc_agents_permision) of Database(usc)
			    			  
						$this->db->where('PermisionId', $id);
						$query = $this->db->get('usc_agents_permision');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function agentspermission_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_agents_permision) of Database(usc)
			    			  
						$this->db->where('PermisionId', $id);
						$query = $this->db->update('usc_agents_permision',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_agents_permision) of Database(usc)
			    			  
					$this->db->where_in('PermisionId', $id);
					$this->db->delete('usc_agents_permision');
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
			   // Deleteing in Table(usc_agents_permision) of Database(usc)
			    			  
					$this->db->where_in('PermisionId', $id1);
					$query = $this->db->update('usc_agents_permision',$data);
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
			   // Deleteing in Table(usc_agents_permision) of Database(usc)
			    			  
					$this->db->where_in('PermisionId', $id1);
					$query = $this->db->update('agentspermission_permision',$data);
			
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