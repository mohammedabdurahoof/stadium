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
                                        <h3>Matches</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Matches</th>
                                            <th scope="col">Crowd</th>
                                            <th scope="col">Teams</th>
                                            <th scope="col">Score</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($matchesAll as $item)
                                            <tr>
                                                <th scope="row">{{ $loop->index + 1 }}</th>
                                                <td><a
                                                        href="{{ route('matches.single', $item->id) }}">{{ $item->name }}</a>
                                                </td>
                                                <td>{{ $item->crowd }}</td>
                                                <td>{{ $item->team1 ? $item->team1 . 'vs' . $item->team2 : 'Null' }}</td>
                                                <td>{{ $item->team1_score ? $item->team1_score . ':' . $item->team2_score : 'Null' }}
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
