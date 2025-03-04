@extends('Admin.layouts.master')
@section('title', 'Add Property')
@section('content')
    <div class="page-container">
        <div class="page-title-box">

            <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                <div class="flex-grow-1">
                    <h4 class="font-18 mb-0">Property</h4>
                </div>

                <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>

                        <li class="breadcrumb-item"><a href="{{ route('show.property') }}">Properties</a></li>

                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
            </div>



        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add Property</h5>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body pt-2">
                        <div class="row">
                            <div class="col-xl-9">
                                <form action="{{ route('store.property') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <input type="number" class="form-control" name="amount"
                                            value="{{ old('amount') }}" id="amount" placeholder="Enter Amount"
                                            min="0">
                                        {{-- <small class="text-danger">We'll never share your email with anyone
                                            else.
                                        </small> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address"
                                            value="{{ old('address') }}" id="address" placeholder="Enter Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="address_link">Address Link</label>
                                        <input type="text" class="form-control" name="address_link"
                                            value="{{ old('address_link') }}" id="address_link"
                                            placeholder="Enter Address Link">
                                    </div>

                                    <div class="form-group">
                                        <label for="view_detail_link">View Detail Link</label>
                                        <input type="text" class="form-control" name="view_detail_link"
                                            value="{{ old('view_detail_link') }}" id="view_detail_link"
                                            placeholder="Enter View Detail Link">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">Heading</label>
                                        <input type="text" class="form-control" name="heading"
                                            value="{{ old('heading') }}" id="heading" placeholder="Enter Heading">
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Image</h5>
                                                </div>
                                                <div class="card-body pt-2">
                                                    <input type="file" class="dropify" name="image" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" rows="3" name="description" placeholder="Enter Description">{{ old('description') }}</textarea>
                                    </div>



                                    <button type="submit" class="btn btn-primary">Submit</button>


                                </form>
                            </div><!-- end col -->



                        </div><!-- end row -->
                        <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
        <!-- end row -->
    </div> <!-- end page-content -->
@endsection
