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
      public function updateUser($info,$id){
         $this->db->where('user_id',$id);
         $this->db->update('users',$info);
      }
      public function deleteUser($id){
         $this->db->where('user_id',$id);
         $this->db->delete('users');
      }
   }
?>