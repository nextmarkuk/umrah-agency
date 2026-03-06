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
  "@id": "https://www.haditours.co.uk/umrah-packages-2026.html#umrah2026",
  "name": "Umrah Packages 2026 from UK",
  "url": "https://www.haditours.co.uk/umrah-packages-2026.html",
  "description": "Discover comprehensive Umrah Packages 2026 with Hadi Tours, offering affordable and luxury pilgrimage options from the UK. Choose from 3 star, 4 star, and 5 star Umrah packages including return flights, Umrah visa processing, hotel accommodation in Makkah and Madinah, ground transport, and guided assistance. Flexible durations from 7 to 14 nights are available throughout 2026. Whether you are looking for budget Umrah deals or premium all-inclusive packages, our 2026 Umrah packages ensure a smooth, comfortable, and spiritually enriching journey. Book your Umrah 2026 package today with trusted UK travel experts.",
  "provider": {
    "@type": "TravelAgency",
    "@id": "https://www.haditours.co.uk/#travelagency",
    "name": "Hadi Tours",
    "url": "https://www.haditours.co.uk/"
  },
  "serviceType": "Umrah Packages 2026",
  "areaServed": {
    "@type": "Country",
    "name": "United Kingdom"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Umrah Packages 2026",
    "@id": "https://www.haditours.co.uk/umrah-packages-2026.html#catalog",
    "itemListElement": [
      {
        "@type": "AggregateOffer",
        "name": "3-Star Umrah Packages 2026",
        "url": "https://www.haditours.co.uk/umrah-packages-2026.html#3star",
        "description": "Affordable 3-star Umrah packages 2026 including flights, visa, hotel accommodation, and ground transport.",
        "priceCurrency": "GBP",
        "lowPrice": 699,
        "highPrice": 899,
        "offerCount": 15,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "3-Star Umrah Package 2026"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "4-Star Umrah Packages 2026",
        "url": "https://www.haditours.co.uk/umrah-packages-2026.html#4star",
        "description": "Comfortable 4-star Umrah packages 2026 with hotels close to Haram, return flights, visa processing, and transport services.",
        "priceCurrency": "GBP",
        "lowPrice": 849,
        "highPrice": 1099,
        "offerCount": 12,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "4-Star Umrah Package 2026"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "5-Star Umrah Packages 2026",
        "url": "https://www.haditours.co.uk/umrah-packages-2026.html#5star",
        "description": "Luxury 5-star Umrah packages 2026 featuring premium hotels in Makkah and Madinah, visa assistance, VIP transport, and optional business-class flights.",
        "priceCurrency": "GBP",
        "lowPrice": 1199,
        "highPrice": 1799,
        "offerCount": 10,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "5-Star Umrah Package 2026"
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
                                    src="{{asset('assets/media/umrah-new/21.png')}}"
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/11.png')}}"
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/12.png')}}"
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/30.png')}}"
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/14.png')}}"
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/15.png')}}"
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/16.png')}}"
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
                                    src="{{asset('assets/media/umrah-new/17.png')}}"
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
                                    src="{{asset('assets/media/umrah-new/9.png')}}"
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
                                    src="{{asset('assets/media/umrah-new/10.png')}}"
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
    

        <h2>Umrah Packages 2026 from UK – Early Booking Now Open</h2>

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

<h3>Easter & Summer 2026 Umrah Packages</h3>
<p>During Easter and summer 2026 families in the UK are what is called the target market because of the set travel dates and the convenient school holiday options. We offer an Easter & Summer Umrah 2026 packages with different hotel categories, durations of stay that are flexible, and group, friendly configurations. These months are perfect for pilgrims seeking extended stays with a combination of spiritual reflection and family-friendly travel.</p>

        <h4>3★, 4★ & 5★ Hotels in Makkah & Madinah</h4>
        <p>
            We carefully select accommodation options close to key religious sites, offering flexibility across different budgets.
        </p>

        <h4>Umrah Visa Processing for 2026</h4>
        <p>
            We assist with full visa documentation in accordance with regulations set by the Ministry of Hajj and Umrah, ensuring compliance and timely approvals.
        </p>

<h2>Types of Umrah Packages 2026 Available</h2>
<p>Our range of 2026 Umrah packages UK are designed to suit different tastes and preferences.
</p>

<h3>Economy Umrah 2026 Packages :</h3>
<p>Being budget, conscious is no barrier to our Economy Umrah 2026 Packages from UK. These packages offer everything a pilgrim needs for their journey at a specially affordable price point. Included in the package is the accommodation of a reasonable standard, return flights, and full Umrah visa processing for 2026.</p>

<h3>4 Star Umrah 2026 Packages :</h3>
<p>4 Star Umrah 2026 Packages are the right choice if you want a top, notch hotel close to Masjid al, Haram and Al, Masjid an, Nabawi without spending a fortune. You not only get to stay in a beautiful hotel room but also enjoy walking distance to the amazing places of worship.</p>

<h3>5 Star Umrah 2026 Luxury Packages :</h3>
<p>5 Star Umrah 2026 Luxury Packages will take care of you from the moment you arrive until you leave with unparalleled service at the finest hotels only minutes from the Haram. They are for people who prefer to stay in luxurious, fully, equipped hotels and have a carefree, well, managed journey.</p>

<h3>Family Umrah Packages 2026 :</h3>
<p>Family Umrah Packages 2026 from UK are aimed at providing a comfortable and stress, free journey for families with children or the elderly. The hotels selected are close to the holy mosques and there are plenty of flight options to choose from.</p>

<h3>Group Umrah 2026 Packages</h3>
<p>Group Umrah 2026 Packages allow pilgrims to travel together with structured itineraries and guided Ziyarat tours in Makkah and Madinah. These packages provide a supportive environment with organised travel management and shared spiritual experience.</p>

<h2>What’s Included in Our Umrah Packages 2026?</h2>

<h3>What is Included in Our Umrah Packages 2026? :</h3>
<p>Each UK Umrah 2026 package includes a range of key services to ensure a hassle, free pilgrimage.</p>

<h3>Return Flights from Major UK Airports :</h3>
<p>Our Umrah 2026 Packages from UK cover return flights to and from London, Manchester, Birmingham, and other airports in the UK. Those going on pilgrimage will have the option of flying directly or via a stopover on their way to Jeddah or Madinah depending on the flight availability and their preference.</p>

<h3>3-star, 4-star and 5-star Hotels in Makkah & Madinah :</h3>
<p>We provide a range of well, located 3, star, 4, star, and 5, star hotel options around Masjid al, Haram and Al, Masjid an, Nabawi for all kinds of budgets. In fact, all our lodging choices guarantee a high level of comfort, convenience, and close proximity to daily prayers.</p>

<h3>Umrah Visa Processing for 2026 :</h3>
<p>We assist pilgrims completely with Umrah visa processing in 2026 and are in charge of producing documents consistent with the directives of the Ministry of Hajj and Umrah. We guarantee that the application is submitted on time and that we keep you informed all the way through visa approval.</p>

<h3>Ground Transfers & Intercity Transport :</h3>
<p>Come with any Umrah 2026 package an airport pickup and drop off in a comfy vehicle as well as a private car for the journey between Makkah and Madinah. You will be free from the stress of travel arrangements if you use our well, planned ground service.</p>

<h3>Guided Ziyarat Tours :</h3>
<p>Many also like the guided ziyarat tour option which will take them to Islamic historical sites like Jabal al, Nour and Quba Mosque. Apart from increasing your spiritual awareness, these tours add to the fun of your whole experience of Umrah 2026.</p>

<h2>Umrah 2026 Visa Requirements for UK Pilgrims</h2>

<p>Understanding the Umrah 2026 visa requirements from UK is essential to ensure a smooth and stress-free pilgrimage. Our team provides complete guidance so your documentation complies with the latest Saudi regulations.
</p>
<h3>Documents Required:</h3>
<p>You should have a valid UK passport with adequate validity, submit a visa application form duly filled, and biometrics verification if needed, to get your Umrah visa 2026. The Ministry of Hajj and Umrah may require the submission of additional documents, based on the changes in its guidelines.</p>

<h3>Vaccination & Health Guidelines:</h3>
<p>Health protocols for Umrah 2026 from UK are in line with those of the Saudi government and thus, you are required to have the meningitis vaccine along with any other vaccines approved at the time of travelling. It is recommended for the pilgrims to be well aware of the current health advisories before starting their journey.</p>

<h3>Visa Processing Timeline</h3>
<p>For the high season such as Ramadan Umrah 2026, we highly recommend that you submit your application very long before your travel date so as to avoid any last, minute difficulties. An early application gives you enough time to get approval, confirm your flight and make the final travel arrangements.</p>

<h3>Umrah Packages 2026 Prices from UK</h3>
<ul>
  <li>The cost of Umrah 2026 from UK varies depending on:</li>
  <li>Travel month</li>
  <li>Hotel category</li>
  <li>Distance from Haram</li>
  <li>Flight availability</li>
  <li>Duration of stay</li>
</ul>
<p>Off-peak packages offer lower starting prices, while Ramadan 2026 Umrah deals and December departures reflect higher demand. Flexible installment plans allow you to secure your booking with manageable payments</p>

<h2>Step-by-Step Booking Process for Umrah 2026</h2>

<p>Booking your <a href="https://www.haditours.co.uk/umrah-packages.html">Umrah Packages</a> from UK is designed to be simple and transparent. Start by choosing your preferred departure month, hotel category (3-star, 4-star or 5-star), and duration of stay. Once your package is selected, a deposit secures your seat and hotel availability.
</p>
<p>Then we assist you with Umrah visa 2026 full processing, flight booking confirmation, and travel documentations. We shall also provide you with travel itinerary, e, tickets, hotel vouchers, and our contact for 24/7 support which will ensure a smooth and well organized pilgrimage experience before you leave.
</p>
<h2>When Is the Best Time to Perform Umrah in 2026?</h2>

<p>The time you decide to do your Umrah 2026 from UK is very much dependent on the budget, preference of crowd, and flexibility in travelling you have. Each season comes with a different set of advantages mainly depending on what you give first priority; whether it's the spiritual significance, affordability, or just having a comfortable place to stay in Makkah and Madinah.
</p>
<h3>Best Months for Fewer Crowds</h3>
<p>January, February, and the post, Hajj 2026 periods are generally the quietest times when you will find the Masjid al, Haram and Al, Masjid an, Nabawi less crowded. In fact, these months make it so much easier for the pilgrims to do the Tawaf and Sai with the least of difficulties while still benefiting from living at more competitive Umrah 2026 package prices.</p>

<h3>Ramadan 2026 – Peak Spiritual Season</h3>
<p>Ramadan Umrah 2026 is the most spiritually fulfilling season and it's no wonder that people from all over UK as well as the whole world come here during this time. Because of the extremely high demand, hotels closest to Haram and flights tend to get sold out very fast, and the overall prices also hover higher than the non peak months.</p>

<h3>Winter Travel Advantages</h3>
<p>Winter in Saudi Arabia is a lot less hot which helps both worship and moving around outdoors to be more comfortable, especially for old pilgrims. December and early 2026 flights are a nice weather combination with the UK families' holiday scheduling convenience.</p>

<h2>Secure Your Umrah Packages 2026 Today</h2>

<p>Availability of some of the best Umrah Packages 2026 from UK is almost sold out. If you book early, you can get a better selection of hotels, more competitive prices, and the benefit of a well organised itinerary planning.</p>
<p>Get in touch with us now for a customised offer and start your preparations for a holy pilgrimage in 2026.</p>

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