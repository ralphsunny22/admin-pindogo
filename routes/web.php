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
    Route::get('/active', [UsersController::class, 'activeUsers'])->name('activeUsers');
    Route::get('/pending', [UsersController::class, 'pendingUsers'])->name('pendingUsers');
    Route::get('/banned', [UsersController::class, 'bannedUsers'])->name('bannedUsers');
    Route::get('/{userId}', [UsersController::class, 'singleUser'])->name('singleUser');
    Route::get('/edit/{userId}', [UsersController::class, 'editUser'])->name('editUser');
    Route::post('/edit/{userId}', [UsersController::class, 'editUserPost'])->name('editUserPost');
    Route::get('/{userId}/ban/{days}', [UsersController::class, 'banUser'])->name('banUser');
    Route::get('/{userId}/stop-ban', [UsersController::class, 'stopBan'])->name('stopBan');
    Route::get('/{userId}/delete', [UsersController::class, 'softDelete'])->name('softDelete');
    Route::get('/{userId}/destroy', [UsersController::class, 'forceDelete'])->name('forceDelete');
    Route::get('/{userId}/activate', [UsersController::class, 'activateUser'])->name('activateUser');
});

Route::get('/user-analytics', [UsersController::class, 'usersAnalytics'])->name('usersAnalytics');

