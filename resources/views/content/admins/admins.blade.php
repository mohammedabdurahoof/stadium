@extends('layouts/contentNavbarLayout')

@section('title', 'Admins')


@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Users /</span> Admins
    </h4>
    <div class="row">
        <div class="col-lg-6 col-12 mb-4 order-0">
            <div class="card">
                <div class="card-body">
                    <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" value="{{ old('name') }}" id="username"
                                name="name" placeholder="Enter your username">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" value="{{ old('email') }}"
                                name="email" placeholder="Enter your email">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        </div>
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password_confirmation" class="form-control"
                                    name="password_confirmation"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>

                        <button class="btn btn-primary d-grid w-100">
                            Add Admin
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-12 mb-4 order-0">
            <div class="card">
                <h5 class="card-header">Admins</h5>
                <div class="card-body">
                    @foreach ($admins as $admin)
                        <figure class="mt-2">
                            <blockquote class="blockquote">
                                <p class="mb-0">{{ $admin->name }}</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                {{ $admin->email }}
                            </figcaption>
                        </figure>
                        <hr>
                    @endforeach
                </div>

            </div>
        </div>

    </div>

@endsection
