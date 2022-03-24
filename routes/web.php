<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Staff\DashboardController as StaffDashboardController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CourierController;

use Illuminate\Support\Facades\Route;
use App\Models\Courier;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('index');
});

Route::get('/search', [CourierController::class, 'search'])->name('search');

Auth::routes(['register' => false]);

Route::group(['as' => 'admin.','prefix' => 'admin','namespace' => 'Admin',
 'middleware' => ['auth', 'admin']], function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('company-master', [CompanyController::class, 'index'])->name('company.view');
        Route::post('company-master', [CompanyController::class, 'store'])->name('company.store');
        Route::put('company-master/update', [CompanyController::class, 'update'])->name('company.update');
        Route::get('courier', [CourierController::class, 'index'])->name('courier.index');
        Route::get('courier/create', [CourierController::class, 'create'])->name('courier.view');
        Route::post('courier', [CourierController::class, 'store'])->name('courier.store');
        Route::get('/courier/{courier}', [CourierController::class, 'show'])->name('courier.show');
        Route::get('/courier/{courier}/edit', [CourierController::class, 'edit'])->name('courier.edit');
        Route::patch('courier/{courier}', [CourierController::class, 'update'])->name('courier.update');
        Route::delete('courier/{courier}', [CourierController::class, 'destroy'])->name('courier.destroy');
 });

//Route::get('/admin/dashboard', [DashboardController::class, 'index']);

 Route::group(['as' => 'staff.','prefix' => 'staff','namespace' => 'Staff',
 'middleware' => ['auth', 'staff']], function(){

    Route::get('dashboard', [StaffDashboardController::class, 'index'])->name('dashboard');
 });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
