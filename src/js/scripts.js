( function( root, $, undefined ) {
	'use strict';
	var m;
	$( document ).ready( function() {
		m = new Marka( '#menu_icon' );
		m.set( 'bars' ).size( 30 ).color( 'white' );
	});

	$( function() {
		$( window ).scroll( function() {
			var ScrollTop = parseInt( $( window ).scrollTop() );

			if ( 25 < ScrollTop ) {
				if ( $( '.header-scroll-handler' ).hasClass( 'scrolled-nav' ) ) {

				} else {
					$( '.header-scroll-handler' ).addClass( 'scrolled-nav' );
					m.color( 'black' );
				}

				//console.log("iznad 50px;");
			} else {
				if ( $( '.header-scroll-handler' ).hasClass( 'scrolled-nav' ) ) {
					$( '.header-scroll-handler' ).removeClass( 'scrolled-nav' );
					m.color( 'white' );

				} else {

				}

				//console.log("ispod 50px;");
			}
		});

		// Slick example
		$( document ).ready( function() {
			$( '.your-class' ).slick();
		});
	});
} ( this, jQuery ) );
