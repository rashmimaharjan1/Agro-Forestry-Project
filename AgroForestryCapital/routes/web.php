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
Route::get('/', function () {
    return view('home.home');
});

Route::get('home', function () {
    return view('home.home');
});
Route::get('farmlist', function () {
    return view('pages.farmlist');
});
Route::get('AdvisoryBoard', function () {
    return view('team.AdvisoryBoard');
});
Route::get('productlist', function () {
    return view('pages.productlist');
});
Route::get('productlistDetails', function () {
    return view('pages.productlistDetails');
});
Route::get('aboutus', function () {
     return view('about.aboutus');
 });
Route::get('expert', function () {
     return view('services.expert');
 });
Route::get('our-advocacy', function () {
     return view('advocacy.our-advocacy');
 });
Route::get('executive-team', function () {
     return view('team.executive-team');
 });
Route::get('company', function () {
     return view('company');
 });
Route::get('profile', function () {
     return view('profile');
 });
Route::get('acheivement', function () {
     return view('acheivement');
 });
Route::get('test', function () {
     return view('test');
 });

