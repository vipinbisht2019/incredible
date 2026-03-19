<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
class Tour_termsconditionsmanage extends CI_Model
 {
      //------------------------------------- Associated Boarding Boarding -----------------------------------
	        
	  public function get_boardingpoint()
		   {
				$this->db->select('BoardingId, BoardingPoint, TotalPrice') 		  
						 ->order_by('BoardingPoint');
				$query = $this->db->get('usc_tourboardingpoints');
				return $query->result_array();
				$this->db->close();
		   } 
 		 //------------------------------------- Get tour's associate Boarding Boarding -----------------------------------
	  	 public function get_tour_boardingpoint($id)
		   {
				$this->db->select('BoardingId, PickUpTime') 	
				         ->where('TourId', $id);	  
				$query = $this->db->get('usc_tour__tourboardingpoints');
				return $query->result_array();
				$this->db->close();
		   } 
      //------------------------------------- Get term and conditions -----------------------------------
	  	 public function get_termscondition()
		   {
				$this->db->select('TermsconditionID, Title') 		  
						 ->where('Status', 'Y')
						 ->order_by('Sortorder');
				$query = $this->db->get('usc_termscondition');
				return $query->result_array();
				$this->db->close();
		   } 
		   
		 //------------------------------------- Get tour's associate cancellation policy -----------------------------------
	  	 public function get_tour_termconditions($id)
		   {
				$this->db->select('TermsconditionID') 	
				         ->where('TourId', $id);	  
				$query = $this->db->get('usc_tourtermconditions');
				return $query->result_array();
				$this->db->close();
		   } 
	   
      //------------------------------------- Get cancellation policy -----------------------------------
	  	 public function get_cancellationpolicy()
		   {
				$this->db->select('CancellationID, CancellationTime') 		  
						 ->where('Status', 'Y')
						 ->order_by('Sortorder');
				$query = $this->db->get('usc_cancellationpolicy');
				return $query->result_array();
				$this->db->close();
		   } 
	   
      //------------------------------------- Get tour's associate cancellation policy -----------------------------------
	  	 public function get_tour_cancellationpolicy($id)
		   {
				$this->db->select('CancellationID') 
				         ->where('TourId', $id);			  
				$query = $this->db->get('usc_tourcancellationpolicy');
				return $query->result_array();
				$this->db->close();
		   } 
	  //------------------------------ get tour general info and tour terms conditions ----------------------------------	   		   	   
	      
		 public function get_tour_notes($id)
		   {
				$this->db->select('CancellationNote,ConditionsNote,LocationMap') 
				         ->where('TourId', $id);			  
				$query = $this->db->get('usc_tourgeneralinfo');
				return $query->result_array();
				$this->db->close();
		   } 
		   
//-----------------------------------------------------------------------------------------------------------------------------------------------------			   
		   
	 function terms_polc_insert_data($data_term, $data_polc, $data_board, $data_PickUpTime, $TourId)
	     {
		      
			   // --------------- first delete termconditions -------------------------
			  	    $this->db->where('TourId', $TourId);
					$this->db->delete('usc_tourtermconditions');
			  // --------------- first delete cellationpolicy -------------------------
			  	    $this->db->where('TourId', $TourId);
					$this->db->delete('usc_tourcancellationpolicy');
			  // --------------- first delete Boarding Point -------------------------
			  	    $this->db->where('TourId', $TourId);
					$this->db->delete('usc_tour__tourboardingpoints');
						
			  //-------------------- Insert termconditions ---------------------------			
			     for($i=0;$i<count($data_term);$i++)
				    { 
					    $data_2=array('TermsconditionID' => $data_term[$i], 'TourId' => $TourId); 
					    $this->db->insert('usc_tourtermconditions', $data_2);
				    } 
			  //-------------------- Insert cellationpolicy ---------------------------			
			     for($i=0;$i<count($data_polc);$i++)
				    { 
					    $data_3=array('CancellationID' => $data_polc[$i], 'TourId' => $TourId); 
					    $this->db->insert('usc_tourcancellationpolicy', $data_3);
				    } 
			  //-------------------- Insert cellationpolicy ---------------------------			
			     for($i=0;$i<count($data_board);$i++)
				    { 
					    $picuptime=$data_PickUpTime[$data_board[$i]];
					    $data_3=array('BoardingId' => $data_board[$i], "PickUpTime" =>$picuptime, 'TourId' => $TourId); 
						
					    $this->db->insert('usc_tour__tourboardingpoints', $data_3);
				    } 			 
		 
		 
		 }
//-----------------------------------------------------------------------------------------------------------------------------------------------------		
         function terms_polcnote_edit_data($data,$id)
			  {
			        // Deleteing in Table(usc_flash) of Database(usc)
			    		$this->db->where('TourId', $id);
						$query = $this->db->update('usc_tourgeneralinfo',$data);
						
			  } 
			  
	    //-----------------------------------------add------------------------------------------------				  	 
	     public function tour_agentscommission_add($data_1,$data_2,$TourId,$edit)
			      {
				     if($edit=='yes')
					  {
				     	$this->db->where('TourId', $TourId);
					    $this->db->delete('usc_tour_commission');
					  }	
					
				     for($i=0;$i<count($data_1);$i++)
					   {
					        $data_4 = array('CommissionId'=>$data_1[$i],'CommissionPrice'=>$data_2[$i],'TourId'=>$TourId) ;
					        $this->db->insert('usc_tour_commission', $data_4);
					   }
					   
					  
				 
				 }	
				 
		 //------------------------------- select agents permission to edit --------------------------------	
		 
		     function tour_agentscommission_edit($id)
			    {
			         // Deleteing in Table( usc_agents) of Database(usc)
							$this->db->select('CommissionId,CommissionPrice')	  
								     ->where('TourId', $id);
							$query = $this->db->get('usc_tour_commission');
							
						$data_array=array();
						foreach($query->result() as $val_1)
							{
							   $k=$val_1->CommissionId;
							   $data_array[$k]=$val_1->CommissionPrice;
							 
							}
							return $data_array;
						//$this->db->close();
				}    	   		 		 		  
			  
			  
	
	// ------------------------- select agent permission ------------------------------------------------- 	 
			 	 				 
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