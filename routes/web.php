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

// Route::get('test', function () {
//     return view('Verset.test');
// })->name('test');

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

/*
|--------------------------------------------------------------------------
| Verset Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'verset'], function () {
    Route::get('index', 'VersetController@index')->name('verset.index'); // Liste des versets

    Route::get('create', 'VersetController@create')->name('verset.create'); // Formulaire de création de verset
    Route::post('store', 'VersetController@store')->name('verset.store'); // Enrégistrement de verset

    Route::get('{id}/show', 'VersetController@show')->name('verset.show'); //Informations sur verset

    Route::get('{id}/edit', 'VersetController@edit')->name('verset.edit'); //Formulaire d'édition de verset
    Route::post('{id}/update', 'VersetController@update')->name('verset.update'); // Enregistrement des modification de verset

    Route::post('destroy', 'VersetController@destroy')->name('verset.destroy'); // Suppression de verset
    Route::post('destroyAll', 'VersetController@destroyAll')->name('verset.destroyAll'); // Suppression de plusieurs versets
});

/*
|--------------------------------------------------------------------------
| Invite Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'invite'], function () {
    Route::get('index', 'InviteController@index')->name('invite.index'); // Liste des invites

    Route::get('create', 'InviteController@create')->name('invite.create'); // Formulaire de création de invite
    Route::post('store', 'InviteController@store')->name('invite.store'); // Enrégistrement de invite

    Route::get('{id}/show', 'InviteController@show')->name('invite.show'); //Informations sur invite

    Route::get('{id}/edit', 'InviteController@edit')->name('invite.edit'); //Formulaire d'édition de invite
    Route::post('{id}/update', 'InviteController@update')->name('invite.update'); // Enregistrement des modification de invite

    Route::post('destroy', 'InviteController@destroy')->name('invite.destroy'); // Suppression de invite
    Route::post('destroyAll', 'InviteController@destroyAll')->name('invite.destroyAll'); // Suppression de plusieurs invites
});

/*
|--------------------------------------------------------------------------
| Categorie Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'categorie'], function () {
    Route::get('index', 'CategorieController@index')->name('categorie.index'); // Liste des categories

    Route::get('create', 'CategorieController@create')->name('categorie.create'); // Formulaire de création de categorie
    Route::post('store', 'CategorieController@store')->name('categorie.store'); // Enrégistrement de categorie

    Route::get('{id}/show', 'CategorieController@show')->name('categorie.show'); //Informations sur categorie

    Route::get('{id}/edit', 'CategorieController@edit')->name('categorie.edit'); //Formulaire d'édition de categorie
    Route::post('{id}/update', 'CategorieController@update')->name('categorie.update'); // Enregistrement des modification de categorie

    Route::post('destroy', 'CategorieController@destroy')->name('categorie.destroy'); // Suppression de categorie
    Route::post('destroyAll', 'CategorieController@destroyAll')->name('categorie.destroyAll'); // Suppression de plusieurs categories
});
