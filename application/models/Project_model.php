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
      public function addProject($data){
         $this->db->insert('projects',$data);
      }
      public function updateProject($info,$id){
         $this->db->where('prj_id',$id);
         $this->db->update('projects',$info);
      }
      public function deleteProject($id){
         $this->db->where('prj_id',$id);
         $this->db->delete('projects');
         return true;
      }
   }
?>