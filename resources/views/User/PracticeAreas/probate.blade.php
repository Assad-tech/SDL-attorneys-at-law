@extends('User.layout.app')
@push('title', 'Probate')
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
                        <p>Probate can be an overwhelming process during a difficult time. Skaja, Daniels & Luu, LLP
                            provides compassionate guidance for estate administration, will contests, and trust disputes,
                            helping families navigate these matters efficiently and with care. </p>
                        <!--    <h1>Estate Planning</h1>-->
                        <!--    <ul>-->
                        <!--        <li><a href="{{route('home')}}">Home</a></li>-->
                        <!--        <li><i class="fas fa-angle-right"></i></li>-->
                        <!--        <li>Estate Planning</li>-->
                        <!--    </ul>-->
                        <!--</div>-->
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
                                <h3>Probate</h3>
                                <p>The probate process can be complex and emotionally taxing, especially after the loss of a
                                    loved one. At Skaja, Daniels & Luu, LLP, we provide compassionate and efficient legal
                                    support to guide families and executors through every step of estate administration.
                                </p>

                                <div class="moretext">
                                    <p>Our probate services include:</p>
                                    <ul>
                                        <li>
                                            <b>Estate Administration: </b>Assisting executors and administrators in
                                            fulfilling their legal duties, such as inventorying assets, paying debts, and
                                            distributing property.
                                        </li>
                                        <li>
                                            <b>Will Contests: </b>Representing clients in disputes involving the validity of
                                            a will due to allegations of undue influence, fraud, or incapacity.
                                        </li>
                                        <li>
                                            <b>Trust Litigation: </b>Resolving conflicts among beneficiaries or trustees
                                            over the management or distribution of trust assets.
                                        </li>
                                        <li>
                                            <b>Creditor Claims: </b>Advising on the validity of claims against the estate
                                            and ensuring they are resolved appropriately.
                                        </li>
                                        <li>
                                            <b>Small Estate Procedures: </b>Helping families utilize simplified probate
                                            processes when eligible to reduce costs and expedite resolution.
                                        </li>

                                    </ul>
                                    <p>We understand the emotional and financial challenges that can arise during probate.
                                        Our attorneys are committed to making the process as seamless as possible, ensuring
                                        compliance with all legal obligations and protecting your interests in any disputes.
                                    </p>



                                </div>
                            </div>
                            <span class="moreless-button">Read more</span>
                        </div>
                        <!--<img src="assets/images/practice/GUARDIANSHIP & CONSERVATORSHIP.png" alt="">-->

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