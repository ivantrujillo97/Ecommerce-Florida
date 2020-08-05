$(document).ready(function () {

	JSMT.validacionGeneral('form-general');

		var price_total = 0;
        $(".product_units").each(function(){
        	price_total += +$(this).attr('data-price-total');
        });
       	$("#price").val(price_total);
       	$("#label_price").html(price_total);

       	$('.product_units').change(function(event){

       		const price_product = $(this).attr('data-price');
       		const units = $(this).val();
       		const price_product_total = price_product * units;

       		$("#gain").val('');				
			$("#price_gain").val('');	
			$("#porcentage").val('');	

       		if(units==0){
       			$(this).attr('data-price-total',price_product);
       		}else{
       			$(this).attr('data-price-total',price_product_total);
       		}	

       		var price_total_units = 0;
	        $(".product_units").each(function(){
	        	price_total_units += +$(this).attr('data-price-total');
	        });

	        if ($(this).attr("data-price-base")) {
	        	const price_base = parseInt($(this).attr('data-price-base'));
				$("#price").val(price_total_units + price_base);
				$("#label_price").html(price_total_units + price_base);	  
			}else{
				$("#price").val(price_total_units);
				$("#label_price").html(price_total_units);	  
			}
	       	

       	});

		$( document ).on( 'click', '.base', function(){
			let price_base = parseInt($(this).attr('data-price-base'));
			let price_base_before = parseInt($(this).attr('data-price-before'));
			$("#gain").val('');				
			$("#price_gain").val('');	
			$("#porcentage").val('');
		 	 //Revisa en que status está el checkbox y controlalo según lo //desees
			 if( $( this ).is( ':checked' ) ){

			  	$(".product_units").attr('data-price-base', price_base);
			  	$(".base").attr('data-price-before', price_base);

			  	const price = parseInt($("#price").val());
			  	const price_total = price - price_base_before + price_base;
			  	$("#price").val(price_total);
			  	$("#label_price").html(price_total);	

			 }

		});


		$('#porcentage').keyup(function(event){

			const price = parseInt($("#price").val());
			const porcentage = parseInt($(this).val());
			
			const gain = price * (porcentage/100);

			$("#gain").val(gain);				
			$("#price_gain").val(gain + price);				
			$("#combo_price").val(gain + price);				
	



		});
});