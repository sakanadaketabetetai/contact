@extends('layouts.index')

@section('admin')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin_content">
    <div class="admin_form-header">
        <h2>Admin</h2>
    </div>
    <form action="find" method="post" class="form">
        @csrf
        <div class="form_content">
            <div class="form_input">
                <input type="text" name="input" placehold="名前やメールアドレスを入力してください">
            </div>
            <div class="form_gender">
                <select name="gender">
                    <option value=""></option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
            </div>
            <div class="form_category">
                <select name="category_id">
                    <option value=""></option>
                    <option value="1">商品のお届けについて</option>
                    <option value="2">商品の交換について</option>
                    <option value="3">商品トラブル</option>
                    <option value="4">ショップへのお問い合わせ</option>
                    <option value="5">その他</option>
                </select>
            </div>
        </div>
    </form>
    @if(@isset($item))
    <table>
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th></th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->name}}</td>
            <td>{{ $item->gender}}</td>
            <td>{{ $item->email}}</td>
            <td>{{ $item->categories->content}}</td>
        </tr>
        @endforeach
    </table>
    @endif
</div>

@endsection