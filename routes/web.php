<?php

use App\Http\Controllers\Backend\ChangePasswordController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MyFormController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\AjaxTestController;
use App\Http\Controllers\PopErrosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get("/main",function(){
return view('main');
});


// start of Laravel blade Forms
Route::get('forms',function(){
    return view('Users.myForms');
});
// end of Laravel blade Forms
// Route::get('/hello',function(){
//     return 'Hello World';
// });

// Route::get('', function(Request $request){

// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// user controller
Route::resource("/users",UserController::class);

// myForm controller
Route::resource('myforms',MyFormController::class);

// change password controller
Route::post('users/{user}/change-password',[ChangePasswordController::class,'change_password'])->name('users.change.password');

// country controller
Route::resource("/countries",CountryController::class);

// states controller
Route::resource("/states",StateController::class);

// cities controller
Route::resource("/cities",CityController::class);

// departments controller
Route::resource("/departments",DepartmentController::class);

Route::get('ajaxproductintakeindex', [AjaxTestController::class,'create']);
Route::post('ajaxproductintake', [AjaxTestController::class, 'storeAjax'])->name('productintake.save');

// the pop erros
// Route::get('theerrors', [PopErrosController::class, 'create']);
// Route::post('geterros', [PopErrosController::class, 'store'])->name('geterros.store');

Route::resource("/theerrors", PopErrosController::class);
Route::resource("/users", UserController::class);
