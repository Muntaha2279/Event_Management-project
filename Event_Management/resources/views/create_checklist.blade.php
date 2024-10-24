@extends('layout')

@section('content')

<div class="page_title">Checklist Management</div>

<div class="d-flex justify-content-center mt-4">
    <form action="/create-checklist" method="post" autocomplete="off" class="single-form">
        @csrf
        <div>
            <label class="form-label fw-bold">Title</label>
            <input type="text" name="title" id="title" class="form-control mb-2" required />
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
        <div class="text-center">
            <button class="btn btn-primary mb-4">Submit</button>
        </div>
    </form>
</div>

@endsection