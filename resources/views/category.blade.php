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

    .card1 {
        border-radius: 8px;
        position: relative;
        margin-bottom: 40px;
    }

    .card1 .thumbnail {
        border: 0 none;
        padding: 0;
        margin: 0;
        /* min-height: 250px; */
        position: relative;
        background: transparent;
        box-shadow: 0 25px 20px -21px rgba(0,0,0,0.57);
    }

    .card1 .thumbnail>img {
        border-radius: 8px 8px;
        width: 100%;
    }

    .thumbnail>img, .thumbnail a>img {
        display: block;
        max-width: 100%;
        height: auto;
        margin-right: auto;
        margin-left: auto;
    }

    .card1 .thumb-cover {
        padding: 15px 20px;
        height: 100%;
        top: 0;
        position: absolute;
        opacity: 0;
        display: block;
        width: 100%;
        background-color: rgba(0,0,0,0.75);
        z-index: 3;
        content: "";
        left: 0;
        border-radius: 8px;
    }

    .card1 .actions {
        position: absolute;
        z-index: 3;
        top: 50%;
        left: 0;
        text-align: center;
        width: 100%;
        height: 0;
        opacity: 0;
        transition: all .5s ease;
        -webkit-transition: all .5s ease;
        -moz-transition: all .5s ease;
    }

    .card1 .actions .btn-round:not(.btn-radius) {
        font-size: 18px;
        padding: 14px 14px;
        line-height: 1;
        display: inline-block;
        height: 48px;
    }

    .card1 .actions .btn {
        top: 50%;
        position: relative;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
    }

    .btn-neutral.btn-fill {
        color: #666666 !important;
        background-color: white;
        opacity: 1;
        filter: alpha(opacity=100);
    }

    .card-info {
        padding: 15px;
        border-radius: 0 0 12px 12px;
    }

    .card-info a:not(.btn) {
        color: #434343;
    }

    .card-info h3 {
        margin-top: 10px;
        margin-bottom: 5px;
        font-size: 18px;
        color: #434343;
    }

    .card1:hover .thumb-cover, .card1:hover .actions {
        opacity: 1;
    }

    .btn-neutral.btn-fill:hover, .btn-neutral.btn-fill:focus, .btn-neutral.btn-fill:active, .btn-neutral.btn-fill.active, .open>.btn-neutral.btn-fill.dropdown-toggle {
        background-color: white;
        color: #666666 !important;
        opacity: 0.85;
    }

    .btn-neutral.btn-fill {
        color: #666666 !important;
        background-color: white;
        opacity: 1;
        filter: alpha(opacity=100);
    }

    .btn-neutral {
        border-color: white;
        color: white;
    }

    .btn-fill {
        color: #FFFFFF;
        opacity: 1;
    }

    .btn-round {
        border-width: 1px;
        border-radius: 30px !important;
        opacity: 0.79;
        padding: 9px 18px;
    }

</style>


 <!--==============================  Navbar Section    ==============================--> 
   
 @include('include.navbar2')

<div class="py-5" style="height: 15vh; background:linear-gradient(-45deg, rgba(147,26,222,0.83) 0%, rgba(28,206,234,0.82) 100%);">


</div>


<h3 class="text-center section-title py-5">{{$category1->name}}</h3>

<div class="container">
    <div class="row mb-5" dir="{{$dir}}">

       

        @foreach ($templates as $template)

            <div class="col-md-4 col-sm-6">
                <div class="card1">
                    <div class="thumbnail">
                        <img class="lazyload" data-src="{{ asset('images/templates/'.$template->image) }}" alt="">
                        <a href="" class="thumb-cover"></a>
                        <b class="actions"> 
                        <a href="/preview/{{$template->id}}" class="btn btn-neutral btn-fill btn-round" target="_blank" > <i class="fa fa-laptop"></i>  {{__('core.Live Preview')}}</a> 
                        </b>
                    </div>
                    <div class="card-info">
                        <a href="/preview/{{$template->id}}" target="_blanck"> <h3>{{$template->name}} </h3> </a> 
                    </div>
                </div>
            </div>
            
        @endforeach

    </div>

</div>



 
 <!--==============================  Footer Section    ==============================--> 

 @include('include.footer2')

@endsection