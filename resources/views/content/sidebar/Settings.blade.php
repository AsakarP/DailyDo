@extends('layouts/contentNavbarLayout')

@section('title', 'Settings - DailyDo')

@section('content')

{{-- Settings --}}
<div class="container">
  <!-- Header Section -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="d-flex align-items-center">
        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-circle me-3" style="width: 100px; height: 100px;">
        <div>
          <h2 class="mb-1">Settings</h2>
          <nav>
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">My Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Password</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Team</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- Form Section -->
  <form method="POST" action="{{ route('settings.update') }}">
    @csrf
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" id="firstName" name="first_name" class="form-control" placeholder="Killan" value="Killan">
      </div>
      <div class="col-md-6">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" id="lastName" name="last_name" class="form-control" placeholder="James" value="James">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-12">
        <label for="email" class="form-label">Email</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
          <input type="email" id="email" name="email" class="form-control" placeholder="killanjames@gmail.com" value="killanjames@gmail.com">
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <button type="button" class="btn btn-outline-secondary me-2">Cancel</button>
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
</div>
{{-- /Settings --}}

@endsection
