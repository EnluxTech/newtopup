
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

       <!-- Responsive -->
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
       <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
       <!-- MINIFIED -->
 <!-- Favicon icons -->
 <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon">

 <!-- All CSS -->
 <link rel="stylesheet" href="{{ asset('assets/frontpage/css/bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/frontpage/css/all.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/frontpage/css/themify-icons.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/frontpage/css/owl.carousel.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/frontpage/css/bootstrap-select.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/frontpage/css/daterangepicker.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/frontpage/css/coreNavigation-1.1.3.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/frontpage/css/style.css') }}">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Stylesheets -->
  
  <link href="{{ asset('assets/frontpage/css/custom.css') }}" rel="stylesheet">
 
   <link href="{{ asset('assets/frontpage/vendor/assets/node_modules/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

  @yield('style')


</head>
<body>

  <!-- Preloader -->
  <div id="preloader">
      <div id="status"></div>
  </div>

  <div class="header-top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <p><i class="ti-mobile"></i><a href="tel:305-449-3301">305-449-3301</a></p>
                    <p><i class="ti-email"></i> <a href="mailto:office@mail.com">office@mail.com</a></p>
                </div>
            </div>
            <div class="col-md-6 text-md-right">

                <!-- HEADER-LANGUAGE -->
                <div class="header-language">
                    <a href="#" class="langbtn">
                        <span>EN</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    {{-- <ul class="list-unstyled dropdown-menu" style="display: none;">
                        <li class="active"><a href="#">EN</a></li>
                        <li><a href="#">FR</a></li>
                        <li><a href="#">PT</a></li>
                        <li><a href="#">IT</a></li>
                    </ul> --}}
                </div> <!-- END HEADER-LANGUAGE -->
                <ul class="login-area">
                    <li><a href="{{url('/login')}}" class="login"><i class="ti-power-off"></i> Login</a></li>
                    <li><a href="{{url('/register')}}" class="rsgiter"><i class="ti-plus"></i> Register</a></li>
                </ul>
            </div>
        </div>
    </div><!-- END .CONTAINER -->
</div>
<!-- Header strat -->
  <!-- Header strat -->
  <header class="header">
      <!-- Start Navigation -->
      <nav class="">
          <div class="nav-header">
              <a href="{{url('/')}}" class="brand"><i class="ti-eraser">{{ config('app.name', 'EnluxTech-Top') }}</i><span></span></a>
              <button class="toggle-bar"><span class="fa fa-bars"></span></button>
          </div>
          <ul class="menu">
              <li class="dropdown">
                  <a href="{{url('/')}}">Home</a>
              </li>
              <li><a href="{{url('/about')}}">About Enlux</a></li>
              <li><a href="{{url('/contact')}}">Contact Support</a></li>
              <li><a href="https://enluxtech.com">Need a Website?</a></li>
              <li class="dropdown">
                <a href="#">Bill & Recharge</a>
                <ul class="dropdown-menu">
                    <li class="dropdown">
                        <a href="#"><i class="fas fa-mobile"></i>Mobile</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="mobile-1.html">Layout 1</a></li>
                            <li><a href="mobile-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fas fa-network-wired"></i>DTH</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="dth-1.html">Layout 1</a></li>
                            <li><a href="dth-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fas fa-credit-card"></i>Datacard</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="datacard-1.html">Layout 1</a></li>
                            <li><a href="datacard-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fas fa-tty"></i>Landline</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="landline-1.html">Layout 1</a></li>
                            <li><a href="landline-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fas fa-broadcast-tower"></i>Broadband</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="broadband-1.html">Layout 1</a></li>
                            <li><a href="broadband-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fas fa-lightbulb"></i>Electricity</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="electricity-1.html">Layout 1</a></li>
                            <li><a href="electricity-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fas fa-burn"></i>Gas</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="gas-1.html">Layout 1</a></li>
                            <li><a href="gas-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fas fa-train"></i>Metro</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="metro-1.html">Layout 1</a></li>
                            <li><a href="metro-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fas fa-lightbulb"></i>Water</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="water-1.html">Layout 1</a></li>
                            <li><a href="water-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fab fa-google-play"></i>G Play</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="google-pay-1.html">Layout 1</a></li>
                            <li><a href="google-pay-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fas fa-tv"></i>Cable</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="cable-1.html">Layout 1</a></li>
                            <li><a href="cable-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fas fa-holly-berry"></i>Muncipality</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="muncipality-1.html">Layout 1</a></li>
                            <li><a href="muncipality-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fas fa-hand-holding-usd"></i>EMI</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="emi-1.html">Layout 1</a></li>
                            <li><a href="emi-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fab fa-accusoft"></i>Challan</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="traffic-challan-1.html">Layout 1</a></li>
                            <li><a href="traffic-challan-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fas fa-building"></i>Housing</a>
                        <ul class="dropdown-menu left-auto">
                            <li><a href="housing-1.html">Layout 1</a></li>
                            <li><a href="housing-2.html">Layout 2</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
         
            <li class="dropdown">
                <a href="#">Blog</a>
                <ul class="dropdown-menu">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-details.html">Blog Details</a> </li>
                </ul>
            </li>
            <li><a href="contact.html">Contact Us</a></li>
            <li class="dropdown profile">
                <a href="#" class="profile-btn"><i class="fa fa-user"></i></a>
                <ul class="dropdown-menu left-auto profile-drop">
                    <li class="dropdown-header bg-offwhite">
                        <div>
                            <h5 class="hidden-xs m-b-0 text-primary text-ellipsis">Jhon Due</h5>
                            <div class="small text-muted"><span>Membership ID P14362606</span></div>
                        </div>
                    </li>
                    <li class="nav__create-new-profile-link">
                        <a href="profile.html">
                            <span>View personal profile</span>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="nav__dropdown-menu-items">
                        <a href="profile-notifications.html">
                            <i class="icon icon-setting"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li class="nav__dropdown-menu-items">
                        <a href="#"><i class="icon icon-logout"></i><span>Logout</span></a></li>
                </ul>
            </li>

          </ul>
          <ul class="text-right profile-rcv">
          </ul>
      </nav>
      <!-- End Navigation -->
  </header>
  <!-- Header End -->

