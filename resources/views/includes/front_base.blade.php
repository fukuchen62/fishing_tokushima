<html>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css')
    <title>@yield('title')</title>
</head>

<body>
    @include('includes.front_header')
    @yield('main')
    @include('includes.front_footer')
</body>

</html>
