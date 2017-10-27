/**
 * This script adds the jquery effects to the Altitude Pro Theme.
 *
 * @package Altitude\JS
 * @author StudioPress
 * @license GPL-2.0+
 */

jQuery(function( $ ){

	if( $( document ).scrollTop() > 0 ){
		$( '.site-header' ).addClass( 'dark' );
	}

	// Add opacity class to site header.
	$( document ).on('scroll', function(){

		if ( $( document ).scrollTop() > 0 ){
			$( '.site-header' ).addClass( 'dark' );

		} else {
			$( '.site-header' ).removeClass( 'dark' );
		}

	});

});

jQuery(function( $ ){
  
  var container = $(this);

  container.find('header').click(function() {
    if($(this).siblings('section').css('display') == 'block'){
       container.find('section').slideUp(150);
    } else {
      container.find('section').slideUp(150);
       $(this).siblings('section').slideDown(150);
    }
  });
});

	// $('#accord1').accordian();



