<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Todo;

class TodoController extends Controller
{


    public function index()
    {

        $tasks=Todo::where('completed',false)->orderBy('priority','desc')->orderBY('due_date')->get();
        return view('todo.index',compact('tasks'));


    }


    public function create()
    {
        return view('todo.create');

    }




    public function store(Request $request)
    {

        $request->validate([

            'title'=> 'required|max:255',
            'description'=> 'nullable',
            'priority'=> 'required|max:255',
            'due_date'=> 'nullable|max:255',

        ]);

        Todo::create([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'priority'=> $request->input('priority'),
            'due_date'=> $request->input('duedate'),

        ]);


        return redirect()->route('todo.index')->with('success','task created successfully');

    }



    public function edit(Todo $task)
    {
        return view('todo.edit',compact('task'));

    }


    public function update(Request $request,Todo $task)
    {

        $request->validate([

            'title'=> 'required|max:255',
            'description'=> 'nullable',
            'priority'=> 'required|in:low,medium,high',
            'due_date'=> 'nullable|max:255',

        ]);

        $task->update([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'priority'=> $request->input('priority'),
            'due_date'=> $request->input('duedate'),

        ]);


        return redirect()->route('todo.index')->with('success','task updated successfully');

    }



    public function destroy(Todo $task)
    {
        $task->delete();
        return redirect()->route('todo.index')->with('success','task deleted successfully');
    }


    public function complete(Todo $task)
    {
        $task->update([

            'completed' => true,
            'completed_at' =>now(),


        ]);

        return redirect()->route('todo.index')->with('success','task completed successfully');
    }



    public function showCompleted()
    {
        $completedTasks = Todo::where('completed',true)->orderBy('completed_at','desc')->get();

        return view('todo.taskshow',compact('completedTasks'));
    }





}
