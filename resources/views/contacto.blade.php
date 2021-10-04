@extends('layouts.app')

@section('content')

	<section class="page">
		<!-- ***** Page Top Start ***** -->
		<div class="cover" data-image="assets/images/photos/header.jpg">
			<div class="cover-top">
				<div class="container">
					<div class="row">
						<div class="offset-lg-3 col-lg-6">
							<h1>Contacto</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="cover-bottom">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<ol class="breadcrumb">
								<li><a href="blue-index.html">Inicio</a></li>
								<li class="active">Contacto</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Page Top End ***** -->


		<!-- ***** Page Content Start ***** -->
		<div class="page-bottom padding-top-0">
			<!-- ***** Map Container Start ***** -->
			<div class="section map">
				<div class="item">
					<!-- ***** Google Maps Start ***** -->
					<div class="map-canvas"
						data-zoom="12"
						data-lat="-37.811085"
						data-lng="144.955631"
						data-type="roadmap"
						data-hue="#ffc400"
						data-title="Zaha"
						data-icon-path="assets/images/marker-blue.png"
						data-content="455 West Orchard Street<br>Kings Mountain, NC 28086<br><br><a href='mailto:support@yourbrand.com'>support@yourbrand.com</a>">
					</div>
					<!-- ***** Google Maps End ***** -->
				</div>
			</div>
			<!-- ***** Map Container End ***** -->

			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="contact">
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="contact-item start">
										<div class="icon">
											<i class="bi bi-telephone-fill"></i>
										</div>
										<p>+54 011 7013 9816</p>
										<p>+54 011</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="contact-item">
										<div class="icon">
											<i class="bi bi-instagram"></i>
										</div>
										<a href="tel:(272) 211-7370">Cristiann Gonzalez</a>
										<a href="tel:(272) 211-7370">.</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="contact-item end">
										<div class="icon">
											<i class="fa fa-envelope"></i>
										</div>
										<a href="mailto:support@yourbrand.com">contact@cristianngonzalez.com</a>
										<a href="mailto:info@yourbrand.com">.</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="contact-bottom">
				<div class="container">
					<div class="row">
						<!-- ***** Contact Text Start ***** -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<h5 class="margin-bottom-30">No perdamos el contacto!</h5>
							<div class="contact-text">
								<p></p>
								<p>Dejame tu nombre y tu correo o numero telefonico y yo me contactare contigo, respondo correos varias veces al dia.</p>
							</div>
						</div>
						<!-- ***** Contact Text End ***** -->

						<!-- ***** Contact Form Start ***** -->
						<div class="col-lg-8 col-md-6 col-sm-12">
							<div class="contact-form">
								<div class="row">
									<div class="col-lg-6 col-md-12 col-sm-12">
										<input type="text" placeholder="¿Como te llamas?">
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12">
										<input type="text" placeholder="¿Como te contacto?">
									</div>
									<div class="col-lg-12">
										<textarea placeholder="Tu mensaje"></textarea>
									</div>
									<div class="col-lg-12">
										<button class="btn-primary-line">ENVIAR</button>
									</div>
								</div>
							</div>
						</div>
						<!-- ***** Contact Form End ***** -->
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Page Content End ***** -->
	</section>
		
@endsection


	

	
	