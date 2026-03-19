<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
class Tour_tourdatemanage extends CI_Model
    {
      

	  //-----------------------------------------add------------------------------------------------			 
		function tourdate_add($data,$TourId)
			 {
				$datedataArr=$data['tourdate'];
			    $tourtime=trim($data['tourtime']).":00";
	
					
					for($i=0;$i<count($datedataArr);$i++)
					  {
							if($datedataArr[$i]!='')
							  {
								   $dateArr=explode("-",$datedataArr[$i]);
								   $dateStr=$dateArr[2]."-".$dateArr[1]."-".$dateArr[0]." ".$tourtime;
								
								   $data_1['Date']=$dateStr;
								   $data_1['Month']=$dateArr[1];
								   $data_1['Year']=$dateArr[2];
								   $data_1['TourId']=$TourId;
								   $data_1['Status']='Y';
								   $this->db->insert('usc_tourtourdate', $data_1);
							  } 
					  }
			
				
			 } 	 
			
				 
//-----------------------Add Agents permission -------------------------------------------------  
//------------------------------------view-----------------------------------------------------		
	       
		    function tourdate_view($limit,$offset,$id)
			 {
			       $this->db->select('tgen.TourId, tgen.TourName, tgen.NoofDay, tgen.NoofNight, tgen.Rating, tgen.SortOrder,date.Date,date.DateId,date.Status')
			                ->from('usc_tourgeneralinfo as tgen',$limit,$offset)
						    ->join("usc_tourtourdate as date", "date.TourId = tgen.TourId", 'INNER')
							->where('tgen.TourId',$id)
						    ->order_by("date.date", "desc");
				    $query = $this->db->get();
					
                    return $query->result_array();
                    $this->db->close();
				
			 } 
//------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal($id)
			 { 
			         $this->db->where('TourId',$id);
 			       $query1 = $this->db->get('usc_tourtourdate');
				          
				   return $query1->num_rows();
                   $this->db->close();
				
			 }  
			 
			 
			 

 //------------------------------------Delete---------------------------------------------------		
	  	    function tourdate_delete($id)
			   {
			      // Deleteing in Table(usc_tourtourdate) of Database(usc)
			        $this->db->where('TourId', $id);
					$this->db->delete('usc_tourtourdate');
					 if($this->db->affected_rows())	
						 { return 1;  } else {  return 0; }  
				 } 
			   
//------------------------------------edit view-----------------------------------------------------		
	       
		    function tourdate_edit($tid,$id)
			   {
			      // Deleteing in Table(usc_tourtourdate) of Database(usc)
			    			  
						$this->db->where('TourId', $tid);
						$this->db->where('DateId', $id);
						$query = $this->db->get('usc_tourtourdate');
						//echo $this->db->last_query();
						return $query->result_array();
						$this->db->close();
					
						
			  } 	
//------------------------------------edit date-----------------------------------------------------		
	       
		    function tourdate_edit_data($data_1, $id, $tid)
			  {
			     // Deleteing in Table(usc_tourtourdate) of Database(usc)
			    			  
						$this->db->where('TourId', $tid);
						$this->db->where('DateId', $id);
						$query = $this->db->update('usc_tourtourdate',$data_1);
						//$this->db->close();
			  } 
 // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_tourtourdate) of Database(usc)
			    			  
					$this->db->where('DateId', $id);
					$this->db->delete('usc_tourtourdate');
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
			   // Deleteing in Table(usc_tourtourdate) of Database(usc)
			    			  
					$this->db->where('DateId', $id1);
					$query = $this->db->update('usc_tourtourdate',$data);
					
					
					
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
			   // Deleteing in Table(usc_tourtourdate) of Database(usc)
			    			  
					$this->db->where('DateId', $id1);
					$query = $this->db->update('usc_tourtourdate',$data);
					
					
					
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 
			 	
	  //--------------------------------------------------------------- DROP DOWN -----------------------------------------	
	  //-------------------------------------- tour categories drop down -------------------------------------------------------	
	  
	       
		    function toure_list($id)
			 {
			       $this->db->select('TourId, TourName')
			                ->from('usc_tourgeneralinfo')
							->where("TourId", $id)
						    ->order_by("TourId", "desc");
				    $query = $this->db->get();
					
                    return $query->result_array();
                    $this->db->close();
				
			 } 
	   	
}
?>