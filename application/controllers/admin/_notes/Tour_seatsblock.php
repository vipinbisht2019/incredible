<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_seatsblock extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		      $this->load->model('admin/Tour_seatsblockmanage');
			   
			   $id=$this->input->get('id');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/tour_seatsblock/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Tour_seatsblockmanage->get_tatal($id);
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
				
		   $data['seatsblock']=$this->Tour_seatsblockmanage->seatsblock_view($config['per_page'] , $offset,$id);
		   $data['id']=$id;
		   $this->load->view('admin/tour_seatsblock_view',$data);
		   
		   
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
	    //echo"------------".$this->input->post('flag');
    if($this->input->post('flag')=='yes') 
		   {
				 // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('TypeId', 'bus type', 'required');
			
	
			  if($this->form_validation->run() == true) 
		             {
							$this->load->model('admin/Tour_seatsblockmanage');
							$TourId=$this->input->post('TourId');
							$TypeId=$this->input->post('TypeId');
							$SeatNo=$this->input->post('SeatNo');
							$BlockDate=$this->input->post('BlockDate');
		              
		                     if(count($SeatNo) > 0 && count($BlockDate) > 0)
							    {
								   $this->Tour_seatsblockmanage->seatsblock_add($TourId,$TypeId,$SeatNo,$BlockDate);
								   $this->session->set_flashdata('seatsblock', 'Records updated successfully');
								   redirect(base_url('admin/tour_seatsblock/view?id='.$TourId));
								 
							    }
							  else
							    {
								    $this->session->set_flashdata('seatsblock', 'Records updated successfully');
									redirect(base_url('admin/tour_seatsblock/add?id='.$TourId));
							    } 	 
							
						
					   }
					 else
					   {
					   
								$TourId=$this->input->post('TourId');
								$this->load->model('admin/Tour_seatsblockmanage');
								$data['tour_buse_dropdown']=$this->Tour_seatsblockmanage->dropdown_busestype($TourId);
								$data['tours_details']=$this->Tour_seatsblockmanage->get_tours_details($TourId);
								$bustype_id=$data['tour_buse_dropdown'][0]['TypeId'];
								$data['TourId']=$TourId;
								$data['bustype_id']=$bustype_id;
												
								$DeckType='L';
								$data['tour_seatmap_seatno']=$this->Tour_seatsblockmanage->buses_seatmap_seatno($bustype_id, $DeckType);
				                $data['tour_busseatmap']=$this->Tour_seatsblockmanage->get_tour_busseatmap($bustype_id); // old
								$data['tour_busseatbooked']=array();//$this->Booktour_page->get_tour_seatbooked($DepartureDate,$bustype_id);			
								$this->load->view('admin/tour_seatsblock_add',$data);
					   }  			
				
		     }
		   else
		     {   
			            $TourId=$this->input->get('id');
						$this->load->model('admin/Tour_seatsblockmanage');
						$data['tour_buse_dropdown']=$this->Tour_seatsblockmanage->dropdown_busestype($TourId);
						$data['tours_details']=$this->Tour_seatsblockmanage->get_tours_details($TourId);
						$bustype_id=$data['tour_buse_dropdown'][0]['TypeId'];
						$data['TourId']=$TourId;
						$data['bustype_id']=$bustype_id;
										
						$DeckType='L';
						$data['tour_seatmap_seatno']=$this->Tour_seatsblockmanage->buses_seatmap_seatno($bustype_id, $DeckType);
						
						$data['tour_busseatmap']=$this->Tour_seatsblockmanage->get_tour_busseatmap($bustype_id); // old
						$data['tour_busseatbooked']=array();//$this->Booktour_page->get_tour_seatbooked($DepartureDate,$bustype_id);			
	
						$this->load->view('admin/tour_seatsblock_add',$data);
						   
		     }	
		 
	}

