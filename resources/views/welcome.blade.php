
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


 <!--==============================  Navbar Section    ==============================--> 

 @include('include.navbar')

 <!--==============================  Header Section    ==============================--> 

<div dir="{{ $dir }}" class="site-blocks-cover overlay bg-light" id="home-section">

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-6 text-center m-auto">
          <div class="row justify-content-center">
            <div class="col-12">
              <h3 class="text-white" data-aos="fade-up" data-aos-delay="500">
                {{__('core.s1-title')}} 
              </h3>
              <p class="lead text-white" data-aos="fade-up" data-aos-delay="600">
                {{__('core.s1-desc')}} 
              </p>
              <p data-aos="fade-right" data-aos-delay="700"><a href="#services-section" class="btn btn-primary">
                {{__('core.s1-btn')}} 
              </a></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 text-center m-auto order-mob-1" data-aos="fade-left" data-aos-delay="800" >
            <img class="lazyload" data-src="{{ asset('images/header.png') }}" style="width: 120%;">
        </div>
          
      </div>
    </div>

</div>  
    
 <!--==============================  About Section    ==============================--> 

<div dir="{{ $dir }}" class="site-section" id="about-section" style="background: #f8f9fa;">
    <div class="container">
      <div class="row ">
        <div class="col-12 mb-4 position-relative">
          <h2 class="section-title text-center">
            {{__('core.s2-title')}}
          </h2>
        </div>

        <div class="{{ $text }} col-lg-7" data-aos="fade-down" data-aos-delay="">
          <h5  style="color: #7f4cd5;font-weight: bolder;font-family: Raleway, sans-serif;">
            {{__('core.s2-p1-title-1')}} 
          </h5>

          <h2> {{__('core.s2-p1-title-2')}} </h2>

          <p>  {{__('core.s2-p1-desc-1')}} </p>

          <p> {{__('core.s2-p1-desc-2')}} </p>

          <p> {{__('core.s2-p1-desc-3')}}  </p>

        </div>
        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="">
          <img class="img-fluid lazyload" data-src="{{ asset('images/graph.png') }}" alt="Image" >
        </div>

        <div class="col-12 text-center my-4">

          <h5  style="color: #7f4cd5;font-weight: bolder;font-family: Raleway, sans-serif;">
          {{__('core.s2-p2-title-1')}} 
          </h5>

          <h6 class="text-dark">
            {{__('core.s2-p2-title-2')}}  
          </h6>

        </div>

        <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-down" data-aos-delay="">
          <div class="service d-flex h-100 text-center">
            <div class="service-about">
              <img class="img-fluid lazyload" data-src="{{ asset('images/ec.png') }}" style="height: 200px;">

              <h3> {{__('core.s2-p2-card-1-title')}} </h3>

              <p> {{__('core.s2-p2-card-1-desc')}}  </p>

            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4 " data-aos="fade-up" data-aos-delay="">
          <div class="service d-flex h-100 text-center">
            <div class="service-about">
              <img class="img-fluid lazyload" data-src="{{ asset('images/features.png') }}"  style="height: 200px;">
            
              <h3> {{__('core.s2-p2-card-2-title')}}  </h3>

              <p> {{__('core.s2-p2-card-2-desc')}}  </p>

            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-down" data-aos-delay="">
          <div class="service d-flex h-100 text-center">
            <div class="service-about">
              <img class="img-fluid lazyload" data-src="{{ asset('images/website.png') }}"  style="height: 200px;">
              <h3>{{__('core.s2-p2-card-3-title')}} </h3>
              <p>{{__('core.s2-p2-card-3-desc')}} </p>
            </div>
          </div>
        </div>
          
      <div class="col-md-12 text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
          <h5 style="color: #7f4cd5;font-weight: bolder;font-family: Raleway, sans-serif;">
            {{__('core.s2-p3-title')}} 
          </h5>
          <p class="col-md-8 m-auto">
            {{__('core.s2-p3-desc')}} 
          </p>
      </div>
        
        
      </div>
    </div>
</div>

 <!--==============================  Services Section    ==============================--> 

