<?php
   class Projects extends CI_Controller {
      public function __construct()	{
         parent::__construct();
         if(!$this->session->userdata('logged_in')){
            $this->session->set_flashdata('error_project','You are not authorized to Access this Project');
            redirect('home/index');
         }
      }
      public function index()	{
         $data['projects'] = $this->project_model->getProjects();
         $data['main_view'] = "projects/index";
         $this->load->view('layout/main',$data);
      }
      public function details() {
         $data['main_view'] = "projects/details";
         $this->load->view('layout/main',$data);
      }
   }
?>