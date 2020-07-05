<h2>Create a new Task</h2>
<?php
   if($this->session->flashdata('task_adding')){
      echo $this->session->flashdata('task_adding');
   }
   $lblAttributes = array('class' => 'sr-only');
   $attributes = array('id'=>'task');
   $prj_name = array('class' => 'form-control mb-2','placeholder' => 'Enter Task Name', 'name' =>'tsk_name');
   $prj_body = array('class' => 'form-control mb-2','placeholder' => 'Enter Task Description', 'name' =>'tsk_desc');
   $prj_submit = array('class' => 'btn btn-primary','value' => 'Create');
?>
<?php echo form_open('task/create',$attributes); ?>
<?php echo form_label('Task Name','',$lblAttributes); ?>
<?php echo form_input($prj_name); ?>
<?php echo form_label('Task Description','',$lblAttributes); ?>
<?php echo form_input($prj_body); ?>
<?php echo form_submit($prj_submit); ?>
<?php echo form_close(); ?>