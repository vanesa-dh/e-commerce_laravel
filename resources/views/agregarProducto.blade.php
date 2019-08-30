@extends("plantilla")

@section("titulo")
  Agregar producto - Vasanjohel
@endsection

@section ("principal")
  <div class="cart_container">
    <div class="div_container">
      <div class="col-md-8">
        <div class="card-body">
          <form class="" enctype="multipart/form-data" action="/agregar" method="post">
            @csrf

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del producto') }}</label>
              <div class="col-md-6">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                  <span class="name_error" style="color:red"></span>
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>
              <div class="col-md-6">
                  <input type="file" class="@error('image') is-invalid @enderror" name="image" value="" autocomplete="image" autofocus>
                  <span class="image_error" style="color:red"></span>
                  @error('image')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>
              <div class="col-md-6">
                  <input type="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" autocomplete="price" autofocus>
                  <span class="price_error" style="color:red"></span>
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Categoría') }}</label>
              <div class="col-md-6">
                <select class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}">
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                  @endforeach
                </select>
                  <span class="category_error" style="color:red"></span>
                  @error('category')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="button_register">
                        {{ __('Agregar producto') }}
                    </button>
                </div>
            </div>

          </form>
        </div>

      </div>

    </div>
  </div>
@endsection
