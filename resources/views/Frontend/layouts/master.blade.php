@include('Frontend.layouts.html_head')
@include('Frontend.layouts.meta_tag')
@include('Frontend.layouts.navbar')
@include('Frontend.layouts.footer')
@include('Frontend.layouts.footer_script')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css')
    @yield('script')
    @yield('html_head')
    @yield('meta_tag')
</head>

<body>
    @yield('navbar')

    @yield('content')

    @yield('footer')
    @yield('footer_script')
</body>

</html>