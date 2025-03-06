<!-- :: Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="logo">
                    <a href="{{route('home')}}">
                        @php
                            $logo = getSiteSettings('logo');
                            $description = getSiteSettings('footer_content');
                        @endphp
                        <img class="img-fluid" src="{{asset($logo->logo)}}" alt="Footer Logo">
                        {{-- <img class="img-fluid" src="{{asset('user/assets/images/logo/tri.png')}}"
                            alt="Footer Logo"> --}}
                    </a>
                    <p>
                        {{-- @dd($description) --}}
                        {{ $description->footer_content ?? '' }}
                    </p>
                    {{-- <p>Assisting our clients in determining their goals and objectives, and providing affordable,
                        effective litigation and representation.</p> --}}
                </div>
                <div class="footer-title">
                    <h4></h4>
                </div>
                <ul class="links footer2">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('meet.out.team')}}">Meet Our Team</a></li>
                    <li><a href="{{route('practice.areas')}}">Practice Area</a></li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="{{route('contact.us')}}">Contact</a></li>
                </ul>
                <div class="logo">
                    @php
                        $fb = getSocialLinks('facebook');
                        $insta = getSocialLinks('instagram');
                        $x = getSocialLinks('twitter');
                        $map = getSocialLinks('google_map');
                        $yelp = getSocialLinks('yelp');
                        $linkedin = getSocialLinks('linkedin');
                        // dd($fb->link);
                    @endphp
                    <ul class="icon-follow">
                        <li>
                            {{-- <a class="icon" href="https://maps.app.goo.gl/hnL4tLa2hMbgyZZ48"> --}}
                                <a class="icon" href="{{$map->link ?? "#"}}">
                                    <i class="fab fa-google"></i></a>
                        </li>
                        <li>
                            {{-- <a class="icon" href="https://www.facebook.com/profile.php?id=100054599433668"> --}}
                                <a class="icon" href="{{$fb->link ?? "#"}}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                        </li>
                        <li>
                            <a class="icon" href="{{$insta->link ?? "#"}}">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="icon" href="{{$yelp->link ?? "#"}}">
                                {{-- <a class="icon" href="https://www.yelp.com/biz/skaja-and-daniels-escondido"> --}}
                                    <i class="fab fa-yelp"></i>
                                </a>
                        </li>
                        <li>
                            <a class="icon" href="{{$x->link ?? "#"}}">
                                {{-- <a class="icon" href="https://x.com/skajadaniels"> --}}
                                    <i class="fa-solid fa-x"></i>
                                </a>
                        </li>
                        <li>
                            <a class="icon" href="{{$linkedin->link ?? "#"}}">
                                {{-- <a class="icon" href="https://www.linkedin.com/company/skaja-daniels-llp/"> --}}
                                    <i class="fab fa-linkedin"></i>
                                </a>
                        </li>
                    </ul>
                </div>

                <div class="new-address">
                    @php
                        $phone = getSiteSettings('phone');
                        $address = getSiteSettings('address');
                        $copyright = getSiteSettings('footer_copyright');
                    @endphp
                    <ul>
                        <li>
                            <p>{{ $address ? $address->footer_address : ' ' }}</p>
                            {{-- <p>960 Canterbury Pl, Ste 110, Escondido CA</p> --}}
                        </li>
                        <li>|
                            {{-- <a href="tel:+17607813464">760-781-3464</a> --}}
                            <a href="tel:{{ $phone ? $phone->phone : '' }}">
                                {{ $phone ? $phone->phone : '' }}
                            </a>
                        </li>
                    </ul>
                </div>

            </div>


        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; {{date('Y')}}. {{$copyright->footer_copyright ?? " "}}</p>
            {{-- <p>Copyright @ 2025. All Rights Reserved</p> --}}
        </div>
    </div>
</footer>

<!-- :: Scroll UP -->
<div class="scroll-up">
    <a href="#page" class="move-section">
        <i class="fas fa-long-arrow-alt-up"></i>
    </a>
</div>