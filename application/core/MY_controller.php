<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_controller extends CI_Controller {

	
	public function valid_user()
	  {
		
		 if($this->session->user_id=='')
		   {
		       redirect(base_url('admin/login'));
			   die();
		   }
	  }

}


class User_controller extends MY_controller {


		public function comman_data()
			 {
				
				 
					$this->load->model('Main_model');
					$data['mainmenu']=$this->Main_model->menu();
					$data['destimenu']=$this->Main_model->destimenu();
					$data['footer_mainmenu']=$this->Main_model->footer_menu();
					$data['footer_aboutus']=$this->Main_model->footer_about();
					
					return $data ;
					  
			 }
			 


}


class Login_controller extends MY_controller {

    public function comman_data()
			 {
				
				 
					$this->load->model('Main_model');
					$data['mainmenu']=$this->Main_model->menu();
					$data['footer_mainmenu']=$this->Main_model->footer_menu();
					$data['footer_aboutus']=$this->Main_model->footer_about();
					
					return $data ;
					  
			 }


	public function valid_customer()
	 {
		
		 if($this->session->customer_id=='')
		   {
		       redirect(base_url('agentlogin'));
			   die();
		   }
	 }
			 	
	}		 	 




?>
