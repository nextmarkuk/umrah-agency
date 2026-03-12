@extends('layouts.master')
@section('meta')
<title>Trusted Islamic Travel Agency in the UK for Umrah Services</title>
<meta name="description" content="Get Umrah services from a trusted Islamic travel agency in London, UK. We offer all-inclusive Umrah packages for families, groups, and individuals.">
@endsection

@verbatim

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://www.haditours.co.uk/easter-umrah-packages.html#easterumrah2026",
  "name": "Easter Umrah Packages 2026 from UK",
  "url": "https://www.haditours.co.uk/easter-umrah-packages.html",
  "description": "Explore the specially designed Easter Umrah Packages 2026 from the UK with Hadi Tours, offering a range of all-inclusive options including flights, Umrah visa, comfortable hotel stays near Makkah and Madinah, and ground transfers during the Easter holiday season.",
  "provider": {
    "@type": "TravelAgency",
    "@id": "https://www.haditours.co.uk/#travelagency",
    "name": "Hadi Tours",
    "url": "https://www.haditours.co.uk/"
  },
  "serviceType": "Easter Umrah Packages 2026",
  "areaServed": {
    "@type": "Country",
    "name": "United Kingdom"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Easter Umrah Packages 2026",
    "@id": "https://www.haditours.co.uk/easter-umrah-packages.html#catalog",
    "itemListElement": [
      {
        "@type": "AggregateOffer",
        "name": "3-Star 7 Nights Easter Umrah 2026",
        "url": "https://www.haditours.co.uk/easter-umrah-packages.html#3star7",
        "description": "3-star Easter Umrah package for 7 nights including return flights, visa, 4 nights in Makkah and 3 nights in Madinah with hotel and transport.",
        "priceCurrency": "GBP",
        "lowPrice": 720,
        "highPrice": 720,
        "offerCount": 1,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "3-Star 7 Nights Easter Umrah Package 2026"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "3-Star 10 Nights Easter Umrah 2026",
        "url": "https://www.haditours.co.uk/easter-umrah-packages.html#3star10",
        "description": "3-star Easter Umrah package for 10 nights including return flights, visa, 5 nights in Makkah and 5 nights in Madinah with hotel and transport.",
        "priceCurrency": "GBP",
        "lowPrice": 780,
        "highPrice": 780,
        "offerCount": 1,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "3-Star 10 Nights Easter Umrah Package 2026"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "4-Star 7 Nights Easter Umrah 2026",
        "url": "https://www.haditours.co.uk/easter-umrah-packages.html#4star7",
        "description": "4-star Easter Umrah package for 7 nights with flights, visa, hotel accommodation in Makkah and Madinah and transport included.",
        "priceCurrency": "GBP",
        "lowPrice": 840,
        "highPrice": 840,
        "offerCount": 1,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "4-Star 7 Nights Easter Umrah Package 2026"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "4-Star 10 Nights Easter Umrah 2026",
        "url": "https://www.haditours.co.uk/easter-umrah-packages.html#4star10",
        "description": "4-star Easter Umrah package for 10 nights including return flights, visa, hotel stays near Haram, and transfers.",
        "priceCurrency": "GBP",
        "lowPrice": 920,
        "highPrice": 920,
        "offerCount": 1,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "4-Star 10 Nights Easter Umrah Package 2026"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "5-Star 7 Nights Easter Umrah 2026",
        "url": "https://www.haditours.co.uk/easter-umrah-packages.html#5star7",
        "description": "5-star Easter Umrah package for 7 nights with flights, premium hotels, visa, VIP transport, and full assistance.",
        "priceCurrency": "GBP",
        "lowPrice": 1050,
        "highPrice": 1050,
        "offerCount": 1,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "5-Star 7 Nights Easter Umrah Package 2026"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "5-Star 10 Nights Easter Umrah 2026",
        "url": "https://www.haditours.co.uk/easter-umrah-packages.html#5star10",
        "description": "5-star Easter Umrah package for 10 nights including return flights, premium hotels, visa support, and ground transfers.",
        "priceCurrency": "GBP",
        "lowPrice": 1150,
        "highPrice": 1150,
        "offerCount": 1,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "5-Star 10 Nights Easter Umrah Package 2026"
        }
      }
    ]
  }
}
</script>
@endverbatim



