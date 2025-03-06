@extends('Admin.layouts.master')
@section('title', 'Admin | Manage Social Links')
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

        {{-- Page content --Social Links --}}
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Manage Social Links</h5>
            </div>

            <div class="card-body pt-2">

                <form action="{{ route('admin.update.social.links') }}" method="post">
                    @csrf

                    @foreach (['facebook', 'google_map', 'twitter', 'linkedin', 'instagram', 'yelp'] as $type)
                                    @php
                                        $link = $socialLinks[$type] ?? null;
                                    @endphp
                                    <div class="form-group">
                                        <label for="{{ $type }}">{{ ucfirst(str_replace('_', ' ', $type)) }}</label>
                                        <input type="url" class="form-control" name="{{ $type }}" value="{{ $link->link ?? '' }}"
                                            placeholder="Enter {{ ucfirst($type) }} URL">
                                        @if ($link)
                                            <input type="hidden" name="ids[{{ $type }}]" value="{{ $link->id }}">
                                        @endif
                                    </div>
                    @endforeach

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Save Links</button>
                    </div>
                </form>


            </div>
        </div>


    </div> <!-- container -->
@endsection

@push('script')

@endpush