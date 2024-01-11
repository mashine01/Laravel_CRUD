<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::action('slug',[ControllerName::class, 'ClassName/ControllerFunc])->name('route');
Route::GET("/employee", [EmployeeController::class, 'index'])->name('employee.index');
Route::GET("/employee/create", [EmployeeController::class, 'create'])->name('employee.create');
Route::POST("/employee/store", [EmployeeController::class, 'store'])->name('employee.store');
Route::GET("/employee/{employee}/edit", [EmployeeController::class, 'edit'])->name('employee.edit');
Route::PUT("/employee/{employee}/update", [EmployeeController::class, 'update'])->name('employee.update');
Route::DELETE("/employee/{employee}/destroy", [EmployeeController::class, 'destroy'])->name('employee.destroy');