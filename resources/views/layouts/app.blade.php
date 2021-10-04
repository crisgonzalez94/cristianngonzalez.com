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

  <meta name="google-site-verification" content="Bfx0p7YNv41-BJPUT0H-3AUGn0zGiZvg7tU97noMt8A" />

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
							<li class="submenu">
								<a href="javascript:;">Web, SEO y redes</a>
								<ul>
									<li><a href="#features">Servicios</a></li>
									<li><a href="#testimonials">Testimonios</a></li>
									<li><a href="#pricing-plans">Planes y precios</a></li>
									<li><a href="#blog">Servicios Populares</a></li>
								</ul>
							</li>
							<li><a href="{{route("contacto")}}">Contacto</a></li>
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




  @yield('content')


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
						<li><a href="{{route('acerca')}}"><i class="fa fa-angle-right"></i><span>Acerca de nosotros</span></a></li>
						<li><a href="{{route('acerca')}}"><i class="fa fa-angle-right"></i><span>Preguntas Frecuentes</span></a></li>
						<li><a href="{{route('contacto')}}"><i class="fa fa-angle-right"></i><span>Contacto</span></a></li>
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