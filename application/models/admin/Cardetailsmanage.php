<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
   class Cardetailsmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function cardetails_add($data)
			 {
			  // Inserting in Table(usc_cardetails) of Database(usc)
			  
				 if($this->db->insert('usc_cardetails', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 }
  	  //-----------------------------------------add------------------------------------------------				  	 
	     public function car_agentscommission_add($data_1,$data_2,$CarId,$edit)
			      {
				     if($edit=='yes')
					  {
				     	$this->db->where('CarId', $CarId);
					    $this->db->delete('usc_car_commission');
					  }	
					
				     for($i=0;$i<count($data_1);$i++)
					   {
					        $data_4 = array('CommissionId'=>$data_1[$i],'CommissionPrice'=>$data_2[$i],'CarId'=>$CarId) ;
					        $this->db->insert('usc_car_commission', $data_4);
					   }
					   
					  
				 
				 }	
				 
		 //-----------------------Add car featutr -------------------------------------------------  
			   
			  public function car_feature_add($data_1,$car_id,$edit)
			      {
				     if($edit=='yes')
					  {
				     	$this->db->where('CarId', $car_id);
					    $this->db->delete('usc_car_carfeature');
					  }	
					
				     for($i=0;$i<count($data_1);$i++)
					   {
					        $data_2 = array('FeatureId'=>$data_1[$i],'CarId'=>$car_id) ;
					        $this->db->insert('usc_car_carfeature', $data_2);
					   }
					   
					  // $this->db->close();
				 
				 }	  
				 
         //-----------------------Add car termcondition  -------------------------------------------------  
			   
			  public function car_termcondition_add($data_2,$car_id,$edit)
			      {
				     if($edit=='yes')
					  {
				     	$this->db->where('CarId', $car_id);
					    $this->db->delete('usc_car_cartermscondition');
					  }	
					
				     for($i=0;$i<count($data_2);$i++)
					   {
					        $data_3 = array('TermsconditionID'=>$data_2[$i],'CarId'=>$car_id) ;
					        $this->db->insert('usc_car_cartermscondition', $data_3);
					   }
					   
					
				 
				 }	 		 
				 		 		 
       //------------------------------------view-----------------------------------------------------		
	       
		    function cardetails_view($limit,$offset)
			 {
			   // Updateing in Table(usc_cardetails) of Database(usc)
			    	$this->db->order_by("CarId ", "desc");
				   $query = $this->db->get('usc_cardetails',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_cardetails');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function cardetails_delete($id)
			 {
			   // Deleteing in Table(usc_cardetails) of Database(usc)
			    			  
					$this->db->where('CarId ', $id);
					$this->db->delete('usc_cardetails');
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
	       
		    function cardetails_edit($id)
			   {
			      // Deleteing in Table(usc_cardetails) of Database(usc)
			    			  
						$this->db->where('CarId ', $id);
						$query = $this->db->get('usc_cardetails');
						return $query->result_array();
						$this->db->close();
					
						
			  } 	
			  
			  //------------------------------- select agents permission to edit --------------------------------	
		 
		     function car_feature_edit($id)
			    {
			      // Deleteing in Table( usc_agents) of Database(usc)
							$this->db->select('FeatureId')	  
								     ->where('CarId', $id);
							$query = $this->db->get('usc_car_carfeature');
							$k=0;
						$data_array=array();
						foreach($query->result() as $val_1)
							{
							  $data_array[$k]=$val_1->FeatureId;
							  $k++;
							}
							return $data_array;
						//$this->db->close();
				}
				
				
				
			 function car_termsconditions_edit($id)
			    {
			      // Deleteing in Table( usc_agents) of Database(usc)
							$this->db->select('TermsconditionID')	  
								     ->where('CarId', $id);
							$query = $this->db->get('usc_car_cartermscondition');
							$k=0;
						$data_array=array();
						foreach($query->result() as $val_1)
							{
							  $data_array[$k]=$val_1->TermsconditionID;
							  $k++;
							}
							return $data_array;
						//$this->db->close();
				}  	   	 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function cardetails_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_cardetails) of Database(usc)
			    			  
						$this->db->where('CarId ', $id);
						$query = $this->db->update('usc_cardetails',$data);
						//$this->db->close();
			  } 
			  
		  //------------------------------- select agents permission to edit --------------------------------	
		 
		     function car_agentscommission_edit($id)
			    {
			         // Deleteing in Table( usc_agents) of Database(usc)
							$this->db->select('CommissionId,CommissionPrice')	  
								     ->where('CarId', $id);
							$query = $this->db->get('usc_car_commission');
							
						$data_array=array();
						foreach($query->result() as $val_1)
							{
							   $k=$val_1->CommissionId;
							   $data_array[$k]=$val_1->CommissionPrice;
							 
							}
							return $data_array;
						//$this->db->close();
				}    	   		 
	   	  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_cardetails) of Database(usc)
			    			  
					$this->db->where_in('CarId ', $id);
					$this->db->delete('usc_cardetails');
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
			   // Deleteing in Table(usc_cardetails) of Database(usc)
			    			  
					$this->db->where_in('CarId', $id1);
					$query = $this->db->update('usc_cardetails',$data);
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
			   // Deleteing in Table(usc_cardetails) of Database(usc)
			    			  
					$this->db->where_in('CarId ', $id1);
					$query = $this->db->update('usc_cardetails',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 	
			 
	 //------------------------------------------------------------------ Dropdown usc_cartourcategories ----------------------------------------------  
	 
	  public function dropdown_car_cat()
	    {
		     $this->db->select('carTourCategoriesId,carTourCategoriesName')
			          ->where('Status','Y')
					  ->order_by('carTourCategoriesName');
			  $query=$this->db->get('usc_cartourcategories');	
			  return $query->result_array();	
			  $this->db->close();  
		   
		}		 	 				 
			
		 //------------------------------------------------------------------ Dropdown usc_carmanufacturer----------------------------------------------  
	 
	  public function dropdown_car_manufacturer()
	    {
		     $this->db->select('carmanufacturerId,carmanufacturerName')
			          ->where('Status','Y')
					  ->order_by('carmanufacturerName');
			  $query=$this->db->get('usc_carmanufacturer');	
			  return $query->result_array();	
			  $this->db->close();  
		   
		}	
		
			 //------------------------------------------------------------------ Dropdown usc_carmanufacturer----------------------------------------------  
	 
	  public function dropdown_car_class()
	    {
		     $this->db->select('carclassId,carclassName')
			          ->where('Status','Y')
					  ->order_by('carclassName');
			  $query=$this->db->get('usc_carclass');	
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
			
			
			
		    //------------------------------------------------------------------ Dropdown usc_cartourcategories ----------------------------------------------  
	 
					  public function dropdown_car_feature()
						{
							 $this->db->select('FeatureId,FeatureName')
									  ->where('Status','Y')
									  ->order_by('FeatureName');
							  $query=$this->db->get('usc_temppofeature');	
							  return $query->result_array();	
							  $this->db->close();  
						   
						}	
						   
						   
						
						// ------------------------- select agent permission ------------------------------------------------- 
					
					 public function dropdown_car_termsconditions()
						  {
							$this->db->select('TermsconditionID,Title')
									 ->where('Status','Y')
									 ->order_by('Title');
							 $query= $this->db->get('usc_tempo_termscondition');
							 return  $query->result_array();
							 $this->db->close();             
						}
						 		  			 				 		  			 	
	   		 	 
			 
   }
?>