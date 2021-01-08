@if (LaravelLocalization::getCurrentLocale() == 'ar')
    @php
    $dir = 'rtl';
    $text = 'text-right';
    @endphp
@elseif (LaravelLocalization::getCurrentLocale() == 'en')  
    @php
    $dir = 'ltr';
    $text = '';
    @endphp
@endif

@extends('layouts.app') 


@section('content')

<style>

    .modal-header .close {
        padding: unset; 
        margin: unset; 
    }

    .form-check-label {
        margin-bottom: 0;
        margin-right: 20px;
    }

    .form-check {
        padding-left: 2.25rem;
    }

    .red { color: red;}
    .purple { color: #9c19be}

    .request
    {
        width: 100%;
        text-align: center;
        position: fixed;
        bottom: 0;
        z-index: 99;
    }

    .request-btn
    {
        float: right;
        background: #670fc7;
        padding: 10px 19px;
        color: #ffffff;
        box-shadow: 0px 1px 1px 1px #53535399;
        border-radius: 12px;
        position: fixed;
        bottom: 25px;
        right: 110px;
        text-transform: capitalize;
        z-index: 10;
        border: 0;
    }

    .price-table-wrapper {
    text-align: center;
    margin-top: 30px; }

    .price-table-wrapper .featured-table {
    box-shadow: 0px 0px 19px -3px rgba(0, 0, 0, 0.36); }

    .price-table-wrapper .pricing-table {
    display: inline-block;
    background: white;
    transition: all 0.3s ease-in-out; }


    .price-table-wrapper .pricing-table1 {
    border: 1px solid #C8C8C8;
    margin: 20px 10px;
    border-radius: 10px;
    }

    .price-table-wrapper .pricing-table__header {
    padding: 20px;
    font-size: 20px;
    background: #E0E0E0;
    border-radius: 10px 10px 0px 0px;
    }

    .price-table-wrapper .silver {
    background: linear-gradient(
        -72deg,
        #dedede,
        #ffffff 16%,
        #dedede 21%,
        #ffffff 24%,
        #8a8686 27%,
        #dedede 36%,
        #ffffff 45%,
        #ffffff 60%,
        #dedede 72%,
        #ffffff 80%,
        #dedede 84%,
        #a1a1a1
    );
    }

    .price-table-wrapper .gold {
    background: linear-gradient(to right, #BF953F, #FCF6BA, #B38728, #FBF5B7, #AA771C);
    }

    .price-table-wrapper .platinum {
    background: linear-gradient(
        -72deg,
        #dedeff,
        #ffffff 16%,
        #dedeff 21%,
        #ffffff 24%,
        #8e8e9a 27%,
        #dedeff 36%,
        #ffffff 45%,
        #ffffff 60%,
        #dedeff 72%,
        #ffffff 80%,
        #dedeff 84%,
        #8a8a96
    );
    }

    .price-table-wrapper .pricing-table__price {
    color: #2489d6;
    padding: 10px;
    margin: auto;
    font-size: 40px;
    font-weight: 500; }

    .price-table-wrapper .pricing-table__button {
    display: block;
    background: #000;
    text-decoration: none;
    padding: 10px;
    color: white;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease-in-out; }

    .price-table-wrapper .pricing-table__button:before {
    position: absolute;
    left: 0;
    top: -10%;
    content: '';
    width: 30%;
    height: 220%;
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg);
    background: white;
    opacity: .3;
    transition: all 0.3s ease-in-out; }

    .price-table-wrapper .pricing-table__button:after {
    position: absolute;
    content: '';
    top: 0;
    right: 0;
    font-size: 25px;
    padding: 0;
    padding-right: 40px;
    color: white;
    opacity: 0;
    transition: all 0.3s ease-in-out; }

    .price-table-wrapper .pricing-table__button:hover {
    background: black;
    color: #fff !important; }

    .price-table-wrapper .pricing-table__list {
    padding: 20px;
    padding-bottom: 0;
    color: #A0A0A0; }

    .price-table-wrapper .pricing-table__list li {
    padding: 15px;
    border-bottom: 1px solid #C8C8C8;
    list-style: none; }

    .price-table-wrapper .pricing-table__list li:last-child {
    border: none; }

    .price-table-wrapper .pricing-table1:hover {
    box-shadow: 0px 0px 19px -3px rgba(0, 0, 0, 0.36); }

    .price-table-wrapper .pricing-table1:hover .pricing-table__button {
    padding-left: 0;
    padding-right: 35px; }

    .price-table-wrapper .pricing-table1:hover .pricing-table__button:before {
    top: -80%;
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    width: 100%; }

    .price-table-wrapper .pricing-table1:hover .pricing-table__button:after {
    opacity: 1;
    padding-right: 15px; }

</style>


 <!--==============================  Navbar Section    ==============================--> 
   
 @include('include.navbar2')

<div class="py-5" style="height: 15vh; background:linear-gradient(-45deg, rgba(147,26,222,0.83) 0%, rgba(28,206,234,0.82) 100%);">


</div>

 <!--==============================  Page Section    ==============================--> 


@if ($service == 'website')

<div class="request">
    <button type="button" class="request-btn" data-toggle="modal" data-target="#ModalRequest" >
        {{__('packages.Web-Request')}}
    </button>
</div>

<div class="modal fade bd-example-modal-lg" id="ModalRequest" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content {{$text}}" dir="{{$dir}}">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{__('packages.Web-Request')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            <form class="web_request_form" data-lang="{{LaravelLocalization::getCurrentLocale()}}">
                    @csrf

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputName">{{__('packages.name')}}</label>
                        <input type="text" name="name" class="form-control field" id="inputName" required>
                        <small id="name_error" class="form-text text-danger error"></small>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPhone">{{__('packages.phone')}}</label>
                        <input type="number" name="phone" class="form-control field" id="inputPhone" required>
                        <small id="phone_error" class="form-text text-danger error"></small>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">{{__('packages.email')}}</label>
                        <input type="email" name="email" class="form-control field" id="inputEmail4" required>
                        <small id="email_error" class="form-text text-danger error"></small>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputCompany">{{__('packages.company')}}</label>
                        <input type="text" name="company" class="form-control field" id="inputCompany" required>
                        <small id="company_error" class="form-text text-danger error"></small>
                      </div>
                    </div>

                    <hr>
                    <div class="form-group">
                      <label ><strong> {{__('packages.do-u-want-to')}} </strong> </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="want_to" id="exampleRadios1" value="Build a new website" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                {{__('packages.build')}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="want_to" id="exampleRadios2" value="Redesign an existing one">
                            <label class="form-check-label" for="exampleRadios2">
                                {{__('packages.redesign')}}
                            </label>
                        </div>
                    </div>
                    <hr>

                    <div class="form-group">
                      <label for="inputbusiness"><strong> {{__('packages.describe-your-business')}} </strong></label>
                      <textarea id="inputbusiness" name="describe"  cols="30" rows="3" class="form-control rounded-0 field" placeholder="" required="" spellcheck="false" ></textarea>
                    </div>
                    <hr>

                    <div class="form-group">
                      <label for="inputservices"><strong> {{__('packages.what-services-do-u-offer')}} </strong></label>
                      <textarea name="services" id="inputservices" cols="30" rows="3" class="form-control rounded-0 field" placeholder="" required="" spellcheck="false" ></textarea>
                    </div>
                    <hr>

                    <div class="form-group">
                      <label for="inputlist"><strong> {{__('packages.three-website')}} </strong></label>
                      <textarea name="three_websites" id="inputlist" cols="30" rows="3" class="form-control rounded-0 field" placeholder=""  spellcheck="false" ></textarea>
                    </div>
                    <hr>

                    <div class="form-group">
                      <label for="inputguide"><strong> {{__('packages.style-guides')}} </strong></label>
                      <textarea name="guides" id="inputguide" cols="30" rows="3" class="form-control rounded-0 field" placeholder="" spellcheck="false" ></textarea>
                    </div>
                    <hr>

                    <div class="form-group">
                      <label ><strong> {{__('packages.your-budget')}} </strong> </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="budget" id="budget1" value="From 1,000 To 5,000" checked>
                            <label class="form-check-label" for="budget1">
                                {{__('packages.from')}} 1,000 {{__('packages.to')}} 5,000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="budget" id="budget2" value="From 5,000 To 10,000">
                            <label class="form-check-label" for="budget2">
                                {{__('packages.from')}} 5,000 {{__('packages.to')}} 10,000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="budget" id="budget3" value="From 10,000 To 20,000">
                            <label class="form-check-label" for="budget3">
                                {{__('packages.from')}} 10,000 {{__('packages.to')}} 20,000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="budget" id="budget4" value="From 20,000 To 30,000">
                            <label class="form-check-label" for="budget4">
                                {{__('packages.from')}} 20,000 {{__('packages.to')}} 30,000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="budget" id="budget5" value="More Than 30,000">
                            <label class="form-check-label" for="budget5">
                                {{__('packages.more-than')}} 30,000
                            </label>
                        </div>
                    </div>
                    <hr>

                    <div class="form-group">
                      <label for="inputdate"><strong> {{__('packages.ideal-date')}} </strong></label>
                      <input type="date" name="ideal_date" id="inputdate" class="form-control rounded-0 field" required>
                      <small id="ideal_date_error" class="form-text text-danger error"></small>
                    </div>

                    <hr>

                    <div class="row form-group">

                        <div class="col-md-12 ">
                              <label class="text-black" for="notes">
                                  {{__('products.notes')}}
                              </label> 
                              <textarea name="notes" id="notes" cols="30" rows="3" class="form-control" placeholder="{{__('products.write-notes')}}"></textarea>
                        </div>
  
                    </div>

                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('packages.close')}}</button>
                        <button type="submit" class="btn btn-primary submit">{{__('packages.send-request')}}</button>
                    </div>

                  </form>
            </div>

      </div>
    </div>
</div>
    
    <h3 class="text-center section-title py-5">{{__('packages.WEBSITE')}}</h3>

    <div class="container">
        <div class="row mb-5" dir="{{$dir}}">

        <!-- Start Pricing -->
            <div class="container-fluid" >
            
                <div class="text-center">
                <h4 class="text-dark">{{__('packages.web-package-head')}}</h4>
                </div>


                <div class="price-table-wrapper row" >

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h2 class="pricing-table__header silver"> {{__('packages.SILVER')}} </h2>
                            <s class="purple">2000 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">1499 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF25')}}
                            </a>
                            <ul class="pricing-table__list">
                            <li>{{__('packages.Domain')}}</li>
                            <li>{{__('packages.Hosting')}}</li>
                            <li>{{__('packages.Support')}}</li>
                            <li>{{__('packages.email-silver')}}</li>
                            <li>{{__('packages.page-silver')}}</li>
                            <li> - </li>
                            <li>
                                <button class="btn btn-info mt-4 @auth add_item @else login_modal @endauth" @guest data-login="{{__('core.login-add-item')}}" @endguest data-lang="{{LaravelLocalization::getCurrentLocale()}}"> <b>{{__('core.buy-now')}}</b> </button>
                            </li>
                            </ul>
                        </div>


                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1 featured-table" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h2 class="pricing-table__header gold"> {{__('packages.GOLD')}} </h2>
                            <s class="purple">7000 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">4550 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF35')}}
                            </a>
                            <ul class="pricing-table__list">
                                <li>{{__('packages.Domain')}}</li>
                                <li>{{__('packages.Hosting')}}</li>
                                <li>{{__('packages.Support')}}</li>
                                <li>{{__('packages.email-gold')}}</li>
                                <li>{{__('packages.page-gold')}}</li>
                                <li>{{__('packages.Control')}}</li>
                                <li>
                                    <button class="btn btn-info mt-4 @auth add_item @else login_modal @endauth" @guest data-login="{{__('core.login-add-item')}}" @endguest data-lang="{{LaravelLocalization::getCurrentLocale()}}"> <b>{{__('core.buy-now')}}</b> </button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h2 class="pricing-table__header platinum"> {{__('packages.PLATINUM')}} </h2>
                            <s class="purple">10000 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">6999 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button">
                                {{__('packages.OFF30')}}
                            </a>
                            <ul class="pricing-table__list">
                                <li>{{__('packages.Domain')}}</li>
                                <li>{{__('packages.Hosting')}}</li>
                                <li>{{__('packages.Support')}}</li>
                                <li>{{__('packages.email-platinum')}}</li>
                                <li>{{__('packages.page-platinum')}}</li>
                                <li>{{__('packages.Control')}}</li>
                                <li>
                                    <button class="btn btn-info mt-4 @auth add_item @else login_modal @endauth" @guest data-login="{{__('core.login-add-item')}}" @endguest data-lang="{{LaravelLocalization::getCurrentLocale()}}"> <b>{{__('core.buy-now')}}</b> </button>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                
            </div>
            <!-- End Pricing -->

        </div>

    </div>


@elseif ($service == 'social-media-management')

<div class="request">
    <button type="button" class="request-btn" data-toggle="modal" data-target="#ModalRequest" >
        {{__('packages.Social-Request')}}
    </button>
</div>

<div class="modal fade bd-example-modal-lg" id="ModalRequest" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content {{$text}}" dir="{{$dir}}">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{__('packages.Social-Request')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form  class="social_request_form" data-lang="{{LaravelLocalization::getCurrentLocale()}}">
                    @csrf

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputName">{{__('packages.name')}}</label>
                        <input type="text" name="name" class="form-control field" id="inputName" required>
                        <small id="name_error" class="form-text text-danger error"></small>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPhone">{{__('packages.phone')}}</label>
                        <input type="number" name="phone" class="form-control field" id="inputPhone" required>
                        <small id="phone_error" class="form-text text-danger error"></small>
                      </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">{{__('packages.email')}}</label>
                          <input type="email" name="email" class="form-control field" id="inputEmail4" required>
                          <small id="email_error" class="form-text text-danger error"></small>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputCompany">{{__('packages.company')}}</label>
                          <input type="text" name="company" class="form-control field" id="inputCompany" required>
                        <small id="company_error" class="form-text text-danger error"></small>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                      <label ><strong>  {{__('packages.your-plan')}} </strong> </label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="plan" id="exampleRadios1" value="Paid ADS" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                {{__('packages.paid-ads')}}
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="plan" id="exampleRadios2" value="Moderating">
                            <label class="form-check-label" for="exampleRadios2">
                                {{__('packages.moderating')}}
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="plan" id="exampleRadios3" value="Both">
                            <label class="form-check-label" for="exampleRadios3">
                                {{__('packages.both')}}
                            </label>
                        </div>

                    </div>
                    <hr>

                    <div class="form-group">
                        <label for="platforms"><strong>  {{__('packages.platform-number')}} </strong></label>
                        <select class="form-control" name="platform_num" id="platforms">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                    <hr>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputfacebook"><strong>{{__('packages.facebook-link')}} </strong></label>
                          <input type="link" name="facebook" class="form-control field" id="inputfacebook" >
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputinsta"><strong>{{__('packages.instagram-link')}} </strong></label>
                          <input type="link" name="instagram" class="form-control field" id="inputinsta">
                        </div>
                    </div> 
                    <hr>

                    <div class="form-row">
                        <div class="form-group col-md-6 paid_posts_box">
                            <label for="paidpost"><strong>  {{__('packages.paid-posts-number')}} </strong></label>
                            <select class="form-control" name="paid_posts" id="paidpost">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="normalpost"><strong> {{__('packages.normal-posts-number')}} </strong></label>
                            <select class="form-control" name="normal_posts" id="normalpost">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>7</option>
                              <option>8</option>
                              <option>9</option>
                              <option>10</option>
                              <option>11</option>
                              <option>12</option>
                            </select>
                          </div>

                    </div>
                    <hr>


                    <div class="form-row">

                        <div class="form-group col-md-6">
                        <label for="postdesign"><strong>  {{__('packages.want-post-design')}} </strong></label>
                        <select class="form-control" name="design" id="postdesign">
                            <option>{{__('packages.yes')}}</option>
                            <option>{{__('packages.no')}}</option>
                        </select>
                        </div>

                        <div class="form-group col-md-6">
                        <label for="postcontent"><strong>  {{__('packages.want-post-content')}} </strong></label>
                        <select class="form-control" name="content" id="postcontent">
                            <option>{{__('packages.yes')}}</option>
                            <option>{{__('packages.no')}}</option>
                        </select>
                        </div>

                    </div>
                    <hr>

                <div class="moderating_box">
                    <div class="form-group">
                      <label ><strong>  {{__('packages.moderating-hours')}} </strong> </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="moderating" id="moderating1" value="8 hours" checked>
                            <label class="form-check-label" for="moderating1">
                            8 {{__('packages.hours')}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="moderating" id="moderating2" value="10 hours">
                            <label class="form-check-label" for="moderating2">
                            10 {{__('packages.hours')}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="moderating" id="moderating3" value="12 hours">
                            <label class="form-check-label" for="moderating3">
                            12 {{__('packages.hours2')}}
                            </label>
                        </div>
                    </div>
                    <hr>
                </div>

                    <div class="form-group">
                      <label ><strong>  {{__('packages.package-duration')}} </strong> </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration1" value="1 month" checked>
                            <label class="form-check-label" for="duration1">
                                {{__('packages.1month')}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration2" value="2 month">
                            <label class="form-check-label" for="duration2">
                                {{__('packages.2month')}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duration" id="duration3" value="3 months">
                            <label class="form-check-label" for="duration3">
                                {{__('packages.3month')}}
                            </label>
                        </div>
                    </div>

                    <hr>

                    <div class="row form-group">

                        <div class="col-md-12 ">
                              <label class="text-black" for="notes">
                                  {{__('products.notes')}}
                              </label> 
                              <textarea name="notes" id="notes" cols="30" rows="3" class="form-control" placeholder="{{__('products.write-notes')}}"></textarea>
                        </div>
  
                    </div>


                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('packages.close')}}</button>
                        <button type="submit" class="btn btn-primary submit">{{__('packages.send-request')}}</button>
                    </div>


                  </form>
            </div>

      </div>
    </div>
</div>
 
    <h3 class="text-center section-title py-5">{{__('packages.SOCIAL')}}</h3>

    <div class="container">
        <div class="row mb-5" dir="{{$dir}}">

        <!-- Start Pricing -->
            <div class="container-fluid" >
            


                <h2 class="{{ $text }} pt-4">1- {{__('packages.Social-Trial')}} <span class="red">({{__('packages.1day')}})</span></h2>

                    <div class="price-table-wrapper row justify-content-center" >


                        <div class="col-md-4 pricing-table">
                            <div class="pricing-table1 featured-table" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <h2 class="pricing-table__header gold"> {{__('packages.GOLD')}} </h2>
                                <s class="purple">700 {{__('packages.LE')}}</s>
                                <h3 class="pricing-table__price">500 {{__('packages.LE')}}</h3>
                                <a target="_blank" class="pricing-table__button" >
                                    {{__('packages.OFF30')}}
                                </a>
                                <ul class="pricing-table__list">
                                    <li>{{__('packages.1platform')}}</li>
                                    <li>{{__('packages.1paid')}}</li>
                                    <li>{{__('packages.1design')}}</li>
                                    <li>{{__('packages.message-reply')}}</li>
                                    <li>{{__('packages.comment-reply')}}</li>
                                    <li>{{__('packages.excel-sheet')}} </li>
                                    <li>{{__('packages.moderating-perday')}} </li>
                                </ul>
                            </div>
                        </div>


                    </div>




                <h2 class="{{ $text }} pt-4">2- {{__('packages.Social-Paid')}} <span class="red">({{__('packages.1month')}})</span></h2>

                <div class="price-table-wrapper row" >

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h2 class="pricing-table__header silver"> {{__('packages.SILVER')}} </h2>
                            <s class="purple">6,250 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">4,999 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF20')}}
                            </a>
                            <ul class="pricing-table__list">
                            <li>{{__('packages.1platform')}}</li>
                            <li>10 {{__('packages.posts-design')}}</li>
                            <li>6 {{__('packages.normal')}}, 4 {{__('packages.paid')}}</li>
                            <li class="red">{{__('packages.page-like')}} 700</li>
                            <li class="red">{{__('packages.page-engagement')}} 1,000</li>
                            <li class="red">{{__('packages.page-reach')}} 50,000 </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1 featured-table" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h2 class="pricing-table__header gold"> {{__('packages.GOLD')}} </h2>
                            <s class="purple">10,000 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">7,500 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF25')}}
                            </a>
                            <ul class="pricing-table__list">
                                <li>{{__('packages.2platform')}}</li>
                                <li>16 {{__('packages.posts-design')}}</li>
                                <li>10 {{__('packages.normal')}}, 6 {{__('packages.paid')}}</li>
                                <li class="red">{{__('packages.page-like')}} 1,500</li>
                                <li class="red">{{__('packages.page-engagement')}} 2,000</li>
                                <li class="red">{{__('packages.page-reach')}} 80,000 </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h2 class="pricing-table__header platinum"> {{__('packages.PLATINUM')}} </h2>
                            <s class="purple">13,500 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">9,500 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button">
                                {{__('packages.OFF30')}}
                            </a>
                            <ul class="pricing-table__list">
                                <li>{{__('packages.3platform')}}</li>
                                <li>20 {{__('packages.posts-design')}}</li>
                                <li>12 {{__('packages.normal')}}, 8 {{__('packages.paid')}}</li>
                                <li class="red">{{__('packages.page-like')}} 2,000</li>
                                <li class="red">{{__('packages.page-engagement')}} 2,500</li>
                                <li class="red">{{__('packages.page-reach')}} 120,000 </li>
                            </ul>
                        </div>
                    </div>

                </div>



                <h2 class="{{ $text }} pt-4">3- {{__('packages.Social-Moderating')}} <span class="red">({{__('packages.1month')}})</span></h2>

                <div class="price-table-wrapper row" >

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h2 class="pricing-table__header silver"> {{__('packages.SILVER')}} </h2>
                            <s class="purple">4,000 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">2,999 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF25')}}
                            </a>
                            <ul class="pricing-table__list">
                            <li>8 {{__('packages.posts')}}</li>
                            <li>{{__('packages.post-design')}}</li>
                            <li>{{__('packages.post-content')}}</li>
                            <li>{{__('packages.message-reply')}}</li>
                            <li>{{__('packages.comment-reply')}}</li>
                            <li>{{__('packages.excel-sheet')}} </li>
                            <li>8 {{__('packages.hours-perday')}}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1 featured-table" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h2 class="pricing-table__header gold"> {{__('packages.GOLD')}} </h2>
                            <s class="purple">5,700 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">3,999 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF30')}}
                            </a>
                            <ul class="pricing-table__list">
                                <li>12 {{__('packages.posts')}}</li>
                                <li>{{__('packages.post-design')}}</li>
                                <li>{{__('packages.post-content')}}</li>
                                <li>{{__('packages.message-reply')}}</li>
                                <li>{{__('packages.comment-reply')}}</li>
                                <li>{{__('packages.excel-sheet')}} </li>
                                <li>10 {{__('packages.hours-perday')}}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h2 class="pricing-table__header platinum"> {{__('packages.PLATINUM')}} </h2>
                            <s class="purple">7,650 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">4,999 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button">
                                {{__('packages.OFF35')}}
                            </a>
                            <ul class="pricing-table__list">
                                <li>18 {{__('packages.posts')}}</li>
                                <li>{{__('packages.post-design')}}</li>
                                <li>{{__('packages.post-content')}}</li>
                                <li>{{__('packages.message-reply')}}</li>
                                <li>{{__('packages.comment-reply')}}</li>
                                <li>{{__('packages.excel-sheet')}} </li>
                                <li>12 {{__('packages.hours-perday2')}}</li>
                            </ul>
                        </div>
                    </div>

                </div>
                
            </div>
            <!-- End Pricing -->

        </div>

    </div>



@elseif ($service == 'designs')
 
    <h3 class="text-center section-title py-5">{{__('packages.DESIGNS')}}</h3>

    <div class="container">
        <div class="row mb-5" dir="{{$dir}}">

        <!-- Start Pricing -->
            <div class="container-fluid" >
            

                <h2 class="{{ $text }} pt-4">1- {{__('packages.social-posts-design')}} </h2>

                <div class="price-table-wrapper row" >

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h2 class="pricing-table__header silver"> {{__('packages.SILVER')}} </h2>
                            <s class="purple">1,250 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">999 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF20')}}
                            </a>
                            <ul class="pricing-table__list">
                            <li>10 {{__('packages.posts-design')}}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1 featured-table" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h2 class="pricing-table__header gold"> {{__('packages.GOLD')}} </h2>
                            <s class="purple">2,000 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">1,500 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF25')}}
                            </a>
                            <ul class="pricing-table__list">
                                <li>20 {{__('packages.posts-design')}}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <h2 class="pricing-table__header platinum"> {{__('packages.PLATINUM')}} </h2>
                            <s class="purple">4,000 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">2,800 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button">
                                {{__('packages.OFF30')}}
                            </a>
                            <ul class="pricing-table__list">
                                <li>40 {{__('packages.posts-design')}}</li>
                            </ul>
                        </div>
                    </div>

                </div>


                <h2 class="{{ $text }} pt-4">2- {{__('packages.others')}} </h2>

                <div class="price-table-wrapper row" >

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/logos.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h2 class="pt-3"> {{__('packages.create-logo')}} </h2>
                            <s class="purple">2,500 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">1,750 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF20')}}
                            </a>
                            <ul class="pricing-table__list">
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/ci.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h2 class="pt-3"> {{__('packages.ci')}} </h2>
                            <s class="purple">2,500 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">1,750 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF20')}}
                            </a>
                            <ul class="pricing-table__list">
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/flyers.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h2 class="pt-3"> {{__('packages.flyers')}} </h2>
                            <s class="purple">350 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">250 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF20')}}
                            </a>
                            <ul class="pricing-table__list">
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/menu.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h2 class="pt-3"> {{__('packages.menu')}} </h2>
                            <s class="purple">500 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">350 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF20')}}
                            </a>
                            <ul class="pricing-table__list">
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/megamenu.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h2 class="pt-3"> {{__('packages.mega-menu')}} </h2>
                            <s class="purple">800 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">600 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF20')}}
                            </a>
                            <ul class="pricing-table__list">
                                <li>Up To 20 Pages</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/brochures.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h2 class="pt-3"> {{__('packages.brochures')}} </h2>
                            <s class="purple">450 {{__('packages.LE')}}</s>
                            <h3 class="pricing-table__price">300 {{__('packages.LE')}}</h3>
                            <a target="_blank" class="pricing-table__button" >
                                {{__('packages.OFF20')}}
                            </a>
                            <ul class="pricing-table__list">
                            </ul>
                        </div>
                    </div>

                </div>

                
            </div>
            <!-- End Pricing -->

        </div>

    </div>


@elseif ($service == 'printing')
 
    <h3 class="text-center section-title py-5"> {{__('packages.PRINT')}}  </h3>

    <div class="container">
        <div class="row mb-5" dir="{{$dir}}">

        <!-- Start Pricing -->
            <div class="container-fluid" >
            

                <div class="price-table-wrapper row" >

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/books.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h3 class="py-3"> {{__('packages.books')}} </h3>
                            <a target="_blank" class="pricing-table__button" >
                            {{__('packages.OFF20')}}
                            </a>
                            <div class="row form-group my-4">
                                <div class="col-md-12 ">
                                    <a href="/product/books" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">{{__('packages.ViewDetails')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/notebook.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h3 class="py-3"> {{__('packages.notebook')}} </h3>
                            <a target="_blank" class="pricing-table__button" >
                            {{__('packages.OFF20')}}
                            </a>
                            <div class="row form-group my-4">
                                <div class="col-md-12 ">
                                    <a href="/product/notebook" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">{{__('packages.ViewDetails')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/folder.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h3 class="py-3"> {{__('packages.folder')}} </h3>
                            <a target="_blank" class="pricing-table__button" >
                            {{__('packages.OFF20')}}
                            </a>
                            <div class="row form-group my-4">
                                <div class="col-md-12 ">
                                    <a href="/product/folder" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">{{__('packages.ViewDetails')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/letterhead.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h3 class="py-3"> {{__('packages.letterhead')}} </h3>
                            <a target="_blank" class="pricing-table__button" >
                            {{__('packages.OFF20')}}
                            </a>
                            <div class="row form-group my-4">
                                <div class="col-md-12 ">
                                    <a href="/product/letterhead" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">{{__('packages.ViewDetails')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/letters.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h3 class="py-3"> {{__('packages.letters')}} </h3>
                            <a target="_blank" class="pricing-table__button" >
                            {{__('packages.OFF20')}}
                            </a>
                            <div class="row form-group my-4">
                                <div class="col-md-12 ">
                                    <a href="/product/letters" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">{{__('packages.ViewDetails')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/card.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h3 class="py-3"> {{__('packages.card')}} </h3>
                            <a target="_blank" class="pricing-table__button" >
                            {{__('packages.OFF20')}}
                            </a>
                            <div class="row form-group my-4">
                                <div class="col-md-12 ">
                                    <a href="/product/card" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">{{__('packages.ViewDetails')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/bills.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h3 class="py-3"> {{__('packages.bills')}} </h3>
                            <a target="_blank" class="pricing-table__button" >
                            {{__('packages.OFF20')}}
                            </a>
                            <div class="row form-group my-4">
                                <div class="col-md-12 ">
                                    <a href="/product/bills" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">{{__('packages.ViewDetails')}}</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/flyers.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h3 class="py-3"> {{__('packages.flyers')}} </h3>
                            <a target="_blank" class="pricing-table__button" >
                            {{__('packages.OFF20')}}
                            </a>
                            <div class="row form-group my-4">
                                <div class="col-md-12 ">
                                    <a href="/product/flyers" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">{{__('packages.ViewDetails')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/brochures.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h3 class="py-3"> {{__('packages.brochures')}} </h3>
                            <a target="_blank" class="pricing-table__button" >
                            {{__('packages.OFF20')}}
                            </a>
                            <div class="row form-group my-4">
                                <div class="col-md-12 ">
                                    <a href="/product/brochures" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">{{__('packages.ViewDetails')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/menu.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h3 class="py-3"> {{__('packages.menu')}} </h3>
                            <a target="_blank" class="pricing-table__button" >
                            {{__('packages.OFF20')}}
                            </a>
                            <div class="row form-group my-4">
                                <div class="col-md-12 ">
                                    <a href="/product/menu" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">{{__('packages.ViewDetails')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/sticker.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h3 class="py-3"> {{__('packages.sticker')}} </h3>
                            <a target="_blank" class="pricing-table__button" >
                            {{__('packages.OFF20')}}
                            </a>
                            <div class="row form-group my-4">
                                <div class="col-md-12 ">
                                    <a href="/product/sticker" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">{{__('packages.ViewDetails')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pricing-table">
                        <div class="pricing-table1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <img src="{{ asset('images/rollup.jpg') }}" alt="" style="width: 100%; border-radius: 10px 10px 0 0;">
                            <h3 class="py-3"> {{__('packages.rollup')}} </h3>
                            <a target="_blank" class="pricing-table__button" >
                            {{__('packages.OFF20')}}
                            </a>
                            <div class="row form-group my-4">
                                <div class="col-md-12 ">
                                    <a href="/product/rollup" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">{{__('packages.ViewDetails')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                
            </div>
            <!-- End Pricing -->

        </div>

    </div>



@endif





 
 <!--==============================  Footer Section    ==============================--> 

 @include('include.footer2')


@endsection



@section('script')
<script>

    $('.web_request_form').submit(function(e)
    {
        e.preventDefault();
        $('.submit').prop('disabled', true);
        $('.error').text('');
        var lang 		= $(this).attr('data-lang');


        if (lang == 'en')
            {
                var head1 	= 'Thank You';
                var title1 	= 'Your Request Has Been Sent Successfully, We will contact you ASAP. ';
                var head2 	= 'Oops...';
                var title2 	= 'Something went wrong, please try again later.';
            }
        else
            {
                var head1 = 'شكرآ لك';
                var title1 = 'لقد تم ارسال طلبك بنجاح، سيتم التواصل معك في اقرب وقت';
                var head2 	= 'عفوآ';
                var title2 	= 'هناك شئ خاطئ، يرجى المحاولة فى وقت لاحق.';
            }

        $.ajax({
            url: 		"{{route('web.request')}}",
            method: 	'POST',
            dataType: 	'json',
            data:		$(this).serialize()	,
            success : function(data)
                {
                    $('.submit').prop('disabled', false);
                    
                    if (data['status'] == 'true')
                    {
                        Swal.fire(
                                head1,
                                title1,
                                'success'
                                )
                        $('.modal').modal('hide');
                        $('.field').text('');
                        $('.field').val('');

                        
                    }
                    else if (data['status'] == 'false')
                    {
                        Swal.fire(
                                head2,
                                title2,
                                'error'
                                )
                    }
                },
                error : function(reject)
                {
                    $('.submit').prop('disabled', false);

                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, val)
                    {
                       $('#'+ key + '_error').text(val[0]);

                        Swal.fire(
                                head2,
                                val[0],
                                'error'
                                )
                    });
                }
            
            
        });

    });

    $('.social_request_form').submit(function(e)
    {
        e.preventDefault();
        $('.submit').prop('disabled', true);
        $('.error').text('');
        var lang 		= $(this).attr('data-lang');


        if (lang == 'en')
            {
                var head1 	= 'Thank You';
                var title1 	= 'Your Request Has Been Sent Successfully, We will contact you ASAP. ';
                var head2 	= 'Oops...';
                var title2 	= 'Something went wrong, please try again later.';
            }
        else
            {
                var head1 = 'شكرآ لك';
                var title1 = 'لقد تم ارسال طلبك بنجاح، سيتم التواصل معك في اقرب وقت';
                var head2 	= 'عفوآ';
                var title2 	= 'هناك شئ خاطئ، يرجى المحاولة فى وقت لاحق.';
            }

        $.ajax({
            url: 		"{{route('social.request')}}",
            method: 	'POST',
            dataType: 	'json',
            data:		$(this).serialize()	,
            success : function(data)
                {
                    $('.submit').prop('disabled', false);
                    
                    if (data['status'] == 'true')
                    {
                        Swal.fire(
                                head1,
                                title1,
                                'success'
                                )
                        $('.modal').modal('hide');
                        $('.field').text('');
                        $('.field').val('');

                        
                    }
                    else if (data['status'] == 'false')
                    {
                        Swal.fire(
                                head2,
                                title2,
                                'error'
                                )
                    }
                },
                error : function(reject)
                {
                    $('.submit').prop('disabled', false);

                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, val)
                    {
                    $('#'+ key + '_error').text(val[0]);

                        Swal.fire(
                                head2,
                                val[0],
                                'error'
                                )
                    });
                }
            
            
        });

    });


    $(".moderating_box").slideUp();

    $("input[name=plan]").on("change",function() 
    {
        if ($(this).val() == 'Paid ADS') 
            {
                $('.moderating_box').slideUp();
                $('.paid_posts_box').slideDown();
            }
        else if ($(this).val() == 'Moderating') 
            {
                $('.paid_posts_box').slideUp();
                $('.moderating_box').slideDown();
            }

        else  
            {
                $('.moderating_box').slideDown();
                $('.paid_posts_box').slideDown();
            }
    });


</script>

@endsection