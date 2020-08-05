<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{asset('dspage/images/favicon.png')}}" rel="icon" type="image/x-icon"/> 
    <title>Dulce Sopresa | Catalogo </title>


    <link href="{{asset('dspage/images/favicon.png')}}" rel="icon" type="image/x-icon"/>
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('dspage/css/custom-catalogo.css')}}">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('dspage/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('dspage/css/custom.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('dspage/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('dspage/bootstrap/css/bootstrap.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('dspage/css/magnific-popup.css')}}">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('dspage/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('dspage/css/owl.theme.default.min.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('dspage/css/flexslider.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('dspage/css/style.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('dspage/js/modernizr-2.6.2.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('dspage/extras/jquery.min.1.7.js')}}"></script>   
    <script type="text/javascript" src="{{asset('dspage/lib/turn.min.js')}}"></script>   
    <script type="text/javascript" src="{{asset('dspage/js/custom-catalogo.js')}}"></script>   
    <script type="text/javascript" src="{{asset('dspage/js/paginator-catalogo.js')}}"></script>   


</head>
<body>  

<div class="ds-loader"></div>

<div id="page">
    <nav class="ds-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="menu-1">
                            <ul>
                                <li class="active logo-menu"><a href="{{route('home')}}"><img src="{{asset('dspage/images/favicon.png')}}"></a></li>
                                <li class="active"><a href="{{route('catalogo')}}">NUESTRO CATALOGO</a></li>
                                <li class="active"><a href="{{route('home')}}">ir a la pagina</a></li>
                                <li class="btn-cta"><a href="{{route('shop')}}"><span>Haz tu pedido <i class="fa fa-shopping-cart"></i></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </nav>
    <div class="content scroll">
        <div class="row" id="row-catalogo">
            <div id="wrapper_libro">
                <div class="hard">
                    <img src="{{asset('dspage/images/Catalogo/caratula.jpg')}}" style="width: 100%; height: auto;">
                </div>
                <div class="hard"><img src="{{asset('dspage/images/Catalogo/caratula.jpg')}}" style="width: 100%; height: auto;"></div>
                <!-- INICIO PAGINA #1 -->
                <div class="page_" id="pagina">                           
                <div class="row">
                    <div class="col-md-6 .col-sm-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto1.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre:</strong> Desayuno Tentaci&oacute;n opcion #1<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 85.000</strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 .col-sm-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto2.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre:</strong> Desayuno Tentaci&oacute;n opcion #2<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 55.000</strong>
                    </div>
                </div>           
            </div>
            <!-- FIN PAGINA #1 -->
            <!-- INICIO PAGINA #2 -->
            <div class="page_" id="pagina">                           
                <div class="row">
                    <div class="col-md-6 .col-sm-6 align-self-rigth product">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto3.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre:</strong> Dulces Para Ni&ntilde;a<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 15.000</strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto4.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre:</strong>  Desayuno para ni&ntilde;o<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 35.000</strong>
                    </div>
                </div>           
            </div>
            <!-- FIN PAGINA #2 -->
            <!-- INICIO PAGINA #3 -->
            <div class="page_" id="pagina">                           
                <div class="row">
                    <div class="col-md-6 .col-sm-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto5.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre: </strong>Ancheta para ni&ntilde;a.<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 35.000</strong>          
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto6.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre: </strong>Cerveza decorada.<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 13.000</strong>
                    </div>
                </div>           
            </div>
            <!-- FIN PAGINA #3 -->        
            <!-- INICIO PAGINA #4 -->
            <div class="page_" id="pagina">                           
                <div class="row">
                    <div class="col-md-6 .col-sm-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto7.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre: </strong>Caja sencilla para &Eecute;l.<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 25.000</strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto8.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre: </strong>Juego rosas.<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 75.000</strong>
                    </div>
                </div>           
            </div>
            <!-- FIN PAGINA #4 -->        
            <!-- INICIO PAGINA #5 -->
            <div class="page_" id="pagina">                           
                <div class="row">
                    <div class="col-md-6 .col-sm-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto9.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre: </strong>Juego rosas#2.<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 30.000</strong>
                    </div>
                    <div class="col-md-6 .col-sm-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto10.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre: </strong>Dulce Cumple.<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 70.000</strong> 
                    </div>
                </div>         
            </div>
            <!-- FIN PAGINA #5 -->
            <!-- INICIO PAGINA #6 -->
            <div class="page_" id="pagina">                           
                <div class="row">
                    <div class="col-md-6 .col-sm-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto11.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre: </strong>Dulce despertar.<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 78.000</strong> 
                    </div>
                    <div class="col-md-6 .col-sm-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto12.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre: </strong>Endulza tu dia.<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 85.000</strong> 
                    </div>
                </div>         
            </div>
            <!-- FIN PAGINA #6 -->
            <!-- INICIO PAGINA #7 -->
            <div class="page_" id="pagina">                           
                <div class="row">
                    <div class="col-md-6 .col-sm-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto13.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre: </strong>Dulce amor.<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 38.000</strong> 
                    </div>
                    <div class="col-md-6 .col-sm-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto14.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre: </strong>Enamorala siempre.<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 70.000</strong> 
                    </div>
                </div>         
            </div>
            <!-- FIN PAGINA #7 -->
            <!-- INICIO PAGINA #8 -->
            <div class="page_" id="pagina">                           
                <div class="row">
                    <div class="col-md-6 .col-sm-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto15.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre: </strong>Bouquete margarita sencillo.<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 55.000</strong> 
                    </div>
                    <div class="col-md-6 .col-sm-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto16.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre: </strong>Bouquete jardin de rosas.<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 65.000</strong> 
                    </div>                
                </div>         
            </div>
            <!-- FIN PAGINA #8 -->
            <!-- INICIO PAGINA #9 -->
            <div class="page_" id="pagina">                           
                <div class="row">
                    <div class="col-md-6 .col-sm-6 product-catalogo">
                        <img class="img-fluid" src="{{asset('dspage/images/Catalogo/producto17.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-5 description text-left align-self-center">
                        <strong class="title-catalogo">Informacion</strong><br><br>
                        <strong class="title-catalogo">Nombre: </strong>Bouquete eres mi amor.<br>
                        <strong class="title-catalogo"><a href="#" class="show-content-modal">Ver contenido</a></strong><br><br>
                        <strong class="title-catalogo">Precio : $ 55.000</strong> 
                    </div>               
                </div>         
            </div>
            <!-- FIN PAGINA #9 -->
            <!--  PAGINA FINAL -->
            <!-- <div class="hard"><img src="{{asset('dspage/images/Catalogo/Pages.jpg')}}" style="width: 100%; height: auto;"></div> -->
            <!-- FIN PAGINA -->                                                                          
        </div>       
    </div><br>
    <div class="row col-md-12" >
        <div id="paginador">
                
        </div>        
    </div>
</div>
</div>
<!-- MODAL -->
    <div class="modal fade" id="modal-show-content" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Desayuno Tentaci&oacute;n opcion #1</h4>
                    <button type="button" class="close" id="close-modal" >
                        <span aria-hidden="true">&times;</span>
                    </button>   
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-4"><img id="img-big-modal" src="{{asset('dspage/images/Catalogo/producto1.jpg')}}"></div>
                      <div class="col-md-8"><strong>Contenido: </strong>Base #1 totalmente decorada, 1 peluche pequeño, 2 globos metalizados ( grande y mediano), 3 globos en helio, 1 Hatsu, bebida caliente ( milo o cafe en leche), tortilla con jamon y queso o wuafles con fresas y miel, torta personal de la casa, 1 bonturt, gomas, chocalina, fruta picada, fresas con chocolate.</div>
                    </div>
                  </div>
                </div>

                  <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="col-md-12 text-center">
                        <p><small class="block">&copy; JSMT Organizacion.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bloqueo" class=""></div>  
</body>
<footer>
    <div class="row copyright">
        <div class="col-md-12 text-center">
            <p><small class="block">&copy; JSMT Organizacion.</small></p>
        </div>
    </div>
</footer>
</html>