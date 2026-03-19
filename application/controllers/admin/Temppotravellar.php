<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temppotravellar extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		       $this->load->model('admin/Temppotravellarmanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/temppotravellar/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Temppotravellarmanage->get_tatal();
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
				
		   $data['temppotravellar']=$this->Temppotravellarmanage->temppotravellar_view($config['per_page'] , $offset);
		   $this->load->view('admin/temppotravellar_view',$data);
		 
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
	    //echo"------------".$this->input->post('flag');
		 
		 
	if($this->input->post('flag')=='yes') 
		   {
		      
		   
		       // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('TemppoTravellarName', 'temppo travellar name', 'required');
				if($this->form_validation->run() == true) 
		             {
						    $this->load->model('admin/Temppotravellarmanage');
						    $data=$_POST;
							unset($data['flag']);
							unset($data['smt_enter']);
							unset($data['FeatureId']);
							unset($data['commission_id']);
							unset($data['CommissionPrice']);
							unset($data['TermsconditionID']);
							
				  //------------------------------------ check file select or not and upload ------------
						 for($i = 0; $i <  count($_FILES['SmallImage']['name']); $i++) 
							 {
										if($_FILES['SmallImage']['name'][$i]!= '')
											{
												$config['upload_path'] = './uploads/temppo/';
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
							
							$insert_id=$this->Temppotravellarmanage->temppotravellar_add($data);
							if($insert_id > 0)
							 {
									//------------------------------------------------Agents features------------------------------------------------
										$data_1=$this->input->post('FeatureId');
										$this->Temppotravellarmanage->temppotravellar_feature_add($data_1,$insert_id,'no');
									//-----------------------------------------------Agents commission-----------------------------------------------------------------  
										$data_11=$this->input->post('commission_id');
										$data_12=$this->input->post('CommissionPrice');
										$this->Temppotravellarmanage->temppotravellar_agentscommission_add($data_11,$data_12,$insert_id,'no');
									//---------------------------------------------------Asign terms and conditions----------------------------------------------------- 
										$data_22=$this->input->post('TermsconditionID');
										$insert_id=$this->input->post('id');
										$this->Temppotravellarmanage->temppotravellar_termcondition_add($data_22,$insert_id,'no');   
									//----------------------------------------------------------------------------------------------------------------------------		  
										$this->session->set_flashdata('temppotravellar', 'Records added successfully');
										redirect(base_url('admin/temppotravellar/view'));
							 }
						
					   }
					 else
					   {
					      
					      $this->load->model('admin/Temppotravellarmanage');
						   $data['dropdown_feature']=$this->Temppotravellarmanage->dropdown_temppo_feature();
						   $data['dropdown_termscondition']=$this->Temppotravellarmanage->dropdown_temppo_termsconditions();
						   $data['commission_type']=$this->Temppotravellarmanage->get_commission();
					      $this->load->view('admin/temppotravellar_add',$data);
					   }  			
				
		     }
		   else
		     {
					  $this->load->model('admin/Temppotravellarmanage');
					  $data['dropdown_feature']=$this->Temppotravellarmanage->dropdown_temppo_feature();
					  $data['dropdown_termscondition']=$this->Temppotravellarmanage->dropdown_temppo_termsconditions();
					  $data['commission_type']=$this->Temppotravellarmanage->get_commission();
					  $this->load->view('admin/temppotravellar_add',$data);
			 }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
		   $this->load->model("admin/Temppotravellarmanage")  ;
		   if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('TemppoTravellarName', 'temppo travellar name', 'required');
			
					if($this->form_validation->run() == true) 
					  {
				  
							 $data=$_POST;
							 unset($data['flag']);
							 unset($data['smt_enter']);
							 unset($data['id']);
							 unset($data['FeatureId']);
							 unset($data['commission_id']);
							 unset($data['CommissionPrice']);
							 unset($data['TermsconditionID']);
							 
							 
							  
							  //------------------------------------ check file select or not and upload ------------
						 for($i = 0; $i <  count($_FILES['SmallImage']['name']); $i++) 
							 {
										if($_FILES['SmallImage']['name'][$i]!= '')
											{
												$config['upload_path'] = './uploads/temppo/';
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
												 
									$this->Temppotravellarmanage->temppotravellar_edit_data($data,$_REQUEST['id']);
									//--------------------------------- add features -----------------------------------------------   
									$data_1=$this->input->post('FeatureId');
									$insert_id=$this->input->post('id');
									$this->Temppotravellarmanage->temppotravellar_feature_add($data_1,$insert_id,'yes');
									//-----------------------------------------------Agents commission-----------------------------------------------------------------  
									$data_11=$this->input->post('commission_id');
									$data_12=$this->input->post('CommissionPrice');
									$this->Temppotravellarmanage->temppotravellar_agentscommission_add($data_11,$data_12,$insert_id,'yes');
									//---------------------------------------------------Asign terms and conditions----------------------------------------------------- 
									$data_22=$this->input->post('TermsconditionID');
									$insert_id=$this->input->post('id');
									$this->Temppotravellarmanage->temppotravellar_termcondition_add($data_22,$insert_id,'yes');   
								//-------------------------------------------------------------------------------------------------	
									$this->session->set_flashdata('temppotravellar', 'Records updated successfully');
									redirect(base_url('admin/temppotravellar/view'));
						 
					  }
					 else
					  {
							 $id=$this->input->post('id'); 
							 $data['edit_temppotravellar']=$this->Temppotravellarmanage->temppotravellar_edit($id);
					         $data['dropdown_feature']=$this->Temppotravellarmanage->dropdown_temppo_feature(); 
					         $data['dropdown_termscondition']=$this->Temppotravellarmanage->dropdown_temppo_termsconditions();
							 $data['dropdown_feature_edit']=$this->Temppotravellarmanage->temppotravellar_feature_edit($id); 
							 $data['commission_type']=$this->Temppotravellarmanage->get_commission();
					         $data['commission_type_edit']=$this->Temppotravellarmanage->temppotravellar_agentscommission_edit($id); 
							 $data['termscondition_edit']=$this->Temppotravellarmanage->dropdown_temppo_edit_termsconditions($id);
                             $this->load->view('admin/temppotravellar_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
			        $id=$this->input->get('id');
					$data['edit_temppotravellar']=$this->Temppotravellarmanage->temppotravellar_edit($id);
					$data['dropdown_feature']=$this->Temppotravellarmanage->dropdown_temppo_feature();
					$data['dropdown_termscondition']=$this->Temppotravellarmanage->dropdown_temppo_termsconditions();
					$data['dropdown_feature_edit']=$this->Temppotravellarmanage->temppotravellar_feature_edit($id); 
					$data['commission_type']=$this->Temppotravellarmanage->get_commission();
					$data['commission_type_edit']=$this->Temppotravellarmanage->temppotravellar_agentscommission_edit($id); 
					$data['termscondition_edit']=$this->Temppotravellarmanage->dropdown_temppo_edit_termsconditions($id);
					$this->load->view('admin/temppotravellar_modify',$data);
	        }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Temppotravellarmanage');
			$id=$this->input->get('id');
			$delete_sussess=$this->Temppotravellarmanage->temppotravellar_delete($id); 
		
		    if($delete_sussess == 1)	
		     {			
			   $this->session->set_flashdata('temppotravellar', 'Records deleted successfully');
		       redirect(base_url('admin/temppotravellar/view'));
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
								$this->load->model('admin/Temppotravellarmanage');
								$delete_sussess=$this->Temppotravellarmanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('temppotravellar', 'Records deleted successfully');
									   redirect(base_url('admin/temppotravellar/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('temppotravellar', 'Nothing to delete');
									   redirect(base_url('admin/temppotravellar/view'));
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
								$this->load->model('admin/Temppotravellarmanage');
								$data['Status']='N';
								$delete_sussess=$this->Temppotravellarmanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('temppotravellar', 'Records deactivate successfully');
									   redirect(base_url('admin/temppotravellar/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('temppotravellar', 'Nothing to activate');
									   redirect(base_url('admin/temppotravellar/view'));
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
								$this->load->model('admin/Temppotravellarmanage');
								$data['Status']='Y';
								$delete_sussess=$this->Temppotravellarmanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('temppotravellar', 'Records activated successfully');
									   redirect(base_url('admin/temppotravellar/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('temppotravellar', 'Nothing to activate');
									   redirect(base_url('admin/temppotravellar/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
