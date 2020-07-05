<?php
   class Task extends CI_Controller {
      public function displayTasks($tskID) {
         $data['task'] = $this->task_model->getTask($tskID);
         $data['main_view'] = "tasks/display";
         $this->load->view('layout/main',$data);
      }
      
      public function create($prjID){
         $this->form_validation->set_rules('task_name', 'Task Name', 'trim|required|min_length[4]');
         $this->form_validation->set_rules('task_desc', 'Task Description', 'trim|required|min_length[4]');
         if($this->form_validation->run() == FALSE){
            $data = array(
               'task_adding' => validation_errors(),
            );
            $this->session->set_flashdata($data);
            $data['main_view'] = "tasks/add";
            $this->load->view('layout/main',$data);
         }else{
            $tsk_name = $this->input->post('tsk_name');
            $tsk_desc = $this->input->post('tsk_desc');
            $data = array(
               "tsk_name" => $tsk_name,
               "tsk_desc" => $tsk_desc,
               "prj_id" => $prjID,
            );
            $this->task_model->addTask($data);
            redirect(base_url()."projects/".$prjID);
         }
      }
   }
?>