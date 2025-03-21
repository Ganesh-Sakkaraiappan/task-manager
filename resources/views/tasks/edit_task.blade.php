<!-- Bootstrap Modal for Editing Task -->
<div class="modal fade" id="editTaskModal{{ $task->id }}" tabindex="-1" aria-labelledby="editTaskLabel{{ $task->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTaskLabel{{ $task->id }}">Edit Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label>Title:</label>
                        <input type="text" name="title" class="form-control" value="{{ $task->title }}">
                    </div>
                    <div class="mb-2">
                        <label>Priority:</label>
                        <select name="priority" class="form-control">
                            <option value="low" {{ $task->priority == 'low' ? 'selected' : '' }}>Low</option>
                            <option value="medium" {{ $task->priority == 'medium' ? 'selected' : '' }}>Medium</option>
                            <option value="high" {{ $task->priority == 'high' ? 'selected' : '' }}>High</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label>Description:</label>
                        <textarea name="description" class="form-control" style="resize:none;">{{ $task->description }}</textarea>
                    </div>
                    <div class="mb-2">
                        <label>Status:</label>
                        <select name="status" class="form-control">
                            <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="failed" {{ $task->status == 'failed' ? 'selected' : '' }}>Failed</option>
                            <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Task</button>
                </form>
            </div>
        </div>
    </div>
</div>
