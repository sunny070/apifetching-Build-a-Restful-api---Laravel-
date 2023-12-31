<?php

use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware'=>['auth'],'prefix' =>'dashboard'],function(){
    Route::group(['prefix' => '', 'as' => 'dashboard.'],function(){
        Route::get('/',[DashboardController::class,'index'])->name('index');
    });
    //Show
    Route::group(['prefix'=> 'show', 'as'=> 'show.'],function(){
        Route::get('/',[ShowController::class,'index'])->name('index');
        Route::get('/create',[ShowController::class,'create'])->name('create');
    });
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Route::get('/', [PageController::class,'index'])->name('index');