//-------------------------------------------------------------------------------------------------		
//-------------------------------------------------------------------------------------------------	
public function edit()
  {	
     		// -------------------------- form vaildation ---------------------------------------
			
	    if($this->input->post('flag')=='yes') 
		    {
						
					 error_reporting(0);
							
							
							$this->load->model('admin/Tour_seatsblockmanage');
							$block_id=$this->input->post('id');
							$SeatNo=$this->input->post('SeatNo');
							$BookedSeatStr=$this->input->post('BookedSeatStr');
							$BookedSeatArr=@explode("*", $BookedSeatStr);
						
							$BlockedSeatArr=array_diff($SeatNo,$BookedSeatArr);
							$data['SeatNo']=@implode(",", $BlockedSeatArr);
					
							
							
							$this->Tour_seatsblockmanage->tourblock_edit_data($data,$block_id);
						
							$tid=$this->input->post('tid');
							$this->session->set_flashdata('seatsblock', 'Records updated successfully');
							redirect(base_url('admin/tour_seatsblock/view?id='.$tid));
						
					
				
			}
		  else
		   {
		                $TourId=$this->input->get('tid');
						$id=$this->input->get('id');
						
						$this->load->model('admin/Tour_seatsblockmanage');
						$data['tour_buse_blockedit']=$this->Tour_seatsblockmanage->get_tour_busblock_edit($id);
						
						$bustype_id=$data['tour_buse_blockedit'][0]['TypeId'];
						$DepartureDate=$data['tour_buse_blockedit'][0]['BlockDate'];
						
						$data['tour_busseatbooked']=$this->Tour_seatsblockmanage->get_tour_seatbooked($DepartureDate,$bustype_id,$TourId);
				
						
						$data['tour_buse_dropdown']=$this->Tour_seatsblockmanage->dropdown_busestype($TourId);
						$data['tours_details']=$this->Tour_seatsblockmanage->get_tours_details($TourId);
						
						$data['TourId']=$TourId;
						$data['bustype_id']=$bustype_id;
										
						$DeckType='L';
						$data['tour_seatmap_seatno']=$this->Tour_seatsblockmanage->buses_seatmap_seatno($bustype_id, $DeckType);
						$data['tour_busseatmap']=$this->Tour_seatsblockmanage->get_tour_busseatmap($bustype_id); // old
						//$data['tour_busseatbooked']=array();//$this->Booktour_page->get_tour_seatbooked($DepartureDate,$bustype_id);		
						$this->load->view('admin/tour_seatsblock_modify',$data);
			  
		   
		   }		
				  
     
        
  }


// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Tour_seatsblockmanage');
			$id=$this->input->get('id');
			$did=$this->input->get('did');
			$delete_sussess=$this->Tour_seatsblockmanage->seatsblock_delete($did)  ; 
		    if($delete_sussess==1)	
		     {			
			    $this->session->set_flashdata('seatsblock', 'Records deleted successfully');
		        redirect(base_url('admin/tour_seatsblock/view?id='.$id));
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
					     $delete_id=$this->input->post('bb');
						 $TourId=$this->input->post('TourId');
						 
						 if(count($delete_id)>0)
						  {
						       
							  $this->load->model('admin/Tour_seatsblockmanage');
							  for($i=0;$i<count($delete_id);$i++)
							    {	
								   $delete_sussess=$this->Tour_seatsblockmanage->admin_delete_bulk($delete_id[$i]);
								} 
								
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('seatsblock', 'Records deleted successfully');
									   redirect(base_url('admin/tour_seatsblock/view?id='.$TourId));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('seatsblock', 'Nothing to delete');
									   redirect(base_url('admin/tour_seatsblock/view?id='.$TourId));
						   }			 
					   
					}
	
		 }
		 
	// ------------------------------- onchange function ------------------------	
		public  function tour_buses_seatmap()
		  {
				
					$bustype_id=$this->input->post('bustype_id');
					$this->load->model('admin/Tour_seatsblockmanage');
					$DeckType='L';
					$data['tour_seatmap_seatno']=$this->Tour_seatsblockmanage->buses_seatmap_seatno($bustype_id, $DeckType);
					$data['tour_busseatmap']=$this->Tour_seatsblockmanage->get_tour_busseatmap($bustype_id);
					$data['tour_busseatbooked']=array();//$this->Booktour_page->get_tour_seatbooked($DepartureDate,$bustype_id);
					
					$this->load->view('admin/tour_seatsblock_map',$data);	
		  }	 
			 
		 
 }

?>
