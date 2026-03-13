@extends('layouts.master')
@section('meta')
<title>Umrah Visa from Pakistan 2026 | Fast & Easy Saudi Visa Processing</title>
<meta name="description" content="Apply for your Saudi Umrah visa from Pakistan with Umrah Agency Pakistan. We provide fast, reliable, and hassle-free visa processing for pilgrims. Get a quote today!">
<link rel="canonical" href="https://umrahagency.pk/umrah-visa.html" />
@endsection
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://umrahagency.pk/umrah-visa.html#umrahvisa",
  "name": "Umrah Visa Service 2026 from Pakistan",
  "url": "https://umrahagency.pk/umrah-visa.html",
  "description": "Get your Umrah visa processed quickly and easily through Umrah Agency Pakistan. Our authorized travel experts handle visa documentation, submission and approvals for pilgrims travelling from Pakistan to perform Umrah in 2026. We guide you through requirements and ensure a smooth and hassle-free visa process for your spiritual journey.",
  "provider": {
    "@type": "TravelAgency",
    "@id": "https://umrahagency.pk/#travelagency",
    "name": "Umrah Agency Pakistan",
    "url": "https://umrahagency.pk/"
  },
  "serviceType": "Umrah Visa Processing",
  "areaServed": {
    "@type": "Country",
    "name": "Pakistan"
  },
  "termsOfService": "Applicants must hold a valid passport with at least 6 months remaining validity and may require proof of vaccination against meningitis ACWY and other health requirements as per Saudi visa rules. You can apply through Umrah Agency Pakistan as an authorized travel agency to manage documentation and submission.",
  "offers": {
    "@type": "Offer",
    "name": "Umrah Visa Application Service",
    "description": "Comprehensive visa processing for Umrah travellers from Pakistan, including documentation review and submission to Saudi visa authorities.",
    "price": "Included with selected Umrah package or quoted on application",
    "priceCurrency": "PKR",
    "availability": "https://schema.org/InStock",
    "url": "https://umrahagency.pk/umrah-visa.html"
  }
}
</script>
@endverbatim



@section('content')
<section class="search-banner">
    <!--slider section Start-->
    <div class="banner">
        <img src="{{asset('assets/media/pages/home-page-banner-for-haditours-1.png')}}" class="img-fluid" alt="Umrah Visa Services Banner - Umrah Agency Pakistan" width="1920" height="600" fetchpriority="high">
        <div class="banner-text">
            <h1>Trusted Islamic Travel Agency&nbsp;in Pakistan</h1>
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
                        <option value="Lahore">Lahore</option>
                        <option value="Karachi">Karachi</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Multan">Multan</option>
                        <option value="Sialkot">Sialkot</option>
                        <option value="Faisalabad">Faisalabad</option>
                        <option value="Peshawar">Peshawar</option>
                        <option value="Quetta">Quetta</option>
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
<div class="pkg-header-top text-center">
    <div class="container">
        <h1>Umrah Visa from Pakistan</h1>
        <p class="lead text-muted">Hassle-free Saudi Umrah Visa processing for your spiritual journey</p>
    </div>
</div>

