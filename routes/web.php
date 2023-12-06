<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Models\Page;
use App\Http\Controllers\PageController;
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

Route::group(['prefix' => 'eng'], function () {
    Route::get('/', [PageController::class, "indexEn"]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
