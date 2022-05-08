<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('layouts.style')
    @stack('addon-style')
</head>

<body>

    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')

    @stack('prepend-script')
    @include('layouts.script')
    @stack('addon-script')
</body>

</html>