@extends('User.layout.app')
@push('title', 'Contact')
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
                        <h1>Contact</h1>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- :: About -->
    <section class="about py-50" id="about-us" style="margin-top:70px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-box">
                        <div class="about-img">
                            <img class="img-fluid" src="{{asset('user/assets/images/advisors/KARLA MENDOZA.jpg')}}" alt="01 About">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-box">
                        <div class="sec-title">

                            <h3 style="margin:0;">Escondido's Premier Law Firm.</h3>
                            <h5><i>Where Personal Attention Meets Legal Expertise.</i></h5>
                            <p style="color:#000;line-height: 25px; margin-top:15px;"><b>Phone:</b> <br> <a
                                    href="tel:7607813464" style="color:#000;"> (760) 781-3464</a> </p>
                            <p style="color:#000;line-height: 25px;"><b>Fax:</b> <br> <a href="tel:7608888035"
                                    style="color:#000;">(760) 888-8035</a> </p>
                            <p style="color:#000;line-height: 25px;"><b>Address:</b> <br><span style="color:#000;">960
                                    Canterbury Place, Suite 110 <br>Escondido, CA 92025</span> </p>
                            <p style="color:#000;line-height: 25px;"><b>Office Hours:</b> <br><span
                                    style="color:#000;">Mon-Fri: 8am – 5pm <br>Sat-Sun: closed</span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--contact-->
    <section class="about py-100" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-page">
                        <div class="contact-sec">
                            <img class="img-fluid" src="{{asset('user/assets/images/logo/tri.png')}}" alt="01 About">
                            <h2>(760) 781-3464</h2>
                            <p>Call or request a free appointment today. We would love to hear from you no matter how big or
                                small your case may seem.</p>
                            <div class="contact-btn">
                                <a class="btn-1"
                                    href="https://skaja-daniels-lister-permito-llp.mycase.com/contact_us/1iSPUXhG5p4ABzErBH85a1zC">
                                    REQUEST A FREE CASE REVIEW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('custom-script')

@endpush