<div  dir="{{ $dir }}" class="site-section" id="services-section">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-12 mb-5 position-relative text-center">
          <h2 class="section-title text-center mb-3">
            {{__('core.s3-title-1')}} 
          </h2>
          <h4 style="color: #7f4cd5;font-weight: bolder;font-family: Raleway, sans-serif;">
            {{__('core.s3-title-2')}}   
          </h4>
          <h6 class="text-dark" >
            {{__('core.s3-desc')}} 
          </h6>
        </div>

      </div>

      <div class="row" style="background: #f8f9fa;">
      
        <div class="col-md-4 p-0">
          <video class="lazyload" data-src="{{ asset('images/video1.mp4') }}" src="{{ asset('images/src-load.mp4') }}" autoplay="" loop="" muted="" playsinline="" style="width: 100%;margin-bottom: -8px;"></video>
        </div>

        <div class="col-md-8 m-auto {{ $text }}" >
          <div class="container my-3">
            <h5> {{__('core.s3-srv-1-title')}} </h5>
            <h6>{{__('core.s3-srv-1-p-1')}} </h6>
            <h6>{{__('core.s3-srv-1-p-2')}} </h6>
            <h6>{{__('core.s3-srv-1-p-3')}} </h6>
        </div>
        </div>

      </div>

      <div class="row" style="background: #25adfb;">
      
        <div class="col-md-8 m-auto order-2-mob {{ $text }}" >
          <div class="container my-3 text-white">
            <h5 class="text-white"> {{__('core.s3-srv-2-title')}} </h5>
            <h6>{{__('core.s3-srv-2-p-1')}} </h6>
            <h6>{{__('core.s3-srv-2-p-2')}} </h6>
            <h6>{{__('core.s3-srv-2-p-3')}} </h6>
          </div>
        </div>

        <div class="col-md-4 p-0">
          <img class="img-fluid lazyload" data-src="{{ asset('images/graphic.gif') }}" src="{{ asset('images/src-load.gif') }}" width="100%"  alt="">
        </div>

      </div>

      <div class="row" style="background: #f8f9fa;">

        <div class="col-md-4 p-0">
          <img class="img-fluid lazyload" data-src="{{ asset('images/web-design.gif') }}" src="{{ asset('images/src-load.gif') }}" width="100%"  alt="">
        </div>

        <div class="col-md-8 m-auto {{ $text }}" >
          <div class="container my-3">
            <h5>{{__('core.s3-srv-3-title')}} </h5>
            <h6>{{__('core.s3-srv-3-p-1')}} </h6>
        </div>
        </div>

      </div>

      <div class="row" style="background: #5b588c;">

        <div class="col-md-8 m-auto order-2-mob {{ $text }}" >
          <div class="container my-3 text-white">
            <h5 class="text-white"> {{__('core.s3-srv-4-title')}} </h5>
            <h6> {{__('core.s3-srv-4-p-1')}} </h6>
            
        </div>
        </div>
      
        <div class="col-md-4 p-0">
          <img class="img-fluid lazyload" src="{{ asset('images/src-load.gif') }}" data-src="{{ asset('images/seo.gif') }}" width="100%"  alt="">
        </div>

      </div>

      <div class="row" style="background: #f8f9fa;">
      
        <div class="col-md-4 p-0">
          <video class="lazyload" src="{{ asset('images/src-load.mp4') }}" data-src="{{ asset('images/video6.mp4') }}" autoplay="" loop="" muted="" playsinline="" style="width: 100%;margin-bottom: -8px;"></video>
        </div>

        <div class="col-md-8 m-auto {{ $text }}" >
          <div class="container my-3">
            <h5> {{__('core.s3-srv-5-title')}} </h5>
            <h6> {{__('core.s3-srv-5-p-1')}} </h6>
            <h6> {{__('core.s3-srv-5-p-2')}} </h6>
        </div>
        </div>

      </div>

      <div class="row" style="background: #25adfb;">
      
        <div class="col-md-8 m-auto order-2-mob {{ $text }}" >
          <div class="container my-3 text-white">
            <h5 class="text-white">
                {{__('core.s3-srv-6-title')}} 
            </h5>
            <h6>{{__('core.s3-srv-6-p-1')}} </h6>
            <h6>{{__('core.s3-srv-6-p-2')}} </h6>
            <h6>{{__('core.s3-srv-6-p-3')}} </h6>
        </div>
        </div>

        <div class="col-md-4 p-0">
          <img class="img-fluid lazyload" src="{{ asset('images/src-load.gif') }}" data-src="{{ asset('images/social.gif') }}" width="100%"  alt="">
        </div>

      </div>

      <div class="row" style="background: #f8f9fa;">

        <div class="col-md-4 p-0">
          <img class="img-fluid lazyload" src="{{ asset('images/src-load.gif') }}" data-src="{{ asset('images/erp.gif') }}" width="100%"  alt="">
        </div>
      
        <div class="col-md-8 m-auto {{ $text }}" >
          <div class="container my-3">
            <h5>{{__('core.s3-srv-7-title')}} </h5>
            <h6>{{__('core.s3-srv-7-p-1')}} </h6>
        </div>
        </div>

      </div>

      <div class="row" style="background: #5b588c;">
      
        <div class="col-md-8 m-auto order-2-mob {{ $text }}"  >
          <div class="container my-3 text-white">
            <h5 class="text-white"> {{__('core.s3-srv-8-title')}} </h5>
            <h6> {{__('core.s3-srv-8-p-1')}} </h6>
            <h6> {{__('core.s3-srv-8-p-2')}} </h6>
            <h6> {{__('core.s3-srv-8-p-3')}} </h6>
        </div>
        </div>

        <div class="col-md-4 p-0">
          <img class="img-fluid lazyload" src="{{ asset('images/src-load.gif') }}" data-src="{{ asset('images/data.gif') }}" width="100%"  alt="">
        </div>

      </div>

      <div class="row">

        <div class="col-md-4 p-0" @if (LaravelLocalization::getCurrentLocale() == 'ar') style="order: 2;"  @endif >
          <img class="img-fluid lazyload" src="{{ asset('images/src-load.gif') }}" data-src="{{ asset('images/imagine.gif') }}" width="100%"  alt="">
        </div>
      
        <div class="col-md-6 m-auto" >
          <div class="container my-3">
            <h2  class="text-center"> {{__('core.our-work-quot')}} </h2>
        </div>
        </div>

      </div>

    </div>
