<?php
namespace App\Http\Controllers;
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
Route::get('/add_job',[JobController::class,'show']);
Route::get('/jobs',[GitController::class,'gitjob']);
Route::get('/login_user',[logController::class,'view_login']);
Route::get('/add_comp',[companyController::class,'view_company']);
Route::get('/add_about',[aboutController::class,'view_about']);
Route::get('/add_contact',[contactController::class,'view_contact']);
Route::get('/courses',[coursesController::class,'create_courses']);
Route::get('/add_cv',[cvController::class,'create_cv']);
Route::get('/create_detalis',[detalieaController::class,'add_detalis']);
Route::get('/create_personal',[personalController::class,'view_personal']);
Route::get('/add_experince',[experinceController::class,'create_experince']);
Route::get('/add_Ed',[EdController::class,'create_Ed']);
Route::get('/create_skill',[skillsController::class,'view_skills']);
Route::get('/create_services',[servicesController::class,'view_services']);
