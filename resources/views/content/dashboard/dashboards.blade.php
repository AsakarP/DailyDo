@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Task Management')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
<div class="row gy-4">
  <!-- Today's Tasks -->
  <div class="col-md-12 col-lg-6">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Today's Tasks</h5>
      </div>
      <div class="card-body">
        <ul class="list-group">
        @foreach($tasks as $task)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>{{ $task->name }}</span>
            <span id="timer-{{ $task->id }}">0h 0m 0s</span>
            <div>
              <button class="btn btn-sm btn-primary me-2" onclick="startTimer({{ $task->id }})">Start Timer</button>
              <button class="btn btn-sm btn-danger" onclick="stopTimer()">Stop Timer</button>
            </div>
          </li>
        @endforeach
        </ul>
      </div>
    </div>
  </div>

  <!-- Workspace Selector -->
  <div class="col-md-12 col-lg-6">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Select Workspace</h5>
      </div>
      <div class="card-body">
        <select class="form-select" onchange="changeWorkspace(this.value)">
          @foreach($workspaces as $workspace)
          <option value="{{ $workspace->id }}" {{ $workspace->id == $currentWorkspace->id ? 'selected' : '' }}>
            {{ $workspace->name }}
          </option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
</div>
<script>
let activeTaskId = null;
let startTime = null;
let timerInterval = null;

function startTimer(taskId) {
  if (activeTaskId !== null) {
    alert("A timer is already running. Please stop it first!");
    return;
  }

  activeTaskId = taskId;
  startTime = new Date();

  timerInterval = setInterval(() => {
    const elapsedTime = Math.floor((new Date() - startTime) / 1000);
    const hours = Math.floor(elapsedTime / 3600);
    const minutes = Math.floor((elapsedTime % 3600) / 60);
    const seconds = elapsedTime % 60;

    document.getElementById(`timer-${taskId}`).textContent = `${hours}h ${minutes}m ${seconds}s`;
  }, 1000);

  // Optional: Send AJAX request to mark timer start
  console.log(`Started timer for Task ID: ${taskId}`);
}

function stopTimer() {
  if (activeTaskId === null) {
    alert("No timer is currently running.");
    return;
  }

  clearInterval(timerInterval);

  const elapsedTime = Math.floor((new Date() - startTime) / 1000);
  console.log(`Stopped timer for Task ID: ${activeTaskId}, Time Elapsed: ${elapsedTime} seconds`);

  // Optional: Send AJAX request to save elapsed time
  alert(`Timer stopped for Task ID: ${activeTaskId}, Time Elapsed: ${elapsedTime} seconds`);

  activeTaskId = null;
  startTime = null;
  timerInterval = null;
}
</script>
@endsection