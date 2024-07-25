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
    <script>
        function fetchSeasonData(seasonId) {
            $.ajax({
                url: `/admin/season/${seasonId}`,
                method: 'GET',
                success: function(data) {
                    $('#season').val(data.season);
                    $('#matches').val(data.matches);
                    $('#total').val(data.total);
                    $('#avg').val(data.avg);
                    $('#high').val(data.high);
                    $('#low').val(data.low);
                },
                error: function(error) {
                    console.error('Error fetching data:', error);
                }
            });
        }

        const seasonSelect = $('#season_select');
        const defaultSeasonId = seasonSelect.val();

        if (defaultSeasonId) {
            fetchSeasonData(defaultSeasonId);
        }

        seasonSelect.change(function() {
            const seasonId = $(this).val();
            fetchSeasonData(seasonId);
        });

        $('#update_button').click(function() {
            const seasonId = $('#season_select').val();
            const matches = $('#matches').val();
            const total = $('#total').val();
            const avg = $('#avg').val();
            const high = $('#high').val();
            const low = $('#low').val();

            $(this).prop('disabled', true);

            $.ajax({
                url: `/admin/season/${seasonId}`,
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: JSON.stringify({
                    matches,
                    total,
                    avg,
                    high,
                    low
                }),
                success: function(data) {
                    if (data.success) {
                        alert('Season data updated successfully.');
                        $('#update_button').prop('disabled', false);
                    }
                },
                error: function(error) {
                    console.error('Error updating data:', error);
                    $('#update_button').prop('disabled', false);
                }
            });
        });
    </script>
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
                                <a class="dropdown-item" href="{{ route('clubs.index') }}">View More</a>
                                {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Clubs</span>
                    <h3 class="card-title mb-2">{{ $clubsCount }}</h3>
                </div>
            </div>
        </div>
    </div>


    <div class="card mt-2">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-2">
                    <p>SEASON</p>
                    <select class="form-control" id="season_select" name="season">
                        @foreach ($seasons as $season)
                            <option value="{{ $season->id }}">{{ $season->season }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-md-2">
                    <p>MATCHES</p>
                    <input type="number" name="matches" id="matches" class="form-control">
                </div>
                <div class="col-12 col-md-2">
                    <p>TOTAL</p>
                    <input type="number" name="total" id="total" class="form-control">
                </div>
                <div class="col-12 col-md-2">
                    <p>AVG</p>
                    <input type="number" name="avg" id="avg" class="form-control">
                </div>
                <div class="col-12 col-md-2">
                    <p>HIGH</p>
                    <input type="number" name="high" id="high" class="form-control">
                </div>
                <div class="col-12 col-md-2">
                    <p>LOW</p>
                    <input type="number" name="low" id="low" class="form-control">
                </div>
            </div>
            <div class="row mt-3 float-end">
                <div class="col-12">
                    <button id="update_button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>

    {{-- @foreach ($seasons as $season)
        <div class="card mt-2">
            <div class="card-body">
                <form action="{{ route('season', $season->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-2">
                            <p> SEASON</p>

                            <input type="text" disabled name="season" value="{{ $season->season }}"
                                class="form-control">

                        </div>
                        <div class="col-12 col-md-2">
                            <p>MATCHES</p>
                            <input type="number" name="matches" value="{{ $season->matches }}" class="form-control">
                        </div>
                        <div class="col-12 col-md-2">
                            <p>TOTAL</p>
                            <input type="number" name="total" value="{{ $season->total }}" class="form-control">
                        </div>
                        <div class="col-12 col-md-2">
                            <p>AVG</p>
                            <input type="number" name="avg" value="{{ $season->avg }}" class="form-control">
                        </div>
                        <div class="col-12 col-md-2">
                            <p>HIGH</p>
                            <input type="number" name="high" value="{{ $season->high }}" class="form-control">
                        </div>
                        <div class="col-12 col-md-2">
                            <p>LOW</p>
                            <input type="number" name="low" value="{{ $season->low }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2 float-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach --}}
@endsection
