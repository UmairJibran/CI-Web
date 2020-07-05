<h1>Projects</h1>
<table class="table">
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