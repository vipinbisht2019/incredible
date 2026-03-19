<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vehicle extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Vehiclemanage');
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/vehicle/view');
				$config['per_page'] = 30; 
				$config['total_rows'] =$this->Vehiclemanage->get_tatal();
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
				
		   $data['vehicle']=$this->Vehiclemanage->vehicle_view($config['per_page'] , $offset);
		   $this->load->view('admin/vehicle_view',$data);
     }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {

	if($this->input->post('flag')=='yes') 
		   {
		     /*   echo"<pre>";
				  print_r($_POST);
				echo"</pre>";
				  die();*/
		      
	           // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('VehicleName', 'vehicle name', 'required');
				if($this->form_validation->run() == true) 
		             {
						    $this->load->model('admin/Vehiclemanage');
							$data=$_POST;
		                	unset($data['flag']);
							unset($data['smt_enter']);
							unset($data['NoPax']);
							
							
							$insert_id=$this->Vehiclemanage->vehicle_add($data);
							if($insert_id>0)
							 {
							     // -------------------------- insert vehicle pax option -----------------------------------
								  $PaxOptionArr=$this->input->post('NoPax');
							       $this->Vehiclemanage->vehicle_paxoption_add($PaxOptionArr,$insert_id);
							 
								  $this->session->set_flashdata('vehicle', 'Records added successfully');
								  redirect(base_url('admin/vehicle/view'));
							 }
						
					   }
					 else
					   {
					      $this->load->view('admin/vehicle_add');
					   }  			
				
		     }
		   else
		     {
			         
		                   $this->load->view('admin/vehicle_add');
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Vehiclemanage")  ;
		  
		   if($this->input->post('flag')=='yes') 
		     {
					    /*echo"<pre>";
						  print_r($_POST);
						echo"</pre>";
						  die();*/
			 
			 
			        $id=$this->input->post('id');
					$this->load->library('form_validation');
					$this->form_validation->set_rules('VehicleName', 'vehicle name', 'required');
			        if($this->form_validation->run() == true) 
					  {
				  		 $data=$_POST;
						 unset($data['flag']);
						 unset($data['smt_enter']);
						 unset($data['id']);
						 unset($data['EditNoPax']);
						 unset($data['PaxId']);
						 unset($data['NoPax']);
						 
						 
						//------------------------ update vehicle data ------------------------------------------- 
						   $this->Vehiclemanage->vehicle_edit_data($data,$id);
						//------------------------ update Paxoption data ----------------------------------------- 
						       $data_1=$this->input->post('EditNoPax');
							   $data_2=$this->input->post('PaxId'); 
							   $this->Vehiclemanage->vehicle_edit_paxoption_data($data_1, $data_2);
						 //------------------------ add additional  Paxoption data ---------------------------------
								$PaxOptionArr=$this->input->post('NoPax');
								$this->Vehiclemanage->vehicle_paxoption_add($PaxOptionArr,$id);
						
						     $this->session->set_flashdata('vehicle', 'Records updated successfully');
						     redirect(base_url('admin/vehicle/view'));
					  }
					 else
					  {
						  $data['edit_vehicle']=$this->Vehiclemanage->vehicle_edit($id);
						   $data['edit_paxoption']=$this->Vehiclemanage->vehicle_edit_paxoption($id);
						  $this->load->view('admin/vehicle_modify',$data);
					  } 	  
			  }
	       else
		     {
			      $id=$this->input->get('id');
		  	      $data['edit_vehicle']=$this->Vehiclemanage->vehicle_edit($id);
				  $data['edit_paxoption']=$this->Vehiclemanage->vehicle_edit_paxoption($id);
			      $this->load->view('admin/vehicle_modify',$data);
	        }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Vehiclemanage');
			 $id=$this->input->get('id');
			$delete_sussess=$this->Vehiclemanage->vehicle_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('vehicle', 'Records deleted successfully');
		       redirect(base_url('admin/vehicle/view'));
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
								$this->load->model('admin/Vehiclemanage');
								$delete_sussess=$this->Vehiclemanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('vehicle', 'Records deleted successfully');
									   redirect(base_url('admin/vehicle/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('vehicle', 'Nothing to delete');
									   redirect(base_url('admin/vehicle/view'));
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
								$this->load->model('admin/Vehiclemanage');
								$data['Status']='N';
								$delete_sussess=$this->Vehiclemanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('vehicle', 'Records deactivate successfully');
									   redirect(base_url('admin/vehicle/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('vehicle', 'Nothing to activate');
									   redirect(base_url('admin/vehicle/view'));
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
								$this->load->model('admin/Vehiclemanage');
								$data['Status']='Y';
								$delete_sussess=$this->Vehiclemanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('vehicle', 'Records activated successfully');
									   redirect(base_url('admin/vehicle/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('vehicle', 'Nothing to activate');
									   redirect(base_url('admin/vehicle/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
