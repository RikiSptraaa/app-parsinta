<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    public function index()
    {
        $task = DB::table('tasks')->orderBy('id', 'desc')->get();
        return view('tasks.index', ['tasks' => $task]);
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        DB::table('tasks')->insert(["list" => $request->list]);

        return back();
    }
    public function edit($id)
    {
        $task = DB::table('tasks')->where('id', $id)->first();
        return view('tasks.edit', ["task" => $task]);
    }
    public function update(Request $request, $id)
    {
        DB::table('tasks')->where('id', $id)->update(['list' => $request->list]);
        return redirect('/task');
    }
    public function delete($id)
    {
        DB::table('tasks')->where('id', $id)->delete();

        return back();
    }
}
