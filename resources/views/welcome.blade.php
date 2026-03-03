@extends('layouts.master')
@section('meta')
<title>Trusted Islamic Travel Agency in Pakistan for Umrah Services</title>
<meta name="description" content="Get Umrah services from a trusted Islamic travel agency in Pakistan. We offer all-inclusive Umrah packages for families, groups, and individuals.">
@endsection
@section('content')
<section class="search-banner">
    <!--slider section Start-->
    <div class="banner">
        <img src="{{asset('assets/media/pages/home-page-banner-for-UmrahAgency-1.jpeg')}}" class="img-fluid" alt="Banner Image">
        <div class="banner-text">
            <h1>Trusted Islamic Travel Agency&nbsp;in Pakistan</h1>
            <h4>For Umrah Services</h4>
            </h4>
        </div>
    </div>
    <div class="searchEngine" id="packageInquiry">
        <div class="searchFields">
            <form class="form" method="post" action="{{ route('sendInquiry') }}" id="frm-enquiry" name="frm-enquiry">
                @csrf

                <div class="form-group Half">
                    <label for="enquiry-departure">
                        <i class="fa fa-plane fa-2x text-warning mr-1" style="color: #85641E !important;font-size: 1.4em;"></i> Departure City
                    </label>
                    <select class="form-control" id="enquiry-departure" name="n[Departure City]" required>
                        <option value="">Departure City</option>
                        <option value="Karachi">Karachi (KHI)</option>
                        <option value="Lahore">Lahore (LHE)</option>
                        <option value="Islamabad">Islamabad (ISB)</option>
                        <option value="Peshawar">Peshawar (PEW)</option>
                        <option value="Multan">Multan (MUX)</option>
                        <option value="Sialkot">Sialkot (SKT)</option>
                        <option value="Faisalabad">Faisalabad (LYP)</option>
                        <option value="Quetta">Quetta (UET)</option>
                    </select>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="enquiry-departuredate">
                        <i class="fa fa-calendar fa-2x text-warning mr-1"   style="color: #85641E !important; font-size: 1.4em;"></i> Departure Date
                    </label>
                    <input type="text" id="enquiry-departuredate" name="n[Departure Date]" class="DepartureDate form-control" readonly placeholder="Departure Date" required />
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="enquiry-hotelcategory">
                        <i class="fa fa-hotel fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Hotel Category
                    </label>
                    <select class="form-control" id="enquiry-hotelcategory" name="n[Hotel Category]">
                        <option value="">Hotel Category</option>
                        <option value="3 Star">3 Star</option>
                        <option value="4 Star">4 Star</option>
                        <option value="5 Star">5 Star</option>
                    </select>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="enquiry-duration">
                        <i class="fa fa-moon-o fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Duration
                    </label>
                    <select class="form-control" id="enquiry-duration" name="n[Duration]">
                        <option value="">Duration</option>
                        <option value="1 Night">1 Night</option>
                        <option value="2 Nights">2 Nights</option>
                        <option value="3 Nights">3 Nights</option>
                        <option value="4 Nights">4 Nights</option>
                        <option value="5 Nights">5 Nights</option>
                        <option value="6 Nights">6 Nights</option>
                        <option value="7 Nights">7 Nights</option>
                        <option value="8 Nights">8 Nights</option>
                        <option value="9 Nights">9 Nights</option>
                        <option value="10 Nights">10 Nights</option>
                        <option value="11 Nights">11 Nights</option>
                        <option value="12 Nights">12 Nights</option>
                        <option value="13 Nights">13 Nights</option>
                        <option value="14 Nights">14 Nights</option>
                        <option value="14+ Nights">14+ Nights</option>
                    </select>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="enquiry-travelers">
                        <i class="fa fa-users fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Travelers
                    </label>
                    <select class="form-control" id="enquiry-travelers" name="n[No. of Travelers]">
                        <option value="">No. of Travelers</option>
                        <option value="1 Travel">1</option>
                        <option value="2 Travelers">2</option>
                        <option value="3 Travelers">3</option>
                        <option value="4 Travelers">4</option>
                        <option value="5 Travelers">5</option>
                        <option value="6 Travelers">6</option>
                        <option value="7 Travelers">7</option>
                        <option value="8 Travelers">8</option>
                        <option value="9 Travelers">9</option>
                        <option value="10 Travelers">10</option>
                        <option value="11 Travelers">11</option>
                        <option value="12 Travelers">12</option>
                        <option value="13 Travelers">13</option>
                        <option value="14 Travelers">14</option>
                        <option value="14+ Travelers">14+</option>
                    </select>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="enquiry-name"><i class="fa fa-user fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Full Name</label>
                    <input type="text" class="form-control" id="enquiry-name" name="n[name]" placeholder="Full Name" required />
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="enquiry-phone">
                        <i class="fa fa-phone-square fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Contact No
                    </label>
                    <input type="text" class="form-control" id="enquiry-phone" name="n[Phone Number]" placeholder="Contact No" required />
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="enquiry-email">
                        <i class="fa fa-envelope fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Email
                    </label>
                    <input type="email" class="form-control" name="n[email]" id="enquiry-email" placeholder="Email" required />
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="answerform">
                        <i class="fa fa-check fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Answer
                        <span class='captcha-text' style='background: #1A1A1A; color: #fff; padding: 5px 10px; border-radius: 4px; font-weight: bold; margin-left: 10px; display: inline-block; min-width: 60px; text-align: center;'>Loading...</span>
                    </label>
                    <input class="form-control" id="answerform" type="number" name="InquiryAnswer" placeholder="1 + 2 = ?" required>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half"><button type="submit" class="btn btn-block" style="height: 3rem;background-color:#85641E;border-color:#85641E;color:#fff;" name="submit" value="Send Message">Submit</button></div>
            </form>
        </div>
    </div>
