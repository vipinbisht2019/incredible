<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carbookingenc extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Carbookingencmanage');
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/carbookingenc/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Carbookingencmanage->get_tatal();
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
			    $data['carsbooking']=$this->Carbookingencmanage->carsbooking_view($config['per_page'] , $offset);
			    $this->load->view('admin/carbookingenc_view',$data);
		 
		  
		  
	  }
	  
	  public function search()
	      {
		         $DepartureDateStr='';
				 $BookingDateStr='';
			     $keyword=$this->input->post('keyword');
			     $DepartureDate=$this->input->post('DepartureDate');
				 if($DepartureDate!='') { $DepartureDateArr=explode("/",$DepartureDate);  $DepartureDateStr=$DepartureDateArr['2']."-".$DepartureDateArr['0']."-".$DepartureDateArr['1']; }
			     $BookingDate=$this->input->post('BookingDate');
				 if($BookingDate!='') { $BookingDateArr=explode("/",$BookingDate);  $BookingDateStr=$BookingDateArr['2']."-".$BookingDateArr['0']."-".$BookingDateArr['1']; }
		 
		 
			    $this->load->model('admin/Carbookingencmanage');
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/carbookingenc/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Carbookingencmanage->get_tatal_search($keyword,$DepartureDateStr,$BookingDateStr);
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
			    $data['carsbooking']=$this->Carbookingencmanage->carsbooking_view_search($config['per_page'] , $offset, $keyword,$DepartureDateStr,$BookingDateStr);
			    $this->load->view('admin/carbookingenc_view',$data);
		 
		  
		  
	  }
	  

	  	  public function details()
	    {
	           // $data=$this->comman_data();
		       $this->load->model('admin/Carbookingencmanage');
			   $bid=$this->uri->segment(4);
			   $data['carsbooking_details']=$this->Carbookingencmanage->car_booking_details($bid);
			   $this->load->view('admin/carbookingenc_detail',$data);	
	    }
	   
  
}

?>
