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
                Edit User
            </li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-8 mx-auto grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title fs-4">Edit User Form</h6>

                    <form class="forms-sample" method="POST" action="{{ url('admin/users/update/' . $getRecord->id) }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" placeholder="Full Name" required
                                       value="{{ old('name', $getRecord->name) }}" />
                                <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <!-- Username -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Username <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="username" placeholder="Username" required
                                       value="{{ old('username', $getRecord->username) }}" />
                                <span class="text-danger">@error('username') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Email <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off" required
                                       value="{{ old('email', $getRecord->email) }}" />
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Phone <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="phone" placeholder="Mobile number" required
                                       value="{{ old('phone', $getRecord->phone) }}" />
                                <span class="text-danger">@error('phone') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <!-- Photo -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Photo</label>
                            <div class="col-sm-9">
                                @if($getRecord->photo)
                                    <img src="{{ asset('uploads/' . $getRecord->photo) }}" alt="User Photo" width="100" class="mb-2">
                                @endif
                                <input type="file" class="form-control" name="photo" />
                                <span class="text-danger">@error('photo') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <!-- Website -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Website</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="website" placeholder="Website"
                                       value="{{ old('website', $getRecord->website) }}" />
                                <span class="text-danger">@error('website') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="address" placeholder="Address"
                                       value="{{ old('address', $getRecord->address) }}" />
                                <span class="text-danger">@error('address') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <!-- Role -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Role <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="role" required>
                                    <option value="">Select Role</option>
                                    <option value="user" {{ $getRecord->role == 'user' ? 'selected' : '' }}>User</option>
                                    <option value="admin" {{ $getRecord->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="agent" {{ $getRecord->role == 'agent' ? 'selected' : '' }}>Agent</option>
                                </select>
                                <span class="text-danger">@error('role') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Status <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="status" required>
                                    <option value="">Select Status</option>
                                    <option value="active" {{ $getRecord->status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $getRecord->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                                <span class="text-danger">@error('status') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <!-- About -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">About</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="about" cols="30" rows="10" placeholder="About">{{ old('about', $getRecord->about) }}</textarea>
                                <span class="text-danger">@error('about') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <a href="{{ route('admin.users') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
