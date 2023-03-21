<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\LoaicongthucController;
use App\Http\Controllers\Admin\CongthucController;
use App\Http\Controllers\Admin\LoaikhoahocController;
use App\Http\Controllers\Admin\KhoahocController;


Route::get('/admin/users/login', [LoginController::class, 'index']);
Route::post('/admin/users/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function(){
        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);   

         #Loaicongthuc
     Route::prefix('loaicongthuc')->group(function(){
        Route::get('add', [LoaicongthucController::class, 'create']);
        Route::post('add', [LoaicongthucController::class, 'store']);
        Route::get('list', [LoaicongthucController::class, 'index']);
        Route::post('edit/{loaicongthuc}', [LoaicongthucController::class, 'update']);
        Route::get('edit/{loaicongthuc}', [LoaicongthucController::class, 'show']);
        Route::DELETE('destroy', [LoaicongthucController::class, 'destroy']);
    }); 
        #Congthuc
    Route::prefix('congthuc')->group(function(){
        Route::get('add', [CongthucController::class, 'create']);
        Route::post('add', [CongthucController::class, 'store']);
        Route::get('list', [CongthucController::class, 'index']);
        Route::post('edit/{congthuc}', [CongthucController::class, 'update']);
        Route::get('edit/{congthuc}', [CongthucController::class, 'show']);
        Route::DELETE('destroy', [CongthucController::class, 'destroy']);
    }); 
    #Loaikhoahoc
    Route::prefix('loaikhoahoc')->group(function(){
        Route::get('add', [LoaikhoahocController::class, 'create']);
        Route::post('add', [LoaikhoahocController::class, 'store']);
        Route::get('list', [LoaikhoahocController::class, 'index']);
        Route::post('edit/{loaikhoahoc}', [LoaikhoahocController::class, 'update']);
        Route::get('edit/{loaikhoahoc}', [LoaikhoahocController::class, 'show']);
        Route::DELETE('destroy', [LoaikhoahocController::class, 'destroy']);
    }); 
     #Khoahoc
     Route::prefix('khoahoc')->group(function(){
        Route::get('add', [KhoahocController::class, 'create']);
        Route::post('add', [KhoahocController::class, 'store']);
        Route::get('list', [KhoahocController::class, 'index']);
        Route::post('edit/{khoahoc}', [KhoahocController::class, 'update']);
        Route::get('edit/{khoahoc}', [KhoahocController::class, 'show']);
        Route::DELETE('destroy', [KhoahocController::class, 'destroy']);
    }); 
        
    });
});