<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <!-- Sidebar - Fixed Position -->
        <div class="col-md-4">
            <?php echo $__env->make('tasks.create_task', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    
    	<!-- Main Content - Task List -->
        <div class="col-md-8">
			<?php echo $__env->make('tasks.task_list', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/mithran/z/resources/views/tasks/index.blade.php ENDPATH**/ ?>