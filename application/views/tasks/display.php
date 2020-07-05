<h1>Tasks</h1>
<table class="table table-hover">
   <thead>
      <th>#</th>
      <th>Task Name</th>
      <th>Task Description</th>
   </thead>
   <tbody>
         <tr>
            <td>
               <?php echo $task->tsk_id; ?>
            </td>
            <td>
               <?php echo $task->tsk_name; ?>
            </td>
            <td>
               <?php echo $task->tsk_desc; ?>
            </td>
         </tr>
   </tbody>
</table>