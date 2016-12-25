<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('meta')
    @include('includes.head')
    <title>@yield('title')</title>
    @yield('css')
</head>
<body>
@include('includes.header')
@yield('content')





@include('includes.footer')
@yield('script')
</body>
</html>