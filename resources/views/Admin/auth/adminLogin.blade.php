<!DOCTYPE html>
<html lang="en">
<!-- <html lang="en" data-layout="topnav"> -->

<head>
    <meta charset="utf-8" />
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}"> --}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo-dark.png') }}">

    <!-- Vendor css -->
    <link href="{{ asset('admin/assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>
</head>

<body class="authentication-bg bg-primary">

    <div class="account-pages pt-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="account-card-box bg-light rounded-2 p-2">
                        <div class="card mb-0 border border-primary border-4">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="my-3">
                                        <a href="index.html">
                                            <span><img src="assets/images/logo-dark.png" width="27%"
                                                    alt=""></span>
                                        </a>
                                    </div>
                                    @if (session('success'))
                                        <div class="text-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="text-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <h5 class="text-muted text-uppercase py-3 font-16">Admin Login</h5>
                                </div>

                                <form action="{{ route('admin.login-process') }}" method="POST" class="mt-2">

                                    @csrf

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Enter your email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="password" name="password" id="password"
                                            placeholder="Enter your password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    {{-- <div class="form-group mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                            <label class="form-check-label ms-1" for="checkbox-signin">Remember
                                                me</label>
                                        </div>
                                    </div> --}}

                                    <div class="form-group text-center mb-3">
                                        <button class="btn btn-success btn-block waves-effect waves-light w-100"
                                            type="submit"> Log In </button>
                                    </div>

                                    {{-- <a href="{{ route('forgot.password') }}" class="text-muted"><i
                                            class="mdi mdi-lock me-1"></i>
                                        Forgot your password?</a> --}}

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>

                    {{-- <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-white-50">Don't have an account? <a href="auth-register.html"
                                    class="text-white ms-1"><b>Sign Up</b></a></p>
                        </div> <!-- end col -->
                    </div> --}}
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

</body>

</html>
