<?php
   class User_model extends CI_Model {
      public function getUsers(){
         $tbl_usr = $this->db->get('users');
         return $tbl_usr->result();
      }
   }
?>