<h3>User Login</h3>
<?php 
   $properties = array('id'=>'login_form','class'=>'form_horizontal');
   if($this->session->flashdata('errors')){
      echo $this->session->flashdata('errors');
   }
   echo form_open("users/login",$properties);
?>
<div class="form-group mb-3">
   <?php
      $lblAttributes = array('class' => 'sr-only');
      $usnAttributes = array('class' => 'form-control','placeholder' => 'Enter Your Username', 'type' => 'text', 'name' => 'username');
      echo form_label('Username','username',$lblAttributes);
      echo form_input($usnAttributes);
   ?>
</div>
<div class="form-group mb-3">
   <?php
      $lblAttributes = array('class' => 'sr-only');
      $pswAttributes = array('class' => 'form-control','placeholder' => 'Enter Your Password', 'type' => 'password', 'name' => 'password');
      echo form_label('Password','password',$lblAttributes);
      echo form_input($pswAttributes);
   ?>
</div>

<?php
   $btnAttributes = array(
      'class' => 'btn btn-outline-primary',
      'value' => 'Log in',
      'name' => 'submit',
   );
   echo form_submit($btnAttributes);
   echo form_close();
?>