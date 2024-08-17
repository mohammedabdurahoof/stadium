@extends('layouts/landingLayout')

@section('title', 'Blank layout - Layouts')

@section('content')

    <main>
        <!-- About US Start -->
        <div class="about-area2 gray-bg pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Tittle -->
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <img src="{{ asset('uploads/images/' . $news->featured_image) }}" alt="" />
                            </div>
                            <div class="heading-news mb-30 pt-30">
                                <h3>{{ $news->title }}</h3>
                            </div>
                            <div class="about-prea">
                                <p class="about-pera1 mb-25 text-right">
                                    {{ $news->content }}
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-footer-caption mb-10">
                                <div class="footer-tittle mb-20">
                                    <h4>Latest News</h4>
                                </div>
                                <!-- Popular post -->
                                @foreach ($latestNews as $item)
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="{{ asset('uploads/images/' . $item->featured_image) }}" alt=""
                                                width="100" />
                                        </div>
                                        <div class="whats-right-cap">
                                            <h4>
                                                <a href="{{ route('news.single', $item->id) }}">{{ $item->title }}</a>
                                            </h4>
                                            <p>{{ $item->created_at }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="single-follow mb-45">
                            <div class="single-footer-caption mb-10">
                                <div class="footer-tittle mb-20">
                                    <h4>Popular Stadium</h4>
                                </div>
                                <!-- Popular post -->
                                @foreach ($popularStadium as $item)
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="{{ asset('uploads/images/' . $item->image) }}" alt=""
                                                width="100" />
                                        </div>
                                        <div class="whats-right-cap">
                                            <h4>
                                                <a
                                                    href="{{ route('stadium.single', $item->id) }}">{{ $item->stadium_name }}</a>
                                            </h4>
                                            <p>Location: {{ $item->location }} | Capacity:
                                                {{ $item->capacity }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About US End -->
    </main>
    <style>
        .table td,
        .table th {
            padding: .5rem 2rem;
        }
    </style>
@endsection
