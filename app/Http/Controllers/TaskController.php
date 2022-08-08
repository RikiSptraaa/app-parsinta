<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;


class TaskController extends Controller
{
    public function index()
    {
        $t = new Task;
        $task = Task::orderBy('id', 'desc')->get();
        return view('tasks.index', [
            'tasks' => $task,
            'task' => $t,
            'submit' => 'Create'
        ]);
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store(TaskRequest $request)
    {

        Task::create(["list" => $request->list]);

        return redirect('/tasks');
    }
    public function edit(Task $task)
    {

        return view('tasks.edit', [
            "task" => $task,
            "submit" => 'Update'
        ]);
    }
    public function update(TaskRequest $request, $id)
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
