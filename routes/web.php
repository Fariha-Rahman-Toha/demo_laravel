<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController; 
use App\Http\Controllers\AdminController;/* newly formed route*/

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
    return view('home');
});
Route::get('/admi', [AdminController::class, 'dashboard']); // dashboard=function
Route::get('/dbform',[AdminController::class,'dbform']);
Route::post('/save_profile',[AdminController::class,'save_profile']);
Route::post('/save_client',[AdminController::class,'save_client']);
Route::get('/skill',[AdminController::class,'skill']);

Route::post('/save_skill',[AdminController::class,'save_skill']);


Route::get('/bio-data', [ProfileController::class, 'get_biodata']); 
// this format has been changed 
Route::get('/bio-data/edit/{id}', [ProfileController::class, 'view_bio_edit'])->name('editProfile');
Route::post('/save-profile',[ProfileController::class,'save_profile']);
 /*like before same just function name after @ go to procon and this func*/
 //Route::get('/template', [ProfileController::class, 'template']);
 Route::get('/viewbiodata', [ProfileController::class, 'viewbiodata']); 
 Route::post('/update-profile', [ProfileController::class, 'update_profile'])->name('updateProfile'); 
 Route::post('/delete-profile',[ProfileController::class,'delete_profile'])->name('deleteProfile');//post does not need id but get needs id

Route::get('/portfolio',[ProfileController::class,'portfolio']);
Route::get('/template1',[ProfileController::class,'template1']);
