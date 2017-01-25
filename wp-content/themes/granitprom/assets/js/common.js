jQuery(document).ready(function($) {
	"use strict"
	//-------------------------- navbar main menu----------------
	$('#main-menu').on('click',function(e){
		e.preventDefault(); // dissalow standart link event
		$('.navbar').toggle('slow',function(){});
	});
	
	$( window ).resize(function() {
		if ($( window ).width()>768){
			$('.navbar').show();
		}
	});
	
  //--------------------Go to Top-----------------------
  $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
          $('.go-top').fadeIn();
      } else {
          $('.go-top').fadeOut();
      }
  });
  $("a[href='#gotop']").click(function() {
     $("html, body").animate({ scrollTop: 0 }, "slow");
     return false;
  });
  //End Go to Top
  //----------------------menu-item-has-children
/*	if ($( window ).width()>768){
		$(".nav-menu>.menu-item-has-children>a").append('<i class="fa fa-chevron-down" aria-hidden="true"></i>');
		$(".sub-menu .menu-item-has-children>a").append('<i class="fa fa-chevron-right" aria-hidden="true"></i>');
		$(".nav-menu>.menu-item-has-children").hover(
				function() {
					$('>.sub-menu', this ).slideDown(200);
			}, function(){
					$('>.sub-menu', this ).slideUp(200);
		});
		$(".sub-menu>.menu-item-has-children").hover(
				function() {
					$('>.sub-menu', this ).slideDown(400);
			}, function(){
					$('>.sub-menu', this ).slideUp(400);
		});
	}*/

});
