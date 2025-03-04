@extends('User.layout.app')
@push('title', 'Employment Law')
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
                        <p>At Skaja, Daniels & Luu, LLP, we provide comprehensive legal services for both employees and
                            employers. Whether litigating workplace disputes or helping small businesses navigate employment
                            compliance, we offer proactive solutions and aggressive representation to protect your rights
                            and interests. </p>
                        <!--<h1>Employment Law</h1>-->
                        <!--<ul>-->
                        <!--    <li><a href="{{route('home')}}">Home</a></li>-->
                        <!--    <li><i class="fas fa-angle-right"></i></li>-->
                        <!--    <li>Employment Law</li>-->
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
                                <h3>Employment Law</h3>
                                <p>Navigating the workplace can be challenging, whether you’re an employee dealing with
                                    unfair treatment or an employer managing a team. At Skaja, Daniels & Luu, LLP, we bring
                                    a balanced perspective to employment law, representing both employees and employers in
                                    litigation while also offering compliance services to help businesses avoid costly
                                    disputes. </p>
                                <div class="moretext">

                                    <h4>For Employes</h4>
                                    <p>Our attorneys represent employees in a variety of workplace disputes, including:</p>
                                    <ul>
                                        <li>
                                            <b>Wrongful Termination: </b>Pursuing claims where an employee is fired for
                                            unlawful reasons, such as discrimination or retaliation.
                                        </li>
                                        <li>
                                            <b>Workplace Discrimination and Harassment: </b>Litigating cases involving
                                            discrimination based on race, gender, age, disability, or other protected
                                            characteristics, as well as sexual harassment claims.
                                        </li>
                                        <li>
                                            <b>Wage and Hour Violations: </b>Recovering unpaid wages, overtime, and
                                            compensation for meal and rest break violations.
                                        </li>
                                        <li>
                                            <b>Retaliation Claims: </b>Protecting employees who have been wrongfully
                                            disciplined or terminated for reporting violations or participating in
                                            whistleblower activities.
                                        </li>

                                    </ul>
                                    <p>We work tirelessly to hold employers accountable, advocating for fair compensation
                                        and workplace justice for our clients.</p>
                                    <h4>For Employers</h4>
                                    <p>Defending small businesses against employment lawsuits is a cornerstone of our
                                        practice. We understand the significant financial and reputational impact that
                                        employment disputes can have, and we aggressively defend employers in cases
                                        involving:</p>
                                    <ul>
                                        <li>
                                            Discrimination and harassment allegations
                                        </li>
                                        <li>
                                            Wage and hour disputes
                                        </li>
                                        <li>
                                            Wrongful termination claims
                                        </li>
                                        <li>
                                            Breach of employment contracts
                                        </li>
                                    </ul>
                                    <p>In addition to litigation, we assist businesses with <b>employment compliance</b> to
                                        help avoid disputes in the first place. This includes drafting employee handbooks,
                                        developing workplace policies, and advising on hiring, termination, and disciplinary
                                        procedures.</p>
                                    <p>And yes, we’re the ones HR calls when HR screws up! Our attorneys provide the
                                        expertise and support businesses need to clean up mistakes, minimize liability, and
                                        get back on track.</p>
                                    <h4>Proactive Solutions for Employers</h4>
                                    <p>Preventing litigation is always better than defending it. That’s why we help
                                        employers develop proactive strategies to remain compliant with California’s
                                        stringent employment laws. Our services include:</p>
                                    <ul>
                                        <li>
                                            Drafting clear and compliant employment agreements and contracts
                                        </li>
                                        <li>
                                            Creating and reviewing employee handbooks and workplace policies
                                        </li>
                                        <li>
                                            Conducting workplace audits to identify and address potential legal
                                            vulnerabilities
                                        </li>
                                        <li>
                                            Providing guidance on proper classification of employees vs. independent
                                            contractor
                                        </li>
                                    </ul>
                                    <p>By addressing these issues before problems arise, we help employers save time, money,
                                        and stress.</p>
                                    <p>At Skaja, Daniels & Luu, LLP, we understand the complexities of employment law and
                                        offer tailored solutions for both employees and employers. Whether you’re facing a
                                        workplace dispute or seeking to protect your business, we’re here to help. Contact
                                        us today to learn more about our employment law services.</p>


                                </div>
                            </div>
                            <span class="moreless-button">Read more</span>
                        </div>
                        <!--<img src="assets/images/practice/FAMILY LAW.png" alt="">-->

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