<?php
   class Users extends CI_Controller{
      public function login(){
         $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
         $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
         if($this->form_validation->run() == FALSE){
            $data = array(
               'errors' => validation_errors(),
            );
            $this->session->set_flashdata($data);
            redirect("home");
         }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $result = $this->user_model->userLogin($username, $password);
            if($result){
               $user_data = array(
                  "username" => $username,
                  "user_id" => $result,
                  "logged_in" => TRUE
               );
               $this->session->set_userdata($user_data);
               $this->session->set_flashdata('login_suc',"You are logged in");
               $data['main_view'] = "admin/home";
               $this->load->view('layout/main',$data);
               // redirect('home/index');
            }else{
               $this->session->set_flashdata('login_fail',"Invalid Credentials");
               redirect('home/index');
            }
         }
      }
      public function logout(){
         $this->session->sess_destroy();
         redirect('home/index');
      }
      // public function index(){
      //    $this->load->view('welcome_message');
      // }
      // public function show($user){
      //    $data['result'] = $this->user_model->getUsers($user,1234);
      //    $this->load->view('user_view',$data);
      // }
      // public function addUser(){
      //    $username = 'spiderman';
      //    $fullName = 'Peter Parker';
      //    $password = 'ironman';
      //    $this->user_model->createUser(
      //       [
      //          'user_username'=>$username,
      //          'user_full_name'=>$fullName,
      //          'user_password'=>$password,
      //       ],
      //    );
      // }
      // public function updateUser($userID){
      //    $username = 'batman';
      //    $fullName = 'Mr. Wayne';
      //    $password = 'I Love Rachel';
      //    $this->user_model->updateUser(
      //       [
      //          'user_username' => $username,
      //          'user_full_name' => $fullName,
      //          'user_password' => $password,
      //       ],$userID,
      //    );
      // }
      // public function deleteUser($userID){
      //    $this->user_model->deleteUser($userID);
      // }
   }
?>