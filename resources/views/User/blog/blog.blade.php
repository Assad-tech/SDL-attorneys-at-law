@extends('User.layout.app')
@push('title', 'Blog')
@push('styles')

@endpush

@section('content')

    <!-- :: Breadcrumb Header -->
    <section class="breadcrumb-header" id="page"
        style="background-image: url({{asset('user/assets/images/home/banner.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner">
                        <h1>Blog</h1>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--facebook feed-->
    <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100054599433668" data-tabs="timeline"
        data-width="500px" data-height="" data-small-header="false" data-adapt-container-width="false"
        data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/profile.php?id=100054599433668" class="fb-xfbml-parse-ignore"><a
                href="https://www.facebook.com/profile.php?id=100054599433668">Skaja, Daniels &amp; Luu LLP</a></blockquote>
    </div>

    <!--logo-->

    <section class="com-logo">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div>
                        <img class="img-fluid" src="{{asset('user/assets/images/sponsors/spon1.png')}}" alt="01 Sponsors">
                    </div>
                </div>


                <div class="col-lg-4">
                    <div>
                        <img class="img-fluid" src="{{asset('user/assets/images/sponsors/spon2.png')}}" alt="01 Sponsors">
                    </div>
                </div>


                <div class="col-lg-4">
                    <div>
                        <img class="img-fluid" src="{{asset('user/assets/images/sponsors/spon3.png')}}" alt="01 Sponsors">
                    </div>
                </div>

            </div>
        </div>
    </section>




    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v21.0"></script>
@endsection


@push('custom-script')

@endpush