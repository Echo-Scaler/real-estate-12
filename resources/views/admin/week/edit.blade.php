@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    @include('_message')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.week') }}">Week</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Edit Week
            </li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 mx-auto grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title fs-4">Edit Week Form</h6>

                    <form class="forms-sample" method="POST" action="{{ route('admin.week.update', $getRecord->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $getRecord->name) }}" placeholder="Week Name"
                                    required />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <a href="{{ route('admin.week') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection