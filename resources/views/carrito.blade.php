@extends("plantilla")

@section("titulo")
  Carrito - Vasanjohel
@endsection

@section('principal')

 <div class="cart_container">
  <section class="question-container">
    <div class="link-inicio">
       <p>
        <a href="/">INICIO </a><i class="fas fa-arrow-right"></i> <strong>Mi carrito</strong>
      </p>
    </div>
    <h3>Productos seleccionados:</h3>


    <div class="products_cart_container">
      <div class="one_product">
        <ul class="product_ul">
          @if(isset($cart))
            <li class="product_li">Producto: {{ $cart->id }} </li>
          @else
            <span>No se han seleccionado productos</span>
          @endif
          <li>Total: $  </li>
        </ul>
      </div>
    </div>

    <div class="submit_cart">
      <form class="" action="/carrito/comprar" method="post">
        @csrf
        <div class="">
          <button class="button_register" type="submit" name="button" value=" {{ $cart->id }} "> Comprar </button><br><br>
        </div>
      </form>
    </div>
  </section>

 </div>
@endsection
