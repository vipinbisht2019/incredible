<?php 
   /**
 
   */
 class Holidaybookingmanage extends CI_Model
   {
       //------------------------------------view-----------------------------------------------------		
	     function toursbooking_view($limit,$offset)
			 {
			           $this->db->select('*')
			                ->from('usc_tour_vehiclebooking as booking',$limit,$offset)
							->join("usc_tour_booking_tourdetails as tours", "booking.BookingId = tours.BookingId", 'INNER')
							->where('tours.TourType','H')
			                ->order_by("booking.BookingId ", "desc");
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_tour_vehiclebooking');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	
			 
			 
			 
	 //----------------------------------------------------------------------------------------------------------------------------------------------------------
	 //----------------------------------------------------------------------------------------------------------------------------------------------------------

	     //----------------------------------------------------------------------------------------------------------------------------------------------------------
	 //----------------------------------------------------------------------------------------------------------------------------------------------------------

	     function toursbooking_view_search($limit,$offset,$keyword,$DepartureDate,$BookingDate)
			 {
			     
					$this->db->select('*');
				    $this->db->from('usc_tour_vehiclebooking as booking');
					$this->db->limit($limit,$offset);
					$this->db->join("usc_tour_booking_tourdetails as tours", "booking.BookingId = tours.BookingId", 'INNER');
					$this->db->where('tours.TourType','H');
				
				    if($DepartureDate!='')
						 {
							$this->db->where('DepartureDate',$DepartureDate);
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
					
					$this->db->order_by("booking.BookingId ", "desc");
					$query = $this->db->get();
					return $query->result_array();
					$this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal_search($keyword,$DepartureDate,$BookingDate)
			 {
			     
				        
							   if($DepartureDate!='')
						 {
							$this->db->where('DepartureDate',$DepartureDate);
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
				   $query = $this->db->get('usc_tour_vehiclebooking');
				                    
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 
			 
			 
			  public function tourdetails($bid)
			     {
			  		 //$id=$this->session->customer_id;    
				     $this->db->select('*')
					          ->from('usc_tour_vehiclebooking as booking')
						      ->join("usc_tour_booking_tourdetails as booking_tourdetails", "booking.BookingId=booking_tourdetails.BookingId", 'inner')
							   ->where('booking.BookingId', $bid)
							 
							   ->where('booking_tourdetails.TourType', 'H');
					    $query = $this->db->get();
				             
				   return $query->result_array();
                   $this->db->close();
			  	 } 	
				 
				 
			 		 //------------------------------------------------------ agent info ------------------------------------------------
	 				 
			 function get_agent_info($id)
				 {
					
								  $this->db->where('user_id', $id);
						 $query = $this->db->get('usc_agents');
						 return $query->result_array();
						 $this->db->close();
				 }


			

			 //--------------------------------------------------------------- Cansllation Stuff Start -------------------------------------------------	
      //--------------------------------------------------------------- Cansllation Stuff Start -------------------------------------------------	
   
              function tours_canllation_charges_day($bid)
			     {
				 
				     $this->db->select('*')
					          ->from('usc_cancellationpolicy as cancellationpolicy')
						      ->join("usc_tourcancellationpolicy as tourcancellationpolicy", "cancellationpolicy.CancellationID=tourcancellationpolicy.CancellationID", 'inner')
							   ->where('tourcancellationpolicy.TourId', $bid)
							   ->where('cancellationpolicy.TimeUnit', 'D')
							   ->order_by('EndTime','desc');
					    $query = $this->db->get();	
				         return $query->result_array();
						 $this->db->close();
				
				
				 }		
			
			 function tours_canllation_charges_hours($bid)
			     {
				 
				     $this->db->select('*')
					          ->from('usc_cancellationpolicy as cancellationpolicy')
						      ->join("usc_tourcancellationpolicy as tourcancellationpolicy", "cancellationpolicy.CancellationID=tourcancellationpolicy.CancellationID", 'inner')
							   ->where('tourcancellationpolicy.TourId', $bid)
							   ->where('cancellationpolicy.TimeUnit', 'H')
							   ->order_by('EndTime','desc');
					    $query = $this->db->get();	
				         return $query->result_array();
						 $this->db->close();
				
				
				 }	
	//------------------------------------------------------ Update booking -----------------------------------------
		     function tourbooking_cancel_data($data,$id)
			        {
			   			$this->db->where('BookingId', $id);
						$query = $this->db->update('usc_tour_vehiclebooking',$data);
						$this->db->close();
			       } 
	




			 	 		 
 }
?>