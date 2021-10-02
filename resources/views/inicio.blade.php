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


	<!----======================================================================================================================-->
	<!-- ***** Welcome Area Start ***** -->
	<div class="welcome-area" id="welcome">
		<!-- ***** Header Background Image Start ***** -->
		<div class="right-bg">
			<img src="assets/images/photos/header.jpg" class="img-fluid float-right" alt="">
		</div>
		<!-- ***** Header Background Image End ***** -->

		<div class="header-bg">
			<img src="assets/images/header-bg.svg" class="img-fluid" alt="">
		</div>

		<!-- ***** Header Text Start ***** -->
		<div class="header-text">
			<div class="container">
				<div class="row">
					<div class="offset-lg-3 col-lg-6 col-md-12 col-sm-12">
						<h1>Lleva tus redes a otro nivel!</h1>
						<p>El mundo esta en internet, hoy en dia es alli donde se forja la competencia, desde el posicionamiento hasta la comunicacion en las redes y la web es clave en estos tiempos.</p>
						<div class="buttons">
							<a href="#" class="btn-white-line">Aprender más</a>
							<a href="#" class="btn-primary-line">Contactame</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Header Text End ***** -->
	</div>
	<!-- ***** Welcome Area End ***** -->






	<!-- ***** Features Small Start ***** -->
	<section class="section home-feature"  id="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<!-- ***** Features Small Item Start ***** -->
						<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
							<a href="blue-features-single.html" class="features-small-item start">
								<div class="icon">
									<i class="fa fa-comments-o"></i>
								</div>
								<h5 class="features-title">Estrategia de Comunicacion</h5>
								<p>El tiempo es dinero, desde chatsbots hasta metodos inteligentes de ubicacion de enlaces.</p>
							</a>
						</div>
						<!-- ***** Features Small Item End ***** -->

						<!-- ***** Features Small Item Start ***** -->
						<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
							<a href="blue-features-single.html" class="features-small-item">
								<div class="icon">
									<i class="fa fa-thumbs-o-up"></i>
								</div>
								<h5 class="features-title">Redes Sociales</h5>
								<p>Desde estados e historias atractivas, hasta publicidades personalizadas y enfocadas en tu nicho especifico.</p>
							</a>
						</div>
						<!-- ***** Features Small Item End ***** -->

						<!-- ***** Features Small Item Start ***** -->
						<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
							<a href="blue-features-single.html" class="features-small-item end">
								<div class="icon">
									<i class="fa fa-laptop"></i>
								</div>
								<h5 class="features-title">Desarrollo movil y Web</h5>
								<p>Desde Catalogos, portafolios, tiendas completas hasta aplicaciones moviles! <br>. </p>
							</a>
						</div>
						<!-- ***** Features Small Item End ***** -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Features Small End ***** -->


	<!-- ***** Features Big Item Start ***** -->
	<section class="section padding-top-70 padding-bottom-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
					<!--Imagen de diseño grafico-->
					<img src="assets/images/photos/home/diseño-grafico.png" class="rounded img-fluid d-block mx-auto" alt="Diseño grafico, desarrollo web">
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
					<div class="left-heading">
						<h2 class="section-title">Diseño Grafico!</h2>
					</div>
					<div class="left-text">
						<p>Diseñamos tu logo, branding empresarial, banners webs animados, pagina web, aplicacion Android y IOS, tienda online y Catalogo PDF.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="hr"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Features Big Item End ***** -->


	<!-- ***** Features Big Item Start ***** -->
	<section class="section padding-bottom-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
					<div class="left-heading">
						<h2 class="section-title">Posicionamiento de marca!</h2>
					</div>
					<div class="left-text">
						<p>Desde nombre demarca, dominios web, posicionamiento en google, hasta palabras claves para su nicho en redes sociales.</p>
					</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
					<img src="assets/images/photos/home/seo-analiticas.png" class="rounded img-fluid d-block mx-auto" alt="SEO ,  Analiticas">
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Features Big Item End ***** -->


	<!-- ***** Home Parallax Start ***** -->
	<section class="parallax" data-image="assets/images/photos/parallax.jpg">
		<div class="parallax-content">
			<div class="container">
				<div class="row">
					<div class="offset-lg-3 col-lg-6">
						<div class="info">
							<h1>Nuestros servicios</h1>
							<p>Resumen simplificado de todos nuestros servicios.</p>
						</div>
					</div>
				</div>

				<!-- ***** Mini Box Start ***** -->
				<div class="row">
					<div class="col-lg-2 col-md-3 col-sm-6 col-6">
						<a href="#" class="mini-box">
							<i class="fa fa-calendar"></i>
							<strong>Diseño Grafico</strong>
							<span>Banners, Publicidades, Logos.</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-6">
						<a href="#" class="mini-box">
							<i class="fa fa-bolt"></i>
							<strong>Videos</strong>
							<span>Animaciones, Explicativos, Publicidades.</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-6">
						<a href="#" class="mini-box">
							<i class="fa fa-pie-chart"></i>
							<strong>Web</strong>
							<span>Dominios, desarrollo y diseño.</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-6">
						<a href="#" class="mini-box">
							<i class="fa fa-code"></i>
							<strong>Indumentaria</strong>
							<span>Diseño de indumentaria y branding.</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-6">
						<a href="#" class="mini-box">
							<i class="fa fa-server"></i>
							<strong>Reportes de SEO</strong>
							<span>Analiticas de posicionamiento.</span>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-6">
						<a href="#" class="mini-box">
							<i class="fa fa-check"></i>
							<strong>Correos Corporativos</strong>
							<span>Mensajes profesionales.</span>
						</a>
					</div>
				</div>
				<!-- ***** Mini Box End ***** -->
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


	<!-- ***** Pricing Plans Start ***** -->
	<section class="section colored" id="pricing-plans">
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">Planes Completos</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>Estos son solo planes completos que incluyen la gran mayoria de nuestros servicios incluidos en un pack, pero siempre puedes pedir un servicio de manera individual en la cotizacion.</p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row">
				<!-- ***** Pricing Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
					<div class="pricing-item">
						<div class="pricing-header">
							<h3 class="pricing-title">PEQUEÑA PYME</h3>
						</div>
						<div class="pricing-body">
							<div class="price-wrapper">
								<span class="currency">$</span>
								<span class="price">200</span>
							</div>
							<ul class="list">
								<li class="active">Pagina web simple y estatica.</li>
								<li class="active">Galeria de imagenes estatica.</li>
								<li class="active">Formulario de contacto.</li>
								<li class="active">Hasta 3 secciones en la web.</li>
								<li class="active">Chat mensseger directo en la web.</li>
								<li class="active">Banners e historias para redes sociales.</li>
								<li class="active">Posicionamiento basico en google.</li>
								<li class="active">Dominio.com y hosting icluido por un año.</li>
								<li class="active">Soporte de mantenimiento de por vida.</li>
							</ul>
						</div>
						<div class="pricing-footer">
							<a href="#" class="btn-primary-line">Me interesa</a>
						</div>
					</div>
				</div>
				<!-- ***** Pricing Item End ***** -->

				<!-- ***** Pricing Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
					<div class="pricing-item active">
						<div class="pricing-header">
							<h3 class="pricing-title">PLAN AVANZADO</h3>
						</div>
						<div class="pricing-body">
							<div class="price-wrapper">
								<span class="currency">$</span>
								<span class="price">500</span>
							</div>
							<ul class="list">
								<li class="active">Pagina web con base de datos.</li>
								<li class="active">Panel de control para cambiar configuraciones basicas</li>
								<li class="active">Blogs</li>
								<li class="active">Galeria dinamica de imagenes.</li>
								<li class="active">Formulario de contacto.</li>
								<li class="active">Hasta 10 secciones en la web.</li>
								<li class="active">Dominio.com y hosting icluido por un año.</li>
								<li class="active">Analiticas y reportes de ceo constantes.</li>
								<li class="active">Banners e historias para redes sociales.</li>
								<li class="active">Publicidad para redes sociales.</li>
								<li class="active">Soporte de mantenimiento de por vida.</li>
							</ul>
						</div>
						<div class="pricing-footer">
							<a href="#" class="btn-primary-line">Me interesa</a>
						</div>
					</div>
				</div>
				<!-- ***** Pricing Item End ***** -->

				<!-- ***** Pricing Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
					<div class="pricing-item">
						<div class="pricing-header">
							<h3 class="pricing-title">ENTERPRISE WEB</h3>
						</div>
						<div class="pricing-body">
							<div class="price-wrapper">
								<span class="currency">$</span>
								<span class="price">1000</span>
							</div>
							<ul class="list">
								<li class="active">Pagina web con base de datos.</li>
								<li class="active">Panel de control para cambiar configuraciones basicas</li>
								<li class="active">Blogs</li>
								<li class="active">Galeria dinamica de imagenes.</li>
								<li class="active">Formulario de contacto.</li>
								<li class="active">Hasta 30 secciones en la web.</li>
								<li class="active">Dominio.com y hosting icluido por 5 años.</li>
								<li class="active">Analiticas y reportes de ceo constantes.</li>
								<li class="active">Banners e historias para redes sociales.</li>
								<li class="active">Diseño de logos.</li>
								<li class="active">Chatbot integrado.</li>
								<li class="active">Publicidad para redes sociales.</li>
								<li class="active">Soporte de mantenimiento de por vida.</li>
							</ul>
						</div>
						<div class="pricing-footer">
							<a href="#" class="btn-primary-line">Me interesa</a>
						</div>
					</div>
				</div>
				<!-- ***** Pricing Item End ***** -->
			</div>
		</div>
	</section>
	<!-- ***** Pricing Plans End ***** -->


	<!-- ***** Counter Parallax Start ***** -->
	<section class="parallax-counter" data-image="assets/images/photos/parallax-counter.jpg">
		<div class="parallax-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="count-item elliptical-bottom">
							<strong>26</strong>
							<span>Grandes Proyectos terminados</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="count-item elliptical-top">
							<strong>126</strong>
							<span>Clientes satisfechos</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="count-item elliptical-bottom">
							<strong>100000</strong>
							<span>Likes en publicidades de todo tipo</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="count-item">
							<strong>25</strong>
							<span>Paises</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Counter Parallax End ***** -->


	<!-- ***** Blog Start ***** -->
	<section class="section" id="blog">
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">Otros servicios populares</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>Solo algunos de los bastos servicios que proveemos, por favor no dude en consultar su necesidad en el chat!</p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-post-thumb">
						<div class="img">
							<img src="assets/images/photos/blog/diseños-logotipos.png" alt="Diseños de logotipos para tu empresa.">
						</div>
						<div class="blog-content">
							<h3>
								<a href="blue-blog-single.html">Diseño de logotipo</a>
							</h3>
							<div class="text">
								Tenemos un logo especial y unico para ti.
							</div>
							<a href="blue-blog-single.html" class="btn-primary-line">Desde $10</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-post-thumb">
						<div class="img">
							<img src="assets/images/photos/blog/diseño-banners.png" alt="Banners publicitarios para web.">
						</div>
						<div class="blog-content">
							<h3>
								<a href="blue-blog-single.html">Diseño de banners</a>
							</h3>
							<div class="text">
								Estaticos y animados.
							</div>
							<a href="blue-blog-single.html" class="btn-primary-line">Desde $20</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-post-thumb">
						<div class="img">
							<img src="assets/images/photos/blog/3.jpg" alt="">
						</div>
						<div class="blog-content">
							<h3>
								<a href="blue-blog-single.html">Video Publicitario</a>
							</h3>
							<div class="text">
								Ideal para YouTube
							</div>
							<a href="blue-blog-single.html" class="btn-primary-line">Desde $30</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Blog End ***** -->


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
