<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
<div class="col-md-4">
            <div class="p-3 border rounded bg-light position-sticky" style="top: 20px;">
	<h2>Edit Tasks</h2>
	<form method="Post" action="<?php echo e(route('tasks.update',$task->id)); ?>">
	<?php echo csrf_field(); ?>
	<?php echo method_field('PUT'); ?>
	
	<div class="mb-2">
	    <lable>Title : </lable>
	    <input type="text" name="title" value="<?php echo e($task->title); ?>" class="form-control" required>
	</div>
	
	<div class="mb-2"> 
	 <lable>Priority : </lable>
	    <select name="priority" class="form-control" required>
	        <option value="low" <?php echo e($task->priority == 'low' ? 'selected' : ''); ?>>Low</option>
	        <option value="medium" <?php echo e($task->priority == 'medium' ? 'selected' : ''); ?>>Medium</option>
	        <option value="high" <?php echo e($task->priority == 'high' ? 'selected' : ''); ?>>High</option>
	    </select>
	</div>
	
    <div class="mb-2">  
	    <lable>Description : </lable>
	    <textarea name="description" class="form-control" required><?php echo e($task->description); ?></textarea>
	</div>
	
	<div class="mb-2">   
	 <lable>Status : </lable>
		<select name="status" class="form-control" required>
            <option value="pending" <?php echo e($task->status == 'pending' ? 'selected' : ''); ?>>Pending</option>
            <option value="failed" <?php echo e($task->status == 'failed' ? 'selected' : ''); ?>>Failed</option>
            <option value="completed" <?php echo e($task->status == 'completed' ? 'selected' : ''); ?>>Completed</option>
        </select>
	</div>   
	    <button type="submit" class="btn btn-primary">Update Task</button>
	</form>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/mithran/z/resources/views/tasks/edit.blade.php ENDPATH**/ ?>