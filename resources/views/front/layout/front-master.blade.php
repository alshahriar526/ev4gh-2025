<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.partials.head')
</head>

<body>
    @include('front.partials.header')
    @yield('content')
    @include('front.partials.footer')
    @include('front.partials.bottom-inc')
</body>

</html>
