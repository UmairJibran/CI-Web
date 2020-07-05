<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/master.css">
</head>
<body>
   <div class="container container-fluid">
      <div class="row">
         <aside class="col-xl-3">
            <?php $this->load->view('users/login_view')?>
         </aside>
         <aside class="col-xl-9">
            <?php $this->load->view($main_view); ?>
         </aside>
      </div>
   </div>
   <script src="<?php echo base_url()?>/assets/js/jquery.js"></script>
   <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
</body>
</html>