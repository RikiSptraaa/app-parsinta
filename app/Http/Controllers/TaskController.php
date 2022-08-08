<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::orderBy('id', 'desc')->get();
        return view('tasks.index', ['tasks' => $task]);
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        Task::create(["list" => $request->list]);

        return redirect('/tasks');
    }
    public function edit(Task $task)
    {

        return view('tasks.edit', ["task" => $task]);
    }
    public function update(Request $request, $id)
    {
        Task::find($id)->update(['list' => $request->list]);
        return redirect('/tasks');
    }
    public function destroy($task)
    {
        Task::find($task)->delete();

        return back();
    }
}
