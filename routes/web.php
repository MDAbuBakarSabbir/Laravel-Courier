<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\MarchantController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\OrderProcessController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Frontend Start -------------------------------------------------

Route::get('/coverage',[FrontendController::class,'coverage'])->name('frontend.coverage');
Route::get('/pricing',[FrontendController::class,'pricing'])->name('frontend.pricing');
Route::get('/about',[FrontendController::class,'about'])->name('frontend.about');
Route::get('/contact',[FrontendController::class,'contact'])->name('frontend.contact');
Route::get('/returnpolicy',[FrontendController::class,'returnpolicy'])->name('frontend.returnpolicy');
Route::get('/tramsandcondition',[FrontendController::class,'tramsandcondition'])->name('frontend.tramsandcondition');
Route::get('/parcel-tracking',[FrontendController::class,'tracking'])->name('frontend.tracking');


// Admin Dashboard start

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Operation

Route::get('/order-process',[OperationController::class,'order_process'])->name('order.process');
Route::get('/order-search',[OperationController::class,'order_search'])->name('order.search');


//

// Management

Route::get('/manage/add-admin',[ManagementController::class,'add_admin'])->name('add.admin');
Route::get('/manage/show-admin',[ManagementController::class,'show_admin'])->name('show.admin');

Route::get('/manage/add-hub',[ManagementController::class,'add_hub'])->name('add.hub');
Route::get('/manage/show-hub',[ManagementController::class,'show_hub'])->name('show.hub');

Route::get('/manage/add-deliveryMan',[ManagementController::class,'add_deliveryMan'])->name('add.deliveryMan');
Route::get('/manage/show-deliveryMan',[ManagementController::class,'show_deliveryMan'])->name('show.deliveryMan');

Route::get('/manage/marchant-info',[ManagementController::class,'marchant_info'])->name('show.marchant_info');


// Marchant Register Login
Route::get('/marchat-login',[FrontendController::class,'login'])->name('frontend.login');
Route::post('/marchat-login_req',[FrontendController::class,'login_req'])->name('frontend.login_req');


Route::get('/marchat-register',[FrontendController::class,'register'])->name('frontend.register');
Route::post('/marchat-register_store',[FrontendController::class,'register_store'])->name('frontend.register_store');


// Marchant Dashboard

Route::resource('/dashboard',MarchantController::class);