</section>
<!--slider section End-->
<section class="featuredPackages">
    <div class="container">
        <div class="sectionMainHeading">
            <h2>
                <span>03 STAR Exclusive</span>
                Umrah Packages
            </h2>
            <p>Umrah Agency Brings Affordable Packages with Nearby Hotels</p>
        </div>
        <div class="packagesCarousel">
            <div class="viewMore-carouselArrow">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="d-none"></h2>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('umrahPackages') }}" class="viewAll">View All</a>
                        <span class="owl-nav customNav featuredPackagesButton"></span>
                    </div>
                </div>
            </div>
            <div class="featuredPackagesUid featured-slick-carousel">
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">
                                <img class="img-fluid" loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/Madinah%20%284%29.webp')}}" alt="3 Star 7 Nights Umrah Package">
                            </a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">3 Star 7 Nights Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="3 Star 7 Nights Umrah Package Icon">
                                    <div class="icon-text">MADINA (4 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 245,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah/3%20Star%2010%20Nights%20Economy%20Umrah%20Package.webp')}}"
                                    alt="3 Star 10 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">3 Star 10 Nights Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="3 Star 10 Nights Umrah Package Icon">
                                    <div class="icon-text">MADINA (5 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 262,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah/madinah-%20%287%29.webp')}}"
                                    alt="3 Star 12 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}">3 Star 12 Nights Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (6 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (6 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="3 Star 12 Nights Umrah Package Icon">
                                    <div class="icon-text">MADINA (6 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 276,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/tawaf%20%281%29.webp')}}"
                                    alt="3 Star 14 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}">3 Star 14 Nights Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="3 Star 14 Nights Umrah Package Icon">
                                    <div class="icon-text">MADINA (7 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 290,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featuredPackages">
    <div class="container">

        <div class="sectionMainHeading">
            <h2>
                <span>04 STAR</span>
                Umrah Packages
            </h2>
            <p>Umrah Agency Brings Affordable Packages with Nearby Hotels</p>
        </div>
        <div class="packagesCarousel">
            <div class="viewMore-carouselArrow">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="d-none"></h2>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('decemberUmrahPackages') }}" class="viewAll">View All</a>
                        <span class="owl-nav customNav featuredPackagesButton"></span>
                    </div>
                </div>
            </div>
            <div class="featuredPackagesUid featured-slick-carousel">
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}"><img class="img-fluid" loading="lazy"
                                    width="336" height="279" src="{{asset('assets/media/umrah/00-min%20%2836%29.webp')}}"
                                    alt="4 Star 10 Nights December Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}">4 Star 10 Nights December Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (4 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (4 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="4 Star 10 Nights December Umrah Package Icon">
                                    <div class="icon-text">MADINA (6 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 280,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%285%29.webp')}}"
                                    alt="4 Star 14 Nights December Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}">4 Star 14 Nights December Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="4 Star 14 Nights December Umrah Package Icon">
                                    <div class="icon-text">MADINA (7 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 315,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/00-min%20%288%29.webp')}}"
                                    alt="4 Star 7 Nights December Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}">4 Star 7 Nights December Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="4 Star 7 Nights December Umrah Package Icon">
                                    <div class="icon-text">MADINA (4 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 355,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%283%29.webp')}}"
                                    alt="4 Star 10 Nights December Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}">4 Star 10 Nights December Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="4 Star 10 Nights December Umrah Package Icon">
                                    <div class="icon-text">MADINA (5 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 367,500 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%284%29.webp')}}"
                                    alt="4 Star 12 Nights December Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}">4 Star 12 Nights December Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (6 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (6 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="4 Star 12 Nights December Umrah Package Icon">
                                    <div class="icon-text">MADINA (6 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 373,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-14-nights-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/00-min%20%2833%29.webp')}}"
                                    alt="4 Star 14 Nights December Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-14-nights-december-umrah-package']) }}">4 Star 14 Nights December Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg inactive" src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="4 Star 14 Nights December Umrah Package Icon">
                                    <div class="icon-text">MADINA (7 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 395,500 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '4-star-14-nights-december-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featuredPackages">
    <div class="container">

        <div class="sectionMainHeading">
            <h2>
                <span>05 STAR</span>
                Umrah Packages
            </h2>
            <p>Umrah Agency Brings Affordable Packages with Nearby hotels from Holy Haram and Masjid Al Nabwi</p>
        </div>
        <div class="packagesCarousel">
            <div class="viewMore-carouselArrow">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="d-none">7, 10, 14 Days Flash Deals</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#" class="viewAll">View All</a>
                        <span class="owl-nav customNav featuredPackagesButton"></span>
                    </div>
                </div>
            </div>
            <div class="featuredPackagesUid featured-slick-carousel">
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/00%20%2836%29.webp')}}"
                                    alt="5 Star 7 Nights Economy Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}">5 Star 7 Nights Economy Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="5 Star 7 Nights Economy Umrah Package Icon">
                                    <div class="icon-text">MADINA (4 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 245,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/00%20%289%29.webp')}}"
                                    alt="10 Nights 5 Star March Umrah package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}">10 Nights 5 Star March Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="10 Nights 5 Star March Umrah package Icon">
                                    <div class="icon-text">MADINA (5 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 285,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '5-star-7-night-umrah-package']) }}"><img class="img-fluid" loading="lazy"
                                    width="336" height="279" src="{{asset('assets/media/umrah/tawaf%20%283%29.webp')}}"
                                    alt="5 star 7 night Umrah package "></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '5-star-7-night-umrah-package']) }}">5 Star 7 Night Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="5 star 7 night Umrah package Icon">
                                    <div class="icon-text">MADINA (4 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 248,500 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '5-star-7-night-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '7-nights-5-star-umrah-package']) }}"><img class="img-fluid" loading="lazy"
                                    width="336" height="279" src="{{asset('assets/media/umrah/00%20%286%29.webp')}}"
                                    alt="7 Nights 5 Star March Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '7-nights-5-star-umrah-package']) }}">7 Nights 5 Star March Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="7 Nights 5 Star March Umrah Package Icon">
                                    <div class="icon-text">MADINA (4 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 275,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '7-nights-5-star-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/Madinah%20%282%29.webp')}}"
                                    alt="12 Nights 5 Star March Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}">12 Nights 5 Star March Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (6 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (6 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="12 Nights 5 Star March Umrah Package Icon">
                                    <div class="icon-text">MADINA (6 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 296,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah/makkah-saudi-arabia%20%285%29.webp')}}"
                                    alt="5 Star 14 Nights Family Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}">5 Star 14 Nights Family Umrah Package</a>
                                </p>
                                <div class="stars">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                    <img loading="lazy" width="16" height="16" class="svg " src="star.svg" alt="package star">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="5 Star 14 Nights Family Umrah Package Icon">
                                    <div class="icon-text">MADINA (7 NIGHTS) <br> EMAAR TAIBAH</div class="icon-text">
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 br-b d-flex justify-content-between px-4">
                                    <div class="fw-15"><i class="fa fa-file text-active"></i> VISA</div>
                                    <div class="fw-15"><i class="fa fa-plane text-active"></i> FLIGHTS</div>
                                    <div class="fw-15"><i class="fa fa-hotel text-active"></i> HOTELS</div>
                                    <div class="fw-15"><i class="fa fa-taxi text-active"></i> TRANSFERS</div>
                                </div>
                            </div>
                            <div class="row py-2 px-4">
                                <div class="col-12 d-flex justify-content-between px-4">
                                    <span class="price">Rs. 297,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage" href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--featured Umrah Agency packages section End-->
<!-- Home page content section starts here  -->
<div class="page-content">

    <div class="container">

        <div class="scroll-page-content page-content-styling">

            <h2>Go for an Umrah through Best Travel Agency in Pakistan</h2>

            <p>Umrah is of great significance for Muslims worldwide. The spiritual journey is always calling the
                believer&#39;s hearts from within, and it is about time you get to stand in front of Kaaba. So, if
                you have decided to go to the holy places in Saudi Arabia and ask Allah for his forgiveness and
                blessings, it is never too late. We at Umrah Agency are known as the best Umrah travel agency in
                Pakistan because of our reliable Umrah services.</p>

            <p><a href="{{ route('contactUs') }}" target="_self"><strong>Contact Us
                        Now!</strong></a></p>

            <h2>What can Umrah Agency do for you?</h2>

            <p>Our goal is to provide all Muslims in Pakistan with an affordable opportunity to visit Makkah and
                Madinah. The yearning to visit these places is always in the hearts of Muslims. Umrah is the
                religious act of salvation and blessings of the Almighty. And everyone wants to get a chance to
                visit the holy sites and pour out their hearts to their Lord.</p>

            <p>Therefore, we offer Muslims holy travel at a cost-effective cost so that you don&#39;t have to wait
                to get to Kaaba anymore. By facilitating the pilgrims with our services, we have become one of the
                most reliable travel agents in Pakistan. From your Umrah visa and flights to the most daunting hotel
                bookings, Umrah Agency can do it all for you.</p>

            <p>In addition, you only have to inform us about your stay plans and budget, and we will come up with
                the most ideal and affordable deal for you. Being one of the best travel agencies in Pakistan, we aim
                to provide you with the highest quality services no matter what. So, contact us now and prepare to
                ask for Almighty&#39;s blessings in front of His house.</p>

            <h2>Rewards and Benefits of Umrah for the Muslims</h2>

            <p>Umrah is a spiritual worship act performed by our beloved Prophet (PBUH) four times in his lifetime.
                It holds a great position in Islam because of its high rewards. Millions of Muslims worldwide travel
                spiritually to Saudi Arabia every year.</p>

            <p>Furthermore, if you perform Umrah with pious intentions, the mercy and blessings of Allah Almighty
                will not disappoint you. On an Umrah, Muslims pray for the serenity of their souls and ask for
                forgiveness of their mortal sins.</p>

            <p>One of Umrah&#39;s primary rewards and benefits is that you have Allah as your host. Muslims who have
                performed Umrah always talk about the serenity and peacefulness surrounding them once they enter
                Makkah. Moreover, we might have also heard about the stories of people&#39;s feelings when they
                first stood in front of the Kaaba. And Allah promises to cleanse the soul of his pilgrims if they
                repent of their sins with an honest heart.</p>

            <p>In addition, Umrah is seen as a way of eliminating poverty from one&#39;s life. Muslims believe that
                if we spend our wealth in Allah&#39;s way, we are blessed with much more. Allah is the most
                benevolent and will repay any wealth spent in His way. Moreover, Umrah is a sacrificial religious
                act which is why it has the reward of performing Jihad. Also, it strengthens the faith of the
                believers.</p>

            <h2>Why do Muslims Prefer going for an Umrah in Ramadan?</h2>

            <p>When going for Umrah travel during Ramadan, it is vital to know that there are two different types of
                Umrah: Umrah-ul-Tamattu and Umrah-ul-Mufradah. Muslims going for an Umrah in Ramadan perform
                Umrah-ul-Tamattu.</p>

            <p>Even though it is to be done before the 8th of Dhul Hijjah, there is no lesser reward for the whole
                religious act. In addition, the rewards of Umrah in Ramadan are multiple times greater than the
                Umrah performed in any other month. But the whole religious practice is performed the same way.</p>

            <p>According to Prophet (PBUH) &#39;s Hadith, the reward of doing an Umrah in Ramadan is equivalent to a
                Hajj. But you must know that it doesn&#39;t replace the obligatory Hajj. This holy month adds to the
                inner satisfaction of your heart while doing this religious practice. The added blessings and opened
                doors of forgiveness increase the rewards of Umrah as a whole. Therefore, many Muslims set on this
                spiritual journey during Ramadan.</p>

            <p>Even though Umrah is considered a minor Hajj and in Ramadan, its reward is equal to a Hajj, it cannot
                replace the obligation. Unlike Umrah, Hajj is an obligatory religious practice that is mandatory for
                everyone financially and physically capable. Its time is also specified and has great rewards.</p>

            <p>Because of the massive numbers of people going for an Umrah in Ramadan, the Umrah might get costly.
                Therefore, if you want to keep your Hajj and Umrah travel budget-friendly, you should trust the best
                travel agents in Pakistan. You can contact a reliable Umrah travel agency and discuss your budget to
                plan your Umrah accordingly.</p>

            <h2>Most Affordable Time to Go for an Umrah</h2>

            <p>Being one of the best travel agents in Pakistan, we provide our customers with the most affordable
                Umrah deals, including visa, flight, and hotel. So, if you want to perform an Umrah on a budget, we
                can help you. As the summers are hot in Saudi Arabia, most people don&#39;t usually go for an Umrah
                in June, July, and August, the peak summer months.</p>

            <p>The temperature can get high during these three months, resulting in unpleasant weather conditions
                for religious practice. But if you are on a budget and need more money to afford an Umrah in the
                peak months, these three months will be perfect. Umrah Agency is one of the best travel agency the
                Pakistan, and we can help you plan your spiritual journey on a budget in the cheapest months.</p>

            <h2>Flying to Saudi Arabia from Pakistan</h2>

            <p>Airlines offering flights to Saudi Arabia from Pakistan include;</p>

            <ul>
                <li>PIA</li>
                <li>Emirates</li>
                <li>Gulf Air</li>
                <li>Kuwait Airways</li>
                <li>Flynas</li>
                <li>Wizz Air</li>
                <li>Ryanair</li>
                <li>Pegasus</li>
                <li>Turkish Airlines</li>
            </ul>

            <h2>Process of Umrah Visa from Pakistan</h2>

            <p>To get an <a href="{{ route('umrahVisa') }}" target="_self">Umrah visa</a> from
                Pakistan, you must find a reliable travel agency with quality services to handle the process. Your
                travel agent will prepare your Umrah application and make your journey arrangements. After you have
                found a reliable travel agency in Pakistan, you will have to ensure that you have all your
                documents ready and up-to-date. You will send these documents to Umrah travel agents, and they will
                take care of your visa application process.</p>

            <p>Moreover, you will also have to download mandatory apps once you land in Saudi Arabia. These two apps
                are the Tawakkalna app and the Etmarna app. The Tawakkalna app works only in Saudi Arabia and
                records all your documents. While with the Etmarna app, you can get your prayer permits. We are a
                reliable Umrah travel agency that can help you with your visa process and the whole Umrah journey.
            </p>

            <h2>Avail of our Customizable Umrah Deals</h2>

            <p>Being Ministry of Hajj-approved agents in Pakistan, we are dedicated to providing our fellow Muslims in
                Pakistan with the highest quality services. We offer three types of Umrah packages, including 3-star,
                4-star, and 5-star packages. These are ranked according to the hotel included in the Umrah deal.
                Hotels hold an excellent position for those looking to go for an Umrah. Thus the cost depends on the
                hotel you stay in during your Umrah days.</p>

            <p>Even though we mainly have 7, 10, 12, and 14 nights deals, we can make flexible packages for our
                customers. Whether you want to stay for less than 7 days or more than 14 days, you can trust us to
                provide you with the best affordable package. Most of the hotels present in our <a
                    href="{{ route('umrahPackages') }}" target="_self">Umrah packages</a> come
                with complimentary breakfasts. This means you will not have to worry about your morning meal before
                performing Umrah or visiting other holy sites.</p>

            <p>If you want us to arrange other meals for the day, we can include them in the package. But this
                differs from the offer that most people avail of when going for an Umrah on a budget. We are
                reliable Umrah travel agents who can also provide you with transportation to and from the airport to
                your hotel if you want us to. There is always room for changes and customisation in the <a
                    href="{{ route('umrahPackages2026') }}">Umrah package 2026</a>&nbsp;we
                prepare for you. You can tell us your requirements, and we will do it accordingly.</p>

            <h2>FAQs</h2>

            <h3>How long does an Umrah visa take from Pakistan?</h3>

            <p>After you have submitted your eVisa application, it usually takes approximately four business days to
                process your visa. You also have an option of Rush Processing that will help you get your
                application approved in two business days. The third and fastest option is the Super Rush option,
                which will get your visa in almost sixteen hours.</p>

            <h3>How many days are enough for Umrah?</h3>

            <p>People usually go for an Umrah for a minimum of 7 and a maximum of 30 days. If you have a tight
                budget and are concerned about your comfort, 7 days are adequate to perform Umrah and visit the holy
                sites.</p>

            <h3>What are the Umrah visa application requirements?</h3>

            <p>For your Umrah application, you must have the following documents ready;</p>

            <ul>
                <li>Application form for the visa</li>
                <li>A recent passport-size photograph</li>
                <li>A valid passport consisting of minimum six-month validity</li>
                <li>Non-refundable Umrah flight tickets</li>
                <li>Relationship between the female and male pilgrim going together</li>
                <li>Meningitis vaccination proof</li>
            </ul>

            <h3>What is the significance of performing Umrah?</h3>

            <p>Umrah enables Muslims to pray for forgiveness for their mortal sins and refresh their faith.</p>

            <h3>What are the pillars of Umrah?</h3>

            <p>The main pillars of Umrah include Ihram, Tawaf (circling the Kaaba seven times), Saee between the
                mountains of Safa and Marwa (walking between the mountains seven times), and Tahallul.</p>

            <h3>How can I catch a direct flight to Saudi Arabia from Pakistan?</h3>

            <p>Airlines that provide flights from Pakistan to Saudi Arabia include PIA, Saudia, and others. You can take help from reliable travel agents to guide you about direct flights from different airlines.</p>

        </div>

    </div>

</div>
<!-- Home page content section ends here  -->
@endsection

@push('scripts')
<style>
    .featured-slick-carousel {
        margin-bottom: 80px !important; /* Increased for better gap */
        padding: 0;
        position: relative;
        /* Prevent vertical stacking before initialization */
        display: flex;
    }
    .featured-slick-carousel:not(.slick-initialized) {
        flex-wrap: nowrap;
        overflow: hidden; /* Only hide overflow before init */
    }
    .featured-slick-carousel:not(.slick-initialized) .item {
        flex: 0 0 33.333%;
        max-width: 33.333%;
    }
    @media (max-width: 1100px) {
        .featured-slick-carousel:not(.slick-initialized) .item {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
    @media (max-width: 768px) {
        .featured-slick-carousel:not(.slick-initialized) .item {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
    .featured-slick-carousel.slick-initialized {
        display: block;
        overflow: visible; /* Ensure dots are visible */
    }
    .featured-slick-carousel .item {
        padding: 10px; /* Restored slightly more padding */
    }
    /* Increase card height components */
    .featured-slick-carousel .mainPackageImage {
        min-height: auto !important;
    }
    .featured-slick-carousel .mainPackageImage img {
        height: 17rem !important; /* Increased from 14rem */
        object-fit: cover;
    }
    .featured-slick-carousel .mainPackageDesc .package-heading {
        padding: 8px 15px !important;
    }
    .featured-slick-carousel .mainPackageDesc .package-heading p.title {
        font-size: 15px !important;
        line-height: 1.2;
    }
    .featured-slick-carousel .mainPackageDesc .row.p-3 {
        padding: 10px !important;
    }
    .featured-slick-carousel .mainPackageDesc .icon-text {
        font-size: 11px !important;
        line-height: 1.2;
    }
    .featured-slick-carousel .mainPackageDesc .row.py-2.px-4 {
        padding: 5px 15px !important;
    }
    .featured-slick-carousel .mainPackageDesc .price {
        font-size: 24px !important;
    }

    .featured-slick-carousel .slick-prev,
    .featured-slick-carousel .slick-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        width: 35px; /* Slightly smaller arrows */
        height: 35px;
        background: rgba(61, 62, 66, 0.8) !important;
        border: none;
        border-radius: 50%;
        display: flex !important;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }
    .featured-slick-carousel .slick-prev {
        left: 10px !important;
    }
    .featured-slick-carousel .slick-next {
        right: 10px !important;
    }
    .featured-slick-carousel .slick-prev i,
    .featured-slick-carousel .slick-next i {
        color: #fff;
        font-size: 14px;
    }
    .featured-slick-carousel .slick-dots {
        position: absolute;
        bottom: -45px;
        display: flex !important;
        justify-content: center;
        width: 100%;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .featured-slick-carousel .slick-dots li {
        margin: 0 5px;
    }
    .featured-slick-carousel .slick-dots li button {
        font-size: 0;
        width: 10px;
        height: 10px;
        background: #3D3E42;
        border-radius: 50%;
        border: none;
        opacity: 0.2;
        padding: 0;
    }
    .featured-slick-carousel .slick-dots li.slick-active button {
        opacity: 1;
    }
</style>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        function initFeaturedSlider() {
            if (window.jQuery && $.fn.slick) {
                $('.featured-slick-carousel').each(function() {
                    if (!$(this).hasClass('slick-initialized')) {
                        $(this).slick({
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            arrows: true,
                            dots: true,
                            autoplay: true,
                            autoplaySpeed: 2000, /* 2s delay as requested */
                            prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
                            nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
                            responsive: [
                                {
                                    breakpoint: 1300,
                                    settings: {
                                        slidesToShow: 3
                                    }
                                },
                                {
                                    breakpoint: 1100,
                                    settings: {
                                        slidesToShow: 2
                                    }
                                },
                                {
                                    breakpoint: 768,
                                    settings: {
                                        slidesToShow: 1
                                    }
                                }
                            ]
                        });
                    }
                });
            } else {
                setTimeout(initFeaturedSlider, 50);
            }
        }
        initFeaturedSlider();
    });
</script>
@endpush


