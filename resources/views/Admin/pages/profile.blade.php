@extends('Admin.layouts.master')

@section('title', 'Admin | Profile')
@section('custom_css')
    <style>
        .dropdown-menu-xxl {
            width: 300px;
        }

        .dropdown-menu .megamenu-list {
            min-width: 280px !important;
        }

        /* Profile Custom CSS */
        .gradient-custom {
            /* Fallback for old browsers */
            background: #393f50;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, #393f50, #64b0f2, #5a2e4c);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, #393f50, #64b0f2, #5a2e4c);
        }
    </style>
@endsection
@section('content')
    <div class="page-container">
        {{-- Page title --}}
        <div class="page-title-box">
            {{-- @if (context . title !== undefined) { --}}
            <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                <div class="flex-grow-1">
                    {{-- <h4 class="font-18 mb-0">@@title</h4> --}}
                    <h4 class="font-18 mb-0">Admin</h4>
                </div>

                <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Staffshaw</a></li>
                        {{-- @if (context . subtitle !== undefined) { --}}
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a>
                        </li>
                        {{-- } --}}
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
            {{-- } --}}
            <div class="d-flex align-items-sm-center flex-sm-row flex-column">
                <h4 class="font-18 mb-0">Welcome</h4>
            </div>
        </div>
        {{-- End Page title --}}

        {{-- Page content -- Dashboard Cards --}}
        <div class="row">
            <section class="vh-100" style="background-color: #f4f5f7;">
                <div class="container py-2 h-50">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-lg-6 mb-4 mb-lg-0">
                            <div class="card mb-3" style="border-radius: .5rem;">
                                <div class="row g-0">
                                    <div class="col-md-4 gradient-custom text-center text-white"
                                        style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                            alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                        <h5>{{ $user->full_name }}</h5>
                                        @foreach ($roles as $role)
                                            <p>{{ str()->of($role)->replace(['_', '-', ','], ' ')->title() }}</p>
                                        @endforeach

                                        <a href="#" class="text-decoration-none text-white">
                                            <i class="far fa-edit mb-5"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-4">
                                            <h6>Information</h6>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-12 mb-3 text-center">
                                                    {{-- @dd($user) --}}
                                                    <h6>Email</h6>
                                                    <p class="text-muted">{{ $user->email }}</p>
                                                </div>
                                                {{-- <div class="col-6 mb-3">
                                                    <h6>Phone</h6>
                                                    <p class="text-muted">123 456 789</p>
                                                </div> --}}
                                            </div>
                                            <h6>Permissions</h6>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-12 mb-3">
                                                    @foreach ($permissions as $permission)
                                                        <p class="text-muted">{{ $permission->name?? 'name-here' }}</p>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start">
                                                <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                                <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                                <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div> <!-- end row -->



    </div> <!-- end row -->

    </div> <!-- container -->
@endsection
@section('scripts')

@endsection
