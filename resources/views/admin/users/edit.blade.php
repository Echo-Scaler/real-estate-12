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

                        <form class="forms-sample" method="POST" action="{{ route('admin.users.update', $data['getRecord']->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name', $data['getRecord']->name) }}" required />
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">UserName</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username"
                                        value="{{ old('username', $data['getRecord']->username) }}"
                                        placeholder="UserName" />
                                    <span class="text-danger">
                                        @error('username')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email"
                                        value="{{ old('email', $data['getRecord']->email) }}" autocomplete="off"
                                        placeholder="Email" required />
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="phone"
                                        value="{{ old('phone', $data['getRecord']->phone) }}" placeholder="Mobile number"
                                        required />
                                    <span class="text-danger">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Photo ကို အဓိပ္ပာယ်ဖော်ပြသော Label -->
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Photo</label>
                                <div class="col-sm-9">
                                    <!-- ဖိုင်ရွေးချယ်ရန် input -->
                                    <input type="file" class="form-control" name="photo"/>

                                    <!-- ယခင်ဓာတ်ပုံရှိလားဆိုတာစစ်ဆေးပါ -->
                                    @if ($data['getRecord']->photo)
                                     <p class="text-slate fw-bold underline mt-2">Current Photo</p>
                                        <div class="mt-2 d-flex gap-2">
                                            <!-- အရောင်းဓာတ်ပုံကို ပြပါ -->
                                            <img src="{{ asset('upload/admin_photo/' . $data['getRecord']->photo) }}"
                                                alt="Current Photo" width="100">
                                                <br>
                                        </div>
                                    @endif

                                    <!-- ဖိုင် အမှားရှိပါက error message ပြပါ -->
                                    <span class="text-danger">
                                        @error('photo')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Website</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="website"
                                        value="{{ old('website', $data['getRecord']->website) }}" placeholder="Website" />
                                    <span class="text-danger">
                                        @error('website')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="address"
                                        value="{{ old('address', $data['getRecord']->address) }}" placeholder="Address" />
                                    <span class="text-danger">
                                        @error('address')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Role</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="role" required>
                                        <option value="">Select Role</option>
                                        <option value="user"
                                            {{ old('role', $data['getRecord']->role) == 'user' ? 'selected' : '' }}>User
                                        </option>
                                        <option value="admin"
                                            {{ old('role', $data['getRecord']->role) == 'admin' ? 'selected' : '' }}>Admin
                                        </option>
                                        <option value="agent"
                                            {{ old('role', $data['getRecord']->role) == 'agent' ? 'selected' : '' }}>Agent
                                        </option>
                                    </select>
                                    <span class="text-danger">
                                        @error('role')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="active"
                                            {{ old('status', $data['getRecord']->status) == 'active' ? 'selected' : '' }}>
                                            Active</option>
                                        <option value="inactive"
                                            {{ old('status', $data['getRecord']->status) == 'inactive' ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('status')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">About</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="about" id="" cols="30" rows="10" placeholder="About">{{ old('about', $data['getRecord']->about) }}</textarea>
                                    <span class="text-danger">
                                        @error('about')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary me-2">
                                Update
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