@section('content')
<section class="search-banner">
    <!--slider section Start-->
    <div class="banner">
        <img src="{{asset('assets/media/pages/home-page-banner-for-haditours-1.png')}}" class="img-fluid" alt="Banner Image">
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
                <h2>All-inclusive Easter Umrah Packages</h2>
            </div>
            <div class="featuredPackagesUid featured-slick-carousel">


                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah-new/29.png')}}"
                                    alt="4 Star 7 Nights Easter Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}">4 Star 7 Nights Easter Umrah Package</a>
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS)">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (4 NIGHTS)">
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
                                    <span class="price">&pound; 600 <sub>/ pp</sub></span>
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
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah/00-min%20%2837%29.webp')}}"
                                    alt="7 Nights 3 star Easter Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">7 Nights 3 star Easter Umrah Package</a>
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS)">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (4 NIGHTS)">
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
                                    <span class="price">&pound; 925 <sub>/ pp</sub></span>
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
                            <a href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah/00-min%20%2821%29.webp')}}"
                                    alt="5 Star 10 Nights Easter Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}">5 Star 10 Nights Easter Umrah Package</a>
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS)">
                                    <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (5 NIGHTS)">
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
                                    <span class="price">&pound; 945 <sub>/ pp</sub></span>
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
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah-new/25.png')}}"
                                    alt="3 Star 10 Nights Easter Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">3 Star 10 Nights Easter Umrah Package</a>
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS)">
                                    <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (5 NIGHTS)">
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
                                    <span class="price">&pound; 1015 <sub>/ pp</sub></span>
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
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah/00-min%20%2814%29.webp')}}"
                                    alt="10 Nights 4 Star Easter Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}">10 Nights 4 Star Easter Umrah Package</a>
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS)">
                                    <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (5 NIGHTS)">
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
                                    <span class="price">&pound; 1070 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}">View Details</a>
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
                                    src="{{asset('assets/media/umrah-new/28.png')}}"
                                    alt="3 Star 12 Nights Easter Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}">3 Star 12 Nights Easter Umrah Package</a>
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (6 NIGHTS)">
                                    <div class="icon-text">Makkah (6 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (6 NIGHTS)">
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
                                    <span class="price">&pound; 1130 <sub>/ pp</sub></span>
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
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah-new/27.png')}}"
                                    alt="4 Star 12 Nights Easter Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}">4 Star 12 Nights Easter Umrah Package</a>
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (6 NIGHTS)">
                                    <div class="icon-text">Makkah (6 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (6 NIGHTS)">
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
                                    <span class="price">&pound; 1145 <sub>/ pp</sub></span>
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
                            <a href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah/00-min%20%2822%29.webp')}}"
                                    alt="5 Star 14 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '5-star-14-nights-family-umrah-package1']) }}">5 Star 14 Nights Umrah Package</a>
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS)">
                                    <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (7 NIGHTS)">
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
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah-new/26.png')}}"
                                    alt="12 Nights 5 star Easter Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}">12 Nights 5 Star Easter Umrah Package</a>
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (6 NIGHTS)">
                                    <div class="icon-text">Makkah (6 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (6 NIGHTS)">
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
                                    <span class="price">&pound; 1210 <sub>/ pp</sub></span>
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
                                    src="{{asset('assets/media/umrah/00-min%20%2823%29.webp')}}"
                                    alt="5 Star 7 Nights Easter Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}">5 Star 7 Nights Easter Umrah Package</a>
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS)">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (4 NIGHTS)">
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
                                    <span class="price">&pound; 1245 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="page-content">
    <div class="container scroll-page-content page-content-styling">
    

        <h2>Easter Umrah Packages 2026 from UK – School Holiday & April Deals</h2>

<p>We have made our Easter Umrah Packages 2026 from the UK specially suitable for families and individuals wishing to perform Umrah during the Easter school holidays. Our packages are designed with flexible departure dates and well, structured itineraries, thus, we strive to make it less complicated for you to combine spiritual travel with the UK Easter break.</p>

<p>In case you are in the market for a cheap Easter Umrah package, a high-class accommodation near Haram, or family-friendly Easter holiday Umrah packages, we offer choices suitable to various budgets and timeframes. Starting from London to Manchester and Bradford, our Easter Umrah packages UK provide easy departures and a high level of travel support.</p>

<h2>Why Choose Easter Umrah Packages 2026?</h2>

        <h2>Why Should You Trust Hadi Tours?</h2>

<h3>Comfortable April Weather in Makkah & Madinah</h3>
<p>People generally talk of April as a great month for Umrah because of the pleasant weather. Most pilgrims would go for April Umrah packages 2026 as the climate in Makkah and Madinah is usually quite nice when compared to the hot summer months. This helps them to get along with worship and travel arrangements in a more comfortable way.</p>

<h3>Ideal Time for Family Umrah Travel</h3>
<p>Easter family Umrah package is one of the top choices that families make as a result of having a holiday break that is fixed. The Easter holiday is long enough to allow a spiritually satisfying Umrah experience and, at the same time, provide flexibility for travel.</p>

<h2>Easter Umrah Packages 2026 Available from UK</h2>

<p>We have a wide selection of Easter Umrah packages 2026 from UK, to suit different trip lengths and budgets. Are you going solo, family, couple, or group? No worries, flexible departures options available from major UK airports. Every package is designed to offer a comfortable, convenient, and well, supported travel experience during the Easter holidays.</p>

<h3>7 Nights Easter Umrah Package:</h3>
<p>Take our 7 nights Easter Umrah package if you want a short and highly spiritual trip during the Easter school break. Besides having enough time for Umrah and sightseeing, you also get to avoid the hassle of a long stay. Generally, this choice is preferred by working professionals and small families.</p>

<h3>10 Nights Easter Umrah Deals:</h3>
<p>Going with the 10 nights Easter Umrah package means that you have more time for worship, meditation, and Ziyarat in Makkah and Madinah. It is a good mix of activities and rest for a family on Easter break. A lot of pilgrims choose this length of time in order to have a less stressful and more spiritually rewarding experience.</p>

<h3>14 Nights Easter Holiday Umrah Packages:</h3>
<p>If you would like to spend more days in the holy Makkah and Madinah, the 14 nights Easter holiday <a href="https://www.haditours.co.uk/umrah-packages.html">Umrah Packages</a> are made for you. You get to take the trip in a more relaxed and slowly spiritually deeper way. It is perfect for families who want to have a full Easter Umrah journey.</p>

<h3>Short Easter Break Umrah Packages</h3>
<p>Our short Easter break Umrah packages are designed for travellers with limited time during the holiday period. These structured itineraries ensure smooth travel arrangements within compact durations. They provide a convenient way to perform Umrah during the Easter break without extended absence.</p>

<h2>Types of Easter Umrah Packages</h2>

<p>Each pilgrim has their own preferences, so we offer different categories of Easter Umrah packages to choose from.</p>

<h3>Cheap Easter Umrah Packages</h3>
<p>Our cheap Easter Umrah packages are perfect for budget, conscious pilgrims who want to take their Easter school holiday in a meaningful way. These packages will include efficient flights, decent accommodation, and complete visa assistance at very reasonable prices. In fact, they offer an economical way of performing Umrah without giving up on essential travel services.</p>

<h3>4 Star Easter Umrah Packages</h3>
<p>4 star Easter Umrah packages give you the best of both worlds in terms of quality and price. Hotels for these packages are picked mainly because of their location to the main sites and are easily accessible, thus making daily prayers a regular and easy affair. This package type is mostly chosen by families who are travelling during the Easter break.</p>

<h3>5 Star Easter Umrah Packages Near Haram</h3>
<p>For pilgrims who want to be close to the action and enjoy the best facilities, our 5 star Easter Umrah packages near Haram offer greater comfort and convenience. These packages will have you staying in centrally located hotels and also ensure you have less hassle when it comes to matters of travel. They are the perfect choice for those who want to make their Easter Umrah 2026 trip as convenient as possible.</p>

<h3>Easter Umrah Group Packages</h3>
<p>Easter Umrah group packages from the UK allow families, friends and community groups to travel together. There are planned itineraries that help the group to have an organised way of travelling thus making the spiritual experience even more fulfilling. Moreover, a group can also have a better journey through the support that is always available in a group setting.</p>

<h3>What’s Included in Our Easter Umrah Packages?</h3>
<p>Each Easter Umrah package UK includes essential services to ensure a smooth journey:</p>
<ul>
<li>Return flights from major UK airports</li>
<li>Hotel accommodation in Makkah and Madinah</li>
<li>Full Umrah visa processing for 2026</li>
<li>Ground transfers between airports and hotels</li>
<li>Intercity transport between the holy cities</li>
</ul>
<p>We aim to provide complete travel support so you can focus on worship rather than logistics.</p>

<h2>Easter Umrah 2026 Package Prices from UK:</h2>

<p>The price of Easter Umrah packages 2026 varies by a number of factors such as hotel class, length of stay, flights demand, and closeness to Haram. Easter being the UK holiday time, the demand can go up greatly.</p>

<p>Booking ahead will let you get good hotels and reasonably priced Easter Umrah from UK. Besides, early bookings give you a wider choice of departure airports and travel dates.</p>

<h2>Easter Umrah Packages from Bradford & Other UK Cities:</h2>

<p>We offer Easter Umrah packages Bradford departures as well as from London, Manchester, and Birmingham for your convenience throughout the UK. It allows pilgrims to pick the closest airport and the most convenient travel dates during the Easter holidays.</p>

<p>Our ready, made Easter Umrah package UK options are tailored to simplify and make more efficient family and group trips. Securing flights and hotels of your choice for 2026 is easier with early planning.</p>

<h2>Book Your Easter Umrah Packages 2026 Today</h2>

<p>Since Easter is during the UK school holiday time, Easter Umrah packages 2026 from the UK are very popular and there is a risk of availability becoming limited. If you are looking for an affordable Easter Umrah package or a 5 star stay near the Haram, or a family Easter Umrah deal, the earlier you book, the better the prices and the hotel location.</p>

<p>Get your Easter holiday Umrah package 2026 locked in now and start getting ready for a spiritually fulfilling trip.</p>



    </div>

</div>
@endsection

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
        overflow: visible;
    }

    .featured-slick-carousel .item {
        padding: 10px;
    }

    .featured-slick-carousel .umrah-headings {
        display: none !important;
        /* Hide headings inside carousel */
    }

    .featured-slick-carousel .mainPackageImage {
        min-height: auto !important;
    }

    .featured-slick-carousel .mainPackageImage img {
        height: 17rem !important;
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

    .featured-slick-carousel .mainPackageDesc .viewMainPackage {
        padding: 6px 12px !important;
        font-size: 12px !important;
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