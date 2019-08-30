@extends("plantilla")

@section("titulo")
  Productos - Vasanjohel
@endsection

@section('principal')
<div class="cart_container">

<section class="div_container">
    <div class="login_container">

     <div class="div_container">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="buscador" class="col-md-4 col-form-label text-md-right">{{ __('Buscar') }}</label>

                    <div class="col-md-6">
                        <input id="buscador" type="search" class="form-control" name="buscador" value="{{ old('buscador') }}" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Categoría') }}</label>

                    <div class="col-md-6">
                      <select id="selectCategoria" class="form-control" name="categoria" value="{{ old('categoria') }}">
                        <option value="">Seleccionar</option>
                        <option value="V" @if (old('categoria') == "V") {{ 'selected' }} @endif>Vestimenta</option>
                        <option value="A" @if (old('categoria') == "A") {{ 'selected' }} @endif>Accesorios</option>
                        <option value="Z" @if (old('categoria') == "Z") {{ 'selected' }} @endif>Zapatos</option>
                      </select>
                    </div>
                </div>


                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="button_register">
                            {{ __('Listar') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>



<div class="products_container_2">
    <div class="products_container">
      @forelse ($products as $product)
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
        @empty
          <p>No hay items</p>
      @endforelse
    </div>
{{ $products -> links() }}
</div>


    <!-- Inicio Muestra de productos -->
    {{-- <div class="products_container">
      @foreach ($products as $product)
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
      @endforeach
      {{ $products -> links() }}
    </div> --}}
    <!-- Fin Muestra de productos -->


</section>

</div>

@endsection
