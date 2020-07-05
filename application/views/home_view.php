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
<?php endif; ?><h1>Projects</h1>
<br>
<a href="<?php echo base_url()."projects/create";?>" class="btn btn-outline-warning">Create a Project</a>
<br><br>
<table class="table table-hover">
   <thead>
      <th>#</th>
      <th>Name</th>
      <th>Body</th>
   </thead>
   <tbody>
      <?php foreach ($projects as $project):?>
         <tr>
            <td>
               <?php echo $project->prj_id; ?>
            </td>
            <td>
               <a href="<?php echo base_url().'projects/details/'.$project->prj_id; ?>"><?php echo $project->prj_name; ?></a>
            </td>
            <td>
               <?php echo $project->prj_body; ?>
            </td>
         </tr>
      <?php endforeach; ?>
   </tbody>
</table><h1>Projects</h1>
<br>
<a href="<?php echo base_url()."projects/create";?>" class="btn btn-outline-warning">Create a Project</a>
<br><br>
<table class="table table-hover">
   <thead>
      <th>#</th>
      <th>Name</th>
      <th>Body</th>
   </thead>
   <tbody>
      <?php foreach ($projects as $project):?>
         <tr>
            <td>
               <?php echo $project->prj_id; ?>
            </td>
            <td>
               <a href="<?php echo base_url().'projects/details/'.$project->prj_id; ?>"><?php echo $project->prj_name; ?></a>
            </td>
            <td>
               <?php echo $project->prj_body; ?>
            </td>
         </tr>
      <?php endforeach; ?>
   </tbody>
</table>