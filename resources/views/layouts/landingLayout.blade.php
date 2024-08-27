<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ELMUDRAJ </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- CSS here -->
    @include('layouts/sections/landing_style')

</head>

<body>
    <!-- Preloader Start -->
    @include('layouts/sections/preloader')


    {{-- header --}}

    @include('layouts/sections/navbar/landing_header')

    <!-- Content -->
    @yield('content')
    <!--/ Content -->

    {{-- footer --}}
    @include('layouts/sections/footer/landing_footer')

    <!-- Search model Begin -->
    {{-- <div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div> --}}
    <!-- Search model end -->

    <!-- JS here -->
    @include('layouts/sections/landing_script')



</body>

</html>
