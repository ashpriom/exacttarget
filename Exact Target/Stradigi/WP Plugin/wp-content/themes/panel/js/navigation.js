/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var container = document.getElementById( 'site-navigation' ),
	    button    = container.getElementsByTagName( 'h1' )[0],
	    menu      = container.getElementsByTagName( 'ul' )[0];

	if ( undefined == button || undefined == menu )
		return false;

	button.onclick = function() {
		if ( -1 == menu.className.indexOf( 'nav-menu' ) )
			menu.className = 'nav-menu';
		    alert('1');

		if ( -1 != button.className.indexOf( 'toggled-on' ) ) {
			alert('2');
			button.className = button.className.replace( ' toggled-on', '' );
			menu.className = menu.className.replace( ' toggled-on', '' );
			container.className = container.className.replace( 'main-small-navigation', 'navigation-main' );
		} else {
			alert('3');
			button.className += ' toggled-on';
			menu.className += ' toggled-on';
			container.className = container.className.replace( 'navigation-main', 'main-small-navigation' );
		}
	};

	// Hide menu toggle button if menu is empty.
	if ( ! menu.childNodes.length )
		button.style.display = 'none';
		
	// Fix child menus for touch devices.
	function fixMenuTouchTaps( container ) {
		var touchStartFn,
		    parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for( var i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( var i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false )
			}
		}
	}

	fixMenuTouchTaps( container );
} )();



( function() {
	var container2 = document.getElementById( 'site-navigation-2' ),
	    button    = container2.getElementsByTagName( 'h1' )[0],
	    menu2      = container2.getElementsByTagName( 'ul' )[0];

	if ( undefined == button || undefined == menu2 )
		return false;

	button.onclick = function() {
		if ( -1 == menu2.className.indexOf( 'nav-menu-2' ) )
			menu2.className = 'nav-menu-2';

		if ( -1 != button.className.indexOf( 'toggled-on-2' ) ) {
			button.className = button.className.replace( ' toggled-on-2', '' );
			menu2.className = menu2.className.replace( ' toggled-on-2', '' );
			container2.className = container2.className.replace( 'main-small-navigation-2', 'navigation-main-2' );
		} else {
			button.className += ' toggled-on-2';
			menu2.className += ' toggled-on-2';
			container2.className = container2.className.replace( 'navigation-main-2', 'main-small-navigation-2' );
		}
	};

	// Hide menu toggle button if menu is empty.
	if ( ! menu2.childNodes.length )
		button.style.display = 'none';
		
	// Fix child menus for touch devices.
	function fixMenuTouchTaps2( container2 ) {
		var touchStartFn2,
		    parentLink2 = container2.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn2 = function( e ) {
				var menuItem2 = this.parentNode;

				if ( ! menuItem2.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for( var i = 0; i < menuItem2.parentNode.children.length; ++i ) {
						if ( menuItem2 === menuItem2.parentNode.children[i] ) {
							continue;
						}
						menuItem2.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem2.classList.add( 'focus' );
				} else {
					menuItem2.classList.remove( 'focus' );
				}
			};

			for ( var i = 0; i < parentLink2.length; ++i ) {
				parentLink2[i].addEventListener( 'touchstart', touchStartFn2, false )
			}
		}
	}

	fixMenuTouchTaps2( container2 );
} )();