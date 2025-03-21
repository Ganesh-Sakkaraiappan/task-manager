<!-- Bootstrap Modal for Editing Task -->
<div class="modal fade" id="editTaskModal<?php echo e($task->id); ?>" tabindex="-1" aria-labelledby="editTaskLabel<?php echo e($task->id); ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTaskLabel<?php echo e($task->id); ?>">Edit Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('tasks.update', $task->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="mb-2">
                        <label>Title:</label>
                        <input type="text" name="title" class="form-control" value="<?php echo e($task->title); ?>">
                    </div>
                    <div class="mb-2">
                        <label>Priority:</label>
                        <select name="priority" class="form-control">
                            <option value="low" <?php echo e($task->priority == 'low' ? 'selected' : ''); ?>>Low</option>
                            <option value="medium" <?php echo e($task->priority == 'medium' ? 'selected' : ''); ?>>Medium</option>
                            <option value="high" <?php echo e($task->priority == 'high' ? 'selected' : ''); ?>>High</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label>Description:</label>
                        <textarea name="description" class="form-control" style="resize:none;"><?php echo e($task->description); ?></textarea>
                    </div>
                    <div class="mb-2">
                        <label>Status:</label>
                        <select name="status" class="form-control">
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
<?php /**PATH /home/mithran/z/resources/views/tasks/edit_task.blade.php ENDPATH**/ ?>