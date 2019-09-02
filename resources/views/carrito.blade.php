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
          @if(isset($lastCart))
            <li class="product_li">Producto: {{ $lastCart->id }} </li>
            <form class="" action="/carrito/eliminar" method="post">
              <button type="button" name="button" class="button_register" value="{{ $lastCart->$product->name }}">Eliminar del carrito</button>
            </form>
            <li>Total: $  </li>
          @else
            <span>No se han seleccionado productos</span>
          @endif
        </ul>
      </div>
    </div>
    @if(isset($lastCart))
      <div class="submit_cart">
        <form class="" action="/carrito/comprar" method="post">
          @csrf
          <div class="">
            <button class="button_register" type="submit" name="button" value=" {{ $lastCart->id }} "> Comprar </button><br><br>
          </div>
        </form>
      </div>
    @endif
  </section>

 </div>
@endsection
