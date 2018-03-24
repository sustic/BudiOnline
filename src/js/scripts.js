( function( root, $, undefined ) {
	'use strict';

	$( function() {
		$( window ).scroll( function() {
			var ScrollTop = parseInt( $( window ).scrollTop() );

			if ( 25 < ScrollTop ) {
				if ( $( '.header-scroll-handler' ).hasClass( 'scrolled-nav' ) ) {

				} else {
					$( '.header-scroll-handler' ).addClass( 'scrolled-nav' );
				}

				//console.log("iznad 50px;");
			} else {
				if ( $( '.header-scroll-handler' ).hasClass( 'scrolled-nav' ) ) {
					$( '.header-scroll-handler' ).removeClass( 'scrolled-nav' );

				} else {

				}

				//console.log("ispod 50px;");
			}
		});


		// DOM ready, take it away
		//var m = new Marka( '#menu_icon' );
		//m.set( 'bars' ).size( 40 );

		// Slick example
		$( document ).ready( function() {
			$( '.your-class' ).slick();
		});
	});
} ( this, jQuery ) );
