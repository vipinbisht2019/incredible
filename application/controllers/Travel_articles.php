<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel_articles extends User_controller 
{

   public function index()
	  {
	      	
			  $data=$this->comman_data();	     	
		      $this->load->model('Travel_articles_model');
			  $data['travel_articles']=$this->Travel_articles_model->travel_articles();
			  $this->load->view('travel_articles',$data);
	  }
	 
}

?>
