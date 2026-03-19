<?php 
   /**
        ************************************************************************************************
   */
class Iptrackingmanage extends CI_Model
   {
      

	 
       //------------------------------------view-----------------------------------------------------		
	    
		function ip_view($limit,$offset)
			 {
			   // Updateing in Table(usc_iptracking) of Database(usc)  COUNT(user_id) as total'
			                $this->db->select('IpAddress, max(VisitDateTime) as VisitDateTime, TotalClick , count(IpAddress) as total') ;
			                $this->db->group_by('IpAddress');
			                $this->db->order_by('total','desc');
							$this->db->limit($limit,$offset);
				   $query = $this->db->get('usc_iptracking');
                   return $query->result_array();
                  $this->db->close();
				
			 } 
			 
	 //------------------------------------Get toatal record in table for paging-----------------------------------------------------		
	       
		    function get_tatal()
			 {
			   // Updateing in Table(usc_gallery) of Database(usc)
			                $this->db->group_by('IpAddress');
				   $query = $this->db->get('usc_iptracking');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 

			 
 //------------------------------------Delete-----------------------------------------------------		
	       
		    function ip_delete($id)
			 {
			   // Deleteing in Table(usc_iptracking) of Database(usc)
			    			  
					$this->db->where('Id', $id);
					$this->db->delete('usc_iptracking');
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