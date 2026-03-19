<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busestype extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view(){
		       $this->load->model('admin/Busestypemanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/busestype/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Busestypemanage->get_tatal();
			//---------------------------- optional parameters of paging  ---------------------------------------------------	
				$config['full_tag_open'] = '<ul class="pagination pull-right">';
				$config['full_tag_close'] = '</ul>';
				$config['first_link'] = 'First';
                $config['first_tag_open'] = '<li>';
                $config['first_tag_close'] = '</li>';
				$config['last_link'] = 'Last';
                $config['last_tag_open'] = '<li>';
                $config['last_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';
				$config['next_link'] = 'Next &gt;';
				$config['next_tag_open'] = '<li>';
				$config['next_tag_close'] = '</li>';
				$config['prev_link'] = '&lt; Prev';
				$config['prev_tag_open'] = '<li>';
				$config['prev_tag_close'] = '</li>';
				$config['cur_tag_open'] = '<li class="active"><a href="#">';
                $config['cur_tag_close'] = '</a></li>';
				$this->pagination->initialize($config); 
	            $offset=$this->uri->segment(4);
				
		   $data['busestype']=$this->Busestypemanage->busestype_view($config['per_page'] , $offset);
		   $this->load->view('admin/busestype_view',$data);
		 
		   
		  
	  }
	  
// ------------------------------- Add funnctin add record  ------------------------------	
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
	    //echo"------------".$this->input->post('flag');
		// die();
		 
	if($this->input->post('flag')=='yes') 
		   {
		      
		/*	    echo"<pre>";
				  print_r($_POST);
				  echo"</pre>";
				  
				  die();
			    */
				error_reporting(0);
		   
		       // -------------------------- form vaildation --------------------------------------- CatId
		        $this->load->library('form_validation');
				//$this->form_validation->set_rules('TypeTitle', 'name', 'required');
				$this->form_validation->set_rules('CatId', 'category', 'required');
              //  $this->form_validation->set_rules('NumberOfSeats', 'number of seats', 'required');
				 $this->form_validation->set_rules('MapId', 'seat map', 'required');

		
				if($this->form_validation->run() == true) 
		             {

						   $this->load->model('admin/Busestypemanage');
							$data=$_POST;
							unset($data['flag']);
							unset($data['smt_enter']);
							unset($data['Amenties']);
							unset($data['Termscondition']);
							unset($data['Cancellation']);
						//------------------------------------- seat no data unset ----------------------------------------------	
							unset($data['DeckType1']);    
							unset($data['SeatNumber']);
							unset($data['SeatLocationID']);
							unset($data['IsLowerSleeper']);
							unset($data['DeckType2']);
							unset($data['SeatNumberSL']);
							unset($data['SeatLocationSLID']);  
					
							 
				//------------------------------------ check file select or not and upload -------------------------------------------
						 for($i = 0; $i <  count($_FILES['SmallImage']['name']); $i++) 
							 {
										if($_FILES['SmallImage']['name'][$i]!= '')
											{
												$config['upload_path'] = './uploads/bus/';
												$config['allowed_types'] = 'gif|jpg|png|jpeg';
												$this->load->library('upload', $config);
												
													$_FILES['userfile']['name']     = $_FILES['SmallImage']['name'][$i];
													$_FILES['userfile']['type']     = $_FILES['SmallImage']['type'][$i];
													$_FILES['userfile']['tmp_name'] = $_FILES['SmallImage']['tmp_name'][$i];
													$_FILES['userfile']['error']    = $_FILES['SmallImage']['error'][$i];
													$_FILES['userfile']['size']     = $_FILES['SmallImage']['size'][$i];
												
												
												$field_name = "userfile";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  if($i==0)
														    {
														      @array_push($data['Photo1']=$uploadfile1,$uploadfile1);
															}
														  elseif($i==1)
														   {
														       @array_push($data['Photo2']=$uploadfile1,$uploadfile1);
														   } 
														  elseif($i==2)
														   {
														       @array_push($data['Photo3']=$uploadfile1,$uploadfile1);
														   }
														    	   
													 } 
											 }
									   }	
					  //------------------------------------ END Upload ---------------------------------------------------
							
							$insert_id=$this->Busestypemanage->busestype_add($data);
							if($insert_id > 0)
							  {
									$Amenties=$this->input->post('Amenties');
									$Termscondition=$this->input->post('Termscondition');
									$Cancellation=$this->input->post('Cancellation');
									$this->Busestypemanage->busestype_utility($Amenties, $Termscondition, $Cancellation, $insert_id, 'no');
			//------------------------------------------------------------------------------- Add seat No lower deck-----------------------------------------------
								  
								  $MapId=$this->input->post('MapId');
								  $DeckType1=$this->input->post('DeckType1');
								  $SeatLocationIDArr=$this->input->post('SeatLocationID');
								  $SeatNumberArr=$this->input->post('SeatNumber');
								  $IsLowerSleeperArr=$this->input->post('IsLowerSleeper');
								
								  for($j=0;$j<count($SeatLocationIDArr);$j++) 
								     {
									    $data_1['TypeId']=$insert_id;
									    $data_1['MapId']=$MapId;
									    $data_1['DeckType']=$DeckType1;
									    $data_1['SeatNumber']=$SeatNumberArr[$j];
										$data_1['SeatLocationID']=$SeatLocationIDArr[$j];
										$location_id=$SeatLocationIDArr[$j];
										$data_1['IsLowerSleeper']=$IsLowerSleeperArr[$location_id];
										$this->Busestypemanage->buses_seatno_add($data_1);
									 }
	     //------------------------------------------------------------------------------------- Add seat No upper deck-----------------------------------------------
		                      
							                $DeckType2=$this->input->post('DeckType2');
									        if($DeckType2=='U')
											     {
									   
														   $SeatLocationSLIDArr=$this->input->post('SeatLocationSLID');
														   $SeatNumberSLArr=$this->input->post('SeatNumberSL');
												 		   for($j=0;$j<count($SeatLocationSLIDArr);$j++) 
																 {
																	$data_2['TypeId']=$insert_id;
																	$data_2['MapId']=$MapId;
																	$data_2['DeckType']=$DeckType2;
																	$data_2['SeatNumber']=$SeatNumberSLArr[$j];
																	$data_2['SeatLocationID']=$SeatLocationSLIDArr[$j];
																	$this->Busestypemanage->buses_seatno_add($data_2);
																 }
												  }					 
									
									$this->session->set_flashdata('busestype', 'Records added successfully');
									redirect(base_url('admin/busestype/view'));
							   }
						
					   }
					 else
					   {
							$this->load->model('admin/Busestypemanage');
							$data['dropdown_category']=$this->Busestypemanage->bus_category();
							$data['dropdown_ammenties']=$this->Busestypemanage->bus_ammenties();
							$data['dropdown_termscondition']=$this->Busestypemanage->bus_termscondition();
							$data['dropdown_cansllationcharge']=$this->Busestypemanage->bus_cansllationcharge();
							$data['dropdown_bustype']=$this->Busestypemanage->bus_seatmap();
							$this->load->view('admin/busestype_add',$data);
					   }  			
				
		     }
		   else
		     {
						$this->load->model('admin/Busestypemanage');
						$data['dropdown_category']=$this->Busestypemanage->bus_category();
						$data['dropdown_ammenties']=$this->Busestypemanage->bus_ammenties();
						$data['dropdown_termscondition']=$this->Busestypemanage->bus_termscondition();
						$data['dropdown_cansllationcharge']=$this->Busestypemanage->bus_cansllationcharge();
						$data['dropdown_bustype']=$this->Busestypemanage->bus_seatmap();
					    $this->load->view('admin/busestype_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------ 	 	  
public function edit()
   {
	       $this->load->model("admin/Busestypemanage")  ;
		   error_reporting(0);
		   $id=$this->input->post('id');
		    
	       if($this->input->post('flag')=='yes') 
		     {
						$this->load->library('form_validation');
						//$this->form_validation->set_rules('TypeTitle', 'name', 'required');
						$this->form_validation->set_rules('CatId', 'category', 'required');
						//$this->form_validation->set_rules('NumberOfSeats', 'number of seats', 'required');
						$this->form_validation->set_rules('MapId', 'seat map', 'required');
		
					if($this->form_validation->run() == true) 
					  {
				  
							 $data=$_POST;
							 unset($data['flag']);
							 unset($data['smt_enter']);
							 unset($data['id']);
							 unset($data['Amenties']);
							 unset($data['Termscondition']);
							 unset($data['Cancellation']);
							 		//------------------------------------- seat no data unset ----------------------------------------------	
							unset($data['DeckType1']);    
							unset($data['SeatNumber']);
							unset($data['SeatLocationID']);
							unset($data['IsLowerSleeper']);
							unset($data['DeckType2']);
							unset($data['SeatNumberSL']);
							unset($data['SeatLocationSLID']);  
							 
							 //------------------------------------ check file select or not and upload ------------
						 for($i = 0; $i <  count($_FILES['SmallImage']['name']); $i++) 
							 {
										if($_FILES['SmallImage']['name'][$i]!= '')
											{
												$config['upload_path'] = './uploads/bus/';
												$config['allowed_types'] = 'gif|jpg|png|jpeg';
												$this->load->library('upload', $config);
												
													$_FILES['userfile']['name']     = $_FILES['SmallImage']['name'][$i];
													$_FILES['userfile']['type']     = $_FILES['SmallImage']['type'][$i];
													$_FILES['userfile']['tmp_name'] = $_FILES['SmallImage']['tmp_name'][$i];
													$_FILES['userfile']['error']    = $_FILES['SmallImage']['error'][$i];
													$_FILES['userfile']['size']     = $_FILES['SmallImage']['size'][$i];
												
												
												$field_name = "userfile";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  if($i==0)
														    {
														      @array_push($data['Photo1']=$uploadfile1,$uploadfile1);
															}
														  elseif($i==1)
														   {
														       @array_push($data['Photo2']=$uploadfile1,$uploadfile1);
														   } 
														  elseif($i==2)
														   {
														       @array_push($data['Photo3']=$uploadfile1,$uploadfile1);
														   }
														   
													 } 
											 }
									   }	
					
						
					    //------------------------------------ END Upload ---------------------------------------------------
						
							 
							$this->Busestypemanage->busestype_edit_data($data,$id);
							$Amenties=$this->input->post('Amenties');
							$Termscondition=$this->input->post('Termscondition');
							$Cancellation=$this->input->post('Cancellation');
							$this->Busestypemanage->busestype_utility($Amenties, $Termscondition, $Cancellation, $id, 'yes');
							
	 //------------------------------------------------------------------------------- Add seat No lower deck-----------------------------------------------
						     $this->Busestypemanage->buses_seatno_delete($id); //first delete all data then insert again
						
								  
								  $MapId=$this->input->post('MapId');
								  $DeckType1=$this->input->post('DeckType1');
								  $SeatLocationIDArr=$this->input->post('SeatLocationID');
								  $SeatNumberArr=$this->input->post('SeatNumber');
								  $IsLowerSleeperArr=$this->input->post('IsLowerSleeper');
								
								  for($j=0;$j<count($SeatLocationIDArr);$j++) 
								     {
									    $data_1['TypeId']=$id;
									    $data_1['MapId']=$MapId;
									    $data_1['DeckType']=$DeckType1;
									    $data_1['SeatNumber']=$SeatNumberArr[$j];
										$data_1['SeatLocationID']=$SeatLocationIDArr[$j];
										$location_id=$SeatLocationIDArr[$j];
										$data_1['IsLowerSleeper']=$IsLowerSleeperArr[$location_id];
										$this->Busestypemanage->buses_seatno_add($data_1);
									 }
	     //------------------------------------------------------------------------------------- Add seat No upper deck-----------------------------------------------
		                      
							                $DeckType2=$this->input->post('DeckType2');
									        if($DeckType2=='U')
											     {
									   
														   $SeatLocationSLIDArr=$this->input->post('SeatLocationSLID');
														   $SeatNumberSLArr=$this->input->post('SeatNumberSL');
												 		   for($j=0;$j<count($SeatLocationSLIDArr);$j++) 
																 {
																	$data_2['TypeId']=$id;
																	$data_2['MapId']=$MapId;
																	$data_2['DeckType']=$DeckType2;
																	$data_2['SeatNumber']=$SeatNumberSLArr[$j];
																	$data_2['SeatLocationID']=$SeatLocationSLIDArr[$j];
																	$this->Busestypemanage->buses_seatno_add($data_2);
																 }
												  }		
							
							 
							 $this->session->set_flashdata('busestype', 'Records updated successfully');
							 redirect(base_url('admin/busestype/view'));
						 
					  }
					 else
					  {
							$data['edit_busestype']=$this->Busestypemanage->busestype_edit($id);
							$data['edit_amenties']=$this->Busestypemanage->busestype_amenties_edit($id);
							$data['edit_termcondition']=$this->Busestypemanage->busestype_termcondition_edit($id);
							$data['edit_cancellationpolicies']=$this->Busestypemanage->busestype_cancellationpolicies_edit($id);
							$data['dropdown_category']=$this->Busestypemanage->bus_category();
							$data['dropdown_ammenties']=$this->Busestypemanage->bus_ammenties();
							$data['dropdown_termscondition']=$this->Busestypemanage->bus_termscondition();
							$data['dropdown_cansllationcharge']=$this->Busestypemanage->bus_cansllationcharge();
							$data['dropdown_bustype']=$this->Busestypemanage->bus_seatmap();
							
							//--------------------------------------- seat map data fetch --------------------------------------------------
							
								$mapid=$data['edit_busestype'][0]['MapId'];
								$TypeId=$data['edit_busestype'][0]['TypeId']; // ------- bus id --------------
								$data['SeatTypeId_data']=$this->Busestypemanage->bus_seatmap_seattypeid($mapid);
								$DeckType1='L';
								$data['lower_deck_location_id']=$this->Busestypemanage->get_seatmap_location_id($mapid,$DeckType1);
								$DeckType2='U';
								$data['upper_deck_location_id']=$this->Busestypemanage->get_seatmap_location_id($mapid,$DeckType2);
						  //---------------------------------------- seat map edit data -----------------------------------------------------
						        $data['lower_deck_seatno']=$this->Busestypemanage->buses_seatno_edit($TypeId,$mapid,$DeckType1);
								$data['upper_deck_seatno']=$this->Busestypemanage->buses_seatno_edit($TypeId,$mapid,$DeckType2);
							
							
						    $this->load->view('admin/busestype_modify',$data);
					  } 	  
					  
		     }
	       else
		     {    
			                $id=$this->input->get('id');
							$this->load->model("admin/Busestypemanage")  ;
							$data['edit_busestype']=$this->Busestypemanage->busestype_edit($id);
							$data['edit_amenties']=$this->Busestypemanage->busestype_amenties_edit($id);
							$data['edit_termcondition']=$this->Busestypemanage->busestype_termcondition_edit($id);
							$data['edit_cancellationpolicies']=$this->Busestypemanage->busestype_cancellationpolicies_edit($id);
							$data['dropdown_category']=$this->Busestypemanage->bus_category();
							$data['dropdown_ammenties']=$this->Busestypemanage->bus_ammenties();
							$data['dropdown_termscondition']=$this->Busestypemanage->bus_termscondition();
							$data['dropdown_cansllationcharge']=$this->Busestypemanage->bus_cansllationcharge();
							$data['dropdown_bustype']=$this->Busestypemanage->bus_seatmap();
							//--------------------------------------- seat map data fetch --------------------------------------------------
							
								$mapid=$data['edit_busestype'][0]['MapId'];
								$TypeId=$data['edit_busestype'][0]['TypeId']; // ------- bus id --------------
								$data['SeatTypeId_data']=$this->Busestypemanage->bus_seatmap_seattypeid($mapid);
								$DeckType1='L';
								$data['lower_deck_location_id']=$this->Busestypemanage->get_seatmap_location_id($mapid,$DeckType1);
								$DeckType2='U';
								$data['upper_deck_location_id']=$this->Busestypemanage->get_seatmap_location_id($mapid,$DeckType2);
						  //---------------------------------------- seat map edit data -----------------------------------------------------
						        $data['lower_deck_seatno']=$this->Busestypemanage->buses_seatno_edit($TypeId,$mapid,$DeckType1);
								$data['upper_deck_seatno']=$this->Busestypemanage->buses_seatno_edit($TypeId,$mapid,$DeckType2);
										
							
							
							
						       $this->load->view('admin/busestype_modify',$data);
	        
		    }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Busestypemanage');
			$delete_sussess=$this->Busestypemanage->busestype_delete($_REQUEST['id'])  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('busestype', 'Records deleted successfully');
		       redirect(base_url('admin/busestype/view'));
		     }	
	        
	  }  
	  
	  
	     // ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
	     // ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
	  	 // ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------	
		 	  
     public function bulk_action()
	     {
		     
		       // ------------------------------- Bulk Action  delete  ------------------------------		  	 
				if($this->input->post('Delete')=='Delete')
				    {
					   //----------------------------------------------   
					     $delete_id=$this->input->post('bb');
						 if(count($delete_id)>0)
						  {
						
								$this->load->model('admin/Busestypemanage');
								foreach($delete_id as $id_str)
								  {
								     $delete_sussess=$this->Busestypemanage->admin_delete_bulk($id_str);
								  } 
								
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('busestype', 'Records deleted successfully');
									   redirect(base_url('admin/busestype/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('busestype', 'Nothing to delete');
									   redirect(base_url('admin/busestype/view'));
						   }			 
					   
					}
				  // ------------------------------- Bulk Action  deactivate   ------------------------------	 
				 if($this->input->post('Deactivate')=='Deactivate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						       
								$this->load->model('admin/Busestypemanage');
								$data['Status']='N';
								foreach($id as $id_str)
								  {
								   $delete_sussess=$this->Busestypemanage->admin_deactivate_bulk($id_str,$data);
								  } 
											
									   $this->session->set_flashdata('busestype', 'Records deactivate successfully');
									   redirect(base_url('admin/busestype/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('busestype', 'Nothing to activate');
									   redirect(base_url('admin/busestype/view'));
						   }			 
					}
			  // ------------------------------- Bulk Action activate  ------------------------------			
				if($this->input->post('Activate')=='Activate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						        
								$this->load->model('admin/Busestypemanage');
								$data['Status']='Y';
								foreach($id as $id_str)
								  {
								    $delete_sussess=$this->Busestypemanage->admin_activate_bulk($id_str,$data);
								  }
											
									   $this->session->set_flashdata('busestype', 'Records activated successfully');
									   redirect(base_url('admin/busestype/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('busestype', 'Nothing to activate');
									   redirect(base_url('admin/busestype/view'));
						   }			 
					}
		
		  }
		  
		  

	  public function seatmap()
		  {
		        	$this->load->model('admin/Busestypemanage');
		            $mapid=$this->input->post('mapid');
				    $data['SeatTypeId_data']=$this->Busestypemanage->bus_seatmap_seattypeid($mapid);
					$DeckType='L';
					$data['lower_deck_location_id']=$this->Busestypemanage->get_seatmap_location_id($mapid,$DeckType);
					$DeckType='U';
					$data['upper_deck_location_id']=$this->Busestypemanage->get_seatmap_location_id($mapid,$DeckType);
					
					
			   
		             $this->load->view('admin/buses_seatmap', $data);
			   
			   
			  
		  }  
		  
		  
	//---------------------------------------------------------- drop down ammenties -------------------------------------------------------	  
	  
	  
}

?>
