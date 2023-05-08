<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'home']);


Route::get('Intelligence-artificielle-article',[HomeController::class,'getArticles'])->name('article');
Route::get('Intelligence-artificielle-article-get-{id}',[ArticleController::class,'getArticle'])->name('getArticle');
Route::get('Intelligence-artificielle-article-new',[ArticleController::class,'new']);
Route::post('Intelligence-artificielle-article-create',[ArticleController::class,'create']);
Route::post('Intelligence-artificielle-article-upload',[ArticleController::class,'uploadimage'])->name('ckeditor.upload');

Route::get('Intelligence-artificielle-Articles-All',[HomeController::class,'get_All_Articles'])->name('getAll_Articles');

Route::get('Intelligence-artificielle-article-modif-{id}',[ArticleController::class,'modifier']);
Route::post('Intelligence-artificielle-article-modifier',[ArticleController::class,'modifier_article']);
Route::get('Intelligence-artificielle-article-supp-{id}',[ArticleController::class,'supp'])->name('supp');

Route::get('Intelligence-artificielle-home',[HomeController::class,'home'])->name('home');
Route::get('Intelligence-artificielle-log',function () {
    return view('login');});
Route::post('Intelligence-artificielle-login',[HomeController::class,'login']);
Route::get('Intelligence-artificielle-deconnexion',[HomeController::class,'deconnexion'])->name('deconnexion');
