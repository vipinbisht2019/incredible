<?php 
   /**
 
   */
   class Paymentsmanage extends CI_Model
   {
      
      //------------------------------------view-----------------------------------------------------		
	       
		    function payment_view($limit,$offset)
			  {
			   // Updateing in Table(usc_customer_payments) of Database(usc)
			   
			            $this->db->select('*');
						$this->db->from('usc_customer as cut',$limit,$offset);
						$this->db->join('usc_customer_payments as pay', 'cut.user_id = pay.user_id','inner');
						$query = $this->db->get();
						return $query->result_array();
						$this->db->close();
			    			
			  } 
	 //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_customer_payments');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      	
	   		 	 
			 
   }
   

?>