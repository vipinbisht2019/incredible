<?php 
   /**
 
   */
 class Busbookingencmanage extends CI_Model
   {
 
       //------------------------------------view-----------------------------------------------------		
	     function busbookingenc_view($limit,$offset)
			 {
			           $this->db->select('booking.*,city_from.CityName as fromcity ,city_to.CityName as tocity')
			                ->from('usc_bus_booking as booking')
							->join('usc_buses_city as city_from' , "booking.FromCityId = city_from.CityId", 'INNER')
							->join('usc_buses_city as city_to' , "booking.ToCityId = city_to.CityId", 'INNER')
							->where('IsPaid','N')
							->limit($limit,$offset)
			                ->order_by("BookingId ", "desc");
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			  } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)

			       $this->db->where('IsPaid','N');
				   $query = $this->db->get('usc_bus_booking');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 
			 
   
    function busbookingenc_view_search($limit,$offset,$keyword,$DepartureDate,$BookingDate)
			 {
			          
					   $this->db->select('booking.*,city_from.CityName as fromcity ,city_to.CityName as tocity');
			           $this->db->from('usc_bus_booking as booking');
					   $this->db->join('usc_buses_city as city_from' , "booking.FromCityId = city_from.CityId", 'INNER');
					   $this->db->join('usc_buses_city as city_to' , "booking.ToCityId = city_to.CityId", 'INNER');
					   $this->db->where('IsPaid','N');
					 
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
							
							$this->db->limit($limit,$offset);
							$this->db->order_by("BookingId", "desc");
							$query = $this->db->get();
					   
					          //echo $this->db->last_query();
					          //  die();
					
								return $query->result_array();
								 $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal_search($keyword,$DepartureDate,$BookingDate)
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
			                $this->db->where('IsPaid','N');
				   $query = $this->db->get('usc_bus_booking');
			
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
						              $this->db->where('Name',$keyword);
									  $this->db->or_where('Email ',$keyword);
									  $this->db->or_where('PhoneNo',$keyword,")");
							    }  
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
	 			 

			  // public function busbookingencdetails($id){

			 	//     $this->db->select('*')
					//           ->from('usc_bus_booking')
					// 	      ->where('BookingId', $id);
					//     $query = $this->db->get();
				             
				 //   return $query->result_array();
     //               $this->db->close();


			   	 	
			  //  	 } 	 



    // Booking Details ########################


			   	 		  public function busbookingencdetails($id){
			  
                     // $id=$this->session->customer_id;
			 	    $this->db->select('booking.*,city_from.CityName as fromcity ,city_to.CityName as tocity')
			                ->from('usc_bus_booking as booking')
							->join('usc_buses_city as city_from' , "booking.FromCityId = city_from.CityId", 'INNER')
							->join('usc_buses_city as city_to' , "booking.ToCityId = city_to.CityId", 'INNER')
							->where('IsPaid','N')
						    ->where('BookingId',$id)
							// ->where('AgentId', $id)
						    ->order_by("BookingId ", "desc");
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();


			   	 	
			   	 } 			 
	 				 
			 		  			 	
	   		 	 
			 
   }
?>