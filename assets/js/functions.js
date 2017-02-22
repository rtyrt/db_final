
/* Background Images
-------------------------------------------------------------------*/
var  pageTopImage = jQuery('#page-top').data('background-image');
var  aboutImage = jQuery('#about').data('background-image');
var  readImage = jQuery('#read').data('background-image');
var  contactImage = jQuery('#contact').data('background-image');
var  insertImage = jQuery('#insert').data('background-image');
var  updateImage = jQuery('#update').data('background-image');
var  deleteImage = jQuery('#delete').data('background-image');
var  databaseImage = jQuery('#database').data('background-image');



if (pageTopImage) {  jQuery('#page-top').css({ 'background-image':'url(' + pageTopImage + ')' }); };
if (aboutImage) {  jQuery('#about').css({ 'background-image':'url(' + aboutImage + ')' }); };
if (readImage) {  jQuery('#read').css({ 'background-image':'url(' + readImage + ')' }); };
if (contactImage) {  jQuery('#contact').css({ 'background-image':'url(' + contactImage + ')' }); };
if (insertImage) {  jQuery('#insert').css({ 'background-image':'url(' + insertImage + ')' }); };
if (updateImage) {  jQuery('#update').css({ 'background-image':'url(' + updateImage + ')' }); };
if (deleteImage) {  jQuery('#delete').css({ 'background-image':'url(' + deleteImage + ')' }); };
if (databaseImage) {  jQuery('#database').css({ 'background-image':'url(' + databaseImage + ')' }); };


/* Background Images End
-------------------------------------------------------------------*/

/* Document Ready function
-------------------------------------------------------------------*/
jQuery(document).ready(function($) {
	"use strict";


    /* Window Height Resize
    -------------------------------------------------------------------*/
    var windowheight = jQuery(window).height();
    if(windowheight > 650)
    {
         $('.pattern').removeClass('height-resize');
    }
    /* Window Height Resize End
    -------------------------------------------------------------------*/
    
	/* Main Menu   
	-------------------------------------------------------------------*/
	$('#main-menu #headernavigation').onePageNav({
		currentClass: 'active',
		changeHash: false,
		scrollSpeed: 750,
		scrollThreshold: 0.5,
		scrollOffset: 0,
		filter: '',
		easing: 'swing'
	});  

	/* Main Menu End  
	-------------------------------------------------------------------*/


	/* Time Countdown 
	-------------------------------------------------------------------*/
	$('#time_countdown').countDown({
        
        // targetDate: {
        //     'day': 30,
        //     'month': 9,
        //     'year': 2015,
        //     'hour': 0,
        //     'min': 0,
        //     'sec': 0
        // },
        // omitWeeks: true

         targetOffset: {
            'day':      0,
            'month':    0,
            'year':     1,
            'hour':     0,
            'min':      0,
            'sec':      3
		},
		omitWeeks: true

	    });


	/* Next Section   
	-------------------------------------------------------------------*/
	  $('.next-section .go-to-about').click(function() {
    	$('html,body').animate({scrollTop:$('#about').offset().top}, 1000);
  	});

  	$('.next-section .go-to-read').click(function() {
    	$('html,body').animate({scrollTop:$('#read').offset().top}, 1000);
  	});

  	$('.next-section .go-to-contact').click(function() {
    	$('html,body').animate({scrollTop:$('#contact').offset().top}, 1000);
  	});

  	$('.next-section .go-to-page-top').click(function() {
    	$('html,body').animate({scrollTop:$('#page-top').offset().top}, 1000);
  	});


    $('.next-section .go-to-insert').click(function() {
      $('html,body').animate({scrollTop:$('#insert').offset().top}, 1000);
    });
    $('.next-section .go-to-update').click(function() {
      $('html,body').animate({scrollTop:$('#update').offset().top}, 1000);
    });
    $('.next-section .go-to-delete').click(function() {
      $('html,body').animate({scrollTop:$('#delete').offset().top}, 1000);
    });
    $('.next-section .go-to-database').click(function() {
      $('html,body').animate({scrollTop:$('#database').offset().top}, 1000);
    });
  	/* Next Section End
	-------------------------------------------------------------------*/

});


/* Preloder 
-------------------------------------------------------------------*/
$(window).load(function () {    
    "use strict";
    $("#loader").fadeOut();
    $("#preloader").delay(250).fadeOut("fast");
});
 /* Preloder End
-------------------------------------------------------------------*/
   
