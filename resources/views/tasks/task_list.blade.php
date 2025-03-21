<h3>Task List</h3>
<hr>
@if($tasks->isEmpty())
     <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
        <p class="text-muted">No Tasks were found</p>
    </div>
@else
@foreach($tasks as $task)

	<div class="border p-3 mb-3 rounded">
		<p><strong>Title :</strong> {{$task -> title}}</p>
		<p><strong>Priority :</strong> {{$task -> priority}}</p>
		<p><strong>Description :</strong> {{$task -> description}}</p>
		<p><strong>Status :</strong> {{$task -> status}}</p>
		
        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editTaskModal{{ $task->id }}">Edit</butTON>
        
	    <form action="{{route('tasks.destroy',$task->id)}}" method="POST" class="d-inline">
	        @csrf
	        @method('DELETE')
			<button type="submit" class="btn btn-danger btn-sm">Delete</button>
		</form>
	</div>
	@include('tasks.edit_task', ['task' => $task]) <!-- Include Edit Task Modal -->
@endforeach
@endif
