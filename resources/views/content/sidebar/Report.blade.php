@extends('layouts/contentNavbarLayout')

@section('title', 'Report - DailyDo')

@section('content')

{{-- Report --}}
<div class="container">
  <!-- Filter Section -->
  <div class="row mb-4">
    <div class="col-md-3">
      <label for="timeframe" class="form-label">Timeframe</label>
      <select id="timeframe" class="form-select">
        <option selected>All-time</option>
        <option value="1">Last 7 Days</option>
        <option value="2">Last 30 Days</option>
        <option value="3">This Year</option>
      </select>
    </div>
    <div class="col-md-3">
      <label for="people" class="form-label">People</label>
      <select id="people" class="form-select">
        <option selected>All</option>
        <option value="1">User Group 1</option>
        <option value="2">User Group 2</option>
      </select>
    </div>
    <div class="col-md-3">
      <label for="avgSessionLength" class="form-label">Avg. Session Length</label>
      <input type="text" id="avgSessionLength" class="form-control" value="2m 34s" disabled>
    </div>
    <div class="col-md-3">
      <label for="topic" class="form-label">Topic</label>
      <select id="topic" class="form-select">
        <option selected>All</option>
        <option value="1">Topic 1</option>
        <option value="2">Topic 2</option>
      </select>
    </div>
  </div>

  <!-- Report Metrics -->
  <div class="row text-center mb-4">
    <div class="col-md-3">
      <h5>Active Users</h5>
      <h2 class="text-primary">27/80</h2>
    </div>
    <div class="col-md-3">
      <h5>Questions Answered</h5>
      <h2 class="text-primary">3,298</h2>
    </div>
    <div class="col-md-3">
      <h5>Avg. Session Length</h5>
      <h2 class="text-primary">2m 34s</h2>
    </div>
    <div class="col-md-3">
      <h5>Knowledge Gain</h5>
      <h2 class="text-primary">+34%</h2>
    </div>
  </div>

  <!-- Activity Chart -->
  <div class="row mb-4">
    <div class="col-12">
      <h5>Activity</h5>
      <div id="activityChart" style="height: 300px; background: #f9f9f9;"></div>
    </div>
  </div>

  <!-- Leaderboards -->
  <div class="row">
    <div class="col-md-6">
      <h5>User Leaderboard</h5>
      <ul class="list-group">
        @foreach([['name' => 'Jesse Thomas', 'points' => '627', 'rank' => 1],
                  ['name' => 'Thitsar Mahitsayagan', 'points' => '625', 'rank' => 2],
                  ['name' => 'Helen Chuang', 'points' => '623', 'rank' => 3]] as $user)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div>
            <strong>{{ $user['rank'] }}. {{ $user['name'] }}</strong>
            <br>
            <small>{{ $user['points'] }} Points</small>
          </div>
          <span class="badge bg-success">+1</span>
        </li>
        @endforeach
      </ul>
      <div class="text-end mt-2">
        <a href="#" class="btn btn-link">View full leaderboard</a>
      </div>
    </div>

    <div class="col-md-6">
      <h5>Groups Leaderboard</h5>
      <ul class="list-group">
        @foreach([['group' => 'Houston Facility', 'points' => '57', 'rank' => 1],
                  ['group' => 'Test Group', 'points' => '56', 'rank' => 2],
                  ['group' => 'Sales Leadership', 'points' => '55', 'rank' => 3]] as $group)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div>
            <strong>{{ $group['rank'] }}. {{ $group['group'] }}</strong>
            <br>
            <small>{{ $group['points'] }} Points / User</small>
          </div>
          <span class="badge bg-success">+2</span>
        </li>
        @endforeach
      </ul>
      <div class="text-end mt-2">
        <a href="#" class="btn btn-link">View full leaderboard</a>
      </div>
    </div>
  </div>
</div>
{{-- /Report --}}

@endsection
