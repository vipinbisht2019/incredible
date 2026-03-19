<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Transaction_page extends MY_model
  {
		
    //------------------------------select client info to insert ----------------------------------------			
	   public function client_info($userID)
		  {
				$this->db->where('user_id', $userID);
	   		    $query = $this->db->get('nuttyshoppers_customer');
				return $query->result_array();
				$this->db->close();  
		  }	
		//------------------------------------------- Insert data in order table-----------------------------------------------------------------------			 
	    //-----------------------------------------add------------------------------------------------			 
			function order_add($data)
			 {
			  // Inserting in Table( usc_agents) of Database(usc)
			  
				 if($this->db->insert('nuttyshoppers_order', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 }
	 // --------------------------------------- Add order tracking status ---------------------------------------------------------------------------------
	
	        function order_status_add($data)
			 {

			  
				 if($this->db->insert('nuttyshoppers_order_staus', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 }	
	 // --------------------------- get	cart data ----------------------------------------------------
	         
		public function get_cart_details($session_id)
		   {
		        $this->db->select('*');		  
				$this->db->where('SessionID', $session_id);
	   		    $query = $this->db->get('nuttyshoppers_cart');
				return $query->result_array();
				$this->db->close();
		      
		   }	
    // --------------------------- Insert item add to cart----------------------------------------------------		
	
	      function order_item_add($data)
			 {

			  
				 if($this->db->insert('nuttyshoppers_order_item', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 }	
			 
	//------------------------------------------------- Update cart user id=0 due to now it is order log  -----------------------------------------------------------------------
    //-------------------------------------------------  Update cart user id=0 due to now it is order log  ----------------------------------------------------------------------
	
	   function order_log_data($data,$sessionid)
			  {
			    
			    			  
						$this->db->where('SessionID', $sessionid);
						$query = $this->db->update('nuttyshoppers_cart',$data);
						//$this->db->close();
			  }
			  
	//------------------------------------------- get gst -----------------------------------------------------------------------------------------------------
	
				function get_vendor_price($pid,$qty)
				 {
				 
						$this->db->select('product_unit');		  
						$this->db->where('product_id', $pid);
						$query = $this->db->get('nuttyshoppers_products');
						$ProArr=$query->result_array();
						return $ProArr[0]['product_unit'];
						$this->db->close();
				
				 
				 }	
			//----------------------------------vendor gst ---------------------------	 
			public function get_vendor_gst($totalVendorPrice)
			 {
					$GST=18;
					$GSTdiv=100+$GST;  
					
					$ProductGST=$totalVendorPrice*$GST/$GSTdiv;
					$ProductGST=round($ProductGST, 2);
					
					return $ProductGST;
					
			  
			 } 	 	  
						  
///////////////////////////////////////////////////////////////// if order submit type cod ////////////////////////////////////////////////////////////////		  
//////////////////////////////////////////////////////////////// Goes function here //////////////////////////////////////////////////////////////////////	  
//------------------------------------- delete order status ---------------------------------------------------------------------------------------------
		
		 function delete_order_staus($ResTrackID)
			 {
			     
						 	$q= "DELETE FROM `nuttyshoppers_order_staus` WHERE `OrderID` = '".$ResTrackID."'";
		
								$this->db->query($q);
						
							   $this->db->close();  
						
			 } 		 
	//----------------------------------------------------- status session_user  ----------------------------------------------
	
	   function update_order_status($data,$order_id, $userID)
			  {
			     	 $this->db->where('order_id', $order_id);
					 $this->db->where('user_loginid', $userID);
					 $query = $this->db->update('nuttyshoppers_order',$data);
						
			  }
			 
	//----------------------------------------- Stock-------------------------------------------------------------------------
	            function get_ordered_item_stock($ResTrackID)
				 {
				 
						$this->db->select('*');		  
						$this->db->where('order_id', $ResTrackID);
						$query = $this->db->get('nuttyshoppers_order_item');
						foreach($query->result_array() as $val)
						  {
						      $ProductSizeID=$val['Size'];
							     
								$this->db->select('Quantity');		  
								$this->db->where('ProductSizeID', $ProductSizeID);
								$updQty = $this->db->get('nuttyshoppers_product_size');
								   foreach($updQty->result_array() as $szval)
						             {
										$currentQuantity=$szval['Quantity'];
										$newCurrentQuantity=$currentQuantity - $val['order_qty'];
										$data_sz['Quantity']=$newCurrentQuantity;
										$this->db->where('ProductSizeID', $val['Size']);
										$query = $this->db->update('nuttyshoppers_product_size',$data_sz);
									}
								//---------------------------------multiple size ------------------------------------------------------------
								//---------------------------------multiple size ------------------------------------------------------------
							      $ProductID=$val['product_id'];	
								   $this->db->select('*');		  
								   $this->db->where('ProductId', $ProductID);
								   $this->db->where('order_id', $ResTrackID);
								  $updMultipleQty = $this->db->get('nuttyshoppers_item_size');
								  foreach($updMultipleQty->result_array() as $sz_mulval)
						             {
									                   $Size_id=$sz_mulval['Size_id'];
											
														$this->db->select('Quantity');		  
														$this->db->where('ProductSizeID', $Size_id);
														$updUpdate_mulQty = $this->db->get('nuttyshoppers_product_size');
											            $Mul_size_array=$updUpdate_mulQty->result_array();
											
											                $currentQuantity1=$Mul_size_array[0]['Quantity'];
															$newCurrentQuantity1=$currentQuantity1 - $sz_mulval['order_qty'];
															
															$data_mulsz['Quantity']=$newCurrentQuantity1;
															$this->db->where('ProductSizeID', $sz_mulval['Size_id']);
															$query = $this->db->update('nuttyshoppers_product_size',$data_mulsz);
	                                    }
									//---------------------------------multiple size ------------------------------------------------------------		
							  	   //---------------------------------multiple size ------------------------------------------------------------
						     
						  
						  }
						
						
						
				}	
	 	 //------------------------------ single type size quantity ----------------------------------		
		 //----------------------------------   finaly delete item form cart   ------------------------------------------------
		 
					   function delete_cart_items($session_id)
							 {
									$this->db->where('SessionID', $session_id);
									$this->db->delete('nuttyshoppers_cart');
									$this->db->last_query();
									if($this->db->affected_rows())	
										  {
											 return 1;
										  }
										else
										 {
											  return 0;
										 }  
							} 	
				//------------------------------ cart item size ------------------------------------
				
				       function delete_cart_items_size($session_id)
							 {
								
										 
										 
								$q= "DELETE FROM `nuttyshoppers_cart_size` WHERE `SessionID` = '".$session_id."'";
		
								$this->db->query($q);
						
							   $this->db->close();
							} 	
							
		//-----------------------------------------------------------------------------------------------------------------------
		//-------------------------------------------- update order -------------------------------------------------------------
			
			    function update_data($data1,$order_id,$cid)
					  {
						//print_r($data1); 
						$this->db->where('order_id', $order_id);
						$this->db->where('user_loginid', $cid);
						$query = $this->db->update('nuttyshoppers_order',$data1);
						//echo $this->db->last_query(); exit;
						$this->db->close();
					   } 				
							
    //---------------------------------------------------------------------------------------------------------------------------			
			 public function customer_deatils($id)
				{
					   
							$this->db->select('*');	  
							$this->db->where('user_id', $id);
							$query = $this->db->get('nuttyshoppers_customer');
							return $query->result_array();
							$this->db->close(); 
				   
				   
				   }  
	 //--------------------------------------------------------------------------------------------------------------------------------		
	          
			/* public function get_cart_details($session_id)
				 {
						$this->db->select('*');	
						$this->db->from('nuttyshoppers_order as order');	
						$this->db->join("nuttyshoppers_products_category as inpc", "cart.ProductID=inpc.product_id", 'INNER');
						$this->db->join("nuttyshoppers_categories as cat", "cat.category_id=inpc.category_id", 'INNER');
						$this->db->join('nuttyshoppers_product_size as size','cart.Size=size.ProductSizeID','LEFT');
						$this->db->where('SessionID', $session_id);
						
						$query = $this->db->get();
						return $query->result_array();
						$this->db->close();
					  
				   }	*/
				   
				 		 
			public function success_text()
		       {
			   
					$this->db->select('*');		  
					$this->db->where('page_id', '145');
					$query = $this->db->get('nuttyshoppers_static_pages');
					return $query->result_array();
					$this->db->close();
			
			   } 	 
			   
			   public function delete_cart_data($sessionid){
			 
			   
			   		$q= "DELETE FROM `nuttyshoppers_cart` WHERE `SessionID` = '".$sessionid."'";
					
					$this->db->query($q);
		
			   $this->db->close();
		
			   
			   
			   }
			        
											
				
				 				           	  		 	 
    
}

?>