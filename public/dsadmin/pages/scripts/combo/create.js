$(document).ready(function () {

	JSMT.validacionGeneral('form-general');

	$("#combo_name").focus();

	$('.nav-button').click(function (event) {

		const nav =  $(this).attr('id');
		const li = $(this).attr('data-control');

		$('#'+li).removeClass("active");
		$('#'+nav).addClass("active");
		$('.nav-button').removeClass("active");


	});

//////////////////////////////// AL CARGAR LA PAGINA SI HAY UN ERROR 

    $(".checkbox-product").each(function(){
    	const id = parseInt($(this).attr("data-id"));

    	if( $(this).is(':checked') ){
	      	const units = parseInt($('#units'+id).val());	
	      	$('#units'+id).removeAttr('disabled');
			$('#units'+id).attr('min','1');
			$('#units'+id).attr('data-price-count',parseInt($(this).attr("data-price"))*units);
			$(this).attr('data-price-count',parseInt($(this).attr("data-price"))*units);
      	}
    });

	$(".base").each(function(){
	    if( $(this).is( ':checked' ) ){

			let price_base = parseInt($(this).attr('data-price-base'));
			let price_base_before = parseInt($(this).attr('data-price-before'));

			$(".units-product").attr('data-price-base', price_base);
		  	$(".base").attr('data-price-before', price_base);

		  	if(price == null){

		  		var price_total = $("#price-form").val();
			  	$("#price").attr('data-current-price',price_base);
			  	$("#price").html(price_base);	

		  	}else{

		  		var price_total = $("#price-form").val();
			  	$("#price").attr('data-current-price',price_total - price_base_before + price_base);
			  	$("#price").html(price_total - price_base_before + price_base);
			}
			
	    }
    });

   	var price_total = $("#price-form").val();
   	$("#price").attr('data-current-price',price_total);
	$("#price").html(price_total);	

////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////

	$(".checkbox-product").change(function(event) {
		event.preventDefault();

	    $("#gain").val('');				
		$("#combo_price").val('');	
		$("#porcentage").val('');

		const price_total = parseInt($("#price-form").val());
		const id = parseInt($(this).attr("data-id"));
		const price = parseInt($(this).attr("data-price"));

		const price_product_units = $(this).attr('data-price-count');


		if( $(this).is(':checked') ){

			$('#units'+id).removeAttr('disabled');
			$('#units'+id).val('1');
			$('#units'+id).attr('min','1');
			$('#units'+id).attr('data-price-count',price);
			const add_price_product = price_total + price;
			$("#price").attr('data-current-price',add_price_product);
			$("#price").html(add_price_product);
			$("#price-form").val(add_price_product);

		}else{

			$('#units'+id).attr('disabled','disabled');
			$('#units'+id).val('0');
			$('#units'+id).attr('data-price-count',0);
			$(this).removeAttr('data-price-count');

			if (typeof price_product_units !== typeof undefined && price_product_units !== false){
	
				const subtract_price_units_product = price_total - price_product_units;
				$("#price").attr('data-current-price',subtract_price_units_product);
				$("#price").html(subtract_price_units_product);
				$("#price-form").val(subtract_price_units_product);


			}else{

				const subtract_price_product = price_total - price;
				$("#price").attr('data-current-price',subtract_price_product);
				$("#price").html(subtract_price_product);
				$("#price-form").val(subtract_price_product);
			}



		}


	

		// var price_total = 0;

  //       $(".units-product").each(function(){
  //         	price_total += +$(this).attr('data-price-count');
  //       });

	 //    if ($(".units-product").attr("data-price-base")) {
	 //    	const price_base = parseInt($("#units"+id).attr('data-price-base'));
	 //   		$("#price-form").val(price_total + price_base);
		// 	$("#price").attr('data-current-price',price_total + price_base);
		// 	$("#price").html(price_total + price_base);	  
		// }else{
		// 	$("#price-form").val(price_total);
		// 	$("#price").attr('data-current-price',price_total);
		// 	$("#price").html(price_total);	  
		// }

	});

   	$('.units-product').change(function(event){

	    $("#gain").val('');				
		$("#combo_price").val('');	
		$("#porcentage").val('');

		const id = $(this).attr('data-id');
		const price_total = parseInt($("#price-form").val());
		const price_product =  parseInt($(this).attr('data-price'));
		const price_product_before = $(this).attr('data-price-count');
		const units =  parseInt($(this).val());
		const multiply_product_unit = price_product * units; 

		$(this).attr('data-price-count',multiply_product_unit);
		$("#checkbox"+id).attr('data-price-count',multiply_product_unit);
		
		const price_result = price_total - price_product_before + multiply_product_unit;

		$("#price").attr('data-current-price',price_result);
		$("#price").html(price_result);
		$("#price-form").val(price_result);
	
		// $(this).attr('data-price-count',price_current);




	 //    if ($(this).attr("data-price-base")) {
	 //    	const price_base = parseInt($(this).attr('data-price-base'));
		// 	$("#price-form").val(price_total + price_base);
		// 	$("#price").attr('data-current-price',price_total + price_base);
		// 	$("#price").html(price_total + price_base);	  
		// }else{
		// 	$("#price-form").val(price_total);
		// 	$("#price").attr('data-current-price',price_total);
		// 	$("#price").html(price_total);	  
		// }
	   	
	});

	$( document ).on( 'click', '.base', function(){

	$("#gain").val('');				
	$("#combo_price").val('');	
	$("#porcentage").val('');

	let price_base = parseInt($(this).attr('data-price-base'));
	let price_base_before = parseInt($(this).attr('data-price-before'));

 	 //Revisa en que status está el checkbox y controlalo según lo //desees
		if( $( this ).is( ':checked' ) ){

		  	$(".units-product").attr('data-price-base', price_base);
		  	$(".base").attr('data-price-before', price_base);

			const price = $("#price").attr('data-current-price');

		  	if(price == null){

			  	$("#price-form").val(price_base);
			  	$("#price").attr('data-current-price',price_base);
			  	$("#price").html(price_base);	

		  	}else{

			  	$("#price-form").val(price - price_base_before + price_base);
			  	$("#price").attr('data-current-price',price - price_base_before + price_base);
			  	$("#price").html(price - price_base_before + price_base);
			}	

		}

	});

	$('#porcentage').keyup(function(event){

		const price = parseInt($("#price").attr('data-current-price'));
		const porcentage = parseInt($(this).val());
		
		const gain = price * (porcentage/100);
		const round = Math.floor(gain + price);

		$("#gain").val(gain);							
		$("#combo_price").val(round);				

	});	

	////////////////////////////////////////////////////////////////////////////////////////////

	// TABLE

	$('#table-products').DataTable({
		"paging":   false,
        "language": {
            // "lengthMenu": "Ver _MENU_ ",
            "zeroRecords": "Lo sentimos, no se encontro ningun producto",
            "info": "Paginas para ver _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "search":         "Buscar:",
            "infoFiltered": "( _MAX_ productos)",
            "paginate": {
		        "first":      "Primero",
		        "last":       "Ultimo",
		        "next":       "Siguiente",
		        "previous":   "Anterior"
		    }
        }
	});

	$('#table-bases').DataTable({
		"paging":   false,
        "language": {
        	"decimal":        "",
            "lengthMenu": "Ver _MENU_ ",
            "zeroRecords": "Lo sentimos, no se encontro ningun producto",
            "info": "Paginas para ver _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "search":         "Buscar:",
            "infoFiltered": "( _MAX_ productos)",
            "paginate": {
		        "first":      "Primero",
		        "last":       "Ultimo",
		        "next":       "Siguiente",
		        "previous":   "Anterior"
		    }
        }
	});	

    $("#input-24").fileinput({
    	theme: "fa",
    	language: "es",
        initialPreviewAsData: false,
        deleteUrl: "/site/file-delete",
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFileCount: 4,
        showUpload: false
    });

    $(document).on('click','[data-toggle="lightbox"]', function(event){
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

});