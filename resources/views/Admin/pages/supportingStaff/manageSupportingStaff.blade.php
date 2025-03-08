@extends('Admin.layouts.master')
@section('title', 'Admin | Manage Supporting Staff')
@section('custom_css')

@endsection

@section('content')
    <div class="page-container">
        {{-- Page title --}}
        <div class="page-title-box">

            <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                <div class="flex-grow-1">
                    <h4 class="font-18 mb-0">Admin</h4>
                </div>

                {{-- navigations --}}
                <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        {{-- <li class="breadcrumb-item"><a href="#">ProMaX</a></li> --}}
                        {{-- @if (context . subtitle !== undefined) { --}}
                        {{-- <li class="breadcrumb-item"><a href="#">Admin</a> --}}
                        </li>
                        {{-- } --}}
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        {{-- End Page title --}}

        {{-- Page content --Cards --}}
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Manage Supporting Staff</h5>
                <a href="{{ route('admin.supporting.staff.create') }}" class="btn btn-primary my-2">Add new Staff</a>
                <form action="{{ route('admin.staff.update.banner') }}" method="POST" enctype="multipart/form-data" class="shadow p-3 m-2 rounded">
                    @csrf
                    <div class="row">
                        <!-- Staff Banner -->
                        <div class="col-sm-8 ">
                            <div class="form-group">
                                <label for="staff_banner">Staff Banner</label>
                                <input type="file" class="dropify m-auto" data-default-file="{{ asset($banner->staff_banner) }}" name="staff_banner">
                                @error('staff_banner')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        {{-- <!-- Contact Banner -->
                        <div class="col-sm-6 text-center">
                            @if(isset($banner->staff_banner))
                                <img src="{{ asset($banner->staff_banner) }}" alt="Contact Banner" class="img-fluid  mt-4"
                                    width="200">
                            @endif
                        </div> --}}
                    </div>

                    <input type="hidden" name="banner_id" value="{{$banner->id}}">
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary">Update Banner</button>
                    </div>
                </form>
            </div>
            {{-- @dd($staffs) --}}
            @php
                $count = 1;
            @endphp
            <div class="card-body pt-2">
                <div style="overflow-x: auto;">
                    <div class="row">
                        <table id="datatable-buttons"
                            class="table table-striped table-bordered dt-responsive nowrap table-hover"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Designation</th>
                                    <th>Full Name</th>
                                    <th>Education</th>
                                    <th>Prod. Affliation</th>
                                    <th>Biography</th>
                                    <th>Facebook</th>
                                    <th>Instagram</th>
                                    <th>Yelp</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($staffs as $staff)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>
                                            <img class="img-fluid" src="{{asset($staff->staff_image)}}" alt="staff picture">
                                        </td>
                                        <td>{{$staff->type}}</td>
                                        <td>{{$staff->staff_fullname}}</td>
                                        <td>{{$staff->staff_education}}</td>
                                        <td>{{$staff->staff_professional_aff}}</td>
                                        <td>{{$staff->staff_bio}}</td>
                                        <td>{{$staff->staff_fb}}</td>
                                        <td>{{$staff->staff_insta}}</td>
                                        <td>{{$staff->staff_yelp}}</td>
                                        <td>
                                            <a href="{{ route('admin.supporting.staff.edit', $staff->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div><!-- end Snow-editor-->


    </div> <!-- container -->
@endsection

@push('script')
    <script type="text/javascript">
        $(document).ready(function () {
            // Initialize DataTable with buttons
            var a = $("#datatable-buttons").DataTable({
                lengthChange: true, // Enable the entries dropdown
                buttons: ["copy", "excel", "pdf"],
                paging: true, // Enable pagination
                info: true, // Show "Showing x to y of z entries"
            });

            // Append buttons to a container
            a.buttons()
                .container()
                .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");
        });
    </script>

@endpush