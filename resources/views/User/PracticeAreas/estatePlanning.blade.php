@extends('User.layout.app')
@push('title', 'Estate Planning')
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
                        <p>Planning for the future is essential to protect your family and ensure your wishes are honored.
                            At Skaja, Daniels & Luu, LLP, we craft wills, trusts, and other estate plans tailored to your
                            unique goals, offering peace of mind for generations to come.</p>
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
                                <h3>Estate Planning (wills and trusts)</h3>
                                <p>Planning for the future is one of the most important steps you can take to protect your
                                    family and ensure your wishes are honored. At Skaja, Daniels & Luu, LLP, we help clients
                                    craft comprehensive estate plans that address their unique goals and circumstances.</p>

                                <div class="moretext">

                                    <p>Our estate planning services include:</p>
                                    <ul>
                                        <li>
                                            <b>Wills: </b>Drafting clear and enforceable wills to direct the distribution of
                                            assets and personal belongings.
                                        </li>
                                        <li>
                                            <b>Trusts: </b>Establishing revocable and irrevocable trusts to manage assets,
                                            minimize taxes, and avoid probate.
                                        </li>
                                        <li>
                                            <b>Powers of Attorney: </b>Preparing durable and healthcare powers of attorney
                                            to designate trusted individuals to act on your behalf if you are unable to do
                                            so.
                                        </li>
                                        <li>
                                            <b>Business Succession Planning: </b>Assisting business owners in developing
                                            strategies for the seamless transfer of business interests to the next
                                            generation or key employees.
                                        </li>

                                    </ul>
                                    <p>By getting to know you and your family, we create estate plans tailored to your
                                        specific needs. Whether you wish to protect your wealth, support a charitable cause,
                                        or plan for unforeseen circumstances, we offer thoughtful, personalized solutions to
                                        give you peace of mind.</p>


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