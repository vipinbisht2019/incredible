<?php 
    /*********************  ----------------------------------------------------------------   ******************************/
 class Toursbookingmanage extends CI_Model
   {
        //------------------------------------view-----------------------------------------------------		
	        function toursbooking_view($limit,$offset)
			   {
			           $this->db->select('*')
			                ->from('usc_tour_booking as booking',$limit,$offset)
							->join("usc_tour_booking_tourdetails as tours", "booking.BookingId = tours.BookingId", 'INNER')
			             	->where('tours.TourType','T')
							->where('booking.IsPaid','Y')
			                ->order_by("booking.BookingId ", "desc");
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			  } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			      // Updateing in Table(usc_flash) of Database(usc)
			              
						    $this->db->where('IsPaid','Y');
				   $query = $this->db->get('usc_tour_booking');
				   return $query->num_rows();
                   $this->db->close();
				
			 } 
			 
     //------------------------------------  Search -----------------------------------------------------		
	 //------------------------------------  Search -----------------------------------------------------       
		    function toursbooking_view_serch($limit, $offset, $TourId, $StartDateStr, $EndDateStr)
			  {
					
					$this->db->select('*');
					$this->db->from('usc_tour_booking as booking');
					$this->db->limit($limit,$offset);
					$this->db->join("usc_tour_booking_tourdetails as tours", "booking.BookingId = tours.BookingId", 'INNER');
					$this->db->where('tours.TourType','T');
					
					   if($TourId!='')
							 {
						        $this->db->where('booking.TourId',$TourId);
							 } 
							if($StartDateStr!='' && $EndDateStr)
								{
						           $this->db->where('DepartureDate>=',$StartDateStr);
								   $this->db->where('DepartureDate<=',$EndDateStr);
							    }  
				          
							
					
					$this->db->order_by("booking.BookingId ", "desc");
					$query = $this->db->get();
					  
					 // echo $this->db->last_query();
					  //die();
					
					return $query->result_array();
					$this->db->close();
				
			  } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal_search($TourId, $StartDateStr, $EndDateStr)
			 {
			          // Updateing in Table(usc_flash) of Database(usc)
			          // $this->db->where('AgentId',$id);
							if($TourId!='')
							 {
						        $this->db->where('TourId',$TourId);
							 } 
							if($StartDateStr!='' && $EndDateStr)
								{
						           $this->db->where('DepartureDate>=',$StartDateStr);
								   $this->db->where('DepartureDate<=',$EndDateStr);
							    }  
							
				    $query = $this->db->get('usc_tour_booking');
				    return $query->num_rows();
                    $this->db->close();
				
			 } 		 
 
			  

			  public function tourdetails($id){

			 	    $this->db->select('*')
					          ->from('usc_tour_booking as booking')
						      ->join("usc_tour_booking_tourdetails as booking_tourdetails", "booking.BookingId=booking_tourdetails.BookingId", 'inner')
							   ->where('booking.BookingId', $id)
							   ->where('booking.IsPaid','Y')
							   ->where('booking_tourdetails.TourType', 'T');
					    $query = $this->db->get();
						
						//echo"------ -----------".$this->db->last_query();
					  
				             
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
			   			 $this->db->where('BookingId ', $id);
						 $this->db->where('IsPaid','Y');
						 $query = $this->db->update('usc_tour_booking',$data);
						 $this->db->close();
			       } 
				   
		    function tours_list_dropdown()
			    {
					 $this->db->select('TourId, TourName');
					 $this->db->where('TourType','T');
					  $this->db->order_by('SortOrder');
					 $query = $this->db->get('usc_tourgeneralinfo');
					   return $query->result_array();
					 $this->db->close();
				
				}
		 
      }
?>