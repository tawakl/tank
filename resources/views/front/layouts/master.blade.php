<!DOCTYPE html>
<html lang="en">
<head>
    <title>Liverpool News</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

@include('front.layouts.css')
</head>
<body>
@include('front.layouts.nav')
<!-- END nav -->

{{--@include('front.layouts.header')--}}

@yield('head')

@yield('content')

@include('front.layouts.footer')



@include('front.layouts.js')

</body>
</html>
