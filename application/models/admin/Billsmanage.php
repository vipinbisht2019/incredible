<?php 
   /**
 
   */
   class Billsmanage extends CI_Model
   {
      
      //------------------------------------view-----------------------------------------------------		
	       
			 public  function bills_view($limit,$offset)
						  {
						   // Updateing in Table(usc_customer_payments) of Database(usc)
						   
									$this->db->select('*');
									$this->db->from('usc_customer as cut');
									$this->db->limit($limit,$offset)
									$this->db->join('usc_customer_duepayments as pay', 'cut.user_id = pay.user_id','inner');
									$query = $this->db->get();
									return $query->result_array();
									$this->db->close();
										
						  } 
				 //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
			  public  function get_tatal()
						 {
						   // Updateing in Table(usc_flash) of Database(usc)
							
							   $query = $this->db->get('usc_customer_duepayments');
							   return $query->num_rows();
							   $this->db->close();
							
						 }  	 
	// --------------------------- Get comapany name -----------------------
				   
			  public  function get_member_info($id)
						   {
							  //  Table(usc_customer) of Database(usc)
									$this->db->select('CompanyName, MembershipNo'); 	  
									$this->db->where('user_id', $id);
									$query = $this->db->get('usc_customer');
									return $query->result_array();
									$this->db->close();
								
									
						  } 
	
	//-------------------------------- get region to import members---------------------------------------
						  
			function regions_dropdown_data()
			   {
			     // select menu to view in dropdown in Table(usc_menu) of Database(usc)
			    	    
						$this->db->select('RId,RegionsName');		  
						$this->db->where('Status', 'Y');
						$this->db->order_by("RegionsName", "asc");
						$query = $this->db->get('usc_regions');
						return $query->result_array();
						$this->db->close();
			     } 			  			  
   //-------------------------------- get Finacial year to import members bill---------------------------------			
   function finacial_year_dropdown_data()
			   {
			     // select menu to view in dropdown in Table(usc_menu) of Database(usc)
			    	    
						$this->db->select('FID,FinancialYear,Title');		  
						$this->db->where('Status', 'Y');
						$this->db->order_by("FID", "asc");
						$query = $this->db->get('usc_financial_year');
						return $query->result_array();
						$this->db->close();
			     } 				  
		      				  
			  
		 //-------------------------------------------  bills add ----------------------------------	  
	 
	public	function bills_add($data)
			 {
			  // Inserting in Table(usc_menu) of Database(usc)
			  
				 if($this->db->insert('usc_customer_duepayments', $data))
					 {
					   return  $insert_id = $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
			 } 	
			 
			 
			 
		     public function uploadData($fyear)
				{
						$count=0;
					
					$fp = fopen($_FILES['csv_file']['tmp_name'],'r') or die("can't open file");
				 	while (($line = fgets($fp, 1000)) !== FALSE) 
						{
						     $csv_line = str_getcsv($line, "\t");
						
							$count++;
							if($count == 1)
							{
								continue;
							}//keep this if condition if you want to remove the first row
							for($i = 0, $j = count($csv_line); $i < $j; $i++)
							{
								  
								   $insert_csv = array();
								   $UserArr = array();
							
						     	    $this->db->select('user_id'); 	  
									$this->db->where('MembershipNo', $csv_line[0]);
									$q = $this->db->get('usc_customer');
									$UserArr= $q->result_array();
							   
							   //echo"<pre>";
							    // print_r($UserArr);
							//echo"</pre>";
								
								$insert_csv['user_id'] =@$UserArr[0]['user_id'];   //remove if you want to have primary key,  
								$insert_csv['financialYear'] = $fyear;
								$insert_csv['AnnualSubAmount'] = $csv_line[2];
							
								$insert_csv['CGST'] = $csv_line[3];
								$insert_csv['SGST'] = $csv_line[4];
								$insert_csv['TotalAmount'] = $csv_line[5];
								$insert_csv['Arrear'] = $csv_line[6];
								$insert_csv['Advance'] = $csv_line[7];
								$insert_csv['TotalOutstandingDues'] = $csv_line[8];
									
							}
							$i++;
							
							
							
							$data = array(
							
								'user_id' => $insert_csv['user_id'] ,
								'financialYear' => $insert_csv['financialYear'],
								'AnnualSubAmount' => $insert_csv['AnnualSubAmount'],
								'CGST' => $insert_csv['CGST'],
								'SGST' => $insert_csv['SGST'],
								'TotalAmount' => $insert_csv['TotalAmount'],
								'Arrear' => $insert_csv['Arrear'],
								'Advance' => $insert_csv['Advance'],
								'TotalOutstandingDues' => $insert_csv['TotalOutstandingDues'],
								'PaymentDate' => date('Y-m-d')
								
								);
								
								//echo"<pre>";
								//print_r($data);
							//echo"</pre>";
								
							$data['crane_features']=$this->db->insert('usc_customer_duepayments', $data);
							
						}
						fclose($fp) or die("can't close file");
						$data['success']="success";
						return $data;
				}
				
		//------------------------------------------------- get member id -----------------------------------------------
		
		             	// --------------------------- Get comapany name -----------------------
				   
			  public  function get_member_id($id)
						   {
							  //  Table(usc_customer) of Database(usc)
									$this->db->select('user_id'); 	  
									$this->db->where('MembershipNo', $id);
									$query = $this->db->get('usc_customer');
									return $query->result_array();
									$this->db->close();
								
									
						  } 
			
			 
			  
			   	 
			 
   }
   

?>