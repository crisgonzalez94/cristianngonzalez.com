<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>Cristiann Gonzalez</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Cristian Nazareno Gonzalez"/>
        <!-- description -->
        <meta
            name="description"
            content="Portfolio web Developer"/>
        <!-- keywords -->
        <meta
            name="keywords"
            content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal"/>
        <!-- animation -->
        <link rel="stylesheet" href="css/plugins/animate.css"/>
        <!-- Animated Headlines -->
        <link rel="stylesheet" href="css/plugins/animated-headlines.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <!--Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- font-awesome icon -->
        <link
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            rel="stylesheet">
        <!-- Google Font -->
        <link
            href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900"
            rel="stylesheet">
        <!-- Animated Headlines -->
        <link rel="stylesheet" href="css/plugins/animated-headlines.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/plugins/magnific-popup.css"/>
        <!-- Main Style -->
        <link rel="stylesheet" href="css/main.css"/>
    </head>

    <body>

        <!-- Messenger Plugin de chat Code -->
        <div id="fb-root"></div>

        <!-- Your Plugin de chat code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

        <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "100200461810596");
        chatbox.setAttribute("attribution", "biz_inbox");
        </script>

        <!-- Your SDK code -->
        <script>
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


        <!-- ===== Start Navbar ===== -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#slider">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Acerca de Mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonials">Testimonios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#movil    ">Desarrollo movil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ===== End Navbar ===== -->

        <!-- ===== Start Slider ===== -->
        <section class="slider d-flex justify-content-center" id="slider">
            <div class="container text-center">
                    <div class="row all-content">
                        <div class="col-12">
                            <div class="left-content">
                                <p class="hello">
                                    Bienvenidos</p>
                                <!-- Animated Text-->
                                <div class="animated-headlines">
                                    <h1 class="cd-headline clip is-full-width">
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible">Soy Cristian Gonzalez</b>
                                            <b>Desarrollador Web</b>
                                            <b>ilustrador</b>
                                        </span>
                                    </h1>
                                </div>
                                <p class="paragraph">
                                    Sean Bienvenidos a mi página personal aquí verán todos mis trabajos, proyectos y detalles de mi vida, Gracias :)
                                </p>
                                <a href="#0" class="btn">Descargar CV</a>
                            </div>
                        </div>
                    </div>
            </div>
            <div id="particles-js" class="particels"></div>
        </section>
        <!-- ===== End Slider ===== -->



        <!-- ===== Start About Me ===== -->
        <section class="about-me" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="img/perfil.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <h2>Acerca de Mi</h2>
                        <p>
                            Soy un entusiasta de la tecnología, desde que comencé mi carrera laboral a los 18 años.
                            He pasado por variados rubros laborales, debo decirles que mi carrera no comenzó en el mundo del desarrollo de software
                            sino que mi titulo de Maestro mayor de obras me dio la posibilidad de trabajar con los dibujos de planos CAD, 
                            Luego de a poco eso me llevo a la ilustración vectorial pasando a las animaciones de video.
                            Eso alimento mi curiosidad por lo que en el 2019 comience de manera autodidacta al principio a dedicarme al mundo del
                            Desarrollo frontend web , hasta al muy poco tiempo pasar por el desarrollo web full stack.
                            <br><br>

                            Sean bienvenidos a mi portafolio, aquí verán algunos de los trabajos relacionados a la tecnología que hice en el último tiempo.
                            Y si deseas eres libre de dejarme tus impresiones o cualquier cosa que quieras decirme al final de este sitio.
                        </p>
                        <a href="#0" class="btn-1">Descargar CV</a>
                        <a href="https://www.fiverr.com/crisgonzalez94" target="_blank" class="btn-2">Mi pefil de Fiverr</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== End About Me ===== -->

        <!-- ===== Start Services ===== -->
        <section class="services" id="services">
            <h2 class="text-center">Servicios</h2>
            <div class="container">
                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <span class="fa bi bi-diagram-3-fill"></span>
                            <h3>Desarrollo web Full Stack</h3>
                            <p>
                                Desarrollo de sitios web completos, desde su diseño de interface frontend hasta su servidor y base de datos.
                            </p>
                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <span class="fa bi bi-front"></span>
                            <h3>Desarrollo Frontend</h3>
                            <p>Desde interface atractivas hasta animaciones, utilizando las librerias mas modernas eficientes en recursos.</p>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <span class="fa bi bi-server"></span>
                            <h3>Desarrollo Backend</h3>
                            <p>Desarrollo de funcionalidades de servidor y configuradas en produccion en aws, heroku y cualquier otro host.</p>
                        </div>
                    </div>
                    <!-- Box-4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <span class="fa bi bi-phone-fill"></span>
                            <h3>Desarrollo Movil</h3>
                            <p>Desarrollo de aplicaciones moviles. Utilizo herramientas web que se transforman en aplicacion movil.</p>
                        </div>
                    </div>
                    <!-- Box-5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <span class="fa bi bi-bezier"></span>
                            <h3>Graficos</h3>
                            <p>Desde ilustraciones hasta videos con motions graphics. Busca mi perfil de fiverr crisgonzalez94</p>
                        </div>
                    </div>
                    <!-- Box-6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <span class="fa bi bi-question-diamond-fill"></span>
                            <h3>Siempre Cerca</h3>
                            <p>Siempre estoy en contacto y hablando con los clientes y no clientes resolviendo todas sus dudas e inquietudes</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== End Services ===== -->

        <!-- ===== Start Some Facts ===== -->
        <section class="some-facts">
            <div class="container text-center">
                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <span class="fa bi-emoji-smile-fill"></span>
                            <h3>
                                <span class="counter">35</span></h3>
                            <div class="line mx-auto"></div>
                            <h4>Clientes Felices</h4>
                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <span class="fa fa-heart-o"></span>
                            <h3>
                                <span class="counter">104</span></h3>
                            <div class="line mx-auto"></div>
                            <h4>Proyectos Completos</h4>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <span class="fa bi bi-git"></span>
                            <h3>
                                <span class="counter">250</span></h3>
                            <div class="line mx-auto"></div>
                            <h4>Repositorios</h4>
                        </div>
                    </div>
                    <!-- Box-4 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <span class="fa bi bi-code-slash"></span>
                            <h3>
                                <span class="counter">100000</span></h3>
                            <div class="line mx-auto"></div>
                            <h4>Liens Of Code</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== End Some Facts ===== -->



        <!-- ===== Start Testimonials ===== -->
        <section class="testimonials" id="testimonials">
                <div class="container text-center">
                    <h2>Testimonios</h2>
                    <p style="color: white;">Estos testimonios fueron recogidos directamente de mi perfil de fiverr , ve a <a href="https://www.fiverr.com/crisgonzalez94" style="color: orange;" target="_blank">www.fiverr.com/crisgonzalez94</a> , y velos por ti mismo, alli tambien podras contratarme directamente y dejar tu propia reseña.</p>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <!-- Indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
    
                                <div class="carousel-inner">
                                    <!-- Item-1 -->
                                    <div class="carousel-item active text-center">
                                            <img src="img/testimonials.png" alt="" class="colon">
                                            <p>
                                                El servicio fue 10/10! Muy Profesional, y hermoso trabajo!!
                                            </p>
                                                <img src="img/testimonio-2.png" alt="" class="center-block team">
                                            <h3>Lee Hamilton</h3>
                                            <h4>Usuario de Fiverr</h4>
                                    </div>
                                    <!-- Item-2 -->
                                    <div class="carousel-item text-center">
                                            <img src="img/testimonials.png" alt="" class="colon">
                                            <p>
                                                Excelente, tal cual lo describio.
                                            </p>
                                            <img src="img/testimonio-3.png" alt="" class="center-block team">
                                            <h3>Pin Naclelon</h3>
                                            <h4>Usuario de Fiverr</h4>
                                    </div>
                                    <!-- Item-3 -->
                                    <div class="carousel-item text-center">
                                            <img src="img/testimonials.png" alt="" class="colon">
                                            <p>
                                                Excelente, resolvio todas mis dudas antes de contratar.
                                            </p>
                                                <img src="img/testimonio-1.png" alt="" class="center-block team">
                                            <h3>Antony Bravo</h3>
                                            <h4>Usuario de Fiverr</h4>
                                    </div>
    
                                </div>
                                <a
                                    class="carousel-control-prev"
                                    href="#carouselExampleIndicators"
                                    role="button"
                                    data-slide="prev">
                                    <span class="fa fa-angle-left icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a
                                    class="carousel-control-next"
                                    href="#carouselExampleIndicators"
                                    role="button"
                                    data-slide="next">
                                    <span class="fa fa-angle-right icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- ===== End Testimonials ===== -->


        <!-- ===== Start Blog ===== -->
        <section class="blog" id="blog">
            <div class="container">
                <h2 class="text-center">Algunos Clientes Destacados</h2>
                <div class="row">
                    <!-- Post-1 -->
                    <div class="co-md-6 col-lg-4">
                        <div class="box">
                            <div class="image">
                                    <img src="img/cliente-1.svg" alt="">
                                    <a href="" class="cate">Desarrollo web y Publicidad</a>
                            </div>
                            <div class="text">
                                    <h3><a href="">Serigrafia Sur Chile</a></h3>
                                    <h4>www.serigrafiasur.cl</h4>
                                    <p>Serigrafia sur es un empresa Chilena dedicada a la venta de indumentaria publicitaria por mayor. Mi labor en esta empresa fue desarrollar el sitio web asi como su catalogo pdf y todas sus publicidades hasta el momento. Uno de mis clientes mas recurrentes.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Post-2 -->
                    <div class="co-md-6 col-lg-4">
                            <div class="box">
                                <div class="image">
                                        <img src="img/cliente-2.png" alt="">
                                        <a href="" class="cate">Desarrollo web y publicidad</a>
                                </div>
                                <div class="text">
                                        <h3><a href="">Sandwicheria La Limeñita</a></h3>
                                        <h4>www.lalimenita.cl</h4>
                                        <p>La Limeñita, una sandwicheria restaurante de Santiago Chile. Mi labor fue desarrollar su sitio web asi como tambien algunas de sus publicidades de redes sociales.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Post-3 -->
                    <div class="co-md-6 col-lg-4">
                        <div class="box">
                            <div class="image">
                                <img src="img/cliente-3.svg" alt="">
                                <a href="" class="cate">Desarrollo web</a>
                            </div>
                            <div class="text">
                                <h3><a href="">MyBigWeb Servers</a></h3>
                                <h4>www.mybigweb.com</h4>
                                <p>Empresa Argentina dedicada al alojamiento web. Yo desarrolle su sitio web , tambien me he dedicado. Y pronto estaremos realizando publicidades en redes sociales asi como un canal de YouTube con tutoriales.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ===== End Blog ===== -->

        <!-- ===== Start Blog ===== -->
        <section class="blog" id="movil">
            <div class="container">
                <h2 class="text-center">Desarrollo movil</h2>
                <div class="row">
                    <!-- Post-1 -->
                    <div class="col-12">
                        <div class="box">
                            <div class="image">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/nwVbTEGrM9I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="text">
                                    <p>Video de una aplicación desarrollada y diseñada por mi, de uso libre y gratuito... Creditos y descarga directa desde la Google Play store click <a href="https://play.google.com/store/apps/details?id=www.cristiangonzalez.site.dollarbluetool" target="_blank" rel="noopener noreferrer">aquí.</a></p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
        <!-- ===== End Blog ===== -->


        <!-- ===== Start Contact ===== -->
        <section class="contact" id="contact"> 
            <h2 class="text-center">Mantengamos el contacto</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Asunto">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" id="comment" placeholder="Dejame tu mensaje"></textarea>
                            </div>
                            <button class="btn btn-block" type="submit">Enviar ahora!</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="info">

                            <span class="fa fa-mobile"></span>
                            <p>+54 11 7013 9816
                                <br>
                                +54 11 2894 5758
                            </p>

                            <span class="fa fa-at"></span>
                            <p>contact@cristianngonzalez.com</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== End Contact ===== -->


        <!-- ===== Start Footer ===== -->
        <footer class="footer text-center">
            <div class="social-icons">
                <a href="https://www.facebook.com/cristianngonzalezok">
                    <span class="fa fa-facebook" aria-hidden="true"></span>
                </a>
                <a href="https://twitter.com/crisgonzalez94">
                    <span class="fa fa-twitter" aria-hidden="true"></span>
                </a>
                <a href="https://api.whatsapp.com/send?phone=541170139816&text=Hola%20Cristian">
                    <span class="fa fa-whatsapp" aria-hidden="true"></span>
                </a>
                <a href="mailto:contact@cristianngonzalez.com">
                    <span class="fa fa-envelope-open" aria-hidden="true"></span>
                </a>
                <a href="https://www.linkedin.com/in/cristianngonzalez/">
                    <span class="fa fa-linkedin" aria-hidden="true"></span>
                </a>
            </div>
            <p>Todos los derechos reservados 2022</p>
        </footer>
        <!-- ===== End Footer ===== -->

        <!-- ==== javascript libraries ==== -->
        <!-- jQuery-->
        <script src="js/plugins/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap 4.1.3 -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/popper.min.js"></script>
        <!-- Animated Headlines -->
        <script src="js/plugins/animated-headlines.js"></script>
        <!-- Nav jQuery-->
        <script src="js/plugins/nav.jquery.js"></script>
        <!-- Nav jQuery-->
        <script src="js/plugins/jquery.stellar.js"></script>
        <!-- Isotope -->
        <script src="js/plugins/isotope.pkgd.min.js"></script>
        <!-- Image Loaded -->
        <script src="js/plugins/imagesloaded.pkgd.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/plugins/magnific-popup.min.js"></script>
        <!-- Smooth-Scroll -->
        <script src="js/smooth-scroll.js"></script>
        <!-- Counter Up -->
        <script src="js/plugins/jquery.waypoints.min.js"></script>
        <script src="js/plugins/jquery.counterup.min.js"></script>
        <!-- Particles Js -->
        <script src="js/plugins/particles.min.js"></script>
        <script src="js/plugins/app.js"></script>
        <!-- Animated Headlines -->
        <script src="js/plugins/animated-headlines..j"></script>
        <script src="js/main.js"></script>

    </body>
</html>