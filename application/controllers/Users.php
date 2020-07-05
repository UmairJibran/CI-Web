<?php
   class Users extends CI_Controller{
      public function index(){
         $this->load->view('welcome_message');
      }
      public function show($user){
         $data['result'] = $this->user_model->getUsers($user,1234);
         $this->load->view('user_view',$data);
      }
      public function addUser(){
         $username = 'spiderman';
         $fullName = 'Peter Parker';
         $password = 'ironman';
         $this->user_model->createUser(
            [
               'user_username'=>$username,
               'user_full_name'=>$fullName,
               'user_password'=>$password,
            ],
         );
      }
   }
?>