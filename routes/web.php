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
//Auth::routes(['register' => false]);




//=============   Frontend    =============
//=========================================
Route::get('/', 'ConstructionController@index')->name('/');
Route::get('/about', 'ConstructionController@about')->name('about');
Route::get('/services', 'ConstructionController@services')->name('services');
Route::get('/project', 'ConstructionController@project')->name('project');
Route::get('/contact', 'ConstructionController@contact')->name('contact');
Route::get('/project/details', 'ConstructionController@projectDetails')->name('project-details');

// mail
Route::post('contact/mail','ConstructionController@contactMail')->name('contact-mail');


//=============   Admin    =============
//======================================

Route::get('/home', 'AdminController@index')->name('home');

//top header
Route::get('/top/header', 'TopHeaderController@topHeader')->name('top-header');
Route::post('/update/top/header/{id}', 'TopHeaderController@updateTopHeader')->name('update-top-header');

//logo
Route::get('/logo', 'LogoController@logo')->name('logo');
Route::post('/update/logo/{id}', 'LogoController@logoUpdate')->name('update-logo');

//slider
Route::get('add/slider', 'SliderController@store')->name('add-slider');
Route::post('store/slider', 'SliderController@create')->name('store-slider');
Route::get('manege/slider', 'SliderController@show')->name('manege-slider');
Route::get('edit/slider/{id}', 'SliderController@edit')->name('edit-slider');
Route::post('update/slider/{id}', 'SliderController@update')->name('update-slider');
Route::get('delete/slider/{id}', 'SliderController@delete')->name('delete-slider');

//title
Route::get('choose','TitleController@choose')->name('choose');
Route::post('update/choose/{id}','TitleController@updateChoose')->name('update-choose');

Route::get('best/service','TitleController@bestService')->name('best-service');
Route::post('update/service/{id}','TitleController@updateService')->name('update-service');

Route::get('all/service','TitleController@allService')->name('all-service');
Route::post('update/all/service/{id}','TitleController@updateAllService')->name('update-all-service');

// Best Choose
Route::get('add/best/choose','BestChooseController@store')->name('add-best-choose');
Route::post('create','BestChooseController@create')->name('best-choose-create');
Route::get('manege/best/choose','BestChooseController@show')->name('manege-best-choose');
Route::get('edit/item/{id}','BestChooseController@edit')->name('edit-choose-item');
Route::post('update/best/choose/{id}','BestChooseController@update')->name('update-best-choose');
Route::get('delete/choose/item/{id}','BestChooseController@delete')->name('delete-choose-item');

// welcome
Route::get('welcome','WelcomeController@welcome')->name('welcome');
Route::post('update/welcome/{id}','WelcomeController@updateWelcome')->name('update-welcome');

// Project
Route::get('add/project','ProjectController@addProject')->name('add-project');
Route::post('store/project','ProjectController@store')->name('store-project');
Route::get('manege/project','ProjectController@manegeProject')->name('manege-project');
Route::get('edit/project/{id}','ProjectController@editProject')->name('edit-project');
Route::post('update/project/{id}','ProjectController@updateProject')->name('update-project');
Route::get('delete/project/image/{id}','ProjectController@deleteProjectImage')->name('delete-project-image');
Route::get('delete/full/project/{id}','ProjectController@deleteFullProject')->name('delete-full-project');
Route::get('project/details/{id}','ConstructionController@projectDetails')->name('project_details');

// Service
Route::get('add/service','ServiceController@create')->name('add-service');
Route::post('service/store','ServiceController@store')->name('store');
Route::get('edit/service/item/{id}','ServiceController@edit')->name('edit-service-item');
Route::post('service/update/{id}','ServiceController@update')->name('update');
Route::get('manege/service','ServiceController@show')->name('manege-service');
Route::get('delete/service/item/{id}','ServiceController@delete')->name('delete-service-item');

// Testimonial
Route::get('create/testi','ClientReviewController@create')->name('create-testi');
Route::post('testi/store','ClientReviewController@store')->name('testi-store');
Route::get('manege/testi','ClientReviewController@show')->name('manege-testi');
Route::get('edit/testi/{id}','ClientReviewController@edit')->name('edit-testi');
Route::post('update/testi/{id}','ClientReviewController@update')->name('update-testi');
Route::get('delete/item/{id}','ClientReviewController@delete')->name('delete-item');

// Overview
Route::get('focus','OverviewController@focus')->name('focus');
Route::post('update/focus/{id}','OverviewController@updateFocus')->name('update-focus');

Route::get('dedicated','OverviewController@dedicated')->name('dedicated');
Route::post('update/dedicated/{id}','OverviewController@updateDedicated')->name('update-dedicated');

Route::get('committed','OverviewController@committed')->name('committed');
Route::post('update/committed/{id}','OverviewController@updateCommitted')->name('update-committed');

// FAQs
Route::get('create/faq','FaqController@create')->name('create-faq');
Route::post('store/faq','FaqController@store')->name('store-faq');
Route::get('show/faq','FaqController@show')->name('show-faq');
Route::get('edit/faq/{id}','FaqController@edit')->name('edit-faq');
Route::post('update/faq/{id}','FaqController@update')->name('update-faq');
Route::get('delete/faq/{id}','FaqController@delete')->name('delete-faq');

// Happy Client
Route::get('create/happy','HappyClientController@create')->name('create-happy');
Route::post('store/happy/client','HappyClientController@store')->name('store-happy-client');
Route::get('show/happy','HappyClientController@show')->name('show-happy');
Route::get('edit/{id}','HappyClientController@edit')->name('edit-happy');
Route::post('update/happy/client/{id}','HappyClientController@update')->name('update-happy-client');
Route::get('delete/happy/{id}','HappyClientController@delete')->name('delete-happy');

































