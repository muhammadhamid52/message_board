@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Message</div>

                    <div class="card-body">
                        <form action="{{ route('messages.update', $message) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <textarea name="content" class="form-control" required>{{ $message->content }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection