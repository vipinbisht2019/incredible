<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_quotedetial extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 

// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Tour_quotedetail_manage")  ;
		   
		  // print_r($_POST); die;
		   
		   
		   if($this->input->post('flag')=='yes') 
		     {
					
		
					$TourId=$this->input->post('tour_id');
					$data['tour_id'] = $TourId;
				  	$data['quotes_head']=$this->input->post('quotes_head');
				  	$data['quotes_price']=$this->input->post('quotes_price');
					$data['sortorder']=$this->input->post('sortorder');
					$data['quotes_type']=$this->input->post('quotes_type');
					
					
					$this->Tour_quotedetail_manage->tour_quotes_add($data);
					 
					
				
					  $this->session->set_flashdata('Quotes Details', 'Records added successfully');	
					  redirect(base_url('admin/tour_generalinfo/view'));  //TourId='.$TourId
				  
					  
		      }
	        else
		     {
					$TourId=$this->input->get('TourId');
					$data['TourId']=$TourId;;
					 $data['edit_infodetail']=$this->Tour_quotedetail_manage->tour_quotes_edit($TourId);
					 $this->load->view('admin/tour_quotes_add',$data);
				
			 }
		   
		    
	
   }  


	  
	
 }

?>
