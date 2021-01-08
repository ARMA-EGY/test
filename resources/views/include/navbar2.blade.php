

 <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center justify-content-center">

        <div class="col-3">
            <a href="/">
                <img  class="lazyload" data-src="{{ asset('images/arma_logo.png') }}" width="110">
            </a>
        </div>

        <div class="col-9 text-right" >

         

        <nav class="site-navigation position-relative text-right d-inline-block" role="navigation" data-aos="fade-down" data-aos-delay="900" dir="{{ $dir }}" >
            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li>
                  <a href="/#home-section" class="nav-link">
                  {{__('core.HOME')}}
                  </a>
              </li>
              <li>
                  <a href="/#about-section" class="nav-link">
                      {{__('core.ABOUT')}}
                  </a>
              </li>
              <li>
                  <a href="/#services-section" class="nav-link">
                      {{__('core.SERVICES')}} 
                  </a>
              </li>
              <li>

                  <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{__('core.OUR-WORK')}}  </a>

                      <div class="dropdown-menu {{ $text }}" aria-labelledby="dropdownMenuLink" style="">


                          @foreach ($categories as $category)

                              <a class="dropdown-item" href="/category/{{$category->url}}">{{$category->name}}</a>
                              
                          @endforeach

                      </div>
                  </div>

              </li>
              <li>

                  <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{__('core.PACKAGES')}}  </a>

                      <div class="dropdown-menu {{ $text }}" aria-labelledby="dropdownMenuLink" style="">

                        <a class="dropdown-item" href="/packages/website">{{__('core.PACKAGE-1')}}</a>
                        {{-- <a class="dropdown-item" href="/packages/e-commerce">{{__('core.PACKAGE-2')}}</a> --}}
                        <a class="dropdown-item" href="/packages/social-media-management">{{__('core.PACKAGE-3')}}</a>
                        <a class="dropdown-item" href="/packages/designs">{{__('core.PACKAGE-4')}}</a>
                        <a class="dropdown-item" href="/packages/printing">{{__('core.PACKAGE-5')}}</a>

                      </div>
                  </div>

              </li>
              <li>
                  <a href="/#faq-section" class="nav-link">
                      {{__('core.FAQ')}} 
                  </a>
              </li>
              <li>
                  <a href="/#contact-section" class="nav-link">
                      {{__('core.CONTACT')}} 
                  </a>
              </li>
            </ul>
          </nav>

          <div class="d-inline-block mx-2">
              @if (LaravelLocalization::getCurrentLocale() == 'ar')
                      <a rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                          <img class="pb-1" src="{{ asset('images/english.png') }}" alt="" width="20">
                      </a> 
              @elseif (LaravelLocalization::getCurrentLocale() == 'en')  
                      <a rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                          <img class="pb-1" src="{{ asset('images/arabic.png') }}" alt="" width="20">
                      </a>
              @endif
          </div>

          <div class="dropdown d-inline-block mx-2">
            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle text-white p-1" style="font-size: 18px;"></i> </a>

                @auth

            <div class="dropdown-menu dropdown-menu2 p-2 dropdown-menu-right bg-white {{ $text }}" dir="{{$dir}}">
                        <div class="dropdown-header noti-title">
                            <span class="text-overflow m-0">{{__('core.welcome')}} </span>
                        </div>
                        <a href="/profile" class="dropdown-item login-item">
                            <i class="fa fa-user"></i>
                            <span>{{__('core.my-profile')}} </span>
                        </a>
                        <a href="{{ route('logout') }}" class="dropdown-item login-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>{{__('core.logout')}} </span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                @else

                        <div class="dropdown-menu dropdown-menu2 p-2 dropdown-menu-right bg-white {{ $text }}" aria-labelledby="dropdownMenuLink" dir="{{$dir}}">
                            <a class="dropdown-item btn-facebook m-2" href="/login/facebook"><i class="fab fa-facebook-square mx-1"></i> {{__('core.login-facebook')}} </a>
                            <a class="dropdown-item btn-google m-2" href="/login/google"><i class="fab fa-google mx-1"></i> {{__('core.login-google')}} </a>
                        </div>

                        <div id="login_form" style="display: none;">
                            <div dir="{{$dir}}">
                                <div class="row justify-content-center">
                                    <a class="btn-facebook m-2 p-2" href="/login/facebook"><i class="fab fa-facebook-square mx-1"></i> {{__('core.login-facebook')}}</a>
                                    <a class="btn-google m-2 p-2" href="/login/google"><i class="fab fa-google mx-1"></i> {{__('core.login-google')}}</a>
                                </div>
                                <div style="margin-top: 12px;">
                                    <span class="" style="-webkit-font-smoothing: antialiased; font-size: 11px; font-weight: normal; text-align: center; transition: opacity 0.2s linear 0s; color: rgb(118, 118, 118); width: 224px;"><span>
                                        {{__('core.continue-login')}}
                                        <a target="_blank" href="/terms">{{__('core.terms-conditions')}}</a>, 
                                        <a target="_blank" href="/privacy-policy">{{__('core.privacy-policy')}}</a>. 
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                @endauth

              
          </div>

          <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="fa fa-bars text-white"></span></a>

        </div>

      
      </div>
    </div>
    
 </header>