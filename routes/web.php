<?php

namespace App\Http\Controllers;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingController::class, 'landing'])->name('landing');

//users
Route::group(['prefix' => 'user'], function(){
    Route::get('/all', [UsersController::class, 'allUsers'])->name('allUsers');
    Route::get('/{userId}', [UsersController::class, 'singleUser'])->name('singleUser');
});

