    <footer class="footer">
        <div class="container">
            <div class="footerDesc">
                <div class="row">
                    <div class="col-md-12 col-lg-3 col-xl-4">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img loading="lazy" class="logo img-responsive" src="{{asset('assets/images/logo.png')}}" alt="Umrah Agency"></a>
                        </div>
                        <!-- </div> -->
                        <!-- <div class="col-md-4"> -->
                        <ul class="socialLinks d-flex p-0">
                            <li>
                                <a rel="nofollow" target="_blank" href="https://www.facebook.com/umrahagency">
                                    <img loading="lazy" height="20" width="100" src="{{asset('assets/userfiles/files/facebook.png')}}"
                                        alt="Facebook">
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" target="_blank" href="https://twitter.com/umrahagency/">
                                    <img loading="lazy" height="20" width="100" src="{{asset('assets/userfiles/files/twitter.png')}}"
                                        alt="Twitter">
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" target="_blank" href="https://www.pinterest.co.Pakistan/umrahagency/">
                                    <img loading="lazy" height="20" width="100" src="{{asset('assets/userfiles/files/pinterest.png')}}"
                                        alt="Pinterest">
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" target="_blank" href="https://www.instagram.com/umrahagencyPakistan/">
                                    <img loading="lazy" height="20" width="100" src="{{asset('assets/userfiles/files/instagram.png')}}"
                                        alt="Instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2">
                        <div class="footer-data">
                            <h5>Quick Links</h5>
                            <ul>
                                <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                                <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                                <li><a href="{{ route('reviews') }}">Reviews</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2">
                        <div class="footer-data">
                            <h5>Our Terms</h5>

                            <ul>
                                <li><a href="{{ route('termsConditions') }}">Terms &amp; Conditions</a></li>
                                <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('paymentSecurity') }}">Payment Security</a></li>
                                <li><a href="{{ route('cookiesPolicy') }}">Cookies Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                        <div class="footer-data getInTouch">
                            <h5>Get in Touch</h5>
                            <ul>
                                <li><a href="tel:+92 300 1234567">+92 300 1234567</a></li>
                                <li><a href="mailto:info@umrahagency.pk">info@umrahagency.pk</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2">
                        <div class="footer-data">
                            <h5>Address</h5>
                            <p>Main Boulevard, Gulberg III, Lahore, Pakistan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footerCopyright">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <p>
                        <p>All rights reserved Umrah Agency&nbsp;&copy; 2020- 2026</p>

                        <p>With years of experience in the travel industry, Umrah Agency is dedicated to providing reliable and spiritual journeys for pilgrims from Pakistan. We ensure that every aspect of your Umrah trip is handled with care and professionalism, from visa processing to hotel accommodations and transportation within the Kingdom of Saudi Arabia.</p>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <ul class="socialLinks d-none">
                            <li>
                                <a href="https://www.facebook.com/umrahagency">
                                    <img loading="lazy" height="20" width="100" src="{{asset('assets/userfiles/files/facebook.png')}}"
                                        alt="Facebook">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/umrahagency/">
                                    <img loading="lazy" height="20" width="100" src="{{asset('assets/userfiles/files/twitter.png')}}"
                                        alt="Twitter">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.co.Pakistan/umrahagency/">
                                    <img loading="lazy" height="20" width="100" src="{{asset('assets/userfiles/files/pinterest.png')}}"
                                        alt="Pinterest">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/umrahagencypk/">
                                    <img loading="lazy" height="20" width="100" src="{{asset('assets/userfiles/files/instagram.png')}}"
                                        alt="Instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <div class="modal fade enquiryModal" id="EnqModal" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>


                    <div class="searchEngine" id="packageInquiry">
                        <div class="searchFields">
                            <form class="form" method="post" action="">

                                <div class="form-group Half">
                                    <label for="fromform"><img loading="lazy" width="21" height="21"
                                            src="{{asset('assets/images/UmrahAgency-imgs-updated/from.png')}}" alt="Departure City">
                                        Departure City</label>
                                    <select class="form-control" name="n[From]" id="fromform" required>
                                        <option value=""></option>
                                        <option value="Karachi (KHI)">Karachi (KHI)</option>
                                        <option value="Lahore (LHE)">Lahore (LHE)</option>
                                        <option value="Islamabad (ISB)">Islamabad (ISB)</option>
                                        <option value="Peshawar (PEW)">Peshawar (PEW)</option>
                                        <option value="Multan (MUX)">Multan (MUX)</option>
                                        <option value="Sialkot (SKT)">Sialkot (SKT)</option>
                                        <option value="Faisalabad (LYP)">Faisalabad (LYP)</option>
                                        <option value="Quetta (UET)">Quetta (UET)</option>
                                    </select>
                                    <span class="borderBottom"></span>
                                </div>

                                <div class="form-group Half">
                                    <label for="toform"><img loading="lazy" width="26" height="21"
                                            src="{{asset('assets/images/UmrahAgency-imgs-updated/to.png')}}" alt="Arrival Airport">
                                        Arrival Airport</label>
                                    <select class="form-control" name="n[To]" id="toform" required>
                                        <option value=""></option>
                                        <option value="Jeddah">Jeddah</option>
                                        <option value="Dammam">Dammam</option>
                                        <option value="Abha">Abha</option>
                                        <option value="Yanbu">Yanbu</option>
                                        <option value="Taif">Taif</option>
                                        <option value="Riyadh">Riyadh</option>
                                    </select>
                                    <span class="borderBottom"></span>
                                </div>

                                <div class="form-group Half">
                                    <!--<input class="form-control MaintoDate" type="text" name="depart_date" placeholder="Dates" required>-->
                                    <label for="dateform"><img loading="lazy" width="21" height="21"
                                            src="{{asset('assets/images/UmrahAgency-imgs-updated/calender.png')}}" alt="Date">
                                        Date</label>
                                    <input class="form-control DepartureDate" id="dateform" name="n[Departure Date]"
                                        type="text" readonly required>
                                    <span class="borderBottom"></span>
                                </div>

                                <div class="form-group Half">
                                    <!--<input class="form-control" type="text" name="phone" placeholder="Phone" required>-->
                                    <label for="Phoneform"><img loading="lazy" width="22" height="18"
                                            src="{{asset('assets/images/UmrahAgency-imgs-updated/phone.png')}}" alt="Phone Number"> Phone
                                        Number</label>
                                    <input class="form-control" id="Phoneform" name="n[Phone Number]" type="text"
                                        required>
                                    <span class="borderBottom"></span>
                                </div>

                                <div class="form-group Half">
                                    <!--<input class="form-control" type="text" name="email" placeholder="Email" required>-->
                                    <label for="emailform"><img loading="lazy" width="22" height="16"
                                            src="{{asset('assets/images/UmrahAgency-imgs-updated/email.png')}}" alt="Email Address"> Email
                                        Address</label>
                                    <input class="form-control" name="n[Email]" id="emailform" type="email" required>
                                    <span class="borderBottom"></span>
                                </div>

                                <div class="form-group nights">
                                    <div class="form-group threeQuater">
                                        <label for="nightform"><img loading="lazy" width="17" height="19"
                                                src="{{asset('assets/images/UmrahAgency-imgs-updated/moon.png')}}" alt="Nights">
                                            Nights</label>
                                        <select class="form-control" id="nightform" name="n[makkah_nights]">
                                            <option value="">MAK</option>
                                            <option value="1">MAK 1</option>
                                            <option value="2">MAK 2</option>
                                            <option value="3">MAK 3</option>
                                            <option value="4">MAK 4</option>
                                            <option value="5">MAK 5</option>
                                            <option value="6">MAK 6</option>
                                            <option value="7">MAK 7</option>
                                            <option value="8">MAK 8</option>
                                            <option value="9">MAK 9</option>
                                            <option value="10">MAK 10</option>
                                        </select>
                                        <span class="borderBottom"></span>
                                    </div>
                                    <div class="form-group Quater">
                                        <label for="nightform1"><img loading="lazy" width="17" height="19"
                                                src="{{asset('assets/images/UmrahAgency-imgs-updated/moon.png')}}" alt="Nights">
                                            Nights</label>
                                        <select class="form-control" id="nightform1" name="n[madinah_nights]">
                                            <option value="">MED</option>
                                            <option value="1">MED 1</option>
                                            <option value="2">MED 2</option>
                                            <option value="3">MED 3</option>
                                            <option value="4">MED 4</option>
                                            <option value="5">MED 5</option>
                                            <option value="6">MED 6</option>
                                            <option value="7">MED 7</option>
                                            <option value="8">MED 8</option>
                                            <option value="9">MED 9</option>
                                            <option value="10">MED 10</option>
                                        </select>
                                        <span class="borderBottom"></span>
                                    </div>
                                </div>

                                <div class="form-group Half">
                                    <label for="roomform"><img loading="lazy" width="22" height="16"
                                            src="{{asset('assets/images/UmrahAgency-imgs-updated/rooms.png')}}" alt="Rooms"> Rooms</label>
                                    <select class="form-control" id="roomform" name="n[room]">
                                        <option value=""></option>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                        <option value="Triple">Triple</option>
                                        <option value="Quad">Quad</option>
                                    </select>
                                    <span class="borderBottom"></span>
                                </div>

                                <div class="form-group passenger-contain Half">
                                    <label for="count-pass"><img loading="lazy" width="21" height="20"
                                            src="{{asset('assets/images/UmrahAgency-imgs-updated/travellers.png')}}" alt="Travellers">
                                        Travellers</label>
                                    <div class="input-group-main">
                                        <div class="input-group">
                                            <input class="form-control select inputValue PassengersField"
                                                id="count-pass" type="text" data-bs-toggle="collapse" placeholder=""
                                                data-bs-target=".beat-passenger-dropdown" required>

                                        </div>
                                    </div>
                                    <div class="passenger-dropdown beat-passenger-dropdown collapse">
                                        <div class="form-group mt-0">
                                            <label for="adult_p">Adults [+12]</label>
                                            <div class="input-group passenger adult-pass">
                                                <button class="btn  minus" type="button">
                                                    <img loading="lazy" width="12" height="12" class="img-fluid"
                                                        src="{{asset('assets/images/UmrahAgency-imgs-updated/minus.png')}}" alt="minus">
                                                </button>
                                                <input class="form-control passengerInput totalAdult" type="number"
                                                    placeholder="Adults" min="0" max="10" name="n[Adults]" value="1"
                                                    id="adult_p" selected>
                                                <button class="btn  plus" type="button">
                                                    <img loading="lazy" width="12" height="12" class="img-fluid"
                                                        src="{{asset('assets/images/UmrahAgency-imgs-updated/plus.png')}}" alt="plus">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="child_p">Children [2 to 12]</label>
                                            <div class="input-group passenger child-pass">
                                                <button class="btn  minus" type="button">
                                                    <img loading="lazy" width="12" height="12" class="img-fluid"
                                                        src="{{asset('assets/images/UmrahAgency-imgs-updated/minus.png')}}" alt="minus">
                                                </button>
                                                <input id="child_p" class="form-control passengerInput totalChild"
                                                    type="number" placeholder="Childs" min="0" max="10" name="n[Childs]"
                                                    value="0" selected>
                                                <button class="btn  plus" type="button">
                                                    <img loading="lazy" width="12" height="12" class="img-fluid"
                                                        src="{{asset('assets/images/UmrahAgency-imgs-updated/plus.png')}}" alt="plus">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-group mt-2 mb-2">
                                            <label for="infant_p">Infants [0 to 2]</label>
                                            <div class="input-group passenger infant-pass">
                                                <button class="btn  minus" type="button">
                                                    <img loading="lazy" width="12" height="12" class="img-fluid"
                                                        src="{{asset('assets/images/UmrahAgency-imgs-updated/minus.png')}}" alt="minus">
                                                </button>
                                                <input id="infant_p" class="form-control passengerInput totalInfant"
                                                    type="number" placeholder="Infants" min="0" max="10"
                                                    name="n[Infants]" value="0" selected>
                                                <button class="btn  plus" type="button">
                                                    <img loading="lazy" width="12" height="12" class="img-fluid"
                                                        src="{{asset('assets/images/UmrahAgency-imgs-updated/plus.png')}}" alt="plus">
                                                </button>
                                            </div>
                                        </div>
                                        <button class="btn general-btn btn-block" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target=".passenger-dropdown">Select</button>
                                    </div>
                                </div>

                                <div class="form-group Answer  Half">
                                    <label for="answerform"><img loading="lazy" width="20" height="15"
                                            src="{{asset('assets/images/UmrahAgency-imgs-updated/checkanswer.png')}}" alt="">
                                        Answer <span class='captcha-text' style='background: #1A1A1A; color: #fff; padding: 5px 10px; border-radius: 4px; font-weight: bold; margin-left: 10px; display: inline-block; min-width: 60px; text-align: center;'>Loading...</span></label>
                        <input class="form-control" id="answerform" type="number" name="InquiryAnswer"
                                        required>
                                    <span class="borderBottom"></span>
                                </div>

                                <div class="form-group Half">
                                    <button type="submit" class="btn btn-primary btn-block" name="submit"
                                        value="Send Message">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


