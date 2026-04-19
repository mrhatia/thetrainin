// JavaScript Document
$(document).ready(function () {


	$(".desktop-menu .nav-item").hover(function() {
		$("body").addClass("hide-scroll");
	}, function() {
		$("body").removeClass("hide-scroll");
	});

	if($(window).width() < 767){
		$(".d-none").remove();
	}
    
    width_counter_right_align();
  	width_counter_left_align();

	if(window.location.hash) {
	var hash = window.location.hash;

	let find_id = document.querySelector(hash);
		find_id.click();
	}

	if(window.location.hash) {
		var hash = window.location.hash;
			setTimeout(function(){
				$(hash).trigger("click");
			}, 500);
	}


	$("button.search").click(function (e) {
		$('.search_main').addClass('open-menu'); 
	});

	$(".show-clients-btn").click(function (e) {
		$('.expand-logo').addClass('expand-show'); 
		$(this).hide(); 
	});

	$(".search_close").click(function (e) {
		$('.search_main').removeClass('open-menu'); 
	});


	$( ".menu li.menu-item-has-children" ).each(function() {
		$(this).append('<div id="id" class="sparkLines"></div>');
		$(this).find('.sparkLines').click(function () {
			if ($(this).prev('.sub-menu').hasClass("slideToggle")) {
				$(this).removeClass('open-menu'); 
				$(this).prev('.sub-menu').removeClass('slideToggle');
			} else {
				$(this).addClass('open-menu');
				$(this).prev('.sub-menu').addClass('slideToggle');
			}
		});
	});


	$(".podcast-close").click(function (e) {
		$('.new-podcast-available').addClass('hidepodcast'); 
	});

	$(".back-link").click(function (e) {
		$(this).closest('ul.sub-menu').removeClass('slideToggle'); 
	});
	$(".navbar-toggler").click(function (e) {
		$('.mobile-menu-cover').toggleClass('show'); 
	});

	$(".our-resource-block-label").click(function (e) {
		$(this).next(".our-resource-block-popup").addClass('show-resource-popup'); 
		$('html').addClass('hide-body-scroll');
	});

	$(".back-link").click(function (e) {
		$('.our-resource-block-popup').removeClass('show-resource-popup'); 
		$('html').removeClass('hide-body-scroll');
	});


  	$('.menu_tabs-items').hover(function(e){
	    e.preventDefault()
	    var tabId = $(e.currentTarget).data('tabId');
	    $('.tab_links').removeClass('menu_tab_links_active');
	    $('#' + tabId).addClass('menu_tab_links_active');

	    $('.menu_tabs-items').removeClass('menu_tabs-items-active');
		$(e.currentTarget).addClass('menu_tabs-items-active');
	});

	// Navigation Toggle Start
	$(".navbar-toggler").click(function (e) {
		$(this).toggleClass("open");
		$("body").toggleClass("overflow-body");
		e.preventDefault();
		$("ul").removeClass("slideToggle");
		$(".sparkLines").removeClass('open-menu');
	});
	// Navigation Toggle End

	$(function() {
		$('.about-header a').click(function() {
		  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
			  $('html, body').animate({
				scrollTop: target.offset().top - $("header").outerHeight()
			  }, 100);
			  return false;
			}
		  }
		});
	  });
	  
	
	$('.awards_slider_mobile').slick({
		slidesToShow: 1,
		dots:false,
		arrows:false,
		centerMode:true,
		centerPadding:"50px 0 0",
		infinite: true,	
		autoplay:true,
		autoplayspeed:2000,
	});


	$('.team_loop_slider_mobile').slick({
		slidesToShow: 1,
		dots:false,
		arrows:false,
		centerMode:true,
		centerPadding:"50px 0 0",
		infinite: true,	
		autoplay:false,
		autoplayspeed:2000,
	});


	$('.awards-mobile-slider').slick({
		slidesToShow: 1,
		dots:false,
		arrows:false,
		centerMode:true,
		centerPadding:"50px 0 0",
		infinite: true,	
		autoplay:false,
		autoplayspeed:2000,
	});



	// help Start
	$('.help-slider').slick({
		dots: true,
		arrows: true,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: '<div class="slick-prev slick-arrow"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.2188 9.75L4.28125 9.75" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.75 15.2188L4.28125 9.75L9.75 4.28125" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		nextArrow: '<div class="slick-next slick-arrow"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78125 9.75H15.7188" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.25 4.28125L15.7188 9.75L10.25 15.2188" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 4,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 3,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				dots:false,
				arrows:false,
				centerMode:true,
				centerPadding:"100px 0 0",
				infinite: true,	
				autoplay:true,
				autoplayspeed:2000,		
			}
		},
		]
	});
	// help End

	// help Start
	$('.logo-slider').slick({
		dots: false,
		arrows: false,
		infinite: false,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		prevArrow: '<div class="slick-prev slick-arrow"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.2188 9.75L4.28125 9.75" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.75 15.2188L4.28125 9.75L9.75 4.28125" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		nextArrow: '<div class="slick-next slick-arrow"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78125 9.75H15.7188" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.25 4.28125L15.7188 9.75L10.25 15.2188" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		responsive: [{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}

		]
	});
	// help End


	// round-ring-icon-slider
	$('.round-ring-icon-slider').slick({
		dots: false,
		arrows: false,
		infinite: false,
		speed: 300,
		slidesToShow: 1,
		centerPadding: '0',
		slidesToScroll: 1,
		centerMode: true,
		variableWidth: true,
	});
	// round-ring-icon-slider


	// help Start
	$('.devlop-slider').slick({
		dots: true,
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		centerMode: true,
  		centerPadding: '60px 0 0',
		prevArrow: '<div class="slick-prev slick-arrow"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.2188 9.75L4.28125 9.75" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.75 15.2188L4.28125 9.75L9.75 4.28125" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		nextArrow: '<div class="slick-next slick-arrow"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78125 9.75H15.7188" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.25 4.28125L15.7188 9.75L10.25 15.2188" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 4,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 3,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				dots:false,
				arrows:false
			}
		},
		{
			breakpoint: 0,
			settings: {
				slidesToShow: 1,
			}
		},

		]
	});
	// help End


	// help Start
	$('.speaker-slider').slick({
		dots: true,
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		centerMode: true,
  		centerPadding: '60px 0 0',
		prevArrow: '<div class="slick-prev slick-arrow"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.2188 9.75L4.28125 9.75" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.75 15.2188L4.28125 9.75L9.75 4.28125" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		nextArrow: '<div class="slick-next slick-arrow"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78125 9.75H15.7188" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.25 4.28125L15.7188 9.75L10.25 15.2188" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 4,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 3,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				dots:true,
				arrows:false
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				dots:true,
				arrows:false
			}
		},
		{
			breakpoint: 0,
			settings: {
				slidesToShow: 1,
			}
		},

		]
	});
	// help End


	// testimonal Start
	$('.testi-slider').slick({
		dots: false,
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		adaptiveHeight: true,
		prevArrow: '<div class="slick-prev slick-arrow"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="23" fill="#323A45" stroke="#323A45" stroke-width="2"/><path d="M31 24H17" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M24 31L17 24L24 17" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35.5" y="35.5" width="23" height="23" transform="rotate(-180 35.5 35.5)" stroke="#323A45"/></svg></div>',
		nextArrow: '<div class="slick-next slick-arrow"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="#323A45"/><path d="M17 24H31" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M24 17L31 24L24 31" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 1,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 1,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
			}
		},

		]
	});
	// testimonal End
	// testimonal 2 Start
	$('.testimonials-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		speed: 300,
		adaptiveHeight: true
	});
	// testimonal 2 End
		
	// Featured Talent Slider Start
	$('.featured-talent-slider').slick({
		dots: true,
		arrows: true,
		infinite: false,
		speed: 300, 
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '<div class="slick-prev slick-arrow"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.2188 9.75L4.28125 9.75" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.75 15.2188L4.28125 9.75L9.75 4.28125" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		nextArrow: '<div class="slick-next slick-arrow"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78125 9.75H15.7188" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.25 4.28125L15.7188 9.75L10.25 15.2188" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				dots:false,
				arrows:false,
				centerMode:true,
				centerPadding:"50px 0 0",
				infinite: true,	
				autoplay:true,
				autoplayspeed:2000,		
			}
		},
		]
	});
	// Featured Talent Slider End

	// Job Openings Start
	$('.job-openings-slider').slick({
		arrows: true,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: false,	
		speed: 300,
	});
	// Job Openings End

	// Job Openings Start
	$('.image-text-slider-sec-inner').each(function (index, sliderWrap) {
        var $slider = $(sliderWrap).find('.image-text-slider');
        var $next = $(sliderWrap).find('.image-text-slider-next');
        var $prev = $(sliderWrap).find('.image-text-slider-prev');
        $slider.slick({ 
            dots: true,
			autoplay: true,
			infinite: true,
			speed: 300,
			adaptiveHeight: true,
			fade: true,
			speed: 500,
            nextArrow: $next,
            prevArrow: $prev
        });
    });
	// Job Openings End


	$('.counter-count').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
		  
		  //chnage count up speed here
			duration: 4000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});	

	
	$(".yamm .dropdown").hover(function(event) {
		var isHovered = $(this).is(":hover");
		if (isHovered) {
		  $(this).children(".dropdown-menu").addClass("show");
		} else {
		  $(this).children(".dropdown-menu").removeClass("show");
		}
		event.preventDefault();
	  });


	$(".play").on("click", function(event){
		$(this).parents(".videobox").addClass("play");
		event.preventDefault();
		var videoSrc = $("#video_url").attr( "href" );
		$("#video").attr('src',videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
	});

	$(".closed").on("click", function(){
		$(this).parents(".videobox").removeClass("play")
	});


	
	var $videoSrc;  
	$('.video-btn').click(function() {
		$videoSrc = $(this).data( "src" );
	});	
	
	// when the modal is opened autoplay it  
	$('#myModal').on('shown.bs.modal', function (e) {
		
	// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
	$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
	})
	
	// stop playing the youtube video when I close the modal
	$('#myModal').on('hide.bs.modal', function (e) {
		// a poor man's stop video
		$("#video").attr('src',$videoSrc); 
	}) 

	$.scrollIt({
		upKey: 38,             // key code to navigate to the next section
		downKey: 40,           // key code to navigate to the previous section
		easing: 'linear',      // the easing function for animation
		scrollTime: 600,       // how long (in ms) the animation takes
		activeClass: 'active', // class given to the active nav element
		onPageChange: null,    // function(pageIndex) that is called when page is changed
		topOffset: -150        // offste (in px) for fixed top navigation
	});

	// Navigation Toggle Start
	$(".award-btn").click(function (e) {
		$(this).next(".hover-block").addClass("open");
		e.preventDefault();
	});

	$(".award-great-btn .award-hover-btn").click(function (e) {
		$(this).parent().parent().removeClass("open");
		e.preventDefault();
	});
	// Navigation Toggle End


		
	$(".hover-block .award-scroll").mCustomScrollbar({
		axis: "y",
		autoHideScrollbar: false,
		mouseWheelPixels: 80,
		scrollInertia: 10,
		setLeft: 0
	});

	$(".shedule-box").mCustomScrollbar({
		axis: "y",
		autoHideScrollbar: false,
		mouseWheelPixels: 80,
		scrollInertia: 10,
		setLeft: 0
	});


	$('.get-slider').slick({
		dots: false,
		arrows: true,
		infinite: false,
		autoplay: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		slidesToShow: 1,
		centerMode: false,
		variableWidth: true,
		outerEdgeLimit: true,
		prevArrow: '<div class="slick-prev slick-arrow"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="23" fill="#323A45" stroke="#323A45" stroke-width="2"/><path d="M31 24H17" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M24 31L17 24L24 17" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35.5" y="35.5" width="23" height="23" transform="rotate(-180 35.5 35.5)" stroke="#323A45"/></svg></div>',
		nextArrow: '<div class="slick-next slick-arrow"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="#323A45"/><path d="M17 24H31" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M24 17L31 24L24 31" stroke="#F5F7FA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',

		responsive: [
			{
			  breakpoint: 639,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				variableWidth: false,
			  }
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		  ]
	});

	// OFI Browser


	// Resource Slider
	$('.mb_resource-slider').slick({
		slidesToShow: 1,
		centerPadding: '30px',
		centerMode: true,
		variableWidth: true,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		infinite: false,
	});

	// Award Slider
	$('.mb_award-slider').slick({
		slidesToShow: 1,
		centerPadding: '20px',
		centerMode: true,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		infinite: false,
	});

	// Team Slider
	$('.team-mobile-slider').slick({
		slidesToShow: 1,
		centerPadding: '20px',
		centerMode: true,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		infinite: false,
	});

	
	// Tab Slider Start
	$('.tab-slider-sec .slider-for').slick({
		slidesToShow: 1,
		centerPadding: '0px',
		centerMode: true,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		infinite: true,
		asNavFor: '.slider-nav',
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 1,
				centerPadding: '20px',
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				centerPadding: '10px',
				slidesToScroll: 1
			}
		},
		]

		
	});

	$('.tab-slider-sec .slider-nav').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		infinite: false,
		variableWidth: true,
		focusOnSelect: true
	});

	$('a[data-slide]').click(function(e) {
		e.preventDefault();
		var slideno = $(this).data('slide');
		$('.tab-slider-sec .slider-nav').slick('slickGoTo', slideno - 1);
	});
	$('.tab-slider-sec .slider-for').on('afterChange', function(event, slick, currentSlide){   
		$('.action-inner .item-nav-slide').removeClass('active');
		$('.action-inner .item-nav-slide[data-slide=' + (currentSlide + 1) + ']').addClass('active');
	});
	// Tab Slider End 
	// Header Sticky
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();
		if (scroll >= 100) {
			$(".header").addClass("header-sticky");
			$(".new-podcast-available").addClass("hide-podcast");
		} else {
			$(".header").removeClass("header-sticky");
			$(".new-podcast-available").removeClass("hide-podcast");
		}
	});
	
	$(window).resize(function(){
		var scroll = $(window).scrollTop();
		if (scroll >= 100) {
			$(".header").addClass("header-sticky");
		} else {
			$(".header").removeClass("header-sticky");
		}
	});
	// Header Sticky
	
	objectFitImages();

	/* Accordion Start */	
	$(window).resize(function() {
		var $theWindowSize = $(this).width();
		if($theWindowSize < 767) {
			jQuery('.up-down-card-list-block .main-title').click(function(e) {
				jQuery('.up-down-card-list-block .list-dots-medium').slideUp();
				jQuery('.active').not(this).removeClass('active');
				if (jQuery(this).hasClass('active')) {
				  jQuery(this).removeClass('active');
				jQuery(this).next('.up-down-card-list-block .list-dots-medium').slideUp();
				}else{
					jQuery(this).addClass('active');
					jQuery(this).next('.up-down-card-list-block .list-dots-medium').slideDown();
				}
			});
		} else {
			jQuery('.up-down-card-list-block .main-title').click(function(e) {
				return false;
			});
		}
	});
		


	


	// Accordion Start
