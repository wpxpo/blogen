jQuery(document).ready(function($){ 'use strict';

    // Alpha Color Picker
    if( typeof alphaColorPicker != 'undefined' ){
        $( 'input.alpha-color-control' ).alphaColorPicker();
	}

    // Export Cuatomizer Data
    $(document).on('click', '#mainsite-export-data', function (e) {
		e.preventDefault();
        window.location.href = blogen_kit.ajax_url+'?action=blogen_export_data';
	});

    // Import Cuatomizer Data
    $('body').on('click', '#mainsite-import-data', function (e) {
		e.preventDefault();

		const file_data = $('#mainsite-import-data-file').prop('files')[0],
			status = $('#mainsite-import-status');

		if (typeof file_data == 'undefined') {
			status.addClass('mainsite-import-error')
			status.text(blogen_kit.file_error);
			setTimeout(function () {
				status.removeClass('mainsite-import-error')
				status.text('');
			}, 10000);
			return;
		}

		let form_data = new FormData(); 
		form_data.append('file', file_data);
    	form_data.append('name', file_data.name);
		form_data.append('action', 'blogen_import_data');
		
		$.ajax({
			url: blogen_kit.ajax_url,
			cache: false,
            contentType: false,
            processData: false,
			method: "POST",
			data: form_data,
			success: function (html) {
				if (html == 1) {
					status.addClass( 'mainsite-import-success' )
					status.text( blogen_kit.import_success );
					setTimeout( function () { location.reload(); }, 2000);
					setTimeout( function () {
                        status.removeClass('mainsite-import-success'); 
                        status.text('');
					}, 10000 );
				} else {
					status.addClass('mainsite-import-error')
					status.text(blogen_kit.import_error);
					setTimeout(function () {
						status.removeClass('mainsite-import-error')
						status.text('');
					}, 10000);
				}
			},
			error: function () {
				status.addClass('mainsite-import-error')
				status.text(blogen_kit.import_error);

				setTimeout(function () {
					status.removeClass('mainsite-import-error')
					status.text('');
				}, 10000);
			}
		});
	});

	// Customizer Dependency

	$(window).load(function() {

		// Checkbox
		$( '.mainsite-checkbox' ).each( function(){ customizerDepends(this); });
		$( '.mainsite-checkbox-change' ).on( 'change', function(e){
			const select = $(this).parents('.mainsite-checkbox');
			select.data('value', $(select).data('value') ? 0 : 1 )			
			customizerDepends(select);
		});

		// Select
		$( '.mainsite-select' ).each( function(){ customizerDepends(this); });
		$( '.mainsite-customizer-select' ).on( 'change', 'select', function(e){
			const select = $(this).parents('.mainsite-select');
			select.data('value', $(this).val())			
			customizerDepends(select);
		});

		// Layout
		$( '.mainsite-layout' ).each( function(){ customizerDepends(this); });
		$( '.mainsite-customizer-layout' ).on( 'change', 'input', function(e){
			const select = $(this).parents('.mainsite-layout');
			select.data('value', $(this).val())			
			customizerDepends(select);
		});


		function customizerDepends(that) {
			const condition = $(that).data('condition')
			const value = $(that).data('value')

			if(condition){
				condition.split(',').forEach( data => {
					data = data.split('#')
					if (data[1] == '=') {
						if (value == data[2]) { // is equal
							$('#customize-control-'+data[0]).show();
						} else {
							$('#customize-control-'+data[0]).hide();
						}
					} else if (data[1] == '!=') {
						if (value != data[2]) { // not equal
							$('#customize-control-'+data[0]).show();
						} else {
							$('#customize-control-'+data[0]).hide();
						}
					}
				});
			}
			
		}


	});


});
