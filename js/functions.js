/**
 * Theme functions file
 *
 * Contains handlers for navigation, accessibility, header sizing
 * footer widgets and Featured Content slider
 *
 */

var isPushed = false;

function setCookie(key, value) {
	var expires = new Date();
	expires.setTime(expires.getTime() + (365 * 24 * 60 * 60 * 1000));
	document.cookie = key + '=' + value + ';path=/' + ';expires=' + expires.toUTCString();
}

( function( $ ) {
	var body    = $( 'body' ),
		_window = $( window ),
		nav, button, menu;

	nav = $( '#primary-navigation' );
	button = nav.find( '.menu-toggle' );
	menu = nav.find( '.nav-menu' );

	// Hack for Categories Widget
	if (jQuery('.cat-item')) {
		for (var i = 0; i < jQuery('.cat-item').length; ++i) {
			var s = jQuery('.cat-item')[i].innerHTML;
			s = s.replace('</a>', '').trim() + '</a>';
			jQuery('.cat-item')[i].innerHTML = s;
		}
	}

	jQuery('.widget a').css({ display: "block" });

	// Show or Hide Image Widget description
	jQuery('.imgElem').mouseenter(function() {
		jQuery('.mainDescription').html(jQuery('#imgDesc' + $(this).attr('id').slice(-1)).html());
		jQuery('.mainDescription').show();
		// console.log('in', jQuery('#imgDesc' + $(this).attr('id').slice(-1)));
	});

	jQuery('.imgElem').mouseleave(function() {
		jQuery('.mainDescription').hide();
		// console.log('out', $(this).attr('id').slice(-1));
	});

	// Switch Skins
	jQuery("#skinDefault").click( function() {
		setCookie('skin', 0);
		location.reload();
	});
	jQuery("#skinOgre").click( function() {
		setCookie('skin', 1);
		location.reload();
	});
	jQuery("#skinBlack").click( function() {
		setCookie('skin', 2);
		location.reload();
	});
	jQuery("#skinBlue").click( function() {
		setCookie('skin', 3);
		location.reload();
	});

	// Enable menu toggle for small screens.
	( function() {
		if ( ! nav.length || ! button.length ) {
			return;
		}

		// Hide button if menu is missing or empty.
		if ( ! menu.length || ! menu.children().length ) {
			button.hide();
			return;
		}

		button.on( 'click.twentyfourteen', function() {
			isPushed = !isPushed;
			nav.toggleClass( 'toggled-on' );
			if ( nav.hasClass( 'toggled-on' ) ) {
				$( this ).attr( 'aria-expanded', 'true' );
				menu.attr( 'aria-expanded', 'true' );
			} else {
				$( this ).attr( 'aria-expanded', 'false' );
				menu.attr( 'aria-expanded', 'false' );
			}
		} );
	} )();

	/*
	 * Makes "skip to content" link work correctly in IE9 and Chrome for better
	 * accessibility.
	 *
	 * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
	 */
	_window.on( 'hashchange.twentyfourteen', function() {
		var hash = location.hash.substring( 1 ), element;

		if ( ! hash ) {
			return;
		}

		element = document.getElementById( hash );

		if ( element ) {
			if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) {
				element.tabIndex = -1;
			}

			element.focus();

			// Repositions the window on jump-to-anchor to account for header height.
			window.scrollBy( 0, -80 );
		}
	} );

	$( function() {
		// Search toggle.
		$( '.search-toggle' ).on( 'click.twentyfourteen', function( event ) {
			var that    = $( this ),
				wrapper = $( '#search-container' ),
				container = that.find( 'a' );

			that.toggleClass( 'active' );
			wrapper.toggleClass( 'hide' );

			if ( that.hasClass( 'active' ) ) {
				container.attr( 'aria-expanded', 'true' );
			} else {
				container.attr( 'aria-expanded', 'false' );
			}

			if ( that.is( '.active' ) || $( '.search-toggle .screen-reader-text' )[0] === event.target ) {
				wrapper.find( '.search-input' ).focus();
			}
		} );

		/*
		 * Fixed header for large screen.
		 * If the header becomes more than 48px tall, unfix the header.
		 *
		 * The callback on the scroll event is only added if there is a header
		 * image and we are not on mobile.
		 */
		if ( _window.width() > 781 ) {
			var mastheadHeight = $( '#masthead' ).height(),
				toolbarOffset, mastheadOffset;

			if ( mastheadHeight > 48 ) {
				body.removeClass( 'masthead-fixed' );
			}

			if ( body.is( '.header-image' ) ) {
				toolbarOffset  = body.is( '.admin-bar' ) ? $( '#wpadminbar' ).height() : 0;
				mastheadOffset = $( '#masthead' ).offset().top - toolbarOffset;

				_window.on( 'scroll.twentyfourteen', function() {
					if ( _window.scrollTop() > mastheadOffset && mastheadHeight < 49 ) {
						body.addClass( 'masthead-fixed' );
					} else {
						body.removeClass( 'masthead-fixed' );
					}
				} );
			}
		}

		// Focus styles for menus.
		$( '.primary-navigation, .secondary-navigation' ).find( 'a' ).on( 'focus.twentyfourteen blur.twentyfourteen', function() {
			$( this ).parents().toggleClass( 'focus' );
		} );
	} );

	/**
	 * @summary Add or remove ARIA attributes.
	 * Uses jQuery's width() function to determine the size of the window and add
	 * the default ARIA attributes for the menu toggle if it's visible.
	 * @since Twenty Fourteen 1.4
	 */
	function onResizeARIA() {
		// http://stackoverflow.com/a/8501499/2467443
		var width = Math.max( $(window).width(), window.innerWidth);

		// Hack for disable main description widget
		if ( width < 1218 ) {
			jQuery('.mainDescription').hide();
		}

		if ( width < 1008 ) {
			button.attr( 'aria-expanded', 'false' );
			menu.attr( 'aria-expanded', 'false' );
			//button.attr( 'aria-controls', 'primary-menu2' );
		} else {
			if (isPushed) {
				nav.toggleClass( 'toggled-on' );
				console.log('isPushed!')
				isPushed = false;
			}
			button.removeAttr( 'aria-expanded' );
			menu.removeAttr( 'aria-expanded' );
			//button.removeAttr( 'aria-controls' );
		}
	}

	_window
		.on( 'load.twentyfourteen', onResizeARIA )
		.on( 'resize.twentyfourteen', function() {
			onResizeARIA();
	} );

	_window.load( function() {
		var footerSidebar,
			isCustomizeSelectiveRefresh = ( 'undefined' !== typeof wp && wp.customize && wp.customize.selectiveRefresh );

		// Arrange footer widgets vertically.
		if ( $.isFunction( $.fn.masonry ) ) {
			footerSidebar = $( '#footer-sidebar' );
			footerSidebar.masonry( {
				itemSelector: '.widget',
				columnWidth: function( containerWidth ) {
					return containerWidth / 4;
				},
				gutterWidth: 0,
				isResizable: true,
				isRTL: $( 'body' ).is( '.rtl' )
			} );

			if ( isCustomizeSelectiveRefresh ) {

				// Retain previous masonry-brick initial position.
				wp.customize.selectiveRefresh.bind( 'partial-content-rendered', function( placement ) {
					var copyPosition = (
						placement.partial.extended( wp.customize.widgetsPreview.WidgetPartial ) &&
						placement.removedNodes instanceof jQuery &&
						placement.removedNodes.is( '.masonry-brick' ) &&
						placement.container instanceof jQuery
					);
					if ( copyPosition ) {
						placement.container.css( {
							position: placement.removedNodes.css( 'position' ),
							top: placement.removedNodes.css( 'top' ),
							left: placement.removedNodes.css( 'left' )
						} );
					}
				} );

				// Re-arrange footer widgets after selective refresh event.
				wp.customize.selectiveRefresh.bind( 'sidebar-updated', function( sidebarPartial ) {
					if ( 'sidebar-3' === sidebarPartial.sidebarId ) {
						footerSidebar.masonry( 'reloadItems' );
						footerSidebar.masonry( 'layout' );
					}
				} );
			}
		}

		// Initialize audio and video players in Twenty_Fourteen_Ephemera_Widget widget when selectively refreshed in Customizer.
		if ( isCustomizeSelectiveRefresh && wp.mediaelement ) {
			wp.customize.selectiveRefresh.bind( 'partial-content-rendered', function() {
				wp.mediaelement.initialize();
			} );
		}

		// Initialize Featured Content slider.
		if ( body.is( '.slider' ) ) {
			$( '.featured-content' ).featuredslider( {
				selector: '.featured-content-inner > article',
				controlsContainer: '.featured-content'
			} );
		}
	} );
} )( jQuery );
