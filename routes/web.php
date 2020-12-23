<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FEQcontroller;

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

// Route::get('FEQ',[FEQcontroller::class,'index']);


Route::get('/FEQ/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('FEQ');
});



// Route::get('/FEQ/{locale}', function ($locale) {
//     if (! in_array($locale, ['en', 'dr', 'ps'])) {
//         abort(400);
//     }

//     App::setLocale($locale);

//    });