// 	jQuery('.accordion-title').click(function(e) {
// 		jQuery('.accordion-caps').slideUp();
// 		jQuery('.active').not(this).removeClass('active');
// 		if (jQuery(this).hasClass('active')) {
// 			jQuery(this).removeClass('active');
// 		jQuery(this).next('.accordion-caps').slideUp();
// 		}else{
// 			jQuery(this).addClass('active');
// 			jQuery(this).next('.accordion-caps').slideDown();
// 		}
// 	});
jQuery(document).ready(function ($) {
  $('.accordion-title').on('click', function (e) {
    e.preventDefault();
    e.stopPropagation();

    var $this = $(this);
    var $currentContent = $this.next('.accordion-caps');

    if ($this.hasClass('active')) {
      $this.removeClass('active');
      $currentContent.stop(true, true).slideUp();
    } else {
      $('.accordion-title.active').removeClass('active');
      $('.accordion-caps').not($currentContent).stop(true, true).slideUp();

      $this.addClass('active');
      $currentContent.stop(true, true).slideDown();
    }
  });
});

	// Sccordion End
	checkPosition();

	$('.testi-content-read-more-less-cta a').click(function() {
    
		$(this).toggleClass('testi-content-read-more-less-cta-show');
		$(this).closest('.testi-content-body').find('.testi-content-more').slideToggle();
		
		if ($(this).hasClass('testi-content-read-more-less-cta-show')) {      
		   $(this).find('span.testi-content-read-more-less-cta-title').text('Read Less');
		} else {
		  $(this).find('span.testi-content-read-more-less-cta-title').text('Read More');
		}    

	});

});
// Core Expertise Start
function checkPosition() {
	if (window.matchMedia('(max-width: 767px)').matches) {
		jQuery('.core-expertise-cover-inner .row').slick({
			dots: false,
			arrows: false,
			infinite: false,
			autoplay: false,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			variableWidth: true,
		});
	} else {
		//...
	}
}
// Core Expertise End







