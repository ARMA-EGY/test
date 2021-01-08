@if (LaravelLocalization::getCurrentLocale() == 'ar')
    @php
    $dir = 'rtl';
    $text = 'text-right';
    $arrow = 'left'
    @endphp
@elseif (LaravelLocalization::getCurrentLocale() == 'en')  
    @php
    $dir = 'ltr';
    $text = 'text-left';
    $arrow = 'right'
    @endphp
@endif

@extends('layouts.app') 



@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.0/css/hover-min.css" rel="stylesheet">


<style>

    .product-desc
    {
        font-family: cairo-light;
        font-size: 16pt;
        list-style:none;
    }

    .product-img
    {
        box-shadow: 0 0 10px 1px rgb(0 0 0 / 50%);
    }

    .form-control
    {
        height: 39px;
    }

    .service-list {
        width: 100%;
        float: left;
        height: auto;
        margin: 0 0 50px;
        text-align: center;
    }

    .ico {
        width: 120px;
        height: 120px;
        line-height: 120px;
        margin-bottom: 15px;
        text-align: center;
        background: #fff;
        border-radius: 50%;
        display: inline-block;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        font-size: 28px;
        -webkit-transition: all 0.4s ease-in-out;
        -moz-transition: all 0.4s ease-in-out;
        -ms-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
    }

    .fa-arrow-right {
        position: absolute;
        top: 60px;
        right: -5px;
    }


    .fa-arrow-left {
        position: absolute;
        top: 60px;
        left: -5px;
    }

    .deep-sky-blue
    {
        color: deepskyblue;
    }

    @media (max-width: 575px)
    {
        .product-desc
        {
            font-size: 12pt;
        }

        .d-none-mob
        {
            display: none;
        }

        .table td, .table th 
        {
            font-size: 14px;
        }
    }
</style>

 <!--==============================  Navbar Section    ==============================--> 
   
 @include('include.navbar2')

<div class="py-5" style="height: 15vh; background:linear-gradient(-45deg, rgba(147,26,222,0.83) 0%, rgba(28,206,234,0.82) 100%);">


</div>

 <!--==============================  Page Section    ==============================--> 




