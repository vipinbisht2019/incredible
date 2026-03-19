<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_inclusionexclusion extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
//----------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------- View ------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------
public function edit()
   {
	       $this->load->model("admin/Tour_inclusionexclusionsmanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
				   
							$data=$_POST;
							$data_Inc=$data['inclusion'];
							$data_Exc=$data['exclusion'];
							$data_note['InclusionNote']=$this->input->post('InclusionNote');
							$data_note['ExclusionNote']=$this->input->post('ExclusionNote');
							
						    $this->Tour_inclusionexclusionsmanage->inc_exc_insert_data($data_Inc, $data_Exc, $data_note, $this->input->post('TourId'));
							
							 if($this->input->post('smt_enter')!='')
								      {
									   $this->session->set_flashdata('generalinfo', 'Records updated successfully');
								       redirect(base_url('admin/tour_generalinfo/view'));
									  } 
									 else
									  {
									    redirect(base_url('admin/tour_itinerary/edit?TourId='.$this->input->post('TourId'))); 
									  } 
							
					 
					  
					  
		     }
	       else
		    {
		           $TourId=$this->input->get('TourId');
				   $this->load->model("admin/Tour_inclusionexclusionsmanage")  ;
		   	       $data['edit_inclusion']=$this->Tour_inclusionexclusionsmanage->inclusion_edit($this->input->get('TourId', TRUE));
				   $data['edit_exclusion']=$this->Tour_inclusionexclusionsmanage->exclusion_edit($this->input->get('TourId', TRUE));
				   $data['inclusion_exclusion']=$this->Tour_inclusionexclusionsmanage->inclusion_exclusion_view();
				   $data['edit_note']=$this->Tour_inclusionexclusionsmanage->note_edit($this->input->get('TourId', TRUE));
				   $data['TourId']=$TourId;
				   $this->load->view('admin/tourinclusionexclusion_add',$data);
	        
		  }	
    }  

	  
	
 }

?>
