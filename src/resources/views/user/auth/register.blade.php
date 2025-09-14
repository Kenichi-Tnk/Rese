@extends('layouts.app')

@section('title', 'Registration')

@section('content')
<div class="login-box">
    <div class="login-header">Registration</div>
    <form class="login-form" method="POST" action="{{ route('user.register.post') }}">
        @csrf
        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
        <div class="form-group">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="name" placeholder="Username" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password_confirmation" placeholder="Password（確認）" required>
        </div>
        <button class="login-btn" type="submit">登録</button>
    </form>
</div>
@endsection
