<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VcardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::controller(UserController::class)->middleware("auth")->group(function(){
    Route::get("/","index")->name('homepage');
});

Route::controller(VcardController::class)->middleware('auth')->group(function(){
    Route::post("/vcard/create","store")->name("vcard.store");
});


Route::controller(AuthController::class)->group(function(){
    Route::match(["get","post"],"/login","login")->name('signin');
    Route::match(["get","post"],"admin/login","adminLogin")->name('admin.login');
    Route::match(["get","post"],"/signup","register")->name("signup");
    Route::post("/logout","logout")->name("logout");
    Route::post("admin/logout","adminLogout")->name("admin.logout");
});

Route::controller(AdminController::class)->middleware('auth:admin')->group(function(){
    Route::get("admin/","dashboard")->name('dashboard');
    Route::get("admin/manage/user","manageUser")->name('admin.users');
    Route::get("admin/manage/vcard","manageVcard")->name('admin.vcards');
});