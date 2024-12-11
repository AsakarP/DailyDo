<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task; // Model Task
use App\Models\Workspace; // Model Workspace

class dashboard extends Controller
{
  public function index()
  {
      // Ambil tasks hari ini
      $tasks = Task::whereDate('due_date', today())
          ->where('workspace_id', auth()->user()->current_workspace_id)
          ->get();

      // Ambil daftar workspace untuk selector
      $workspaces = Workspace::all();

      // Kirim data ke view
      return view('content.dashboard.dashboards', [
          'tasks' => $tasks,
          'workspaces' => $workspaces,
          'currentWorkspace' => auth()->user()->currentWorkspace
      ]);
  }
}
