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
                                        <h3 style="text-align: left">Stadiums</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Stadium</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Capacity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stadium as $item)
                                            <tr>
                                                <td>
                                                    <a
                                                        href="{{ route('stadium.single', $item->id) }}">{{ $item->stadium_name }}</a>
                                                </td>
                                                <td>{{ $item->location }}</td>
                                                <td>{{ $item->capacity }}</td>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
