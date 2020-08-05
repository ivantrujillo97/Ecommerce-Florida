@extends('dspage.layout')

@section('title', 'Blog')

@section('content')

<aside id="ds-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url({{asset('dspage/images/img_bg_2.jpg')}});">
		   		<div class="overlay"></div>
		   		<div class="container col-md-12" style="background-color: rgba(118, 41, 152, 0.6);">
		   			<div class="row">
			   			<div class="col-md-12 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Trabaja con <strong>Nosotros</strong></h1>
			   					<h2>Tendrás varias opciones para trabajar</h2>
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
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-3 text-center ds-heading">
					<h2>Mira las opiones que tiene para trabajar con nosotros</h2>
					<p>Proveedor, Domiciliario, Creando contenido web o quieres que te hagamos publicidad.</p>
					<div class="col-md-12 col-md-offset-1 animate-box">
						<form action="#">
							<div class="row form-group">
								<div class="col-md-6">
									<label class="float-left" for="fname">Nombres</label>
									<input type="text" id="fname" class="form-control" placeholder="Tus nombres">
								</div>
								<div class="col-md-6">
									<label class="float-left" for="lname">Apellidos</label>
									<input type="text" id="lname" class="form-control" placeholder="Tus Apellidos">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="float-left" for="email">Email</label>
									<input type="text" id="email" class="form-control" placeholder="Tu email">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="float-left" for="subject">Celular</label>
									<input type="text" id="subject" class="form-control" placeholder="Tu numero de celular">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="float-left" for="subject">Trabajar como</label>
									<select class="selectpicker form-control">
									   <option>Selecciona</option>
									   <option>Proveedor</option>
									   <option>Domiciliario</option>
									   <option>Creando contenido web</option>
									   <option>Quiero publicidad</option>
									</select>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="float-left" for="message">¿ Porque quieres trabajar con nosotros ?</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Escribe..."></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Enviar Solicitud" class="btn btn-primary">
							</div>

						</form>
					</div>
				</div>
			</div>	
		</div>
	</div>



@endsection