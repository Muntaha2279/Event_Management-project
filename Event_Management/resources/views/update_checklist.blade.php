@extends('layout')

@section('content')

<div class="page_title">Checklist Management</div>

<div class="d-flex justify-content-center mt-4">
    <form action="/update-checklist" method="post" autocomplete="off" class="single-form">
        @csrf
        <input type="hidden" name="id" value="{{ $cl->id }}" />
        <div>
            <label class="form-label fw-bold">Title</label>
            <input type="text" name="title" id="title" class="form-control mb-2" value="{{ $cl->title }}" required />
        </div>
        <div>
            <label class="form-label fw-bold">Event</label>
            <select name="event" id="event" class="form-control mb-2" required >
                <option value="">----------------</option>
            @foreach($events as $event)
                @if($cl->event_id == $event->id)
                <option value="{{ $event->id }}" selected>{{ $event->title }}</option>
                @else
                <option value="{{ $event->id }}">{{ $event->title }}</option>
                @endif
            @endforeach
            </select>
        </div>
        <div class="text-center">
            <button class="btn btn-primary mb-4">Submit</button>
        </div>
    </form>
</div>

@endsection