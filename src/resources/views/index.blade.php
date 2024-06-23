@extends('layouts.app')
<style>

</style>

@section('content')
<div class="content_title">
    <h2 class="content_title-logo">Contact</h2>
</div>
<div class="form-content">
    <form action="/contacts/confirm" method="post">
        @csrf
        <table class="form_table">
            <tr class="table_row">
                <th class="table_header">
                    <span class="table_header-text">お名前</span>
                    <span class="table_header-item">※</span>
                </th>
                <td>
                    <input type="text" name="first_name" placehold="例 : 山田">
                    <input type="text" name="last_name" placehold="例 : 太郎">
                </td>
            </tr>
            <tr class="table_row">
                <th class="table_header">
                    <span class="table_header-text">性別</span>
                    <span class="table_header-item">※</span>
                </th>
                <td>
                    <input type="radio" name="gender" value="1">男性
                    <input type="radio" name="gender" value="2">女性
                    <input type="radio" name="gender" value="3">その他
                </td>
            </tr>
            <tr class="table_row">
                <th class="table_header">
                    <span class="table_header-text">メールアドレス</span>
                    <span class="table_header-item">※</span>
                </th>
                <td>
                    <input type="email" name="email" placehold="例 : test@example.com">
                </td>
            </tr>
            <tr class="table_row">
                <th class="table_header">
                    <span class="table_header-text">電話番号</span>
                    <span class="table_header-item">※</span>
                </th>
                <td>
                    <input type="tel" name="telNumber_1" placehold="080">-
                    <input type="tel" name="telNumber_2" placehold="1234">-
                    <input type="tel" name="telNumber_3" placehold="5678">
                </td>
            </tr>
            <tr class="table_row">
                <th class="table_header">
                    <span class="table_header-text">住所</span>
                    <span class="table_header-item">※</span>
                </th>
                <td>
                    <input type="text" name="address" placehold="例 : 東京都渋谷区千駄ヶ谷1-2-3">
                </td>
            </tr>
            <tr class="table_row">
                <th class="table_header">
                    <span class="table_header-text">建物</span>
                </th>
                <td>
                    <input type="text" name="building" placehold="例 : 千駄ヶ谷マンション101">
                </td>
            </tr>
            <tr class="table_row">
                <th class="table_header">
                    <span class="table_header-text">お問い合わせの種類</span>
                    <span class="table_header-item">※</span>
                </th>
                <td>
                    <select name="category_id">
                        <option value="0"></option>
                        <option value="1">商品のお届けについて</option>
                        <option value="2">商品の交換について</option>
                        <option value="3">商品トラブル</option>
                        <option value="4">ショップへのお問い合わせ</option>
                        <option value="5">その他</option>
                    </select>
                </td>
            </tr>
            <tr class="table_row">
                <th class="table_header">
                    <span class="table_header-text">お問い合わせ内容</span>
                    <span class="table_header-item">※</span>
                </th>
                <td>
                    <textarea name="detail" placehold="お問い合わせ内容をご記載ください"></textarea>
                </td>
            </tr>
        </table>
        <div class="form_button">
            <button class="form_button-submit">確認画面</button>
        </div>
    </form>
</div>

@endsection