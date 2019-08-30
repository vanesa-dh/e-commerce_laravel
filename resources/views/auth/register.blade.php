@extends("plantilla")

@section("titulo")
  Registro - Vasanjohel
@endsection

@section('principal')

<div class="cart_container">


    <div class="div_container">
        <div class="col-md-8">
            <div>
                {{-- <div>{{ __('Registro') }}</div> --}}

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

{{-- Inicio Agrego user_name --}}

<div class="form-group row">
    <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

    <div class="col-md-6">
        <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" autocomplete="user_name" autofocus>

        @error('user_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- Fin Agrego user_name --}}





                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Inicio de selección de país -->

                        <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right" for="country">{{ __('País de nacimiento') }}</label>
                          <div class="col-md-6">
                            <select id="selectRegisterCountry" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}">
                            </select>
                            @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>

                        </div>

                        <!-- Fin de selección de país -->
                        <!-- Inicio select Provincias -->

                        <div id="provinceDiv" class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right" for="country">{{ __('Provincia') }}</label>
                          <div class="col-md-6">
                            <select id="selectRegisterProvince" class="form-control @error('province') is-invalid @enderror" name="province" value="{{ old('province') }}">
                            </select>
                            @error('province')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>

                        </div>

                        <!-- fin select privincias -->

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button_register">
                                    {{ __('Registro') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="/js/register.js"></script>
@endsection
