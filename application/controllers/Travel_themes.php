<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel_themes extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();
	     // ---------------------------------- load about model --------------------		
		      $this->load->model('Travel_themes_page') ;
			  $data['travel_themes']=$this->Travel_themes_page->travel_themes();
			  $data['travelThemesList']=$this->Travel_themes_page->travelThemesList();
			  $this->load->view('travel_themes',$data);
	  }
	  
	   public function travel_theme_list(){
				
		$data=$this->comman_data();
		$themeId = $this->uri->segment(3);
		

		$this->load->model('Travel_themes_page') ;

		$data['theameName'] = $themeId;
		$data['festival_tours']=$this->Travel_themes_page->festival_tours();
		$data['festival_tours_list'] = $this->Travel_themes_page->festival_tours_list($themeId);
		$data['destination_list']=$this->Travel_themes_page->destination_list();
		$data['theme_list']=$this->Travel_themes_page->theme_list();
		$this->load->view('travel_theme_list',$data);
			  
			  
	 }
	  
	 public function festival_tours(){

	 	  		$data=$this->comman_data();
	     		$themeId = $this->uri->segment(2);
		      	 $this->load->model('Travel_themes_page') ;
			  	$data['festival_tours']=$this->Travel_themes_page->festival_tours();
	 			$data['festival_tours_list'] = $this->Travel_themes_page->festival_tours_list($themeId);
			  	$this->load->view('festival_tours',$data);
			  
			  
	 }
	  public function wild_life(){

	 	  		$data=$this->comman_data();
	     		$themeId = $this->uri->segment(2);
		      	$this->load->model('Travel_themes_page') ;
			  	$data['wild_life']=$this->Travel_themes_page->wild_life();
				$data['wild_life_list'] = $this->Travel_themes_page->wild_life_list($themeId);
			  	$this->load->view('wild_life',$data);
				
			  
			  
	 }
	 
	  public function family_holidays(){

	 	  		$data=$this->comman_data();
	     		$themeId = $this->uri->segment(2);
		      	 $this->load->model('Travel_themes_page');
			  	$data['family_holidays']=$this->Travel_themes_page->family_holidays();
				$data['family_holidays_list'] = $this->Travel_themes_page->family_holidays_list($themeId);
	 
			  	$this->load->view('family_holidays',$data);
			  
			  
	 }
	 
	   public function luxury_tours(){

	 	  		$data=$this->comman_data();
	     		$themeId = $this->uri->segment(2);
		      	 $this->load->model('Travel_themes_page');
			  	$data['luxury_tours']=$this->Travel_themes_page->luxury_tours();
	 			$data['luxury_tours_list'] = $this->Travel_themes_page->luxury_tours_list($themeId);
				
			  	$this->load->view('luxury_tours',$data);
			  
			  
	 }
	 
	  public function honeymoon(){

	 	  		$data=$this->comman_data();
	     		$themeId = $this->uri->segment(2);
		      	 $this->load->model('Travel_themes_page');
			  	$data['honeymoon']=$this->Travel_themes_page->honeymoon();
	 			$data['honeymoon_list'] = $this->Travel_themes_page->honeymoon_list($themeId);
				
			  	$this->load->view('honeymoon',$data);
			  
			  
	 }
	 
	 public function yoga_ayurveda(){

	 	  		$data=$this->comman_data();
	     		$themeId = $this->uri->segment(2);
		      	 $this->load->model('Travel_themes_page');
			  	$data['yoga_ayurveda']=$this->Travel_themes_page->yoga_ayurveda();
	 			$data['yoga_ayurveda_list'] = $this->Travel_themes_page->yoga_ayurveda_list($themeId);
				
			  	$this->load->view('yoga_ayurveda',$data);
			  
			  
	 }
	 
	  public function religious_tours(){

	 	  		$data=$this->comman_data();
	     		$themeId = $this->uri->segment(2);
		      	 $this->load->model('Travel_themes_page');
			  	$data['religious_tours']=$this->Travel_themes_page->religious_tours();
	 			$data['religious_tours_list'] = $this->Travel_themes_page->religious_tours_list($themeId);
				
			  	$this->load->view('religious_tours',$data);
			  
			  
	 }
	 
	  public function adventure_outdoor(){

	 	  		$data=$this->comman_data();
	     		$themeId = $this->uri->segment(2);
		      	 $this->load->model('Travel_themes_page');
			  	$data['adventure_outdoor']=$this->Travel_themes_page->adventure_outdoor();
	 			$data['adventure_outdoor_list'] = $this->Travel_themes_page->adventure_outdoor_list($themeId);
				
			  	$this->load->view('adventure_outdoor',$data);
			  
			  
	 }
	  public function beaches(){

	 	  		$data=$this->comman_data();
	     		$themeId = $this->uri->segment(2);
		      	 $this->load->model('Travel_themes_page');
			  	$data['beaches']=$this->Travel_themes_page->beaches();
	 			$data['beaches_list'] = $this->Travel_themes_page->beaches_list($themeId);
				
			  	$this->load->view('beaches',$data);
			  
			  
	 }
	 
	   public function tribal_tours(){

	 	  		$data=$this->comman_data();
	     		$themeId = $this->uri->segment(2);
		      	 $this->load->model('Travel_themes_page');
			  	$data['tribal_tours']=$this->Travel_themes_page->tribal_tours();
	 			$data['tribal_tours_list'] = $this->Travel_themes_page->tribal_tours_list($themeId);
				
			  	$this->load->view('tribal_tours',$data);
			  
			  
	 }
	 
	 
 
}

?>
