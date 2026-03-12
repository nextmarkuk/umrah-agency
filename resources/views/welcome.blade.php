@extends('layouts.master')
@section('meta')
<title>Trusted Islamic Travel Agency in the UK for Umrah Services</title>
<meta name="description" content="Get Umrah services from a trusted Islamic travel agency in London, UK. We offer all-inclusive Umrah packages for families, groups, and individuals.">
<link rel="canonical" href="https://www.haditours.co.uk" />
@endsection
@verbatim
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "TravelAgency",
        "@id": "https://www.haditours.co.uk/#travelagency",
        "name": "Hadi Tours",
        "alternateName": "Leading Hajj and Umrah Travel Agency in UK",
        "url": "https://www.haditours.co.uk/",
        "image": "https://haditours.co.uk/public/assets/images/logo.png",
        "logo": "https://haditours.co.uk/public/assets/images/logo.png",
        "description": "Hadi Tours is a leading Hajj and Umrah tours Operator in the UK, ATOL & IATA certified, specialising in Umrah packages, Hajj support, flights, hotels, and tailored Hajj and Umrah travel services.",
        "priceRange": "£££",
        "telephone": "+44 20 3103 0264",
        "email": "info@haditours.co.uk",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "13 Station Rd",
            "addressLocality": "London",
            "postalCode": "SE25 5AH",
            "addressCountry": "GB"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 51.39793,
            "longitude": -0.07592
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+44 20 3103 0264",
            "contactType": "customer service",
            "areaServed": "GB",
            "availableLanguage": ["English", "Urdu", "Arabic"]
        },
        "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday"
                ],
                "opens": "09:00",
                "closes": "20:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Saturday", "Sunday"],
                "opens": "10:00",
                "closes": "18:00"
            }
        ],
        "sameAs": [
            "https://www.facebook.com/haditours",
            "https://x.com/haditours",
            "https://www.instagram.com/haditours",
            "https://uk.pinterest.com/haditours",
            "https://www.linkedin.com/company/haditours"
        ],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.9,
            "bestRating": 5
        },
        "knowsAbout": [
            "Family Umrah Packages from UK",
            "Group and Individual Umrah Packages UK",
            "Hajj & Umrah Services",
            "Leading Hajj and Umrah Tours Agency in UK",
            "Flights & Hotels Booking"
        ],
        "makesOffer": [{
                "@type": "Offer",
                "name": "Umrah Packages",
                "url": "https://www.haditours.co.uk/umrah-packages.html",
                "description": "Affordable 3-star, 4-star, and 5-star Umrah packages including flights, visa, hotels near Haram, transport, and Ziyarat tours.",
                "availability": "https://schema.org/InStock"
            },
            {
                "@type": "Offer",
                "name": "Hajj Support Services",
                "url": "https://www.haditours.co.uk/cheap-hajj-packages.html",
                "description": "Guided Hajj advice and support provided by experienced consultants.",
                "availability": "https://schema.org/InStock"
            },
            {
                "@type": "Offer",
                "name": "Flights & Hotel Bookings",
                "url": "https://www.haditours.co.uk",
                "description": "Worldwide flights, hotel booking services, and customized travel itineraries.",
                "availability": "https://schema.org/InStock"
            }
        ]
    }
</script>
@endverbatim
@section('content')
<section class="search-banner">
    <!--slider section Start-->
    <div class="banner">
        <img src="{{asset('assets/media/pages/home-page-banner-for-haditours-1.png')}}" class="img-fluid" alt="Home Page Banner - Hadi Tours" width="1920" height="600" fetchpriority="high">
        <div class="banner-text">
            <h1>Trusted Islamic Travel Agency&nbsp;in UK</h1>
            <p>For Umrah Services</p>
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

