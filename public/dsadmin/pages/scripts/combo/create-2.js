
$(document).ready(function () {

	JSMT.validacionGeneral('form-general');



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
		$("#price_gain").val('');	
		$("#percentage").val('');

		const id = parseInt($(this).attr("data-id"));
		const price = parseInt($(this).attr("data-price"));

	

		if( $(this).is(':checked') ){

			$('#units'+id).removeAttr('disabled');
			$('#units'+id).val('1');
			$('#units'+id).attr('min','1');
			$('#units'+id).attr('data-price-count',price);

		}else{
			$('#units'+id).attr('disabled','disabled');
			$('#units'+id).val('0');
			$('#units'+id).attr('data-price-count',0);
		}

		var price_total = 0;

        $(".units-product").each(function(){
          	price_total += +$(this).attr('data-price-count');
        });

	    if ($(".units-product").attr("data-price-base")) {
	    	const price_base = parseInt($("#units"+id).attr('data-price-base'));
	   		$("#price-form").val(price_total + price_base);
			$("#price").attr('data-current-price',price_total + price_base);
			$("#price").html(price_total + price_base);	  
		}else{
			$("#price-form").val(price_total);
			$("#price").attr('data-current-price',price_total);
			$("#price").html(price_total);	  
		}

	});

   	$('.units-product').change(function(event){

	    $("#gain").val('');				
		$("#price_gain").val('');	
		$("#percentage").val('');

		const price_product =  parseInt($(this).attr('data-price'));
		const units =  parseInt($(this).val());
		const price_current = price_product * units; 
	
		$(this).attr('data-price-count',price_current);

		var price_total = 0;
        $(".units-product").each(function(){
			price_total += +$(this).attr('data-price-count');
        });



	    if ($(this).attr("data-price-base")) {
	    	const price_base = parseInt($(this).attr('data-price-base'));
			$("#price-form").val(price_total + price_base);
			$("#price").attr('data-current-price',price_total + price_base);
			$("#price").html(price_total + price_base);	  
		}else{
			$("#price-form").val(price_total);
			$("#price").attr('data-current-price',price_total);
			$("#price").html(price_total);	  
		}
	   	
	});

	$( document ).on( 'click', '.base', function(){

	$("#gain").val('');				
	$("#price_gain").val('');	
	$("#percentage").val('');

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

	$('#percentage').keyup(function(event){

		const price = parseInt($("#price").attr('data-current-price'));
		const percentage = parseInt($(this).val());
		
		const gain = price * (percentage/100);

		$("#gain").val(gain);				
		$("#price_gain").val(gain + price);				
		$("#combo_price").val(gain + price);				

	});	

	////////////////////////////////////////////////////////////////////////////////////////////

	// TABLE

	$('#table-products').DataTable({
		"paging":   false,
		"info": false,
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
		"info": false,
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