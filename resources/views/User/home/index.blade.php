@extends('User.layout.app')
@push('title', 'Home')
@push('styles')

@endpush
@section('content')
    <!-- :: Header -->
    <header class="header" id="page">
        <div class="header-owl owl-carousel owl-theme">
            <div class="sec-hero display-table"
                style="background-image: url({{asset('user/assets/images/header/header.jpg')}})">
                <div class="table-cell">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner">
                                    <!--<div class="headline-top">Welcome </div>-->
                                    <!--<h1 class="handline">Escondido's Premier Law Firm.</h1>-->
                                    <!--<p class="about-website">At Skaja, Daniels & Luu, LLP, our attorneys bring a results-driven approach to a diverse array of legal challenges, combining creative problem-solving with zealous advocacy to protect the interests of our clients. With a focus on tailored solutions and client-first service, we deliver personalized counsel in the following practice areas.</p>-->

                                    <!--<a class="btn-1 btn-2 move-section" href="contact.php">Let's Start</a>-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec-hero display-table"
                style="background-image: url({{asset('user/assets/images/home/banner2.png')}})">
                <div class="table-cell">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner  header-banner">
                                    <div class="headline-top">Welcome </div>
                                    <h1 class="handline">Escondido's Premier Law Firm.</h1>
                                    <!--<p class="about-website">Skaja, Daniels & Luu is an experienced team of dedicated professionals focused on client’s needs and rights.</p>-->
                                    <!--<p class="about-website">Where Personal Attention Meets Legal Expertise.</p>-->
                                    <p class="about-website">At Skaja, Daniels & Luu, LLP, our attorneys bring a
                                        results-driven approach to a diverse array of legal challenges, combining creative
                                        problem-solving with zealous advocacy to protect the interests of our clients. With
                                        a focus on tailored solutions and client-first service, we deliver personalized
                                        counsel in the following practice areas.</p>

                                    <a class="btn-1 btn-2 move-section" href="contact.php">Let's Start</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </header>


    <!-- :: Practice Area -->

    <section class="practice-area py-100-70">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="sec-title text-center">
                        <h2>Practice Area</h2>
                        <h3>What We Cover</h3>
                        <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="practice-area-item">
                        <i class="svvg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="60px" height="55px"
                                viewBox="0 0 100.000000 100.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path
                                        d="M165 908 c-3 -7 -4 -195 -3 -418 l3 -405 68 -3 c62 -3 67 -1 67 18 0 17 -6 20 -50 20 l-50 0 0 380 0 380 300 0 300 0 0 -380 0 -380 -130 0 c-124 0 -130 -1 -130 -20 0 -20 5 -20 148 -18 l147 3 0 415 0 415 -333 3 c-261 2 -334 0 -337 -10z" />
                                    <path
                                        d="M300 660 c0 -19 7 -20 200 -20 193 0 200 1 200 20 0 19 -7 20 -200 20 -193 0 -200 -1 -200 -20z" />
                                    <path
                                        d="M300 540 c0 -19 7 -20 200 -20 193 0 200 1 200 20 0 19 -7 20 -200 20 -193 0 -200 -1 -200 -20z" />
                                    <path
                                        d="M390 390 c-8 -5 -23 -11 -33 -14 -9 -3 -20 -14 -24 -23 -3 -10 -13 -26 -20 -35 -12 -14 -13 -26 -4 -68 6 -28 11 -89 11 -135 0 -48 4 -87 11 -90 5 -4 28 5 50 20 l39 28 39 -28 c22 -15 45 -24 50 -20 7 3 11 42 11 90 0 46 5 107 11 135 9 42 8 54 -4 68 -7 9 -17 25 -20 35 -4 9 -15 20 -24 23 -10 3 -26 10 -35 15 -21 11 -38 11 -58 -1z m45 -40 c3 -5 15 -10 26 -10 11 0 18 -4 14 -9 -3 -5 1 -16 8 -23 17 -17 10 -78 -9 -78 -7 0 -17 -6 -21 -12 -4 -7 -19 -13 -33 -13 -14 0 -29 6 -33 13 -4 6 -14 12 -21 12 -19 0 -26 61 -9 78 7 7 11 18 8 23 -4 5 3 9 14 9 11 0 23 5 26 10 3 6 10 10 15 10 5 0 12 -4 15 -10z m45 -227 l0 -44 -30 23 -30 22 -30 -22 -30 -23 0 44 0 43 60 0 60 0 0 -43z" />
                                </g>
                            </svg>
                        </i>
                        <div class="content">
                            <h4>Business & Corporate Law and Formations</h4>
                            <p>Whether you're launching a new venture, managing a growing business, or planning for a
                                transition, Skaja, Daniels & Luu, LLP offers expert legal counsel tailored to your specific
                                needs. From entity formation and corporate governance to mergers, acquisitions, and
                                nonprofit compliance, our attorneys provide the guidance and resources you need to succeed.
                            </p>
                            <a href="{{route('business.and.corporate.law')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="practice-area-item">
                        <i class="svvg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width=60px" height="55px"
                                viewBox="0 0 100.000000 100.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path
                                        d="M460 940 c-11 -11 -20 -31 -20 -45 l0 -25 -41 22 c-49 25 -112 32 -193 21 -61 -8 -86 -30 -46 -40 11 -3 19 -11 17 -17 -3 -6 -35 -84 -71 -173 -66 -158 -67 -163 -52 -192 9 -16 33 -43 53 -58 30 -23 46 -28 93 -28 47 0 63 5 93 28 20 15 44 42 53 58 15 30 14 34 -56 201 -54 131 -67 174 -58 180 26 18 124 3 167 -25 l41 -27 0 -340 0 -340 -75 0 c-67 0 -79 -3 -100 -25 -14 -13 -25 -36 -25 -50 l0 -25 260 0 260 0 0 25 c0 14 -11 37 -25 50 -21 22 -33 25 -100 25 l-75 0 0 324 c0 362 -6 336 74 336 47 0 146 -44 146 -65 0 -7 -32 -89 -71 -183 -69 -167 -70 -171 -55 -201 9 -16 33 -43 53 -58 30 -23 46 -28 93 -28 47 0 63 5 94 28 20 16 44 43 52 60 14 31 12 37 -54 197 -63 151 -67 166 -51 172 32 12 22 25 -58 69 -71 39 -84 43 -150 44 l-73 0 0 43 c0 47 -26 82 -60 82 -11 0 -29 -9 -40 -20z m58 -413 c2 -382 2 -387 -18 -387 -20 0 -20 6 -20 383 0 211 3 387 7 391 25 24 28 -18 31 -387z m-261 145 l51 -127 -54 -3 c-30 -2 -78 -2 -108 0 l-54 3 51 127 c29 70 54 128 57 128 3 0 28 -58 57 -128z m600 -140 l51 -127 -54 -3 c-30 -2 -78 -2 -108 0 l-54 3 51 127 c29 70 54 128 57 128 3 0 28 -58 57 -128z m-563 -46 c-7 -18 -65 -46 -94 -46 -29 0 -87 28 -94 46 -4 11 12 14 94 14 82 0 98 -3 94 -14z m600 -140 c-7 -18 -65 -46 -94 -46 -29 0 -87 28 -94 46 -4 11 12 14 94 14 82 0 98 -3 94 -14z m-189 -256 c4 -7 -67 -10 -205 -10 -138 0 -209 3 -205 10 8 14 402 14 410 0z" />
                                </g>
                            </svg>
                        </i>
                        <div class="content">
                            <h4>Civil Litigation</h4>
                            <p>Whether you’re pursuing a claim or defending against one, civil litigation can be complex and
                                costly. At Skaja, Daniels & Luu, LLP, we combine strategic legal representation with a
                                commitment to cost transparency, helping clients resolve business, personal injury, and real
                                estate disputes efficiently and effectively.</p>
                            <a href="{{route('civil.litigation')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="practice-area-item">
                        <i class="svvg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="60px" height="55px"
                                viewBox="0 0 100.000000 100.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path
                                        d="M176 874 c-14 -13 -16 -61 -16 -374 0 -313 2 -361 16 -374 13 -14 57 -16 324 -16 267 0 311 2 324 16 14 13 16 61 16 374 0 313 -2 361 -16 374 -13 14 -57 16 -324 16 -267 0 -311 -2 -324 -16z m84 -374 l0 -360 -35 0 -35 0 0 360 0 360 35 0 35 0 0 -360z m550 0 l0 -360 -260 0 -260 0 0 360 0 360 260 0 260 0 0 -360z" />
                                    <path
                                        d="M316 831 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M366 831 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M416 831 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M466 831 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M516 831 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M566 831 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M616 831 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M666 831 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M716 831 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M766 831 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M766 781 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M766 731 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M766 681 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M517 636 c-5 -12 -20 -16 -55 -16 -60 0 -73 -11 -101 -82 -27 -68 -25 -89 12 -106 22 -11 32 -11 55 0 35 17 38 42 12 102 -22 53 -20 66 15 66 53 0 55 -4 55 -126 l0 -114 -30 0 c-16 0 -30 -4 -30 -10 0 -6 32 -10 75 -10 43 0 75 4 75 10 0 6 -13 10 -30 10 l-30 0 0 114 c0 122 2 126 55 126 35 0 37 -13 15 -66 -26 -60 -23 -85 13 -102 22 -11 32 -11 54 0 37 17 39 38 12 106 -28 71 -41 82 -100 82 -34 0 -51 5 -57 16 -8 15 -10 15 -15 0z m-95 -124 c19 -47 13 -62 -22 -62 -16 0 -30 6 -32 12 -5 15 22 88 32 88 4 0 14 -17 22 -38z m250 0 c19 -47 13 -62 -22 -62 -16 0 -30 6 -32 12 -5 15 22 88 32 88 4 0 14 -17 22 -38z" />
                                    <path
                                        d="M766 631 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M766 581 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M766 531 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M766 481 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M766 431 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M766 381 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M766 331 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M766 281 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M766 231 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M316 181 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M366 181 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M416 181 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M466 181 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M516 181 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M566 181 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M616 181 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M666 181 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M716 181 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                    <path
                                        d="M766 181 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4 -12 2 -15 -3z" />
                                </g>
                            </svg>
                        </i>
                        <div class="content">
                            <h4>Construction, Contractor, and Disability (ADA) Law</h4>
                            <p>California’s construction and ADA laws are intricate, requiring experienced legal
                                representation. Skaja, Daniels & Luu, LLP provides skilled assistance with construction
                                disputes, contractor compliance, and ADA defense, protecting the rights of property owners,
                                contractors, and small businesses. </p>
                            <a href="{{route('construction.contactor.law')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="practice-area-item">
                        <i class="svvg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="60px" height="55px"
                                viewBox="0 0 100.000000 100.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path
                                        d="M418 863 c-60 -59 -111 -118 -115 -130 -7 -28 12 -53 41 -53 14 0 32 -16 54 -50 17 -27 32 -52 32 -54 0 -2 -89 -86 -197 -186 -198 -182 -233 -219 -233 -253 0 -59 64 -104 120 -85 14 5 112 103 218 218 l193 209 45 -32 c25 -18 52 -47 59 -64 11 -26 20 -33 42 -33 23 0 50 22 136 108 95 95 108 113 105 138 -2 22 -10 31 -33 38 -21 6 -44 28 -75 74 -42 62 -126 141 -189 178 -20 12 -31 26 -31 41 0 21 -25 43 -51 43 -7 0 -61 -48 -121 -107z m42 -48 c-93 -93 -130 -121 -130 -98 0 4 48 56 107 115 72 72 111 104 117 98 7 -7 -25 -45 -94 -115z m198 6 c19 -14 38 -35 43 -48 5 -13 20 -28 33 -33 24 -9 96 -103 96 -125 0 -6 -38 -48 -84 -94 -84 -83 -85 -84 -115 -71 -38 16 -176 146 -213 203 l-28 42 92 92 91 91 26 -16 c14 -9 41 -27 59 -41z m132 -336 c-93 -93 -130 -121 -130 -98 0 4 48 56 107 115 72 72 111 104 117 98 7 -7 -25 -45 -94 -115z m-290 14 c0 -5 -86 -101 -191 -214 -163 -176 -194 -205 -219 -205 -31 0 -60 30 -60 62 0 9 94 104 212 213 l211 195 24 -22 c12 -12 23 -25 23 -29z" />
                                    <path d="M645 730 c-8 -13 13 -40 31 -40 17 0 18 22 2 38 -15 15 -25 15 -33 2z" />
                                    <path d="M590 666 c0 -7 7 -19 15 -26 22 -19 44 3 25 25 -16 19 -40 20 -40 1z" />
                                    <path d="M535 620 c-8 -13 13 -40 31 -40 21 0 17 28 -5 40 -14 7 -22 7 -26 0z" />
                                    <path
                                        d="M500 183 c-8 -3 -28 -18 -45 -33 -16 -16 -39 -30 -50 -32 -13 -2 -21 -12 -23 -31 -7 -57 -5 -57 304 -57 247 0 285 2 299 16 24 24 15 57 -20 73 -16 8 -45 27 -63 43 l-33 28 -177 -1 c-97 0 -184 -3 -192 -6z m371 -33 c46 -25 13 -30 -188 -30 l-208 1 24 19 c21 18 39 20 188 20 94 0 173 -4 184 -10z m97 -72 c-4 -10 -71 -14 -281 -16 -242 -2 -277 0 -277 13 0 13 37 15 281 15 220 0 280 -3 277 -12z" />
                                </g>
                            </svg>
                        </i>
                        <div class="content">
                            <h4>Criminal Law</h4>
                            <p>At Skaja, Daniels & Luu, LLP, we provide skilled and personalized defense for individuals
                                facing criminal misdemeanor charges. With an attorney who has over 20 years of prosecution
                                experience, we bring an insider’s understanding of the criminal justice system to every
                                case, allowing us to craft effective defense strategies that protect our clients’ rights and
                                futures.</p>
                            <a href="{{route('criminal.law')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="practice-area-item">
                        <i class="svvg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="60px" height="55px"
                                viewBox="0 0 160.000000 148.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,148.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path
                                        d="M460 1460 c-19 -11 -55 -26 -80 -35 -106 -38 -187 -130 -210 -241 -7 -31 -20 -60 -35 -74 -36 -33 -34 -81 4 -113 26 -22 29 -29 24 -66 -5 -39 -3 -44 37 -82 30 -29 46 -54 55 -90 24 -90 85 -171 152 -202 43 -20 26 -34 -47 -39 -97 -7 -181 -50 -253 -128 -71 -76 -99 -146 -101 -253 -2 -126 -43 -117 520 -117 304 0 475 -4 479 -10 3 -5 35 -10 70 -10 55 0 66 3 76 21 6 12 9 32 6 45 -3 16 4 31 20 46 l24 22 67 -67 c57 -57 73 -67 102 -67 l35 0 -85 85 -85 85 41 40 40 41 123 -126 c72 -74 131 -125 142 -125 47 0 12 52 -124 184 l-107 103 23 21 c15 14 36 22 60 22 49 0 77 28 77 77 0 35 -11 48 -158 195 -144 145 -161 158 -193 158 -47 0 -79 -33 -79 -83 0 -30 -8 -44 -42 -78 -24 -22 -62 -59 -85 -81 l-41 -40 -61 21 c-34 11 -84 21 -111 21 -60 0 -66 17 -14 45 65 35 144 151 144 214 0 15 16 39 46 67 44 41 46 45 41 85 -5 37 -2 44 24 66 38 32 40 80 4 113 -15 14 -28 43 -35 74 -24 115 -107 205 -227 247 -31 11 -66 27 -77 35 -31 21 -143 18 -186 -6z m150 -181 l0 -150 -52 3 -53 3 -3 134 c-1 74 0 141 2 148 4 8 24 13 56 13 l50 0 0 -151z m-152 -16 l-3 -128 -120 0 -120 0 3 30 c9 82 71 160 157 201 87 41 86 43 83 -103z m290 103 c86 -44 145 -121 154 -201 l3 -30 -117 -3 -118 -3 0 131 c0 148 -1 146 78 106z m207 -311 c0 -20 -8 -20 -389 -23 -235 -1 -394 2 -399 7 -5 5 -7 17 -4 25 6 15 49 16 399 14 385 -3 393 -3 393 -23z m-82 -84 c14 -6 28 -19 32 -31 9 -27 -18 -68 -47 -72 -19 -2 -24 -13 -35 -68 -17 -86 -56 -147 -117 -185 -42 -25 -62 -31 -128 -34 -161 -7 -249 62 -281 220 -11 53 -16 65 -35 67 -23 3 -52 37 -52 59 0 7 9 22 20 33 19 19 33 20 319 20 165 0 311 -4 324 -9z m444 -403 c103 -103 143 -149 141 -163 -7 -49 -40 -28 -184 116 -132 132 -156 164 -137 182 18 18 48 -4 180 -135z m-77 -83 l115 -115 -120 -120 -120 -120 -117 117 -118 118 117 117 c65 65 120 118 123 118 3 0 57 -52 120 -115z m-600 16 c0 -15 -9 -40 -21 -55 -45 -57 -139 -19 -139 55 l0 29 80 0 80 0 0 -29z m-205 -50 c3 -11 22 -34 41 -50 29 -26 43 -31 84 -31 41 0 55 5 84 31 19 16 38 39 41 50 5 13 15 19 37 19 29 0 30 -1 25 -42 -3 -24 -11 -60 -18 -80 l-14 -38 -172 0 -173 0 0 80 0 80 29 0 c21 0 32 -6 36 -19z m-115 -66 l0 -75 -40 0 -40 0 0 60 c0 59 1 61 33 75 17 8 35 14 40 15 4 0 7 -34 7 -75z m528 62 c22 -13 22 -14 4 -30 -24 -22 -52 -12 -52 19 0 27 14 30 48 11z m-658 -217 l0 -160 -59 0 c-40 0 -63 5 -71 15 -17 21 -4 117 24 180 23 51 80 125 97 125 5 0 9 -72 9 -160z m774 -20 c128 -126 149 -152 140 -167 -6 -9 -16 -19 -23 -21 -12 -4 -284 257 -302 291 -11 19 4 47 24 47 6 0 78 -67 161 -150z m-114 -45 l95 -95 -353 0 -352 0 0 95 0 95 258 0 257 0 95 -95z" />
                                </g>
                            </svg>
                        </i>
                        <div class="content">
                            <h4>Probate</h4>
                            <p> Probate can be an overwhelming process during a difficult time. Skaja, Daniels & Luu, LLP
                                provides compassionate guidance for estate administration, will contests, and trust
                                disputes, helping families navigate these matters efficiently and with care.</p>

                            <a href="{{route('probate')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="practice-area-item">
                        <i class="svvg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="60px" height="55px"
                                viewBox="0 0 53.000000 53.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,53.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path
                                        d="M140 505 c-7 -8 -18 -15 -26 -15 -7 0 -15 -4 -18 -9 -4 -5 3 -7 14 -4 19 5 20 0 20 -189 0 -138 3 -197 12 -206 9 -9 58 -11 173 -10 l160 2 -165 6 -165 5 0 210 0 210 130 3 131 3 34 -37 35 -36 -32 4 c-18 2 -30 1 -27 -4 3 -4 18 -8 34 -8 l30 0 3 -177 2 -178 3 180 2 181 -43 42 -43 42 -126 0 c-99 0 -128 -3 -138 -15z" />
                                    <path d="M198 483 c17 -2 47 -2 65 0 17 2 3 4 -33 4 -36 0 -50 -2 -32 -4z" />
                                    <path
                                        d="M67 452 c9 -6 13 -61 16 -197 l2 -190 3 198 c2 182 1 197 -15 197 -13 0 -14 -3 -6 -8z" />
                                    <path
                                        d="M42 244 c-1 -152 1 -213 10 -222 8 -8 60 -12 169 -12 127 0 159 3 169 15 7 8 18 15 26 15 7 0 15 3 17 8 3 4 -73 7 -168 7 -95 0 -171 -3 -168 -7 2 -5 70 -8 151 -8 100 0 143 -3 136 -10 -7 -7 -70 -9 -170 -8 l-159 3 -5 215 -6 215 -2 -211z" />
                                    <path d="M168 433 c6 -2 18 -2 25 0 6 3 1 5 -13 5 -14 0 -19 -2 -12 -5z" />
                                    <path d="M268 433 c18 -2 45 -2 60 0 15 2 0 4 -33 4 -33 0 -45 -2 -27 -4z" />
                                    <path d="M198 383 c18 -2 45 -2 60 0 15 2 0 4 -33 4 -33 0 -45 -2 -27 -4z" />
                                    <path d="M348 383 c23 -2 59 -2 80 0 20 2 1 4 -43 4 -44 0 -61 -2 -37 -4z" />
                                    <path d="M263 343 c26 -2 67 -2 90 0 23 2 2 3 -48 3 -50 0 -68 -1 -42 -3z" />
                                    <path d="M438 343 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z" />
                                    <path d="M178 293 c12 -2 30 -2 40 0 9 3 -1 5 -23 4 -22 0 -30 -2 -17 -4z" />
                                    <path d="M278 293 c17 -2 47 -2 65 0 17 2 3 4 -33 4 -36 0 -50 -2 -32 -4z" />
                                    <path d="M408 293 c12 -2 30 -2 40 0 9 3 -1 5 -23 4 -22 0 -30 -2 -17 -4z" />
                                    <path d="M198 243 c18 -2 45 -2 60 0 15 2 0 4 -33 4 -33 0 -45 -2 -27 -4z" />
                                    <path d="M348 243 c23 -2 59 -2 80 0 20 2 1 4 -43 4 -44 0 -61 -2 -37 -4z" />
                                    <path d="M183 153 c9 -2 23 -2 30 0 6 3 -1 5 -18 5 -16 0 -22 -2 -12 -5z" />
                                    <path d="M303 153 c32 -2 81 -2 110 0 29 2 3 3 -58 3 -60 0 -84 -1 -52 -3z" />
                                    <path d="M198 103 c23 -2 59 -2 80 0 20 2 1 4 -43 4 -44 0 -61 -2 -37 -4z" />
                                </g>
                            </svg>
                        </i>
                        <div class="content">
                            <h4>Estate Planning (wills and trusts)</h4>
                            <p>Planning for the future is essential to protect your family and ensure your wishes are
                                honored. At Skaja, Daniels & Luu, LLP, we craft wills, trusts, and other estate plans
                                tailored to your unique goals, offering peace of mind for generations to come. </p>
                            <a href="{{route('estate.planning')}}">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="practice-area-item">
                        <i class="svvg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="60px" height="55px"
                                viewBox="0 0 100.000000 100.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path
                                        d="M490 924 c0 -32 -27 -44 -98 -44 l-70 0 -40 -67 c-34 -59 -38 -71 -30 -96 15 -41 67 -64 108 -47 17 7 38 26 46 42 14 27 13 32 -16 83 l-31 55 51 0 c75 0 80 -9 80 -134 0 -99 -1 -106 -20 -106 -11 0 -20 -7 -20 -15 0 -12 13 -15 55 -15 42 0 55 3 55 15 0 8 -9 15 -20 15 -19 0 -20 7 -20 106 0 125 5 134 80 134 l52 0 -19 -32 c-11 -18 -25 -42 -33 -54 -28 -44 39 -114 96 -100 34 9 64 41 64 70 0 14 -17 52 -37 85 l-38 61 -70 0 c-73 0 -95 10 -95 42 0 10 -7 18 -15 18 -8 0 -15 -7 -15 -16z m30 -59 c0 -8 -7 -15 -15 -15 -8 0 -15 7 -15 15 0 8 7 15 15 15 8 0 15 -7 15 -15z m-162 -70 l22 -35 -45 0 c-25 0 -45 3 -45 6 0 10 34 64 40 64 3 0 15 -16 28 -35z m343 8 c7 -16 15 -31 17 -35 2 -5 -17 -8 -42 -8 l-45 0 20 35 c25 42 32 43 50 8z m-321 -83 c0 -20 -48 -34 -75 -22 -40 18 -29 32 25 32 28 0 50 -5 50 -10z m350 0 c0 -11 -33 -30 -53 -30 -8 0 -25 9 -38 20 l-24 19 58 1 c31 0 57 -4 57 -10z" />
                                    <path
                                        d="M156 606 c-69 -70 -87 -115 -66 -170 7 -21 7 -32 -1 -42 -12 -14 -3 -54 12 -54 5 0 21 -19 35 -42 25 -39 26 -43 9 -53 -64 -37 -114 -108 -115 -163 l0 -22 468 2 467 3 0 88 c0 87 0 89 -33 118 -22 20 -43 29 -67 29 -39 0 -48 22 -17 39 10 5 24 22 32 38 8 15 22 36 32 46 19 19 24 57 9 72 -6 6 -11 32 -13 60 -3 44 -7 51 -37 69 -47 27 -145 27 -192 0 -29 -17 -35 -27 -41 -70 -4 -27 -10 -65 -14 -86 -5 -30 -3 -38 15 -47 12 -7 21 -18 21 -26 0 -7 14 -27 30 -43 39 -40 38 -52 -6 -52 -29 0 -44 -7 -68 -33 -43 -46 -63 -37 -30 14 22 36 24 46 17 97 -9 66 -29 82 -103 82 -59 0 -90 -21 -90 -63 0 -18 -4 -39 -10 -47 -9 -14 8 -54 39 -92 12 -15 11 -18 -5 -24 -11 -3 -27 -10 -36 -15 -12 -6 -28 -3 -53 12 -19 12 -35 23 -35 24 0 12 47 82 62 93 18 13 24 43 11 55 -4 4 -6 32 -4 61 3 63 -16 107 -57 133 -15 10 -39 30 -54 45 -14 16 -31 28 -38 28 -6 0 -40 -29 -74 -64z m662 -103 l52 -6 0 -38 c0 -51 -18 -87 -51 -105 -34 -17 -50 -18 -84 -2 -37 17 -55 57 -55 122 0 67 19 85 60 55 14 -11 49 -22 78 -26z m-503 -63 c20 -16 19 -82 0 -120 -9 -16 -29 -37 -45 -45 -61 -32 -130 28 -130 114 0 47 8 58 39 53 16 -2 31 0 34 5 8 13 84 8 102 -7z m171 -65 c16 -8 41 -15 57 -15 23 0 27 -4 27 -29 0 -33 -25 -66 -57 -76 -35 -10 -73 34 -73 83 0 33 6 52 16 52 1 0 15 -7 30 -15z m310 -80 c4 -8 0 -22 -7 -31 -11 -13 -14 -13 -27 0 -17 17 -9 46 13 46 9 0 18 -7 21 -15z m-68 -54 c28 -35 32 -47 32 -100 l0 -61 -55 0 -55 0 0 49 c0 33 -6 56 -20 73 -21 27 -15 45 25 66 31 18 40 15 73 -27z m-448 -9 c0 -28 -56 -42 -78 -20 -21 21 -13 28 33 28 25 0 45 -4 45 -8z m240 -22 c0 -11 -7 -20 -15 -20 -8 0 -15 9 -15 20 0 11 7 20 15 20 8 0 15 -9 15 -20z m-353 -30 c35 -42 92 -42 135 0 41 42 60 27 56 -44 l-3 -51 -147 -3 c-160 -3 -164 -1 -137 51 11 22 59 77 67 77 2 0 15 -13 29 -30z" />
                                    <path d="M710 476 c0 -9 7 -16 16 -16 9 0 14 5 12 12 -6 18 -28 21 -28 4z" />
                                    <path d="M816 483 c-11 -11 -6 -23 9 -23 8 0 15 4 15 9 0 13 -16 22 -24 14z" />
                                    <path d="M762 444 c4 -21 22 -23 26 -1 2 10 -3 17 -13 17 -10 0 -15 -6 -13 -16z" />
                                    <path d="M745 389 c-7 -11 18 -22 40 -17 9 1 17 7 18 13 3 13 -51 17 -58 4z" />
                                    <path d="M165 401 c-3 -6 -5 -11 -3 -12 36 -8 49 -7 46 3 -6 17 -34 22 -43 9z" />
                                    <path d="M266 401 c-4 -5 -3 -11 1 -13 14 -7 33 -3 34 7 0 14 -28 19 -35 6z" />
                                    <path
                                        d="M220 340 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z" />
                                    <path d="M190 309 c0 -12 39 -21 66 -15 38 10 28 21 -21 22 -25 0 -45 -3 -45 -7z" />
                                </g>
                            </svg>
                        </i>
                        <div class="content">
                            <h4>Family law</h4>
                            <p>Family law cases require a careful balance of legal expertise and empathy. At Skaja, Daniels
                                & Luu, LLP, we provide comprehensive support for divorce, custody disputes, domestic
                                violence cases, and other family law matters, ensuring your rights are protected. </p>
                            <a href="{{route('family.law')}}">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="practice-area-item">
                        <i class="svvg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="60px" height="55px"
                                viewBox="0 0 161.000000 148.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,148.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path
                                        d="M704 1465 c-74 -20 -154 -58 -223 -104 -33 -23 -62 -41 -65 -41 -3 0 -17 11 -32 25 -15 14 -32 24 -38 22 -14 -5 -20 -227 -7 -240 14 -14 218 12 232 30 9 11 7 19 -11 38 -13 14 -22 27 -19 29 22 19 104 62 154 82 131 49 287 48 426 -2 79 -28 73 -30 109 38 27 50 25 65 -7 82 -83 42 -162 56 -317 55 -94 0 -170 -5 -202 -14z m281 -26 c97 -13 205 -46 205 -62 -1 -36 -16 -39 -81 -17 -90 31 -243 38 -341 16 -82 -18 -174 -59 -244 -107 -41 -28 -45 -35 -40 -60 5 -25 3 -29 -18 -29 -13 0 -38 -3 -55 -6 l-31 -6 0 58 c0 45 3 55 12 46 19 -19 30 -15 88 29 119 89 225 127 417 148 6 0 46 -4 88 -10z" />
                                    <path
                                        d="M167 1280 c-109 -13 -123 -33 -108 -163 6 -51 22 -200 36 -332 47 -447 56 -509 70 -532 17 -26 41 -30 115 -22 30 4 135 15 232 25 l177 18 19 -24 c14 -17 34 -25 77 -31 33 -4 60 -7 61 -6 1 1 4 11 8 23 6 19 1 22 -51 30 -53 8 -58 11 -61 37 -3 27 97 808 104 816 2 3 46 -1 97 -8 50 -7 193 -25 316 -41 123 -16 226 -32 229 -35 5 -5 -94 -792 -104 -827 -3 -9 -15 -18 -27 -20 -14 -2 -22 -10 -22 -23 0 -17 7 -20 45 -20 l45 0 7 50 c4 28 19 138 33 245 14 107 41 314 60 460 20 151 31 268 26 273 -5 5 -161 29 -347 53 l-338 45 -27 -20 c-35 -26 -39 -26 -39 -1 0 20 -34 29 -43 13 -2 -5 2 -64 10 -133 13 -122 13 -130 -17 -350 -16 -124 -32 -247 -36 -275 -9 -85 -7 -82 -92 -90 -42 -3 -155 -15 -251 -26 -96 -10 -177 -16 -180 -14 -5 5 -13 77 -61 533 -22 211 -28 297 -20 307 6 7 45 15 91 19 75 7 80 9 77 29 -4 26 -17 28 -111 17z m834 -75 c57 -8 194 -26 304 -40 110 -14 201 -27 202 -28 1 -2 0 -13 -4 -25 -7 -27 -2 -27 -193 -1 -85 11 -220 29 -299 39 -140 18 -165 28 -154 57 6 16 16 16 144 -2z m-308 -859 c-5 -22 -11 -25 -72 -31 -36 -4 -142 -15 -236 -25 -93 -10 -173 -16 -177 -14 -7 5 -12 43 -5 45 13 5 396 47 438 48 54 1 56 0 52 -23z" />
                                    <path
                                        d="M340 1028 c-37 -22 -64 -49 -85 -82 -27 -44 -30 -58 -30 -131 0 -73 3 -87 30 -131 45 -72 109 -108 200 -112 59 -3 80 0 116 18 93 47 140 122 140 223 0 149 -99 247 -249 247 -59 0 -75 -4 -122 -32z m258 -60 c29 -28 28 -38 -5 -38 -21 0 -34 9 -50 35 -13 19 -23 37 -23 40 0 10 56 -17 78 -37z m-112 -3 c15 -20 25 -38 22 -41 -3 -2 -29 -7 -58 -11 -52 -6 -52 -6 -45 18 10 32 33 69 45 69 5 0 21 -16 36 -35z m-121 -5 c-8 -16 -15 -36 -15 -45 0 -11 -10 -15 -36 -15 l-35 0 21 30 c21 30 58 60 72 60 5 0 2 -13 -7 -30z m299 -112 c13 -51 3 -68 -39 -68 -33 0 -35 2 -35 34 0 19 -3 41 -6 49 -4 11 2 17 23 20 43 6 47 3 57 -35z m-124 -27 l0 -49 -64 -7 c-36 -4 -69 -4 -75 0 -6 3 -11 26 -11 50 0 49 3 50 103 54 l47 1 0 -49z m-197 -18 c3 -27 4 -49 4 -50 -1 0 -18 -3 -37 -5 -33 -3 -35 -1 -44 33 -13 52 -3 69 37 69 34 0 35 -1 40 -47z m285 -105 c-13 -17 -35 -38 -48 -47 -22 -15 -22 -14 -15 9 20 66 24 70 56 70 l32 0 -25 -32z m-98 10 c0 -18 -38 -78 -48 -78 -5 0 -21 17 -36 38 l-26 37 22 7 c40 11 88 9 88 -4z m-137 -48 c14 -22 24 -40 21 -40 -10 0 -70 33 -86 48 -26 22 -22 32 10 32 22 0 34 -9 55 -40z" />
                                    <path
                                        d="M1060 981 c-72 -22 -139 -81 -166 -147 -18 -43 -18 -145 0 -188 20 -47 73 -104 119 -128 164 -83 360 38 360 222 0 64 -27 132 -69 174 -62 61 -167 90 -244 67z m-5 -87 c-15 -22 -31 -39 -36 -38 -5 1 -19 2 -31 3 l-21 1 24 26 c22 24 80 57 87 49 2 -1 -9 -20 -23 -41z m131 -31 c4 -13 5 -25 3 -27 -10 -7 -99 7 -99 17 0 5 12 26 27 45 l26 35 19 -23 c10 -12 21 -33 24 -47z m107 -13 l19 -31 -32 3 c-29 3 -34 8 -46 48 -8 25 -14 46 -14 48 0 12 59 -42 73 -68z m-286 -44 c0 -1 -1 -23 -4 -49 l-6 -48 -36 3 c-35 3 -36 4 -34 43 4 60 8 65 45 58 18 -3 34 -6 35 -7z m171 -22 c21 -4 23 -9 20 -52 l-3 -47 -50 3 c-87 4 -95 8 -95 46 0 69 13 74 128 50z m149 -30 c3 -9 2 -33 -3 -53 -8 -34 -11 -36 -44 -33 -19 2 -36 5 -37 5 0 1 1 23 4 50 5 46 6 47 40 47 22 0 36 -6 40 -16z m-311 -139 c7 -22 14 -44 14 -49 0 -12 -68 53 -82 77 -8 16 -6 18 22 15 27 -3 34 -9 46 -43z m147 16 c4 -4 -8 -25 -26 -46 l-34 -39 -16 24 c-9 14 -19 37 -22 52 l-7 28 48 -6 c27 -4 52 -10 57 -13z m117 -18 c8 -7 -52 -52 -84 -63 -27 -9 -28 -9 -14 13 8 12 21 32 29 44 10 17 19 21 39 16 14 -3 27 -8 30 -10z" />
                                    <path
                                        d="M475 515 c-60 -7 -125 -14 -142 -14 -26 -1 -33 -5 -33 -20 0 -11 4 -22 9 -26 5 -3 84 3 176 12 157 16 166 18 163 37 -4 26 -27 28 -173 11z" />
                                    <path
                                        d="M820 427 c0 -22 6 -26 40 -31 22 -3 58 -9 80 -12 38 -5 40 -4 40 19 0 23 -5 26 -52 32 -29 3 -65 8 -80 11 -25 5 -28 2 -28 -19z" />
                                    <path
                                        d="M1128 396 c-101 -15 -114 -28 -68 -67 l35 -29 -35 -30 c-49 -43 -184 -106 -255 -120 -120 -25 -236 -14 -352 31 -29 12 -56 18 -61 15 -17 -10 -63 -107 -56 -118 9 -14 87 -48 149 -64 62 -17 317 -18 383 -3 75 18 201 81 276 138 l69 52 23 -22 c38 -35 45 -16 42 112 l-3 114 -35 1 c-19 1 -70 -3 -112 -10z m102 -91 c0 -44 -3 -53 -15 -49 -9 4 -32 -10 -60 -35 -147 -135 -360 -205 -553 -181 -76 10 -212 48 -212 60 0 3 6 14 13 24 12 17 16 16 77 -5 56 -20 84 -23 200 -23 120 0 143 3 208 26 89 32 166 78 229 135 44 41 45 44 30 61 -24 26 -22 30 16 35 71 9 67 12 67 -48z" />
                                </g>
                            </svg>
                        </i>
                        <div class="content">
                            <h4>Immigration</h4>
                            <p>Immigration law is life-changing, and the stakes couldn’t be higher. From family petitions to
                                employment visas, temporary visas, and deportation defense, Skaja, Daniels & Luu, LLP offers
                                expert guidance tailored to your unique goals and circumstances. </p>
                            <a href="{{route('immigration')}}">Read More</a>
                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-lg-4">
                    <div class="practice-area-item">
                        <i class="svvg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="60px" height="55px"
                                viewBox="0 0 204.000000 192.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,192.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path d="M754 1585 c-7 -40 5 -61 31 -51 23 8 17 80 -7 84 -12 2 -19 -6 -24 -33z" />
                                    <path d="M891 1555 c-27 -31 -33 -65 -12 -65 12 0 81 75 81 88 0 24 -39 11 -69 -23z" />
                                    <path
                                        d="M652 1456 c-33 -31 -37 -40 -37 -83 0 -26 4 -56 9 -65 6 -13 4 -18 -7 -18 -8 0 -40 -11 -71 -25 -31 -14 -58 -25 -61 -25 -2 0 -25 18 -50 40 -52 45 -80 50 -119 19 -20 -15 -26 -29 -26 -58 0 -31 8 -44 48 -82 103 -100 114 -103 212 -63 50 20 65 23 71 12 5 -7 9 -54 9 -105 l0 -92 -98 -51 c-67 -34 -103 -58 -110 -75 -9 -20 -6 -56 14 -178 22 -131 29 -155 50 -174 43 -40 114 -23 128 30 3 13 -3 72 -13 133 -11 60 -18 109 -18 110 1 0 24 13 51 27 l48 27 -6 -28 c-3 -15 -9 -50 -12 -78 l-7 -52 93 -137 c52 -75 103 -143 114 -151 30 -21 64 -17 91 11 43 42 34 74 -55 205 l-79 117 30 109 c29 105 30 114 24 248 -5 126 -5 138 10 132 9 -3 29 -9 43 -12 15 -4 54 -35 87 -70 67 -71 93 -79 139 -43 20 15 26 29 26 57 0 32 -10 48 -68 111 -68 74 -69 75 -163 101 l-94 27 3 36 c6 80 -53 147 -131 147 -29 0 -46 -8 -75 -34z m142 -37 c14 -17 26 -37 26 -44 0 -53 -57 -101 -105 -89 -33 8 -65 50 -65 84 0 39 44 80 85 80 25 0 40 -8 59 -31z m-369 -184 l53 -46 83 37 c78 34 87 36 126 26 42 -12 99 -7 109 9 8 14 36 11 130 -16 85 -24 92 -28 152 -91 66 -70 75 -96 41 -115 -19 -10 -28 -5 -80 51 -52 54 -67 64 -125 80 -37 11 -71 17 -77 13 -6 -4 -7 -59 -3 -153 7 -145 7 -150 -24 -270 l-32 -122 81 -121 c45 -66 81 -129 81 -138 0 -10 -9 -23 -21 -29 -29 -16 -41 -3 -140 146 l-82 125 21 92 c13 57 17 96 11 102 -11 11 -177 -72 -186 -93 -3 -7 4 -63 15 -125 13 -73 16 -118 10 -129 -10 -21 -41 -24 -56 -6 -12 16 -63 284 -56 301 2 7 54 38 114 70 102 54 109 60 105 85 -2 15 -7 76 -10 137 -3 60 -9 113 -13 117 -5 5 -46 -7 -93 -27 -46 -19 -88 -35 -94 -35 -19 0 -135 111 -135 129 0 18 18 41 33 41 5 0 33 -20 62 -45z" />
                                    <path d="M918 1418 c-12 -9 -15 -18 -9 -27 12 -19 96 -3 96 19 0 20 -64 25 -87 8z" />
                                    <path
                                        d="M1090 920 c-11 -22 -27 -40 -34 -40 -8 0 -27 -15 -43 -34 -15 -18 -41 -36 -56 -40 -35 -8 -42 -27 -25 -63 9 -19 23 -30 43 -33 17 -3 30 -12 31 -20 2 -34 5 -40 25 -50 15 -8 29 -8 51 -1 40 14 60 -1 56 -42 -2 -24 -10 -33 -37 -42 -68 -22 -93 -91 -48 -133 40 -38 89 -26 98 22 3 13 17 23 39 29 19 5 50 20 69 34 32 25 35 25 90 13 31 -7 67 -22 81 -35 33 -31 72 -45 125 -45 51 0 58 -8 65 -74 6 -58 25 -75 66 -61 15 6 36 22 46 36 l20 26 -28 72 c-24 62 -34 75 -69 94 -51 28 -60 63 -18 72 94 20 130 67 111 143 -5 22 -18 48 -27 56 -16 15 -20 13 -42 -21 -13 -21 -40 -47 -60 -57 -36 -20 -36 -19 -82 2 -53 25 -164 57 -252 73 -77 13 -101 30 -109 72 -7 36 -40 87 -57 87 -5 0 -18 -18 -29 -40z m50 -69 c14 -52 48 -77 113 -86 81 -11 193 -42 257 -71 69 -31 112 -28 159 11 36 31 41 31 41 1 0 -30 -34 -56 -72 -56 -14 0 -38 -4 -51 -9 -22 -9 -24 -13 -17 -56 8 -50 19 -66 64 -89 20 -10 36 -32 52 -70 21 -52 21 -55 5 -70 -24 -22 -34 -20 -28 4 7 27 -10 85 -29 101 -9 7 -46 16 -82 20 -57 6 -70 11 -94 38 -15 17 -28 38 -28 46 0 18 -14 19 -39 3 -15 -9 -31 -9 -72 0 -51 12 -54 12 -73 -12 -24 -27 -57 -46 -82 -46 -24 0 -54 -29 -54 -52 0 -22 -13 -23 -30 -3 -19 23 -5 44 45 65 74 32 84 92 25 152 -24 24 -33 27 -49 18 -30 -15 -50 -12 -27 5 31 23 13 42 -48 49 -53 7 -79 26 -36 26 13 0 28 13 41 35 12 19 32 38 45 41 14 4 29 15 35 25 14 26 17 24 29 -20z" />
                                </g>
                            </svg>
                        </i>
                        <div class="content">
                            <h4>Personal Injury</h4>
                            <p>When you’ve been injured due to someone else’s negligence, you deserve an advocate who will
                                fight tirelessly for your recovery. At Skaja, Daniels & Luu, LLP, we provide personalized
                                attention and zealous advocacy to help clients secure compensation for car accidents,
                                slip-and-falls, dog bites, and other injury-related claims. </p>
                            <a href="{{route('personal.injury')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- comment section -->
                <div class="col-md-6 col-lg-4">
                    <div class="practice-area-item">
                        <i class="svvg">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="60px" height="55px"
                                viewBox="0 0 100.000000 100.000000" preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path
                                        d="M255 848 c4 -13 10 -87 12 -165 4 -111 8 -143 18 -143 19 0 26 271 8 283 -37 23 4 27 282 27 196 0 295 -3 295 -10 0 -6 -6 -13 -12 -15 -10 -4 -12 -79 -10 -340 l3 -335 -101 0 c-83 0 -100 -3 -100 -15 0 -13 17 -15 113 -13 l112 3 6 350 c3 193 9 360 13 373 l8 22 -327 0 -327 0 7 -22z" />
                                    <path
                                        d="M340 810 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                                    <path
                                        d="M390 810 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                                    <path
                                        d="M440 810 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                                    <path
                                        d="M490 810 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                                    <path
                                        d="M540 810 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                                    <path
                                        d="M590 810 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                                    <path
                                        d="M640 810 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                                    <path
                                        d="M690 810 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                                    <path
                                        d="M740 810 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                                    <path
                                        d="M790 810 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                                    <path
                                        d="M350 700 l0 -50 65 0 65 0 0 50 0 50 -65 0 -65 0 0 -50z m100 -5 c0 -22 -4 -25 -35 -25 -31 0 -35 3 -35 25 0 22 4 25 35 25 31 0 35 -3 35 -25z" />
                                    <path
                                        d="M510 700 l0 -50 65 0 65 0 0 50 0 50 -65 0 -65 0 0 -50z m100 -5 c0 -22 -4 -25 -35 -25 -31 0 -35 3 -35 25 0 22 4 25 35 25 31 0 35 -3 35 -25z" />
                                    <path
                                        d="M670 700 l0 -50 65 0 65 0 0 50 0 50 -65 0 -65 0 0 -50z m100 -5 c0 -22 -4 -25 -35 -25 -31 0 -35 3 -35 25 0 22 4 25 35 25 31 0 35 -3 35 -25z" />
                                    <path
                                        d="M350 570 c0 -20 5 -30 15 -30 8 0 15 7 15 15 0 10 11 15 35 15 24 0 35 -5 35 -15 0 -8 7 -15 15 -15 10 0 15 10 15 30 l0 30 -65 0 -65 0 0 -30z" />
                                    <path
                                        d="M510 570 c0 -20 5 -30 15 -30 8 0 15 7 15 15 0 10 11 15 35 15 24 0 35 -5 35 -15 0 -8 7 -15 15 -15 10 0 15 10 15 30 l0 30 -65 0 -65 0 0 -30z" />
                                    <path
                                        d="M670 550 l0 -50 65 0 65 0 0 50 0 50 -65 0 -65 0 0 -50z m100 -5 c0 -22 -4 -25 -35 -25 -31 0 -35 3 -35 25 0 22 4 25 35 25 31 0 35 -3 35 -25z" />
                                    <path
                                        d="M107 503 c-10 -10 -8 -48 3 -59 5 -5 11 -79 12 -164 l3 -155 250 0 250 0 3 150 c1 84 7 159 13 171 6 12 9 30 7 40 -3 18 -18 19 -269 22 -146 1 -268 -1 -272 -5z m513 -28 c0 -8 -4 -15 -10 -15 -6 0 -10 -58 -10 -155 l0 -155 -125 0 -125 0 0 110 0 110 -75 0 -75 0 0 -110 0 -110 -25 0 -25 0 0 155 c0 97 -4 155 -10 155 -5 0 -10 7 -10 15 0 13 34 15 245 15 211 0 245 -2 245 -15z m-300 -225 l0 -100 -45 0 -45 0 0 100 0 100 45 0 45 0 0 -100z" />
                                    <path
                                        d="M160 450 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z" />
                                    <path
                                        d="M210 450 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z" />
                                    <path
                                        d="M260 450 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z" />
                                    <path
                                        d="M310 450 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z" />
                                    <path
                                        d="M360 450 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z" />
                                    <path
                                        d="M410 450 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z" />
                                    <path
                                        d="M460 450 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z" />
                                    <path
                                        d="M510 450 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z" />
                                    <path
                                        d="M560 450 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z" />
                                    <path
                                        d="M400 295 l0 -75 75 0 75 0 0 75 0 75 -75 0 -75 0 0 -75z m118 5 l0 -47 -43 0 -43 0 0 47 0 47 43 0 43 0 0 -47z" />
                                    <path
                                        d="M460 300 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z" />
                                    <path
                                        d="M290 250 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                                    <path
                                        d="M670 400 l0 -50 65 0 65 0 0 50 0 50 -65 0 -65 0 0 -50z m100 -5 c0 -22 -4 -25 -35 -25 -31 0 -35 3 -35 25 0 22 4 25 35 25 31 0 35 -3 35 -25z" />
                                    <path
                                        d="M670 250 l0 -50 65 0 65 0 0 50 0 50 -65 0 -65 0 0 -50z m100 -5 c0 -22 -4 -25 -35 -25 -31 0 -35 3 -35 25 0 22 4 25 35 25 31 0 35 -3 35 -25z" />
                                </g>
                            </svg>
                        </i>
                        <div class="content">
                            <h4>Employment Law</h4>
                            <p>Navigating the workplace can be challenging, whether you’re an employee dealing with unfair
                                treatment or an employer managing a team. At Skaja, Daniels & Luu, LLP, we bring a balanced
                                perspective to employment law, representing both employees and employers in litigation while
                                also offering compliance services to help businesses avoid costly disputes.</p>
                            <a href="{{route('employment.law')}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- :: History -->
    <section class="history"></section>

    <!-- :: Contact -->
    <section class="contact ">
        {{-- <div class="overlay"></div> --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="sec-title text-center">
                        <h3>Request a Free Appointment Today</h3>
                        <p>Call or request a free appointment today. We would love to hear from you no matter
                            how big or
                            small your case may seem.</p>
                        <a class="btn-1 btn-3"
                            href="https://skaja-daniels-lister-permito-llp.mycase.com/contact_us/1iSPUXhG5p4ABzErBH85a1zC">REQUEST
                            A FREE CASE REVIEW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- :: Provide -->
    <section class="provide">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-box">
                        <div class="sec-title">
                            <h2 style="color: white;">Why Choose Us</h2>
                            <h3>Why You Can Trust Us, Our Values</h3>
                            <p>Skaja, Daniels & Luu offers an experienced team of dedicated professionals
                                focused on
                                client’s needs and rights. For fifteen years, we have provided solutions to the
                                unique needs
                                of our clients.
                                <br>
                                Allow our staff to take care of your needs and facilitate your success.
                                <br>
                                Skaja, Daniels & Luu is a general practice law firm, guided by the ideal that
                                everyone has
                                the right to seek justice and legal remedies. We represent clients who value
                                constructive
                                and equitable solutions, honesty and integrity.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <div class="img-provide"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- :: Testimonial -->
    <section class="testimonial">
        <div class="container">

            <div class="row">
                <h3 class="testihead">Yelp Reviews</h3>
                <div class="col-md-10 offset-md-1">
                    <div class="elfsight-app-d0522c77-b6d2-432b-9aa6-6c0e5c312152" data-elfsight-app-lazy></div>


                </div>
            </div>
            <div class="row">
                <h3 class="testihead">Google Reviews</h3>
                <div class="col-md-10 offset-md-1">
                    <div class="elfsight-app-4a045a1c-2cc4-4890-bd1d-2bc4956c017f" data-elfsight-app-lazy></div>


                </div>
            </div>
        </div>
    </section>

@endsection

@push('custom-script')

@endpush