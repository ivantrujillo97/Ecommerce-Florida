$(document).ready(function(){
  //creamos dentro del div paginador otro div y las listas
   $('#paginador').append('<nav aria-label="Page navigation example"><ul id="paginador_libro" class="pagination"></ul></nav>');
   var nav = $('#paginador_libro');
  //obtenemos el numero de paginas totales del libro
   var paginas = parseInt($("#wrapper_libro").turn("pages"));
  //saco el ancho para el div paginador, lo que hago es
  //multiplico el ancho del LI por el numero de paginas y le agrego el ancho de los LI
  //de previo y siguiente, esto para centrar el paginador ;-)
   var ancho = (paginas*28) + 50;
   $("#paginador").css('width', ancho + "px");
  //agrego el LI para pagina previa
   $("#paginador_libro").append('<li class="prev_page page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a></li>');
   //un FOR para agregar cada LI por cada una de las paginas
   for (var i=1;i<paginas+1;i++){
    $("#paginador_libro").append('<li class="li_pagina page-item" id="page_'+i+'"><a class="page-link" href="#" rel="'+i+'">'+i+'</a></li>');
   }  
  //agrego el LI para pagina siguiente
   $("#paginador_libro").append('<li class="next_page page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-right"></a></li>');
  //Este hace la accion de ir a la pagina al hacer click en el link en cada LI
   $(".li_pagina a").click(function(){
    var rel = $(this).attr("rel");
    $("#wrapper_libro").turn("page", rel);
   });
  //agrega la funcion para la accion del link pagina previa
   $(".prev_page a").click(function(){
    $("#wrapper_libro").turn("previous");
   });
  //agrega la funcion para la accion del link pagina siguiente
   $(".next_page a").click(function(){
    $("#wrapper_libro").turn("next");
   });
   //aqui hago varias cosas, esta funcion es llamada al moverse por entre las paginas
   $("#wrapper_libro").bind("turned", function(event, page, view) {
  //primero limpio la clase activa y luego la agrego al LI de la pagina actual
    $(".li_pagina").removeClass('active');
    $("#page_" + page).addClass('active');
    //esto es para arreglar, cuando se hace click en un LI que muestre como activa las 2 paginas visibles
    if (page%2==0 && page>1){
     var sig = parseInt(page)+1
     $("#page_" + sig).addClass('active');
    }else{
     var sig = parseInt(page)-1
     $("#page_" + sig).addClass('active');
    };
     }); 

  //agrego la clase active al primer LI al iniciar  if ( $("#wrapper_libro").turn("page")==1 ){
    $("#page_1").addClass('active');
  });