<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leadstourspreview extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function preview()
	  {
		                        $this->load->model('admin/Leadtoursmanage');
	         					$LeadId=$this->input->get('lid');
								$TourId=$this->input->get('tid');
								$data['lid']=$LeadId;
								$data['tid']=$TourId;
			 // -------------------------- select lead deatils --------------------------------------
                                 $data['lead_info']=$this->Leadtoursmanage->get_leadinfo($LeadId);
             // --------------------------- select quotation log ------------------------------------ 
                                 $data['quotation_log']=$this->Leadtoursmanage->get_quotation_log_info($LeadId);                   
			 // 1. ----------------------------- select general info --------------------------------	     
						         $data['data_general_info']=$this->Leadtoursmanage->tourgeneral_select_info($TourId);
						         $data_image=$this->Leadtoursmanage->tour_select_images($TourId);
             // 2. -----------------------------  update price and destination ---------------------------------- 	
							     $data_location=$this->Leadtoursmanage->tours_location_select($TourId);  
             // 3. ----------------------------- inclusion & exclusion ----------------------------------
								 $data_inclusion=$this->Leadtoursmanage->inclusion_select($TourId);   
								 $data_exclusion=$this->Leadtoursmanage->exclusion_select($TourId);	 
		     // 4. -----------------------------  Itinerary ---------------------------------------------- 
								 $data_itinerary=$this->Leadtoursmanage->tour_itinerary_select($TourId);	
			 // 5. -----------------------------  Hotel ----------------------------------------
			                     $data_hotel=$this->Leadtoursmanage->tour_hotel_select($TourId);	 
			 // 6. -----------------------------  Sightseeings ---------------------------------
			                     $data_sightseeing=$this->Leadtoursmanage->tour_sightseeing_select($TourId);	
			 // 7. -----------------------------  Transfers -------------------------------------------	 
								 $data_transfer=$this->Leadtoursmanage->tour_transfer_select($TourId);
             // 8. -----------------------------  Flight ----------------------------------------------	 
								 $data_flight=$this->Leadtoursmanage->tour_flight_select($TourId);	
			 // 9. ------------------------------- Train -----------------------------------------------	
								 $data_train=$this->Leadtoursmanage->tour_train_select($TourId);
			 // 10. ------------------------------- Bus -------------------------------------------
			 					 $data_bus=$this->Leadtoursmanage->tour_bus_select($TourId);
             // 11. --------------- Costing ------------------------------------------------------------
												
		     // 12. ------------------------------- Cansllation Policy ------------------------------------------
								 $data_polc=$this->Leadtoursmanage->get_tour_cancellationpolicy($TourId);
								 $data_term=$this->Leadtoursmanage->get_tour_termconditions($TourId);

		                         $this->load->view('admin/leadtourpreview_view',$data);
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function send()
  {
		 
	if($this->input->post('flag')=='yes') 
		   {
		      // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('Subject', 'subject', 'required');
				$this->form_validation->set_rules('CCEmail', 'cc email', 'required');
				$this->form_validation->set_rules('MailContent', 'mail content', 'required');
				if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Leadtoursmanage');
							$data=$_POST;
							$LeadId=$this->input->post('LeadId');
						    $TourId=$this->input->post('TourId');
							unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Leadtoursmanage->insert_quotation_log($data);
							if($insert > 0)
							 {

							 	//----------------------- send email ------------------------------------------
							 	//----------------------- send email ------------------------------------------
                                    $data['Subject']=$this->input->post('Subject', TRUE);
									$data['CCEmail']=$this->input->post('CCEmail', TRUE);
									$data['MailContent']=$this->input->post('MailContent', TRUE);
									$message=$this->load->view('admin/leads_quotation_email',$data,TRUE);
								   
	                                $mail='ashish@us-creations.com,'.$data['CCEmail'];
	                                $fromemail='laxmikantsubodh14@gmail.com';
									$this->load->library('email');
									$config = array('mailtype' => 'html', 'charset'  => 'utf-8',  'priority' => '1');
									$this->email->initialize($config);
									$this->email->from($fromemail, 'MTA');
									$this->email->to($mail);
									$this->email->subject($data['Subject']);
									$this->email->message($message);
									$this->email->send();

                                 
                                //----------------------------------------------------------------------------- 
								$this->session->set_flashdata('leads', 'Quotation Send Successfully');
								redirect(base_url('admin/leadstourspreview/preview?tid='.$TourId.'&lid='.$LeadId));
							  }
						
					   }
					 else
					   {
					            $this->load->model('admin/Leadtoursmanage');
	         					$LeadId=$this->input->post('LeadId');
								$TourId=$this->input->post('TourId');
								$data['lid']=$LeadId;
								$data['tid']=$TourId;
			 // -------------------------- select lead deatils ------------------------------------------
                                 $data['lead_info']=$this->Leadtoursmanage->get_leadinfo($LeadId);
               // --------------------------- select quotation log ------------------------------------ 
                                 $data['quotation_log']=$this->Leadtoursmanage->get_quotation_log_info($LeadId);                  
			 // 1. ----------------------------- select general info ---------------------------------------	     
						         $data['data_general_info']=$this->Leadtoursmanage->tourgeneral_select_info($TourId);
						         $data_image=$this->Leadtoursmanage->tour_select_images($TourId);
             // 2. -----------------------------  update price and destination ---------------------------------- 	
							     $data_location=$this->Leadtoursmanage->tours_location_select($TourId);  
             // 3. ----------------------------- inclusion & exclusion ----------------------------------
								 $data_inclusion=$this->Leadtoursmanage->inclusion_select($TourId);   
								 $data_exclusion=$this->Leadtoursmanage->exclusion_select($TourId);	 
		     // 4. -----------------------------  Itinerary ---------------------------------------------- 
								 $data_itinerary=$this->Leadtoursmanage->tour_itinerary_select($TourId);	
			 // 5. -----------------------------  Hotel ----------------------------------------
			                     $data_hotel=$this->Leadtoursmanage->tour_hotel_select($TourId);	 
			 // 6. -----------------------------  Sightseeings ---------------------------------
			                     $data_sightseeing=$this->Leadtoursmanage->tour_sightseeing_select($TourId);	
			 // 7. -----------------------------  Transfers -------------------------------------------	 
								 $data_transfer=$this->Leadtoursmanage->tour_transfer_select($TourId);
             // 8. -----------------------------  Flight ----------------------------------------------	 
								 $data_flight=$this->Leadtoursmanage->tour_flight_select($TourId);	
			 // 9. ------------------------------- Train -----------------------------------------------	
								 $data_train=$this->Leadtoursmanage->tour_train_select($TourId);
			 // 10. ------------------------------- Bus -------------------------------------------
			 					 $data_bus=$this->Leadtoursmanage->tour_bus_select($TourId);
             // 11. --------------- Costing ------------------------------------------------------------
												
		     // 12. ------------------------------- Cansllation Policy ------------------------------------------
								 $data_polc=$this->Leadtoursmanage->get_tour_cancellationpolicy($TourId);
								 $data_term=$this->Leadtoursmanage->get_tour_termconditions($TourId);

		                         $this->load->view('admin/leadtourpreview_view',$data);
					   }  			
				
		     }
		   
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
	 

	  
	
	  
	  
}

?>
