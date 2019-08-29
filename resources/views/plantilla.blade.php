<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>

      @yield("titulo")

    </title>

    <!-- Librería de JQuery / para el banner -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Fin de Librería de JQuery -->
    <!-- Inicio Link al JS de thema -->
    <script type="text/javascript" src="/js/themes.js"></script>
    <!-- Fin Link al JS de thema -->
    <!-- Librería de Bootstrap / para el banner -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Fin de Librería de Bootstrap -->
    <!-- Link a la hoja de estilos propia -->
    <link rel="stylesheet" href="/css/styles.css">
    <!-- Link a la hoja de estilos normalize.css -->
    <link rel="stylesheet" href="/css/normalize.css">
    <!-- Link a los iconos de FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Iconito de la pestania del navegador, favicon -->
    <link rel="icon" type="image/png" href="/img/favicon.ico">
    <!-- Responsive - Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>

<!-- INICIO del BODY -->
  <body class="theme1">
  <!-- INICIO del CONTENEDOR -->
  <div class="contenedor">
    <!-- INICIO del HEADER -->
    <header>
      <!-- INICIO del contenedor HEADER -->
      <div class="header_container">
        <!-- INICIO contenedor del logo -->
        <div class="header_logo">
            <a href="/"><img src="/img/logo.png" alt="imagen del logo"></a>
        </div>
        <!-- FIN contenedor del logo -->
        <!-- INICIO contenedor del menu -->
        <div class="header_nav">
          <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/productos">Productos</a></li>
            <li><a href="/faq">FAQ</a></li>
            <li><a href="/contacto">Contacto</a></li>
            {{-- <li><a id="myTheme" onclick="changeTheme()"><i class="fas fa-paint-roller fa-2x"></i></a></li> --}}
            <li><a onclick="changeTheme()"><i class="fas fa-paint-roller fa-2x"></i></a></li>
          </ul>
        </div>
        <!-- FIN contenedor del menu -->
        <!-- INICIO contenedor de la barra de busqueda -->
        <div class="header_busqueda">
          <form class="header_busquedaForm" action="/" method="post">
            <input class="header_busquedaInput" type="search" name="busqueda" value="" placeholder="Buscar productos...">
          </form>
        </div>
        <!-- FIN contenedor de la barra de busqueda -->
        <!-- INICIO contenedor de los iconos -->
        <div class="header_iconos">
          <ul class="header_ul">
            <li><a href="/registro"><i class="fas fa-user-plus fa-2x"></i></a></li>
            <li><a href="/login"><i class="fas fa-user fa-2x"></i></a></li>
            <li><a href="/carrito"><i class="fas fa-cart-arrow-down fa-2x"></i></a></li>
          </ul>
        </div>
        <!-- FIN contenedor de los iconos -->
      </div>
      <!-- FIN del contenedor HEADER -->
    </header>
    <!-- FIN del HEADER -->


    @yield("principal")


    <!-- INICIO del FOOTER -->
        <footer>
          <div class="footer_container">
          <!-- Contenedor de todo el footer -->
            <div class="footer_ayuda">
            <!-- Contenedor de la parte AYUDA del footer -->
                  <ul class="footer_ul">
                    <!-- Lista de elementos de la parte AYUDA del footer -->
                    <li class="footer_titulos">AYUDA</li>
                    <li><a href="/faq">Preguntas frecuentes</a></li>
                    {{-- <li><a href="secciones/proximamente.html">Promociones y descuentos</li><br> --}}
                    <li><a href="/faq#talles">Tabla de talles</li>
                    <li><a href="/faq#medios">Medios de pago</li>
                    <li class="footer_iconos">
                        <a href="#"><i class="fab fa-cc-visa fa-2x"></i></a>
                        <a href="#"><i class="fab fa-cc-diners-club fa-2x"></i></a>
                        <a href="#"><i class="fab fa-cc-paypal fa-2x"></i></a>
                        <a href="#"><i class="far fa-credit-card fa-2x"></i></a>
                    </li>
                  </ul>
            </div>

            <div class="footer_miCuenta">
            <!-- Contenedor de la parte MI CUENTA del footer -->
              <ul class="footer_ul">
              <!-- Lista de elementos de la parte MI CUENTA del footer -->
                    <li class="footer_titulos">MI CUENTA</li>
                    {{-- <li><a href="/carrito">Estado de mi pedido</a></li> --}}
                    <li><a href="/login">Login</a></li>
                    <li><a href="/registro">Registrarse</a></li>
                    {{-- <li><a href="#">Recuperar contraseña</a></li> --}}
                    <li><a href="/login">Mi perfil</a></li>
              </ul>
            </div>

            <div class="footer_social">
            <!-- Contenedor de la parte VISITANOS del footer -->
              <ul class="footer_ul">
              <!-- Lista de elementos de la parte VISITANOS del footer -->
                    <li class="footer_titulos">VISITANOS</li>
                    {{-- <li>Suscribite al newsletter:</li>
                    <li>
                      <form class="footer_newsletter" action="/" method="post">
                        <input type="email" name="email" value="" placeholder="Ingresa tu mail">
                      </form>
                    </li><br> --}}
                    <li>CONOCÉ NUESTRO<strong> SHOWROOM </strong><br></li>
                    <li>de Lunes a Viernes de 9.00 a 18.00 hs</li><br>
                    <li class="footer_iconos"> Seguinos en
                      <a href="http://facebook.com" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                      <a href="http://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                      <a href="http://twitter.com" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
                    </li>
              </ul>
            </div>

            <div class="footer_contacto">
            <!-- Contenedor de la parte DIRECCIONES del footer -->
                  <ul class="footer_ul">
                  <!-- Lista de elementos de la parte DIRECCIONES del footer -->
                    <li class="footer_marca"><a href="/"><img src="/img/logo.png" alt="imagen del logo"></a></li>
                    {{-- <li>VISITÁ NUESTRO<strong> SHOWROOM </strong><br></li>
                    <li>de Lunes a Viernes de 9.00 a 18.00 hs</li><br> --}}
                    <li><i class="fas fa-home"></i> Leyden 354, Buenos Aires | Argentina</li>
                    <li><i class="fas fa-phone"></i><a href="callto:0054119553333"> +54(11) 9555 3333</a></li>
                    <li><i class="fas fa-envelope"></i><a href="mailto:hello@vasanjohel.com"> hello@vasanjohel.com</a></li>
                  </ul>
            </div>
        </div>
            <div class="footer_creditos">
              <p>© 2019<strong>
              </strong> - Grupo 4 para <strong>Digital House</strong> - FullStack</p>
            </div> <!--END footer_creditos -->
        </footer>
    <!-- FIN del FOOTER -->
        </div>
    <!-- FIN del CONTENEDOR -->
  </body>
<!-- FIN del BODY -->
</html>
