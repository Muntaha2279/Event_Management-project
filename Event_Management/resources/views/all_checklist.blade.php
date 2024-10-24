@extends('layout')

@section('content')

<div class="page_title">Checklist Management</div>

<div class="container mt-4">
    <table class="table table-hover table-bordered table-striped table-sm">
        <thead>
            <tr class="table-primary">
                <th></th>
                <th>Event</th>
                <th>Task</th>
                <th>Description</th>
                <th>Deadline</th>
                <th>Status</th>
                <!-- <th>Actions</th> -->
            </tr>
        </thead>
        <tbody>
            @if($cl->count() == 0)
            <tr>
                <td colspan="6" class="text-center">No data available</td>
            </tr>
            @endif
            @foreach($cl as $i)
            <tr>
                <td>
                    @if($i->status == "Pending")
                    <a style="text-decoration: none" href="/update-checklist-status/{{ $i->id }}">&#9744;</a>
                    @else
                    <a style="text-decoration: none" href="/update-checklist-status/{{ $i->id }}">&#9745;</a>
                    @endif
                </td>
                <td>{{ $i->event->title }}</td>
                <td>{{ $i->title }}</td>
                <td>{{ $i->description }}</td>
                <td>{{ $i->assigned_date }}</td>
                <td>{{ $i->status }}</td>
                <!-- <td>
                    <a class="btn btn-sm btn-warning" href="/update-checklist/{{ $i->id }}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="/delete-checklist/{{ $i->id }}">Delete</a>
                </td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection