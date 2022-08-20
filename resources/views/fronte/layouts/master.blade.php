<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Tank - Creative Portfolio Showcase HTML Website Template by Themetorium</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Download Tank - Creative Portfolio Showcase HTML Website Template that comes with rich features and well-commented code. Made by Themetorium.">
    <meta name="author" content="themetorium.net">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

@include('fronte.layouts.css')
</head>
<body>
@include('fronte.layouts.nav')
<!-- END nav -->

{{--@include('front.layouts.header')--}}

@yield('head')

@yield('content')

@include('fronte.layouts.footer')



@include('fronte.layouts.js')

</body>
</html>
