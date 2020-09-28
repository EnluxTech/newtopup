@extends('layouts.app')
@section('title') Welcome  @endsection
@section('style')

@endsection

@section('content')
  
    <!-- Main form start -->
    <section class="main-form py-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br><br>
                    {{-- <ul class="bill-items nav nav-tabs" id="teleporter">
                        <li class="nav-item active"><a href="mobile-1.html" class="nav-link"><i class="fas fa-mobile"></i>Buy Data</a></li>
                        <li class="nav-item"><a href="#"  id="button"class="nav-link"><i class="fas fa-mobile"></i>Airtime</a></li>
                        <li class="nav-item"><a href="# " class="nav-link"><i class="fas fa-broadcast-tower"></i>Tv Bills</a></li>
                        <li class="nav-item"><a href="electricity-1.html" class="nav-link"><i class="fas fa-lightbulb"></i>Electricity</a></li>
                    </ul>
                        <ul class="morebtn">
                            <li>
                                <a href="#" class="nav-link mbtn"><i class="fas fa-ellipsis-v"></i>More</a>
                                <ul class="dropdown-menu" id="receiver">
                                </ul>
                            </li>
                        </ul> --}}
    
                    </div>
            </div>

            <div class="row" >
                <div class="col-md-3 form-area pt-5" id="pageTitle" hidden>
                    <h2 class="text-4 mb-3">Quick Mobile Recharge</h2>
                    <form id="form-area" method="post">
                        <div class="mb-3">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input id="prepaid" name="rechargProbillpayment" class="custom-control-input" checked="" required="" type="radio">
                                <label class="custom-control-label" for="prepaid">Prepaid</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input id="postpaid" name="rechargProbillpayment" class="custom-control-input" required="" type="radio">
                                <label class="custom-control-label" for="postpaid">Postpaid</label>
                            </div>
                            <a href="#" data-target="#view-plans" data-toggle="modal" class="view-plans">View Plans</a>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" data-bv-field="number" id="mobileNumber" required="" placeholder="Enter Mobile Number">
                            </div>
                            <div class="col-md-12 form-group">
                                <select class="custom-select" id="operator" required="">
                                    <option value="">Select Your Operator</option>
                                    <option>GramenPhone</option>
                                    <option>Banlalink</option>
                                    <option>Airtel</option>
                                    <option>Robi</option>
                                    <option>Citycell</option>
                                    <option>Xirosoft</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                                    <input class="form-control" id="amount" placeholder="Enter Amount" required="" type="text">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <a class="btn btn-filled btn-block" href="recharge-order-summary.html">Continue</a>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="col-md-3 form-area pt-5" id="partial_index">
                    <h2 class="text-4 mb-3"> Quick Mobile Recharge</h2>
                    <form id="form-area" method="post">
                        <div class="mb-3">
                            {{-- <div class="custom-control custom-radio custom-control-inline">
                                <input id="prepaid" name="rechargProbillpayment" class="custom-control-input" checked="" required="" type="radio">
                                <label class="custom-control-label" for="prepaid">Prepaid</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input id="postpaid" name="rechargProbillpayment" class="custom-control-input" required="" type="radio">
                                <label class="custom-control-label" for="postpaid">Postpaid</label>
                            </div> --}}
                            <a href="#" data-target="#view-plans" data-toggle="modal" class="view-plans">View Plans</a>
                        </div>

                        <div class="form-row" >
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" data-bv-field="number" id="mobileNumber" required="" placeholder="Enter Mobile Number">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" data-bv-field="email" id="email" required="" placeholder="Enter Email Address">
                            </div>
                            <div class="col-md-12 form-group">
                                <select class="custom-select" id="operator" required="">
                                    <option value="">Select Your Operator</option>
                                    <option>GramenPhone</option>
                                    <option>Banlalink</option>
                                    <option>Airtel</option>
                                    <option>Robi</option>
                                    <option>Citycell</option>
                                    <option>Xirosoft</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text">&#8358</span> </div>
                                    <input class="form-control" id="amount" placeholder="Enter Amount" required="" type="text">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <a class="btn btn-filled btn-block" href="recharge-order-summary.html">Continue</a>
                            </div>
                        </div>
                    </form>
                </div>

                
                <div class="col-md-9">
                    <section class="featured-offer pb-0">
                        <div class="">
                            <div class="row">
                                <div class=" col-md-12 m-auto text-left">
                                    <div class="sec-heading mb-3">
                                        <span class="tagline">Featured Offer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 m-auto">
                                    <div class="featuredOfferBox">
                                        <div class="featuredOffer-caro fc-2 owl-carousel" data-slide="3" data-return="true">
                                            <a href="#" class="fItems">
                                                <img src="assets/frontpage/images/feature/1.jpg" alt="" class="featuredimg">
                                            </a>
                                            <a href="#" class="fItems">
                                                <img src="assets/frontpage/images/feature/2.png" alt="" class="featuredimg">
                                            </a>
                                            <a href="#" class="fItems">
                                                <img src="assets/frontpage/images/feature/3.png" alt="" class="featuredimg">
                                            </a>
                                            <a href="#" class="fItems">
                                                <img src="assets/frontpage/images/feature/4.png" alt="" class="featuredimg">
                                            </a>
                                            <a href="#" class="fItems">
                                                <img src="assets/frontpage/images/feature/5.jpg" alt="" class="featuredimg">
                                            </a>
                                            <a href="#" class="fItems">
                                                <img src="assets/frontpage/images/feature/6.png" alt="" class="featuredimg">
                                            </a>
                                            <a href="#" class="fItems">
                                                <img src="assets/frontpage/images/feature/7.png" alt="" class="featuredimg">
                                            </a>
                                            <a href="#" class="fItems">
                                                <img src="assets/frontpage/images/feature/8.png" alt="" class="featuredimg">
                                            </a>
                                            <a href="#" class="fItems">
                                                <img src="assets/frontpage/images/feature/9.png" alt="" class="featuredimg">
                                            </a>
                                            <a href="#" class="fItems">
                                                <img src="assets/frontpage/images/feature/10.png" alt="" class="featuredimg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