$(window).on("load",function(){
	resize();
});
$(window).on("resize",function(){
	resize();
	checkPosition();
});


function resize() {
	var w = (window.innerWidth - $(".container").width()) /2;
	$(".devlop-slider").css("margin-left", (w - 10 ));
	$(".devlop-slider .slick-next").css("right", (w - 10 ));
	$(".devlop-slider .slick-prev").css("right", (w + 40 ));
}



/* Facts Counter - Homepage */
/* 
var a = 0;
$(window).scroll(function() {
    if ($('#counter').length > 0) {
        var oTop = $('#counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-value').each(function() {
                $(this).prop('Counter',0).animate({
					Counter: $(this).text()
				}, {
					duration: 4000,
					easing: 'swing',
					step: function (now) {
						// $(this).text(Math.ceil(now));
					   $(this).text(Math.ceil(now).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
					}
				});
            });
            a = 1
        }
    }
});

*/
/* New Banner Section - Container Padding */

width_counter_right_align = function(){
  var win_width = jQuery(window).width();
  var con_width = jQuery('.container').width();
  var count_width = win_width - con_width;
  var count_2 = parseInt(count_width/2) - parseInt(15);
  jQuery('.banner_image_right_align').css('padding-left',count_2 + 15);
  jQuery('.image_position_right').css('padding-left',count_2 + 15);
  jQuery('.image_position_left').css('padding-right',count_2 + 15);
}

