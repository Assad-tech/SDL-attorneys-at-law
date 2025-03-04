@extends('User.layout.app')
@push('title', 'Attroneys')
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
                        <h1>ATTORNEYS</h1>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>Attorneys</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- :: Attorney Staff-->
    <section class="advisors py-100-70 ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="sec-title text-center">
                        <h3>ATTORNEYS</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box team-img">
                        <div class="img-box">
                            <a href="carl-j-skaja.php"> <img class="img-fluid"
                                    src="{{asset('user/assets/images/advisors/CARL J SKAJA.jpg')}}" alt="01 advisors"> </a>
                            <!--<div class="img-box-hover">-->
                            <!--    <ul>-->
                            <!--        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                        <div class="text-box text-center">
                            <h5><a href="carl-j-skaja.php">CARL J. SKAJA</a></h5>
                            <span>SENIOR PARTNER</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box team-img">
                        <div class="img-box">
                            <a href="robert-d-daniels.php"> <img class="img-fluid"
                                    src="{{asset('user/assets/images/advisors/robert.png')}}" alt="02 advisors"> </a>
                            <!--<div class="img-box-hover">-->
                            <!--    <ul>-->
                            <!--        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                        <div class="text-box text-center">
                            <h5><a href="robert-d-daniels.php">ROBERT M DANIELS</a></h5>
                            <span>PARTNER</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box team-img">
                        <div class="img-box">
                            <a href="tri-m-luu.php"> <img class="img-fluid"
                                    src="{{asset('user/assets/images/advisors/TRI M LUU.jpg')}}" alt="03 advisors"> </a>
                            <!--<div class="img-box-hover">-->
                            <!--    <ul>-->
                            <!--        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                        <div class="text-box text-center">
                            <h5><a href="tri-m-luu.php">TRI M. LUU</a></h5>
                            <span>MANAGING PARTNER </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box team-img">
                        <div class="img-box">
                            <a href="han-huynh-hershman.php"> <img class="img-fluid"
                                    src="{{asset('user/assets/images/advisors/HAN HUYNH HERSHMAN.jpg')}}" alt="03 advisors">
                            </a>
                            <!--<div class="img-box-hover">-->
                            <!--    <ul>-->
                            <!--        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                        <div class="text-box text-center">
                            <h5><a href="han-huynh-hershman.php">HAN HUYNH HERSHMAN</a></h5>
                            <span>ASSOCIATE ATTORNEY</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box team-img">
                        <div class="img-box">
                            <a href="fadi-al-tahhan.php"> <img class="img-fluid"
                                    src="{{asset('user/assets/images/advisors/FADI AL TAHHAN.jpg')}}" alt="03 advisors">
                            </a>
                            <!--<div class="img-box-hover">-->
                            <!--    <ul>-->
                            <!--        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                        <div class="text-box text-center">
                            <h5><a href="fadi-al-tahhan.php">FADI AL TAHHAN</a></h5>
                            <span>ASSOCIATE ATTORNEY</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box team-img">
                        <div class="img-box">
                            <a href="dominic-v-claudio.php"> <img class="img-fluid"
                                    src="{{asset('user/assets/images/advisors/DOMINIC V CLAUDIO.jpg')}}" alt="03 advisors">
                            </a>
                            <!--<div class="img-box-hover">-->
                            <!--    <ul>-->
                            <!--        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                        <div class="text-box text-center">
                            <h5><a href="dominic-v-claudio.php">DOMINIC V. CLAUDIO</a></h5>
                            <span>ASSOCIATE ATTORNEY</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box team-img">
                        <div class="img-box">
                            <a href="emily-antoku.php"> <img class="img-fluid"
                                    src="{{asset('user/assets/images/advisors/EMILY ANTOKU.jpg')}}" alt="03 advisors"> </a>
                            <!--<div class="img-box-hover">-->
                            <!--    <ul>-->
                            <!--        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                        <div class="text-box text-center">
                            <h5><a href="emily-antoku.php">EMILY ANTOKU</a></h5>
                            <span>ASSOCIATE ATTORNEY</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="advisors-box team-img">
                        <div class="img-box">
                            <a href="don-phan-huy.php"> <img class="img-fluid"
                                    src="{{asset('user/assets/images/advisors/DON PHAN-HUY.jpg')}}" alt="03 advisors"> </a>
                            <!--<div class="img-box-hover">-->
                            <!--    <ul>-->
                            <!--        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                            <!--        <li><a href="#"><i class="fab fa-yelp"></i></a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                        <div class="text-box text-center">
                            <h5><a href="don-phan-huy.php">DON PHAN-HUY</a></h5>
                            <span>ASSOCIATE ATTORNEY</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('custom-script')

@endpush