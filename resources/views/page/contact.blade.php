@extends('dspage.layout')

@section('title', 'Contactanos')

@section('content')

	<aside id="ds-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url({{asset('dspage/images/slider-2.jpg')}});">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-12 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1><strong>Contactanos</strong></h1>
								<h2>Aparte de nuestras redes sociales</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="ds-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-1 animate-box text-center">
					<h3>Información de contacto</h3><br>
					<div class="row contact-info-wrap">
						<div class="col-md-4 text-left">
							<p><span><i class="icon-location"></i></span> Carrera 25 # 9 - 17, Florida - Valle, Colombia</p>
						</div>
						<div class="col-md-4 text-center" >
							<p><span><i class="icon-phone"></i></span> <a href="tel://1234567920">+57 310-526-1209</a></p>
						</div>
						<div class="col-md-4 text-right">
							<p><span><i class="icon-mail"></i></span> <a href="mailto:dulcesorpresaflorida@gmail.com">dulcesorpresaflorida@gmail.com</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-md-offset-1 animate-box">
					<h3>Ponerse en contacto</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="fname">Nombre</label>
								<input type="text" id="fname" class="form-control" placeholder="Tu nombre">
							</div>
							<div class="col-md-6">
								<label for="lname">Apellidos</label>
								<input type="text" id="lname" class="form-control" placeholder="Tus apellidos">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" class="form-control" placeholder="Tu email ">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Motivo</label>
								<input type="text" id="subject" class="form-control" placeholder="Tu motivo para ponerse en contacto">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Mensaje</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Escribe..."></textarea>
							</div>
						</div>
						<div class="form-group text-center">
							<input type="submit" value="Enviar" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
	<div class="ds-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.94323615166027!2d-76.24093059925525!3d3.327499747366172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a12cc72cdca09%3A0xcb6aeb5409960e1f!2sCra.%2025%20%239-17%2C%20Florida%2C%20Valle%20del%20Cauca!5e0!3m2!1ses!2sco!4v1589606668772!5m2!1ses!2sco"  frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
	</div>


@endsection