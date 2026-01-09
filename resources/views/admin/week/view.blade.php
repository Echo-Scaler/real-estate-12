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


