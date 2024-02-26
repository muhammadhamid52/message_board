<!-- resources/views/users/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card user-card">
                    <div class="card-header">
                        <h2 class="mb-0">Users</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('users.create') }}" class="btn btn-success">Create User</a>

                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('users.destroy', $user) }}" method="post" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .user-card {
            background-color: #fff; /* White background */
            margin-top: 20px;
            border: 1px solid #d6d8db; /* Light border color */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        .card-header {
            background-color: #007bff; /* Header background color */
            color: #fff; /* Header text color */
            border-bottom: 1px solid #d6d8db; /* Border between header and body */
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            padding: 20px;
        }
    </style>
@endsection
