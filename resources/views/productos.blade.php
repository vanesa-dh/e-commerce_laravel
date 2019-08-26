@extends("plantilla")

@section("titulo")
  Productos - Vasanjohel
@endsection

@section('principal')

<!-- INICIO DE PRODUCTOS DE MUESTRA -->
<div class="products_container">

  @foreach ($products as $product)
    <div class="product_container">
      <div class="product_imagen">
        <a href="/detalles/{{ $product->id }}"><img src="/storage/products/{{ $product->image }}" alt="photo"></a>
      </div>
      <div class="product_descripcion">
        {{ $product->name }}
      </div>
      <div class="product_precio1">
        {{ $product->price }}
      </div>
    </div>
  @endforeach

</div>
<!-- FIN DE PRODUCTOS MUESTRA -->

@endsection
