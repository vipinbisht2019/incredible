<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_itinerarydetails extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	  
	 
// ---------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	
	       $this->load->model("admin/Tour_itinerarydetailsmanage");
		   if($this->input->post('flag')=='yes') 
		     {
					//echo '<pre>';print_r($_POST); die;

					error_reporting(0);
						$TourId=$this->input->post('TourId');
						$this->Tour_itinerarydetailsmanage->tour_itinerarydetail_delete($TourId);
						
						$time=$this->input->post('Time');
						$sightSeeing=$this->input->post('sightSeeing');
						$meal=$this->input->post('meal');
						$Description=$this->input->post('Description');
						$ItenaryDay=$this->input->post('itineraryDay');
						$ItenaryDay=$this->input->post('ItenaryDay');

						$times=$this->input->post('Times');
						$sightSeeings=$this->input->post('sightSeeings');
						$meals=$this->input->post('meals');
						$Descriptions=$this->input->post('Descriptions');
						$itineraryDays=$this->input->post('itineraryDays');
						$CityName=$this->input->post('CityName');

						
					
					  for($ii=0;$ii<count($sightSeeing);$ii++)
						   {
						        $data=array();								
								$data1=array();
								
							    $data['time']=$time[$ii];
								$data['sightSeeing']=$sightSeeing[$ii];
								$data['meal']=$meal[$ii];
								$data['Description']=$Description[$ii];						
								$data['ItenaryDay']=$ItenaryDay[$ii];
								$data['CityName']=$CityName[$ii];	
								$data['TourId']=$TourId;
								
								
								$id=$this->Tour_itinerarydetailsmanage->tour_itinerarydetails_add($data);
								
								if($id!=''){
									for($j=0;$j<count($sightSeeings);$j++)
									{
									$data1['times']=$times[$j];
									$data1['sightSeeings']=$sightSeeings[$j];
									$data1['meals']=$meals[$j];
									$data1['descriptions']=$Descriptions[$j];						
									$data1['itineraryDays']=$itineraryDays[$j];	
									$data1['s_info_id']=$id;
									$data1['TourId']=$TourId;
									
									$this->Tour_itinerarydetailsmanage->tour_itinerarydetails_moreadd($data1);
								}
							}
									
						}

							
							
							 if($this->input->post('smt_enter')!='')
							  {
							   $this->session->set_flashdata('Itinerary Details', 'Records updated successfully');
							   redirect(base_url('admin/tour_itinerarydetails/edit?TourId='.$TourId));
							  } 
							 else
							  {
								redirect(base_url('admin/tour_hotels/edit?TourId='.$TourId));
							  } 	
						
					        
				  
					  
		     }
	       else
		     {
		  
		 
						$TourId=$this->input->get('TourId');
						$data['TourId']=$TourId;
						$data['tour_no_day']=$this->Tour_itinerarydetailsmanage->tour_get_day($TourId);
						$data['sightseeinglist']=$this->Tour_itinerarydetailsmanage->sightseeinglist();
						$data['getDates'] = $this->Tour_itinerarydetailsmanage->getDates($TourId);
						$data['itinerary_details']=$this->Tour_itinerarydetailsmanage->tour_itinerary_detail($TourId);
						/*$data['sightseeinglist'] = $this->Tour_itinerarymanage->sightseeinglist($TourId);
						
						$data['country_list']=$this->Tour_itinerarymanage->country_list();
						$data['state_list']=$this->Tour_itinerarymanage->state_list();
						$data['city_list']=$this->Tour_itinerarymanage->city_list();*/
						$this->load->view('admin/tour_itinerarydetails_add',$data);
				
	        
		    }	
   }  

   public function sightMoreInfoEdit(){

		$this->load->model("admin/Tour_itinerarydetailsmanage");
		$id=$this->input->post('id');
		print_r($id); 

   }

  
  	 public function getStateList(){
			 	
				 	$this->load->model('admin/Tour_itinerarymanage');
					$data['state_list']=$this->Tour_itinerarymanage->getStateList();
			 		$this->load->view('admin/get_state_view',$data);
			 }
			 
	  public function getCityList(){
		
			$this->load->model('admin/Tour_itinerarymanage');
			$data['city_list']=$this->Tour_itinerarymanage->getCityList();
			$this->load->view('admin/get_city_view',$data);
	 }

	  
	
 }

?>
