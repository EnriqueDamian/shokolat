<?php



/**** SITIO WEB ****/
	Route::get('/', 'AdministradorController@MostrarInicio');
	Route::get('ShokoladContacto', 'AdministradorController@MostrarContacto');
	Route::get('ShokoladNosotros', 'AdministradorController@MostrarNosotros');
	Route::get('ShokoladHistoria', 'AdministradorController@MostrarHistoria2');
/**** SITIO WEB ****/

/**** ADMINISTRADOR ****/
	Route::get('InicioAdministrador', 'AdministradorController@MostrarInicioAdministrador');
	
	/*Marcas*/
	Route::get('ListadoMarcas', 'AdministradorController@MostrarListadoMarcas');
	Route::get('FormularioMarcas', 'AdministradorController@MostrarFormularioMarcas');
	Route::post('GuardarMarcas', 'AdministradorController@GuardarMarcas');
	Route::get('ObtenerMarca/{id}', 'AdministradorController@ObtenerMarca');
	Route::post('ModificarMarca', 'AdministradorController@ModificarMarca');
	Route::get('EliminarMarca/{id}', 'AdministradorController@EliminarMarca');
	/*Marcas*/

	/*Productos*/
		Route::get('ListadoProductos',  'AdministradorController@MostrarListadoProductos');
		Route::get('FormularioProductos', 'AdministradorController@MostrarFormularioProductos');
		Route::post('GuardarProducto', 'AdministradorController@GuardarProducto');
		Route::get('EliminarProducto/{id}', 'AdministradorController@EliminarProducto');
		Route::get('ObtenerProducto/{id}',  'AdministradorController@ObtenerProducto');
		Route::post('ModificarProducto', 'AdministradorController@ModificarProducto');
	/*Productos*/

	/*Mision*/
		Route::get('Mision', 'AdministradorController@MostrarFormularioMision');
		Route::post('ModificarMision', 'AdministradorController@ModificarMision');
	/*Mision*/

	/*Vision*/
		Route::get('Vision', 'AdministradorController@MostrarFormularioVision');
		Route::post('ModificarVision', 'AdministradorController@ModificarVision');
	/*Vision*/

	/*Contacto*/
		Route::get('ListadoContactos', 'AdministradorController@MostrarListadoContactos');
		Route::post('MostrarMensaje', 'AdministradorController@MostrarMensajeContacto');
		Route::post('CorreoElectronico', 'AdministradorController@EnviarCorreoElectronico');
	/*Contacto*/

	/*Historia*/
		Route::get('HistoriaShokolad', 'AdministradorController@MostrarHistoria');
		Route::post('ModificarHistoria', 'AdministradorController@ModificarHistoria');
	/*Historia*/
/**** ADMINISTRADOR ****/