<div id="app">
  <!-- Banner start -->
  <section class="banner py-0">
    <div class=" owl-carousel hero-slider">
        <div class="item" style="background-image: url('assets/frontpage/images/slider/s1.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="banner-content">
                            <h2>Online Mobile Recharge</h2>
                            <p>Top up your mobile quick and easy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('assets/frontpage/images/slider/s2.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="banner-content">
                            <h2>Instant DATA Subscription</h2>
                            <p>Out of data? Don't worry we got you covered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('assets/frontpage/images/slider/s3.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="banner-content">
                            <h2>Utility Bills</h2>
                            <p>Pay for Electricity and Tv</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner start -->
  <!-- <main class="container"> -->

      @yield('content')
  <!-- </main> -->



  </div>
  <section class="section bg-light shadow-md pt-4 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="iconBox">
                    <i class="fas fa-lock"></i>
                    <h5>Secure Payments</h5>
                    <p>Moving your card details to a much more secured place.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="iconBox">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h5>Trust pay</h5>
                    <p>100% Payment Protection. Easy Return Policy.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="iconBox">
                        <i class="fas fa-retweet"></i>
                    <h5>Refer &amp; Earn</h5>
                    <p>Invite a friend to sign up and earn up to $125.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="iconBox">
                    <i class="fab fa-superpowers"></i>
                    <h5>24/7 Support</h5>
                    <p>We're here to help. Have a query and need help ? <a href="contact.html">Click here</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Call to action section start -->
<section class="callto-action">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h3>Want To Become a Agent</h3>
                <p>Success And Spirit In Our Company</p>
            </div>
            <div class="col-md-4 text-md-right">
                <a href="{{url('/register')}}" class="btn btn-default">Register Now</a>
            </div>
        </div>
    </div>
</section>
<!-- Call to action section end -->

  <footer class="footer">
    <div class="foo-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-navigation">
                        <h4 class="widget-title">About {{ config('app.name', 'EnluxTech-Top') }}</h4>
                        <div class="widget-content">
                            <p>Maecenas condimentum vitae lectus nec tristique sed quis est ac est elementum.</p>
                            <ul class="social-media">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-navigation">
                        <h4 class="widget-title">Quick Links</h4>
                        <ul>
                            <li><a href="#">Contact Searches</a></li>
                            <li><a href="#">Jobs and Vacancies</a></li>
                            <li><a href="#">University images</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms and Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-navigation">
                        <h4 class="widget-title">Need Help?</h4>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Payment options</a></li>
                            <li><a href="#">Fees and Funding</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-navigation">
                        <h4 class="widget-title">Security Brand</h4>
                        <ul>
                            <li><a href="#">Privacy Statement</a></li>
                            <li><a href="#">Report Copyright Infringement</a></li>
                            <li><a href="#">Report Security Issue</a></li>
                            <li><a href="#">Trademark Notice</a></li>
                            <li><a href="#">Access Control</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="foo-btm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright text-left el-sm-center">Copyright © <?php
                      $copyYear = 2019;
                      $curYear = date('Y');
                      echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                      ?> <i class="ti-heart"></i> <a href="https://enluxtech.com">enluxtech.com</a>. All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <ul class="payments-types text-right  el-sm-center">
                        <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{ asset('assets/frontpage/images/pay/visa.png')}}" alt="visa" title="" data-original-title="Visa"></a></li>
                        <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{ asset('assets/frontpage/images/pay/discover.png')}}" alt="discover" title="" data-original-title="Discover"></a></li>
                        <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{ asset('assets/frontpage/images/pay/paypal.png')}}" alt="paypal" title="" data-original-title="PayPal"></a></li>
                        <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{ asset('assets/frontpage/images/pay/american.png')}}" alt="american express" title="" data-original-title="American Express"></a></li>
                        <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{ asset('assets/frontpage/images/pay/mastercard.png')}}" alt="Mastercard" title="" data-original-title="Mastercard"></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Data Plan -->
