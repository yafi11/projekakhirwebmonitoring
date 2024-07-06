<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\QCmonitoringController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AuthenticationController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[AuthenticationController::class, 'login']);
Route::get('/logout',[AuthenticationController::class, 'logout'])->name('logout');

Route::group(['middleware'=>['auth']], function(){
    
    Route::get('/home',[DashboardController::class, 'index'])->name('home');

    Route::get('/progress',[ProgressController::class, 'index'])->name('progress.index');

    Route::get('/procurement',[ProcurementController::class, 'index'])->name('procurement.index');
    Route::get('/procurement/create',[ProcurementController::class, 'create'])->name('procurement.create');
    Route::post('/procurement',[ProcurementController::class, 'store'])->name('procurement.store');
    Route::get('/procurement/{id}/edit',[ProcurementController::class, 'edit'])->name('procurement.edit');
    Route::put('/procurement/{id}',[ProcurementController::class, 'update'])->name('procurement.update');
    Route::delete('/procurement/{id}',[ProcurementController::class, 'destroy'])->name('procurement.destroy');

    Route::get('/qcstatus',[QCmonitoringController::class, 'index'])->name('qcmonitor.index');
    Route::get('/qcstatus/{id}/edit',[QCmonitoringController::class, 'edit'])->name('qcmonitor.edit');
    Route::put('/qcstatus/{id}',[QCmonitoringController::class, 'update'])->name('qcmonitor.update');
    Route::delete('/qcstatus/{id}',[QCmonitoringController::class, 'destroy'])->name('qcmonitor.destroy');

    Route::get('/profile',[ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit',[ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile',[ProfileController::class, 'update'])->name('profile.update');

    Route::get('/user',[UserController::class, 'index'])->name('user.index');
    Route::get('/user/create',[UserController::class, 'create'])->name('user.create');
    Route::post('/user',[UserController::class, 'store'])->name('user.store');
    Route::delete('/user/{id}',[UserController::class, 'destroy'])->name('user.destroy');


});
