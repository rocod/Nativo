<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjeController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\AutorxController;
use App\Http\Controllers\ContribuyenteController;
use App\Http\Controllers\LicenciaController;
use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NovedadController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('inicio');
});*/

Route::get('/', [HomeController::class, 'index'])->name('inicio');




Route::get('/clear-cache', function () {
   echo Artisan::call('config:clear');
   echo Artisan::call('config:cache');
   echo Artisan::call('cache:clear');
   echo Artisan::call('route:clear');
});

Route::get('/ver_contenidos/{id_eje?}/{id_subcategoria?}/{id_nivel?}/{id_formato?}/{id_etiqueta?}/{id_autor?}/{id_contribuyente?}/{id_licencia?}', [ContenidoController::class, 'ver_contenidos'])->name('ver_contenidos');

Route::get('/detalle_contenido/{id_contenido}/', [ContenidoController::class, 'detalleContenido'])->name('detalle_contenido');


Route::get('/buscar_subcategoria/{id_eje}', [ContenidoController::class, 'buscarSubcategoria'])->name('buscar_subcategoria');


Route::get('/detalle_novedad/{id_novedad}/', [HomeController::class, 'detalleNovedad'])->name('detalle_novedad');

Route::get('/comunidad/', [HomeController::class, 'comunidad'])->name('comunidad');
Route::get('/contacto/', [HomeController::class, 'contacto'])->name('contacto');
Route::post('/enviarMensaje', [HomeController::class, 'enviarMensaje'])->name('enviarMensaje');




Auth::routes();

Route::get('/panel', [ContenidoController::class, 'index'])->name('home');
Route::get('/home', [ContenidoController::class, 'index'])->name('home');

/*Contenidos*/
Route::get('/contenidos', [ContenidoController::class, 'index'])->name('contenidos');
Route::get('/agregarContenido', [ContenidoController::class, 'create'])->name('agregarContenido');
Route::post('/grabarContenido', [ContenidoController::class, 'grabarContenido'])->name('grabarContenido');
Route::get('showContenido/{contenido}', [ContenidoController::class, 'show'])->name('showContenido');
Route::match(['put', 'patch'],'editContenido/{contenido}', [ContenidoController::class, 'edit'])->name('editContenido');
Route::get('borrarContenido/{contenido}', [ContenidoController::class, 'borrar'])->name('borrarLicencia');
Route::delete('destroyContenido/{contenido}', [ContenidoController::class, 'destroy'])->name('destroyContenido');


/*Comunidad*/
Route::get('/novedades', [NovedadController::class, 'index'])->name('novedades');
Route::get('/agregarNovedad', [NovedadController::class, 'create'])->name('agregarNovedad');
Route::post('/grabarNovedad', [NovedadController::class, 'grabarNovedad'])->name('grabarNovedad');
Route::get('showNovedad/{novedad}', [NovedadController::class, 'show'])->name('showNovedad');
Route::match(['put', 'patch'],'editNovedad/{novedad}', [NovedadController::class, 'edit'])->name('editNovedad');
Route::get('borrarNovedad/{novedad}', [NovedadController::class, 'borrar'])->name('borrarNovedad');
Route::delete('destroyNovedad/{novedad}', [NovedadController::class, 'destroy'])->name('destroyNovedad');


/*Ejes*/
Route::get('/ejes', [Controller::class, 'index'])->name('ejes');
Route::get('/agregarEje', [EjeController::class, 'create'])->name('agregarEje');
Route::post('/grabarEje', [EjeController::class, 'grabarEje'])->name('grabarEje');
Route::get('showEje/{eje}', [EjeController::class, 'show'])->name('showEje');
Route::match(['put', 'patch'],'editEje/{eje}', [EjeController::class, 'edit'])->name('editEje');
Route::get('borrarEje/{eje}', [EjeController::class, 'borrar'])->name('borrarEje');
Route::delete('destroyEje/{eje}', [EjeController::class, 'destroy'])->name('destroyEje');
/*Subcategorías*/
Route::get('/subcategorias', [SubcategoriaController::class, 'index'])->name('subcategorias');
Route::get('/agregarSubcategoria', [SubcategoriaController::class, 'create'])->name('agregarSubcategoria');
Route::post('/grabarSubcategoria', [SubcategoriaController::class, 'grabarSubcategoria'])->name('grabarSubcategoria');
Route::get('showSubcategoria/{subcategoria}', [SubcategoriaController::class, 'show'])->name('showSubcategoria');
Route::match(['put', 'patch'],'editSubcategoria/{subcategoria}', [SubcategoriaController::class, 'edit'])->name('editSubcategoria');
Route::get('borrarSubcategoria/{subcategoria}', [SubcategoriaController::class, 'borrar'])->name('borrarSubcategoria');
Route::delete('destroySubcategoria/{subcategoria}', [SubcategoriaController::class, 'destroy'])->name('destroySubcategoria');

