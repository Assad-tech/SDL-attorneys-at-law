@extends('Admin.layouts.master')
@section('title', 'Admin | Manage Content')
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

        {{-- Page content --Logo --}}
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Manage Logo</h5>
                {{-- <p class="card-subtitle">Snow is a clean, flat toolbar theme.</p> --}}
            </div>

            <div class="card-body pt-2">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="{{ route('admin.upload-logo') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="logoId" value="{{ $logo->id ?? '' }}">
                            <div class="form-group">
                                <label for="logo">Upload Logo</label>
                                <input type="file" class="dropify" name="logo" value="{{ $logo->logo ?? " "}}" />
                                @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" name="upload_logo" class="btn btn-primary" value="Upload">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 mt-5">
                        {{-- @dd($logo) --}}
                        {{-- <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt=""> --}}
                        <img class="img-fluid" src="{{ asset($logo->logo ?? " ") }}" alt="">
                    </div>
                </div>

            </div>
        </div>
        {{-- End Logo --}}

        {{-- Page content -- Phone --}}
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Manage Phone Number</h5>
                {{-- <p class="card-subtitle">Snow is a clean, flat toolbar theme.</p> --}}
            </div>

            <div class="card-body pt-2">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="{{ route('admin.upload-phone') }}" method="post">
                            @csrf
                            <input type="hidden" name="contentId" value="{{ $phone->id ?? '' }}">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" placeholder="Enter Phone Number"
                                    value="{{ $phone->phone ?? '' }}" name="phone" />
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" name="upload_logo" class="btn btn-primary" value="Upload">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 mt-2 text-center">
                        {{-- @dd($logo) --}}

                        {{-- <img class="img-fluid" src="{{ asset($logo->logo?? " ") }}" alt=""> --}}
                        <h3 class="mt-4">{{ $phone->phone ?? '2423423' }}</h3>
                    </div>
                </div>

            </div>
        </div>
        {{-- End Phone --}}

        <!-- Page content -- Why Choose Us head -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Manage Why Choose Us Heading</h5>
            </div>
            <div class="card-body pt-2">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="{{ route('admin.upload-why-choose-heading') }}" method="post">
                            @csrf
                            <input type="hidden" name="contentId" value="{{ $whyChooseUs_Heading->id ?? '' }}">
                            <div class="form-group">
                                <label for="why_choose_us_heading">Why Choose Us Heading</label>
                                <input type="text" class="form-control" placeholder="Enter Heading"
                                    value="{{ $whyChooseUs_Heading->why_choose_us_heading ?? '' }}"
                                    name="why_choose_us_heading" />
                                @error('why_choose_us_heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" name="upload_why_choose_us" class="btn btn-primary" value="Upload">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 mt-2 text-center">
                        {{-- <img class="img-fluid" src="{{ asset($logo->logo?? " ") }}" alt=""> --}}
                        <h3 class="mt-4">{{ $whyChooseUs_Heading->why_choose_us_heading ?? ' ' }}</h3>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Why Choose Us -->


        <!-- Page content -- Why Choose Us Desc -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Manage Why Choose Us Description</h5>
            </div>
            <div class="card-body pt-2">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="{{ route('admin.upload-why-choose-description') }}" method="post">
                            @csrf
                            <input type="hidden" name="contentId" value="{{ $whyChooseUs_Description->id ?? '' }}">
                            <div class="form-group">
                                <label for="why_choose_us_description">Why Choose Us Description</label>
                                <textarea class="form-control" placeholder="Enter Description"
                                    name="why_choose_us_description"
                                    rows="5">{{ $whyChooseUs_Description->why_choose_us_description ?? '' }}</textarea>
                                @error('why_choose_us_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" name="upload_why_choose_us" class="btn btn-primary" value="Upload">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 mt-2 text-center">
                        {{-- <h5 class="mt-4">Current Description</h5> --}}
                        <p>{{ $whyChooseUs_Description->why_choose_us_description ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Us -->

        <!-- Page content -- Why Choose Us Image -->
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="card-title">Manage Why Choose Us Image</h5>
            </div>
            <div class="card-body pt-2">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="{{ route('admin.upload-why-choose-image') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="contentId" value="{{ $whyChooseUs_Image->id ?? '' }}">
                            <div class="form-group">
                                <label for="why_choose_us_image">Why Choose Us Image</label>
                                <input type="file" class="dropify" name="why_choose_us_image">
                                @error('why_choose_us_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" name="upload_why_choose_us_image" class="btn btn-primary"
                                        value="Upload">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 mt-2 text-center">
                        <img style="height: 300px;" src="{{ asset($whyChooseUs_Image->why_choose_us_image ?? " ") }}" alt="Why Choose Us Image"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Us Image -->



        {{-- Page content -- Address --}}
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Manage Address</h5>
                {{-- <p class="card-subtitle">Snow is a clean, flat toolbar theme.</p> --}}
            </div>
            <div class="card-body pt-2">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="{{ route('admin.upload-address') }}" method="post">
                            @csrf
                            <input type="hidden" name="contentId" value="{{ $address->id ?? '' }}">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" placeholder="Enter Address"
                                    value="{{ $address->footer_address ?? '' }}" name="address" />
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" name="upload_address" class="btn btn-primary" value="Upload">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 mt-2 text-center">
                        {{-- <img class="img-fluid" src="{{ asset($logo->logo?? " ") }}" alt=""> --}}
                        <h3 class="mt-4">{{ $address->footer_address ?? ' ' }}</h3>
                    </div>
                </div>

            </div>
        </div>
        {{-- End Address --}}


        {{-- Page content -- Footer Description --}}
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Manage Footer Description</h5>
                {{-- <p class="card-subtitle">Snow is a clean, flat toolbar theme.</p> --}}
            </div>
            <div class="card-body pt-2">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="{{ route('admin.upload-footer-description') }}" method="post">
                            @csrf
                            <input type="hidden" name="contentId" value="{{ $footer_description->id ?? '' }}">
                            <div class="form-group">
                                <label for="footer_description">Footer Description</label>
                                <textarea name="footer_description" class="form-control" name="footer_description"
                                    placeholder="Enter Description"
                                    id="">{{$footer_description->footer_content ?? ''}}</textarea>
                                @error('footer_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" name="upload_footer_description" class="btn btn-primary"
                                        value="Upload">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 mt-2 text-center">
                        {{-- <img class="img-fluid" src="{{ asset($logo->logo?? " ") }}" alt=""> --}}
                        <h3 class="mt-4">{{ $footer_description->footer_content ?? 'desc ' }}</h3>
                    </div>
                </div>

            </div>
        </div>
        {{-- End Footer Description --}}

        {{-- Page content -- Footer CopyRights --}}
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Manage Footer CopyRights</h5>
                {{-- <p class="card-subtitle">Snow is a clean, flat toolbar theme.</p> --}}
            </div>
            <div class="card-body pt-2">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="{{ route('admin.upload-footer-copyright') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="footer_copyright">Footer Copyright:</label>
                                <input type="text" name="footer_copyright" id="footer_copyright" class="form-control"
                                    placeholder="Enter footer copyright text"
                                    value="{{ $footer_copyright->footer_copyright ?? '' }}">
                                @error('footer_copyright')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <input type="hidden" name="contentId" value="{{ $footer_copyright->id ?? '' }}">
                            <!-- Pass existing content ID if editing -->

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                    <div class="col-sm-6 mt-2 text-center">
                        {{-- <img class="img-fluid" src="{{ asset($logo->logo?? " ") }}" alt=""> --}}
                        <h3 class="mt-4">{{ $footer_copyright->footer_copyright ?? 'copyright ' }}</h3>
                    </div>
                </div>

            </div>
        </div>
        {{-- End Footer CopyRights --}}


    </div> <!-- end card-->


    <!-- end row -->


    </div> <!-- container -->
@endsection

@push('script')

@endpush