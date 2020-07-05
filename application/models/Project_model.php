<?php
   class Project_model extends CI_Model {
      public function getProjects(){
         $result = $this->db->get('projects');
         return $result->result();
      }
      public function getAProject($prj_id){
         $this->db->where('prj_id',$prj_id);
         $result = $this->db->get('projects');
         return $result->row();
      }
   }
?>