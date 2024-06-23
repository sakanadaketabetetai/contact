<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <div class="header_logo">
                <h2>Fashionably Late</h2>
            </div>
            <div class="header_button">
                @if(Request::routeIs('login'))
                    <a href="/register" class="header_register">register</a>
                @endif
                @if(Request::routeIs('register'))
                    <a href="/login" class="header_login">login</a>
                @endif
                @if(Auth::check())
                    <form action="/logout" class="header_logout" method="post">
                        @csrf
                        <button>logout</button>
                    </form>
                @endif
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>