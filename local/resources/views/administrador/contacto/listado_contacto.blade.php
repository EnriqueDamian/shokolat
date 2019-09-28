@include('templates.ArribaAdministrador')

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
      -->
      <div class="logo">
        <a href="" class="simple-text logo-mini">PALEMO</a>
        <a href="" class="simple-text logo-normal">SHOKOLAT
        </a>
      </div>
      @include('templates.MenuAdministrador')
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">notifications</i> Notifications
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- Contenido aqui-->
          	<div class="row" style="margin-right: -30px; margin-left: -30px;">
              <div class="col-md-12">
                <table class="table table-bordered">
                  <tr>
                    <td>Nombre</td>
                    <td>Correo</td>
                    <td>Telefono</td>     
                    <td>Mensaje</td>   
                  </tr>
                  @foreach($contactos as $contactos)
                    <tr>
                      <td>{{$contactos->nombres_contacto}} {{$contactos->apellidos_contacto}}</td>
                      <td>{{$contactos->telefono_contacto}}</td>   
                      <td>{{$contactos->correo_contacto}}</td>   
                      <td>
						<form action=" {{action('AdministradorController@MostrarMensajeContacto')}} " method="post">
							<input type="hidden" name="id_contacto" value="{{$contactos->id_contacto}}">
              {{ csrf_field() }}
							<button type="submit" class="btn btn-success">Ver Mensaje</button>
						</form>
						
                      </td>  
                    </tr>
                  @endforeach
                </table>
              </div>
            </div>
          
          
        	
        
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
         
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
</body>


@include('templates.AbajoAdministrador')
