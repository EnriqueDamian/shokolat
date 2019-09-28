<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Productos;
use App\Mision;
use App\Vision;
use App\Contactos;
use App\Historia;
use App\Marcas;
use Mail;
use Illuminate\Support\Facades\Storage;

class AdministradorController extends Controller
{

/* SITIO WEB FRONT END */
    public function MostrarInicio() {
        //$contador_productos = 0;
        $marcas = DB::table('marcas')->get();
        $productos = DB::table('productos')->get();
       /*$arreglo_marcas_productos = array();
        $contador_marca = 0;
        

        foreach ($marcas as $marca) {
            $arreglo_marcas_productos[$contador_marca++] = array(
                'marca' => $marca->nombre_marca,
                'productos' => array()

            );
            foreach ($productos as $producto) {
                if ($producto->id_marca == $marca->id_marca) {
                    $arreglo_marcas_productos[$contador_productos]['productos'][] = array(
                        'imagen' => $producto->imagen_producto,
                        'nombre' => $producto->nombre_producto
                    );
                }
            }
        }


        dd($arreglo_marcas_productos);*/

        return view('sitioweb.index')
        ->with('productos', $productos)
        ->with('marcas', $marcas);
        
    }

    public function MostrarContacto() {
        return view('sitioweb.contacto');
    }

    public function MostrarNosotros() {
        return view('sitioweb.nosotros');
    }

    public function MostrarHistoria2() {
        $mision = DB::table('mision')->get();
        $vision = DB::table('vision')->get();
        return view('sitioweb.historia')
        ->with('vision', $vision)
        ->with('mision', $mision);
    }
/* SITIO WEB FRONT END */
    public function MostrarInicioAdministrador(){
       
        return view("administrador.index");
    }


/*Usuarios*/
    public function MostrarListadoUsuarios() {
        dd('estas en el metodo de listado usuarios');
    }
/*Usuarios*/

/*Marcas*/    
    public function MostrarListadoMarcas() {
        $marcas = DB::table('marcas')->get();
        return view('administrador.marcas.listado_marcas')->with('marcas', $marcas);
    }

    public function MostrarFormularioMarcas() {
        return view('administrador.marcas.formulario_marcas');
    }

    public function GuardarMarcas(Request $request) {
        
        $name_final_banner="";
        $name_final_logo="";
        
        if ($request->hasFile('marca_img_banner')) {
            $nombre_imagen = $request->marca_img_banner->getClientOriginalName();
            $archivo_ext = explode('.', $nombre_imagen);

            $file = $request->file('marca_img_banner');
            $name = time().'.'.$archivo_ext[1];
            #dd($name);
            $file->move(public_path('img').'/images_marcas/', $name);
            $name_final_banner=$name;

        }

        if ($request->hasFile('marca_img_logo')) {
            $nombre_imagen = $request->marca_img_logo->getClientOriginalName();
            $archivo_ext = explode('.', $nombre_imagen);

            $file = $request->file('marca_img_logo');
            $name = time().'1'.'.'.$archivo_ext[1];
            #dd($name);
            $file->move(public_path('img').'/images_marcas/', $name);
            $name_final_logo=$name;

        }

        $insertar_marca = DB::table('marcas')
        ->insert(
            ['nombre_marca' => $request->nombre_marca, 'marca_img_banner' => $name_final_banner, 'marca_img_logo' => $name_final_logo]
        );
        return redirect(action('AdministradorController@MostrarListadoMarcas'));
    }

    public function ObtenerMarca($id_marca)  {
        $marcas = DB::table('marcas')
        ->where('id_marca', '=', $id_marca)
        ->get();
       // var_dump($productos);
        return view('administrador.marcas.formulario_marcas')->with('marcas', $marcas);
    }

    public function ModificarMarca(Request $request) {
        //dd($request->all());
        $name_final_banner = "";
        $name_final_logo = "";

        if ($request->marca_img_banner == "" || $request->marca_img_logo == "") {
            $marca = Marcas::find($request->id_marca);
            $marca->nombre_marca = $request->nombre_marca;
            $marca->save();
            return redirect(action('AdministradorController@MostrarListadoMarcas'));

        }
        else {

            if ($request->hasFile('imagen_producto')) {
                $nombre_imagen = $request->imagen_producto->getClientOriginalName();
                $archivo_ext = explode('.', $nombre_imagen);

                $file = $request->file('imagen_producto');
                $name = time().'.'.$archivo_ext[1];
                #dd($name);
                $file->move(public_path('img').'/images_productos/', $name);
                $name_final=$name;
            }

            $producto = Productos::find($request->id_producto);
            $producto->nombre_producto=$request->nombre_producto;
            $producto->descripcion_producto=$request->descripcion_producto;
            $producto->cantidad_producto = $request->cantidad_producto;
            $producto->imagen_producto=$name_final;
            $producto->save();
            

            return redirect(action('AdministradorController@MostrarListadoProductos'));

        }
    }

