<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteFileRegistrar;

Route::get('/home', function () {
    return view('welcome');
})->name('home');
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['guest'])->group(function(){
    Route::get('/users/register',[UserController::class, 'register'])->name('registration');
    Route::post('/users/register',[UserController::class, 'handleRegistration'])->name('registration');
    Route::get('/users/login',[UserController::class, 'login'])->name('login');
    Route::post('/users/login',[UserController::class, 'handleLogin'])->name('login');
});
Route::middleware(['auth'])->group(function(){
    Route::prefix('articles')->group(function(){
        Route::get('/',[ArticleController::class, 'index'])->name('articles');
        Route::get('/create',[ArticleController::class, 'create'])->name('create');
        Route::post('/create/store',[ArticleController::class, 'store'])->name('insert');
        Route::get('/show',[ArticleController::class, 'show'])->name('show');
        Route::get('/edit',[ArticleController::class, 'edit'])->name('edit');
        Route::get('/destroy',[ArticleController::class, 'destroy'])->name('destroy');
        Route::post('/update',[ArticleController::class, 'update'])->name('update');
        Route::any('/show/{id}',[ArticleController::class, 'show'])->name('show1');
        Route::any('/edit/{id}',[ArticleController::class, 'edit'])->name('edit1');
        Route::any('/destroy/{id}',[ArticleController::class, 'destroy'])->name('destroy1');
        Route::any('/update/{id}',[ArticleController::class, 'update'])->name('update1');
        Route::get('/mine',[ArticleController::class, 'mine'])->name('mine');
        Route::get('/logout',[UserController::class, 'logout'])->name('logout');
    });
});
