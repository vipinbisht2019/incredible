<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busesroutes_broading extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	  
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view(){
		        $this->load->model('admin/Busesroutes_broadingmanage');
				$BusesRoutsId=$this->input->get('bid');
				$routeid=$this->input->get('rid');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/busesroutes_broading/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Busesroutes_broadingmanage->get_tatal($routeid,$BusesRoutsId);
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
				
				
		    $data['routedetails_boarding']=$this->Busesroutes_broadingmanage->buses_routesdetails_boarding($config['per_page'] , $offset,$routeid,$BusesRoutsId);
			 $data['routedetails']=$this->Busesroutes_broadingmanage->buses_routesdetails($routeid);
		
		    $this->load->view('admin/buses_routedetails_boarding_view',$data);
	 }	  


// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function add()
   {
   
    
	      $this->load->model("admin/Busesroutes_broadingmanage")  ;
		 
		  if($this->input->post('flag')=='yes') 
		          {
					  error_reporting(0);
					   $CityIdArr=$this->input->post('CityId');
					   $BoardingPointsArr=$this->input->post('BoardingId');
					   $SBoardingIdArr=$this->input->post('SBoardingId');
					   $DepartureTimeArr=$this->input->post('DepartureTime');
					   $ArrivalTimeArr=$this->input->post('ArrivalTime');
				   
					   $RoutesId=$this->input->post('RoutesId');
					   $BusesRoutsId=$this->input->post('BusesRoutsId');
					   
					   for($ii=0;$ii<count($CityIdArr);$ii++)
						   {
						         $city_id=$CityIdArr[$ii];
								 $BoardingArr=$BoardingPointsArr[$city_id];
							     for($jj=0;$jj<count($BoardingArr);$jj++)
									  {
									       $b_id=$BoardingArr[$jj];
									       if($SBoardingIdArr[$city_id][$b_id]!='')
											       {
														$data['RoutesId']=$RoutesId;
														$data['BusesRoutsId']=$BusesRoutsId; 
														$data['CityId']=$city_id;
														$data['BoardingId']=$b_id;
														$data['DepartureTime']=$DepartureTimeArr[$city_id][$b_id];
														$data['ArrivalTime']=$ArrivalTimeArr[$city_id][$b_id];
														
														$this->Busesroutes_broadingmanage->buses_routesdetails_boarding_add($data);
													
														
			
												  }  
											   
											
									  }
						   }
						   
						   
							$this->session->set_flashdata('busesroutesdetails', 'Boarding point/time added successfully');
							redirect(base_url('admin/busesroutesdetails/view'));		
					   
					  
					  //   echo"<pre>";
						 // print_r($_POST);
						// echo"</pre>";
			
		
													
									  
					 }
				   else
					 {
		  			   
						  $bid=$this->input->get('bid');
						  $rid=$this->input->get('rid');
					      $data['rid']=$rid;   // route id
						  $data['bid']=$bid;  // BusesRoutsId
					      $data['route_cities']=$this->Busesroutes_broadingmanage->buses_routesdeatils_broading($bid,$rid);
						  $this->load->view('admin/buses_routedetails_boarding_add',$data);
					
			   }	
      }
	  
	  
			// ------------------------------- Edit  funnctin edit record  ------------------------------		  
			// ------------------------------- Edit  funnctin edit record  ------------------------------		
		public function edit()
			{
				   $this->load->model("admin/Busesroutes_broadingmanage")  ;
				  
				   if($this->input->post('flag')=='yes') 
					 {
					                      
								   error_reporting(0);
								   $CityIdArr=$this->input->post('CityId');
								   $BoardingPointsArr=$this->input->post('BoardingId');
								   $SBoardingIdArr=$this->input->post('SBoardingId');
								   $DepartureTimeArr=$this->input->post('DepartureTime');
								   $ArrivalTimeArr=$this->input->post('ArrivalTime');
							   
								   $RoutesId=$this->input->post('RoutesId');
								   $BusesRoutsId=$this->input->post('BusesRoutsId');
								   $this->Busesroutes_broadingmanage->buses_routesdetails_boarding_delete($BusesRoutsId);
								   for($ii=0;$ii<count($CityIdArr);$ii++)
									   {
											 $city_id=$CityIdArr[$ii];
											 $BoardingArr=$BoardingPointsArr[$city_id];
											 for($jj=0;$jj<count($BoardingArr);$jj++)
												  {
													   $b_id=$BoardingArr[$jj];
													   if($SBoardingIdArr[$city_id][$b_id]!='')
															   {
																	$data['RoutesId']=$RoutesId;
																	$data['BusesRoutsId']=$BusesRoutsId; 
																	$data['CityId']=$city_id;
																	$data['BoardingId']=$b_id;
																	$data['DepartureTime']=$DepartureTimeArr[$city_id][$b_id];
																	$data['ArrivalTime']=$ArrivalTimeArr[$city_id][$b_id];
																	
																	$this->Busesroutes_broadingmanage->buses_routesdetails_boarding_add($data);
																
																	
						
															  }  
														   
														
												  }
									   }
									   
									   
										$this->session->set_flashdata('busesroutesdetails', 'Boarding point/time added successfully');
										redirect(base_url('admin/busesroutesdetails/view'));			  
										  
					   
						  
					 }
				  else
					{
					   
							
								 $bid=$this->input->get('bid');
								 $rid=$this->input->get('rid');
								 $data['rid']=$rid;   // route id
								 $data['bid']=$bid;  // BusesRoutsId
								 $data['route_cities']=$this->Busesroutes_broadingmanage->buses_routesdeatils_broading($bid,$rid);
								 
								  $data['route_cities_boarding']=$this->Busesroutes_broadingmanage->buses_routesdeatils_broading_edit($bid,$rid);
							      $this->load->view('admin/buses_routedetails_boarding_modify',$data);
					
				  }	
			}  
   
   
     

	  
	
 }

?>
