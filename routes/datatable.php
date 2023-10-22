<?php

use Illuminate\Support\Facades\Route;

Route::post('weeding',[App\Http\Controllers\WeedingController::class,'datatable'])->name('weeding.data');
Route::post('weedinginvitation',[App\Http\Controllers\WeedingInvitationController::class,'datatable'])->name('weedinginvitation.data');
