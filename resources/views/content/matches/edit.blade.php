@extends('layouts/contentNavbarLayout')

@section('title', 'Edit Match')

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Matches /</span> Edit
    </h4>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Match</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('matches.update', $match->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label" for="name">Match Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter Match Name..." value="{{ old('name', $match->name) }}" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="match_date">Event Date</label>
                            <input type="date" class="form-control" id="match_date" name="match_date"
                                placeholder="Select Event Date..." value="{{ old('match_date', $match->match_date) }}" />
                            <x-input-error :messages="$errors->get('match_date')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="match_time">Event Time</label>
                            <input type="time" class="form-control" id="match_time" name="match_time"
                                placeholder="Select Event Time..." value="{{ old('match_time', $match->match_time) }}" />
                            <x-input-error :messages="$errors->get('match_time')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea id="description" name="description" class="form-control" placeholder="Enter Description...">{{ old('description', $match->description) }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="team1">Team 1</label>
                            <input type="text" class="form-control" id="team1" name="team1"
                                placeholder="Enter Team 1..." value="{{ old('team1', $match->team1) }}" />
                            <x-input-error :messages="$errors->get('team1')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="team2">Team 2</label>
                            <input type="text" class="form-control" id="team2" name="team2"
                                placeholder="Enter Team 2..." value="{{ old('team2', $match->team2) }}" />
                            <x-input-error :messages="$errors->get('team2')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="team1_score">Team 1 Score</label>
                            <input type="number" class="form-control" id="team1_score" name="team1_score"
                                placeholder="Enter Team 1 Score..." value="{{ old('team1_score', $match->team1_score) }}" />
                            <x-input-error :messages="$errors->get('team1_score')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="team2_score">Team 2 Score</label>
                            <input type="number" class="form-control" id="team2_score" name="team2_score"
                                placeholder="Enter Team 2 Score..." value="{{ old('team2_score', $match->team2_score) }}" />
                            <x-input-error :messages="$errors->get('team2_score')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="crowd">Crowd</label>
                            <input type="number" class="form-control" id="crowd" name="crowd"
                                placeholder="Enter Crowd Number..." value="{{ old('crowd', $match->crowd) }}" />
                            <x-input-error :messages="$errors->get('crowd')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="stadium_id">Stadium</label>
                            <select class="form-control" id="stadium_id" name="stadium_id">
                                @foreach ($stadia as $stadium)
                                    <option value="{{ $stadium->id }}"
                                        {{ old('stadium_id', $match->stadium_id) == $stadium->id ? 'selected' : '' }}>
                                        {{ $stadium->stadium_name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('stadium_id')" class="mt-2" />
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
