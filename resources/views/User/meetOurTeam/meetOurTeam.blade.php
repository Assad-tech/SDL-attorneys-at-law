@extends('User.layout.app')
@push('title', 'Meet Our Team')
@push('styles')

@endpush

@section('content')
    <!-- :: Breadcrumb Header -->
    <section class="breadcrumb-header" id="page" style="background-image: url({{asset('user/assets/images/home/banner.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner">
                        <h1>Meet Our Team</h1>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>Meet Our Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- :: About -->
    <section class="about py-100" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-box">
                        <div class="about-img">
                            <img class="img-fluid" src="{{asset('user/assets/images/home/Picture1.png')}}" alt="01 About">EMILY ANTOKU

                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-box">
                        <div class="sec-title-about">
                            <h2>About Us</h2>
                            <h3>Get Great Legal Service from Trusted Attorneys</h3>
                            <p>Skaja, Daniels & Luu offers an experienced team of dedicated professionals focused on
                                client’s needs and rights. For fifteen years, we have provided solutions to the unique needs
                                of our clients. <br><br>

                                Skaja, Daniels & Luu is a general practice law firm, guided by the ideal that everyone has
                                the right to seek justice and legal remedies. We represent clients who value constructive
                                and equitable solutions, honesty and integrity.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- :: Attorney -->
    <section class="advisors ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="sec-title text-center">
                        <h3>Attorneys</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box">
                        <!--<div class="img-box"> -->
                        <!--    <img class="img-fluid" src="{{asset('user/assets/images/testimonial/coming-soon-1-1-1536x1536.jpeg')}}" alt="01 advisors">-->
                        <!--    <div class="img-box-hover">-->
                        <!--<ul>-->
                        <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                        <!--</ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="text-box text-center">
                            <h5><a href="carl-j-skaja.php">CARL J SKAJA </a> </h5>
                            <span>Partner</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box">
                        <!--<div class="img-box"> -->
                        <!--    <img class="img-fluid" src="{{asset('user/assets/images/testimonial/coming-soon-1-1-1536x1536.jpeg')}}" alt="02 advisors">-->
                        <!--    <div class="img-box-hover">-->
                        <!--<ul>-->
                        <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                        <!--</ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="text-box text-center">
                            <h5><a href="robert-d-daniels.php">ROBERT M DANIELS</a></h5>
                            <span>Partner</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box">
                        <!--<div class="img-box"> -->
                        <!--    <img class="img-fluid" src="{{asset('user/assets/images/testimonial/coming-soon-1-1-1536x1536.jpeg')}}" alt="03 advisors">-->
                        <!--    <div class="img-box-hover">-->
                        <!--<ul>-->
                        <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                        <!--</ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="text-box text-center">
                            <h5><a href="tri-m-luu.php">TRI M LUU </a> </h5>
                            <span>Managing Partner</span>
                        </div>
                    </div>
                </div>

                <!-- ATTORNEYS -->
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box">
                        <!--<div class="img-box">-->
                        <!--    <img class="img-fluid" src="{{asset('user/assets/images/testimonial/coming-soon-1-1-1536x1536.jpeg')}}" alt="03 advisors">-->
                        <!--    <div class="img-box-hover">-->
                        <!--<ul>-->
                        <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                        <!--</ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="text-box text-center">
                            <h5> <a href="han-huynh-hershman.php">HAN HUYNH HERSHMAN</a></h5>
                            <span>Associate Attorney</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box">
                        <!--<div class="img-box">-->
                        <!--    <img class="img-fluid" src="{{asset('user/assets/images/testimonial/coming-soon-1-1-1536x1536.jpeg')}}" alt="03 advisors">-->
                        <!--    <div class="img-box-hover">-->
                        <!--<ul>-->
                        <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                        <!--</ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="text-box text-center">
                            <h5> <a href="fadi-al-tahhan.php">FADI AL TAHHAN</a></h5>
                            <span>Associate Attorney</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box">
                        <!--<div class="img-box">-->
                        <!--    <img class="img-fluid" src="{{asset('user/assets/images/testimonial/coming-soon-1-1-1536x1536.jpeg')}}" alt="03 advisors">-->
                        <!--    <div class="img-box-hover">-->
                        <!--<ul>-->
                        <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                        <!--</ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="text-box text-center">
                            <h5> <a href="dominic-v-claudio.php">DOMINIC V CLAUDIO</a></h5>
                            <span>Associate Attorney</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box">
                        <!--<div class="img-box"> -->
                        <!--    <img class="img-fluid" src="{{asset('user/assets/images/testimonial/coming-soon-1-1-1536x1536.jpeg')}}" alt="03 advisors">-->
                        <!--    <div class="img-box-hover">-->
                        <!--<ul>-->
                        <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                        <!--</ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="text-box text-center">
                            <h5><a href="emily-antoku.php">EMILY ANTOKU</a></h5>
                            <span>Associate Attorney</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box">
                        <!--<div class="img-box">-->
                        <!--    <img class="img-fluid" src="{{asset('user/assets/images/testimonial/coming-soon-1-1-1536x1536.jpeg')}}" alt="03 advisors">-->
                        <!--    <div class="img-box-hover">-->
                        <!--<ul>-->
                        <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                        <!--</ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="text-box text-center">
                            <h5><a href="don-phan-huy.php">DON PHAN-HUY</a></h5>
                            <span>Associate Attorney</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- :: Supporting Staff-->
    <section class="advisors ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="sec-title text-center">
                        <h3>Supporting Staff</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box">
                        <!--<div class="img-box"> -->
                        <!--    <img class="img-fluid" src="{{asset('user/assets/images/testimonial/coming-soon-1-1-1536x1536.jpeg')}}" alt="01 advisors">-->
                        <!--    <div class="img-box-hover">-->
                        <!--<ul>-->
                        <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                        <!--</ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="text-box text-center">
                            <h5><a href="michelle-l.taylor.php">MICHELLE L. TAYLOR</a></h5>
                            <span>PARALEGAL</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box">
                        <!--<div class="img-box"> -->
                        <!--    <img class="img-fluid" src="{{asset('user/assets/images/testimonial/coming-soon-1-1-1536x1536.jpeg')}}" alt="02 advisors">-->
                        <!--    <div class="img-box-hover">-->
                        <!--<ul>-->
                        <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                        <!--</ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="text-box text-center">
                            <h5><a href="quynh-nguyen.php">QUYNH NGUYEN </a></h5>
                            <span>PARALEGAL</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box">
                        <!--<div class="img-box"> -->
                        <!--    <img class="img-fluid" src="{{asset('user/assets/images/testimonial/coming-soon-1-1-1536x1536.jpeg')}}" alt="03 advisors">-->
                        <!--    <div class="img-box-hover">-->
                        <!--<ul>-->
                        <!--    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                        <!--    <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                        <!--</ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="text-box text-center">
                            <h5><a href="angelique-raines.php">ANGELIQUE RAINES</a></h5>
                            <span>PARALEGAL</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- :: Our gallery -->
    <section class="case-study py-20-70">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="sec-title text-center">
                        <h3>Our Gallery</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="gallery">
                        <span></span>
                        <div class="img-box">
                            <img class="img-fluid gallery-img" src="{{asset('user/assets/images/case-study/1.jpg')}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="gallery">
                        <span></span>
                        <div class="img-box">
                            <img class="img-fluid gallery-img" src="{{asset('user/assets/images/case-study/2.jpg')}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="gallery">
                        <span></span>
                        <div class="img-box">
                            <img class="img-fluid gallery-img" src="{{asset('user/assets/images/case-study/3.jpg')}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="gallery">
                        <span></span>
                        <div class="img-box">
                            <img class="img-fluid gallery-img" src="{{asset('user/assets/images/case-study/4.jpg')}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="gallery">
                        <span></span>
                        <div class="img-box">
                            <img class="img-fluid gallery-img" src="{{asset('user/assets/images/case-study/5.jpg')}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="gallery">
                        <span></span>
                        <div class="img-box">
                            <img class="img-fluid gallery-img" src="{{asset('user/assets/images/case-study/6.jpg')}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="gallery">
                        <span></span>
                        <div class="img-box">
                            <img class="img-fluid gallery-img" src="{{asset('user/assets/images/case-study/7.jpg')}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="gallery">
                        <span></span>
                        <div class="img-box">
                            <img class="img-fluid gallery-img" src="{{asset('user/assets/images/case-study/8.jpg')}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="gallery">
                        <span></span>
                        <div class="img-box">
                            <img class="img-fluid gallery-img" src="{{asset('user/assets/images/case-study/9.png')}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="gallery">
                        <span></span>
                        <div class="img-box">
                            <img class="img-fluid gallery-img" src="{{asset('user/assets/images/case-study/10.jpg')}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="gallery">
                        <span></span>
                        <div class="img-box">
                            <img class="img-fluid gallery-img" src="{{asset('user/assets/images/case-study/11.jpg')}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="gallery">
                        <span></span>
                        <div class="img-box">
                            <img class="img-fluid gallery-img" src="{{asset('user/assets/images/case-study/12.jpg')}}">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection


@push('custom-script')

@endpush