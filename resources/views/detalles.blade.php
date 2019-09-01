@extends("plantilla")

@section("titulo")
  Detalle de {{ $productToShow->name }} - Vasanjohel
@endsection


@section('principal')

  <!-- Acá va el producto que se quiere inspeccionar -->
  <div class="products_container">

    <div class="product_container">
      <div class="product_imagen">
          <img src="/storage/products/{{ $productToShow->image }}" alt="photo">
      </div>
      <div class="product_cloth">
          {{ $productToShow->name }}
      </div>
    </div>
    <div class="product_container">

      <div class="product_cloth">
          {{ $productToShow->name }}
      </div>
      <div class="product_precio">
        $ {{ $productToShow->price }}
      </div>
      <div class="product_descripcion">   <!-- quizás se podría agregar en la tabla una columna "descripción" para esto -->
        Compra online sujeta a disponibilidad de stock.
        Consultá nuestras facilidades de pago.
        <br><br>
        Precios válidos para venta web y telefónica, no aplican al local de venta.
      </div>

      <div class="product_botton_buy">
      <a class="hypervinc_comprar" href="/detalles/{{ $productToShow->id }}/agregarEnCarrito">Agregar al carrito</a> <br>
      </div>
      {{-- <div class="product_botton_fav">
      <a class="hypervinc_favoritos" href="#">Mis favoritos</a> <br>
      </div> --}}

    </div>
  </div>
@endsection
