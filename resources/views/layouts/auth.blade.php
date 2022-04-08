<!DOCTYPE html>
<html>
<head>
    @include('includes.auth.meta')
    <title>@yield('title') | MeetDoctor</title>

    @stack('before-style')
        @include('includes.frontsite.style')
    @stack('after-style')
</head>
<body>
    @yield('content')

    @stack('before-script')
        @include('includes.frontsite.script')
    @stack('after-script')
</body>
</html>