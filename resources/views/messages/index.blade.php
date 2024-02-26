@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card message-card">
                    <div class="card-header">Message Board</div>

                    <div class="card-body">
                        @foreach($messages as $message)
                            <div class="message">
                                <p class="message-header">
                                    <strong>{{ $message->user->name }}</strong>
                                    <span class="message-time">{{ $message->created_at->format('M d, Y \a\t h:i A') }}</span>
                                </p>
                                <p class="message-content">{{ $message->content }}</p>
                            </div>
                        @endforeach
                    </div>

                    <div class="card-footer">
                        <form action="{{ route('messages.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <textarea name="content" class="form-control" placeholder="Write your message..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary float-left mt-3">Post Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .message-card {
            background-color: #f8f9fa; /* Light gray background */
            margin-bottom: 20px;
            border: 1px solid #d6d8db; /* Light border color */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        .message {
            margin-bottom: 20px;
            padding: 15px;
            border-bottom: 1px solid #d6d8db;
        }

        .message p {
            margin: 0;
        }

        .message-header {
            margin-bottom: 8px;
        }

        .message strong {
            color: #007bff;
            font-size: 1.1em;
        }

        .message-time {
            color: #6c757d;
            font-size: 0.9em;
            margin-left: 10px;
        }

        .message-content {
            margin-top: 5px;
            line-height: 1.5;
        }

        .card-footer {
            padding: 15px;
            border-top: 1px solid #d6d8db;
        }
    </style>
@endsection
