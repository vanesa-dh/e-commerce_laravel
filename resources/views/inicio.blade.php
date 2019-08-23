@extends("plantilla")

@section ("principal")

  <!-- INICIO del BANNER -->

  {{-- Aca va un banner --}}

  <!-- FIN del BANNER -->

  <!-- INICIO DE PRODUCTOS DE MUESTRA-->
  <div class="products_container">

    <div class="product_container">
      <div class="product_imagen">
          <a href="/detalles"><img src="img/sweaterwhite.jpg" alt="photo"></a>
      </div>
      <div class="product_descripcion">
          Sweater Winter
      </div>
      <div class="product_precio1">
        $2890
      </div>
    </div>

    <div class="product_container">
      <div class="product_imagen">
          <a href="/detalles"><img src="img/camisabrickfuxia.jpg" alt="photo"></a>
      </div>
      <div class="product_descripcion">
          Camisa Americana
      </div>
      <div class="product_precio1">
        $2300
      </div>
     </div>

     <div class="product_container">
       <div class="product_imagen">
           <a href="/detalles"><img src="img/chaleco.jpg" alt="photo"></a>
       </div>
       <div class="product_descripcion">
           Chaleco Alaska
       </div>
       <div class="product_precio1">
         $2100
       </div>
     </div>
  </div>
  <!-- FIN DE PRODUCTOS MUESTRA -->

@endsection
