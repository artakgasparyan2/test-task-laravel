<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/home.css')}}" rel="stylesheet" type="text/css" media="all" />
    @yield('css')
    <title>Document</title>
</head>
<body>
<header>
    <a href="{{route('home')}}" class="logo"><strong>Home Page</strong></a>
    <nav class="site-nav">
        <ul>
            <li><a href="{{route('home')}}">Home Page</a></li>
            <li><a href="{{route('news.index')}}">News</a></li>
            <li><a href="{{route('news.create')}}">Create news</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
        </ul>
    </nav>
</header>

@yield('content')

</body>
</html>
