<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Jobs\WriteLogJob;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index',compact('tasks'));
    }
    
    public function create()
    {
        return view('tasks.create');
    }
    
    public function store(Request $request)
    {
        $request->validate
        ([
            'title' => 'required',
            'description' => 'required',
            'priority' => 'required|in:low,medium,high',
            'status' => 'in:pending,failed,completed',
        ]);
        
        $task = Task::create($request->all());
        
        dispatch(new WriteLogJob($task));
        
        return redirect()->route('tasks.index')->with('Task created Successfully');
    }
    
    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task'));
    }
    
    public function update(Request $request , Task $task)
    {
        $request->validate
        ([
            'title' => 'required',
            'priority' => 'required|in:low,medium,high',
            'description' => 'required',
            'status' => 'required|in:pending,failed,completed',
        ]);
        
        //$task->update($request->all());
        $task->title = $request->title;
        $task->description = $request->description;
        $task->priority = $request->priority;
        $task->status = $request->status;
        $task->save();
        
        return redirect()->route('tasks.index')->with('Task updated Successfully');
    }
    
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task -> delete();
        return redirect()->back()->with('Task deleted successfully');
    }
    
}
