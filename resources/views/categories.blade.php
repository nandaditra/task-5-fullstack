<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Categories</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>
       <table>
            <thead>
                <th>Id</th>
                <th>Nama</th>
                <th>User ID</th>
            </thead>
            <tbody>
                @foreach($category as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->user_id }}</td>
                    <td>
                        <a href="/categories/edit/{{ $p->id }}">Edit</a>
                        <a href="/categories/hapus/{{ $p->id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
       </table>
    </div>
   
</body>
</html>