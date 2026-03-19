<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busesseatmap extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view(){
		        $this->load->model('admin/Busesseatmapmanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/busesseatmap/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Busesseatmapmanage->get_tatal();
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
				
		   $data['busesseatmap']=$this->Busesseatmapmanage->busesseatmap_view($config['per_page'] , $offset);
		   $this->load->view('admin/busesseatmap_view',$data);
		 
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
	    //echo"------------".$this->input->post('flag');
		// die();
		 
	if($this->input->post('flag')=='yes') 
		   {
		      //echo"<pre>";
			     //print_r($_POST);
			  // echo"</pre>";
		  
		       // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('SeatingTitle', 'title', 'required');
				$this->form_validation->set_rules('TotalSeats', 'total seats', 'required');
				
				$this->load->model('admin/Busesseatmapmanage');
			
				if($this->form_validation->run() == true) 
		             {

						   $this->load->model('admin/Busesseatmapmanage');
							$data=$_POST;
					
							unset($data['flag']);
							unset($data['smt_enter']);
							unset($data['DeckType1']);
							unset($data['DeckType2']);
							unset($data['SeatLocationID']);
							unset($data['SeatLocationSLID']);
							$DeckType1=$this->input->post('DeckType1'); 
							$SeatTypeId=$this->input->post('SeatTypeId');
							
							
							$insert_id=$this->Busesseatmapmanage->busesseatmap_add($data);  
							if($insert_id>0)
							  {
							     //---------------------------------- Insett upper deck location id -------------------------------	  
								  $SeatLocationIDArr=$this->input->post('SeatLocationID');
								  for($j=0;$j<count($SeatLocationIDArr);$j++) 
								     {
									    $data_1['MapId']=$insert_id;
									    $data_1['DeckType']=$DeckType1;
									    $data_1['SeatTypeId']=$SeatTypeId;
									    $data_1['SeatLocationID']=$SeatLocationIDArr[$j];
										$this->Busesseatmapmanage->busesseatmap_location_add($data_1);
									 } 
								 //---------------------------------- Insert lower deck location id -------------------------------	  if seating type is not only lower deck 
								     
									 if($SeatTypeId!=1)
									      {
										        $DeckType2=$this->input->post('DeckType2');
										  
												$SeatLocationSLIDArr=$this->input->post('SeatLocationSLID');
												  for($j=0;$j<count($SeatLocationSLIDArr);$j++) 
													 {
														$data_1['MapId']=$insert_id;
														$data_1['DeckType']=$DeckType2;
														$data_1['SeatTypeId']=$SeatTypeId;
														$data_1['SeatLocationID']=$SeatLocationSLIDArr[$j];
														$this->Busesseatmapmanage->busesseatmap_location_add($data_1);
													 } 
									       }
									 
							    
								$this->session->set_flashdata('busesseatmap', 'Records added successfully');
								redirect(base_url('admin/busesseatmap/view'));
							  }
						
					   }
					 else
					   {

				         $data['buses_seating']=$this->Busesseatmapmanage->buses_seating_type();

					      $this->load->view('admin/busesseatmap_add',$data);
					   }  			
				
		     }
		   else
		     {
			         $this->load->model('admin/Busesseatmapmanage');
					 $data['buses_seating']=$this->Busesseatmapmanage->buses_seating_type();
			         $this->load->view('admin/busesseatmap_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Busesseatmapmanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('SeatingTitle', 'title', 'required');
				    $this->form_validation->set_rules('TotalSeats', 'total seats', 'required');
			         $id=$this->input->post('id');
					if($this->form_validation->run() == true) 
					  {
				  
							 $data=$_POST;
							 unset($data['flag']);
							 unset($data['smt_enter']);
							 unset($data['id']);
							 unset($data['DeckType1']);
						 	 unset($data['DeckType2']);
							 unset($data['SeatLocationID']);
							 unset($data['SeatLocationSLID']);
							 $DeckType1=$this->input->post('DeckType1');
							 $SeatTypeId=$this->input->post('SeatTypeId');
							 
							// ---------------------first delete all location id------------------------- 
							 $this->Busesseatmapmanage->busesseatmap_location_delete($id);
							// --------------------- Update seatmap details  ---------------------------- 
							 $this->Busesseatmapmanage->busesseatmap_edit_data($data,$id);
							 $DeckType1=$this->input->post('DeckType1');
							 $SeatTypeId=$this->input->post('SeatTypeId');
							// --------------------- again insert new location  ------------------------- 
							     $SeatLocationIDArr=$this->input->post('SeatLocationID');
								  for($j=0;$j<count($SeatLocationIDArr);$j++) 
								     {
									    $data_1['MapId']=$id;
									    $data_1['DeckType']=$DeckType1;
									    $data_1['SeatTypeId']=$SeatTypeId;
									    $data_1['SeatLocationID']=$SeatLocationIDArr[$j];
										$this->Busesseatmapmanage->busesseatmap_location_add($data_1);
									 } 
									 
								 //---------------------------------- Insert lower deck location id -------------------------------	  if seating type is not only lower deck 
								     
									 if($SeatTypeId!=1)
									      {
										        $DeckType2=$this->input->post('DeckType2');
										  
												$SeatLocationSLIDArr=$this->input->post('SeatLocationSLID');
												  for($j=0;$j<count($SeatLocationSLIDArr);$j++) 
													 {
														$data_1['MapId']=$id;
														$data_1['DeckType']=$DeckType2;
														$data_1['SeatTypeId']=$SeatTypeId;
														$data_1['SeatLocationID']=$SeatLocationSLIDArr[$j];
														$this->Busesseatmapmanage->busesseatmap_location_add($data_1);
													 } 
									       }	  
							
							 
							 $this->session->set_flashdata('busesseatmap', 'Records updated successfully');
							 redirect(base_url('admin/busesseatmap/view'));
						 
					  }
					 else
					  {
					        $data['buses_seating']=$this->Busesseatmapmanage->buses_seating_type();
						    $data['edit_busesseatmap']=$this->Busesseatmapmanage->busesseatmap_edit($id);
							    
								$SeatTypeId=$data['edit_busesseatmap'][0]['MapId'];
								$DeckType='L';
								$data['edit_lower_deck']=$this->Busesseatmapmanage->busesseatmap_location_edit($SeatTypeId,$DeckType);
								
								$DeckType='U';
								$data['edit_upper_deck']=$this->Busesseatmapmanage->busesseatmap_location_edit($SeatTypeId,$DeckType);
							
							
						        $this->load->view('admin/busesseatmap_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
		        $id=$this->input->get('id');
		          $data['buses_seating']=$this->Busesseatmapmanage->buses_seating_type();
			      $data['edit_busesseatmap']=$this->Busesseatmapmanage->busesseatmap_edit($id);
				   
				   $SeatTypeId=$data['edit_busesseatmap'][0]['MapId'];
				   $DeckType='L';
				   $data['edit_lower_deck']=$this->Busesseatmapmanage->busesseatmap_location_edit($SeatTypeId,$DeckType);
				   
				    $DeckType='U';
				    $data['edit_upper_deck']=$this->Busesseatmapmanage->busesseatmap_location_edit($SeatTypeId,$DeckType);
		
				  
				 // busesseatmap_location_edit
			      $this->load->view('admin/busesseatmap_modify',$data);
	        
		  }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Busesseatmapmanage');
			 $id=$this->input->get('id');
			$delete_sussess=$this->Busesseatmapmanage->busesseatmap_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('busesseatmap', 'Records deleted successfully');
		       redirect(base_url('admin/busesseatmap/view'));
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
						      
								$this->load->model('admin/Busesseatmapmanage');
								foreach($delete_id as $id_str)
								  {
								    $delete_sussess=$this->Busesseatmapmanage->admin_delete_bulk($id_str);
								  }	
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('busesseatmap', 'Records deleted successfully');
									   redirect(base_url('admin/busesseatmap/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('busesseatmap', 'Nothing to delete');
									   redirect(base_url('admin/busesseatmap/view'));
						   }			 
					   
					}
				  // ------------------------------- Bulk Action  deactivate   ------------------------------	 
				 if($this->input->post('Deactivate')=='Deactivate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						      
								$this->load->model('admin/Busesseatmapmanage');
								$data['Status']='N';
								foreach($id as $id_str)
								  {
								$delete_sussess=$this->Busesseatmapmanage->admin_deactivate_bulk($id_str,$data);
								}
											
									   $this->session->set_flashdata('busesseatmap', 'Records deactivate successfully');
									   redirect(base_url('admin/busesseatmap/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('busesseatmap', 'Nothing to activate');
									   redirect(base_url('admin/busesseatmap/view'));
						   }			 
					}
			  // ------------------------------- Bulk Action activate  ------------------------------			
				if($this->input->post('Activate')=='Activate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						      
								$this->load->model('admin/Busesseatmapmanage');
								$data['Status']='Y';
								foreach($id as $id_str)
								  {
								$delete_sussess=$this->Busesseatmapmanage->admin_activate_bulk($id_str,$data);
								}
											
									   $this->session->set_flashdata('busesseatmap', 'Records activated successfully');
									   redirect(base_url('admin/busesseatmap/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('busesseatmap', 'Nothing to activate');
									   redirect(base_url('admin/busesseatmap/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
