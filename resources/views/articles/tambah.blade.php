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
    <h4>Tambah Article</h4>

    <a href="/articles">Kembali</a>
    
    <form action="/articles/store" method="post">
        {{ csrf_field() }}
		Title <input type="text" name="title" required="required"> <br/>
		Content <input type="text" name="content" required="required"> <br/>
        Images  <input type="file" name="images" required="required"> <br/>
        User ID <input type="text" name="user_id" required="required"> <br/>
        Category Id <input type="text" name="category_id" required="required"> <br/>
		<input type="submit" value="Tambah Data">
    </form>
</html>