    public function EliminarMarca($id_marca) {
        $marca = Marcas::find($id_marca);
        $productos = DB::table('productos')->where('id_marca', '=', $id_marca)->get();
        foreach ($productos as $producto) {
            $producto = Productos::find($producto->id_producto);
            $producto->delete();
        }
        $marca->delete();
        return redirect(action('AdministradorController@MostrarListadoMarcas'));
    }
/*Marcas*/


/*Productos*/
    public function MostrarListadoProductos() {
        $marcas = DB::table('marcas')->get();
        $productos = DB::table('productos')->get();
        return view('administrador.productos.listado_productos')
        ->with("productos", $productos)
        ->with("marcas", $marcas);
    }

    public function MostrarFormularioProductos() {
        $marcas = DB::table('marcas')->get();
        return view('administrador.productos.formulario_productos')->with('marcas', $marcas);
    }

    public function GuardarProducto(Request $request){
        
        $name_final="";
        
        if ($request->hasFile('imagen_producto')) {
            $nombre_imagen = $request->imagen_producto->getClientOriginalName();
            $archivo_ext = explode('.', $nombre_imagen);

            $file = $request->file('imagen_producto');
            $name = time().'.'.$archivo_ext[1];
            #dd($name);
            $file->move(public_path('img').'/images_productos/', $name);
            $name_final=$name;

        }

        $insertar_usuario = DB::table('productos')
        ->insert(
            ['nombre_producto' => $request->nombre_producto, 'id_marca' => $request->id_marca, 'descripcion_producto' => $request->descripcion_producto, 'cantidad_producto' => $request->cantidad_producto, 'imagen_producto' => $name_final]
        );
        return redirect(action('AdministradorController@MostrarListadoProductos'));
    }

    public function EliminarProducto($id_producto) {
        $validar_productos = DB::table('productos')->get();
        /*if (count($validar_productos)==8) {
            return redirect(action('AdministradorController@MostrarListadoProductos'));
        }*/
        $producto = Productos::find($id_producto);

        if(file_exists(public_path('img/images_productos/'.$producto->imagen_producto))){
            unlink(public_path('img/images_productos/'.$producto->imagen_producto));
        }

        $producto_completo = Productos::find($id_producto);
        $producto_completo->delete();

        
        return redirect(action('AdministradorController@MostrarListadoProductos'));
    }

    public function ObtenerProducto($id_producto) {
        $marcas = DB::table('marcas')->get();
        $productos = DB::table('productos')
        ->where('id_producto', '=', $id_producto)
        ->get();
       // var_dump($productos);
        return view('administrador.productos.formulario_productos')
        ->with('productos', $productos)
        ->with('marcas', $marcas);
    }

    public function ModificarProducto(Request $request) {
        //dd($request->all());
        $name_final = "";

        if ($request->imagen_producto == "") {
            $producto = Productos::find($request->id_producto);
            $producto->nombre_producto=$request->nombre_producto;
            $producto->id_marca = $request->id_marca;
            $producto->descripcion_producto=$request->descripcion_producto;
            $producto->cantidad_producto = $request->cantidad_producto;
            $producto->save();
            return redirect(action('AdministradorController@MostrarListadoProductos'));

        }
        else {

            if ($request->hasFile('imagen_producto')) {
                $nombre_imagen = $request->imagen_producto->getClientOriginalName();
                $archivo_ext = explode('.', $nombre_imagen);

                $file = $request->file('imagen_producto');
                $name = time().'.'.$archivo_ext[1];
                #dd($name);
                $file->move(public_path('img').'/images_productos/', $name);
                $name_final=$name;
            }

            $producto = Productos::find($request->id_producto);
            $producto->nombre_producto=$request->nombre_producto;
            $producto->id_marca = $request->id_marca;
            $producto->descripcion_producto=$request->descripcion_producto;
            $producto->cantidad_producto = $request->cantidad_producto;
            $producto->imagen_producto=$name_final;
            $producto->save();
            

            return redirect(action('AdministradorController@MostrarListadoProductos'));

        }
    }
/*Productos*/

/*Mision*/
    public function MostrarFormularioMision() {
        $mision = DB::table('mision')->get();
        return view('administrador.mision.formulario_mision')->with('mision', $mision);
    }

