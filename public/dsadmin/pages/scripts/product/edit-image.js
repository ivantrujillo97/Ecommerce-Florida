$(document).ready(function () {

	var image_product = $("#product_image_name").val();

	$("#product_image").fileinput({
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
	    elErrorContainer: '#kv-product-errors-1',
	    msgErrorClass: 'alert alert-block alert-danger',
	    defaultPreviewContent: '<img id="product-image-default" src="'+image_product+'">',
	    layoutTemplates: {main2: '{preview} {remove} {browse}'},
	    allowedFileExtensions: ["jpg", "png", "gif"]
	});
	
});