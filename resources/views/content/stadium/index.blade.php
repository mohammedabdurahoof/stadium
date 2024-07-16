@extends('layouts/contentNavbarLayout')

@section('title', 'Stadium')


@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Stadium /</span> Stadium
    </h4>


    <div class="row">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Stadium</h5>
                <a href="{{ route('stadium.create') }}" class="dt-button add-new btn btn-primary"><span><i
                            class="bx bx-plus me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add
                            Stadium</span></span></a>
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
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Capacity</th>
                            <th>Opened</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($stadium as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset('uploads/images/' . $item->image) }}" alt="image" width="50">
                                </td>
                                <td>{{ $item->stadium_name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->capacity }}</td>
                                <td>{{ $item->opened }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('stadium.edit', $item->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <form action="{{ route('stadium.destroy', $item->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" type="submit"><i
                                                        class="bx bx-trash me-1"></i> Delete</button>
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
