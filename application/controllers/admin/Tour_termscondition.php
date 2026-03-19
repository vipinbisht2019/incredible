<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_termscondition extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
 
	      $this->load->model("admin/Tour_termsconditionsmanage")  ;
		  if($this->input->post('flag')=='yes') 
		     {
	
		
					  $TourId=$this->input->post('TourId');
					  $data_term=$this->input->post('terms_condition');
					  $data_polc=$this->input->post('CancellationID');
					  $data_board=$this->input->post('BoardingId');
					  $data_PickUpTime=$this->input->post('PickUpTime');
				
					  $this->Tour_termsconditionsmanage->terms_polc_insert_data($data_term, $data_polc, $data_board, $data_PickUpTime, $TourId);
					  $data['ConditionsNote']=$this->input->post('ConditionsNote');
					  $data['CancellationNote']=$this->input->post('CancellationNote');
					  $data['LocationMap']=$this->input->post('LocationMap');
					  $this->Tour_termsconditionsmanage->terms_polcnote_edit_data($data,$TourId);
					//-----------------------------------------------Agents commission-----------------------------------------------------------------  
					  $data_11=$this->input->post('commission_id');
					  $data_12=$this->input->post('CommissionPrice');
					  $this->Tour_termsconditionsmanage->tour_agentscommission_add($data_11,$data_12,$TourId,'yes');
				
					  $this->session->set_flashdata('generalinfo', 'Records added successfully');	
					  redirect(base_url('admin/tour_generalinfo/view'));  //TourId='.$TourId
				  
					  
		      }
	        else
		     {
					$TourId=$this->input->get('TourId');
					$data['TourId']=$TourId;
					$data['terms_condition']=$this->Tour_termsconditionsmanage->get_termscondition();
					$data['cancellationpolicy']=$this->Tour_termsconditionsmanage->get_cancellationpolicy();
					$data['boardingpoint']=$this->Tour_termsconditionsmanage->get_boardingpoint();
					$data['tour_termconditions']=$this->Tour_termsconditionsmanage->get_tour_termconditions($TourId);
					$data['tour_cancellationpolicy']=$this->Tour_termsconditionsmanage->get_tour_cancellationpolicy($TourId);
					$data['tour_notes']=$this->Tour_termsconditionsmanage->get_tour_notes($TourId);
					$data['tour_boardingpoint']=$this->Tour_termsconditionsmanage->get_tour_boardingpoint($TourId);
					
					$data['commission_type']=$this->Tour_termsconditionsmanage->get_commission();
					$data['commission_type_edit']=$this->Tour_termsconditionsmanage->tour_agentscommission_edit($TourId);
					
					$this->load->view('admin/tour_termscondition_add',$data);
			
			 }	
      }  

}

?>
