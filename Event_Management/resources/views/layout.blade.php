<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Event Planner</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  @vite('resources/css/app.css')
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
  <style>
    .navbar-dark .navbar-nav .nav-link{
      color: white;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Event Planner</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="eventDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Event
            </a>
            <ul class="dropdown-menu" aria-labelledby="eventDropdown">
              <li><a class="dropdown-item" href="/create-event">Create Event</a></li>
              <li><a class="dropdown-item" href="/all-events">All Events</a></li>
              <li><a class="dropdown-item" href="/ongoing-events">Ongoing Events</a></li>
              <li><a class="dropdown-item" href="/upcoming-events">Upcoming Events</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="taskDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tasks
            </a>
            <ul class="dropdown-menu" aria-labelledby="taskDropdown">
              <li><a class="dropdown-item" href="/create-task">Create Task</a></li>
              <li><a class="dropdown-item" href="/all-tasks">All Tasks</a></li>
              <li><a class="dropdown-item" href="/pending-tasks">Pending Tasks</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/checklist">Checklist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/participants">Participants</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="checkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Checklist
            </a>
            <ul class="dropdown-menu" aria-labelledby="checkDropdown">
              <li><a class="dropdown-item" href="/create-checklist">Create Checklist</a></li>
              <li><a class="dropdown-item" href="/checklist">All Checklists</a></li>
            </ul>
          </li> -->
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="taskDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Participants
            </a>
            <ul class="dropdown-menu" aria-labelledby="taskDropdown">
              <li><a class="dropdown-item" href="/add-participant">Add Participant</a></li>
              <li><a class="dropdown-item" href="/participants">Manage Participants</a></li>
            </ul>
          </li> -->
        </ul>
        <div class="d-flex" style="color: white; gap:10px">
          <div>Welcome {{ auth()->user()->name }}</div>
          <a href="{{ url('logout') }}" class="btn btn-sm btn-warning">Logout</a>
        </div>
      </div>
    </div>
  </nav>
  @yield('content')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>