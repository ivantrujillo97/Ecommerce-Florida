@extends('dspage.layout')

@section('title', 'Blog')

@section('content')

	<aside id="ds-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url({{asset('dspage/images/img_bg_6.jpg')}});">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-12 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Nuestra <strong>Tienda </strong></h1>
								<h2>Combos y productos individuales</h2>
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
				<div class="blog-wrap col-md-12 text-right">
					CARRITO <i class="fa fa-shopping-cart"></i> / $0
				</div>				
				<div class="col-md-8">
					<div class="animate-box">
						<div class="row">
							<div class="col-md-4">
								<a href="#" class="blog-img product" style="background-image: url({{asset('dspage/images/Catalogo/producto1.jpg')}});">

									<div class="info-product text-center" id="info-product-1">
										<strong>Desayuno Tentaci&oacute;n opcion #1</strong>
										<br>
										<div class="precio">$85.000</div>
									</div>
									<div class="add-product text-center">
										<span style="font-size: 50px">
											<i class="fa fa-cart-plus"></i>
										</span>
									</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="#" class="blog-img product" style="background-image: url({{asset('dspage/images/Catalogo/producto2.jpg')}});">

									<div class="info-product text-center" id="info-product-1">
										<strong>Desayuno Tentaci&oacute;n opcion #1</strong>
										<br>
										<div class="precio">$85.000</div>
									</div>
									<div class="add-product text-center">
										<span style="font-size: 50px">
											<i class="fa fa-cart-plus"></i>
										</span>
									</div>									
								</a>
							</div>
							<div class="col-md-4">
								<a href="#" class="blog-img product" style="background-image: url({{asset('dspage/images/Catalogo/producto3.jpg')}});">

									<div class="info-product text-center" id="info-product-1">
										<strong>Desayuno Tentaci&oacute;n opcion #1</strong>
										<br>
										<div class="precio">$85.000</div>
									</div>
									<div class="add-product text-center">
										<span style="font-size: 50px">
											<i class="fa fa-cart-plus"></i>
										</span>
									</div>									
								</a>
							</div>							
						</div>
					</div>
					<div class="animate-box">
						<div class="row">
							<div class="col-md-4">
								<a href="#" class="blog-img product" style="background-image: url({{asset('dspage/images/Catalogo/producto4.jpg')}});">

									<div class="info-product text-center" id="info-product-1">
										<strong>Desayuno Tentaci&oacute;n opcion #1</strong>
										<br>
										<div class="precio">$85.000</div>
									</div>
									<div class="add-product text-center">
										<span style="font-size: 50px">
											<i class="fa fa-cart-plus"></i>
										</span>
									</div>									
								</a>
							</div>
							<div class="col-md-4">
								<a href="#" class="blog-img product" style="background-image: url({{asset('dspage/images/Catalogo/producto5.jpg')}});">

									<div class="info-product text-center" id="info-product-1">
										<strong>Desayuno Tentaci&oacute;n opcion #1</strong>
										<br>
										<div class="precio">$85.000</div>
									</div>
									<div class="add-product text-center">
										<span style="font-size: 50px">
											<i class="fa fa-cart-plus"></i>
										</span>
									</div>									
								</a>
							</div>
							<div class="col-md-4">
								<a href="#" class="blog-img product" style="background-image: url({{asset('dspage/images/Catalogo/producto6.jpg')}});">

									<div class="info-product text-center" id="info-product-1">
										<strong>Desayuno Tentaci&oacute;n opcion #1</strong>
										<br>
										<div class="precio">$85.000</div>
									</div>
									<div class="add-product text-center">
										<span style="font-size: 50px">
											<i class="fa fa-cart-plus"></i>
										</span>
									</div>									
								</a>
							</div>							
						</div>
					</div>
					<div class="animate-box">
						<div class="row">
							<div class="col-md-4">
								<a href="#" class="blog-img product" style="background-image: url({{asset('dspage/images/Catalogo/producto7.jpg')}});">
	
									<div class="info-product text-center">
										<strong>Desayuno Tentaci&oacute;n opcion #1</strong>
										<br>
										<div class="precio">$85.000</div>
									</div>
									<div class="add-product text-center">
										<span style="font-size: 50px">
											<i class="fa fa-cart-plus"></i>
										</span>
									</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="#" class="blog-img product" style="background-image: url({{asset('dspage/images/Catalogo/producto10.jpg')}});">

									<div class="info-product text-center" id="info-product-1">
										<strong>Desayuno Tentaci&oacute;n opcion #1</strong>
										<br>
										<div class="precio">$85.000</div>
									</div>
									<div class="add-product text-center">
										<span style="font-size: 50px">
											<i class="fa fa-cart-plus"></i>
										</span>
									</div>									
								</a>
							</div>
							<div class="col-md-4">
								<a href="#" class="blog-img product" style="background-image: url({{asset('dspage/images/Catalogo/producto9.jpg')}});">

									<div class="info-product text-center" id="info-product-1">
										<strong>Desayuno Tentaci&oacute;n opcion #1</strong>
										<br>
										<div class="precio">$85.000</div>
									</div>
									<div class="add-product text-center">
										<span style="font-size: 50px">
											<i class="fa fa-cart-plus"></i>
										</span>
									</div>									
								</a>
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
								<li><a href="#">Mujeres <i class="icon-check"></i> <span class="badge badge-default badge-pill text-white">27</span></a></li>
								<li><a href="#">Hombre <i class="icon-check"></i> <span class="badge badge-default badge-pill text-white">27</span></a></li>
								<li><a href="#">Niños <i class="icon-check"></i> <span class="badge badge-default badge-pill text-white">27</span></a></li>
								<li><a href="#">Niñas <i class="icon-check"></i> <span class="badge badge-default badge-pill text-white">27</span></a></li>
								<li><a href="#">Eroticos <i class="icon-check"></i> <span class="badge badge-default badge-pill text-white">27</span></a></li>
							</ul>
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