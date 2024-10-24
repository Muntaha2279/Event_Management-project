@extends('layout')

@section('content')

<div class="page_title">Partcipant Management</div>

<div class="d-flex justify-content-center mt-4">
    <form action="/add-participant" method="post" autocomplete="off" class="single-form">
        @csrf
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
            <label class="form-label fw-bold">Participant Name</label>
            <input type="text" name="name" id="name" class="form-control mb-2" required />
        </div>
        <div>
            <label class="form-label fw-bold">Mobile No</label>
            <input type="text" name="mobileno" id="mobileno" class="form-control mb-2" required/>
        </div>
        
        <div>
            <label class="form-label fw-bold">Email Address</label>
            <input type="email" name="email" id="email" class="form-control mb-2" required />
        </div>
        <div>
            <label class="form-label fw-bold">Present Address</label>
            <input type="text" name="address" id="address" class="form-control mb-2" required />
        </div>
        <div class="text-center">
            <button class="btn btn-primary mb-4">Submit</button>
        </div>
    </form>
</div>


@endsection