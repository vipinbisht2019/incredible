<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_sightseeing extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 


// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
 
	      $this->load->model("admin/Tour_sightseeingmanage")  ;
		  if($this->input->post('flag')=='yes') 
		     {
		
			        	$TourId=$this->input->post('TourId');
			            $this->Tour_sightseeingmanage->tour_itinerary_delete($TourId);
				        $SightName=$this->input->post('SightName');
						$Description=$this->input->post('Description');
						$ItenaryDay=$this->input->post('ItenaryDay');
						$Images=$this->input->post('Images');
					   
		                 for($ii=0;$ii<count($SightName);$ii++)
						   {
						            $data=array();
						   			$data['SightName']=$SightName[$ii];
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
								       $this->Tour_sightseeingmanage->tour_itinerary_add($data);
							  }	
							
							 if($this->input->post('smt_enter')!='')
								      {
									     $this->session->set_flashdata('generalinfo', 'Records updated successfully');
								         redirect(base_url('admin/tour_generalinfo/view'));
									  } 
									 else
									  {
									     //redirect(base_url('admin/tour_transfers/edit?TourId='.$TourId));
										 redirect(base_url('admin/tour_termscondition/edit?TourId='.$TourId));
										 
										 
									  } 			
					        
				  
					  
		     }
	       else
		     {
		  				$TourId=$this->input->get('TourId');
						$data['TourId']=$TourId;
						$data['itinerary_day']=$this->Tour_sightseeingmanage->tour_itinerary_sight($TourId);
						$data['sightseeing_detail']=$this->Tour_sightseeingmanage->tour_sightseeing_edit($TourId);
						$this->load->view('admin/tour_sightseeing_add',$data);
			
			   }	
      }  

 }

?>
