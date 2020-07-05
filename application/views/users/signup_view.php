<h3>Sign Up</h3>

<?php
   if($this->session->flashdata('signup_errors')){
      echo "<p class='alert alert-danger'>" . $this->session->flashdata('signup_errors') . "</p>";
   }
   $lblAttributes = array('class' => 'sr-only');
   $properties = array('id'=>'singup_form','class'=>'form_horizontal');
   echo form_open('users/signup',$properties);
?>
<div class="form-group mb-3">
   <?php
      $flnAttributes = array('class' => 'form-control','placeholder' => 'Enter Your Full Name', 'type' => 'text', 'name' => 'fullname');
      echo form_label('Full Name','fullname',$lblAttributes);
      echo form_input($flnAttributes);
   ?>
</div>
<div class="form-group mb-3">
   <?php
      $usnAttributes = array('class' => 'form-control','placeholder' => 'Enter Your Username', 'type' => 'text', 'name' => 'username');
      echo form_label('Username','username',$lblAttributes);
      echo form_input($usnAttributes);
   ?>
</div>
<div class="form-group mb-3">
   <?php
      $emlAttributes = array('class' => 'form-control','placeholder' => 'Enter Your Email', 'type' => 'email', 'name' => 'email');
      echo form_label('Email','email',$lblAttributes);
      echo form_input($emlAttributes);
   ?>
</div>
<div class="form-group mb-3">
   <?php
      $pswAttributes = array('class' => 'form-control','placeholder' => 'Enter Your Password', 'type' => 'password', 'name' => 'password');
      echo form_label('Password','password',$lblAttributes);
      echo form_input($pswAttributes);
   ?>
</div>

<?php
   $btnAttributes = array(
      'class' => 'btn btn-outline-primary',
      'value' => 'Register',
      'name' => 'submit',
   );
   echo form_submit($btnAttributes);
   echo form_close();
?>