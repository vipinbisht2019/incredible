<?php 
   /**
 
   */
 class Temppobookingmanage extends CI_Model
   {
       //------------------------------------view-----------------------------------------------------		
	     function tempobooking_view($limit,$offset)
			 {
			           $this->db->select('*')
			                ->from('usc_tempo_booking',$limit,$offset)
						    ->where('IsPaid','Y')
			                ->order_by("BookingId ", "desc");
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			                $this->db->where('IsPaid','Y');
				   $query = $this->db->get('usc_tempo_booking');
				   return $query->num_rows();
                   $this->db->close();
				
			 }
			 
	 //------------------------------------search-----------------------------------------------------	 	
	     function tempobooking_search($limit, $offset, $keyword, $DepartureDate, $BookingDate)
			 {
			           
					   
					    $this->db->select('*');
			            $this->db->from('usc_tempo_booking');
						$this->db->where('IsPaid','Y');
						$this->db->limit($limit,$offset);
					
						   
						   if($DepartureDate!='')
							 {
						        $this->db->where('PickupDate',$DepartureDate);
							 } 
							if($BookingDate!='')
								{
						           $this->db->where('BookingDate',$BookingDate);
							    }  
				          if($keyword!='')
								{
						              $this->db->like('Name',$keyword);
									  $this->db->or_where('Email ',$keyword);
									  $this->db->or_where('PhoneNo',$keyword,")");
							    }  
						
						
			            $this->db->order_by("BookingId ", "desc");
				   
				     $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			 } 
//------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal_search($keyword, $DepartureDate, $BookingDate)
			  {
			    // Updateing in Table(usc_flash) of Database(usc)
			  
						if($DepartureDate!='')
							{
						     	$this->db->where('PickupDate',$DepartureDate);
							} 
							if($BookingDate!='')
							{
							   $this->db->where('BookingDate',$BookingDate);
							}  
							if($keyword!='')
							{
								  $this->db->where('Name',$keyword);
								  $this->db->or_where('Email ',$keyword);
								  $this->db->or_where('PhoneNo',$keyword,")");
							}  
							
							
							$this->db->where('IsPaid','Y');
				   $query = $this->db->get('usc_tempo_booking');
				   return $query->num_rows();
                   $this->db->close();
			 }  		 		 
			 


			 // Tempo booking Details ####################

		 function tempobooking_deatils($bid)
			 {
			           
			
				   $this->db->select('*')
			                ->from('usc_tempo_booking')
						   	// ->where('AgentId', $id)
							->where('BookingId', $bid)
							->where('IsPaid', 'Y')
			                ->order_by("BookingId ", "desc");
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			 }


// TempoBooking # Cancellation #######################################


//--------------------------------------------------------------- Cansllation Stuff Start -------------------------------------------------	
//--------------------------------------------------------------- Cansllation Stuff Start -------------------------------------------------	
// ->join("usc_tourcancellationpolicy as tourcancellationpolicy", "cancellationpolicy.CancellationID=tourcancellationpolicy.CancellationID", 'inner')
              function tempo_canllation_charges_day($bid)
			     {
				 
				     $this->db->select('*')
					          ->from('usc_temppocansllationcharge')
						   	  ->where('TimeUnit', 'D')
							  ->where('Status', 'Y')
							  ->order_by('EndTime','desc');
					    $query = $this->db->get();	
				         return $query->result_array();
						 $this->db->close();
				
				
				 }		
			
			 function tempo_canllation_charges_hours($bid)
			     {
				 
				     $this->db->select('*')
					          ->from('usc_temppocansllationcharge')
						  	  ->where('TimeUnit', 'H')
							  ->where('Status', 'Y')
							  ->order_by('EndTime','desc');
					    $query = $this->db->get();	
				         return $query->result_array();
						 $this->db->close();
				
				
				 }	
	//------------------------------------------------------ Update booking -----------------------------------------
		     function tempobooking_cancel_data($data,$id)
			        {
			   			$this->db->where('BookingId', $id);
						$query = $this->db->update('usc_tempo_booking',$data);
						$this->db->close();
			       } 


			 	 
			 
		 
	 				 
			 		  			 	
	   		 	 
			 
   }
?>