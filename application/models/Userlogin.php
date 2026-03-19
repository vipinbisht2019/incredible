<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');  
   /**
   * 
   */
   class Userlogin extends CI_Model
   {

        public function __construct()
          {
             
              $DB1= $this->load->database();
           }

			 function auth()
			 {
				# code...
             $query = $this->db->get('hem_admin');
             return $query->result_array();

             $this->db->close();
			 }


          function insert($fname,$lname,$desc)
            {
                
               $query = $this->db->query("INSERT INTO ci_users (id, Firstname, LastName, Description) VALUES (NULL, '$fname', '$lname', '$desc')");  

               echo $this->db->affected_rows();
            }
   }
   


?>