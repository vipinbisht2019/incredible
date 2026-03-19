<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocode extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view(){
		        $this->load->model('admin/Promocodemanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/promocode/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Promocodemanage->get_tatal();
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
				
		   $data['promocode']=$this->Promocodemanage->promocode_view($config['per_page'] , $offset);
		   $this->load->view('admin/promocode_view',$data);
		 
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
	   
	 
		 
	if($this->input->post('flag')=='yes') 
		   {
		/*     echo"<pre>";
	      print_r($_POST);
	    echo"</pre>";
	    die();*/
		      
		   
		       // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('CouponName', 'coupon name', 'required');
				$this->form_validation->set_rules('CouponPrice', 'coupon price', 'required');
				$this->form_validation->set_rules('StartDate', 'start date', 'required');
				$this->form_validation->set_rules('EndDate', 'end date', 'required');
				$this->form_validation->set_rules('CouponCode', 'coupon code', 'required');
				$this->form_validation->set_rules('TourId', 'tour', 'required');
			 
			 
			    $this->load->model('admin/Promocodemanage');
				
				if($this->form_validation->run() == true) 
		             {

						   $this->load->model('admin/Promocodemanage');
							$data=$_POST;
							
								
							
							unset($data['flag']);
							unset($data['smt_enter']);
							unset($data['StartDate']);
							unset($data['EndDate']);
				
					 //-------------------------------------------------------------------------------------------------------------------------------		
						$startDateArr=explode("-",$this->input->post('StartDate')); 
						   $startDateStr=$startDateArr['2']."-".$startDateArr['1']."-".$startDateArr['0'];
						$EndDateArr=explode("-",$this->input->post('EndDate'));    
					    	$EndDateArrStr=$EndDateArr['2']."-".$EndDateArr['1']."-".$EndDateArr['0'];
							 $data['StartDate']=$startDateStr;
						     $data['EndDate']=$EndDateArrStr;
							
							$insert=$this->Promocodemanage->promocode_add($data);
							if($insert==1)
							{
								$this->session->set_flashdata('promocode', 'Records added successfully');
								redirect(base_url('admin/promocode/view'));
							 }
						
					   }
					 else
					   {

					      $this->load->model("admin/Promocodemanage")  ;

                          $data['edit_tours']=$this->Promocodemanage->get_tours();
					      $this->load->view('admin/promocode_add',$data);
					   }  			
				
		     }
		   else
		     {
			         $this->load->model("admin/Promocodemanage")  ;
					 $data['edit_tours']=$this->Promocodemanage->get_tours(); 
					
					 
					 $this->load->view('admin/promocode_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Promocodemanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
						$this->load->library('form_validation');
						$this->form_validation->set_rules('CouponName', 'coupon name', 'required');
						$this->form_validation->set_rules('CouponPrice', 'coupon price', 'required');
						$this->form_validation->set_rules('StartDate', 'start date', 'required');
						$this->form_validation->set_rules('EndDate', 'end date', 'required');
						$this->form_validation->set_rules('CouponCode', 'coupon code', 'required');
						$this->form_validation->set_rules('TourId', 'tour', 'required');
								$id=$this->input->post('id');
			
					if($this->form_validation->run() == true) 
					  {
				  
							 $data=$_POST;
							 unset($data['flag']);
							 unset($data['smt_enter']);
							 unset($data['id']);
							 unset($data['StartDate']);
							 unset($data['EndDate']);
				
					 //-------------------------------------------------------------------------------------------------------------------------------		
								$startDateArr=explode("-",$this->input->post('StartDate')); 
								$startDateStr=$startDateArr['2']."-".$startDateArr['1']."-".$startDateArr['0'];
								$EndDateArr=explode("-",$this->input->post('EndDate'));    
								$EndDateArrStr=$EndDateArr['2']."-".$EndDateArr['1']."-".$EndDateArr['0'];
								$data['StartDate']=$startDateStr;
								$data['EndDate']=$EndDateArrStr;
								
								
								$this->Promocodemanage->promocode_edit_data($data,$id);
								
								$this->session->set_flashdata('promocode', 'Records updated successfully');
								redirect(base_url('admin/promocode/view'));
						 
					  }
					 else
					  {
						     $data['edit_promocode']=$this->Promocodemanage->promocode_edit($_REQUEST['id']);
							 $data['edit_tours']=$this->Promocodemanage->get_tours();
						     $this->load->view('admin/promocode_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
		  
		          		$id=$this->input->get('id');
			      $data['edit_promocode']=$this->Promocodemanage->promocode_edit($id);
				  $data['edit_tours']=$this->Promocodemanage->get_tours();
				  $tour_id=$data['edit_promocode'][0]['TourId'];
				  $data['TourBuses']=$this->Promocodemanage->get_tour_buses($tour_id)  ; 
				  $this->load->view('admin/promocode_modify',$data);
	        
		  }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Promocodemanage');
					$id=$this->input->get('id');
			$delete_sussess=$this->Promocodemanage->promocode_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('promocode', 'Records deleted successfully');
		       redirect(base_url('admin/promocode/view'));
		     }	
	        
	  }  
	  
	  
	     // ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
	     // ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
	  	 // ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------	
		 	  
     public function bulk_action()
	     {
		     
		       // ------------------------------- Bulk Action  delete  ------------------------------		  	 
				if($this->input->post('Delete')=='Delete')
				    {
					   //----------------------------------------------   
					     $delete_id=$this->input->post('bb');
						 if(count($delete_id)>0)
						  {
						        $id_str=implode(",",$delete_id);
								$this->load->model('admin/Promocodemanage');
								$delete_sussess=$this->Promocodemanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('promocode', 'Records deleted successfully');
									   redirect(base_url('admin/promocode/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('promocode', 'Nothing to delete');
									   redirect(base_url('admin/promocode/view'));
						   }			 
					   
					}
				  // ------------------------------- Bulk Action  deactivate   ------------------------------	 
				 if($this->input->post('Deactivate')=='Deactivate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						        $id_str=implode(",",$id);
								$this->load->model('admin/Promocodemanage');
								$data['Status']='N';
								$delete_sussess=$this->Promocodemanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('promocode', 'Records deactivate successfully');
									   redirect(base_url('admin/promocode/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('promocode', 'Nothing to activate');
									   redirect(base_url('admin/promocode/view'));
						   }			 
					}
			  // ------------------------------- Bulk Action activate  ------------------------------			
				if($this->input->post('Activate')=='Activate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						        echo $id_str=implode(",",$id);
								$this->load->model('admin/Promocodemanage');
								$data['Status']='Y';
								$delete_sussess=$this->Promocodemanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('promocode', 'Records activated successfully');
									   redirect(base_url('admin/promocode/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('promocode', 'Nothing to activate');
									   redirect(base_url('admin/promocode/view'));
						   }			 
					}
		
		  }
   //--------------------------------------------------------------------------------------------------------------------------------		  
  //---------------------------------------------------------------------------------------------------------------------------------
  
           			  
	        public function tour_buses()
	            {
				     	$this->load->model('admin/Promocodemanage'); 
				        $tour_id=$this->input->post('tour_id'); 
						$data['TourBuses']=$this->Promocodemanage->get_tour_buses($tour_id)  ; 
						$this->load->view('admin/promocode_tour_dropdown',$data);
						   
				    
				}
	  
}

?>
