@extends('dspage.layout')

@section('title', 'Blog')

@section('content')

	<aside id="ds-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url({{asset('dspage/images/img_bg_8.jpg')}});">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-12 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Nuestro <strong>Blog </strong></h1>
								<h2>Noticias, recetas y muchas cosas más</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="ds-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="blog-wrap animate-box">
						<div class="row">
							<div class="col-md-12">
								<span class="col-md-2 i-search"><i class="fa fa-search"></i></span>
								<input class="col-md-10" type="text" name="search" id="search" autocomplete="off" placeholder="Buscar">
							</div>
						</div>
					</div>
					<br>		
					<div class="blog-wrap animate-box">
						<div class="row">
							<div class="col-md-12">
								<a href="#" class="blog-img" style="background-image: url({{asset('dspage/images/blog-1.jpg')}});">
									
								</a>
							</div>
							<div class="col-md-12">
								<div class="blog-desc">
									<h2><a href="blog-single.html">Receta: Gelatina Mosaico</a></h2>
									<div class="post-meta">
										<span><a href="#">Publicado</a></span>
										<span>May 13, 2020</span>
										<span><a href="blog-single.html">3 Comentarios</a></span>
									</div>
									<p>Hola esta es nuestra primer receta la llamamos gelatina mosaico y la incluimos en algunas de nuestras meriendas y desayunos. Esperamos que la realizen es super facil de hacer y muy economica.</p>
									<p><a href="blog-single.html" class="btn btn-primary">Leer Más</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="blog-wrap animate-box">
						<div class="row">
							<div class="col-md-12">
								<a href="#" class="blog-img" style="background-image: url({{asset('dspage/images/blog-2.jpg')}});">
									
								</a>
							</div>
							<div class="col-md-12">
								<div class="blog-desc">
									<h2><a href="blog-single.html">Catalogo Dulce Sopresa</a></h2>
									<div class="post-meta">
										<span><a href="#">Publicado</a></span>
										<span>May 13, 2020</span>
										<span><a href="blog-single.html">3 Comentarios</a></span>
									</div>
									<p>Catalogo Dulce Sopresa Aquí podrás ver algunos de nuestros desayunos y meriendas que tenemos para ofrecerte, teniendo en cuenta que estos combos pueden variar el precio de acuerdo con tu presupuesto y gusto. .</p>
									<p><a href="blog-single.html" class="btn btn-primary">Leer Más</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<button type="button" class="btn btn-primary float-left"><-- Anterior</button>
						<button type="button" class="btn btn-primary float-right">Siguiente --></button>
					</div>
				</div>
				<div class="col-md-4">
					<aside class="sidebar">
						<div class="side animate-box">
							<h2>Categorias</h2>
							<ul class="list">
								<li><a href="#">Recetas <i class="icon-check"></i> <span class="badge badge-default badge-pill text-white">27</span></a></li>
								<li><a href="#">Fitnes <i class="icon-check"></i> <span class="badge badge-default badge-pill text-white">27</span></a></li>
								<li><a href="#">Consejos <i class="icon-check"></i> <span class="badge badge-default badge-pill text-white">27</span></a></li>
								<li><a href="#">Noticias <i class="icon-check"></i> <span class="badge badge-default badge-pill text-white">27</span></a></li>
							</ul>
						</div>

						<div class="side animate-box">
							<h2>Post Recientes</h2>
							<div class="post">
								<a href="blog.html">
									<div class="blog-img" style="background-image: url({{asset('dspage/images/blog-2.jpg')}});"></div>
									<div class="desc">
										<span>May 13, 2020</span>
										<h3>Catalogo Dulce Sopresa Aquí podrás ver algunos de nuestros desayunos</h3>
									</div>
								</a>
							</div>
							<div class="post">
								<a href="blog.html">
									<div class="blog-img" style="background-image: url({{asset('dspage/images/blog-1.jpg')}});"></div>
									<div class="desc">
										<span>May 13, 2020</span>
										<h3>nuestra primer receta la llamamos gelatina mosaico y la incluimos</h3>
									</div>
								</a>
							</div>
						</div>
						<div class="side animate-box">
							<h2>Publicidad</h2>
							<p></p>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>


@endsection