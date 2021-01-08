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


<link href="{{ asset('css/checkout.css') }}" rel="stylesheet">

 <!--==============================  Navbar Section    ==============================--> 
   
 @include('include.navbar2')

<div class="py-5" style="height: 15vh; background:linear-gradient(-45deg, rgba(147,26,222,0.83) 0%, rgba(28,206,234,0.82) 100%);">


</div>

<div class="container my-5">


        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="step first">
                    <h3>1. User Info </h3>
                <div class="tab-content checkout">

                    <div >
                        <div class="row no-gutters">
                            <div class="col-12 form-group pr-1">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Telephone">
                        </div>

                        <hr>
                    </div>
                    <!-- /Form -->
                </div>
                </div>
                <!-- /step -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="step middle payments">
                    <h3>2. Payment</h3>
                        <ul>
                            <li>
                                <label class="container_radio">Credit Card
                                    <input type="radio" name="payment" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li>
                                <label class="container_radio">Vodafone Cash
                                    <input type="radio" name="payment">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li>
                                <label class="container_radio">Fawry
                                    <input type="radio" name="payment">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li>
                                <label class="container_radio">Bank Transfer
                                    <input type="radio" name="payment">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>
                    
                </div>
                <!-- /step -->
                
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="step last">
                    <h3>3. Order Summary</h3>
                <div class="box_general summary">
                    <ul>
                        <li class="clearfix"><em>1x Armor Air X Fear</em>  <span>$145.00</span></li>
                        <li class="clearfix"><em>2x Armor Air Zoom Alpha</em> <span>$115.00</span></li>
                    </ul>
                    <ul>
                        <li class="clearfix"><em><strong>Subtotal</strong></em>  <span>$450.00</span></li>
                        <li class="clearfix"><em><strong>Tax</strong></em> <span>$0</span></li>
                        
                    </ul>
                    <div class="total clearfix">TOTAL <span>$450.00</span></div>
                    <div class="form-group">
                        </div>
                    
                    <a href="confirm.html" class="btn btn-info btn-block">Confirm and Pay</a>
                </div>
                <!-- /box_general -->
                </div>
                <!-- /step -->
            </div>
        </div>

</div>



 
 <!--==============================  Footer Section    ==============================--> 

 @include('include.footer2')

@endsection