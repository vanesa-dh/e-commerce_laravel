@extends("plantilla")
<?php
$titulo = "FAQ - Preguntas frecuentes";
?>

@section ("principal")
<!-- INICIO de CONTACTO -->

<section class="question-container">
  <div class="link-inicio">
    <p>
      <a href="/">INICIO </a><i class="fas fa-arrow-right"></i> <strong>Contacto</strong>
    </p>
  </div>

  <h3>Visitanos</h3>
    <h4>Conocenos en nuestro SHOWROOM</h4>

  <div class="iframe-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.979417243309!2d-58.38325006689879!3d-34.60469570214902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca3b4ef90cbd%3A0xa0b3812e88e88e87!2sBuenos%20Aires%2C%20CABA!5e0!3m2!1ses-419!2sar!4v1566699950431!5m2!1ses-419!2sar" frameborder="0"></iframe>
  </div>

  <p class="product_descripcion">
    CASA CENTRAL / Leyden 354
  </p>
  <p>
    Sábados de 9:00 a 11:30 hs. EXCLUSIVA sección OUTLET!
  </p>

  <h3>Contactanos</h3>
  <p class="product_descripcion">
    Teléfono: <a href="callto:0054119553333"> +54(11) 9555 3333</a>
  </p>
  <p class="product_descripcion">
    Correo electrónico: <a href="mailto:hello@vasanjohel.com"> hello@vasanjohel.com</a>
  </p>

</section>
<!-- FIN de CONTACTO -->
@endsection
