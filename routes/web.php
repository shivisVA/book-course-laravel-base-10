<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Middleware\UserAccessDashboardMiddleware;
use Illuminate\Support\Facades\Route; 


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



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix'=>'dashboard','middleware'=>['auth',UserAccessDashboardMiddleware::class]],function(){

     //Paquete de Rutas Post
    Route::resource('post', PostController::class);

     //Rutas de las Categorías
    Route::get("/categories",[CategoryController::class,'index'])->name('categories.index');
    Route::get("/categories/create",[CategoryController::class,'create'])->name('categories.create');
    Route::post("/categories",[CategoryController::class,'store'])->name('categories.sotre');
    Route::get("categories/{category}",[CategoryController::class,'show'])->name('categories.show');
    Route::get("categories/{category}/edit",[CategoryController::class,'edit'])->name('categories.edit');
    Route::patch("categories/{category}",[CategoryController::class,'update'])->name('categories.update');
    Route::delete("categories/{category}",[CategoryController::class,'destroy'])->name('categories.destroy');
    Route::get('/', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

});

require __DIR__.'/auth.php';
