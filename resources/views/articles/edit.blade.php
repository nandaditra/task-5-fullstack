<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Edit | Articles</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h4>Edit Articles</h4>

    <a href="/categories">Kembali</a>
    
    @foreach($article as $c)
    <form action="/articles/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $c->id }}"> <br/>
		Title <input type="text" name="title" required="require"value="{{ $c->title }}"> <br/>
		Content <input type="text" name="content" required="required"value="{{ $c->content}}"> <br/>
        Images  <input type="file" name="images" required="required"value="{{ $c->images }}"> <br/>
        User ID <input type="text" name="user_id" required="required"value="{{ $c->user_id }}"> <br/>
        Category Id <input type="text" name="category_id" required="required"value="{{ $c->category_id }}"> <br/>
		<input type="submit" value="Edit Data">
    </form>
    @endforeach

</html>