/**
 * @name: Alpha Color Picker JS
 * @desc: Color Picker JS is used to extend WordPress color
 * @author: BraadMartin
 * @licence: https://github.com/BraadMartin/components/tree/master/alpha-color-picker#license
 */
Color.prototype.toString = function( flag ) {
	if ( 'no-alpha' == flag ) {
		return this.toCSS( 'rgba', '1' ).replace( /\s+/g, '' );
	}
	if ( 1 > this._alpha ) {
		return this.toCSS( 'rgba', this._alpha ).replace( /\s+/g, '' );
	}
	var hex = parseInt( this._color, 10 ).toString( 16 );
	if ( this.error ) { return ''; }
	if ( hex.length < 6 ) {
		for ( var i = 6 - hex.length - 1; i >= 0; i-- ) {
			hex = '0' + hex;
		}
	}
	return '#' + hex;
};

function acp_get_alpha_value_from_color( value ) {
	var alphaVal;
	value = value.replace( / /g, '' );
	if ( value.match( /rgba\(\d+\,\d+\,\d+\,([^\)]+)\)/ ) ) {
		alphaVal = parseFloat( value.match( /rgba\(\d+\,\d+\,\d+\,([^\)]+)\)/ )[1] ).toFixed(2) * 100;
		alphaVal = parseInt( alphaVal );
	} else {
		alphaVal = 100;
	}
	return alphaVal;
}

function acp_update_alpha_value_on_color_control( alpha, $control, $alphaSlider, update_slider ) {
	var iris, colorPicker, color;
	iris = $control.data( 'a8cIris' );
	colorPicker = $control.data( 'wpWpColorPicker' );
	iris._color._alpha = alpha;
	color = iris._color.toString();
	$control.val( color );
	colorPicker.toggler.css({
		'background-color': color
	});
	if ( update_slider ) {
		acp_update_alpha_value_on_alpha_slider( alpha, $alphaSlider );
	}
	$control.wpColorPicker( 'color', color );
}

function acp_update_alpha_value_on_alpha_slider( alpha, $alphaSlider ) {
	$alphaSlider.slider( 'value', alpha );
	$alphaSlider.find( '.ui-slider-handle' ).text( alpha.toString() );
}

jQuery( document ).ready( function( $ ) {
	$( '.alpha-color-control' ).each( function() {
		var $control, startingColor, paletteInput, showOpacity, defaultColor, palette,
			colorPickerOptions, $container, $alphaSlider, alphaVal, sliderOptions;
		$control = $( this );
		startingColor = $control.val().replace( /\s+/g, '' );
		paletteInput = $control.attr( 'data-palette' );
		showOpacity  = $control.attr( 'data-show-opacity' );
		defaultColor = $control.attr( 'data-default-color' );
		if ( paletteInput.indexOf( '|' ) !== -1 ) {
			palette = paletteInput.split( '|' );
		} else if ( 'false' == paletteInput ) {
			palette = false;
		} else {
			palette = true;
		}
		colorPickerOptions = {
			change: function( event, ui ) {
				var key, value, alpha, $transparency;
				key = $control.attr( 'data-customize-setting-link' );
				value = $control.wpColorPicker( 'color' );
				if ( defaultColor == value ) {
					alpha = acp_get_alpha_value_from_color( value );
					$alphaSlider.find( '.ui-slider-handle' ).text( alpha );
				}
				wp.customize( key, function( obj ) {
					obj.set( value );
				});
				$transparency = $container.find( '.transparency' );
				$transparency.css( 'background-color', ui.color.toString( 'no-alpha' ) );
			},
			palettes: palette
		};
		$control.wpColorPicker( colorPickerOptions );
		$container = $control.parents( '.wp-picker-container:first' );
		$( '<div class="alpha-color-picker-container">' +
				'<div class="min-click-zone click-zone"></div>' +
				'<div class="max-click-zone click-zone"></div>' +
				'<div class="alpha-slider"></div>' +
				'<div class="transparency"></div>' +
			'</div>' ).appendTo( $container.find( '.wp-picker-holder' ) );
		$alphaSlider = $container.find( '.alpha-slider' );
		alphaVal = acp_get_alpha_value_from_color( startingColor );
		sliderOptions = {
			create: function( event, ui ) {
				var value = $( this ).slider( 'value' );
				$( this ).find( '.ui-slider-handle' ).text( value );
				$( this ).siblings( '.transparency ').css( 'background-color', startingColor );
			},
			value: alphaVal,
			range: 'max',
			step: 1,
			min: 0,
			max: 100,
			animate: 300
		};

		$alphaSlider.slider( sliderOptions );

		if ( 'true' == showOpacity ) {
			$alphaSlider.find( '.ui-slider-handle' ).addClass( 'show-opacity' );
		}

		$container.find( '.min-click-zone' ).on( 'click', function() {
			acp_update_alpha_value_on_color_control( 0, $control, $alphaSlider, true );
		});
		$container.find( '.max-click-zone' ).on( 'click', function() {
			acp_update_alpha_value_on_color_control( 100, $control, $alphaSlider, true );
		});

		$container.find( '.iris-palette' ).on( 'click', function() {
			var color, alpha;
			color = $( this ).css( 'background-color' );
			alpha = acp_get_alpha_value_from_color( color );
			acp_update_alpha_value_on_alpha_slider( alpha, $alphaSlider );
			if ( alpha != 100 ) {
				color = color.replace( /[^,]+(?=\))/, ( alpha / 100 ).toFixed( 2 ) );
			}
			$control.wpColorPicker( 'color', color );
		});

		$container.find( '.button.wp-picker-clear' ).on( 'click', function() {
			var key = $control.attr( 'data-customize-setting-link' );
			$control.wpColorPicker( 'color', '#ffffff' );
			wp.customize( key, function( obj ) {
				obj.set( '' );
			});
			acp_update_alpha_value_on_alpha_slider( 100, $alphaSlider );
		});

		$container.find( '.button.wp-picker-default' ).on( 'click', function() {
			var alpha = acp_get_alpha_value_from_color( defaultColor );
			acp_update_alpha_value_on_alpha_slider( alpha, $alphaSlider );
		});

		$control.on( 'input', function() {
			var value = $( this ).val();
			var alpha = acp_get_alpha_value_from_color( value );
			acp_update_alpha_value_on_alpha_slider( alpha, $alphaSlider );
		});
		$alphaSlider.slider().on( 'slide', function( event, ui ) {
			var alpha = parseFloat( ui.value ) / 100.0;
			acp_update_alpha_value_on_color_control( alpha, $control, $alphaSlider, false );
			$( this ).find( '.ui-slider-handle' ).text( ui.value );
		});

	});
});