</div>

 <!--==============================  FAQ Section    ==============================--> 

<section dir="{{ $dir }}"  class="site-section" id="faq-section" style="background: #f8f9fa;">
    <div class="container">
      <div class="row">
        <div class="col-12 mb-5 text-center position-relative">
          <h2 class="section-title text-center mb-4">
            {{__('core.s5-title-1')}}
          </h2>
          <h4 style="color: #7f4cd5;font-weight: bolder;font-family: Raleway, sans-serif;">
            {{__('core.s5-title-2')}}
          </h4>
          <h6 class="text-dark">
            {{__('core.s5-desc')}}
          </h6>
        </div>
      </div>


    <div class="accordion toggle fancy clean accordion-transparent row {{ $text }}">

        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="ac-item bg-white">
              <h5 class="ac-title">{{__('core.s5-q1-ques')}}</h5>
              <div class="ac-content" style="display: none;">{{__('core.s5-q1-ans')}}</div>
          </div>
        </div>

        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="ac-item bg-white">
              <h5 class="ac-title">{{__('core.s5-q2-ques')}}</h5>
              <div class="ac-content" style="display: none;">{{__('core.s5-q2-ans')}}</div>
          </div>
        </div>

        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
            <div class="ac-item bg-white">
              <h5 class="ac-title">{{__('core.s5-q3-ques')}}</h5>
              <div class="ac-content" style="display: none;">{{__('core.s5-q3-ans')}}</div>
          </div>
        </div>

        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
            <div class="ac-item bg-white">
              <h5 class="ac-title">{{__('core.s5-q4-ques')}}</h5>
              <div class="ac-content" style="display: none;">{{__('core.s5-q4-ans')}}</div>
          </div>
        </div>

        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="700">
            <div class="ac-item bg-white">
              <h5 class="ac-title">{{__('core.s5-q5-ques')}}</h5>
              <div class="ac-content" style="display: none;">{{__('core.s5-q5-ans')}}</div>
          </div>
        </div>

        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
            <div class="ac-item bg-white">
              <h5 class="ac-title">{{__('core.s5-q6-ques')}}</h5>
              <div class="ac-content" style="display: none;">{{__('core.s5-q6-ans')}}</div>
          </div>
        </div>

    </div>

    </div>
