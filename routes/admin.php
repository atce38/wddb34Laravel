<?php

use App\Http\Controllers\DepartmentController;

Route::middleware('isAdmin')->prefix('admin')->group(function(){

    Route::get('/',function(){
        return 'Hello Admin';
    });


    Route::resource('departments', DepartmentController::class);


});
