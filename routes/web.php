<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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
Route::post('/retrieve-name',[DemoController::class,'RetrieveName']);
Route::get('/retrieve-user-agent',[DemoController::class,'UserAgent']);
Route::post('/custom-json-response',[DemoController::class,'CustomJsonResponse']);
Route::post('/upload',[DemoController::class,'UploadAvatar']);
Route::get('/retrieve-cookie',[DemoController::class,'RetrieveCookie']);
Route::post('/submit',[DemoController::class,'RetrieveEmail']);
