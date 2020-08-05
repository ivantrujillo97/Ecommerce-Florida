$(document).ready(function(){

	$(".ds-loader").fadeOut("slow");

	// MODAL SHOW Y CLOSE

	$('.show-content-modal').on('click', function (event) {
        event.preventDefault();
        $('#modal-show-content').addClass('show');
        $('#modal-show-content').css("display", "block");
        $("#bloqueo").addClass("modal-backdrop fade show");
    });

    $('#close-modal').on('click', function (event) {
        event.preventDefault();
        $('#modal-show-content').removeClass('show');
        $('#modal-show-content').css("display", "none");
        $("#bloqueo").removeClass("modal-backdrop fade show");
    });


    // CATALOGO
	
	$('#wrapper_libro').turn({
		gradients: true,
		autoCenter: true,
		width: 800,
		height: 500,
		acceleration: true
	});

	$('.next').click(function(){
		event.preventDefault(); 
		$("#book").turn("next");
	});

	$('.previous').click(function(){
		event.preventDefault(); 
		$("#book").turn("previous");
	});



	$(document).keydown(function(e) {

		if(e.keyCode == 39 || e.keyCode == 37 ){

			if (e.keyCode == 39) {
				event.preventDefault(); 
				$("#wrapper_libro").turn("next");
			}else{
				event.preventDefault(); 
				$("#wrapper_libro").turn("previous");
			}

		}
		
	});



});