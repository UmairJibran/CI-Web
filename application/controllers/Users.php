<?php
   class Users extends CI_Controller{
      public function index(){
         $this->load->view('welcome_message');
      }
      public function show(){
         $data['result'] = $this->user_model->getUsers();
         $this->load->view('user_view',$data);
      }
   }
?>