<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/username/{name}', function($name){
//     return "welcome to streamline ". $name;
// });

// route::get('/login/{cred}', function($cred){
//     return "plesase insert log-in ". $cred;
// });

route::get('/contact', function(){
    return view('contact');
});

route::get('/welcome', function(){
    return ('Welcome to streamline');
});

route::get('/', function(){
    return view('home');
});

route::get('/about', function(){
    return "about us ";
    // return view('about');
})->name('about');

route::get('/users/{id}', function($id){
    return 'User ID '.$id;
});

route::get('/product/{category?}/{item?}', function($category='category section. ', $item='item section'){
    return $category ." " . $item;
} );

Route::resource('patients', PatientController::class);

route::get('/trans', function(){
    return view('trans');
});

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('articles', ArticleController::class);
//Route::resource('tags', TagController::class);

