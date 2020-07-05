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
      public function userLogin($username,$password){
         $this->db->where('user_username',$username);
         $this->db->where('user_password',$password);
         $result = $this->db->get('users');
         if($result->num_rows() > 0){
            return $result->row(0)->user_id;
         }else{
            return false;
         }
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