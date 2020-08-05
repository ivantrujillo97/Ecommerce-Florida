$(document).ready(function () {

	var image_base = $("#base_image_name").val();

	$("#base_image").fileinput({
	    theme: "fa",
	    language: "es",
	    maxFileSize: 5000,
	    showClose: false,
	    showCaption: false,
	    showZoom: false,
	    browseLabel: 'Cambiar...',
	    browseIcon: '<i class="fa fa-folder-open"></i>',
	    browseClass: 'btn btn-outline-success',
	    removeIcon: '<i class="fa fa-trash-alt"></i>',
	    removeClass: 'btn btn-outline-secondary',
	    elErrorContainer: '#kv-base-errors-1',
	    msgErrorClass: 'alert alert-block alert-danger',
	    defaultPreviewContent: '<img id="base-image-default" src="'+image_base+'">',
	    layoutTemplates: {main2: '{preview} {remove} {browse}'},
	    allowedFileExtensions: ["jpg", "png", "gif"]
	});


});