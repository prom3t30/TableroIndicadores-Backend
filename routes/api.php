<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//rutas para servicio de categorias
Route::get('/categorias', 'CategoriaController@index');
Route::post('/categorias', 'CategoriaController@create');
Route::get('/categorias/{id}', 'CategoriaController@getById');
Route::put('/categorias', 'CategoriaController@update');
Route::delete('/categorias/{id}', 'CategoriaController@delete');

//rutas para servicio de clasificacion
Route::get('/clasificacion', 'ClasificacionController@index');
Route::post('/clasificacion', 'ClasificacionController@create');
Route::get('/clasificacion/{id}', 'ClasificacionController@getById');
Route::put('/clasificacion', 'ClasificacionController@update');
Route::delete('/clasificacion/{id}', 'ClasificacionController@delete');

//rutas para servicio de Aplicaciones
Route::get('/aplicaciones', 'AplicacionController@index');
Route::post('/aplicaciones', 'AplicacionController@create');
Route::get('/aplicaciones/{id}', 'AplicacionController@getById');
Route::put('/aplicaciones', 'AplicacionController@update');
Route::delete('/aplicaciones/{id}', 'AplicacionController@delete');

//rutas para servicio de Lineaprogramatica
Route::get('/lineaprogramatica', 'LineaprogramaticaController@index');
Route::post('/lineaprogramatica', 'LineaprogramaticaController@create');
Route::get('/lineaprogramatica/{id}', 'LineaprogramaticaController@getById');
Route::put('/lineaprogramatica', 'LineaprogramaticaController@update');
Route::delete('/lineaprogramatica/{id}', 'LineaprogramaticaController@delete');

//rutas para servicio de Plataforma
Route::get('/plataforma', 'PlataformaController@index');
Route::post('/plataforma', 'PlataformaController@create');
Route::get('/plataforma/{id}', 'PlataformaController@getById');
Route::put('/plataforma', 'PlataformaController@update');
Route::delete('/plataforma/{id}', 'PlataformaController@delete');

//rutas para servicio de Periocidad
Route::get('/periodicidad', 'PeriodicidadController@index');
Route::post('/periodicidad', 'PeriodicidadController@create');
Route::get('/periodicidad/{id}', 'PeriodicidadController@getById');
Route::put('/periodicidad', 'PeriodicidadController@update');
Route::delete('/periodicidad/{id}', 'PeriodicidadController@delete');

//rutas para servicio de Cliente
Route::get('/cliente', 'ClienteController@index');
Route::post('/cliente', 'ClienteController@create');
Route::get('/cliente/{id}', 'ClienteController@getById');
Route::put('/cliente', 'ClienteController@update');
Route::delete('/cliente/{id}', 'ClienteController@delete');

//rutas para servicio de Unidad
Route::get('/unidad', 'UnidadController@index');
Route::post('/unidad', 'UnidadController@create');
Route::get('/unidad/{id}', 'UnidadController@getById');
Route::put('/unidad', 'UnidadController@update');
Route::delete('/unidad/{id}', 'UnidadController@delete');

//rutas para servicio de Centros
Route::get('/centros', 'CentroController@index');
Route::post('/centros', 'CentroController@create');
Route::get('/centros/{id}','CentroController@getById');
Route::put('/centros', 'CentroController@update');
Route::delete('/centros/{id}', 'CentroController@delete');

//rutas para servicio de pantallas
Route::get('/pantallas', 'PantallaController@index');
Route::get('/pantallas/indexById/{id}', 'PantallaController@indexById');
Route::post('/pantallas', 'PantallaController@create');
Route::get('/pantallas/{id}', 'PantallaController@getById');
Route::put('/pantallas', 'PantallaController@update');
Route::delete('/pantallas/{id}', 'PantallaController@delete');

//rutas para servicio de funciones
Route::get('/funciones', 'FuncionController@index');
Route::post('/funciones', 'FuncionController@create');
Route::get('/funciones/{id}', 'FuncionController@getById');
Route::put('/funciones', 'FuncionController@update');
Route::delete('/funciones/{id}', 'FuncionController@delete');

//rutas para servicio de privilegios
Route::get('/privilegios', 'PrivilegioController@index');
Route::post('/privilegios', 'PrivilegioController@create');
Route::get('/privilegios/{id}', 'PrivilegioController@getById');
Route::put('/privilegios', 'PrivilegioController@update');
Route::delete('/privilegios/{id}', 'PrivilegioController@delete');
Route::get('/privilegios/getprivilegios/{aplicacionId}/{pantallaId}/{rolId}', 'PrivilegioController@getPrivilegiosByAplicacionIdPantallaIdRolId');
Route::post('/privilegios/setprivilegios/', 'PrivilegioController@setPrivilegios');

