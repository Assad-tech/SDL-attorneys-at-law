@extends('Admin.layouts.master')
@section('title', 'Admin | Manage Blog')
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
                <h5 class="card-title">Manage Blog Page Images</h5>
            </div>
            <div class="card-body pt-2">
                <div class="row">
                    <!-- Form for uploading images -->
                    <div class="col-sm-6">
                        <form action="{{ route('admin.blog.upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Existing Banner Image -->
                            @if ($blogs->where('type', 'banner')->count())
                                <div class="form-group">
                                    {{-- <label>Current Banner Image</label> --}}
                                    @foreach ($blogs->where('type', 'banner') as $banner)
                                        <div class="mb-3">
                                            {{-- <img src="{{ asset($banner->banner) }}" alt="Banner Image" class="img-thumbnail"
                                                width="200"> --}}
                                            <input type="hidden" name="banner_id" value="{{ $banner->id }}">
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <!-- Upload New Banner Image -->
                            <div class="form-group">
                                <label for="banner_image">Upload New Banner Image</label>
                                <input type="file" class="dropify" name="banner_image">
                                @error('banner_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Existing Sponsor Images -->
                            @if ($blogs->where('type', 'sponsor')->count())
                                <div class="form-group">
                                    <div class="row">
                                        @foreach ($blogs->where('type', 'sponsor') as $sponsor)
                                            <div class="col-md-4 text-center">
                                                <input type="hidden" name="sponsor_ids[]" value="{{ $sponsor->id }}">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- Upload New Sponsor Images -->
                            <div class="form-group">
                                <label for="sponsor_images[]">Upload New Sponsor Images (Max 3)</label>
                                <input type="file" class="dropify" name="sponsor_images[]" multiple>
                                <small class="text-muted">You can upload up to 3 sponsor images. This field is
                                    optional.</small>
                                @error('sponsor_images')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" name="upload_blog_images" class="btn btn-primary" value="Upload">
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Display existing images -->
                    <div class="col-sm-6 mt-2 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                @if ($blogs->where('type', 'banner')->count())
                                    <div class="form-group">
                                        <label>Current Banner Image</label>
                                        @foreach ($blogs->where('type', 'banner') as $banner)
                                            <div class="mb-3">
                                                <img src="{{ asset($banner->banner) }}" alt="Banner Image" class="img-thumbnail"
                                                    width="200">
                                                <input type="hidden" name="banner_id" value="{{ $banner->id }}">
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                            </div>

                            <div class="col-md-12">
                                <!-- Display Sponsor Images -->
                                @if ($blogs->where('type', 'sponsor')->count())
                                    <div class="form-group">
                                        <label>Current Sponsor Images</label>
                                        <div class="row">
                                            @foreach ($blogs->where('type', 'sponsor') as $sponsor)
                                                <div class="col-md-4 text-center">
                                                    <img src="{{ asset($sponsor->sponsor_logo) }}" alt="Sponsor Image"
                                                        class="img-thumbnail" width="150">
                                                    <input type="hidden" name="sponsor_ids[]" value="{{ $sponsor->id }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Page -->


    </div> <!-- container -->
@endsection

@push('script')

@endpush