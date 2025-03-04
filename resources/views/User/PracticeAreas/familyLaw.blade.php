@extends('User.layout.app')
@push('title', 'Family Law')
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
                        <P>Family law cases require a careful balance of legal expertise and empathy. At Skaja, Daniels &
                            Luu, LLP, we provide comprehensive support for divorce, custody disputes, domestic violence
                            cases, and other family law matters, ensuring your rights are protected. </P>
                        <!--<h1>Family Law</h1>-->
                        <!--<ul>-->
                        <!--    <li><a href="{{route('home')}}">Home</a></li>-->
                        <!--    <li><i class="fas fa-angle-right"></i></li>-->
                        <!--    <li>Family Law</li>-->
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
                                <h3>Family Law</h3>
                                <p>Family law matters often involve deeply personal and emotionally charged issues. At
                                    Skaja, Daniels & Luu, LLP, our attorneys with over 15 years of family-law experience
                                    provide compassionate and assertive representation to help individuals and families
                                    navigate these challenging situations with clarity and confidence.</p>
                                <div class="moretext">


                                    <p>We handle a wide range of family law matters, including:</p>
                                    <ul>
                                        <li>
                                            <b>Divorce: </b>Providing guidance through both pre-divorce and post-divorce
                                            processes, including contested and uncontested cases. Services address property
                                            division, spousal support, and child-related matters, with an emphasis on
                                            mediation to facilitate amicable resolutions.
                                        </li>
                                        <li>
                                            <b>Military Divorce: </b>Assisting military personnel and their spouses with the
                                            complexities of divorce, including issues related to military benefits, division
                                            of retirement pay, and child custody. Navigating the unique aspects of military
                                            divorce, such as deployment, jurisdiction, and service member protections under
                                            the Servicemembers Civil Relief Act (SCRA).
                                        </li>
                                        <li>
                                            <b>Non-Marital Cohabitation Agreements and Disputes: </b>Providing legal support
                                            for couples in non-marital relationships, including drafting cohabitation
                                            agreements to outline property rights, financial responsibilities, and other
                                            essential matters.
                                        </li>
                                        <li>
                                            <b>Property Division: </b>Assisting clients with the division of marital
                                            property during divorce proceedings, including complex assets such as
                                            businesses, real estate, art, collectibles, and foreign assets. Ensuring that
                                            all unique assets are properly valued and equitably distributed in accordance
                                            with legal principles and client interests.
                                        </li>
                                        <li>
                                            <b>Legal Separation and Annulments: </b>Assisting clients through the process of
                                            legal separation, where parties remain married but live separately, or
                                            annulments, which declare the marriage void, addressing property division,
                                            spousal support, and other relevant issues based on specific circumstances.
                                        </li>
                                        <li>
                                            <b>Child Custody and Support: </b>Advocating for parenting arrangements that
                                            prioritize the best interests of children, while ensuring fair child support
                                            agreements. Services include resolving parentage, custody, and visitation
                                            disputes, including move-away contests.
                                        </li>
                                        <li>
                                            <b>Domestic Violence: </b>Securing restraining orders and providing protection
                                            for victims of abuse.
                                        </li>
                                        <li>
                                            <b>Prenuptial and Postnuptial Agreements: </b>Drafting and negotiating
                                            agreements that protect individual and marital assets.
                                        </li>
                                        <li>
                                            <b>Paternity Actions: </b>Assisting parents in establishing legal rights and
                                            responsibilities.
                                        </li>

                                    </ul>
                                    <p>Our attorneys combine thorough preparation with a personalized approach,
                                        understanding that every family’s situation is unique. Whether through negotiation,
                                        mediation, or litigation, we work tirelessly to protect your rights and achieve
                                        outcomes that reflect your priorities.</p>


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