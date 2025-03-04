@extends('Admin.layouts.master')
@section('title', 'Show Properties')
@section('content')
    <div class="page-title-box">

        <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="font-18 mb-0">Properties</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>

                    {{-- <li class="breadcrumb-item"><a href="{{ route('show.property') }}">Properties</a></li> --}}

                    <li class="breadcrumb-item active">Properties</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Show Properties</h5>
                    <a href="{{ route('create.property') }}" class="btn btn-primary">Add Property</a>
                </div>



                {{-- @include('Admin.partials.notifications') --}}
                <div class="card-body pt-2">
                    <div style="overflow-x: auto;">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Amount</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th>Heading</th>
                                    {{-- <th>Description</th> --}}
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>



                            {{-- <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>

                        </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end row -->
@endsection
@push('script')
    @include('Admin.property.include.property-js')
@endpush
