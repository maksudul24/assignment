<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInfoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info',[StudentInfoController::class, 'index'])->name('StudentInfo.index');
Route::get('/info/create',[StudentInfoController::class, 'create'])->name('StudentInfo.create');
Route::post('/info',[StudentInfoController::class, 'store'])->name('StudentInfo.store');
Route::get('/info/{student}/edit',[StudentInfoController::class, 'edit'])->name('StudentInfo.edit');
Route::put('/info/{student}/update', [StudentInfoController::class, 'update'])->name('StudentInfo.update');
Route::delete('/info/{student}/destroy', [StudentInfoController::class, 'destroy'])->name('StudentInfo.destroy');