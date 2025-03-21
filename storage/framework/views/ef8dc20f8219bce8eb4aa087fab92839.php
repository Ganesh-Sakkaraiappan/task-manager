<div class="p-3 border rounded bg-light position-sticky" style="top: 20px;">
    <h3>Create Tasks</h3>
    <form action="<?php echo e(route('tasks.store')); ?>"method="Post" >
        <?php echo csrf_field(); ?>
        <div class="mb-2">
            <label>Title : </label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-2"> 
            <label>Priority : </label>
            <select name="priority" class="form-control" required>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
        </div>
        <div class="mb-2">
            <label>Description : </label>
            <textarea name="description" class="form-control" style="resize:none;" rows="11" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary ">Create Task</button>
    </form>
</div>
<?php /**PATH /home/mithran/z/resources/views/tasks/create_task.blade.php ENDPATH**/ ?>