<?php
   class User_model extends CI_Model {
      public function getUsers($userID,$userPassword){
         $this->db->where(
            [
               'user_username'=>$userID,
               'user_password'=>$userPassword,
            ],
         );
         $tbl_usr = $this->db->get('users');
         return $tbl_usr->result();
      }
      public function createUser($info){
         $this->db->insert('users',$info);
      }
   }
?>