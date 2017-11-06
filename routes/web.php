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



Auth::routes();
Route::get('/admin-panel', 'HomeController@index');

Route::get('/','FrontController@index');

Route::get('/dashboard/skill/manage','SkillController@index');
Route::get('/dashboard/skill/create','SkillController@create');
Route::post('/dashboard/skill/store','SkillController@store');
Route::get('/dashboard/skill/unpublish/{unique_id}','SkillController@unPublish');
Route::get('/dashboard/skill/publish/{unique_id}','SkillController@publish');
Route::get('/dashboard/skill/edit/{unique_id}','SkillController@edit');
Route::PATCH('/dashboard/skill/update/{unique_id}','SkillController@update');
Route::DELETE('/dashboard/skill/destroy/{unique_id}','SkillController@destroy');


Route::get('/dashboard/testimonial/create','TestimonialController@create');
Route::post('/dashboard/testimonial/store','TestimonialController@store');
Route::get('/dashboard/testimonial/manage','TestimonialController@index');
Route::get('/dashboard/testimonial/unpublish/{unique_id}','TestimonialController@unPublish');
Route::get('/dashboard/testimonial/publish/{unique_id}','TestimonialController@publish');
Route::get('/dashboard/testimonial/edit/{unique_id}','TestimonialController@edit');
Route::PATCH('/dashboard/testimonial/update/{unique_id}','TestimonialController@update');
Route::DELETE('/dashboard/testimonial/destroy/{unique_id}','TestimonialController@destroy');


