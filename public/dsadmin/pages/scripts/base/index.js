$(document).ready(function (){


	$('.change-state').on('change', function(event){
		event.preventDefault();


		const url = $(this).attr('data-url');
		const data = {
			_token:$("input[name=_token]").val()
		}
		ajaxRequest(data, url, 'state', 'GET');


	});

	$('.base-destroy').on('click', function(event){
		event.preventDefault();
		
		const url = $(this).attr('href');

		swal({
            title: '¿ Está seguro que desea eliminar el registro ?',
            text: "Esta acción no se puede deshacer!",
            icon: 'warning',
            buttons: {
                cancel: "Cancelar",
                confirm: "Aceptar"
            },
        }).then((value) => {
            if (value) {
                window.location.href = url;
            }
        });
	});


	$('.base-show').on('click', function(event){
		event.preventDefault();

		const url = $(this).attr('href');
		const data = {
			_token:$("input[name=_token]").val()
		}
		ajaxRequest(data, url, 'show', 'POST');
	});	


	function ajaxRequest(data, url, functions, type){
		$.ajax({
			url:url,
			type:type,
			data:data,
			success: function(answer){
				if (functions == 'base_destroy') {
					

				}else if (functions == 'show'){
					$('#modal-base-show').html(answer)
					$('#modal-base-show').modal('show');
				}else if (functions == 'state'){
					window.location.href = url;
				}
			},
			error:function(){

			}
		});
	}

	$('#table-bases').DataTable({
		"paging":   false,
		"info": false,
        "language": {
            // "lengthMenu": "Ver _MENU_ ",
            "zeroRecords": "Lo sentimos, no se encontro ninguna base",
            "info": "Paginas para ver _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "search":         "Buscar:",
            "infoFiltered": "( _MAX_ bases)",
            "paginate": {
		        "first":      "Primero",
		        "last":       "Ultimo",
		        "next":       "Siguiente",
		        "previous":   "Anterior"
		    }
        }
	});

	$(document).on('click','[data-toggle="lightbox"]', function(event){
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

});