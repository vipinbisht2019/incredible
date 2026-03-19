<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leadindividualsemail extends MY_controller {
//------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
 // ------------------------- send email to indib=vidual ----------------------------------------
     public function index()
       {

                $this->load->model('admin/Leadindividualsemailmanager');
				$this->load->view('admin/leadindividualsemail_view');		


       }  
 // ------------------------------- Add funnctin add record  ------------------------------	
public function send()
  {
		 
	if($this->input->post('flag')=='yes') 
		   {
		      // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('Subject', 'subject', 'required');
				$this->form_validation->set_rules('Email', 'email', 'required');
				$this->form_validation->set_rules('MailContent', 'mail content', 'required');
				if($this->form_validation->run() == true) 
		             {
						  
							$data=$_POST;
							unset($data['flag']);
							unset($data['smt_enter']);
						    $emailArr = explode('---', $data['Email']);	
				//----------------------- send email ------------------------------------------
				//----------------------- send email ------------------------------------------
                                    $data['Subject']=$this->input->post('Subject', TRUE);
									$data['Name']=$emailArr[1];
									$data['MailContent']=$this->input->post('MailContent', TRUE);
									$message=$this->load->view('admin/leads_conatcts_email_fromate',$data,TRUE);
								   
	                                $mail='ashish@us-creations.com,'.$emailArr[0];
	                                $fromemail='laxmikantsubodh14@gmail.com';
									$this->load->library('email');
									$config = array('mailtype' => 'html', 'charset'  => 'utf-8',  'priority' => '1');
									$this->email->initialize($config);
									$this->email->from($fromemail, 'MTA');
									$this->email->to($mail);
									$this->email->subject($data['Subject']);
									$this->email->message($message);
									$this->email->send();

                                 
                                //----------------------------------------------------------- 
								$this->session->set_flashdata('email', 'Email Send Successfully');
								redirect(base_url('admin/leadindividualsemail'));
							  
						
					   }
					 else
					   {
					         $this->load->model('admin/Leadindividualsemailmanager');
				             $this->load->view('admin/leadindividualsemail_view');	
					   }  			
				
		     }


		   
	}
// ------------------------------- auto fill function  ------------------------------		  
	 

	  
	public function emailsource()
		     {
		     	 $term=$this->input->get('term'); 
		     	 $this->load->model('admin/Leadindividualsemailmanager');
		     	 $data_term=$this->Leadindividualsemailmanager->search_data($term);
		     	 foreach ($data_term as $val) {
		     	 	# code...
		     	 	$EmailAddress=$val['EmailAddress'];
		     	 	$Name=$val['Name'];
			    	$results[] = array('label' => $EmailAddress."---".$Name);
		     	 }

			   echo json_encode($results);

		     	
		     }  
	  
	  
}

?>
