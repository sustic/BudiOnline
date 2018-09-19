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
		$( 'a[href*="#"]' ).not( '[href="#"]' ).not( '[href="#0"]' ).click( function( event ) {
			var target = $( this.hash );
			if (
				location.pathname.replace( /^\//, '' ) == this.pathname.replace( /^\//, '' ) && location.hostname == this.hostname
			) {
				target = target.length ? target : $( '[name=' + this.hash.slice( 1 ) + ']' );
				if ( target.length ) {
					event.preventDefault();
					$( 'html, body' ).animate({
						scrollTop: target.offset().top
					}, 1000, function() {
						var $target = $( target );
						$target.focus();
						if ( $target.is( ':focus' ) ) {
							return false;
						} else {
							$target.attr( 'tabindex', '-1' );
							$target.focus();
						};
					});
				}
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
					$( '.scroll-top-link' ).addClass( 'link-visible' );
					m.color( 'black' );
				}

				//console.log("iznad 50px;");
			} else {
				if ( $( '.header-scroll-handler' ).hasClass( 'scrolled-nav' ) ) {
					$( '.header-scroll-handler' ).removeClass( 'scrolled-nav' );
					$( '.scroll-top-link' ).removeClass( 'link-visible' );
					m.color( 'white' );

				} else {

				}

				//console.log("ispod 50px;");
			}
		});

		// Slick example
		$( document ).ready( function() {
			$( '.main-slider-js' ).slick({
				speed: 400,
				autoplay: true,
				centerMode: true,
				slidesToShow: 1,
				centerPadding: '0',
				adaptiveHeight: true
			});
			$( '.twitter-slider-js' ).slick({
				speed: 400,
				autoplaySpeed: 5000,
				autoplay: true,
				centerMode: true,
				slidesToShow: 1,
				centerPadding: '0',
				adaptiveHeight: true,
				arrows: true,
				dots: false
			});
			$( '.domain-slider' ).slick({
				speed: 400,
				autoplay: true,
				arrows: false,
				slidesToShow: 6,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 1400,
						settings:
						{
							arrows: false
						}
					},
					{
						breakpoint: 1300,
						settings: {
							slidesToShow: 5,
							arrows: false
						}
					},
					{
						breakpoint: 1217,
						settings: {
							slidesToShow: 4,
							arrows: false
						}
					},
					{
						breakpoint: 991,
						settings: {
							slidesToShow: 3,
							arrows: false
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
							arrows: false
						}
					},
					{
						breakpoint: 500,
						settings: {
							slidesToShow: 1,
							arrows: false
						}
					}
				]
			});
		});
	});

	$( document ).ready( function() {
		AOS.init({
			startEvent: 'load',
			duration: 1200,
			once: true
		});
	});


	$( window ).on( 'load', function() {
		AOS.refresh();
	});

} ( this, jQuery ) );

