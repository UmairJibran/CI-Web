<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Task Management System</title>
   <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/master.css">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5 pl-5 pr-5">
      <a class="navbar-brand" href="<?php echo base_url()?>">TMS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
         <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="<?php echo base_url()?>home">Home</a>
            </li>
            <?php if(!$this->session->userdata('logged_in')): ?>
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo base_url()?>users/signup">Sign Up</a>
               </li>
            <?php endif; ?>
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="<?php echo base_url()?>projects">Projects</a>
            </li>
         </ul>
         <?php if($this->session->userdata('logged_in')): ?>
            <ul class="navbar-nav mr-2 mb-lg-0">
            <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo base_url()."users/logout";?>">Sign Out</a>
               </li>
            </ul>
         <?php endif;?>
      </div>
   </nav>
   <div class="container container-fluid">
      <?php if($this->session->flashdata('error_project')):?>
         <div class="alert alert-info">
            <center>
                  <?php echo $this->session->flashdata('error_project'); ?>
            </center>
         </div>
      <?php endif; ?>
      <div class="row">
         <aside class="col-xl-3">

            <?php $this->load->view('users/login_view')?>
         </aside>
         <aside class="col-xl-9">
            <?php $this->load->view($main_view);?>
         </aside>
      </div>
   </div>
   <script src="<?php echo base_url()?>/assets/js/jquery.js"></script>
   <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
</body>
</html>