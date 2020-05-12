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
    return view('welcome');
});
Route::get('/myvideos','pagescontroller@index')->name('main');
Route::get('/yoursuggetion','pagescontroller@yoursuggetion')->name('yoursuggetion');
Route::get('/mostviews','pagescontroller@mostviews')->name('mostviews');
Route::get('/search','pagescontroller@usersearch')->name('search');
Route::get('/categoryproducts/{category}','pagescontroller@allcategoryproduct')->name('allcategoryproduct');


Route::get('/admin','adminpagescontroller@adminlogin')->name('adminlogin');
Route::get('/dashboard','adminpagescontroller@index')->name('dashboard');
Route::get('/customerresquest','adminpagescontroller@customer')->name('customerresquest');
Route::get('/all','adminpagescontroller@all')->name('all');
Route::get('/deletereqst/{id}','adminpagescontroller@deletcustomerreqst')->name('delreqst');
Route::get('/deletechannel/{id}','adminpagescontroller@deletechannel')->name('delchan');
Route::get('/editchannel/{id}','adminpagescontroller@editchannel')->name('editchan');
Route::get('/deletecategory/{id}','adminpagescontroller@deletecategory')->name('delcat');
Route::get('/editcategory/{id}','adminpagescontroller@editcategory')->name('editcat');
Route::get('/deletevideos/{id}','adminpagescontroller@deletevideos')->name('delv');
Route::get('/editvideos/{id}','adminpagescontroller@editvideos')->name('editv');



Route::post('/suggestionstore','pagescontroller@store')->name('suggestionstore');
Route::post('/categorystore','adminpagescontroller@categorystore')->name('categorystore');
Route::post('/channel','adminpagescontroller@channel')->name('channel');
Route::post('/social/{id}','adminpagescontroller@updatesocial')->name('updatesocial');
Route::post('/editchannelstore/{id}','adminpagescontroller@editchannelstore')->name('editchannelstore');
Route::post('/editcategorystore/{id}','adminpagescontroller@editcategorystore')->name('editcategorystore');
Route::post('/addvideostore','adminpagescontroller@addvideostore')->name('addvideosstore');
Route::post('/dashboardstore/{id}','adminpagescontroller@dashboardstore')->name('dashboardstore');

Route::get('/addvideos','adminpagescontroller@add')->name('add');
Route::get('/addcategory','adminpagescontroller@addcategory')->name('addcategory');
Route::get('/addchannel','adminpagescontroller@addchannel')->name('addchannel');
Route::get('/addsocialmedia','adminpagescontroller@addmedia')->name('addsocialmedias');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
