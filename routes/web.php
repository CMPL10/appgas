<?php

use Illuminate\Support\Facades\Route;
use App\Http\Cotrollers\shazamController;

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

/*
Route::get('/', function () {
    return view('welcome');
});)
*/

//Route::get("/porfiles","App\\Http\\Controllers\\shazamController@index");

Route::get("/user/{id}", [shazamController::class,"index"]);

Route::get('/', function (){
    return view('appgas');
});