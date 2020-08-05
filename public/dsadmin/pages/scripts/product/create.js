
$(document).ready(function () {

	JSMT.validacionGeneral('form-general');

	$("#product_name").focus();

	// $('.select2').select2();

	$('#product_categories').select2({
      theme: 'bootstrap4',
      allowClear: true,
    });

    $('#modifiable').select2({
    	templateSelection: function(selection) {
	        if(selection.selected) {
	            return $.parseHTML('<span style="color: #555555;">' + selection.text + '</span>');
	        }
	        else {
	            return $.parseHTML('<span style="color: #555555">' + selection.text + '</span>');
	        }
	    }
    });

    $('#personalized').select2({
    	templateSelection: function(selection) {
	        if(selection.selected) {
	            return $.parseHTML('<span style="color: #555555">' + selection.text + '</span>');
	        }
	        else {
	            return $.parseHTML('<span style="color: #555555">' + selection.text + '</span>');
	        }
	    }
    });

    $("#product_categories").on('change', function() {

		var value = $(this).val();
		var option = value.toString().split(',');
		
		var validation_modifiable = $.inArray("1", option);
		var validation_personalized = $.inArray("2", option);
		
		if (validation_modifiable == -1) {
			$('#div-reply-modifiable').hide(500);
			$('.div-reply-modifiable').hide(500);
			$('#modifiable').attr('disabled');
			$('#modifiable').val(null).trigger('change');
			$('.input-reply-modifiable').val(null);

		}else{
			$('#div-reply-modifiable').show(500);
			$('#modifiable').removeAttr('disabled');

		}

		if (validation_personalized == -1) {
			$('#div-reply-personalized').hide(500);
			$('#personalized').attr('disabled');
			$('#personalized').val(null).trigger('change');
		}else{
			$('#div-reply-personalized').show(500);
			$('#personalized').removeAttr('disabled');
			
		}
	});

	$("#modifiable").on('change', function(){

		var value = $(this).val();
		var option = value.toString().split(',');

		var color = $.inArray("1", option);
		var flavor = $.inArray("2", option);
		var recipes = $.inArray("3", option);


		if (color == -1) {
			$('#div-reply-modifiable-color').hide(500);
			$('#color').attr('disabled');
			$('#color').val(null);

		}else{
			$('#div-reply-modifiable-color').show(500);
			$('#color').removeAttr('disabled');
		}

		if (flavor == -1) {
			$('#div-reply-modifiable-flavor').hide(500);
			$('#flavor').attr('disabled');
			$('#flavor').val(null);

		}else{
			$('#div-reply-modifiable-flavor').show(500);
			$('#flavor').removeAttr('disabled');
		}

		if (recipes == -1) {
			$('#div-reply-modifiable-recipes').hide(500);
			$('#recipes').attr('disabled');
			$('#recipes').val(null);

		}else{
			$('#div-reply-modifiable-recipes').show(500);
			$('#recipes').removeAttr('disabled');
		}


	});

	$('.value_without_space').keyup(function(){

	    var value = $(this).val();

	    var value_without_space = $.trim(value);

	    $(this).val(value_without_space);

	});

	$('.value_without_space').focusout(function(){
		var value = $(this).val();
		var value_latest = value[value.length-1];
	    if (value_latest == "," || value_latest == "." ) {
	    	$(this).val(value.slice(0, -1));
	    }
	});

	$('#recipes').keyup(function(e){

	    var code = (e.keyCode ? e.keyCode : e.which);
	    var value = $(this).val();
	    var value_latest = value[value.length-2];
	    // alert(value);


	    if (value=="-" && code==8){
	    	$(this).val(value+">");
	    }else{

	    
	        if(code==13){
	            if(value_latest==">"){
	            	$(this).val(value.slice(0, -1));
	            }else{	
	           		$(this).val(value+"->");
	           	}
	        }
	        

	        var value_latest_one = value[value.length-1];
	        if(code==8 && value_latest_one == "-"){
	        	$(this).val(value.slice(0, -2));
	        }

	        if(code==226 || code==189){
	        	$(this).val(value.slice(0, -1));
	        }
		}
	});



	$('#recipes').focus(function(){
		var value = $(this).val();
		var value_latest = value[value.length-1];

		if (value=="") {
			$(this).val("->");
		}else{
			$(this).val(value);
		}

		if (value != "" && value_latest != ">") {
			if ((/(\r\n|\n|\r)/.test(value_latest)) ) {
				$(this).val(value+"->");
			}else{
				$(this).val(value);
			}
		}
	});

	$('#recipes').focusout(function(){
		var value = $(this).val();
		var value_latest = value[value.length-1];
	    if (value_latest == ">" ) {
	    	$(this).val(value.slice(0, -2));
	    }
	});

	$("#recipes").click(function(){
		var value = $(this).val();
		var value_latest = value[value.length-1];
		if (value!="->" && value_latest == ">" ) {
	    	$(this).val(value.slice(0, -3));
	    }
	});



	$("#product_image").fileinput({
	    theme: "fa",
	    language: "es",
	    maxFileSize: 5000,
	    showClose: false,
	    showCaption: false,
	    showZoom: false,
	    browseLabel: 'Buscar...',
	    browseIcon: '<i class="fa fa-folder-open"></i>',
	    browseClass: 'btn btn-outline-info',
	    removeIcon: '<i class="fa fa-trash-alt"></i>',
	    removeClass: 'btn btn-outline-secondary',
	    elErrorContainer: '#kv-product-errors-1',
	    msgErrorClass: 'alert alert-block alert-danger',
	    defaultPreviewContent: '<img id="product-image-default" src="https://www.dropbox.com/s/0zvf0jmjo2b9cz2/1f3f7.png?raw=1" alt="Imagen del producto" id="product_image">',
	    layoutTemplates: {main2: '{preview} {remove} {browse}'},
	    allowedFileExtensions: ["jpg", "png", "gif"]
	});

});