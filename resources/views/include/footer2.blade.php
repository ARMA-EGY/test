

 <footer class="site-section footer py-0">

    <div class="container" style="background: url({{ asset('images/mic-drop.svg') }}) no-repeat 19% 0;background-size: 176px;padding-top: 80px;padding-bottom: 80px;">
        <div class="text-center text-white pt-5">
        <div>
            <h2 class="text-white" dir="{{ $dir }}">
                {{__('core.s7-desc')}}
            </h2>
        </div> 

        <div class="my-4">
            <form class="subscribe_form" data-lang="en">
                <div class="col-md-6 subscribe_frame">
                    <input type="email" name="subscribe_email" placeholder="{{__('core.s7-plc')}}" autocomplete="off" required="required" class="subscribe_input" @if (LaravelLocalization::getCurrentLocale() == 'ar') style="text-align:right;margin-left: -2rem;order:2;" @else style="margin-right: -2rem;" @endif >
                    <button type="submit" class="subscribe_btn submit">
                        {{__('core.s7-btn')}}
                    </button>
                </div>
            </form>
        </div>

        </div>
    </div>

    <div class="container">
        <div class="row mb-5 {{ $text }}" dir="{{ $dir }}">
        <div class="col-md-4">
            <img  class="lazyload mb-4" data-src="{{ asset('images/arma_logo.png') }}" width="110">
            <p class="{{ $text }}" ><span class="d-inline-block d-md-block"> {{__('core.s1-desc')}} </p>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="row">
            <div class="col-md-10">
                <h3 class="footer-title text-center">
                    {{__('core.s7-mainmenu')}}</h3>
                </div>
            <div class="col-6">
                <ul class="list-unstyled">
                <li><a href="/#home-section" >{{__('core.HOME')}}</a></li>
                <li><a href="/#about-section">{{__('core.ABOUT')}}</a></li>
                <li><a href="/#services-section">{{__('core.SERVICES')}}</a></li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled">
                <li><a href="/#faq-section">{{__('core.FAQ')}}</a></li>
                <li><a href="/#contact-section">{{__('core.CONTACT')}}</a></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <h3 class="footer-title">
                {{__('core.s7-followus')}}
            </h3>
            <a href="https://www.facebook.com/armasoftware/" target="_blank" class="social-circle text-dark m-1"><span class="fab fa-facebook"></span></a>
            <a href="https://twitter.com/ArmaSoftware/" target="_blank" class="social-circle text-dark m-1"><span class="fab fa-twitter"></span></a>
            <a href="https://www.instagram.com/armasoftware/" target="_blank" class="social-circle text-dark m-1"><span class="fab fa-instagram"></span></a>
            <a href="https://www.linkedin.com/company/armasoftware/" target="_blank" class="social-circle text-dark m-1"><span class="fab fa-linkedin"></span></a>
        </div>
        </div>

        <div class="row">
        <div class="col-12 text-center">
            <p>
                Copyright &copy;
                <script>
                document.write(new Date().getFullYear());
                </script> All rights reserved | <a href="#"><img  class="lazyload pb-1" data-src="{{ asset('images/arma_logo2.png') }}" width="70">
                </a>
            </p>  
        </div>
        </div>
    </div>
</footer>