

        <!-- Start Steps -->

    <section dir="ltr" class="site-section" style="background: #f8f9fa;">
        <div class="container">
        <div class="row">
            <div class="col-12 mb-5 text-center position-relative">
            <h2 class="section-title text-center mb-4">{{__('products.STEPS')}}</h2>
            <h4 style="color: #7f4cd5;font-weight: bolder;font-family: Raleway, sans-serif;">{{__('products.steps-desc')}}</h4>
            
            </div>
        </div>

        <div class="row" dir="{{$dir}}">
		  
            <div class="col-md-3">
              <div class="service-list">
                <div class="ico hvr-float-shadow">
                    <img src="{{ asset('images/choose.png') }}" width="75%" alt="">
                </div>
                <h5>{{__('products.details')}}</h5>
                <p>{{__('products.details-desc')}}</p>
              </div>
              <i class="fa fa-arrow-{{$arrow}} d-none-mob"></i>
            </div>
      
          <div class="col-md-3">
              <div class="service-list">
                <div class="ico hvr-float-shadow">
                    <img src="{{ asset('images/calculate.png') }}" width="75%" alt="">
                </div>
                <h5>{{__('products.cost')}}</h5>
                <p>{{__('products.cost-desc')}}</p>
              </div>
              <i class="fa fa-arrow-{{$arrow}} d-none-mob"></i>
            </div>
      
            <div class="col-md-3">
              <div class="service-list">
                <div class="ico hvr-float-shadow">
                    <img src="{{ asset('images/design.png') }}" width="75%" alt="">
                </div>
                <h5>{{__('products.design')}}</h5>
                <p>{{__('products.design-desc')}}</p>
              </div>
                <i class="fa fa-arrow-{{$arrow}} d-none-mob"></i>
            </div>
      
            <div class="col-md-3">
              <div class="service-list">
                <div class="ico hvr-float-shadow">
                    <img src="{{ asset('images/money.png') }}" width="75%" alt="">
                </div>
                <h5>{{__('products.pay')}}</h5>
                <p>{{__('products.pay-desc')}}</p>
              </div>
            </div>
      
          </div>

        </div>
    </section>


        <!-- End Steps -->