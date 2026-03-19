<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
    */
class Busesroutesmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function busesroutes_add($data)
			  {
			      // Inserting in Table(usc_buses_routes) of Database(usc)
			  
				 if($this->db->insert('usc_buses_routes', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 } 	 
			 
		 //-----------------------------------------add------------------------------------------------				  	 
	     public function buses_agentscommission_add($data_1,$data_2,$RoutesId,$edit)
			      {
				     if($edit=='yes')
					  {
				     	$this->db->where('RoutesId', $RoutesId);
					    $this->db->delete('usc_buses_routescommission');
					  }	
					
				     for($i=0;$i<count($data_1);$i++)
					   {
					        $data_4 = array('CommissionId'=>$data_1[$i],'CommissionPrice'=>$data_2[$i],'RoutesId'=>$RoutesId) ;
					        $this->db->insert('usc_buses_routescommission', $data_4);
					   }
					   
					  
				 
				 }		 
			 
			 //----------------------- Add Route City -------------------------------------------------  
			   
			  public function busesroutes_stop_add($data_1,$routes_id,$edit)
			      {
				     if($edit=='yes')
					  {
				     	$this->db->where('RoutesId', $routes_id);
					    $this->db->delete('usc_buses_routes_city');
					  }	
					
				     for($i=0;$i<count($data_1);$i++)
					   {
					      if($data_1[$i]>0)
						   {
						    $data_2 = array('CityId'=>$data_1[$i],'RoutesId'=>$routes_id,'StopNo'=>$i+1) ;
					        $this->db->insert('usc_buses_routes_city', $data_2);
						   }	
					   }
					   
					   $this->db->close();
				 
				 }		  	    
       //------------------------------------view-----------------------------------------------------		
	       
		    function busesroutes_view($limit,$offset)
			  {
			   // Updateing in Table(usc_buses_routes) of Database(usc)
			    	$this->db->order_by("RoutesId", "desc");
				    $query = $this->db->get('usc_buses_routes',$limit,$offset);
                    return $query->result_array();
                    $this->db->close();
			  } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_buses_routes');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function busesroutes_delete($id)
			 {
			   // Deleteing in Table(usc_buses_routes) of Database(usc)
			    			  
					$this->db->where('RoutesId', $id);
					$this->db->delete('usc_buses_routes');
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
	       
		    function busesroutes_edit($id)
			   {
			      // Deleteing in Table(usc_buses_routes) of Database(usc)
			    			  
						$this->db->where('RoutesId', $id);
						$query = $this->db->get('usc_buses_routes');
						return $query->result_array();
						$this->db->close();
					
						
			  } 
		  //------------------------------------edit view-----------------------------------------------------		
	       
		    function busesroutes_city_edit($id)
			   {
			      // Deleteing in Table(usc_buses_routes) of Database(usc)
			    			  
						$this->db->where('RoutesId', $id);
						$query = $this->db->get('usc_buses_routes_city');
										
					    $k=0;
						
						$data_array=array();
					  
						
						foreach($query->result() as $val_1)
							{
							  $data_array[$k]=$val_1->CityId;
							  $k++;
							}
							return $data_array;
					
						
			  }	
			
			  //------------------------------- select agents permission to edit --------------------------------	
		 
		     function buses_agentscommission_edit($id)
			    {
			         // Deleteing in Table( usc_agents) of Database(usc)
							$this->db->select('CommissionId,CommissionPrice')	  
								     ->where('RoutesId', $id);
							$query = $this->db->get('usc_buses_routescommission');
							
						$data_array=array();
						foreach($query->result() as $val_1)
							{
							   $k=$val_1->CommissionId;
							   $data_array[$k]=$val_1->CommissionPrice;
							 
							}
							return $data_array;
						//$this->db->close();
				}    	   		 
	   	  
			    		  		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function busesroutes_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_buses_routes) of Database(usc)
			    			  
						$this->db->where('RoutesId', $id);
						$query = $this->db->update('usc_buses_routes',$data);
						//$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_buses_routes) of Database(usc)
			    			  
					$this->db->where_in('RoutesId', $id);
					$this->db->delete('usc_buses_routes');
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
			   // Deleteing in Table(usc_buses_routes) of Database(usc)
			    			  
					$this->db->where_in('RoutesId', $id1);
					$query = $this->db->update('usc_buses_routes',$data);
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
			   // Deleteing in Table(usc_buses_routes) of Database(usc)
			    			  
					$this->db->where_in('RoutesId', $id1);
					$query = $this->db->update('usc_buses_routes',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
			} 
			
				//-------------------------------------------------  Dropdown ---------------------------------------------------------	   	
		
		   public function dropdown_location()
		      {
			     $this->db->select('CityId,CityName')
				          ->where('Status','Y');
					$query=$this->db->get('usc_buses_city');
					return $query->result_array();
					$this->db->close();
					  
			  
			  }	   
			  
			  		
	  		// ------------------------- select agent permission ------------------------------------------------- 	 
			 	 				 
	public function get_commission()
		  {
		      $this->db->select('CommissionId,CommissionTitle')
			           ->where('Status','Y')
					   ->order_by('CommissionId');
		       $query = $this->db->get('usc_agents_commission');	
			   return $query->result_array();
			   $this->db->close();		   
		  	}		
			 
			 	 				 
			 		  			 	
	   		 	 
			 
   }
?>