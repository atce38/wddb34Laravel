<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

include('admin.php');
Route::get('/', function () {
    return view('welcome');
});


Route::get('login',function(){
    echo "Hello Class!";
})->name('user.login');


Route::prefix('students')->group(function(){

    Route::get('/',[StudentController::class,'index'])->name('student.index');
    Route::get('/create',[StudentController::class,'create'])->name('student.create');
    Route::post('/store',[StudentController::class,'store'])->name('student.store');
    Route::get('/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
    Route::post('/update/{id}',[StudentController::class,'update'])->name('student.update');
    Route::get('/show',[StudentController::class,'show'])->name('student.show');
    Route::get('/delete/{id}',[StudentController::class,'delete'])->name('student.delete');

});

// Route::prefix('categories')->group(function(){

//     Route::get('/',[StudentController::class,'index'])->name('category.index');
//     Route::get('/create',[StudentController::class,'create'])->name('category.create');
//     Route::post('/store',[StudentController::class,'store'])->name('category.store');
//     Route::get('/edit/{id}/{name}',[StudentController::class,'edit'])->name('category.edit');
//     Route::post('/update/{id}',[StudentController::class,'update'])->name('category.update');
//     Route::get('/show',[StudentController::class,'show'])->name('category.show');
//     Route::get('/delete',[StudentController::class,'delete'])->name('category.delete');



// });














