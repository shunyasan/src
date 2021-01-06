<?php

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

//topページの表示
Route::get('/', 'MenuController@showTop')->name('top');

//一覧ページの表示
Route::get('/menu/list', 'MenuController@showList')->name('list');

//詳細ページの表示
Route::get('/menu/detail/{id}', 'MenuController@showDetail')->name('detail');


//追加ページの表示
Route::get('/menu/create', 'MenuController@showCreate')->name('create');

//名前データを登録する
Route::post('/menu/dish', 'MenuController@exeCreate')->name('dish');

//編集ページの表示
Route::get('/menu/edit/{id}', 'MenuController@showEdit')->name('edit');

//編集を更新する
Route::post('/menu/edit/update','MenuController@exeUpdate')->name('update');

//データを削除する
Route::post('/menu/delete/{id}','MenuController@exeDelete')->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//お気に入り表示
Route::get('/menu/favolist', 'MenuController@showFavorite')->name('favolist');

//お気に入り登録
Route::post('/menu/favorite/{menu}', 'MenuController@exeFavorite')->name('favorite');

//お気に入り削除
Route::post('/menu/unfavorite/{menu}', 'MenuController@exeUnFavorite')->name('unfavorite');

//ランダムページ表示
Route::get('/menu/random', 'MenuController@showRandom')->name('random');
