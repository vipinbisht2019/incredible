<?php 
   /**
 
   */
   class Busoutservicemanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function busoutservice_add($data,$bid)
			 {
			  // Inserting in Table(usc_buses_outofserveice) of Database(usc)
			  
				   
					for($i=0;$i<count($data);$i++)
					 {
						if($data[$i]!='')
							{
								$FromOperatingArr=explode("-",$data[$i]); 
								$FromOperatingStr=$FromOperatingArr['2']."-".$FromOperatingArr['1']."-".$FromOperatingArr['0'];
								$data_2['ServiceOfServiceDate']=$FromOperatingStr;
								$data_2['BusesRoutsId']=$bid;
								$insert=$this->db->insert('usc_buses_outofserveice', $data_2);
							}	
					 }	
					 
				 return $insert;
					
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function busoutservice_view($limit,$offset)
			 {
			   // Updateing in Table(usc_buses_outofserveice) of Database(usc)
								
					$this->db->from('usc_buses_outofserveice')
						     ->limit($limit,$offset)
				             ->order_by("ServiceId", "desc");
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_buses_outofserveice');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function busoutservice_delete($id)
			 {
			   // Deleteing in Table(usc_buses_outofserveice) of Database(usc)
			    			  
					$this->db->where('ServiceId', $id);
					$this->db->delete('usc_buses_outofserveice');
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
	       
		    function busoutservice_edit($id)
			   {
			      // Deleteing in Table(usc_buses_outofserveice) of Database(usc)
			    			  
						$this->db->where('ServiceId', $id);
						$query = $this->db->get('usc_buses_outofserveice');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function busoutservice_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_buses_outofserveice) of Database(usc)
			    			  
						$this->db->where('ServiceId', $id);
						$query = $this->db->update('usc_buses_outofserveice',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_buses_outofserveice) of Database(usc)
			    			  
					$this->db->where_in('ServiceId', $id);
					$this->db->delete('usc_buses_outofserveice');
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
			   // Deleteing in Table(usc_buses_outofserveice) of Database(usc)
			    			  
					$this->db->where_in('ServiceId', $id1);
					$query = $this->db->update('usc_buses_outofserveice',$data);
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
			   // Deleteing in Table(usc_buses_outofserveice) of Database(usc)
			    			  
					$this->db->where_in('ServiceId', $id1);
					$query = $this->db->update('usc_buses_outofserveice',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 }

   // Dublicate Check #####################################################################

	         function check_duplicate($ServiceOfServiceDate,$BusesRoutsId)
			      {
			   								
						$q = $this->db->where(['ServiceOfServiceDate' => $ServiceOfServiceDate,'BusesRoutsId' =>$BusesRoutsId])
								->get('usc_buses_outofserveice');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }
			   

			 			   		  		 				 
			 		  			 	
	   		 	 
			 
   }
?>