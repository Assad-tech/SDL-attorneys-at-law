@extends('Admin.layouts.master')
@section('title', 'Admin | Add Sliders')
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
                <h5 class="card-title">Add New Slider - Home Section</h5>
                {{-- <p class="card-subtitle">Snow is a clean, flat toolbar theme.</p> --}}
            </div>

            <div class="card-body pt-2">
                <form action="{{ route('admin.home-section.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="greeting_title">Greeting Title</label>
                                <input type="text" name="greeting_title" class="form-control" id="greeting_title"
                                    placeholder="Wellcome, Hey..">
                                @error('greeting_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label for="slider_image">Slider Image</label>
                                <input type="file" class="dropify" name="slider_image" />
                                @error('slider_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="slider_title">Slider Heading</label>
                                <input type="text" name="slider_title" class="form-control" id="slider_title"
                                    placeholder="Enter Slide Heading">
                                @error('slider_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="slider_desrcrition">Slider Description</label>
                                <textarea class="form-control" name="slider_desrcrition" id="slider_desrcrition"
                                    rows="3" placeholder="Enter Slide Description"></textarea>
                                @error('slider_desrcrition')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="submit" name="craete_slider" class="btn btn-primary" value="Create">
                        </div>
                </form>

            </div><!-- end Snow-editor-->
        </div>
    </div> <!-- end card-->


    <!-- end row -->


    </div> <!-- container -->
@endsection

@push('script')

@endpush