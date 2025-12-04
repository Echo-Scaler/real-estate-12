@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users List</li>
            </ol>
        </nav>
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
                                        {{-- <th>Action</th> --}}
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
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                   <div  style="padding: 10px; float:right;">
                    {{ $getRecord->links() }}
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection
