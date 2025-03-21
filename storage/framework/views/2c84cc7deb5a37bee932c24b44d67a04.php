<h3>Task List</h3>
<hr>
<?php if($tasks->isEmpty()): ?>
     <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
        <p class="text-muted">No Tasks were found</p>
    </div>
<?php else: ?>
<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<div class="border p-3 mb-3 rounded">
		<p><strong>Title :</strong> <?php echo e($task -> title); ?></p>
		<p><strong>Priority :</strong> <?php echo e($task -> priority); ?></p>
		<p><strong>Description :</strong> <?php echo e($task -> description); ?></p>
		<p><strong>Status :</strong> <?php echo e($task -> status); ?></p>
		
        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editTaskModal<?php echo e($task->id); ?>">Edit</butTON>
        
	    <form action="<?php echo e(route('tasks.destroy',$task->id)); ?>" method="POST" class="d-inline">
	        <?php echo csrf_field(); ?>
	        <?php echo method_field('DELETE'); ?>
			<button type="submit" class="btn btn-danger btn-sm">Delete</button>
		</form>
	</div>
	<?php echo $__env->make('tasks.edit_task', ['task' => $task], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <!-- Include Edit Task Modal -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH /home/mithran/z/resources/views/tasks/task_list.blade.php ENDPATH**/ ?>