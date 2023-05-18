<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CUController;

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
    return view('Welcome');
});

Route::get('/about', function () {
    echo "2141720167, Evan Fadhilah Dzulfikar";
});

Route::get('/articles/{id}', function ($id) {
    echo "Article page ".$id;
});  


//HOME
Route::get('/home', function () {
    return view('home');
});

//PRODUCT
Route::prefix('product')->group(function () {
    Route::get('/p1', function () {
        return view('product');
    });
});

//NEWS
Route::get('/news/{id}', function ($id) {
    if ($id == 1 ){
        return view('news');
    }
    else  {
        
    }
});

//PROGRAM
Route::prefix('program')->group(function () {
    Route::get('/p1', function () {
        return view('program');
    });
});

//ABOUTUS
Route::get('/aboutus', function () {
    return view('about-us');
});

//CONTACTUS
Route::resource('contact-us', CUController::class);