<section class="modalBody tleft nopad pall">
    <span class="overlay"></span>
    <div class="brpln open">
        <button class="close-button">
            <i class="fas fa-times"></i>
        </button>
        <div class="outerblock greybgdark bg-offwhite">
            <form class="row">
                <div class="col-md-2 ">
                    <b class="ft18 dpInBLockMid">Browse Plans</b>
                </div>
                <div class="col-md-3">
                    <select class="custom-select" id="plan-operator" required="">
                        <option value="">Select Your Operator</option>
                        <option>GramenPhone</option>
                        <option>Banlalink</option>
                        <option>Airtel</option>
                        <option>Robi</option>
                        <option>Citycell</option>
                        <option>Xirosoft</option>
                    </select>
                </div>
                <div class="col-md-3 ">
                    <select class="custom-select" id="circle" required="">
                        <option value="">Select Circle</option>
                        <option>GramenPhone</option>
                        <option>Banlalink</option>
                        <option>Airtel</option>
                        <option>Robi</option>
                        <option>Citycell</option>
                        <option>Xirosoft</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <div class="form-group nomargin mbottom">
                        <input class="form-control" id="amounts" placeholder="Enter Amount" required="" type="text">
                    </div>
                </div>
                <div class="col-md-1">
                </div>
            </form>

        </div>
        <!---->
        <div class="dpTable wdFull row">
            <div class="col-md-3 pakage-sidebar pr-0">
                <div class="scrollY">
                    <div class="data-nav">
                        <ul>
                            <li data-value="pak1" class="data-menu active">Special Offer</li>
                            <li data-value="pak2" class="data-menu">Topup</li>
                            <li data-value="pak3" class="data-menu">Full Talktime</li>
                            <li data-value="pak4" class="data-menu">4G</li>
                            <li data-value="pak5" class="data-menu">3G</li>
                            <li data-value="pak6" class="data-menu">Rate Cutter</li>
                            <li data-value="pak7" class="data-menu">SMS</li>
                            <li data-value="pak8" class="data-menu">Data</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dpTbCell col-md-9">
                <div class="row plan-titles">
                    <div class="col-md-12">
                        <div class="row bg-offwhite mr-0 p-2">
                            <div class="col-md-1 spright0">Talktime</div>
                            <div class="col-md-2">Validity</div>
                            <div class="col-md-6 spright40">Description</div>
                            <div class="col-md-2 spleft0">Price</div>
                        </div>
                    </div>
                </div>
                <div class="scrollY spbottom40">
                    <div class="row data-pakage pak1">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">1 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 100 Local &amp; National SMS &amp; 100 MB 2G/3G/4G Data &amp; Data Validity 1 day(s) &amp; Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak1">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">3 days</div>
                        <div class="col-md-6 spright40">Local @ 30p/min &amp; STD @ 30p/min &amp; Roaming Outgoing Local @ 30p/min &amp; Roaming Outgoing STD @ 30p/min</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak1">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">2 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 200 Local &amp; National SMS &amp; 150 MB 2G/3G/4G Data &amp; Data Validity 2 day(s) &amp; Free SMS @ 100 SMS per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak1">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">7 days</div>
                        <div class="col-md-6 spright40">Local @ 30p/min &amp; STD @ 30p/min &amp; Roaming Outgoing Local @ 30p/min &amp; Roaming Outgoing STD @ 30p/min</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak2">
                        <div class="col-md-1 spright0">26</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">Talktime Rs. 26 &amp; 100 MB 2G/3G/4G Data &amp; Data Validity 28 day(s) &amp; Talktime valid for 28 day(s) - Applicable recharge for plan voucher Rs. 24</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak2">
                        <div class="col-md-1 spright0">30</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">Talktime Rs. 30 &amp; 100 MB 2G/3G/4G Data &amp; Data Validity 28 day(s) &amp; Talktime valid for 28 day(s)</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak3">
                        <div class="col-md-1 spright0">55</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">Talktime Rs. 55 &amp; Local @ 60p/min &amp; STD @ 60p/min &amp; 200 MB 2G/3G/4G Data &amp; Data Validity 28 day(s) &amp; Talktime valid for 28 day(s) - Applicable recharge for plan voucher Rs. 24</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak2">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">150 Local, STD &amp; Roaming mins &amp; 100 Local &amp; National SMS &amp; 250 MB 2G/3G/4G Data &amp; Data Validity 28 day(s)</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak3">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">10 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 1000 Local &amp; National SMS &amp; 1 GB 2G/3G/4G Data &amp; Data Validity 10 day(s) &amp; Free SMS @ 100 SMS per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak4">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">12 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 1200 Local &amp; National SMS &amp; Free SMS @ 100 SMS per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak5">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 300 Local &amp; National SMS &amp; 1 GB 2G/3G/4G Data &amp; Data Validity 28 day(s)</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak6">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 300 Local &amp; National SMS &amp; 2 GB 2G/3G/4G Data &amp; Data Validity 28 day(s)</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak7">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 300 Local &amp; National SMS &amp; 3 GB 2G/3G/4G Data &amp; Data Validity 28 day(s)</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak8">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">21 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 2100 Local &amp; National SMS &amp; Free SMS @ 100 SMS per day</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak7">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">21 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 2100 Local &amp; National SMS &amp; Free SMS @ 100 SMS per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak8">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 2800 Local &amp; National SMS &amp; 28 GB 2G/3G/4G Data &amp; Data Validity 28 day(s) &amp; Free SMS @ 100 SMS per day - Data @ 1 GB per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak6">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 2800 Local &amp; National SMS &amp; 28 GB 2G/3G/4G Data &amp; Data Validity 28 day(s) &amp; Data 1 GB per day + Extra 1 GB data - Free SMS @ 100 SMS per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak4">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 2800 Local &amp; National SMS &amp; 2 GB 2G/3G/4G Data &amp; Data Validity 28 day(s) &amp; Free SMS @ 100 SMS per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak5">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 2800 Local &amp; National SMS &amp; 42 GB 2G/3G/4G Data &amp; Data Validity 28 day(s) &amp; Free SMS @ 100 SMS per day - Data @ 1.5 GB per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak6">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">35 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 600 Local &amp; National SMS &amp; 2 GB 2G/3G/4G Data &amp; Data Validity 35 day(s)</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak8">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 2800 Local &amp; National SMS &amp; 44.8 GB 2G/3G/4G Data &amp; Data Validity 28 day(s) &amp; Free SMS @ 100 SMS per day - Data @ 1.6 GB per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak7">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">48 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 600 Local &amp; National SMS &amp; 4 GB 2G/3G/4G Data &amp; Data Validity 48 day(s)</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak4">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 2800 Local &amp; National SMS &amp; 42 GB 2G/3G/4G Data &amp; Data Validity 28 day(s) &amp; Data @ 1.5 GB per day - Free SMS @ 100 SMS per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec - Unlimited Dialer tone + Missed Call Alert</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak1">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">28 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 2800 Local &amp; National SMS &amp; 70 GB 2G/3G/4G Data &amp; Data Validity 28 day(s) &amp; Data @ 2.5 GB per day - Free SMS @ 100 SMS per day</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak2">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">70 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 1000 Local &amp; National SMS &amp; 3 GB 2G/3G/4G Data &amp; Data Validity 70 day(s)</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak3">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">70 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 7000 Local &amp; National SMS &amp; 98 GB 2G/3G/4G Data &amp; Data Validity 70 day(s) &amp; Data @ 1.4 GB per day - Free SMS @ 100 SMS per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak3">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">84 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 8400 Local &amp; National SMS &amp; 84 GB 2G/3G/4G Data &amp; Data Validity 84 day(s) &amp; Free SMS @ 100 SMS per day - Data @ 1 GB per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak4">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">84 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 8400 Local &amp; National SMS &amp; 126 GB 2G/3G/4G Data &amp; Data Validity 84 day(s) &amp; Free SMS @ 100 SMS per day - Data @ 1.5 GB per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak5">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">84 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 8400 Local &amp; National SMS &amp; 134.4 GB 2G/3G/4G Data &amp; Data Validity 84 day(s) &amp; Free SMS @ 100 SMS per day - Data @ 1.6 GB per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak6">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">82 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 8200 Local &amp; National SMS &amp; 164 GB 2G/3G/4G Data &amp; Data Validity 82 day(s) &amp; Data @ 2 GB per day - Free SMS @ 100 SMS per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak7">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">90 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 9000 Local &amp; National SMS &amp; 135 GB 2G/3G/4G Data &amp; Data Validity 90 day(s) &amp; Data @ 1.5 GB per day - Free SMS @ 100 SMS per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak8">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">90 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 9000 Local &amp; National SMS &amp; 135 GB 2G/3G/4G Data &amp; Data Validity 90 day(s) &amp; Free SMS @ 100 SMS per day - Data @ 1.5 GB per day - Capping : Daily @ 250 min + Weekly @ 1000 min &amp; thereafter @ 1p/sec</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak1">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">180 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 1800 Local &amp; National SMS &amp; 6 GB 2G/3G/4G Data &amp; Data Validity 180 day(s)</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                    <div class="row data-pakage pak1">
                        <div class="col-md-1 spright0">0</div>
                        <div class="col-md-2">365 days</div>
                        <div class="col-md-6 spright40">Local calls free &amp; STD calls free &amp; Roaming Incoming &amp; Outgoing calls free &amp; 3600 Local &amp; National SMS &amp; 12 GB 2G/3G/4G Data &amp; Data Validity 365 day(s)</div>
                        <div class="col-md-3">
                            <button class="btn d-block btn-filled">$99</button>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Data plan End -->
  <!-- JS -->
  <script src="{{ asset('assets/frontpage/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/frontpage/js/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('assets/frontpage/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/frontpage/js/owl.carousel.min.js') }}"></script>
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxYLtelXg0PGjeTiFDtlN7nrH_47buDWo"></script> --}}
  <script src="{{ asset('assets/frontpage/js/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('assets/frontpage/js/daterangepicker.js') }}"></script>
  <script src="{{ asset('assets/frontpage/js/isotope.pkgd.js') }}"></script>
  <script src="{{ asset('assets/frontpage/js/coreNavigation-1.1.3.min.js') }}"></script>
  <script src="{{ asset('assets/frontpage/js/scripts.js') }}"></script>
  
  <script src="{{ asset('assets/frontpage/js/jquery.validation.min.js') }}"></script>
  <script src="{{ asset('assets/frontpage/js/custom.js') }}"></script>
  <script src="{{ asset('assets/frontpage/vendor/assets/node_modules/sweetalert2/dist/sweetalert2.min.js') }}"></script>

  @yield('javascript')
</body>

</html>
  