</section>

 <!--==============================  Contact Section    ==============================--> 

 <section dir="{{ $dir }}"  class="site-section" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-12 mb-5 text-center position-relative">
          <h2 class="section-title text-center mb-4">
            {{__('core.s6-title-1')}}
          </h2>
          <h4 style="color: #7f4cd5;font-weight: bolder;font-family: Raleway, sans-serif;">
            {{__('core.s6-title-2')}} 
          </h4>
          <h6 class="text-dark" >
            {{__('core.s6-desc')}}
         </h6>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-7 mb-4">

          <form class="p-4 bg-white shadow msg_form" data-lang="en">
            
            <h2 class="h4 text-black mb-4 {{ $text }}" >
                {{__('core.s6-cnt-frm-title')}}
            </h2> 

            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0 {{ $text }}" >
                <label class="text-black" for="fname" >
                    {{__('core.s6-cnt-frm-fname')}}
                </label>
                <input type="text" name="fname" id="fname" class="form-control" required>
              </div>
              <div class="col-md-6 {{ $text }}" >
                <label class="text-black" for="lname">
                    {{__('core.s6-cnt-frm-lname')}}
                </label>
                <input type="text" name="lname" id="lname" class="form-control" required>
              </div>
            </div>

            <div class="row form-group">
              
              <div class="col-md-6 {{ $text }}" >
                <label class="text-black" for="email">
                    {{__('core.s6-cnt-frm-email')}}
                </label> 
                <input type="email" name="email" id="email" class="form-control" required>
              </div>

              <div class="col-md-6 {{ $text }}" >
                <label class="text-black" for="phone">
                    {{__('core.s6-cnt-frm-phone')}}
                </label>
                <input type="number" name="phone" id="phone" class="form-control" required>
              </div>

            </div>

            <div class="row form-group">
              
              <div class="col-md-12 {{ $text }}" >
                <label class="text-black" for="subject">
                    {{__('core.s6-cnt-frm-subject')}}
                </label> 
                <input type="subject" name="subject" id="subject" class="form-control" required>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12 {{ $text }}" >
                <label class="text-black" for="message">
                    {{__('core.s6-cnt-frm-msg')}}
                </label> 
                <textarea name="msg" id="message" cols="30" rows="5" class="form-control" placeholder="{{__('core.s6-cnt-frm-msg-plc')}}
               " required></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12 {{ $text }}" >
                <button type="submit" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">
                    {{__('core.s6-cnt-frm-btn')}} 
                </button>
              </div>
            </div>


          </form>
        </div>

        <div class="col-12 text-center">
          <h4 class="text-center"><i class="fa fa-blind fa-fw"></i>
            {{__('core.s6-findus')}}
          </h4>
              <a href="https://www.facebook.com/armasoftware/" target="_blank" class="social-circle bg-dark text-white m-2"><span class="fab fa-facebook"></span></a>
              <a href="https://twitter.com/ArmaSoftware/" target="_blank" class="social-circle bg-dark text-white m-2"><span class="fab fa-twitter"></span></a>
              <a href="https://www.instagram.com/armasoftware/" class="social-circle bg-dark text-white m-2"><span class="fab fa-instagram"></span></a>
              <a href="https://www.linkedin.com/company/armasoftware/" class="social-circle bg-dark text-white m-2"><span class="fab fa-linkedin"></span></a>
          </div>

          <div class="col-12 text-center">
              <h6>
                  <a class="social-circle-outline m-1">
                      <span class="fa fa-envelope"></span>
                  </a>
                  <small> info@armasoftware.com</small>
              </h6>
          </div>
      
      </div>

    </div>
 </section>

 <!--==============================  Footer Section    ==============================--> 

 @include('include.footer')




  @endsection