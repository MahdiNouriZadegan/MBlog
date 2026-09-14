<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('images/small-logo.png')}}" type="image/x-icon">

    @vite(['resources/css/admin/style.css', 'resources/css/admin/index.css', 'resources/js/admin/script.js'])
    @stack('styles')
</head>

<body>
<!-- header -->
@include('admin.components.header')
<!-- content -->
@yield('content')
<!-- footer -->
@include('admin.components.footer')

@stack('scripts')
</body>

</html>
