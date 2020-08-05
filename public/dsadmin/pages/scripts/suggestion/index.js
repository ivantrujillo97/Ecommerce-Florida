$(document).ready(function (){

	$('#table-suggestions').DataTable({
		"paging":   false,
		"info": false,
        "language": {
            "lengthMenu": "Ver _MENU_ ",
            "zeroRecords": "Lo sentimos, no se encontro ninguna sugerencia",
            "info": "Paginas para ver _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "search":         "Buscar:",
            "infoFiltered": "( _MAX_ sugerencias)",
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