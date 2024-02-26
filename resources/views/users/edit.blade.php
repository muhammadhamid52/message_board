<!-- resources/views/users/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card user-card">
                    <div class="card-header">
                        <h2 class="mb-0">Edit User</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.update', $user) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Update User</button>
                        </form>
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
