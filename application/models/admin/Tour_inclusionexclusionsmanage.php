<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
class Tour_inclusionexclusionsmanage extends CI_Model
   {
      
	   function inc_exc_insert_data($data_Inc,$data_Exc,$data,$TourId)
	     {
		      
			   // --------------- first delete nclusions -------------------------
			  	    $this->db->where('TourId', $TourId);
					$this->db->delete('usc_tour_inclusion');
			  // --------------- first delete nclusions -------------------------
			  	    $this->db->where('TourId', $TourId);
					$this->db->delete('usc_tour_exclusion');	
			  //-------------------- Insert inclusion ---------------------------			
			     for($i=0;$i<count($data_Inc);$i++)
				    { 
					    $data_2=array('InclusionID' => $data_Inc[$i], 'TourId' => $TourId); 
					    $this->db->insert('usc_tour_inclusion', $data_2);
				    } 
			  //-------------------- Insert inclusion ---------------------------			
			     for($i=0;$i<count($data_Exc);$i++)
				    { 
					    $data_3=array('ExclusionID' => $data_Exc[$i], 'TourId' => $TourId); 
					    $this->db->insert('usc_tour_exclusion', $data_3);
				    } 
					
					    $this->db->where('TourId', $TourId);
						$query = $this->db->update(' usc_tourgeneralinfo',$data);
					
					$this->db->close(); 		 
		 
		 
		 }	
		 
		 //------------------------------------edit view-----------------------------------------------------
			 
		 public function note_edit($TourId)  
		    {
					$this->db->select('InclusionNote,ExclusionNote')
					     ->where('TourId', $TourId);
					$query = $this->db->get('usc_tourgeneralinfo');
					return $query->result_array();
					$this->db->close();
			
			}
	    //------------------------------------edit view-----------------------------------------------------
		   function inclusion_exclusion_view()
		      {
			            $this->db->select('TourInclusionsId,TourInclusionsName')
				  		          ->where('Status', 'Y')
								  ->order_by('SortOrder');
						$query = $this->db->get('usc_tourinclusions');
						return $query->result_array();
						$this->db->close();
			  
			  }
		   		
	       
		    function inclusion_edit($id)
			   {
			      // Deleteing in Table(usc_locations) of Database(usc)
			    			  
						$this->db->where('TourId', $id);
						$query = $this->db->get('usc_tour_inclusion');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	      function exclusion_edit($id)
			   {
			      // Deleteing in Table(usc_locations) of Database(usc)
			    			  
						$this->db->where('TourId', $id);
						$query = $this->db->get('usc_tour_exclusion');
						return $query->result_array();
						$this->db->close();
					
						
			  } 
	
			  
			  
	
   }
?>