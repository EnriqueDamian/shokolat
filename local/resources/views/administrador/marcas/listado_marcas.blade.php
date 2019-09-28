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
          <div class="row">
            
            <a class="btn btn-success" href="{{action('AdministradorController@MostrarFormularioMarcas')}} ">Agregar Marca</a>
          </div>
          
         
            <div class="row" style="margin-right: -30px; margin-left: -30px;">
              <div class="col-md-12">
                <table class="table table-bordered" style="justify-content: justify;">
                  <tr>
                    <td>Nombre de la marca</td>
                    <td>Banner</td>
                    <td>Logo</td> 
                    <td>Acciones</td>         
                       
                  </tr>
                  @foreach($marcas as $marca)
                    <tr>
                      
                      <td><center><strong>{{$marca->nombre_marca}}</strong></center></td>
                      <td><center><img src="local/public/img/images_marcas/{{$marca->marca_img_banner}}" class="imagen-responsive" height="120px" width="300px" ></center></td>
                      <td><center><img src="local/public/img/images_marcas/{{$marca->marca_img_logo}}" class="imagen-responsive" height="120px" width="300px"  ></center></td>
                      <td><center>
                        <a href=" {{action('AdministradorController@EliminarMarca', $marca->id_marca)}} " class="btn btn-danger">ELIMINAR</a>
                        <!--<a href=" {{action('AdministradorController@ObtenerMarca', $marca->id_marca)}} " class="btn btn-warning">MODIFICAR</a>--></center>
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