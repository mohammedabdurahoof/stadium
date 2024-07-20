@extends('layouts/contentNavbarLayout')

@section('title', 'Stadium')


@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Stadium /</span> Create
    </h4>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Create Stadium</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('stadium.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="stadium_name">Stadium Name</label>
                            <input type="text" class="form-control" id="stadium_name" name="stadium_name"
                                placeholder="Enter Stadium Name..." value="{{ old('stadium_name') }}" />
                            <x-input-error :messages="$errors->get('stadium_name')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image"
                                placeholder="Upload Image Here" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea id="description" name="description" class="form-control" placeholder="Enter Description...">{{ old('description') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="location">Location</label>
                            <input type="text" class="form-control" id="location" name="location"
                                placeholder="Enter Location..." value="{{ old('location') }}" />
                            <x-input-error :messages="$errors->get('location')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="state">state</label>
                            <input type="text" class="form-control" id="state" name="state"
                                placeholder="Enter state..." value="{{ old('state') }}" />
                            <x-input-error :messages="$errors->get('state')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="country">country</label>
                            <input type="text" class="form-control" id="country" name="country"
                                placeholder="Enter country..." value="{{ old('country') }}" />
                            <x-input-error :messages="$errors->get('country')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Enter Address..." value="{{ old('address') }}" />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="capacity">Capacity</label>
                            <input type="number" class="form-control" id="capacity" name="capacity"
                                placeholder="Enter Capacity..." value="{{ old('capacity') }}" />
                            <x-input-error :messages="$errors->get('capacity')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="seats">Seats</label>
                            <input type="number" class="form-control" id="seats" name="seats"
                                placeholder="Enter Seats..." value="{{ old('seats') }}" />
                            <x-input-error :messages="$errors->get('seats')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="record_crowd">Record Crowd</label>
                            <input type="number" class="form-control" id="record_crowd" name="record_crowd"
                                placeholder="Enter Record Crowd..." value="{{ old('record_crowd') }}" />
                            <x-input-error :messages="$errors->get('record_crowd')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Lights</label><br>
                            <input type="radio" id="lights_yes" name="lights" value="1"
                                {{ old('lights') == 1 ? 'checked' : '' }} />
                            <label for="lights_yes">Yes</label>
                            <input type="radio" id="lights_no" name="lights" value="0"
                                {{ old('lights') == 0 ? 'checked' : '' }} />
                            <label for="lights_no">No</label>
                            <x-input-error :messages="$errors->get('lights')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Arena Roof</label><br>
                            <input type="radio" id="arena_roof_yes" name="arena_roof" value="1"
                                {{ old('arena_roof') == 1 ? 'checked' : '' }} />
                            <label for="arena_roof_yes">Yes</label>
                            <input type="radio" id="arena_roof_no" name="arena_roof" value="0"
                                {{ old('arena_roof') == 0 ? 'checked' : '' }} />
                            <label for="arena_roof_no">No</label>
                            <x-input-error :messages="$errors->get('arena_roof')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Video Screen</label><br>
                            <input type="radio" id="video_screen_yes" name="video_screen" value="1"
                                {{ old('video_screen') == 1 ? 'checked' : '' }} />
                            <label for="video_screen_yes">Yes</label>
                            <input type="radio" id="video_screen_no" name="video_screen" value="0"
                                {{ old('video_screen') == 0 ? 'checked' : '' }} />
                            <label for="video_screen_no">No</label>
                            <x-input-error :messages="$errors->get('video_screen')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="opened">Opened</label>
                            <input type="number" class="form-control" id="opened" name="opened"
                                placeholder="Enter Year Opened..." value="{{ old('opened') }}" />
                            <x-input-error :messages="$errors->get('opened')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="other_names">Other Names</label>
                            <input type="text" class="form-control" id="other_names" name="other_names"
                                placeholder="Enter Other Names..." value="{{ old('other_names') }}" />
                            <x-input-error :messages="$errors->get('other_names')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="sports_played">Sports Played</label>
                            <input type="text" class="form-control" id="sports_played" name="sports_played"
                                placeholder="Enter Sports Played..." value="{{ old('sports_played') }}" />
                            <x-input-error :messages="$errors->get('sports_played')" class="mt-2" />
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
