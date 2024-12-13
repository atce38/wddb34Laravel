<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

include('admin.php');
Route::get('/', function () {
    return view('welcome');
});


Route::get('profile',function(){
    // return User::select('departments.name as department','departments.description','users.*')
    // ->join('departments','departments.id','=','users.department_id')->find(auth()->user()->id);

    return auth()->user();
})->name('user.profile')->middleware('auth');

Route::get('users',function(Request $request){

    $department_id=$request->department_id;
    $s_earch=$request->s_earch;

    $departments=DB::table('departments')->get();
    $users=User::select('departments.name as department','departments.description','users.*')
    ->leftJoin('departments','departments.id','=','users.department_id');
    if(isset($department_id) && $department_id !=null)
    {
        $users->where('users.department_id','=',$department_id);
    }
    if(isset($s_earch) && $s_earch !=null)
    {
        $users->where('users.name','LIKE','%'.$s_earch.'%')->orWhere('departments.name','LIKE','%'.$s_earch.'%');
    }

    $users=$users->get();
    return view('user.index',compact('users','departments'));

});

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















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