</section>
<!-- Main form end -->

  <!-- Start We feature Section -->
  <section class="we-feature bg-offwhite">
    <div class="container">
        <div class="row">
            <div class=" col-md-12 m-auto text-center">
                <div class="sec-heading mb-4">
                    <span class="tagline">WHAT WE DO</span>
                    <h3 class="sec-title"> We Provide Awesome Services</h3>
                </div>
            </div>
        </div>
        <div class="cl row">
            <ul class="col-md-12 nav nav-tabs cmn-carousel owl-carousel cspage">
                <li class="item">
                    <button data-tag="tab1" class="caroBtn single-evnt caro-item active">
                       <h1> Buy Phone Airtime </h1>
                    </button>
                </li>
                <li class="item">
                    <button data-tag="tab2" class="caroBtn single-evnt caro-item">
                      <h1>Buy Internet Data</h1>
                    </button>
                </li>
                <li class="item">
                    <button data-tag="tab3" class="caroBtn single-evnt caro-item">
                      <h1>Pay TV Subs</h1>
                    </button>
                </li>
                <li class="item">
                    <button data-tag="tab4" class="caroBtn single-evnt caro-item">
                       <h1>Pay Electricity Bill </h1>

                    </button>
                </li>
                {{-- <li class="item">
                    <button data-tag="tab5" class="caroBtn single-evnt caro-item">
                        <img src="images/protal/client05.png" alt="">
                    </button>
                </li>
                <li class="item">
                    <button data-tag="tab6" class="caroBtn single-evnt caro-item">
                        <img src="images/protal/client06.png" alt="">
                    </button>
                </li> --}}
            </ul>

            <div class="cmn-caro-tab">
                <div id="tab1C" class="tcontent active">
                            <div class="single-event-con">
                                <div class="cl row">
                                    
                                    <div class="col-md-3 "><img src="assets/frontpage/images/Airtime/9mobile-Airtime.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                                    <div class="col-md-3 "> <img src="assets/frontpage/images/Airtime/Airtel-Airtime.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                                    <div class="col-md-3 "> <img src="assets/frontpage/images/Airtime/GLO-Airtime.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                                    <div class="col-md-3 "> <img src="assets/frontpage/images/Airtime/MTN-Airtime.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                                    <div class="col-md-3 "> <img src="assets/frontpage/images/Airtime/Smile-Network-Payment.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>

                                        
                            
                                </div>
                           
                                        <a href="#" class="btn btn-default">Oya HIt Me</a>
                             </div>
            </div>
                <div id="tab2C" class="tcontent">

                    <div class="single-event-con">
                        <div class="cl row">
                            
                            <div class="col-md-3 "><img src="assets/frontpage/images/Data/9mobile-Data.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                            <div class="col-md-3 "> <img src="assets/frontpage/images/Data/Airtel-Data.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                            <div class="col-md-3 "> <img src="assets/frontpage/images/Data/GLO-Data.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                            <div class="col-md-3 "> <img src="assets/frontpage/images/Data/MTN-Data.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                            <div class="col-md-3 "> <img src="assets/frontpage/images/Data/Smile-Network-Payment.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>

                                
                    
                        </div>
                   
                                <a href="#" class="btn btn-default">Oya HIt Me</a>
                     </div>

                </div>
                <div id="tab3C" class="tcontent">
                    <div class="single-event-con">
                        <div class="cl row">
                            
                            <div class="col-md-3 "><img src="assets/frontpage/images/Subscriptions/Gotv-Payment.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                            <div class="col-md-3"> <img src="assets/frontpage/images/Subscriptions/Pay-DSTV-Subscription.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                            <div class="col-md-3"> <img src="assets/frontpage/images/Subscriptions/Startimes-Subscription.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                            <div class="col-md-3 "> <img src="assets/frontpage/images/feature/1.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                          
                                
                    
                        </div>
                   
                                <a href="#" class="btn btn-default">Oya HIt Me</a>
                     </div>
                </div>
                <div id="tab4C" class="tcontent">
                    <div class="single-event-con">
                        <div class="cl row">
                            
                            <div class="col-md-3 "><img src="assets/frontpage/images/Bills/Abuja-Electric.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                            <div class="col-md-3 "> <img src="assets/frontpage/images/Bills/Eko-Electric-Payment-PHCN.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                            <div class="col-md-3 "> <img src="assets/frontpage/images/Bills/IBEDC-Ibadan-Electricity-Distribution-Company.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                            <div class="col-md-3 "> <img src="assets/frontpage/images/Bills/Ikeja-Electric-Payment-PHCN.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                            <div class="col-md-3 "> <img src="assets/frontpage/images/Bills/Jos-Electric-JED.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                            <div class="col-md-3 "> <img src="assets/frontpage/images/Bills/Kano-Electric.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>
                            <div class="col-md-3 "> <img src="assets/frontpage/images/Bills/Port-Harcourt-Electric.jpg" data-toggle="modal" data-target="#airtimeModal">     </div>

                                
                    
                        </div>
                   
                                <a href="#" class="btn btn-default">Oya HIt Me</a>
                     </div>
                </div>
                {{-- <div id="tab5C" class="tcontent">
                    <div class="single-event-con">
                        <p>Chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>

                <div id="tab6C" class="tcontent">
                    <div class="single-event-con">
                        <p>Standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- End  We feature Section -->

    @section('javascript')

@endsection

    @endsection