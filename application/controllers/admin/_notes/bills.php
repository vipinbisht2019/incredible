<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bills extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
public function view()
	  {
				         $this->load->model('admin/Billsmanage');
					   
							$this->load->library('pagination');
							$config['base_url'] = base_url('admin/bills/view');
							$config['per_page'] = 30; 
							$config['total_rows'] =$this->Billsmanage->get_tatal();
						//---------------------------- optional parameters of paging  ---------------------------------------------------	
							$config['full_tag_open'] = '<ul class="pagination pull-right">';
							$config['full_tag_close'] = '</ul>';
							$config['first_link'] = 'First';
							$config['first_tag_open'] = '<li>';
							$config['first_tag_close'] = '</li>';
							$config['last_link'] = 'Last';
							$config['last_tag_open'] = '<li>';
							$config['last_tag_close'] = '</li>';
							$config['num_tag_open'] = '<li>';
							$config['num_tag_close'] = '</li>';
							$config['next_link'] = 'Next &gt;';
							$config['next_tag_open'] = '<li>';
							$config['next_tag_close'] = '</li>';
							$config['prev_link'] = '&lt; Prev';
							$config['prev_tag_open'] = '<li>';
							$config['prev_tag_close'] = '</li>';
							$config['cur_tag_open'] = '<li class="active"><a href="#">';
							$config['cur_tag_close'] = '</a></li>';
							$this->pagination->initialize($config); 
							$offset=$this->uri->segment(4);
						    $data['payments_list']=$this->Billsmanage->bills_view($config['per_page'] , $offset);	
							//echo"<pre>";
							 //print_r($data);
							//echo"</pre>";
						   $this->load->view('admin/bills_view',$data);
	  }
	  
	  
	 // ------------------------------- Add members payment for a perticular finacial year ------------------------------	   
			 
			 public function add()
			  {
			     //------------------------------------------------

				   
				   if($this->input->post('flag')=='yes')   
				      {
							// -------------------------- form vaildation ---------------------------------------
								$this->load->library('form_validation');
								$this->form_validation->set_rules('AnnualSubAmount', 'annual sub amount', 'required|numeric');
								$this->form_validation->set_rules('CGST', 'cgst', 'required|numeric');
								$this->form_validation->set_rules('SGST', 'sgst', 'required|numeric');
								$this->form_validation->set_rules('TotalAmount', 'total amount', 'required|numeric');
					            if($this->form_validation->run() == true) 
									     {
												$this->load->model('admin/Billsmanage');
												
								
												
												$TotalAmount=$this->input->post('TotalAmount');
												$Arrear=$this->input->post('Arrear');
												$Advance=$this->input->post('Advance');
												
												$TotalOutstanding=$TotalAmount+$Arrear-$Advance;
																							
												$data=$_POST;
											    @array_push($data['TotalOutstandingDues']=$TotalOutstanding,$TotalOutstanding);
											  
												unset($data['flag']);
												unset($data['smt_enter']); 
												$insert=$this->Billsmanage->bills_add($data); 
												$this->session->set_flashdata('bills', 'Records added successfully');
												redirect(base_url('admin/bills/view'));
										 }
									   else	
									     {
										      $this->load->model('admin/Billsmanage');
								              $data['c_info']= $this->Billsmanage->get_member_info($this->input->post('user_id'));
								              $this->load->view('admin/bills_add',$data);
										 } 
									 
					  
					  }
					 else
					  {
					  
					   // by default add form according id set or not
					   
					   
						   if($_REQUEST['id']!='')
							 {
							     $this->load->model('admin/Billsmanage');
								 $data['c_info']= $this->Billsmanage->get_member_info($_REQUEST['id']);
								 $this->load->view('admin/bills_add',$data);
							 }
						   else
							{
					  		   $this->load->view('admin/bills_add');
							}
					  }		
					
				  //------------------------------------------------	
			  }
			  
		//----------------------------------------------------------------------- -----------------------
		
		public function import()
		  {
		       
			   	   if($this->input->post('flag')=='yes')   
				      {
					  
					        	// -------------------------- form vaildation ---------------------------------------
								$this->load->library('form_validation');
								$this->form_validation->set_rules('financialYear', 'financial year', 'required');
					            if($this->form_validation->run() == true) 
									     {
										    $fyear=$this->input->post('financialYear');
											$this->load->model('admin/Billsmanage'); 
											$aa= $this->Billsmanage->uploadData($fyear);
											
											  if($aa['success']=='success')
											     {
												    $this->session->set_flashdata('bills', 'Records imported successfully');
											      	redirect(base_url('admin/bills/view'));
												 }
											
										 
										 }
									   else
									     {
												$this->load->model('admin/Billsmanage');
												$data['f_year']= $this->Billsmanage->finacial_year_dropdown_data();
												$this->load->view('admin/bills_import',$data);
										 }	 
					  
					  
					  }
					 else
					  { 
		   			  
						  $this->load->model('admin/Billsmanage');
						  $data['f_year']= $this->Billsmanage->finacial_year_dropdown_data();
						  $this->load->view('admin/bills_import',$data);
					  }	  
			  
		  
		  }	  

	  
}

?>
