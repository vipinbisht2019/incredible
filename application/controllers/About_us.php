<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();
	     // ---------------------------------- load about model --------------------		
		      $this->load->model('About_page');
			  $data['about']=$this->About_page->about_data();
			  $this->load->view('about',$data);
	  }
	  
	 public function company_profile(){

	 	  		$data=$this->comman_data();
	     		
		      	$this->load->model('About_page') ;
			  	$data['company_profile']=$this->About_page->company_profile();
	 
			  	$this->load->view('why_us',$data);
			  
			  
	 }
	 
	  public function why_travel_with_us(){

	 	  		$data=$this->comman_data();
	     		
		      	$this->load->model('About_page') ;
			  	$data['company_profile']=$this->About_page->why_travel_with_us();
	 
			  	$this->load->view('why_us',$data);
			  
			  
	 }
	 
	 
	  public function our_trips(){

	 	  		$data=$this->comman_data();
	     		
		      	$this->load->model('About_page') ;
			  	$data['company_profile']=$this->About_page->company_profile();
	 
			  	$this->load->view('why_us',$data);
			  
			  
	 }
	 
	 
	  public function guest_review(){

	 	  		$data=$this->comman_data();
	     		
		      	$this->load->model('About_page') ;
			  	$data['company_profile']=$this->About_page->company_profile();
	 
			  	$this->load->view('why_us',$data);
			  
			  
	 }
	 public function term_condition(){

	 	  		$data=$this->comman_data();
	     		
		      	$this->load->model('About_page') ;
			  	$data['term_condition']=$this->About_page->term_condition();
	 
			  	$this->load->view('terms_conditions',$data);
			  
			  
	 }
	 
	  public function privacy_policy(){

	 	  		$data=$this->comman_data();
	     		
		      	$this->load->model('About_page') ;
			  	$data['privacy_policy']=$this->About_page->privacy_policy();
	 
			  	$this->load->view('privacy_policy',$data);
			  
			  
	 }
	  
 
}

?>
