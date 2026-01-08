@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        {{-- Add Success Message Alert --}}
        @include('_message')

        {{-- timeline delete --}}
        {{-- <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="position-relative">
                        <figure class="overflow-hidden mb-0 d-flex justify-content-center">
                            <img src="https://via.placeholder.com/1560x370" class="rounded-top" alt="profile cover">
                        </figure>
                        <div
                            class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4">
                            <div>
                                <img class="wd-70 rounded-circle" src="https://via.placeholder.com/100x100" alt="profile">
                                <span class="h4 ms-3 text-dark">Amiah Burton</span>
                            </div>
                            <div class="d-none d-md-block">
                                <button class="btn btn-primary btn-icon-text">
                                    <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center p-3 rounded-bottom">
                        <ul class="d-flex align-items-center m-0 p-0">
                            <li class="d-flex align-items-center active">
                                <i class="me-1 icon-md text-primary" data-feather="columns"></i>
                                <a class="pt-1px d-none d-md-block text-primary" href="#">Timeline</a>
                            </li>
                            <li class="ms-3 ps-3 border-start d-flex align-items-center">
                                <i class="me-1 icon-md" data-feather="user"></i>
                                <a class="pt-1px d-none d-md-block text-body" href="#">About</a>
                            </li>
                            <li class="ms-3 ps-3 border-start d-flex align-items-center">
                                <i class="me-1 icon-md" data-feather="users"></i>
                                <a class="pt-1px d-none d-md-block text-body" href="#">Friends <span
                                        class="text-muted tx-12">3,765</span></a>
                            </li>
                            <li class="ms-3 ps-3 border-start d-flex align-items-center">
                                <i class="me-1 icon-md" data-feather="image"></i>
                                <a class="pt-1px d-none d-md-block text-body" href="#">Photos</a>
                            </li>
                            <li class="ms-3 ps-3 border-start d-flex align-items-center">
                                <i class="me-1 icon-md" data-feather="video"></i>
                                <a class="pt-1px d-none d-md-block text-body" href="#">Videos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h6 class="card-title mb-0">About</h6>
                            <div class="dropdown">
                                <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="git-branch" class="icon-sm me-2"></i> <span
                                            class="">Update</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="eye" class="icon-sm me-2"></i> <span class="">View
                                            all</span></a>
                                </div>
                            </div>
                        </div>
                        <p>{{ Auth::user()->about }}</p>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                            {{-- <p class="text-muted">{{ Auth::user()->created_at->format('F d, Y') }}</p> --}}
                            <p class="text-muted">{{ Auth::user()->name }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">UserName:</label>
                            {{-- <p class="text-muted">{{ Auth::user()->created_at->format('F d, Y') }}</p> --}}
                            <p class="text-muted">{{ Auth::user()->username }}</p>
                        </div>

                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                            {{-- <p class="text-muted">{{ Auth::user()->created_at->format('F d, Y') }}</p> --}}
                            <p class="text-muted">{{ Auth::user()->phone }}</p>
                        </div>

                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                            {{-- <p class="text-muted">{{ Auth::user()->created_at->format('F d, Y') }}</p> --}}
                            <p class="text-muted">{{ Auth::user()?->created_at?->format('F d, Y') ?? '—' }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                            <p class="text-muted">{{ Auth::user()->address }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
                            <p class="text-muted">{{ Auth::user()->website }}</p>
                        </div>
                        {{-- <div class="mt-3 d-flex social-links">
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="github"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="twitter"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="instagram"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-9 middle-wrapper">
                <div class="row">
                    {{-- card element height ကို တူညီအောင် stretch လုပ် --}}
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Profile Update</h6>
                                {{-- Success Message Alert --}}
                                {{-- @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{Session::get('success')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif --}}

                                <form class="forms-sample" method="POST" action="{{ url('admin_profile/update') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" placeholder="Name" name="name"
                                            value="{{ $adminProfile->name }}" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">User Name</label>
                                        <input type="text" class="form-control" placeholder="User Name" name="username"
                                            value="{{ $adminProfile->username }}" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            value="{{ $adminProfile->email }}" />
                                        {{-- <span style="color: red;">{{ $errors->first('email') }}</span> --}}
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Password"
                                            name="password" />
                                        <span class="text-muted">⁂ Leave it blank if you don't want to change the
                                            password</span>
                                        <br>
                                        {{-- <span style="color: red;">{{ $errors->first('password') }}</span> --}}
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control" placeholder="Phone" name="phone"
                                            value="{{ $adminProfile->phone }}" />
                                        <span class="text-muted">⁂ Leave it blank if you don't want to change the phone
                                            number</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Profile Image</label>
                                        @if ($adminProfile->photo)
                                            <img src="{{ asset('upload/' . $adminProfile->photo) }}"
                                                alt="Profile Image" class="img-thumbnail" width="20%" height="10%"
                                                style="margin-bottom: 10px;">
                                        @endif
                                        <input type="file" class="form-control" placeholder="Profile Image" name="photo" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">About</label>
                                        <textarea type="text" class="form-control" placeholder="About" name="about"
                                            rows="4">{{ $adminProfile->about }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Address" name="address"
                                            value="{{ $adminProfile->address }}" />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Website</label>
                                        <input type="text" class="form-control" placeholder="Website" name="website"
                                            value="{{ $adminProfile->website }}" />
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">
                                        Submit
                                    </button>
                                    <button class="btn btn-secondary">
                                        Cancel
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection