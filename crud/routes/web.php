<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\DepartmentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/create',[EmployeController::class,'createEmp'])->name('emp.create');
Route::get('/',[EmployeController::class,'showEmp'])->name('emp.show');
Route::get('/single/{id}',[EmployeController::class,'singleEmp'])->name('emp.single');
Route::get('/edit/{id}',[EmployeController::class,'editEmp'])->name('emp.edit');
Route::post('/update/{id}',[EmployeController::class,'updateEmp'])->name('emp.update');
Route::post('/delete',[EmployeController::class,'deleteEmp'])->name('emp.delete');

Route::get('/view',[DepartmentController::class,'showDept'])->name('emp.form');