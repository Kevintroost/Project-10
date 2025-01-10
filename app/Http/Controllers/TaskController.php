<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        // Check if the request expects JSON (for API requests)
        if ($request->wantsJson()) {
            return response()->json(Task::all());
        }
    
        // Otherwise, return the Blade view with Vue.js mounted
        return view('todo-list.index');
    }
    public function store(Request $request)
    {
        $task = Task::create($request->all());
        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return response()->json($task);
    }

    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
