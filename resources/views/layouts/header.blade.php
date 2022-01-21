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

        <link rel="stylesheet" href="css/whatsapp-button.css">
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

        <!--Caja de WhatsappBox-->
        <div class="whatsapp-box">
            <a href="https://api.whatsapp.com/send?phone=+541170139816&text=Hola%Cristian" class="whatsapp-enlace" target="_blank">
            <!--Svg del Icono de Whatsapp , provisto por bootstrap icons-->
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg>
            </a>
        </div>
        <div class="whatsapp-border"></div>

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
