$(document).ready(function(){

	$('#get-discount').click(function () {
		var childElement = $(this).children('#details');
        $.post($(childElement).data('api'),
            {
                uid: $(childElement).children('.user_id').data('uid'),
                product_id: $(childElement).children('.product_id').data('product_id')
            },
            function(data, status){
        		$('#response_info').html(data.message);
            });
    });

	$('.owl-carousel').owlCarousel({
		loop:true,
		nav:true,
		margin: 25,
		responsive: {
			0:{
				items:1
			},
			320: {
				items:1
			},
			500:{
				items:1
			},	
			768:{
				items:1
	  		}
		},
		dots:false
	});
});




$(document).ready(function() {		
 	wow = new WOW(
	      {
	      boxClass:     'wow',      // default
	      animateClass: 'animated', // default
	      offset:       0,          // default
	      mobile:       true,       // default
	      live:         true        // default
	    }
    )
    wow.init();
});

// $(".navbar-nav>li").click(function(){

// 	if($(this).children('ul').is(":visible")) {
// 		$(this).children('ul').slideUp(200);
// 	} else {
// 		$('.navbar-nav>li>ul').slideUp(200);
// 		$(this).children('ul').slideDown(200);
// 	}
	
// });

$(".navbar-nav>li").click(function(){

	$(this).children('ul').slideToggle(300);

	$(this).siblings().children().next().slideUp(300);
	
});

$('.details-carousel').owlCarousel({
    items: 1,
    nav: false, // Show next and prev buttons
    loop: false,
    dotsData: true
});

// var spanText = $('.search-left ul li:first-child').text();
// $('.search-left .current-value').text(spanText);

$('.search-sort > div .current-value').click(function (e) {
	$(this).next().slideToggle(300);
    e.stopPropagation();
});

$('.search-sort > div ul li').click(function () {
    var forCurrentText = $(this).text();
    $('.search-sort > div .current-value').empty();
    $('.search-sort > div .current-value').text(forCurrentText);
    $('.search-sort > div ul').slideUp(300);
});

$(document).click(function(e) {
    if (!$(e.target).is('.login-panel, .login-panel *')) {
        $(".search-sort > div ul").slideUp();
    }
});

