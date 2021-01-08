@if (LaravelLocalization::getCurrentLocale() == 'ar')
    @php
    $dir   = 'rtl';
    $text  = 'text-right';
    $lang  = 'ar';
    @endphp
@elseif (LaravelLocalization::getCurrentLocale() == 'en')  
    @php
    $dir    = 'ltr';
    $text   = '';
    $lang   = 'en';
    @endphp
@endif

@if (isset($category1))

@php
$title        = $category1->name_en. ' - Templates | ARMA Software';
$description  = $category1->description;
$image        = 'https://armasoftware.com/images/category/'.$category1->url.'.jpg';
$url          = 'https://armasoftware.com/'.$lang.'/category'.'/'.$category1->url;
@endphp

@elseif (isset($product1))

@php
$title        = $product1->name_en. ' | ARMA Software';
$description  = $product1->description;
$image        = 'https://armasoftware.com/images/'.$product1->name_en.'.jpg';
$url          = 'https://armasoftware.com/'.$lang.'/product'.'/'.$product1->name_en;
@endphp

@else

@php
$title        = 'ARMA Software - Digital Agency';
$description  = 'ARMA is an Online Digital Agency & Software House specialized in developing and supporting software for Build & Manage Your Business Online, Starting From Graphic Design, Social Media Management, Web & Mobile Development, All The Way to Marketing, And Promoting Your Business Online.';
$image        = 'https://armasoftware.com/images/arma.png';
$url          = 'https://armasoftware.com/';
@endphp

@endif

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta name="robots" content="index,follow">

    <meta content='' name='current_path' />
    <meta content='false' name='protect_images' />
    <meta content="This photo is Copyright © 2020 ARMA. All rights reserved." name='image_protection_blurb' />
   
    <meta property="og:site_name" content="ARMA"/>
    
     {{-- <meta property="og:url"           content="{{$url}}" /> --}}
     <meta property="og:url"           content="{{request()->getHost()}}/{{request()->path()}}" />
     <meta property="og:type"          content="website" />
     <meta property="og:title"         content="{{$title}}" />
     <meta property="og:description"   content="{{$description}}" />
     <meta property="og:image"         content="{{$image}}" />
   
     <meta property="og:image:width" content="512" />
     <meta property="og:image:height" content="512" />
   <!--===============================================================================================--> 
  
     <!-- Author Meta -->
     <meta name="author" content="ARMA SOFTWARE">
     <!-- Meta Description -->
     <meta name="description" content="{{$description}}">
     <!-- Meta Keyword -->
     <meta name="keywords" content="">
  
  
      <title>ARMA - Digital Agency</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Favicon -->
      <link rel="icon" href="/favicon.ico">
      
  
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      
      <!-- Font Style -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body  data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="app">

        
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 fa fa-times js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



        <main class="">
            @yield('content')
        </main>
    
  
  
    <div id="cart"></div>

    </div> <!-- .site-wrap -->

    <script type="application/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="application/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="application/javascript" src="{{ asset('js/jquery.sticky.js') }}" defer></script>
    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js"></script>

    <script type="application/javascript" src="{{ asset('js/main.js') }}" defer></script>

    @yield('script')
</body>
</html>
