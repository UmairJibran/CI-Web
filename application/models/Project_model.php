<?php
   class Project_model extends CI_Model {
      public function getProjects(){
         $result = $this->db->get('projects');
         return $result->result();
      }
   }
?>