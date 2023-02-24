<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('head')
</head>

<body>
    <div id="container">
        @yield('header')

        <div id="contents">
            @yield('body')
        </div>

        @yield('footer')
    </div>

    @yield('scripts')
</body>
</html>
