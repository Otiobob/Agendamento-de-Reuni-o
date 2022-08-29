<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\SectorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('auth')->group(function () {
    
    // Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
    
    Route::get('/agenda/{date}/create',[AgendaController::class, 'create'])->name('agenda.create');
        
    Route::resource('agenda', AgendaController::class);
   
    Route::resource('users', UserController::class);

    Route::resource('sectors', SectorController::class);

   


});



require __DIR__.'/auth.php';

