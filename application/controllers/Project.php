<?php
   class Project extends CI_Controller {
      public function index()	{
         $data['main_view'] = "project/index";
         $this->load->view('layout/main',$data);
      }
   }
?>