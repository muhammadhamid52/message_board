@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card verification-card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .verification-card {
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
