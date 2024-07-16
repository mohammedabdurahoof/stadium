@extends('layouts/contentNavbarLayout')

@section('title', 'News')


@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">News /</span> Create
    </h4>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Create News</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Enter Title..." value="{{ old('title') }}" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image"
                                placeholder="Upload Image Here" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="content">Content</label>
                            <textarea id="content" name="content" class="form-control" placeholder="Enter Content...">{{ old('content') }}</textarea>
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div>
                        <button type="submit" class="btn btn-primary">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
