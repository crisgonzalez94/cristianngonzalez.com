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
	<div id="fb-root" style="z-index: 100;"></div>

	<!-- Your plugin de chat code -->
	<div id="fb-customer-chat" class="fb-customerchat" style="z-index: 100;"></div>

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
						<a href="{{route("inicio")}}" class="logo">
							<img src="assets/images/logo.png" alt="Cristiann Gonzalez Desarrollo web, diseño grafico. Videos" type="img/png"/>
						</a>
						<!-- ***** Logo End ***** -->


						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li><a href="{{route("inicio")}}">Inicio</a></li>
							<li><a href="{{route("contacto")}}">Contacto</a></li>
              <li><a href="{{route("acerca")}}">Acerca de nosotros</a></li>
							<li><a class="btn-nav" href="{{route("contacto")}}">Pide cotizacion personalizada</a></li>
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



	<!----======================================================================================================================-->
	<section class="page">
		<!-- ***** Page Top Start ***** -->
		<div class="cover" data-image="assets/images/photos/header.jpg">
			<div class="cover-top">
				<div class="container">
					<div class="row">
						<div class="offset-lg-3 col-lg-6">
							<h1>Acerca de Nosotros</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="cover-bottom">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<ol class="breadcrumb">
								<li><a href="index.html">Inicio</a></li>
								<li class="active">Acerca de Nosotros</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Page Top End ***** -->


		<!-- ***** Page Content Start ***** -->
		<div class="page-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="about">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
									<div class="about-image">
										<img src="assets/images/photos/about/1.jpg" class="img-fluid" alt="">
										<a href="#" class="play">
											<i class="fa fa-play"></i>
										</a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 align-self-center mobile-top-fix">
									<h2>Acerca de cristianngonzalez.com</h2>
									<h3>Lleva tu campaña a otro nivel!</h3>
									<p>
										Nosotros nos encargamos de llevar adelante campañas de publicidad y comunicacion digital, a travez de imagens, animaciones, aplicaciones y videos.
										Tambien proveemos de servicio de estudio y analiticas de progreso en redes y sitios web (SEO).
									</p>
									<!--Boton de contacto-->
									<a href="#" class="btn-line">Contactanos.</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Page Content End ***** -->
	</section>


	<!-- ***** Home Parallax Start ***** -->
	<section class="parallax padding-bottom-100" data-image="assets/images/photos/parallax.jpg">
		<div class="parallax-content">
			<div class="container">
				<div class="row">
					<div class="offset-lg-3 col-lg-6">
						<div class="info">
							<h1>Bienvenido a www.cristianngonzalez.com</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Home Parallax End ***** -->




	<!-- ***** Testimonials Start ***** -->
	<section class="section" id="testimonials">
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">Testimonios</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>Testimonios de clientes de alrededor del mundo, recolectados de mi perfil de <a href="https://www.fiverr.com/crisgonzalez94">Fiverr</a></p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row">
				<!-- ***** Testimonials Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="team-item">
						<div class="team-content">
							<i class="fa fa-quote-left"></i>
							<p>I wanted to tip but fiverr charges a fee that amounts to half the tip! Check upwork to get better compensation for your work. Fiverrr is ripping you guys off.</p>
							<div class="user-image">
								<img src="assets/images/photos/team/1.jpg" alt="">
							</div>
							<div class="team-info">
								<h3 class="user-name">Asset Chae</h3>
								<span>Product Strategist</span>
							</div>
						</div>
					</div>
				</div>
				<!-- ***** Testimonials Item End ***** -->
				
				<!-- ***** Testimonials Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="team-item">
						<div class="team-content">
							<i class="fa fa-quote-left"></i>
							<p>EXCELLENT WORK ONCE AGAIN... THE BEST !!!!</p>
							<div class="user-image">
								<img src="assets/images/photos/team/2.jpg" alt="">
							</div>
							<div class="team-info">
								<h3 class="user-name">Darrius Colter</h3>
								<span>Visual Designer</span>
							</div>
						</div>
					</div>
				</div>
				<!-- ***** Testimonials Item End ***** -->
				
				<!-- ***** Testimonials Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="team-item">
						<div class="team-content">
							<i class="fa fa-quote-left"></i>
							<p>He was quick to respond, respectful and honest about his areas of expertise. I enjoyed his work, and I would like to work with him again in the future!</p>
							<div class="user-image">
								<img src="assets/images/photos/team/3.jpg" alt="">
							</div>
							<div class="team-info">
								<h3 class="user-name">Falpa</h3>
								<span>Android Developer</span>
							</div>
						</div>
					</div>
				</div>
				<!-- ***** Testimonials Item End ***** -->
			</div>
		</div>
	</section>
	<!-- ***** Testimonials End ***** -->


	
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