jQuery(document).ready(function($){
    'use strict';


    // Search
    $('.mainsite-search').click(function (e) {
        $('.mainsite-header-search').fadeIn(500);
        setTimeout(function() {
            $('.mainsite-header-search-wrap .search-field').focus();
        }, 499);
    });


    // Search Control
    $('.mainsite-search-close').click(function(e){
        e.preventDefault();
        $('.mainsite-header-search').fadeOut(500);
        $('.mainsite-search .search-button').focus();
    });


    // Offcanvas Menu
    $('.mainsite-trigger, .mainsite-close-canvas, .mainsite-trigger-bottom').click(function() {        
        if ($('body').hasClass('mainsite-offcanvas-active')) { // Nav Close
            $('body').removeClass('mainsite-offcanvas-active');
            $('.mainsite-close-canvas').removeClass('mainsite-offcanvas-close-active');
            $('#mainsite-header-trigger').focus();
          } else { // Nav Open
            $('body').addClass('mainsite-offcanvas-active');
            $('.mainsite-close-canvas').addClass('mainsite-offcanvas-close-active');
            $('.mainsite-offcanvas-wrap a').eq(0).focus();
          }
    });


    // Tab & ESC Navigration Control
    var previousTab = 'no', previousClose = 'no';
    document.addEventListener( 'keyup', function( event ) {
        if ( event.key === 'Escape' ) {
            if ($('body').hasClass('mainsite-offcanvas-active')) {
                $('body').removeClass('mainsite-offcanvas-active');
                $('.mainsite-close-canvas').removeClass('mainsite-offcanvas-close-active');
                $('#mainsite-header-trigger').focus();
            }
            $('.mainsite-header-search').fadeOut(500);
        }
        if ( event.key === 'Tab' ) {
            if(previousTab == 'search') {
                $('.mainsite-header-search-wrap input.search-field').focus();
            }
            if( previousClose == 'close' && $('body').hasClass('mainsite-offcanvas-active')) {
                $('.mainsite-offcanvas-wrap a').eq(0).focus();
                console.log('EMC');
            }
            previousTab = $('.mainsite-search-close').is(':focus') ? 'search' : 'no'
            previousClose = $('.mainsite-trigger-bottom').is(':focus') ? 'close' : 'no'

            $('.main-navigation ul li').removeClass('is-focused')
            if( $('.main-navigation ul li a').is(":focus") ) {
                $('.main-navigation ul li a:focus').parents('li').addClass('is-focused');
            }
        }
        
    });
    document.addEventListener( 'keydown', function( event ) {
        if ( event.key === 'Tab' ) {
            if ( previousTab == 'search' ) {
                $('.mainsite-header-search-wrap input.search-field').focus();
            }
            if ( previousClose == 'close' && $('body').hasClass('mainsite-offcanvas-active') ) {
                $('.mainsite-offcanvas-wrap a').eq(0).focus();
            }
        }
    });
    

    // OffCanvas Menu
    if( $('.mainsite-offcanvas-menu').length ) {
        $( '.mainsite-offcanvas-menu .menu-item-has-children > a' ).each( function() {
            $( this ).after( '<a class="click-open-btn cb-font-down-open triangle" href="#"></a>' );
        });
    }
    $( document ).on( 'click', '.click-open-btn', function( e ){
        const selector = $(this).closest('.menu-item')
        if ( selector.hasClass('offcanvas-menu-open') ) {
            selector.removeClass('offcanvas-menu-open')
        } else {
            selector.addClass('offcanvas-menu-open')
        }
    });
    


});
