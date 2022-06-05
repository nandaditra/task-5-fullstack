<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tambah | Categories</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h4>Tambah Categories</h4>

    <a href="/categories">Kembali</a>
    
    <form action="/categories/store" method="post">
        {{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		User ID <input type="text" name="user_id" required="required"> <br/>
		<input type="submit" value="Tambah Data">
    </form>
</html>