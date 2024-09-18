@extends('layouts/landingLayout')

@section('title', 'Blank layout - Layouts')

@section('content')
    <main>
        <div class="main">
            <div class="container">

                <h3 style="color: #fff; text-align: center">WELCOME TO HOME OF</h3>
                {{-- <h1 style="color: #fff">STADIUM</h1> --}}
                <div class="text1">

                    <svg viewBox="0 0 800 150">
                        <symbol id="s-text">
                            <text text-anchor="start" x="10" y="130" class="text--line">
                                STADIUM
                            </text>


                        </symbol>

                        <g class="g-ants">
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                        </g>


                    </svg>
                </div>
                <p style="color: #fff; text-align: center">
                    <i> "Football is like life. It requires perseverance, self-denial, hard work, sacrifice, dedication, and
                        respect for authority."</i> <br> – <b style="color: #fff; text-align: center">Vince Lombardi</b>
                </p>
            </div>
        </div>
        <!--   Upcomming Events -->
        <div class="weekly2-news-area pt-50 pb-30 gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <div class="row">
                        <!-- Banner -->
                        <div class="col-lg-3" id="home_banner">
                            <div class="home-banner2 d-none d-lg-block">
                                {{-- <img src="{{ asset('assets/img/logo_banner.png') }}" alt=""> --}}
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="slider-wrapper">
                                <!-- section Tittle -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="small-tittle mb-30">
                                            <h4 style="text-align: left">Popular Stadiums</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-block d-md-none mb-2">
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <!-- Swiper -->
                                            <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    @foreach (json_decode($stadium[0]->image) as $image)
                                                        <div class="swiper-slide"><img
                                                                src="{{ asset('uploads/images/' . $image) }}"
                                                                alt=""></div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            {{-- <img src="{{ asset('uploads/images/' . json_decode($stadium[0]->image)[0]) }}"
                                                alt=""> --}}
                                        </div>
                                        <div class="weekly2-caption">
                                            <h4><a
                                                    href="{{ route('stadium.single', $stadium[0]->id) }}">{{ $stadium[0]->stadium_name }}</a>
                                            </h4>
                                            <p>Location: {{ $stadium[0]->location }} | Capacity: {{ $stadium[0]->capacity }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slider -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="weekly2-news-active d-flex">
                                            <!-- Single -->
                                            @foreach ($stadium as $item)
                                                <div class="weekly2-single">
                                                    <div class="weekly2-img">
                                                        <!-- Swiper -->
                                                        <div class="swiper mySwiper">
                                                            <div class="swiper-wrapper">
                                                                @foreach (json_decode($item->image) as $image)
                                                                    <div class="swiper-slide"><img
                                                                            src="{{ asset('uploads/images/' . $image) }}"
                                                                            alt=""></div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        {{-- <img src="{{ asset('uploads/images/' . json_decode($item->image)[0]) }}"
                                                            alt=""> --}}
                                                    </div>
                                                    <div class="weekly2-caption">
                                                        <h4><a
                                                                href="{{ route('stadium.single', $item->id) }}">{{ $item->stadium_name }}</a>
                                                        </h4>
                                                        <p>Location: {{ $item->location }} | Capacity:
                                                            {{ $item->capacity }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Upcomming Events -->

        <!-- banner-last Start -->
        <div class="banner-area pt-90 pb-90">
            <div class="container">
                <h1 style="color: #fff; font-weight: 700; text-align: left">Check Here for Club Details</h1>
                <a href="{{ route('clubs') }}" class="genric-btn success circle">Show Club Details </a>
            </div>
        </div>
        <!-- banner-last End -->

        <!-- News Area Start -->
        <div class="trending-area fix pt-25 gray-bg pb-3">
            <div class="container">
                <div class="trending-main">

                    <div class="recent-articles">
                        <div class="recent-wrapper">
                            <!-- section Tittle -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-tittle mb-30">
                                        <h3 style="text-align: left">Trending News</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block d-md-none">
                                <div class="row mb-2">
                                    <div class="col-12">
                                        <div class="trending-top mb-30">
                                            <div class="trending-top mr-10">
                                                <div class="trend-top-img">
                                                    <!-- Swiper -->
                                                    <div class="swiper mySwiper">
                                                        <div class="swiper-wrapper">
                                                            @foreach (json_decode($news[0]->featured_image) as $image)
                                                                <div class="swiper-slide"><img
                                                                        src="{{ asset('uploads/images/' . $image) }}"
                                                                        alt=""></div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    {{-- <img src="{{ asset('uploads/images/' . json_decode($news[0]->featured_image)[0]) }}"
                                                        alt=""> --}}
                                                </div>
                                                <div class="trend-top-cap trend-top-cap2">

                                                    <h2><a
                                                            href="{{ route('news.single', $news[0]->id) }}">{{ $news[0]->title }}</a>
                                                    </h2>
                                                    <p>{{ $news[0]->created_at }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="trending-top mb-30">
                                            <div class="trending-top">
                                                <div class="trend-top-img">
                                                    <!-- Swiper -->
                                                    <div class="swiper mySwiper">
                                                        <div class="swiper-wrapper">
                                                            @foreach (json_decode($news[1]->featured_image) as $image)
                                                                <div class="swiper-slide"><img
                                                                        src="{{ asset('uploads/images/' . $image) }}"
                                                                        alt=""></div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    {{-- <img src="{{ asset('uploads/images/' . json_decode($news[1]->featured_image)[0]) }}"
                                                        alt=""> --}}
                                                </div>
                                                <div class="trend-top-cap trend-top-cap2">

                                                    <h2><a
                                                            href="{{ route('news.single', $news[1]->id) }}">{{ $news[1]->title }}</a>
                                                    </h2>
                                                    <p>{{ $news[1]->created_at }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="trending-top mb-30">
                                            <div class="trending-top">
                                                <div class="trend-top-img">
                                                    <!-- Swiper -->
                                                    <div class="swiper mySwiper">
                                                        <div class="swiper-wrapper">
                                                            @foreach (json_decode($news[2]->featured_image) as $image)
                                                                <div class="swiper-slide"><img
                                                                        src="{{ asset('uploads/images/' . $image) }}"
                                                                        alt=""></div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    {{-- <img src="{{ asset('uploads/images/' . json_decode($news[2]->featured_image)[0]) }}"
                                                        alt=""> --}}
                                                </div>
                                                <div class="trend-top-cap trend-top-cap2">

                                                    <h2><a
                                                            href="{{ route('news.single', $news[2]->id) }}">{{ $news[2]->title }}</a>
                                                    </h2>
                                                    <p>{{ $news[2]->created_at }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-md-block">
                                <div class="row">
                                    @foreach ($news as $item)
                                        <div class="col-4">
                                            <div class="trending-top mr-10">
                                                <div class="trend-top-img">
                                                    <!-- Swiper -->
                                                    <div class="swiper mySwiper">
                                                        <div class="swiper-wrapper">
                                                            @foreach (json_decode($item->featured_image) as $image)
                                                                <div class="swiper-slide"><img
                                                                        src="{{ asset('uploads/images/' . $image) }}"
                                                                        alt=""></div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    {{-- <img src="{{ asset('uploads/images/' . json_decode($item->featured_image)[0]) }}"
                                                        alt=""> --}}
                                                </div>
                                                <div class="trend-top-cap trend-top-cap2">

                                                    <h2><a
                                                            href="{{ route('news.single', $item->id) }}">{{ $item->title }}</a>
                                                    </h2>
                                                    <p>{{ $item->created_at }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="text-align: center">

                        <a href="{{ route('news') }}" class="genric-btn success-border circle">Show more news <i
                                class="fas fa-angle-right"></i></a>
                    </div>

                </div>
            </div>
        </div>
        <!-- News Area End -->




        <!--   Weekly3-News start -->
        <div class="weekly3-news-area pt-80 pb-130">
            <div class="container">
                <div class="weekly3-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3 style="text-align: left">Listed Stadiums</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-wrapper">
                                <!-- Slider -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="weekly3-news-active dot-style d-flex">
                                            @foreach ($stadiumByState as $item)
                                                <div>
                                                    <div>
                                                        <div class="weekly3-single m-2">
                                                            <a href="{{ route('stadiumBy', $item->state) }}">
                                                                <div class="card">
                                                                    <div class="card-body" style="padding: 0.25rem">
                                                                        <h1 style="text-align: center">{{ $item->total }}
                                                                        </h1>
                                                                        <P style="text-align: center">
                                                                            {{-- Stadiums On <br>  --}}
                                                                            {{ $item->state }}
                                                                        </P>
                                                                        {{-- <a class="show_btn"
                                                                        href="{{ route('stadiumBy', $item->state) }}"
                                                                style=" display: block;"><i class="ti-arrow-right"></i>
                                                    </a> --}}
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->



    </main>

@endsection
