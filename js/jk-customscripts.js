

/*INIT FUNCTIONS */
$(function() {
	var myHeight = $(window).height();
	var myWidth = $(window).width();
	var stageWidth;
	$("html:not(:animated), body:not(:animated)").animate({scrollLeft: 0}, 0);
	setDimensions();

	//SET WINDOW DIMENSIONS - WIDTH / HEIGHT
	function setDimensions(){
		myHeight = $(window).height();
		myWidth = $(window).width();

		//SET SECTION HEIGHT TO STAGE HEIGHT
		$('.stage section').height(myHeight);
		$('.img-divider').height(myHeight);
		$('#a-look-back').height(myHeight-45);
		$('#mission').height(myHeight-45);
		$('#community').height(myHeight-45);
		$('#company').height(myHeight-45);
		$('.exec-summary').height(myHeight-45);
		$('#financials').height(myHeight-45);

		stageWidth = Math.round(myHeight*37);

		$('.img-divider').width(Math.round(myHeight*0.35));

	};

	// ON RESIZE, RESET DIMENSIONS
	$(window).resize(function() {
		setDimensions();
	});

	//jQuery Mouse wheel
	$("body").mousewheel(function(event, delta) {
			event.preventDefault();
			document.documentElement.scrollLeft -= (delta * 50);
			this.scrollLeft -= (delta * 50);
		}); 

	window.onscroll = function (event) {}



	//NEXT AND PREVIOUS BUTTON FUNCTION
	$( ".next" ).click(function() {		
		var distance = myWidth/1.75;
		$("html:not(:animated), body:not(:animated)").animate({scrollLeft: "+="+distance, easing: 'easeIn'}, 900);

		//SHOW BOTTOM NAVIGATION
		if($(window).scrollLeft() <= 0) {
            $( ".nav2 .bottom-nav" ).show();
        }
	});

	$( ".prev" ).click(function() {
		var distance = myWidth/1.75;
		$("html:not(:animated), body:not(:animated)").animate({scrollLeft: "-="+distance, easing: 'easeIn'}, 900);
		
		//HIDE BOTTOM NAVIGATION
		if($(window).scrollLeft() <= distance) {
            $( ".nav2 .bottom-nav" ).hide();
        }
	});

	$('.home_wrapper').waypoint(function() {
		$( ".nav2 .bottom-nav" ).toggle();
		$( ".scroll-instruction" ).hide();
	},
		{ offset: '-50%', horizontal:true, triggerOnce: false
	});

	//Nav highlight & upper-tab functions
	$('.protecting p').waypoint(function() {
		$('.show-nav').removeClass('show-nav');
		$('.nav-lookback').addClass('show-nav'); },
		{ offset: '50%', horizontal:true, triggerOnce: false 
	});

	$('.summary-txt h2').waypoint(function() {
		$('.show-nav').removeClass('show-nav');
		$('.nav-execsummary').addClass('show-nav'); },
		{ offset: '50%', horizontal:true, triggerOnce: false 
	});
	
	$('.miss-headings h2').waypoint(function() {
		$('.show-nav').removeClass('show-nav');
		$('.nav-ourmission').addClass('show-nav'); },
		{ offset: '50%', horizontal:true, triggerOnce: false 
	});
	
	$('.blocquotes.engagement').waypoint(function() {
		$('.show-nav').removeClass('show-nav');
		$('.nav-ourmission').addClass('show-nav'); },
		{ offset: '50%', horizontal:true, triggerOnce: false 
	});

	$('.going-beyond h2').waypoint(function() {
		$('.show-nav').removeClass('show-nav');
		$('.nav-ourcommunity').addClass('show-nav'); },
		{ offset: '50%', horizontal:true, triggerOnce: false 
	});
	
	$('.socialmedia-wrapper').waypoint(function() {
		$('.show-nav').removeClass('show-nav');
		$('.nav-ourcommunity').addClass('show-nav'); },
		{ offset: '20%', horizontal:true, triggerOnce: false 
	});
	
	$('.middle-col h1').waypoint(function() {
		$('.show-nav').removeClass('show-nav');
		$('.nav-financials').addClass('show-nav'); },
		{ offset: '30%', horizontal:true, triggerOnce: false 
	});
	
	$('#company .right-column h1').waypoint(function() {
		$('.show-nav').removeClass('show-nav');
		$('.nav-company').addClass('show-nav'); },
		{ offset: '80%', horizontal:true, triggerOnce: false 
	});

	//FIXED MISSION TABS
	$('.bquo1').waypoint(function() {
	    $('.fix-tab').removeClass('fix-tab');
		$('.tab1').addClass('fix-tab'); },
		{ offset: '10%', horizontal:true, triggerOnce: false 
	});

	$('.direction').waypoint(function() {
	    $('.fix-tab').removeClass('fix-tab');
		$('.tab2').addClass('fix-tab'); },
		{ offset: '50%', horizontal:true, triggerOnce: false 
	});
	
	$('.uc-wellness hgroup').waypoint(function() {
	    $('.fix-tab').removeClass('fix-tab');
		$('.tab3').addClass('fix-tab'); },
		{ offset: '50%', horizontal:true, triggerOnce: false 
	});

	//remove fixed tab
	$('.phone-woman-img').waypoint(function() {
	    $('.fix-tab').removeClass('fix-tab');
	},
		{ offset: '75%', horizontal:true, triggerOnce: false 
	});

	$('.bquo1').waypoint(function() {
	    $('.fix-tab').removeClass('fix-tab');
	    $('.tab1').removeClass('fix-tab');
	},	
		{ offset: '50%', horizontal:true, triggerOnce: false 
	});
	
	//NAVIGATION FUNCTIONS
	$( ".nav-home" ).click(function() {	
		$("html:not(:animated), body:not(:animated)").animate({scrollLeft: 0}, 500);
	});

	$( ".nav-lookback" ).click(function() {	
		$("html:not(:animated), body:not(:animated)").animate({scrollLeft: 905}, 500);
	});

	$( ".nav-execsummary" ).click(function() {	
		$("html:not(:animated), body:not(:animated)").animate({scrollLeft: 3120}, 500);
	});

	$( ".nav-ourmission" ).click(function() {	
		$("html:not(:animated), body:not(:animated)").animate({scrollLeft: 5060}, 500);
	});

	$( ".nav-direction" ).click(function() {	
		// $('#direction').ScrollTo();
		$("html:not(:animated), body:not(:animated)").animate({scrollLeft: 7220}, 500);
	});

	$( ".nav-program" ).click(function() {	
		$("html:not(:animated), body:not(:animated)").animate({scrollLeft: 13795}, 500);
	});

	$( ".nav-ourcommunity" ).click(function() {	
		$("html:not(:animated), body:not(:animated)").animate({scrollLeft: 15300}, 500);
	});

	$( ".nav-financials" ).click(function() {
		$("html:not(:animated), body:not(:animated)").animate({scrollLeft: 19550}, 500);	
	});

	$( ".nav-company" ).click(function() {	
		$("html:not(:animated), body:not(:animated)").animate({scrollLeft: 21600}, 500);
	});

	//WAYPOINTS
	$('.wrap p').addClass('animated');
	$('.ponyies').addClass('animated');

	//SECTION 1 
	$('.dental-integration').waypoint(function() {
		$('.dental-integration').addClass('bounceIn'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.dentist').waypoint(function() {
		$('.dentist').addClass('fadeInUp'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	//SECTION 2
	$('.study-material h2').waypoint(function() {
		$('.study-material h2').addClass('fadeInRight'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.excellence .inner-right').waypoint(function() {
		$('.excellence .inner-right').addClass('fadeInUp'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.summary-txt h2').waypoint(function() {
		$('.summary-txt h2').addClass('fadeInLeft'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});


	//SECTION 3
	$('.miss-headings h2').waypoint(function() {
		$('.miss-headings h2').addClass('fadeInLeft'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.bquo1').waypoint(function() {
		$('.bquo1').addClass('bounceIn'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.CAE').waypoint(function() {
		$('.CAE').addClass('bounceIn'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.goodNews h2').waypoint(function() {
		$('.goodNews h2').addClass('fadeInLeft'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});


	// SECTION 3 TOOTH GRAPHICS
	$('.oral-wellness hgroup h2').waypoint(function() {
		$('.oral-wellness hgroup h2').addClass('fadeInLeft'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.maxp-txt').waypoint(function() {
		$('.maxp-txt').addClass('fadeInUp'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.per-wrap').waypoint(function() {
		$('.per-wrap').addClass('fadeInDown'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.chronic-wrap').waypoint(function() {
		$('.chronic-wrap').addClass('fadeInUp'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.per-wrap2').waypoint(function() {
		$('.per-wrap2').addClass('fadeInDown'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.gum-disease').waypoint(function() {
		$('.gum-disease').addClass('fadeInUp'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});


	//SECTION 3 ORAL CARE
	$('.oral-wellness .footer-txt').waypoint(function() {
		$('.oral-wellness .footer-txt').addClass('fadeInUp'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	//SECTION 3 ARROWS
	$('.stroke-arrow').waypoint(function() {
		$('.stroke-arrow').addClass('fadeInDown'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.heart-arrow').waypoint(function() {
		$('.heart-arrow').addClass('fadeInDown'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.needle-arrow').waypoint(function() {
		$('.needle-arrow').addClass('fadeInDown'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	//SECTION3 PROGRAM
	$('.bquo2').waypoint(function() {
		$('.bquo2').addClass('bounceIn'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.engagement').waypoint(function() {
		$('.engagement').addClass('bounceIn'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	//section 4 community
	$('.going-beyond h2').waypoint(function() {
		$('.going-beyond h2').addClass('fadeInLeft'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.amyShearer').waypoint(function() {
		$('.amyShearer').addClass('bounceIn'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	//SECTION 5 FINANCIALS
	$('.middle-col h1').waypoint(function() {
		$('.middle-col h1').addClass('fadeInLeft'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.arrow-animation').waypoint(function() {
		$('.arrow-animation').addClass('fadeInUp'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	//copy blocks
	$('.protecting p').waypoint(function() {
		$('.protecting p').addClass('fadeInLeft'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('.study-material p').waypoint(function() {
		$('.study-material p').addClass('fadeInLeft');
		$('.studyDocs a').addClass('fadeIn'); 
	},
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('.excellence p').waypoint(function() {
		$('.excellence p').addClass('fadeInLeft'); 
		$('.excellence-pdf-box a').addClass('fadeInLeft');
	},
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('.left-summary-txt p').waypoint(function() {
		$('.left-summary-txt p').addClass('fadeInLeft'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});


	$('.right-summary-txt p').waypoint(function() {
		$('.right-summary-txt p').addClass('fadeInLeft'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('#mission .content p').waypoint(function() {
		$('#mission .content p').addClass('fadeInLeft'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('.goodNews p').waypoint(function() {
		$('.goodNews p').addClass('fadeInLeft'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('.leader-txt p').waypoint(function() {
		$('.leader-txt p').addClass('fadeInLeft'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('.uc-wellness hgroup').waypoint(function() {
		$('.uc-wellness hgroup').addClass('fadeInRight'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.innovative-smile p').waypoint(function() {
		$('.innovative-smile p').addClass('fadeInLeft'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('.uc-img').waypoint(function() {
		$('.uc-img').addClass('fadeInUp'); },
		{ offset: '70%', horizontal:true, triggerOnce: true 
	});

	$('.content-com p').waypoint(function() {
		$('.content-com p').addClass('fadeInLeft'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('.content-com .com h2').waypoint(function() {
		$('.content-com .com h2').addClass('fadeInLeft'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('.app p').waypoint(function() {
		$('.app p').addClass('fadeInLeft'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('.kids-app p').waypoint(function() {
		$('.kids-app p').addClass('fadeInLeft'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('.ponyies').waypoint(function() {
		$('.ponyies').addClass('fadeIn'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('.middle-col-content-left p, .middle-col-content-right p').waypoint(function() {
		$('.middle-col-content-left p, .middle-col-content-right p').addClass('fadeInLeft'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});

	$('').waypoint(function() {
		$('').addClass('fadeInLeft'); },
		{ offset: '90%', horizontal:true, triggerOnce: true 
	});
	

	/*2ND NAV */
	$( ".menu a" ).click(function() {
		$('.show-nav').removeClass('show-nav');
		$(this).addClass('show-nav');
	});

});