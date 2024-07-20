@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            {{-- <img src="{{ asset('assets/img/icons/unicons/chart-success.png') }}" alt="chart success"
                                class="rounded"> --}}
                            <i class="menu-icon tf-icons bx bx-user-circle rounded" style="font-size: 2.5rem"></i>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="{{ route('admins') }}">View More</a>
                                {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Admins</span>
                    <h3 class="card-title mb-2">{{ $adminsCount }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <i class="menu-icon tf-icons bx bx-news rounded" style="font-size: 2.5rem"></i>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="{{ route('news.index') }}">View More</a>
                                {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                            </div>
                        </div>
                    </div>
                    <span>News</span>
                    <h3 class="card-title text-nowrap mb-1">{{ $newsCount }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <i class="menu-icon tf-icons bx bxs-flag-checkered rounded" style="font-size: 2.5rem"></i>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{ route('stadium.index') }}">View More</a>
                                {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                            </div>
                        </div>
                    </div>
                    <span class="d-block mb-1">Stadium</span>
                    <h3 class="card-title text-nowrap mb-2">{{ $stadiumCount }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <i class="menu-icon tf-icons bx bx-football rounded" style="font-size: 2.5rem"></i>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="{{ route('matches.index') }}">View More</a>
                                {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Matches</span>
                    <h3 class="card-title mb-2">{{ $matchesCount }}</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
