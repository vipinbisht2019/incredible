<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Login_controller {

	/**
	 * Index Page for this controller.
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html  navigation
	 */
	 
	//   function __construct()
	//    { 
    //        parent::__construct(); 
    //        $this->valid_client(); 
      
    //    } 
	 
	public function index()
	  {
	  		$data=$this->comman_data();
		 	$id=$this->session->user_id;
			$this->load->model('Profile_page');
			$data['profile_details']=$this->Profile_page->get_profile_data($id);
			$user_country=$data['profile_details'][0]['user_country'];
			$user_state=$data['profile_details'][0]['user_state'];
			
			//$data['country']=$this->Profile_page->get_country($user_country);
			$data['state']=$this->Profile_page->get_state($user_state);
			$this->load->view('profileview_view',$data);
	   }

	public function edit()
	 {
	       
			 
		     $data=$this->comman_data();
		     if($this->input->post('flag')=='yes') 
				  {
				    
				      
					  
							$this->load->library('form_validation'); 
						   	
							$this->form_validation->set_rules('CompanyName', 'company name', 'required');
							$this->form_validation->set_rules('user_fname', 'first name', 'required');
							$this->form_validation->set_rules('user_lname', 'last name', 'required');
							$this->form_validation->set_rules('user_phone', 'phone', 'required');
							$this->form_validation->set_rules('user_email', 'email address', 'required');
							$this->form_validation->set_rules('user_address1', 'address', 'required');
							$this->form_validation->set_rules('user_city', 'city', 'required');
							$this->form_validation->set_rules('user_state', 'state', 'required');
							$this->form_validation->set_rules('user_country', 'country', 'required');
					        $this->form_validation->set_rules('user_zip', 'zipcode', 'required');
					
					
							if($this->form_validation->run() == true) 
							  {
						  
								 $data=$_POST;
								 unset($data['flag']);
								 unset($data['smt_enter']);
							     $id=$this->session->user_id;
								 $this->load->model('Profile_page');
								 $this->Profile_page->members_edit_data($data,$id);
								 $this->session->set_flashdata('members', 'Your profile updated successfully');
								 redirect(base_url('profile'));
							  }
							 else
							  {
									$data=$this->comman_data();
									//--------------------- get data to edit --------------------------------------------
								
									$this->load->model('Profile_page');
									$id=$this->session->user_id;
									$data['edit_members']=$this->Profile_page->members_edit($id);
									$data['country_dropdown']=$this->Profile_page->get_country_dropdown();
				                	$data['state_dropdown']=$this->Profile_page->get_state_dropdown();
									$this->load->view('profile_edit_view',$data);
							  } 	  
				 
				  }
				 else
				  { 
			  
					$data=$this->comman_data();
				   //--------------------- get data to edit -------------------------------------------- profile_edit_view
					$this->load->model('Profile_page');
					$id=$this->session->user_id;
					$data['edit_members']=$this->Profile_page->members_edit($id);
					$data['country_dropdown']=$this->Profile_page->get_country_dropdown();
					$data['state_dropdown']=$this->Profile_page->get_state_dropdown();
					$this->load->view('profile_edit_view',$data);
				 }	
		   
		  
	 }
	 
	 
	 		  
			public function statechange()
			  {
			        $country_id=$this->input->post('cid');
				    $this->load->model('Checkout_page');
				    $data['state_dropdown']=$this->Checkout_page->get_country_state($country_id);
				    $this->load->view('state_view_profile',$data);
			  }	  


}