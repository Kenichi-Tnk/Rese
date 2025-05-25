<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Rese')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @yield('css')
</head>
<body>
    <div class="header">
        <div class="header-left">
            <div class="header-logo"></div>
            <div class="header-title">Rese</div>
        </div>
        <form class="header-search" method="GET" action="#">
        <select name="area">
            <option value="">All area</option>
            <!-- エリア選択肢をここに追加 -->
        </select>
        <select name="genre">
            <option value="">All genre</option>
            <!-- ジャンル選択肢をここに追加 -->
        </select>
        <input type="text" name="search" placeholder="Search ...">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>