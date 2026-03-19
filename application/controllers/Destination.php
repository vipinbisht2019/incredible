<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();
	     // ---------------------------------- load about model --------------------		
		      $this->load->model('Destination_page') ;
			  $data['destination']=$this->Destination_page->destination_data(); 
			  $data['destinationList']=$this->Destination_page->get_destinations();
			  $data['destinationData']=$this->Destination_page->destinationsData();
			   
			  $this->load->view('destination',$data);
	  }
	  
	 
	  
	 public function destination_list(){

	 	  		$data=$this->comman_data();
	     		$locationsId = $this->uri->segment(3);
				 //print_r($locationsId); die;
				 $data['locationName'] = $locationsId; 
		      	 $this->load->model('Destination_page');
			  	$data['india_list']=$this->Destination_page->india_list($locationsId); 
				$data['destination_list']=$this->Destination_page->destination_list($locationsId);
			  	$data['theme_list']=$this->Destination_page->theme_list();
				$this->load->view('tour_list',$data);
			  
			  
	 }
	 
	  public function destinationsublist(){

	 	  		$data=$this->comman_data();
	     		$locationsId = $this->uri->segment(3);
		      	 $this->load->model('Destination_page') ;
			  	$data['destinationsublist']=$this->Destination_page->destinationsublist(); 
				
			
				
			  	$this->load->view('sub_destination',$data);
			  
			  
	 }

	 public function details(){

		$data=$this->comman_data();
		$destiId = $this->uri->segment(3);
		$tourid = $this->uri->segment(4);
		//echo $tourid; die;
		$data['TourId'] =  $tourid;
		$this->load->model('Destination_page') ;
		$data['destination_detail']=$this->Destination_page->destination_detail();
		$data['destiDetails']=$this->Destination_page->destiDetails($tourid);	
		
		$this->load->view('tour_detail',$data);			  
			
	}
	 
	 public function tour_info_add(){
	 
	 	
			$data=$this->comman_data();
		     $this->load->model('Destination_page') ;
			 
			// $tourid = $this->uri->segment(3);
	 
	  		$data1 = array(	'travel_agency' => $this->input->post('travel_agency'),
                  			'participants' => $this->input->post('participants'),
                  			'first_name' => $this->input->post('first_name'),
                  			'surname' => $this->input->post('surname'),
				   			'date' => $this->input->post('date'),
				    		'email' => $this->input->post('email'),
                 			'phone_no' => $this->input->post('phone'),
				   			'tour_id' => $this->input->post('tour_id'),
				    		'message' => $this->input->post('message'));
							
							//print_r($data1); die;
					
    		$tourInfoId = $this->Destination_page->tour_info_add($data1);
	 		if($tourInfoId>0)
			{
				
				$this->session->set_flashdata('TourInfo', 'Records added successfully');
				redirect(base_url('destination'));
			
			}else{
			
				redirect(base_url('destination/detail'));
			}
	 
	 
	 }
	 
	 
	 public function tourFilter(){
	 
	 	$data=$this->comman_data();
		$destination=$this->input->post('destination');
		$themeName=$this->input->post('themeName');
		
		$this->load->model('Destination_page');
		$data['india_list']=$this->Destination_page->tour_filter($destination,$themeName); 
		 
		$this->load->view('tour_filter',$data);
		 
	 
	 }
	 
}

?>
