<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\UserAdmin\UserAdminController;
use App\Http\Controllers\Site\Product\ProductController as ProductProductController;
use App\Http\Controllers\Site\SiteController;
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

// Route::get('/', function () {
//     return view('welcome');
//     // $user = UserAdmin::all()->toArray();
//     // dd($user);
// });
Route::group(['prefix'=>'/adminlogin' , 'middleware'=>'CheckLoginAdmin'],function(){
    Route::get('/login',[AuthController::class,'login'])->name('adminlogin.login'); 
    Route::post('/login',[AuthController::class,'postlogin'])->name('login.post'); 
}); 
Route::post('/logout',[AdminController::class ,'logout'])->name('admin.post.logout');
// ,'middleware'=>'CheckAdmin'
// Route::group(['prefix'=>'admin','middleware'=>'CheckAdmin'],function(){
Route::group(['prefix'=>'admin', 'middleware'=>'CheckAdmin'],function(){

    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    Route::group(['prefix'=>'product'],function(){
        Route::get('/',[ProductController::class,'index']);
        Route::get('/create',[ProductController::class,'create']);
        Route::post('insert',[ProductController::class,'insert']);
        Route::get('/edit/{id}',[ProductController::class,'edit']);
        Route::post('/update/{id}',[ProductController::class,'update']);
        Route::get('/delete/{id}',[ProductController::class,'delete']);
    });
    Route::group(["prefix"=>"category"],function(){
        Route::get("/",[CategoryController::class,"index"]);
        Route::get("/create",[CategoryController::class,"create"]);
        Route::post("/insert",[CategoryController::class,"insert"]);
        Route::get("/edit/{id}",[CategoryController::class,"edit"]);
        Route::post("/update/{id}",[CategoryController::class,"update"]);
        Route::get("/delete/{id}",[CategoryController::class,"deleteitem"]);
    });
    Route::group(['prefix'=>'user'],function(){
        Route::get('/',[UserController::class,'index']);
        Route::get('/create',[UserController::class,'create']);
        Route::post('insert',[UserController::class,'insert']);
        Route::get('/edit/{id}',[UserController::class,'edit']);
        Route::post('/update/{id}',[ProductController::class,'update']);
        Route::get('/delete/{id}',[UserController::class,'delete']);
    });
    Route::group(['prefix'=>'useradmin'],function(){
        Route::get('/',[UserAdminController::class,'index']);
        Route::get('/create',[UserAdminController::class,'create']);
        Route::post('/insert',[UserAdminController::class,'insert']);
        Route::get('/edit/{id}',[UserAdminController::class,'edit']);
        Route::post('/update/{id}',[UserAdminController::class,'update']);
        Route::get('/delete/{id}',[UserAdminController::class,'delete']);
    });
});

//FRONTEND

Route::group(['prefix'=>'/'],function(){
    Route::get('/',[SiteController::class,'index']);
    Route::get('/detail/{str}.html',[SiteController::class,'detail']);
    Route::group(['prefix'=>'menu'],function(){
        Route::get('/',[ProductProductController::class,'menudefault']);
        Route::get('/{str}.html',[ProductProductController::class,'menu']);

    });

});