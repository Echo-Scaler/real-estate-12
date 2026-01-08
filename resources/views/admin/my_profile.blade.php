@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    @include('_message')

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.users') }}">User</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Update User
            </li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-8 mx-auto grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <h6 class="card-title fs-4 mb-4">Update User</h6>

                    <form
                        class="forms-sample"
                        method="POST"
                        action="{{ url('admin/my_profile/update') }}"
                        enctype="multipart/form-data"
                    >
                        @csrf

                        <!-- Name -->
                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">
                                Name
                            </label>
                            <div class="col-sm-9">
                                <input
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    id="name"
                                    name="name"
                                    value="{{ Auth::user()->name }}"
                                    placeholder="Full Name"
                                    required
                                >
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="row mb-3">
                            <label for="email" class="col-sm-3 col-form-label">
                                Email
                            </label>
                            <div class="col-sm-9">
                                <input
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email"
                                    name="email"
                                    value="{{ Auth::user()->email }}"
                                    autocomplete="off"
                                    placeholder="Email"
                                    required
                                >
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Profile Image -->
                        <div class="row mb-3">
                            <label for="photo" class="col-sm-3 col-form-label">
                                Profile Image
                            </label>
                            <div class="col-sm-9">
                                <input
                                    type="file"
                                    class="form-control @error('photo') is-invalid @enderror"
                                    id="photo"
                                    name="photo"
                                    accept="image/*"
                                >

                                @if (!empty(Auth::user()->photo))
                                    <div class="mt-2">
                                        <img
                                            src="{{ asset('upload/' . Auth::user()->photo) }}"
                                            alt="Profile Image"
                                            class="rounded border"
                                            width="100"
                                            height="100"
                                        >
                                    </div>
                                @endif

                                @error('photo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="row mb-4">
                            <label for="password" class="col-sm-3 col-form-label">
                                Password
                            </label>
                            <div class="col-sm-9">
                                <input
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    id="password"
                                    name="password"
                                    placeholder="Password"
                                >
                                <small class="text-muted">
                                    (Leave blank if you do not want to change the password)
                                </small>

                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                            <a href="{{ route('admin.users') }}" class="btn btn-secondary">
                                Back
                            </a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
