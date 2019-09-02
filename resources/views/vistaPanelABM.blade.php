@extends("plantilla")

@section("titulo")
  Panel ABM - Vasanjohel
@endsection

@section('principal')

<div class="cart_container">
  <div class="div_container">

    <div class="div_container">
      <a href="{{ 'agregar' }}">
        <button type="button" class="button_register">
          {{ __('Agregar') }}
        </button>
      </a>
    </div>

    <div class="div_container">
      <a href="{{ 'eliminar' }}">
        <button type="button" class="button_register">
            {{ __('Borrar') }}
        </button>
      </a>
    </div>

  
    <div class="div_container">
      <form class="" action="{{ route('leeElPost') }}" method="post">
      @csrf
      <div class="products_container_2">
          <button type="submit" class="button_register">
              {{ __('Modificar') }}
          </button>
      </div>
        <div class="">
          <select id="selectProduct" class="" name="id" value="{{ old('products') }}">
            <option value="" disabled selected>Seleccione producto</option>
              @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
              @endforeach
          </select>
        </div>
      </form>
    </div>

  </div>
</div>
@endsection
