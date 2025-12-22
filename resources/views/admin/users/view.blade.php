@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users View</li>
            </ol>
        </nav>

        <div class="col-md-6 m-auto grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">View User Form</h6>

                    <form class="forms-sample">

                        <div class="row mb-3">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label "><strong>ID</strong>
                            </label>
                            <div class="col-sm-9">
                                <strong> {{ $getRecord->id }}</strong>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label "><strong>Name</strong>
                            </label>
                            <div class="col-sm-9">
                                <strong> {{ $getRecord->name }}</strong>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label "><strong>UserName</strong>
                            </label>
                            <div class="col-sm-9">
                                <strong> {{ $getRecord->username }}</strong>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label "><strong>Email</strong>
                            </label>
                            <div class="col-sm-9">
                                <strong> {{ $getRecord->email }}</strong>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label "><strong>Mobile</strong>
                            </label>
                            <div class="col-sm-9">
                                <strong> {{ $getRecord->phone }}</strong>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label "><strong>Status</strong>
                            </label>
                            <div class="col-sm-9">
                                @if ($getRecord->status == 'active')
                                    <strong class="badge bg-success">Active</strong>
                                @elseif ($getRecord->status == 'inactive')
                                    <strong class="badge bg-danger">Inactive</strong>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label "><strong>Photo</strong>
                            </label>
                            <div class="col-sm-9">
                                @if ($getRecord->photo)
                                    <img src="{{ asset('upload/admin_photo/' . $getRecord->photo) }}" alt="Profile Image"
                                        width="60%" height="70%">
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label "><strong>Role</strong>
                            </label>
                            <div class="col-sm-9">
                                @if ($getRecord->role == 'admin')
                                    <strong class="badge bg-warning">Admin</strong>
                                @elseif ($getRecord->role == 'agent')
                                    <strong class="badge bg-success">Agent</strong>
                                @elseif ($getRecord->role == 'user')
                                    <strong class="badge bg-info">User</strong>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label "><strong>Address</strong>
                            </label>
                            <div class="col-sm-9">
                                <strong> {{ $getRecord->address }}</strong>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label "><strong>About</strong>
                            </label>
                            <div class="col-sm-9">
                                <strong> {{ $getRecord->about }}</strong>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label "><strong>Website</strong>
                            </label>
                            <div class="col-sm-9">
                                <strong> {{ $getRecord->website }}</strong>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label "><strong>Created At</strong>
                            </label>
                            <div class="col-sm-9">
                                <strong> {{ $getRecord->created_at }}</strong>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleInputUsername1" class="col-sm-3 col-form-label "><strong>Updated At</strong>
                            </label>
                            <div class="col-sm-9">
                                <strong> {{ $getRecord->updated_at }}</strong>
                            </div>
                        </div>


                        <a class="btn btn-secondary" href="{{ url('/admin/users') }}">
                            Back
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


