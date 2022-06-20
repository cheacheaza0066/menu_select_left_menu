<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\leftMenuController;
use App\Http\Controllers\menuController;
use App\Models\leftmenu;
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
    return view('login');
});
Route::get('/Home',[HomeController::class,'index'])->name('home');
// Route::get('/App1',[HomeController::class,'app1'])->name('app1');
// Route::get('/App2',[HomeController::class,'app2'])->name('app2');
// Route::get('/App3',[HomeController::class,'app3'])->name('app3');
// Route::get('/App4',[HomeController::class,'app4'])->name('app4');
// Route::get('/App5',[HomeController::class,'app5'])->name('app5');
// Route::get('/App6',[HomeController::class,'app6'])->name('app6');
// Route::get('/App7',[HomeController::class,'app7'])->name('app7');
// Route::get('/App8',[HomeController::class,'app8'])->name('app8');
// Route::get('/App8',[HomeController::class,'app8'])->name('app8');

Route::get('App/{id}', [menuController::class, 'detail']);

Route::get('/menu/all',[menuController::class,'index'])->name('menuAll');
// Route::get('/menu/addPage',[menuController::class,'addMenu'])->name('pageAdd');
Route::post('/menu/add',[menuController::class,'store'])->name('menuAdd');
Route::get('/menu/edit/{id}',[menuController::class,'edit'])->name('editMenu');
Route::post('/menu/update/{id}',[menuController::class,'update'])->name('updateMenu');
Route::get('/menu/delete/{id}',[menuController::class,'destroy'])->name('deleteMenu');

Route::get('/leftmenu/all',[leftMenuController::class,'index'])->name('leftmenuAll');
Route::post('/leftmenu/add',[leftMenuController::class,'store'])->name('leftmenuAdd');

Route::get('/leftmenu/edit/{id}',[leftMenuController::class,'edit'])->name('editMenu');
Route::post('/leftmenu/update/{id}',[leftMenuController::class,'update'])->name('updateMenu');
Route::get('/leftmenu/delete/{id}',[leftMenuController::class,'destroy'])->name('deleteMenu');


