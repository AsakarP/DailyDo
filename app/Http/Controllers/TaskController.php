<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // Ambil semua tasks dari database
        $tasks = Task::all();

        // Kirim data ke Blade
        return view('content.sidebar.ToDo', compact('tasks'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:1000',
            'due_date' => 'nullable|date',
            'status' => 'required|in:todo,in_progress,done'
        ]);

        Task::create($validated);

        return redirect()->back()->with('success', 'Task added successfully!');
    }


    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:todo,in_progress,done'
        ]);

        $task->update($validated);

        return response()->json(['success' => 'Task updated successfully!']);
    }

    public function startTimer(Task $task)
    {
        $task->timer_start = now();
        $task->save();

        return response()->json(['message' => 'Timer started successfully.']);
    }

    public function stopTimer(Task $task)
    {
        if (!$task->timer_start) {
            return response()->json(['message' => 'No timer running.'], 400);
        }

        $elapsedTime = now()->diffInSeconds($task->timer_start);
        $task->total_time += $elapsedTime;
        $task->timer_start = null;
        $task->save();

        return response()->json([
            'message' => 'Timer stopped successfully.',
            'elapsed_time' => $elapsedTime
        ]);
    }
}