//rutas para servicio de roles
Route::get('/roles', 'RolController@index');
Route::get('/roles/privilegios/{id}', 'RolController@getInfoPrivilegio');
Route::post('/roles', 'RolController@create');
Route::get('/roles/{id}', 'RolController@getById');
Route::put('/roles', 'RolController@update');
Route::delete('/roles/{id}', 'RolController@delete');

//rutas para servicio de usuarios UsuarioController
Route::get('/usuarios', 'UsuarioController@index');
Route::get('/usuarios/getUsersManagerCentro', 'UsuarioController@getUsersManagerCentro');
Route::get('/usuarios/getUsersManagerLine', 'UsuarioController@getUsersManagerLine');
Route::get('/usuarios/getUser/{id}', 'UsuarioController@getUser');
Route::post('/usuarios', 'UsuarioController@create');
Route::get('/usuarios/{id}', 'UsuarioController@getById');
Route::get('/usuarios/getbyrolyaplicacion/{id}', 'UsuarioController@getByRolId');
Route::put('/usuarios', 'UsuarioController@update');
Route::delete('/usuarios/{id}', 'UsuarioController@delete');
Route::post('/auth', 'UsuarioController@auth');
Route::get('/logOut', 'UsuarioController@logOut');
Route::get('/tokenval/{token}', 'UsuarioController@tokenval');

//rutas para servicio de indicadores
Route::get('/indicadores', 'IndicadoresController@index');
Route::get('/indicadores/indexById/{id}', 'IndicadoresController@indexById');
Route::post('/indicadores', 'IndicadoresController@create');
Route::post('/indicadores/nuevaMeta', 'IndicadoresController@createNuevaMeta');
Route::post('/indicadores/metaPorLinea', 'IndicadoresController@createMetaPorLinea');
Route::get('/indicadores/{id}', 'IndicadoresController@getById');
Route::put('/indicadores', 'IndicadoresController@update');
Route::delete('/indicadores/{id}', 'IndicadoresController@delete');

//rutas de servicio de ajusteMetaGlobal
Route::post('/ajustemetaglobal', 'AjusteMetaGlobalController@create');

//rutas de servicio de estado
Route::post('/indicadores/estado', 'IndicadoresController@updateEstado');

//rutas de servicio de meta por linea
Route::post('/metaPorLinea/set', 'MetaPorLineaController@setMetasXLinea');
Route::post('/metaPorLinea/getLineasXMeta', 'MetaPorLineaController@getLineasXMeta');
Route::post('/metaPorLinea/getlineMeta', 'MetaPorLineaController@getlineMeta');
Route::get('/metaPorLinea', 'metaPorLineaController@index');
Route::put('/metaPorLinea', 'metaPorLineaController@update');
Route::delete('/metaPorLinea/{id}', 'metaPorLineaController@delete');
Route::post('/metaPorLinea/getYearsByLine', 'metaPorLineaController@getYearsByLine');

//rutas para servicio de ejecución Indicador
Route::get('/ejecucionIndicador', 'EjecucionIndicadorController@index');
Route::post('/ejecucionIndicador', 'EjecucionIndicadorController@create');
Route::get('/ejecucionIndicador/{id}', 'EjecucionIndicadorController@getById');
Route::put('/ejecucionIndicador', 'EjecucionIndicadorController@update');
Route::delete('/ejecucionIndicador/{id}', 'EjecucionIndicadorController@delete');
Route::post('/ejecucionIndicador/metasEsperadasPormes', 'EjecucionIndicadorController@metasEsperadasPormes');
Route::post('/ejecucionIndicador/getInformationLine', 'EjecucionIndicadorController@getInformationLine');
Route::post('/ejecucionIndicador/getMetasEsperadasPorLineaPorAnio', 'EjecucionIndicadorController@getMetasEsperadasPorLineaPorAnio');
Route::post('/ejecucionIndicador/getIndicadoresMetaLinea', 'EjecucionIndicadorController@getIndicadoresMetaLinea');


