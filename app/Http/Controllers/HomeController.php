<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tasks()
    {
      $tasks = Task::all();

      return view('tasks', ['tasks' => $tasks]);
    }


    public function add_task_form()
    {
        return view('add_task');
    }
    public function add_task(Request $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->text = $request->text;
        $task->flag = $request->flag;
        $task->price = $request->price;
        $task->category = $request->category;
        // сохраняем изменения в бд - создает новую запись
        $task->save();

        return redirect('/tasks');
    }


    public function check_flag($task_id, Request $request)
    {
        $task = Task::findOrFail($task_id);
        if($task->flag == $request->flag){
          $task->users()->attach(Auth::User()->id);
        }
        // сохраняем изменения в бд - создает новую запись

        return redirect('/tasks');
    }
    public function board()
    {
        $users = User::all()->sortByDesc(function ($user, $key) {return $user->tasks->sum('price');});

        return view('board', ['users' => $users]);
    }
}
