AOS.init({
	duration: 800,
	easing: 'slide',
	once: false
});

jQuery(document).ready(function($) {

   "use strict";

   
   $(".loader").delay(200).fadeOut("slow");
 $("#overlayer").delay(200).fadeOut("slow");	
 

   var siteMenuClone = function() {

	   $('.js-clone-nav').each(function() {
		   var $this = $(this);
		   $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
	   });


	   setTimeout(function() {
		   
		   var counter = 0;
	 $('.site-mobile-menu .has-children').each(function(){
	   var $this = $(this);
	   
	   $this.prepend('<span class="arrow-collapse collapsed">');

	   $this.find('.arrow-collapse').attr({
		 'data-toggle' : 'collapse',
		 'data-target' : '#collapseItem' + counter,
	   });

	   $this.find('> ul').attr({
		 'class' : 'collapse',
		 'id' : 'collapseItem' + counter,
	   });

	   counter++;

	 });

   }, 1000);

	   $('body').on('click', '.arrow-collapse', function(e) {
	 var $this = $(this);
	 if ( $this.closest('li').find('.collapse').hasClass('show') ) {
	   $this.removeClass('active');
	 } else {
	   $this.addClass('active');
	 }
	 e.preventDefault();  
	 
   });

	   $(window).resize(function() {
		   var $this = $(this),
			   w = $this.width();

		   if ( w > 768 ) {
			   if ( $('body').hasClass('offcanvas-menu') ) {
				   $('body').removeClass('offcanvas-menu');
			   }
		   }
	   })

	   $('body').on('click', '.js-menu-toggle', function(e) {
		   var $this = $(this);
		   e.preventDefault();

		   if ( $('body').hasClass('offcanvas-menu') ) {
			   $('body').removeClass('offcanvas-menu');
			   $this.removeClass('active');
		   } else {
			   $('body').addClass('offcanvas-menu');
			   $this.addClass('active');
		   }
	   }) 

	   // click outisde offcanvas
	   $(document).mouseup(function(e) {
	   var container = $(".site-mobile-menu");
	   if (!container.is(e.target) && container.has(e.target).length === 0) {
		 if ( $('body').hasClass('offcanvas-menu') ) {
				   $('body').removeClass('offcanvas-menu');
			   }
	   }
	   });
   }; 
   siteMenuClone();


   var sitePlusMinus = function() {
	   $('.js-btn-minus').on('click', function(e){
		   e.preventDefault();
		   if ( $(this).closest('.input-group').find('.form-control').val() != 0  ) {
			   $(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) - 1);
		   } else {
			   $(this).closest('.input-group').find('.form-control').val(parseInt(0));
		   }
	   });
	   $('.js-btn-plus').on('click', function(e){
		   e.preventDefault();
		   $(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) + 1);
	   });
   };
   // sitePlusMinus();


   var siteSliderRange = function() {
   $( "#slider-range" ).slider({
	 range: true,
	 min: 0,
	 max: 500,
	 values: [ 75, 300 ],
	 slide: function( event, ui ) {
	   $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	 }
   });
   $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	 " - $" + $( "#slider-range" ).slider( "values", 1 ) );
   };
   // siteSliderRange();


   
   // var siteCarousel = function () {
   // 	if ( $('.nonloop-block-13').length > 0 ) {
   // 		$('.nonloop-block-13').owlCarousel({
   // 	    center: false,
   // 	    items: 1,
   // 	    loop: true,
   // 			stagePadding: 0,
   // 	    margin: 0,
   // 	    autoplay: true,
   // 	    nav: true,
   // 			navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
   // 	    responsive:{
   //         600:{
   //         	margin: 0,
   //         	nav: true,
   //           items: 2
   //         },
   //         1000:{
   //         	margin: 0,
   //         	stagePadding: 0,
   //         	nav: true,
   //           items: 3
   //         },
   //         1200:{
   //         	margin: 0,
   //         	stagePadding: 0,
   //         	nav: true,
   //           items: 4
   //         }
   // 	    }
   // 		});
   // 	}

   // 	$('.slide-one-item').owlCarousel({
   //     center: false,
   //     items: 1,
   //     loop: true,
   // 		stagePadding: 0,
   //     margin: 0,
   //     smartSpeed: 1000,
   //     autoplay: true,
   //     pauseOnHover: false,
   //     autoHeight: true,
   //     nav: false,
   //     navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
   //   });

	 
   // };
   // siteCarousel();

   var siteStellar = function() {
	   $(window).stellar({
	   responsive: false,
	   parallaxBackgrounds: true,
	   parallaxElements: true,
	   horizontalScrolling: false,
	   hideDistantElements: false,
	   scrollProperty: 'scroll'
	 });
   };
   // siteStellar();

   
   var siteDatePicker = function() {

	   if ( $('.datepicker').length > 0 ) {
		   $('.datepicker').datepicker();
	   }

   };
   siteDatePicker();

   var siteSticky = function() {
	   $(".js-sticky-header").sticky({topSpacing:0});
   };
   siteSticky();

   // navigation
