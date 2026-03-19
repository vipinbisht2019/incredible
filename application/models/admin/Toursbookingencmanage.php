<?php 
   /**
 
   */
 class Toursbookingencmanage extends CI_Model
   {
        //------------------------------------view-----------------------------------------------------		
	       
		    function toursbookingenc_view($limit,$offset)
			 {
			           $this->db->select('*')
			                ->from('usc_tour_booking as booking',$limit,$offset)
							->join("usc_tour_booking_tourdetails as tours", "booking.BookingId = tours.BookingId", 'INNER')
			             	->where('tours.TourType','T')
							->where('booking.IsPaid','N')
			                ->order_by("booking.BookingId ", "desc");
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			              
						    $this->db->where('IsPaid','N');
				   $query = $this->db->get('usc_tour_booking');
				   return $query->num_rows();
                   $this->db->close();
				
			 } 
			 
  
  
  //------------------------------------  Search -----------------------------------------------------		
	//------------------------------------  Search -----------------------------------------------------       
		    function toursbookingenc_view_serch($limit,$offset,$keyword,$DepartureDate,$BookingDate)
			  {
					
					$this->db->select('*');
					$this->db->from('usc_tour_booking as booking');
					$this->db->limit($limit,$offset);
					$this->db->join("usc_tour_booking_tourdetails as tours", "booking.BookingId = tours.BookingId", 'INNER');
					$this->db->where('booking.IsPaid','N');
					$this->db->where('tours.TourType','T');
					
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
			          // Updateing in Table(usc_flash) of Database(usc)
			          // $this->db->where('AgentId',$id);
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
					         $this->db->where('IsPaid','N');		
				    $query = $this->db->get('usc_tour_booking');


				    return $query->num_rows();
                    $this->db->close();
				
			 } 		 
			 
			 
  			 
			 
			  

			  public function tourdetails($id){

			 	    $this->db->select('*')
					          ->from('usc_tour_booking as booking')
						      ->join("usc_tour_booking_tourdetails as booking_tourdetails", "booking.BookingId=booking_tourdetails.BookingId", 'inner')
							   ->where('booking.BookingId', $id)
							   ->where('booking.IsPaid','N')
							   ->where('booking_tourdetails.TourType', 'T');
					    $query = $this->db->get();
						
						//echo"------ -----------".$this->db->last_query();
					  
				             
				   return $query->result_array();
                   $this->db->close();
			   	 	
			   	 } 	 
			 
		  //------------------------------------------------------ agent info ------------------------------------------------
	 				 
			 // function get_agent_info($id)
				//  {
						
						 
				// 				  $this->db->where('user_id', $id);
				// 		 $query = $this->db->get('usc_agents');
				// 		 return $query->result_array();
				// 		 $this->db->close();
					
				//  }  		  
			 


   //--------------------------------------------------------------- Cansllation Stuff Start -------------------------------------------------	
   //--------------------------------------------------------------- Cansllation Stuff Start -------------------------------------------------	
   
     //          function tours_canllation_charges_day($bid)
			  //    {
				 
				 //     $this->db->select('*')
					//           ->from('usc_cancellationpolicy as cancellationpolicy')
					// 	      ->join("usc_tourcancellationpolicy as tourcancellationpolicy", "cancellationpolicy.CancellationID=tourcancellationpolicy.CancellationID", 'inner')
					// 		   ->where('tourcancellationpolicy.TourId', $bid)
					// 		   ->where('cancellationpolicy.TimeUnit', 'D')
					// 		   ->order_by('EndTime','desc');
					//     $query = $this->db->get();	
				 //         return $query->result_array();
					// 	 $this->db->close();
				
				
				 // }		
			
			 // function tours_canllation_charges_hours($bid)
			 //     {
				 
				//      $this->db->select('*')
				// 	          ->from('usc_cancellationpolicy as cancellationpolicy')
				// 		      ->join("usc_tourcancellationpolicy as tourcancellationpolicy", "cancellationpolicy.CancellationID=tourcancellationpolicy.CancellationID", 'inner')
				// 			   ->where('tourcancellationpolicy.TourId', $bid)
				// 			   ->where('cancellationpolicy.TimeUnit', 'H')
				// 			   ->order_by('EndTime','desc');
				// 	    $query = $this->db->get();	
				//          return $query->result_array();
				// 		 $this->db->close();
				
				
				//  }	
	//------------------------------------------------------ Update booking -----------------------------------------
		    //  function tourbooking_cancel_data($data,$id)
			   //      {
			   // 			 $this->db->where('BookingId ', $id);
						//  $this->db->where('IsPaid','Y');
						// $query = $this->db->update('usc_tour_booking',$data);
						// $this->db->close();
			   //     } 

	 				 
			 		  			 	
	   		 	 
			 
   }
?>