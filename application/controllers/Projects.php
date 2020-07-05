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
      public function details($prj_id) {
         $data['project'] = $this->project_model->getAProject($prj_id);
         $data['main_view'] = "projects/details";
         $this->load->view('layout/main',$data);
      }
      public function create(){
         $this->form_validation->set_rules('prj_name', 'Project Name', 'trim|required|min_length[4]');
         $this->form_validation->set_rules('prj_body', 'Project Description', 'trim|required|min_length[4]');
         if($this->form_validation->run() == FALSE){
            $data = array(
               'project_adding' => validation_errors(),
            );
            $this->session->set_flashdata($data);
            $data['main_view'] = "projects/create";
            $this->load->view('layout/main',$data);
         }else{
            $prj_name = $this->input->post('prj_name');
            $prj_body = $this->input->post('prj_body');
            $data = array(
               "prj_name" => $prj_name,
               "prj_body" => $prj_body,
               "user_id" => $this->session->userdata('user_id'),
            );
            $this->project_model->addProject($data);
            redirect(base_url()."projects/");
         }
      }
      public function update($prjID){
         $this->form_validation->set_rules('prj_name', 'Project Name', 'trim|required|min_length[4]');
         $this->form_validation->set_rules('prj_body', 'Project Description', 'trim|required|min_length[4]');
         if($this->form_validation->run() == FALSE){
            $data = array(
               'project_update' => validation_errors(),
            );
            $this->session->set_flashdata($data);
            $data['prjID'] = $prjID;
            $data['main_view'] = "projects/update";
            $this->load->view('layout/main',$data);
         }else{
            $prj_name = $this->input->post('prj_name');
            $prj_body = $this->input->post('prj_body');
            $data = array(
               "prj_name" => $prj_name,
               "prj_body" => $prj_body,
               "user_id" => $this->session->userdata('user_id'),
            );
            $this->project_model->updateProject($data,$prjID);
            redirect(base_url()."projects/details/".$prjID);
         }
      }
      public function delete($prjID){
         if($this->project_model->deleteProject($prjID)){
            redirect(base_url()."projects");
         }

      }
   }
?>