    public function ModificarMision(Request $request) {
        #dd($request->all());
      $name_final = "";

        if ($request->imagen_mision == "") {
            $mision = Mision::find($request->id_mision);
            $mision->mision=$request->mision;
            $mision->save();
            return redirect(action('AdministradorController@MostrarFormularioMision'));

        }
        else {

            if ($request->hasFile('imagen_mision')) {
                $nombre_imagen = $request->imagen_mision->getClientOriginalName();
                $archivo_ext = explode('.', $nombre_imagen);

                $file = $request->file('imagen_mision');
                $name = time().'.'.$archivo_ext[1];
                #dd($name);
                $file->move(public_path('img').'/images_vision_mision/', $name);
                $name_final=$name;
            }

            $mision = Mision::find($request->id_mision);
            
            $mision->mision=$request->mision;
            $mision->imagen_mision=$name_final;
           
            $mision->save();
            

            return redirect(action('AdministradorController@MostrarFormularioMision'));

        }
    }
/*Mision*/

/*Vision*/
    public function MostrarFormularioVision() {
        $vision = DB::table('vision')->get();
        return view('administrador.vision.formulario_vision')->with('vision', $vision);     
    }

    public function ModificarVision(Request $request) {
        #dd($request->all());
      $name_final = "";

        if ($request->imagen_vision == "") {
            $vision = Vision::find($request->id_vision);
            $vision->vision=$request->vision;
            $vision->save();
            return redirect(action('AdministradorController@MostrarFormularioVision'));

        }
        else {

            if ($request->hasFile('imagen_vision')) {
                $nombre_imagen = $request->imagen_vision->getClientOriginalName();
                $archivo_ext = explode('.', $nombre_imagen);

                $file = $request->file('imagen_vision');
                $name = time().'.'.$archivo_ext[1];
                #dd($name);
                $file->move(public_path('img').'/images_vision_mision/', $name);
                $name_final=$name;
            }

            $vision = Vision::find($request->id_vision);
            $vision->vision=$request->vision;
            $vision->imagen_vision=$name_final;
            $vision->save();
            

            return redirect(action('AdministradorController@MostrarFormularioVision'));

        }
    }
/*Vision*/

/*Contacto*/
    public function MostrarListadoContactos() {
        $contactos = DB::table('contactos')->get();
        return view('administrador.contacto.listado_contacto')->with('contactos', $contactos);
    }

    public function EnviarCorreoElectronico(Request $request) {
        //insertar el mensaje para ver en el administrador
        $insertar_mensaje = DB::table('contactos')
        ->insert(
            ['nombres_contacto' => $request->nombre, 'apellidos_contacto' => $request->apellidos, 'telefono_contacto' => $request->telefono, 'correo_contacto' => $request->email, 'mensaje_contacto' => $request->mensaje]
        );
        //Envio del correo electronico
        Mail::send('administrador.contacto.email', $request->all(), function($msj) {
            $msj->subject('Correo del contacto');
            $msj->to('contacto@shokolat.com.mx');
        });

        return 'Correo enviado';
    }

    public function MostrarMensajeContacto(Request $request) {
        
        $mensaje_contacto = DB::table('contactos')
        ->where('id_contacto', '=', $request->id_contacto)
        ->get();
        
       
        return view('administrador.contacto.listado_contacto_mensaje')->with('mensaje_contacto', $mensaje_contacto); 
    }

    
/*Contacto*/

/*Historia*/
    public function MostrarHistoria() {
        $historia = DB::table('historia')->get();
        return view('administrador.historia.formulario_historia')->with('historia', $historia);
    }

    public function ModificarHistoria(Request $request) {
        #dd($request->all());
      $name_final = "";

        if ($request->imagen_historia == "") {
            $historia = Historia::find($request->id_historia);
            $historia->texto_historia=$request->texto_historia;
            $historia->save();
            return redirect(action('AdministradorController@MostrarHistoria'));

        }
        else {

            if ($request->hasFile('imagen_historia')) {
                $nombre_imagen = $request->imagen_historia->getClientOriginalName();
                $archivo_ext = explode('.', $nombre_imagen);

                $file = $request->file('imagen_historia');
                $name = time().'.'.$archivo_ext[1];
                #dd($name);
                $file->move(public_path('img').'/images_historia/', $name);
                $name_final=$name;
            }

            $historia = Historia::find($request->id_historia);
            $historia->texto_historia=$request->texto_historia;
            $historia->imagen_historia = $name_final;
            $historia->save();
            
            

            return redirect(action('AdministradorController@MostrarHistoria'));

        }
    }
/*Historia*/
}