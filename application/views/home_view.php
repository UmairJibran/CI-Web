<h3>Hello World</h3>

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