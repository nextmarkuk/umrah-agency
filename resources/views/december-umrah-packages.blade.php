<a href="https://umrahagency.pk/umrah-packages.html">Umrah Packages</a>@extends('layouts.master')
@section('meta')
<title>Trusted Umrah Agency in Pakistan for December Umrah Packages</title>
<meta name="description" content="Get Umrah services from a trusted Umrah agency in Lahore, Pakistan. We offer all-inclusive December Umrah packages for families, groups, and individuals.">
@endsection

@verbatim
 <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://umrahagency.pk/december-umrah-packages.html#decemberumrah",
  "name": "December Umrah Packages from Pakistan",
  "url": "https://umrahagency.pk/december-umrah-packages.html",
  "description": "Explore specially crafted December Umrah packages with Umrah Agency Pakistan, offering affordable and convenient pilgrimage options from Pakistan. Choose from 3 star, 4 star, and 5 star hotel packages with return flights, visa processing, ground transport, and guided support. Our December Umrah deals provide comfortable stays in Makkah and Madinah, ideal weather, and flexible durations from 7 to 14 nights. Whether you seek budget-friendly Umrah packages or premium all-inclusive deals, Umrah Agency Pakistan ensures a smooth, spiritually fulfilling journey. Book your December Umrah 2026 package today and experience a peaceful pilgrimage with expert travel assistance every step of the way.",
  "provider": {
    "@type": "TravelAgency",
    "@id": "https://umrahagency.pk/#travelagency",
    "name": "Umrah Agency Pakistan",
    "url": "https://umrahagency.pk/"
  },
  "serviceType": "December Umrah Packages",
  "areaServed": {
    "@type": "Country",
    "name": "Pakistan"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "December Umrah Packages",
    "@id": "https://umrahagency.pk/december-umrah-packages.html#catalog",
    "itemListElement": [
      {
        "@type": "AggregateOffer",
        "name": "3-Star December Umrah Packages",
        "url": "https://umrahagency.pk/december-umrah-packages.html#3star",
        "description": "Affordable 3-star December Umrah packages including flights, visa, hotels, and transport.",
        "priceCurrency": "PKR",
        "lowPrice": 210000,
        "highPrice": 250000,
        "offerCount": 12,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "3-Star December Umrah Package"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "4-Star December Umrah Packages",
        "url": "https://umrahagency.pk/december-umrah-packages.html#4star",
        "description": "Comfortable 4-star December Umrah packages with hotels near Haram, flights, visa and transport.",
        "priceCurrency": "PKR",
        "lowPrice": 260000,
        "highPrice": 350000,
        "offerCount": 10,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "4-Star December Umrah Package"
        }
      },
      {
        "@type": "AggregateOffer",
        "name": "5-Star December Umrah Packages",
        "url": "https://umrahagency.pk/december-umrah-packages.html#5star",
        "description": "Luxury 5-star December Umrah packages with premium hotels, visa, VIP transport, and optional business-class flights.",
        "priceCurrency": "PKR",
        "lowPrice": 400000,
        "highPrice": 600000,
        "offerCount": 8,
        "availability": "https://schema.org/InStock",
        "itemOffered": {
          "@type": "Service",
          "name": "5-Star December Umrah Package"
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
            <h1>Trusted Umrah Agency&nbsp;in Pakistan</h1>
            <p>For December Umrah Packages</p>
        </div>
    </div>
    <div class="searchEngine" id="packageInquiry">
        <div class="searchFields">
            <form class="form" method="post" action="{{ route('sendInquiry') }}" id="frm-enquiry" name="frm-enquiry">
                @csrf

                <div class="form-group Half">
                    <label for="enquiry-departure">
                        <i class="fa fa-plane fa-2x text-warning mr-1" style="color: #C88916 !important;font-size: 1.4em;"></i> Departure Airport
                    </label>
                    <select class="form-control" id="enquiry-departure" name="n[Departure Airport]" required>
                        <option value="">Departure Airport</option>
                        <option value="Lahore">Lahore</option>
                        <option value="Karachi">Karachi</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Multan">Multan</option>
                        <option value="Sialkot">Sialkot</option>
                        <option value="Faisalabad">Faisalabad</option>
                        <option value="Peshawar">Peshawar</option>
                        <option value="Other">Other Pakistan Airport</option>
                    </select>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="enquiry-departuredate">
                        <i class="fa fa-calendar fa-2x text-warning mr-1" style="color: #C88916 !important; font-size: 1.4em;"></i> Departure Date
                    </label>
                    <input type="text" id="enquiry-departuredate" name="n[Departure Date]" class="DepartureDate form-control" readonly placeholder="Departure Date" required />
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="enquiry-hotelcategory">
                        <i class="fa fa-hotel fa-2x text-warning mr-1" style="color: #C88916 !important; font-size: 1.4em;"></i> Hotel Category
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
                        <i class="fa fa-moon-o fa-2x text-warning mr-1" style="color: #C88916 !important; font-size: 1.4em;"></i> Duration
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
                        <i class="fa fa-users fa-2x text-warning mr-1" style="color: #C88916 !important; font-size: 1.4em;"></i> Travelers
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
                    <label for="enquiry-name"><i class="fa fa-user fa-2x text-warning mr-1" style="color: #C88916 !important; font-size: 1.4em;"></i> Full Name</label>
                    <input type="text" class="form-control" id="enquiry-name" name="n[name]" placeholder="Full Name" required />
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="enquiry-phone">
                        <i class="fa fa-phone-square fa-2x text-warning mr-1" style="color: #C88916 !important; font-size: 1.4em;"></i> Contact No
                    </label>
                    <input type="text" class="form-control" id="enquiry-phone" name="n[Phone Number]" placeholder="Contact No" required />
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="enquiry-email">
                        <i class="fa fa-envelope fa-2x text-warning mr-1" style="color: #C88916 !important; font-size: 1.4em;"></i> Email
                    </label>
                    <input type="email" class="form-control" name="n[email]" id="enquiry-email" placeholder="Email" required />
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half">
                    <label for="answerform">
                        <i class="fa fa-check fa-2x text-warning mr-1" style="color: #C88916 !important; font-size: 1.4em;"></i> Answer
                        <span class='captcha-text' style='background: #1A1A1A; color: #fff; padding: 5px 10px; border-radius: 4px; font-weight: bold; margin-left: 10px; display: inline-block; min-width: 60px; text-align: center;'>Loading...</span>
                    </label>
                    <input class="form-control" id="answerform" type="number" name="InquiryAnswer" placeholder="1 + 2 = ?" required>
                    <span class="borderBottom"></span>
                </div>

                <div class="form-group Half"><button type="submit" class="btn btn-block" style="height: 3rem;background-color:#C88916;border-color:#C88916;color:#fff;" name="submit" value="Send Message">Submit</button></div>
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
                <h2>All-inclusive December Umrah Packages</h2>
            </div>
            <div class="featuredPackagesUid featured-slick-carousel">
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah-new/23.png')}}"
                                    alt="4 Star 10 Nights December Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-december-umrah-package']) }}">4 Star 10 Nights December Umrah Package</a></p>
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
                                    <span class="price">PKR 280,000 <sub>/ pp</sub></span>
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
                            <a href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/24.png')}}"
                                    alt="4 Star 14 Nights December Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}">4 Star 14 Nights December Umrah Package</a></p>
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
                                    <span class="price">PKR 315,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '4-star-night-december-umrah-package']) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/10.png')}}"
                                    alt="3 Star 7 Nights December Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}">3 Star 7 Nights December Umrah Package</a></p>
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
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/kaaba.webp')}}" alt="Makkah (4 NIGHTS)">
                                    <div class="icon-text">Makkah (4 NIGHTS) <br> AL KISWAH TOWER</div>
                                </div>
                                <div class="col-6 d-flex">
                                    <img class="icon" loading="lazy" src="{{asset('assets/images/masjid-al-nabawi.webp')}}" alt="Madinah (3 NIGHTS)">
                                    <div class="icon-text">MADINA (3 NIGHTS) <br> EMAAR TAIBAH</div>
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
                                    <span class="price">PKR 335,000 <sub>/ pp</sub></span>
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
                                    loading="lazy" width="336" height="279" src="{{asset('assets/media/umrah-new/21.png')}}"
                                    alt="3 Star 10 Nights December Umrah Package"></a>
                        </div>
                        <div class="mainPackageDesc">
                            <div class="package-heading">
                                <p class="title"><a href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">3 Star 10 Nights December Umrah Package</a></p>
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
                                    <span class="price">PKR 345,000 <sub>/ pp</sub></span>
                                    <a class="viewMainPackage"
                                        href="{{ route('umrahDetail', ['slug' => '3-star-10-nights-umrah-package']) }}">View Details</a>
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
        </p>

        <p>&nbsp;</p>

        <h2>December Umrah Packages</h2>

        <p>December isn&#39;t only about decorations and songs for the holidays. It&#39;s also important for
            Muslims. The start of December begins the holiday season with everyone on break. So, just like how
            Christians have their celebration, Muslims who live in Pakistan also get a chance to connect more with
            their beliefs.</p>

        <p>With all the free time during the holiday season, many Muslims want to go to Umrah to feel closer to God.
            People look for December Umrah packages to connect with their faith and show devotion. And that&#39;s
            why Umrah Agency Pakistan is here to help search for the ideal package for your Umrah in December.</p>

        <h2>From Luxury to Cheap December Umrah Packages</h2>

        <p>At Umrah Agency Pakistan, we know that each pilgrim is unique. Therefore, we are happy to provide different
            choices for Umrah in December, from luxury to more affordable ones. We believe that your religious
            journey shouldn&#39;t be limited by how much money you have. So, we&#39;ve put together various options
            that fit what you like and can afford.</p>

        <p>Firstly, for all those wanting a lavish experience, our luxury December Umrah packages are made to be
            even better than you might hope. You&#39;ll get to stay in the best hotels, fly in the best seats, and
            have excellent service. Everything will be taken care of just for you, so you can feel comfortable while
            making your important pilgrimage.</p>

        <p>But we firmly believe that everyone should have the chance to experience the blessings of Umrah, no
            matter their budget. So, our cheap December Umrah packages are carefully created to help you fulfil your
            dream of going on a pilgrimage without spending too much. Our primary focus is on making your journey
            memorable. We work hard to provide options that are friendly to your budget while keeping the experience
            meaningful.</p>

        <p>Whichever package you select, one thing remains constant: your journey of a lifetime. At Umrah Agency Pakistan,
            we&#39;re happy to be a part of this significant experience for you. We&#39;ll help you all along the
            journey. We&#39;re committed to ensuring your pilgrimage is special and something you&#39;ll never
            forget.</p>

        <h2>Airlines Offering Flights to Saudi Arabia from Pakistan</h2>

        <ul>
            <li>Pakistan International Airlines (PIA)</li>
            <li>Saudi Arabian Airlines</li>
            <li>Airblue</li>
            <li>Serene Air</li>
            <li>Emirates</li>
            <li>Qatar Airways</li>
            <li>Turkish Airlines</li>
            <li>Gulf Air</li>
            <li>Etihad Airways</li>
        </ul>

        <h2>Services Included in December Umrah Packages</h2>

        <p>Your Umrah should be easy and comfortable. So, we carefully design our packages to include lots of
            different services. This way, you can be confident that your experience is perfect.</p>

        <ul>
            <li><strong>Umrah Visa:</strong>&nbsp;Getting a visa for your Umrah might seem challenging, but not if
                you select one of our Umrah packages. Our staff will guide you through the application process to
                ensure you have all the correct papers. This allows you to focus on getting ready for your spiritual
                journey without stress.</li>
            <li><strong>Flights:</strong>&nbsp;Every traveller is unique, so we have many flight options for your
                schedule and preferences. We provide everything, whether you like direct or connecting flights,
                economy or business class. We aim to make your journey to Makkah easy and problem-free.</li>
            <li><strong>Accommodation:</strong>&nbsp;Rest is essential for a successful journey, so we make sure you
                get good rest. You can stay in luxury hotels or cosy places close to the holy sites. Our packages
                have different choices, so you can pick what you like. We know that sleeping well at night helps you
                feel more connected spiritually, so we work hard to find the best accommodations.</li>
            <li><strong>Transportation:</strong>&nbsp;To further improve your experience, we also give you the
                choice of adding transportation to your package. We provide transportation to your hotel from the
                airport and vice versa.</li>
            <li><strong>Ziarat:</strong>&nbsp;Lastly, if you want to learn about the history of the holy sites, we
                provide optional Ziarat tours. So, you can discover more information about the past of Islam.</li>
        </ul>

        <h3>On a Final Note</h3>

        <p>Umrah is about feeling close to your faith and finding inner peace. It&#39;s a chance to make memories,
            form strong bonds, and reflect on your life in busy cities and calm mosques. It&#39;s a way to honour a
            journey that has personal significance for everyone.</p>

        <p>So, don&#39;t miss this chance to experience our December Umrah Packages. Book your spot now and prepare
            for a journey that will touch your heart and leave you with memories that will last a lifetime.</p>

        <h2>FAQs</h2>

        <h3>Do December Umrah packages from Pakistan have direct flights?</h3>

        <p>If you choose our December Umrah packages from Pakistan, you can fly directly with PIA and
            Saudi Arabian Airlines.</p>

        <h3>Can I change my December Umrah package to include a hotel of my choice?</h3>

        <p>Our Umrah packages are customisable, so feel free to add any hotels you want.</p>

        <h3>What documents should I provide at Umrah Agency Pakistan for an Umrah visa?</h3>

        <ul>
            <li>Filled Umrah Visa Application Form</li>
            <li>Passport Size Photograph</li>
            <li>Valid Passport</li>
            <li>Meningitis Vaccination Proof</li>
        </ul>

        <h3>How early should I book my Umrah package for the best deals?</h3>

        <p>Booking your Umrah package 3 to 4 months in advance is a good idea for the best prices and availability.
            This helps us get you the finest accommodations and travel options that suit your requirements.</p>

        <h3>How long is an Umrah package?</h3>

        <p>Our usual Umrah packages last for 7, 10 or 14 nights. But if you&#39;d like to extend it for 21 or 30
            days, we can arrange that.</p>

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
        background: #193670;
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