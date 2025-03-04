<!-- :: Navs -->
<header class="navs">
    <div class="nav-top">
        <div class="container">
            <div class="nav-top-box d-flex align-items-center justify-content-between">
                <ul class="info">
                    <!--<li><span>Email :</span> <a href="mailto:info@gmail.com">Info@gmail.com</a> </li>-->
                    <!--<li><span>Phone :</span><a href="tel:7607813464">760-781-3464</a></li>-->
                </ul>
                <ul class="icon-follow">
                    <li><a class="icon" href="https://maps.app.goo.gl/hnL4tLa2hMbgyZZ48"><i
                                class="fab fa-google"></i></a></li>
                    <li><a class="icon" href="https://www.facebook.com/profile.php?id=100054599433668"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a class="icon" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="icon" href="https://www.yelp.com/biz/skaja-and-daniels-escondido"><i
                                class="fab fa-yelp"></i></a></li>
                    <li><a class="icon" href="https://x.com/skajadaniels"><i class="fa-solid fa-x"></i></a></li>
                    <li><a class="icon" href="https://www.linkedin.com/company/skaja-daniels-llp/"><i
                                class="fab fa-linkedin"></i></a></li>


                    <li><a class="btn-1 btn-2"
                            href="https://skaja-daniels-lister-permito-llp.mycase.com/contact_us/1iSPUXhG5p4ABzErBH85a1zC">REQUEST
                            A FREE CASE REVIEW</a></li>

                    <li><a class="btn-1 btn-2" href="https://www.mycase.com/login/">MyCase Login</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- :: Navbar -->
    <nav class="nav-bar">
        <div class="container">
            <div class="box-content d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a href="{{route('home')}}" class="logo-nav">
                        <img class="img-fluid one" src="{{asset('user/assets/images/logo/tri.png')}}" alt="01 Logo">
                        <img class="img-fluid two" src="{{asset('user/assets/images/logo/tri.png')}}" alt="02 Logo">
                    </a>
                    <a href="#open-nav-bar-menu" class="open-nav-bar"> <i class="fa-solid fa-bars"></i> </a>
                </div>
                <div class="nav-bar-link" id="open-nav-bar-menu">
                    <ul class="level-1">
                        <li>
                            <a href="{{route('home')}}">Home</a>

                        </li>
                        <li class="has-menu">
                            <a href="#">Meet Our Team <i class="fa-solid fa-caret-down"></i></a>
                            <ul class="level-2 nav-bold ">
                                <li>
                                    <a href="{{route('attorneys')}}">Attorneys</a>
                                </li>
                                <li>
                                    <a href="{{route('supporting.staff')}}">Supporting Staff</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-menu">
                            <a href="practice-areas.php">Practice Areas <i class="fa-solid fa-caret-down"></i></a>
                            <ul class="level-2 scroll-new1 nav-bold">
                                <li>
                                    <a href="{{route('business.and.corporate.law')}}">Business & Corporate Law and Formations</a>
                                </li>
                                <li>
                                    <a href="{{route('civil.litigation')}}">Civil Litigation</a>
                                </li>
                                <li>
                                    <a href="{{route('construction.contactor.law')}}">Construction, Contractor, and Disability (ADA) Law</a>
                                </li>
                                <li>
                                    <a href="{{route('criminal.law')}}">Criminal Law</a>
                                </li>
                                <li><a href="{{route('probate')}}">Probate</a></li>
                                <li><a href="{{route('estate.planning')}}">Estate Planning (wills and trusts)</a></li>
                                <li><a href="{{route('family.law')}}">Family law</a></li>
                                <li><a href="{{route('immigration')}}">Immigration</a></li>
                                <li><a href="{{route('personal.injury')}}">Personal Injury</a></li>
                                <li><a href="{{route('employment.law')}}">Employment Law</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{route('blog')}}">Blog</a>

                        </li>
                        <li><a href="{{route('contact.us')}}">Contact</a></li>
                    </ul>
                </div>
                <div class="info-nav">
                    <i class="flaticon-call"></i>
                    <div class="contact-nav">
                        <p><a href="tel:+17607813464">760-781-3464</a></p>
                        <span>Call Us For Consultation</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- :: Search Box -->
<div class="search-box">
    <form>
        <input type="search" placeholder="Search Here..">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
    <i class="fas fa-times close-search"></i>
</div>

<!-- :: Menu Box -->
<div class="menu-box">
    <div class="inner-menu">
        <div class="website-info">
            <a href="#" class="logo"><img class="img-fluid" src="{{asset('user/assets/images/logo/02_logo.png')}}"
                    alt="02 Logo"></a>
            <p>Decision Are A Professional Attorney &amp; Lawyers Services Provider Institutions. Suitable For Law Firm,
                Injury Law, Traffic Ticket Attorney, Legacy And More.</p>
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <div class="contact-box">
                <i class="flaticon-call"></i>
                <div class="box">
                    <p>+(002) 0121-2843-661</p>
                    <p>+(002) 0106-8710-594</p>
                </div>
            </div>
            <div class="contact-box">
                <i class="flaticon-email"></i>
                <div class="box">
                    <p>AR-Coder@arcoder.com</p>
                    <p>Support@arcoder.com</p>
                </div>
            </div>
            <div class="contact-box">
                <i class="flaticon-location"></i>
                <div class="box">
                    <p>Menouf City , El-Menoufia, Egypt.</p>
                    <p>Shibin El-Kom , El-Menoufia, Egypt.</p>
                </div>
            </div>
        </div>
        <div class="follow-us">
            <h4>Follow Us</h4>
            <ul class="icon-follow">
                <li><a href="https://www.facebook.com/profile.php?id=100054599433668"><i
                            class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a class="icon" href="https://www.yelp.com/biz/skaja-and-daniels-escondido"><i
                            class="fab fa-yelp"></i></a></li>
                <li><a class="icon" href="https://maps.app.goo.gl/hnL4tLa2hMbgyZZ48"><i class="fab fa-google"></i></a>
                </li>
                <li><a class="icon" href="https://x.com/skajadaniels"><i class="fab fa-twitter"></i></a></li>
                <li><a class="icon" href="https://www.linkedin.com/company/skaja-daniels-llp/"><i
                            class="fab fa-linkedin"></i></a></li>

            </ul>
        </div>
        <div class="exit-menu-box">
            <i class="fas fa-times"></i>
        </div>
    </div>
</div>