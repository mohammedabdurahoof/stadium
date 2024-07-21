@extends('layouts/contentNavbarLayout')

@section('title', 'Clubs')

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Clubs /</span> Clubs
    </h4>

    <div class="row">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Clubs</h5>
                <a href="{{ route('clubs.create') }}" class="dt-button add-new btn btn-primary">
                    <span>
                        <i class="bx bx-plus me-0 me-sm-2"></i>
                        <span class="d-none d-sm-inline-block">Add Club</span>
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
                            <th>Club Name</th>
                            <th>Number of Matches</th>
                            <th>Total Crowds</th>
                            <th>Average Crowds</th>
                            <th>Season</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($clubs as $club)
                            <tr>
                                <td>{{ $club->club_name }}</td>
                                <td>{{ $club->no_matches }}</td>
                                <td>{{ $club->total_crowds }}</td>
                                <td>{{ $club->average_crowds }}</td>
                                <td>{{ $club->season }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('clubs.edit', $club->id) }}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </a>
                                            <form action="{{ route('clubs.destroy', $club->id) }}" method="POST"
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
