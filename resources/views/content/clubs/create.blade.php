@extends('layouts/contentNavbarLayout')

@section('title', 'Create Club')

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Club /</span> Create
    </h4>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Create Club</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('clubs.store') }}" method="POST">
                        @csrf
                        <!-- New Input Fields for Club Data -->
                        <div class="mb-3">
                            <label class="form-label" for="club_name">Club Name</label>
                            <input type="text" class="form-control" id="club_name" name="club_name"
                                placeholder="Enter Club Name..." value="{{ old('club_name') }}" />
                            <x-input-error :messages="$errors->get('club_name')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="no_matches">Number of Matches</label>
                            <input type="number" class="form-control" id="no_matches" name="no_matches"
                                placeholder="Enter Number of Matches..." value="{{ old('no_matches') }}" />
                            <x-input-error :messages="$errors->get('no_matches')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="total_crowds">Total Crowds</label>
                            <input type="number" class="form-control" id="total_crowds" name="total_crowds"
                                placeholder="Enter Total Crowds..." value="{{ old('total_crowds') }}" />
                            <x-input-error :messages="$errors->get('total_crowds')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="average_crowds">Average Crowds</label>
                            <input type="number" class="form-control" id="average_crowds" name="average_crowds"
                                placeholder="Enter Average Crowds..." value="{{ old('average_crowds') }}" />
                            <x-input-error :messages="$errors->get('average_crowds')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="season">Season</label>
                            <select class="form-control" id="season" name="season">
                                <option value="" disabled selected>Select Season...</option>
                                <option value="2023-24" {{ old('season') == '2023-24' ? 'selected' : '' }}>2023-24</option>
                                <option value="2022-23" {{ old('season') == '2022-23' ? 'selected' : '' }}>2022-23</option>
                            </select>
                            <x-input-error :messages="$errors->get('season')" class="mt-2" />
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