<h3 class="text-center section-title py-5">{{__('packages.'.$productName)}}</h3>

    <div class="container">
        <div class="row mb-5" dir="{{$dir}}">

        <!-- Start Product -->
            <div class="container-fluid my-4" >

                <div class="row">

                        <div class="col-md-6 m-auto">
                            <a data-fancybox="gallery" href="{{ asset('images/'.$productName.'.jpg') }}"><img  class="img-fluid rounded product-img" src="{{ asset('images/'.$productName.'.jpg') }}"></a> 
                        </div>

                </div>
                
            </div>
        <!-- End Product -->

        </div>

    </div>

    
    @include('include.steps') 



    <div class="container my-5">

        <div class="row">
            <div class="col-12 mb-5 text-center position-relative">
              <h2 class="section-title text-center mb-4">{{__('products.PRICING')}}</h2>
              <h4 style="color: #7f4cd5;font-weight: bolder;font-family: Raleway, sans-serif;">{{__('products.calculate-cost')}}</h4>
              
            </div>
        </div>

        <div class="row" dir="{{ $dir }}">
            <div class="col-lg-12 mb-4">
            
            
            @if ($productName == 'books')
    
                <form class="p-4 bg-white shadow product_form2 {{ $text }}" data-lang="{{LaravelLocalization::getCurrentLocale()}}" data-msg="{{__('products.books-price')}}">
                    @csrf
                    
                    <div class="row form-group">

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="size">
                                {{__('products.size')}}
                            </label>
                            <select class="form-control" id="size" name="size">
                                <option value="A4">A4 (21 x 29.7 )</option>
                                <option value="A5">A5 (14.8 x 21 )</option>
                            </select>
                            <small id="size_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="size">
                                {{__('products.paper-weight')}}
                            </label>
                            <select class="form-control" id="size" name="size">
                                <option value="70">70 {{__('products.gm')}}</option>
                                <option value="80">80 {{__('products.gm')}}</option>
                                <option value="80">150 {{__('products.gm')}} {{__('products.crochet')}}</option>
                            </select>
                            <small id="size_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="sheets">
                                {{__('products.no.sheets')}}
                            </label>
                            <select class="form-control" id="sheets" name="no.sheets">
                                <option >50</option>
                                <option >75</option>
                                <option >100</option>
                                <option >125</option>
                                <option >150</option>
                                <option >175</option>
                                <option >200</option>
                                <option >225</option>
                                <option >250</option>
                                <option >275</option>
                                <option >300</option>
                            </select>
                            <small id="no_sheets_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="colors">
                                {{__('products.colors')}}
                            </label>
                            <select class="form-control colors" id="colors" name="colors">
                            <option value="blackandwhite">{{__('products.black&white-printing')}}</option>
                            <option value="colors">{{__('products.colors-printing')}}</option>
                            </select>
                            <small id="colors_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="faces">
                                {{__('products.faces')}}
                            </label>
                            <select class="form-control" id="faces" name="faces">
                            <option value="1">{{__('products.1face')}}</option>
                            <option value="2">{{__('products.2face')}}</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="cover">
                                {{__('products.cover-weight')}}
                            </label>
                            <select class="form-control" id="cover" name="cover">
                                <option value="150">150 {{__('products.gm')}} {{__('products.crochet')}}</option>
                                <option value="200">200 {{__('products.gm')}} {{__('products.crochet')}}</option>
                                <option value="250">250 {{__('products.gm')}} {{__('products.crochet')}}</option>
                                <option value="300">300 {{__('products.gm')}} {{__('products.crochet')}}</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="cellophane">
                                {{__('products.cellophane')}}
                            </label>
                            <select class="form-control" id="cellophane" name="cellophane">
                                <option>{{__('products.glossy-cellophane')}}</option>
                                <option>{{__('products.rubber-cellophane')}}</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                        <label class="text-black" for="quantity">
                            {{__('products.required-quantity')}}
                        </label>
                        <input id="quantity" type="number" class="form-control" min="1" max="5000" value="1" name="quantity" required>
                        <small id="quantity_error" class="form-text text-danger error"></small>
                        </div>

                    </div>


                    <div class="row form-group">

                        <div class="col-md-12 ">
                                <label class="text-black" for="notes">
                                    {{__('products.notes')}}
                                </label> 
                                <textarea name="notes" id="notes" cols="30" rows="2" class="form-control" placeholder="{{__('products.write-notes')}}"></textarea>
                        </div>

                    </div>
        
        
                    <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary submit" style="font-family: 'Poppins', sans-serif;">
                            {{__('products.calculate')}}
                        </button>
                    </div>
                    </div>
        
        
                </form>


            @elseif ($productName == 'notebook')

                <form class="p-4 bg-white shadow product_form {{ $text }}" data-lang="{{LaravelLocalization::getCurrentLocale()}}" data-url="{{route('notebook.request')}}">
                    @csrf
                    
                    <div class="row form-group">

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="size">
                                {{__('products.size')}}
                            </label>
                            <select class="form-control" id="size" name="size">
                                <option value="A4">A4 (21 x 29.7 )</option>
                                <option value="A5">A5 (14.8 x 21 )</option>
                            </select>
                            <small id="size_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="sheets">
                                {{__('products.no.sheets')}}
                            </label>
                            <select class="form-control" id="sheets" name="no.sheets">
                            <option >50</option>
                            <option >75</option>
                            <option >100</option>
                            </select>
                            <small id="no_sheets_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="colors">
                                {{__('products.colors')}}
                            </label>
                            <select class="form-control colors" id="colors" name="colors">
                            <option value="white">{{__('products.white-papers')}}</option>
                            <option value="blackandwhite">{{__('products.black&white-printing')}}</option>
                            <option value="colors">{{__('products.colors-printing')}}</option>
                            </select>
                            <small id="colors_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-4 mb-3 faces_box">
                            <label class="text-black" for="faces">
                                {{__('products.faces')}}
                            </label>
                            <select class="form-control" id="faces" name="faces">
                            <option value="1">{{__('products.1face')}}</option>
                            <option value="2">{{__('products.2face')}}</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="wire">
                                {{__('products.wire')}}
                            </label>
                            <select class="form-control" id="wire" >
                            <option >{{__('products.side')}}</option>
                            <option >{{__('products.top')}}</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                        <label class="text-black" for="quantity">
                            {{__('products.required-quantity')}}
                        </label>
                        <input id="quantity" type="number" class="form-control" min="1" max="5000" value="1" name="quantity" required>
                        <small id="quantity_error" class="form-text text-danger error"></small>
                        </div>

                    </div>


                    <div class="row form-group">

                        <div class="col-md-12 ">
                                <label class="text-black" for="notes">
                                    {{__('products.notes')}}
                                </label> 
                                <textarea name="notes" id="notes" cols="30" rows="2" class="form-control" placeholder="{{__('products.write-notes')}}"></textarea>
                        </div>

                    </div>


                    <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary submit" style="font-family: 'Poppins', sans-serif;">
                            {{__('products.calculate')}}
                        </button>
                    </div>
                    </div>


                </form>

            @elseif ($productName == 'folder')

                <form class="p-4 bg-white shadow product_form {{ $text }}" data-lang="{{LaravelLocalization::getCurrentLocale()}}" data-url="{{route('folder.request')}}">
                    @csrf
                    
                    
                    <div class="row form-group">

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="faces">
                                {{__('products.faces')}}
                            </label>
                            <select class="form-control" id="faces" name="faces">
                            <option value="1">{{__('products.1face')}}</option>
                            <option value="2">{{__('products.2face')}}</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="lname">
                                {{__('products.cellophane')}}
                            </label>
                            <select class="form-control" name="cellophane">
                                <option value="without">{{__('products.without-cellophane')}}</option>
                                <option value="glossy">{{__('products.glossy-cellophane')}}</option>
                                <option value="rubber">{{__('products.rubber-cellophane')}}</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="lname">
                                {{__('products.pocket-place')}}
                            </label>
                            <select class="form-control" name="pocket">
                            <option value="right">{{__('products.right')}}</option>
                            <option value="left">{{__('products.left')}}</option>
                            </select>
                        </div>

                    </div>


                    <div class="row form-group">

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="quantity">
                            {{__('products.required-quantity')}}
                            </label>
                            <input id="quantity" type="number" class="form-control" min="1" max="5000" value="1" name="quantity" required>
                            <small id="quantity_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-8">
                            <label class="text-black" for="notes">
                                {{__('products.notes')}}
                            </label> 
                            <textarea name="notes" id="notes" cols="30" rows="2" class="form-control" placeholder="{{__('products.write-notes')}}"></textarea>
                    </div>

                    </div>


                    <div class="row form-group">
                        <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary submit" style="font-family: 'Poppins', sans-serif;">
                            {{__('products.calculate')}}
                        </button>
                        </div>
                    </div>


                </form>


            @elseif ($productName == 'letterhead')

                <form class="p-4 bg-white shadow product_form2 {{ $text }}" data-lang="{{LaravelLocalization::getCurrentLocale()}}" data-msg="{{__('products.letterhead-price')}}">
                    @csrf
                    
                    <div class="row form-group">

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="size">
                                {{__('products.size')}}
                            </label>
                            <select class="form-control" id="size" name="size">
                                <option value="A4">A4 (21 x 29.7 )</option>
                            </select>
                            <small id="size_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="colors">
                                {{__('products.colors')}}
                            </label>
                            <select class="form-control colors" id="colors" name="colors">
                            <option value="blackandwhite">{{__('products.black&white-printing')}}</option>
                            <option value="colors">{{__('products.colors-printing')}}</option>
                            </select>
                            <small id="colors_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-4 mb-3">
                        <label class="text-black" for="quantity">
                            {{__('products.required-quantity')}}
                        </label>
                        <input id="quantity" type="number" class="form-control" min="1" max="5000" value="1" name="quantity" required>
                        <small id="quantity_error" class="form-text text-danger error"></small>
                        </div>

                    </div>


                    <div class="row form-group">

                        <div class="col-md-12 ">
                                <label class="text-black" for="notes">
                                    {{__('products.notes')}}
                                </label> 
                                <textarea name="notes" id="notes" cols="30" rows="2" class="form-control" placeholder="{{__('products.write-notes')}}"></textarea>
                        </div>

                    </div>


                    <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary submit" style="font-family: 'Poppins', sans-serif;">
                            {{__('products.calculate')}}
                        </button>
                    </div>
                    </div>


                </form>


            @elseif ($productName == 'letters')

                <form class="p-4 bg-white shadow product_form {{ $text }}" data-lang="{{LaravelLocalization::getCurrentLocale()}}" data-url="{{route('letter.request')}}">
                    @csrf
                    
                    

                    <div class="row form-group">

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="kind">
                                {{__('products.kind')}}
                            </label>
                            <select class="form-control" id="kind" name="kind" >
                                <option value="us_letter">{{__('products.us-envelope')}}</option>
                            </select>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="quantity">
                                {{__('products.required-quantity')}}
                            </label>
                            <input id="quantity" type="number" class="form-control" min="1" max="5000" value="1" name="quantity" required>
                            <small id="quantity_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-6 ">
                            <label class="text-black" for="notes">
                                {{__('products.notes')}}
                            </label> 
                            <textarea name="notes" id="notes" cols="30" rows="2" class="form-control" placeholder="{{__('products.write-notes')}}"></textarea>
                    </div>

                    </div>



                    <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary submit" style="font-family: 'Poppins', sans-serif;">
                            {{__('products.calculate')}}
                        </button>
                    </div>
                    </div>


                </form>

            @elseif ($productName == 'card')

                <form class="p-4 bg-white shadow product_form {{ $text }}" data-lang="{{LaravelLocalization::getCurrentLocale()}}" data-url="{{route('card.request')}}">
                    @csrf
                    

                    <div class="row form-group">

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="material">
                                {{__('products.material')}}
                            </label>
                            <select class="form-control" name="material">
                                <option value="crochet">{{__('products.glossy-crochet-350')}}</option>
                                <option value="fabriano">{{__('products.fabriano')}}</option>
                            </select>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="kind">
                                {{__('products.card-kind')}}
                            </label>
                            <select class="form-control card-kind" id="kind" name="kind" >
                                <option value="normal">{{__('products.normal-card')}}</option>
                                <option value="tucked">{{__('products.tucked-card')}}</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3 card-faces">
                            <label class="text-black" for="faces">
                                {{__('products.faces')}}
                            </label>
                            <select class="form-control" id="faces" name="faces">
                            <option value="1">{{__('products.1face')}}</option>
                            <option value="2">{{__('products.2face')}}</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3 cut-type">
                            <label class="text-black" for="cut">
                                {{__('products.cut-type')}}
                            </label>
                            <select class="form-control" id="cut" name="cut">
                            <option value="0">{{__('products.normal-cut')}}</option>
                            <option value="1">{{__('products.cut-corner')}}</option>
                            </select>
                        </div>

                    </div>


                    <div class="row form-group">

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="quantity">
                                {{__('products.required-quantity')}}
                            </label>
                            <select class="form-control" id="quantity" name="quantity">
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                                <option value="400">400</option>
                                <option value="500">500</option>
                                <option value="600">600</option>
                                <option value="700">700</option>
                                <option value="800">800</option>
                                <option value="900">900</option>
                                <option value="1000">1000</option>
                                <option value="1100">1100</option>
                                <option value="1200">1200</option>
                                <option value="1300">1300</option>
                                <option value="1400">1400</option>
                                <option value="1500">1500</option>
                                <option value="1600">1600</option>
                                <option value="1700">1700</option>
                                <option value="1800">1800</option>
                                <option value="1900">1900</option>
                                <option value="2000">2000</option>
                                <option value="2100">2100</option>
                                <option value="2200">2200</option>
                                <option value="2300">2300</option>
                                <option value="2400">2400</option>
                                <option value="2500">2500</option>
                                <option value="2600">2600</option>
                                <option value="2700">2700</option>
                                <option value="2800">2800</option>
                                <option value="2900">2900</option>
                                <option value="3000">3000</option>
                            </select>
                            <small id="quantity_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-9 mb-3">
                                <label class="text-black" for="notes">
                                    {{__('products.notes')}}
                                </label> 
                                <textarea name="notes" id="notes" cols="30" rows="2" class="form-control" placeholder="{{__('products.write-notes')}}"></textarea>
                        </div>

                    </div>


                    <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">
                            {{__('products.calculate')}}
                        </button>
                    </div>
                    </div>


                </form>

            @elseif ($productName == 'bills')

                <form class="p-4 bg-white shadow  {{ $text }}" data-lang="en">
                                
                                
                    
                    <div class="row form-group">

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="fname">
                                المقاس
                            </label>
                            <select class="form-control" >
                                <option>A4</option>
                                <option>A3</option>
                                <option>A5</option>
                            </select>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="lname">
                                الوزن
                            </label>
                            <select class="form-control" >
                                <option>70 gm</option>
                                <option>80 gm</option>
                                <option>90 gm</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="fname">
                                عدد الورق الداخلي
                            </label>
                            <select class="form-control" >
                            <option >50</option>
                            <option >75</option>
                            <option >100</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="lname">
                                نوع الورق الداخلي
                            </label>
                            <select class="form-control">
                            <option >ورق ابيض</option>
                            <option >طباعة ابيض واسود</option>
                            <option >طباعة الوان</option>
                            </select>
                        </div>

                    </div>


                    <div class="row form-group">

                        <div class="col-md-3 mb-3 mb-md-0 ">
                            <label class="text-black" for="fname">
                                الكمية المطلوبة
                            </label>
                            <input type="number" class="form-control" min="1" max="5000" value="1">
                        </div>

                        <div class="col-md-9 ">
                                <label class="text-black" for="message">
                                    ملاحظات
                                </label> 
                                <textarea name="msg" id="message" cols="30" rows="2" class="form-control" placeholder="اكتب ملاحظاتك هنا ..."></textarea>
                        </div>

                    </div>


                    <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">
                            احسب التكلفة 
                        </button>
                    </div>
                    </div>


                </form>

            @elseif ($productName == 'flyers')

                <form class="p-4 bg-white shadow product_form {{ $text }}" data-lang="{{LaravelLocalization::getCurrentLocale()}}" data-url="{{route('flyer.request')}}">
                    @csrf
                    

                    <div class="row form-group">

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="size">
                                {{__('products.size')}}
                            </label>
                            <select class="form-control" id="size" name="size" >
                                <option value="A4">A4 (21 x 29.7 )</option>
                                <option value="A5">A5 (14.8 x 21 )</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="weight">
                                {{__('products.weight')}}
                            </label>
                            <select class="form-control" id="weight" name="weight" >
                                <option value="150">150 {{__('products.gm')}}</option>
                                <option value="200">200 {{__('products.gm')}}</option>
                                <option value="300">300 {{__('products.gm')}}</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="faces">
                                {{__('products.faces')}}
                            </label>
                            <select class="form-control" id="faces" name="faces">
                            <option value="1">{{__('products.1face')}}</option>
                            <option value="2">{{__('products.2face')}}</option>
                            </select>
                        </div>

                    </div>


                    <div class="row form-group">

                        <div class="col-md-3 mb-3 mb-md-0 ">
                            <label class="text-black" for="quantity">
                                {{__('products.required-quantity')}}
                            </label>
                            <select class="form-control" id="quantity" name="quantity">
                                <option value="1000">1000</option>
                            </select>
                            <small id="quantity_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-8">
                                <label class="text-black" for="notes">
                                    {{__('products.notes')}}
                                </label> 
                                <textarea name="notes" id="notes" cols="30" rows="2" class="form-control" placeholder="{{__('products.write-notes')}}"></textarea>
                        </div>

                    </div>


                    <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">
                            {{__('products.calculate')}}
                        </button>
                    </div>
                    </div>


                </form>

            @elseif ($productName == 'brochures')

                <form class="p-4 bg-white shadow product_form {{ $text }}" data-lang="{{LaravelLocalization::getCurrentLocale()}}" data-url="{{route('brochure.request')}}">
                    @csrf
                    
                    <input type="hidden" name="name" value="{{__('packages.brochures')}}">
                    <div class="row form-group">

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="size">
                                {{__('products.size')}}
                            </label>
                            <select class="form-control" id="size" name="size">
                                <option value="A4">A4 (21 x 29.7 )</option>
                                <option value="A5">A5 (14.8 x 21 )</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="weight">
                                {{__('products.weight')}}
                            </label>
                            <select class="form-control" id="weight" name="weight">
                                <option value="150">150 {{__('products.gm')}}</option>
                                <option value="200">200 {{__('products.gm')}}</option>
                                <option value="300">300 {{__('products.gm')}}</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="folding">
                                {{__('products.folding')}} 
                            </label>
                            <select class="form-control" id="folding" name="folding">
                                <option value="0">{{__('products.without-folding')}}</option>
                                <option value="2">{{__('products.bi-fold')}}</option>
                                <option value="3">{{__('products.tri-fold')}}</option>
                            </select>
                        </div>

                    </div>


                    <div class="row form-group">

                        <div class="col-md-3 mb-3 mb-md-0 ">
                            <label class="text-black" for="quantity">
                                {{__('products.required-quantity')}}
                            </label>
                            <select class="form-control" id="quantity" name="quantity">
                                <option value="1000">1000</option>
                            </select>
                            <small id="quantity_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-8">
                                <label class="text-black" for="notes">
                                    {{__('products.notes')}}
                                </label> 
                                <textarea name="notes" id="notes" cols="30" rows="2" class="form-control" placeholder="{{__('products.write-notes')}}"></textarea>
                        </div>

                    </div>


                    <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">
                            {{__('products.calculate')}}
                        </button>
                    </div>
                    </div>


                </form>

            @elseif ($productName == 'menu')

                <form class="p-4 bg-white shadow product_form {{ $text }}" data-lang="{{LaravelLocalization::getCurrentLocale()}}" data-url="{{route('brochure.request')}}">
                    @csrf
                    

                    <input type="hidden" name="name" value="{{__('packages.menu')}}">
                    <div class="row form-group">

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="size">
                                {{__('products.size')}}
                            </label>
                            <select class="form-control" id="size" name="size">
                                <option value="A4">A4 (21 x 29.7 )</option>
                                <option value="A5">A5 (14.8 x 21 )</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="weight">
                                {{__('products.weight')}}
                            </label>
                            <select class="form-control" id="weight" name="weight">
                                <option value="150">150 {{__('products.gm')}}</option>
                                <option value="200">200 {{__('products.gm')}}</option>
                                <option value="300">300 {{__('products.gm')}}</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="folding">
                                {{__('products.folding')}} 
                            </label>
                            <select class="form-control" id="folding" name="folding">
                                <option value="0">{{__('products.without-folding')}}</option>
                                <option value="2">{{__('products.bi-fold')}}</option>
                                <option value="3">{{__('products.tri-fold')}}</option>
                            </select>
                        </div>

                    </div>


                    <div class="row form-group">

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="quantity">
                                {{__('products.required-quantity')}}
                            </label>
                            <select class="form-control" id="quantity" name="quantity">
                                <option value="1000">1000</option>
                            </select>
                            <small id="quantity_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-8">
                                <label class="text-black" for="notes">
                                    {{__('products.notes')}}
                                </label> 
                                <textarea name="notes" id="notes" cols="30" rows="2" class="form-control" placeholder="{{__('products.write-notes')}}"></textarea>
                        </div>

                    </div>


                    <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">
                            {{__('products.calculate')}}
                        </button>
                    </div>
                    </div>


                </form>

            @elseif ($productName == 'sticker')

                <form class="p-4 bg-white shadow product_form {{ $text }}" data-lang="{{LaravelLocalization::getCurrentLocale()}}" data-url="{{route('sticker.request')}}">
                    @csrf
                    

                    <div class="row form-group">

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="size">
                                {{__('products.size')}}
                            </label>
                            <select class="form-control" id="size" name="size">
                                <option value="A4">A4 (21 x 29.7 )</option>
                                <option value="50x35">50x35  (33 x 48.7)</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="text-black" for="quantity">
                                {{__('products.required-quantity')}}
                            </label>
                            <input id="quantity" type="number" class="form-control" min="1" max="5000" value="1" name="quantity" required>
                            <small id="quantity_error" class="form-text text-danger error"></small>
                        </div>

                        <div class="col-md-6">
                                <label class="text-black" for="notes">
                                    {{__('products.notes')}}
                                </label> 
                                <textarea name="notes" id="notes" cols="30" rows="2" class="form-control" placeholder="{{__('products.write-notes')}}"></textarea>
                        </div>

                    </div>




                    <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">
                            {{__('products.calculate')}}
                        </button>
                    </div>
                    </div>


                </form>

            @elseif ($productName == 'rollup')

                <form class="p-4 bg-white shadow product_form {{ $text }}" data-lang="{{LaravelLocalization::getCurrentLocale()}}" data-url="{{route('rollup.request')}}">
                    @csrf
                    

                    <div class="row form-group">

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="material">
                                {{__('products.material')}}
                            </label>
                            <select class="form-control" id="material" name="material" >
                                <option value="banner_indoor">{{__('products.banner-indoor')}}</option>
                                <option value="cotid">{{__('products.cotid')}}</option>
                                <option value="banner_440">{{__('products.banner-440')}}</option>
                                <option value="mash">{{__('products.mash')}}</option>
                                <option value="gray_pack">{{__('products.gray-pack')}}</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="size">
                                {{__('products.size')}}
                            </label>
                            <select class="form-control" id="size" name="size" >
                                <option value="85">85 {{__('products.cm')}}</option>
                                <option value="100">100 {{__('products.cm')}}</option>
                                <option value="120">120 {{__('products.cm')}}</option>
                                <option value="150">150 {{__('products.cm')}}</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-black" for="quantity">
                                {{__('products.required-quantity')}}
                            </label>
                            <input id="quantity" type="number" class="form-control" min="1" max="5000" value="1" name="quantity" required>
                            <small id="quantity_error" class="form-text text-danger error"></small>
                        </div>


                    </div>


                    <div class="row form-group">

                        

                        <div class="col-md-12">
                            <label class="text-black" for="notes">
                                {{__('products.notes')}}
                            </label> 
                            <textarea name="notes" id="notes" cols="30" rows="2" class="form-control" placeholder="{{__('products.write-notes')}}"></textarea>
                    </div>

                    </div>


                    <div class="row form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">
                            {{__('products.calculate')}}
                        </button>
                    </div>
                    </div>


                </form>

            @endif

            </div>
    
            <div id="loader" class="m-auto">
                <img class="m-auto" src="/images/loading.gif" width="50">
            </div>

            <div class="col-lg-6 m-auto" id="price_table">
                <div class="table-responsive mb-3" style="/* border: 1px solid #ccc; */border-radius: 5px;">
                    <table class="table table-bordered table-hover">

                        <thead class="thead-dark">
                            <tr style="text-align: center;">
                            <th scope="col">{{__('products.description')}}</th>
                            <th scope="col">{{__('products.price')}}</th>
                            <th scope="col">{{__('products.quantity')}}</th>
                            <th scope="col">{{__('products.total')}}</th>
                            </tr>
                        </thead>

                        <tbody id="cart_table">
                            <tr class="text-center">
                            <td>
                                <ul class="{{$text}} p-0" id="description" style="list-style: none;">

                                </ul>
                            </td>
                            <td id="price">-</td>
                            <td id="get_quantity">-</td>
                            <td id="total">-</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
                
            </div>
    
              
          
        </div>
    
    </div>






