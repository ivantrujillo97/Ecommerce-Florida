$(document).ready(function () {

JSMT.validacionGeneral('form-general');


	var max_image_count = $("#max_image_count").val();


    $("#input-24").fileinput({
    	theme: "fa",
    	language: "es",
        initialPreviewAsData: false,
        browseLabel: 'Agregar...',
        deleteUrl: "/site/file-delete",
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFileCount: max_image_count,
        showUpload: false
    });


});