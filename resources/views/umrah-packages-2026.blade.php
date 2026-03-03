@extends('layouts.master')
@section('meta')
<title>Trusted Islamic Travel Agency in the UK for Umrah Services</title>
<meta name="description" content="Get Umrah services from a trusted Islamic travel agency in London, UK. We offer all-inclusive Umrah packages for families, groups, and individuals.">
@endsection
@section('content')
<section class="search-banner">
    <!--slider section Start-->
    <div class="banner">
        <img src="{{asset('assets/media/pages/home-page-banner-for-haditours-1.jpeg')}}" class="img-fluid" alt="Banner Image">
        <div class="banner-text">
            <h1>Trusted Islamic Travel Agency&nbsp;in UK</h1>
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
                        <i class="fa fa-plane fa-2x text-warning mr-1" style="color: #85641E !important;font-size: 1.4em;"></i> Departure Airport
                    </label>
                    <select class="form-control" id="enquiry-departure" name="n[Departure Airport]" required>
                        <option value="">Departure Airport</option>
                        <option value="London Heathrow">London Heathrow</option>
                        <option value="London Gatwick">London Gatwick</option>
                        <option value="Manchester">Manchester</option>
                        <option value="London Stansted">London Stansted</option>
                        <option value="London Luton">London Luton</option>
                        <option value="Edinburgh">Edinburgh</option>
                        <option value="Birmingham">Birmingham</option>
                        <option value="Glasgow">Glasgow</option>
                        <option value="Bristol">Bristol</option>
                        <option value="Liverpool">Liverpool</option>
                        <option value="Newcastle">Newcastle</option>
                        <option value="East Midlands">East Midlands</option>
                        <option value="Aberdeen">Aberdeen</option>
                        <option value="London City">London City</option>
                        <option value="Leeds Bradford">Leeds Bradford</option>
                        <option value="Cardiff">Cardiff</option>
                        <option value="Norwich">Norwich</option>
                        <option value="Humberside">Humberside</option>
                    </select>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="enquiry-departuredate">
                        <i class="fa fa-calendar fa-2x text-warning mr-1" style="color: #85641E !important; font-size: 1.4em;"></i> Departure Date
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
<div class="page-content">

    <div class="container">

        <p>
    </div>
