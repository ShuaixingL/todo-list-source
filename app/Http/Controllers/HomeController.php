<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('user_id', Auth::user()->id)->get();
        return view('home', ['tasks' => $tasks]);
    }
    public function getNew()
    {
        return view('new');
    }

    public function postNew(Request $request)
    {
        $task = new Task;
        $task->title = $request->title;
        $task['user_id'] = Auth::user()->id;
        $task->save();
        return redirect('home');
    }
    public function postEdit(Request $request)
    {
        $task = Task::find($request->id);
        $task->progress = $task->progress ? false : true;
        $task->save();
        return redirect('home');
    }
    public function getDelete($id)
    {
        $task = Task::find($id); 
        $task->delete();
        return redirect('home');
    }
}
