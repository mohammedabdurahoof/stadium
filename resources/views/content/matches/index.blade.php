@extends('layouts/contentNavbarLayout')

@section('title', 'Matches')

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Matches /</span> Matches
    </h4>

    <div class="row">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Matches</h5>
                <a href="{{ route('matches.create') }}" class="dt-button add-new btn btn-primary">
                    <span>
                        <i class="bx bx-plus me-0 me-sm-2"></i>
                        <span class="d-none d-sm-inline-block">Add Match</span>
                    </span>
                </a>
            </div>
            @if (session('success'))
                <div>
                    <strong class="text-success">{{ session('success') }}</strong>
                </div>
            @endif
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Match Name</th>
                            <th>Event Date</th>
                            <th>Event Time</th>
                            <th>Team 1</th>
                            <th>Team 2</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($matches as $match)
                            <tr>
                                <td>{{ $match->name }}</td>
                                <td>{{ $match->match_date }}</td>
                                <td>{{ $match->match_time }}</td>
                                <td>{{ $match->team1 }}</td>
                                <td>{{ $match->team2 }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('matches.edit', $match->id) }}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </a>
                                            <form action="{{ route('matches.destroy', $match->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" type="submit">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
