@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register_content">
    <div class="register_form-title">
        <h2>Register</h2>
    </div>
    <form action="/register" class="form" method="post">
        @csrf
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-title">お名前</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="text" name="name" value="{{ old('name') }}" placehold="例 : 山田 太郎">
                </div>
                <div class="form_error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-title">メールアドレス</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="email" name="email" value="{{ old('email') }}" placehold="例 : test@example.com">
                </div>
                <div class="form_error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-title">パスワード</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="password" name="password" placehold="例 : coachtech1106">
                </div>
                <div class="form_error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">登録</button>
        </div>
    </form>
</div>


@endsection