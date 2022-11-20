<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

// verbos http
// get -> accedido a traves de un petición del navegador
// post -> usado cuando enviamos peticiones a traves de un formulario
// patch
// delete
// options


// Route::get('/about', function(){
//     return "Hi";
// }); 

                //parametro opcional
// Route::get('/about/{id?}', function($id='Default'){
//     return "Hola mundo {$id}";
// });

// definiendo una regla

// Route::get('/about/{id?}', function($id='Default'){
//     return "Hola mundo {$id}";
// })->where('id','[0-9]+');

// with helpers

// Route::get('/about/{id?}', function($id='Default'){
//     return "Hola mundo {$id}";
// });


// para evitar quebrar todo el flujo de nuestra vista
// Route::get('/about', function(){
//     return route('about');
// })->name('about');

// responder a la petición que llegué a la ruta
// Route::any('/', function(){
//     return 'hi';
// });


// Route::prefix('admin') -> group(function(){
//     Route::get('/about', function(){
//         return 'About';
//     })->name('about');
// });


// Route::get('/', function(){
//     return view('welcome');
// });

// Route::get('/about', function(){

//     $name = "Gus";
    // array asociativo
    // return view('welcome', [
        //     'name'=> $name,
        //     'edad'=> $age,
        //     'job'=> $job,
    //     'genre'=> $genre,
    // ]);
    
    // forma más práctica con el helper compact
//     return view('welcome', compact('name'));
// });

// Route::get('/about', function (){
//     return view('welcome');
// })->name('about');

// Route::get('/about', function(){
//     $name = "Tovar";
//     $numbers = [1,2,4,5,6,7,8];
//     return view('welcome', compact('name', 'numbers'));
// })->name('about');

// Route::get('/', [HomeController::class, 'index']);


Route::resource('articles', ArticleController::class);