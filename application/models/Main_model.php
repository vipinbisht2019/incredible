<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   /**
     
   */
class Main_model extends MY_model
  {

	
				
		public function menu()
		    {
			   return $this->navigation();
			}	
	   
	   public function footer_menu()
		    {
			   return $this->facilities_footer();
			}			
	    public function footer_about()
		 {
		   return $this->aboutus_footer();
		 }	
			
				
				
	
   // ------------------------------ other fuctiin goes here to get static pages content -main_model----------------------------------------			
	 
    
}
   


?>