<!--==========================Start Modal Price ================================-->

    <div class="modal fade" id="price_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 9999">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">

            <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">{{__('products.cost')}}</h5>
            <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

            <div class="modal-body" id="price_body">
            

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
            
        </div>
        </div>
    </div>
  <!--========================== End Modal Price  ================================-->

 <!--==============================  Footer Section    ==============================--> 

 @include('include.footer2')


@endsection



@section('script')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script>

$(".faces_box").slideUp();

$(".colors").on("change",function() 
{
    if ($(this).val() == 'white') 
        {
            $('.faces_box').slideUp();
        }

    else  
        {
            $('.faces_box').slideDown();
        }
});


$(".card-kind").on("change",function() 
{
    if ($(this).val() == 'tucked') 
        {
            $('.card-faces, .cut-type').slideUp();
        }

    else  
        {
            $('.card-faces, .cut-type').slideDown();
        }
});


$('#price_table').hide();
$('#loader').hide();


$('.product_form').submit(function(e)
    {
        e.preventDefault();
        $('.submit').prop('disabled', true);
        $('.error').text('');
        var lang 		= $(this).attr('data-lang');
        var url 		= $(this).attr('data-url');

        $('#price_table').hide();
        $('#loader').show();

        if (lang == 'en')
            {
                var head2 	= 'Oops...';
            }
        else
            {
                var head2 	= 'عفوآ';
            }

        $.ajax({
            url: 		url,
            method: 	'POST',
            dataType: 	'json',
            data:		$(this).serialize()	,
            success : function(data)
                {
                    $('.submit').prop('disabled', false);

                    var total = data['price'] * data['quantity'];

                    $('#description').html(data['desc']);
                    $('#price').html(data['price']);
                    $('#get_quantity').html(data['quantity']);
                    $('#total').html(total);

                    $('#loader').hide();

                    $('#price_table').show();


                },
                error : function(reject)
                {
                    $('.submit').prop('disabled', false);

                    $('#loader').hide();
                    
                    var response = $.parseJSON(reject.responseText);
                    console.log(response.message);
                    if(response.message == 'CSRF token mismatch.')
                    {
                        location.reload();
                    }
                    else
                    {
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
                    
                }
            
            
        });

    });



$('.product_form2').submit(function(e)
    {
        e.preventDefault();
        $('.submit').prop('disabled', true);
        $('.error').text('');
        var lang 		= $(this).attr('data-lang');
        var msg 		= $(this).attr('data-msg');

        $('#price_table').hide();
        $('#loader').show();

        if (lang == 'en')
            {
                var head2 	= 'Oops...';
            }
        else
            {
                var head2 	= 'عفوآ';
            }

            Swal.fire(
                        head2,
                        msg,
                        'error'
                        )
            
            $('.submit').prop('disabled', false);
            $('#loader').hide();

    });



</script>

@endsection
