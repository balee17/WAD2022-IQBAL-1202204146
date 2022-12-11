<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShowroomsController;
use App\Http\Controllers\CrudController;


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
//     return view('home',['title'=>'home']);
// });

Route::get('/', [HomeController::class, 'home']);

Route::get('/profile/{id}', [ProfileController::class, 'profile'])->middleware('auth');

Route::post('/profile/{id}', [ProfileController::class, 'update'])->middleware('auth');



Route::get('/showrooms-car', [ShowroomsController::class, 'index'])->middleware('auth');
Route::get('/create-car', [ShowroomsController::class, 'create'])->middleware('auth');

Route::get('/showrooms/detail/{id}', [ShowroomsController::class, 'detail'])->middleware('auth');
Route::get('/showrooms/edit/{id}', [ShowroomsController::class, 'edit'])->middleware('auth');
Route::post('/showrooms/update/{id}', [ShowroomsController::class, 'update'])->middleware('auth');

Route::post('/delete-car', [ShowroomsController::class, 'destroy'])->name('deleteCar')->middleware('auth');
Route::post('/create-car', [ShowroomsController::class, 'store'])->middleware('auth');



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/showrooms', ShowroomsController::class)->middleware('auth');