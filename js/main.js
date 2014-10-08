//main.js file

$(document).ready(function(){
    //navigation
	/*
    $('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
	*/
	var viewportHeight = $(window).height() - 40;
	$('.wrap').css("height", viewportHeight);

    //$('.show').hide();
    $('.hide-DMD a').on('click', function(){
       $('.show').slideToggle();
       $('.hide-DMD h3').addClass("dmd-plus");
    });

    //accordion
    $('.accordion .content').hide();
    $('.accordion h2:first, .ourCompany h2:first').addClass('active').next().slideDown('slow');
    $('.accordion h2').click(function() {
        if($(this).next().is(':hidden')) {
            $(this).closest('.accordion').find('h2').removeClass('active').next().slideUp('slow');
            $(this).toggleClass('active').next().slideDown('slow');
        }
    });




    /*$('.animThread').viewportChecker({
        classToAdd: 'visible animated wobble',
        offset: 200,
        repeat: true
        //callbackFunction: function(elem, action){} // Callback to do after a class was added to an element. Action will return "add" or "remove", depending if the class was added or removed
    });*/
    //flaux animate
    $('.animThread').addClass('animated-custom wobble');


});

var tags = false;
$(window).scroll(function(){
  var scroll = $(window).scrollTop();
  //console.log(scroll); 
   
   //Medical cost savings money counter	
	if($('#tags').position().top < 8 && tags == true){
		tags = false;
		$('#tags .tag1 h3').html('<sup>$</sup>'+ 0);
		$('#tags .tag2 h3').html('<sup>$</sup>'+ 0);
		$('#tags .tag3 h3').html('<sup>$</sup>'+ 0);
		$('#tags .tag4 h3').html('<sup>$</sup>'+ 0);
		
	}
	if($('#tags').position().top == 12 && tags == false){
		tags = true; var st = 0;
		var counter = setInterval(function(){myTimer()}, 10);
		function myTimer() {
			st+=50;
			$('#tags .tag1 h3').html('<sup>$</sup>'+ st);
			$('#tags .tag2 h3').html('<sup>$</sup>'+ st);
			$('#tags .tag3 h3').html('<sup>$</sup>'+ st);
			$('#tags .tag4 h3').html('<sup>$</sup>'+ st);
			if(st>1080) $('#tags .tag2 h3').html('<sup>$</sup>1080');
			if(st>1477) $('#tags .tag4 h3').html('<sup>$</sup>1477');
			if(st>2840) $('#tags .tag3 h3').html('<sup>$</sup>2840');
			if(st == 5600){
				$('#tags .tag1 h3').html('<sup>$</sup>5681');
				stopCounter();
			}
		}
		function stopCounter() {
			clearInterval(counter);
			//effectedPer = false;
		}
	}
   
});

$(window).resize(function() {
	var viewportHeight = $(window).height() - 40;
	$('.wrap').css("height", viewportHeight);
});