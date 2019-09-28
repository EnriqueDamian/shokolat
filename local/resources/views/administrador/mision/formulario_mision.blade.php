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
            <form action=" {{action('AdministradorController@ModificarMision')}} " method="post" files="true" enctype="multipart/form-data">
		          {{ csrf_field() }}
		          <div class="row">
                <div class="form-group col-md-12">
                  <label>Mision</label>
                  <br>
                  <input type="hidden" name="id_mision" value="{{$mision[0]->id_mision}}">
                  <textarea name="mision" id="" cols="120" rows="5">{{$mision[0]->mision}}</textarea>
                </div>
              </div>
              <br>

              <div class="row">
                <div class="col-md 12">
                  <label>Imagen (Banner)</label>
                  <input type="file" name="imagen_mision" class="form-control" value="" id="imagen_mision">
                  <img src="local/public/img/images_vision_mision/{{$mision[0]->imagen_mision}}" height="150px" alt="">
                </div>
              </div>
              <br>

              <div class="row">
                <div class="col-md-12">
                  <img src="" alt="" id="contenedor2" height="150px">
                </div>
              </div>
              <br>

              <button type="submit" class="btn btn-success">Guardar Cambios</button>
              <br>
              </form>
          </div>
        </div>             
    </div>
  </div>
</body>
@include('templates.AbajoAdministrador')



	


