@extends('layouts.auth')

@section('content')
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="emailaddress" class="form-label">Email address</label>
        <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Enter your email">
    </div>
    <div class="mb-3">
        <a href="auth-recoverpw-2.html" class="text-muted float-end"><small>Forgot your password?</small></a>
        <label for="password" class="form-label">Password</label>
        <div class="input-group input-group-merge">
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
            <div class="input-group-text" data-password="false">
                <span class="password-eye"></span>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="checkbox-signin">
            <label class="form-check-label" for="checkbox-signin">Remember me</label>
        </div>
    </div>
    <div class="text-center d-grid">
        <button class="btn btn-primary" type="submit">Log In </button>
    </div>
</form>
@endsection
