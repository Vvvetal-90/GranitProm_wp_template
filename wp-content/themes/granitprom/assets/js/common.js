$(function() {
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
	//-------------------------------PopUp----------------------
	var overlay = $('#overlay'); // #overlay must be one per page
  var open_modal = $('.open_modal'); //class for modal links
  var close = $('.modal_close, #overlay'); // modal close
  var modal = $('.modal_div'); // all hidden modal windows

   open_modal.click( function(event){ // wait for click open_modal
       event.preventDefault(); // dissalow standart link event
       var div = $(this).attr('href'); // take the line with the selector at the clicked link
       overlay.fadeIn(400, //show overlay
           function(){ // after the and of overlay showing
               $(div) // take the line with the selector and make of it an object jquery
                   .css('display', 'block') 
                   .animate({opacity: 1, top: '50%'}, 200); // slow animate show
       });
   });

   close.click( function(){ // wait for click
          modal // all modal
           .animate({opacity: 0, top: '45%'}, 200, // slow hidden
               function(){ 
                   $(this).css('display', 'none');
                   overlay.fadeOut(400); // hide substrate
               }
           );
   });
   //---close popUp by ESC button
   $(document).bind('keydown', function(e) { 
      if (e.which == 27) {
        modal // all modal
         .animate({opacity: 0, top: '45%'}, 200, // slow hidden
             function(){ 
                 $(this).css('display', 'none');
                 overlay.fadeOut(400); // hide substrate
             }
         );
      }
  }); 
  //End PopUp
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
