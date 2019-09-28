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
      @include('templates.NavbarAdministrador')
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- Contenido aqui-->
          <div class="row">
            
            <a class="btn btn-success" href="{{action('AdministradorController@MostrarListadoProductos')}} ">Regresar</a>
          </div>
          

            @if(isset($productos))
	<form action="{{action('AdministradorController@ModificarProducto')}}" method="post" files="true" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="row">
			<div class="form-group col-md-12">
				<label>Nombre del Producto</label>
				<input type="hidden" name="id_producto" value="{{$productos[0]->id_producto}}">
				<input type="text" autocomplete="true" name="nombre_producto" class="form-control" placeholder="Nombre del Producto" value="{{$productos[0]->nombre_producto}}">
				<br>
			</div>
		</div>
		<br>

		<div class="row">
			<div class="col-md 12">
				<label>Marca</label>
				<select name="id_marca" class="form-control">
					@foreach($marcas as $marca)
					  <option  value="{{$marca->id_marca}}" 
					  	<?php 

					  	if($marca->id_marca == $productos[0]->id_marca) {
					  	?> 

					  	selected="selected"
					  	<?php

					  	}

					  	?>>
					  		{{$marca->nombre_marca}}
					  	</option>
				  	@endforeach
				</select>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md 12">
				<label>Descripcion del producto</label>
				<input type="text" name="descripcion_producto" class="form-control" placeholder="Descripcion del producto" value="{{$productos[0]->descripcion_producto}}">
			</div>
		</div>
		<br>

		<div class="row">
			<div class="col-md 12">
				<label>Cantidad</label>
				<input type="text" name="cantidad_producto" class="form-control" placeholder="Cantidad del producto (gr)" value="{{$productos[0]->cantidad_producto}}">
			</div>
		</div>
		<br>

		<div class="row">
			<div class="col-md 12">
				<label>Imagen</label>
				<input type="file" name="imagen_producto" class="form-control" placeholder="Descripcion" value="">
			</div>
			<button type="submit" class="btn btn-succes">Guardar Producto</button>
		</div>
		<br>
	</form>	
@else
	<form action=" {{action('AdministradorController@GuardarProducto')}} " method="post" files="true" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="row">
			
			<div class="form-group col-md-12">
				<label>Nombre del Producto</label>
				<input type="text" autocomplete="true" name="nombre_producto" class="form-control" placeholder="Nombre del Producto" value="">
				
			</div>
		</div>
		<br>

		<div class="row">
			<div class="col-md 12">
				<label>Marca</label>
				<select name="id_marca" class="form-control">
					@foreach($marcas as $marca)
					  <option value="{{$marca->id_marca}}">{{$marca->nombre_marca}}</option>
				  	@endforeach
				</select>
			</div>
		</div>
		<br>


		<div class="row">
			<div class="col-md 12">
				<label>Descripcion del producto</label>
				<input type="text" name="descripcion_producto" class="form-control" placeholder="Descripcion del producto" value="">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md 12">
				<label>Cantidad</label>
				<input type="text" name="cantidad_producto" class="form-control" placeholder="Cantidad del producto (gr)" value="">
			</div>
		</div>
		<br>

		<div class="row">
			<div class="col-md 12">
				<label>Imagen</label>
				<input type="file" name="imagen_producto" class="form-control" placeholder="Descripcion" value="">
			</div>
			
		</div>
		<br>
		<button type="submit" class="btn btn-success">Guardar Producto</button>
		<br>
	</form>
@endif
        
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







