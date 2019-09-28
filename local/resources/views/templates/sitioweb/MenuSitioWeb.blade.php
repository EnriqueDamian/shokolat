<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href=" {{action('AdministradorController@MostrarInicio')}} ">
        <h1>SHOKOLAD</h1>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="myNavigation" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" id="navigation">
          <li class="nav-item active">
            <a class="nav-link" href=" {{action('AdministradorController@MostrarInicio')}} ">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" {{action('AdministradorController@MostrarHistoria2')}} ">HISTORIA</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link" href=" {{action('AdministradorController@MostrarNosotros')}} ">NOSOTROS</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href=" {{action('AdministradorController@MostrarContacto')}} ">CONTACTOS</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>