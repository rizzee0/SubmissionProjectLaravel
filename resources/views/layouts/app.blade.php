<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Praktikum Laravel')</title>
</head>
<body>
    @include('partials.navbar')

    <hr>

    @yield('content')

    <hr>
    <footer>Praktikum Framework Laravel 13</footer>
</body>
</html>