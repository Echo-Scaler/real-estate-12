@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        {{-- timeline delete --}}
        {{-- <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="position-relative">
                        <figure class="overflow-hidden mb-0 d-flex justify-content-center">
                            <img src="https://via.placeholder.com/1560x370"class="rounded-top" alt="profile cover">
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
                                            data-feather="edit-2" class="icon-sm me-2"></i> <span
                                            class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="git-branch" class="icon-sm me-2"></i> <span
                                            class="">Update</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="eye" class="icon-sm me-2"></i> <span class="">View
                                            all</span></a>
                                </div>
                            </div>
                        </div>
                        <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of
                            Social.</p>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                            {{-- <p class="text-muted">{{ Auth::user()->created_at->format('F d, Y') }}</p> --}}
                            <p class="text-muted">Admin Yan</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                            {{-- <p class="text-muted">{{ Auth::user()->created_at->format('F d, Y') }}</p> --}}
                            <p class="text-muted">Dec 12, 2023</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
                            <p class="text-muted">New York, USA</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">me@nobleui.com</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
                            <p class="text-muted">www.nobleui.com</p>
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
                    {{-- card element height ကို တူညီအောင် stretch လုပ်  --}}
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Profile Update</h6>

                                <form class="forms-sample" method="POST" action="">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" placeholder="Name" name="name" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">User Name</label>
                                        <input type="text" class="form-control" placeholder="User Name"
                                            name="username" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email" name="email" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Password"
                                            name="password" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Profile Image</label>
                                        <input type="file" class="form-control" placeholder="Profile Image"
                                            name="photo" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">About</label>
                                        <textarea type="text" class="form-control" placeholder="About" name="about"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Address" name="address" />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Website</label>
                                        <input type="text" class="form-control" placeholder="Website"
                                            name="website" />
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
            <!-- middle wrapper end -->
            <!-- right wrapper start -->
            {{-- <div class="d-none d-xl-block col-xl-3">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card-body">
                                <h6 class="card-title">latest photos</h6>
                                <div class="row ms-0 me-0">
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-2">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-2">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-2">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-2">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-2">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-2">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-0">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-0">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-0">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card-body">
                                <h6 class="card-title">suggestions for you</h6>
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- right wrapper end -->
        </div>

    </div>
@endsection
