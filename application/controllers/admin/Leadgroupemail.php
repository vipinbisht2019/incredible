<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Leadgroupemail extends MY_controller {
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
                $data['groups']=$this->Leadindividualsemailmanager->group_data();
				$this->load->view('admin/leadgroupemail_view',$data);		


       }  
 // ------------------------------- Add funnctin add record  ------------------------------	
public function send()
  {
		 
	if($this->input->post('flag')=='yes') 
		   {
		      // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('Subject', 'subject', 'required');
				$this->form_validation->set_rules('GroupId', 'group', 'required');
				$this->form_validation->set_rules('MailContent', 'mail content', 'required');
				if($this->form_validation->run() == true) 
		             {
						  
							$data=$_POST;
							unset($data['flag']);
							unset($data['smt_enter']);
							$GroupId=$this->input->post('GroupId');
						 	
						 	$this->load->model('admin/Leadindividualsemailmanager');
                     $datagroups=$this->Leadindividualsemailmanager->group_email_data($GroupId);
                   //  print_r($datagroups);
                    // die();
				//----------------------- send email ------------------------------------------
				//----------------------- send email ------------------------------------------
                                    $data['Subject']=$this->input->post('Subject', TRUE);
									$data['Name']=$emailArr[1];
									$data['MailContent']=$this->input->post('MailContent', TRUE);
									$message=$this->load->view('admin/leads_conatcts_email_fromate',$data,TRUE);
								   
	                                $mail=$datagroups;
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
								redirect(base_url('admin/leadgroupemail'));
							  
						
					   }
					 else
					   {
					         
                         $this->load->model('admin/Leadindividualsemailmanager');
                         $data['groups']=$this->Leadindividualsemailmanager->group_data();
				         $this->load->view('admin/leadgroupemail_view',$data);	
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
