$(document).ready(function () {

	JSMT.validacionGeneral('form-general');

	$("#base_name").focus();

    $("#input-24").fileinput({
    	theme: "fa",
    	language: "es",
    	browseLabel: 'Buscar...',
        initialPreviewAsData: false,
        deleteUrl: "/site/file-delete",
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFileCount: 4,
        showUpload: false
    });


});