width_counter_left_align = function(){
  var win_width_v2 = jQuery(window).width();
  var con_width_v2 = jQuery('.container').width();
  var count_width_v2 = win_width_v2 - con_width_v2;
  var count_2_v2 = parseInt(count_width_v2/2) - parseInt(15);
  jQuery('.banner_image_left_align').css('padding-right',count_2_v2 + 15);
}


jQuery(window).on('load resize',function() {
  width_counter_right_align();
  width_counter_left_align();
});


/* Custom Mp3 */

var $ = jQuery;
$(document).ready(function(){
	rebind_audio_players();
});

function rebind_audio_players(){
	var $ = jQuery;
	var audio1 = [];
	var timeline1 = [];
	var playBtn1 = [];
	var volumeSlider1 = [];
	var volumeEl = [];
	var progressBar = [];
	var audio_players = $("[id^='audio_']");
	audio_players.each(function(ind, ele){
		var audio_src = $(ele).attr("data-src");
		audio1[ind] = new Audio(audio_src);
		audio1[ind].addEventListener(
			"loadedmetadata",
			() => {
				$(ele).find(".time .length").html(getTimeCodeFromNum(
					audio1[ind].duration
				));
				audio1[ind].volume = .75;
			},
			false
		);

		//click on timeline to skip around
		timeline1[ind] = $(ele).find(".timeline");
		timeline1[ind].on("click", function(e) {
			console.log(timeline1[ind]);
			var timelineWidth1 = window.getComputedStyle(timeline1[ind][0]).width;
			var timeToSeek1 = e.offsetX / parseInt(timelineWidth1) * audio1[ind].duration;
			audio1[ind].currentTime = timeToSeek1;
		});

		//click volume slider to change volume
		volumeSlider1[ind] = $(ele).find(".volume-slider");
		volumeSlider1[ind].on('click', function(e) {
			var sliderWidth1 = window.getComputedStyle(volumeSlider1[ind][0]).width;
			var newVolume1 = e.offsetX / parseInt(sliderWidth1);
			audio1[ind].volume = newVolume1;
			$(ele).find(".controls .volume-percentage").css("width", newVolume01 * 100 + '%');
		});

		//check audio percentage and update time accordingly
		setInterval(() => {
			progressBar[ind] = $(ele).find(".progress");
			progressBar[ind].css("width", audio1[ind].currentTime / audio1[ind].duration * 100 + "%");
			$(ele).find(".time .current").html(getTimeCodeFromNum(
				audio1[ind].currentTime
			));
		}, 500);

		//toggle between playing and pausing on button click
		playBtn1[ind] = $(ele).find(".toggle-play");
		$(playBtn1[ind]).on("click", function() {
				console.log("playbutton");
				if (audio1[ind].paused) {
					playBtn1[ind].removeClass("play-custom");
					playBtn1[ind].addClass("pause-custom");
					audio1[ind].play();
				} else {
					playBtn1[ind].removeClass("pause-custom");
					playBtn1[ind].addClass("play-custom");
					audio1[ind].pause();
				}
			}
		);

		$(ele).find(".volume-button").on("click", function(){
			volumeEl[ind] = $(ele).find(".volume-container .volume");
			audio1[ind].muted = !audio1[ind].muted;
			if (audio1[ind].muted) {
				volumeEl[ind].removeClass("icono-volumeMedium");
				volumeEl[ind].addClass("icono-volumeMute");
			} else {
				volumeEl[ind].addClass("icono-volumeMedium");
				volumeEl[ind].removeClass("icono-volumeMute");
			}
		});
		

	});
	
}

function getTimeCodeFromNum(num) {
let seconds1 = parseInt(num);
let minutes1 = parseInt(seconds1 / 60);
seconds1 -= minutes1 * 60;
const hours1 = parseInt(minutes1 / 60);
minutes1 -= hours1 * 60;

if (hours1 === 0) return `${minutes1}:${String(seconds1 % 60).padStart(2, 0)}`;
return `${String(hours1).padStart(2, 0)}:${minutes1}:${String(
	seconds1 % 60
).padStart(2, 0)}`;
}


if(window.location.hash) {
var hash = window.location.hash;

setTimeout(function(){
     jQuery('html,body').animate({
        scrollTop: $(window.location.hash).offset().top-$("header").outerHeight() }, 500);
     },500);
}



$('.trusted-by .row').slick({
  slidesToScroll: 1,
  slidesToShow: 6,
  arrows: false,
  dots: false,
  infinite: true,
  speed: 5000,
  autoplay: true,
  autoplaySpeed: 0,
  cssEase: 'linear',

  responsive: [
    {
      breakpoint: 1024, // tablet and below
      settings: {
        slidesToShow: 4,
      }
    },
    {
      breakpoint: 768, // mobile
      settings: {
        slidesToShow: 2,
      }
    }
  ]
});