/*Niveles*/
Route::get('/niveles', [NivelController::class, 'index'])->name('niveles');
Route::get('/agregarNivel', [NivelController::class, 'create'])->name('agregarNivel');
Route::post('/grabarNivel', [NivelController::class, 'grabarNivel'])->name('grabarNivel');
Route::get('showNivel/{nivel}', [NivelController::class, 'show'])->name('showNivel');
Route::match(['put', 'patch'],'editNivel/{nivel}', [NivelController::class, 'edit'])->name('editNivel');
Route::get('borrarNivel/{nivel}', [NivelController::class, 'borrar'])->name('borrarNivel');
Route::delete('destroyNivel/{nivel}', [NivelController::class, 'destroy'])->name('destroyNivel');


/*Etiquetas*/
Route::get('/etiquetas', [EtiquetaController::class, 'index'])->name('etiquetas');
Route::get('/agregarEtiqueta', [EtiquetaController::class, 'create'])->name('agregarEtiqueta');
Route::post('/grabarEtiqueta', [EtiquetaController::class, 'grabarEtiqueta'])->name('grabarEtiqueta');
Route::get('showEtiqueta/{etiqueta}', [EtiquetaController::class, 'show'])->name('showEtiqueta');
Route::match(['put', 'patch'],'editEtiqueta/{etiqueta}', [EtiquetaController::class, 'edit'])->name('editEtiqueta');
Route::get('borrarEtiqueta/{etiqueta}', [EtiquetaController::class, 'borrar'])->name('borrarEtiqueta');
Route::delete('destroyEtiqueta/{etiqueta}', [EtiquetaController::class, 'destroy'])->name('destroyEtiqueta');


/*Autorxes*/
Route::get('/autorxs', [AutorxController::class, 'index'])->name('autorxs');
Route::get('/agregarAutorx', [AutorxController::class, 'create'])->name('agregarAutorx');
Route::post('/grabarAutorx', [AutorxController::class, 'grabarAutorx'])->name('grabarAutorx');
Route::get('showAutorx/{autorx}', [AutorxController::class, 'show'])->name('showAutorx');
Route::match(['put', 'patch'],'editAutorx/{autorx}', [AutorxController::class, 'edit'])->name('editAutorx');
Route::get('borrarAutorx/{autorx}', [AutorxController::class, 'borrar'])->name('borrarAutorx');
Route::delete('destroyAutorx/{autorx}', [AutorxController::class, 'destroy'])->name('destroyAutorx');

/*contribuyebtes*/
Route::get('/contribuyentes', [ContribuyenteController::class, 'index'])->name('contribuyentes');
Route::get('/agregarContribuyente', [ContribuyenteController::class, 'create'])->name('agregarContribuyente');
Route::post('/grabarContribuyente', [ContribuyenteController::class, 'grabarContribuyente'])->name('grabarContribuyente');
Route::get('showContribuyente/{contribuyente}', [ContribuyenteController::class, 'show'])->name('showContribuyente');
Route::match(['put', 'patch'],'editContribuyente/{contribuyente}', [ContribuyenteController::class, 'edit'])->name('editContribuyente');
Route::get('borrarContribuyente/{contribuyente}', [ContribuyenteController::class, 'borrar'])->name('borrarContribuyente');
Route::delete('destroyContribuyente/{contribuyente}', [ContribuyenteController::class, 'destroy'])->name('destroyContribuyente');


/*Licencias*/
Route::get('/licencias', [LicenciaController::class, 'index'])->name('licencias');
Route::get('/agregarLicencia', [LicenciaController::class, 'create'])->name('agregarLicencia');
Route::post('/grabarLicencia', [LicenciaController::class, 'grabarLicencia'])->name('grabarLicencia');
Route::get('showLicencia/{licencia}', [LicenciaController::class, 'show'])->name('showLicencia');
Route::match(['put', 'patch'],'editLicencia/{licencia}', [LicenciaController::class, 'edit'])->name('editLicencia');
Route::get('borrarLicencia/{licencia}', [LicenciaController::class, 'borrar'])->name('borrarLicencia');
Route::delete('destroyLicencia/{licencia}', [LicenciaController::class, 'destroy'])->name('destroyLicencia');


