@extends('layouts/landingLayout')

@section('title', 'Blank layout - Layouts')

@section('content')
    <main>
        <div class="trending-area fix pt-25 gray-bg pb-3">
            <div class="container">
                <div class="trending-main">
                    <div class="recent-articles">
                        <div class="recent-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-tittle mb-30">
                                        <h3 style="text-align: left">News</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($news as $item)
                                    <div class="col-md-4 col-12 trending-top mt-10">
                                        <div class="trend-top-img">
                                            <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    @foreach (json_decode($item->featured_image) as $image)
                                                        <div class="swiper-slide"><img
                                                                src="{{ asset('uploads/images/' . $image) }}"
                                                                alt=""></div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            {{-- <img src="{{ asset('uploads/images/' . $images[0]) }}" alt=""> --}}
                                        </div>
                                        <div class="trend-top-cap trend-top-cap2">

                                            <h2><a href="{{ route('news.single', $item->id) }}">{{ $item->title }}</a></h2>
                                            <p>{{ $item->created_at }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