function initMap() {
	var mapStyle = [ {'elementType': 'geometry', 'stylers': [ {'color': '#212121'} ]}, {'elementType': 'labels.icon', 'stylers': [ {'visibility': 'off'} ]}, {'elementType': 'labels.text.fill', 'stylers': [ {'color': '#757575'} ]}, {'elementType': 'labels.text.stroke', 'stylers': [ {'color': '#212121'} ]}, {'featureType': 'administrative', 'elementType': 'geometry', 'stylers': [ {'color': '#757575'} ]}, {'featureType': 'administrative.country', 'elementType': 'labels.text.fill', 'stylers': [ {'color': '#9e9e9e'} ]}, {'featureType': 'administrative.land_parcel', 'stylers': [ {'visibility': 'off'} ]}, {'featureType': 'administrative.locality', 'elementType': 'labels.text.fill', 'stylers': [ {'color': '#bdbdbd'} ]}, {'featureType': 'poi', 'elementType': 'labels.text.fill', 'stylers': [ {'color': '#757575'} ]}, {'featureType': 'poi.park', 'elementType': 'geometry', 'stylers': [ {'color': '#181818'} ]}, {'featureType': 'poi.park', 'elementType': 'labels.text.fill', 'stylers': [ {'color': '#616161'} ]}, {'featureType': 'poi.park', 'elementType': 'labels.text.stroke', 'stylers': [ {'color': '#1b1b1b'} ]}, {'featureType': 'road', 'elementType': 'geometry.fill', 'stylers': [ {'color': '#2c2c2c'} ]}, {'featureType': 'road', 'elementType': 'labels.text.fill', 'stylers': [ {'color': '#8a8a8a'} ]}, {'featureType': 'road.arterial', 'elementType': 'geometry', 'stylers': [ {'color': '#373737'} ]}, {'featureType': 'road.highway', 'elementType': 'geometry', 'stylers': [ {'color': '#3c3c3c'} ]}, {'featureType': 'road.highway.controlled_access', 'elementType': 'geometry', 'stylers': [ {'color': '#4e4e4e'} ]}, {'featureType': 'road.local', 'elementType': 'labels.text.fill', 'stylers': [ {'color': '#616161'} ]}, {'featureType': 'transit', 'elementType': 'labels.text.fill', 'stylers': [ {'color': '#757575'} ]}, {'featureType': 'water', 'elementType': 'geometry', 'stylers': [ {'color': '#000000'} ]}, {'featureType': 'water', 'elementType': 'labels.text.fill', 'stylers': [ {'color': '#3d3d3d'} ]} ];
	var mapStyle = [];
	var map = new google.maps.Map( document.getElementById( 'map' ), {
		styles: mapStyle
	});

	var bond1 = new google.maps.LatLng ( 45.7459092, 15.9972782 );
	var bond2 = new google.maps.LatLng ( 45.8091581, 15.9841017 );

	var varlatlngbounds = new google.maps.LatLngBounds();

	/* Office Map Info */
	var officeGeoLoc = { lat: 45.7459092, lng: 15.9972782 };
	var officeContentString =
		'<div id="content">' +
			'<div id="siteNotice">' +
			'</div>' +
			'<h1 id="firstHeading" class="firstHeading">BudiONLINE Office</h1>' +
			'<div id="bodyContent">' +
				'<p> Kneza Mislava 20 ' +
				'<a style="text-decoration:underline;" href="https://www.google.com/maps/dir//Ul.+kneza+Mislava+20,+10000,+Zagreb/@45.8091581,15.9841017,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x4765d6543343dc95:0xb69727b33c4b6e80!2m2!1d15.9862904!2d45.8091544" target="_blank"> Navigate. </a></p>' +
			'</div>' +
		'</div>';
	var officeInfoWindow = new google.maps.InfoWindow({
		content: officeContentString
	});
	var officeMarker = new google.maps.Marker({
		position: officeGeoLoc,
		map: map
	});

	/* Server Map Info */
	var serverGeoLoc = {lat: 45.8091581, lng: 15.9841017};
	var serverContentString =
		'<div id="content">' +
			'<div id="siteNotice">' +
			'</div>' +
			'<h1 id="firstHeading" class="firstHeading">BudiONLINE Data Center</h1>' +
			'<div id="bodyContent">' +
				'<p> Bani 75a, Buzin ' +
				'<a style="text-decoration:underline;" href="https://www.google.com/maps/dir//Bani+ul.+75,+10000,+Buzin/@45.7459092,15.9972782,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x4765d589d2373919:0x72bce9870f9946c5!2m2!1d15.9994669!2d45.7459055" target="_blank"> Navigate. </a></p>' +
			'</div>' +
		'</div>';
	var serverInfoWindow = new google.maps.InfoWindow({
		content: serverContentString
	});
	var dataCenterMarker = new google.maps.Marker({
		position: serverGeoLoc,
		map: map
	});

	officeMarker.addListener( 'click', function() {
		officeInfoWindow.open( map, officeMarker );
	});
	dataCenterMarker.addListener( 'click', function() {
		serverInfoWindow.open( map, dataCenterMarker );
	});
	varlatlngbounds.extend( bond1 );
	varlatlngbounds.extend( bond2 );
	map.setCenter( varlatlngbounds.getCenter() );
	map.fitBounds( varlatlngbounds );
}
