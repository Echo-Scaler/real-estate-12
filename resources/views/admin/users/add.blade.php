@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        @include('_message')
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('admin/users') }}">User</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Add User
                </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-8 mx-auto grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title fs-4">Add User Form</h6>

                        <form class="forms-sample" method="POST" action="{{ url('admin/users/add') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" placeholder="Full Name"
                                        required />
                                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">UserName</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username" placeholder="UserName" />
                                    <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" autocomplete="off"
                                        placeholder="Email" required  />
                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="phone" placeholder="Mobile number"
                                        required />
                                    <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Photo</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="photo" />
                                    <span class="text-danger">@error('photo'){{ $message }}@enderror</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Website</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="website" placeholder="Website" />
                                    <span class="text-danger">@error('website'){{ $message }}@enderror</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="address" placeholder="Address" />
                                    <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Role</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="role" required>
                                        <option value="">Select Role</option>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                        <option value="agent">Agent</option>
                                    </select>
                                    <span class="text-danger">@error('role'){{ $message }}@enderror</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    <span class="text-danger">@error('status'){{ $message }}@enderror</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">About</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="about" id="" cols="30" rows="10" placeholder="About"></textarea>
                                    <span class="text-danger">@error('about'){{ $message }}@enderror</span>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary me-2">
                                Submit
                            </button>
                            <a href="{{ route('admin.users') }}" class="btn btn-secondary">
                                Back
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
