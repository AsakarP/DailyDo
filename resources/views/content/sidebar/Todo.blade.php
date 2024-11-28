@extends('layouts/contentNavbarLayout')

@section('title', 'To-Do - DailyDo')

@section('content')
<div class="container">
  <div class="row mb-4">
    <div class="col-12">
      <h4 class="mb-3">To-Do</h4>
      <div class="d-flex justify-content-between">
        <button class="btn btn-primary">Add New Task</button>
      </div>
    </div>
  </div>

  <!-- To-Do Section -->
  <div class="row">
    <!-- To Do Column -->
    <div class="col-md-4">
      <h6>To-Do (4)</h6>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Design new UI presentation</h5>
          <p class="text-muted mb-1">Dribbble marketing</p>
          <p class="mb-2">Progress: <strong>7/10</strong></p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="badge bg-primary">24 Aug 2022</span>
            <div>
              <i class="mdi mdi-comment-outline me-2"></i>7
              <i class="mdi mdi-eye-outline"></i>2
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Add more UI/UX mockups</h5>
          <p class="text-muted mb-1">Pinterest promotion</p>
          <p class="mb-2">Progress: <strong>4/10</strong></p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="badge bg-primary">25 Aug 2022</span>
            <div>
              <i class="mdi mdi-comment-outline me-2"></i>4
              <i class="mdi mdi-eye-outline"></i>2
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- In Progress Column -->
    <div class="col-md-4">
      <h6>In Progress (4)</h6>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Design system update</h5>
          <p class="text-muted mb-1">Oreo website project</p>
          <p class="mb-2">Progress: <strong>3/10</strong></p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="badge bg-warning">12 Nov 2022</span>
            <div>
              <i class="mdi mdi-comment-outline me-2"></i>2
              <i class="mdi mdi-eye-outline"></i>13
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Create brand guideline</h5>
          <p class="text-muted mb-1">Oreo branding project</p>
          <p class="mb-2">Progress: <strong>7/10</strong></p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="badge bg-warning">13 Nov 2022</span>
            <div>
              <i class="mdi mdi-comment-outline me-2"></i>2
              <i class="mdi mdi-eye-outline"></i>13
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Done Column -->
    <div class="col-md-4">
      <h6>Done (3)</h6>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Add product to the market</h5>
          <p class="text-muted mb-1">UI8 marketplace</p>
          <p class="mb-2">Progress: <strong>10/10</strong></p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="badge bg-success">6 Jan 2022</span>
            <div>
              <i class="mdi mdi-comment-outline me-2"></i>1
              <i class="mdi mdi-eye-outline"></i>5
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Launch product promotion</h5>
          <p class="text-muted mb-1">Kickstarter campaign</p>
          <p class="mb-2">Progress: <strong>10/10</strong></p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="badge bg-success">7 Jan 2022</span>
            <div>
              <i class="mdi mdi-comment-outline me-2"></i>17
              <i class="mdi mdi-eye-outline"></i>3
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
