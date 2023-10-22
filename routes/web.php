<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/N-A/{name}', [PageController::class, 'presentGroom'])->name('present');
Route::get('/A-N/{name}', [PageController::class, 'presentBride'])->name('present');
Route::prefix('admin')->group(function(){
    Route::resource('weeding',App\Http\Controllers\WeedingController::class);
    Route::resource('weedinginvitation',App\Http\Controllers\WeedingInvitationController::class);
});
