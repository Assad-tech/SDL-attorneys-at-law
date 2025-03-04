@extends('User.layout.app')
@push('title', 'Civil Litigation')
@push('styles')

@endpush

@section('content')
    <!-- :: Breadcrumb Header -->
    <section class="breadcrumb-header" id="page"
        style="background-image: url({{asset('user/assets/images/home/banner.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner2">
                        <p>Whether you’re pursuing a claim or defending against one, civil litigation can be complex and
                            costly. At Skaja, Daniels & Luu, LLP, we combine strategic legal representation with a
                            commitment to cost transparency, helping clients resolve business, personal injury, and real
                            estate disputes efficiently and effectively. </p>
                        <!--<h1>Civil Litigation</h1>-->
                        <!--<ul>-->
                        <!--    <li><a href="{{route('home')}}">Home</a></li>-->
                        <!--    <li><i class="fas fa-angle-right"></i></li>-->
                        <!--    <li>Civil Litigation</li>-->
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
                                <h3>Civil Litigation</h3>
                                <p>Skaja, Daniels & Luu successfully represents individuals or businesses who are involved
                                    in legal disputes with other parties. Such disputes typically fall under what is known
                                    as civil litigation which entails the use of courts, mediators or arbitrators to achieve
                                    a fair or equitable outcomes. For plaintiffs involved in a civil litigation matter, the
                                    objective is to right a wrong, honor an agreement, or obtain compensation for an injury.
                                    Defendants in a civil litigation matter will want to aggressively protect their rights
                                    in opposing the plaintiff’s claim.</p>
                                <div class="moretext">
                                    <p>However, we recognize that the pursuit or defense of litigation must also take into
                                        account the economic realities and potential costs involved. Litigation can be
                                        expensive, and our approach is tailored to ensure that our clients are never "upside
                                        down" on their legal bills. We prioritize transparency, keeping clients informed
                                        about the cost of litigation every step of the way. By providing clear and upfront
                                        estimates, as well as regular updates on expenses, we strive to ensure there are no
                                        "surprise bills." This allows our clients to make informed decisions about their
                                        cases and weigh the costs and benefits of pursuing or defending a claim.</p>
                                    <p>Our litigation strategies are designed not only to achieve favorable outcomes but
                                        also to align with our clients’ financial and business objectives. Whether
                                        negotiating a settlement, navigating mediation or arbitration, or taking a case to
                                        trial, we strive to resolve disputes efficiently and cost-effectively.</p>
                                    <p>We represent clients in the following areas:</p>
                                    <p><b>Business related litigation</b></p>
                                    <ul>
                                        <li>
                                            Fraud
                                        </li>
                                        <li>
                                            Contract disputes
                                        </li>
                                        <li>
                                            Dissolution or breakup of a business
                                        </li>
                                        <li>
                                            Partnership disputes
                                        </li>
                                        <li>
                                            Breach of warranties
                                        </li>
                                        <li>
                                            Mechanics’ liens
                                        </li>
                                        <li>
                                            Employment litigation
                                        </li>
                                    </ul>
                                    <p><b>Personal Injury Litigation</b></p>
                                    <ul>
                                        <li>
                                            Personal injury
                                        </li>
                                        <li>
                                            Product liability
                                        </li>

                                    </ul>
                                    <p><b>Real estate and Construction litigation</b></p>
                                    <ul>
                                        <li>
                                            Real estate litigation
                                        </li>
                                        <li>
                                            Real estate realtor / broker disputes
                                        </li>
                                        <li>
                                            Landlord-tenant litigation
                                        </li>
                                        <li>
                                            Construction defects
                                        </li>
                                        <li>
                                            Easement Disputes
                                        </li>
                                        <li>
                                            Quiet title / Partition actions
                                        </li>

                                    </ul>


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