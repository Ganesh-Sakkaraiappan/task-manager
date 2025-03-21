@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Sidebar - Fixed Position -->
        <div class="col-md-4">
            @include('tasks.create_task')
        </div>
    
    	<!-- Main Content - Task List -->
        <div class="col-md-8">
			@include('tasks.task_list')
	    </div>
    </div>
</div>
@endsection
