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
              <form action=" {{action('AdministradorController@ModificarVision')}} " method="post" files="true" enctype="multipart/form-data">
               	{{ csrf_field() }}
        
               	<div class="row">
               		<div class="form-group col-md-12">
               			<label>Vision</label>
               			<br>
                    <input type="hidden" name="id_vision" value="{{$vision[0]->id_vision}}">
               			<textarea name="vision" id="" cols="120" rows="5">{{$vision[0]->vision}}</textarea>
               		</div>
               	</div>
               	<br>

               	<div class="row">
               		<div class="col-md 12">
                 		<label>Imagen (Banner)</label>
                 		<input type="file" name="imagen_vision" class="form-control" placeholder="Descripcion" value="" id="imagen_vision">
                    <img src="local/public/img/images_vision_mision/{{$vision[0]->imagen_vision}}" height="150px" alt="">
                 	</div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <img src="" alt="" id="contenedor1" height="150px">
                  </div>
                </div>

                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                <br>
              </form>
          </div>
        </div>             
    </div>
  </div>
</body>
@include('templates.AbajoAdministrador')







