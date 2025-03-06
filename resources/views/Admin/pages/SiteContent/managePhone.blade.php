@extends('Admin.layouts.master')
@section('title', 'Admin | Manage Phone Number')
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
                <h5 class="card-title">Manage Phone Number</h5>
                {{-- <p class="card-subtitle">Snow is a clean, flat toolbar theme.</p> --}}
            </div>

            <div class="card-body pt-2">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="{{ route('admin.upload-phone') }}" method="post">
                            @csrf
                            <input type="hidden" name="contentId" value="{{ $content->id ?? '' }}">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" placeholder="Enter Phone Number" value="{{ $content->phone ?? '' }}" name="phone" />
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
                        <h3 class="mt-4">{{ $content->phone ?? '2423423' }}</h3>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end card-->


    <!-- end row -->


    </div> <!-- container -->
@endsection

@push('script')

@endpush