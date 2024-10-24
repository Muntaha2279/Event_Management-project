@extends('layout')

@section('content')

<div class="page_title">Event Management</div>

<div class="container mt-4">
    <table class="table table-hover table-bordered table-striped table-sm">
        <thead>
            <tr class="table-primary">
                <th>Title</th>
                <th>Description</th>
                <th>Location</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($events->count() == 0)
            <tr>
                <td colspan="7" class="text-center">No data available</td>
            </tr>
            @endif
            @foreach($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->description }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->event_date }}</td>
                <td>{{ $event->start_time }}</td>
                <td>{{ $event->end_time }}</td>
                <td>
                    @if ($event->user_id == auth()->user()->id)
                    <a class="btn btn-sm btn-warning" href="/update-event/{{ $event->id }}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="/delete-event/{{ $event->id }}">Delete</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection