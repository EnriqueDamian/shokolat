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
          @if(isset($marcas))
            <form action=" {{action('AdministradorController@ModificarMarca')}} " method="post" files="true" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                  <div class="form-group col-md-12">
                    <label>Nombre de la marca</label>
                    <br>
                   <input type="text" autocomplete="true" name="nombre_marca" class="form-control" placeholder="Nombre de la marca" value="{{$marcas[0]->nombre_marca}}">
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-md 12">
                    <label>Banner de la Marca</label>
                    <input type="file" name="marca_img_banner" class="form-control" value="" id="">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md 12">
                    <label>Logo de la Marca</label>
                    <input type="file" name="marca_img_logo" class="form-control" value="" id="">
                  </div>
                </div>
                <br>

                
                <br>

                <button type="submit" class="btn btn-success">Guardar Marca</button>
                <br>
            </form>
          @else
          
            <form action=" {{action('AdministradorController@GuardarMarcas')}} " method="post" files="true" enctype="multipart/form-data">
  		          {{ csrf_field() }}
  		          <div class="row">
                  <div class="form-group col-md-12">
                    <label>Nombre de la marca</label>
                    <br>
                   <input type="text" autocomplete="true" name="nombre_marca" class="form-control" placeholder="Nombre de la marca" value="">
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-md 12">
                    <label>Banner de la Marca</label>
                    <input type="file" name="marca_img_banner" class="form-control" value="" id="">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md 12">
                    <label>Logo de la Marca</label>
                    <input type="file" name="marca_img_logo" class="form-control" value="" id="">
                  </div>
                </div>
                <br>

                
                <br>

                <button type="submit" class="btn btn-success">Guardar Marca</button>
                <br>
            </form>
          @endif
          </div>
        </div>             
    </div>
  </div>
</body>
@include('templates.AbajoAdministrador')



	


