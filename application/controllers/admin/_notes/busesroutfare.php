<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busesroutfare extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	  
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view(){
		        $this->load->model('admin/Busesroutfaremanage');
				$BusesRoutsId=$this->input->get('bid');
				$routeid=$this->input->get('rid');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/busesroutesdetails/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Busesroutfaremanage->get_tatal($routeid,$BusesRoutsId);
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
				
				
		    $data['fare_busesroutes']=$this->Busesroutfaremanage->buses_routefare($config['per_page'] , $offset,$routeid,$BusesRoutsId);
		    $this->load->view('admin/buses_routefare_view',$data);
	 }	  


// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function add()
   {
    
	      $this->load->model("admin/Busesroutfaremanage")  ;
		 
		  if($this->input->post('flag')=='yes') 
		     {
			 
			  //echo"<pre>";
			    //print_r($_POST);
			   //echo"</pre>";
			   
			   //die();
			   $RoutesId=$this->input->post('RoutesId');
			   $BusesRoutsId=$this->input->post('BusesRoutsId');
			   $FareTypeId=$this->input->post('FareTypeId');
			   $FareDiscount=$this->input->post('FareDiscount');
			   $TotalSleeperFare=$this->input->post('TotalSleeperFare');
			   
			   $FromCityId=$this->input->post('FromCityId');
			   $ToCityId=$this->input->post('ToCityId');
			   $TotalFare=$this->input->post('TotalFare');
			   $TotalSleeperFare=$this->input->post('TotalSleeperFare');
			
			     $this->Busesroutfaremanage->buses_fare_add($RoutesId,$BusesRoutsId,$FareTypeId,$FromCityId,$ToCityId,$TotalFare,$TotalSleeperFare, $FareDiscount, $SeatNo_Discount);
			     redirect(base_url('admin/busesroutesdetails/view'));
											
									  
					 }
				   else
					 {
		  			   
						 $bid=$this->input->get('bid');
						 $rid=$this->input->get('rid');
					     $data['rid']=$rid;   // route id
						 $data['bid']=$bid;  // BusesRoutsId
					     $data['route_cities_column']=$this->Busesroutfaremanage->buses_route_cities($bid,$rid);
						 $data['route_cities_rows']=$this->Busesroutfaremanage->buses_route_cities($bid,$rid);
						
				
						$this->load->view('admin/buses_routefare_add',$data);
					    //echo"---------------------------- hotel add -----------------------------------------------------"; 
						// buses_route_cities($id)
			   }	
      }
	  
	  
	  // ------------------------------- Edit  funnctin edit record  ------------------------------		  
	    // ------------------------------- Edit  funnctin edit record  ------------------------------		
public function edit()
   {
	       $this->load->model("admin/Busesroutfaremanage")  ;
		   $id=$this->input->post('id');
		   if($this->input->post('flag')=='yes') 
		     {
			     
			 
				 
			   $RoutesId=$this->input->post('RoutesId');
			   $BusesRoutsId=$this->input->post('BusesRoutsId');
			   $FareTypeId=$this->input->post('FareTypeId');
			   $FareDiscount=$this->input->post('FareDiscount');
			   $TotalSleeperFare=$this->input->post('TotalSleeperFare');
			   
			   $FromCityId=$this->input->post('FromCityId');
			   $ToCityId=$this->input->post('ToCityId');
			   $TotalFare=$this->input->post('TotalFare');
			   $SeatNo_Discount=$this->input->post('SeatNo_Discount');
			   
			   
			   
			    //----------------------- first delete ------------------------------------ 
				   $this->Busesroutfaremanage->delete_fare($BusesRoutsId);
				//----------------------- first delete ------------------------------------
			       $this->Busesroutfaremanage->buses_fare_add($RoutesId,$BusesRoutsId,$FareTypeId,$FromCityId,$ToCityId,$TotalFare,$TotalSleeperFare, $FareDiscount, $SeatNo_Discount);
				 
				 
			 
			    redirect(base_url('admin/busesroutesdetails/view'));
			 }
	       else
		     {
		       
					
						 $bid=$this->input->get('bid');
						 $rid=$this->input->get('rid');
					     $data['rid']=$rid;   // route id
						 $data['bid']=$bid;  // BusesRoutsId
					     $data['route_cities_column']=$this->Busesroutfaremanage->buses_route_cities($bid,$rid);
						 $data['route_cities_rows']=$this->Busesroutfaremanage->buses_route_cities($bid,$rid);
						 $data['edit_buses_routefare']=$this->Busesroutfaremanage->buses_routefare_edit($rid,$bid);
						
				
						$this->load->view('admin/buses_routefare_modify',$data);
	        
		   }	
   }  
   
   
     

	  
	
 }

?>
