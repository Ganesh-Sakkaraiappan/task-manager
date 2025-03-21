@extends('layouts.app')

@section('content')
	<h2>Create Tasks</h2>
	<form method="Post" action="{{route('tasks.store')}}">
	@csrf
	    <lable>Title : </lable>
	    <input type="text" name="title" required>
	    
	    <lable>Priority : </lable>
	    <select name="priority" required>
	        <option value="low">Low</option>
	        <option value="medium">Medium</option>
	        <option value="high">High</option>
	    </select>
	    
	    <lable>Description : </lable>
	    <textarea name="description" required></textarea>
	    
	    <button type="submit">Create Task</button>
	</form>
@endsection
