@extends('layouts.app')

@section('content')
<div class="content_title">
    <h2 class="content_title-logo"></h2>
</div>
<div class="form-content">
    <form action="/contacts" method="post">
        @csrf
        <table class="from_table">
            <tr class="table_row">
                <th class="table_header-text">お名前</th>
                <td class="table_data">
                    <p class="table_data-text">{{ $contact['name'] }}</p>
                    <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                    <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                </td>
            <tr class="table_row">
                <th class="table_header-text">性別</th>
                <td class="table_data">
                    <p class="table_data-text">{{ $contact['gender'] }}</p>
                    <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                </td>
            </tr>
            <tr class="table_row">
                <th class="table_header-text">メールアドレス</th>
                <td class="table_data">
                    <p class="table_data-text">{{ $contact['email'] }}</p>
                    <input type="hidden" name="email" value="{{ $contact['email'] }}">
                </td>
            </tr>
            <tr class="table_row">
                <th class="table_header-text">電話番号</th>
                <td class="table_data">
                    <p class="table_data-text">{{ $contact['tel'] }}</p>
                    <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
                </td>
            </tr>
            <tr class="table_row">
                <th class="table_header-text">住所</th>
                <td class="table_data">
                    <p class="table_data-text">{{ $contact['address'] }}</p>
                    <input type="hidden" name="address" value="{{ $contact['address'] }}">
                </td>
            </tr>
            <tr class="table_row">
                <th class="table_header-text">建物名</th>
                <td class="table_data">
                    <p class="table_data-text">{{ $contact['building'] }}</p>
                    <input type="hidden" name="building" value="{{ $contact['building'] }}">
                </td>
            </tr>
            <tr class="table_row">
                <th class="table_header-text">お問い合わせの種類</th>
                <td class="table_data">
                    <p class="table_data-text">{{ $contact['category_id'] }}</p>
                    <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                </td>
            </tr>
            <tr class="table_row">
                <th class="table_header-text">お問い合わせ内容</th>
                <td class="table_data">
                    <p class="table_data-text">{{ $contact['detail'] }}</p>
                    <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                </td>
            </tr>
        </table>
        <div class="form_button">
            <button class="form_button-submit">送信</button>
        </div>
    </form>
    <form action="/back" method="post">
        @csrf
        <div class="form_button">
            <button class="form_button-back">修正</button>
        </div>
    </form>
</div>
@endsection