@extends('layouts/contentNavbarLayout')

@section('title', 'Timesheets - DailyDo')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('content')
<div class="container">
  <!-- Header Section -->
  <div class="row mb-4">
    <div class="col-12">
      <h4 class="mb-3">My Timesheet</h4>
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <input type="text" class="form-control w-50" placeholder="Search by Team Name, HR Name">
        </div>
        <div>
          <button class="btn btn-outline-primary">Mark As Leave</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Date Navigation -->
  <div class="row mb-3">
    <div class="col-12">
      <div class="d-flex justify-content-between align-items-center">
        <button class="btn btn-light">18 Mar 2024</button>
        <button class="btn btn-light">19 Mar 2024</button>
        <button class="btn btn-light">20 Mar 2024</button>
        <button class="btn btn-light">21 Mar 2024</button>
        <button class="btn btn-light">22 Mar 2024</button>
        <button class="btn btn-light disabled">23 Mar 2024</button>
        <button class="btn btn-light disabled">24 Mar 2024</button>
      </div>
    </div>
  </div>

  <!-- Timesheet Table Section -->
  <div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="card-title mb-0">18 Mar 2024</h5>
      <div class="d-flex align-items-center">
        <span class="me-3">Today: 8 Hours</span>
        <span class="me-3">Total Logged Hours: 0:00 H</span>
        <span class="me-3">Status: <span class="text-danger">Pending</span></span>
        <span>Leave: Not Requested</span>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-hover">
        <thead class="table-light">
          <tr>
            <th>Project Name</th>
            <th>Task Type</th>
            <th>Task Title</th>
            <th>Description</th>
            <th>Task Hours</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Project 1</td>
            <td>DSM</td>
            <td>Developing Project</td>
            <td>Lorem ipsum is dummy text. Lorem ipsum is dummy text...</td>
            <td>15 Min</td>
            <td>
              <button class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-pencil-outline"></i></button>
              <button class="btn btn-sm btn-outline-danger"><i class="mdi mdi-delete-outline"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Add Task Section -->
  <div class="card">
    <div class="card-header">
      <h6>Add Task</h6>
    </div>
    <div class="card-body">
      <form>
        <div class="row g-3">
          <div class="col-md-3">
            <label for="projectName" class="form-label">Project Name</label>
            <select id="projectName" class="form-select">
              <option selected>Choose...</option>
              <option value="1">Project 1</option>
              <option value="2">Project 2</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="taskType" class="form-label">Task Type</label>
            <select id="taskType" class="form-select">
              <option selected>Choose...</option>
              <option value="1">Development</option>
              <option value="2">Research</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="taskTitle" class="form-label">Task Title</label>
            <input type="text" class="form-control" id="taskTitle" placeholder="Enter Title">
          </div>
          <div class="col-md-3">
            <label for="taskDescription" class="form-label">Description</label>
            <input type="text" class="form-control" id="taskDescription" placeholder="Work Description">
          </div>
          <div class="col-md-3">
            <label for="taskHours" class="form-label">Task Hours</label>
            <input type="text" class="form-control" id="taskHours" placeholder="Select Hours">
          </div>
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-primary">Add Task</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
