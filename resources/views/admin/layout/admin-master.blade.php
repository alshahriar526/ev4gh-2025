<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')
</head>
<body>
    <div class="wrapper">
        @include('admin.partials.header')
        @yield('content')
        @include('admin.partials.footer')
        @include('admin.partials.bottom-inc')
    </div>
</body>
</html>
