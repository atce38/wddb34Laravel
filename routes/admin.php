<?php

use App\Http\Controllers\DepartmentController;

Route::prefix('admin')->group(function(){

    Route::get('/',function(){
        return view('admin.master.dashboard');
    });


    Route::resource('departments', DepartmentController::class);


});
