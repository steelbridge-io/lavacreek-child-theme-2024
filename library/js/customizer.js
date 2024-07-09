( function( $ ) {
"use strict";
	// Front Page Slider Image #1
	wp.customize( 'fp-topslider-one', function(value) {
		value.bind(function(to){
			var fpsliderone = $( '.orbit-image.orbit-image-one' );
			fpsliderone.attr( 'src', to );
		});
	});
  
   wp.customize( 'fp-topslider-one-caption', function( value ) {
    value.bind( function( to ) {
      $( '.orbit-caption.orbit-caption-one' ).text( to );
    } );
  } );

  // Front Page Slider Image #2
	wp.customize( 'fp-topslider-two', function(value) {
		value.bind(function(to){
			var fpsliderone = $( '.orbit-image.orbit-image-two' );
			fpsliderone.attr( 'src', to );
		});
	});
  
  wp.customize( 'fp-topslider-two-caption', function( value ) {
    value.bind( function( to ) {
      $( '.orbit-caption.orbit-caption-two' ).text( to );
    } );
  } );
  
  // Front Page Slider Image #3
	wp.customize( 'fp-topslider-three', function(value) {
		value.bind(function(to){
			var fpsliderone = $( '.orbit-image.orbit-image-three' );
			fpsliderone.attr( 'src', to );
		});
	});
  
   wp.customize( 'fp-topslider-three-caption', function( value ) {
    value.bind( function( to ) {
      $( '.orbit-caption.orbit-caption-three' ).text( to );
    } );
  } );
  
  // Front Page Slider Image #4
	wp.customize( 'fp-topslider-four', function(value) {
		value.bind(function(to){
			var fpsliderone = $( '.orbit-image.orbit-image-four' );
			fpsliderone.attr( 'src', to );
		});
	});
  
   wp.customize( 'fp-topslider-four-caption', function( value ) {
    value.bind( function( to ) {
      $( '.orbit-caption.orbit-caption-four' ).text( to );
    } );
  } );
  
  wp.customize( 'fp-slidertwo-one', function(value) {
    value.bind(function(to){
      $('li.orbit-item-1').css('background-image', 'url(' + to + ')');
    });
  });
  
  wp.customize( 'fp-slidertwo-two', function(value) {
    value.bind(function(to){
      $('li.orbit-item-2').css('background-image', 'url(' + to + ')');
    });
  });
  
  wp.customize( 'fp-slidertwo-three', function(value) {
    value.bind(function(to){
      $('li.orbit-item-3').css('background-image', 'url(' + to + ')');
    });
  });
  
  wp.customize( 'fp-slidertwo-four', function(value) {
    value.bind(function(to){
      $('li.orbit-item-4').css('background-image', 'url(' + to + ')');
    });
  });
  
  wp.customize( 'fp-topcard-img', function(value) {
    value.bind(function(to){
      $('.topcard.card .card-divider').css('background-image', 'url(' + to + ')');
    });
  });
  
  wp.customize( 'fp-topcard-cap', function( value ) {
    value.bind( function( to ) {
      $( '#topcardid' ).text( to );
    } );
  } );
  
   wp.customize( 'fp-bottomcard-img', function(value) {
    value.bind(function(to){
      $('.bottomcard.card .card-divider').css('background-image', 'url(' + to + ')');
    });
  });
  
  wp.customize( 'fp-bottomcard-cap', function( value ) {
    value.bind( function( to ) {
      $( '#bottomcardid' ).text( to );
    } );
  } );
  
  wp.customize( 'fp-topparallax-img', function( value ) {
    value.bind( function( to ) {
     	var fpparallaxtop = $( '#parallaxone.parallax-window' );
			fpparallaxtop.attr( 'data-image-src', to );
    });
  });
  
  wp.customize( 'fp-topparallax-cta', function( value ) {
    value.bind( function( to ) {
      $( '#parallaxone .parallax-text' ).text( to );
    } );
  } );
  
  wp.customize( 'fp-divider-content', function( value ) {
    value.bind( function( to ) {
      $( '#parallax-divider .cell' ).text( to );
    } );
  } );
  
   wp.customize( 'fp-bottomparallax-img', function( value ) {
    value.bind( function( to ) {
     	var fpparallaxtop = $( '.parallaxtwo.parallax-window' );
			fpparallaxtop.attr( 'data-image-src', to );
    });
  });
  
  wp.customize( 'fp-bottomparallax-cta', function( value ) {
    value.bind( function( to ) {
      $( '#parallaxtwo .parallax-text' ).text( to );
    } );
  } );

})(jQuery);






