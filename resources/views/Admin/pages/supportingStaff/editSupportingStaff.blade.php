@extends('Admin.layouts.master')
@section('title', 'Admin | Update Staff')
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

        <!-- Page content -- Blog Page -->
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="card-title">Update staff</h5>
            </div>
            <div class="card-body pt-2">
                <form action="{{ route('admin.supporting.staff.update', $staff->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Designation -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="type">Designation</label>
                                <input type="text" class="form-control" name="type" placeholder="Enter Designation"
                                    value="{{ $staff->type }}">
                                @error('type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Full Name -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="staff_fullname">Full Name</label>
                                <input type="text" class="form-control" name="staff_fullname" placeholder="Enter Full Name"
                                    value="{{ $staff->staff_fullname }}">
                                @error('staff_fullname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Education -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="staff_education">Education</label>
                                <textarea class="form-control" name="staff_education" rows="3"
                                    placeholder="Enter Education">{{ $staff->staff_education }}</textarea>
                                @error('staff_education')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Professional Affiliation -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="staff_professional_aff">Professional Affiliation</label>
                                <input type="text" class="form-control" name="staff_professional_aff"
                                    placeholder="Enter Professional Affiliation"
                                    value="{{ $staff->staff_professional_aff}}">
                                @error('staff_professional_aff')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Biography -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="staff_bio">Biography</label>
                                <textarea class="form-control" name="staff_bio" rows="4"
                                    placeholder="Enter Biography">{{ $staff->staff_bio }}</textarea>
                                @error('staff_bio')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Social Links --}}
                    <div class="row">
                        <!-- Staff Facebook -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="staff_fb_link">Facebook Link</label>
                                <input type="url" class="form-control" name="staff_fb_link"
                                    placeholder="Enter Facebook Link" value="{{ $staff->staff_fb}}">
                                @error('staff_fb_link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Staff Instagram -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="staff_insta_link">Staff Instagram Link</label>
                                <input type="url" class="form-control" name="staff_insta_link"
                                    placeholder="Enter Instagram Link" value="{{ $staff->staff_insta}}">
                                @error('staff_insta_link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Staff yelp -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="staff_yelp_link">Staff Yelp Link</label>
                                <input type="url" class="form-control" name="staff_yelp_link" placeholder="Enter Yelp Link"
                                    value="{{ $staff->staff_yelp}}">
                                @error('staff_yelp_link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Staff Image -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="staff_image">Staff Image</label>
                                <input type="file" class="dropify" data-default-file="{{ asset($staff->staff_image) }}"
                                    name="staff_image">
                                @error('staff_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update Staff</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
    <!-- End Blog Page -->


    </div> <!-- container -->
@endsection

@push('script')

@endpush