//rutas para servicio de Meta Esperada en Línea
Route::get('/metaEsperadaEnLinea', 'MetaEsperadaEnLineaController@index');
Route::post('/metaEsperadaEnLinea', 'MetaEsperadaEnLineaController@create');
Route::get('/metaEsperadaEnLinea/{id}', 'MetaEsperadaEnLineaController@getById');
Route::put('/metaEsperadaEnLinea', 'MetaEsperadaEnLineaController@update');
Route::delete('/metaEsperadaEnLinea/{id}', 'MetaEsperadaEnLineaController@delete');
Route::post('/metaEsperadaEnLinea/getMetasEsperadasPorLineaPorAnio', 'MetaEsperadaEnLineaController@getMetasEsperadasPorLineaPorAnio');
Route::post('/metaEsperadaEnLinea/getIndicadoresMetaLinea', 'MetaEsperadaEnLineaController@getIndicadoresMetaLinea');
Route::post('/metaEsperadaEnLinea/valorMetaEsperada', 'MetaEsperadaEnLineaController@valorMetaEsperada');
Route::get('/metaEsperadaEnLinea/metasPorLineaId', 'MetaEsperadaEnLineaController@metasPorLineaId');

//Rutas para servicio de indicadores por Meta por Año

Route::get('/indicadorMetaAno', 'IndicadorMetaAnoController@index');
Route::post('/indicadorMetaAno', 'IndicadorMetaAnoController@create');
Route::post('/indicadorMetaAno/createMetaGlobalYear','IndicadorMetaAnoController@createMetaGlobalYear');
Route::post('/indicadorMetaAno/getMetaGlobalById/{id}', 'IndicadorMetaAnoController@getMetaGlobalById');
Route::post('/indicadorMetaAno/getYears', 'IndicadorMetaAnoController@getYears');
Route::get('/indicadorMetaAno/getIndicadoresYears/{id}', 'IndicadorMetaAnoController@getIndicadoresYears');
Route::put('/indicadorMetaAno', 'IndicadorMetaAnoController@update');
Route::delete('/indicadorMetaAno/{id}', 'IndicadorMetaAnoController@delete');
Route::post('/indicadorMetaAno/getMetaGlobalByIndicador', 'IndicadorMetaAnoController@getMetaGlobalByIndicador');

//Rutas para los servicios de Detalle Ejecucion Indicador


Route::get('/detalleEjecucionIndicador', 'DetalleEjecucionIndicadorController@index');
Route::post('/detalleEjecucionIndicador/createDetalleGeneral', 'DetalleEjecucionIndicadorController@createDetalleGeneral');
Route::post('/detalleEjecucionIndicador/getInforamtionByExecute', 'DetalleEjecucionIndicadorController@getInforamtionByExecute');
Route::post('/detalleEjecucionIndicador', 'DetalleEjecucionIndicadorController@create');
Route::get('/detalleEjecucionIndicador/{id}', 'DetalleEjecucionIndicadorController@getById');
Route::put('/detalleEjecucionIndicador', 'DetalleEjecucionIndicadorController@update');
Route::delete('/detalleEjecucionIndicador/{id}', 'DetalleEjecucionIndicadorController@delete');


//Rutas para los eventos

Route::get('/evento', 'EventoController@index');
Route::get('/evento/consult', 'EventoController@consult');
Route::post('/evento', 'EventoController@create');
Route::get('/evento/{id}', 'EventoController@getById');
Route::put('/evento', 'EventoController@update');
Route::delete('/evento/{id}', 'eventoController@delete');

//Rutas de categorias de eventos

Route::get('/categoriaevento', 'CategoriaEventoController@index');
Route::post('/categoriaevento', 'CategoriaEventoController@create');
Route::put('/categoriaevento', 'CategoriaEventoController@update');
Route::delete('/categoriaevento/{id}', 'CategoriaEventoController@delete');

//Rutas de metalineacentro

Route::get('/metalineacentro', 'MetaLineaCentroController@index');
Route::post('/metalineacentro', 'MetaLineaCentroController@create');
Route::put('/metalineacentro', 'MetaLineaCentroController@update');
Route::delete('/metalineacentro/{id}', 'MetaLineaCentroController@delete');

//Rutas de proyectoevaluar
Route::get('/proyectoevaluar', 'ProyectoEvaluarController@index');
Route::get('/proyectoevaluarCentro/{centro}', 'ProyectoEvaluarController@centro');
Route::post('/proyectoevaluar', 'ProyectoEvaluarController@create');
Route::put('/proyectoevaluar', 'ProyectoEvaluarController@update');
Route::put('/proyectoevaluarevaluado', 'ProyectoEvaluarController@check');
Route::delete('/proyectoevaluar/{id}', 'ProyectoEvaluarController@delete');

//Rutas de sistemagestion
Route::get('/sistemagestion', 'sistemagestionController@index');
Route::post('/sistemagestion', 'sistemagestionController@create');
Route::put('/sistemagestion', 'sistemagestionController@update');
Route::delete('/sistemagestion/{id}', 'sistemagestionController@delete');

