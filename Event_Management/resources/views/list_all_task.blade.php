@extends('layout')

@section('content')

<div class="page_title">Task Management</div>

<div class="container mt-4">
    <table class="table table-hover table-bordered  table-striped table-sm">
        <thead>
            <tr class="table-primary">
                <th>Title</th>
                <th>Description</th>
                <th>Event</th>
                <th>Deadline</th>
                <th>Assigned To</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($tasks->count() == 0)
            <tr>
                <td colspan="7" class="text-center">No data available</td>
            </tr>
            @endif
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->event->title }}</td>
                <td>{{ $task->assigned_date }}</td>
                <td>{{ $task->assigned_to->name }}</td>
                <td>{{ $task->status }}</td>
                <td>
                    <!-- @if($task->status == "Pending")
                    <a class="btn btn-sm btn-success" href="/update-status/{{ $task->id }}">Mark as Done</a>
                    @endif -->
                    @if ($task->user_id == auth()->user()->id)
                    <a class="btn btn-sm btn-warning" href="/update-task/{{ $task->id }}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="/delete-task/{{ $task->id }}">Delete</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection