<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Vehiclemanage extends CI_Model
   {
 	  //-----------------------------------------add------------------------------------------------			 
			function vehicle_add($data)
			 {
			  // Inserting in Table(usc_toursvehicle) of Database(usc)
			  
				 if($this->db->insert('usc_toursvehicle', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 } 	
	    // ------------------------ vihicle pax option ------------------------------ 
		function vehicle_paxoption_add($data,$vehicleId)
			 {
					
					for($i=0;$i<count($data);$i++)	
					  {	
					   if($data[$i]!='')
					     {
					       $data_1['NoPax']=$data[$i];
						   $data_1['VehicleId']=$vehicleId;	  
						   $this->db->insert('usc_toursvehiclepax_option', $data_1);
						 }
					  }	
			
			 } 			 
			  
       //------------------------------------view-----------------------------------------------------		
	       
		    function vehicle_view($limit,$offset)
			 {
			   // Updateing in Table(usc_toursvehicle) of Database(usc)
			    	$this->db->order_by("VehicleId", "desc");
				   $query = $this->db->get('usc_toursvehicle',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_toursvehicle');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function vehicle_delete($id)
			 {
			   // Deleteing in Table(usc_toursvehicle) of Database(usc)
			    			  
					$this->db->where('VehicleId', $id);
					$this->db->delete('usc_toursvehicle');
					 if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }  
						
			 } 		 
			 
		  //------------------------------------edit view-----------------------------------------------------		
	       
		    function vehicle_edit($id)
			   {
			      // Deleteing in Table(usc_toursvehicle) of Database(usc)
			    			  
						$this->db->where('VehicleId', $id);
						$query = $this->db->get('usc_toursvehicle');
						return $query->result_array();
						$this->db->close();
					
						
			  } 
			  
		 function vehicle_edit_paxoption($id)
			   {
			      // Deleteing in Table(usc_toursvehicle) of Database(usc)
			    			  
						$this->db->where('VehicleId', $id);
						$query = $this->db->get('usc_toursvehiclepax_option');
						return $query->result_array();
						$this->db->close();
					
						
			  }  
			  
			  		 
	   
	     //------------------------------------edit data-----------------------------------------------------		
	       
		    function vehicle_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_toursvehicle) of Database(usc)
			    			  
						$this->db->where('VehicleId', $id);
						$query = $this->db->update('usc_toursvehicle',$data);
						
			  } 
			  
			 function vehicle_edit_paxoption_data($data_1, $data_2)
				  {
					 // Deleteing in Table(usc_toursvehicle) of Database(usc)
					 for($i=0;$i<count($data_1);$i++)	
					  {	
					    if($data_1[$i]!='')
					      {
					         $data_3['NoPax']=$data_1[$i];
							 $this->db->where('PaxId', $data_2[$i]);
							 $query = $this->db->update('usc_toursvehiclepax_option',$data_3);
						 }
					 }		
							
							$this->db->close();
				  }  
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_toursvehicle) of Database(usc)
			    			  
					$this->db->where_in('VehicleId', $id);
					$this->db->delete('usc_toursvehicle');
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
			   // Deleteing in Table(usc_toursvehicle) of Database(usc)
			    			  
					$this->db->where_in('VehicleId', $id1);
					$query = $this->db->update('usc_toursvehicle',$data);
			
				/*	
					echo $this->db->last_query();
					die();
					
					*/
					
					
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
			   // Deleteing in Table(usc_toursvehicle) of Database(usc)
			    			  
					$this->db->where_in('VehicleId', $id1);
					$query = $this->db->update('usc_toursvehicle',$data);
			
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