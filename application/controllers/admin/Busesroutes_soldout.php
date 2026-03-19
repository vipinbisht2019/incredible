<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busesroutes_soldout extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      } 
	  
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view(){
		        $this->load->model('admin/Busesroutes_soldoutmanage');
				$BusesRoutsId=$this->input->get('bid');
				$routeid=$this->input->get('rid');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/busesroutes_broading/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Busesroutes_soldoutmanage->get_tatal($routeid,$BusesRoutsId);
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
				
			
				 $data['bid']=$this->input->get('bid');
				 $data['rid']=$this->input->get('rid');
				 
		     $data['seatsblock']=$this->Busesroutes_soldoutmanage->seatsblock_view($config['per_page'] , $offset,$routeid,$BusesRoutsId);
		     $this->load->view('admin/buses_routedetails_soldout_view',$data);
	 }	  


// ------------------------------- Edit  funnctin edit record  ------------------------------		  
		public function add()
		        {
				
				         if($this->input->post('flag') == 'yes')
						     {
						
											 
								    $this->load->model('admin/Busesroutes_soldoutmanage');
									$BusesRoutsId=$this->input->post('BusesRoutsId');
									$RoutsId=$this->input->post('RoutsId');
									$SeatNo=$this->input->post('SeatNoSelect');
									$BlockDate=$this->input->post('BlockDate');
							     if(count($SeatNo) > 0 && count($BlockDate) > 0)
										{
										   $this->Busesroutes_soldoutmanage->seatsblock_add($RoutsId,$BusesRoutsId,$SeatNo,$BlockDate);
										   $this->session->set_flashdata('seatsblock', 'Records updated successfully');
										   redirect(base_url('admin/busesroutes_soldout/view?bid='.$BusesRoutsId."&rid=".$RoutsId));
										}
									  else
										{
											$this->session->set_flashdata('seatsblock', 'Please select sold out date & seats');
											redirect(base_url('admin/busesroutes_soldout/add?bid='.$BusesRoutsId."&rid=".$RoutsId));
										} 	
									
							 
							 }
							else
							 { 
				
		
								$this->load->model("admin/Busesroutes_soldoutmanage"); 
								$BusesRoutsId=$this->input->get('bid');
								$RoutsId=$this->input->get('rid');
								$data['BusesRoutsId']=$BusesRoutsId;
								$data['RoutsId']=$RoutsId;
							 //----------------------------- from city and to city default----------------------------------------- 
								$from_to_city=$this->Busesroutes_soldoutmanage->buses_routes_from_to_city($RoutsId);
								$FromCity_id=$from_to_city['FromCityId'];
								$ToCity_id=$from_to_city['ToCityId'];
								$DepartureDate=date('Y-m-d');
							//------------------------------ from city and to city ------------------------------------------------ 
								$data['buses_routesdeatils']=$this->Busesroutes_soldoutmanage->buses_routesdeatils_view($BusesRoutsId,$FromCity_id,$ToCity_id);
								$bustype_id=$data['buses_routesdeatils'][0]['TypeId'];
							//------------------------- get seat map details ------------------------------------------------------------------
								$DeckType='L';
								$data['tour_seatmap_seatno']=$this->Busesroutes_soldoutmanage->buses_seatmap_seatno($bustype_id, $DeckType);
								
								$DeckType2='U';
								$data['tour_seatmap_seatno_upper']=$this->Busesroutes_soldoutmanage->buses_seatmap_seatno($bustype_id, $DeckType2);
								$MapId=$bustype_id=$data['buses_routesdeatils'][0]['MapId'];	
								//------------------------------------- get map deatils ----------------------------------------------------------------
								$data['map_details']=$this->Busesroutes_soldoutmanage->get_map_details($MapId);
								// $data['buses_seatbooked']=$this->Busesroutes_soldoutmanage->get_bus_seatbooked($DepartureDate,$BusesRoutsId,$RoutsId,$FromCity_id);
								// --------------------------------- select discounted seat no. -------------------------------------------------------
								// $data['buss_seatno_discount']=$this->Busesroutes_soldoutmanage->get_buss_seatno_discount($BusesRoutsId);
								 $data['tour_busseatmap']=$this->Busesroutes_soldoutmanage->get_bus_busseatmap($bustype_id);
								 $this->load->view('admin/buses_routedetails_soldout_add',$data);
				             }
				  }
		  
	  
			// ------------------------------- Edit  funnctin edit record  ------------------------------		  
			// ------------------------------- Edit  funnctin edit record  ------------------------------		
		public function edit()
		  {
		  
		  if($this->input->post('flag')=='yes') 
		    {
				    error_reporting(0);
					$this->load->model("admin/Busesroutes_soldoutmanage"); 
					$block_id=$this->input->post('BlockId');
					$SeatNo=$this->input->post('SeatNoSelect');
					$BookedSeatStr=$this->input->post('BookedSeatStr');
					$BookedSeatArr=@explode(",", $BookedSeatStr);
					//$BlockedSeatArr=array_diff($SeatNo, $BookedSeatArr);
					
						$BusesRoutsId=$this->input->post('BusesRoutsId');
						$RoutsId=$this->input->post('RoutsId');
						$SeatNo=$this->input->post('SeatNoSelect');
					
					for($i=0;$i<count($SeatNo);$i++)
					  { 
					      $seatsno= $SeatNo[$i]; 
						  if(!in_array($seatsno,$BookedSeatArr))
						      {
					            $BlockedSeatArr[$i]= $SeatNo[$i];
							  } 
					  }
					
						sort($BlockedSeatArr);
						/*print_r($BlockedSeatArr);
						
						echo"<br>";
						print_r($SeatNo);
						
					 die();*/
					
					$data['SeatNo']=@implode(",", $SeatNo);
					$this->Busesroutes_soldoutmanage->buses_seatblock_edit_data($data,$block_id);
					
					
					
					$this->session->set_flashdata('seatsblock', 'Records updated successfully');
					redirect(base_url('admin/busesroutes_soldout/view?bid='.$BusesRoutsId."&rid=".$RoutsId));
						
			}
		   else
		    {
		  
		  
		  
		  
		              
					$this->load->model("admin/Busesroutes_soldoutmanage"); 
					$BusesRoutsId=$this->input->get('bid');
					$RoutsId=$this->input->get('rid');
					$blockid=$this->input->get('id');
					$data['BusesRoutsId']=$BusesRoutsId;
					$data['RoutsId']=$RoutsId;
					$data['block_seats']=$this->Busesroutes_soldoutmanage->get_bus_busblock_edit($blockid);
					
					
					
					
				 //----------------------------- from city and to city default----------------------------------------- 
					$from_to_city=$this->Busesroutes_soldoutmanage->buses_routes_from_to_city($RoutsId);
					$FromCity_id=$from_to_city['FromCityId'];
					$ToCity_id=$from_to_city['ToCityId'];
					$DepartureDate=$data['block_seats'][0]['BlockDate'];
				//------------------------------ from city and to city ------------------------------------------------ 
					$data['buses_routesdeatils']=$this->Busesroutes_soldoutmanage->buses_routesdeatils_view($BusesRoutsId,$FromCity_id,$ToCity_id);
					$bustype_id=$data['buses_routesdeatils'][0]['TypeId'];
				//------------------------- get seat map details ------------------------------------------------------------------
					$DeckType='L';
					$data['tour_seatmap_seatno']=$this->Busesroutes_soldoutmanage->buses_seatmap_seatno($bustype_id, $DeckType);
					
					$DeckType2='U';
					$data['tour_seatmap_seatno_upper']=$this->Busesroutes_soldoutmanage->buses_seatmap_seatno($bustype_id, $DeckType2);
					$MapId=$bustype_id=$data['buses_routesdeatils'][0]['MapId'];	
					//------------------------------------- get map deatils ----------------------------------------------------------------
					$data['map_details']=$this->Busesroutes_soldoutmanage->get_map_details($MapId);
					// $data['buses_seatbooked']=$this->Busesroutes_soldoutmanage->get_bus_seatbooked($DepartureDate,$BusesRoutsId,$RoutsId,$FromCity_id);
					// --------------------------------- select discounted seat no. -------------------------------------------------------
					// $data['buss_seatno_discount']=$this->Busesroutes_soldoutmanage->get_buss_seatno_discount($BusesRoutsId);
					 $data['tour_busseatmap']=$this->Busesroutes_soldoutmanage->get_bus_busseatmap($bustype_id);
					 $this->load->view('admin/buses_routedetails_soldout_edit',$data);
					 
				}	 
			
	   }  
   
   
     

	  
	
 }

?>
