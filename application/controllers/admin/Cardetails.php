<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cardetails extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		       $this->load->model('admin/Cardetailsmanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/cardetails/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Cardetailsmanage->get_tatal();
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
				
		   $data['cardetails']=$this->Cardetailsmanage->cardetails_view($config['per_page'] , $offset);
		   $this->load->view('admin/cardetails_view',$data);
		 
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
	    //echo"------------".$this->input->post('flag');
		// die();
		 
	if($this->input->post('flag')=='yes') 
		   {
		      
		   
		       // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('CarName', 'car title', 'required');
				if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Cardetailsmanage');
							$data=$_POST;
							unset($data['flag']);
							unset($data['smt_enter']);
							unset($data['commission_id']);
							unset($data['CommissionPrice']);
							 unset($data['TermsconditionID']);
							 unset($data['FeatureId']);
							
				  //------------------------------------ check file select or not and upload ------------
						 for($i = 0; $i <  count($_FILES['SmallImage']['name']); $i++) 
							 {
										if($_FILES['SmallImage']['name'][$i]!= '')
											{
												$config['upload_path'] = './uploads/car/';
												$config['allowed_types'] = 'gif|jpg|png|jpeg';
												$this->load->library('upload', $config);
												
													$_FILES['userfile']['name']     = $_FILES['SmallImage']['name'][$i];
													$_FILES['userfile']['type']     = $_FILES['SmallImage']['type'][$i];
													$_FILES['userfile']['tmp_name'] = $_FILES['SmallImage']['tmp_name'][$i];
													$_FILES['userfile']['error']    = $_FILES['SmallImage']['error'][$i];
													$_FILES['userfile']['size']     = $_FILES['SmallImage']['size'][$i];
												
												
												$field_name = "userfile";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  if($i==0)
														    {
														      @array_push($data['SmallImage']=$uploadfile1,$uploadfile1);
															}
														  elseif($i==1)
														   {
														       @array_push($data['BigImage']=$uploadfile1,$uploadfile1);
														   } 
														  elseif($i==2)
														   {
														       @array_push($data['InteriorImage1']=$uploadfile1,$uploadfile1);
														   }
														  else
														   {
														      @array_push($data['InteriorImage2']=$uploadfile1,$uploadfile1);
														   }   	   
													 } 
											 }
									   }	
					
						 //------------------------------------ END Upload ---------------------------------------------------
							
							$insert_id=$this->Cardetailsmanage->cardetails_add($data);
							if($insert_id > 0)
							 {
							     //-----------------------------------------------Agents commission-----------------------------------------------------------------  
								  $data_11=$this->input->post('commission_id');
								  $data_12=$this->input->post('CommissionPrice');
								  $this->Cardetailsmanage->car_agentscommission_add($data_11,$data_12,$insert_id,'no');
								//-----------------------------------------------Car Features----------------------------------------------------------------- 
								  $data_1=$this->input->post('FeatureId');
							      $this->Cardetailsmanage->car_feature_add($data_1,$id,'no'); 
					          	//-----------------------------------------------Car Termscondition----------------------------------------------------------------- 
						           $data_2=$this->input->post('TermsconditionID');
							       $this->Cardetailsmanage->car_termcondition_add($data_2,$id,'no');  
							 
							    	$this->session->set_flashdata('cardetails', 'Records added successfully');
								    redirect(base_url('admin/cardetails/view'));
							 }
						
					   }
					 else
					   {
							
							$this->load->model('admin/Cardetailsmanage');
							$data['dropdown_category']=$this->Cardetailsmanage->dropdown_car_cat();
							$data['dropdown_manufacturer']=$this->Cardetailsmanage->dropdown_car_manufacturer();
							$data['dropdown_class']=$this->Cardetailsmanage->dropdown_car_class();
							$data['commission_type']=$this->Cardetailsmanage->get_commission();
							$data['dropdown_car_feature']=$this->Cardetailsmanage->dropdown_car_feature();
							$data['dropdown_car_termsconditions']=$this->Cardetailsmanage->dropdown_car_termsconditions();
					        $this->load->view('admin/cardetails_add',$data);
					   }  			
				
		     }
		   else
		     {
			         
					      $this->load->model('admin/Cardetailsmanage');
						  $data['dropdown_category']=$this->Cardetailsmanage->dropdown_car_cat();
						  $data['dropdown_manufacturer']=$this->Cardetailsmanage->dropdown_car_manufacturer();
						  $data['dropdown_class']=$this->Cardetailsmanage->dropdown_car_class();
						  $data['commission_type']=$this->Cardetailsmanage->get_commission();
						   $data['dropdown_car_feature']=$this->Cardetailsmanage->dropdown_car_feature();
				           $data['dropdown_car_termsconditions']=$this->Cardetailsmanage->dropdown_car_termsconditions();
						  $this->load->view('admin/cardetails_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {

		 
		   $this->load->model("admin/Cardetailsmanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('CarName', 'car title', 'required');
					  $id=$this->input->post('id');
			
					if($this->form_validation->run() == true) 
					  {
				  
							 $data=$_POST;
							 unset($data['flag']);
							 unset($data['smt_enter']);
							 unset($data['id']);
							 unset($data['commission_id']);
							 unset($data['CommissionPrice']);
							 unset($data['TermsconditionID']);
							 unset($data['FeatureId']);
					 
					 //------------------------------------ check file select or not and upload ------------
						 for($i = 0; $i <  count($_FILES['SmallImage']['name']); $i++) 
							 {
										if($_FILES['SmallImage']['name'][$i]!= '')
											{
												$config['upload_path'] = './uploads/car/';
												$config['allowed_types'] = 'gif|jpg|png|jpeg';
												$this->load->library('upload', $config);
												
													$_FILES['userfile']['name']     = $_FILES['SmallImage']['name'][$i];
													$_FILES['userfile']['type']     = $_FILES['SmallImage']['type'][$i];
													$_FILES['userfile']['tmp_name'] = $_FILES['SmallImage']['tmp_name'][$i];
													$_FILES['userfile']['error']    = $_FILES['SmallImage']['error'][$i];
													$_FILES['userfile']['size']     = $_FILES['SmallImage']['size'][$i];
												
												
												$field_name = "userfile";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  if($i==0)
														    {
														      @array_push($data['SmallImage']=$uploadfile1,$uploadfile1);
															}
														  elseif($i==1)
														   {
														       @array_push($data['BigImage']=$uploadfile1,$uploadfile1);
														   } 
														  elseif($i==2)
														   {
														       @array_push($data['InteriorImage1']=$uploadfile1,$uploadfile1);
														   }
														  else
														   {
														      @array_push($data['InteriorImage2']=$uploadfile1,$uploadfile1);
														   }   	   
													 } 
											 }
									   }	
					
						
					    //------------------------------------ END Upload ---------------------------------------------------
							 
								 $this->Cardetailsmanage->cardetails_edit_data($data,$id);
						//-----------------------------------------------Agents commission-----------------------------------------------------------------  
								  $data_11=$this->input->post('commission_id');
								  $data_12=$this->input->post('CommissionPrice');
								  $this->Cardetailsmanage->car_agentscommission_add($data_11,$data_12,$id,'yes');
						//-----------------------------------------------Car Features----------------------------------------------------------------- 
								  $data_1=$this->input->post('FeatureId');
							      $this->Cardetailsmanage->car_feature_add($data_1,$id,'yes'); 
						//-----------------------------------------------Car Termscondition----------------------------------------------------------------- 
						          $data_2=$this->input->post('TermsconditionID');
							      $this->Cardetailsmanage->car_termcondition_add($data_2,$id,'yes'); 	  
						//----------------------------------------------------------------------------------------------------------------  
							      $this->session->set_flashdata('cardetails', 'Records updated successfully');
							      redirect(base_url('admin/cardetails/view'));
						 
					  }
					 else
					  {
							
							$data['edit_cardetails']=$this->Cardetailsmanage->cardetails_edit($id);
							$data['dropdown_category']=$this->Cardetailsmanage->dropdown_car_cat();
							$data['dropdown_manufacturer']=$this->Cardetailsmanage->dropdown_car_manufacturer();
							$data['dropdown_class']=$this->Cardetailsmanage->dropdown_car_class();
							$data['commission_type']=$this->Cardetailsmanage->get_commission();
							$data['dropdown_car_feature']=$this->Cardetailsmanage->dropdown_car_feature();
							$data['dropdown_car_termsconditions']=$this->Cardetailsmanage->dropdown_car_termsconditions();
							
							$data['commission_type_edit']=$this->Cardetailsmanage->car_agentscommission_edit($id); 
							$data['commission_type_edit']=$this->Cardetailsmanage->car_feature_edit($id);
							$data['commission_type_edit']=$this->Cardetailsmanage->car_termsconditions_edit($id);
							$this->load->view('admin/cardetails_modify',$data);
					  } 	  
					  
		     }
	       else
		    {
			      $id=$this->input->get('id');
			      $data['edit_cardetails']=$this->Cardetailsmanage->cardetails_edit($id);
				  $data['dropdown_category']=$this->Cardetailsmanage->dropdown_car_cat();
				  $data['dropdown_manufacturer']=$this->Cardetailsmanage->dropdown_car_manufacturer();
				  $data['dropdown_class']=$this->Cardetailsmanage->dropdown_car_class();
				  $data['commission_type']=$this->Cardetailsmanage->get_commission();
				  $data['dropdown_car_feature']=$this->Cardetailsmanage->dropdown_car_feature();
				  $data['dropdown_car_termsconditions']=$this->Cardetailsmanage->dropdown_car_termsconditions();
				    
				  
				  
					$data['commission_type_edit']=$this->Cardetailsmanage->car_agentscommission_edit($id); 
					$data['car_feature_edit']=$this->Cardetailsmanage->car_feature_edit($id);
					$data['car_termsconditions_edit']=$this->Cardetailsmanage->car_termsconditions_edit($id);
			
			      $this->load->view('admin/cardetails_modify',$data);  
	       }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Cardetailsmanage');
			$delete_sussess=$this->Cardetailsmanage->cardetails_delete($_REQUEST['id'])  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('cardetails', 'Records deleted successfully');
		       redirect(base_url('admin/cardetails/view'));
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
								$this->load->model('admin/Cardetailsmanage');
								$delete_sussess=$this->Cardetailsmanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('cardetails', 'Records deleted successfully');
									   redirect(base_url('admin/cardetails/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('cardetails', 'Nothing to delete');
									   redirect(base_url('admin/cardetails/view'));
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
								$this->load->model('admin/Cardetailsmanage');
								$data['Status']='N';
								$delete_sussess=$this->Cardetailsmanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('cardetails', 'Records deactivate successfully');
									   redirect(base_url('admin/cardetails/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('cardetails', 'Nothing to activate');
									   redirect(base_url('admin/cardetails/view'));
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
								$this->load->model('admin/Cardetailsmanage');
								$data['Status']='Y';
								$delete_sussess=$this->Cardetailsmanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('cardetails', 'Records activated successfully');
									   redirect(base_url('admin/cardetails/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('cardetails', 'Nothing to activate');
									   redirect(base_url('admin/cardetails/view'));
						   }			 
					}
		
		  }
		  
		  
		  


		  
	  
	  
}

?>
