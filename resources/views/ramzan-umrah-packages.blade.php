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
  "@id": "https://www.haditours.co.uk/ramadan-umrah-packages.html#ramadanumrah2026",
  "name": "Ramadan Umrah Packages 2026 from UK",
  "url": "https://www.haditours.co.uk/ramadan-umrah-packages.html",
  "description": "Explore a range of all-inclusive Ramadan Umrah packages 2026 from the UK with Hadi Tours, offering 3-star stay options with flights, Umrah visas, hotels in Makkah & Madinah, and transfers. Choose from multiple night durations to suit your travel plans during the blessed month of Ramadan.",
  "provider": {
    "@type": "TravelAgency",
    "@id": "https://www.haditours.co.uk/#travelagency",
    "name": "Hadi Tours",
    "url": "https://www.haditours.co.uk/"
  },
  "serviceType": "Ramadan Umrah Packages 2026",
  "areaServed": {
    "@type": "Country",
    "name": "United Kingdom"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Ramadan Umrah Packages 2026",
    "@id": "https://www.haditours.co.uk/ramadan-umrah-packages.html#catalog",
    "itemListElement": [
      {
        "@type": "AggregateOffer",
        "name": "3-Star 7 Nights Ramadan Umrah Package 2026",
        "url": "https://www.haditours.co.uk/ramadan-umrah-packages.html#3star7",
        "description": "3-star Ramadan Umrah Package 2026: 3 nights in Makkah and 4 nights in Madinah with flights, visa, hotel and transfers included.",
        "priceCurrency": "GBP",
        "lowPrice": 775,
        "highPrice": 775,
        "offerCount": 1,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "3-Star 7 Nights Ramadan Umrah Package 2026"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "3-Star 10 Nights Ramadan Umrah Package 2026",
        "url": "https://www.haditours.co.uk/ramadan-umrah-packages.html#3star10",
        "description": "3-star Ramadan Umrah Package 2026: 5 nights in Makkah and 5 nights in Madinah with flights, visa, hotel and transfers included.",
        "priceCurrency": "GBP",
        "lowPrice": 815,
        "highPrice": 815,
        "offerCount": 1,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "3-Star 10 Nights Ramadan Umrah Package 2026"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "3-Star 12 Nights Ramadan Umrah Package 2026",
        "url": "https://www.haditours.co.uk/ramadan-umrah-packages.html#3star12",
        "description": "3-star Ramadan Umrah Package 2026: 6 nights in Makkah and 6 nights in Madinah with flights, visa, hotel and transfers included.",
        "priceCurrency": "GBP",
        "lowPrice": 845,
        "highPrice": 845,
        "offerCount": 1,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "3-Star 12 Nights Ramadan Umrah Package 2026"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "3-Star 14 Nights Ramadan Umrah Package 2026",
        "url": "https://www.haditours.co.uk/ramadan-umrah-packages.html#3star14",
        "description": "3-star Ramadan Umrah Package 2026: 7 nights in Makkah and 7 nights in Madinah with flights, visa, hotel and transfers included.",
        "priceCurrency": "GBP",
        "lowPrice": 895,
        "highPrice": 895,
        "offerCount": 1,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "3-Star 14 Nights Ramadan Umrah Package 2026"
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
                <h2>All-inclusive Ramadan Umrah packages</h2>
            </div>
            <div class="featuredPackagesUid featured-slick-carousel">
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah-new/24.png')}}"
                                    alt="3 Star 7 Nights Ramadan Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">3 Star 7 Nights Ramadan Umrah Package</a></p>
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
                                    <span class="price">&pound; 775 <sub>/ pp</sub></span>
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
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah/00-min%20%2827%29.webp')}}"
                                    alt="3 Star 10 Nights Ramadan Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">3 Star 10 Nights Ramadan Umrah Package</a></p>
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
                                    <span class="price">&pound; 815 <sub>/ pp</sub></span>
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
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah/00-min%20%2828%29.webp')}}"
                                    alt="3 Star 12 Nights Ramadan Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-12-nights-umrah-package']) }}">3 Star 12 Nights Ramadan Umrah Package</a></p>
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
                                    <span class="price">&pound; 845 <sub>/ pp</sub></span>
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
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah-new/23.png')}}"
                                    alt="3 Star 14 Nights Ramadan Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}">3 Star 14 Nights Ramadan Umrah Package</a></p>
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
                                    <span class="price">&pound; 895 <sub>/ pp</sub></span>
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
</section>
@push('scripts')
<style>
    .featured-slick-carousel {
        position: relative;
        padding-bottom: 50px;
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
        bottom: 0px;
    }

    .featured-slick-carousel .slick-dots li button:before {
        font-size: 12px;
        color: #85641e;
        opacity: 0.3;
    }

    .featured-slick-carousel .slick-dots li.slick-active button:before {
        color: #85641e;
        opacity: 1;
    }

    .mainPackage {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin: 10px;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid #eee;
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
    }

    .mainPackage:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .mainPackageImage img {
        height: 17rem;
        object-fit: cover;
        width: 100%;
    }

    .mainPackageDesc {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
</style>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        function initFeaturedSlider() {
            if (window.jQuery && $.fn.slick) {
                $('.featured-slick-carousel').each(function() {
                    $(this).slick({
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: true,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        infinite: true,
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
        
        <h2>Ramadan Umrah Packages 2026 from UK – Full, Last 10 Nights & Group Deals</h2>

        <h2>Ramadan Umrah Packages by Hadi Tours</h2>

<p>Our spirit, filled Ramadan Umrah packages offer affordable room options, 4, star hotel comfort, and luxury hotels within walking distance of the Haram. For those who want to spend the entire blessed month in worship, our complete Ramadan Umrah package 2026 is the best option. You can also opt for the 7 or 10 nights Ramadan Umrah packages if you want to make the most of the short stay.</p>

        <p>At <a href="https://www.haditours.co.uk/">Hadi Tours</a>, we know how important this journey is
            for you. That&#39;s why our Ramadan Umrah packages are designed to make everything easy and meaningful.
            When you book with us, you&#39;re not just getting travel plans&mdash;you&#39;re trusting a team that
            cares about making your pilgrimage memorable. We take care of everything, from easy flights and
            comfortable places to stay to expert help and support anytime you need it. With Hadi Tours, you can
            focus on your prayers and enjoy this blessed time without worrying about the details.</p>


<h2>Why Perform Umrah in Ramadan?</h2>

<p>One of the most significant aspects of performing Umrah during Ramadan is the spiritual reward. Packing for a pilgrimage is one of the many blessings in your life that a pilgrim travels for during this sacred month because of the great virtues attached to the worship in Ramadan.</p>

<h3>Spiritual Rewards of Umrah in Ramadan</h3>
<p>Umrah during Ramadan gives profound spiritual reward with many believers trying to do as much worship as possible in this month of blessing. Among UK pilgrims, the virtue associated with Ramadan makes Ramadan Umrah packages 2026 highly sought after. Early planning is the key to get your spiritually elevated time journey.</p>

<h3>Experience Taraweeh & Iftar in the Haram</h3>
<p>When you pray Taraweeh in Masjid al-Haram and also break the fast in the same spiritual aura, it is a permanently etched moment for you. Along with this, a number of pilgrims also spend the nights in worship at Al, Masjid an, Nabawi. This is something which spiritually strengthens your Ramadan Umrah trip.</p>

<h3>Laylat al-Qadr & the Last Ashra</h3>
<p>The last ten nights of Ramadan always are a special time, for believers who chase Laylat al, Qadr. We offer our last 10 nights Ramadan Umrah 2026 packages for those pilgrims who would like to highlight their worship during the last Ashra. Book in advance to avoid disappointment as the places are limited.</p>

<h2>Ramadan Umrah Packages 2026 Available from UK</h2>

<p>We provide a wide range of Ramadan Umrah packages 2026 from the UK, which are suitable for different finances and lengths of stays. If you are travelling solo, family or closed group, there are outlined solutions for each of them. Our packages are aimed to ensure that you feel comfortable, save time and get full travel assistance.</p>

<h3>Full Ramadan Umrah Package 2026</h3>
<p>Our full Ramadan Umrah package 2026 makes it possible for you to spend the whole blessed month in Makkah and Madinah. This gives an opportunity for a pilgrim who completely desires the spiritual experience from the first fast until Eid. So, one can pray, meditate, and communicate for a really long time.</p>

<h3>Last 10 Nights Ramadan Umrah 2026</h3>
<p>The last 10 nights of Ramadan Umrah 2026 are still among the favourite picks of the UK pilgrims. Firstly, it concentrates on the last Ashra, and secondly, it gives the chance to look for Laylat al, Qadr in a spiritually energising environment. Since the demand is at its peak, the spots for these packages go very fast.</p>

<h3>First & Second Ashra Ramadan Packages</h3>
<p>If you like the environment to be quiet, then first and second Ashra Ramadan Umrah packages will give you a perfect spiritual experience. Besides that, the crowd level can be slightly lower during these times than the last ten nights. Nevertheless, the two packages remain a great choice for worshipping Ramadan.</p>

<h3>7 & 10 Night Ramadan Umrah Deals</h3>
<p>Shorter holidays like 7 nights Ramadan Umrah packages and 10 nights Ramadan Umrah deals suit best working professionals and families travelling from the UK. With these packages, you have the possibility to combine a flexible lifestyle with some serious time for worship. Also, they manage a good mix of well, organised travel and convenience.</p>

<h2>Types of Ramadan Umrah Packages</h2>

<p>Every pilgrim is unique, so that is why we offer various categories of structured packages.</p>

<h3>Cheap Ramadan Umrah Packages</h3>
<p>If you are a pilgrim and want to perform Umrah during Ramadan but do not have a budget, our cheap Ramadan Umrah packages are the right option for you. These packages cover the basic essentials of comfortable stay, flight returns, and visa support without any unnecessary stuff being added. They are making the trip for Umrah at the time of Ramadan quite easy for the common people while still ensuring the essential quality norms are intact.</p>

<h3>4 Star Ramadan Umrah Packages</h3>
<p>The 4 star Ramadan Umrah packages present a perfect blend of comfort and value. Hotels are usually situated within a handy distance to Haram, the location where daily prayers and Taraweeh take place, thus ensuring convenience. This option works well for the families who are in favor of more comfort and are ready to pay a little extra.</p>

<h3>5 Star Luxury Ramadan Umrah Packages</h3>
<p>Our 5 star Ramadan Umrah packages are perfect for those who put convenience first as they feature top, notch hotels right next to the Haram. They offer a wide range of facilities, top, class service, and the smoothest travel arrangements. Thus, they are the best choice for those who want a peaceful Ramadan Umrah journey.</p>

<h3>Ramadan Umrah Group Packages</h3>
<p>We have created our Ramadan Umrah group packages for families, friends, and community groups coming together for a trip from the UK to the Holy Land. Group management results in well, planned programmes and shared spiritual moments. Apart from that, this option is great for having a personal guide who will take care of you throughout the pilgrimage.</p>

<h3>What’s Included in Our Ramadan Umrah Packages from UK?</h3>
<p>Each Ramadan Umrah package UK is structured to provide complete travel support.</p>
<ul>
<li>Return flights from major UK airports including London, Manchester, and Birmingham</li>
<li>Hotel accommodation in Makkah and Madinah</li>
<li>Full Ramadan Umrah visa 2026 processing</li>
<li>Airport-to-hotel ground transfers</li>
<li>Intercity transport between Makkah and Madinah</li>
<li>Optional guided Ziyarat tours</li>
</ul>
<p>Our packages are designed to minimise stress so you can focus entirely on worship.</p>

<h2>Ramadan Umrah 2026 Prices from UK</h2>

<p>The price of Ramadan Umrah 2026 packages from the UK fluctuates with the type of hotel, distance from Haram, travel dates, flight demand, and stay duration.</p>

<p>High demand periods like the last 10 nights usually see prices going up as a result of the high demand. When you book early, you can get a better hotel location and also cheaper Ramadan Umrah package prices.</p>

<p>We also have payment plan options for you if you want to book your trip with us but are worried about finances.</p>

<h2>When Should You Book Ramadan Umrah Packages 2026?</h2>

<p>Ramadan is one of the harshest seasons for Umrah with almost no hotels available, especially those close to Haram.</p>

<p>To get the accommodation of your choice and flight schedule, we strongly advise you to purchase your  <a href="https://www.haditours.co.uk/umrah-packages.html">Umrah Packages</a> from UK at least 2 - 3 months prior. Also, an early booking guarantees a smoother visa application and a stable price.</p>


<h2>Book Your Ramadan Umrah Package Today</h2>

<p>If you need a cheap Ramadan Umrah package, a full Ramadan Umrah package, or a last 10 nights Ramadan Umrah 2026 deal, do not hesitate to contact our staff.</p>

<p>Grab your Ramadan Umrah packages from UK now and get ready for the blessed month of Ramadan 2026, a spiritually uplifting journey.</p>


    </div>

</div>

@endsection