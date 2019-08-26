@extends("plantilla")

@section("titulo")
  Inicio - Vasanjohel
@endsection

@section ("principal")

  <!-- INICIO del BANNER -->

  <!-- Bootstrap Carousel con controles, indicadores y caption -->
			<div class="products_container">
		  		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			 		<ol class="carousel-indicators">
						<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			 		</ol>
			 		<div class="carousel-inner">
						<div class="carousel-item active">
				  			<img src="/img/banner-03.png" class="d-block w-100 mi-imagen" alt="...">
				  			<div class="carousel-caption d-none d-md-block">
					 			<h5>Colección Otoño - Invierno</h5>
					 			<p>2019</p>
				  			</div>
						</div>
						<div class="carousel-item">
						  <img src="/img/banner-02.png" class="d-block w-100 mi-imagen" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							 <h5>Novedades</h5>
							 <p>Trending de temporada</p>
						  </div>
						</div>
						<div class="carousel-item">
						  <img src="/img/banner-04.png" class="d-block w-100 mi-imagen" alt="...">
						  <div class="carousel-caption d-none d-md-block">
							 <h5>Seguinos en las redes</h5>
							 <p>Participá de eventos semanales</p>
						  </div>
						</div>
			 		</div>
				 <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				 </a>
				 <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				 </a>
		  		</div>
			</div>
			<!-- Fin Bootstrap Carousel con controles, indicadores y caption -->

  <!-- FIN del BANNER -->

  <!-- INICIO DE PRODUCTOS DE MUESTRA-->

  <div class="products_container">
    @foreach ($products as $product)
      @if($product->id < 4) <!-- esto es para que no me muestre más de tres productos -->
        <div class="product_container">
          <div class="product_imagen">
            <a href="/detalles/{{ $product->id }}"><img src="/storage/products/{{ $product->image }}" alt="photo"></a>
          </div>
          <div class="product_descripcion">
            {{ $product->name }}
          </div>
          <div class="product_precio1">
            $ {{ $product->price }}
          </div>
        </div>
      @endif
    @endforeach

  </div>
  <!-- FIN DE PRODUCTOS MUESTRA -->

@endsection
