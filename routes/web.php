<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';



//---------------------------rutas promociones---------------------JHOEL--------------------------//
Route::middleware('auth')->group(function () {
    Route::resource('/promocion', PromocionController::class)->names('promocion');
});
//---------------------------rutas promociones---------------------JHOEL--------------------------//

//---------------------------rutas promociones---------------------JHOEL--------------------------//
Route::middleware('auth')->group(function () {
    Route::resource('/role', RoleController::class)->names('role');
});
//---------------------------rutas promociones---------------------JHOEL--------------------------//