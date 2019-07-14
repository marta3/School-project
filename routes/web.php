<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|admin-usuarios-activos
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/p', 'pdf.CV');

	//ADMINISTRACIÓN
Route::get('/register/verify/{code}', 'GuessController@verify');
Route::get('admin/verificar/{email}/{code}', 'GuessController@mandar_mail');
Route::post('admin/curriculums_mail','GuessController@mail_curriculums')->middleware('auth','is_admin');

Route::get('/m-admin-usuarios', 'AdministracionController@show_usuarios')->middleware('auth','is_admin');
Route::get('m-usuarios-activos','AdministracionController@mostrar_usuarios_activos')->middleware('auth','is_admin');
Route::get('m-borrar-usuarios/{id}', 'AdministracionController@borrarUsuario')->middleware('auth','is_admin');
// Route::get('/usuariosactivos', 'AdministracionController@show_usuarios_activos');


Route::get('/administracion','OfertaController@getSectores')->middleware('auth','is_admin');
Route::get('administracion_ofertas', 'OfertaController@mostrar_panel')->name('admin_ofertas')->middleware('auth','is_admin');
Route::view('/administracion_usuarios', 'admin.index')->name('admin_usuarios')->middleware('auth','is_admin');
Route::view('/admin-usuarios', 'admin.index')->middleware('auth','is_admin');
Route::view('/admin-usuarios-activos', 'admin.index')->middleware('auth','is_admin');
Route::view('/index', 'layouts.index')->middleware('auth','is_admin');
Route::get('/admin-crear-oferta', 'OfertaController@mostrarOfertas')->name('crear_oferta')->middleware('auth','is_admin');
Route::get('/admin-ofertas', 'OfertaController@mostrarOfertas')->middleware('auth','is_admin');
Route::get('/m-admin-sectores', 'OfertaController@getSectoress')->middleware('auth','is_admin');
Route::post('/admin-crear-oferta', 'OfertaController@storeOferta')->middleware('auth','is_admin');
Route::post('/admin-modificar-oferta', 'OfertaController@modificar')->middleware('auth','is_admin');
Route::get('admin_eliminar_oferta/{id_oferta}', 'OfertaController@eliminar')->middleware('auth','is_admin');
Route::get('/admin-ofertas-disponibles', 'OfertaController@admin_ofertasDisponibles')->name('ofertas_disponibles')->middleware('auth','is_admin');
Route::get('/admin_usuarios_inscritos{id_oferta}', 'OfertaController@admin_usuarios_incritos')->middleware('auth','is_admin');

Route::get('admin_usuario_seleccionado/{idUsu}', 'InscribeController@administrar_seleccionados')->middleware('auth','is_admin');

	//INFORMES	
Route::get('/informes/usuarios_disponible', 'AdministracionController@informe_usuarios_disponibles')->middleware('auth','is_admin');
Route::post('/informes/ofertas_disponibles','AdministracionController@informe_ofertas_disponibles')->middleware('auth','is_admin');
Route::post('/informes/usuarios_seleccionados', 'AdministracionController@informe_usuarios_seleccionados')->middleware('auth','is_admin');

Route::post('/admin_usuarios_inscritos/exportar', 'AdministracionController@exportar_curriculums')->middleware('auth','is_admin');
Route::get('admin_admin{id}' , 'AdministracionController@administrar_admin')->middleware('auth','is_admin');
// Route::get('tipo/{type}', 'UsuariosController@notification');


// Route::get('/usuarios')

Route::get('/images/{path}/{foto}', function ($path, $foto){
// Lo siguiente devuelve el Path absoluto de "Storage"
	$storagePath = Storage::disk($path)->getDriver()->getAdapter()->getPathPrefix();
	$imageFilePath = $storagePath . $foto;
	if(File::exists($imageFilePath)) {
	return Image::make($imageFilePath)->response();
	}
});



	//USUARIOS
// Route::resource('curriculum' , 'CurriculumController');
 // Route::get('/usuarios' , 'UsuariosController@show');
Route::view('/espera', 'usuarios.espera');
Route::get('/usuarios' , 'UsuariosController@show')->middleware('auth');
 Route::post('/usuarios', 'UsuariosController@store');
 Route::get('correo_borrar_usuario/{mail}/{id}', 'GuessController@mail_eliminar_cuenta')->middleware('auth');
 // Route::get('/perfil','UsuariosController@show_perfil')->name('perfil');
 Route::view('/perfil', 'usuarios.perfil')->name('perfil')->middleware('auth');
 Route::post('perfil/editar', 'UsuariosController@editar_perfil');
 Route::get('/eliminar_usuario/{id}', 'UsuariosController@eliminarCuenta')->middleware('auth');;
 // Route::view('/p','pdf.CV');

 Route::post('usuarios/formacion', 'FormacionController@storeFormacion');
 Route::post('usuarios/modificarFormacion', 'FormacionController@modificar');
 Route::get('formacion/delete/{id}','FormacionController@eliminar')->middleware('auth');

 Route::post('usuarios/experiencia', 'ExperienciaController@storeExperiencia');
 Route::post('usuarios/modificarExperiencia', 'ExperienciaController@modificar');
 Route::get('experiencia/delete/{id}','ExperienciaController@eliminar')->middleware('auth');

 Route::post('usuarios/idioma', 'IdiomaController@storeIdioma');
 Route::post('usuarios/modificarIdioma', 'IdiomaController@modificar');
 Route::get('idioma/delete/{id}','IdiomaController@eliminar')->middleware('auth');

  Route::get('CV/delete/{id}','UsuariosController@eliminarCV')->middleware('auth');

  Route::get('descargar-CV', 'UsuariosController@pdf')->name('CV.pdf')->middleware('auth');

  // Route::get('/ofertas', 'UsuariosController@show')->name("/ofertas");
  Route::get('/ofertas', 'OfertaController@ofertasDisponibles')->middleware('auth');
  Route::get('inscribirse/{id}', 'InscribeController@inscribir')->middleware('auth');
  Route::get('cancelar_inscripcion/{id_Inscripcion}' , 'InscribeController@eliminar')->middleware('auth');


