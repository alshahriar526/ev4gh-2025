<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.partials.head')
    @stack('styles')

    
</head>

<body>
    @include('front.partials.header')

    <main id="main">
        @yield('content')
    </main>

    @include('front.partials.footer')
    @include('front.partials.bottom-inc')
    @stack('scripts')
</body>

</html>
