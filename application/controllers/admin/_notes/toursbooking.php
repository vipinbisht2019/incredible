<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toursbooking extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Toursbookingmanage');
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/toursbooking/view');
				$config['per_page'] = 30; 
				$config['total_rows'] =$this->Toursbookingmanage->get_tatal();
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
				
			    $data['toursbooking']=$this->Toursbookingmanage->toursbooking_view($config['per_page'] , $offset);
				$data['tours_list']=$this->Toursbookingmanage->tours_list_dropdown();
				
			    $this->load->view('admin/toursbooking_view',$data);
		 
		  
		  
	  }
	  
	  //---------------------------------------------------------- listing ------------------------------------------------	
 //---------------------------------------------------------- listing ------------------------------------------------	 
 
 	public function search()
	  {
	         error_reporting(0);
		   
	      		 $EndDateStr='';
				 $StartDateStr='';
			     $TourId=$this->input->post('TourId');
			     $StartDate=$this->input->post('StartDate');
				 if($StartDate!='') { $StartDateArr=explode("-",$StartDate);  $StartDateStr=$StartDateArr['2']."-".$StartDateArr['1']."-".$StartDateArr['0']; }
			     $EndDate=$this->input->post('EndDate');
				 if($EndDate!='') { $EndDateArr=explode("-",$EndDate);  $EndDateStr=$EndDateArr['2']."-".$EndDateArr['1']."-".$EndDateArr['0']; }
		        
				
			
			    $this->load->model('admin/Toursbookingmanage');
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/toursbooking/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Toursbookingmanage->get_tatal_search($TourId,$StartDateStr,$EndDateStr);
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
	            $offset=$this->uri->segment(3);
				$data['toursbooking']=$this->Toursbookingmanage->toursbooking_view_serch($config['per_page'], $offset, $TourId, $StartDateStr,$EndDateStr);
				$data['tours_list']=$this->Toursbookingmanage->tours_list_dropdown();
				$this->load->view('admin/toursbooking_view',$data);
		 
		  
		  
	  }  
	  

	  public function toursbookingdetails()
	     {
	  	        $this->load->model('admin/Toursbookingmanage');
	  	        $bid = $this->uri->segment(4);
                $data['toursbooking_details']=$this->Toursbookingmanage->tourdetails($bid);
                $this->load->view('admin/toursbooking_detail',$data);
        }

  	  public function tourticketprint()
	     {
	  	        $this->load->model('admin/Toursbookingmanage');
	  	        $bid = $this->uri->segment(4);
                $data['toursbooking_details']=$this->Toursbookingmanage->tourdetails($bid);
				$AgentId=$data['toursbooking_details'][0]['AgentId'];
				$data['AgentId']=$AgentId;
				$data['agent_info']=$this->Toursbookingmanage->get_agent_info($AgentId);
			
				 $this->load->view('admin/tourticketprint-view',$data);
        }


