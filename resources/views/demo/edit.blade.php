@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-4">
            <div class="p-3 border rounded bg-light position-sticky" style="top: 20px;">
	<h2>Edit Tasks</h2>
	<form method="Post" action="{{route('tasks.update',$task->id)}}">
	@csrf
	@method('PUT')
	
	<div class="mb-2">
	    <lable>Title : </lable>
	    <input type="text" name="title" value="{{$task->title}}" class="form-control" required>
	</div>
	
	<div class="mb-2"> 
	 <lable>Priority : </lable>
	    <select name="priority" class="form-control" required>
	        <option value="low" {{ $task->priority == 'low' ? 'selected' : '' }}>Low</option>
	        <option value="medium" {{ $task->priority == 'medium' ? 'selected' : '' }}>Medium</option>
	        <option value="high" {{ $task->priority == 'high' ? 'selected' : '' }}>High</option>
	    </select>
	</div>
	
    <div class="mb-2">  
	    <lable>Description : </lable>
	    <textarea name="description" class="form-control" required>{{$task->description}}</textarea>
	</div>
	
	<div class="mb-2">   
	 <lable>Status : </lable>
		<select name="status" class="form-control" required>
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
@endsection
