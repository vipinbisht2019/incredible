<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tour_tourdate extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		      $this->load->model('admin/Tour_tourdatemanage');  // id
			  $id=$this->input->get('id');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/tour_tourdate/view');
				$config['per_page'] = 100; 
				$config['total_rows'] =$this->Tour_tourdatemanage->get_tatal($id);
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
				
		   $data['tourdate']=$this->Tour_tourdatemanage->tourdate_view($config['per_page'] , $offset,$id);
		   $data['id']=$this->input->get('id');
		   $this->load->view('admin/tour_tourdate_view',$data);
		   
		   
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
	    //echo"------------".$this->input->post('flag');
    if($this->input->post('flag')=='yes') 
		   {

						$TourId=$this->input->post('TourId');
					    $this->load->model('admin/Tour_tourdatemanage');
						$data=$_POST;
						$data_2=array();
						$data_1=array();
					    unset($data['flag']);
						unset($data['smt_enter']); 
					    $tour_id=$this->Tour_tourdatemanage->tourdate_add($data,$TourId);
					    redirect(base_url('admin/tour_tourdate/view?id='.$TourId));
			
		     }
		   else
		     {   
						$this->load->model('admin/Tour_tourdatemanage');
						$tid=$this->input->get('tid');
						$data['TourName']=$this->Tour_tourdatemanage->toure_list($tid) ;
						$this->load->view('admin/tour_tourdate_add', $data);                        // ,$data
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Tour_tourdatemanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
			          
						$this->load->library('form_validation');
						$this->form_validation->set_rules('Date', 'tour date', 'required');
	
			
			 if($this->form_validation->run() == true) 
				  {
							$id=$this->input->post('id');
							$tid=$this->input->post('tid');
							$Date=$this->input->post('Date');
						
							$dateArr=explode(" ",$Date);
							$TimeStr=$dateArr[1];
							
							$TimeArr=explode(":",$TimeStr);
							$DatesTime=$TimeArr[0].":".$TimeArr[1];
							
						    $dateArr=explode("-",$dateArr[0]);
							 $dateStr=$dateArr[2]."-".$dateArr[1]."-".$dateArr[0]." ".$DatesTime.":00";
							
							$data_1['Date']=$dateStr;
							$data_1['Month']=$dateArr[1];
							$data_1['Year']=$dateArr[2];
							$this->Tour_tourdatemanage->tourdate_edit_data($data_1, $id, $tid);
							redirect(base_url('admin/tour_tourdate/view?id='.$tid));   
									 
					  }
					 else
					  {
							$this->load->model("admin/Tour_tourdatemanage"); 
							$id=$this->input->post('id');
							$tid=$this->input->post('tid');
							$data['date_edit']=$this->Tour_tourdatemanage->tourdate_edit($tid, $id);
							$data['TourName']=$this->Tour_tourdatemanage->toure_list($tid) ;
							$this->load->view('admin/tour_tourdate_modify',$data);  //,$data
					  } 	  
					  
		     }
	      else
		    {   
						$this->load->model("admin/Tour_tourdatemanage"); 
						$id=$this->input->get('id');
						$tid=$this->input->get('tid');
						$data['date_edit']=$this->Tour_tourdatemanage->tourdate_edit($tid, $id);
						$data['TourName']=$this->Tour_tourdatemanage->toure_list($tid) ;
						$this->load->view('admin/tour_tourdate_modify',$data);  //,$data
			 }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Tour_tourdatemanage');
			echo $id=$this->input->get('id');
			$delete_sussess=$this->Tour_tourdatemanage->tourdate_delete($id)  ; 
		    if($delete_sussess==1)	
		     {			
			    $this->session->set_flashdata('tourdate', 'Records deleted successfully');
		        redirect(base_url('admin/tour_tourdate/view'));
		     }	
	        
	  } 


// ------------------------------- Delete  funnctin to delete main images ------------------------------	  

	  
	// ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
	// ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
	// ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		
		    
       public function bulk_action()
	     {
		     
		       // ------------------------------- Bulk Action  delete  ------------------------------		  	 
				if($this->input->post('Delete')=='Delete')
				    {
					   //----------------------------------------------   
					   
					      
						  	     $id=$this->input->post('id');
					   
					     $delete_id=$this->input->post('bb');
						 if(count($delete_id)>0)
						  {
						        
								$this->load->model('admin/Tour_tourdatemanage');
								foreach($delete_id as $id_str)
								  {
								  $delete_sussess=$this->Tour_tourdatemanage->admin_delete_bulk($id_str);
								  }
									
									   $this->session->set_flashdata('tourdate', 'Records deleted successfully');
									   redirect(base_url('admin/tour_tourdate/view?id='.$id));
									
							}
						  else
						   {
						               $this->session->set_flashdata('tourdate', 'Nothing to delete');
									   redirect(base_url('admin/tour_tourdate/view'));
						   }			 
					   
					}
				  // ------------------------------- Bulk Action  deactivate   ------------------------------	 
				 if($this->input->post('Deactivate')=='Deactivate')
				    {
					   //-------------------------------------------------------------------------------
					     $delete_id=$this->input->post('bb');
						 if(count($delete_id)>0)
						  {
						        $id_str=implode(",",$id);
								$this->load->model('admin/Tour_tourdatemanage');
								foreach($delete_id as $id_str)
								 {
								$data['Status']='N';
								$delete_sussess=$this->Tour_tourdatemanage->admin_deactivate_bulk($id_str,$data);
								}
											
									   $this->session->set_flashdata('tourdate', 'Records deactivate successfully');
									   redirect(base_url('admin/tour_tourdate/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('tourdate', 'Nothing to activate');
									   redirect(base_url('admin/tour_tourdate/view'));
						   }			 
					}
			  // ------------------------------- Bulk Action activate  ------------------------------			
				if($this->input->post('Activate')=='Activate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						        $id_str=implode(",",$id);
								$this->load->model('admin/Tour_tourdatemanage');
								$data['Status']='Y';
								$delete_sussess=$this->Tour_tourdatemanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('tourdate', 'Records activated successfully');
									   redirect(base_url('admin/tour_tourdate/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('tourdate', 'Nothing to activate');
									   redirect(base_url('admin/tour_tourdate/view'));
						   }			 
					}
				
			
		 }
 }

?>
