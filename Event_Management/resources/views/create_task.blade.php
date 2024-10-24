@extends('layout')

@section('content')

<div class="page_title">Task Management</div>

<div class="d-flex justify-content-center mt-4">
    <form action="/create-task" method="post" autocomplete="off" class="single-form">
        @csrf
        <div>
            <label class="form-label fw-bold">Title</label>
            <input type="text" name="title" id="title" class="form-control mb-2" required />
        </div>
        <div>
            <label class="form-label fw-bold">Description</label>
            <textarea name="description" id="description" class="form-control mb-2"></textarea>
        </div>
        <div>
            <label class="form-label fw-bold">Event</label>
            <select name="event" id="event" class="form-control mb-2" required >
                <option value="">----------------</option>
            @foreach($events as $event)
                <option value="{{ $event->id }}">{{ $event->title }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <label class="form-label fw-bold">Deadline</label>
            <input type="text" name="assigneddate" id="assigneddate" class="form-control mb-2" required />
        </div>
        <div>
            <label class="form-label fw-bold">Assgined To</label>
            <select name="assignedto" id="assignedto" class="form-control mb-2" required >
                <option value="">----------------</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
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
            format: 'YYYY-MM-DD'
        });
    });
</script>

@endsection