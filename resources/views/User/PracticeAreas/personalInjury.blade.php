@extends('User.layout.app')
@push('title', 'Personal Injury')

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
                        <p>When you’ve been injured due to someone else’s negligence, you deserve an advocate who will fight
                            tirelessly for your recovery. At Skaja, Daniels & Luu, LLP, we provide personalized attention
                            and zealous advocacy to help clients secure compensation for car accidents, slip-and-falls, dog
                            bites, and other injury-related claims. </p>
                        <!--<h1>Personal Injury</h1>-->
                        <!--<ul>-->
                        <!--    <li><a href="{{route('home')}}">Home</a></li>-->
                        <!--    <li><i class="fas fa-angle-right"></i></li>-->
                        <!--    <li>Personal Injury</li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- :: Practice Area -->
    <section class="practice-area py-100-70">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ">
                    <div class="sec-title ">

                        <div id="section">
                            <div class="article">
                                <h3>Personal Injury (Car Accidents, Slip & Falls, Dog Bites)</h3>
                                <p> Personal injury cases require more than just legal expertise—they demand empathy,
                                    meticulous attention to detail, and unwavering dedication to your recovery. At Skaja,
                                    Daniels & Luu, LLP, our personal injury attorneys represent clients who have been harmed
                                    in car accidents, slip-and-falls, or other negligence-based incidents, such as:</p>

                                <div class="moretext">


                                    <ul>
                                        <li>
                                            Car / Truck Accidents
                                        </li>
                                        <li>
                                            Pedestrian accidents
                                        </li>
                                        <li>
                                            Dog bites
                                        </li>
                                        <li>
                                            Slips and falls
                                        </li>
                                        <li>
                                            Premises liability
                                        </li>
                                        <li>
                                            Civil assault/battery
                                        </li>

                                    </ul>
                                    <p>Most importantly, we are <b>not a personal injury mill.</b> Because our focus is on
                                        clients rather than profits, and we spend very little on marketing and advertising,
                                        this allows us to offer a personalized approach to every case, where clients will be
                                        able to actually speak to an attorney throughout the process, rather than dealing
                                        solely with support staff. At Skaja, Daniels & Luu, we believe in zealous advocacy
                                        for every case, no matter the size, and will pursue cases which are “unprofitable”
                                        in order to establish our firm as litigators willing to go to trial for what’s
                                        right, rather than what’s profitable. </p>
                                    <p>Our process begins with a thorough case evaluation, where we gather police reports,
                                        medical records, and witness statements to establish liability and build the
                                        foundation for your claim. For instance, in car accidents, we analyze evidence such
                                        as accident reports, witness statements, and attempt to secure video footage (if
                                        available) to determine fault. Moreover, we will look at insurance to determine the
                                        likelihood of recovery. </p>
                                    <p>We work closely with medical professionals to document the extent of your injuries
                                        and estimate the costs of ongoing treatment, lost wages, and diminished earning
                                        capacity. Our firm partners with a wide range of licensed physicians, orthopedic and
                                        neuro-surgeons, chiropractors, acupuncturists, and even dentists to offer treatment
                                        options for clients who otherwise do not have insurance, or prefer more specialized
                                        treatment. Moreover, we vigorously fight to recover every available damage which
                                        insurances normally would not pay without an attorney, such as diminished value,
                                        loss of use, lost earnings, and future damages. </p>
                                    <p>Our attorneys negotiate aggressively with insurance companies to ensure you receive
                                        fair compensation, and when settlement offers fall short, we are fully prepared to
                                        litigate your case in court. From start to finish, we prioritize your well-being,
                                        keeping you informed throughout the process and handling the legal complexities so
                                        you can focus on your recovery.</p>


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