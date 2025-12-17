@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users List</li>
            </ol>
        </nav>
        <br>
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Search Users</h6>
                        <form class="form-inline" method="GET" action="{{ url('admin/users/list') }}">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="search" class="sr-only">ID</label>
                                    <input type="text" class="form-control bg-transparent border-primary" name="id"
                                        placeholder="Search by ID">
                                </div>
                                <div class="col-lg-4">
                                    <label for="search" class="sr-only">Username</label>
                                    <input type="text" class="form-control bg-transparent border-primary" name="name"
                                        placeholder="Search by name">
                                </div>
                                <div class="col-lg-4">
                                    <label for="search" class="sr-only">Email</label>
                                    <input type="text" class="form-control bg-transparent border-primary" name="email"
                                        placeholder="Search by email">
                                </div>
                                <div class="col-lg-4">
                                    <label for="search" class="sr-only">Status</label>
                                    <select class="form-control bg-transparent border-primary" name="status">
                                        <option class="text-dark" value="">Select Status</option>
                                        <option class="text-dark" value="active">Active</option>
                                        <option class="text-dark" value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="search" class="sr-only">Website</label>
                                    <input type="text" class="form-control bg-transparent border-primary" name="website"
                                        placeholder="Search by website">
                                </div>
                                <div class="col-lg-4">
                                    <label for="role" class="sr-only ">Role</label>
                                    <select class="form-control bg-transparent border-primary" name="role">
                                        <option class="text-dark" value="">Select Role</option>
                                        <option class="text-dark" value="admin">Admin</option>
                                        <option class="text-dark" value="user">User</option>
                                        <option class="text-dark" value="agent">Agent</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center gap-2 border-primary">
                                <button class="btn btn-primary " type="submit">Search</button>
                                <a href="{{ url('admin/users') }}" class="btn btn-secondary">Reset</a>
                                <a href="{{ url('admin/users/add') }}" class="btn btn-success">Add User</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Users List</h4>

                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">

                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>UserName</th>
                                        <th>Email</th>
                                        <th>Photo</th>
                                        <th>Phone</th>
                                        <th>Website</th>
                                        <th>Address</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getRecord as $value)
                                        <tr class="table-info text-dark">
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->username }}</td>
                                            <td>{{ $value->email }}</td>
                                            <td>
                                                @if ($value->photo)
                                                    <img src="{{ asset('upload/admin_photo/' . $value->photo) }}"
                                                        alt="Profile Image" width="100%" height="100%">
                                                @endif
                                            </td>
                                            <td>{{ $value->phone }}</td>
                                            <td>{{ $value->website }}</td>
                                            <td>{{ $value->address }}</td>
                                            {{-- <td>{{ $value->role }}</td> --}}
                                            {{-- check badge color of role --}}
                                            <td>
                                                @if ($value->role == 'admin')
                                                    <span class="badge bg-warning">{{ $value->role }}</span>
                                                @elseif ($value->role == 'agent')
                                                    <span class="badge bg-info">{{ $value->role }}</span>
                                                @elseif ($value->role == 'user')
                                                    <span class="badge bg-primary">{{ $value->role }}</span>
                                                @endif
                                            </td>
                                            {{-- <td>{{ $value->status }}</td> --}}
                                            {{-- check badge color of status --}}
                                            <td>
                                                @if ($value->status == 'active')
                                                    <span class="badge bg-success">{{ $value->status }}</span>
                                                @else
                                                    <span class="badge bg-danger">{{ $value->status }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $value->created_at }}</td>
                                            {{-- <td>
                                                <a href="{{ url('admin/users/edit/' . $value->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ url('admin/users/delete/' . $value->id) }}"
                                                    onclick="return confirm('Are you sure you want to delete this user?')"
                                                    class="btn btn-danger">Delete</a>
                                            </td> --}}
                                            <td>
                                                <a class="dropdown-item d-flex align-items-center"
                                                    href="{{ url('admin/users/view/' . $value->id) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye icon-sm me-2">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                    <span class="">View</span></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                    <div style="padding: 10px; float:right;">
                        {{ $getRecord->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
