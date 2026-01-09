@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Week</a></li>
            <li class="breadcrumb-item active" aria-current="page">Week List</li>
        </ol>
    </nav>


    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h4 class="card-title">Week List</h4>
                        {{-- Add User Button --}}
                        <div class="d-flex align-items-center">
                            <a href="{{ url('admin/week/add') }}" class="btn btn-success">Add Week</a>
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
                                    <th>Created at</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                {{-- change foreach loop to forelse loop for search error message for search functions --}}

                                @forelse ($getRecords as $value)
                                <tr class="table-info text-dark">
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                    <td>Action</td>

                                    <td>
                                        <a class="dropdown-item d-flex align-items-center"
                                            href="{{ url('admin/week/edit/'.$value->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye icon-sm me-2">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                            <span class="">View</span></a>

                                        <a class="dropdown-item d-flex align-items-center"
                                            href="{{ url('admin/week/edit/'.$value->id) }}">
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
                                            href="{{ url('admin/week/delete/'.$value->id) }}"
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
                                @empty
                                <tr>
                                    <td colspan="100%">No Data Found</td>
                                </tr>
                                @endforelse


                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection