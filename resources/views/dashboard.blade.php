@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard')

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
<div class="container">
    <h2>Welcome to your Dashboard</h2>
    <p>This is your dashboard where you can manage your tasks, routines, and notes.</p>

    <div class="row mb-4">
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Tasks</h5>
                    <p class="card-text flex-grow-1">You have <strong>{{ $tasksCount }}</strong> tasks pending.</p>
                    <a href="{{ route('projects.index') }}" class="btn btn-primary mt-auto">View Tasks</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Routines</h5>
                    <p class="card-text flex-grow-1">You have <strong>{{ $routinesCount }}</strong> routines scheduled today.</p>
                    <a href="{{ route('routines.index') }}" class="btn btn-primary mt-auto">View Routines</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Notes</h5>
                    <p class="card-text flex-grow-1">You have <strong>{{ $notesCount }}</strong> notes saved.</p>
                    <a href="{{ route('notes.index') }}" class="btn btn-primary mt-auto">View Notes</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Recent Tasks</h5>
                    <ul class="list-group flex-grow-1">
                        @forelse($recentTasks as $task)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $task->title }}
                                <span class="badge rounded-pill 
                                    {{ $task->status == 'to_do' ? 'bg-primary' : ($task->status == 'in_progress' ? 'bg-warning' : 'bg-success') }}">
                                    {{ ucfirst(str_replace('_', ' ', $task->status)) }}
                                </span>
                            </li>
                        @empty
                            <li class="list-group-item">No tasks available.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Today's Routines</h5>
                    <ul class="list-group flex-grow-1">
                        @forelse($todayRoutines as $routine)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $routine->title }}
                                <span class="badge bg-primary rounded-pill">{{ $routine->frequency }}</span>
                            </li>
                        @empty
                            <li class="list-group-item">No routines scheduled for today.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Recent Notes</h5>
                    <ul class="list-group flex-grow-1">
                        @forelse($recentNotes as $note)
                            <li class="list-group-item">{{ $note->title }}</li>
                        @empty
                            <li class="list-group-item">No notes available.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Upcoming Reminders</h5>
                    <ul class="list-group flex-grow-1">
                        @forelse($upcomingReminders as $reminder)
                            <li class="list-group-item d-flex justify-content-between align-items-center 
                                {{ $reminder->date->isToday() ? 'bg-warning' : ($reminder->date->isPast() ? 'bg-danger' : 'bg-success') }}">
                                {{ $reminder->title }}
                                <span class="badge rounded-pill bg-light text-dark">
                                    {{ $reminder->date->format('M d') }} {{ $reminder->time ? $reminder->time->format('H:i') : '' }}
                                </span>
                            </li>
                        @empty
                            <li class="list-group-item">No upcoming reminders.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
