<?php
   class Task_model extends CI_Model {
      public function getTask($tskID){
         $this->db->where('tsk_id',$tskID);
         $query = $this->db->get('tasks');
         return $query->row();
      }
      public function addTask($data){
         $this->db->insert('tasks',$data);
      }
   }
?>