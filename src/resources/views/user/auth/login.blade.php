@extends('layouts.app')


@section('content')
<div class="login-box">
    <div class="login-header">Login</div>
    <form class="login-form" method="POST" action="{{ route('user.login.post') }}">
        @csrf
        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
        <div class="form-group">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button class="login-btn" type="submit">ログイン</button>
    </form>
</div>
@endsection
