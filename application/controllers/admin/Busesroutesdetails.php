<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busesroutesdetails extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view(){
		        $this->load->model('admin/Busesroutesdetailsmanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/busesroutesdetails/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Busesroutesdetailsmanage->get_tatal();
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
				
		    $data['busesroutesdetails']=$this->Busesroutesdetailsmanage->busesroutesdetails_view($config['per_page'] , $offset);
		    $this->load->view('admin/busesroutesdetails_view',$data);
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
				 $this->form_validation->set_rules('RoutesId', 'route', 'required');
				// $this->form_validation->set_rules('TypeId', 'bus type', 'required');
				 $this->load->model('admin/Busesroutesdetailsmanage');
				
				if($this->form_validation->run() == true) 
		             {

							$this->load->model('admin/Busesroutesdetailsmanage');
							$data=$_POST;
					   //------------------------------------------------------------------------------		
							$CityId=$this->input->post('CityId');
							$DepartureTime=$this->input->post('DepartureTime');
							$ArrivalTime=$this->input->post('ArrivalTime');
							$RoutesId=$this->input->post('RoutesId');
							$TypeId=$this->input->post('TypeId');
				      //------------------------------------------------------------------------------		
							unset($data['flag']);
							unset($data['smt_enter']);
							unset($data['CityId']);
							unset($data['DepartureTime']);
							unset($data['ArrivalTime']);
							unset($data['FromOperating']);
							unset($data['ToOperating']);
				      //------------------------------------------------------------------------------			
							 $data['DepartureTime']=$DepartureTime[0];
							 $arival_index=count($CityId)-1;
							 $data['ArrivalTime']=$ArrivalTime[$arival_index];
							
					    $FromOperatingArr=explode("-",$this->input->post('FromOperating')); 
						   $FromOperatingStr=$FromOperatingArr['2']."-".$FromOperatingArr['1']."-".$FromOperatingArr['0'];
						$ToOperatingArr=explode("-",$this->input->post('ToOperating'));    
					    	$ToOperatingStr=$ToOperatingArr['2']."-".$ToOperatingArr['1']."-".$ToOperatingArr['0'];
							
						 $data['StartDate']=$FromOperatingStr;
						 $data['EndDate']=$ToOperatingStr;	
							
							
							$insert_id=$this->Busesroutesdetailsmanage->busesroutesdetails_add($data);
							if($insert_id>0)
							 {
						
								$BusesRoutsId=$insert_id;
								$edit='no';
							      
								 $this->Busesroutesdetailsmanage->busesroutesdetails_time_add($CityId,$DepartureTime,$ArrivalTime,$RoutesId,$TypeId,$BusesRoutsId,$edit) ;
							 	 $this->session->set_flashdata('busesroutesdetails', 'Records added successfully');
								 redirect(base_url('admin/busesroutesdetails/view'));
							 }
						
					   }
					 else
					   {   
					            $this->load->model('admin/Busesroutesdetailsmanage');
								$data['dropdown_busestype']=$this->Busesroutesdetailsmanage->dropdown_busestype();
								$data['dropdown_routes']=$this->Busesroutesdetailsmanage->dropdown_routes();
								$this->load->view('admin/busesroutesdetails_add' ,$data);
					   }  			
				
		     }
		   else
		     {
			          $this->load->model('admin/Busesroutesdetailsmanage');
			          $data['dropdown_busestype']=$this->Busesroutesdetailsmanage->dropdown_busestype();
					  $data['dropdown_routes']=$this->Busesroutesdetailsmanage->dropdown_routes();
			 		  $this->load->view('admin/busesroutesdetails_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Busesroutesdetailsmanage")  ;
		   $id=$this->input->post('id');
		   if($this->input->post('flag')=='yes') 
		     {
			   
			 
					$this->load->library('form_validation');
					$this->form_validation->set_rules('TypeId', 'bus type', 'required');
			
					if($this->form_validation->run() == true) 
					  {
					            $TimeId=$this->input->post('TimeId');
								$DepartureTime=$this->input->post('DepartureTime');
								$ArrivalTime=$this->input->post('ArrivalTime');
								$TypeId=$this->input->post('TypeId');
					  
				  
								$data=$_POST;
								unset($data['id']);
								unset($data['flag']);
								unset($data['smt_enter']);
								unset($data['DepartureTime']);
								unset($data['ArrivalTime']);
								unset($data['TimeId']);
								unset($data['FromOperating']);
								unset($data['ToOperating']);
								
								 $data['DepartureTime']=$DepartureTime[0];
								 $arival_index=count($TimeId)-1;
								 $data['ArrivalTime']=$ArrivalTime[$arival_index];
					      //-----------------------------------------------------------------------------------------------------------------------		
							    $this->Busesroutesdetailsmanage->busesroutesdetails_edit_data($data,$id);
					
								$this->Busesroutesdetailsmanage->busesroutesdetails_time_edit($DepartureTime, $ArrivalTime, $TypeId, $TimeId);
							 
							    $this->session->set_flashdata('busesroutesdetails', 'Records updated successfully');
							    redirect(base_url('admin/busesroutesdetails/view'));
					    //-----------------------------------------------------------------------------------------------------------------------			 
						 
					  }
					 else
					  {
						   
						$data['dropdown_busestype']=$this->Busesroutesdetailsmanage->dropdown_busestype();
						$data['dropdown_routes']=$this->Busesroutesdetailsmanage->dropdown_routes();
						$data['edit_busesroutesdetails']=$this->Busesroutesdetailsmanage->busesroutesdetails_edit($id);
						$data['edit_buses_route_city_time']=$this->Busesroutesdetailsmanage->buses_route_city_time($id);
						$this->load->view('admin/busesroutesdetails_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
		       
					
						$id=$this->input->get('id');
						$data['dropdown_busestype']=$this->Busesroutesdetailsmanage->dropdown_busestype();
						$data['dropdown_routes']=$this->Busesroutesdetailsmanage->dropdown_routes();
						$data['edit_busesroutesdetails']=$this->Busesroutesdetailsmanage->busesroutesdetails_edit($id);
						$data['edit_buses_route_city_time']=$this->Busesroutesdetailsmanage->buses_route_city_time($id);
						$this->load->view('admin/busesroutesdetails_modify',$data);
	        
		  }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Busesroutesdetailsmanage');
			$delete_sussess=$this->Busesroutesdetailsmanage->busesroutesdetails_delete($_REQUEST['id'])  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('busesroutesdetails', 'Records deleted successfully');
		       redirect(base_url('admin/busesroutesdetails/view'));
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
								$this->load->model('admin/Busesroutesdetailsmanage');
								$delete_sussess=$this->Busesroutesdetailsmanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('busesroutesdetails', 'Records deleted successfully');
									   redirect(base_url('admin/busesroutesdetails/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('busesroutesdetails', 'Nothing to delete');
									   redirect(base_url('admin/busesroutesdetails/view'));
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
								$this->load->model('admin/Busesroutesdetailsmanage');
								$data['Status']='N';
								$delete_sussess=$this->Busesroutesdetailsmanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('busesroutesdetails', 'Records deactivate successfully');
									   redirect(base_url('admin/busesroutesdetails/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('busesroutesdetails', 'Nothing to activate');
									   redirect(base_url('admin/busesroutesdetails/view'));
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
								$this->load->model('admin/Busesroutesdetailsmanage');
								$data['Status']='Y';
								$delete_sussess=$this->Busesroutesdetailsmanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('busesroutesdetails', 'Records activated successfully');
									   redirect(base_url('admin/busesroutesdetails/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('busesroutesdetails', 'Nothing to activate');
									   redirect(base_url('admin/busesroutesdetails/view'));
						   }			 
					}
		
		  }
		  
		  
		  
		 public function routes_view()
		    {
			    $id=$this->input->post('productId');
				$this->load->model('admin/Busesroutesdetailsmanage');
				$data['route_city']=$this->Busesroutesdetailsmanage->buses_routes_city($id);
				$this->load->view('admin/buses_routes_city',$data);
					   
			}
		  
	  
	  
}

?>
