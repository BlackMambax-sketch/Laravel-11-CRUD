<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="icon" sizes="16x16" href="{{ asset("favicon.ico") }}"/>
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/bootstrap.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/owl.carousel.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/line-awesome.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/fontawesome.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/style.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/custom.css") }}"/>

    <!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('site.webmanifest') }}">
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

<!-- Android -->
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
<link rel="icon" type="image/png" sizes="512x512" href="{{ asset('android-chrome-512x512.png') }}">

</head>
<body>
    <div class="loader">
        <div class="loader-element"></div>
    </div>
    <x-frontend.header/>
    @yield("content")
    <x-frontend.footer/>
    <div class="back">
        <a href="#" class="back-top">
            <i class="las la-long-arrow-alt-up"></i>
        </a>
    </div>
    <div class="search">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-10 m-auto">
                    <div class="search-width">
                        <button type="button" class="close">
                            <i class="far fa-times"></i>
                        </button>
                        <form class="search-form" action="{{ route("frontend.search") }}">
                            <input type="search" name="q" value="{{ request()->route()->getName() == "frontend.search" ? request()->q : "" }}" placeholder="What are you looking for?">
                            <button type="submit" class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset("assets/frontend/js/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/frontend/js/popper.min.js") }}"></script>
    <script src="{{ asset("assets/frontend/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/frontend/js/theia-sticky-sidebar.js") }}"></script>
    <script src="{{ asset("assets/frontend/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("assets/frontend/js/switch.js") }}"></script>
    <script src="{{ asset("assets/frontend/js/jquery.marquee.js") }}"></script>
    <script src="{{ asset("assets/frontend/js/main.js") }}"></script>
    @yield("script")
</body>
</html>
