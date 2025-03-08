<!DOCTYPE html>
<html lang="en">

<head>
    <!-- :: Title -->
    <title>Skaja, Daniels & Luu | @stack('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    {{-- Asset Styles Links --}}
    <!-- :: Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}">

    <!-- :: Favicon -->
    <link rel="icon" type="image/png" href="{{asset('user/assets/images/logo/fav.png')}}">


    <!-- :: Google Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&amp;family=Poppins:wght@400;500;600;700&amp;display=swap">

    <!-- :: Fontawesome -->
    <link rel="stylesheet" href="{{asset('user/assets/fonts/fontawesome/css/all.min.css')}}">

    <!-- :: Flaticon -->
    <link rel="stylesheet" href="{{asset('user/assets/fonts/flaticon/css/flaticon.css')}}">

    <!-- :: OWL Carousel -->
    <link rel="stylesheet" href="{{asset('user/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/owl.theme.default.min.css')}}">

    <!-- :: Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('user/assets/css/nice-select.css')}}">

    <!-- :: Lity -->
    <link rel="stylesheet" href="{{asset('user/assets/css/lity.min.css')}}">

    <!-- :: Animate CSS -->
    <link rel="stylesheet" href="{{asset('user/assets/css/animate.css')}}">

    <!-- :: Style CSS -->
    <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">

    <!-- :: Style Responsive CSS -->
    <link rel="stylesheet" href="{{asset('user/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- :: Custom Style CSS -->
    @stack('styles')

</head>

<body>

    @include('User.layout.header')

    @yield('content')

    @include('User.layout.footer')

    {{-- asset scripts --}}
    <!-- :: jQuery JS -->
    <script src="{{asset('user/assets/js/jquery-3.6.0.min.js')}}"></script>

    <!-- :: Popper JS -->
    <script src="{{asset('user/assets/js/popper.min.js')}}"></script>

    <!-- :: BootStrap JS -->
    <script src="{{asset('user/assets/js/bootstrap.min.js')}}"></script>

    <!-- :: OWL Carousel -->
    <script src="{{asset('user/assets/js/owl.carousel.min.js')}}"></script>

    <!-- :: Nice Select -->
    <script src="{{asset('user/assets/js/jquery.nice-select.min.js')}}"></script>

    <!-- :: Waypoints -->
    <script src="{{asset('user/assets/js/jquery.waypoints.min.js')}}"></script>

    <!-- :: CounterUp -->
    <script src="{{asset('user/assets/js/jquery.counterup.min.js')}}"></script>

    <!-- :: Lity -->
    <script src="{{asset('user/assets/js/lity.min.js')}}"></script>

    <!-- :: Main JS -->
    <script src="{{asset('user/assets/js/main.js')}}"></script>
    {{-- <script src="{{asset('user/assets/js/ajax-script.js')}}"></script> --}}

    <!--read More Button-->
    <script>
        $('.moreless-button').click(function () {
            // Content toggle
            $('.moretext').slideToggle();

            // Button text toggle
            if ($(this).text().trim() === "Read less") {
                $(this).text("Read more");
            } else {
                $(this).text("Read less");
            }
        });
    </script>

    <!--yelp review-->
    <script src="https://static.elfsight.com/platform/platform.js" async></script>

    <!--google Review-->
    <script src="https://static.elfsight.com/platform/platform.js" async></script>

    <!--tab sctriph-->
    <script>
        // JavaScript for toggling content based on sidebar clicks
        document.querySelectorAll('.practice-side ul li').forEach((item) => {
            item.addEventListener('click', function () {
                // Remove 'active' class from all sidebar items
                document.querySelectorAll('.practice-side ul li').forEach((li) => {
                    li.classList.remove('active');
                });

                // Add 'active' class to the clicked item
                this.classList.add('active');

                // Hide all content items
                document.querySelectorAll('.content-item').forEach((content) => {
                    content.classList.remove('active');
                });

                // Show the corresponding content
                const contentId = this.getAttribute('data-content');
                document.getElementById(contentId).classList.add('active');
            });
        });
    </script>
    {{-- Custom scripts --}}
    @stack('custom-script')


</body>

</html>