@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    @include('_message')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users List</li>
        </ol>
        {{-- Admin, User, Agent, Active, In Active count numbers --}}
        <div class="d-flex align-items-center">
            <a href="" class="btn btn-warning btn-sm">{{ $TotalAdmin }} - Admin</a>
            &nbsp;&nbsp;
            <a href="" class="btn btn-primary btn-sm">{{ $TotalUser }} - User</a>
            &nbsp;&nbsp;
            <a href="" class="btn btn-info btn-sm">{{ $TotalAgent }} - Agent</a>
            &nbsp;&nbsp;
            <a href="" class="btn btn-success btn-sm">{{ $TotalActive }} - Active</a>
            &nbsp;&nbsp;
            <a href="" class="btn btn-danger btn-sm">{{ $TotalInActive }} - In Active</a>
            &nbsp;&nbsp;
            <a href="" class="btn btn-light btn-sm">{{ $TotalUser + $TotalAgent }} - Total
                Users</a>

        </div>

    </nav>
    <br>
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Search Users</h6>

                    <form class="form-inline" method="GET" action="">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="search" class="sr-only">ID</label>
                                <input type="text" class="form-control bg-transparent border-primary" name="id"
                                    placeholder="Search by ID" value="{{ $request->id }}">
                            </div>
                            <div class="col-lg-4">
                                <label for="search" class="sr-only">Username</label>
                                <input type="text" class="form-control bg-transparent border-primary" name="name"
                                    placeholder="Search by name" value="{{ $request->name }}">
                            </div>
                            <div class="col-lg-4">
                                <label for="search" class="sr-only">Email</label>
                                <input type="text" class="form-control bg-transparent border-primary" name="email"
                                    placeholder="Search by email" value="{{ $request->email }}">
                            </div>
                            <div class="col-lg-4">
                                <label for="search" class="sr-only">Status</label>
                                <select class="form-control bg-transparent border-primary" name="status"
                                    value="{{ $request->status }}">
                                    <option class="text-dark" value="">Select Status</option>
                                    <option class="text-dark" value="active">Active</option>
                                    <option class="text-dark" value="inactive">Inactive</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="search" class="sr-only">Website</label>
                                <input type="text" class="form-control bg-transparent border-primary" name="website"
                                    placeholder="Search by website" value="{{ $request->website }}">
                            </div>
                            <div class="col-lg-4">
                                <label for="role" class="sr-only ">Role</label>
                                <select class="form-control bg-transparent border-primary" name="role"
                                    value="{{ $request->role }}">
                                    <option class="text-dark" value="">Select Role</option>
                                    <option class="text-dark" value="admin">Admin</option>
                                    <option class="text-dark" value="user">User</option>
                                    <option class="text-dark" value="agent">Agent</option>
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <label for="search" class="form-label">Start Date</label>
                                <div class="input-group">
                                    <input type="date" class="form-control bg-transparent border-primary"
                                        name="start_date" placeholder="Search by start date"
                                        value="{{ $request->start_date }}">

                                    <span class="input-group-text bg-transparent border-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                            <path
                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="search" class="form-label">End Date</label>
                                <div class="input-group">
                                    <input type="date" class="form-control bg-transparent border-primary"
                                        name="end_date" placeholder="Search by end date"
                                        value="{{ $request->end_date }}">
                                    <span class="input-group-text bg-transparent border-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                            <path
                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center gap-2 border-primary">
                            <button class="btn btn-primary " type="submit">Search</button>
                            <a href="{{ url('admin/users') }}" class="btn btn-secondary">Reset</a>
                            {{-- <a href="{{ url('admin/users/add') }}" class="btn btn-success">Add User</a> --}}
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
                    <div class="d-flex justify-content-between align-items-center ">
                        <h4 class="card-title">Users List</h4>
                        {{-- Add User Button --}}
                        <div class="d-flex align-items-center">
                            <a href="{{ url('admin/users/add') }}" class="btn btn-success">Add User</a>
                            {{-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addUserModal">Add User</button> --}}
                        </div>
                    </div>


                    {{-- End Add User Button --}}

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
                                    <th>About</th>
                                    <th>Address</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Created at</th>

                                </tr>
                            </thead>
                            <tbody>
                                {{-- change foreach loop to forelse loop for search error message for search functions --}}
                                @forelse ($getRecord as $value)
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
                                    <td>{{ Str::words($value->about, 10) }}</td>
                                    <td>{{ Str::words($value->address, 50) }}</td>
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
                                        {{-- @if ($value->status == 'active')
                                                    <span class="badge bg-success">{{ $value->status }}</span>
                                        @else
                                        <span class="badge bg-danger">{{ $value->status }}</span>
                                        @endif --}}
                                        <!-- status change by toggle  -->
                                        <select class="form-control changeStatus" style="width:170px;"
                                            id="status_{{ $value->id }}" data-id="{{ $value->id }}">
                                            <option value="active"
                                                {{ $value->status == 'active' ? 'selected' : '' }}>Active</option>
                                            <option value="inactive"
                                                {{ $value->status == 'inactive' ? 'selected' : '' }}>Inactive
                                            </option>
                                        </select>
                                    </td>

                                    <td>{{ $value->created_at->format('Y-m-d') }}</td>
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

                                        <a class="dropdown-item d-flex align-items-center"
                                            href="{{ url('admin/users/edit/' . $value->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 icon-sm me-2">
                                                <path d="M12 20h9"></path>
                                                <path d="M18 2l4 4-9 9-4-4 9-9z"></path>
                                                <path d="M14 6l3-3a2 2 0 012.828 2.828L14 6z"></path>
                                            </svg>

                                            <span class="">Edit</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center"
                                            href="{{ url('admin/users/delete/' . $value->id) }}"
                                            onclick="return confirm('Are you sure you want to delete this user?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2 icon-sm me-2">
                                                <path d="M3 6h18"></path>
                                                <path d="M8 6v12a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V6"></path>
                                                <path d="M10 6V4a2 2 0 0 1 4 0v2"></path>
                                            </svg>

                                            <span>Delete</span>
                                        </a>



                                    </td>
                                </tr>
                                {{-- check if no records found --}}
                                @empty
                                <tr>
                                    <td colspan="100%" class="text-center bg-danger text-white fs-5">No records
                                        found</td>
                                </tr>
                                @endforelse
                                {{-- change for each foresle loop for search error message --}}
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


@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('.changeStatus').change(function() {
            var status_id = $(this).val();
            var user_id = $(this).data('id'); // Gets the numeric ID from data-id attribute

            $.ajax({
                type: 'POST',
                url: "{{ route('admin.users.changeStatus') }}",
                data: {
                    // Include the CSRF token to prevent "419 Page Expired" error
                    _token: "{{ csrf_token() }}",
                    status_id: status_id,
                    user_id: user_id
                },
                dataType: 'JSON',
                success: function(data) {
                    if (data.success) {
                        alert(data.message);
                        // No need to reload the whole page unless you want to refresh other data
                        // window.location.reload();
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    alert('Error: Could not update status.');
                }
            });
        });
    });
</script>
@endsection