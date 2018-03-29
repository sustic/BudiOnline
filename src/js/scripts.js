( function( root, $, undefined ) {
	'use strict';
	var m;
	var izbornik = 0;
	$( document ).ready( function() {
		m = new Marka( '#menu_icon' );
		m.set( 'bars' ).size( 30 ).color( 'white' );
		$( '#menu_icon' ).click( function() {
			switch ( izbornik ) {
				case 0:
					izbornik = 1;
					m.set( 'times' );
					$( '.header' ).addClass( 'mobile-nav-active' );
					break;
				case 1:
					izbornik = 0;
					m.set( 'bars' );
					$( '.header' ).removeClass( 'mobile-nav-active' );
					break;
			}
		});
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
