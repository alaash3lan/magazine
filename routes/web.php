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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });
});

Route::resource('/', 'MagazineController');
Route::resource('/article', 'ArticleController');
Route::get('/category/{id}', 'MagazineController@show')->name('category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'IsAuthor'], function () {
    Route::resource('/authordashboard', 'DashAuthorController');
    Route::post('dashboard/create', 'ArticlesController@store');
    Route::get('authordashboard/edit/{id}', 'ArticlesController@edit')->name('editArticle');
    Route::patch('authordashboard/update/{id}', 'ArticlesController@update');
    Route::delete('authordashboard/delete/{id}', 'ArticlesController@destroy');
    Route::get('/authordashboard/myprofile', 'DashAuthorController@show')->name('myprofile');
});

Route::group(['middleware' => 'IsAdmin'], function () {
    Route::resource('/admindashboard', 'DashAdminController');
    Route::patch('/admindashboard/update/{id}', 'DashAdminController@update');
    Route::delete('admindashboard/delete/{id}', 'ArticlesController@destroy');
});

Route::get('/search', 'SearchController@search')->name('search');
