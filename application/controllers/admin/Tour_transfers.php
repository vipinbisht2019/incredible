<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_transfers extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
 
	      $this->load->model("admin/Tour_transfersmanage")  ;
		  if($this->input->post('flag')=='yes') 
		     {
		
			        	$TourId=$this->input->post('TourId');
			            $this->Tour_transfersmanage->tour_transfer_delete($TourId);
				        $TransferName=$this->input->post('TransferName');
						$Description=$this->input->post('Description');
						$ItenaryDay=$this->input->post('ItenaryDay');
						$Images=$this->input->post('Images');
					   
		                 for($ii=0;$ii<count($TransferName);$ii++)
						   {
						            $data=array();
						   			$data['TransferName']=$TransferName[$ii];
									$data['Description']=$Description[$ii];
									$data['SetNumber']=$ItenaryDay[$ii];
									$data['TourID']=$TourId;
									//----------------------------------------------------------------------------------------------------
									 if($_FILES['SmallImage']['name'][$ii]!='')
									    {
							           
												$config['upload_path'] = './uploads/tourimage/';
												$config['allowed_types'] = 'gif|jpg|png|jpeg';
												$this->load->library('upload', $config);
													$_FILES['userfile']['name']     = $_FILES['SmallImage']['name'][$ii];
													$_FILES['userfile']['type']     = $_FILES['SmallImage']['type'][$ii];
													$_FILES['userfile']['tmp_name'] = $_FILES['SmallImage']['tmp_name'][$ii];
													$_FILES['userfile']['error']    = $_FILES['SmallImage']['error'][$ii];
													$_FILES['userfile']['size']     = $_FILES['SmallImage']['size'][$ii];
												
												$field_name = "userfile";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  @array_push($data['Images']=$uploadfile1,$uploadfile1);
													 } 
									    }
									 else
									  {
									       $uploadfile1=$Images[$ii];
									      @array_push($data['Images']=$uploadfile1,$uploadfile1);
									  }			
									//----------------------------------------------------------------------------------------------------	
								       $this->Tour_transfersmanage->tour_transfer_add($data);
							  }	
							
							 if($this->input->post('smt_enter')!='')
								      {
									     $this->session->set_flashdata('generalinfo', 'Records updated successfully');
								         redirect(base_url('admin/tour_generalinfo/view'));
									  } 
									 else
									  {
									     redirect(base_url('admin/tour_flight/edit?TourId='.$TourId));
									  } 		
					        
				  
					  
		     }
	       else
		     {
		  				$TourId=$this->input->get('TourId');
						$data['TourId']=$TourId;
						$data['itinerary_day']=$this->Tour_transfersmanage->tour_itinerary_transfer($TourId);
						$data['transfer_detail']=$this->Tour_transfersmanage->tour_transfer_edit($TourId);
				
						
						$this->load->view('admin/tour_transfer_add',$data);
			
			   }	
      }  

 }

?>
