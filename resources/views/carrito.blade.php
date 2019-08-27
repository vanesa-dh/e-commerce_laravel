@extends("plantilla")

@section("titulo")
  Carrito - Vasanjohel
@endsection

@section('principal')
 {{-- Acá va el carrito --}}
 <div class="cart_container">
  <section class="question-container">
    <div class="link-inicio">
       <p>
        <a href="/">INICIO </a><i class="fas fa-arrow-right"></i> <strong>Mi carrito</strong>
      </p>
    </div>
    <h3>Productos seleccionados:</h3>

    <div class="products_cart_container">
      
      {{-- Acá va la lista de productos del carrito del usuario --}}
    </div>

    <div class="submit_cart">
      <form class="" action="#" method="post">
        <div class="">
          <button class="button_register" type="submit" name="button"> Comprar </button><br><br>
        </div>
      </form>
    </div>
  </section>

 </div>


@endsection
