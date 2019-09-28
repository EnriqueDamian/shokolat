@include('templates.ArribaAdministrador')
<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black">
      <div class="logo">
        <a href="" class="simple-text logo-mini">PALEMO</a>
        <a href="" class="simple-text logo-normal">SHOKOLAT</a>
      </div>
      @include('templates.MenuAdministrador')
    </div>

    <div class="main-panel">
      <!-- Navbar -->
      @include('templates.NavbarAdministrador') 
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- Contenido aqui-->
            <form action=" {{action('AdministradorController@ModificarHistoria')}} " method="post" files="true" enctype="multipart/form-data">
		          {{ csrf_field() }}
		          <div class="row">
                <div class="form-group col-md-12">
                  <label>Texto de la Historia</label>
                  <br>
                  <input type="hidden" name="id_historia" value="{{$historia[0]->id_historia}}">
                  <textarea name="texto_historia" id="" cols="120" rows="10">{{$historia[0]->texto_historia}}</textarea>
                </div>
              </div>
              <br>

              <div class="row">
                <div class="col-md 12">
                  <label>Imagen Historia</label>
                  <input type="file" name="imagen_historia" class="form-control" value="" id="imagen_historia">
                  <img src="local/public/img/images_historia/{{$historia[0]->imagen_historia}}" height="150px" alt="">
                </div>
              </div>
              <br>

              <div class="row">
                <div class="col-md-12">
                  <img src="" alt="" id="contenedor3" height="150px">
                </div>
              </div>
              <br>

              <button type="submit" class="btn btn-success">Guardar Historia</button>
              <br>
              </form>
          </div>
        </div>             
    </div>
  </div>
</body>
@include('templates.AbajoAdministrador')



	


