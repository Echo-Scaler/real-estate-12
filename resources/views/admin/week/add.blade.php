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
                    Add Week
                </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-8 mx-auto grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title fs-4">Add Week Form</h6>

                        <form class="forms-sample" method="POST" action="{{ route('admin.week.add.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            

                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Full Name"
                                        required />
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            
                            <!-- <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" autocomplete="off"
                                        placeholder="Email" required  />
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Mobile number"
                                        required />
                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="photo" class="col-sm-3 col-form-label">Photo</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" />
                                    @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="website" class="col-sm-3 col-form-label">Website</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website" value="{{ old('website') }}" placeholder="Website" />
                                    @error('website') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" placeholder="Address" />
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="role" class="col-sm-3 col-form-label">Role</label>
                                <div class="col-sm-9">
                                    <select class="form-control @error('role') is-invalid @enderror" id="role" name="role" required>
                                        <option value="">Select Role</option>
                                        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="agent" {{ old('role') == 'agent' ? 'selected' : '' }}>Agent</option>
                                    </select>
                                    @error('role') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="status" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="about" class="col-sm-3 col-form-label">About</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control @error('about') is-invalid @enderror" name="about" id="about" cols="30" rows="10" placeholder="About">{{ old('about') }}</textarea>
                                    @error('about') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div> -->

                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a href="{{ route('admin.week') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
