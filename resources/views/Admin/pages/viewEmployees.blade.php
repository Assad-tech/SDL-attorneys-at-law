@extends('Admin.layouts.master')

@section('title', 'Admin | Profile')
@section('custom_css')
    <style>
        .dropdown-menu-xxl {
            width: 300px;
        }

        .dropdown-menu .megamenu-list {
            min-width: 280px !important;
        }
    </style>
@endsection
@section('content')
    <div class="page-container">
        {{-- Page title --}}
        <div class="page-title-box">
            {{-- @if (context . title !== undefined) { --}}
            <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                <div class="flex-grow-1">
                    {{-- <h4 class="font-18 mb-0">@@title</h4> --}}
                    <h4 class="font-18 mb-0">Admin</h4>
                </div>

                <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Staffshaw</a></li>
                        {{-- @if (context . subtitle !== undefined) { --}}
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a>
                        </li>
                        {{-- } --}}
                        <li class="breadcrumb-item active">View Employees</li>
                    </ol>
                </div>
            </div>
            {{-- } --}}
            <div class="d-flex align-items-sm-center flex-sm-row flex-column">
                <h4 class="font-18 mb-0">Welcome</h4>
            </div>
        </div>
        {{-- End Page title --}}

        {{-- Page content -- Dashboard Cards --}}
        <div class="row">

            <div class="card">
                <div class="card-header">
                    <h4 class="header-title mb-3">Employees List</h4>
                </div>
                <div class="card-body">
                    @php
                        $count = 1;
                    @endphp
                    <table id="datatable-buttons"
                        class="table table-striped table-bordered dt-responsive nowrap table-hover"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $employee)
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $employee->image ?? 'N/A' }}</td>
                                    <td>{{ $employee->full_name ?? 'N/A' }}</td>
                                    <td>{{ $employee->email ?? 'N/A' }}</td>
                                    <td>
                                        @if ($employee->roles->isNotEmpty())
                                            {{ $employee->getRoleNames()->implode(', ') }}
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        @if ($employee->status == 1)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td></td>
                                </tr>
                                @php
                                    $count++;
                                @endphp
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div> <!-- end row -->



    </div> <!-- end row -->

    </div> <!-- container -->
@endsection
@section('scripts')

@endsection
