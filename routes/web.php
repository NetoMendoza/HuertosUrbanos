<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuiaController;
use App\Http\Controllers\SueloController;
use App\Http\Controllers\HuertoController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\MedidaController;
use App\Http\Controllers\PlantaController;
use App\Http\Controllers\AfinidadController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParametroController;
use App\Http\Controllers\TipoInsumoController;
use App\Http\Controllers\TipoPlantaController;
use App\Http\Controllers\TipoAfinidadController;
use App\Http\Controllers\RequerimientoController;
use App\Http\Controllers\TipoActividadController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/proyecto', function () {
    return view('cliente.proyecto');
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    Route::resource('suelos', SueloController::class)
        ->missing(function (Request $request) {
            return Redirect::route('suelos.index');
        });
    Route::resource('huertos', HuertoController::class)
        ->missing(function (Request $request) {
            return Redirect::route('huertos.index');
        });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(
        ['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => ''],
        function () {
            Route::resource('actividads', ActividadController::class)
                ->missing(function (Request $request) {
                    return Redirect::route('actividads.index');
                });
            Route::resource('afinidads', AfinidadController::class)
                ->missing(function (Request $request) {
                    return Redirect::route('afinidads.index');
                });

            Route::resource('guias', GuiaController::class)
                ->missing(function (Request $request) {
                    return Redirect::route('guias.index');
                });


            Route::resource('insumos', InsumoController::class)
                ->missing(function (Request $request) {
                    return Redirect::route('insumos.index');
                });
            Route::resource('medidas', MedidaController::class)
                ->missing(function (Request $request) {
                    return Redirect::route('medidas.index');
                });
            Route::resource('parametros', ParametroController::class)
                ->missing(function (Request $request) {
                    return Redirect::route('parametros.index');
                });
            Route::resource('proyectos', ProyectoController::class)
                ->missing(function (Request $request) {
                    return Redirect::route('proyectos.index');
                });
            Route::resource('requerimientos', RequerimientoController::class)
                ->missing(function (Request $request) {
                    return Redirect::route('requerimientos.index');
                });


            Route::resource('tipo-actividads', TipoActividadController::class)
                ->missing(function (Request $request) {
                    return Redirect::route('tipo-actividads.index');
                });

            Route::resource('tipo-afinidads', TipoAfinidadController::class)
                ->missing(function (Request $request) {
                    return Redirect::route('tipo-afinidads.index');
                });

            Route::resource('tipo-insumos', TipoInsumoController::class)
                ->missing(function (Request $request) {
                    return Redirect::route('tipo-insumos.index');
                });

            Route::resource('plantas', PlantaController::class)
                ->missing(function (Request $request) {
                    return Redirect::route('plantas.index');
                });
            Route::resource('tipo-plantas', TipoPlantaController::class)
                ->missing(function (Request $request) {
                    return Redirect::route('tipo-plantas.index');
                });
        }
    );

    Route::group(
        ['middleware' => 'role:cliente', 'prefix' => 'usuario', 'as' => ''],
        function () {
            Route::get('wizard-proyecto', [ProyectoController::class, 'wizardProyecto'])->name('wizard-proyecto');
            Route::post('validar-wizard', [ProyectoController::class, 'validarWizard'])->name('validar-wizard');
            Route::get('registro-proyecto', [ProyectoController::class, 'registroProyecto'])->name('registro-proyecto');
            Route::get('misproyectos', [ProyectoController::class, 'misProyectos'])->name('misproyectos');
            Route::post('update2', [ProyectoController::class, 'update2'])->name('update2');
            Route::post('store2', [ProyectoController::class, 'store2'])->name('store2');
            Route::post('destroy2', [ProyectoController::class, 'destroy2'])->name('destroy2');
            Route::post('/validar-nuevo-proyecto', [ProyectoController::class, 'validarNuevoProy'])->name('validar-nuevo-proyecto');
        }
    );
});



//Route::get('genreporte', [ClieDispController::class, 'genReporte'])->name('genreporte');
