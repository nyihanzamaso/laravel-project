<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostContoller;
use App\Http\Controllers\UserController;

Route::get('/',[HomeController::class,'homepage'])->name('homepage');
Route::get('/contact_us',[HomeController::class,'contact_us'])->name('contact_us');
Route::get('/about_us',[HomeController::class,'about_us'])->name('about_us');


route::get('/home', [AdminController::class, 'index'])->name('home');
route::get('/userlist', [AdminController::class, 'userlist'])->name('userlist');
route::get('/devices', [AdminController::class, 'device'])->name('devices');
route::get('/userlist/{user}/edit', [AdminController::class, 'edit'])->name('user.edit');
route::put('/userlist/{user}/update', [AdminController::class, 'update'])->name('user.update');


route::get('/post', [PostContoller::class, 'index']);
route::post('/create', [PostContoller::class, 'create'])->name('create');
