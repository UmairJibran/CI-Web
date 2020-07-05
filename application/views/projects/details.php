<div class="row">
   <div class="col-8">
      <h1>Project Name: <?php echo $project->prj_name; ?></h1>
      <h3>Project Description: </h3>
      <p><?php echo $project->prj_body; ?></p>
      <ul>
         <li>Task 1</li>
         <li>Task 2</li>
         <li>Task 3</li>
      </ul>
   </div>
   <div class="col-4">
      <ul class="list-group">
         <h3>Actions</h3>
         <a href="<?php echo base_url()."task/create/".$project->prj_id?>"><li class="list-group-item">Create Task</li></a>
         <a href="<?php echo base_url()."projects/update/".$project->prj_id?>"><li class="list-group-item">Edit Project</li></a>
         <a href="<?php echo base_url()."projects/delete/".$project->prj_id?>"><li class="list-group-item">Delete Project</li></a>
      </ul>
   </div>
</div>