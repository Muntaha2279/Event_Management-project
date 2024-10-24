@extends('layout')

@section('content')

<div class="page_title">Task Management</div>

<div class="d-flex justify-content-center mt-4">
    <form action="/update-task" method="post" autocomplete="off" class="single-form">
        @csrf
        <input type="hidden" name="id" value="{{ $task->id }}" />
        <div>
            <label class="form-label fw-bold">Title</label>
            <input type="text" name="title" id="title" class="form-control mb-2" value="{{ $task->title }}" required />
        </div>
        <div>
            <label class="form-label fw-bold">Description</label>
            <textarea name="description" id="description" class="form-control mb-2">{{ $task->description }}</textarea>
        </div>
        <div>
            <label class="form-label fw-bold">Event</label>
            <select name="event" id="event" class="form-control mb-2" required >
                <option value="">----------------</option>
            @foreach($events as $event)
                @if($task->event_id == $event->id)
                <option value="{{ $event->id }}" selected>{{ $event->title }}</option>
                @else
                <option value="{{ $event->id }}">{{ $event->title }}</option>
                @endif
            @endforeach
            </select>
        </div>
        <div>
            <label class="form-label fw-bold">Assigned Date</label>
            <input type="text" name="assigneddate" id="assigneddate" class="form-control mb-2" required />
        </div>
        <div>
            <label class="form-label fw-bold">Assgined To</label>
            <select name="assignedto" id="assignedto" class="form-control mb-2" required >
            @foreach($users as $user)
            @if($task->assigned_to_id == $user->id)
            <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
            @else
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endif
            @endforeach
            </select>
        </div>
        <div class="text-center">
            <button class="btn btn-primary mb-4">Submit</button>
        </div>
    </form>
</div>


<script type="module">
    $(document).ready(function(){
        var picker1 = new Pikaday({
            field: document.getElementById('assigneddate'),
            format: 'YYYY-MM-DD',
            defaultDate : new Date("{{ $task->assigned_date }}"),
            setDefaultDate: true
        });
    });
</script>

@endsection