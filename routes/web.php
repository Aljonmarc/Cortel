<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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
  return view('welcome.home');
});





Auth::routes();


Route::group(['middleware' => ['auth']], function () {
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


  //Manage Doctors by the Admin
  Route::get('/Doctors', [AdminController::class, 'viewDoctor'])->name('doctors.Doctor');
  Route::post('/saveDoctor', [AdminController::class, 'saveDoctor']);
  Route::get('/AddDoctors', [AdminController::class, 'addDoctor'])->name('doctors.addDoctor');
  Route::get('/updateDoctor/{id}', [AdminController::class, 'updateDoctor']);
  Route::post('/editDoctor/{id}', [AdminController::class, 'editDoctor']);
  Route::get('/deleteDoctor/{id}', [AdminController::class, 'deleteDoctor']);

  Route::get('/showappointment', [AdminController::class, 'showappointment'])->name('showappointment.showappointment');
  Route::get('/approved/{id}', [AdminController::class, 'approved']);
  Route::get('/canceled/{id}', [AdminController::class, 'canceled']);
  Route::get('/showdoctor', [AdminController::class,'showdoctor'])->name('doctors.showdoctor');
  


  Route::post('/appointment', [HomeController::class, 'appointment']);
  Route::get('/myappointment', [HomeController::class, 'myappointment'])->name('user.my_appointment');
  Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);
});
