<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tailormade extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();
	     // ---------------------------------- load about model --------------------		
		      $this->load->model('Tailormade_page') ;
			  $data['tailormade']=$this->Tailormade_page->tailormade();
			  $data['tailormade_list']=$this->Tailormade_page->tailormade_list();
			  $this->load->view('tailormade',$data);
	  }
	  public function tailormade_journey(){
	  
	   		$data=$this->comman_data();
	     		
		     $this->load->model('Tailormade_page') ;
			 $data['tailormade']=$this->Tailormade_page->tailormade();
	    	$this->load->view('tailormade_journey',$data);
	  }
		
}

?>
