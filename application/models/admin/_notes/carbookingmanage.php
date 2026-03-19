<?php 
   /**
 
   */
 class Carbookingmanage extends CI_Model
   {
       //------------------------------------view-----------------------------------------------------		
	     function carsbooking_view($limit,$offset)
			 {
			           $this->db->select('*')
			                ->from('usc_car_booking')
						   ->limit($limit,$offset) 
						    ->where('IsPaid','Y')
			                ->order_by("BookingId ", "desc");
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			 } 




			public function car_booking_details($bid)
			   	 {
							$id=$this->session->customer_id;
				            $this->db->select('*')
								->from('usc_car_booking')
								->where('IsPaid','Y')
								// ->where('AgentId',$id)
								->where('BookingId',$bid)
								->order_by("BookingId ", "desc");
						$query = $this->db->get();
						return $query->result_array();
						$this->db->close();
			   	 } 

	   

		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_car_booking');
				   return $query->num_rows();
                   $this->db->close();
				
			 }
			 
			 
        //------------------------------------Search-----------------------------------------------------	
		//------------------------------------Search-----------------------------------------------------
		//------------------------------------Search-----------------------------------------------------	
	     function carsbooking_view_search($limit,$offset,$keyword,$DepartureDate,$BookingDate)
			 {      
						
							$this->db->select('*');
							$this->db->from('usc_car_booking');
							$this->db->limit($limit,$offset);
							$this->db->where('IsPaid','Y');
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
		    function get_tatal_search($keyword,$DepartureDate,$BookingDate)
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			      
				       
							$this->db->where('IsPaid','Y');
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
							
							
				    $query = $this->db->get('usc_car_booking');
				    return $query->num_rows();
                    $this->db->close();
				
			 }
			 	 
			 			 




	  //--------------------------------------------------------------- Cansllation Stuff Start -------------------------------------------------	
   //--------------------------------------------------------------- Cansllation Stuff Start -------------------------------------------------	
   // ->join("usc_tourcancellationpolicy as tourcancellationpolicy", "cancellationpolicy.CancellationID=tourcancellationpolicy.CancellationID", 'inner')
              function car_canllation_charges_day($bid)
			     {
				 
				     $this->db->select('*')
					          ->from('usc_carcansllationcharge')
						   	  ->where('TimeUnit', 'D')
							  ->where('Status', 'Y')
							  ->order_by('EndTime','desc');
					    $query = $this->db->get();	
				         return $query->result_array();
						 $this->db->close();
				
				
				 }		
			
			 function car_canllation_charges_hours($bid)
			     {
				 
				     $this->db->select('*')
					          ->from('usc_carcansllationcharge')
						  	  ->where('TimeUnit', 'H')
							  ->where('Status', 'Y')
							  ->order_by('EndTime','desc');
					    $query = $this->db->get();	
				         return $query->result_array();
						 $this->db->close();
				
				
				 }	
	//------------------------------------------------------ Update booking -----------------------------------------
		     function carbooking_cancel_data($data,$id)
			        {
			   			$this->db->where('BookingId ', $id);
						$query = $this->db->update('usc_car_booking',$data);
						$this->db->close();
			       } 
			  		 			 		  
			  		 			 		 	   	 
			 
		 
	 				 
			 		  			 	
	   		 	 
			 
   }
?>