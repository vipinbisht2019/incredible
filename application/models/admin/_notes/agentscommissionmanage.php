<?php 
   /**
 
   */
   class Agentscommissionmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function agentscommission_add($data)
			 {
			  // Inserting in Table(agentscommission_permision) of Database(usc)
			  
				 if($this->db->insert('usc_agents_commission', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function agentscommission_view($limit,$offset)
			 {
			   // Updateing in Table(usc_agents_commission) of Database(usc)
			    	$this->db->order_by("CommissionId", "desc");
				    $query = $this->db->get('usc_agents_commission',$limit,$offset);
                   return $query->result_array();
                   $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_agents_commission');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function agentscommission_delete($id)
			 {
			   // Deleteing in Table(usc_agents_commission) of Database(usc)
			    			  
					$this->db->where('CommissionId', $id);
					$this->db->delete('usc_agents_commission');
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
	       
		    function agentscommission_edit($id)
			   {
			      // Deleteing in Table(usc_agents_commission) of Database(usc)
			    			  
						$this->db->where('CommissionId', $id);
						$query = $this->db->get('usc_agents_commission');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function agentscommission_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_agents_commission) of Database(usc)
			    			  
						$this->db->where('CommissionId', $id);
						$query = $this->db->update('usc_agents_commission',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
   // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_agents_commission) of Database(usc)
			    			  
					$this->db->where_in('CommissionId', $id);
					$this->db->delete('usc_agents_commission');
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
			   // Deleteing in Table(usc_agents_commission) of Database(usc)
			    			  
					$this->db->where_in('CommissionId', $id1);
					$query = $this->db->update('usc_agents_commission',$data);
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
			   // Deleteing in Table(usc_agents_commission) of Database(usc)
			    			  
					$this->db->where_in('CommissionId', $id1);
					$query = $this->db->update('usc_agents_commission',$data);
			
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