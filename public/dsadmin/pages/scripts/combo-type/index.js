$(document).ready(function (){


	$('.combo-type-destroy').on('click', function(event){
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

	function ajaxRequest(data, url, functions, form){
		$.ajax({
			url:url,
			type:'POST',
			data:data,
			success: function(answer){
				if (functions == 'destroy') {
					

				}else if (functions == 'show'){
					$('#modal-combo-type-show').html(answer)
					$('#modal-combo-type-show').modal('show');
				}
			},
			error:function(){

			}
		});
	}

	$('#table-combo-types').DataTable({
		"paging":   true,
        "language": {
            "lengthMenu": "Ver _MENU_ ",
            "zeroRecords": "Lo sentimos, no se encontro ningun tipo de combo",
            "info": "Paginas para ver _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "search":         "Buscar:",
            "infoFiltered": "( _MAX_ tipos de combo)",
            "paginate": {
		        "first":      "Primero",
		        "last":       "Ultimo",
		        "next":       "Siguiente",
		        "previous":   "Anterior"
		    }
        }
	});


});