@extends("plantilla")

@section("titulo")
  Preguntas Frecuentes - Vasanjohel
@endsection

@section ("principal")
<!-- INICIO del PREGUNTAS FRECUENTES -->
    <section class="question-container">
      <div class="link-inicio">
        <p>
          <a href="/">INICIO </a><i class="fas fa-arrow-right"></i> <strong>Preguntas frecuentes</strong>
        </p>
      </div>

      <h3>¿Cómo hago para comprar?</h3>
          <ol type="1">
            <li>Navegá por las categorías y hacé click sobre el producto que te interese.</li>
            <li>Hacé click en el botón indicado para agregarlo al carrito de compras.</li>
            <li>Tu producto fue agregado. Si querés agregar más productos, podés seguir navegando y repetir el proceso. Cuando termines, accedé a tu carrito haciendo click en botón del margen superior derecho del sitio.</li>
            <li>Allí apareceran tus productos seleccionados (producto y detalles del mismo). Verificá que todo sea correcto y hacé click en el botón indicado (Iniciar Compra).</li>
            <li>Seguí las instrucciones seleccionado cómo obtener tu pedido, ¡y listo!</li>
            <li>Serás redirigido a una ventana de confirmación.</li>
            <li>Te mantendremos al tanto del estado de tu pedido por mail. Por cualquier duda, siempre podés contactarte a través de consultas@VASANJOHEL.com.ar.</li>
          </ol>

      <h3 id='talles'>¿Cómo sé cúal es mi talle?</h3>
      <p>
        En la descripción de cada producto podés ver el talle y podés averiguar cuál es el tuyo con la siguiente tabla de talles:
      </p>

      <div class="sizes-container">
        <img src="img/tabla_deTalles.png" alt="tabla de talles">
      </div>

      <h3 id='medios'>¿Qué formas de pago puedo aprovechar para realizar mi compra?</h3>
      <p>
        Disponemos de los siguientes medios de pago:
      </p>
      <div class="pay-container">
        <img src="img/pago-visa.png" alt="icono de pago con tarjeta visa">
        <img src="img/pago-mastercard.png" alt="icono de pago con tarjeta mastercard.png">
        <img src="img/pago-americanexpress.png" alt="icono de pago con tarjeta american express">
        <img src="img/pago-paypal.png" alt="icono de pago con paypal">
        <img src="img/pago-westerunion.png" alt="icono de pago con western union">
      </div>

      <h3>¿Cúal es el costo del envío?</h3>
      <p>
        El costo de envío será mostrado en base al total de la compra y ubicación, en el checkout, en el momento previo a la compra y si la compra supera los $3500, el envío corre por cuenta nuestra!!!
      </p>

      <h3>¿Cómo se realizan los envíos?</h3>
      <p>
        Trabajamos con <a href="#">seguimiento de envío</a> de:
      </p>
      <div class="oca-container">
        <img src="img/logoOca.png" alt="envió por oca">
      </div>

      <h3>¿Dónde puedo recibir mi pedido?</h3>
      <p>
        Realizamos envíos a todo el país! También tenés la opción de comprar y retirar en <a href="/contacto">nuestro showroom</a>!
      </p>

      <h3>¿Cuánto tarda en llegar el pedido?</h3>
      <p>
        El tiempo de entrega dependerá del tipo de envío seleccionado: en general, entre 3 y 7 días hábiles luego de acreditado el pago.
      </p>

      <h3>¿Cuál es el plazo para realizar un cambio?</h3>
      <p>
        Se puede solicitar un cambio hasta 10 días luego de realizada la compra.
      </p>

      <h3>¿Qué debo hacer si el producto no llega en buen estado?</h3>
      <p>
        Contactanos a consultas@VASANJOHEL.com.ar indicando nro. de pedido y motivo del cambio/devolución y te indicaremos los pasos a seguir.
      </p>

      <h3>¿Querés vender VASANJOHEL?</h3>
      <p>
        Por compras mayoristas o franquicias, solicitar información a consultas@mishopbag.com.ar o deja los datos <a href="/contacto">aquí</a> .
      </p>
      <p>
      <h3>¿Tenés alguna otra duda?</h3>
      <p>
        <a href="/contacto">Contactanos</a> en consultas@VASANJOHEL.com.ar o al +54 11 955 3333
      </p>

      <div class="envio-icon">
        <i class="fas fa-shuttle-van fa-2x"></i><br>
        <strong>ENVÍO GRATIS</strong><br>
        Para compras de más de $3500
      </div>
    </section>
    <!-- FIN del PREGUNTAS FRECUENTES -->

@endsection
