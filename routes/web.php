<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\LoaicongthucController;
use App\Http\Controllers\Admin\CongthucController;


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
    
        
    });
});