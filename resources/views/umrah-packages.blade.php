@extends('layouts.master')
@section('meta')
<title>All-Inclusive Umrah Packages 2026 | Cheap & Luxury Umrah Deals UK</title>
<meta name="description" content="Discover affordable and all-inclusive Umrah packages from the UK. We offer 3-star, 4-star, and luxury 5-star Umrah deals with flights, hotels near Haram, visas, and transport.">
<link rel="canonical" href="https://www.haditours.co.uk/umrah-packages.html" />
@endsection

@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "All-inclusive Cheap Umrah Packages From UK",
  "url": "https://www.safatravel.co.uk/umrah-packages.html",
  "description": "Hadi Tours offers Umrah Packages for Muslim pilgrims who are planning to perform Umrah from the UK. As the Umrah services are started from the UK, the guests of Allah Subhana Watallah can take full advantage of our special advance Umrah packages designed with the comfort of UK pilgrims in mind. Hadi Tours offers affordable, cheap, family, group, individual, and luxury Umrah packages with Umrah flights, visa, comfortable hotels near the Haram, transport, and Ziarats. Looking for the best affordable Umrah packages from the UK and wanting to experience a blessed Umrah journey while staying within your budget? Hadi Tours is here to help you make your holy dream become reality with our cheap Umrah packages from the UK. Being an ATOL and IATA certified Umrah travel agency with an on-ground team in Makkah and Madinah, we handle all your arrangements smoothly so you can focus on your prayers and the purpose of your journey",
  "provider": {
    "@type": "Organization",
    "name": "Hadi Tours",
    "url": "https://www.haditours.co.uk/"
  },
  "serviceType": "Umrah Tour Service",
  "areaServed": {
    "@type": "Country",
    "name": "United Kingdom"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Umrah Packages",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "3-Star Umrah Packages",
          "description": "Affordable 3-star Umrah packages for 7, 10, 12, and 14 nights with flights, visa, hotels and transport.",
          "offers": {
            "@type": "AggregateOffer",
            "priceCurrency": "GBP",
            "lowPrice": "650",
            "highPrice": "795",
            "offerCount": "18"
          }
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "4-Star Umrah Packages",
          "description": "Comfortable 4-star Umrah packages with hotels near Haram, flights, visa and transfers.",
          "offers": {
            "@type": "AggregateOffer",
            "priceCurrency": "GBP",
            "lowPrice": "735",
            "highPrice": "875",
            "offerCount": "15"
          }
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "5-Star Umrah Packages",
          "description": "Luxury 5-star Umrah deals with premium hotels, business class options, visa & ground transport.",
          "offers": {
            "@type": "AggregateOffer",
            "priceCurrency": "GBP",
            "lowPrice": "850",
            "highPrice": "1020",
            "offerCount": "12"
          }
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
                <h2>All-inclusive Cheap Umrah Packages</h2>
                <p>03 Star Umrah Packages</p>
            </div>
            <div class="featuredPackagesUid featured-slick-carousel">
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah-new/19.png')}}"
                                    alt="3 Star 7 Nights Umrah Package"></a>
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
                                    <span class="price">&pound; 699 <sub>/ pp</sub></span>
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
                                    src="{{asset('assets/media/umrah-new/20.png')}}"
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
                                    <span class="price">&pound; 749 <sub>/ pp</sub></span>
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
                                    src="{{asset('assets/media/umrah-new/21.png')}}"
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
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-14-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah-new/22.png')}}"
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
                                    <span class="price">&pound; 829 <sub>/ pp</sub></span>
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
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah-new/5.png')}}"
                                    alt="4 Star 7 Nights Umrah Packages"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-7-nights-december-umrah-package']) }}">4 Star 7 Nights Umrah Packages</a>
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
                                    <span class="price">&pound; 749 <sub>/ pp</sub></span>
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/8.png')}}"
                                    alt="4 Star 10 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-10-nights-december-umrah-package']) }}">4 Star 10 Nights Umrah Package</a>
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
                                    <span class="price">&pound; 799 <sub>/ pp</sub></span>
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
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah-new/7.png')}}"
                                    alt="4 Star 12 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-12-nights-december-umrah-package']) }}">4 Star 12 Nights Umrah Package</a>
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
                                    <span class="price">&pound; 849 <sub>/ pp</sub></span>
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
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah-new/6.png')}}"
                                    alt="5 Star 14 Nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '4-star-14-nights-december-umrah-package']) }}">5 Star 14 Nights Umrah Package</a>
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
                                    <span class="price">&pound; 899 <sub>/ pp</sub></span>
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
                                    src="{{asset('assets/media/umrah-new/8.png')}}"
                                    alt="5 Star 10 nights Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '10-nights-5-star-umrah-package']) }}">5 Star 10 nights Umrah Package</a>
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
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '12-nights-5-star-umrah-package']) }}">5 Star 12 Nights Umrah Package</a>
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
                                <p class="title">
                                    <a href="{{ route('umrahDetail', ['slug' => '5-star-7-nights-economy-umrah-package']) }}">5 Star 7 Nights Umrah Package</a>
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
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
    @push('scripts')
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

        <p>&nbsp;</p>

        <h2>Set On a Spiritual Journey with&nbsp;All-Inclusive Umrah Packages</h2>

        <p>Have you decided to go for an Umrah this year and please Allah? Haditours can make it happen for you
            with our cheap Umrah packages. It is time to reclaim the peace of your heart and gain the spiritual
            purity you have always wanted.</p>

        <p><strong>Contact Us Now and Get Affordable Umrah Deals!</strong></p>

        <h2>Get the Cheapest Umrah Packages from the UK Now</h2>

        <p>As Muslims, we are aware of the significance of Umrah, the reward, and the spiritual journey that it
            takes you on. It has great value in Islam and was performed by our beloved Prophet (PBUH) four times in
            his lifetime. If Allah has filled your heart with the yearning to perform Umrah, you must feel lucky and
            start making the arrangements even if you are tight on the budget.</p>

        <p>We at Haditours know the urge of our Muslim brothers and sisters to go to the holy places in Makkah.
            Therefore, we provide you with the most affordable <a
                href="{{ route('umrahPackages2026') }}">Umrah packages in 2026</a>, so you
            don&#39;t have to overthink before setting on the journey. We can take care of everything from the visa
            and flight to the hotel you will be staying in.</p>

        <p>Being an experienced <a href="https://www.haditours.co.uk/" target="_self">travel agency</a>, we aim
            to provide the ideal Umrah packages to all Muslims in the UK. Thus, think of it as Allah calling you to
            his home.</p>

        <h2>Significance of Umrah for the Muslims</h2>

        <p>Muslims can perform Umrah any time of the year, excluding the Hajj days. It is done to purify their souls
            and ask forgiveness for the sins that they have committed in the past. There is no obligation to Umrah;
            it can be performed multiple times in a lifetime. True believer sets on a pilgrimage away from their
            house and spends their wealth in Allah&#39;s way to please them. This is one of the reasons why this
            religious activity is seen as a way of eradicating poverty and life burdens.</p>

        <p>Umrah is seeking blessings from the Almighty and refreshing the faith. Hundreds and thousands of Muslims
            worldwide visit the holy sites in Saudi Arabia to pay their respects and perform religious acts. In
            addition, it is also the most soul-lifting Sunnah with great rewards and benefits. Besides bringing
            spiritual purity, Umrah is the source of peace and contentment for all Muslims.</p>

        <p>Our beloved Prophet (PBUH) said that Muslims must alternate between Hajj and Umrah as it is responsible
            for eradicating their sins and poverty. Moreover, the person gets purified of sins and poverty like the
            blacksmith bellow eliminates all the impurities from valuable metals like silver, iron, and gold.</p>

        <p>Also, its reward is equal to one of the noblest acts in Islam, which is Jihad. Performing Umrah with a
            pious intention guarantees an entrance into Jannah. So, Umrah is of great significance and value for
            Muslims, and devotion is visible among the believers. If you want to go to Umrah from the UK, look no
            further than Haditours to make it happen for you.</p>

        <h2>Why is Saudi Arabia so Sacred for the Muslims?</h2>

        <p>Saudi Arabia has Makkah and Madinah, the two holy sanctuaries of Islam. It is Holy Prophet (PBUH) &#39;s
            birthplace too. Not only that, but the holy Kaaba is also located in this spiritual city. Madinah is
            where the Prophet (PBUH) spent a good amount of time in his life and is also his burial place. Saudi
            Arabia&#39;s history is closely linked to the history of Islam and is the guardian of some of the
            holiest places in Islam.</p>

        <p>Saudi Arabia has always been sacred for Muslims because of its strong association with Islam&#39;s
            history. Islamic history, culture, and heritage are all connected to Saudi Arabia. Not only that but
            also, Muslims worldwide turn towards Kaaba Makkah five times daily to offer obligatory prayers. Being a
            special place in the Islamic world, over one billion Muslims from all races, ethnicities, and cultures
            visit Saudi Arabia at some point in their lives. Umrah is always open, and people come for as little as
            one day to as long as a month.</p>

        <p>Saudi Arabia is also called Islam&#39;s heartland. This is the birthplace of Islam, and everything in its
            history has some connection to this sacred kingdom. Therefore, this country is sacred for all Muslims
            around the globe, and every single one turns to it to perform religious obligations. If you want to
            perform an Umrah soon, it is time that you start looking for Umrah deals.</p>

        <h2>What Airlines Fly to Saudi Arabia from the UK?</h2>

        <p>In case you want cheap Umrah flights, you can browse through the schedules of the following airlines;</p>

        <ul>
            <li>Lufthansa</li>
            <li>British Airways</li>
            <li>Emirates</li>
            <li>EasyJet</li>
            <li>Air France</li>
            <li>Saudia</li>
            <li>Turkish Airlines</li>
            <li>Aegean Airlines</li>
            <li>Wizz Air</li>
            <li>EgyptAir</li>
            <li>Pegasus Airlines</li>
            <li>Ryanair</li>
        </ul>

        <p>You can avail of cheap Umrah packages and travel on any of the airlines mentioned above comfortably from
            the UK to Saudi Arabia.</p>

        <h2>When do most Muslims do Umrah?</h2>

        <p>Umrah, also called minor Hajj, can be performed any time of year except for the Hajj days. The perfect
            time to do Umrah to gain more blessings is Ramadan. Many people go for an Umrah in Ramadan because the
            month is quite sacred. What is better than performing Umrah while fasting in the blessed month of
            fasting? Muslims understand the significance of this holy month and the blessings that it comes with,
            and no time can be better than this month to perform this religious act.</p>

        <p>In addition, many prefer an Umrah in January and December because of the ideal weather conditions.
            Moreover, another preferable time to go for an Umrah is at the end of the Hajj season, especially if you
            want to go at lesser rush times. So, you can avail of cheap Umrah packages during this time.</p>

        <h2>Flight Destinations in Saudi Arabia for Umrah</h2>

        <p>If you are travelling to Saudi Arabia with an Umrah visa, you can land and depart from any flight
            destination in Saudi Arabia. At the same time, passengers with a tourist or business visa can only
            travel to and from Madinah, Jeddah, Yanbu or Taif. Most passengers going solely for Umrah try to travel
            from King Abdulaziz International Airport (JED) in Jeddah because of its proximity to Makkah.</p>

        <p>In addition to that, another popular flight destination for people going for an Umrah is Prince Mohammed
            Bin Abdulaziz Airport (MED) in Madinah. Multiple airlines provide flights to and from Jeddah and
            Madinah, mainly for Umrah passengers. Once you have availed of the Umrah package from Uk, you will know
            where you will be landing so that you can arrange the rest of the journey accordingly. We at Hadi Tours can help you get cheap Umrah packages to any of the flight destinations of your choice.</p>

        <h2>Affordable Luxury Umrah Packages at 3, 4, and 5-Star Hotels</h2>

        <p>Haditours has been serving Muslims in the UK for quite some years with cheap Umrah packages
            consisting of luxury hotel accommodations. We provide you with 3, 4, and 5-star hotels according to your
            budget and liking. However, some of the most stayed-in hotels are those that are nearest to Kaaba. These
            hotels are the highest in demand and are considered 5-star. So tell us your requirements, and our team
            will arrange the ideal package for you.</p>

        <p>Moreover, we provide cheap Umrah packages for 7, 10, 12, and 14 days. So, whether you want to stay in the
            holy city for a week or half a month, we have covered you with ideal Umrah packages UK. All our deals
            are affordable and reliable so that you can have peace of mind. Please leave all of it to us and start
            packing for your spiritual journey to give your faith a chance to strengthen again.</p>

        <p>Moreover, we provide complimentary breakfast with most of the hotels. The flight, hotel, and food charges
            greatly depend on the season. If it is the season in which people frequently go for an Umrah, the prices
            of everything might be higher. So, if you want to keep the package budget-friendly, consider planning
            your Umrah in less-demanded months. Leave all of it to us and start packing for your spiritual journey
            to give your faith a chance to strengthen again.</p>

        <p>Also, cheap yet luxurious Umrah packages are like honey to the believer&#39;s ears and soul. It means you
            don&#39;t have to save money for years to mark your attendance at Almighty&#39;s home and the
            prophet&#39;s city. Book Umrah tickets now and give Haditours a chance to participate in your
            spiritual and religious revival.</p>

        <p><strong>Contact Us Now to Book Cost-effective Umrah Flights!</strong></p>

        <h2>Why Choose Haditours for Your Umrah Packages</h2>

        <p>It&#39;s really important to pick the right travel agency for your Umrah Package so that you have a good
            and easy journey. At Hadi Tours, we promise to give you the best experience possible, from when you
            first book your Umrah Package till you return home.</p>

        <p>We know how much money you can spend is essential when deciding which Umrah Package to choose. That&#39;s
            why we ensure that the pricing for our all-inclusive Umrah Packages is reasonable. We work hard to get
            great prices from airlines, hotels and transport providers, so you can get the best deal for your money.
        </p>

        <p>Furthermore, we can make a special Umrah Package just for you. We will design it based on your budget,
            availability, and preferences.</p>

        <p>Finally, we are here for you 24/7 to give you help and support during your Umrah. If you have any
            questions about your travel plan or need help with any travel problems, our customer support team is
            always ready to assist you.</p>

        <h3>IATA Certified</h3>

        <p>When you travel for Umrah, you want to ensure that you are secure and protected. That&#39;s why we at
            Haditours are IATA certified, which means we follow strict safety standards for air travel. This
            certificate confirms our status to provide safe and reliable travel arrangements for our customers.</p>

        <p>So, when you book your Umrah Package with us, you can trust you are in good hands. With our IATA
            certification, you can rest assured that your safety is our greatest concern.</p>

        <h3>ATOL Protection</h3>

        <p>At Hadi Tours, we understand that unpredictable events can occur when travelling. Therefore, we
            provide ATOL protection for all our Umrah Packages. ATOL stands for Air Travel Organisers License, which
            is a government-backed scheme. This prevents you from losing money or being stuck overseas in case of
            any unforeseen circumstances.</p>

        <p>If there are any disruptions or cancellations, we will compensate you or bring you back to the UK. So,
            you can rest assured that your money is safe with us, and you can enjoy your spiritual journeys without
            any worries.</p>

        <h2>All-Inclusive Umrah Packages</h2>

        <p>From flights to accommodation, transportation, and visa processing, our all-inclusive Umrah Packages
            include everything you need for a seamless journey. We created them to suit all budgets and preferences.
            Therefore, you will find the cheapest Umrah Packages with Hadi Tours.</p>

        <p>Firstly, our all-inclusive Umrah Packages cover the cost of flights from major UK airports like London,
            Birmingham, and Manchester. We team up with trusted airlines to ensure a safe and comfortable flight.
        </p>

        <p>In addition, our Umrah Packages from the UK will cover all your transportation requirements. This
            includes transportation from your hotel to the holy places. We offer comfortable and air-conditioned
            vehicles to ensure a relaxing ride.</p>

        <p>Finally, we know that getting a visa can be a scary job. That is why our all-inclusive Umrah Packages
            handle the visa process for you. We manage all documentation and make sure that your visa is processed
            fast and correctly.</p>

        <h2>Frequently Asked Questions</h2>

        <h3>Do I need to vaccinate myself before performing Umrah?</h3>

        <p>Yes, we strongly suggest that you get vaccinated before performing Umrah. Before entering the country,
            the Saudi Arabian Ministry of Health requires visitors to have certain vaccinations, including the
            meningococcal vaccine.</p>

        <p>We recommend getting other routine vaccinations, such as the flu vaccine, to protect yourself from other
            illnesses during your journey.</p>

        <h3>Can I choose my hotel when booking an Umrah Package with you?</h3>

        <p>Yes, you can add a hotel of your choice when booking an Umrah Package with Hadi Tours. Our Umrah
            Packages from the UK are customisable, allowing you to tailor your package to suit your needs and
            preferences.</p>

        <h3>What is the cheapest Umrah Package from the UK?</h3>

        <p>At Hadi Tours, we offer a range of cheap Umrah Packages from the UK to suit your budget. Our Umrah
            Packages start from as low as &pound;579 per person, and we offer a variety of packages that cater to
            different budgets.</p>

        <h3>Would my Umrah Package include transportation from the airport to my hotel?</h3>

        <p>We will take you from the airport to your hotel when you choose one of our Umrah Packages.</p>

        <p>We know getting around in a new place can be difficult, especially when you don&#39;t know the local
            language. That&#39;s why we help with all your transportation needs so you don&#39;t have to worry and
            can enjoy your journey.</p>

        <p>Our experienced professionals will be waiting for you at the airport to ensure a smooth journey to your
            hotel. You can rest assured that we will take care of all transportation needs so that you can focus on
            your spiritual journey.</p>

        <h3>Do you offer Umrah Packages with Ziarat?</h3>

        <p>Yes, Haditours offers Umrah Packages with Ziarat. Our packages include visits to the holy sites in
            Makkah and Madinah, allowing you to experience these locations&#39; spiritual and cultural significance.
        </p>

        <h3>Is it possible to visit other places in Saudi Arabia with Umrah Package?</h3>

        <p>Since our Umrah Packages have an Umrah visa and not a visit visa, you can only visit the following three
            cities:</p>

        <ul>
            <li>Makkah</li>
            <li>Madina</li>
            <li>Jeddah</li>
        </ul>

        <h3>Are there any age restrictions for your Umrah Packages?</h3>

        <p>At Hadi Tours, we offer Umrah Packages suitable for all ages. However, if you are under the age of 18
            and want to perform Umrah, you must have a parent or a legal guardian with you.</p>

        <h3>How much luggage is allowed on flights for Umrah?</h3>

        <p>It&#39;s important to know that the rules can differ depending on which airline you choose and your
            ticket type. But most airlines usually let you bring one big suitcase that weighs up to 23 kg and a
            smaller bag that you can carry with you that weighs up to 7 kg.</p>

        <h3>Is it mandatory to have a Mahram for women to perform Umrah?</h3>

        <p>Although women are encouraged to go on Umrah with a Mahram, it&#39;s not required. In the past, Saudi
            Arabia had a rule that women couldn&#39;t go on the pilgrimage alone. They had to go with a Mahram.</p>

        <p>However, now those restrictions have been relaxed. If a woman cannot find a Mahram to accompany her on
            the journey, she can join a group of other women and travel with a female tour guide.</p>

        <h3>How much time do I need to perform Umrah?</h3>

        <p>You can perform Umrah in just a few hours if you are a healthy individual, the weather is good, and the
            crowds are smaller. On average, you can perform Umrah in just 4-6 hours. However, after performing the
            rituals, Muslims visit Madina two perform nafl prayers.</p>

        <p>Therefore, depending on how long you want to stay in each city, Umrah can take anywhere between 7 to 14
            days.</p>

        <h3>Do I need to be physically fit to perform Umrah?</h3>

        <p>Although Umrah is physically demanding, it is doable for people of all fitness levels. We also recommend
            wearing comfortable shoes and taking frequent breaks to rest during the various rituals.</p>

        <p>Furthermore, we also attend to the needs of disabled people. For further information regarding that, you
            can contact our customer support team.</p>

        <h3>How far is Madina from Makkah?</h3>

        <p>The distance between Makkah and Madina is approximately 279 miles (450 kilometres). This can be covered
            in almost two and a half hours by train and four and a half hours by car.</p>

        <h3>Is photography allowed during Umrah?</h3>

        <p>Although there are not any strict restrictions on taking pictures during Umrah, it is still discouraged.
            However, taking pictures of other pilgrims is strictly forbidden.</p>

        <h3>What is the best way to stay updated on the latest Umrah travel guidelines?</h3>

        <p>Our website is the greatest source to get the most recent news and updates about Umrah travel
            regulations.</p>

        <p>Moreover, when you book your Umrah Package&nbsp;with us, we will keep you informed of any changes or
            updates to guidelines. Our team of professionals is always here to answer your questions and offer you
            the most up-to-date information.</p>

        <h3>What kind of gifts can I buy in Saudi Arabia during Umrah?</h3>

        <p>The following are just a few examples of the many gift options available in Saudi Arabia during Umrah.
            It&#39;s always a good idea to ask locals for recommendations or visit local markets to discover unique
            gifts.</p>

        <ul>
            <li>Zamzam Water</li>
            <li>Dates</li>
            <li>Prayer Beads</li>
            <li>Prayer Mat</li>
            <li>Islamic Books</li>
            <li>Arabian Coffee</li>
            <li>Oud Perfume</li>
        </ul>

        <h3>What is the blessing of performing Umrah in Ramadan?</h3>

        <p>Ramadan comes with many blessings and the good news of forgiveness for the believers. Going for an Umrah
            in the month of Ramadan is rewarded equivalent to a Hajj. But it cannot replace the obligatory
            Hajj.&nbsp;</p>

        <h3>What are the rules for Umrah?</h3>

        <p>Some rules for Umrah include the following;</p>

        <ul>
            <li>Travelling to Makkah</li>
            <li>Performing Tawaf and entering Masjid Al Haram</li>
            <li>Doing Tawaf of the Kaaba (circling the Kaaba in a counterclockwise direction seven times)</li>
            <li>Walking between Safa and Marwa seven times</li>
            <li>Men shave their heads at the end of the Umrah</li>
        </ul>

        <h3>Is Saudi Arabia visa-free for the citizens of the UK?</h3>

        <p>No, Saudi Arabia is not visa-free for UK citizens. However, the UK is included in the fifty countries
            that can apply for an electronic visa to visit Saudi Arabia.</p>

        <h3>What is the time duration to travel from the UK to Saudi Arabia by air?</h3>

        <p>The average flight from the UK to Saudi Arabia is around 6 hours and 40 minutes. This might vary
            depending on various factors, including weather conditions, flight departure, and landing destination.
        </p>

        <h3>What is the time difference between the UK and Saudi Arabia?</h3>

        <p>The time in the UK is three hours behind that in Saudi Arabia.</p>

        <h3>Which airlines offer non-stop direct flights from the UK to Saudi Arabia?</h3>

        <p>Some airlines that provide direct flights from the UK to Saudi Arabia include;</p>

        <ul>
            <li>British Airways</li>
            <li>Saudia</li>
            <li>Iberia</li>
            <li>Garuda Indonesia</li>
        </ul>

        <h3>Which months are the cheapest for Umrah?</h3>

        <p>Summer months, including June, July, and August, are the cheapest months to perform Umrah. This is
            because the temperature is very high during these months, and you can quickly get affordable Umrah
            packages.</p>

        <h4>3 Star Umrah Package Price from UK
        </h4>
        <P>3 star Umrah Packages are the best fit for the pilgrims who are looking for cheap accommodation without any unnecessary stuff. These packages are laid out for a few comforts thus the total expenses are very low especially if you travel during the months of low demand.
        </P>
        <h4>4 Star Umrah Packages Cost</h4>
        <p>4 star packages are a good combination of quality and reasonable price. They are the most preferred for the families and couples who want to have a good time with better facilities and at the same time keep the costs at an acceptable level.</p>
        <h4>5 Star Luxury Umrah Package Prices
        </h4>
        <p>5 star Umrah Packages near Haram give a private feeling, saving a few minutes of your walking and better hotel service. Even if their price is higher than the regular ones, they give you a bigger possibility of getting your rest and leisure.
        </p>

        <h2>Factors That Affect the Cost of Umrah Packages
        </h2>

        <p>Several elements influence Umrah Package prices:</p>

        <ul>
            <li>Ramadan or peak season travel</li>
            <li>Hotel proximity to Haram</li>
            <li>Direct versus indirect flights</li>
            <li>Duration of stay (7 days, 10 days, or 14 days)</li>
            <li>Room occupancy type</li>
        </ul>

        <p>Travelling during less crowded months can significantly reduce overall Umrah costs.</p>

        <h2>Why Choose Hadi Tours for Umrah Packages?</h2>

        <p>Selecting a trusted travel agency ensures your pilgrimage remains focused on worship rather than logistical concerns.</p>

        <ul>
            <li>Travel dates can be flexible throughout 2026 and flights are available from major UK airports</li>
            <li>First-time pilgrims and solo travellers benefit from well-organised arrangements</li>
            <li>Carefully selected accommodations near Haram</li>
            <li>Fully fledged Umrah visa support for 2026</li>
            <li>Reputable airlines offering direct and connecting flights</li>
            <li>Choice of 3-star, 4-star, and 5-star Umrah Packages 2026</li>
            <li>Family &amp; group packages available upon request</li>
            <li>Flights from London, Manchester, Birmingham, Glasgow, Leeds, and other UK cities</li>
            <li>Special arrangements for the elderly and those with additional needs</li>
            <li>Fair pricing with no hidden charges</li>
            <li>Secure payment gateway with proper documentation</li>
            <li>ATOL-protected Umrah Packages 2026 ensuring financial protection</li>
            <li>24/7 UK-based customer support before, during, and after travel</li>
        </ul>

        <h2>How to Book Your Umrah Package from the UK</h2>

        <p>
            Booking your Umrah Package from the UK is meant to be easy, clear, and professionally handled throughout. First, you choose the Umrah Package that fits your travel plans, budget, and preferred hotel category. Whether you decide on affordable 3-star hotels or luxury 5-star hotels near Haram, our team helps you select the most suitable option based on location, flight type, and duration of stay.
        </p>

        <p>
            Next, you provide your passport information and required documents so we can begin the Umrah visa process. Our experienced team carefully reviews all documents to ensure they comply with current Saudi regulations, helping to prevent delays or issues during the application stage. Throughout this process, you receive clear guidance and regular updates.
        </p>

        <p>
            Once your visa is granted, we reconfirm your full travel itinerary, including return flights to your selected UK airport, hotel arrangements in Makkah and Madinah, and ground transportation within Saudi Arabia. You will receive a well-organised travel pack containing your booking confirmations, flight tickets, hotel details, and all essential travel information.
        </p>

        <p>
            Our UK-based support team remains available to assist you with any last-minute questions or travel advice before departure. From the moment you leave the UK until you safely return home, every aspect of your pilgrimage is carefully managed, allowing you to focus fully on worship and spiritual reflection.
        </p>

        <h2>When Is the Best Time to Book Umrah from UK?</h2>

        <p>Umrah can be performed throughout the year except during the Hajj period. The best time to book your Umrah Package from UK depends on your budget, preferred travel dates, and spiritual goals. Factors such as school holidays, Ramadan demand, and hotel proximity to Haram all influence availability and pricing.
        </p>

        <h3>Ramadan – The Most Rewarding Time for Umrah</h3>
        <p>
            Ramadan is regarded as the time with the deepest spirituality to perform Umrah, especially the last ten nights. Due to the very high demand, the UK Ramadan Umrah Packages are usually necessitating an early booking just to be able to secure the hotels near Haram and the flights at competitive prices. Although the prices are generally higher during this peak season, many pilgrims give the priority to the great spiritual rewards that come with travelling in this holy month.
        </p>

        <h3>Cheapest Months for Umrah Packages</h3>
        <p>
            The summer season, in particular June, July, and August, is generally when a lot of cheaper Umrah Packages UK will be available as a result of less demand and higher temperatures. Pilgrims who are looking for cheap Umrah Packages commonly decide to travel during the less busy periods so that they can enjoy the benefits of lower hotel prices and a higher availability of flights. In addition, making your reservation early in these months can also contribute to you obtaining competitive prices for your Umrah Package.
        </p>

        <h3>Off-Peak Umrah Travel Benefits</h3>
        <p>
            Going on a pilgrimage during the less busy times of the year means the pilgrim gets to enjoy a relaxed and comfortable spiritual journey. There are less people around the Haram making Tawaf and Sai simpler activities especially for the old age pilgrims. Besides that, off, peak travel not only means getting a lower price for your accommodation but also having a wider selection of hotels in the vicinity of Haram to choose from.
        </p>

        <h2>Book Your Umrah Package Today with Confidence</h2>

        <p>No doubt your spiritual journey should be well, planned and guided by reliable people. At Hadi Tours, we provide ATOL protected Umrah Packages from the UK, an expert support team, and a variety of options, thus making your pilgrimage spiritually focused and without hassle.</p>

        <p>Get in touch with us nowadays to grab your Umrah Package UK and start your trip with total peace of mind.
        </p>

    </div>
    @endsection
