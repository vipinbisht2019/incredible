<?php 
/**
*
************************************************************************************************************************************************
*
*/
   class Statemanage extends CI_Model
   {
      
			  function get_tatal()
			 {
			     // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('nuttyshoppers_states');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function state_delete($id)
			 {
			    // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
					$this->db->where('StatesID', $id);
					$this->db->delete('nuttyshoppers_states');
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
	       
		    function state_edit($id)
			   {
			       // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
						$this->db->where('StatesID', $id);
						$query = $this->db->get('nuttyshoppers_states');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function state_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			// print_r($id); die;
						$this->db->where('StatesID', $id);
						$query = $this->db->update('nuttyshoppers_states',$data);
						$this->db->close();
			  } 
			  
		
			  
			  
	 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			    // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
					$this->db->where_in('StatesID', $id);
					$this->db->delete('nuttyshoppers_states');
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
			    // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
					$this->db->where_in('StatesID', $id1);
					$query = $this->db->update('nuttyshoppers_states',$data);
				
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
			   // Deleteing in Table(usc_hotelsroomtype) of Database(usc)
			    			  
					$this->db->where_in('StatesID', $id1);
					$query = $this->db->update('nuttyshoppers_states',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 	
			 
			 
			 function country_list(){
			 
			 		$this->db->select('country, countryid,code') 	
								->from('usc_country')
								->where('Status', 'Y')
								->order_by('country');
					$query = $this->db->get();
					return $query->result_array();
					 $this->db->close();
			 
			 }	 	
			 
			 
			function state_add($data)
			 {
			  // Inserting in Table(usc_hotelsroomtype) of Database(usc)
			  
			  
				 if($this->db->insert('nuttyshoppers_states', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	
				 
			  function state_view($limit,$offset)
			 {
			   
					$this->db->select('st.*,con.countryid,con.country');
			       	$this->db->from('nuttyshoppers_states as st',$limit,$offset);	      
					$this->db->join('usc_country as con','st.countryid = con.countryid');
				    $query = $this->db->get()->result_array();
                    return $query;
                    $this->db->close();
				
				
			 }   			 	
	   		 	 
			 
   }
?>