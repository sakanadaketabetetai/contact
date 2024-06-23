@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login_content">
    <div class="login_form-heading">
        <h2>Login</h2>
    </div>
    <form action="/login" class="login_form" method="post">
        @csrf
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-item">メールアドレス</span>
            </div>
            <div class="form_-group-content">
                <input type="email" name="email" value="{{ old('email') }}" placehold="例 : test@example.com">
            </div>
            <div class="form_error">
                @error('email')
                {{ @message }}
                @enderror
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-item">パスワード</span>
            </div>
            <div class="form_-group-content">
                <input type="password" name="password" placehold="例 : coachtech1106">
            </div>
            <div class="form_error">
                @error('password')
                {{ @message }}
                @enderror
            </div>
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">ログイン</button>
        </div>
    </form>
</div>
@endsection