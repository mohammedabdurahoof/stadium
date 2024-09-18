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
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        @foreach (json_decode($stadium->image) as $image)
                                            <div class="swiper-slide"><img src="{{ asset('uploads/images/' . $image) }}"
                                                    alt=""></div>
                                        @endforeach
                                    </div>
                                </div>
                                {{-- <img src="{{ asset('uploads/images/' . $images[0]) }}" alt="" /> --}}
                            </div>
                            <div class="heading-news mb-30 pt-30">
                                <h3>{{ $stadium->stadium_name }}</h3>
                            </div>
                            <div class="about-prea">
                                <p class="about-pera1 mb-25 text-right">
                                    {{ $stadium->description }}
                                </p>

                            </div>
                        </div>
                        <div class="heading-news mb-30 pt-30">
                            <h4 style="text-align: left">{{ $stadium->stadium_name }} Details</h4>
                        </div>
                        <table class="table table-bordered" style="width: fit-content;">
                            <tbody>
                                <tr>
                                    <td class="bg-dark text-light">Location</td>
                                    <td>{{ $stadium->location }}</td>
                                </tr>
                                <tr>
                                    <td class="bg-dark text-light">Address</td>
                                    <td>{{ $stadium->address }}</td>
                                </tr>
                                <tr>
                                    <td class="bg-dark text-light">Record Crowd </td>
                                    <td>{{ $stadium->record_crowd }}</td>
                                </tr>
                                <tr>
                                    <td class="bg-dark text-light">Lights</td>
                                    <td>{{ $stadium->Lights ? 'Yes' : 'No' }}</td>
                                </tr>


                                <tr>
                                    <td class="bg-dark text-light">Arena Roof</td>
                                    <td>{{ $stadium->arena_roof ? 'Yes' : 'No' }}</td>
                                </tr>
                                <tr>
                                    <td class="bg-dark text-light">Video Screen</td>
                                    <td>{{ $stadium->video_screen ? 'Yes' : 'No' }}</td>
                                </tr>

                                <tr>
                                    <td class="bg-dark text-light">Sports Played</td>
                                    <td>{{ $stadium->sports_played }}</td>
                                </tr>
                                <tr>
                                    <td class="bg-dark text-light">Capacity</td>
                                    <td>{{ $stadium->capacity }}</td>
                                </tr>
                                <tr>
                                    <td class="bg-dark text-light">Seats</td>
                                    <td>{{ $stadium->seats }}</td>
                                </tr>
                                <tr>
                                    <td class="bg-dark text-light">Opened in</td>
                                    <td>{{ $stadium->opened }}</td>
                                </tr>
                                <tr>
                                    <td class="bg-dark text-light">Country</td>
                                    <td>{{ $stadium->country }}</td>
                                </tr>
                                <tr>
                                    <td class="bg-dark text-light">State</td>
                                    <td>{{ $stadium->state }}</td>
                                </tr>
                            </tbody>
                        </table>
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
                                        {{-- <div class="whats-right-img">
                                            <img src="{{ asset('uploads/images/' . $item->featured_image) }}"
                                                alt="" width="100" />
                                        </div> --}}
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
                                        {{-- <div class="whats-right-img">
                                            <img src="{{ asset('uploads/images/' . $item->image) }}" alt=""
                                                width="100" />
                                        </div> --}}
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
            padding: .15rem;
        }
    </style>
@endsection
