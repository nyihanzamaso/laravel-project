<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostContoller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;

Route::get('/',[HomeController::class,'homepage'])->name('homepage');
Route::get('/contact_us',[HomeController::class,'contact_us'])->name('contact_us');
Route::get('/about_us',[HomeController::class,'about_us'])->name('about_us');


route::get('/home', [AdminController::class, 'index'])->name('home');
route::get('/userlist', [AdminController::class, 'userlist'])->name('userlist');
route::get('/userlist/{user}/edit', [AdminController::class, 'edit'])->name('user.edit');
route::put('/userlist/{user}/update', [AdminController::class, 'update'])->name('user.update');
route::delete('/userlist/{user}/destroy', [AdminController::class, 'destroy'])->name('user.destroy');
route::get('/add_user', [AdminController::class, 'add_user'])->name('add_user');
route::post('/add_user/create', [AdminController::class, 'create'])->name('add_user/create');

route::get('/userlist/{user}/view', [AdminController::class, 'view'])->name('user.view');


route::get('/device/{user}', [DeviceController::class, 'index'])->name('device');
route::post('/device/{user}/create', [DeviceController::class, 'assign'])->name('device.assign');

route::get('/device_list', [DeviceController::class, 'view_device_list'])->name('view_device_list');
route::get('/device_list/{device}/edit', [DeviceController::class, 'edit'])->name('device.edit');
route::put('/device_list/{device}/update', [DeviceController::class, 'update'])->name('device.update');

//route::get('/post', [PostContoller::class, 'index']);
//route::post('/create', [PostContoller::class, 'create'])->name('create');
