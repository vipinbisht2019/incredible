<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_infodetail extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 

// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/tour_infodetail_manage")  ;
		   
		  // print_r($_POST); die;
		   
		   
		   if($this->input->post('flag')=='yes') 
		     {
					
		
					$TourId=$this->input->post('tour_id');
					$data['tour_id'] = $TourId;
				  	$data['info_head']=$this->input->post('info_head');
				  	$data['description']=$this->input->post('description');
					$data['sortorder']=$this->input->post('sortorder');
					$data['info_type']=$this->input->post('info_type');
					
					
					$this->tour_infodetail_manage->tour_info_add($data);
					 
					
				
					  $this->session->set_flashdata('generalinfo', 'Records added successfully');	
					  redirect(base_url('admin/tour_generalinfo/view'));  //TourId='.$TourId
				  
					  
		      }
	        else
		     {
					$TourId=$this->input->get('TourId');
					$data['TourId']=$TourId;;
					 $data['edit_infodetail']=$this->tour_infodetail_manage->tour_info_edit($TourId);
					 $this->load->view('admin/tour_infodetails_add',$data);
				
			 }
		   
		    
	
   }  


	  
	
 }

?>
