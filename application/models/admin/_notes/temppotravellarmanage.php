<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
    ---------------------------------------------------------------------------------------------------
   */
   class Temppotravellarmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function temppotravellar_add($data)
			 {
			  // Inserting in Table(usc_temppotravellardetails) of Database(usc)
			  
				 if($this->db->insert('usc_temppotravellardetails', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 1;
					 } 
			 } 	
			 
			 //-----------------------Add temppotravellar featutr -------------------------------------------------  
			   
			  public function temppotravellar_feature_add($data_1,$temppo_id,$edit)
			      {
				     if($edit=='yes')
					  {
				     	$this->db->where('TemppoTravellarId', $temppo_id);
					    $this->db->delete('usc_temppotarvellar_feature');
					  }	
					
				     for($i=0;$i<count($data_1);$i++)
					   {
					        $data_2 = array('FeatureId'=>$data_1[$i],'TemppoTravellarId'=>$temppo_id) ;
					        $this->db->insert('usc_temppotarvellar_feature', $data_2);
					   }
					   
					  // $this->db->close();
				 
				 }	
				 
         //-----------------------Add temppotravellar termcondition  -------------------------------------------------  
			   
			  public function temppotravellar_termcondition_add($data_2,$temppo_id,$edit)
			      {
				     if($edit=='yes')
					  {
				     	$this->db->where('TemppoTravellarId', $temppo_id);
					    $this->db->delete('usc_tempo_tempotermscondition');
					  }	
					
				     for($i=0;$i<count($data_2);$i++)
					   {
					        $data_3 = array('TermsconditionID'=>$data_2[$i],'TemppoTravellarId'=>$temppo_id) ;
					        $this->db->insert('usc_tempo_tempotermscondition', $data_3);
					   }
					   
					  $this->db->close();
				 
				 }	 
				 
	  //-----------------------Add temppotravellar featutr -------------------------------------------------  
			   
			  public function temppotravellar_agentscommission_add($data_1,$data_2,$temppo_id,$edit)
			      {
				     if($edit=='yes')
					  {
				     	$this->db->where('TemppoTravellarId', $temppo_id);
					    $this->db->delete('usc_temppotravellar_commission');
					  }	
					
				     for($i=0;$i<count($data_1);$i++)
					   {
					        $data_4 = array('CommissionId'=>$data_1[$i],'CommissionPrice'=>$data_2[$i],'TemppoTravellarId'=>$temppo_id) ;
					        $this->db->insert('usc_temppotravellar_commission', $data_4);
					   }
					   
					   
				 
				 }			 	  	   
       //------------------------------------view-----------------------------------------------------		
	       
		    function temppotravellar_view($limit,$offset)
			 {
			   // Updateing in Table(usc_temppotravellardetails) of Database(usc)
			    	$this->db->order_by("TemppoTravellarId", "desc");
				   $query = $this->db->get('usc_temppotravellardetails',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_temppotravellardetails');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function temppotravellar_delete($id)
			 {
			   // Deleteing in Table(usc_temppotravellardetails) of Database(usc)
			    			  
					$this->db->where('TemppoTravellarId', $id);
					$this->db->delete('usc_temppotravellardetails');
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
	       
		    function temppotravellar_edit($id)
			   {
			      // Deleteing in Table(usc_temppotravellardetails) of Database(usc)
			    			  
						$this->db->where('TemppoTravellarId', $id);
						$query = $this->db->get('usc_temppotravellardetails');
						return $query->result_array();
						$this->db->close();
					
						
			  }
			  
			 //------------------------------- select agents permission to edit --------------------------------	
		 
		     function temppotravellar_feature_edit($id)
			    {
			      // Deleteing in Table( usc_agents) of Database(usc)
							$this->db->select('FeatureId')	  
								     ->where('TemppoTravellarId', $id);
							$query = $this->db->get('usc_temppotarvellar_feature');
							$k=0;
						$data_array=array();
						foreach($query->result() as $val_1)
							{
							  $data_array[$k]=$val_1->FeatureId;
							  $k++;
							}
							return $data_array;
						//$this->db->close();
				}
				
			 function dropdown_temppo_edit_termsconditions($id)
			    {
			      // Deleteing in Table( usc_agents) of Database(usc)
							$this->db->select('TermsconditionID')	  
								     ->where('TemppoTravellarId', $id);
							$query = $this->db->get('usc_tempo_tempotermscondition');
							$k=0;
						$data_array=array();
						foreach($query->result() as $val_1)
							{
							  $data_array[$k]=$val_1->TermsconditionID;
							  $k++;
							}
							return $data_array;
						//$this->db->close();
				}  	  
				
				
	   
	      //------------------------------- select agents permission to edit --------------------------------	
		 
		     function temppotravellar_agentscommission_edit($id)
			    {
			      // Deleteing in Table( usc_agents) of Database(usc)
							$this->db->select('CommissionId,CommissionPrice')	  
								     ->where('TemppoTravellarId', $id);
							$query = $this->db->get('usc_temppotravellar_commission');
							
						$data_array=array();
						foreach($query->result() as $val_1)
							{
							   $k=$val_1->CommissionId;
							   $data_array[$k]=$val_1->CommissionPrice;
							 
							}
							return $data_array;
						//$this->db->close();
				}    	   		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function temppotravellar_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_temppotravellardetails) of Database(usc)
			    			  
						$this->db->where('TemppoTravellarId', $id);
						$query = $this->db->update('usc_temppotravellardetails',$data);
						//$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_temppotravellardetails) of Database(usc)
			    			  
					$this->db->where_in('TemppoTravellarId', $id);
					$this->db->delete('usc_temppotravellardetails');
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
			   // Deleteing in Table(usc_temppotravellardetails) of Database(usc)
			    			  
					$this->db->where_in('TemppoTravellarId', $id1);
					$query = $this->db->update('usc_temppotravellardetails',$data);
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
			   // Deleteing in Table(usc_temppotravellardetails) of Database(usc)
			    			  
					$this->db->where_in('TemppoTravellarId', $id1);
					$query = $this->db->update('usc_temppotravellardetails',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 	
			 
	 //------------------------------------------------------------------ Dropdown usc_cartourcategories ----------------------------------------------  
	 
	  public function dropdown_temppo_feature()
	    {
		     $this->db->select('FeatureId,FeatureName')
			          ->where('Status','Y')
					  ->order_by('FeatureName');
			  $query=$this->db->get('usc_temppofeature');	
			  return $query->result_array();	
			  $this->db->close();  
		   
		}	
		
  		// ------------------------- select agent permission ------------------------------------------------- 


      //terms Conditions #############################################

		public function dropdown_temppo_termsconditions()
		  {
			$this->db->select('TermsconditionID,Title')
			         ->where('Status','Y')
			         ->order_by('Title');
			 $query= $this->db->get('usc_tempo_termscondition');
			 return  $query->result_array();
			 $this->db->close();             
		}


			 	 				 
	public function get_commission()
		  {
		      $this->db->select('CommissionId,CommissionTitle')
			           ->where('Status','Y')
					   ->order_by('CommissionId');
		       $query = $this->db->get('usc_agents_commission');	
			   return $query->result_array();
			   $this->db->close();		   
		  	}		 	 				 
			
		
			 
   }
?>