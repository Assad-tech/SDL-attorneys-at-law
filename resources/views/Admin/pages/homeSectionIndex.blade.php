@extends('Admin.layouts.master')
@section('title', 'Admin | Home Section')
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
                <h5 class="card-title">View Sliders - Home Section</h5>
                {{-- <p class="card-subtitle">Snow is a clean, flat toolbar theme.</p> --}}
                <div class="card-tools">
                    <a href="{{ route('admin.home-section.create') }}" class="btn btn-primary">Create new Slider</a>
                </div>
            </div>

            <div class="card-body pt-2">
                <div style="overflow-x: auto;">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Greetings</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>


        </div><!-- end Snow-editor-->
    </div>
    </div> <!-- end card-->


    <!-- end row -->


    </div> <!-- container -->
@endsection

@push('script')
    @include('Admin.pages.include.homeSection-js')
@endpush