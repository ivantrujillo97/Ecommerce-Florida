$(document).ready(function (){


	$('.product-category-destroy').on('click', function(event){
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
					$('#modal-product-category-show').html(answer)
					$('#modal-product-category-show').modal('show');
				}
			},
			error:function(){

			}
		});
	}

	$('#table-product-categories').DataTable({
		"paging":   true,
        "language": {
            "lengthMenu": "Ver _MENU_ ",
            "zeroRecords": "Lo sentimos, no se encontro ningun categorias producto",
            "info": "Paginas para ver _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "search":         "Buscar:",
            "infoFiltered": "( _MAX_ categorias de productos)",
            "paginate": {
		        "first":      "Primero",
		        "last":       "Ultimo",
		        "next":       "Siguiente",
		        "previous":   "Anterior"
		    }
        }
	});
});