//  var OnePageNavigation = function() {
//    var navToggler = $('.site-menu-toggle');
//   	$("body").on("click", ".main-menu li a[href^='#'], .smoothscroll[href^='#'], .site-mobile-menu .site-nav-wrap li a", function(e) {
//      e.preventDefault();
//
//      var hash = this.hash;
//
//      $('html, body').animate({
//        'scrollTop': $(hash).offset().top
//      }, 600, 'easeInOutExpo', function(){
//        window.location.hash = hash;
//      });
//
//    });
//  };
//  OnePageNavigation();

 var siteScroll = function() {

	 

	 $(window).scroll(function() {

		 var st = $(this).scrollTop();

		 if (st > 100) {
			 $('.js-sticky-header').addClass('shrink');
		 } else {
			 $('.js-sticky-header').removeClass('shrink');
		 }

	 }) 

 };
 siteScroll();


//   var siteIstotope = function() {
//   	/* activate jquery isotope */
// 	  var $container = $('#posts').isotope({
// 	    itemSelector : '.item',
// 	    isFitWidth: true
// 	  });

// 	  $(window).resize(function(){
// 	    $container.isotope({
// 	      columnWidth: '.col-sm-3'
// 	    });
// 	  });
	 
// 	  $container.isotope({ filter: '*' });

// 	    // filter items on button click
// 	  $('#filters').on( 'click', 'button', function(e) {
// 	  	e.preventDefault();
// 	    var filterValue = $(this).attr('data-filter');
// 	    $container.isotope({ filter: filterValue });
// 	    $('#filters button').removeClass('active');
// 	    $(this).addClass('active');
// 	  });
//   }

