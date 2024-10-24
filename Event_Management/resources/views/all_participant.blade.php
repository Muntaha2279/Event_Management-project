@extends('layout')

@section('content')

<div class="page_title">Participant Management</div>

<div class="container mt-4">
    <table class="table table-hover table-bordered table-striped table-sm bg-white">
        <thead>
            <tr class="table-primary">
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <!-- <th>Actions</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($participants as $p)
            <tr>
                <td>{{ $p->name }}</td>
                <td>{{ $p->mobile }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->address }}</td>
                <!-- <td>
                    <a class="btn btn-sm btn-warning" href="/update-participant/{{ $p->id }}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="/delete-participant/{{ $p->id }}">Delete</a>
                </td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection