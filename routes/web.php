<?php

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
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| Article Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'article'], function () {
    Route::get('index', 'ArticleController@index')->name('article.index'); // Liste des articles

    Route::get('create', 'ArticleController@create')->name('article.create'); // Formulaire de création de article
    Route::post('store', 'ArticleController@store')->name('article.store'); // Enrégistrement de article

    Route::get('{id}/show', 'ArticleController@show')->name('article.show'); //Informations sur article

    Route::get('{id}/edit', 'ArticleController@edit')->name('article.edit'); //Formulaire d'édition de article
    Route::post('{id}/update', 'ArticleController@update')->name('article.update'); // Enregistrement des modification de article

    Route::post('destroy', 'ArticleController@destroy')->name('article.destroy'); // Suppression de article
    Route::post('destroyAll', 'ArticleController@destroyAll')->name('article.destroyAll'); // Suppression de plusieurs articles
});
