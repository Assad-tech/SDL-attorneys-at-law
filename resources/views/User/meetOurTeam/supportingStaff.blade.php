@extends('User.layout.app')
@push('title', 'Supporting Staff')
@push('styles')

@endpush
@section('content')
    <!-- :: Breadcrumb Header -->
    {{-- <section class="breadcrumb-header" id="page"
        style="background-image: url({{asset('user/assets/images/home/banner.jpg')}})"> --}}
        <section class="breadcrumb-header" id="page" style="background-image: url({{asset($banner->staff_banner)}})">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner">
                            <h1>Supporting Staff</h1>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>Supporting Staff</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- @dd($allStaff) --}}
        @foreach ($allStaff as $staff)

            <section class="single-advisors py-100 ">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="advisors-box">
                                <h3 class="text-center">{{$staff->staff_fullname}}</h3>
                                <div class="img-box">
                                    <img class="img-fluid" src="{{asset($staff->staff_image)}}" alt="01 advisors">
                                    <div class="img-box-hover">
                                        <ul>
                                            <li><a href="{{$staff->staff_fb}}"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{$staff->staff_insta}}"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="{{$staff->staff_yelp}}"><i class="fab fa-yelp"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-box text-center">
                                    <!--<h5>QUYNH NGUYEN</h5>-->
                                    <span>{{$staff->type}}</span>
                                </div>
                            </div>
                            <!-- <div class="brochures">-->
                            <!--    <h5>Our Brochures</h5>-->
                            <!--    <p>Lorem Ipsum simply dummy text of the printing typesetting industry.</p>-->
                            <!--    <a href="#" class="btn-1">Download CV</a>-->
                            <!--</div> -->
                        </div>

                        <div class="col-md-8">
                            <div class="introduction-advisors">
                                <H3>Education</H3>
                                <p>{{$staff->staff_education}}</p>
                                <h3>Professional Affiliations</h3>
                                <p>{{$staff->staff_professional_aff}}</p>
                                <h3>Biography</h3>
                                <p>{{$staff->staff_bio}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        @endforeach
        
        <!--team1-->
        <section class="single-advisors py-100 ">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="advisors-box">
                            <h3 class="text-center">MICHELLE TRAYER</h3>
                            <div class="img-box">
                                <img class="img-fluid" src="{{asset('user/assets/images/advisors/MICHELLE L. TAYLOR.jpg')}}"
                                    alt="01 advisors">
                                <div class="img-box-hover">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-yelp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box text-center">
                                <!--<h5>QUYNH NGUYEN</h5>-->
                                <span>PARALEGAL</span>
                            </div>
                        </div>
                        <!-- <div class="brochures">-->
                        <!--    <h5>Our Brochures</h5>-->
                        <!--    <p>Lorem Ipsum simply dummy text of the printing typesetting industry.</p>-->
                        <!--    <a href="#" class="btn-1">Download CV</a>-->
                        <!--</div> -->
                    </div>

                    <div class="col-md-8">
                        <div class="introduction-advisors">
                            <H3>Education</H3>
                            <p>Watterson College, Ventura CA – Paralegal Certificate.</p>
                            <h3>Professional Affiliations</h3>
                            <p>Notary Public</p>
                            <h3>Biography</h3>
                            <p>Michelle Trayer is a seasoned paralegal with over 35 years of experience specializing in
                                Family
                                Law and Civil Litigation. Known for her exceptional case management skills, she ensures
                                deadlines are met and cases are handled efficiently. Michelle excels in drafting legal
                                documents, organizing complex case information, managing files, and preparing cases for
                                trial.
                                She is also a Notary Public for the State of California and is highly valued for her
                                meticulous
                                attention to detail. Michelle takes great pride in her work and has found her professional
                                home
                                with Skaja, Daniels & Luu, LLP.</p>
                            <p>Born and raised in North County San Diego, Michelle and her husband, Rick, have been happily
                                married for 31 years and are proud parents of four sons. Outside of work, Michelle enjoys
                                traveling, camping, and cherishing quality time with her family and friends.</p>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--team2-->
        <section class="single-advisors py-100 ">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="advisors-box">
                            <h3 class="text-center">QUYNH NGUYEN</h3>
                            <div class="img-box">
                                <img class="img-fluid" src="{{asset('user/assets/images/advisors/QYUNH NGUYEN.png')}}"
                                    alt="01 advisors">
                                <div class="img-box-hover">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-yelp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box text-center">
                                <!--<h5>QUYNH NGUYEN</h5>-->
                                <span>SUPPORT STAFF</span>
                            </div>
                        </div>
                        <!-- <div class="brochures">-->
                        <!--    <h5>Our Brochures</h5>-->
                        <!--    <p>Lorem Ipsum simply dummy text of the printing typesetting industry.</p>-->
                        <!--    <a href="#" class="btn-1">Download CV</a>-->
                        <!--</div> -->
                    </div>

                    <div class="col-md-8">
                        <div class="introduction-advisors">

                            <h3>Education</h3>
                            <p>Grossmont College – Business Major Degree and Business Associate’s Degree. </p>
                            <h3>Professional Affiliations</h3>
                            <p>Notary Public</p>
                            <h3>Biography</h3>
                            <p>Quynh Nguyen is a highly skilled paralegal with over 15 years of experience specializing in
                                immigration law. Fluent in Vietnamese, she effectively bridges communication gaps, providing
                                personalized and culturally sensitive support to clients. Quynh has worked closely with
                                immigration attorneys on various cases, and she also assists with family law and personal
                                injury
                                matters. Her dedication to client service ensures that all clients, regardless of their
                                legal
                                needs, receive the highest level of care and attention.</p>
                            <p>In addition to her legal expertise, Quynh enjoys a fulfilling personal life. She has a
                                12-year-old child and enjoys activities like hiking, going to the gym, and spending quality
                                time
                                with her family. Quynh is also passionate about cooking and watching sports with her loved
                                ones,
                                making family time a priority.</p>

                        </div>
                    </div>


                </div>


            </div>
        </section>

        <!--team3-->
        <section class="single-advisors  ">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="advisors-box">
                            <h3 class="text-center">ANGELIQUE RAINES</h3>
                            <div class="img-box">
                                <img class="img-fluid" src="{{asset('user/assets/images/advisors/ANGELIQUE RAINES.jpg')}}"
                                    alt="01 advisors">
                                <div class="img-box-hover">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-yelp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box text-center">
                                <!--<h5>ANGELIQUE RAINES</h5>-->
                                <span>SUPPORT STAFF</span>
                            </div>
                        </div>
                        <!-- <div class="brochures">-->
                        <!--    <h5>Our Brochures</h5>-->
                        <!--    <p>Lorem Ipsum simply dummy text of the printing typesetting industry.</p>-->
                        <!--    <a href="#" class="btn-1">Download CV</a>-->
                        <!--</div> -->
                    </div>


                    <div class="col-md-8">
                        <div class="introduction-advisors">
                            <h3>Education</h3>
                            <p>Mira Costa Collage – Associate’s in Business Administration.</p>
                            <p>Point Loma Nazarene University – Bachelor’s Degree in Business Administration.</p>
                            <p>University of San Diego – Paralegal Certificate. </p>
                            <h3>Professional affiliations</h3>
                            <p>National Society of Leadership & Success. </p>
                            <h3>Biography</h3>
                            <p>Angelique Raines earned a bachelor’s degree in business administration from Point Loma
                                Nazarene
                                University and is currently completing her paralegal certificate at the University of San
                                Diego.
                                With 18 years of experience in the financial sector, she spent 13 years at Wells Fargo,
                                advancing from teller to manager, where she developed expertise in customer service,
                                leadership,
                                and quality control. She then transitioned to Silvergate Bank, working for 5 years with
                                fintech
                                clients worldwide, gaining valuable experience in international business operations and
                                financial technology.</p>
                            <p>Angelique will officially become paralegal in January, leveraging her extensive background in
                                business and finance to support the firm’s clients and team. Her expertise in managing
                                complex
                                operations and fostering strong client relationships allows her to bring a fresh, valuable
                                perspective to the legal field. In her free time, Angelique enjoys curling up with a good
                                book,
                                crocheting unique handmade creations, and spending quality time at home with her family and
                                dogs. A passionate Disney enthusiast, she delights in visiting the parks to immerse herself
                                in
                                the magic and create cherished memories.</p>
                        </div>
                    </div>




                </div>


            </div>
            </div>
            </div>
        </section>

        <!--team4-->
        <section class="single-advisors py-100 ">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="advisors-box">
                            <h3 class="text-center">KARLA MENDOZA </h3>
                            <div class="img-box">
                                <img class="img-fluid" src="{{asset('user/assets/images/advisors/KARLA MENDOZA.jpg')}}"
                                    alt="01 advisors">
                                <div class="img-box-hover">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-yelp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box text-center">
                                <!--<h5>QUYNH NGUYEN</h5>-->
                                <span>SUPPORT STAFF</span>
                            </div>
                        </div>
                        <!-- <div class="brochures">-->
                        <!--    <h5>Our Brochures</h5>-->
                        <!--    <p>Lorem Ipsum simply dummy text of the printing typesetting industry.</p>-->
                        <!--    <a href="#" class="btn-1">Download CV</a>-->
                        <!--</div> -->
                    </div>

                    <div class="col-md-8">
                        <div class="introduction-advisors">
                            <H3>Education</H3>
                            <p>Cal State San Marcos – Bachelor’s Degree in Spanish, Political Science and Paralegal
                                Certification. </p>
                            <h3>Professional Affiliations</h3>
                            <p>NALA</p>
                            <h3>Biography</h3>
                            <p>Karla Mendoza has been a paralegal at Skaja, Daniels & Luu, LLP for three years. She is
                                fluent in
                                Spanish; therefore, she can effectively assist and communicate with Spanish speaking
                                clients.
                                Karla has assisted attorneys in estate planning, probate, and civil litigation matters.</p>
                            <p>Outside of work, Karla likes to spend time with her family and friends. She enjoys learning
                                new
                                baking recipes and spending time in nature. </p>


                        </div>
                    </div>


                </div>


            </div>
            </div>
            </div>
        </section>

        <!--team5-->
        <section class="single-advisors py-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="advisors-box">
                            <h3 class="text-center">ANA CALDERON </h3>
                            <div class="img-box">
                                <img class="img-fluid" src="{{asset('user/assets/images/advisors/ana.png')}}"
                                    alt="01 advisors">
                                <div class="img-box-hover">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-yelp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box text-center">
                                <!--<h5>ROBERT M DANIELS</h5>-->
                                <span>Support Staff</span>
                            </div>
                        </div>
                        <!-- <div class="brochures">-->
                        <!--    <h5>Our Brochures</h5>-->
                        <!--    <p>Lorem Ipsum simply dummy text of the printing typesetting industry.</p>-->
                        <!--    <a href="#" class="btn-1">Download CV</a>-->
                        <!--</div> -->
                    </div>
                    <div class="col-md-8">
                        <div class="introduction-advisors">
                            <h3>Professional affiliations</h3>
                            <p>Escondido Chamber of Commerce – Ambassador </p>
                            <h3>Biography</h3>
                            <p>Ana Calderon is a dedicated legal assistant at Skaja, Daniels & Luu, LLP, where she supports
                                the
                                firm's personal injury and immigration attorneys by maintaining effective communication with
                                clients. She plays a vital role in connecting with diverse clients, particularly within the
                                Latino/Hispanic community, fostering strong relationships to make legal services accessible
                                and
                                welcoming. Her bilingual skills and cultural insight enable her to bridge language and
                                cultural
                                barriers, ensuring exceptional client care.</p>
                            <p>In addition to her legal support role, Ana manages the firm's social media presence, keeping
                                the
                                community informed about events and updates. Passionate about community engagement, she
                                actively
                                volunteers to make a positive local impact. Outside of work, Ana enjoys camping, traveling,
                                exploring local events and restaurants, and spending quality time with family and friends.
                            </p>
                            <!--<p>Ana Calderon is a dedicated legal assistant at Skaja, Daniels & Luu, LLP, recognized for her exceptional organizational skills and steadfast commitment to client support. In her role, Ana focuses on assisting the firm's attorneys by maintaining effective communication with clients and ensuring the smooth operation of the office.</p>-->
                            <!--<p>Ana is instrumental in connecting with diverse clients, particularly within the Latino/Hispanic community. She is passionate about fostering strong relationships to make legal services more accessible. Her bilingual skills and dedication to community engagement allow her to bridge cultural and language barriers effectively. Ana also manages Skaja, Daniels & Luu’s social media presence, keeping the community informed about events and updates.Outside of work, Ana enjoys camping, traveling, exploring local events and restaurants, and spending quality time with family and friends. She is also actively involved in volunteering within her community</p>-->
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
        <!--team6-->
        <section class="single-advisors py-100 ">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="advisors-box">
                            <h3 class="text-center">JANET REYES </h3>
                            <div class="img-box">
                                <img class="img-fluid" src="{{asset('user/assets/images/advisors/janet-reyes.jpg')}}"
                                    alt="01 advisors">
                                <div class="img-box-hover">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-yelp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box text-center">
                                <span>OFFICE FIRM MANAGER</span>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-8">
                        <div class="introduction-advisors">
                            <H3>Education</H3>
                            <p>Palomar College – Associate’s Degree. </p>
                            <!--<h3>Professional Affiliations</h3>-->
                            <!--<p>Office Firm Manager – Skaja, Daniels & Luu</p>-->
                            <!--<p>Receptionist/Data Entry – Richard King, CPA</p>-->
                            <!--<p>Lead Teller – Wells Fargo</p>-->
                            <h3>Biography</h3>
                            <p>Janet, who has many years of customer service experience, understands how to make essential
                                decisions while empathizing with each client she meets. Her ability to multitask in a
                                variety of
                                professional settings has made her the 'go-to' person for getting the job done and ensuring
                                the
                                smooth operation of the office. Janet has demonstrated her ability to wear multiple
                                administrative hats by handling the department for both accounts receivable and accounts
                                payable, as well as working directly with each attorney and their client. </p>
                            <p>Outside of work, Janet enjoys visiting different cities, discovering their activities,
                                communities, and trying new eateries. She enjoys spending time with family and friends and
                                creating the most unforgettable experiences with them.</p>

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