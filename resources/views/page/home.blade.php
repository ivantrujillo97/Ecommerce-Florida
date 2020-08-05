@extends('dspage.layout')

@section('title', 'Home')

@section('content')

@include('dspage/slider') {{---> SLIDER <--}}

    <div id="ds-intro">
        <div class="row">
            <div class="intro animate-box">
                <div class="intro-grid color-1">
                    <span class="icon"><i class="fa fa-gifts"></i></span>
                    <h3>Nuevos Sorteos</h3>
                    <p>Comparte nuestra pagina y registrate para m&aacute;s informaci&oacute;n.</p>
                    <a href="#" class="btn btn-primary">Leer m&aacute;s</a>
                </div>
                <div class="intro-grid color-2">
                    <span class="icon"><i class="fa fa-ticket-alt"></i></span>
                    <h3>Nuevas Promociones</h3>
                    <p>M&aacute;s Productos en un solo combo a precios inimaginables.</p>
                    <a href="#" class="btn btn-primary">Leer m&aacute;s</a>
                </div>
                <div class="intro-grid color-3">
                    <span class="icon"><i class="fa fa-shopping-cart"></i></span>
                    <h3>Crea tu combo</h3>
                    <p>Soprende a tu seres queridos cuidando tu bolsillos</p>
                    <a href="#" class="btn btn-primary">crear combo</a>
                </div>
            </div>
        </div>
    </div>

    <div id="ds-services">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-3 text-center ds-heading">
                    <h2>Nuestras Redes Sociales</h2>
                    <p>Esperamos que nos sigan en todas la redes en la que estamos activos, si lo estan tendran la oportunidad en participar en muchos sorteos y tambien podran tener muchos beneficios con nuestros productos.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="fab fa-whatsapp"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Whatsapp</a></h3>
                            <p>310-526-1209 por este medio nos puedes contactar para cualquier solicitud.</p>
                        </div>
                    </div>
                </div>  
                <div class="col-md-4 animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="fab fa-twitter"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Twitter</a></h3>
                            <p>Más que informacion de nuestros productos podras ver consejos diarios para nuestro dia a dia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="fab fa-youtube"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Youtube</a></h3>
                            <p>En nuestro canal padras encontrar videos de nuestras recetas y manualidades para que hagas en casa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="fab fa-facebook"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Facebook</a></h3>
                            <p>Encontraras noticias sobre nuestros productos, consejos, recetas y mucho contenido el cual te ayudara para soprender a tus seres queridos</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="fab fa-instagram"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Instagram</a></h3>
                            <p>Igual que en nuestro facebook podras encontrar tambien promociones y un seguimiento mas profundo del proceso al hacer nuestros combos.</p>
                        </div>
                    </div>
                </div>          
                <div class="col-md-4 animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="fab fa-blogger"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Blogger</a></h3>
                            <p>Encontraras todas las noticias publicadas en nuestro facebook con organizacion y fecha para que puedes buscar una noticia que te interese</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ds-choose">
        <div class="container-fluid">
            <div class="row">
                <div class="choose">
                    <div class="half img-bg" style="background-image: url({{asset('dspage/images/img_bg_6.jpg')}});"></div>
                    <div class="half features-wrap">
                        <div class="ds-heading animate-box">
                            <h2>Trabaja con nosotros</h2>
                        </div>
                        <div class="features animate-box">
                            <span class="icon text-center"><i class="fa fa-warehouse"></i></span>
                            <div class="desc">
                                <h3>Como proveedor</h3>
                                <p>Si tienes algun producto que nosotros ulticemos y quieres ser nuestro proveedor numero uno contactanos.</p>
                            </div>
                        </div>
                        <div class="features animate-box">
                            <span class="icon text-center"><i class="fa fa-motorcycle"></i></span>
                            <div class="desc">
                                <h3>Como domiciliario</h3>
                                <p>Si quieres trabajar con nosotros haciendo domicilios llevando muchas sopresas a la casa de nustros clientes contactanos.</p>
                            </div>
                        </div>
                        <div class="features animate-box">
                            <span class="icon text-center"><i class="icon-document-text"></i></span>
                            <div class="desc">
                                <h3>Creando contenido</h3>
                                <p>Si eres diseñador o tienes algun conocimiento audio visual y manejo de redes sociales contactanos.</p>
                            </div>
                        </div>
                        <div class="features animate-box">
                            <span class="icon text-center"><i class="fa fa-ticket-alt"></i></span>
                            <div class="desc">
                                <h3>Publicidad</h3>
                                <p>Si quieres hacer publicida a algun producto o camapaña no politica contactanos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ds-blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-3 text-center ds-heading">
                    <h2>Lee nuestro blog</h2>
                    <p>En nuestro blog podras encontrar muchas informacion sobre recetas, consejos y entre muchas cosas más.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row animate-box">
                        <div class="owl-carousel owl-carousel-fullwidth">
                            <div class="item">
                                <div class="blog-slide active">
                                    <a href="blog.html" class="blog-box" style="background-image: url({{asset('dspage/images/blog-1.jpg')}});">
                                        <span class="date">Mayo 13, 2020</span>
                                    </a>
                                    <div class="desc">
                                        <h3><a href="blog.html">Receta: Gelatina Mosaico</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-slide active">
                                    <a href="blog.html" class="blog-box" style="background-image: url({{asset('dspage/images/blog-2.jpg')}});">
                                        <span class="date">Mayo 13, 2020</span>
                                    </a>
                                    <div class="desc">
                                        <h3><a href="blog.html">Mira nuestro catalogo</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ds-counter" class="ds-counters" style="background-image: url({{asset('dspage/images/img_bg_2.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-group-outline"></i></span>
                            <span class="ds-counter js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="ds-counter-label">Clientes satisfechos</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-home-outline"></i></span>
                            <span class="ds-counter js-counter" data-from="0" data-to="120" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="ds-counter-label">Seguidores</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-user-add-outline"></i></span>
                            <span class="ds-counter js-counter" data-from="0" data-to="20" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="ds-counter-label">Empleados</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-point-of-interest-outline"></i></span>
                            <span class="ds-counter js-counter" data-from="0" data-to="8" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="ds-counter-label">Departamentos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ds-register" style="background-image: url({{asset('dspage/images/img_bg_5.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-1 animate-box">
                    <div class="date-counter text-center">
                        <h2>Crea tu <strong class="color">Combo Perfecto</strong></h2>
                        <h3>Acomodalo a tu <strong>Presupuesto y Gusto</strong></h3>
                        <p><strong>Sorprende a tu ser más querido!</strong></p>
                        <p><a href="#" class="btn btn-primary btn-lg">Crear combo<i class="fa fa-gift"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ds-testimonial" class="ds-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-3 text-center ds-heading">
                    <h2><span>Testimonios</h2>
                    <p>Aquí algunos de nuestros clientes con sus testimonios de nuestro servicios.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="testimony text-center">
                        <span class="img-user" style="background-image: url({{asset('dspage/images/person2.jpg')}});"></span>
                        <span class="user">Herbert Barker</span>
                        <blockquote>
                            <p>"Cumplen la hora de entrega, los combos se pueden acomodar a tu presupuesto."</p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="testimony text-center">
                        <span class="img-user" style="background-image: url({{asset('dspage/images/person1.jpg')}});"></span>
                        <span class="user">David Fox</span>
                        <blockquote>
                            <p>"Diseños muy lindos, recalco la puntaliadad de la entrega y hay productos muy economicos."</p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="testimony text-center">
                        <span class="img-user" style="background-image: url({{asset('dspage/images/person3.jpg')}});"></span>
                        <span class="user">Princess Danica</span>
                        <blockquote>
                            <p>"Son muy profesionales en lo que hacen, tienen recetas esquisitas y trae muchas cosas novedosas."</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
