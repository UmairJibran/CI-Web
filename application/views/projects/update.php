<h2>Update Project</h2>
<?php
   if($this->session->flashdata('project_update')){
      echo $this->session->flashdata('project_update');
   }
   $lblAttributes = array('class' => 'sr-only');
   $attributes = array('id'=>'project');
   $prj_name = array('class' => 'form-control mb-2', 'placeholder' => 'Enter New Name','name' =>'prj_name');
   $prj_body = array('class' => 'form-control mb-2', 'placeholder' => 'Enter New Description','name' =>'prj_body');
   $prj_submit = array('class' => 'btn btn-primary','value' => 'Update');
?>
<?php echo form_open('projects/update/'.$prjID,$attributes); ?>
<?php echo form_label('Porject Name','',$lblAttributes); ?>
<?php echo form_input($prj_name); ?>
<?php echo form_label('Porject Description','',$lblAttributes); ?>
<?php echo form_input($prj_body); ?>
<?php echo form_submit($prj_submit); ?>
<?php echo form_close(); ?>