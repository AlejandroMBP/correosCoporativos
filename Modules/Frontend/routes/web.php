<?php

use Illuminate\Support\Facades\Route;
use Modules\Frontend\app\Http\Controllers\FrontendController;

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

Route::group([], function () {
    //main pages
    Route::get('/', [FrontendController::class, 'ott'])->name('frontend.ott');

});