@extends('User.layout.app')
@push('title', 'Criminal Law')
@push('styles')

@endpush

@section('content')
    <!-- :: Breadcrumb Header -->
    <section class="breadcrumb-header" id="page" style="background-image: url({{asset('user/assets/images/home/banner.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner2">
                        <p>At Skaja, Daniels & Luu, LLP, we provide skilled and personalized defense for individuals facing
                            criminal misdemeanor charges. With an attorney who has over 20 years of prosecution experience,
                            we bring an insider’s understanding of the criminal justice system to every case, allowing us to
                            craft effective defense strategies that protect our clients’ rights and futures. </p>
                        <!--<h1>Criminal Law</h1>-->
                        <!--<ul>-->
                        <!--    <li><a href="{{route('home')}}">Home</a></li>-->
                        <!--    <li><i class="fas fa-angle-right"></i></li>-->
                        <!--    <li>Criminal Law</li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="practice-area py-100-70">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ">
                    <div class="sec-title ">
                        <div id="section">
                            <div class="article">
                                <h3>Criminal Law</h3>
                                <p>We handle a variety of misdemeanor cases, including but not limited to:</p>
                                <div class="moretext">

                                    <ul>
                                        <li>
                                            Driving Under the Influence (DUI)
                                        </li>
                                        <li>
                                            Petty Theft
                                        </li>
                                        <li>
                                            Assault and Battery
                                        </li>
                                        <li>
                                            Drug Possession
                                        </li>
                                        <li>
                                            Disorderly Conduct
                                        </li>
                                    </ul>
                                    <h4>DUI Defense</h4>
                                    <p>Driving under the influence is one of the most common misdemeanor charges, and a
                                        conviction can have lasting consequences on your record, license, and livelihood. At
                                        Skaja, Daniels & Luu, LLP, we offer a level of personalized attention and support
                                        that the public defender cannot.</p>
                                    <p>Our DUI defense services include:</p>
                                    <ul>
                                        <li>
                                            <b>Administrative and DMV Hearings: </b>Assisting clients in retaining their
                                            driver’s licenses and navigating the administrative penalties associated with a
                                            DUI charge.
                                        </li>
                                        <li>
                                            <b>Personalized Attention: </b>Providing one-on-one guidance to address your
                                            unique circumstances and explore all possible defenses.
                                        </li>
                                        <li>
                                            <b>Remediation Support: </b>Helping clients enroll in courses, counseling, or
                                            treatment programs to demonstrate responsibility and reduce potential penalties.
                                        </li>
                                        <li>
                                            <b>Expungement Assistance: </b>After resolving your case, we assist in clearing
                                            your record to minimize the long-term impact of a DUI conviction.
                                        </li>

                                    </ul>
                                    <h4>Comprehensive Misdemeanor Defense</h4>
                                    <p>For other misdemeanor charges, we utilize our deep knowledge of prosecution tactics
                                        to anticipate and counter the arguments against you. Whether negotiating plea deals,
                                        seeking dismissals, or litigating cases in court, we aim to minimize penalties and
                                        achieve the best possible outcome for your case.</p>
                                    <p>At Skaja, Daniels & Luu, LLP, we understand how overwhelming a criminal charge can
                                        be. Our approach is client-focused, ensuring you receive the guidance, advocacy, and
                                        support you need throughout the process. Contact us today for a consultation and
                                        take the first step toward protecting your future.</p>



                                </div>
                            </div>
                            <span class="moreless-button">Read more</span>
                        </div>



                        <a class="service-btn"
                            href="https://skaja-daniels-lister-permito-llp.mycase.com/contact_us/1iSPUXhG5p4ABzErBH85a1zC"
                            style="opacity: 1;">REQUEST A FREE CASE REVIEW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('custom-script')

@endpush