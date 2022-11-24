<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublisherController;

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
//book and book detail
Route::get('/', [HomeController::class, 'index']);
Route::get('/bookdetail/{book:id}',[BookController::class, 'show']);

//category
Route::get('/category/{category:id}', [CategoryController::class, 'showCategory']);

//contact
Route::get('/contact', [ContactController::class, 'contact']);

//publisher and publisher detail
Route::get('/publisher', [PublisherController::class, 'showPublisher']);
Route::get('/publisherdetail/{book:id}',[PublisherController::class, 'showPublisherDetail']);

//404 page
Route::fallback(function () {
    return view('pages.404', [
        'title' => '404'
    ]);
});