<style>
    .featured-slick-carousel {
        margin-bottom: 40px !important;
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
        /* Allow overflow for the hover shadow and transformations */
        overflow: visible;
    }

    /* Add padding to the slick-list to contain the shadow/transform without clipping */
    .featured-slick-carousel .slick-list {
        padding: 20px 0 60px !important; /* Bottom padding for shadows and height */
        margin: -20px 0 -60px !important;
        overflow: visible !important;
        transition: height 0.3s ease;
    }

    .featured-slick-carousel .item {
        padding: 15px;
        height: auto !important;
    }

    .featured-slick-carousel .mainPackage {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin: 0;
        height: auto !important; /* Allow matchHeight to set the height */
        display: flex;
        flex-direction: column;
        border: 1px solid #eee;
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .featured-slick-carousel .mainPackage:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.18);
        position: relative;
        z-index: 10;
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
        bottom: 58px; /* 2px below the cards (60px padding - 2px) */
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
<section class="featuredPackages">
    <div class="container">
        <div class="sectionMainHeading">
            <h2>
                <span>03 STAR Exclusive</span>
                Umrah Deals
            </h2>
            <p>Haditours Brings Affordable Packages with Nearby Hotels</p>
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
                                <img class="img-fluid" loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/19.png')}}" alt="3 Star 7 Nights Umrah Package">
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="3 Star 7 Nights Umrah Package Icon">
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
                                    <span class="price">£ 699 <sub>/ pp</sub></span>
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="3 Star 10 Nights Umrah Package Icon">
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
                                    <span class="price">&pound; 749 <sub>/ pp</sub></span>
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (6 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (6 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="3 Star 12 Nights Umrah Package Icon">
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
                                    <span class="price">&pound; 789 <sub>/ pp</sub></span>
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/22.png')}}"
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="3 Star 14 Nights Umrah Package Icon">
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
                                    <span class="price">&pound; 829 <sub>/ pp</sub></span>
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
                Umrah Deals
            </h2>
            <p>Haditours Brings Affordable Packages with Nearby Hotels</p>
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
                                    width="336" height="279" src="{{asset('assets/media/umrah-new/23.png')}}"
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (4 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (4 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="4 Star 10 Nights December Umrah Package Icon">
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
                                    <span class="price">&pound; 800 <sub>/ pp</sub></span>
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/24.png')}}"
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="4 Star 14 Nights December Umrah Package Icon">
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
                                    <span class="price">&pound; 900 <sub>/ pp</sub></span>
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/25.png')}}"
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="4 Star 7 Nights December Umrah Package Icon">
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
                                    <span class="price">&pound; 1015 <sub>/ pp</sub></span>
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/26.png')}}"
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="4 Star 10 Nights December Umrah Package Icon">
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
                                    <span class="price">&pound; 1050 <sub>/ pp</sub></span>
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/27.png')}}"
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (6 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (6 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="4 Star 12 Nights December Umrah Package Icon">
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
                                    <span class="price">&pound; 1065 <sub>/ pp</sub></span>
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/28.png')}}"
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="4 Star 14 Nights December Umrah Package Icon">
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
                                    <span class="price">&pound; 1130 <sub>/ pp</sub></span>
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
                Umrah Deals
            </h2>
            <p>Haditours Brings Affordable Packages with Nearby hotels from Holy Haram and Masjid Al Nabwi</p>
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/29.png')}}"
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="5 Star 7 Nights Economy Umrah Package Icon">
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
                                    <span class="price">&pound; 700 <sub>/ pp</sub></span>
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/30.png')}}"
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (5 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (5 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="10 Nights 5 Star March Umrah package Icon">
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
                                    <span class="price">&pound; 815 <sub>/ pp</sub></span>
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
                                    width="336" height="279" src="{{asset('assets/media/umrah-new/13.png')}}"
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="5 star 7 night Umrah package Icon">
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
                                    <span class="price">&pound; 710 <sub>/ pp</sub></span>
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
                                    width="336" height="279" src="{{asset('assets/media/umrah-new/27.png')}}"
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (3 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (3 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="7 Nights 5 Star March Umrah Package Icon">
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
                                    <span class="price">&pound; 785 <sub>/ pp</sub></span>
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/3.png')}}"
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (6 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (6 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="12 Nights 5 Star March Umrah Package Icon">
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
                                    <span class="price">&pound; 845 <sub>/ pp</sub></span>
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
                                    src="{{asset('assets/media/umrah-new/4.png')}}"
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (7 NIGHTS) AL KISWAH TOWER">
                                    <div class="icon-text">Makkah (7 NIGHTS) <br> AL KISWAH TOWER</div class="icon-text">
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="5 Star 14 Nights Family Umrah Package Icon">
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
                                    <span class="price">&pound; 849 <sub>/ pp</sub></span>
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
<!--featured Hadi Tours packages section End-->
<!-- Home page content section starts here  -->




<div class="page-content">

    <div class="container">

        <div class="scroll-page-content page-content-styling">

            <h2>HadiTours: Your Trusted Hajj and Umrah Travel Agency in UK </h2>

            <p>The pilgrimage to Makkah and Madinah is a Muslim's single most defining trip in life. HadiTours leading Hajj and Umrah Travel Agency in UK, we welcome you to experience this spiritual journey with us. We realize that the pilgrimage to the cities of Makkah and Madinah is not merely a trip because it is the supreme spiritual achievement of a Muslim's life. It is a journey deeply filled with faith, worship, and cleansing. We at HadiTours, firmly believe our purpose is to make this divine journey easier by offering excellent, trouble, free, and spiritually uplifting travel experiences to the UK Muslim community.
            </P>

            <p>Planning a Hajj that is one of the five pillars or performing a voluntary Umrah, give HadiTours the honor of taking care of every detail of your journey. We will take care of everything from the visa, flights, to accommodation which are just a few steps away from the Haram, quite simply, you will be able to concentrate completely on your acts of worship and strengthening your relationship with Allah (SWT).</P>

            <h2>Guiding Your Steps to the Sacred Sanctuaries</h2>

            <p>we consider it an immense honor and privilege to serve the guests of Allah (SWT). Rooted in the values of honesty, openness, and profound religious commitment, we have developed into a major and very reputable Hajj and Umrah Travel agency in uk.
            </P>

            <p>Our personnel consists of experienced travel professionals and well, informed Islamic scholars who cooperate closely to create packages that meet the different requirements of the British Muslim community. We understand that each pilgrim has different needs, for example, if you are a family traveling with kids, an old couple who needs a wheelchair, or a solo traveler searching for a very cheap option. We guarantee that your comfort, safety and spiritual well, being will be our top priorities throughout the entire journey.</P>

            <h3>Our Mission </h3>

            <p>Our mission is to provide a seamless, comfortable, and spiritually fulfilling Hajj and Umrah experiences whilst delivering outstanding customer service, offering clear pricing, and expert guidance.</P>

            <h3>Our Vision</h3>

            <p>We want to be the leading and most reliable Islamic travel partner in the United Kingdom, well, known for our strong dedication to the Guests of Allah.</P>

            <h2>Why Choose HadiTours as Your Hajj and Umrah Travel Agency in UK?</h2>

            <p>Choosing the right travel agency is crucial for a peaceful pilgrimage. Here is why thousands of UK Muslims trust HadiTours year after year:</P>

            <h3>ATOL Protected & Ministry Approved:</h3>
            <p>We are fully ATOL protected for your financial security and peace of mind. In addition, we are an agency approved by the Ministry of Hajj and Umrah in Saudi Arabia.</p>

            <h3>Expert Spiritual Guidance:</h3>
            <p>We give you access via our packages to knowledgeable and experienced Islamic scholars who, among other things, conduct pre, departure seminars. They also provide the ritual steps guidance and, in Makkah and Madinah, lectures to enable the correct performance of worship acts according to the Sunnah.</p>

            <h3>Custom, Made Packages:</h3>
            <p>We do not believe in the one, size, fits, all concept. We, therefore, prepare a plan for you whether you want a 5, star VIP package with the Kaaba as your view or a budget package that is clean and comfortable without luxuries.</p>

            <h3>24/7 Dedicated Ground Support:</h3>
            <p>To help you anytime, any day, our local team in Saudi Arabia is at your disposal. From meeting and assisting you at the airport, handing over your hotel to you, to dealing with any emergency situations, we are always with you.</p>

            <h3>Transparent Pricing:</h3>
            <p>There are no charges beyond those in the contract with <a href="https://www.haditours.co.uk">Hadi Tours</a>. We are a package, tour company that trusts its customers and hence the decision to make all inclusions and exclusions of a tour package always available to the client beforehand.</p>

            <h2>Our Premium Pilgrimage Packages</h2>

            <p>As a top-tier Hajj and Umrah Travel agency in uk, we offer a wide array of meticulously planned packages.</P>

            <h3>Umrah Deals: A Journey of Renewal</h3>
            <p>Perform the lesser pilgrimage any time you wish to with our flexible
                <a href="https://www.haditours.co.uk/umrah-packages.html">Umrah Packages</a>. We provide services for the UK market from the top UK airports namely London Heathrow, Manchester, and Birmingham.
            </p>

            <h3>Economy Umrah Deals:</h3>
            <p>These packages are aimed at pilgrims with a tight budget. It offers clean and comfortable 3, star hotels that are either a walking distance or a shuttle ride away from the Haramain.</p>

            <h3>4, Star Umrah Deals:</h3>
            <p>It is the ideal combination of cost and lavishness. It contains the feature of premium hotels, breakfast buffet, and the proximity of the holy mosques.</p>

            <h3>5, Star VIP Umrah Packages:</h3>
            <p>Stay in luxurious hotels such as the Fairmont Makkah Clock Royal Tower or The Oberoi in Madinah and enjoy the comfort of world, class facilities. Get the view of the Kaaba or the Prophet's Mosque from your room.</p>

            <h3>Ramadan Umrah Deals:</h3>
            <p>Ramadan Umrahat carries the highest reward. We provide customized packages for the first 20 days and the last 10 days of Ramadan, which is a very sought, after time. Our packages will enable you to find Laylatul Qadr great time in the most holy places on the earth.</p>

            <h3>Hajj Packages:</h3>
            <p>Doing the Fifth Pillar Hajj is not only a physical and emotional challenge but also a spiritual one. HadiTours alleviate the burden of such a complex journey by offering well, structured Hajj packages.</p>

            <h3>Stay, In, Hotel Hajj Packages:</h3>
            <p>To make your journey as convenient as possible, you will remain in the same luxury hotel in Makkah throughout your pilgrimage days, including Hajj days (apart from your stay in Mina and Arafat).</p>

            <h3>Moving Hajj Packages:</h3>
            <p>This is a cheap option where pilgrims stay in standard hotels near Makkah before the Hajj days, and move to an apartment or hotel closer to Mina during the Hajj peak days.</p>

            <h3>VIP Mina & Arafat Camps:</h3>
            <p>We offer upgraded, air, conditioned European, style tents in Mina and Arafat, provided with cozy beds, private catering, and exclusive washrooms to reduce the physical effort on the peak Hajj days.</p>

            <h2>Comprehensive Travel Services for UK Pilgrims
            </h2>

            <p>HadiTours goes beyond simply booking flights and hotels. We provide end-to-end services to ensure a stress-free experience.</P>

            <h3>Getting Your Visa Quickly and Easily</h3>
            <p>When it comes to required visas, there are many places you could go for help, but we have the reputation and experience to help you through the visa process as an authorized travel agency for Hajj and Umrah travel in the UK, which takes care of all aspects of applying for the correct visa, whether it is an E-Visa, an Umrah visa or an official Hajj permit through the Nusuk platform, our visa team makes sure that your documents are processed correctly and without delay.</p>

            <h3>Book Your Flight</h3>
            <p>We comprehensively work with the top 5 airlines: Saudi Airlines, British Airways, Emirates, Qatar Airways, Royal Jordanian to provide you with the best range of airline options, including timing and convenience, as we can provide you with tickets on direct flights from the UK to Jeddah or Madinah and return or to afford you connecting flights based on your desire.</p>

            <h3>Stay in a High Quality Hotel</h3>
            <p>We have excellent relationships with the world's leading hotel chains in Saudi Arabia and therefore we can offer you only the finest hotels; whether you want to stay in a luxury suite in the Abraj Al Bait complex or a beautiful hotel or guest house within walking distance of Masjid al-Nabawi, we will find you the best rates and the best locations.</p>

            <h3>Reliably Transported When Travelling Between Jeddah, Makkah and Madinah</h3>
            <p>Whenever you are travelling among the 3 cities of Jeddah, Makkah and Madinah, there are many options available for reliable transportation. We can arrange to have you transfer between the three cities using private and modern air-conditioned cars, SUVs or luxury coaches. Also, we can arrange to have you ride the Haramain High-Speed Railway, which will cut down your total travel time between Makkah and Madinah to just over 2 hours!</p>

            <h2>Preparing for Your Journey with HadiTours
            </h2>

            <p>We believe that physical preparation is just as important as logistical planning. To ensure you are fully prepared to reap the spiritual benefits of your journey, we offer comprehensive pre-departure support.</P>

            <h3>Educational Seminars:</h3>
            <p>We facilitate lecture series across the UK for the benefit of pilgrims, guiding them through the proper performance of Hajj and Umrah rituals (Fiqh of Hajj/Umrah), clarifying the rules of ihram, and helping them understand what the experience will be like, as well as what to expect upon arrival.</p>

            <h3>Health and Safety Guidelines:</h3>
            <p>We constantly update and share information on compulsory vaccinations (e.g. ACWY meningitis vaccine), what to bring in your luggage, and how to keep yourself fit while in the heat of Saudi Arabia.</p>

            <h3>HadiTours Welcome Kit:</h3>
            <p>A pilgrim will find a free gift pack unattended to him/her comprising of an Ihram (for men), a guidebook to Umrah/Hajj, a personalized shoes string bag, and a counter for Tawaf and Sa'i.</p>


            <!--Frequently Asked Questions (FAQs)-->

            <p style="font-size: 2em; font-weight: bold; margin: 0.67em 0;">
                Frequently Asked Questions (FAQs)
            </p>

            <h2>1. Do I need a Mahram to travel for Umrah from the UK?</h2>
            <p>The latest news from the Saudi Ministry of Hajj and Umrah indicate that women will not have to be accompanied by a mahram (male guardian) if they want to perform Umrah or Hajj, as long as they are traveling with a safe group. Please get in touch with our team to know the current rules.</p>

            <h2>2. How far in advance should I book my Hajj or Umrah package?</h2>
            <p>We suggest you should book your Umrah trip about 4 to 6 weeks ahead to get the best airfare and hotel prices. Hajj, on the other hand, is a different story with very limited quotas and extremely high demands; hence, we strongly recommend you to declare your interest with us right away, and at the very latest, 6 to 8 months before.</p>

            <h2>3. Are your packages ATOL protected?</h2>
            <p>Yes, HadiTours is a fully ATOL-protected travel agency. This means your money is safe and secure when you book a flight-inclusive package with us.</p>

            <h2>4. Can I customize my Umrah package?</h2>
            <p>Definitely!!! That's what we do, create tailor, made packages. You can decide on your travel dates, airlines, hotel rating, and transportation method. Communicate your needs to our travel consultants, and we will put together the perfect itinerary for you.</p>

            <h2>Ready to Answer the Call? Book Your Journey Today
            </h2>

            <p>The pilgrimage to the House of Allah is a beckoning of the Most High God. Should you hear the voice of the heart, trust HadiTours to lead you there. Being your only Hajj and Umrah Travel agency in uk, we guarantee that your travel arrangements will be done with the greatest care, respect, and professionalism so that you can enjoy the worships beauty without any distractions.
            </P>

            <ul>
                <li><strong>Contact Us Today to Start Planning Your Spiritual Journey:</strong></li>
                <li>Phone: 020 3103 0264</li>
                <li>Email: info@haditours.co.uk</li>
                <li>Office Location: 13 Station Rd, London SE25 5AH</li>
            </ul>

        </div>

    </div>

</div>
<!-- Home page content section ends here  -->
@endsection
@push('scripts')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        function initFeaturedSlider() {
            if (window.jQuery && $.fn.slick && $.fn.matchHeight) {
                $('.featured-slick-carousel').each(function() {
                    var $carousel = $(this);
                    if (!$carousel.hasClass('slick-initialized')) {
                        
                        // Equalize heights before slider init to avoid layout shifts
                        $carousel.find('.mainPackage').matchHeight();

                        $carousel.on('init reInit setPosition', function() {
                            // Re-trigger height equalization on slider updates
                            $(this).find('.mainPackage').matchHeight();
                        });

                        $carousel.slick({
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            arrows: true,
                            dots: true,
                            autoplay: true,
                            autoplaySpeed: 3000,
                            adaptiveHeight: false,
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
        
        // Re-calculate after images are likely loaded
        window.addEventListener('load', function() {
            $('.mainPackage').matchHeight();
            if (window.jQuery && $.fn.slick) {
                $('.featured-slick-carousel').slick('setPosition');
            }
        });
    });
</script>

@endpush