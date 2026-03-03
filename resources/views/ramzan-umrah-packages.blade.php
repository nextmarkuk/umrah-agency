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
                <h2>All-inclusive Ramadan Umrah packages</h2>
            </div>
            <div class="featuredPackagesUid featured-slick-carousel">
                <div class="item">
                    <div class="mainPackage">
                        <div class="mainPackageImage">
                            <a href="{{ route('umrahDetail', ['slug' => '3-star-7-nights-umrah-package']) }}"><img class="img-fluid"
                                    loading="lazy" width="336" height="279"
                                    src="{{asset('assets/media/umrah/00-min%20%2826%29.webp')}}"
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
                                    src="{{asset('assets/media/umrah/00-min%20%2829%29.webp')}}"
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
        </p>

        <h2>Ramadan Umrah Packages by Hadi Tours</h2>

        <p>Going for Umrah is a unique spiritual journey, but doing Umrah in Ramadan makes it even more special.
            Ramadan is a holy month when Allah&#39;s mercy and forgiveness are abundant. It&#39;s the best time to
            visit the holy cities of Makkah and Madinah and feel the deep spiritual connection. The peacefulness of
            these places, along with the prayers of millions of Muslims, creates a truly amazing and humbling
            feeling.</p>

        <p>At <a href="https://www.haditours.co.uk/">Hadi Tours</a>, we know how important this journey is
            for you. That&#39;s why our Ramadan Umrah packages are designed to make everything easy and meaningful.
            When you book with us, you&#39;re not just getting travel plans&mdash;you&#39;re trusting a team that
            cares about making your pilgrimage memorable. We take care of everything, from easy flights and
            comfortable places to stay to expert help and support anytime you need it. With Hadi Tours, you can
            focus on your prayers and enjoy this blessed time without worrying about the details.</p>

        <h2>Why Perform Umrah in Ramadan 2026</h2>

        <p>Doing Umrah during the holy month of Ramadan is a unique and meaningful experience that brings great
            blessings. So, here&#39;s why Umrah packages for Ramadan are the best choice.</p>

        <h3>Multiplied Rewards</h3>

        <p>Firstly, one of the main reasons people want to do Umrah in Ramadan is because they get extra rewards. In
            Islam, doing Umrah during Ramadan has the same rewards as doing Hajj. This chance to get such big
            rewards makes many Muslims want to go to Umrah during this month.</p>

        <h3>Enhanced Atmosphere</h3>

        <p>Moreover, this holy month is when people feel closer to God. Doing Umrah during this month lets you see
            Makkah and Madinah when they are full of life and spirit. In the Haram, you will hear people reading the
            Quran, praying together, and breaking their fasts with Muslims from all over the world. This feeling of
            togetherness and shared faith makes your Umrah even more special.</p>

        <h3>Closer Connection With Allah</h3>

        <p>Ramadan is a special month for worship, deep thinking, and asking for forgiveness. So, booking a Ramadan
            Umrah package means an opportunity to feel closer to Allah during a very holy time. The acts of walking
            around the Kaaba, going between Safa and Marwah, and praying become even more special. During this
            month, your heart is open, your spirit is clean, and your prayers have a better chance of being
            answered.</p>

        <h3>Brotherhood</h3>

        <p>One of the best things about doing Umrah during Ramadan is feeling a strong sense of togetherness.
            Muslims from all over the world come to the holy cities to pray and fast together. You can feel this
            unity during group prayers and when you break your fast. Being part of this shared experience makes you
            feel like you truly belong and strengthens your connection with other Muslims.</p>

        <h3>Special Rituals</h3>

        <p>Lastly, during Ramadan, the Haram has special prayers and activities just for this month. Every night
            after the Isha prayer, there are Tarawih prayers. These prayers are a big part of Ramadan. They include
            reading the Quran, and by the end of the month, many people finish reading it. These prayers and
            activities while performing Umrah make your pilgrimage even more special and meaningful.</p>

        <h2>When to Perfrom Umrah in Ramadan</h2>

        <p>Ramadan 2026&nbsp;UK will likely start around March 1, but it might change a bit based on when the moon
            is seen. Ramadan is split into three parts, called ashra. Each part has its special blessings and
            chances for spiritual growth.</p>

        <h3>First Ashra</h3>

        <p>In the first ten days of Ramadan, we focus on asking Allah for kindness and mercy. Doing Umrah during
            this time helps you begin Ramadan in a positive and spiritual way. Fewer people are around, making it
            easier to pray and worship peacefully. You will also likely find cheap Ramadan Umrah packages during the
            first Ashra.</p>

        <h3>Second Ashra</h3>

        <p>If you book your Umrah packages for Ramadan 2026&nbsp;for the middle ten days, the main focus is asking
            for forgiveness of sins. It&#39;s a great time to make the pilgrimage to show you&#39;re sorry and feel
            spiritually refreshed. More people start coming, making things busier, but it still feels memorable and
            meaningful.</p>

        <h3>Third Ashra</h3>

        <p>The last ten days of Ramadan are extraordinary. People use this time to ask for protection from Hell. One
            of these nights is Laylat al-Qadr, the most important night of the year. That night, the rewards for
            praying and doing good deeds are significantly increased. Many people want to do Umrah during these days
            because Makkah and Madinah are very spiritually powerful at this time. Therefore, the Ramadan Umrah
            package from the UK is in high demand during this period, so planning your journey in advance is
            essential.</p>

        <h3>Best Time</h3>

        <p>Ultimately, if you want the best spiritual experience, the third Ashra is the best time to do Umrah
            during Ramadan. But every Ashra is important in its own way, so pick the time that fits your own
            spiritual needs and situation.</p>

        <h3>FAQs</h3>

        <h4>What should I consider when choosing a Ramadan Umrah package?</h4>

        <p>When picking a package, consider what&#39;s included, like flights, where you&#39;ll stay, and additional
            services. Make sure the timing of the journey matches your spiritual goals. Also, check how much it
            costs and go through the reviews.</p>

        <h4>What is included in a typical Ramadan Umrah package?</h4>

        <p>A basic, cheap Ramadan Umrah package includes your return flight, hotels in Makkah and Madinah, and an <a
                href="{{ route('umrahVisa') }}">Umrah visa</a>. However, you can upgrade this
            to include Ziarat tours, meals, and ground transport.</p>

        <h4>What are the health considerations for performing Umrah in Ramadan?</h4>

        <p>When performing Umrah during Ramadan, avoid eating oily foods during Suhoor to prevent dehydration. Also,
            rest when needed and do not push yourself too hard. Talk to a doctor before you go, especially if you
            have health problems, to ensure you&#39;re ready for the journey.</p>

        <h4>What should I know about the accommodation provided in Ramadan Umrah packages?</h4>

        <p>We provide accommodation in Makkah and Madinah, close to the holy sites. This makes it easy to perform
            prayers and rituals. Moreover, we have options ranging from 3 to 5 stars, so you can choose a place that
            fits your budget.</p>

    </div>

</div>

@endsection