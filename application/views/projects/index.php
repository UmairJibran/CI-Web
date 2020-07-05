<h1>Projects</h1>
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