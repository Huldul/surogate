<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Models\Page;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PageControllerEn;

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

Route::get('/changeEn', [PageController::class, "changeEn"]);
Route::get('/changeRu', [PageController::class, "changeRu"]);

Route::get('/', [PageController::class, "index"]);
Route::get('/about', [PageController::class, "about"]);
Route::get('/employees', [PageController::class, "employees"]);
Route::get('/documentation', [PageController::class, "documentation"]);

Route::get('/price', [PageController::class, "pricekz"]);
Route::get('/priceru', [PageController::class, "priceru"]);
Route::get('/pricech', [PageController::class, "pricech"]);
Route::get('/priceot', [PageController::class, "priceot"]);

Route::get('/questions', [PageController::class, "questions"]);

Route::get('/news', [PageController::class, "news"]);
Route::get('/news-single/{page}', [PageController::class, "newspage"]);
Route::get('/partners', [PageController::class, "partners"]);

Route::get('/requirements-donor', [PageController::class, "requirements_donor"]);
Route::get('/requirements', [PageController::class, "requirements"]);

Route::get('/donor', [PageController::class, "donor"]);
Route::get('/surrogacy', [PageController::class, "surrogacy"]);
Route::get('/legislation', [PageController::class, "legislation"]);
Route::get('/contact', [PageController::class, "contacts"]);

Route::post('/postApplication', [ApplicationController::class, "add"]);

Route::group(['prefix' => 'eng'], function () {
    Route::get('/', [PageControllerEn::class, "index"]);
    Route::get('/about', [PageControllerEn::class, "about"]);
    Route::get('/employees', [PageControllerEn::class, "employees"]);
    Route::get('/documentation', [PageControllerEn::class, "documentation"]);

    Route::get('/price', [PageControllerEn::class, "pricekz"]);
    Route::get('/priceru', [PageControllerEn::class, "priceru"]);
    Route::get('/pricech', [PageControllerEn::class, "pricech"]);
    Route::get('/priceot', [PageControllerEn::class, "priceot"]);

    Route::get('/questions', [PageControllerEn::class, "questions"]);

    Route::get('/news', [PageControllerEn::class, "news"]);
    Route::get('/news-single/{page}', [PageControllerEn::class, "newspage"]);
    Route::get('/partners', [PageControllerEn::class, "partners"]);

    Route::get('/requirements-donor', [PageControllerEn::class, "requirements_donor"]);
    Route::get('/requirements', [PageControllerEn::class, "requirements"]);

    Route::get('/donor', [PageControllerEn::class, "donor"]);
    Route::get('/surrogacy', [PageControllerEn::class, "surrogacy"]);
    Route::get('/legislation', [PageControllerEn::class, "legislation"]);
    Route::get('/contact', [PageControllerEn::class, "contacts"]);

    Route::post('/postApplication', [ApplicationController::class, "add"]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
