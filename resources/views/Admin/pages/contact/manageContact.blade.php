@extends('Admin.layouts.master')
@section('title', 'Admin | Manage Contact')
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
                <h5 class="card-title">Manage Contact Page</h5>
            </div>
            <div class="card-body pt-2">
                <!-- Form for uploading images -->
                <form action="{{ route('admin.contact.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="contact_banner">Contact Banner</label>
                                <input type="file" class="dropify" name="contact_banner">
                                @error('contact_banner')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- Contact Banner -->
                        <div class="col-sm-6 text-center">
                            @if(isset($contact->contact_banner))
                                <img src="{{ asset($contact->contact_banner) }}" alt="Contact Banner" class="img-fluid  mt-5"
                                    width="200">
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="side_image">Side Image</label>
                                <input type="file" class="dropify" name="side_image">
                                @error('side_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- Side Image -->
                        <div class="col-sm-6 text-center">
                            @if(isset($contact->side_image))
                                <img src="{{ asset($contact->side_image) }}" alt="Side Image" class="img-fluid mt-3"
                                    width="200">
                            @endif

                        </div>

                        <div class="row">
                            <!-- Contact Heading -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="contact_heading">Contact Heading</label>
                                    <input type="text" class="form-control" name="contact_heading" placeholder="Enter Heading"
                                        value="{{ $contact->contact_heading ?? '' }}">
                                    @error('contact_heading')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <!-- Phone -->
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone"
                                        value="{{ $contact->phone ?? '' }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Fax -->
                                <div class="form-group">
                                    <label for="fax">Fax</label>
                                    <input type="text" class="form-control" name="fax" value="{{ $contact->fax ?? '' }}" placeholder="Enter Fax">
                                    @error('fax')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- Address -->
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter Address"
                                        value="{{ $contact->address ?? '' }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Office Hours -->
                                <div class="form-group">
                                    <label for="office_hours_open">Office Hours Open</label>
                                    <input type="text" class="form-control" name="office_hours_open" placeholder="Example Mon-Fri: 8am – 5pm"
                                        value="{{ $contact->office_hours_open ?? '' }}">
                                    @error('office_hours_open')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="office_hours_closed">Office Hours Closed</label>
                                    <input type="text" class="form-control" name="office_hours_closed" placeholder="Example Sat-Sun: closed"
                                        value="{{ $contact->office_hours_closed ?? '' }}">
                                    @error('office_hours_closed')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Save">
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