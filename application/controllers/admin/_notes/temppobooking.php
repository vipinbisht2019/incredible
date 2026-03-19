<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temppobooking extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Temppobookingmanage');
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/temppobooking/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Temppobookingmanage->get_tatal();
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
			    $data['carsbooking']=$this->Temppobookingmanage->tempobooking_view($config['per_page'] , $offset);
			    $this->load->view('admin/tempobooking_view',$data);
		 
		  
	  }
	  
	// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function search()
	  {
	   
		         $DepartureDateStr='';
				 $BookingDateStr='';
			     $keyword=$this->input->post('keyword');
			     $DepartureDate=$this->input->post('DepartureDate');
				 if($DepartureDate!='') { $DepartureDateArr=explode("/", $DepartureDate);  $DepartureDateStr=$DepartureDateArr['2']."-".$DepartureDateArr['0']."-".$DepartureDateArr['1']; }
			     $BookingDate=$this->input->post('BookingDate');
				 if($BookingDate!='') { $BookingDateArr=explode("/", $BookingDate);  $BookingDateStr=$BookingDateArr['2']."-".$BookingDateArr['0']."-".$BookingDateArr['1']; }
			  
			  	$this->load->model('admin/Temppobookingmanage');
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/temppobooking/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Temppobookingmanage->get_tatal_search($keyword, $DepartureDate, $BookingDate);
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
			    $data['carsbooking']=$this->Temppobookingmanage->tempobooking_search($config['per_page'], $offset,$keyword, $DepartureDate, $BookingDate);
			    $this->load->view('admin/tempobooking_view',$data);
		 
		  
		  
	  }
	    
	  


	  //     public function temppobookingdetails(){

	  // 	       // $this->load->model('admin/Carbookingmanage');
	  // 	       //  echo $bid = $this->uri->segment(4);
   //         //     $data['toursbooking_details']=$this->Toursbookingmanage->tourdetails($bid);
                      
                        

	  //        	$this->load->view('admin/temppobooking_detail');

	  // }



	public function details()
	  {
	       // $data=$this->comman_data();
		   $this->load->model('admin/Temppobookingmanage');
		   $booking_id=$this->uri->segment(4);
		   $data['tempo_details']=$this->Temppobookingmanage->tempobooking_deatils($booking_id);
		   $this->load->view('admin/temppobooking_detail',$data);	
	  }
	  
	  
	public function printticket()
	  {
	       // $data=$this->comman_data(); 
		   $this->load->model('admin/Temppobookingmanage');
		   $booking_id=$this->uri->segment(4);
		   $data['tempo_details']=$this->Temppobookingmanage->tempobooking_deatils($booking_id);
		    // $data['agent_info']=$this->Temppobookingmanage->get_agent_info();
		   $this->load->view('admin/db-tempo-printticket',$data);	
	  }



	  // Canellation Code ################################################################
      
          			  
	public function temppobookingcancle()
		{
	
		     if($this->input->post('flag')=='yes') 
				{
				   			
							$data=$_POST;
							unset($data['flag']);
							unset($data['BookingId']);
							$BookingId=$this->input->post('BookingId');	 
							$this->load->model('admin/Temppobookingmanage');
							$this->Temppobookingmanage->tempobooking_cancel_data($data,$BookingId);
						    $this->session->set_flashdata('booking', 'Your booking cancelled successfully.');
							redirect(base_url('admin/temppobooking/view'));
				
			   }
		     else
			   {
		  				    // $data=$this->comman_data();
							$this->load->model('admin/Temppobookingmanage');
							$bid = $this->uri->segment(4);
							$data['tempo_details']=$this->Temppobookingmanage->tempobooking_deatils($bid);
							$TemppoTravellarId=$data['tempo_details'][0]['TemppoTravellarId']; // --------------------------------------- car Id
							$DepartureDate=$data['tempo_details'][0]['PickupDate']; // --------------------------------------- DepartureDate 
							$DepartureTime=$data['tempo_details'][0]['PickupTime']; // --------------------------------------- DepartureDate 
							$BusFare=$data['tempo_details'][0]['TotalPrice']; // --------------------------------------------------- Total Bus Fare
							$TotalPrice=0;//$data['tempo_details'][0]['TotalPrice']; // --------------------------------------------- Pickup charges
							$TotalGst=$data['tempo_details'][0]['TotalGST']; 
							$DrivingCharges=$data['tempo_details'][0]['DrivingCharges']; 
							
						//-------------------------------------------- get total fare ------------------------------------------------------------------
							   $totalfare=$BusFare+$TotalPrice+$TotalGst+$DrivingCharges;  // Total fare busfare+pickupcharges+GST 
							   $current_date=date('Y-m-d');   
							   $current_date=date('H:i'); 
						 if(strtotime($DepartureDate) >= strtotime($current_date) && $data['tempo_details'][0]['BookingStatus']=='B')   // if customeres go for cancllation then departure date is always gerater then or equal to current date and also confirm booking
								{
										   $data['canllation_max_day']=$this->Temppobookingmanage->tempo_canllation_charges_day($TemppoTravellarId);
											// echo"<pre>";
											   //print_r($data['canllation_max_day']);
											// echo"</pre>";
											$maxend_time=$data['canllation_max_day'][0]['EndTime']; 
											$DepartureDateday1 = strtotime($DepartureDate); // booking departure date    
											$current_dateday2 = strtotime($current_date);
											$TotalDays = ceil(($DepartureDateday1 - $current_dateday2) / (60*60*24));
										if($TotalDays==0)
											  {
												$data['canllation_charges_hours']=$this->Temppobookingmanage->tempo_canllation_charges_hours($TemppoTravellarId);
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
													  $data['canllation_charges_hours']=$this->Temppobookingmanage->tempo_canllation_charges_hours($TemppoTravellarId);
													  $DetectAmount=$data['canllation_charges_hours'][0]['DetectAmount']  ;
													  $CansllationCharges=$totalfare*$DetectAmount/100;
													  $RefundAmount=$totalfare-$CansllationCharges; 
												  
											   }	
											 elseif($TotalDays > 1 && $TotalDays<=$maxend_time)
											   {
												   $data['canllation_charges']=$this->Temppobookingmanage->tempo_canllation_charges_day($TemppoTravellarId);
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
										$this->load->view('admin/db_tempo_cancel',$data);
										//echo"<pre>";
										//print_r($data);
										//echo"<pre>";
								}
							  else
								{
									 $this->session->set_flashdata('booking', 'You can not cancel this booking please call customer care.');
									 redirect(base_url('admin/temppobooking/view'));
								}
								
			      }
					
	   
	   }  





	  // End Cancellation ###########################################################

  
}

?>
