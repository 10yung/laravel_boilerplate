<?php

namespace App\Http\Controllers;


use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    function index() {
      $tasks = Task::orderBy('created_at', 'asc')->get();
      return view('tasks', ['tasks' => $tasks]);
    }

    function addTask(Request $request){
      //add \Validator::make interesting
      $validator = \Validator::make($request->all(), ['name' => 'required|max:255']);

      if ($validator->fails()) {
          return redirect('/')->withInput()->withErrors($validator);
        }

      $task = new Task;
      $task->name = $request->name;
      $task->save();
      return redirect('/');
      // Create The Task...
    }

    function deleTask($id){
      Task::findOrFail($id)->delete();   //find if id exisit or abort
      return redirect('/');
    }
}
