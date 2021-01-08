<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta name="robots" content="noindex,nofollow">

    <meta content='' name='current_path' />
    <meta content='false' name='protect_images' />
    <meta content="This photo is Copyright © 2020 ARMA. All rights reserved." name='image_protection_blurb' />
   
    <meta property="og:site_name" content="ARMA"/>
   
     <meta property="og:url"           content="http://armasoftware.com/" />
     <meta property="og:type"          content="website" />
     <meta property="og:title"         content="ARMA - Online Digital Agency" />
     <meta property="og:description"   content="ARMA is an Online Digital Agency & Software House specialized in developing and supporting software for Build & Manage Your Business Online, Starting From Graphic Design, Social Media Management, Web & Mobile Development, All The Way to Marketing, And Promoting Your Business Online." />
     <meta property="og:image"         content="http://armasoftware.com/images/arma.png" />
   
     <meta property="og:image:width" content="512" />
     <meta property="og:image:height" content="512" />
   <!--===============================================================================================--> 
  
     <!-- Author Meta -->
     <meta name="author" content="ARMA SOFTWARE">
     <!-- Meta Description -->
     <meta name="description" content="ARMA is an Online Digital Agency & Software House specialized in developing and supporting software for Build & Manage Your Business Online, Starting From Graphic Design, Social Media Management, Web & Mobile Development, All The Way to Marketing, And Promoting Your Business Online.">
     <!-- Meta Keyword -->
     <meta name="keywords" content="">
  
  
      <title>{{$template->name}} - Template | ARMA Software</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Favicon -->
      <link rel="icon" href="favicon.ico">
      
  
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">	
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
      
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

</head>
<body  data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
 






    <header class="switcher-bar clearfix">

        <div class="d-inline-block mx-2">
        <a href="https://www.armasoftware.com/" title="Switcher">
            <img  src="{{ asset('images/arma_logo.png') }}" width="110">
        </a>
        </div>
        
        <div class="product-switcher d-inline-block">
        <a href="#" title="Select a Product">{{$template->name}} </a>
        </div>
        
        <div class="remove-btn header-btn float-right">
        <a href="#" title="Close this bar" class="fa fa-times"></a>
        </div>
        
        
        <div class="mobile-btn header-btn float-right">
        <a href="#" title="Smartphone View" class="fa fa-mobile-alt"></a>
        </div>
        
        <div class="tablet-btn header-btn float-right">
        <a href="#" title="Tablet View" class="fa fa-tablet-alt"></a>
        </div>
        
        <div class="desktop-btn header-btn float-right" >
        <a href="#" title="Desktop View" class="fa fa-desktop"></a>
        </div>
    </header>
    
    <section class="switcher">
        <div class="switcher-body similar">

            @foreach ($similars as $similar)
                 
                <div class="card1">
                    <div class="thumbnail">
                        <img class="lazyload" data-src="{{ asset('images/templates/'.$similar->image) }}" alt="">
                        <a href="/preview/{{$similar->id}}" class="thumb-cover"></a>
                    </div>
                    <div class="card-info">
                        <a href="/preview/{{$similar->id}}" ><h3>{{$similar->name}} </h3> </a> 
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    
    
    
    
    
<style>
    
    .toggle .switcher-body {
        border-bottom: 1px solid #333333;
        border-top: 1px solid #333333;
        height: 210px;
        padding: 10px 25px;
    }

    .switcher-body {
        background: #3A3A3A;
        height: 0;
        overflow: hidden;
        padding: 0;
        position: relative;
        -webkit-transition: all .3s linear;
        -moz-transition: all .3s linear;
        -o-transition: all .3s linear;
        -ms-transition: all .3s linear;
        transition: all .3s linear;
        z-index: 20;
    }

    .switcher-bar {
        background: #333;
        border-bottom: 1px solid #444;
        max-height: 60px;
        position: relative;
        z-index: 22;
    }
    
    .product-switcher {
        position: relative;
        background: #222;
    }
    
    .product-switcher a:before {
    content: '+';
    left: 20px;
    position: absolute;
    top: 4px;
    }

    .product-switcher a {
        color: #9b9b9b;
        display: block;
        font-size: 16px;
        font-weight: 400;
        line-height: 50px;
        max-height: 60px;
        padding: 5px 40px;
        text-decoration: none;
        text-transform: uppercase;
        position: relative;
    }
    
    .header-btn {
        position: relative;
    }
    
    .header-btn a {
        border-left: 1px solid #444;
        display: block;
        font-size: 24px;
        height: 60px;
        padding: 0;
        width: 60px;
        text-decoration: none;
    }
    
    .header-btn a:before {
    color: #9b9b9b;
    left: 18px;
    position: absolute;
    top: 18px;
    }

    .header-btn a:hover, .header-btn.current a {
        background: #222;
        text-decoration: none;
    }

    .header-btn a:hover:before, .header-btn.current a:before {
        color: #fff;
    }

    .product-iframe {
    display: block!important;
    height: 100%;
    margin: 0 auto;
    max-width: 100%;
    width: 100%;
    -webkit-transform: translateZ(0);
    transition: all 0.3s linear;
    }

    .card1 {
        border-radius: 8px;
        position: relative;
    }

    .card1 .thumbnail {
        border: 0 none;
        margin: 10px 25px;
        padding: 0;
        position: relative;
        background: transparent;
    }

    .card1 .thumbnail>img {
        border-radius: 8px 8px;
        width: 100%;
        box-shadow: 0 0 5px 1px rgb(255 255 255 / 15%);
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
        display: block;
        width: 100%;
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
        text-align: center
    }

    .card-info a:not(.btn) {
        color: #434343;
    }

    .card-info h3 {
        margin-top: 10px;
        margin-bottom: 5px;
        font-size: 18px;
        color: #fff;
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

    .slick-arrow {
        border: 1px solid rgba(255, 255, 255, 0.49);
        padding: 5px;
        width: 40px;
        height: 70px;
        z-index: 99;
        border-radius: 5px;
        background: rgba(0, 0, 0, 0.5);
        }

    .slick-prev {
        left: 0;
    }

    .slick-next {
        right: 0;
    }

    @media (max-width: 768px)
    {
        .switcher-bar{
                display: none;
        }
        
    }

</style>


<iframe class="product-iframe" frameborder="0" border="0" src="{{ asset('templates/'.$template->category->name_en.'/'.$template->name.'/') }}/" style="height: 100vh;width: 100%;"></iframe>



    <script type="application/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js"></script>


    <script>

        $('.mobile-btn').click(function(){
            $(".product-iframe").css({"width": "480px"});
        });


        $('.tablet-btn').click(function(){
            $(".product-iframe").css({"width": "768px"});
        });


        $('.desktop-btn').click(function(){
            $(".product-iframe").css({"width": "100%"});
        });


        $('.remove-btn').click(function(){
            $(".switcher-bar").css({"display": "none"});
            $(".switcher").css({"display": "none"});
            $(".product-iframe").css({"width": "100%"});
        });


        $('.product-switcher').click(function(){
            $('.switcher').toggleClass('toggle');
        });

        

        		
		$('.similar').slick({
  		  infinite: true,
		  slidesToShow: 4,
		  responsive: [
			{
			  breakpoint: 768,
			  settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 3
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 2
			  }
			}
		  ]
		});

    </script>

	
</body>
</html>




