@extends("plantilla")

@section("titulo")
  Eliminar producto - Vasanjohel
@endsection

@section ("principal")
<div class="cart_container">
  <div class="div_container">
    <div class="card-body">
      <form class="delete_product" action="/eliminar" method="post">
        @csrf
        <div class="form-group row">
          <label for="product" class="col-md-4 col-form-label text-md-right">{{ __('Seleccione el producto que desea eliminar') }}</label>
          <div class="col-md-6">
            <select id="selectProduct" class="form-control @error('product') is-invalid @enderror" name="product" value="{{ old('product') }}">
              <option value="" disabled selected>Seleccione un producto</option>
              @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
              @endforeach
            </select>
              <span class="product_error" style="color:red"></span>
              @error('product')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="button_register">
                    {{ __('Eliminar') }}
                </button>
            </div>
        </div>
      </form>
    </div>

    <!-- <div class="productToDelete">
      <div class="products_container_2">
          <div class="products_container">
            @foreach($products as $product)
              <div class="product_container">
                <div class="product_imagen">
                  <img id="productImage" src="/storage/products/{{ $product->image }}" alt="photo">
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
      </div>
    </div> -->

  </div>
</div>

<script type="text/javascript" src="/js/eliminar.js"></script>
@endsection
