<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/test1', function () {
//     return view('test1');
// });

// Route::get('/test2', function () {
//     return view('test2');
// });

Route::get('/show1', [TestController::class, "show1"]);
Route::get('/show2', [TestController::class, "show2"]);
Route::get('/index', [TestController::class, "index"]);
Route::get('/test1', [TestController::class, "showTest"]);
Route::get('/test2', [TestController::class, "showTest2"]);

Route::get("/student" , [StudentController::class,"studentList"]);