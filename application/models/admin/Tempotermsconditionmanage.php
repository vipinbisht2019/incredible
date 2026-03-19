<?php 
   /**
 
   */
   class Tempotermsconditionmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function termscondition_add($data)
			 {
			  // Inserting in Table(usc_tempo_termscondition) of Database(usc)
			  
				 if($this->db->insert('usc_tempo_termscondition', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 0;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function termscondition_view($limit,$offset)
			 {
			   // Updateing in Table(usc_tempo_termscondition) of Database(usc)
			    	$this->db->order_by("TermsconditionID ", "desc");
				   $query = $this->db->get('usc_tempo_termscondition',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_tempo_termscondition');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function termscondition_delete($id)
			 {
			   // Deleteing in Table(usc_tempo_termscondition) of Database(usc)
			    			  
					$this->db->where('TermsconditionID ', $id);
					$this->db->delete('usc_tempo_termscondition');
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
	       
		    function termscondition_edit($id)
			   {
			      // Deleteing in Table(usc_tempo_termscondition) of Database(usc)
			    			  
						$this->db->where('TermsconditionID ', $id);
						$query = $this->db->get('usc_tempo_termscondition');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function termscondition_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_tempo_termscondition) of Database(usc)
			    			  
						$this->db->where('TermsconditionID ', $id);
						$query = $this->db->update('usc_tempo_termscondition',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_tempo_termscondition) of Database(usc)
			    			  
					$this->db->where_in('TermsconditionID ', $id);
					$this->db->delete('usc_tempo_termscondition');
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
			   // Deleteing in Table(usc_tempo_termscondition) of Database(usc)
			    			  
					$this->db->where_in('TermsconditionID', $id1);
					$query = $this->db->update('usc_tempo_termscondition',$data);
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
			   // Deleteing in Table(usc_tempo_termscondition) of Database(usc)
			    			  
					$this->db->where_in('TermsconditionID ', $id1);
					$query = $this->db->update('usc_tempo_termscondition',$data);
			
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