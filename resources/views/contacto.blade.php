<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cristiann Gonzalez - Diseño y Desarrollo Web</title>
	<meta name="description" content="Desarrollo web, desarrollo movil, diseño grafico" />
	<meta name="keywords" content="desarrollo, web, america, latina, paginas, diseño, internet, publicidad, banners, redes, seo" />
	<meta name="author" content="Cristian Nazareno Gonzalez"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/images/favicon/favicon.png" />

	<!-- Bootstrap & Plugins CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<!-- Custom CSS -->
	<link href="assets/css/blue.css" rel="stylesheet" type="text/css">
</head>
<body>

	<!-- Messenger plugin de chat Code -->
	<div id="fb-root"></div>

	<!-- Your plugin de chat code -->
	<div id="fb-customer-chat" class="fb-customerchat">
	</div>

	<script>
		var chatbox = document.getElementById('fb-customer-chat');
		chatbox.setAttribute("page_id", "100200461810596");
		chatbox.setAttribute("attribution", "biz_inbox");

		window.fbAsyncInit = function() {
			FB.init({
				xfbml            : true,
				version          : 'v12.0'
			});
		};

		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>


	<!-- ***** Preloader Start ***** -->
	<div id="preloader">
		<div class="jumper">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>	
	<!-- ***** Preloader End ***** -->
	
	
	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo ***** -->
						<a href="index.html" class="logo">
							<img src="assets/images/logo.png" alt="Cristiann Gonzalez Desarrollo web, diseño grafico. Videos" type="img/png"/>
						</a>
						<!-- ***** Logo End ***** -->


						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li><a href="blue-index.html#welcome">Inicio</a></li>
							<li class="submenu">
								<a href="javascript:;">Web, SEO y redes</a>
								<ul>
									<li><a href="index.html#features">Servicios</a></li>
									<li><a href="index.html#testimonials">Testimonios</a></li>
									<li><a href="index.html#pricing-plans">Planes y precios</a></li>
									<li><a href="index.html#blog">Servicios Populares</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:;">Info</a>
								<ul>
									<li><a href="about.html">Acerca de mi</a></li>
									<li><a href="features.html">Servicios</a></li>
									<li><a href="faq.html">Preguntas Frecuentes</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contacto</a></li>
							<li><a class="btn-nav" href="blue-contact.html">Pide cotizacion personalizada</a></li>
						</ul>
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->
	<!----======================================================================================================================-->


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

	
	<!-- ***** Footer Start ***** -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<img src="assets/images/logo-footer.png" class="logo" alt="">
					<div class="text">Proveemos servicios para negocios digitales, diseño grafico, analisis de SEO y Desarrollo web.</div>
					<ul class="social">
						<!--Facebook-->
						<li><a href="https://www.facebook.com/cristianngonzalezok" target="_black"><i class="bi bi-facebook"></i></a></li>
						<!--Instagram-->
						<li><a href="https://www.instagram.com/cristianngonzalez_/" target="_black"><i class="bi bi-instagram"></i></a></li>
						<!--Whatsapp-->
						<li><a href="https://wa.me/+5491170139816" target="_black"><i class="bi bi-whatsapp"></i></a></li>
						<!--Telegram-->
						<!--Correo-->
						<li><a href="mailto:contact@cristianngonzalez.com" target="_black"><i class="bi bi-envelope"></i></a></li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6">
					<h5>Soporte</h5>
					<ul class="footer-nav">
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Acerca de nosotros</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Servicios</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Preguntas Frecuentes</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Contacto</span></a></li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-12">
					<h5>Contactame</h5>
					<div class="address">
						<p>Telefono: (+54) 011-7013-9816</p>
						<p><a href="#">contact@cristianngonzalez.com</a></p>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="copyright">© 2021 Cristian Gonzalez. Todos los derechos reservados.</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- ***** Footer End ***** -->



	<!-- jQuery -->
	<script src="assets/js/jquery-2.1.0.min.js"></script>

	<!-- Bootstrap -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="assets/js/scrollreveal.min.js"></script>
	<script src="assets/js/parallax.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/imgfix.min.js"></script>	

	<!-- Global Init -->
	<script src="assets/js/custom.js"></script>
</body>
</html>