<section class="main-content-area py-5">
    <div class="container">
        <div class="row">
            <!-- Inquiry Form Sidebar -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="section-card shadow-sm sticky-top" style="top: 20px;">
                    <div class="section-title mb-4">
                        <i class="fa fa-paper-plane mr-2"></i> Visa Inquiry
                    </div>
                    <form class="form" method="post" action="{{ route('sendInquiry') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="small font-weight-bold">Departure Airport *</label>
                            <select class="form-control" name="n[Departure Airport]" required>
                                <option value="">Select Airport</option>
                                <option value="Lahore">Lahore</option>
                                <option value="Karachi">Karachi</option>
                                <option value="Islamabad">Islamabad</option>
                                <option value="Multan">Multan</option>
                                <option value="Sialkot">Sialkot</option>
                                <option value="Faisalabad">Faisalabad</option>
                                <option value="Peshawar">Peshawar</option>
                                <option value="Other">Other Pakistan Airport</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="small font-weight-bold">Departure Date *</label>
                            <input class="form-control DepartureDate" name="n[Departure Date]" type="text" readonly required placeholder="Select Date">
                        </div>
                        <div class="form-group mb-3">
                            <label class="small font-weight-bold">Full Name *</label>
                            <input class="form-control" name="n[name]" type="text" required placeholder="Enter name">
                        </div>
                        <div class="form-group mb-3">
                            <label class="small font-weight-bold">Email Address *</label>
                            <input class="form-control" name="n[email]" type="email" required placeholder="Enter email">
                        </div>
                        <div class="form-group mb-3">
                            <label class="small font-weight-bold">Phone Number *</label>
                            <input class="form-control" name="n[Phone Number]" type="text" required placeholder="Enter phone">
                        </div>
                        <div class="form-group mb-3">
                            <label class="small font-weight-bold">Number of Travelers *</label>
                            <select class="form-control" name="n[No. of Travelers]" required>
                                <option value="">No. of Travelers</option>
                                <option value="1 Traveler">1</option>
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
                        </div>
                        <div class="form-group mb-4">
                            <label class="small font-weight-bold">What is <span class='captcha-text'>...</span>? *</label>
                            <input class="form-control" type="number" name="InquiryAnswer" placeholder="Answer" required>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block py-3 font-weight-bold rounded-pill text-uppercase shadow-sm">
                            Get Visa Quote
                        </button>
                    </form>

                    <div class="mt-4 p-3 bg-light-cream rounded border text-center">
                        <p class="small mb-1 text-muted">Need urgent assistance?</p>
                        <a href="tel:03073344679" class="h5 font-weight-bold text-dark d-block mb-0">03073344679</a>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="col-lg-8">
                <div class="section-card shadow-sm mb-4">
                    <h2 class="font-weight-bold mb-4">Get an Umrah Visa With Umrah Agency Pakistan</h2>
                    <p>If you live in Pakistan and want to go on a unique journey to Saudi Arabia for Umrah, you've come to the right spot. We are aware that it can be thrilling and confusing to plan your Umrah journey. That's why we made this helpful guide to show you how to get your Umrah visa and make your journey easier.</p>
                    <p>With <strong>Umrah Agency Pakistan</strong>, getting a Saudi Umrah visa is easier than ever. We're here to guide you every step of the way and make sure your application process is smooth.</p>
                </div>

                <div class="section-card shadow-sm mb-4">
                    <h3 class="font-weight-bold mb-4">Apply for an Umrah Visa from Pakistan</h3>
                    <p>Without a Saudi Umrah visa from Pakistan, you won't be allowed to enter Saudi Arabia for religious purposes. Let's break down the entire process: </p>

                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-warning text-white rounded-circle px-3 py-2 mr-3 font-weight-bold">1</div>
                                <div>
                                    <h6 class="font-weight-bold">Contact Us</h6>
                                    <p class="small text-muted">Reach out to our experts. We'll help you fill out the application and ensure all details are correct.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-warning text-white rounded-circle px-3 py-2 mr-3 font-weight-bold">2</div>
                                <div>
                                    <h6 class="font-weight-bold">Documentation</h6>
                                    <p class="small text-muted">Ensure your passport is valid for at least six months. You'll also need recent passport-sized photos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-warning text-white rounded-circle px-3 py-2 mr-3 font-weight-bold">3</div>
                                <div>
                                    <h6 class="font-weight-bold">Book Package</h6>
                                    <p class="small text-muted">Plan your visit with our <a href="{{ route('umrahPackages') }}" class="text-warning">Umrah packages</a> for a seamless experience including flights and hotels.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-warning text-white rounded-circle px-3 py-2 mr-3 font-weight-bold">4</div>
                                <div>
                                    <h6 class="font-weight-bold">Submission</h6>
                                    <p class="small text-muted">Once everything is in order, we'll submit your application. Processing usually takes around 72 hours for e-visas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-card shadow-sm mb-4">
                    <h3 class="font-weight-bold mb-4">Purpose of Umrah Visa</h3>
                    <p>An Umrah visa is your official permission to perform the pilgrimage in Saudi Arabia. It grants you access to the holy sites in Makkah and Madinah, including the Prophet's Mosque and the Kaaba.</p>

                    <div class="alert alert-secondary border-0 rounded-lg p-4 mb-4">
                        <i class="fa fa-info-circle mr-2"></i> <strong>Important Note:</strong> Umrah visas are typically short-term (usually up to 90 days for e-visas), allowing you ample time for your spiritual rituals. Ensure your journey fits within the visa validity period.
                    </div>
                </div>

                <div class="section-card shadow-sm">
                    <h3 class="font-weight-bold mb-4">Frequently Asked Questions</h3>
                    <div id="visaFaq" class="accordion">
                        <div class="card border-0 mb-2">
                            <div class="card-header bg-light border-0 py-3" id="faq1" data-toggle="collapse" data-target="#collapseFaq1" style="cursor: pointer;">
                                <h6 class="mb-0 font-weight-bold">How often can I enter Saudi Arabia with an Umrah visa?</h6>
                            </div>
                            <div id="collapseFaq1" class="collapse show" data-parent="#visaFaq">
                                <div class="card-body text-muted small">
                                    Depending on the visa type (e-visa vs. traditional), you may have multiple entries. Standard Umrah e-visas often allow multiple entries within a year, while specific pilgrimage visas might be single entry.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-2">
                            <div class="card-header bg-light border-0 py-3 collapsed" id="faq2" data-toggle="collapse" data-target="#collapseFaq2" style="cursor: pointer;">
                                 <h6 class="mb-0 font-weight-bold">What is the Umrah visa fee from Pakistan?</h6>
                            </div>
                            <div id="collapseFaq2" class="collapse" data-parent="#visaFaq">
                                 <div class="card-body text-muted small">
                                    For Pakistan citizens, the Umrah visa fees vary depending on the chosen service and processing speed. Typically, it ranges between PKR 45,000 to PKR 75,000.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0">
                            <div class="card-header bg-light border-0 py-3 collapsed" id="faq3" data-toggle="collapse" data-target="#collapseFaq3" style="cursor: pointer;">
                                <h6 class="mb-0 font-weight-bold">Will I get a Saudi Umrah visa with my Umrah package?</h6>
                            </div>
                            <div id="collapseFaq3" class="collapse" data-parent="#visaFaq">
                                <div class="card-body text-muted small">
                                    Yes, if you book an all-inclusive Umrah package with <strong>Umrah Agency Pakistan</strong>, we handle the entire visa process for you as part of the package.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection