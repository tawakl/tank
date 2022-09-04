<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Title -->
    <title>CE ALI OMAR</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Download Tank - Creative Portfolio Showcase HTML Website Template that comes with rich features and well-commented code. Made by Themetorium.">
    <meta name="author" content="themetorium.net">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon (http://www.favicon-generator.org/) -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Analytics - Global site tag (gtag.js) -->
    <!-- Paste your Google Anaytics code here. -->

    <!-- Google fonts (https://www.google.com/fonts) -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Body font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <!-- Secondary/Alter font -->
    @include('fronte.layouts.css')



</head>


<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">

<main id="body-inner">

    <!-- Begin page transition (do not remove!!!)
        =========================== -->
    <div id="page-transition">
        <div class="ptr-overlay"></div>
        <div class="ptr-preloader">
            <div class="ptr-prel-content">
                <!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".ptr-prel-image"). -->
                <img src="{{asset('front/img/logo-light.png')}}" class="ptr-prel-image tt-logo-light" alt="Logo">
            </div>
            <!-- /.ptr-prel-content -->
        </div>
        <!-- /.ptr-preloader -->
    </div>
    <!-- End page transition -->

    <!-- Begin magic cursor
        ======================== -->
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
    <!-- End magic cursor -->

    <!-- Begin noise background -->
    <div class="bg-noise"></div>
    <!-- End noise background -->


    <!-- *****************************************
        *********** Begin scroll container ***********
        ****************************************** -->
    <div id="scroll-container">

        @include('fronte.layouts.header')
        @yield('content')
        @include('fronte.layouts.footer')
        @include('fronte.layouts.js')

    </div>
    <!-- End scroll container -->

</main>
</body>
</html>