//   siteIstotope();


 $('.fancybox').on('click', function() {
	 var visibleLinks = $('.fancybox');

	 $.fancybox.open( visibleLinks, {}, visibleLinks.index( this ) );

	 return false;
   });
   
   
   
   
   
   // ========================== Subscribe Form  ==========================	


   $('.subscribe_form').submit(function(e){

   e.preventDefault();
   $('.submit').prop('disabled', true);
   var lang 		= $(this).attr('data-lang');

   if (lang == 'en')
	   {
		   var head1 	= 'Thank You';
		   var title1 	= 'You Have Subscribed Successfully.';
		   var head2 	= 'Oops...';
		   var title2 	= 'This Email Is Already Exist.';
	   }
   else
	   {
		   var head1 = 'شكرآ لك';
		   var title1 = 'لقد تم الاشتراك بنجاح';
		   var head2 	= 'عفوآ';
		   var title2 	= 'هذا البريد الالكتروني مشترك بالفعل';
	   }

   $.ajax({
	   url: 		'/ajax.php',
	   method: 	'POST',
	   dataType: 	'json',
	   data:		$(this).serialize()	,
	   success : function(data)
			{
			   $('.submit').prop('disabled', false);
				
				if (data['state'] == 'success')
			   {
					Swal.fire(
							 head1,
							 title1,
							 'success'
						   )
				   
					$('.subscribe_input').val('');
			   }
				else if (data['state'] == 'error')
			   {
					Swal.fire(
							 head2,
							 title2,
							 'error'
						   )
			   }
			}
   });

});


   
   
   
   // ========================== Contact Us Form  ==========================	
   
   
   $('.msg_form').submit(function(e){
	   
	   e.preventDefault();
	   var lang 		= $(this).attr('data-lang');

	   if (lang == 'en')
		   {
			   var head1 	= 'Thank You';
			   var title1 	= 'Your Message Sent Successfully.';
		   }
	   else
		   {
			   var head1 = 'شكرآ لك';
			   var title1 = 'تم إرسال رسالتك بنجاح';
		   }

	   
	   $.ajax({
		   url: 		'/ajax.php',
		   method: 	'POST',
		   dataType: 	'text',
		   data:		$(this).serialize()	,
		   success : function(response)
				{
					Swal.fire(
							 head1,
							 title1,
							 'success'
						   )
					
					$('#fname').val('');
					$('#lname').val('');
					$('#email').val('');
					$('#phone').val('');
					$('#subject').val('');
					$('#message').val('');
				}
	   });
	   
   });
   
   
   
	// ==========================  Login Modal  ==========================
 
 
	$('.login_modal').click(function()
	{
	   var login = $('#login_form').html();
	   var text  = $(this).attr('data-login');
	   
	   Swal.fire({
			 html: login,
			 title : text,
			 showCancelButton: true,
			 showConfirmButton: false
			 
		   })
	   
	   
	});


	// ==========================  Add item to cart ==========================

	$(document).on('click', '.add_item', function() {
		
		var lang 	= $(this).attr('data-lang');

		if(lang == 'en')
			{
				var title = 'Item Added to cart successfully';
			}
		else
			{
				var title = 'تمت إضافة المنتج إلى عربة التسوق بنجاح';
			}
		
			 $.ajax({
				url: 		'/ajax.php',
				method: 	'POST',
				dataType: 	'text',
				data:		{ 
							 show_view_cart	: 1,
							 lang	: lang
							}	,
				success : function(response)
						 {
							Toast.fire({
							icon: 'success',
							title: title
							})
							
							var snd = new Audio("/audio/beep.mp3");
							snd.play();
							snd.currentTime=0;

							$('#cart').html(response);
						 }
			});
			
		
	});


	// ==========================  Config timer sweet alert ==========================
		
	const Toast = Swal.mixin({
		toast: true,
		position: 'top-end',
		showConfirmButton: false,
		timer: 3000,
		timerProgressBar: true,
		onOpen: (toast) => {
		  toast.addEventListener('mouseenter', Swal.stopTimer)
		  toast.addEventListener('mouseleave', Swal.resumeTimer)
		}
	  });

	var INSPIRO = {};
	  
  INSPIRO.elements = {
    functions: function () {
		INSPIRO.elements.accordion();
	  },
	  accordion: function () {
		var accordionType = "accordion",
		  toogleType = "toggle",
		  accordionItem = "ac-item",
		  itemActive = "ac-active",
		  itemTitle = "ac-title",
		  itemContent = "ac-content",
		  $accs = $("." + accordionItem)
		$accs.length &&
		  ($accs.each(function () {
			  var $item = $(this)
			  $item.hasClass(itemActive) ? $item.addClass(itemActive) : $item.find("." + itemContent).hide()
			}),
			$("." + itemTitle).on("click", function (e) {
			  var $link = $(this),
				$item = $link.parents("." + accordionItem),
				$acc = $item.parents("." + accordionType)
			  $item.hasClass(itemActive) ? ($acc.hasClass(toogleType) ? ($item.removeClass(itemActive), $link.next("." + itemContent).slideUp()) : ($acc.find("." + accordionItem).removeClass(itemActive), $acc.find("." + itemContent).slideUp())) : ($acc.hasClass(toogleType) || ($acc.find("." + accordionItem).removeClass(itemActive), $acc.find("." + itemContent).slideUp("fast")), $item.addClass(itemActive), $link.next("." + itemContent).slideToggle("fast")), e.preventDefault()
			  return false
			}))
	  },
	}
	
  //Load Functions on document ready
  $(document).ready(function () {
    INSPIRO.elements.functions();
  })
   

});