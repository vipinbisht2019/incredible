<?php 
   /**
 
   */
   class Membersmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function members_add($data)
			 {
			  // Inserting in Table( usc_customer) of Database(usc)
			  
				 if($this->db->insert('usc_customer', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function members_view($limit,$offset)
			 {
			   // Updateing in Table( usc_customer) of Database(usc)
			    
				   $query = $this->db->get('usc_customer',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
	//------------------------------------Get toatal record in table for paging-----------------------------------------------------		
	       
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_customer');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 		 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function members_delete($id)
			 {
			   // Deleteing in Table( usc_customer) of Database(usc)
			    			  
					$this->db->where('user_id', $id);
					$this->db->delete('usc_customer');
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
	       
		    function members_edit($id)
			   {
			      // Deleteing in Table( usc_customer) of Database(usc)
			    			  
						$this->db->where('user_id', $id);
						$query = $this->db->get('usc_customer');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function members_edit_data($data,$id)
			  {
			     // Deleteing in Table( usc_customer) of Database(usc)
			    			  
						$this->db->where('user_id', $id);
						$query = $this->db->update('usc_customer',$data);
						$this->db->close();
			  } 		 	
	   // ---------------------------------- get main menu to view in drop down -------------------------------------------   

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
  
   // ---------------------------------- Import data -------------------------------------------  		  
			  
		public function uploadData($rid)
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
								   
								  if($this->check_duplicate($csv_line[0]))
								   {
							            $user_passwd=substr(@$csv_line[0],0,4).''.substr($csv_line[1],0,4);
					
										$insert_csv['ResionId'] = $rid;
										$insert_csv['MembershipNo'] =@$csv_line[0];  
										$insert_csv['user_loginid'] =@$csv_line[0]; 
										$insert_csv['user_passwd'] =@$user_passwd;
										$insert_csv['CompanyName'] = $csv_line[1];
										$insert_csv['user_address1'] = $csv_line[2];
										$insert_csv['user_city'] = $csv_line[3];
										$insert_csv['RepresentativeName'] = $csv_line[4];
										$insert_csv['user_phone'] = $csv_line[5];
										$insert_csv['ProductItem'] = $csv_line[6];
										$insert_csv['user_email'] = $csv_line[7];
								   }		
									
							}
							
							$i++;
							
							 if($this->check_duplicate($insert_csv['MembershipNo'])) 
								   {
							
							$data = array(
							
								'ResionId' => $insert_csv['ResionId'] ,
								'MembershipNo' => $insert_csv['MembershipNo'],
								'user_loginid' => $insert_csv['user_loginid'],
								'user_passwd' => $insert_csv['user_passwd'],
								'CompanyName' => $insert_csv['CompanyName'],
								'user_address1' => $insert_csv['user_address1'],
								'user_city' => $insert_csv['user_city'],
								'RepresentativeName' => $insert_csv['RepresentativeName'],
								'user_phone' => $insert_csv['user_phone'],
								'ProductItem' => $insert_csv['ProductItem'],
								'user_email' => $insert_csv['user_email'],
								'AddedDate' => date('Y-m-d')
								
								);
								
								}
								
								// echo"<pre>";
							     	//print_r($data);
							   //  echo"</pre>";
								
							$data['crane_features']=$this->db->insert('usc_customer', $data);
							
						}
						
						fclose($fp) or die("can't close file");
						$data['success']="success";
						return $data;
				}	
				
				
		 // -----------------------------check members already exist or not when add members --------------------------------
		 
		         function check_duplicate($userid)
			      {
			   								
						$q = $this->db->where(['user_loginid' => $userid])
								->get('usc_customer');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }		
					  
		// -----------------------------check members already exist or not when add edit --------------------------------	  	
		 
		       function check_duplicate_edit($userid,$mid)
			      {
			   								
						$q = $this->db->where(['user_loginid' => $userid,'user_id!=' => $mid])
								->get('usc_customer');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }			
	   
	   		 	 
			 
   }
   

?>