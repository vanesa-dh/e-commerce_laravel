@extends("plantilla")

@section("titulo")
  Mi perfil - Vasanjohel
@endsection

@section('principal')
<!-- INICIO del PERFIL -->
    <div class="profile_container"> <!-- contenedor del perfil -->
      <section class="question-container">
        <div class="link-inicio">
            <a href="/">INICIO </a><i class="fas fa-arrow-right"></i> <strong>Mi perfil</strong>
        </div>
      </section>
      <h1>@ {{ $userToShow->user_name }}</h1>
      <div class="info_profile_container">
        <div class="profile_img">
          <img src='{{ ($userToShow->profile_photo != null) ? "/storage/users/$userToShow->profile_photo" : "/img/profile-img.jpg" }}' alt="profile image">
          <!-- <a class="edit_profile" href="#">Editar <i class="fas fa-user-edit"></i></a> -->
        </div>
        <div class="profile_info">
          <div class="profile_title">
            <!-- <a class="edit_profile" href="#"><i class="fas fa-user-edit"></i></a> -->
            <h3>Datos personales</h3>
          </div>
          <ul class="p_list">
            <li><span>Nombre:</span> {{ $userToShow->name }}</li>
            <li><span>Email:</span> {{ $userToShow->email }}</li>
            <li><span>País:</span> {{ $userToShow->country }}</li>
            <!-- <li><span>Direcciones guardadas:</span>
              <ul class="p_sublist">
                <li>Coronel Díaz 1765, 3°B, CABA</li>
                <li>Las Heras 3834, 4°C, CABA</li>
              </ul>
            </li> -->
          </ul>
          <h3>Historial de órdenes</h3>
          <ul class="p_list">
            <li><span>Número de orden 111</span> <!-- orden 2 -->
              <ul class="p_sublist"> <!-- datos de la orden 1 -->
                <li><span>Producto: </span> <a href="productos.html">Camisa Americana</a></li>
                <li><span>Fecha: </span>13/03/2019</li>
                <!-- <li><span>Estado: </span>Entregado</li> -->
              </ul>
            </li>
            <!-- <li> <span>Número de orden 110</span>
                <ul class="p_sublist">
                  <li><span>Producto: </span><a href="productos.html">Sweater Winter</a></li>
                  <li><span>Fecha: </span>04/06/2018</li>
                  <li><span>Estado: </span>Cancelado</li>
                </ul>
            </li> -->
          </ul>



        @if(auth()->user()->id == $userToShow->id)
          {{-- Inicio del boton de logout --}}
          <div class="">
              <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <div class="form-group">
                      <div class="col-md-8">
                          <button type="submit" class="button_register">
                              {{ __('Desloguearse') }}
                          </button>
                      </div>
                  </div>
              </form>
          </div>
          {{-- fin del boton de logout --}}

          <div class="col-md-8">
            <div class="">
              <a href="{{ route('llevaAlPanelABM') }}">
                  <button type="button" class="button_register">
                    {{ __('Al Panel AMB') }}
                  </button>
              </a>
            </div>
          </div>
        @endif


        </div>
      </div>
    </div>
<!-- FIN del PERFIL -->
@endsection
