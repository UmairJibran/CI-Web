<div class="bg-dark p-5 text-light center">
   <h2>Task Management System</h2>
</div>
<?php if($this->session->flashdata('login_suc')):?>
   <p class="alert alert-success">
      <?php echo $this->session->flashdata('login_suc');?>
   </p>
<?php endif; ?>
<?php if($this->session->flashdata('login_fail')):?>
   <p class="alert alert-danger">
      <?php echo $this->session->flashdata('login_fail');?>
   </p>
<?php endif; ?>