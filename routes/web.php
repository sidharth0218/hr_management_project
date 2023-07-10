<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AssetController;
use App\Http\Resources\UserResource;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PayscaleController;
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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::group(['middleware'=>'auth'], function() { 
    Route::get('employee',[EmployeeController::class,'index'])->name('employee.create');
    Route::post('employee/store',[EmployeeController::class,'store'])->name('employee.store');
    Route::post('department/store',[DepartmentController::class,'store'])->name('department.store');
    Route::get('employee/destroy/{id}',[EmployeeController::class,'destroy'])->name('employee.destroy');
    Route::post('employee/update',[EmployeeController::class,'update'])->name('employee.update');
    Route::get('employee/edit/{id?}',[EmployeeController::class,'edit'])->name('employee.edit');
    Route::get('department',[DepartmentController::class,'index'])->name('department.create');
    Route::post('department/store',[DepartmentController::class,'store'])->name('department.store');
    Route::get('department/destroy/{id}',[DepartmentController::class,'destroy'])->name('department.destroy');
    Route::get('designation-of-departments/{id}',[DepartmentController::class,'fetch_designation']);
    Route::get('designations',[DepartmentController::class,'designation'])->name('designation.create');
    Route::post('designation',[DepartmentController::class,'designation_store'])->name('designation.store');
    Route::get('create_assets',[AssetController::class,'index'])->name('asset.create');
    Route::post('assets/store',[AssetController::class,'store'])->name('asset.store');
    Route::get('edit_assets/{id}',[AssetController::class,'edit'])->name('edit_assets');
    Route::get('delete_assets/{id}',[AssetController::class,'delete'])->name('delete_assets');
    Route::get('assign_employee/{id}',[AssetController::class,'assiging_to_employee'])->name('assigning.employee');
    Route::post('assigned_to_employee',[AssetController::class,'assigned'])->name('assigned.store');
    Route::get('unassigned_employee/{id}',[AssetController::class,'unassiging_to_employee'])->name('unassigned.employee');
    Route::get('employee_payscale',[PayscaleController::class,'index'])->name('employee.payscale');
    Route::post('payscale',[PayscaleController::class,'store'])->name('payscale.store');
    Route::get('payscale/print/{id?}',[PayscaleController::class,'display'])->name('payscale.list');
    Route::post('print',[PayscaleController::class,'print'])->name('print');
    Route::get('orders', [OrderController::class, 'index']);
    Route::get('pdf',function(){
                return view('admin.r');
    });
});
