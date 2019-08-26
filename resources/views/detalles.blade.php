@extends("plantilla")

@section("titulo")
  Detalle de {{ $productToShow->name }} - Vasanjohel
@endsection


@section('principal')
<!-- {{dd($productToShow->image)}} -->
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
        {{ $productToShow->price }}
      </div>
      <div class="product_descripcion">   <!-- quizás se podría agregar en la tabla una columna "descripción" para esto -->
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Aliquam vitae mollis dolor, sit amet consectetur lacus.
        Cras tincidunt in ipsum at mollis.
        Curabitur tempus nunc vel dolor vehicula eleifend.
        In eget urna eget eros feugiat aliquam.
      </div>

      <div class="product_botton_buy">
      <a class="hypervinc_comprar" href="#">Comprar</a> <br>
      </div>
      <div class="product_botton_fav">
      <a class="hypervinc_favoritos" href="#">Mis favoritos</a> <br>
      </div>

    </div>
  </div>
@endsection
