<?php 
   /**
   */
class Agentsmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function agents_add($data)
			 {
			  // Inserting in Table( usc_agents) of Database(usc)
			  
				 if($this->db->insert('usc_agents', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 }
	  //-----------------------Add Agents permission -------------------------------------------------  
			   
			  public function agents_permission_add($data_1,$user_id)
			      {
				     	$this->db->where('user_id', $user_id);
					    $this->db->delete('usc_agents_access_permision');
					
				     for($i=0;$i<count($data_1);$i++)
					   {
					        $data_2 = array('PermisionId'=>$data_1[$i],'user_id'=>$user_id) ;
					        $this->db->insert('usc_agents_access_permision', $data_2);
					   }
					   
					   $this->db->close();
				 
				 }		  	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function agents_view($limit,$offset)
			 {
			   // Updateing in Table( usc_agents) of Database(usc)
			     
			        $this->db->order_by('user_id','desc');
				    $query = $this->db->get('usc_agents',$limit,$offset);
                    return $query->result_array();
                    $this->db->close();
				
			 } 
	//------------------------------------Get toatal record in table for paging-----------------------------------------------------		
	       
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_agents');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 		 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function agents_delete($id)
			 {
			   // Deleteing in Table( usc_agents) of Database(usc)
			    			  
					$this->db->where('user_id', $id);
					$this->db->delete('usc_agents');
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
	       
		    function agents_edit($id)
			   {
			      // Deleteing in Table( usc_agents) of Database(usc)
			    			  
						$this->db->where('user_id', $id);
						$query = $this->db->get('usc_agents');
						return $query->result_array();
						$this->db->close();
					
						
			  } 	
		 //------------------------------- select agents permission to edit --------------------------------	
		 
		     function agents_permission_edit($id)
			    {
			      // Deleteing in Table( usc_agents) of Database(usc)
				  $data_array=array();
							$this->db->select('PermisionId')	  
								 ->where('user_id', $id);
							$query = $this->db->get('usc_agents_access_permision');
							$k=0;
						
						foreach($query->result() as $val_1)
							{
							  $data_array[$k]=$val_1->PermisionId;
							  $k++;
							}
							return $data_array;
						//$this->db->close();
				}    	 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function agents_edit_data($data,$id)
			  {
			     // Deleteing in Table( usc_agents) of Database(usc)
			    			  
						$this->db->where('user_id', $id);
						$query = $this->db->update('usc_agents',$data);
						//$this->db->close();
			  } 		 	
	   // ---------------------------------- get main menu to view in drop down -------------------------------------------   

     function regions_dropdown_data()
			  {
			     // select menu to view in dropdown in Table(usc_menu) of Database(usc)
			    	    
						$this->db->select('RId,RegionsName');		  
						$this->db->where('Status', 'Y');
						$this->db->order_by("RegionsName", "asc");
						$query = $this->db->get('usc_regions');
						return $query->result_array();
						$this->db->close();
			  } 	
  
   // ---------------------------------- Import data -------------------------------------------  		  
			  
		
				
		 // -----------------------------check agents already exist or not when add agents --------------------------------
		 
		         function check_duplicate($userid)
			      {
			   								
						$q = $this->db->where(['user_loginid' => $userid])
								->get('usc_agents');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }	
	
					  
		// -----------------------------check agents already exist or not when add edit --------------------------------	  	
		 
		       function check_duplicate_edit($userid,$mid)
			      {
			   								
						$q = $this->db->where(['user_loginid' => $userid,'user_id!=' => $mid])
								->get('usc_agents');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }	
			   
			   
 // --------------------------- Get Agents commission -----------------------------------------------------	 
		   public function get_commission()
				{
				   $this->db->select('CommissionId,CommissionTitle,BusesOneway,TermpoTravellar,Cars,TourPackage')
				            ->where('Status','Y');
				   $query=$this->db->get('usc_agents_commission');
				   return $query->result_array();
				   $this->db->close();
				   
				
				} 
//-------------------------------------  Module Assecc Permission --------------------------------------
    public function get_permission()
	    {
		   $this->db->select('PermisionId,PermisionName')
		        ->where('Status','Y');
		  $query=$this->db->get('usc_agents_permision');	
		  return $query->result_array();
		  $this->db->close();
		
		}				    		
	
	
// ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_agents) of Database(usc)
			    			  
					$this->db->where_in('user_id', $id);
					$this->db->delete('usc_agents');
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
			   // Deleteing in Table(usc_agents) of Database(usc)
			    			  
					$this->db->where_in('user_id', $id1);
					$query = $this->db->update('usc_agents',$data);
					
					
					
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
			   // Deleteing in Table(usc_agents) of Database(usc)
			    			  
					$this->db->where_in('user_id', $id1);
					$query = $this->db->update('usc_agents',$data);
					
					
					
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