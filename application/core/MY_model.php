<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_model extends CI_Model 
 {
 
	  function navigation()
		{	
			
				// Parent Menu
			    $this->db->select('*');	
				$this->db->where('ParentID', '0');
				$this->db->order_by("Ordering", "asc");
			    $this->db->where('IsActive', 'Y');
				$this->db->where('view', 'Y');
				$query = $this->db->get('usc_menu');
				$i = 0;
			$parentitem=array();
			 foreach($query->result() as $row)
				{
			
					$parentitem[$i]['MenuID'] = $row->MenuID;
					$parentitem[$i]['MenuName'] = $row->MenuName;
					$parentitem[$i]['AssociatedId'] = $row->AssociatedId;
					$parentitem[$i]['MenuTitle'] = $row->MenuTitle;
		        	$parentitem[$i]['ParentID'] = $row->ParentID;
					$parentitem[$i]['MenuImage'] = $row->menu_image;
					$parentitem[$i]['MenuDescription'] = $row->menu_description;
					$MID=$row->MenuID;
				
					if($MID!=26 && $MID!=27)
					 {
							
						$this->db->select('*');	
						$this->db->order_by('Ordering', 'asc');
						$this->db->where('IsActive', 'Y');
						$this->db->where('view', 'Y');
						$this->db->where('ParentID', $parentitem[$i]['MenuID']);
						$subquery = $this->db->get('usc_menu');
				
						$sub = 0;
				
						foreach($subquery->result() as $row)
						{
				
							$parentitem[$i]['child'][$sub]['MenuID']= $row->MenuID;
							$parentitem[$i]['child'][$sub]['MenuName'] = $row->MenuName;
							$parentitem[$i]['child'][$sub]['AssociatedId'] = $row->AssociatedId;
							$parentitem[$i]['child'][$sub]['MenuTitle'] = $row->MenuTitle;
							$parentitem[$i]['child'][$sub]['ParentID'] = $row->ParentID;
							$parentitem[$i]['child'][$sub]['MenuImage'] = $row->menu_image;
							$parentitem[$i]['child'][$sub]['MenuDescription'] = $row->menu_description;
							$sub++;
						}
												
						
					}
					
					if($MID==26){
					
						$this->db->select('locationsId, locationsName,menu_image,location_menudescription')
													 ->where('Status','Y')
													 ->where('IsViewInMenu', 'Y')
													 ->where('ParentID','0')
													 ->order_by('SortOrder');
							$querydesti=$this->db->get('usc_locations');
							
							  $sub = 0;
							  
							  foreach($querydesti->result() as $row)
							  {
							  	$locationName = str_replace(' ', '-', $row->locationsName);
								$locationsName = ucwords($locationName);
								$parentitem[$i]['child'][$sub]['MenuID']= $row->locationsId;
								$parentitem[$i]['child'][$sub]['MenuName'] = $row->locationsName;
								$parentitem[$i]['child'][$sub]['MenuTitle'] = 'destination/destination_list/'.$locationsName;  //$row->AssociatedId;
								//$parentitem[$i]['child'][$sub]['MenuTitle'] = $row->locationsName;
								$parentitem[$i]['child'][$sub]['ParentID'] = $row->locationsId;      // not need in sub menu
								$parentitem[$i]['child'][$sub]['MenuImage'] = $row->menu_image;
								$parentitem[$i]['child'][$sub]['MenuDescription'] = $row->location_menudescription;
								$sub++;
							  
							  }
					
					}
					
					if($MID==27){
					
						$this->db->select('TheamsId, TheamsName,menu_image,theme_menudescription')
													 ->where('Status','Y')
													 ->where('IsViewInMenu', 'Y')
													 ->order_by('SortOrder');
							$querydesti=$this->db->get('usc_theams');
							
							  $sub = 0;
							  
							  foreach($querydesti->result() as $row)
							  {
							  	$theme = str_replace(' ', '-', $row->TheamsName);
								$themeName = ucwords($theme);
								$parentitem[$i]['child'][$sub]['MenuID']= $row->TheamsId;
								$parentitem[$i]['child'][$sub]['MenuName'] = $row->TheamsName;
							
								$parentitem[$i]['child'][$sub]['MenuTitle'] = 'travel_themes/travel_theme_list/'.$themeName;  //$row->AssociatedId;
								//$parentitem[$i]['child'][$sub]['MenuTitle'] = $row->TheamsName;
								$parentitem[$i]['child'][$sub]['ParentID'] = $row->TheamsId;      // not need in sub menu
								$parentitem[$i]['child'][$sub]['MenuImage'] = $row->menu_image;
								$parentitem[$i]['child'][$sub]['MenuDescription'] = $row->theme_menudescription;
								$sub++;
							  
							  }
					
					}
					
						   			
					
								 $i++;
				} // end main foreach
			
				
			
				return $parentitem;
			} 
	 
	public function destimenu(){
		
		$this->db->select('locationsId, locationsName')
				->where('Status','Y')
				->order_by('SortOrder');
		$query=$this->db->get('usc_locations');
		return $query->result_array();
		$this->db->close();	
	
	}
	 
//  -------------------------------- get footer menu dynamically -----------------------------	

	 public function facilities_footer()
		  {
				 
					$this->db->select('FId,Title,SortOrder,IsViewMenu,Images');	
					$this->db->order_by('SortOrder', 'asc');
					$this->db->where('Status', 'Y');
					$this->db->where('IsViewMenu', 'Y');
					$subquery = $this->db->get('usc_facilities');
					
					$sub = 0;
					
					 
					
					foreach($subquery->result() as $row)
					{
					
						$parentitem[$sub]['MenuID']= $row->FId;
						$parentitem[$sub]['MenuName'] = $row->Title;
						$parentitem[$sub]['AssociatedId'] = 'facilities';//$row->AssociatedId;
						$parentitem[$sub]['MenuTitle'] = $row->SortOrder;
						$parentitem[$sub]['ParentID'] = $row->IsViewMenu;
						$sub++;
					}
			    
				return $parentitem;		
				
			 }	
    //---------------------------------------------------- function get about text for footer ------------------------------------------	
	
	   public function aboutus_footer()
	      {
		         $this->db->select('page_name,page_id,page_description');		  
				$this->db->where('page_id', '91');
	   		    $query = $this->db->get('usc_static_pages');
				return $query->result_array();
				$this->db->close();
		  
		  }		 
	 
	
} // --------------------- end class--------------------------------------


?>
