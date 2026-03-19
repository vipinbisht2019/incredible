<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userhome extends User_controller 
{

   public function index()
	  {
		  
	      	
		//	  $data=$this->comman_data();	     	
		//      $this->load->model('Faq_model');
		//	  $data['faw']=$this->Faq_model->faq();
		//	  $this->load->view('faq',$data);
			  if(empty($this->session->userdata('user_id')))
			  {
				  redirect(base_url('login'));
			  }
			  
			  $data=$this->comman_data();	     	
		      $this->load->model('Userhome_model');
			  $data['userhome']=$this->Userhome_model->userhome();
			  $this->load->view('userhome_view',$data);
	  }
	 
}

?>