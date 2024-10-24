@extends('layout')

@section('content')

<div class="page_title">Event Management</div>

<div class="d-flex justify-content-center mt-4">
    <form action="/create-event" method="post" autocomplete="off" class="single-form">
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
            <label class="form-label fw-bold">Location</label>
            <input type="text" name="location" id="location" class="form-control mb-2" required />
        </div>
        <div>
            <label class="form-label fw-bold">Date</label>
            <input type="text" name="eventdate" id="eventdate" class="form-control mb-2" required />
        </div>
        <div>
            <label class="form-label fw-bold">Start Time</label>
            <input type="time" name="start" id="start" class="form-control mb-2" required />
        </div>
        <div>
            <label class="form-label fw-bold">End Time</label>
            <input type="time" name="end" id="end" class="form-control mb-2" required />
        </div>
        <div class="text-center">
            <button class="btn btn-primary mb-4">Submit</button>
        </div>
    </form>
</div>


<script type="module">
    $(document).ready(function(){
        var picker1 = new Pikaday({
            field: document.getElementById('eventdate'),
            format: 'YYYY-MM-DD'
        });
    });
</script>

@endsection