</div>
<section class="featuredPackages">
    <div class="container">

        <div class="packagesCarousel">
            <div class="sectionMainHeading">
                <h2>Special Offers for Umrah Packages 2026</h2>
                <p>03 Star Umrah Packages</p>
            </div>
            <div class="featuredPackagesUid featured-slick-carousel">
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%2821%29.webp')}}"
                                    alt="3 Star 7 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">3 Star 7 Nights Umrah Package</a></p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg inactive" src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS)">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (4 NIGHTS)">
                                    <div class="icon-text">MADINA (4 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                    <span class="price">&pound; 745 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">View Details</a>
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
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}">3 Star 12 Nights Umrah Package</a></p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg inactive" src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (6 NIGHTS)">
                                    <div class="icon-text">Makkah (6 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (6 NIGHTS)">
                                    <div class="icon-text">MADINA (6 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                    <span class="price">&pound; 789 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%288%29.webp')}}"
                                    alt="3 Star 10 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">3 Star 10 Nights Umrah Package</a></p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg inactive" src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS)">
                                    <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (5 NIGHTS)">
                                    <div class="icon-text">MADINA (5 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                    <span class="price">&pound; 799 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%2819%29.webp')}}"
                                    alt="3 Star 14 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}">3 Star 14 Nights Umrah Package</a></p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg inactive" src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS)">
                                    <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (7 NIGHTS)">
                                    <div class="icon-text">MADINA (7 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                    <span class="price">&pound; 859 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}">View Details</a>
                                </div>
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

        <div class="packagesCarousel">
            <div class="sectionMainHeading">
                <p>04 Star Umrah Packages</p>
            </div>
            <div class="featuredPackagesUid featured-slick-carousel">
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%2820%29.webp')}}"
                                    alt="4 Star 7 Nights Umrah Packages"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}">4 Star 7 Nights Umrah Packages</a></p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS)">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (4 NIGHTS)">
                                    <div class="icon-text">MADINA (4 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                    <span class="price">&pound; 825 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%2822%29.webp')}}"
                                    alt="4 Star 10 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}">4 Star 10 Nights Umrah Package</a></p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS)">
                                    <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (5 NIGHTS)">
                                    <div class="icon-text">MADINA (5 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                    <span class="price">&pound; 899 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%2825%29.webp')}}"
                                    alt="4 Star 12 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}">4 Star 12 Nights Umrah Package</a></p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (6 NIGHTS)">
                                    <div class="icon-text">Makkah (6 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (6 NIGHTS)">
                                    <div class="icon-text">MADINA (6 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                    <span class="price">&pound; 945 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-14-nights-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah/0%20%2827%29.webp')}}"
                                    alt="4 Star 14 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-14-nights-december-umrah-package']) }}">4 Star 14 Nights Umrah Package</a></p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg inactive" src="star.svg" alt="package star"></div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS)">
                                    <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (7 NIGHTS)">
                                    <div class="icon-text">MADINA (7 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                    <span class="price">&pound; 1030 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '4-star-14-nights-december-umrah-package']) }}">View Details</a>
                                </div>
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

        <div class="packagesCarousel">
            <div class="sectionMainHeading">
                <p>05 Star Umrah Packages</p>
            </div>
            <div class="featuredPackagesUid featured-slick-carousel">
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah/Dua-at-makkah.webp')}}"
                                    alt="5 Star 10 nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}">5 Star 10 Nights Umrah Package</a></p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"></div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS)">
                                    <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (5 NIGHTS)">
                                    <div class="icon-text">MADINA (5 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                    <span class="price">&pound; 999 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah/madinah-%20%288%29.webp')}}"
                                    alt="5 Star 12 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}">5 Star 12 Nights Umrah Package</a></p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"></div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (6 NIGHTS)">
                                    <div class="icon-text">Makkah (6 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (6 NIGHTS)">
                                    <div class="icon-text">MADINA (6 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                    <span class="price">&pound; 1045 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah/makkah-kaabah%20%281%29.webp')}}"
                                    alt="5 Star 7 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}">5 Star 7 Nights Umrah Package</a></p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"></div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS)">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (4 NIGHTS)">
                                    <div class="icon-text">MADINA (4 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                    <span class="price">&pound; 1049 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}">View Details</a>
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
                                    src="{{asset('assets/media/umrah/makkah-kaabah.webp')}}"
                                    alt="5 Star 14 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}">5 Star 14 Nights Umrah Package</a></p>
                                <div class="stars"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"><img loading="lazy" width="16" height="16"
                                        class="svg " src="star.svg" alt="package star"><img loading="lazy"
                                        width="16" height="16" class="svg " src="star.svg" alt="package star"><img
                                        loading="lazy" width="16" height="16" class="svg " src="star.svg"
                                        alt="package star"><img loading="lazy" width="16" height="16" class="svg "
                                        src="star.svg" alt="package star"></div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS)">
                                    <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (7 NIGHTS)">
                                    <div class="icon-text">MADINA (7 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                    <span class="price">&pound; 1199 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@push('scripts')
<style>
    .featured-slick-carousel {
        margin-bottom: 80px !important;
        padding: 0;
        position: relative;
        display: flex;
    }

    .featured-slick-carousel:not(.slick-initialized) {
        flex-wrap: nowrap;
        overflow: hidden;
    }

    .featured-slick-carousel:not(.slick-initialized) .item {
        flex: 0 0 33.333%;
        max-width: 33.333%;
    }

    .featured-slick-carousel.slick-initialized {
        display: block;
        overflow: visible;
    }

    .featured-slick-carousel .item {
        padding: 10px;
    }

    .featured-slick-carousel .mainPackage {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin: 0;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid #eee;
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
    }

    .featured-slick-carousel .mainPackage:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .featured-slick-carousel .mainPackageImage img {
        height: 17rem !important;
        object-fit: cover;
    }

    .featured-slick-carousel .slick-prev,
    .featured-slick-carousel .slick-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        width: 35px;
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

    .featured-slick-carousel .slick-prev:hover,
    .featured-slick-carousel .slick-next:hover {
        background: #85641e !important;
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
                            autoplaySpeed: 2000,
                            prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
                            nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
                            responsive: [{
                                    breakpoint: 1200,
                                    settings: {
                                        slidesToShow: 3
                                    }
                                },
                                {
                                    breakpoint: 991,
                                    settings: {
                                        slidesToShow: 2
                                    }
                                },
                                {
                                    breakpoint: 767,
                                    settings: {
                                        slidesToShow: 1,
                                        arrows: false
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
<div class="page-content">
    <div class="container scroll-page-content page-content-styling">
        </p>

        <h2>Get Umrah Packages 2026 With Haditours Today</h2>

        <p>Planning ahead allows you to secure the best hotels, preferred departure dates, and competitive fares for your sacred journey. Our Umrah Packages 2026 from UK are now open for early booking, offering flexible departures, carefully selected accommodation, and complete travel support for pilgrims across the UK.</p>

        <p>Whether you are planning Ramadan Umrah 2026, travelling during school holidays, or looking for off-peak 2026 Umrah deals, securing your place early ensures better availability and smoother visa processing.</p>
        <p>With demand increasing every year, booking your Umrah 2026 from UK in advance provides peace of mind and financial flexibility.</p>

        <h2>Why 2026 Is the Ideal Year to Plan Your Umrah Early</h2>

        <h3>Increasing Demand for Umrah 2026 from UK</h3>
        <p>
            Interest in Umrah Packages 2026 is already rising due to Ramadan 2026 falling in favourable travel months and increasing post-Hajj travel momentum. UK families often coordinate travel around school holidays, making Easter 2026 and December 2026 highly competitive periods.
        </p>
        <p>
            Early booking protects you from last-minute price increases and limited hotel choices.
        </p>

        <h3>Limited Hotel Availability Near Haram in 2026</h3>
        <p>
            Hotels close to Masjid al-Haram in Makkah and Al-Masjid an-Nabawi in Madinah fill quickly, especially during Ramadan and winter holidays.
        </p>
        <p>
            Premium properties such as Pullman ZamZam Makkah and Anwar Al Madinah Mövenpick are often reserved months ahead. Securing your 2026 Umrah package early gives you access to better room categories and walking-distance convenience.
        </p>

        <h3>Price Trends for Umrah Packages 2026</h3>
        <p>
            Flight costs and hotel rates typically increase as peak months approach. Ramadan Umrah 2026 packages and December departures are expected to be priced higher due to demand.
        </p>
        <p>
            Off-peak months such as January and February 2026 often provide more affordable Umrah 2026 deals, especially for longer stays.
        </p>

        <H2>Available Umrah 2026 Departure Months</H2>

        <p>We offer multiple departure options throughout the year to suit different schedules and budgets.
        </p>

        <h3>January & February 2026 Umrah Packages</h3>
        <p>
            Early 2026 offers cooler weather and fewer crowds, making January and February ideal for pilgrims seeking a peaceful Umrah experience. Families, elderly travelers, and solo pilgrims can enjoy easier access to Haram and a calm environment. These months also provide competitive Umrah 2026 packages from UK at attractive rates.
        </p>

        <h3>Ramadan Umrah 2026 Packages</h3>
        <p>
            Ramadan is the most spiritually rewarding period for Umrah, and our Ramadan Umrah 2026 packages from UK cater to all needs, from full-month stays to short 7–10 night options. Early booking is essential due to high demand, ensuring the best hotels near Haram and flexible flight options. Pilgrims can experience maximum blessings while enjoying comfortable arrangements and guided support.
        </p>

        <h3>Easter & Summer 2026 Umrah Packages</h3>
        <p>
            Easter and summer 2026 are popular for UK families, providing structured travel dates and convenient school holiday options. Our Easter & Summer Umrah 2026 packages offer a variety of hotel categories, flexible durations, and group-friendly arrangements. These months are perfect for pilgrims seeking extended stays with a combination of spiritual reflection and family-friendly travel.
        </p>

        <h3>Rabi al-Awwal & Post-Hajj 2026</h3>
        <p>
            Travelling in Rabi al-Awwal 2026 or after Hajj provides moderate crowds and balanced pricing, making it an ideal choice for value-conscious pilgrims. These months combine comfortable hotel options near Haram with quieter rituals for Tawaf and Sa’i. Pilgrims can enjoy a fulfilling spiritual journey without the rush of peak seasons.
        </p>

        <h3>December 2026 Umrah Packages</h3>
        <p>
            December departures coincide with winter holidays, offering convenient scheduling for UK families while maintaining a peaceful Umrah experience. Our December 2026 Umrah packages from UK include flexible hotel options, smooth flights, and guided tours. This period provides a blend of favorable weather, accessibility, and spiritual tranquility.
        </p>

        <h2>Types of Umrah Packages 2026 Available
        </h2>
        <p>We offer structured 2026 Umrah packages UK tailored to different preferences.</p>


        <h4>Economy Umrah 2026 Packages</h4>
        <p>
            Designed for budget-conscious pilgrims, these packages provide reliable accommodation, return flights, and visa support at competitive rates.
        </p>

        <h4>4 Star Umrah 2026 Packages</h4>
        <p>
            Ideal for pilgrims seeking comfort and proximity to Haram, 4★ options balance quality accommodation with value pricing.
        </p>

        <h4>5 Star Umrah 2026 Luxury Packages</h4>
        <p>
            For those prioritising convenience and premium facilities, our luxury 5 Star Umrah 2026 packages include top-rated hotels within walking distance of the holy mosques.
        </p>

        <h4>Family Umrah Packages 2026</h4>
        <p>
            Travelling with children or elderly relatives requires additional care. Our Family Umrah 2026 packages include flexible room options and convenient flight schedules.
        </p>

        <p>When you book your Umrah for 2026, it is good to know what you get. Haditours makes sure to give the
            best <a href="{{ route('umrahPackages') }}">Umrah packages</a> from the UK. So,
            here&#39;s what you can expect.</p>

        <h4>3★, 4★ & 5★ Hotels in Makkah & Madinah</h4>
        <p>
            We carefully select accommodation options close to key religious sites, offering flexibility across different budgets.
        </p>

        <h4>Umrah Visa Processing for 2026</h4>
        <p>
            We assist with full visa documentation in accordance with regulations set by the Ministry of Hajj and Umrah, ensuring compliance and timely approvals.
        </p>

        <h3>Hotels Near Holy Sites</h3>

        <p>It is important to stay near the holy places in Makkah and Madinah. This makes it easy for you to go for
            prayers. You can choose from 3, 4, or 5-star hotels in our packages. These are close to the sacred
            places, so you can pick the best one.</p>

        <h3>Umrah Visa</h3>

        <p>Moreover, we handle your <a href="{{ route('umrahVisa') }}">Umrah visa</a> from
            beginning to end, so you do not need to worry about anything. Our team helps you with all the needed
            papers and makes the whole process easy for you.</p>

        <h3>Ground Transport</h3>

        <p>You can also add ground transport between Jeddah, Makkah, and Madinah. This means you will have a vehicle
            to take you from one city to another. This will help you avoid any problems with transport at the last
            minute.</p>

        <h3>Meals</h3>

        <p>Additionally, you can add meals to your package. Options include breakfast only, meals for half the day,
            or the whole day. This makes your experience simple, as you will not have to find food options daily.
        </p>

        <h3>Ziarat Tours</h3>

        <p>Lastly, a guided Ziarat tour can make your Umrah even more special. A guide will take you to essential
            places in Makkah and Madinah, allowing you to learn about their history and their importance in Islam.
        </p>

        <h2>How to Prepare for Umrah 2026 Now</h2>

        <p>Getting ready for Umrah 2026 is not just about booking a flight and a hotel. You also need to prepare
            your heart and your mind. So, here is a simple guide to help you prepare for this holy experience.</p>

        <h3>Spiritual Preparation</h3>

        <p>Firstly, prepare your heart and mind before going for Umrah.</p>

        <ul>
            <li>Learn how to do each step of Umrah properly.</li>
            <li>Make sure your intentions are right. It is a time to ask for Allah&#39;s mercy and forgiveness. So,
                do it with honesty and a pure heart.</li>
            <li>You can watch videos by Islamic teachers. This will help you understand the deeper meaning of this
                journey.</li>
        </ul>

        <h3>Documentation</h3>

        <p>If you do not have the right papers, your Umrah from the UK might take longer or even get cancelled. But
            do not worry. We make sure you have everything you need.</p>

        <ul>
            <li>You will need a passport that is still good for at least six months.</li>
            <li>You also need a special travel pass called an Umrah visa. This paper permits you to enter Saudi
                Arabia for Umrah.</li>
            <li>Must have got the vaccine for meningitis.</li>
            <li>It is also a good idea to have extra copies of all your important papers.</li>
        </ul>

        <h3>Packing Essentials</h3>

        <p>Packing the right things makes travel simple and comfortable.</p>

        <ul>
            <li><strong>Ihram Clothing &ndash;</strong> Men must bring two sets of white clothes called Ihram. This
                is a special outfit for Umrah or Hajj. Women must wear loose and modest clothes that follow Islamic
                rules.</li>
            <li><strong>Comfortable Footwear &ndash;</strong> The best shoes are light sandals or slip-on shoes.
            </li>
            <li><strong>Clothes for the Weather &ndash;</strong> Saudi Arabia is very hot in the day. However, it
                can be cool at night. So pack clothes that work for both.</li>
        </ul>

        <h3>Understanding Local Rules</h3>

        <p>Learning the rules and traditions in Saudi Arabia will help you stay out of trouble and show respect.</p>

        <ul>
            <li>Dress in a way that covers your body. Women should wear a long, loose dress called an abaya. They
                should also cover their hair with a hijab. Men should not wear clothes that are too bright or too
                tight.</li>
            <li>Do not take pictures in holy places unless you have permission.</li>
            <li>Always put trash in a bin. Keep holy places neat and tidy.</li>
        </ul>

        <h3>FAQs</h3>

        <h4>What is the price of the Umrah package 2026 with Haditours now?</h4>

        <p>At Hadi Tours, we ensure you get the best prices for your Umrah package for 2026 right now. Our
            packages start from as low as &pound;745.</p>

        <h4>Which airlines can I get direct flights with for my Umrah package?</h4>

        <p>Saudi Airlines and British Airways offer direct flights from the UK to Jeddah. So, if you opt for direct
            flights in your package, you will likely fly with one of these airlines.</p>

        <h4>How long does an Umrah visa last?</h4>

        <p>An Umrah visa lasts 90 days, after which you must leave the country.</p>

        <h4>What cities can I visit with an Umrah visa?</h4>

        <p>The Umrah visa only allows visits to the holy cities of Makkah, Madinah, and other cities of Saudi Arabia
        </p>

        <h4>Guided Ziyarat Tours</h4>
        <p>
            Optional guided visits include historical Islamic landmarks such as Jabal al-Nour and Quba Mosque, enhancing your spiritual journey.
        </p>

    </div>

</div>
@endsection