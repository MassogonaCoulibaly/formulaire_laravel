<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Voici où vous pouvez enregistrer les routes web de votre application.
| Ces routes sont chargées par le RouteServiceProvider au sein d'un groupe qui
| contient le groupe middleware "web". Créez maintenant quelque chose de génial !
|
*/

use App\Http\Controllers\EleveController;

Route::get('/index', [EleveController::class, 'liste']);
Route::post('/eleves', [EleveController::class, 'traitement_register']);
Route::get('/eleves', [EleveController::class, 'store'])->name('eleves.data');

Route::get('/create', function () {
    return view('create');
});

Route::get('/', function () {
    return view('welcome');
});



