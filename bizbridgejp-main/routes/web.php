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
    return view('pages.home');
});

Route::get('/home2', function () {
    return view('pages.home2');
});

Route::get('/overseas', function () {
    return view('pages.overseas');
});

Route::get('/ssw', function () {
    return view('pages.ssw');
});
Route::get('/translate', function () {
    return view('pages.translate');
});
Route::get('/survey_service', function () {
    return view('pages.overseas_survey');
});
Route::get('/local_partner', function () {
    return view('pages.overseas_local');
});

Route::get('/local_sales', function () {
    return view('pages.overseas_sales');
});
Route::get('/busines_matching', function () {
    return view('pages.overseas_matching');
});
Route::get('/ssw_excellent', function () {
    return view('pages.ssw_excellent');
});
Route::get('/ssw_intro', function () {
    return view('pages.ssw_intro');
});
Route::get('/interpretation', function () {
    return view('pages.translate_interpretation');
});
Route::get('/translate_service', function () {
    return view('pages.translate_service');
});
Route::get('/it_dev', function () {
    return view('pages.it_dev');
});

Route::get('/home_en', function () {
    return view('pages.home_en');
});
Route::get('/overseas_en', function () {
    return view('pages.overseas_en');
});
Route::get('/local_partner_en', function () {
    return view('pages.overseas_local_en');
});
Route::get('/survey_service_en', function () {
    return view('pages.overseas_survey_en');
});
Route::get('/local_sales_en', function () {
    return view('pages.overseas_sales_en');
});
Route::get('/busines_matching_en', function () {
    return view('pages.overseas_matching_en');
});
Route::get('/ssw_en', function () {
    return view('pages.ssw_en');
});
Route::get('/ssw_excellent_en', function () {
    return view('pages.ssw_excellent_en');
});
Route::get('/ssw_intro_en', function () {
    return view('pages.ssw_intro_en');
});
Route::get('/translate_en', function () {
    return view('pages.translate_en');
});
Route::get('/translate_interpretation_en', function () {
    return view('pages.translate_interpretation_en');
});
Route::get('/translate_service_en', function () {
    return view('pages.translate_service_en');
});
Route::get('/it_dev_en', function () {
    return view('pages.it_dev_en');
});
Route::get('/our_profile', function() {
    return view('pages.our_profile');
});
Route::get('/our_profile_en', function(){
    return view('pages.our_profile_en');
});
