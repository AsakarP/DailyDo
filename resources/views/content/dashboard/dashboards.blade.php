@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - DailyDo')

@section('content')

<div class="container">
  <!-- Header Section -->
  <div class="row mb-4">
    <div class="col-6">
      <h2>Today</h2>
      <p>Mon 22, 2021 | 10:00 AM</p>
    </div>
    <div class="col-6 text-end">
      <button class="btn btn-primary">
        <i class="bi bi-play-circle"></i> Start Time Tracker
      </button>
    </div>
  </div>

  <!-- Overview Section -->
  <div class="row mb-4 text-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5>Weekly Activity</h5>
          <h2 class="text-primary">0%</h2>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5>Worked This Week</h5>
          <h2 class="text-primary">40:00:05</h2>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5>Project Worked</h5>
          <h2 class="text-primary">02</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- To-Do and Projects Section -->
  <div class="row mb-4">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h6>To Do</h6>
        </div>
        <div class="card-body">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Creating Wireframe
              <span class="badge bg-primary">02:44:00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Research Development
              <span class="badge bg-primary">02:20:00</span>
            </li>
          </ul>
          <div class="text-end mt-3">
            <button class="btn btn-outline-primary">View Reports</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h6>Projects</h6>
        </div>
        <div class="card-body">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Project One
              <span class="badge bg-primary">08:40:00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Project Two
              <span class="badge bg-primary">08:00:00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Project Three
              <span class="badge bg-primary">03:20:00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Project Four
              <span class="badge bg-primary">03:30:00</span>
            </li>
          </ul>
          <div class="text-end mt-3">
            <button class="btn btn-outline-primary">View All</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Members Section -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h6>Members</h6>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Member Info</th>
                <th>Today</th>
                <th>This Week</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="https://via.placeholder.com/50" alt="Avatar" class="rounded-circle me-3">
                    <div>
                      <h6 class="mb-0">John Elker</h6>
                      <small>Food Dashboard Design</small>
                    </div>
                  </div>
                </td>
                <td>08:40:00</td>
                <td>08:40:00</td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="https://via.placeholder.com/50" alt="Avatar" class="rounded-circle me-3">
                    <div>
                      <h6 class="mb-0">Rubik Sans</h6>
                      <small>Project Name</small>
                    </div>
                  </div>
                </td>
                <td>08:40:00</td>
                <td>08:40:00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