//Cancel Tour Booking ############################


	public function toursbookingcancle()
		{
		     if($this->input->post('flag')=='yes') 
				{
							$data=$_POST;
							unset($data['flag']);
							unset($data['BookingId']);
							$BookingId=$this->input->post('BookingId');	 
							$this->load->model('Toursbookingmanage');
							$this->Toursbookingmanage->tourbooking_cancel_data($data,$BookingId);
						  
						    $this->session->set_flashdata('booking', 'Your booking cancelled successfully.');
							redirect(base_url('admin/toursbooking/view'));
				  
				   
			   
			   }
		     else
			   {
		  				   // $data=$this->comman_data();
							$this->load->model('admin/Toursbookingmanage');
							$bid = $this->uri->segment(4);
							$data['toursbooking_details']=$this->Toursbookingmanage->tourdetails($bid);
							$TourId=$data['toursbooking_details'][0]['TourId']; // --------------------------------------- Tours Id
							$DepartureDate=$data['toursbooking_details'][0]['DepartureDate']; // --------------------------------------- DepartureDate 
							$DepartureTime=$data['toursbooking_details'][0]['DepartureTime']; // --------------------------------------- DepartureDate 
							$BusFare=$data['toursbooking_details'][0]['BusFare']; // --------------------------------------------------- Total Bus Fare
							$TotalPrice=$data['toursbooking_details'][0]['TotalPrice']; // --------------------------------------------- Pickup charges
							$TotalGst=$data['toursbooking_details'][0]['TotalGst']; 
							if($TotalGst==0)
							   {
								  $TotalGst=($BusFare+$TotalPrice)*5/100;
							   }
						//-------------------------------------------- get total fare ------------------------------------------------------------------
							   $totalfare=$BusFare+$TotalPrice+$TotalGst;  // Total fare busfare+pickupcharges+GST 
							   $current_date = date('Y-m-d');   
							   $current_date = date('H:i');

							

						 if(strtotime($DepartureDate) >= strtotime($current_date) && $data['toursbooking_details'][0]['BookingStatus']=='B')   // if customeres go for cancllation then departure date is always gerater then or equal to current date and also confirm booking
								{


										   $data['canllation_max_day']=$this->Toursbookingmanage->tours_canllation_charges_day($TourId);
											// echo"<pre>";
											   //print_r($data['canllation_max_day']);
											// echo"</pre>";
											$maxend_time=$data['canllation_max_day'][0]['EndTime']; 
											$DepartureDateday1 = strtotime($DepartureDate); // booking departure date    
											$current_dateday2 = strtotime($current_date);
											$TotalDays = ceil(($DepartureDateday1 - $current_dateday2) / (60*60*24));
										if($TotalDays==0)
											  {
												$data['canllation_charges_hours']=$this->Toursbookingmanage->tours_canllation_charges_hours($TourId);
												$DetectAmount=$data['canllation_charges_hours'][0]['DetectAmount']  ;
												$CansllationCharges=$totalfare*$DetectAmount/100;
												$RefundAmount=$totalfare-$CansllationCharges; 
											  }	
										   if($TotalDays==1)
											  {
												   /* $current_date=date('H:i'); 
													$DepartureTimeArr=explode(" ",$DepartureTime);
													 print_r($DepartureTimeArr);
													 if(strtolower($DepartureTimeArr[1])=='pm')
													   {
														  $DepTime=$DepartureTimeArr[1]+12;
													   }
													 */
													  $data['canllation_charges_hours']=$this->Toursbookingmanage->tours_canllation_charges_hours($TourId);
													  $DetectAmount=$data['canllation_charges_hours'][0]['DetectAmount']  ;
													  $CansllationCharges=$totalfare*$DetectAmount/100;
													  $RefundAmount=$totalfare-$CansllationCharges; 
												  
											   }	
											 elseif($TotalDays > 1 && $TotalDays<=$maxend_time)
											   {
												   $data['canllation_charges']=$this->Toursbookingmanage->tours_canllation_charges_day($TourId);
												   foreach($data['canllation_charges'] as $charge)
													 {
														$StartTime= $charge['StartTime'];
														$EndTime=  $charge['EndTime'];
														if($StartTime<=$TotalDays && $EndTime>=$TotalDays)
														 {
																$DetectAmount=$charge['DetectAmount'];  
																$CansllationCharges=$totalfare*$DetectAmount/100;
																$RefundAmount=$totalfare-$CansllationCharges;
																break;
														 }
													  }	 
												
											  } 
											 elseif($TotalDays > $maxend_time) 
											  {
												   $CansllationCharges=0;
												   $RefundAmount=$totalfare;
											  }
											  
										$data_1['BookingStatus']='C';
										$data_1['AgentCommission']=0;
										$data_1['CancellationCharges']=$CansllationCharges;
										$data_1['RefundAmount']=$RefundAmount;
										$data_1['CancellationDateTime']=date('Y-m-d H:i:s');
										$data['cancellation_amount']=$data_1;
										$this->load->view('admin/db_tour_cancel',$data);
								}
							  else
								{
									 $this->session->set_flashdata('booking', 'You can not cancel this booking please call customer care.');
									 redirect(base_url('admin/toursbooking/view'));
								}
								
			      }
					
	   
	   }  

	 // 

	  
}

?>
