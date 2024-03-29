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
Route::get('/', function () {
    return view('index');
});



Route::get('/index', 'HomeController@index')->name('index');
///////////////////////////Our Mision / Vision//////////////////////////////////////
Route::get('/mission/vision', 'HomeController@missionVision')->name('missionVision');

Route::get('/about/arect', 'HomeController@about')->name('about');
Route::get('/portfolio', 'PortfolioController@portfolios')->name('portfolios');
Route::get('/arect/services', 'ServiceController@services')->name('services');
Route::get('/arect/clients', 'ClientController@clients')->name('clients');

Route::get('/contact/arect', 'HomeController@contactus')->name('contactus');
Route::post('/contact', 'HomeController@contact')->name('contact');




Route::group(['middleware'=>['auth']], function (){


Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/delete/contact/{id}','AdminController@deletecontact')->name("deletecontact");
Route::get('/logout', 'AdminController@logout')->name("logout");

Route::get('/upload/banner/image', 'SliderController@uploadBannerImage')->name('uploadBannerImage');
Route::post('/banner',         'SliderController@banner')->name('banner');
Route::get('/manage/banner',   'SliderController@manageBanner')->name('manageBanner');

Route::get('/upload/services', 'ServiceController@uploadServices')->name('uploadServices');
Route::post('/service',        'ServiceController@service')->name('service');
Route::get('/manage/services', 'ServiceController@manageServices')->name('manageServices');

Route::get('/upload/client', 'ClientController@uploadClient')->name('uploadClient');
Route::post('/client',       'ClientController@client')->name('client');
Route::get('/manage/clients', 'ClientController@manageClient')->name('manageClient');
Route::get('/delete/client/{id}','ClientController@deleteClient')->name("deleteClient");

Route::get('/upload/about', 'HomeController@uploadAbout')->name('uploadAbout');
Route::post('/aboutpage',   'HomeController@aboutpage')->name('aboutpage');
Route::get('/manage/about', 'HomeController@manageAbout')->name('manageAbout');



Route::get('/past/projects','PortfolioController@uploadPortfolio')->name('uploadPortfolio');
Route::post('/portfolio', 'PortfolioController@portfolio')->name('portfolio');
Route::get('/manage/past/projects','PortfolioController@manageportfolio')->name('manageportfolio');
Route::get('/delete/portfolio/{id}','PortfolioController@deletePortfolio')->name("deletePortfolio");

Route::get('/ongoing/projects', 'OngoingController@ongoing')->name('ongoing');
Route::post('/ongoingProjects', 'OngoingController@ongoingProjects')->name('ongoingProjects');
Route::get('/manage/ongoing/projects','OngoingController@manageongoing')->name('manageongoing');
Route::get('/delete/projects/{id}','OngoingController@deleteProjects')->name("deleteProjects");

Route::get('/add/todo', 'Controller@addTodo')->name('addTodo');
Route::get('/manage/todo', 'AdminController@manageTodo')->name('manageTodo');
Route::get('/manage/todo', 'AdminController@manageTodo')->name('manageTodo');


Route::get('/task/board', 'ReportController@taskboard')->name('taskboard');

});