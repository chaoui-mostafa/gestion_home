@extends('layouts.SidBaar')

@section('title', __('users.create_message'))

@section('content_admin')
<div class="container mt-5">
    <h2 class="text-center mb-4">The Messages</h2>

    <table class="table table-striped table-bordered table-hover custom-table">
        <thead class="thead-light custom-thead">
            <tr>
                <th>ID</th>
                <th class="non-transparent">First Name</th>
                <th>Last Name</th>
                <th class="non-transparent">Email</th>
                <th>Phone Number</th>
                <th class="non-transparent">Subject</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
            <tr>
                <td>{{ $message->id }}</td>
                <td class="non-transparent">{{ $message->first_name }}</td>
                <td>{{ $message->last_name }}</td>
                <td class="non-transparent">{{ $message->email }}</td>
                <td>{{ $message->phone_number }}</td>
                <td class="non-transparent">{{ $message->subject }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="{{ route('users.create_message') }}" class="btn btn-primary">New Message</a>
    </div>
</div>

<style>
.custom-table {
    border: 3px solid white;
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
}
.custom-table thead.custom-thead th {
    background-color: white;
    color: black;
    border: 3px solid white;
}
.custom-table tbody td {
    border: 2px solid white;
}
.non-transparent {
    background-color: rgba(255, 255, 255, 0.9);
}
</style>
@endsection
